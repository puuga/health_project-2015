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
  <style>
    .sp-color{
      background: linear-gradient(to bottom, #FF9800 0%,#FF9800 50%,#000000 50%,#9E9E9E 50%,#9E9E9E 100%); /* W3C */
    }
  </style>
</head>
<body>
  <div class="container">

    <div class="row">

      <div class="col-lg-12">
        <div class="panel panel-material-grey">
          <div class="panel-body text-center sp-color">
            <p>
              <img src="images/nu_logo.png" alt="Naresuan University" class="img-responsive" style="margin:auto;"/>
            </p>
            <h1>
              <?php echo $title_th; ?><br/>
              <?php echo $title_en; ?>
            </h1>
          </div>
        </div>
      </div>



    </div>

    <div class="row">
      <div class="col-lg-6 col-lg-offset-6 text-right">
        <a class="btn btn-material-orange btn-lg" href="detail.php" role="button">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <?php echo $next;?>
        </a>
      </div>
    </div>
    <br/>

  </div>
  <?php include "nev_bar.php" ?>
</body>
</html>
