<?php

namespace App;

use Aws\S3\ObjectUploader;
use Aws\S3\S3Client;

class S3Service
{

    private $awsClient;

    public function __construct()
    {
        $credentials = new \Aws\Credentials\Credentials('test', 'test');

        $this->awsClient = new S3Client([
            'credentials' => $credentials,
            'region' => 'us-east-1',
            'version' => 'latest',
            'endpoint' => 'http://localstack:4566',
            'use_path_style_endpoint' => true, // endpoint を path 形式とする
        ]);
    }

    public function put($path)
    {
        $this->awsClient->putObject([
            'Bucket' => 'test',
            'Key' => 'test',
            'Body' => fopen($path, 'r'),
            'bucket_endpoint' => 's3://localstack:4566/test',
            'endpoint' => 's3://localstack:4566/test',
        ]);
    }

    public function get($key)
    {
        $a = $this->awsClient->getObject([
            'Bucket' => 'test',
            'Key' => $key
        ]);

        return $a;
    }
}