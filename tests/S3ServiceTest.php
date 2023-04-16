<?php

namespace Tests;

use App\S3Service;
use PHPUnit\Framework\TestCase;

class S3ServiceTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_a()
    {
        $f = __DIR__ . '/../app/a.txt';

        $a = new S3Service();
        $a->put($f);

        $aa = $a->get('test');

        $this->assertEquals(
            (string)$aa['Body'],
            file_get_contents($f)
        );
    }
}