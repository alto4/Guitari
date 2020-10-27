<?php
require './includes/header.php';
?>

<section class="dashboard py-2 text-center">
  <div class="container grid">
    <div class="showcase-text">
      <h1 class="lg">Teacher Dashboard</h1>
      <p class="text-center lead m-2">This page provides access to forms for uploading lesson notes, alter lesson schedules and to track incoming inquiries.</p>
      <h3 class="text-danger"><?php echo $message ?></h3>
    </div>
  </div>
</section>


<?php require './includes/footer.php'; ?>