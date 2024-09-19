<span>This is editable</span>
<div class="operator-section">
    <span class="block-title">Attacker</span>
    <div class="operator-block">
        <?php 
            foreach($operators as $value){
                if($value['side'] == 0){
                    echo $this->element('OperatorBlock', array('id' => $value['id'], 'name' => $value['name']));
                }
            }
        ?>
    </div>
</div>

<div class="operator-section">
    <span class="block-title">Defender</span>
    <div class="operator-block">
        <?php 
            foreach($operators as $value){
                if($value['side'] == 1){
                    echo $this->element('OperatorBlock', array('id' => $value['id'], 'name' => $value['name']));
                }
            }
        ?>
    </div>
</div>
