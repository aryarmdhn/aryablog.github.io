<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Arya Rmadhanu',
            'username' => 'aryarmdhn',
            'email' => 'arya@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Riefah Bachtiar',
            'username' => 'rifalovesyoughurt',
            'email' => 'Riefah@gmail.com',
            'password' => bcrypt('12345678')
        ]);

         User::factory(10)->create([
            'password' => bcrypt('87654321')
         ]);

       

        Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle'
        ]);

        Category::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);

        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);

        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);

        Category::create([
            'name' => 'Outfit',
            'slug' => 'outfit'
        ]);

        Category::create([
            'name' => 'Market',
            'slug' => 'market'
        ]);

        Category::create([
            'name' => 'Bussines',
            'slug' => 'bussines'
        ]);

        Category::create([
            'name' => 'Transportation',
            'slug' => 'transportation'
        ]);

        Post::factory(50)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis ipsa nesciunt dol.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis ipsa nesciunt dolore fugit minima optio sapiente ad eaque ducimus? Fuga odio odit delectus quos officiis quidem? Dolore amet blanditiis est repellat modi praesentium qui quaerat corporis molestiae natus, sit aliquam optio similique magni voluptas officia hic, aut consequuntur ipsam, vero ullam neque totam aperiam? Asperiores consectetur vel in corrupti debitis est! Consequuntur, eius suscipit illum asperiores eligendi aperiam quidem natus. Dolor voluptates inventore animi reiciendis aut neque, quam ipsam quia vero recusandae omnis officia voluptate, aspernatur perferendis doloribus laudantium vel veniam corrupti, ipsa porro nulla voluptatibus sit eius quos? Nesciunt.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis ipsa nesciunt dol.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis ipsa nesciunt dolore fugit minima optio sapiente ad eaque ducimus? Fuga odio odit delectus quos officiis quidem? Dolore amet blanditiis est repellat modi praesentium qui quaerat corporis molestiae natus, sit aliquam optio similique magni voluptas officia hic, aut consequuntur ipsam, vero ullam neque totam aperiam? Asperiores consectetur vel in corrupti debitis est! Consequuntur, eius suscipit illum asperiores eligendi aperiam quidem natus. Dolor voluptates inventore animi reiciendis aut neque, quam ipsam quia vero recusandae omnis officia voluptate, aspernatur perferendis doloribus laudantium vel veniam corrupti, ipsa porro nulla voluptatibus sit eius quos? Nesciunt.',
        //     'category_id' => 3,
        //     'user_id' => 2

        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis ipsa nesciunt dol.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis ipsa nesciunt dolore fugit minima optio sapiente ad eaque ducimus? Fuga odio odit delectus quos officiis quidem? Dolore amet blanditiis est repellat modi praesentium qui quaerat corporis molestiae natus, sit aliquam optio similique magni voluptas officia hic, aut consequuntur ipsam, vero ullam neque totam aperiam? Asperiores consectetur vel in corrupti debitis est! Consequuntur, eius suscipit illum asperiores eligendi aperiam quidem natus. Dolor voluptates inventore animi reiciendis aut neque, quam ipsam quia vero recusandae omnis officia voluptate, aspernatur perferendis doloribus laudantium vel veniam corrupti, ipsa porro nulla voluptatibus sit eius quos? Nesciunt.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis ipsa nesciunt dol.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis ipsa nesciunt dolore fugit minima optio sapiente ad eaque ducimus? Fuga odio odit delectus quos officiis quidem? Dolore amet blanditiis est repellat modi praesentium qui quaerat corporis molestiae natus, sit aliquam optio similique magni voluptas officia hic, aut consequuntur ipsam, vero ullam neque totam aperiam? Asperiores consectetur vel in corrupti debitis est! Consequuntur, eius suscipit illum asperiores eligendi aperiam quidem natus. Dolor voluptates inventore animi reiciendis aut neque, quam ipsam quia vero recusandae omnis officia voluptate, aspernatur perferendis doloribus laudantium vel veniam corrupti, ipsa porro nulla voluptatibus sit eius quos? Nesciunt.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
