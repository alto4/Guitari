<?php require './includes/header.php' ?>

<!-- SHOWCASE -->
<section class="showcase">
  <div class="container grid">
    <div class="showcase-text">
      <h1>Learn to Play</h1>
      <p>Take your skills to the next level with our experienced instructors. Whether you are totally new to playing, or an experienced player looking to broaden their skills, we can help you achieve your musical goals.</p>
      <a href="lessons.html" class="btn btn-outline">Read More</a>
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

<!-- STATS -->
<section class="stats">
  <div class="container">
    <h3 class="stats-heading text-center my-1">Our contemporary approach to music education is both effective and fun! Online lessons allow the ability to connect with the best teachers from around the world.</h3>

    <div class="grid grid-3 text-center my-4">
      <div>
        <i class="fa fa-guitar fa-3x"></i>
        <h3>12</h3>
        <p class="text-secondary">Instruments</p>
      </div>
      <div>
        <i class="fa fa-user-graduate fa-3x"></i>
        <h3>700</h3>
        <p class="text-secondary">Students</p>
      </div>
      <div>
        <i class="fa fa-chalkboard-teacher fa-3x"></i>
        <h3>23</h3>
        <p class="text-secondary">Teachers</p>
      </div>
    </div>
  </div>
</section>

<!-- CLI SECTION -->
<section class="cli">
  <div class="container grid">
    <img class="narrow" src="images/guitar.jpg" alt="">
    <div class="card">
      <h3>Easy to use, cross platform CLI</h3>
    </div>
    <div class="card">
      <h3>Deploy in seconds</h3>
    </div>
  </div>
</section>

<!-- CLOUD SECTION -->
<section class="cloud bg-primary my-2 py-2">
  <div class="container grid">
    <div class="text-center">
      <h2 class="lg">Extreme Cloud Hosting</h2>
      <p class="lead my-1">Cloud hosting like you've never seens. Frast, efficient, and scalable.</p>
      <a href="#" class="btn btn-dark">Learn More</a>
    </div>
    <img src="images/cloud.png" alt="">
  </div>
</section>

<!-- LANGUAGES SECTION -->
<section class="languages">
  <h2 class="md text-center my-2">
    Languages Offered
  </h2>
  <div class="container flex">
    <div class="card">
      <h4>C#</h4>
      <img src="images/logos/csharp.png" alt="">
    </div>
    <div class="card">
      <h4>Go</h4>
      <img src="images/logos/go.png" alt="">
    </div>
    <div class="card">
      <h4>PHP</h4>
      <img src="images/logos/php.png" alt="">
    </div>
    <div class="card">
      <h4>Python</h4>
      <img src="images/logos/python.png" alt="">
    </div>
    <div class="card">
      <h4>Ruby</h4>
      <img src="images/logos/ruby.png" alt="">
    </div>
    <div class="card">
      <h4>Node</h4>
      <img src="images/logos/node.png" alt="">
    </div>
  </div>
</section>
<?php require './includes/footer.php' ?>