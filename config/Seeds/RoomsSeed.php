<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Rooms seed.
 */
class RoomsSeed extends AbstractSeed
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
                'cinema_id' => '1',
                'name' => 'Stars',
                'seating' => '50',
                'row' => '5',
                'created' => '2023-08-11 07:43:11',
                'modified' => '2023-08-11 07:43:11',
            ],
        ];

        $table = $this->table('rooms');
        $table->insert($data)->save();
    }
}
