<div class="card ccard">
  <div class="card-header">Register User</div>
  <div class="card-body">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>
      <input class="btn btn-primary" type="submit" name="submit" value="Register">
    </form>
  </div>
</div>