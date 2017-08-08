<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NarcoTest extends TestCase
{
    /**
     * NarcoList
     *
     * @return void
     */
    public function testNarcoList()
    {
        $this->json('GET', '/narcos')
            ->seeStatusCode(200)
            ->decodeResponseJson()
            ->seeJsonStructure([
                'data',
                'next_page_url'
            ]);
    }
}
