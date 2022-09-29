<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Tests\TestCase;

/**
 * Tests the creation of a ticket
 */
class TicketCreationTest extends TestCase
{
	use RefreshDatabase;


    public function test_200_creation()
    {
		Sanctum::actingAs(
			User::factory()->create([
				'name' => 'A Developer',
				'email' => 'a_dev2@gmail.com',
				'password' => Hash::make('password'),
				'role' => 'customer'
			]),
			['*']
		);

		$response = $this->postJson('/api/tickets', [
			'name' => 'My Ticket', 
			'description' => 'My Description',  
			'context' => 'My Context',   
			'browser' => 'chrome', 
			'tested_by_customer' => 0, 
			'type' => 'technical_problem', 
			'priority' => 'medium',
			'state' => 'new'
		]);

        $response->assertStatus(200);
    }
}
