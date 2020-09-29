<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ProductionArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $article = new \App\Models\Blog([
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
            'body' => 
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio beatae ipsa voluptatibus asperiores? Ut, fugit fuga! Nulla aliquam quae repudiandae error ut repellendus dignissimos quibusdam iure natus vero, at dolores labore alias doloremque modi rerum vel laudantium non, consequatur quaerat aspernatur fuga voluptatibus. A eos harum dolor iure at deserunt voluptatibus, eveniet ipsa cupiditate dolores ullam. Amet facere veritatis mollitia, beatae commodi consectetur neque voluptatem. Numquam nulla adipisci aut quae aliquid nostrum? Vitae quae optio voluptate molestiae non necessitatibus odio error sequi placeat! Porro, corporis? Veritatis optio iusto mollitia dolorum, ad blanditiis, aut dignissimos incidunt sapiente natus distinctio dolor facere beatae minima qui accusamus amet ratione eaque ea necessitatibus quasi repellat est illo nesciunt. Necessitatibus repudiandae minima incidunt dignissimos blanditiis voluptate eum distinctio facere sunt aperiam sequi, quaerat magnam sint mollitia molestiae dolores ipsum, quibusdam quis autem. Illo porro dolore necessitatibus autem beatae repudiandae accusamus, est incidunt expedita iusto nisi voluptatum doloribus. Deserunt pariatur laborum nesciunt natus libero, iste soluta veniam consectetur doloribus. Sequi eligendi modi sunt voluptatum ratione vitae aut pariatur, fuga mollitia cum ducimus, veritatis tenetur perferendis illum aliquid quam voluptatibus officiis facere, consequuntur sapiente. Ad quas nihil dolore, atque aut libero dolores magnam amet? Earum, sint porro? Animi earum, dignissimos quis consectetur esse facilis tempora maxime porro rem et illo doloremque vero sed, recusandae deleniti odio totam! Dolor suscipit reprehenderit nostrum autem alias repellendus nobis. Fugiat ipsa voluptates culpa blanditiis provident incidunt aliquam assumenda quo iusto, minima qui tenetur! Quam repellendus temporibus blanditiis nulla delectus inventore modi amet sapiente, consectetur eveniet, odio placeat beatae tempora quo sed quisquam sunt ullam vitae qui cum? Ab id omnis asperiores doloremque ullam laboriosam voluptatibus nulla quaerat. Accusamus doloribus tempore voluptatem? Dicta incidunt neque nam ipsa facere non, sed, expedita dolore voluptatem animi atque suscipit earum, omnis aliquid quidem doloribus repellat!'
        ]);
        $article->save();
    }
}
