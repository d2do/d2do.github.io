<?php
// Author: TRUNG DEP TRAI
// $path = realpath(dirname(__FILE__) . '/../') . '/';
// include_once($path.'app_config.php');
// include($path.'libs/meta.php');
get_header();
$thispage = "interview";
?>
</head>

<body id="interview" class='interview'>
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
				<li>お客様インタビュー</li>
			</ul>
        </div>
		<div class="interview__list">
			<?php 
				global $wp_query;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				$intev = array(
					'post_type' => 'interview',
					'posts_per_page' => 18,
					// 'orderby' => 'post_date',
					// 'order' => 'DESC',
					'paged' => $paged,
					'post_status' => 'publish',
				);
				$wp_query->query($intev);
				if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                	$permalink = get_the_permalink();
                	$title = get_the_title();
                	$time_post = (time() - strtotime(get_the_time('d.m.Y'))) / 86400;
                	$customer_info = get_field('customer_info');
                	$main_pic = get_field('main_pic');
                	// $no_photo = APP_ASSETS_IMG.'common/img_nophoto.jpg';
                	// if(!$main_pic){ $main_pic = $no_photo; } 
			 ?>
			<div class="interview__item">
				<figure>
					<?php if($time_post < 7) : ?>
						<span></span>
					<?php endif; ?>
					<a href="<?php echo $permalink; ?>">
					<?php if($main_pic) { ?>
						<img src="<?php echo thumbCrop(array('img' => $main_pic['url'],'width' => 713,'height' => 457)); ?>" alt="<?php echo $title; ?>">
					<?php } else { ?>
						<img src="<?php echo APP_ASSETS_IMG.'interview/no_photo.jpg'; ?>" alt="<?php echo $title; ?>">
					<?php } ?>	
					</a>
				</figure>
				<h3><a href="<?php echo $permalink; ?>">
					<span class="pc"><?php echo my_cut_string($title,40); ?></span>
					<span class="sp"><?php echo my_cut_string($title,20); ?></span>
					</a></h3>
				<?php if($customer_info) : ?>
					<p><?php echo $customer_info; ?></p>
				<?php endif; ?>
				<a class="more" href="<?php echo $permalink; ?>">詳しく見る</a>
			</div>
			<?php 
				endwhile;
			endif;
			wp_reset_postdata();	
			 ?>
		</div>    
		<div class="pc">
			<div class="page-navi">
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
			</div>
		</div>	
	    <?php
	        $current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
	        $max_num = $wp_query->max_num_pages;
	        if(!$wp_query->query_vars['paged']) { $paged = 1 ;}
	        $num_post_per_page =$wp_query->query_vars['posts_per_page'];
	        $found_posts = $wp_query->found_posts;
	        // $link = '';
	        // if($current_tax_id){
	        //     $link = 'newscat/'.$current_page->slug;
	        // } elseif($year != '0' || $month != '0') {
	        //     $link = 'news/'.$year.'/'.$month;
	        // } else {
	        //     $link = 'news';
	        // }
	    ?>
	    <?php if( $num_post_per_page < $found_posts) { ?>
	    <div class="page__wp-pagenavi sp">
	        <div class="wrap page__wp-pagenavi--prev <?php if($paged == 1) { echo "no-prev"; } ?>">
	            <?php if($paged > 1) { ?>
	            <a class="previouspostslink" rel="prev" href="<?php echo APP_URL; ?>interview/page/<?php echo $paged - 1;?>">PREV</a>
	            <?php } ?>
	        </div>
	        <div class="page__wp-pagenavi--sl">
	            <select name="" id="" onChange="document.location.href=this.options[this.selectedIndex].value;">
	            	<option value="<?php echo $paged; ?>/<?php echo $max_num ?>"><?php echo $paged; ?>/<?php echo $max_num ?></option>
					<?php   for($i = 1; $i <= $max_num; $i ++) { ?>
	            	<option value="<?php echo APP_URL; ?>interview/page/<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php } ?>
	            </select>
	        </div>
	        <div class="wrap page__wp-pagenavi--next <?php if($paged == $max_num) { echo "no-next"; } ?>">
	            <?php if($paged < $max_num) { ?>
	            <a class="nextpostslink" rel="next" href="<?php echo APP_URL; ?>interview/page/<?php echo $paged + 1; ?>">NEXT</a>
	            <?php } ?>
	        </div>
	    </div>
	    <?php } ?>
    </div><!-- #wrap -->
    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?> 
    <?php include(APP_PATH.'/libs/footer.php'); ?>
<!-- End Document
================================================== -->
</body>
</html>		