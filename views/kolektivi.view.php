<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h2> CKC Kolektivi </h2>
<table>
    <tr>
        <th>Kolektīvs</th>
        <th>Apraksts</th>
        <th>Buttons</th>
    <?php foreach($groups as $groups) {?>
    <tr><td><?=$groups["name"]?> </td><td> <?=$groups["description"]?></td>
    <td><form>
        <button>Edit<img style="width:10px; height:10px; padding-left:5px" src="pencil.png" alt="pencil"/></button>
        <button>Delete<img style="width:10px; height:10px; padding-left:5px" src="trash.png" alt="trash"></button>
    </form></td></tr>
    <?php } ?>
</table>
<?php require "components/footer.php" ?>