<?php
declare(strict_types=1);

namespace App\Controller;

class HomeController extends AppController
{
    public function index($toggle = 0)
    {
        $operators = $this->fetchTable('Operators')->find()->all();
        $weapons = $this->fetchTable('Weapons')->find()->all();
        $this->set('operators', $operators);
        $this->set('weapons', $weapons);
    }
}
