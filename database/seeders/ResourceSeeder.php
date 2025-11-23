<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subtopic;
use App\Models\Resource;

class ResourceSeeder extends Seeder
{
    public function run(): void
    {
        $resources = [
            [
                'subtopic_title' => 'Insuficiencia cardiaca con fracción de eyección reducida (HFrEF)',
                'type'           => 'video',
                'title'          => 'Clase de insuficiencia cardiaca - YouTube',
                'url'            => 'https://www.youtube.com/',
                'description'    => 'Video introductorio sobre fisiopatología y tratamiento de la insuficiencia cardiaca.',
            ],
            [
                'subtopic_title' => 'Insuficiencia cardiaca con fracción de eyección reducida (HFrEF)',
                'type'           => 'pdf',
                'title'          => 'Guía clínica de insuficiencia cardiaca (PDF en la nube)',
                'url'            => 'https://example.com/guias/insuficiencia_cardiaca.pdf',
                'description'    => 'Guía clínica resumida alojada en un servicio de almacenamiento en la nube.',
            ],
            [
                'subtopic_title' => 'Enfermedad renal crónica (ERC)',
                'type'           => 'link',
                'title'          => 'Revisión de ERC para ENARM',
                'url'            => 'https://example.com/erc/enarm',
                'description'    => 'Artículo de repaso con puntos clave para examen.',
            ],
            [
                'subtopic_title' => 'EPOC estable',
                'type'           => 'video',
                'title'          => 'Clase EPOC - Fisiopatología y manejo',
                'url'            => 'https://www.youtube.com/',
                'description'    => 'Clase en video sobre diagnóstico y tratamiento del EPOC.',
            ],
            [
                'subtopic_title' => 'Asma bronquial',
                'type'           => 'image',
                'title'          => 'Infografía de escalones terapéuticos en asma',
                'url'            => 'https://example.com/imagenes/asma_escalones.png',
                'description'    => 'Infografía con el tratamiento escalonado del asma, almacenada en otra plataforma.',
            ],
        ];

        foreach ($resources as $item) {
            $subtopic = Subtopic::where('title', $item['subtopic_title'])->first();

            if (! $subtopic) {
                $this->command->warn("Subtema no encontrado: {$item['subtopic_title']}");
                continue;
            }

            Resource::updateOrCreate(
                [
                    'subtopic_id' => $subtopic->id,
                    'title'       => $item['title'],
                ],
                [
                    'subtopic_id' => $subtopic->id,
                    'type'        => $item['type'],
                    'title'       => $item['title'],
                    'url'         => $item['url'],
                    'description' => $item['description'],
                ]
            );
        }
    }
}
