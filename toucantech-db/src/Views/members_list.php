<!DOCTYPE html>
<html>
<head>
    <title>Members List</title>
</head>
<body>
    <h1>Members List</h1>
    <ul>
        <?php foreach ($members as $member) {
            echo "<li>" . $member->name . " - " . $member->email . "</li>";
        } ?>
    </ul>
</body>
</html>
