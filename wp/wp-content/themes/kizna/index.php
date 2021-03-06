<?php
// Author: TRUNG DEP TRAI
// $path = realpath(dirname(__FILE__)) . "/";
// include_once($path.'app_config.php');
// include($path.'libs/meta.php');
get_header();
?>
</head>

<body id="top" class='top'>
    <!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>

    <div id="wrap">
       	<div class="top__mainphoto">
       		<div class="top__mainphoto--wrap">
       			<ul class="top__mainphoto--slick">
       				<li class="slide0">
		       			<img src="<?php echo APP_ASSETS_IMG ?>top/img_banner01@2x.png" alt="" class="pc">
		       			<img src="<?php echo APP_ASSETS_IMG ?>top/img_banner_sp01@2x.png" alt="" class="sp">      
		       			<div class="top__mainphoto--txtbnr">
		       				<div class="w1086">
			       				<p class="p01">家づくりを通して<br>
								家族の笑顔と<br>
								絆を深める</p>
			       				<h1 class="p02 pc">良い品質と安心価格の絆ハウス</h1>       					
		       				</div>
		       			</div> 					
       				</li>
       				<li class="slide0 slide2">
		       			<img src="<?php echo APP_ASSETS_IMG ?>top/img_banner02@2x.png" alt="" class="pc">
		       			<img src="<?php echo APP_ASSETS_IMG ?>top/img_banner_sp02@2x.png" alt="" class="sp">   
		       			<div class="top__mainphoto--txtbnr">
		       				<div class="w1086">
			       				<p class="p01">家づくりを通して<br>
								家族の笑顔と<br>
								絆を深める</p>
			       				<h1 class="p02 pc">良い品質と安心価格の絆ハウス</h1>       					
		       				</div>
		       			</div>    					
       				</li>
       				<li class="slide0">
		       			<img src="<?php echo APP_ASSETS_IMG ?>top/img_banner03@2x.png" alt="" class="pc">
		       			<img src="<?php echo APP_ASSETS_IMG ?>top/img_banner_sp03@2x.png" alt="" class="sp">      
		       			<div class="top__mainphoto--txtbnr">
		       				<div class="w1086">
			       				<p class="p01">家づくりを通して<br>
								家族の笑顔と<br>
								絆を深める</p>
			       				<h1 class="p02 pc">良い品質と安心価格の絆ハウス</h1>       					
		       				</div>
		       			</div> 					
       				</li>
       			</ul>
       		</div>
       		<div class="sp">
       			<p class="top__mainphoto--text01"><span>良い品質</span>と<span>安心価格</span>の絆ハウス</p>
       			<ul class="top__mainphoto--nav">
       				<li class="concept"><a href="#concept">絆ハウスの<br>
					家づくり</a></li>
       				<li class="works"><a href="<?php echo APP_URL; ?>works/">事例集</a></li>
       				<li class="event"><a href="<?php echo APP_URL; ?>event/">見学会・<br>
					セミナー</a></li>
       				<li class="company"><a href="<?php echo APP_URL; ?>company/">会社案内・<br>
					スタッフ</a></li>
       			</ul>
       		</div>
    		<div class="w1000">
       			<div class="top__mainphoto--titnews">
       				<p class="p01">NEWS</p>
       				<p class="p02">新着情報</p>
       			</div>
       			<div class="top__mainphoto--listnews">
					<?php 
					$eventt = array(
						'post_type' => 'event',
						'posts_per_page' => 2,
						'post_status' => 'publish',
						// 'order' => 'DESC'
					);
					$wp_eventt = new WP_Query($eventt);
					if($wp_eventt->have_posts()) :
						while($wp_eventt->have_posts()) :
							$wp_eventt->the_post();
							$tit_eventt = get_the_title();
							$link_eventt = get_the_permalink();
					 ?>
					<div class="top__mainphoto--itemnews">
						<p class="date"><?php the_time('Y/m/d'); ?></p>
						<?php 
				            $termname = '';
				            $terms = get_the_terms($post->ID, 'eventcat');
				            foreach($terms as $term) { 
				                $termname = $term->name; 
				                echo '<p class="cate cate01"><a href="'.get_term_link($term).'">'.$termname.'</a></p>';
				            }
				         ?>
						<p class="title"><a href="<?php echo $link_eventt; ?>"><?php echo my_cut_string($tit_eventt,35); ?></a></p>
					</div>
					<?php 
						endwhile;
					endif;	
					 ?>
					<?php 
					$st_blogg = array(
						'post_type' => 'blog',
						'posts_per_page' => 2,
						'post_status' => 'publish',
						// 'order' => 'DESC'
					);
					$wp_st_blogg = new WP_Query($st_blogg);
					if($wp_st_blogg->have_posts()) :
						while($wp_st_blogg->have_posts()) :
							$wp_st_blogg->the_post();
							$tit_st_blogg = get_the_title();
							$link_st_blogg = get_the_permalink();
					 ?>
					<div class="top__mainphoto--itemnews">
						<p class="date"><?php the_time('Y/m/d'); ?></p>
						<?php 
				            // $termname = '';
				            // $terms = get_the_terms($post->ID, 'blogcat');
				            // foreach($terms as $term) { 
				            //     $termname = $term->name; 
				            //     echo '<p class="cate cate02"><a href="'.get_term_link($term).'">'.$termname.'</a></p>';
				            // }
				         ?>
				        <p class="cate cate02">スタッフブログ</p>
						<p class="title"><a href="<?php echo $link_st_blogg; ?>"><?php echo my_cut_string($tit_st_blogg,35); ?></a></p>
					</div>
					<?php 
						endwhile;
					endif;	
					 ?>
       			</div>
       			<ul class="top__mainphoto--linkmore">
       				<li><a href="<?php echo APP_URL ?>event/">見学会・セミナー一覧</a></li>
       				<li><a href="<?php echo APP_URL ?>blog/">スタッフブログ一覧</a></li>
       			</ul>
       		</div>
       	</div>
       	<div class="top__mainphotobg"></div>
		<div class="top__concept">
			<div class="top__concept--left">
				<div class="top__concept--left-wrap">
					<p>CONCEPT</p>
					<div class="sp">
						<figure>
							<img src="<?php echo APP_ASSETS_IMG ?>top/img_concept_big.jpg" alt="">
						</figure>						
					</div>
					<h2>子供との絆、家族の絆を深める<br>
					そのための家だからこそ<br>
					<span>安心価格</span> で <span>高品質</span><br>
					そして、理想も全て叶えます</h2>						
				</div>
			</div>
			<div class="top__concept--right">
				<div class="pc">
					<div class="top__concept--right-wrap">
						<img src="<?php echo APP_ASSETS_IMG ?>top/img_concept_big.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="top__concept--list" id="concept">
				<div class="top__concept--item">
					<figure class="mh_sp">
						<img src="<?php echo APP_ASSETS_IMG ?>top/img_concept_01.jpg" alt="">
					</figure>
					<div class="tbl mh_sp">
						<div class="tblc">
							<p>子育て世代を応援する</p>
							<h3><a href="<?php echo APP_URL ?>financial/">資金計画</a></h3>								
						</div>
					</div>
				</div>
				<div class="top__concept--item">
					<figure class="mh_sp">
						<img src="<?php echo APP_ASSETS_IMG ?>top/img_concept_02.jpg" alt="">
					</figure>
					<div class="tbl mh_sp">
						<div class="tblc">
							<p>家族の安心のための</p>
							<h3><a href="<?php echo APP_URL ?>spec/">品質・工法・保証</a></h3>		
						</div>				
					</div>
				</div>
				<div class="top__concept--item">
					<figure class="mh_sp">
						<img src="<?php echo APP_ASSETS_IMG ?>top/img_concept_03.jpg" alt="">
					</figure>
					<div class="tbl mh_sp">
						<div class="tblc">
							<p>お値打ちな理由</p>
							<h3><a href="<?php echo APP_URL ?>lineup/">商品ラインナップ</a></h3>		
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="top__mainphotobg"></div>
		<div class="top__interview">
			<p class="top__interview--subhead">たくさんの喜びの声をいただいています！</p>
			<p class="top__interview--title">INTERVIEW</p>
			<h2>お客様インタビュー</h2>
			<div class="top__interview--list">
				<?php 
					$inter = array(
						'post_type' => 'interview',
						'posts_per_page' => 3,
						'post_status' => 'publish',
						// 'order' => 'DESC'
					);
					$wp_inter = new WP_Query($inter);
					if($wp_inter->have_posts()) :
						while($wp_inter->have_posts()) :
							$wp_inter->the_post();
							$tit_inter = get_the_title();
							$link_inter = get_the_permalink();
		                	$time_post = (time() - strtotime(get_the_time('d.m.Y'))) / 86400;
		                	$customer_info = get_field('customer_info');
		                	$main_pic = get_field('main_pic');
				 ?>
				<div class="top__interview--item">
					<figure>
						<?php if($time_post < 7) : ?>
							<span></span>
						<?php endif; ?>
						<a href="<?php echo $link_inter; ?>">
						<?php if($main_pic) { ?>
							<img src="<?php echo thumbCrop(array('img' => $main_pic['url'],'width' => 713,'height' => 457)); ?>" alt="<?php echo $tit_inter; ?>">
						<?php } else { ?>
							<img src="<?php echo APP_ASSETS_IMG.'interview/no_photo.jpg'; ?>" alt="<?php echo $tit_inter; ?>">
						<?php } ?>	
						</a>
					</figure>
					<h3 class="pc"><a href="<?php echo $link_inter; ?>"><?php echo my_cut_string($tit_inter,35); ?></a></h3>
					<h3 class="sp"><a href="<?php echo $link_inter; ?>"><?php echo my_cut_string($tit_inter,25); ?></a></h3>
					<?php if($customer_info) : ?>
						<p><?php echo $customer_info; ?></p>
					<?php endif; ?>
					<a class="more" href="<?php echo $link_inter; ?>">詳しく見る</a>
				</div>
				<?php 
					endwhile;
				endif;	
				 ?>
			</div>
			<div class="top__btnmore">
				<a href="<?php echo APP_URL ?>interview/"><span>お客様インタビュー一覧</span></a>
			</div>
		</div>		
		<div class="cmm_contatcBox_bg"></div>
		<div class="top__works">
			<p class="top__works--subhead">こだわりの詰まったお家の事例集</p>
			<p class="top__works--title">WORKS</p>
			<h2>事例集</h2>
			<div class="top__works--list">
				<?php 
					$work = array(
						'post_type' => 'works',
						'posts_per_page' => 4,
						'post_status' => 'publish',
						// 'order' => 'DESC'
					);
					$wp_work = new WP_Query($work);
					if($wp_work->have_posts()) :
						while($wp_work->have_posts()) :
							$wp_work->the_post();
							$tit_work = get_the_title();
							$link_work = get_the_permalink();
		                	$time_post = (time() - strtotime(get_the_time('d.m.Y'))) / 86400;
		                	$customer_info = get_field('customer_info');
		                	$main_pic = get_field('main_pic');
            	            $urlImg = catch_that_image();
            				if(!$urlImg) $urlImg = APP_ASSETS_IMG."works/no_photo.jpg";
				 ?>
				<div class="top__works--item">
					<figure>
						<?php if($time_post < 7) : ?>
							<span></span>
						<?php endif; ?>
						<a href="<?php echo $link_work; ?>">
						<?php if($main_pic) { ?>
							<img src="<?php echo thumbCrop(array('img' => $main_pic['url'],'width' => 716,'height' => 716)); ?>" alt="<?php echo $tit_work; ?>">
						<?php } else { ?>
							<img src="<?php echo thumbCrop(array('img' => $urlImg,'width' => 716,'height' => 716)); ?> " alt="<?php echo $tit_work; ?>">    
						<?php } ?>
						</a>
					</figure>
					<?php 
			            $termname = '';
			            $terms = get_the_terms($post->ID, 'workscat');
			            foreach($terms as $term) { 
			                $termname = $term->name; 
			                echo '<p class="cate"><a href="'.get_term_link($term).'">'.$termname.'</a></p>';
			            }
			         ?>
					<h3 class="pc"><a href="<?php echo $link_work; ?>"><?php echo my_cut_string($tit_work, 35); ?></a></h3>
					<h3 class="sp"><a href="<?php echo $link_work; ?>"><?php echo my_cut_string($tit_work, 25); ?></a></h3>
					<?php if($customer_info) : ?>
					<p class="customer"><?php echo $customer_info; ?></p>
					<?php endif; ?>
					<a class="more" href="<?php echo $link_work; ?>">詳しく見る</a>
				</div>
				<?php 
					endwhile;
				endif;	
				 ?>
			</div>
			<div class="top__btnmore">
				<a href="<?php echo APP_URL ?>works/"><span>事例集一覧</span></a>
			</div>
		</div>
		<div class="top__event-ser">
			<p class="top__event-ser--subhead">後悔しない家づくりのために</p>
			<p class="top__event-ser--title">EVENT<br class="sp">& SEMINAR</p>
			<h2>見学会・セミナー</h2>	
			<div class="top__event-ser--list">
				<?php 
					$event = array(
						'post_type' => 'event',
						'posts_per_page' => 2,
						'post_status' => 'publish',
						// 'order' => 'DESC'
					);
					$wp_event = new WP_Query($event);
					if($wp_event->have_posts()) :
						while($wp_event->have_posts()) :
							$wp_event->the_post();
							$tit_event = get_the_title();
							$link_event = get_the_permalink();
            	            $location = get_field('location');
            				$time_event = get_field('time_event');
		                	$main_pic = get_field('main_pic');
            	            $urlImg = catch_that_image();
            				if(!$urlImg) $urlImg = APP_ASSETS_IMG."event/no_photo.jpg";
				 ?>
				<div class="top__event-ser--item">
					<figure>
						<a href="<?php echo $link_event; ?>">
							<?php if($main_pic) { ?>
			                <img src="<?php echo thumbCrop(array('img' => $main_pic['url'],'width' => 320,'height' => 205)); ?>" alt="<?php echo $title; ?>">
			                <?php } else { ?>
			                <img src="<?php echo thumbCrop(array('img' => $urlImg,'width' => 320,'height' => 205)); ?> " alt="<?php echo $title; ?>">    
			                <?php } ?>   
						</a>
					</figure>
					<?php 
			            $termname = '';
			            $terms = get_the_terms($post->ID, 'eventcat');
			            foreach($terms as $term) { 
			                $termname = $term->name; 
			                echo '<p class="cate cate01"><a href="'.get_term_link($term).'">'.$termname.'</a></p>';
			            }
			         ?>
					<?php if($location) : ?>
					<p class="location">場所：<?php echo $location; ?></p>
					<?php endif; ?>
					<?php if($time_event) : ?>
					<p class="date">開催日：<?php echo $time_event; ?></p>
					<?php endif; ?>
					<p class="title"><a href="<?php echo $link_event; ?>"><?php echo $tit_event; ?></a></p>
					<a class="more" href="<?php echo $link_event; ?>">詳しく見る</a>
				</div>
				<?php 
					endwhile;
				endif;	
				 ?>
			</div>		
			<div class="top__btnmore">
				<a href="<?php echo APP_URL ?>event/"><span>見学会・セミナー一覧</span></a>
			</div>
		</div>
		<div class="top__staff">
			<p class="top__staff--subhead">家づくり情報や絆ハウスの情報が満載</p>
			<p class="top__staff--title">STAFF BLOG</p>
			<h2>スタッフブログ</h2>
			<div class="top__staff--list">
				<?php 
					$st_blog = array(
						'post_type' => 'blog',
						'posts_per_page' => 2,
						'post_status' => 'publish',
						// 'order' => 'DESC'
					);
					$wp_st_blog = new WP_Query($st_blog);
					if($wp_st_blog->have_posts()) :
						while($wp_st_blog->have_posts()) :
							$wp_st_blog->the_post();
							$tit_st_blog = get_the_title();
							$link_st_blog = get_the_permalink();
		                	$main_pic = get_field('main_pic');
		                	$urlImg = catch_that_image();
		                	if(!$urlImg) $urlImg = APP_ASSETS_IMG.'blog/nophoto_arc.jpg';
				 ?>
				<div class="top__staff--item">
					<figure>
						<a href="<?php echo $link_st_blog; ?>">
							<?php if($main_pic) { ?>
                            <img src="<?php echo thumbCrop(array('img' => $main_pic['url'],'width' => 230,'height' => 148)); ?>" alt="<?php echo $tit_st_blog; ?>">
                            <?php } else { ?>
                            <img src="<?php echo thumbCrop(array('img' => $urlImg,'width' => 230,'height' => 148)); ?> " alt="<?php echo $tit_st_blog; ?>">    
                            <?php } ?>  
						</a>
					</figure>
					<div>
						<p class="date"><?php echo the_time("Y/m/d"); ?></p>
						<p class="title">
							<a href="<?php echo $link_st_blog; ?>">
								<span class="pc"><?php echo my_cut_string($tit_st_blog,35); ?></span>
								<span class="sp"><?php echo my_cut_string($tit_st_blog,23); ?></span>
							</a>
						</p>
						<a class="more" href="<?php echo $link_st_blog; ?>">詳しく見る</a>						
					</div>
				</div>
				<?php 
					endwhile;
				endif;	
				 ?>
			</div>	
			<div class="top__btnmore">
				<a href="<?php echo APP_URL ?>blog/"><span>スタッフブログ一覧</span></a>
			</div>					
		</div>
		<!-- contactbox	 -->
		<?php include(APP_PATH.'/libs/contactBox.php'); ?>
    </div><!-- #wrap -->

    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/footer.php'); ?>
    <script src="<?php echo APP_ASSETS ?>js/lib/slick.min.js"></script>
    <script>
 		if (window.matchMedia('screen and (max-width:767px)').matches) {
 			$('.mh_sp').matchHeight();
 		} else {

 		}
 		$(document).ready(function(){
 			var slider = $('.top__mainphoto--slick');

	        slider.on('init', function(slick){
	            setTimeout(function(){
	                $('.slide0 img').css('visibility','visible');
	            }, 300);
	        });

	        slider.slick({
	            autoplay: true,
	            fade: true,
	            dots: false,
	            speed: '3000',
	            arrows: false,
	            pauseOnFocus: false,
	            pauseOnHover: false,
	            mobileFirst: true
	            });	
 		});
    </script>
<!-- End Document
================================================== -->
</body>
</html>
