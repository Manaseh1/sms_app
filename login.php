<?php
  include 'includes/head.php';
?>


<div class="container">

  <div class="row justify-content-center mt-5">
    
    <div class="col-md-6 border">
      <form class="mt-3" method ="POST" action ="includes/auth/login.inc.php">
    <div>
      <h2> Login form(we can put a logo)</h2>
    </div>
       
       
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
      </form>
    </div>
  </div>
</div>
        