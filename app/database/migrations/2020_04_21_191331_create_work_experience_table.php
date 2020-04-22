<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('work_experiences')) {
            Schema::create('work_experiences', function (Blueprint $table) {
                $table->id();
                $table->text('job_title');
                $table->text('description')->nullable();
                $table->char('company_name');
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
        if (Schema::hasTable('work_experiences')) {
            Schema::dropIfExists('work_experiences');
        }
    }
}
