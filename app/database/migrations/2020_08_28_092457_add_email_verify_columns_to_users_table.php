<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailVerifyColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('active', 'activation_token')) {
            Schema::table('users', function (Blueprint $table) {
                $table->boolean('active')->default(false);
                $table->string('activation_token');
                $table->softDeletes();
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

        if (Schema::hasColumn('active', 'activation_token')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('active');
                $table->dropColumn('activation_token');
            });
        }
    }
}
