<?php

namespace Adalessa\SQSJobless;

use Aws\Sqs\SqsClient;
use Illuminate\Queue\Connectors\SqsConnector;
use Illuminate\Support\Arr;

class JoblessConnector extends SqsConnector
{
    public function connect(array $config)
    {
        $config = $this->getDefaultConfiguration($config);

        if ($config['key'] && $config['secret']) {
            $config['credentials'] = Arr::only($config, ['key', 'secret']);
        }

        return new JoblessQueue(
            new SqsClient($config),
            $config['queue'],
            Arr::get($config, 'prefix', ''),
            $config['class']
        );
    }
}