<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/welcome');

        $response->assertStatus(200);


        $post = Post::withTrashed()->get();
        $this->assertCount(100, $post);
    }

    /**
     * @test
     *
     * Valid test because '@test' is in JavaDoc Comment
     */
    public function nameForTest()
    {
        $this->assertTrue(true);
    }


    /**
     * Valid test because function name starts with test
     */
    public function testName()
    {
        $this->assertTrue(true);
    }



}
