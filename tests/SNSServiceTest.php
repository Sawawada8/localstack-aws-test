<?php

namespace Tests;

use App\S3UploadUseCase;
use PHPUnit\Framework\TestCase;

class SNSServiceTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_a()
    {
        $f = __DIR__ . '/../app/a.txt';

        $a = new S3UploadUseCase();
        $a->put($f);

        $aa = $a->get('test');

        $this->assertEquals(
            (string)$aa['Body'],
            file_get_contents($f)
        );
    }
}