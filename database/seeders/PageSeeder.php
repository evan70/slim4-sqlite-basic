<?php


use Phinx\Seed\AbstractSeed;

class PageSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'title'  => 'Главная',
                'slug' => 'home',
                'excerpt' => 'Это демо-контент главной страницы. Далеко-далеко за словесными горами в стране гласных и согласных живут, рыбные тексты. Своего эта обеспечивает .... exerpt.',
                'content' => 'Это демо-контент главной страницы. Далеко-далеко за словесными горами в стране гласных и согласных живут, рыбные тексты. Своего эта обеспечивает предложения возвращайся продолжил? Встретил коварных взобравшись строчка инициал о, первую даль агентство предупредила напоивший. Маленькая, выйти подпоясал.',
            ],
            [
                'title'  => 'О компании',
                'slug' => 'about',
                'excerpt' => 'Это демо-контент главной страницы. Далеко-далеко за словесными горами в стране гласных и согласных живут, рыбные тексты. Своего эта обеспечивает .... exerpt.',
                'content' => 'Это демо-контент страницы о компании. Далеко-далеко за словесными горами, в стране гласных и согласных живут рыбные тексты. Мир взобравшись но своего подзаголовок, все рекламных свое речью ее над парадигматическая запятой города переписывается последний языком? Инициал, страну за? Злых страна все дороге. Его ты рукопись лучше решила моей подзаголовок проектах имеет путь однажды. Родного своего обеспечивает коварных дороге переулка предупреждал ты дорогу решила безорфографичный, снова приставка, даже единственное.',
            ]
        ];

        $pages = $this->table('pages');
        $pages->insert($data)->saveData();
    }
}
