<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Signup | Voting System</title>
  
  <!-- Include your header or necessary links here -->
  <?php include('./header.php'); ?>

  <style>
    body {
      width: 100%;
      height: calc(100%);
      background-color: #f7f7f7;
    }

    main#main {
      width: 100%;
      height: calc(100%);
      background: white;
    }

    #signup-right {
      position: absolute;
      right: 0;
      width: 40%;
      height: calc(100%);
      background: white;
      display: flex;
      align-items: center;
    }

    #signup-left {
      position: absolute;
      left: 0;
      width: 60%;
      height: calc(100%);
      background: #007bff;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 2rem;
    }

    #signup-right .card {
      margin: auto;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .logo {
      margin: auto;
      font-size: 5rem;
      padding: 1em;
      background-color: #fff;
      border-radius: 50%;
      color: #007bff;
    }

    .card-body {
      padding: 2rem;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 30px;
    }

    .btn-primary {
      background-color: #007bff;
      border-radius: 30px;
      border: none;
      padding: 10px 30px;
      cursor: pointer;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .signup-link {
      margin-top: 1rem;
      text-align: center;
    }
  </style>
</head>

<body>
  <main id="main">
    <div id="signup-left">
      <div class="logo">
        <i class="fa fa-user-plus"></i> Sign Up
      </div>
    </div>

    <div id="signup-right">
      <div class="card col-md-8">
        <div class="card-body">
        <form id="signup-form" action="signup_process.php" method="POST">
            <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="text" id="username" name="username" class="form-control">
            </div>

            <div class="form-group">
              <label for="email" class="control-label">Email</label>
              <input type="email" id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
              <label for="password" class="control-label">Password</label>
              <input type="password" id="password" name="password" class="form-control">
            </div>

            <div class="form-group">
              <label for="confirm_password" class="control-label">Confirm Password</label>
              <input type="password" id="confirm_password" name="confirm_password" class="form-control">
            </div>

            <center><button class="btn btn-primary btn-block">Sign Up</button></center>
            <div class="signup-link">
              <a href="login.php">Already have an account? Login here</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
