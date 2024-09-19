<div class="admin-section">
    <span class="block-title">Admin Menu</span>
    <div class="admin-block">
        <?= $this->Html->link("Edit Operator",  array('controller' => 'Operators', 'action' => 'index'),    array( 'class' => 'button')) ?>
        <?= $this->Html->link("Add Operator",   array('controller' => 'Operators', 'action' => 'add'),      array( 'class' => 'button')) ?>
        <?= $this->Html->link("Edit Weapon",    array('controller' => 'Weapons', 'action' => 'index'),      array( 'class' => 'button')) ?>
        <?= $this->Html->link("Add Weapon",     array('controller' => 'Weapons', 'action' => 'add'),        array( 'class' => 'button')) ?>
    </div>
</div>
