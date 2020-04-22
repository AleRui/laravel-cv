<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPersonalDataColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
                $table->date('birthday')->nullable();
                $table->integer('city_id')->nullable();
                $table->string('phone', 9)->unique()->nullable();
                $table->string('github')->unique()->nullable();
                $table->string('website')->unique()->nullable();
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
        if (Schema::hasTable('users')) {
            if (Schema::hasColumn('users', 'birthday')) {
                Schema::table('users', function (Blueprint $table) {
                    $table->dropColumn('birthday');
                });
            }
            if (Schema::hasColumn('users', 'city_id')) {
                Schema::table('users', function (Blueprint $table) {
                    $table->dropColumn('city_id');
                });
            }
            if (Schema::hasColumn('users', 'phone')) {
                Schema::table('users', function (Blueprint $table) {
                    $table->dropColumn('phone');
                });
            }
            if (Schema::hasColumn('users', 'github')) {
                Schema::table('users', function (Blueprint $table) {
                    $table->dropColumn('github');
                });
            }
            if (Schema::hasColumn('users', 'website')) {
                Schema::table('users', function (Blueprint $table) {
                    $table->dropColumn('website');
                });
            }
        }
    }
}
