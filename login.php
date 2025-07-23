<?php
include "config.php";
session_start();

// Redirect if already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <meta name="Description" content="Login to Bawa Computers"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <title>Login Form</title>
</head>
<body>
  <div class="container mt-5">
    <h2 class="alert alert-success">Login Form</h2>

    <?php if (isset($_SESSION['login_error'])): ?>
      <div class="alert alert-danger">
        <?= $_SESSION['login_error']; unset($_SESSION['login_error']); ?>
      </div>
    <?php endif; ?>

    <form method="post">
      <input type="email" name="email" placeholder="Enter Your Email" class="form-control mb-3" required />
      <input type="password" name="password" placeholder="Enter Your Password" class="form-control mb-3" required />
      <input type="submit" name="btn_login" value="Login" class="btn btn-dark" />
    </form>
  </div>
</body>

<?php
if (isset($_POST['btn_login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Admin login (check this first)
    if ($email === "amjad@gmail.com" && $password === "1234") {
        $_SESSION['email'] = $email;
        $_SESSION['is_admin'] = true;
        header("Location: admin/index.php");
        exit();
    }

    // Check user in signup table
    $query = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $user['id'];       // ✅ User ID
        $_SESSION['email'] = $user['email'];
        $_SESSION['file'] = $user['file'];        // Optional profile file

        // Redirect to return page if set
        $return = $_GET['return'] ?? 'index.php';
        header("Location: $return");
        exit();
    } else {
        $_SESSION['login_error'] = "Invalid email or password.";
        header("Location: login.php");
        exit();
    }
}
?>

</html>
