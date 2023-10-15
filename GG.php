<!DOCTYPE html>
<html>
<head>
    <title>Dietary Plan Foods</title>
    <?php
    // Styles as a PHP variable
    $styles = "
        @font-face {
            font-family: 'Pacifico';
            src: local('Pacifico Regular'), local('Pacifico-Regular'), url(path/to/pacifico.woff2) format('woff2');
            font-weight: 400;
            font-style: normal;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            margin-top: 20px;
            margin-bottom: 10px;
            color: #FFD700; /* Gold color */
            font-family: 'Pacifico', cursive;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #555;
            color: #fff;
        }
        .food-name {
            font-weight: bold;
        }
    ";
    ?>
    <style>
        <?php echo $styles; ?>
    </style>
</head>
<body>

<h1>Dietary Plan Foods</h1>

<?php
// Sample dietary plan foods with additional info
$dietary_plan_foods = array(
    "Breakfast" => array(
        array("name" => "Oatmeal", "calories" => 150, "protein" => 5, "serving_size" => "1 cup"),
        array("name" => "Banana", "calories" => 105, "protein" => 1.3, "serving_size" => "1 medium"),
        array("name" => "Almonds", "calories" => 82, "protein" => 3, "serving_size" => "1 ounce")
    ),
    "Lunch" => array(
        array("name" => "Grilled chicken", "calories" => 335, "protein" => 31, "serving_size" => "4 oz"),
        array("name" => "Quinoa", "calories" => 222, "protein" => 8, "serving_size" => "1 cup cooked"),
        array("name" => "Broccoli", "calories" => 55, "protein" => 3.7, "serving_size" => "1 cup")
    ),
    "Dinner" => array(
        array("name" => "Salmon", "calories" => 206, "protein" => 22, "serving_size" => "3 oz"),
        array("name" => "Brown rice", "calories" => 215, "protein" => 5, "serving_size" => "1 cup cooked"),
        array("name" => "Asparagus", "calories" => 20, "protein" => 2.2, "serving_size" => "5 spears")
    ),
    "Snacks" => array(
        array("name" => "Greek yogurt", "calories" => 100, "protein" => 10, "serving_size" => "6 oz"),
        array("name" => "Mixed berries", "calories" => 70, "protein" => 1, "serving_size" => "1 cup"),
        array("name" => "Nuts", "calories" => 200, "protein" => 5, "serving_size" => "1 ounce")
    )
);

// Display the dietary plan foods in tables
foreach ($dietary_plan_foods as $meal => $foods) {
    echo "<h2>$meal:</h2>";
    echo "<table>";
    echo "<tr><th>Food Name</th><th>Calories</th><th>Protein (g)</th><th>Serving Size</th></tr>";
    foreach ($foods as $food) {
        echo "<tr>";
        echo "<td class='food-name'>{$food['name']}</td>";
        echo "<td>{$food['calories']}</td>";
        echo "<td>{$food['protein']}</td>";
        echo "<td>{$food['serving_size']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>