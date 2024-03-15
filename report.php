<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Report</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
      <?php
      include("dashboard.php");
      ?>
      <div class="right">
            <?php
            include 'connect.php';
// SQL query to fetch report data
$sql = "SELECT furniture.FurnitureId, furniture.FurnitureName, furniture.FurnitureOwnerName, 
               SUM(import.quantity) AS importId, 
               SUM(export.quantity) AS exportId
        FROM furniture
        LEFT JOIN import ON furniture.furnitureid = import.furnitureid
        LEFT JOIN export ON furniture.furnitureid = export.furnitureid
        GROUP BY furniture.furnitureid";

$result = $conn->query($sql);

$conn->close();
?>

       <h1>Furniture Report</h1>
    <table class="table table-bordered table-hover table-stripped">
        <tr>
            <th>Furniture ID</th>
            <th>Name</th>
            <th>FurnitureOwnerName</th>
            <th>Total Imported</th>
            <th>Total Exported</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["FurnitureId"]."</td>";
                echo "<td>".$row["FurnitureName"]."</td>";
                echo "<td>".$row["FurnitureOwnerName"]."</td>";
                echo "<td>".$row["importId"]."</td>";
                echo "<td>".$row["exportId"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No results found</td></tr>";
        }
        ?>
    </table>
      </div>
      
</body>
</html>