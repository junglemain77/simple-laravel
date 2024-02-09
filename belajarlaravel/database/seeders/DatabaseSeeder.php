<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name'=> 'Vale',
        //     'email'=> 'vale@gmail.com',
        //     'password'=> bcrypt('1234')
        // ]);

        // User::create([
        //     'name'=> 'Lulu',
        //     'email'=> 'lulu@gmail.com',
        //     'password'=> bcrypt('1234')
        // ]);

        Category::create([
            'name'=> 'Information & Technology',
            'slug'=> 'information-technology'
        ]);

        Category::create([
            'name'=> 'Sports',
            'slug'=> 'sports'
        ]);

        Category::create([
            'name'=> 'Gaming',
            'slug'=> 'gaming'
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt'=> 'Lorem ipsum tolor, consectetur adipiscing elitis global dasjhdjasn ,adsakdsmadkm kdsa',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra luctus dolor eget dictum. Praesent egestas gravida ex, sed convallis lacus ornare in.</p> <p>Maecenas tincidunt metus sed faucibus dignissim. Morbi eget tortor vitae arcu lobortis hendrerit. Fusce interdum nibh sit amet venenatis condimentum. Praesent molestie diam eu ante accumsan, vulputate convallis purus ullamcorper. Proin at consequat augue. Duis interdum sed nisi at condimentum.</p> <p>Etiam aliquet placerat laoreet. Praesent ut condimentum nibh, vitae lobortis augue. Phasellus scelerisque lorem nunc, id tempor.</p>',
        //     'category_id'=> 1,  
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title'=> 'Judul Ke Dua',
        //     'slug'=> 'judul-ke-dua',
        //     'excerpt'=> 'Lorem ipsum tolor, consectetur adipiscing elitis global dasjhdjasn ,adsakdsmadkm kdsa',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra luctus dolor eget dictum. Praesent egestas gravida ex, sed convallis lacus ornare in.</p> <p>Maecenas tincidunt metus sed faucibus dignissim. Morbi eget tortor vitae arcu lobortis hendrerit. Fusce interdum nibh sit amet venenatis condimentum. Praesent molestie diam eu ante accumsan, vulputate convallis purus ullamcorper. Proin at consequat augue. Duis interdum sed nisi at condimentum.</p> <p>Etiam aliquet placerat laoreet. Praesent ut condimentum nibh, vitae lobortis augue. Phasellus scelerisque lorem nunc, id tempor.</p>',
        //     'category_id'=> 1,  
        //     'user_id'=> 2
        // ]);

        // Post::create([
        //     'title'=> 'Judul Ke Tiga',
        //     'slug'=> 'judul-ke-tiga',
        //     'excerpt'=> 'Lorem ipsum tolor, consectetur adipiscing elitis global dasjhdjasn ,adsakdsmadkm kdsa',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra luctus dolor eget dictum. Praesent egestas gravida ex, sed convallis lacus ornare in.</p> <p>Maecenas tincidunt metus sed faucibus dignissim. Morbi eget tortor vitae arcu lobortis hendrerit. Fusce interdum nibh sit amet venenatis condimentum. Praesent molestie diam eu ante accumsan, vulputate convallis purus ullamcorper. Proin at consequat augue. Duis interdum sed nisi at condimentum.</p> <p>Etiam aliquet placerat laoreet. Praesent ut condimentum nibh, vitae lobortis augue. Phasellus scelerisque lorem nunc, id tempor.</p>',
        //     'category_id'=> 2,  
        //     'user_id'=> 1
        // ]);

    }
}
