<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Age verify</title>
</head>
<body>
    <form action="" method="GET">
        <h2>What is your age?</h2>
        <input type="number" placeholder="Enter your age" name="age" required min="0" class='input'>
        <input type="submit" value="Submit" class='submit'>
    </form>

    <?php
    if (isset($_GET['age'])) {
        $age = $_GET['age'];
        if ($age < 18) {
            echo "<h3 style='color: red'>You are not eligible!</h3>";
            $remainingAge = 18 - $age;
            echo "<h4>Remaining age to become eligible: $remainingAge</h4>";
        } else {
            echo "<h3 style='color: green'>You are eligible!</h3>";
        }
    }
    ?>
</body>
</html>