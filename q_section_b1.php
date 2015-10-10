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
    <?php echo sectionTitle($section_b_title); ?>

    <!-- section question -->
    <div class="row">

      <div class="col-lg-12">
        <div class="panel panel-material-grey">
          <div class="panel-heading">
            <h3><?php echo $q_b1; ?></h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" id="mainForm" method="post" action="">
              <fieldset>

                <div class="form-group">

                  <div class="col-lg-6">
                    <div class="radio radio-primary">
                      <label>
                        <input type="radio" name="qb1" id="qb1o1" value="1">
                        <?php echo $q_b1_o1; ?>
                        <img class="img-responsive img-thumbnail" src="images/s2/Q5I1.JPG" alt="" />
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="radio radio-primary">
                      <label>
                        <input type="radio" name="qb1" id="qb1o2" value="2">
                        <?php echo $q_b1_o2; ?>
                        <img class="img-responsive img-thumbnail" src="images/s2/Q5I2.JPG" alt="" />
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="radio radio-primary">
                      <label>
                        <input type="radio" name="qb1" id="qb1o3" value="3">
                        <?php echo $q_b1_o3; ?>
                        <img class="img-responsive img-thumbnail" src="images/s2/Q5I3.JPG" alt="" />
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
            <h3><?php echo $q_b1_e; ?></h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" id="mainFormE" method="post" action="">
              <fieldset>

                <div class="form-group">

                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="qb1e1" id="qb1e1" value="1">
                        <?php echo $q_b1_e_o1; ?>
                        <img class="img-responsive img-thumbnail" src="images/s2/Q5E1.JPG" alt="" />
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="qb1e2" id="qb1e2" value="1">
                        <?php echo $q_b1_e_o2; ?>
                        <img class="img-responsive img-thumbnail" src="images/s2/Q5E2.JPG" alt="" />
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="qb1e3" id="qb1e3" value="1">
                        <?php echo $q_b1_e_o3; ?>
                        <img class="img-responsive img-thumbnail" src="images/s2/Q5E3.JPG" alt="" />
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="qb1e4" id="qb1e4" value="1">
                        <?php echo $q_b1_e_o4; ?>
                        <img class="img-responsive img-thumbnail" src="images/s2/Q5E4.JPG" alt="" />
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
      localStorage.setItem(key_qb1, $('input[name=qb1]:checked', '#mainForm').val());
      localStorage.setItem(key_qb1_e1, $("#qb1e1").prop('checked'));
      localStorage.setItem(key_qb1_e2, $("#qb1e2").prop('checked'));
      localStorage.setItem(key_qb1_e3, $("#qb1e3").prop('checked'));
      localStorage.setItem(key_qb1_e4, $("#qb1e4").prop('checked'));

      // redirect page to ...
      window.location = "q_section_b1e.php";
    }

    function validateForm() {
      if ( typeof $('input[name=qb1]:checked', '#mainForm').val() === "undefined" ) {
        return false;
      }

      return true;
    }
  </script>
  <?php include "nev_bar.php" ?>
</body>
</html>
