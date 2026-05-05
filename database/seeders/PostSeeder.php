<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Cómo reconocer una tarea repetitiva en tu negocio',
                'type' => 'tarea_repetitiva',
                'category' => 'Guía práctica',
                'excerpt' => 'Aprende a detectar tareas que se repiten, consumen tiempo y podrían automatizarse.',
                'content' => 'Una tarea repetitiva suele tener tres señales: se hace muchas veces, sigue pasos parecidos y consume tiempo sin aportar creatividad. Por ejemplo: copiar datos, responder las mismas preguntas, generar reportes, enviar recordatorios o revisar información manualmente. Si una tarea se repite todas las semanas y siempre sigue el mismo patrón, probablemente se puede automatizar.',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=80',
                'video_url' => null,
                'is_featured' => true,
            ],
            [
                'title' => '¿Qué es automatizar un negocio?',
                'type' => 'guia',
                'category' => 'Automatización',
                'excerpt' => 'Una explicación simple para entender cómo la automatización puede ahorrar tiempo.',
                'content' => 'Automatizar un negocio significa hacer que tareas repetitivas se realicen solas con ayuda de sistemas, programación o inteligencia artificial. Por ejemplo: responder mensajes, generar reportes, ordenar datos, enviar correos o crear documentos sin hacerlo manualmente cada vez.',
                'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=80',
                'video_url' => null,
                'is_featured' => true,
            ],
            [
                'title' => '5 tareas que puedes automatizar hoy',
                'type' => 'guia',
                'category' => 'Productividad',
                'excerpt' => 'Ejemplos fáciles de tareas repetitivas que una empresa puede automatizar.',
                'content' => 'Algunas tareas que puedes automatizar son: responder preguntas frecuentes, enviar recordatorios, generar reportes diarios, ordenar datos de clientes y crear documentos automáticamente. Esto ayuda a ahorrar tiempo y reducir errores.',
                'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=80',
                'video_url' => null,
                'is_featured' => false,
            ],
            [
                'title' => 'Antes y después de automatizar reportes',
                'type' => 'ejemplo',
                'category' => 'Caso práctico',
                'excerpt' => 'Cómo cambia el trabajo cuando un reporte deja de hacerse manualmente.',
                'content' => 'Antes, una persona puede tardar horas copiando datos en Excel. Después de automatizar, el sistema puede tomar la información, organizarla y generar el reporte automáticamente. Esto permite trabajar con más orden y menos errores.',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80',
                'video_url' => null,
                'is_featured' => false,
            ],
            [
                'title' => 'La IA en el trabajo: oportunidad, no magia',
                'type' => 'noticia',
                'category' => 'IA',
                'excerpt' => 'La IA puede mejorar productividad, pero necesita procesos claros y buena implementación.',
                'content' => 'La inteligencia artificial está entrando cada vez más en empresas, pero no funciona como magia. Para obtener resultados reales, primero hay que entender qué proceso se quiere mejorar, qué datos se usan y qué resultado se espera. La automatización funciona mejor cuando resuelve problemas concretos.',
                'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=1200&q=80',
                'video_url' => 'https://www.youtube.com/watch?v=ad79nYk2keg',
                'is_featured' => true,
            ],
            [
                'title' => 'Agentes de IA: una nueva forma de automatizar procesos',
                'type' => 'noticia',
                'category' => 'IA + Automatización',
                'excerpt' => 'Los agentes de IA prometen ayudar a ejecutar flujos de trabajo más complejos.',
                'content' => 'Los agentes de IA son sistemas capaces de ayudar con tareas que requieren varios pasos. Pueden apoyar procesos como atención al cliente, organización de información, generación de reportes o seguimiento de tareas. Para pequeñas empresas, lo importante no es la moda, sino identificar casos simples donde realmente ahorren tiempo.',
                'image' => 'https://images.unsplash.com/photo-1674027444485-cec3da58eef4?auto=format&fit=crop&w=1200&q=80',
                'video_url' => null,
                'is_featured' => false,
            ],
        ];

        foreach ($posts as $post) {
            Post::updateOrCreate(
                ['slug' => Str::slug($post['title'])],
                [
                    'title' => $post['title'],
                    'type' => $post['type'],
                    'category' => $post['category'],
                    'excerpt' => $post['excerpt'],
                    'content' => $post['content'],
                    'image' => $post['image'],
                    'video_url' => $post['video_url'],
                    'is_featured' => $post['is_featured'],
                    'is_published' => true,
                    'published_at' => now(),
                ]
            );
        }
    }
}