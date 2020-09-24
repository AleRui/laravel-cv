<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('studies')) {
            Schema::create('studies', function (Blueprint $table) {
                $table->id();
                $table->text('study_title');
                $table->text('description')->nullable();
                $table->char('study_center');
                $table->bigInteger('city_id')->nullable()
                    ->unsigned(); // unsigned means: range 0 to n
                $table->timestamp('begin_at')->nullable();
                $table->timestamp('finish_at')->nullable();
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
        // Schema::dropIfExists('studies');
        if (Schema::hasTable('studies')) {
            Schema::dropIfExists('studies');
        }
    }
}
