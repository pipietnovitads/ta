<!DOCTYPE HTML>
<html>

<head>
    <title>
        Login
    </title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
</head>

<?php if ($this->session->flashdata('gagal')): ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('gagal'); ?></div>
<?php endif ?>


<body style="background:#202020;">
    <div id="row" style="margin-top:11pc;">
        <div class="col-lg-4 col-lg-offset-4 centered">
            <div class="panel panel-default" style="margin-left:3px;">
                <div class="panel-heading">
                    <h3>Login</h3>
                </div>
                <div class="panel-body">
                    <form method="post">
                        <input type="text" class="form-control" placeholder="Username" name="user" autocomplete="off">
                        <br>
                        <input type="password" class="form-control" placeholder="Password" name="pass">
                        <br>
                        <button class="btn btn-primary btn-block"> SIGN IN</button>

                        <span class="pull-right" style="padding-top:5px;">
                            <!-- <a href="#">lost your password ?</a> -->
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>