<?php include "include/db_connect_oo.php" ?>
<?php include "include.php" ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <?php include "include_head.php" ?>
  <title><?php echo $title; ?></title>

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
        <h1 class="text-center"><?php echo $end_question; ?></h1>
        <p class="text-center">
          <a class="btn btn-material-orange btn-lg" href="javascript:submitAnswer()" role="button">
            <span class="glyphicon glyphicon-send" aria-hidden=""true""></span>
            <?php echo $submit; ?>
          </a>
        </p>
      </div>

    </div>

  </div>
  <script type="text/javascript">
    function submitAnswer() {
      // check browser support local storage
      if ( !isLocalStorageSupported() ) {
        return;
      }

      var data = readStorage();
      console.log(data);

      $.ajax({
        url: "service_submit.php",
        method: "POST",
        data: data
      })
        .done(function(entry) {
          // alert( "success" );
          console.log(entry);

          // redirect page to ...
          window.location = "q_result.php?id="+entry.id;
        })
        .fail(function() {
          alert( "error" );
        });
    }

    function readStorage() {
      var data = {};
      data.key_name = localStorage.key_name;
      data.key_email = localStorage.key_email;

      data.key_qa1 = localStorage.key_qa1;
      data.key_qa1_e1 = localStorage.key_qa1_e1==="true"?1:0;
      data.key_qa1_e2 = localStorage.key_qa1_e2==="true"?1:0;

      data.key_qa2 = localStorage.key_qa2;
      data.key_qa2_e1 = localStorage.key_qa2_e1==="true"?1:0;

      data.key_qa3 = localStorage.key_qa3;
      data.key_qa3_e1 = localStorage.key_qa3_e1==="true"?1:0;
      data.key_qa3_e2 = localStorage.key_qa3_e2==="true"?1:0;
      data.key_qa3_e3 = localStorage.key_qa3_e3==="true"?1:0;

      data.key_qa4 = localStorage.key_qa4;
      data.key_qa4_e1 = localStorage.key_qa4_e1==="true"?1:0;
      data.key_qa4_e2 = localStorage.key_qa4_e2==="true"?1:0;

      data.key_qae = localStorage.key_qae;

      data.key_qb1 = localStorage.key_qb1;
      data.key_qb1_e1 = localStorage.key_qb1_e1==="true"?1:0;
      data.key_qb1_e2 = localStorage.key_qb1_e2==="true"?1:0;
      data.key_qb1_e3 = localStorage.key_qb1_e3==="true"?1:0;
      data.key_qb1_e4 = localStorage.key_qb1_e4==="true"?1:0;

      data.key_qb1e = localStorage.key_qb1e;

      data.key_qb2 = localStorage.key_qb2;
      data.key_qb2_e1 = localStorage.key_qb2_e1=="true"?2:0;
      data.key_qb2_e2 = localStorage.key_qb2_e2=="true"?1:0;

      data.key_qb2e = localStorage.key_qb2e;

      data.key_qc1 = localStorage.key_qc1;
      data.key_qc1_e1 = localStorage.key_qc1_e1==="true"?2:0;
      data.key_qc1_e2 = localStorage.key_qc1_e2==="true"?1:0;
      data.key_qc1_e3 = localStorage.key_qc1_e3==="true"?1:0;

      data.key_qc1e = localStorage.key_qc1e;

      data.key_qc2 = localStorage.key_qc2;
      data.key_qc2_e1 = localStorage.key_qc2_e1==="true"?1:0;
      data.key_qc2_e2 = localStorage.key_qc2_e2==="true"?1:0;
      data.key_qc2_e3 = localStorage.key_qc2_e3==="true"?1:0;
      data.key_qc2_e4 = localStorage.key_qc2_e4==="true"?1:0;

      data.key_qc2e = localStorage.key_qc2e;

      return data;
    }
  </script>
  <?php include "nev_bar.php" ?>
</body>
</html>
