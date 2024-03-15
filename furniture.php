<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Furniture</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
      <?php
      include ("dashboard.php");
      ?>
      <div class="right">
      <h1>Available Furniture</h1>

      <button style="margin-left: 800px;" class="btn btn-success"><a class="text-decoration-none text-light" href="add_furniture.php">Add Furniture</a></button><br><br>
      <table class="table table-bordered table-hover table-stripped">
            <thead>
                  <tr>
                    <th>Id</th>
                    <th>FurnitureName</th>
                    <th>FurnitureOwnerName</th>
                    <th>Operations</th>
                 </tr>
            </thead>
            <tbody>
                  <?php
                  $select = "SELECT * FROM `furniture`";
                  $result = mysqli_query($conn,$select);
                  while($row = mysqli_fetch_assoc($result)){
                        $id = $row['FurnitureId'];
                        $name = $row['FurnitureName'];
                        $oname = $row['FurnitureOwnerName'];

                        echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$oname.'</td>
                                <td>
                                <button class="btn btn-primary"><a class="text-decoration-none text-light" href="update.php?updateid='.$id.'">Update</a></button>
                                <button class="btn btn-danger"><a class="text-decoration-none text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
                                </td>
                        </tr>';
                  }

                  ?>
            </tbody>
      </table>
      </div>
</body>
</html>