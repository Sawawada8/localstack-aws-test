<?php

namespace App;

use Aws\S3\ObjectUploader;
use Aws\S3\S3Client;

class S3Service
{

    private $awsClient;

    public function __construct()
    {
        // $credentials = new \Aws\Credentials\Credentials('test', 'test');

        // $this->awsClient = new S3Client([
        //     'credentials' => $credentials,
        //     'region' => 'us-east-1',
        //     'version' => 'latest',
        //     'endpoint' => 'http://localstack:4566',
        //     'use_path_style_endpoint' => true, // endpoint を path 形式とする
        // ]);
    }
}