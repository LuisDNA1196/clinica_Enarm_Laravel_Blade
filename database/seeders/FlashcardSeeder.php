<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\Subtopic;
use App\Models\Flashcard;

class FlashcardSeeder extends Seeder
{
    public function run(): void
    {
        $cardio = Topic::where('slug', 'cardiologia')->first();
        $nefro  = Topic::where('slug', 'nefrologia')->first();
        $neumo  = Topic::where('slug', 'neumologia')->first();

        $hfrEF      = Subtopic::where('title', 'Insuficiencia cardiaca con fracción de eyección reducida (HFrEF)')->first();
        $erc        = Subtopic::where('title', 'Enfermedad renal crónica (ERC)')->first();
        $epoc       = Subtopic::where('title', 'EPOC estable')->first();
        $asma       = Subtopic::where('title', 'Asma bronquial')->first();
        $scacest    = Subtopic::where('title', 'Síndrome coronario agudo con elevación del ST (SCACEST)')->first();

        $cards = [
            [
                'topic'    => $cardio,
                'subtopic' => $hfrEF,
                'front'    => '¿Cuál es la fracción de eyección típica para definir insuficiencia cardiaca con FE reducida (HFrEF)?',
                'back'     => 'Una fracción de eyección del ventrículo izquierdo < 40% se considera HFrEF.',
                'extra'    => 'Recuerda: HFrEF = FE < 40%. Manejo inicial: IECA/ARA II o ARNI + betabloqueador + diurético de asa según congestión.',
                'source'   => 'Guía de insuficiencia cardiaca. ENARM - resumen.',
            ],
            [
                'topic'    => $cardio,
                'subtopic' => $scacest,
                'front'    => 'Paciente con dolor torácico opresivo y elevación persistente del ST en el ECG. ¿Cuál es el diagnóstico más probable?',
                'back'     => 'Síndrome coronario agudo con elevación del ST (SCACEST).',
                'extra'    => 'Manejo inicial: MONA + reperfusión (angioplastia primaria o trombólisis).',
                'source'   => 'Algoritmo de síndrome coronario agudo.',
            ],
            [
                'topic'    => $nefro,
                'subtopic' => $erc,
                'front'    => '¿Cómo se define enfermedad renal crónica en términos de TFG y duración?',
                'back'     => 'Daño renal > 3 meses con TFG < 60 mL/min/1.73 m².',
                'extra'    => 'Etiologías frecuentes: diabetes y HTA. Vigilar proteinuria y control estricto de PA.',
                'source'   => 'Guía ERC. Nefrología básica.',
            ],
            [
                'topic'    => $neumo,
                'subtopic' => $epoc,
                'front'    => '¿Qué hallazgo en la espirometría confirma el diagnóstico de EPOC?',
                'back'     => 'Relación VEF1/CVF < 0.7 post-broncodilatador.',
                'extra'    => 'Factor de riesgo principal: tabaquismo. Tratamiento base: broncodilatadores de acción prolongada.',
                'source'   => 'Guía GOLD de EPOC (resumen).',
            ],
            [
                'topic'    => $neumo,
                'subtopic' => $asma,
                'front'    => 'Menciona un dato clínico típico de asma bronquial.',
                'back'     => 'Sibilancias espiratorias recurrentes asociadas a disnea episódica, empeoran por la noche.',
                'extra'    => 'Tratamiento control: corticoide inhalado. Aliviador: SABA.',
                'source'   => 'Guía GEMA de asma (resumen).',
            ],
        ];

        foreach ($cards as $data) {
            if (! $data['topic'] || ! $data['subtopic']) {
                continue;
            }

            Flashcard::updateOrCreate(
                [
                    'topic_id'    => $data['topic']->id,
                    'subtopic_id' => $data['subtopic']->id,
                    'front'       => $data['front'],
                ],
                [
                    'topic_id'    => $data['topic']->id,
                    'subtopic_id' => $data['subtopic']->id,
                    'front'       => $data['front'],
                    'back'        => $data['back'],
                    'extra'       => $data['extra'],
                    'source'      => $data['source'],
                ]
            );
        }
    }
}
