<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();

			$table->string('name')->nullable(); 
			$table->text('description')->nullable();
			$table->text('context')->nullable();
			$table->enum('browser', [
				'chrome', 'firefox'
			])->nullable();
			$table->boolean('tested_by_customer')->nullable();
			$table->enum('type', [
				'technical_problem', 'other'
			])->nullable();
			$table->enum('priority', [
				'low', 'medium', 'high'
			])->nullable();
			$table->enum('state', [
				'new', 'closed'
			])->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
