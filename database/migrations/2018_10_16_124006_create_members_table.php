<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{

    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('licence')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('driver_mobile')->nullable();
            $table->string('owner_mobile')->nullable();
            $table->string('driver_address')->nullable();
            $table->string('owner_address')->nullable();
            $table->string('auto_type')->nullable();
            $table->float('charge_rate')->nullable();
            $table->float('due_money')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('status')->default(1)->comment('1=Active, 0=Inactive');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('members');
    }
}
