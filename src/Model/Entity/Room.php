<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Room Entity
 *
 * @property int $id
 * @property int $cinema_id
 * @property string $name
 * @property string $seating
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Cinema $cinema
 * @property \App\Model\Entity\Showing[] $showings
 */
class Room extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'cinema_id' => true,
        'name' => true,
        'seating' => true,
        'created' => true,
        'modified' => true,
        'cinema' => true,
        'showings' => true,
    ];
}
