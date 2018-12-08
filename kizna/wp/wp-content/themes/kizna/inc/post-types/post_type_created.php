<?php
// create a book custom post type WORKS
$works = new CPT(
    array (
        'post_type_name' => 'works',
        'plural' =>"事例集"
    ),
    array (
        'labels' => array(
            'name' => _x('事例集', 'alive'),
            'singular_name' => _x('事例集', 'alive'),
            'add_new' => _x('新しく事例集を書く', 'alive'),
            'add_new_item' => __('事例集記事を書く'),
            'edit_item' => __('事例集記事を編集'),
            'new_item' => __('新しい事例集記事'),
            'view_item' => __('事例集記事を見る'),
            'search_staff' => __('事例集記事を探す'),
            'not_found' =>  __('事例集記事はありません'),
            'not_found_in_trash' => __('ゴミ箱にsample記事はありません'),
            'parent_item_colon' => ''
            ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'editor'),
        'has_archive' => 'works',
        'rewrite' => array(
            'slug' => 'works',
            'with_front' => true
        )
    )
);
// create a works Cats taxonomy
$works->register_taxonomy(
    array(
        'taxonomy_name' => 'workscat',
        'slug' => 'workscat',
        'singular' => '事例集cat',
        'plural' => '事例集cat',
    array(
        'labels' => array(
                'name' => _x('事例集cat','alive'),
                'singular_name' => _x('事例集cat','alive'),
                'search_items' => __('事例集cat'),
                'all_items' => __('事例集cat'),
                'parent_item' => __( 'Parent Cat' ),
                'parent_item_colon' => __( 'Parent Cat:' ),
                'edit_item' => __('Cat記事を編集'),
                'add_new_item' => __('Cat記事を書く'),
                'menu_name' => __( 'categories' ),
            ),
        'hierarchical' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_admin_column' => true,
    )
));
// use "pages" icon for post type
$works->menu_icon("dashicons-hammer");
// define the workss to appear on the admin edit screen
$works->columns(array(
    'cb'        => '<input type="checkbox" />',
    'title'     => __('Title'),
    'icon'      => __('Thumbnail'),
    'date'      => __('Date')
));

