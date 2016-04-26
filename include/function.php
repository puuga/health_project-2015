<?php

function sectionTitle($message) {
  return "<div class='row'>
    <div class='col-lg-12'>
      <div class='panel panel-material-grey'>
        <div class='panel-body'>
          <h2>$message</h2>
        </div>
      </div>
    </div>
  </div>";
}

function getResults($conn) {
  $sql = "SELECT * FROM data_entry ORDER BY id DESC";
  $result = $conn->query($sql);

  $entrirs = array();
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $entrirs[] = $row;
    }
  }

  return $entrirs;
}

function getResult($conn, $id) {
  $sql = "SELECT * FROM data_entry WHERE id=$id ORDER BY id DESC";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $entry = $row;
    }
  }

  return $entry;
}

function calCrossTable1($a, $b) {
  $cross[2][2] = 2;
  $cross[2][3] = 2;
  $cross[2][4] = 3;
  $cross[2][5] = 4;
  $cross[2][6] = 5;
  $cross[2][7] = 6;
  $cross[2][8] = 7;
  $cross[2][9] = 8;

  $cross[3][2] = 2;
  $cross[3][3] = 2;
  $cross[3][4] = 3;
  $cross[3][5] = 4;
  $cross[3][6] = 5;
  $cross[3][7] = 6;
  $cross[3][8] = 7;
  $cross[3][9] = 8;

  $cross[4][2] = 3;
  $cross[4][3] = 3;
  $cross[4][4] = 3;
  $cross[4][5] = 4;
  $cross[4][6] = 5;
  $cross[4][7] = 6;
  $cross[4][8] = 7;
  $cross[4][9] = 8;

  $cross[5][2] = 4;
  $cross[5][3] = 4;
  $cross[5][4] = 4;
  $cross[5][5] = 4;
  $cross[5][6] = 5;
  $cross[5][7] = 6;
  $cross[5][8] = 7;
  $cross[5][9] = 8;

  $cross[6][2] = 5;
  $cross[6][3] = 5;
  $cross[6][4] = 5;
  $cross[6][5] = 5;
  $cross[6][6] = 6;
  $cross[6][7] = 7;
  $cross[6][8] = 8;
  $cross[6][9] = 9;

  $cross[7][2] = 6;
  $cross[7][3] = 6;
  $cross[7][4] = 6;
  $cross[7][5] = 7;
  $cross[7][6] = 7;
  $cross[7][7] = 8;
  $cross[7][8] = 8;
  $cross[7][9] = 9;

  $cross[8][2] = 7;
  $cross[8][3] = 7;
  $cross[8][4] = 7;
  $cross[8][5] = 8;
  $cross[8][6] = 8;
  $cross[8][7] = 9;
  $cross[8][8] = 9;
  $cross[8][9] = 9;

  return $cross[$a][$b];
}

function calCrossTable2($a, $b) {
  $cross[0][0] = 1;
  $cross[0][1] = 1;
  $cross[0][2] = 1;
  $cross[0][3] = 2;
  $cross[0][4] = 3;
  $cross[0][5] = 4;
  $cross[0][6] = 5;
  $cross[0][7] = 6;
  $cross[1][0] = 1;
  $cross[1][1] = 1;
  $cross[1][2] = 2;
  $cross[1][3] = 2;
  $cross[1][4] = 3;
  $cross[1][5] = 4;
  $cross[1][6] = 5;
  $cross[1][7] = 6;
  $cross[2][0] = 1;
  $cross[2][1] = 2;
  $cross[2][2] = 2;
  $cross[2][3] = 3;
  $cross[2][4] = 3;
  $cross[2][5] = 4;
  $cross[2][6] = 6;
  $cross[2][7] = 7;
  $cross[3][0] = 2;
  $cross[3][1] = 2;

  $cross[3][2] = 3;
  $cross[3][3] = 3;
  $cross[3][4] = 4;
  $cross[3][5] = 5;
  $cross[3][6] = 6;
  $cross[3][7] = 8;
  $cross[4][0] = 3;
  $cross[4][1] = 3;
  $cross[4][2] = 4;
  $cross[4][3] = 4;
  $cross[4][4] = 5;
  $cross[4][5] = 6;
  $cross[4][6] = 7;
  $cross[4][7] = 8;
  $cross[5][0] = 4;
  $cross[5][1] = 4;
  $cross[5][2] = 5;
  $cross[5][3] = 5;
  $cross[5][4] = 6;
  $cross[5][5] = 7;
  $cross[5][6] = 8;
  $cross[5][7] = 9;
  $cross[6][0] = 5;
  $cross[6][1] = 5;
  $cross[6][2] = 6;
  $cross[6][3] = 7;
  $cross[6][4] = 8;
  $cross[6][5] = 8;
  $cross[6][6] = 9;
  $cross[6][7] = 9;

  return $cross[$a][$b];
}

