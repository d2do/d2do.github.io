<?php
// Author: TRUNG DEP TRAI
// $path = realpath(dirname(__FILE__) . '/../') . '/';
// include_once($path.'app_config.php');
// include($path.'libs/meta.php');
get_header();
$thispage = "staff blog";
?>
</head>

<body id="blog" class='blog detail'>
    <!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>
    <?php
        if (have_posts()) :
            the_post();
            $thisId = get_the_id(); 
            $title = get_the_title();
            // $customer_info = get_field('customer_info');
            $main_pic = get_field('main_pic');
    ?>
    <div id="wrap">
        <!-- Main Content
        ================================================== -->
        <div class="breadcrumbs">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">子育て支援住宅「絆ハウス」HOME</a></li>
            <li><a href="<?php echo APP_URL; ?>blog">スタッフブログ</a></li>
            <li><?php echo $title; ?></li>
          </ul>
        </div>
        <div class="inner">
            <main>
                <div class="blog__left">
                    <div class="detail__bl01 cmm_editor">
                        <span class="date"><?php echo the_time('Y/m/d'); ?></span>
                        <h1><?php echo $title; ?></h1>
                        <div class="detail__bl01--content">
                            <?php echo apply_filters("the_content",$post->post_content);?>
                        </div>
                    </div>
                    <div class="cmm__pagingDt">
                        <?php 
                            $next_post = get_next_post();
                            $prev_post = get_previous_post();
                            if($prev_post) {
                                $prev_mainpic = get_field('main_pic',$prev_post->ID);
                                $urlImg_prev = get_first_image($prev_post->post_content);
                         ?>
                        <div class="cmm__pagingDt--prev bigger_paging mh2">
                            <p>PREV</p>
                            <figure>
                                <?php if($prev_mainpic) { ?>
                                <img src="<?php echo thumbCrop(array('img' => $prev_mainpic['url'],'width' => 200,'height' => 128)); ?>" alt="<?php echo $prev_post->post_title;?>" class="pc">
                                <img src="<?php echo thumbCrop(array('img' => $prev_mainpic['url'],'width' => 125,'height' => 125)); ?>" alt="<?php echo $prev_post->post_title;?>" class="sp">
                                <?php } else { ?>
                                <img src="<?php echo thumbCrop(array('img' => $urlImg_prev,'width' => 200,'height' => 128)); ?>" alt="<?php echo $prev_post->post_title;?>" class="pc">    
                                <img src="<?php echo thumbCrop(array('img' => $urlImg_prev,'width' => 125,'height' => 125)); ?>" alt="<?php echo $prev_post->post_title;?>" class="sp">    
                                <?php } ?>
                            </figure>
                            <a href="<?php echo esc_url(urldecode(get_permalink($prev_post->ID)));?>"><?php echo my_cut_string($prev_post->post_title,27);?></a>
                        </div>
                        <?php } else { ?>
                        <div class="cmm__pagingDt--prev"></div>
                        <?php } ?>    
                        <div class="cmm__pagingDt--back mh2">
                            <p class="vih">Back</p>
                            <div class="back_tb">
                                <div class="back_tbc">
                                    <a href="<?php echo APP_URL ?>blog/">一覧へ戻る</a>
                                </div>
                            </div>
                        </div>
                        <?php 
                            if($next_post) {
                                $next_mainpic = get_field('main_pic',$next_post->ID);
                                $urlImg_next = get_first_image($next_post->post_content);
                                // var_dump(get_first_image($next_post->post_content));
                         ?>
                        <div class="cmm__pagingDt--next bigger_paging mh2">
                            <p>NEXT</p>
                            <figure>
                                <?php if($next_mainpic) { ?>
                                <img src="<?php echo thumbCrop(array('img' => $next_mainpic['url'],'width' => 200,'height' => 128)); ?>" alt="<?php echo $next_post->post_title;?>" class="pc">
                                <img src="<?php echo thumbCrop(array('img' => $next_mainpic['url'],'width' => 125,'height' => 125)); ?>" alt="<?php echo $next_post->post_title;?>" class="sp">
                                <?php } else { ?>
                                <img src="<?php echo thumbCrop(array('img' => $urlImg_next,'width' => 200,'height' => 128)); ?>" alt="<?php echo $next_post->post_title;?>" class="pc">    
                                <img src="<?php echo thumbCrop(array('img' => $urlImg_next,'width' => 125,'height' => 125)); ?>" alt="<?php echo $next_post->post_title;?>" class="sp">   
                                <?php } ?> 
                            </figure>
                            <a href="<?php echo esc_url(urldecode(get_permalink($next_post->ID)));?>"><?php echo my_cut_string($next_post->post_title,27);?></a>
                        </div>
                        <?php } ?>
                    </div>   
                </div>
                <?php include('sidebar.php'); ?>
            </main>
        </div>
    </div><!-- #wrap -->
    <?php endif; ?>    
    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?> 
    <?php include(APP_PATH.'/libs/footer.php'); ?>
    <script>
        $('.bigger_paging').biggerlink();
        $('.mh2').matchHeight();
        $(document).ready(function(){
            $('.cmm__pagingDt--back .back_tb').height($('.cmm__pagingDt figure').height());
        });
    </script>
<!-- End Document
================================================== -->
</body>
</html>
