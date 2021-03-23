<div class="w-100">
  <a href="<?php echo ROOT_PATH;?>shares/add" class="btn btn-success">Share something</a>
  <?php foreach ($viewmodel as $item) : ?>
    <div class="card card-body bg-light mt-4 w-100">
      <h3><?php echo $item['title'];?></h3>
      <small><?php echo $item['create_date'];?></small>
      <hr />
      <p><?php echo $item['body'];?></p>
      <br />
      <a href="<?php echo $item['link'];?>" class="btn btn-default" target="_blank">Go to website</a>
    </div>
  <?php endforeach; ?>
</div>