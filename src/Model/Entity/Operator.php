<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Operator Entity
 *
 * @property int $id
 * @property string $name
 * @property int $side
 * @property int $health
 * @property int $speed
 * @property int $difficulty
 * @property int $ability
 * @property string $biography
 * @property string $real_name
 * @property \Cake\I18n\Date $birthday
 * @property string $place_birth
 * @property string $psychological_report
 */
class Operator extends Entity
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
        'side' => true,
        'health' => true,
        'speed' => true,
        'difficulty' => true,
        'ability' => true,
        'biography' => true,
        'real_name' => true,
        'birthday' => true,
        'place_birth' => true,
        'psychological_report' => true,
    ];
}
