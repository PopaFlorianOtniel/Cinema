<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Cinemas seed.
 */
class CinemasSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'user_id' => '2',
                'name' => 'Cinema Prima',
                'slug' => 'cinema_prima',
                'location' => 'Bulevardul Decebal 61A, Oradea, Bihor, Romania',
                'created' => '2023-08-01 07:06:46',
                'modified' => '2023-08-01 07:06:46',
            ],
            [
                'id' => '2',
                'user_id' => '4',
                'name' => 'Cinema Palace',
                'slug' => 'cinema_palace',
                'location' => 'Str. Nufărului 30, Oradea, Bihor, Romania',
                'created' => '2023-08-08 13:02:15',
                'modified' => '2023-08-08 13:02:15',
            ],
        ];

        $table = $this->table('cinemas');
        $table->insert($data)->save();
    }
}
