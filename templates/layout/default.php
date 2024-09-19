<?php
    $cakeDescription = 'Rainbow Six: Siege';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('favicon.ico', '/img/favicon.ico', array('type' => 'icon')) ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake', 'bootstrap.min']) ?>
    <?= $this->Html->script(['jquery.min', 'bootstrap.min', 'script']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!-- TODO Change page -->
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><img class="logo" width="150px" src="webroot/img/logo.png"/></a>
            <!-- <a href="<?= $this->Url->build('/') ?>"><img class="country-button" src="webroot/img/country/en.png" alt="English"></a>
            <a href="<?= $this->Url->build('/') ?>"><img class="country-button" src="webroot/img/country/pt.png" alt="Portuguese"></a> -->
        </div>
        <div class="top-nav-links">
            <?php 
            if($this->fetch('title') == 'Home'){
                echo "<a id=\"operators\" onclick=\"toggleHome(0)\" class=\"button\">Operators</a>";
                echo "<a id=\"weapons\" onclick=\"toggleHome(1)\" class=\"button\">Weapons</a>";
            }
            if($this->fetch('title') == 'Admin'){
                echo $this->Html->link("Home Page", array('controller' => 'Home'),      array( 'class' => 'button'));
            } elseif($this->fetch('title') == 'Home') {
                echo $this->Html->link("Admin Page", array('controller' => 'Admin'),    array( 'class' => 'button'));
            } else {
                echo $this->Html->link("Home Page", array('controller' => 'Home'),      array( 'class' => 'button'));
                echo $this->Html->link("Admin Page", array('controller' => 'Admin'),    array( 'class' => 'button'));
            }
            ?>
        </div>
    </nav>
    <div class="main">
        <div class="content-block">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>
