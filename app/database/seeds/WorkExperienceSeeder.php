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
                'job_title' => 'Web and Graphic Designer',
                'description' => '{"es": "Marketing, diseño web, diseño gráfico. Creación de packaging para productos, folletos, dossieres con Adobe Illustrator, Photoshop, InDesign... creación audiovisual de spots con Autodesk 3Ds Max, After Effects y Premiere... para ayuda al marketing de productos. Creación de web con HTML, CSS3 y Javascript."}',
                'company_name' => 'Enders-Colsman Ibérica S.L - España y Portugal',
                'begin_at' => Carbon::createFromDate(2011, 5, 1, 'Europe/Madrid'),
                'finish_at' => Carbon::createFromDate(2016, 4, 30, 'Europe/Madrid'),
                'user_id' => 1,
            ],
            '1' => [
                'job_title' => 'Web Developer Internship',
                'description' => '{"es": "Periodo de formación en Desarrollo de Aplicaciones Web con PHP, Javascript, CSS3 y HTML5. Gestión y mantenimiento WordPress. Gestión de temas y plantillas. Adaptación de plantillas."}',
                'company_name' => 'Solbyte',
                'begin_at' => Carbon::createFromDate(2018, 3, 15, 'Europe/Madrid'),
                'finish_at' => Carbon::createFromDate(2018, 6, 15, 'Europe/Madrid'),
                'user_id' => 1,
            ],
            '2' => [
                'job_title' => 'Software Developer',
                'description' => '{"es": "Desarrollo y mantenimiento web con PHP y Javascript, enfocadas a WordPress. Optimización para SEO. Modificación de plantillas, modificación de plugins. Tareas de implementación de software para IoT. Creación y gestión de VPC básicas en AWS: subnets, instancias, imágenes, conexiones, grupos de seguridad...."}',
                'company_name' => 'Future Conections Europe',
                'begin_at' => Carbon::createFromDate(2018, 12, 06, 'Europe/Madrid'),
                'finish_at' => Carbon::createFromDate(2019, 8, 31, 'Europe/Madrid'),
                'user_id' => 1,
            ],
            '3' => [
                'job_title' => 'Associate Software Developer',
                'description' => '{"es": "Tareas de desarrollo web con PHP, con los frameworks Drupal y Slim. Creación de módulos, eventListners, modificación de platillas Twig... en Drupal. Creación de Api-Rest en Slim, con Phinx para migraciones, Eloquent para el manejo de una bae de datos MySQL y otras librerías. Creación y modificación de Docker en local, y otras tareas como modificación de Jenkins para conectar las notificaciones de tareas con Slack."}',
                'company_name' => 'ITRS Group',
                'begin_at' => Carbon::createFromDate(2020, 2, 28, 'Europe/Madrid'),
                'finish_at' => Carbon::createFromDate(2019, 9, 10, 'Europe/Madrid'),
                'user_id' => 1,
            ],
            '4' => [
                'job_title' => 'Web Developer',
                'description' => '{"es": "Tareas de desarrollo web con PHP, con los frameworks Drupal y Slim. Creación de módulos, eventListners, modificación de platillas Twig... en Drupal. Creación de Api-Rest en Slim, con Phinx para migraciones, Eloquent para el manejo de una bae de datos MySQL y otras librerías. Creación y modificación de Docker en local, y otras tareas como modificación de Jenkins para conectar las notificaciones de tareas con Slack."}',
                'company_name' => 'Ingeniesía Desarrollo Cloud S.L',
                'begin_at' => Carbon::createFromDate(2020, 6, 8, 'Europe/Madrid'),
                'finish_at' => null,
                'user_id' => 1,
            ],
        ];

        foreach ($works as $work) {
            DB::table('work_experiences')->insert($work);
        }
    }
}
