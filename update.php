<?php
include 'connect.php';
$id = $_GET['updateid'];
if (isset($_POST['update'])){
      $id = $_GET['updateid'];
      $name = $_POST['name'];
      $oname = $_POST['oname'];

      $update = "UPDATE furniture SET FurnitureName='$name',FurnitureOwnerName='$oname' WHERE FurnitureId =$id";
      $result = mysqli_query($conn, $update);

      if ($result){
            header('location:furniture.php');
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add Furniture</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <style>
            form{
                  margin-top: 15%;
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
            <?php
            $select = "SELECT * FROM furniture";
            $result = mysqli_query($conn,$select);
            while ($row = mysqli_fetch_assoc($result)){
                  $name = $row['FurnitureName'];
                  $oname = $row['FurnitureOwnerName'];
            }
            ?>
            <h2>Update Furniture</h2>
            <label>FurnitureName</label><br>
            <input type="text" value="<?php echo $name ?>" class="form-control" name="name" required><br>
            <label>FurnitureOwnerName</label><br>
            <input type="text" value="<?php echo $oname ?>" class="form-control" name="oname" required><br>

            <center><button class="btn btn-primary" type="submit" name="update">Update</button></center>
      </form>
      </div>
</body>
</html>