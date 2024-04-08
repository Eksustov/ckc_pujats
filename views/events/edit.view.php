<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>PASAKUMU EDIT</h1>
<form method="POST">
    <label>Date:
        <input type="datetime-local" name="date" value='<?=$event["date"] ?? $_POST["date"]?>'/>
    </label>
    <label>Event:
        <input name="event" value='<?=$event["event"] ?? $_POST["event"]?>'/>
    </label>
    <label>Location:
        <input name="location" value='<?=$event["location"] ?? $_POST["location"]?>'/>
    </label>
    <button>Save</button>
    <?php if (isset($errors["date"])) {?>
        <p><?= $errors["date"] ?></p>
        <?php } ?>
        <?php if (isset($errors["event"])) {?>
        <p><?= $errors["event"] ?></p>
        <?php } ?>
        <?php if (isset($errors["location"])) {?>
        <p><?= $errors["location"] ?></p>
        <?php } ?>
</form>
<?php require "views/components/footer.php" ?>