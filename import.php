<?php
include 'connect.php';

if(isset($_POST['import'])) {
    $furnitureName = $_POST['name'];
    $importDate = $_POST['date'];
    $quantity = $_POST['quant'];

    $insert = "INSERT INTO `import` (FurnitureId, ImportDate, Quantity) VALUES ('$furnitureName', '$importDate', '$quantity')";
    
    if(mysqli_query($conn, $insert)) {
        echo "<script>alert('Import successful');</script>";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Import</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <style>
            form{
                  margin-top: 12%;
                  color: white;
                  margin-left: 300px;
                  margin-right: 300px;
                  box-shadow: 0px 0px 5px 10px rgba(0, 0, 0, 0.1);
                  border-radius: 10px;
                  border: 1px solid #333;
                  padding: 20px;
            }
      </style>
</head>
<body>
      <?php
      include 'dashboard.php';
      ?>
      <div class="right">
      <form action="" method="post">
            <h2>Import Furniture</h2>
            <label>FurnitureName</label><br>
            <select class="form-select" name="name">
            <?php
            include 'connect.php';
            $select = "SELECT FurnitureId, FurnitureName FROM furniture";
            $result = mysqli_query($conn,$select);
            echo "<option value='' selected disabled>--Select FurnitureName--</option>";
            $res = mysqli_num_rows($result);
            if($res>0){
                  while($row = mysqli_fetch_assoc($result)){
                        echo "<option value='".$row['FurnitureId']."'>".$row['FurnitureName']."</option>";
                  }
            }
            ?>
            </select><br>
            <label>ImportDate</label><br>
            <input type="date" class="form-control" name="date" required><br>
            <label>Quantity</label><br>
            <input type="text" class="form-control" name="quant" placeholder="Quantity" required><br>

            <center><button class="btn btn-primary" type="submit" name="import">Import</button></center>
      </form>
      </div>
</body>
</html>