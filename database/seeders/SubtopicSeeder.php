<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\Subtopic;

class SubtopicSeeder extends Seeder
{
    public function run(): void
    {
        $cardio = Topic::where('slug', 'cardiologia')->first();
        $nefro  = Topic::where('slug', 'nefrologia')->first();
        $neumo  = Topic::where('slug', 'neumologia')->first();

        if (! $cardio || ! $nefro || ! $neumo) {
            $this->command->error('Primero ejecuta TopicSeeder.');
            return;
        }

        $subtopics = [
            // CARDIO
            [
                'topic_id' => $cardio->id,
                'title'    => 'Insuficiencia cardiaca con fracción de eyección reducida (HFrEF)',
                'summary'  => 'Definición, clínica y tratamiento inicial de la insuficiencia cardiaca con FEVI reducida.',
                'content'  => "Definición: FEVI < 40%.\nClínica: disnea de esfuerzo, ortopnea, edema de miembros inferiores, fatiga.\nTratamiento inicial: IECA/ARA II o ARNI + betabloqueador + diurético de asa según congestión.",
            ],
            [
                'topic_id' => $cardio->id,
                'title'    => 'Síndrome coronario agudo con elevación del ST (SCACEST)',
                'summary'  => 'Criterios diagnósticos electrocardiográficos y manejo agudo del infarto con elevación del ST.',
                'content'  => "Cambios en el ECG: supradesnivel persistente del ST en derivaciones contiguas.\nManejo inicial: MONA (morfina, oxígeno, nitratos, aspirina) + reperfusión inmediata (angioplastia primaria o trombólisis).",
            ],

            // NEFRO
            [
                'topic_id' => $nefro->id,
                'title'    => 'Enfermedad renal crónica (ERC)',
                'summary'  => 'Criterios diagnósticos y estadificación de la ERC según TFG.',
                'content'  => "Definición: daño renal > 3 meses con TFG < 60 mL/min/1.73 m².\nEtiologías frecuentes: diabetes mellitus, hipertensión arterial.\nManejo: control estricto de presión arterial, restricción de sodio, uso de IECA/ARA II.",
            ],
            [
                'topic_id' => $nefro->id,
                'title'    => 'Trastornos hidroelectrolíticos: hiponatremia',
                'summary'  => 'Clasificación de la hiponatremia y enfoque diagnóstico inicial.',
                'content'  => "Clasificación por osmolaridad y estado de volumen.\nSíntomas: cefalea, náusea, confusión, convulsiones.\nCorrección gradual para evitar mielinólisis pontina.",
            ],

            // NEUMO
            [
                'topic_id' => $neumo->id,
                'title'    => 'EPOC estable',
                'summary'  => 'Criterios diagnósticos y escalas de riesgo del EPOC.',
                'content'  => "Diagnóstico: espirometría con relación VEF1/CVF < 0.7 post-broncodilatador.\nFactores de riesgo: tabaquismo, exposición laboral.\nTratamiento: broncodilatadores de acción prolongada, rehabilitación pulmonar, vacunación.",
            ],
            [
                'topic_id' => $neumo->id,
                'title'    => 'Asma bronquial',
                'summary'  => 'Características clínicas y tratamiento escalonado del asma.',
                'content'  => "Clínica: sibilancias, disnea episódica, tos nocturna.\nTratamiento: controladores (corticoide inhalado) y aliviadores (SABA), de manera escalonada según gravedad.",
            ],
        ];

        foreach ($subtopics as $subtopic) {
            Subtopic::updateOrCreate(
                [
                    'topic_id' => $subtopic['topic_id'],
                    'title'    => $subtopic['title'],
                ],
                $subtopic
            );
        }
    }
}
