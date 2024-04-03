<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h2>Pasākumi Cēsīs</h2>
<ul>
    <?php foreach($events as $event) {?>
    <li><?=htmlspecialchars($event["date"])?> / <?=htmlspecialchars($event["event"])?> / <?=htmlspecialchars($event["location"])?></li>
    <form method="POST" action="/events-show?id=<?= $event["id"]?>">
    <button name="id" value="<?= $event["id"] ?>">Show<img style="width:10px; height:10px; padding-left:5px" src="pencil.png" alt="pencil"/></button>
    </form>
    <form method="POST" action="/events-delete">
        <button name="id" value="<?= $event["id"] ?>">Delete<img style="width:10px; height:10px; padding-left:5px" src="trash.png" alt="trash"></button>
    </form>
    <?php } ?>

</ul>
<?php require "views/components/footer.php" ?>