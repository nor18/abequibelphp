<?php require_once 'include/header.php'?>
     
<h1 class="text-center">REGISTRATION TO IT CONFERENCE</h1>
<br><br>
<form>
<div class="form-group">
    <b><label for="exampleInputfirstname">FIRST NAME</label></b>
    <input type="firstname" class="form-control" id="exampleInputfirstname" aria-describedby="firstnameHelp">
  </div>

  <div class="form-group">
    <b><label for="exampleInputlastname">LAST NAME</label></b>
    <input type="lastname" class="form-control" id="exampleInputlastname" aria-describedby="lastnameHelp">
 </div>

 <div class="form-group">
    <b><label for="exampleInputspecialty">SPECIALTY</label></b>
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
<b><label>Date:</label></b>
<input type="text" id="datepicker">
</div>
  <div class="form-group">
    <b><label for="exampleInputEmail1">Email address</label></b>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <b><label for="exampleInputPassword1">Password</label></b>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>

   <?php require_once 'include/footer.php'?>
</body>
</html>

