<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Weapon $weapon
 * @var \Cake\Collection\CollectionInterface|string[] $operators
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Weapons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="weapons form content">
            <?= $this->Form->create($weapon) ?>
            <fieldset>
                <legend><?= __('Add Weapon') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('type');
                    echo $this->Form->control('firemode');
                    echo $this->Form->control('damage');
                    echo $this->Form->control('rate_of_fire');
                    echo $this->Form->control('mobility');
                    echo $this->Form->control('mag_size');
                    echo $this->Form->control('reload_time_emp');
                    echo $this->Form->control('reload_time_tac');
                    echo $this->Form->control('ads_time');
                    echo $this->Form->control('ammo_type');
                    echo $this->Form->control('operators._ids', ['options' => $operators]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
