<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dhanlaxmi Builder | Admin Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.css'); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/admin.min.css'); ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/skin-blue.min.css'); ?>">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>DLB</b>ADMIN LOGIN</a>
            </div>
            <?php
            if (isset($error)) {
                ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Login Failed!</h4>
                    <?php echo $error; ?>
                </div>
                <?php
            }
            ?>

            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <?php
                $attributes = array('method' => 'post', 'id' => 'login_form');
                echo form_open('admin/login', $attributes);
                ?>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required" value="<?php echo isset($email) ? $email : ''; ?>">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required" value="<?php echo isset($password) ? $password : ''; ?>">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!--                    <div class="col-xs-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Remember Me
                                                </label>
                                            </div>
                                        </div>-->
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
                </form>

                <!--<a href="#">I forgot my password</a><br>-->

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url('assets/admin/js/jquery.js'); ?>">"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url('assets/admin/js/bootstrap.js'); ?>"></script>
    </body>
</html>
