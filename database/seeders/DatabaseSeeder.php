<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Text::updateOrCreate(
            [
                'name' => 'Mision'
            ],
            [
                'text' => "Brindar a nuestros clientes los mejores servicios múltiples en mensajería y transporte de todo tipo de carga a nivel local y nacional ofreciendo seguridad, calidad y puntualidad en la entrega de sus sobres, paquetes en cualquier destino que nuestros clientes requieran."
            ]
        );

        \App\Models\Text::updateOrCreate(
            [
                'name' => 'Vision'
            ],
            [
                'text' => "Ser la primera empresa en brindar servicios de mensajería y transporte con atención personalizada entregando de manera eficiente a cualquier destino a nivel local y nacional, a entidades privadas y estatales siendo reconocidos por nuestras altas normas de trabajo manteniendo a todos nuestros clientes satisfechos."
            ]
        );

        \App\Models\Text::updateOrCreate(
            [
                'name' => 'MENSAJERIA'
            ],
            [
                'text' => "Entregamos servicios de mensajería y logísticos ágiles, seguros y modernos, desarrollados para cumplir con indicadores cada vez más exigentes y satisfacer las necesidades de cada cliente."
            ]
        );

        \App\Models\Text::updateOrCreate(
            [
                'name' => 'CARGA'
            ],
            [
                'text' => "A través de nuestro servicio logístico o manejo de carga diversa nos encargamos del recojo, embalaje, clasificado, custodia y transporte de sus mercancías. Gracias a nuestra amplia cobertura geográfica llegamos a cualquier punto de destino y en los plazos que su organización requiera."
            ]
        );

    }
}
