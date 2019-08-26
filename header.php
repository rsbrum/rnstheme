<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

<body <?php body_class();?> id="container">

<header id="header-1" class="shadow header-top" style="height:55px; z-index:199; background: #666;">



    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri() . "/./assets/images/Logo(12).png" ?>"  style="height: 40px; width: 50px;" class="ml-2 mt-2" alt="">
            </div>

            <div class="col-6 d-none d-sm-none d-md-none d-lg-block" style="letter-spacing: 1px;">
                <ul class="nav justify-content-center mt-2 mr-3" style="float: right; font-size: 12px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#">INÍCIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SOBRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTATO</a>
                    </li>
                </ul> 
            </div> 
        </div>
    </div>
</header>



