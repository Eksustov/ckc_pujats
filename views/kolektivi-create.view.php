<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1> Add a Group </h1>
<form method="POST">
    <label>Name:
        <input name="name"/>
    </label>
    <label>Description:
        <input name="description"/>
    </label>
    <button>Save</button>
</form>
<?php require "components/footer.php" ?>