<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Showing Entity
 *
 * @property int $id
 * @property int $movie_id
 * @property int $room_id
 * @property int $cinema_id
 * @property \Cake\I18n\FrozenTime $date_time
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Movie $movie
 * @property \App\Model\Entity\Room $room
 * @property \App\Model\Entity\Cinema $cinema
 */
class Showing extends Entity
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
        'movie_id' => true,
        'room_id' => true,
        'cinema_id' => true,
        'date_time' => true,
        'created' => true,
        'modified' => true,
        'movie' => true,
        'room' => true,
        'cinema' => true,
    ];
}
