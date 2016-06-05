<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegEmplosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_emplos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('c_name_emplo');
            $table->enum('e_sex_emplo', ['M', 'F']);	
            $table->string('c_area_emplo');
            $table->date('d_datebirth_emplo');
            $table->string('c_email_emplo');
            $table->integer('i_phone_emplo');
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
        Schema::drop('reg_emplos');
    }
}
