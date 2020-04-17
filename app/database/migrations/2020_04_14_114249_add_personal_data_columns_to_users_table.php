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
        $columns = [
            'birthday',
            'city_id',
            'phone',
            'github',
            'website',
        ];

        foreach ($columns as $columnName) {
            if (!empty($columnName)
                && Schema::hasColumn('users', $columnName)) {
                Schema::table('users', function (Blueprint $table, $columnName) {
                    $table->dropColumn($columnName);
                });
            }
        }
    }
}
