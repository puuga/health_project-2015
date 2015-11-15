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
            <div class="row">

              <div class="col-lg-4 col-lg-offset-2">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <?php echo $researcher; ?>
                  </div>
                  <div class="panel-body">
                    <ol>
                      <li><?php echo $researcher_1; ?></li>
                      <li><?php echo $researcher_2; ?></li>
                      <li><?php echo $researcher_3; ?></li>
                    </ol>
                    <?php echo $dept_health_science; ?> <?php echo $naresuan_u; ?>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <?php echo $adviser; ?>
                  </div>
                  <div class="panel-body">
                    <ol>
                      <li>
                        <?php echo $adviser_1; ?></br>
                        <?php echo $dept_health_science; ?> <?php echo $naresuan_u; ?>
                      </li>
                      <li>
                        <?php echo $adviser_2; ?></br>
                        <?php echo $dept_science; ?> <?php echo $naresuan_u; ?>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>

            </div>



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
              <?php echo $process_text_detail; ?>
              <ol>
                <li><?php echo $process_a_title; ?></li>
                <li><?php echo $process_b_title; ?></li>
                <li><?php echo $process_c_title; ?></li>
              </ol>
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
              <img class="img-responsive"
                src="images/eva_s1_n.jpg"
                alt="<?php echo $process_a_title; ?>" />
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
              <img class="img-responsive"
                src="images/eva_s2_n.jpg"
                alt="<?php echo $process_b_title; ?>" />
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
              <img class="img-responsive"
                src="images/eva_s3_n.jpg"
                alt="<?php echo $process_c_title; ?>" />
            </p>
          </div>
        </div>
      </div>


    </div>

    <div class="row">
      <div class="col-lg-6 col-lg-offset-6 text-right">
        <a class="btn btn-material-orange btn-lg" href="explanation.php" role="button">
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
