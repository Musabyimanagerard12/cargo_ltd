<?php
include 'connect.php';

$id = $_GET['FurnitureId'];
if(isset($_GET['deleteid'])){
      $id = $_GET['deleteid'];

      $delete = "DELETE FROM Furniture WHERE FurnitureId ='$id'";
      $result = mysqli_query($conn,$delete);

      if($result){
            header("location:furniture.php");
      }
}
?>