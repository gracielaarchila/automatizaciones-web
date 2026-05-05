<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run(): void
{
    Testimonial::insert([
        [
            'name' => 'Carlos Pérez',
            'role' => 'Pyme',
            'message' => 'Ahora todo funciona automático, ahorramos muchas horas.',
            'rating' => 5,
        ],
        [
            'name' => 'María González',
            'role' => 'Emprendedora',
            'message' => 'El bot de WhatsApp me cambió el negocio.',
            'rating' => 5,
        ],
        [
            'name' => 'Luis Torres',
            'role' => 'Empresa',
            'message' => 'Menos errores y más orden en los procesos.',
            'rating' => 5,
        ],
    ]);
}}
