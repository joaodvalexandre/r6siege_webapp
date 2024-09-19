<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WeaponsFixture
 */
class WeaponsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'type' => 1,
                'firemode' => 1,
                'damage' => 1,
                'rate_of_fire' => 1,
                'mobility' => 1,
                'mag_size' => 1,
                'reload_time_emp' => 1.5,
                'reload_time_tac' => 1.5,
                'ads_time' => 1,
                'ammo_type' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
