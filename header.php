

<div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <h2 style="color : white;" >Contact</h2>
                    </span>
                </a>
            </div>
        </div>
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                
                <div class="header-right">
                    <ul class="clearfix">
                     
                      
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                            <?php
                            if(isset($_SESSION['AKUN'])){
                            ?>    
                            <span><?= $fullname;?> <i style="font-size: 10px;">(<?= $role; ?>)</i></span>
                            <?php }
                            else {
                            ?>
                            <a href="login.php" style="color: white;" class="btn mb-1 btn-rounded btn-info btn-lg">Login</a>
                            <?php
                            }
                            ?>
                            </a>

                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class=" active"></span>
                                <?php
                                if(isset($_SESSION['AKUN'])){
                                    if(!empty($profil)){
                                ?>  
                                <img src="image/<?= $profil ?>"   height="40" width="40" alt="">
                                <?php }
                                else{
                                    ?>
                                <img src="image/profil.jpeg"  height="40" width="40" alt="">
                                    <?php
                                }}
                                else {
                                ?>
                                <img src="image/profil.jpeg" height="40" width="40" alt="">
                                <?php
                                }
                                ?>
                            </div>
                            <?php
                                if(isset($_SESSION['AKUN'])){
                                    
                                ?>  
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        
                                        
                                        <li><a href="logout.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php
                                }
                                ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>