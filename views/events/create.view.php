<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1> Create an Event </h1>
<form method="POST">
    <label>Date:
        <input type="datetime-local" name="date" value='<?= htmlspecialchars(($_POST["date"] ?? "" )) ?>'/>
    </label>
    <label>Event:
        <input name="event" value='<?= htmlspecialchars(($_POST["event"] ?? "" )) ?>'/>
    </label>
    <label>Location:
        <input name="location" value='<?= htmlspecialchars(($_POST["location"] ?? "" )) ?>'/>
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