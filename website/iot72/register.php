<?php
    // Include config file
    require_once 'config.php';
    // Include register file
    include 'php_register.php';
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
      <title>Industrial Enviroinment Monitoring</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <style>
        .help-block{
            color:red;
        }
    </style>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                      <h3 class="mb-4">Industrial parameter Monitoring</h3>
                    <div class="mb-4">
                        <i class="feather icon-user-plus auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Sign up</h3>
                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                       
                        <div class="input-group mb-3" <?= (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <input type="email" class="form-control" name="email"value="<?= $email; ?>" placeholder="Email">
                        </div>
                        <span class="help-block"><?= $email_err; ?></span>
                        <div class="input-group mb-4" <?= (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <input type="password" class="form-control" placeholder="password" name="password" placeholder="Password" value="<?= $password; ?>">
                        </div>
                        <span class="help-block"><?= $password_err; ?></span>
                        <div class="input-group mb-4" <?= (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" value="<?= $confirm_password; ?>">
                        </div>
                        <span class="help-block"><?= $confirm_password_err; ?></span>
                        <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-1" checked="">
                                <label for="checkbox-fill-1" class="cr"> Save Details</label>
                            </div>
                        </div>
                      <!--  <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-2" id="checkbox-fill-2">
                                <label for="checkbox-fill-2" class="cr">Send me the <a href="#!"> Newsletter</a> weekly.</label>
                            </div>
                        </div> -->
                        <button class="btn btn-primary shadow-2 mb-4">Sign up</button>
                        <p class="mb-0 text-muted">Allready have an account? <a href="index.php"> Log in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
