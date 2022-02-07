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
            'name' => 'Rizky',
            'username' => 'rizky',
            'email' => 'Rizky@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Doddy',
        //     'email' => 'Doddy@gmail.com',
        //     'password' => bcrypt('12345')
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

        Post::factory(5)->create();
        // Post::create([
        //  'title' => 'Judul Pertama',
        //  'slug' => 'judul-pertama',
        //  'excerpt'=> 'Lorem, ipsum dolor sit amet consectetur',
        //  'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates dolor
        //  perspiciatis repellendus minima neque modi alias et libero esse quam, dignissimos
        // cumque accusamus ab quaerat in possimus molestias perferendis aut? Et aliquam tenetur
        // ab possimus nemo omnis quod dolore nobis. Eaque consequuntur eum iste repudiandae dolore
        // voluptatibus mollitia, facere, corporis quia voluptates nostrum ad cumque atque nulla sunt, libero distinctio quod. Aliquid iusto cum blanditiis rem. Ab quam expedita error earum eaque dolores illum fugiat nam mollitia vel. Perferendis natus, cupiditate ex quae fa
        //  cilis obcaecati minima nam mollitia ea libero eos sunt tempora
        //  magni nostrum reiciendis illum aperiam possimus nulla.',
        //  'category_id' => 1,
        //  'user_id' => 1

        // ]);
        //       Post::create([
        //  'title' => 'Judul Kedua',
        //  'slug' => 'judul-ke-dua',
        //  'excerpt'=> 'Lorem, ipsum dolor sit amet consectetur',
        //  'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates dolor
        //  perspiciatis repellendus minima neque modi alias et libero esse quam, dignissimos
        // cumque accusamus ab quaerat in possimus molestias perferendis aut? Et aliquam tenetur
        // ab possimus nemo omnis quod dolore nobis. Eaque consequuntur eum iste repudiandae dolore
        // voluptatibus mollitia, facere, corporis quia voluptates nostrum ad cumque atque nulla sunt, libero distinctio quod. Aliquid iusto cum blanditiis rem. Ab quam expedita error earum eaque dolores illum fugiat nam mollitia vel. Perferendis natus, cupiditate ex quae fa
        //  cilis obcaecati minima nam mollitia ea libero eos sunt tempora
        //  magni nostrum reiciendis illum aperiam possimus nulla.',
        //  'category_id' => 1,
        //  'user_id' => 1

        // ]);

        //  Post::create([
        //  'title' => 'Judul Tiga',
        //  'slug' => 'judul-ke-tiga',
        //  'excerpt'=> 'Lorem, ipsum dolor sit amet consectetur',
        //  'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates dolor
        //  perspiciatis repellendus minima neque modi alias et libero esse quam, dignissimos
        // cumque accusamus ab quaerat in possimus molestias perferendis aut? Et aliquam tenetur
        // ab possimus nemo omnis quod dolore nobis. Eaque consequuntur eum iste repudiandae dolore
        // voluptatibus mollitia, facere, corporis quia voluptates nostrum ad cumque atque nulla sunt, libero distinctio quod. Aliquid iusto cum blanditiis rem. Ab quam expedita error earum eaque dolores illum fugiat nam mollitia vel. Perferendis natus, cupiditate ex quae fa
        //  cilis obcaecati minima nam mollitia ea libero eos sunt tempora
        //  magni nostrum reiciendis illum aperiam possimus nulla.',
        //  'category_id' => 2,
        //  'user_id' => 1

        // ]);

        //  Post::create([
        //  'title' => 'Judul Empat',
        //  'slug' => 'judul-ke-empat',
        //  'excerpt'=> 'Lorem, ipsum dolor sit amet consectetur',
        //  'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates dolor
        //  perspiciatis repellendus minima neque modi alias et libero esse quam, dignissimos
        // cumque accusamus ab quaerat in possimus molestias perferendis aut? Et aliquam tenetur
        // ab possimus nemo omnis quod dolore nobis. Eaque consequuntur eum iste repudiandae dolore
        // voluptatibus mollitia, facere, corporis quia voluptates nostrum ad cumque atque nulla sunt, libero distinctio quod. Aliquid iusto cum blanditiis rem. Ab quam expedita error earum eaque dolores illum fugiat nam mollitia vel. Perferendis natus, cupiditate ex quae fa
        //  cilis obcaecati minima nam mollitia ea libero eos sunt tempora
        //  magni nostrum reiciendis illum aperiam possimus nulla.',
        //  'category_id' => 2,
        //  'user_id' => 2

        // ]);
    }
}
