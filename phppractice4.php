<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table Generator</title>
</head>
<body>
    <h2>Multiplication Table for 6</h2>
    <ul>
    <?php
    // Number for the multiplication table
    $number = $_POST["number"];
    
    // Generate the multiplication table
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "<li>$number x $i = $result</li>";
    }
    ?>
    </ul>
</body>
</html>

