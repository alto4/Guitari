<?php
require './includes/header.php';
?>

<section class="dashboard py-2 text-center">
  <div class="container grid">
    <div class="showcase-text">
      <h1 class="lg">Student Dashboard</h1>
      <p class="text-center lead m-2">This page provides access to lesson notes and resources provided by your teacher, a form to request a change in your lesson time as well as your account payment information.</p>
      <h3 class="text-danger"><?php echo $message ?></h3>
    </div>
  </div>
</section>


<?php require './includes/footer.php'; ?>