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

    <div class="row">

      <div class="col-lg-12">
        <div class="panel panel-material-grey">
          <div class="panel-body text-center">
            <p>
              <h1>
                <?php echo $welcome_text; ?>
                <?php echo $title; ?>
              </h1>
            </p>
          </div>
          <div class="panel-footer">
            <?php echo $researcher; ?>
            <?php echo $researcher_1; ?>
            <?php echo $researcher_2; ?>
            <?php echo $and.$researcher_3; ?><br/>
            <?php echo $adviser; ?>
            <?php echo $adviser_1; ?>
            <?php echo $and.$adviser_2; ?><br/>
            <?php echo $naresuan_u; ?>
          </div>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="panel panel-material-grey">
          <div class="panel-heading">
            <h3><?php echo $process_text; ?></h3>
          </div>
          <div class="panel-body">
            <p>
              <?php echo $welcome_text; ?>
              <?php echo $title; ?>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="panel panel-material-grey">
          <div class="panel-heading">
            <h4><?php echo $process_a_title; ?></h4>
          </div>
          <div class="panel-body">
            <p>
              <?php echo $welcome_text; ?>
              <?php echo $title; ?>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="panel panel-material-grey">
          <div class="panel-heading">
            <h4><?php echo $process_b_title; ?></h4>
          </div>
          <div class="panel-body">
            <p>
              <?php echo $welcome_text; ?>
              <?php echo $title; ?>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="panel panel-material-grey">
          <div class="panel-heading">
            <h4><?php echo $process_c_title; ?></h4>
          </div>
          <div class="panel-body">
            <p>
              <?php echo $welcome_text; ?>
              <?php echo $title; ?>
            </p>
          </div>
        </div>
      </div>


    </div>

    <div class="row">
      <div class="col-lg-6 col-lg-offset-6 text-right">
        <a class="btn btn-material-orange btn-lg" href="#" role="button">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <?php echo $next; ?>
        </a>
      </div>
    </div>
    <br/>

  </div>
  <?php include "nev_bar.php" ?>
</body>
</html>
