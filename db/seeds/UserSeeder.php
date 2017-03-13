<?php

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 7000; $i++) {
            $data[] = [
                'nama'      => $faker->userName,
                'alamat'    => sha1($faker->address),
                'email'     => $faker->email,
                'tgl_daftar'=> date('Y-m-d H:i:s'),
            ];
        }

        $this->insert('user', $data);
    }
}
