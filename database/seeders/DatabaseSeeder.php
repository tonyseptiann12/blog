<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

        User::create([
            'name' => 'Tony Septian Nugraha',
            'username' => 'tonyseptiann',
            'email' => 'tonyseptiann@gmail.com',
            'password' => bcrypt('test123')
        ]);

        // User::create([
        //     'name' => 'Septian',
        //     'email' => 'septian@gmail.com',
        //     'password' => bcrypt('test123')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ipsum modi iste reprehenderit autem deserunt magni fugit corporis. Quasi porro animi',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ipsum modi iste reprehenderit autem deserunt magni fugit corporis. Quasi porro animi ab, eveniet molestiae deserunt in repudiandae corrupti illo illum possimus ipsa eum repellendus eos esse atque vel ut, corporis, earum alias qui cumque perferendis accusantium! Error, officiis tenetur. Alias quod quisquam ex ab ipsum qui aperiam beatae similique totam optio dolorem officia numquam neque sed, molestiae accusantium quia? Quas dolorum deserunt provident sint explicabo magni commodi rerum temporibus! Ipsa tempora ipsam quae quos cum dolore dolorum, natus exercitationem quas provident est aliquid id veniam sunt ullam. Nemo, eligendi reprehenderit?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ipsum modi iste reprehenderit autem deserunt magni fugit corporis. Quasi porro animi',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ipsum modi iste reprehenderit autem deserunt magni fugit corporis. Quasi porro animi ab, eveniet molestiae deserunt in repudiandae corrupti illo illum possimus ipsa eum repellendus eos esse atque vel ut, corporis, earum alias qui cumque perferendis accusantium! Error, officiis tenetur. Alias quod quisquam ex ab ipsum qui aperiam beatae similique totam optio dolorem officia numquam neque sed, molestiae accusantium quia? Quas dolorum deserunt provident sint explicabo magni commodi rerum temporibus! Ipsa tempora ipsam quae quos cum dolore dolorum, natus exercitationem quas provident est aliquid id veniam sunt ullam. Nemo, eligendi reprehenderit?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ipsum modi iste reprehenderit autem deserunt magni fugit corporis. Quasi porro animi',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ipsum modi iste reprehenderit autem deserunt magni fugit corporis. Quasi porro animi ab, eveniet molestiae deserunt in repudiandae corrupti illo illum possimus ipsa eum repellendus eos esse atque vel ut, corporis, earum alias qui cumque perferendis accusantium! Error, officiis tenetur. Alias quod quisquam ex ab ipsum qui aperiam beatae similique totam optio dolorem officia numquam neque sed, molestiae accusantium quia? Quas dolorum deserunt provident sint explicabo magni commodi rerum temporibus! Ipsa tempora ipsam quae quos cum dolore dolorum, natus exercitationem quas provident est aliquid id veniam sunt ullam. Nemo, eligendi reprehenderit?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ipsum modi iste reprehenderit autem deserunt magni fugit corporis. Quasi porro animi',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ipsum modi iste reprehenderit autem deserunt magni fugit corporis. Quasi porro animi ab, eveniet molestiae deserunt in repudiandae corrupti illo illum possimus ipsa eum repellendus eos esse atque vel ut, corporis, earum alias qui cumque perferendis accusantium! Error, officiis tenetur. Alias quod quisquam ex ab ipsum qui aperiam beatae similique totam optio dolorem officia numquam neque sed, molestiae accusantium quia? Quas dolorum deserunt provident sint explicabo magni commodi rerum temporibus! Ipsa tempora ipsam quae quos cum dolore dolorum, natus exercitationem quas provident est aliquid id veniam sunt ullam. Nemo, eligendi reprehenderit?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
