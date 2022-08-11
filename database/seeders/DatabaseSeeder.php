<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;
use App\Models\Kecamatan;
use App\Models\User;
use App\Models\project;
use App\Models\Tpq;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Jimi Mikail',
        //     'email' => 'isyirazy@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Rika',
        //     'email' => 'rika@gmail.com',
        //     'password' => bcrypt('123')
        // ]);


        // User::factory(3)->create();
        // category::create([
        //     'name' => 'Carosul',
        //     'slug' => 'Carosul'
        // ]);

        // category::create([
        //     'name' => 'Umum',
        //     'slug' => 'Umum'
        // ]);

        // category::create([
        //     'name' => 'Insentif',
        //     'slug' => 'Insentif'
        // ]);

        project::factory(20)->create();

        Tpq::factory(20)->create();
        Kecamatan::factory(1)->create();

        // project::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'Judul-Pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur eum quia temporibus doloribus. Quo aut odio nemo accusantium quisquam. Temporibus officiis cum eveniet dolor? Eaque error ad eius eligendi tenetur ullam facere omnis ea, dolorum aliquid sapiente. Ab, nemo ad quae incidunt fugiat optio excepturi facere? Laboriosam porro, officia accusantium rerum ab illo aliquam quod in illum voluptatibus qui dicta, magnam dolores quae itaque excepturi. Repudiandae omnis accusamus labore, modi sequi quod minima, ab necessitatibus quo commodi quae. Fugiat, dicta! Cum, totam adipisci accusantium molestias repudiandae ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur eum quia temporibus doloribus. Quo aut odio nemo accusantium quisquam. Temporibus officiis cum eveniet dolor? Eaque error ad eius eligendi tenetur ullam facere omnis ea, dolorum aliquid sapiente. Ab, nemo ad quae incidunt fugiat optio excepturi facere? Laboriosam porro, officia accusantium rerum ab illo aliquam quod in illum voluptatibus qui dicta, magnam dolores quae itaque excepturi. Repudiandae omnis accusamus labore, modi sequi quod minima, ab necessitatibus quo commodi quae. Fugiat, dicta! Cum, totam adipisci accusantium molestias repudiandae 
        //     fuga neque iure aliquam quibusdam ut. Nostrum exercitationem a nisi optio? Deserunt, non molestias? Expedita voluptatum laborum sunt culpa architecto, quam minus qui corrupti id eligendi perspiciatis magnam totam beatae. Quis labore inventore, similique, quam aspernatur minima porro delectus nostrum molestias, illum doloribus perferendis adipisci nemo hic quia fugiat deleniti ab excepturi quae reiciendis eveniet quo culpa? Obcaecati, ipsum adipisci. Aperiam nulla sit non? Dolores fugit modi eos mollitia dignissimos perferendis laboriosam quaerat, atque delectus, dolor vitae doloribus. Nam praesentium voluptatem repellat vero',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // project::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'Judul-Kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur eum quia temporibus doloribus. Quo aut odio nemo accusantium quisquam. Temporibus officiis cum eveniet dolor? Eaque error ad eius eligendi tenetur ullam facere omnis ea, dolorum aliquid sapiente. Ab, nemo ad quae incidunt fugiat optio excepturi facere? Laboriosam porro, officia accusantium rerum ab illo aliquam quod in illum voluptatibus qui dicta, magnam dolores quae itaque excepturi. Repudiandae omnis accusamus labore, modi sequi quod minima, ab necessitatibus quo commodi quae. Fugiat, dicta! Cum, totam adipisci accusantium molestias repudiandae ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur eum quia temporibus doloribus. Quo aut odio nemo accusantium quisquam. Temporibus officiis cum eveniet dolor? Eaque error ad eius eligendi tenetur ullam facere omnis ea, dolorum aliquid sapiente. Ab, nemo ad quae incidunt fugiat optio excepturi facere? Laboriosam porro, officia accusantium rerum ab illo aliquam quod in illum voluptatibus qui dicta, magnam dolores quae itaque excepturi. Repudiandae omnis accusamus labore, modi sequi quod minima, ab necessitatibus quo commodi quae. Fugiat, dicta! Cum, totam adipisci accusantium molestias repudiandae 
        //     fuga neque iure aliquam quibusdam ut. Nostrum exercitationem a nisi optio? Deserunt, non molestias? Expedita voluptatum laborum sunt culpa architecto, quam minus qui corrupti id eligendi perspiciatis magnam totam beatae. Quis labore inventore, similique, quam aspernatur minima porro delectus nostrum molestias, illum doloribus perferendis adipisci nemo hic quia fugiat deleniti ab excepturi quae reiciendis eveniet quo culpa? Obcaecati, ipsum adipisci. Aperiam nulla sit non? Dolores fugit modi eos mollitia dignissimos perferendis laboriosam quaerat, atque delectus, dolor vitae doloribus. Nam praesentium voluptatem repellat vero',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // project::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'Judul-Ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur eum quia temporibus doloribus. Quo aut odio nemo accusantium quisquam. Temporibus officiis cum eveniet dolor? Eaque error ad eius eligendi tenetur ullam facere omnis ea, dolorum aliquid sapiente. Ab, nemo ad quae incidunt fugiat optio excepturi facere? Laboriosam porro, officia accusantium rerum ab illo aliquam quod in illum voluptatibus qui dicta, magnam dolores quae itaque excepturi. Repudiandae omnis accusamus labore, modi sequi quod minima, ab necessitatibus quo commodi quae. Fugiat, dicta! Cum, totam adipisci accusantium molestias repudiandae ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur eum quia temporibus doloribus. Quo aut odio nemo accusantium quisquam. Temporibus officiis cum eveniet dolor? Eaque error ad eius eligendi tenetur ullam facere omnis ea, dolorum aliquid sapiente. Ab, nemo ad quae incidunt fugiat optio excepturi facere? Laboriosam porro, officia accusantium rerum ab illo aliquam quod in illum voluptatibus qui dicta, magnam dolores quae itaque excepturi. Repudiandae omnis accusamus labore, modi sequi quod minima, ab necessitatibus quo commodi quae. Fugiat, dicta! Cum, totam adipisci accusantium molestias repudiandae 
        //     fuga neque iure aliquam quibusdam ut. Nostrum exercitationem a nisi optio? Deserunt, non molestias? Expedita voluptatum laborum sunt culpa architecto, quam minus qui corrupti id eligendi perspiciatis magnam totam beatae. Quis labore inventore, similique, quam aspernatur minima porro delectus nostrum molestias, illum doloribus perferendis adipisci nemo hic quia fugiat deleniti ab excepturi quae reiciendis eveniet quo culpa? Obcaecati, ipsum adipisci. Aperiam nulla sit non? Dolores fugit modi eos mollitia dignissimos perferendis laboriosam quaerat, atque delectus, dolor vitae doloribus. Nam praesentium voluptatem repellat vero',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // project::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'Judul-Keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur eum quia temporibus doloribus. Quo aut odio nemo accusantium quisquam. Temporibus officiis cum eveniet dolor? Eaque error ad eius eligendi tenetur ullam facere omnis ea, dolorum aliquid sapiente. Ab, nemo ad quae incidunt fugiat optio excepturi facere? Laboriosam porro, officia accusantium rerum ab illo aliquam quod in illum voluptatibus qui dicta, magnam dolores quae itaque excepturi. Repudiandae omnis accusamus labore, modi sequi quod minima, ab necessitatibus quo commodi quae. Fugiat, dicta! Cum, totam adipisci accusantium molestias repudiandae ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur eum quia temporibus doloribus. Quo aut odio nemo accusantium quisquam. Temporibus officiis cum eveniet dolor? Eaque error ad eius eligendi tenetur ullam facere omnis ea, dolorum aliquid sapiente. Ab, nemo ad quae incidunt fugiat optio excepturi facere? Laboriosam porro, officia accusantium rerum ab illo aliquam quod in illum voluptatibus qui dicta, magnam dolores quae itaque excepturi. Repudiandae omnis accusamus labore, modi sequi quod minima, ab necessitatibus quo commodi quae. Fugiat, dicta! Cum, totam adipisci accusantium molestias repudiandae 
        //     fuga neque iure aliquam quibusdam ut. Nostrum exercitationem a nisi optio? Deserunt, non molestias? Expedita voluptatum laborum sunt culpa architecto, quam minus qui corrupti id eligendi perspiciatis magnam totam beatae. Quis labore inventore, similique, quam aspernatur minima porro delectus nostrum molestias, illum doloribus perferendis adipisci nemo hic quia fugiat deleniti ab excepturi quae reiciendis eveniet quo culpa? Obcaecati, ipsum adipisci. Aperiam nulla sit non? Dolores fugit modi eos mollitia dignissimos perferendis laboriosam quaerat, atque delectus, dolor vitae doloribus. Nam praesentium voluptatem repellat vero',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // project::create([
        //     'title' => 'Judul Kelima',
        //     'slug' => 'Judul-Kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur eum quia temporibus doloribus. Quo aut odio nemo accusantium quisquam. Temporibus officiis cum eveniet dolor? Eaque error ad eius eligendi tenetur ullam facere omnis ea, dolorum aliquid sapiente. Ab, nemo ad quae incidunt fugiat optio excepturi facere? Laboriosam porro, officia accusantium rerum ab illo aliquam quod in illum voluptatibus qui dicta, magnam dolores quae itaque excepturi. Repudiandae omnis accusamus labore, modi sequi quod minima, ab necessitatibus quo commodi quae. Fugiat, dicta! Cum, totam adipisci accusantium molestias repudiandae ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur eum quia temporibus doloribus. Quo aut odio nemo accusantium quisquam. Temporibus officiis cum eveniet dolor? Eaque error ad eius eligendi tenetur ullam facere omnis ea, dolorum aliquid sapiente. Ab, nemo ad quae incidunt fugiat optio excepturi facere? Laboriosam porro, officia accusantium rerum ab illo aliquam quod in illum voluptatibus qui dicta, magnam dolores quae itaque excepturi. Repudiandae omnis accusamus labore, modi sequi quod minima, ab necessitatibus quo commodi quae. Fugiat, dicta! Cum, totam adipisci accusantium molestias repudiandae 
        //     fuga neque iure aliquam quibusdam ut. Nostrum exercitationem a nisi optio? Deserunt, non molestias? Expedita voluptatum laborum sunt culpa architecto, quam minus qui corrupti id eligendi perspiciatis magnam totam beatae. Quis labore inventore, similique, quam aspernatur minima porro delectus nostrum molestias, illum doloribus perferendis adipisci nemo hic quia fugiat deleniti ab excepturi quae reiciendis eveniet quo culpa? Obcaecati, ipsum adipisci. Aperiam nulla sit non? Dolores fugit modi eos mollitia dignissimos perferendis laboriosam quaerat, atque delectus, dolor vitae doloribus. Nam praesentium voluptatem repellat vero',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
