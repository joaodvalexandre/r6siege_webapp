<?php 
if($id == null) {
    $id = 0;
}

if($name == null){
    $name = 'Default';
}
?>
<div class="block-single operator">
    <?= $this->Html->link(
            $this->Html->image("/webroot/img/operators-logo/".strtolower($name).".svg", ["alt" => "Sample"]),
            array('controller' => 'Operators', 'action' => 'view', $id),
            array('class' => 'operator-block-single', 'escape' => false),
        ) ?>
    <span class="operator-name"><?=$name?></span>
</div>