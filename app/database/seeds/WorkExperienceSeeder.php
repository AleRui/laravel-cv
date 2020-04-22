<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $works = [
            '0' => [
                'job_title' => 'Associate Software Developer',
                'description' => '{"es": "Tareas de desarrollo web con PHP, con los frameworks Drupal y Slim. Creación de módulos, eventListners, modificación de platillas Twig... en Drupal. Creación de Api-Rest en Slim, con Phinx para migraciones, Eloquent para el manejo de una bae de datos MySQL y otras librerías. Creación y modificación de Docker en local, y otras tareas como modificación de Jenkins para conectar las notificaciones de tareas con Slack."}',
                'company_name' => 'ITRS Group',
                'begin_at' => Carbon::createFromDate(2020, 2, 28, 'Europe/Madrid'),
                'finish_at' => Carbon::createFromDate(2019, 9, 10, 'Europe/Madrid'),
                'user_id' => 1
            ],
        ];

        foreach ($works as $work) {
            DB::table('work_experience')->insert($work);
        }
    }
}
