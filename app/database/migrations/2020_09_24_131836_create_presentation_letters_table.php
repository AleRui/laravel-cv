<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentationLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('presentation_letters')) {
            Schema::create('presentation_letters', function (Blueprint $table) {
                $table->id();
                $table->text('letter_title');
                $table->text('letter_body')->nullable();
                $table->softDeletes();
                $table->bigInteger('user_id')->unsigned();
                $table->foreign('user_id')
                    ->references('id')
                    ->on('users');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('presentation_letters')) {
            Schema::dropIfExists('presentation_letters');
        }
    }
}
