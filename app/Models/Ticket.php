<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

	protected $attributes = [
		'name' => null, 
		'description' => null, 
		'context' => null, 
		'browser' => null, 
		'tested_by_customer' => 0, 
		'type' => 'technical_problem', 
		'priority' => 'medium',
		'state' => 'new'
	];

	/**
     * The users that belong to the ticket.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
