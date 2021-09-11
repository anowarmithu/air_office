<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    // public function itListsTags()
    // {
    //     # code...
    // }


    public function test_example()
    {
        $response = $this->get('/api/tags');

        // dd(
        //     $response->json()
        // );

        $response->assertStatus(200);
        $this->assertNotNull($response->json('data')[0]['id']);
    }
}
