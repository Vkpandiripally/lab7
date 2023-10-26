<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input
        $number = $_POST["number"];

        // Validate the input (check if it's a positive integer)
        if (ctype_digit($number) && $number > 0) {
    ?>
            <table>
                <?php
                // Generate and print rows for the multiplication table
                for ($row = 1; $row <= $number; $row++) {
                    echo "<tr><th>$row</th>";
                    for ($col = 1; $col <= $number; $col++) {
                        $result = $row * $col;
                        echo "<td>$result</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>
    <?php
        }
    }
    ?>
</body>
</html>



