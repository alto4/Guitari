<?php

require './includes/header.php';

// Check for user input in required fields and process login transaction
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $email = "";
  $password = "";
  $output = "";
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = trim($_POST["email"]);
  $password = trim($_POST["password"]);
  $output = "";

  // Save the function that connects to the database as a variable
  $conn = db_connect();

  // Verify that user id was entered, and if not, display an error message
  if (!isset($email) || $email == "") {
    $output .= "Please enter an email address.</br>";
  };

  // Verify that user password was entered, and if not, display an error message
  if (!isset($password) || $password == "") {
    $output .= "You must enter your password to login</br>";
  };

  // If both a login and a password have been set by the user, proceed to compare them to the database entries of user info
  if ($output == "") {
    // Query the database
    $sql = "SELECT * FROM users WHERE EmailAddress ='$email'";
    $result = pg_query($conn, $sql);
    $records = pg_num_rows($result);

    // Match entered id against ids that exist in the database
    if ($records) {
      // Check entered password against the password associated with the entered id that exists in the database
      if ($password == pg_fetch_result($result, 0, "password")) {
        // Start a new session upon authentication
        session_start();

        // Log valid login 
        updateLogs($email, "successful sign-in");

        // If email and password are authenticated, output a welcome message to the user with a brief summary of their account activity
        $output .= "Welcome back! Your account is associated with the email address " . pg_fetch_result($result, 0, "emailaddress") . " and you were last logged in on " . pg_fetch_result($result, 0, "lastaccess") . ".";

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        // Update the session credential/user type to match what's stored in the database
        $_SESSION['type'] = pg_fetch_result($result, 0, "type");

        setMessage('success', $output);
      }
      // If password does not match the corresponding id, output an error message
      else {
        $output .= "The password you have entered is incorrect.<br />Please try again.";
        $password = "";

        updateLogs($email, "unsuccessful login due to bad password");
      }
    }
    // If the user id is not found in the database records, display an error message and clear form fields
    else {
      $output .= "The email address <br/>" . $email . "<br/> has not been registered.";
      $email = "";
      $password = "";
    }
  }
}

?>
<section class="lessons showcase showcase-dark py-2 text-center">
  <div class="container grid">
    <div class="showcase-text">
      <h1 class="lg">Log In</h1>
      <p class="text-center lead m-2">Please log in to your account below using the password and email you have been provided.</p>
      <h2 class="text-danger"><?php echo "$output" ?></h2>

    </div>

    <div class="showcase-form card">
      <h2>Request More Info</h2>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-control">
          <input type="email" name="email" placeholder="Email" />
        </div>
        <div class="form-control">
          <input type="password" name="password" placeholder="Password" />
        </div>
        <button type="submit" class="btn">Sign In</button>
      </form>
    </div>
  </div>
</section>

<div class="bg-dark py-5"></div>

<?php require './includes/footer.php'; ?>