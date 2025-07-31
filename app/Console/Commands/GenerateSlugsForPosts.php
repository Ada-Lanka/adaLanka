<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Models\Post;
// This seeder was created to update slug into exsiting news info in post tables
// This will not be used in production level

class GenerateSlugsForPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-slugs-for-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate slug values for all existing posts based on their titles';


    /**
     * Execute the console command.
     */
 

public function handle()
{
    Post::all()->each(function ($post) {
        $post->slug = Str::slug($post->title);
        $post->save();
    });

    $this->info('✅ Slugs generated for all posts.');
}

}
