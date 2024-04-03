<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>SHOW</h1>
<h2><?=htmlspecialchars($event["date"])?> / <?=htmlspecialchars($event["event"])?> / <?=htmlspecialchars($event["location"])?></h2>
<a href="/events-edit?id=<?= $_GET["id"]?>">Edit...</a>
<?php require "views/components/footer.php" ?>