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

    <!-- section title -->
    <?php echo sectionTitle($section_c_title); ?>

    <!-- section question -->
    <div class="row">

      <div class="col-lg-12">
        <div class="panel panel-material-grey">
          <div class="panel-heading">
            <h3><?php echo $q_c2; ?></h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" id="mainForm" method="post" action="">
              <fieldset>

                <div class="form-group">

                  <div class="col-lg-6">
                    <div class="radio radio-primary">
                      <label>
                        <input type="radio" name="qc2" id="qc2o1" value="1">
                        <?php echo $q_c2_o1; ?>
                        <img class="img-responsive img-thumbnail" src="images/s3/Q8I1.JPG" alt="" />
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="radio radio-primary">
                      <label>
                        <input type="radio" name="qc2" id="qc2o2" value="2">
                        <?php echo $q_c2_o2; ?>
                        <img class="img-responsive img-thumbnail" src="images/s3/Q8I2.JPG" alt="" />
                      </label>
                    </div>
                  </div>

                </div>

              </fieldset>
            </form>
          </div>
        </div>
      </div>

    </div>

    <!-- section question -->
    <div class="row">

      <div class="col-lg-12">
        <div class="panel panel-material-grey">
          <div class="panel-heading">
            <h3><?php echo $q_c2_e; ?></h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" id="mainFormE" method="post" action="">
              <fieldset>

                <div class="form-group">

                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="qc2e1" id="qc2e1" value="1">
                        <?php echo $q_c2_e_o1; ?>
                        <img class="img-responsive img-thumbnail" src="images/s3/Q8E1.JPG" alt="" />
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="qc2e2" id="qc2e2" value="1">
                        <?php echo $q_c2_e_o2; ?>
                        <img class="img-responsive img-thumbnail" src="images/s3/Q8E2.JPG" alt="" />
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="qc2e3" id="qc2e3" value="1">
                        <?php echo $q_c2_e_o3; ?>
                        <img class="img-responsive img-thumbnail" src="images/s3/Q8E3.JPG" alt="" />
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="qc2e4" id="qc2e4" value="1">
                        <?php echo $q_c2_e_o4; ?>
                        <img class="img-responsive img-thumbnail" src="images/s3/Q8E4.JPG" alt="" />
                      </label>
                    </div>
                  </div>

                </div>

              </fieldset>
            </form>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-lg-6 col-lg-offset-6 text-right">
        <a class="btn btn-material-orange btn-lg" href="javascript:saveData()" role="button">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <?php echo $next; ?>
        </a>
      </div>
    </div>
    <br/>

  </div>

  <script type="text/javascript">
    function saveData() {
      // validate form
      if (!validateForm()) {
        return;
      }

      // check browser support local storage
      if ( !isLocalStorageSupported() ) {
        return;
      }

      // save data to local storage
      localStorage.setItem(key_qc2, $('input[name=qc2]:checked', '#mainForm').val());
      localStorage.setItem(key_qc2_e1, $("#qc2e1").prop('checked'));
      localStorage.setItem(key_qc2_e2, $("#qc2e2").prop('checked'));
      localStorage.setItem(key_qc2_e3, $("#qc2e3").prop('checked'));
      localStorage.setItem(key_qc2_e4, $("#qc2e4").prop('checked'));

      // redirect page to ...
      window.location = "q_section_c2e.php";
    }

    function validateForm() {
      if ( typeof $('input[name=qc2]:checked', '#mainForm').val() === "undefined" ) {
        return false;
      }

      return true;
    }
  </script>
  <?php include "nev_bar.php" ?>
</body>
</html>
