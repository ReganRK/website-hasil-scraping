<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Hi I'm Regan</h1><br>";

        echo "<center><table>";
        // Open a file
        $file = fopen("rumah.csv", "r");
  
        // Fetching data from csv file row by row
        while (($data = fgetcsv($file)) !== false) {
            // HTML tag for placing in row format
            echo "<tr>";
            foreach ($data as $i) {
                echo "<td>" . htmlspecialchars($i) 
                    . "</td>";
            }
            echo "</tr> \n";
        }
  
        // Closing the file
        fclose($file);

        echo "</table></center>";
    ?>
</body>
</html>