function calCrossTable3($a, $b) {
  $cross[0][0] = 1;
  $cross[0][1] = 1;
  $cross[0][2] = 1;
  $cross[0][3] = 2;
  $cross[0][4] = 3;
  $cross[0][5] = 4;
  $cross[0][6] = 5;
  $cross[0][7] = 6;
  $cross[1][0] = 1;
  $cross[1][1] = 1;
  $cross[1][2] = 2;
  $cross[1][3] = 3;
  $cross[1][4] = 4;
  $cross[1][5] = 5;
  $cross[1][6] = 6;
  $cross[1][7] = 7;
  $cross[2][0] = 1;
  $cross[2][1] = 2;
  $cross[2][2] = 2;
  $cross[2][3] = 3;
  $cross[2][4] = 4;
  $cross[2][5] = 5;
  $cross[2][6] = 6;
  $cross[2][7] = 7;
  $cross[3][0] = 2;
  $cross[3][1] = 3;
  $cross[3][2] = 3;
  $cross[3][3] = 3;
  $cross[3][4] = 5;
  $cross[3][5] = 6;
  $cross[3][6] = 7;
  $cross[3][7] = 8;
  $cross[4][0] = 3;
  $cross[4][1] = 4;
  $cross[4][2] = 4;
  $cross[4][3] = 5;
  $cross[4][4] = 5;
  $cross[4][5] = 6;
  $cross[4][6] = 7;
  $cross[4][7] = 8;
  $cross[5][0] = 4;
  $cross[5][1] = 5;
  $cross[5][2] = 5;
  $cross[5][3] = 6;
  $cross[5][4] = 6;
  $cross[5][5] = 7;
  $cross[5][6] = 8;
  $cross[5][7] = 9;
  $cross[6][0] = 5;
  $cross[6][1] = 6;
  $cross[6][2] = 6;
  $cross[6][3] = 7;
  $cross[6][4] = 7;
  $cross[6][5] = 8;
  $cross[6][6] = 8;
  $cross[6][7] = 9;
  $cross[7][0] = 6;
  $cross[7][1] = 7;
  $cross[7][2] = 7;
  $cross[7][3] = 8;
  $cross[7][4] = 8;
  $cross[7][5] = 9;
  $cross[7][6] = 9;
  $cross[7][7] = 9;

  return $cross[$a][$b];
}

function calCrossTable4($a, $b) {
  $cross[0][0] = 1;
  $cross[0][1] = 1;
  $cross[0][2] = 1;
  $cross[0][3] = 2;
  $cross[0][4] = 3;
  $cross[0][5] = 4;
  $cross[0][6] = 5;
  $cross[0][7] = 6;

  $cross[1][0] = 1;
  $cross[1][1] = 1;
  $cross[1][2] = 2;
  $cross[1][3] = 3;
  $cross[1][4] = 4;
  $cross[1][5] = 5;
  $cross[1][6] = 6;
  $cross[1][7] = 7;

  $cross[2][0] = 1;
  $cross[2][1] = 2;
  $cross[2][2] = 2;
  $cross[2][3] = 3;
  $cross[2][4] = 4;
  $cross[2][5] = 5;
  $cross[2][6] = 6;
  $cross[2][7] = 7;

  $cross[3][0] = 2;
  $cross[3][1] = 3;
  $cross[3][2] = 3;
  $cross[3][3] = 3;
  $cross[3][4] = 5;
  $cross[3][5] = 6;
  $cross[3][6] = 7;
  $cross[3][7] = 8;

  $cross[4][0] = 3;
  $cross[4][1] = 4;
  $cross[4][2] = 4;
  $cross[4][3] = 5;
  $cross[4][4] = 5;
  $cross[4][5] = 6;
  $cross[4][6] = 7;
  $cross[4][7] = 8;


  $cross[5][0] = 4;
  $cross[5][1] = 5;
  $cross[5][2] = 5;
  $cross[5][3] = 6;
  $cross[5][4] = 6;
  $cross[5][5] = 7;
  $cross[5][6] = 8;
  $cross[5][7] = 9;


  $cross[6][0] = 5;
  $cross[6][1] = 6;
  $cross[6][2] = 6;
  $cross[6][3] = 7;
  $cross[6][4] = 7;
  $cross[6][5] = 8;
  $cross[6][6] = 8;
  $cross[6][7] = 9;



  $cross[7][0] = 6;
  $cross[7][1] = 7;
  $cross[7][2] = 7;
  $cross[7][3] = 8;
  $cross[7][4] = 8;
  $cross[7][5] = 9;
  $cross[7][6] = 9;
  $cross[7][7] = 9;

  return $cross[$a][$b];
}

