<?php 
namespace App\Models;

use Illuminate\Support\Arr;

class post
{
    public static function all ()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Dicky Wahyu Pratama',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id expedita laborum, reprehenderit ducimus consectetur molestiae ad maxime, optio asperiores, ratione earum cum odio doloremque voluptatum dignissimos error quia minima exercitationem?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Dicky Wahyu Pratama',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos eum dolorem illum. Libero, hic repudiandae, dolorem nemo dolor molestias aperiam reiciendis, vitae ad in quisquam minima fugiat debitis nesciunt esse.'
            ]
            ];
    }

    public static function find($slug): array
    {
        $post= Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}