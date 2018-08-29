<?php

namespace Adalessa\SQSJobless;

use Aws\Sqs\SqsClient;
use Illuminate\Container\Container;
use Illuminate\Queue\Jobs\SqsJob;

class JoblessJob extends SqsJob
{
    protected $class;
    public function __construct(
        Container $container,
        SqsClient $sqs,
        array $job,
        string $connectionName,
        string $queue,
        $class
    ) {
        parent::__construct($container, $sqs, $job, $connectionName, $queue);
        $this->class = $class;
    }

    public function getRawBody()
    {
        $realBody = $this->job['Body'];
        return json_encode([
            "job" => "Illuminate\Queue\CallQueuedHandler@call",
            "data" => [
                "commandName" => $this->class,
                "command" => serialize(new $this->class($realBody))
            ]
        ]);
    }
}