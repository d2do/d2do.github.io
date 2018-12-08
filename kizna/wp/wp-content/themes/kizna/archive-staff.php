<?php
// Author: TRUNG DEP TRAI
// $path = realpath(dirname(__FILE__) . '/../') . '/../';
// include_once($path.'app_config.php');
// include($path.'libs/meta.php');
get_header();
$thispage = "staff";
?>
</head>

<body id="staff" class='staff'>
    <!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>

    <?php include(APP_PATH.'/libs/page-banner.php'); ?>
    <div id="wrap">
        <!-- Main Content
        ================================================== -->
        <div class="breadcrumbs">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">子育て支援住宅「絆ハウス」HOME</a></li>
            <li><a href="<?php echo APP_URL; ?>company/">会社案内</a></li>
            <li>スタッフ・職人紹介</li>
          </ul>
        </div>

        <div class="mid_inner">
            <div class="staff__anchor">
                <ul>
                    <li><a href="#anchor_video">スタッフ紹介動画</a></li>
                  <?php 
                  $args = array(
                    'post_type'                => 'staff',
                    'orderby'                  => 'id',
                    'order'                    => 'ASC',
                    'hide_empty'               => 0,
                    'taxonomy'                 => 'staffcat',
                    'pad_counts'               => false );
                  
                  $categories = get_categories($args);
                  $i = 0;
                  foreach ($categories as $cat)
                  {
                    $i++;
                    if($cat->count > 0) {
                  ?>
                  <li><a href="<?php echo '#anchor'.$i.''; ?>"><?php  echo $cat->name; ?></a></li>
                  <?php
                        }
                    }
                  ?>
                </ul>
            </div>

            <div class="staff__video" id="anchor_video">
                <h2><span>スタッフ紹介動画</span></h2>
                <div class="staff__video--wrap">
                    <div class="staff__video--content">
                        <video id="player1" controls="" width="100%" height="100%" preload="auto" onclick="this.play()" poster="<?php echo APP_ASSETS_IMG; ?>staff/movie_bg1.jpg">
                            <div id="play-btn" class="video-controls">PLAY</div>
                            <source src="<?php echo APP_ASSETS_IMG; ?>staff/kizna_staff.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <?php
                $args = array(
                    'post_type'                => 'staff',
                    'orderby'                  => 'id',
                    'order'                    => 'ASC',
                    'hide_empty'               => 0,
                    'taxonomy'                 => 'staffcat',
                    'pad_counts'               => false );

                    $categories = get_categories( $args );
                    $i = 0;
                foreach ($categories as $cat)
                {
                    $i++;
                    if($cat->count) {
                ?>              
            <div class="staff__content" id="anchor<?php echo $i; ?>">
              <h2><span><?php  echo $cat->name; ?></span></h2>
                <?php
                  $wp_query = new WP_Query();
                    $param=array(
                        'post_type'=>'staff',
                        // 'order' => 'DESC',
                        // 'orderby' => 'post_date',
                        'posts_per_page' => '-1',
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'staffcat',
                            'field' => 'slug',
                            'terms' => $cat->slug
                            )
                          )
                        );
                    $wp_query->query($param);
                    if($wp_query->have_posts()) :
                      while($wp_query->have_posts()) : 
                        $wp_query->the_post();
                        $position = get_field('position');
                        $hobby = get_field('hobby');
                        $messages = get_field('messages');
                        $main_pic = get_field('main_pic');
                ?>
                <div class="staff__content__item">
                    <div class="staff__content__item__left">
                        <?php if($main_pic) { ?>
                        <img src="<?php echo thumbCrop(array('img' => $main_pic['url'],'width' => 190,'height' => 234)); ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                        <img src="<?php echo APP_ASSETS_IMG; ?>staff/no_photo.jpg" alt="<?php the_title(); ?>">
                        <?php } ?>    
                        <div class="sp">
                            <?php if($position) : ?>
                                <div class="fwB"><?php echo $position; ?></div>
                            <?php endif; ?>
                            <h3><span><?php the_title(); ?></span></h3>
                        </div>
                    </div>
                    <div class="staff__content__item__right">
                        <div class="pc">
                            <?php if($position) : ?>
                                <div class="fwB"><?php echo $position; ?></div>
                            <?php endif; ?>
                            <h3><span><?php the_title(); ?></span></h3>
                        </div>
                        <?php if($hobby) : ?>
                        <div class="text1">
                            <span class="fwB">趣味</span>
                            <div><?php echo $hobby; ?></div>
                        </div>
                        <?php endif; ?>
                        <?php if($messages) : ?>
                        <div>
                            <span class="fwB">お客様へのメッセージ</span>
                            <div><?php echo $messages; ?></div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php 
                    endwhile; 
                endif;
                ?>
            </div>
            <?php 
                } 
            }
            ?>
        </div>
    </div><!-- #wrap -->
    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?> 
    <?php include(APP_PATH.'/libs/footer.php'); ?>
    <script>
        if (window.matchMedia('screen and (max-width:767px)').matches) {
            $('.staff__anchor ul li').matchHeight();
        }
    </script>
<!-- End Document
================================================== -->
</body>
</html>
