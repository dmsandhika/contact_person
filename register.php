<?php
include_once 'koneksi.php';
include_once 'models/Akun.php';

$ar_role = ['admin', 'member'];
?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="index.html"> <h4>Register</h4></a>
        
                                    <form class="mt-5 mb-5 login-input" method="POST" action="akun_controller.php">
                                    <div class="form-floating mb-3">
                                            <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Fullname" data-sb-validations="required" required/>
                                            
                                            <div class="invalid-feedback" data-sb-feedback="fullname:required">Fullname is required.</div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="username" name="username" type="text" placeholder="Username" data-sb-validations="required" required/>
                                            
                                            <div class="invalid-feedback" data-sb-feedback="username:required">Username is required.</div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" type="password" name="pass" placeholder="Password" data-sb-validations="required" required/>
                                            <div class="invalid-feedback" data-sb-feedback="password:required">Password is required.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label d-block">Role</label>
                                            <?php
                                            foreach ($ar_role as $role){
                                            ?>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="<?=$role?>" type="radio" name="role" value="<?=$role?>" data-sb-validations="required" required/>
                                                <label class="form-check-label" for="<?=$role?>"><?=$role?></label>
                                            </div>
                                            <?php } ?>
                                            <div class="invalid-feedback" data-sb-feedback="role:required">One option is required.</div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control"  name="foto" id="foto" type="text" placeholder="Foto" data-sb-validations="" />
                                           
                                        </div>
                                   
                                    <button class="btn login-form__btn submit w-100" type="submit" name="proses" value="simpan" >Sign in</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="login.php" class="text-primary">Sign Up </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>





