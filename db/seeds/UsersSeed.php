<?php


use Phinx\Seed\AbstractSeed;

class UsersSeed extends AbstractSeed
{
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 3; $i++) {
            $data[] = [
                'pass'      => password_hash('secret',PASSWORD_BCRYPT),
                'email'         => $faker->email,
                'name'    => $faker->name,
            ];
        }

        $data[] = [
                'pass'      => password_hash('123',PASSWORD_BCRYPT),
                'email'         => 'lucasmarques73@hotmail.com',
                'name'    => 'Lucas Marques',
            ];

        $this->insert('users', $data);
    }
}
