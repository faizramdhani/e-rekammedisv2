<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>E RM &mdash; Login</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">


    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">
</head>


</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-0">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="<?= base_url() ?>/template/assets/img/stisla-fill.svg" alt="logo" width="70" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>
                            <?php if ($responce = $this->session->flashdata('Successfully')) : ?>
                                <div class="box-header">
                                    <div class="col-lg-12">
                                        <div class="alert alert-success"><?php echo $responce; ?></div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="card-body">
                                <form action="<?= site_url('auth/process') ?>" method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                    <div class="form-group">
                                        <label for="nmuser">Username</label>
                                        <input type="text" name="nmuser" class="form-control" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Mohon isi username anda dengan benar!
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="pswd" class="control-label">Password</label>
                                        </div>
                                        <input type="password" name="pswd" class="form-control" tabindex="2" required>
                                        <div class="invalid-feedback">
                                            Mohon isi password anda!
                                        </div>
                                    </div>

                                    <?php if ($responce = $this->session->flashdata('Successfully')) : ?>
                                        <div class="box-header">
                                            <div class="col-lg-12">
                                                <div class="alert alert-info">Halaman Dashboard</div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group">
                                            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block icon-center" onclick="" id="authlogin" tabindex="2">
                                                Login
                                            </button>
                                        </div>
                                    <?php endif; ?>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/datatables/media/js/jquery.datatables.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/login.js"></script>

    <script>
        <?php if ($responce = $this->session->flashdata('Successfully')) : ?>
            window.location.href = "<?= base_url() ?>
            'dashboard';
        <?php endif; ?>
    </script>

</html>