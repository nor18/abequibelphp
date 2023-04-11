<?php
$title = "succcess";
require_once 'include/header.php';
?>

<h1 class="text-center">YOU HAVE BEEN REGISTERED</h1>

<?php
?>
<div class="card" style="width: 18rem;">
<div class="card-body">
  <h5 class="card-title"><?php echo $_GET['fname'].' '.$_GET['lname'];?>
</h5>
  <p class="card-text">
    Date of birth:<?php echo $_GET['date'];?>
</p>              
  <a href="#" class="card-link">Go somewhere</a>
 </div>
</div>


<br>
<br>
<br>
<br>

<?php require_once 'include/footer.php'?>
     