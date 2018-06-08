<?php


use Phinx\Seed\AbstractSeed;

class PostsSeed extends AbstractSeed
{ 
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title'      => $faker->realText($maxNbChars = 50),
                'content'         => $faker->realText($maxNbChars = 200),
                'created_at'    => $faker->date($format = 'Y-m-d', $max = 'now').' '. $faker->time($format = 'H:i:s', $max = 'now'),
                'published'    => rand(0,1),
                'user_id'    => rand(1,4),
            ];
        }

        $this->insert('posts', $data);
    }
}
