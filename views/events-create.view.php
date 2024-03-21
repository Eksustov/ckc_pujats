<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1> Create an Event </h1>
<form method="POST">
    <label>Date:
        <input name="date"/>
    </label>
    <label>Event:
        <input name="event"/>
    </label>
    <label>Location:
        <input name="location"/>
    </label>
    <button>Save</button>
</form>

<p>Date: YYYY-MM-DD HH:MM:SS
<?php require "components/footer.php" ?>