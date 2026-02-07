<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fati
    </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .dog-container {
            border: 2px solid #333;
            padding: 15px;
            margin-bottom: 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .dog-name {
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .dog-origin {
            color: #888;
            font-size: 16px;
        }
        .dog-life-span {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>phones</th>
            <th>syock</th>
            <th>sold</th>
        </tr>
    </table>
    <?php
    $dogs = [
        array("Husky", "Siberia", 15),
        array("Bulldog", "England", 10),
        array("Chihuahua", "Mexico", 20)
    ];

   echo '<div class="dog-container">';
    echo '  <div class="dog-name">' . $dogs[0][0] . '</div>';
    echo '  <div class="dog-origin">Origin: ' . $dogs[0][1] . '</div>';
    echo '  <div class="dog-life-span">Life Span: ' . $dogs[0][2] . ' years</div>';
    echo '</div>';

    echo '<div class="dog-container">';
    echo '  <div class="dog-name">' . $dogs[1][0] . '</div>';
    echo '  <div class="dog-origin">Origin: ' . $dogs[1][1] . '</div>';
    echo '  <div class="dog-life-span">Life Span: ' . $dogs[1][2] . ' years</div>';
    echo '</div>';

    echo '<div class="dog-container">';
    echo '  <div class="dog-name">' . $dogs[2][0] . '</div>';
    echo '  <div class="dog-origin">Origin: ' . $dogs[2][1] . '</div>';
    echo '  <div class="dog-life-span">Life Span: ' . $dogs[2][2] . ' years</div>';
    echo '</div>';


$phones = [
    ["Iphone 15", 20, 15],
    ["Iphone 16", 30, 20],
    ["iphone 17", 50, 50]
];
   for($row = 0; $row<3; $row++){
    echo "<tr>";
    for($col = 0; $col<3; $col++){
        echo "<td>". $phones[$row][$col]. "</td>";
    }
    echo "</tr>";
}
echo "</table>"; 
    ?>
</body>
</html>