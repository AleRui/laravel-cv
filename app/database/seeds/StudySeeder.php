<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studies = [
            '0' => [
                'study_title' => 'Bachiller de Ciencias de la Naturaleza y la Salud',
                'description' => '{"es": "Bachiller de Ciencias de la Naturaleza y la Salud."}',
                'study_center' => 'I.E.S. Miraya del Mar',
                'city_id' => null,
                'begin_at' => Carbon::createFromDate(1999, 9, 24, 'Europe/Madrid'),
                'finish_at' => Carbon::createFromDate(2001, 6, 15, 'Europe/Madrid'),
                'user_id' => 1,
            ],
            '1' => [
                'study_title' => 'Ingeniería Técnica en Diseño Industrial',
                'description' => '{"es": "El título de Graduado/a en Ingeniería en Diseño Industrial y Desarrollo del Producto te capacitará para diseñar productos de cualquier índole que combinen las prestaciones tecnológicas e industriales con las estéticas, culturales, funcionales, medioambientales y de calidad. En esta titulación abordarás conocimientos de electricidad, mecánica, electrónica, etc. para poder realizar un buen proyecto de diseño. En la formación del Ingeniero en Diseño Industrial y Desarrollo del Producto en esta especialidad es fundamental el desarrollo de la capacidad de análisis para captar fácilmente los problemas técnicos y, con los conocimientos adquiridos y la utilización de los medios de cálculo, diagnosis, medición, etc., facilitar la solución o soluciones a los mismos tanto individualmente como trabajando en equipo."}',
                'study_center' => 'E.U. Politécnica de Málaga',
                'city_id' => null,
                'begin_at' => Carbon::createFromDate(2001, 9, 24, 'Europe/Madrid'),
                'finish_at' => Carbon::createFromDate(2008, 6, 15, 'Europe/Madrid'),
                'user_id' => 1,
            ],
            '2' => [
                'study_title' => 'Ciclo Formativo de Grado Superior de Desarrollo de Aplicaciones Web, C.F.G.S. D.A.W',
                'description' => '{"es": "La competencia general de este título consiste en desarrollar, implantar, y mantener aplicaciones web, con independencia del modelo empleado y utilizando tecnologías específicas, garantizando el acceso a los datos de forma segura y cumpliendo los criterios de accesibilidad, usabilidad y calidad exigidas en los estándares establecidos.."}',
                'study_center' => 'I.E.S. Campanillas',
                'city_id' => null,
                'begin_at' => Carbon::createFromDate(2017, 9, 20, 'Europe/Madrid'),
                'finish_at' => Carbon::createFromDate(2019, 6, 15, 'Europe/Madrid'),
                'user_id' => 1,
            ],
        ];



        foreach ($studies as $study) {
            DB::table('studies')->insert($study);
        }
    }
}