function calCrossTable5($a, $b) {

  $cross[1][1] = 1;
  $cross[1][2] = 2;
  $cross[1][3] = 3;
  $cross[1][4] = 4;
  $cross[1][5] = 5;
  $cross[1][6] = 6;
  $cross[1][7] = 7;
  $cross[1][8] = 8;
  $cross[1][9] = 9;
  $cross[1][10] = 10;

  $cross[2][1] = 2;
  $cross[2][2] = 2;
  $cross[2][3] = 3;
  $cross[2][4] = 4;
  $cross[2][5] = 5;
  $cross[2][6] = 6;
  $cross[2][7] = 7;
  $cross[2][8] = 8;
  $cross[2][9] = 9;
  $cross[2][10] = 10;


  $cross[3][1] = 3;
  $cross[3][2] = 3;
  $cross[3][3] = 3;
  $cross[3][4] = 4;
  $cross[3][5] = 5;
  $cross[3][6] = 6;
  $cross[3][7] = 7;
  $cross[3][8] = 8;
  $cross[3][9] = 9;
  $cross[3][10] = 10;


  $cross[4][1] = 4;
  $cross[4][2] = 4;
  $cross[4][3] = 4;
  $cross[4][4] = 4;
  $cross[4][5] = 5;
  $cross[4][6] = 6;
  $cross[4][7] = 7;
  $cross[4][8] = 8;
  $cross[4][9] = 9;
  $cross[4][10] = 10;


  $cross[5][1] = 5;
  $cross[5][2] = 5;
  $cross[5][3] = 5;
  $cross[5][4] = 5;
  $cross[5][5] = 5;
  $cross[5][6] = 6;
  $cross[5][7] = 7;
  $cross[5][8] = 8;
  $cross[5][9] = 9;
  $cross[5][10] = 10;


  $cross[6][1] = 6;
  $cross[6][2] = 6;
  $cross[6][3] = 6;
  $cross[6][4] = 6;
  $cross[6][5] = 6;
  $cross[6][6] = 6;
  $cross[6][7] = 7;
  $cross[6][8] = 8;
  $cross[6][9] = 9;
  $cross[6][10] = 10;


  $cross[7][1] = 7;
  $cross[7][2] = 7;
  $cross[7][3] = 7;
  $cross[7][4] = 7;
  $cross[7][5] = 7;
  $cross[7][6] = 7;
  $cross[7][7] = 7;
  $cross[7][8] = 8;
  $cross[7][9] = 9;
  $cross[7][10] = 10;


  $cross[8][1] = 8;
  $cross[8][2] = 8;
  $cross[8][3] = 8;
  $cross[8][4] = 8;
  $cross[8][5] = 8;
  $cross[8][6] = 8;
  $cross[8][7] = 8;
  $cross[8][8] = 8;
  $cross[8][9] = 9;
  $cross[8][10] = 10;
  $cross[9][1] = 9;
  $cross[9][2] = 9;
  $cross[9][3] = 9;
  $cross[9][4] = 9;
  $cross[9][5] = 9;
  $cross[9][6] = 9;
  $cross[9][7] = 9;
  $cross[9][8] = 9;
  $cross[9][9] = 9;
  $cross[9][10] = 10;

  $cross[10][1] = 10;
  $cross[10][2] = 10;
  $cross[10][3] = 10;
  $cross[10][4] = 10;
  $cross[10][5] = 10;
  $cross[10][6] = 10;
  $cross[10][7] = 10;
  $cross[10][8] = 10;
  $cross[10][9] = 10;
  $cross[10][10] = 10;

  return $cross[$a][$b];
}
?>
