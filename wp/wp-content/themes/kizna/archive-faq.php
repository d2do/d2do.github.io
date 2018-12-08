<?php
// Author: TRUNG DEP TRAI
// $path = realpath(dirname(__FILE__) . '/../') . '/';
// include_once($path.'app_config.php');
// include($path.'libs/meta.php');
get_header();
$thispage = "faq";
?>
</head>

<body id="faq" class='faq'>
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
            <li>よくあるご質問</li>
          </ul>
        </div>
        <div class="inner">
           <div class="faq__anchor">
               <ul>
                  <?php 
                  $args = array(
                    'post_type'                => 'faq',
                    'orderby'                  => 'id',
                    // 'order'                    => 'ASC',
                    'hide_empty'               => 0,
                    'taxonomy'                 => 'faqcat',
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
          
          <div class="mid_inner">
              <?php
              $args = array(
                'post_type'                => 'faq',
                'orderby'                  => 'id',
                // 'order'                    => 'DESC',
                'hide_empty'               => 0,
                'taxonomy'                 => 'faqcat',
                'pad_counts'               => false );

              $categories = get_categories( $args );
              $i = 0;
              foreach ($categories as $cat)
              {
                $i++;
                if($cat->count > 0) {
              ?>  
              <div class="faq__content" id="anchor<?php echo $i; ?>">

                  <h2><?php  echo $cat->name; ?></h2>
                  <?php
                  $wp_query = new WP_Query();
                    $param=array(
                        'post_type'=>'faq',
                        // 'order' => 'DESC',
                        'posts_per_page' => '-1',
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'faqcat',
                            'field' => 'slug',
                            'terms' => $cat->slug
                            )
                          )
                        );
                    $wp_query->query($param);
                    if($wp_query->have_posts()) :
                      while($wp_query->have_posts()) : 
                        $wp_query->the_post();
                  ?>
                  <div class="faq__content__item">
                      <h3><?php the_title(); ?></h3>
                      <div class="faq__content__item__inner">
                        <div class="data_ct"><?php the_content(); ?></div>
                        <div class="close_anchor"><a href="javascript:void(0);">閉じる</a></div>
                      </div>
                  </div>
                  <?php 
                    endwhile; 
                  endif;
                  ?>
              </div>
              <?php } } ?>
          </div>
        </div>

    </div><!-- #wrap -->

    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?> 
    <?php include(APP_PATH.'/libs/footer.php'); ?>
    <script>
      var headerH;
      if (window.matchMedia('screen and (max-width:767px)').matches) {
        headerH = $('.header_sp_first').height();
      } else {
        headerH = $('.fixscroll').outerHeight();
      }
      $('.faq__content').each(function(){
        $(this).find('.faq__content__item').each(function(){
          $(this).find('.close_anchor').click(function(){
            $("html, body").animate({
                scrollTop: $(this).parent().parent().offset().top - headerH
            }, 500)
          });
        });
      });  
    </script>
<!-- End Document
================================================== -->
</body>
</html>
