 <section>
        <div class="bg_in">
            <style type="text/css">
                .carousel-inner .item img {
                        height: 374px !important;
                    }
            </style>
            <div class="col-md-7 col-xs-12 col-sm-12" style="padding: 0;margin-top:10px;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                         <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo BASE_URL ?>/public/images/tra-dinh.jpg" alt="Siêu khuyến mãi" width="100%">
                        </div>

                        <div class="item">
                            <img src="<?php echo BASE_URL ?>/public/images/tin-tuc-4-2.jpg" alt="Siêu khuyến mãi" width="100%">
                        </div>

                        <div class="item">
                            <img src="<?php echo BASE_URL ?>/public/images/tin-tuc-2.jpg" alt="Siêu khuyến mãi" width="100%">
                        </div>

                         <div class="item">
                            <img src="<?php echo BASE_URL ?>/public/images/keo-lac.jpg" alt="Siêu khuyến mãi" width="100%">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12" style="padding: 0;margin-left:90px;margin-top:5px;">
                <div class="row" style="margin-left: 20px ;">
                    <div class="panel  panel-warning panel-styling">
                        <div class="panel-heading">Tin tức cập nhật</div>
                        <div class="panel-body scrollable-panel">
                            <?php
                            foreach($post_index as $key => $post){ 
                            ?>
                            <div class="row">
                                <div class="col-md-4 col-xs-4 col-sm-4">
                                    <img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $post['image_post'] ?>">
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8">
                                    <h4><a href="<?php echo BASE_URL. '/tintuc/chitiettin/' . $post['id_post'] ?>"><?php echo $post['title_post'] ?></a></h4>
                                    <p><?php echo substr($post['content_post'], 0,100) ?></p>
                                </div>
                            </div>
                            <hr>
                            <?php
                            } 
                            ?>
                           
                          
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="clear"></div>
</section>
