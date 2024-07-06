<section class="blog-section">
  <div class="blog-header">
    <h3>Our Blog</h3>
    <h2>Recent Blog</h2>
  </div>
  <div class="blog-content">


    <?php

    $connection = mysqli_connect('localhost', 'root', '', 'internee.pk') or die();

    $sql = "SELECT * FROM  blog_table";

    $result = mysqli_query($connection, $sql);


    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        // Check if the image field is empty
        $image = $row['image'];
        ?>
        <div class="blog <?php echo !$hasImage ? 'no-image' : ''; ?>">
            <?php if (!empty($image)): ?>
                <img src="<?php echo $image ?>" alt="<?php echo $row['title'] ?>">
            <?php endif; ?>
            <h2><?php echo $row['title'] ?></h2>
            <p><?php echo $row['description'] ?></p>
        </div>
    <?php
      }  //while closed

    }   //if closed
    ?>
  </div>
</section>