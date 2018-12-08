<div class="inner">
    <main>
        <div class="sp">
            <div class="works__filter">
                <?php 
                    $actual_link =  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    global $wp_query;
                    $current_tax = get_queried_object();
                    $current_tax_id = $current_tax->term_id; 
                    $current_tax_name = $current_tax->name; 

                    $args = array(
                        'post_type'                => 'blog',
                        'orderby'                  => 'id',
                        // 'order'                    => 'desc',
                        'hide_empty'               => 1,
                        'taxonomy'                 => 'blogcat',
                        'pad_counts'               => false );

                    $categories = get_categories( $args );

                    if($categories) {
                        $categories_sg_op = "";
                        foreach($categories as $categories_sg){
                            $url_term = get_term_link($categories_sg->slug,'blogcat');
                            $categories_sg_op .= '<option '.(($actual_link==$url_term) ? 'selected' : '' ).' value="'.$url_term.'">'.$categories_sg->name.'</option>';
                        }
                 ?>
                <div class="works__filter--select">
                    <select name="" id="" onChange="document.location.href=this.options[this.selectedIndex].value;">
                        <option value="">カテゴリーで絞り込む</option>
                        <option value="<?php echo APP_URL; ?>blog/">すべての記事</option>
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
        </div>
        <div class="blog__left">
            <?php if($current_tax_id) { ?>
                <h2 class="pc"><?php echo $current_tax_name; ?></h2>
            <?php } else { ?>
                <h2 class="pc">すべての記事</h2>
            <?php } ?>  
            <div class="blog__left__content">
                <?php 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $year = get_query_var('year');
                    $month = get_query_var('monthnum');

                    $taxo = array(
                        array(
                            'taxonomy' => 'blogcat',
                            'terms'    => $current_tax_id,
                        )
                    );
                    $a = array(
                        'post_type' => 'blog',
                        'posts_per_page' => 10,
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
                        $main_pic = get_field('main_pic');
                        $urlImg = catch_that_image();
                        if(!$urlImg) $urlImg = APP_ASSETS_IMG.'blog/nophoto_arc.jpg';
                 ?>
                <div class="blog__left__content__item">
                    <div class="left_img">
                        <a href="<?php echo $permalink; ?>">
                            <?php if($main_pic) { ?>
                            <img src="<?php echo thumbCrop(array('img' => $main_pic['url'],'width' => 230,'height' => 148)); ?>" alt="<?php echo $title; ?>">
                            <?php } else { ?>
                            <img src="<?php echo thumbCrop(array('img' => $urlImg,'width' => 230,'height' => 148)); ?> " alt="<?php echo $title; ?>">    
                            <?php } ?>    
                        </a>
                    </div>
                    <div class="right_content">
                        <span><?php the_time('Y/m/d'); ?></span>
                        <h3><a href="<?php echo $permalink; ?>"><?php echo my_cut_string($title,43); ?></a></h3>
                        <div class="pc"><?php echo my_cut_string(get_the_content(),70); ?></div>
                        <a href="<?php echo $permalink; ?>"><span>詳しく見る</span></a>
                    </div>
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
                    $link = 'blogcat/'.$current_page->slug;
                } elseif($year != '0' || $month != '0') {
                    $link = 'blog/'.$year.'/'.$month;
                } else {
                    $link = 'blog';
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
        </div>
        <?php include('sidebar.php'); ?>
    </main>
</div>