<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddSlugToCinemas extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('cinemas');
        $table->addColumn('slug', 'text', [
            'after' => 'name',
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->update();
    }
}
