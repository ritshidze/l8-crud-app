<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyEmployeesRemoveDob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function ($table) {
            $table->boolean('deleted')->after('phone_number');
            $table->dropColumn(['date_of_birth']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function($table) {
            $table->boolean('deleted');
            $table->date('date_of_birth');
         });

    }
}
