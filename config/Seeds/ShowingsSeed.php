<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Showings seed.
 */
class ShowingsSeed extends AbstractSeed
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
                'movie_id' => '1',
                'room_id' => '1',
                'cinema_id' => '1',
                'date_time' => '2023-08-11 15:30:00',
                'created' => '2023-08-11 07:32:12',
                'modified' => '2023-08-11 07:32:12',
            ],
            [
                'id' => '2',
                'movie_id' => '7',
                'room_id' => '1',
                'cinema_id' => '2',
                'date_time' => '2023-08-14 20:00:00',
                'created' => '2023-08-11 07:35:03',
                'modified' => '2023-08-11 07:35:03',
            ],
            [
                'id' => '4',
                'movie_id' => '2',
                'room_id' => '1',
                'cinema_id' => '2',
                'date_time' => '2023-09-25 20:30:00',
                'created' => '2023-08-11 07:46:15',
                'modified' => '2023-09-18 10:59:01',
            ],
        ];

        $table = $this->table('showings');
        $table->insert($data)->save();
    }
}
