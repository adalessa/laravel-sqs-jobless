<?php

namespace Adalessa\SQSJobless;

use Aws\Sqs\SqsClient;
use Illuminate\Queue\SqsQueue;

class JoblessQueue extends SqsQueue
{
    protected $class = null;
    public function __construct(SqsClient $sqs, string $default, string $prefix = '', $class = null)
    {
        $this->class = $class;
        parent::__construct($sqs, $default, $prefix);
    }

    public function pop($queue = null)
    {
        $response = $this->sqs->receiveMessage([
            'QueueUrl' => $queue = $this->getQueue($queue),
            'AttributeNames' => ['ApproximateReceiveCount'],
        ]);

        if (count($response['Messages']) > 0) {
            return new JoblessJob(
                $this->container,
                $this->sqs,
                $response['Messages'][0],
                $this->connectionName,
                $queue,
                $this->class
            );
        }
    }
}