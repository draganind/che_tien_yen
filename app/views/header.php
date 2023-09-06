 <!DOCTYPE html>
<html lang="en-CA">

<head>
    <title>MVC Framework PHP Tutorial</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="cleartype" content="on" />
    <link rel="icon" href="template/Default/img/favicon.ico" type="image/x-icon" />
    <meta name="Description" content="" />
    <meta name="Keywords" content="" />
    <!--rieng-->
    <meta property="og:url"                content="<?php

    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    echo $actual_link;

     ?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="<?php echo $this->title ?>" />
    <meta property="og:description"        content="<?php echo $this->desc ?>" />
    <meta property="og:image"              content="<?php echo $this->image ?>" />
    <!--rieng-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--     <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/font-awesome.min.css" type="text/css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/product.css">    
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/style.css">

</head>
<body>
 <header>
        <div class="info_top">
            <div class="bg_in">
                <p class="p_infor">
                    <span><i class="fa fa-envelope-o" aria-hidden="true"></i>Email: chetienyen@gmail.com</span>
                    <span><i class="fa fa-phone" aria-hidden="true"></i> Hotline: 0986.222.435</span>
                    <a href="<?php echo BASE_URL ?>/login/dashboard"><img src="<?php echo BASE_URL ?>/public/images/admin2.png" width="40" height="40" alt="logoadmin.png" /></a>

                </p>
            </div>
        </div>
        <div class="header_top_menu">
            <div class="header_top_menu_all">
            <!-- anh bg che -->
                <div class="header_top" style="background-image: url('<?php echo BASE_URL ?>/public/images/bg-che-2.jpg');">

                    <div class="bg_in" >
                        <div class="logo">
                            <a href="<?php echo BASE_URL ?>"><img src="<?php echo BASE_URL ?>/public/images/logoTY.png" width="150" height="150" alt="logohere.jpeg" /></a>
                        </div>
                        <nav class="menu_top">
                            <form autocomplete="off" class="search_form" method="get" action="<?php echo BASE_URL . '/searching_results' ?>">
                                <input class="searchTerm" name="search" placeholder="Nhập từ cần tìm..." />
                                <button class="searchButton" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </nav>
                        <!-- <div class="cart_wrapper" >
                            <div class="cols_50">
                                <div class="hot_line_top">
                                    <span><b>Cửa hàng:</b></span>
                                    <br/>
                                    <span class="red">Xóm Hồng Thái II, Xã Tân Cương, Thành phố Thái Nguyên, Tỉnh Thái nguyên</span>
                                </div>
                            </div>
                            <div class="cols_50">
                                <div class="hot_line_top">
                                    <span><b>Thời gian làm việc:</b></span>
                                    <br/>
                                    <span class="red">Tất cả các ngày trong tuần / 8:00 AM - 8:00 PM</span>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div> -->
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="btn_menu_search">
                <div class="bg_in">
                    <div class="table_row_search">
                        <div class="menu_top_cate">
                            <div class="">
                                <div class="menu" id="menu_cate">
                                    <div class="menu_left">
                                        <i class="fa fa-bars" aria-hidden="true"></i> Danh mục sản phẩm
                                    </div>
                                    <div class="cate_pro">
                                        <div id='cssmenu_flyout' class="display_destop_menu">
                                            <ul>
                                                <?php
                                                    foreach($category as $key => $cate){ 
                                                ?>
                                                <li class='active has-sub'>
                                                  
                                                    <a href='<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $cate['id_category_product'] ?>'><span><?php echo $cate['title_category_product'] ?></span></a>

                                                </li>
                                                 <?php
                                                    } 
                                                    ?>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search_top">
                            <div id='cssmenu'>
                                <ul>
                                    <li class='active'><a href='<?php echo BASE_URL ?>'>Trang chủ</a></li>
                                    <li class=''><a href='<?php echo BASE_URL ?>/index/gioithieu'>Giới thiệu</a></li>
                                 
                                    <li class=''>

                                        <a href='<?php echo BASE_URL ?>/sanpham/tatca'>Sản phẩm</a>

                                        <ul>
                                            <?php
                                                foreach($category as $key => $cate){ 
                                            ?>
                                            <li>
                                                
                                                <a href='<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $cate['id_category_product'] ?>'><span><?php echo $cate['title_category_product'] ?></span></a>
                                               
                                              
                                            </li>
                                             <?php
                                                } 
                                                ?>

                                            

                                        </ul>
                                    </li>

                                    <li class=''><a href='<?php echo BASE_URL ?>/tintuc/tatca'>Tin tức</a>
                                       <?php
                                       if(Session::get('customer')==true){
                                           ?> 
                                         <li class=''><a href='<?php echo BASE_URL ?>/khachhang/dangxuat'>Đăng xuất</a></li>
                                           <?php 
                                       }else{
                                        ?>   
                                        <li class=''><a href='<?php echo BASE_URL ?>/khachhang/dangnhap'>Đăng nhập</a></li>
                                        <?php 
                                    }
                                    ?>
                                  
                                 
                                        <ul>
                                            <?php
                                                foreach($category_post as $key => $cate_post){ 
                                            ?>
                                            <li> <a href='<?php echo BASE_URL ?>/tintuc/danhmuc/<?php echo $cate_post['id_category_post'] ?>'><span><?php echo $cate_post['title_category_post'] ?></span></a></li>
                                            <?php
                                            } 
                                            ?>
                                        </ul>

                                    </li>
                                    <li class=''><a href='<?php echo BASE_URL ?>/giohang'>Giỏ hàng</a></li>
                                    <li class=''><a href='<?php echo BASE_URL ?>/index/lienhe'>Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </header>
    <div class="clear"></div>