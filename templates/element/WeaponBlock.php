<?php 
if($id == null) {
    $id = 0;
}

if($name == null){
    $name = 'Default';
}
?>
<div class="block-single weapon">
    <?= $this->Html->link(
            $this->Html->image("/webroot/img/weapons-pic/".strtolower($name).".png", ["alt" => "Sample"]),
            array('controller' => 'Weapons', 'action' => 'view', $id),
            array('class' => 'weapon-block-single', 'escape' => false),
        ) ?>
    <span class="weapon-name"><?=$name?></span>
</div>