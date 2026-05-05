<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run(): void
{
    Plan::insert([
        [
            'name' => 'Básico',
            'description' => 'Automatización simple para tareas repetitivas',
            'price' => 99000,
            'features' => json_encode([
                '1 automatización',
                'Soporte básico',
                'Entrega rápida'
            ]),
            'is_popular' => false,
        ],
        [
            'name' => 'Profesional',
            'description' => 'Automatización completa para negocios',
            'price' => 249000,
            'features' => json_encode([
                '3 automatizaciones',
                'Integraciones',
                'Soporte prioritario'
            ]),
            'is_popular' => true,
        ],
        [
            'name' => 'Avanzado',
            'description' => 'Soluciones personalizadas con IA',
            'price' => null,
            'features' => json_encode([
                'Automatización a medida',
                'IA + Bots',
                'Escalabilidad'
            ]),
            'is_popular' => false,
        ],
    ]);
}}
