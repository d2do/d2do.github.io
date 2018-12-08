<div class="blog__right">
    <div class="blog__right__category">
        <h3>Category</h3>
        <ul>
            <li><a href="<?php echo APP_URL ?>blog/">すべての記事</a></li>
        <?php
            $args = array(
                'post_type'                => 'blog',
                'orderby'                  => 'id',
                'order'                    => 'ASC',
                'hide_empty'               => 0,
                'taxonomy'                 => 'blogcat',
                'pad_counts'               => false );
            
            $categories = get_categories( $args );
            $i = 0;
            foreach ($categories as $cat)
            {
                if($cat->count > 0) { 
          ?>    
            <li><a href="<?php echo get_term_link($cat->slug,'blogcat');?>"><?php  echo $cat->name; ?>(<?php echo $cat->count; ?>)</a></li>
          <?php
                }
            }
          ?>
        </ul>            
    </div>
    <div class="blog__right__category blog__right__archive">
        <h3>ARCHIVE</h3>
        <ul class="accordion">
            <?php echo wp_post_type_archive('blog'); ?>
        </ul>              
    </div>
</div>