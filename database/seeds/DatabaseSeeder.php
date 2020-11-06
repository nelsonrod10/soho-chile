<?php

use App\Proyecto;
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
        factory(Proyecto::class)->create([
            'empresa' => 'Diners Club',
            'nombre_proyecto' => 'Sitio public y privado',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis quam non nisl rutrum, scelerisque sodales est finibus. Vivamus rutrum, enim ac scelerisque eleifend, ex neque accumsan turpis.',
            'tags' => 'usabilidad,ui,ux,test con usuarios',
            'logo' => 'img/logo-diners-club.png',
            'imagen' => 'img/web-diners-club.png',
        ]);

        factory(Proyecto::class)->create([
            'empresa' => 'Derco',
            'nombre_proyecto' => 'Sitios web 2017',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis quam non nisl rutrum, scelerisque sodales est finibus. Vivamus rutrum, enim ac scelerisque eleifend, ex neque accumsan turpis.',
            'tags' => 'responsive,ui,ux',
            'logo' => 'img/logo-derco.png',
            'imagen' => 'img/web-derco.png',
        ]);

        factory(Proyecto::class)->create([
            'empresa' => 'Copec',
            'nombre_proyecto' => 'TV App',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis quam non nisl rutrum, scelerisque sodales est finibus. Vivamus rutrum, enim ac scelerisque eleifend, ex neque accumsan turpis.',
            'tags' => 'usabilidad,ui,ux,test con usuarios',
            'logo' => 'img/logo-copec.png',
            'imagen' => 'img/web-copec.png',
        ]);
    }
}
