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
          <div class="panel-heading">
            <h3>a2</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" id="mainForm" method="post" action="">
              <fieldset>

                <div class="form-group">
                  <label for="inputName" class="col-lg-2 control-label">
                    <?php echo $q_name; ?>
                  </label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control material-orange" id="inputName" placeholder="<?php echo $q_name; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail" class="col-lg-2 control-label">
                    <?php echo $q_email; ?>
                  </label>
                  <div class="col-lg-8">
                    <input type="email" class="form-control" id="inputEmail" placeholder="<?php echo $q_email; ?>" required>
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
      validateForm();

      // check browser support local storage
      if ( !isLocalStorageSupported() ) {
        return;
      }

      // save data to local storage
      localStorage.setItem(key_name, $("#inputName").val());
      localStorage.setItem(key_email, $("#inputEmail").val());

      // redirect page to ...
      window.location = "q_section_a3.php";
    }

    function validateForm() {
      if ( $("#inputName").val() === "" ) {
        $("#inputName").focus();
      }
      if ( $("#inputEmail").val() === "" ) {
        $("#inputEmail").focus();
      }
    }
  </script>
  <?php include "nev_bar.php" ?>
</body>
</html>
