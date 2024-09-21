<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Codeigniter 3',
            'slug' => 'codeigniter-3',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'PHP Native',
            'slug' => 'php-native',
            'color' => 'blue'
        ]);
        
        Category::create([
            'name' => 'News',
            'slug' => 'news',
            'color' => 'yellow'
        ]);
    }
}
