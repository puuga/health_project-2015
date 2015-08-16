<?php include "include/db_connect_oo.php" ?>
<?php include "include.php" ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <?php include "include_head.php" ?>
  <title>Home</title>

  <script>
    $(document).ready(function() {
      // This command is used to initialize some elements and make them work properly
      $.material.init();

    });
  </script>
</head>
<body>
  <div class="container">
    <!-- <h1><?php echo $person_questionnaire_title; ?></h1> -->

    <div class="row">

      <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-material-pink-300">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo $person_questionnaire_title; ?></h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" method="post">

              <div class="form-group">
                <label class="col-lg-4 control-label"><?php echo $gender; ?></label>
                <div class="col-lg-8">
                  <div class="radio radio-primary">
                    <label>
                      <input type="radio" name="gender" id="gender_male" value="male">
                      <?php echo $gender_male; ?>
                    </label>
                  </div>
                  <div class="radio radio-primary">
                    <label>
                      <input type="radio" name="gender" id="gender_female" value="female">
                      <?php echo $gender_female; ?>
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="age" class="col-lg-4 control-label"><?php echo $age; ?></label>
                <div class="col-lg-2">
                  <input type="number" class="form-control" name="age" id="age" min="0" max="120">
                </div>
              </div>

              <div class="form-group">
                <label for="working_hour" class="col-lg-5 control-label">
                  <?php echo $working_hour; ?> (<?php echo $hour_per_day; ?>)
                </label>
                <div class="col-lg-2">
                  <input type="number" class="form-control" name="working_hour" id="working_hour" min="0" max="24">
                </div>
              </div>

              <div class="form-group">
                <label for="continous_working_hour" class="col-lg-5 control-label">
                  <?php echo $continous_working_hour; ?> (<?php echo $hour; ?>)
                </label>
                <div class="col-lg-2">
                  <input type="number" class="form-control" name="continous_working_hour" id="continous_working_hour" min="0" max="24">
                </div>
              </div>

            </form>
          </div>
          <div class="panel-footer text-right">
            <a href="person_questionnaire.php" class="btn btn-material-indigo"><?php echo $next; ?></a>
          </div>
        </div>

      </div>

    </div>
    <br/>

  </div>
  <?php include "nev_bar.php" ?>
</body>
</html>
