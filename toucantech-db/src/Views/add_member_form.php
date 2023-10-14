<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
</head>
<body>
    <h1>Add Member</h1>
    <?php echo form_open('members/add'); ?>
    Name: <input type="text" name="name" required><br>
    Email: <input type="text" name="email" required><br>
    School:
    <select name="school" required>
        <?php foreach ($schools as $school) {
            echo "<option value='" . $school->id . "'>" . $school->name . "</option>";
        } ?>
    </select>
    <br>
    <input type="submit" value="Add Member">
    <?php echo form_close(); ?>
</body>
</html>