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
        Schema::create('taxis', function (Blueprint $table) {
            $table->integer('owner_id');
            $table->integer('admin_id')->default('0');
            $table->integer('chair_id')->default('0');
            $table->integer('marshall_id')->default('0');
            $table->integer('driver_id')->default('0');
            $table->integer('customer_id')->default('0');

            $table->increments('id');
            
            $table->string('registration')->unique();
            $table->string('model');
            $table->string('seater');

            $table->string('status');
            $table->string('reason')->default('');

            $table->string('association')->default('');

            $table->integer('dailyRevenue')->default('0');
            $table->integer('weeklyRevenue')->default('0');
            $table->integer('monthlyRevenue')->default('0');
            $table->integer('annuallyRevenue')->default('0');

            $table->string('routes')->default('');
            $table->string('ranking')->default('');
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
        Schema::dropIfExists('taxis');
    }
};