// create a book custom post type INTERVIEW
$interview = new CPT(
    array (
        'post_type_name' => 'interview',
        'plural' =>"お客様インタビュー"
    ),
    array (
        'labels' => array(
            'name' => _x('お客様インタビュー', 'alive'),
            'singular_name' => _x('お客様インタビュー', 'alive'),
            'add_new' => _x('新しくお客様インタビューを書く', 'alive'),
            'add_new_item' => __('お客様インタビュー記事を書く'),
            'edit_item' => __('お客様インタビュー記事を編集'),
            'new_item' => __('新しいお客様インタビュー記事'),
            'view_item' => __('お客様インタビュー記事を見る'),
            'search_staff' => __('お客様インタビュー記事を探す'),
            'not_found' =>  __('お客様インタビュー記事はありません'),
            'not_found_in_trash' => __('ゴミ箱にsample記事はありません'),
            'parent_item_colon' => ''
            ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title'),
        'has_archive' => 'interview',
        'rewrite' => array(
            'slug' => 'interview',
            'with_front' => true
        )
    )
);
// create a interview Cats taxonomy
$interview->register_taxonomy(
    array(
        'taxonomy_name' => 'interviewcat',
        'slug' => 'interviewcat',
        'singular' => 'お客様インタビューcat',
        'plural' => 'お客様インタビューcat',
    array(
        'labels' => array(
                'name' => _x('お客様インタビューcat','alive'),
                'singular_name' => _x('お客様インタビューcat','alive'),
                'search_items' => __('お客様インタビューcat'),
                'all_items' => __('お客様インタビューcat'),
                'parent_item' => __( 'Parent Cat' ),
                'parent_item_colon' => __( 'Parent Cat:' ),
                'edit_item' => __('Cat記事を編集'),
                'add_new_item' => __('Cat記事を書く'),
                'menu_name' => __( 'categories' ),
            ),
        'hierarchical' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_admin_column' => true,
    )
));
// use "pages" icon for post type
$interview->menu_icon("dashicons-smiley");
// define the interviews to appear on the admin edit screen
$interview->columns(array(
    'cb'        => '<input type="checkbox" />',
    'title'     => __('Title'),
    'icon'      => __('Thumbnail'),
    'date'      => __('Date')
));

// create a book custom post type FAQ
$faq = new CPT(
    array (
        'post_type_name' => 'faq',
        'plural' =>"よくあるご質問"
    ),
    array (
        'labels' => array(
            'name' => _x('よくあるご質問', 'alive'),
            'singular_name' => _x('よくあるご質問', 'alive'),
            'add_new' => _x('新しくよくあるご質問を書く', 'alive'),
            'add_new_item' => __('よくあるご質問記事を書く'),
            'edit_item' => __('よくあるご質問記事を編集'),
            'new_item' => __('新しいよくあるご質問記事'),
            'view_item' => __('よくあるご質問記事を見る'),
            'search_staff' => __('よくあるご質問記事を探す'),
            'not_found' =>  __('よくあるご質問記事はありません'),
            'not_found_in_trash' => __('ゴミ箱にsample記事はありません'),
            'parent_item_colon' => ''
            ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => 'faq',
        'rewrite' => array(
            'slug' => 'faq',
            'with_front' => true
        )
    )
);
// create a faq Cats taxonomy
$faq->register_taxonomy(
    array(
        'taxonomy_name' => 'faqcat',
        'slug' => 'faqcat',
        'singular' => 'よくあるご質問cat',
        'plural' => 'よくあるご質問cat',
    array(
        'labels' => array(
                'name' => _x('よくあるご質問cat','alive'),
                'singular_name' => _x('よくあるご質問cat','alive'),
                'search_items' => __('よくあるご質問cat'),
                'all_items' => __('よくあるご質問cat'),
                'parent_item' => __( 'Parent Cat' ),
                'parent_item_colon' => __( 'Parent Cat:' ),
                'edit_item' => __('Cat記事を編集'),
                'add_new_item' => __('Cat記事を書く'),
                'menu_name' => __( 'categories' ),
            ),
        'hierarchical' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_admin_column' => true,
    )
));
// use "pages" icon for post type
$faq->menu_icon("dashicons-lightbulb");
// define the faqs to appear on the admin edit screen
$faq->columns(array(
    'cb'        => '<input type="checkbox" />',
    'title'     => __('Title'),
    'icon'      => __('Thumbnail'),
    'date'      => __('Date')
));

// create a book custom post type BLOG
$blog = new CPT(
    array (
        'post_type_name' => 'blog',
        'plural' =>"スタッフブログ"
    ),
    array (
        'labels' => array(
            'name' => _x('スタッフブログ', 'alive'),
            'singular_name' => _x('スタッフブログ', 'alive'),
            'add_new' => _x('新しくスタッフブログを書く', 'alive'),
            'add_new_item' => __('スタッフブログ記事を書く'),
            'edit_item' => __('スタッフブログ記事を編集'),
            'new_item' => __('新しいスタッフブログ記事'),
            'view_item' => __('スタッフブログ記事を見る'),
            'search_staff' => __('スタッフブログ記事を探す'),
            'not_found' =>  __('スタッフブログ記事はありません'),
            'not_found_in_trash' => __('ゴミ箱にsample記事はありません'),
            'parent_item_colon' => ''
            ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => 'blog',
        'rewrite' => array(
            'slug' => 'blog',
            'with_front' => true
        )
    )
);
// create a blog Cats taxonomy
$blog->register_taxonomy(
    array(
        'taxonomy_name' => 'blogcat',
        'slug' => 'blogcat',
        'singular' => 'スタッフブログcat',
        'plural' => 'スタッフブログcat',
    array(
        'labels' => array(
                'name' => _x('スタッフブログcat','alive'),
                'singular_name' => _x('スタッフブログcat','alive'),
                'search_items' => __('スタッフブログcat'),
                'all_items' => __('スタッフブログcat'),
                'parent_item' => __( 'Parent Cat' ),
                'parent_item_colon' => __( 'Parent Cat:' ),
                'edit_item' => __('Cat記事を編集'),
                'add_new_item' => __('Cat記事を書く'),
                'menu_name' => __( 'categories' ),
            ),
        'hierarchical' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_admin_column' => true,
    )
));
// use "pages" icon for post type
$blog->menu_icon("dashicons-admin-customizer");
// define the blogs to appear on the admin edit screen
$blog->columns(array(
    'cb'        => '<input type="checkbox" />',
    'title'     => __('Title'),
    'icon'      => __('Thumbnail'),
    'date'      => __('Date')
));

// create a book custom post type STAFF
$staff = new CPT(
    array (
        'post_type_name' => 'staff',
        'plural' =>"スタッフ・職人紹介"
    ),
    array (
        'labels' => array(
            'name' => _x('スタッフ・職人紹介', 'alive'),
            'singular_name' => _x('スタッフ・職人紹介', 'alive'),
            'add_new' => _x('新しくスタッフ・職人紹介を書く', 'alive'),
            'add_new_item' => __('スタッフ・職人紹介記事を書く'),
            'edit_item' => __('スタッフ・職人紹介記事を編集'),
            'new_item' => __('新しいスタッフ・職人紹介記事'),
            'view_item' => __('スタッフ・職人紹介記事を見る'),
            'search_staff' => __('スタッフ・職人紹介記事を探す'),
            'not_found' =>  __('スタッフ・職人紹介記事はありません'),
            'not_found_in_trash' => __('ゴミ箱にsample記事はありません'),
            'parent_item_colon' => ''
            ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title'),
        'has_archive' => 'staff',
        'rewrite' => array(
            'slug' => 'company/staff',
            'with_front' => true
        )
    )
);
// create a staff Cats taxonomy
$staff->register_taxonomy(
    array(
        'taxonomy_name' => 'staffcat',
        'slug' => 'staffcat',
        'singular' => 'スタッフ・職人紹介cat',
        'plural' => 'スタッフ・職人紹介cat',
    array(
        'labels' => array(
                'name' => _x('スタッフ・職人紹介cat','alive'),
                'singular_name' => _x('スタッフ・職人紹介cat','alive'),
                'search_items' => __('スタッフ・職人紹介cat'),
                'all_items' => __('スタッフ・職人紹介cat'),
                'parent_item' => __( 'Parent Cat' ),
                'parent_item_colon' => __( 'Parent Cat:' ),
                'edit_item' => __('Cat記事を編集'),
                'add_new_item' => __('Cat記事を書く'),
                'menu_name' => __( 'categories' ),
            ),
        'hierarchical' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_admin_column' => true,
    )
));
// use "pages" icon for post type
$staff->menu_icon("dashicons-businessman");
// define the blogs to appear on the admin edit screen
$staff->columns(array(
    'cb'        => '<input type="checkbox" />',
    'title'     => __('Title'),
    'icon'      => __('Thumbnail'),
    'date'      => __('Date')
));

// create a book custom post type EVENT
$event = new CPT(
    array (
        'post_type_name' => 'event',
        'plural' =>"見学会・セミナー"
    ),
    array (
        'labels' => array(
            'name' => _x('見学会・セミナー', 'alive'),
            'singular_name' => _x('スタッフブログ', 'alive'),
            'add_new' => _x('新しく見学会・セミナーを書く', 'alive'),
            'add_new_item' => __('見学会・セミナー記事を書く'),
            'edit_item' => __('見学会・セミナー記事を編集'),
            'new_item' => __('新しい見学会・セミナー記事'),
            'view_item' => __('見学会・セミナー記事を見る'),
            'search_staff' => __('見学会・セミナー記事を探す'),
            'not_found' =>  __('見学会・セミナー記事はありません'),
            'not_found_in_trash' => __('ゴミ箱にevent記事はありません'),
            'parent_item_colon' => ''
            ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => 'event',
        'rewrite' => array(
            'slug' => 'event',
            'with_front' => true
        )
    )
);
// create a event Cats taxonomy
$event->register_taxonomy(
    array(
        'taxonomy_name' => 'eventcat',
        'slug' => 'eventcat',
        'singular' => '見学会・セミナーcat',
        'plural' => '見学会・セミナーcat',
    array(
        'labels' => array(
                'name' => _x('見学会・セミナーcat','alive'),
                'singular_name' => _x('見学会・セミナーcat','alive'),
                'search_items' => __('見学会・セミナーcat'),
                'all_items' => __('見学会・セミナーcat'),
                'parent_item' => __( 'Parent Cat' ),
                'parent_item_colon' => __( 'Parent Cat:' ),
                'edit_item' => __('Cat記事を編集'),
                'add_new_item' => __('Cat記事を書く'),
                'menu_name' => __( 'categories' ),
            ),
        'hierarchical' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_admin_column' => true,
    )
));
// use "pages" icon for post type
$event->menu_icon("dashicons-admin-network");
// define the blogs to appear on the admin edit screen
$event->columns(array(
    'cb'        => '<input type="checkbox" />',
    'title'     => __('Title'),
    'icon'      => __('Thumbnail'),
    'date'      => __('Date')
));


// create a book custom post type EVENT
$recruit = new CPT(
    array (
        'post_type_name' => 'recruit',
        'plural' =>"採用情報"
    ),
    array (
        'labels' => array(
            'name' => _x('採用情報', 'alive'),
            'singular_name' => _x('スタッフブログ', 'alive'),
            'add_new' => _x('新しく採用情報を書く', 'alive'),
            'add_new_item' => __('採用情報記事を書く'),
            'edit_item' => __('採用情報記事を編集'),
            'new_item' => __('新しい採用情報記事'),
            'view_item' => __('採用情報記事を見る'),
            'search_staff' => __('採用情報記事を探す'),
            'not_found' =>  __('採用情報記事はありません'),
            'not_found_in_trash' => __('ゴミ箱にrecruit記事はありません'),
            'parent_item_colon' => ''
            ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title'),
        'has_archive' => 'recruit',
        'rewrite' => array(
            'slug' => 'recruit',
            'with_front' => true
        )
    )
);
// create a recruit Cats taxonomy
$recruit->register_taxonomy(
    array(
        'taxonomy_name' => 'recruitcat',
        'slug' => 'recruitcat',
        'singular' => '採用情報cat',
        'plural' => '採用情報cat',
    array(
        'labels' => array(
                'name' => _x('採用情報cat','alive'),
                'singular_name' => _x('採用情報cat','alive'),
                'search_items' => __('採用情報cat'),
                'all_items' => __('採用情報cat'),
                'parent_item' => __( 'Parent Cat' ),
                'parent_item_colon' => __( 'Parent Cat:' ),
                'edit_item' => __('Cat記事を編集'),
                'add_new_item' => __('Cat記事を書く'),
                'menu_name' => __( 'categories' ),
            ),
        'hierarchical' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_admin_column' => true,
    )
));
// use "pages" icon for post type
$recruit->menu_icon("dashicons-admin-network");
// define the blogs to appear on the admin edit screen
$recruit->columns(array(
    'cb'        => '<input type="checkbox" />',
    'title'     => __('Title'),
    'icon'      => __('Thumbnail'),
    'date'      => __('Date')
));































