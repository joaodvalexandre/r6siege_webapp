<div id="operators-div" class="operators-div">
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
</div>

<div id="weapons-div" class="weapons-div">
    <div class="weapon-section">
        <span class="block-title">Weapons</span>
        <div class="weapon-block">
            <?php 
                foreach($weapons as $value){
                    echo $this->element('WeaponBlock', array('id' => $value['id'], 'name' => $value['name']));
                }
            ?>
        </div>
    </div>
</div>

<script>
    $(document).ready('', function(){
        $('#operators-div').css('display', 'block');

        $('#operators').on('click', function(e){
            e.preventDefault();
            $('#operators-div').css('display', 'block');
            $('#weapons-div').css('display', 'none');
        });
        $('#weapons').on('click', function(e){
            e.preventDefault();
            $('#operators-div').css('display', 'none');
            $('#weapons-div').css('display', 'block');
        });
    });
</script>