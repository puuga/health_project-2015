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

    <?php
      function calSectionA($entry) {
        $qa1= $entry["key_qa1"]+$entry["key_qa1_e1"]+$entry["key_qa1_e2"];
        $qa2= $entry["key_qa2"]+$entry["key_qa2_e1"];
        $sum_a1_a2 = $qa1 + $qa2;

        $qa3= $entry["key_qa3"]+$entry["key_qa3_e1"]+$entry["key_qa3_e2"]+$entry["key_qa3_e3"];
        $qa4= $entry["key_qa4"]+$entry["key_qa4_e1"]+$entry["key_qa4_e2"];
        $sum_a3_a4 = $qa3 + $qa4;

        $sectionA = calCrossTable1($sum_a1_a2, $sum_a3_a4)+$entry["key_qae"];
        return $sectionA;
      }

      function calSectionB($entry) {
        $qb1= $entry["key_qb1"]+$entry["key_qb1_e1"]+$entry["key_qb1_e2"]+$entry["key_qb1e"];
        $qb2= $entry["key_qb2"]+$entry["key_qb2_e1"]+$entry["key_qb2_e2"]+$entry["key_qb2e"];

        $sectionB = calCrossTable2($qb1,$qb2);
        return $sectionB;
      }

      function calSectionC($entry) {
        $qc1= $entry["key_qc1"]+$entry["key_qc1_e1"]+$entry["key_qc1_e2"]+$entry["key_qc1_e3"]+$entry["key_qc1e"];
        $qc2= $entry["key_qc2"]+$entry["key_qc2_e1"]+$entry["key_qc2_e2"]+$entry["key_qc2_e3"]+$entry["key_qc2_e4"]+$entry["key_qc2e"];

        $sectionC = calCrossTable3($qc1,$qc2);
        return $sectionC;
      }

      function calSectionD($b, $c) {
        $sectionD = calCrossTable4($b,$c);
        return $sectionD;
      }

      function calSectionE($a, $d) {
        $sectionE = calCrossTable5($a, $d);
        return $sectionE;
      }

      $entry = getResult($conn,$_GET["id"]);

      $score_section_a = calSectionA($entry);
      $score_section_b = calSectionB($entry);
      $score_section_c = calSectionC($entry);
      $score_section_d = calSectionD($score_section_b,$score_section_c);
      $score_section_e = calSectionE($score_section_a,$score_section_d);
    ?>


    <!-- <p>
      <?php print_r($entry); ?>
    </p>
    <p>
      <?php echo "a".$score_section_a; ?>
    </p>

    <p>
      <?php echo "b".$score_section_b; ?>
    </p>

    <p>
      <?php echo "c".$score_section_c; ?>
    </p>

    <p>
      <?php echo "d".$score_section_d; ?>
    </p>

    <p>
      <?php echo "e".$score_section_e; ?>
    </p> -->

    <h1><?php echo $evaluation_result; ?></h1>

    <div class="row">
      <div class="col-lg-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <p>
              <?php echo $score_a; ?><br/>
              <font size="7"><strong><?php echo $score_section_a; ?></strong></font>
              <?php echo $score_s; ?>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <p>
              <?php echo $score_b; ?><br/>
              <font size="7"><strong><?php echo $score_section_b; ?></strong></font>
              <?php echo $score_s; ?>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <p>
              <?php echo $score_c; ?><br/>
              <font size="7"><strong><?php echo $score_section_c; ?></strong></font>
              <?php echo $score_s; ?>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <p>
              <?php echo $score; ?><br/>
              <font size="7"><strong><?php echo $score_section_e; ?></strong></font>
              <?php echo $score_s; ?>
            </p>
          </div>
        </div>
      </div>
    </div>



    <h6><?php echo $score_ss; ?></h6>
    <h2><?php echo $s_title; ?></h2>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo $s_chair; ?></h3>
      </div>
      <div class="panel-body">
        <h4><?php echo $s_1_1_t; ?></h4>
        <p><?php echo $s_1_1_1; ?></p>
        <p><?php echo $s_1_1_1_s; ?></p>
        <p><img class="img-responsive" src="images/advice/01.jpg"></p>

        <p><?php echo $s_1_1_2; ?></p>
        <p><?php echo $s_1_1_2_s; ?></p>
        <p><img class="img-responsive" src="images/advice/02.jpg"></p>

        <p><?php echo $s_1_1_3; ?></p>
        <p><?php echo $s_1_1_3_s; ?></p>
        <p><img class="img-responsive" src="images/advice/03.jpg"></p>

        <h4><?php echo $s_1_2_t; ?></h4>
        <p><?php echo $s_1_2_1; ?></p>
        <p><?php echo $s_1_2_1_s; ?></p>
        <p><img class="img-responsive" src="images/advice/04.jpg"></p>

        <p><?php echo $s_1_2_2; ?></p>
        <p><?php echo $s_1_2_2_s; ?></p>
        <p><img class="img-responsive" src="images/advice/05.jpg"></p>

        <p><?php echo $s_1_2_3; ?></p>
        <p><?php echo $s_1_2_3_s; ?></p>
        <p><img class="img-responsive" src="images/advice/06.jpg"></p>

        <h4><?php echo $s_1_3_t; ?></h4>
        <p><?php echo $s_1_3_1; ?></p>
        <p><?php echo $s_1_3_1_s; ?></p>
        <p><img class="img-responsive" src="images/advice/07.jpg"></p>

        <p><?php echo $s_1_3_2; ?></p>
        <p><?php echo $s_1_3_2_s; ?></p>
        <p><img class="img-responsive" src="images/advice/08.jpg"></p>

        <p><?php echo $s_1_3_3; ?></p>
        <p><?php echo $s_1_3_3_s; ?></p>
        <p><img class="img-responsive" src="images/advice/09.jpg"></p>

        <p><?php echo $s_1_3_4; ?></p>
        <p><?php echo $s_1_3_4_s; ?></p>
        <p><img class="img-responsive" src="images/advice/10.jpg"></p>

        <p><?php echo $s_1_3_5; ?></p>
        <p><?php echo $s_1_3_5_s; ?></p>
        <p><img class="img-responsive" src="images/advice/11.jpg"></p>

        <h4><?php echo $s_1_4_t; ?></h4>
        <p><?php echo $s_1_4_1; ?></p>
        <p><?php echo $s_1_4_1_s; ?></p>
        <p><img class="img-responsive" src="images/advice/12.jpg"></p>

        <p><?php echo $s_1_4_2; ?></p>
        <p><?php echo $s_1_4_2_s; ?></p>
        <p><img class="img-responsive" src="images/advice/13.jpg"></p>

        <p><?php echo $s_1_4_3; ?></p>
        <p><?php echo $s_1_4_3_s; ?></p>
        <p><img class="img-responsive" src="images/advice/14.jpg"></p>

        <p><?php echo $s_1_4_4; ?></p>
        <p><?php echo $s_1_4_4_s; ?></p>
        <p><img class="img-responsive" src="images/advice/15.jpg"></p>

        <p><?php echo $s_1_4_5; ?></p>
        <p><img class="img-responsive" src="images/advice/16.jpg"></p>

        <p><?php echo $s_1_4_6; ?></p>
        <p><img class="img-responsive" src="images/advice/17.jpg"></p>

      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo $s_computer; ?></h3>
      </div>
      <div class="panel-body">
        <h4><?php echo $s_2_1_t; ?></h4>
        <p><?php echo $s_2_1_1; ?></p>
        <p><?php echo $s_2_1_1_s; ?></p>
        <p><img class="img-responsive" src="images/advice/18.jpg"></p>

        <p><?php echo $s_2_1_2; ?></p>
        <p><?php echo $s_2_1_2_s; ?></p>
        <p><img class="img-responsive" src="images/advice/19.jpg"></p>

        <p><?php echo $s_2_1_3; ?></p>
        <p><?php echo $s_2_1_3_s; ?></p>
        <p><?php echo $s_2_1_3_ss; ?></p>
        <p><img class="img-responsive" src="images/advice/20.jpg"></p>

        <p><?php echo $s_2_1_4; ?></p>
        <p><?php echo $s_2_1_4_s; ?></p>
        <p><img class="img-responsive" src="images/advice/21.jpg"></p>

        <p><?php echo $s_2_1_5; ?></p>
        <p><?php echo $s_2_1_5_s; ?></p>
        <p><img class="img-responsive" src="images/advice/22.jpg"></p>

        <p><?php echo $s_2_1_6; ?></p>
        <p><img class="img-responsive" src="images/advice/23.jpg"></p>

      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo $s_telephone; ?></h3>
      </div>
      <div class="panel-body">
        <h4><?php echo $s_3_1_t; ?></h4>
        <p><?php echo $s_3_1_1; ?></p>
        <p><?php echo $s_3_1_1_s; ?></p>
        <p><img class="img-responsive" src="images/advice/24.jpg"></p>

        <p><?php echo $s_3_1_2; ?></p>
        <p><?php echo $s_3_1_2_s; ?></p>
        <p><img class="img-responsive" src="images/advice/25.jpg"></p>

        <p><?php echo $s_3_1_3; ?></p>
        <p><?php echo $s_3_1_3_s; ?></p>
        <p><img class="img-responsive" src="images/advice/26.jpg"></p>

        <p><?php echo $s_3_1_4; ?></p>
        <p><?php echo $s_3_1_4_s; ?></p>
        <p><img class="img-responsive" src="images/advice/27.jpg"></p>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo $s_mouse; ?></h3>
      </div>
      <div class="panel-body">
        <h4><?php echo $s_4_1_t; ?></h4>
        <p><?php echo $s_4_1_1; ?></p>
        <p><?php echo $s_4_1_1_s; ?></p>
        <p><img class="img-responsive" src="images/advice/28.jpg"></p>

        <p><?php echo $s_4_1_2; ?></p>
        <p><?php echo $s_4_1_2_s; ?></p>
        <p><img class="img-responsive" src="images/advice/29.jpg"></p>

        <p><?php echo $s_4_1_3; ?></p>
        <p><?php echo $s_4_1_3_s; ?></p>
        <p><img class="img-responsive" src="images/advice/30.jpg"></p>

        <p><?php echo $s_4_1_4; ?></p>
        <p><?php echo $s_4_1_4_s; ?></p>
        <p><img class="img-responsive" src="images/advice/31.jpg"></p>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo $s_keyboard; ?></h3>
      </div>
      <div class="panel-body">
        <h4><?php echo $s_5_1_t; ?></h4>
        <p><?php echo $s_5_1_1; ?></p>
        <p><?php echo $s_5_1_1_s; ?></p>
        <p><img class="img-responsive" src="images/advice/32.jpg"></p>

        <p><?php echo $s_5_1_2; ?></p>
        <p><?php echo $s_5_1_2_s; ?></p>
        <p><img class="img-responsive" src="images/advice/33.jpg"></p>

        <p><?php echo $s_5_1_3; ?></p>
        <p><?php echo $s_5_1_3_s; ?></p>
        <p><img class="img-responsive" src="images/advice/34.jpg"></p>

        <p><?php echo $s_5_1_4; ?></p>
        <p><?php echo $s_5_1_4_s; ?></p>
        <p><img class="img-responsive" src="images/advice/35.jpg"></p>

        <p><?php echo $s_5_1_5; ?></p>
        <p><?php echo $s_5_1_5_s; ?></p>
        <p><img class="img-responsive" src="images/advice/36.jpg"></p>

        <p><?php echo $s_5_1_6; ?></p>
        <p><img class="img-responsive" src="images/advice/37.jpg"></p>
      </div>
    </div>

    <p>
      <a href="files/advice -581115 22.20.pdf" class="btn btn-material-orange btn-lg" role="button">
        <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
        <?php echo $download_advice; ?>
      </a>
    </p>

  </div>
  <?php include "nev_bar.php" ?>
</body>
</html>
