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

    <h1>Result</h1>
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


    <p>
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
    </p>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Basic panel example
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Basic panel example
      </div>
    </div>

  </div>
  <?php include "nev_bar.php" ?>
</body>
</html>
