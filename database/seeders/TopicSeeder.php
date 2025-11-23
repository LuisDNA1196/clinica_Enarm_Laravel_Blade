<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicSeeder extends Seeder
{
    public function run(): void
    {
        $topics = [
            [
                'name'        => 'Cardiología',
                'slug'        => 'cardiologia',
                'description' => 'Patologías cardiovasculares frecuentes en el ENARM: insuficiencia cardiaca, síndrome coronario agudo, arritmias, valvulopatías, entre otras.',
            ],
            [
                'name'        => 'Nefrología',
                'slug'        => 'nefrologia',
                'description' => 'Enfermedad renal crónica, trastornos hidroelectrolíticos y síndromes glomerulares relevantes para el examen.',
            ],
            [
                'name'        => 'Neumología',
                'slug'        => 'neumologia',
                'description' => 'Patologías respiratorias como EPOC, asma, neumonía e insuficiencia respiratoria aguda.',
            ],
        ];

        foreach ($topics as $topic) {
            Topic::updateOrCreate(
                ['slug' => $topic['slug']],
                $topic
            );
        }
    }
}
