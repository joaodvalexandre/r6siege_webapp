<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Weapon Entity
 *
 * @property int $id
 * @property string $name
 * @property int $type
 * @property int $firemode
 * @property int $damage
 * @property int $rate_of_fire
 * @property int $mobility
 * @property int $mag_size
 * @property string $reload_time_emp
 * @property string $reload_time_tac
 * @property int $ads_time
 * @property string $ammo_type
 *
 * @property \App\Model\Entity\Operator[] $operators
 */
class Weapon extends Entity
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
    protected array $_accessible = [
        'name' => true,
        'type' => true,
        'firemode' => true,
        'damage' => true,
        'rate_of_fire' => true,
        'mobility' => true,
        'mag_size' => true,
        'reload_time_emp' => true,
        'reload_time_tac' => true,
        'ads_time' => true,
        'ammo_type' => true,
        'operators' => true,
    ];
}
