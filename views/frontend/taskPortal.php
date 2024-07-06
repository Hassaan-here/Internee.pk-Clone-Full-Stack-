<!-- 
<link rel="stylesheet" href="css/slide-right.css">
<link rel="stylesheet" href="css/taskPortal.css">
<link rel="stylesheet" href="css/fadeIn.css">
  <script src="js/slideRight.js"></script>
  <script src="js/fadeAnimations.js"></script> -->


<?php

$connection = mysqli_connect('localhost', 'root', '', 'internee.pk') or die();

$sql = "SELECT * FROM  views_table WHERE id=1";


$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {

  while ($row = mysqli_fetch_assoc($result)) {
?>

    <section class="taskPortal">
      <div class="portal-image right">
        <img src="<?php echo $row['view_image'] ?>" alt="TaskPortal" />
      </div>
      <div class="portal-content">
        <div class="portal-content-header">
          <h3><?php echo $row['name'] ?></h3>
          <h2><?php echo $row['title'] ?></h2>
          <p>
            <?php echo $row['description'] ?>
          </p>
        </div>
        <div class="portal-content-content">
          <div class="col-1">
            <div class="content-1">
              <div class="image hidden">
                <img src="<?php echo $row['col1_image'] ?>" />
              </div>
              <p>
                <strong><?php echo $row['col1_title'] ?></strong> <?php echo $row['col1_description'] ?>
              </p>
            </div>
            <div class="content-2">
              <div class="image  hidden">
                <img src="<?php echo $row['col2_image'] ?>" />
              </div>
              <div>
                <p>
                  <strong><?php echo $row['col2_title'] ?></strong> <?php echo $row['col2_description'] ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="content-1">
              <div class="image hidden">
                <img src="<?php echo $row['col3_image'] ?>" />
              </div>
              <div>
                <p>
                  <strong><?php echo $row['col3_title'] ?></strong> <?php echo $row['col3_description'] ?>
                </p>
              </div>
            </div>
            <div class="content-2">
              <div class="image hidden">
                <img src="<?php echo $row['col4_image'] ?>" />
              </div>
              <div>
                <p>
                  <strong><?php echo $row['col4_title'] ?></strong> <?php echo $row['col4_description'] ?>
                </p>
              </div>
            </div>
          </div>
        </div>
    <?php
  }
}
    ?>
      </div>
    </section>