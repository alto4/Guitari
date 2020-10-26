<?php require './includes/header.php' ?>
<section class="lessons showcase showcase-dark py-2 text-center">
  <div class="container grid">
    <div class="showcase-text">
      <h1 class="lg">Log In</h1>
      <p class="text-center lead m-2">Please log in to your account below using the password and email you have been provided.</p>
    </div>

    <div class="showcase-form card">
      <h2>Request More Info</h2>
      <form>
        <div class="form-control">
          <input type="text" name="name" placeholder="Name" required />
        </div>
        <div class="form-control">
          <input type="email" name="email" placeholder="Email" required />
        </div>
        <div class="form-control">
          <input type="phone" name="phone" placeholder="Phone Number" />
        </div>
        <input type="submit" value="Send" class="btn" />
      </form>
    </div>
  </div>
</section>

<div class="bg-dark py-5"></div>
<?php require './includes/footer.php' ?>