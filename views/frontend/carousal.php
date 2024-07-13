<section class="carousel-section">
  <div class="owl-carousel owl-theme">
    <div class="carousal-text">
      <h2>Get Internship In Your Favourite Domain 🙌. Almost
        30+ </h2>
      <br>
      <br>
      <h2>

        Internships Are Open, Go &amp; Grab Your Seats Now and
        secure your future👨🏼‍💻

      </h2>
    </div>

    <?php

    $connection = mysqli_connect('localhost', 'root', '', 'internee.pk') or die();

    $sql = "SELECT * FROM  internship_programs";

    $result = mysqli_query($connection, $sql);


    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="card">
          <img src="<?php echo $row['image_path'] ?>" alt="Placeholder Image 1">
          <h2><?php echo $row['name'] ?></h2>
          <p><?php echo $row['description'] ?></p>
          <button class="apply-btn">Apply Now</button>
        </div>
    <?php
      }
    }
    ?>
  </div>
</section>