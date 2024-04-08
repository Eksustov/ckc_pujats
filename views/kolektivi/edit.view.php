<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>KOLEKTIVU EDIT</h1>
<form method="POST">
    <label>Name:
        <input name="name" value='<?=$group["name"] ?? $_POST["name"]?>'/>
    </label>
    <label>Description:
        <input name="description" value='<?=$group["description"] ?? $_POST["description"]?>'/>
    </label>
    <button>Save</button>
        <?php if (isset($errors["name"])) {?>
        <p><?= $errors["name"] ?></p>
        <?php } ?>
        <?php if (isset($errors["description"])) {?>
        <p><?= $errors["description"] ?></p>
        <?php } ?>
</form>
<?php require "views/components/footer.php" ?>