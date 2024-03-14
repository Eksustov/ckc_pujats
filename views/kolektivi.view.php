<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h2> CKC Kolektivi </h2>
<table>
    <tr>
        <th>Kolektīvs</th>
        <th>Apraksts</th>
    <?php foreach($groups as $groups) {?>
    <tr><td><?=$groups["name"]?> </td><td> <?=$groups["description"]?></td></tr>
    <?php } ?>
</table>
<?php require "components/footer.php" ?>