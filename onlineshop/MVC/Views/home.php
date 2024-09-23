<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:log.php");
}
    $res=data();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
  <h1>Home Page</h1>
  welcome <?php echo $_SESSION['id'];?>
<br>
<?php 
if(isset($_SESSION['mess'])){
  echo $_SESSION['mess'];
  unset($_SESSION['mess']);
}
?>
    
    <table border="1">
      <tr>
        <th>Id</th>
         <th>Name</th>
         <th>pass</th>

      </tr>
<?php while ($r=$res->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $r['id']; ?></td>
        <td><?php echo $r['name']; ?></td>
        <td><?php echo $r['pass']; ?></td>

        <form action="../Controllers/homeController.php">
        </form>
        <form action="../Controllers/homeController.php">
      </form>
      </tr>
 <?php } ?>
    </table>
   </form> 
    

  <form method="post" action="../Controllers/logCheckController.php">
    <button name="logout">Logout</button>
  </form>
   
</body>
</html>