<?php
session_start(); // Start session to use $_SESSION variables

include 'conn.php'; // Include database connection file

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    // Hash passwords
    $hash = password_hash($pass, PASSWORD_BCRYPT);
    $chash = password_hash($cpass, PASSWORD_BCRYPT);

    // Check if email already exists in database
    $emailquery = "SELECT * FROM users WHERE email='$email'";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount > 0){
        echo "Email already exists";
    } else {
        // If passwords match, insert user into database
        if($pass === $cpass){
            $insertquery = "INSERT INTO users (name, email,role, password, cpassword) VALUES ('$name', '$email','$role', '$hash', '$chash')";
            $iquery = mysqli_query($conn, $insertquery);

            if($iquery){
                // Redirect to a success page
                header("Location: login.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Passwords do not match";
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post" class="col-6 offset-2">
        <h2>Create your account</h2>
       
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Enter your email" >
        </div>

        <div class="mb-3">
            <label class="form-label">Select your role:</label><br>
            <input type="radio" name="role" value="donor" id="donor">
            <label for="donor">Donor</label><br>
            <input type="radio" name="role" value="receiver" id="receiver">
            <label for="receiver">Receiver</label><br>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Enter your password">
        </div>
        <div class="mb-3">
          <label class="form-label">Confirm Password</label>
          <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
      </form>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
