<?php require_once 'include/header.php'?>
     
<h1 class="text-center">REGISTRATION TO IT CONFERENCE</h1>
<br><br>
<form method="get" action="success.php">
<div class="form-group">
    <b><label for="exampleInputfirstname">First name</label></b>
    <input required type="text" class="form-control" id="fname" aria-describedby="firstnameHelp" name="fname">
  </div>
  <div class="form-group">
    <b><label for="exampleInputlastname">Last name</label></b>
    <input required type="text" class="form-control" id="lname" aria-describedby="lastnameHelp" name="lname">
 </div>
 <div class="form-group">
   <b><label for="ExampleInputspecialty">Specialty</label></b>
   <div class="form-check">
   <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
   <small class="form-check-label" for="defaultCheck1">
    DATABASE ADMIN
</small>
</div>
<div class="form-check">
   <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
   <small class="form-check-label" for="defaultCheck2">
   SOFTWARE DEVELOPER
</small>
</div>
<div class="form-check">
   <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
   <small class="form-check-label" for="defaultCheck2">
   WEB ADMINISTRATOR
</small>
</div>

<div class="form-group">
<label>date of birth</label>
<input type="date" id="date" name="date">
</div>
  <div class="form-group">
    <b><label for="exampleInputEmail1">Email Address</label></b>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <b><label for="exampleInputPassword1">Password</label></b>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">CHECK OUT</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>

   <?php require_once 'include/footer.php'?>
</body>
</html>

