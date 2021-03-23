<div class="card ccard">
  <div class="card-header">Share something!</div>
  <div class="card-body">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
      <div class="form-group">
        <label for="title">Share Title</label>
        <input type="text" name="title" id="title" class="form-control">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="link">Link</label>
        <input type="text" name="link" id="link" class="form-control">
      </div>
      <input class="btn btn-primary" type="submit" name="submit" value="Submit">
      <a href="<?php echo ROOT_PATH;?>shares" class="btn btn-danger">Cancel</a>
    </form>
  </div>
</div>