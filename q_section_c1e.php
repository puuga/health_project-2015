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
            <h3><?php echo $q_c1e; ?></h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" id="mainForm" method="post" action="">
              <fieldset>

                <div class="form-group">

                  <div class="col-lg-12">
                    <div class="radio radio-primary">
                      <label>
                        <input type="radio" name="qc1e" id="qc1eo1" value="1">
                        <?php echo $q_c1e_o1; ?>
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="radio radio-primary">
                      <label>
                        <input type="radio" name="qc1e" id="qc1eo2" value="0">
                        <?php echo $q_c1e_o2; ?>
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="radio radio-primary">
                      <label>
                        <input type="radio" name="qc1e" id="qc1eo3" value="-1">
                        <?php echo $q_c1e_o3; ?>
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
      localStorage.setItem(key_qc1e, $('input[name=qc1e]:checked', '#mainForm').val());

      // redirect page to ...
      window.location = "q_section_c2.php";
    }

    function validateForm() {
      if ( typeof $('input[name=qc1e]:checked', '#mainForm').val() === "undefined" ) {
        return false;
      }

      return true;
    }
  </script>
  <?php include "nev_bar.php" ?>
</body>
</html>
