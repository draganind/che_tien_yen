<?php
  foreach($details_post as $key => $value){
    $name_post = $value['title_post'];
    $name_category_post = $value['title_category_post'];
    $id_cate = $value['id_category_post'];
  } 
?>
<section>

   <div class="bg_in">
   <div class="wrapper_all_main">
  
      <div class="breadcrumbs">
                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="<?php echo BASE_URL ?>">
                           <span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="<?php echo BASE_URL ?>/tintuc/danhmuc/<?php echo $id_cate ?>">
                           <span itemprop="name"><?php echo $name_category_post ?></span></a>
                           <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <span itemprop="item">
                           <strong itemprop="name">
                           <?php echo $name_post ?>
                           </strong>
                           </span>
                           <meta itemprop="position" content="3" />
                        </li>

                     </ol>
                  </div>
      <!--breadcrumbs-->
      <?php
       foreach($details_post as $key => $post){ 
      ?>
      <div class="content_page">
         <div class="box-title">
            <div class="title-bar">
               <h1><?php echo $post['title_post'] ?></h1>
            </div>
            <?php  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                           ?>
                           <div class="fb-share-button" data-href="<?php echo $actual_link ?>" data-layout="button_count" data-size="small"><a target="_blank" href="<?php echo $actual_link ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
         </div>
         <div class="content_text">
           <?php echo $post['content_post'] ?>
         </div>
         <div class="clear"></div>
      </div>
      <?php
      } 
      ?>
   </div>
   <div class="module_pro_all">
   <div class="box-title">
      <div class="title-bar">
         <h3>Tin tức liên quan</h3>
      </div>
   </div>
   <div class="pro_all_gird">
   <div class="girds_all list_all_other_page ">
      <?php 
      foreach($related as $key => $relate){
      ?>
      <div class="grids">
         <div class="grids_in">
            <div class="content">
               <div class="img-right-pro">
                  <a href="sanpham.php">
                  <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $relate['image_post'] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                  </a>
                
               </div>
               <div class="name-pro-right">
                  <a href="<?php echo BASE_URL ?>/tintuc/chitiettin/<?php echo $relate['id_post'] ?>">
                     <h3><?php echo $relate['title_post'] ?></h3>
                  </a>
               </div>
            </div>
         </div>
         <!--start:left-->
         <div class="wrapper_all_main_left">
         </div>
         <!--end:left-->
         <div class="clear"></div>
      </div>
      <?php
      } 
      ?>
      
      <div class="clear"></div>
   </div>
</section>