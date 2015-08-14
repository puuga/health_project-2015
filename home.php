<?php include "include/db_connect_oo.php" ?>
<?php include "include.php" ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <?php include "include_head.php" ?>
  <title>Home</title>

  <script>
    $(document).ready(function() {
      // This command is used to initialize some elements and make them work properly
      $.material.init();

    });
  </script>
</head>
<body>
  <div class="container">
    <h1>Hello Bootstrap</h1>

    <div class="row">

      <div class="col-lg-4">
        <!-- <div class="card">
          <div class="card-height-indicator"></div>
          <div class="card-content">

            <div class="card-image">
              <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Sunrise_thailand_ko_samui.jpg" alt="Loading image...">
              <h3 class="card-image-headline">Sunrise Thailand kho Samui</h3>
            </div>

            <div class="card-body">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <footer class="card-footer">
                <button class="btn btn-flat">Share</button>
                <button class="btn btn-flat btn-warning">Learn More</button>
            </footer>

          </div>
        </div> -->
      </div>

      <div class="col-lg-4">
        <div class="card">
          <div class="card-height-indicator"></div>
          <div class="card-content">

            <div class="card-body">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <footer class="card-footer">
                <button class="btn btn-flat">Share</button>
                <button class="btn btn-flat btn-warning">Learn More</button>
            </footer>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
      </div>





    </div>
    <br/>
    <div class="row">

      <div class="col-lg-4">
        <div class="card">
          <div class="card-height-indicator"></div>
          <div class="card-content">

            <div class="card-image">
              <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Sunrise_thailand_ko_samui.jpg" alt="Loading image...">
              <h3 class="card-image-headline">Sunrise Thailand kho Samui</h3>
            </div>

            <div class="card-body">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <footer class="card-footer">
                <button class="btn btn-flat">Share</button>
                <button class="btn btn-flat btn-warning">Learn More</button>
            </footer>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card">
          <div class="card-height-indicator"></div>
          <div class="card-content">

            <div class="card-body">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <footer class="card-footer">
                <button class="btn btn-flat">Share</button>
                <button class="btn btn-flat btn-warning">Learn More</button>
            </footer>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
      </div>





    </div>
  </div>
  <?php include "nev_bar.php" ?>
</body>
</html>
