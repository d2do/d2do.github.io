<div class="works__filter">
    <?php 
        $actual_link =  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        global $wp_query;
        $current_tax = get_queried_object();
        $current_tax_id = $current_tax->term_id; 
        $current_tax_name = $current_tax->name; 

        $args = array(
            'post_type'                => 'works',
            'orderby'                  => 'id',
            // 'order'                    => 'desc',
            'hide_empty'               => 1,
            'taxonomy'                 => 'workscat',
            'pad_counts'               => false );

        $categories = get_categories( $args );

        if($categories) {
            $categories_sg_op = "";
            foreach($categories as $categories_sg){
                $url_term = get_term_link($categories_sg->slug,'workscat');
                $categories_sg_op .= '<option '.(($actual_link==$url_term) ? 'selected' : '' ).' value="'.$url_term.'">'.$categories_sg->name.'</option>';
            }
     ?>
	<div class="works__filter--select">
		<select name="" id="" onChange="document.location.href=this.options[this.selectedIndex].value;">
            <option value="">カテゴリーで絞り込む</option>
			<option value="<?php echo APP_URL; ?>works/">すべての記事</option>
            <?php echo $categories_sg_op;?>
		</select>
        <?php if($current_tax_id) { ?>
    		<p><?php echo $current_tax_name; ?></p>
        <?php } else { ?>
            <p>すべての記事</p>
        <?php } ?>    
	</div>
    <?php } ?>
</div>
<div class="works__list">
	<?php 

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $year = get_query_var('year');
        $month = get_query_var('monthnum');

        $taxo = array(
            array(
                'taxonomy' => 'workscat',
                'terms'    => $current_tax_id,
            )
        );
        $a = array(
            'post_type' => 'works',
            'posts_per_page' => 18,
            // 'orderby' => 'post_date',
            // 'order' => 'DESC',
            'paged' => $paged,
            'post_status' => 'publish',
            'year' => $year,
            'monthnum' => $month
            
        );
        if($current_tax_id){
            $a['tax_query'] = $taxo;
        }
        $wp_query->query($a);

        if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
            $permalink = get_the_permalink();
            $title = get_the_title();
            $time_post = (time() - strtotime(get_the_time('d.m.Y'))) / 86400;
            $customer_info = get_field('customer_info');
            $main_pic = get_field('main_pic');
            $urlImg = catch_that_image();
            if(!$urlImg) $urlImg = APP_ASSETS_IMG."works/no_photo.jpg";
            
     ?>
	<div class="works__item">
		<figure>
            <?php if($time_post < 7) : ?>
    			<span></span>
            <?php endif; ?>
			<a href="<?php echo $permalink; ?>">
                <?php if($main_pic) { ?>
                <img src="<?php echo thumbCrop(array('img' => $main_pic['url'],'width' => 533,'height' => 533)); ?>" alt="<?php echo $title; ?>">
                <?php } else { ?>
                <img src="<?php echo thumbCrop(array('img' => $urlImg,'width' => 533,'height' => 533)); ?> " alt="<?php echo $title; ?>">    
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
        <h3 class="pc"><a href="<?php echo $permalink; ?>"><?php echo my_cut_string($title,33); ?></a></h3>
		<h3 class="sp"><a href="<?php echo $permalink; ?>"><?php echo my_cut_string($title,23); ?></a></h3>
        <?php if($customer_info) : ?>
		<p class="customer"><?php echo $customer_info; ?></p>
        <?php endif; ?>
		<a class="more" href="<?php echo $permalink; ?>">詳しく見る</a>
	</div>
	<?php 
        endwhile;
    endif; wp_reset_postdata();
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
    $link = '';
    if($current_tax_id){
        $link = 'workscat/'.$current_page->slug;
    } elseif($year != '0' || $month != '0') {
        $link = 'works/'.$year.'/'.$month;
    } else {
        $link = 'works';
    }
?>
<?php if( $num_post_per_page < $found_posts) { ?>
<div class="page__wp-pagenavi sp">
    <div class="wrap page__wp-pagenavi--prev <?php if($paged == 1) { echo "no-prev"; } ?>">
        <?php if($paged > 1) { ?>
        <a class="previouspostslink" rel="prev" href="<?php echo APP_URL; ?><?php echo $link; ?>/page/<?php echo $paged - 1;?>">PREV</a>
        <?php } ?>
    </div>
    <div class="page__wp-pagenavi--sl">
        <select name="" id="" onChange="document.location.href=this.options[this.selectedIndex].value;">
            <option value="<?php echo $paged; ?>/<?php echo $max_num ?>"><?php echo $paged; ?>/<?php echo $max_num ?></option>
            <?php   for($i = 1; $i <= $max_num; $i ++) { ?>
            <option value="<?php echo APP_URL; ?><?php echo $link; ?>/page/<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="wrap page__wp-pagenavi--next <?php if($paged == $max_num) { echo "no-next"; } ?>">
        <?php if($paged < $max_num) { ?>
        <a class="nextpostslink" rel="next" href="<?php echo APP_URL; ?><?php echo $link; ?>/page/<?php echo $paged + 1; ?>">NEXT</a>
        <?php } ?>
    </div>
</div>
<?php } ?>