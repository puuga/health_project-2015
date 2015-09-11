<?php include "include/db_connect_oo.php" ?>
<?php include "include.php" ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <?php include "include_head.php" ?>
  <title><?php echo "$title"; ?></title>

  <script>
    $(document).ready(function() {
      // This command is used to initialize some elements and make them work properly
      $.material.init();

    });
  </script>
</head>
<body>
  <div class="container">
    <div class="text-center">
      <h1><?php echo $title; ?></h1>
    </div>

    <div class="row">

      <div class="col-lg-6">
        <div class="panel panel-material-grey">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo $detail; ?></h3>
          </div>
          <div class="panel-body">
            <p>
              <?php echo $detail_text; ?>
            </p>
            <p>
              <?php echo $detail_text_con; ?>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="panel panel-material-grey">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo $condition_title; ?></h3>
          </div>
          <div class="panel-body">
            <ul>
              <li><?php echo $condition_text_1; ?></li>
              <li><?php echo $condition_text_2; ?></li>
              <li><?php echo $condition_text_3; ?></li>
              <li><?php echo $condition_text_4; ?></li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-lg-6 col-lg-offset-6 text-right">
        <a class="btn btn-flat btn-default btn-lg" href="index.php" role="button">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          <?php echo $decline; ?>
        </a>
        <a class="btn btn-material-orange btn-lg" href="welcome.php" role="button">
          <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
          <?php echo $accept; ?>
        </a>
      </div>
    </div>
    <br/>

  </div>
  <?php include "nev_bar.php" ?>
</body>
</html>
