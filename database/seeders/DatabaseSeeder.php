<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

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

        Role::create(['name'=>'ADMIN']);

        $c1 = new Category(['name'=>'Monitos','age'=>0]);
        $c1->save();

        $c2 = new Category(['name'=>'Otaku','age'=>10]);
        $c2->save();

        $m = new Movie([
            'name'=>'La Era Del Hielo',
            'description'=>'Una pelicula en el hielo',
            'genere'=>'Infantil',
            'duration'=>90,
            'price'=>2990,
            'category_id'=>1,
            'image'=>'IceAge.jpg'
            ]);
        $m->save();

        $m2 = new Movie([
            'name'=>'Ratatoulle',
            'description'=>'Una pelicula de ratones',
            'genere'=>'Infantil',
            'duration'=>95,
            'price'=>3500,
            'category_id'=>1,
            'image'=>'ratonklo.jpg'
        ]);
        $m2->save();

        $m3 = new Movie([
            'name'=>'Kimi no na wa',
            'description'=>'Una pelicula de otaku triste',
            'genere'=>'Triste',
            'duration'=>120,
            'price'=>5990,
            'category_id'=>2,
            'image'=>'weatriste.jpg'
        ]);
        $m3->save();

        $m4 = new Movie([
            'name'=>'Kimetsu no yaiba: Mugen Train',
            'description'=>'Una pelicula de otaku Wena',
            'genere'=>'Wena',
            'duration'=>150,
            'price'=>5990,
            'category_id'=>2,
            'image'=>'weawena.jpg'
        ]);
        $m4->save();
    }

}
