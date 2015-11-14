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

    <h1>All Results</h1>

    <table class="table table-striped table-bordered table-hover">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>time</th>
        <th>detail</th>
      </tr>
      <?php
        $entries = getResults($conn);
        for ($i=0; $i < count($entries); $i++) {
          $entry = $entries[$i];
          echo "<tr>";
          echo "<td>$entry[id]</td>";
          echo "<td>$entry[key_name]</td>";
          echo "<td>$entry[key_email]</td>";
          echo "<td>$entry[created_at]</td>";
          echo "<td><a href='q_result.php?id=$entry[id]'>detail</a></td>";
          echo "</tr>";
        }
      ?>
    </table>

    <br/>

  </div>
  <?php include "nev_bar.php" ?>
</body>
</html>
