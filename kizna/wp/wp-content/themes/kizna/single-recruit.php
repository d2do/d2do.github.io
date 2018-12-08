<?php
// Author: TRUNG DEP TRAI
// $path = realpath(dirname(__FILE__) . '/../') . '/';
// include_once($path.'app_config.php');
// include($path.'libs/meta.php');
get_header();
$thispage = "recruirements";
?>
</head>

<body id="recruit" class='recruit'>
    <!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>

    <div class="cmn-pagebanner">
        <p class="pc">recruirements</p>
        <p class="sp">recruire<br/>-ments</p>
        <h1>募集要項</h1>
    </div>
    <div class="top__mainphotobg"></div>
    <div id="wrap">
        <!-- Main Content
        ================================================== -->
         <?php
            if (have_posts()) :
                the_post();
                $title = get_the_title();
                $description = get_field('description');
                $qualification = get_field('qualification');
                $headquarter = get_field('headquarter');
                $work = get_field('work-time');
                $holiday = get_field('holiday');
                $bonus = get_field('bonus');
                $application = get_field('application');
                $button = get_field('button-link');
        ?>
        <div class="breadcrumbs">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">子育て支援住宅「絆ハウス」HOME</a></li>
             <li><a href="<?php echo APP_URL; ?>recruit/"">採用情報</a></li>
            <li><?php echo $title ?></li>
          </ul>
        </div>
        <main>
            <div class="recruit__recuirements wrap-inner">
                <div class="sales">
                    <div class="sales-title">
                        <div><?php echo $title ?></div>
                        <p></p>
                    </div>
                    <ul class="sales__main">


                        <?php if($description) : ?>
                        <li>
                            <div class="li-left">仕事内容</div>
                            <div class="li-right"><?php echo $description; ?></div>
                        </li>
                        <?php endif; ?>

                        <?php if($qualification) : ?>
                        <li>
                            <div class="li-left">応募資格</div>
                            <div class="li-right"><?php echo $qualification; ?></div>
                        </li>
                        <?php endif; ?>

                        <?php if($headquarter) : ?>
                        <li>
                            <div class="li-left">勤務地</div>
                            <div class="li-right"><?php echo $headquarter; ?></div>
                        </li>
                        <?php endif; ?>

                        <?php if($work) : ?>
                        <li>
                            <div class="li-left">勤務時間</div>
                            <div class="li-right"><?php echo $work; ?></div>
                        </li>
                        <?php endif; ?>

                        <?php if($holiday) : ?>
                        <li>
                            <div class="li-left">休日・休暇</div>
                            <div class="li-right"><?php echo $holiday; ?></div>
                        </li>
                        <?php endif; ?>

                        <?php if($bonus) : ?>
                        <li>
                            <div class="li-left">昇給・賞与</div>
                            <div class="li-right"><?php echo $bonus; ?></div>
                        </li>
                        <?php endif; ?>

                        <?php if($application) : ?>
                        <li>
                            <div class="li-left">応募方法</div>
                            <div class="li-right"><?php echo $application; ?></div>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <?php if($button) : ?>
                    <div class="button-link">
                        <a href="<?php echo $button; ?>" target="_blank">ハローワークでこの求人情報を見る</a>
                    </div>
                     <?php endif; ?>
                </div>
                <div class="recruit__recuirements__orther">
                    <div class="orther-title">他の募集職種を見る</div>
                    <?php
                        $args = array(
                            'post_type' => 'recruit',
                            'post_status' => 'publish',
                            'posts_per_page' => '-1',
                            // 'orderby' => 'rand',
                            // 'order' => 'DESC',
                            'tax_query' => array(
                            ),
                            'post__not_in' => array ($post->ID),
                        );
                        $relatedPosts = new WP_Query( $args );
                        if($relatedPosts->have_posts()){?>
                            <ul class="anchor03__main">
                            <?php while($relatedPosts->have_posts()){
                                $relatedPosts->the_post();
                        ?>
                                <li>
                                    <div class="wrap-li">
                                        <div class="wrap-litable">
                                            <?php the_title(); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>"></a>
                                    </div>
                                </li>
                        <?php
                            }?>
                            </ul>
                        <?php }else{
                        }
                        wp_reset_postdata();
                        ?>
                </div>
            </div>
        </main>
    <?php endif; ?>

    </div><!-- #wrap -->

    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?>
    <?php include(APP_PATH.'/libs/footer.php'); ?>
<script>
    $( document ).ready(function() {
        $('.anchor03__main li .wrap-li').matchHeight();
    });
</script>
<!-- End Document
================================================== -->
</body>
</html>
