<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('i_emploid_phot')->unsigned();
            $table->string('c_name_phot');
            $table->string('c_extension_phot');
            $table->string('c_path_phot');
            $table->timestamps();
            $table->foreign('i_emploid_phot')
                  ->references('id')->on('reg_emplos')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reg_photos');
    }
}
