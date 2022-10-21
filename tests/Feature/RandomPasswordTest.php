<?php

namespace Tests\Feature;

use Tests\TestCase;
use Inertia\Testing\AssertableInertia as Assert;

class RandomPasswordTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home_screen_can_be_rendered()
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
    }


    public function test_that_a_different_password_is_returned()
    {
        $response = $this->get(route('home'));

        /* dd($response); */

        $response->assertInertia(
            fn (Assert $page) => $page
                // Checking a root-level property
                ->has('rand_password')
        );
    }
}
