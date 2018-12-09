<?php
// Author: TRUNG DEP TRAI
// $path = realpath(dirname(__FILE__) . '/../') . '/';
// include_once($path.'app_config.php');
// include($path.'libs/meta.php');
get_header();
$thispage = "works";
?>
</head>

<body id="works" class='works works_single'>
    <!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>

    <?php
        if (have_posts()) :
            the_post();
            $thisId = get_the_id(); 
            $title = get_the_title();
            $customer_info = get_field('customer_info');
            $main_pic = get_field('main_pic');
    ?>
    <div class="single_pagebanner">
        <?php 
            $termname = '';
            $terms = get_the_terms($post->ID, 'workscat');
            foreach($terms as $term) { 
                $termname = $term->name; 
                echo '<p class="cate">'.$termname.'</p>';
            }
         ?>
        <h1><?php echo $title; ?></h1>
        <?php if($customer_info) : ?>
            <p class="customer_info"><?php echo $customer_info; ?></p>
        <?php endif; ?>
    </div>
    <div class="top__mainphotobg"></div>
    <div id="wrap">
        <!-- Main Content
        ================================================== -->
        <div class="breadcrumbs">
			<ul>
				<li><a href="<?php echo APP_URL; ?>">子育て支援住宅「絆ハウス」HOME</a></li>
				<li><a href="<?php echo APP_URL; ?>works/">事例集</a></li>
                <li><?php echo $title; ?></li>
			</ul>
        </div>
        <div class="works_single__ct">
            <?php if($main_pic) : ?>
                <div class="works_single__ct--mainimg">
                    <img src="<?php echo thumbCrop(array('img' => $main_pic['url'],'width' => '','height' => '')); ?>" alt="<?php echo $title; ?>">
                </div>
            <?php endif; ?>
            <div class="works_single__ct--editor cmm_editor">
                <?php echo apply_filters("the_content",$post->post_content);?>     
            </div>
            <?php 
                $interview_obj = get_field('interview_obj');
                if(!empty($interview_obj)) :
                    $inte_ob = get_post($interview_obj[0]);
             ?>
            <a href="<?php echo get_permalink($inte_ob->ID); ?>" class="cmm_post_obj"><span>この事例のお客様インタビューを見る</span></a>
            <?php endif; ?>    
        </div>
        <div class="cmm__pagingDt">
            <?php 
                $next_post = get_next_post();
                $prev_post = get_previous_post();
                if($prev_post) {
                    $prev_mainpic = get_field('main_pic',$prev_post->ID);
                    $urlImg_prev = get_first_image_works($prev_post->post_content);
                    // if(!$urlImg_prev) $urlImg_prev = APP_ASSETS_IMG."works/no_photo.jpg";
             ?>
            <div class="cmm__pagingDt--prev bigger_paging mh2">
                <p>PREV</p>
                <figure>
                    <?php if($prev_mainpic) { ?>
                    <img src="<?php echo thumbCrop(array('img' => $prev_mainpic['url'],'width' => 200,'height' => 200)); ?>" alt="<?php echo $prev_post->post_title;?>" >
                    <?php } else { ?>
                    <img src="<?php echo thumbCrop(array('img' => $urlImg_prev,'width' => 200,'height' => 200)); ?> " alt="<?php echo $prev_post->post_title;?>" >    
                    <?php } ?>    
                </figure>
                <a href="<?php echo esc_url(urldecode(get_permalink($prev_post->ID)));?>"><?php echo my_cut_string($prev_post->post_title,27);?></a>
            </div>
            <?php } else { ?>
            <div class="cmm__pagingDt--prev"></div>
            <?php } ?>    
            <div class="cmm__pagingDt--back mh2">
                <p class="vih">BACK</p>
                <div class="back_tb">
                    <div class="back_tbc">
                        <a href="<?php echo APP_URL ?>works/">一覧へ戻る</a>
                    </div>
                </div>
            </div>
            <?php 
                if($next_post) {
                    $next_mainpic = get_field('main_pic',$next_post->ID);
                    $urlImg_next = get_first_image_works($next_post->post_content);
                    // if(!$urlImg_next) $urlImg_next = APP_ASSETS_IMG."works/no_photo.jpg";
             ?>
            <div class="cmm__pagingDt--next bigger_paging mh2">
                <p>NEXT</p>
                <figure>
                    <?php if($next_mainpic) { ?>
                    <img src="<?php echo thumbCrop(array('img' => $next_mainpic['url'],'width' => 200,'height' => 200)); ?>" alt="<?php echo $next_post->post_title;?>" >
                    <?php } else { ?>
                    <img src="<?php echo thumbCrop(array('img' => $urlImg_next,'width' => 200,'height' => 200)); ?> " alt="<?php echo $next_post->post_title;?>" >    
                    <?php } ?>    
                </figure>
                <a href="<?php echo esc_url(urldecode(get_permalink($next_post->ID)));?>"><?php echo my_cut_string($next_post->post_title,27);?></a>
            </div>
            <?php } ?>
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
        setTimeout(function(){
            $('.cmm__pagingDt--back .back_tb').height($('.cmm__pagingDt figure').height());
         }, 2000);
    </script>
<!-- End Document
================================================== -->
</body>
</html>     