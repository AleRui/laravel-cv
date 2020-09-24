<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresentationLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $presentationLetters = [
            '0' => [
                'letter_title' => '{"es": "Carta de Presentación Alejandro Ruiz."}',
                'letter_body' => '{"es": "A la atención del director/a de RRHH o persona encargada de lascontratación en su empresa: Mi nombre es Alejandro Ruiz, soy desarrollador de software y leescribo para solicitar un puesto de trabajo. Estoy interesado en su empresa, creo que reúne todas las cualidadesque me interesan para mi desarrollo, tanto laboral, como personal, porel prestigio propio de la empresa y la calidad en sus proyectos yambiente laboral.Me considero trabajador y proactivo, con buena predisposición para elaprendizaje y con la mentalidad de solucionar las tareas que se meencarguen. Me integro con facilidad en grupos de trabajo, aportandoideas y ayuda a mis compañeros. Definiría mis principales características laborales como cuidar losdetalles y ser ordenado a la hora de realizar un proyecto, tratar serpuntual en la entrega de tareas, mentener buena disposición con eltrato a clientes y querer buscar la mejor solución para el presente y futuro. Espero que cuenten conmigo, sin más, muchas gracias por su tiempo yatención. Cordiales saludos. Alejandro Ruiz."}',
                'user_id' => 1,
            ],
        ];



        foreach ($presentationLetters as $presentationLetter) {
            DB::table('presentation_letters')->insert($presentationLetter);
        }
    }
}
