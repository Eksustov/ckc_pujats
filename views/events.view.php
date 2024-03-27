<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h2>Pasākumi Cēsīs</h2>
<ul>
    <?php foreach($events as $event) {?>
    <li><?=htmlspecialchars($event["date"])?> / <?=htmlspecialchars($event["event"])?> / <?=htmlspecialchars($event["location"])?></li>
    <form>
        <button>Edit<img style="width:10px; height:10px; padding-left:5px" src="pencil.png" alt="pencil"/></button>
        <button>Delete<img style="width:10px; height:10px; padding-left:5px" src="trash.png" alt="trash"></button>
    </form>
    <?php } ?>
    
</ul>
<?php require "components/footer.php" ?>