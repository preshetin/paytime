<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PaytimeControllerTest extends TestCase
{
    public function testApiPaytime()
    {
        $data = [
            'text' => 'some text',
            'user_name' => 'petya'
        ];

        $response = $this->post('/api/paytime', $data);

        $response->assertJson(['text' => "Received text: 'some text' from petya"]);
    }
}
