<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Console\Command;

class GenerateSampleData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sample-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate random users, categories and blog posts';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 4; $i++) {
            Category::create([
                'title' => $faker->unique()->word,
            ]);
        }

        $categories = Category::all();

        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'name'     => $faker->name,
                'email'    => $faker->unique()->safeEmail,
                'password' => bcrypt('secret'),
                'admin'    => false,
                'image'    => null,
            ]);

            $postCount = rand(20, 30);
            for ($j = 0; $j < $postCount; $j++) {
                Post::create([
                    'title'       => $faker->sentence,
                    'description' => $faker->paragraph,
                    'category_id' => $categories->random()->id,
                    'user_id'     => $user->id,
                ]);
            }

            $this->info("Random user: {$user->name}");
        }

        $this->info('Random data generated!');

        return 0;
    }
}
