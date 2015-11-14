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
  <style>
  .star-list {
    list-style-type: none;
    margin-left: 0;
    padding-left: 0;
  }

  .star-list li {
    padding-left: 1em;
    text-indent: -1em;
  }

  .star-list li:before {
  content: "*";
  padding-right: 5px;
}

  </style>
</head>
<body>
  <div class="container">

    <div class="row">

      <div class="col-lg-12">
        <div class="panel panel-material-grey">
          <div class="panel-heading">
            <h3><?php echo $explanation; ?></h3>
            <h3><?php echo $explanation_title; ?></h3>
          </div>
          <div class="panel-body">
            <p>
              <?php echo $explanation_text_1; ?>
              <?php echo $explanation_text_2; ?>
            </p>

            <p>
              <figure>
                <img src="images/Q1E2.JPG"
                  class=""
                  style="max-height:200px" alt="" />
                <figcaption><?php echo $explanation_img_caption; ?></figcaption>
              </figure>
            </p>

            <p>
              <ul class="star-list">
                <li><?php echo $explanation_text_3; ?></li>
                <li><?php echo $explanation_text_4; ?></li>
              </ul>
            </p>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-lg-6 col-lg-offset-6 text-right">
        <a class="btn btn-material-orange btn-lg" href="q_section_0.php" role="button">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <?php echo $next; ?>
        </a>
      </div>
    </div>
    <br/>

  </div>
  <?php include "nev_bar.php" ?>
</body>
</html>
