<!-- <link rel="stylesheet" href="css/internship.css"> -->
<!--internship Programs  -->
<section class="programs">
  <div class="internship-content">
    <p>
      <strong>Internships every months</strong> Introducing Internee.pk, the
      ultimate platform designed to turbocharge the IT sector in Pakistan!
      We recognize the immense potential of talented individuals in the
      country and aim to bridge the gap between them and the thriving IT
      industry. Internee.pk offers a comprehensive range of virtual
      internship opportunities exclusively in the IT field.
    </p>
    <button class="browse-btn"><a href="#">Browse Internship</a></button>
  </div>
  <!-- cardss -->
  <div class="cards-section">

    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'internee.pk') or die();

    $sql = "SELECT * FROM  internship_programs";

    $result = mysqli_query($connection, $sql);


    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="cards">
          <img src="<?php echo $row['image_path'] ?>"  class="cards-image" />
          <div class="cards-content">
            <h2><?php echo $row['name'] ?></h2>
            <hr />
            <div class="cards-btn">
              <button class="apply-btn">Apply now</button>
            </div>
          </div>
        </div>
    <?php
      }
    }
    ?>
  </div>
</section>