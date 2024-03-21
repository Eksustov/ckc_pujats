<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h2>Pasākumi Cēsīs</h2>
<ul>
    <?php foreach($events as $event) {?>
    <li><?=$event["date"]?> / <?=$event["event"]?> / <?=$event["location"]?></li>
    <?php } ?>
    
</ul>
<?php require "components/footer.php" ?>