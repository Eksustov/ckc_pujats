<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h2> CKC Kolektivi </h2>
<table>
    <tr>
        <th>Kolektīvs</th>
        <th>Apraksts</th>
        <th>Buttons</th>
    <?php foreach($groups as $group) {?>
    <tr><td><?=htmlspecialchars($group["name"])?> </td><td> <?=htmlspecialchars($group["description"])?></td>
    <td><form method="POST" action="/kolektivi-delete">
        <button>Edit<img style="width:10px; height:10px; padding-left:5px" src="pencil.png" alt="pencil"/></button>
        <button name="id" value="<?= $group["id"] ?>">Delete<img style="width:10px; height:10px; padding-left:5px" src="trash.png" alt="trash"></button>
    </form></td></tr>
    <?php } ?>
</table>
<?php require "views/components/footer.php" ?>