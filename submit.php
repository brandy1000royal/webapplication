<!DOCTYPE html>
<html lang="en">
<head>
<?php
require_once 'header.php'; 
require_once 'conn.php';

if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $telephone =$_POST['num'];
    $dest =$_POST['destination'];
    $location =$_POST['location'];
    $isSuccess = $crud->insert($name,$location,$dest,$location); 

    if($isSuccess){
        echo 'yes';
    }
    else {
        echo 'no';
    }
}

?>
<h1 style="font-size:60px;font family: verdana;color: #000000;text-align:center">...Your Taxi is on its way <?php echo $_POST ['name'];?></h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Zuber</h5>
    <p class="card-text"><//?php echo $__GET ['name'}?> </p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Leaving From:<//?php echo $__GET ['location'}?></li>
    <li class="list-group-item">Going to:<//?php echo $__GET ['destination'}?></li>
    <li class="list-group-item">Contact:<//?php echo $__GET ['num'}?></li>
  </ul>
</div>-->

<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Name:
       <?php echo $_POST ['name'];?>
     </li>
    <li class="list-group-item">Leaving From:
        <?php echo $_POST ['location'];?>
     </li>
    <li class="list-group-item">Going to:
        <?php echo $_POST['destination'];?>
      </li>
    <li class="list-group-item">Contact:
        <?php echo $_POST ['num'];?>
     </li>
    
  </ul>
</div>
<style>
body  {
  background-image: url("cabz.gif");
  background-color: #cccccc;
}

<?php require_once 'footer.php'; ?>
</body>
</html>