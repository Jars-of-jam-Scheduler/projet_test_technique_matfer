<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * Tests login module
 */
class UserLoginTest extends TestCase
{
	use RefreshDatabase;

    /**
     * Does login returns 200 with the right credentials?
     *
     * @return void
     */
    public function test_200_right_credentials()
    {
		$this->seed();

		$response = $this->postJson('/api/login', [
			'email' => 'a_dev@gmail.com',
			'password' => 'password'
		]);

        $response->assertStatus(200);
    }

	    /**
     * Does login returns 401 with correct credentials?
     *
     * @return void
     */
    public function test_401_bad_credentials()
    {
		$response = $this->postJson('/api/login', [
			'email' => 'a_dev@gmail.com',
			'password' => 'bad_password'
		]);


        $response->assertStatus(401);
    }
}
