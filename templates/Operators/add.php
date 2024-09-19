<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Operator $operator
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Operators'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="operators form content">
            <?= $this->Form->create($operator) ?>
            <fieldset>
                <legend><?= __('Add Operator') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('side');
                    echo $this->Form->control('health');
                    echo $this->Form->control('speed');
                    echo $this->Form->control('difficulty');
                    echo $this->Form->control('ability');
                    echo $this->Form->control('biography');
                    echo $this->Form->control('real_name');
                    echo $this->Form->control('birthday');
                    echo $this->Form->control('place_birth');
                    echo $this->Form->control('psychological_report');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
