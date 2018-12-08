<?php
// Author: TRUNG DEP TRAI
// $path = realpath(dirname(__FILE__) . '/../') . '/';
// include_once($path.'app_config.php');
// include($path.'libs/meta.php');
get_header();
$thispage = "interview";
?>
</head>

<body id="interview" class='interview interview_single'>
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
            $interview_item = get_field('interview_item');
    ?>
    <div class="single_pagebanner">
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
                <li><a href="<?php echo APP_URL; ?>interview/">お客様インタビュー</a></li>
                <li><?php echo $title; ?></li>
            </ul>
        </div>
        <div class="interview_single__ct">
            <?php if($main_pic) : ?>
                <div class="interview_single__ct--mainimg">
                    <img src="<?php echo thumbCrop(array('img' => $main_pic['url'],'width' => '','height' => '')); ?>" alt="<?php echo $title; ?>">
                </div>
            <?php endif; ?>
            <div class="interview_single__ct--repeater">
                <?php foreach ($interview_item as $int_item) {
                    $question = $int_item['question_interview'];
                    $answer = $int_item['answer_interview'];
               ?>
                <div class="interview_single__ct--item">
                    <h2><?php echo $question; ?></h2>
                    <div class="sub-field">
                        <?php echo $answer; ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php 
                $works_obj = get_field('works_obj'); 
                if(!empty($works_obj)) :
                    $work_ob = get_post($works_obj[0]);
            ?>
            <a href="<?php echo get_permalink($work_ob->ID); ?>" class="cmm_post_obj"><span>このお客様の施工事例を見る</span></a>
            <?php endif; ?>
        </div>
        <div class="cmm__pagingDt">
            <?php 
                $next_post = get_next_post();
                $prev_post = get_previous_post();
                if($prev_post) {
                    $prev_mainpic = get_field('main_pic',$prev_post->ID);
             ?>
            <div class="cmm__pagingDt--prev bigger_paging mh2">
                <p>PREV</p>
                <figure>
                    <?php if($prev_mainpic) { ?>
                        <img src="<?php echo thumbCrop(array('img' => $prev_mainpic['url'],'width' => 200,'height' => 128)); ?>" alt="<?php echo $prev_post->post_title;?>" class="pc">
                        <img src="<?php echo thumbCrop(array('img' => $prev_mainpic['url'],'width' => 125,'height' => 125)); ?>" alt="<?php echo $prev_post->post_title;?>" class="sp">
                    <?php } else { ?>
                        <img src="<?php echo APP_ASSETS_IMG.'interview/img_nophoto200.jpg' ?>" alt="<?php echo $prev_post->post_title;?>" class="pc">
                        <img src="<?php echo APP_ASSETS_IMG.'interview/img_nophoto125.jpg' ?>" alt="<?php echo $prev_post->post_title;?>" class="sp">
                    <?php } ?>    
                </figure>                    
                <a href="<?php echo esc_url(urldecode(get_permalink($prev_post->ID)));?>"><?php echo my_cut_string($prev_post->post_title,30);?></a>
            </div>
            <?php } else { ?>
            <div class="cmm__pagingDt--prev"></div>
            <?php } ?>    
            <div class="cmm__pagingDt--back mh2">
                <p class="vih">BACK</p>
                <div class="back_tb">
                    <div class="back_tbc">
                        <a href="<?php echo APP_URL ?>interview/">一覧へ戻る</a>
                    </div>
                </div>               
            </div>
            <?php 
                if($next_post) {
                    $next_mainpic = get_field('main_pic',$next_post->ID);
             ?>
            <div class="cmm__pagingDt--next bigger_paging mh2">
                <p>NEXT</p>
                <figure>
                    <?php if($next_mainpic) { ?>
                    <img src="<?php echo thumbCrop(array('img' => $next_mainpic['url'],'width' => 200,'height' => 128)); ?>" alt="<?php echo $next_post->post_title;?>" class="pc">
                    <img src="<?php echo thumbCrop(array('img' => $next_mainpic['url'],'width' => 125,'height' => 125)); ?>" alt="<?php echo $next_post->post_title;?>" class="sp">
                <?php } else { ?>
                    <img src="<?php echo APP_ASSETS_IMG.'interview/img_nophoto200.jpg' ?>" alt="<?php echo $next_post->post_title;?>" class="pc">
                    <img src="<?php echo APP_ASSETS_IMG.'interview/img_nophoto125.jpg' ?>" alt="<?php echo $next_post->post_title;?>" class="sp">
                <?php } ?>    
                </figure>                    
                <a href="<?php echo esc_url(urldecode(get_permalink($next_post->ID)));?>"><?php echo my_cut_string($next_post->post_title,30);?></a>
            </div>
            <?php } ?>
        </div>         
    </div>
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