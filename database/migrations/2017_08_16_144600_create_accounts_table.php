<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts',function(Blueprint $table){
            $table->increments('account_id');
            $table->string('account_name');
            $table->string('contact_person');
            $table->string('phone_no');
            $table->string('email');
            $table->string('address');
            $table->integer('city_id');
            $table->integer('region_id');
            $table->integer('account_manager_id');
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
        //
    }
}
