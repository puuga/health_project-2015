<div class="navbar navbar-material-orange navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button"
      class="navbar-toggle"
      data-toggle="collapse"
      data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><?php echo $title_mini; ?></a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <p class="navbar-text">
        <?php echo $title; ?>
      </p>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="detail.php"><?php echo $condition; ?></a></li>
        <li><a href="#"><?php echo $explanation; ?></a></li>
        <li><a href="#"><?php echo $evaluation; ?></a></li>
      </ul>

    </div>
  </div>
</div>
