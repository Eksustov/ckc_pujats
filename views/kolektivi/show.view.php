<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>SHOW</h1>
<h2><table>
<tr>
        <th>Kolektīvs</th>
        <th>Apraksts</th>
    <tr>
    <td>
        <?=htmlspecialchars($group["name"])?> 
    </td>
    <td> 
        <?=htmlspecialchars($group["description"])?>
    </td>
    </tr>
</tr>
</table></h2>

<a href="/kolektivi-edit?id=<?= $_GET["id"]?>">Edit...</a>
<?php require "views/components/footer.php" ?>