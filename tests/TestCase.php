<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp()
    {
        parent::setUp();
        \Artisan::call('migrate:refresh');
        \Artisan::call('db:seed');
    }

    public function tearDown()
    {
        $this->beforeApplicationDestroyed(function () {
            \DB::disconnect();
        });
        parent::tearDown();
    }
}
