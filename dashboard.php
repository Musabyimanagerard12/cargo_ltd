<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dashboard</title>
      <style>
            *{
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      padding: 0;
      margin: 0;
      box-sizing: border-box;
}
.container{
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
}
.left{
      float: left;
      position: fixed;
      width: 15%;
      height: 100vh;
      background-color: rgb(4, 4, 88);
}
.left h1{
      color: white;
      padding-top: 3.5vh;
      font-style: italic;
}
.left nav{
      background: blue;
      height: 100vh;
      width: 100%;
}
.left nav ul{
      align-items: center;
      justify-content: center;
}
.left nav ul li{
      list-style-type: none;
      font-size: 20px;
      padding: 32px 32px 32px 10px;
}
.left nav ul li a{
      text-decoration: none;
      color: white;
      background-color: rgb(18, 18, 131);
      padding: 6px;
      border-radius: 10px;
      font-style: italic;
      font-weight: bold;
}
.right{
      opacity: 0.9;
      float: right;
      width: 84%;
      height: 100vh;
      background-color: rgb(6, 6, 88);
}
.right h1{
      height: 10vh;
      background: rgb(57, 57, 224);
      color: white;
      font-style: italic;
      text-align: center;
}
      </style>
</head>
<body>
<div class="container-fluid">
    <div class="left">
        <h1>Cargo Ltd</h1>
        <nav>
           <ul>
            <li>
                <a href="home.php">Dashboard</a>
            </li>
            <li>
                <a href="furniture.php">Furniture</a>
            </li>
            <li>
                <a href="import.php">Import</a>
            </li>
            <li>
                <a href="export.php">Export</a>
            </li>
            <li>
                <a href="report.php">Report</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
           </ul>
        </nav>
    </div>
      
</body>
</html>