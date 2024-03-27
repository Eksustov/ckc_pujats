<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1> Add a Group </h1>
<form method="POST">
    <label>Name:
        <input name="name" value='<?= htmlspecialchars(($_POST["name"] ?? "" )) ?>'/>
    </label>
    <label>Description:
        <input name="description" value='<?= htmlspecialchars(($_POST["description"] ?? "" )) ?>'/>
    </label>
    <button>Save</button>
    <?php if (isset($errors["name"])) {?>
        <p><?= $errors["name"] ?></p>
        <?php } ?>
        <?php if (isset($errors["description"])) {?>
        <p><?= $errors["description"] ?></p>
        <?php } ?>
</form>
<?php require "components/footer.php" ?>