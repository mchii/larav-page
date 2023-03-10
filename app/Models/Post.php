<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

class Post
{
    public $id;
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($id, $title, $excerpt, $date,  $slug)
    {
        $this->id = $id;
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->slug = $slug;
    }

    public static function all()
    {
        return cache()->rememberForever('posts.all', function () {
            return collect(File::files(resource_path("posts/")))
                ->map(function ($file) {
                    $document = YamlFrontMatter::parseFile($file);
                    return new Post(
                        $document->id,
                        $document->title,
                        $document->excerpt,
                        $document->date,
                        $document->slug
                    );
                });
        });
    }
    public function scopeIdDescending($posts)
    {
        return $bl->orderBy('id', 'DESC');
    }
    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);

        // // base_path();
        // // app_path();
        // // resource_path();
        // $path = resource_path("posts/{$slug}.html");

        // if (! file_exists($path)) {
        //     throw new ModelNotFoundException();
        //     //ddd('file does not exist');
        //     // return redirect('/');
        //     //abort(404);
        // }

        // return cache()->remember("posts.{$slug}", 5, fn() => file_get_contents($path));
    }
}
