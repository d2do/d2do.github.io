<?php
require_once( 'inc/post-types/rewrite_url.php' );
require_once( 'inc/post-types/class_post-type.php' );
require_once( 'inc/post-types/post_type_created.php' );
require_once( 'inc/post-types/image-sizes.php' );

//login logo
function my_login_logo() { echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/logo.png) 50% 50% no-repeat !important; }</style>'; ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        height: 65px;
        width: 100% !important;
        background-size: 320px 65px;
        background-repeat: no-repeat;
        padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

add_theme_support( 'post-thumbnails' );

//timthumb

define('THEME_DIR', get_template_directory_uri());

if(! defined('THUMB_CROP_FUNC') )
    define( "THUMB_CROP_FUNC", "BTHUMB" ); //BTHUMB //TTHUMB //NOTHUMB
if ( !function_exists( 'thumbCrop' ) ) {
    /**
     * Crop image based on timthumb or bfithumb
     * 
     * @since 1.0.0
     * 
     * @param 'img': image url
     *        'width': crop width
     *        'height': crop height
     *        'crop': param for bfithumb only
     *        'quality': param for bfithumb only
     *
     * @return image url
     **/
    function thumbCrop ( $args = array() ) {
        $defaults = array(
            'img' => '',
            'width' => get_option( "medium_size_w" ),
            'height' => get_option( "medium_size_h" ),
            'zoom' => 1,
            'crop' => true,
            'quality' => 100,
        );

        $args  = wp_parse_args( (array) $args, $defaults );
        $img = str_replace( get_bloginfo( 'url' ), '', $args['img'] );

        switch ( THUMB_CROP_FUNC ) {
            case 'NOTHUMB':
                $image_url = $img;
                break;
            case 'BTHUMB':
                require_once( get_template_directory() . '/inc/bfi_thumb.php' );
                // @define( BFITHUMB_UPLOAD_DIR, 'other_dir' );
                $image_url = bfi_thumb( $args['img'], $args );
                break;
            default:
            case 'TTHUMB':
                $image_url = THEME_DIR . "/timthumb/timthumb.php?src=" . $img . '&amp;h=' . $args['height'] . '&amp;w=' . $args['width'] ;
                break;
        }

        return $image_url;
    }
}
$image_cache = THEME_DIR . "/php/cache/";
//chmod($image_cache, 0777);

//get image from content 
function catch_that_image($noimg = true) {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  // $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $output = preg_match_all('/<img.+src="(([^"]+)(.)(jpeg|png|jpg))"/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  // if(empty($first_img) || $first_img == "") {
  //   if($noimg) $first_img = APP_ASSETS_IMG . "common/img_nophoto.jpg";
  //    else return false;
  // }
  return $first_img;

}
function get_first_image($cnt, $noimg = true){
    $first_img = '';
    $output = preg_match_all('/<img.*.+src=[\'"]([^\'"]+)\.(jpg|jpeg|png)[\'"].*>/i', $cnt, $matches);
    // preg_match_all('/<a.*.+href=[\'"]([^\'"]+)\.(jpg|jpeg|png|gif)[\'"]>.*<\/a>/', $the_content, $matches3);
    // for($i=0;$i<=10;$i++){
    //     $first_img = $matches[1][$i];
    //     $ext = substr( $first_img, -3);
    //     if($ext == 'jpg' or $ext == 'png'){
    //         return $first_img;
    //         break;
    //     }
    // }
    // var_dump($first_img); die;
    if($matches[1][0]) {
        return $matches[1][0];
    }
    if(empty($first_img) || $first_img == "") {
        if(is_mobile()) {
            if($noimg) $first_img = APP_ASSETS_IMG . "common/img_nophoto_sp.jpg";
            else 
            return false;        
        } else {
            if($noimg) $first_img = APP_ASSETS_IMG . "common/img_nophoto.jpg";
            else 
            return false;        
        }
    }  
    return $first_img;
}

function get_first_image_works($cnt, $noimg = true){
    $first_img = '';
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $cnt, $matches);
    for($i=0;$i<=10;$i++){
        $first_img = $matches[1][$i];
        $ext = substr( $first_img, -3);
        if($ext == 'jpg' or $ext == 'png'){
            return $first_img;
            break;
        }
    }
    if(empty($first_img) || $first_img == "") {
        if($noimg) $first_img = APP_ASSETS_IMG . "common/img_nophoto_works.jpg";
        else return false;   
    }  
    return $first_img;
}

function wp_post_type_archive($post_type = "post", $home_url="", $havecount = true){

    global $wpdb;
    if($home_url == "") $home_url  = home_url("/");
    $html = '';
    $txtCount = "";
    $posttype = get_post_type_object($post_type);
    $slug = $posttype->rewrite['slug'];
    $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
            FROM $wpdb->posts WHERE post_status = 'publish'
            AND post_type = '{$post_type}' ORDER BY post_date DESC");

    foreach($years as $year) :
        if($havecount){
         $count = $wpdb->get_col("SELECT COUNT(*) countpost
            FROM $wpdb->posts WHERE post_status = 'publish'
            AND post_type = '{$post_type}' and YEAR(post_date) = '".$year."'");
            $txtCount = '('.$count[0].')';
        }
        $html .= '<li id="year'.$year.'"><a href="javascript:void(0);" class="dropdown">'.$year.'年 '.$txtCount.'</a><ul class="sub">';

             $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
                    FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = '{$post_type}'
                    AND YEAR(post_date) = '".$year."' ORDER BY post_date DESC");

            foreach($months as $month) :
            if($havecount){
                 $count = $wpdb->get_col("SELECT COUNT(*) countpost
            FROM $wpdb->posts WHERE post_status = 'publish'
            AND post_type = '{$post_type}' and YEAR(post_date) = '".$year."' and MONTH(post_date) = '".$month."'");
            $txtCount = '('.$count[0].')';
        }
                 $html .= '<li><a href="'.$home_url.$slug."/".$year.'/'.$month.'">'.$month.'月 '.$txtCount.'</a></li>';

            endforeach;

        $html .= '</ul></li>';

    endforeach;

    return $html;
}
// 管理画面サイドバーメニュー非表示
function remove_menus () {
    if (!current_user_can('level_9')) { //level9以下のユーザーの場合メニューをunsetする
    global $menu;
    //var_dump($menu);
    unset($menu[2]);//ダッシュボード
    unset($menu[4]);//メニューの線1
    unset($menu[5]);//投稿
    unset($menu[15]);//リンク
    unset($menu[20]);//ページ
    unset($menu[25]);//コメント
    unset($menu[59]);//メニューの線2
    unset($menu[60]);//テーマ
    unset($menu[65]);//プラグイン
    unset($menu[70]);//プロフィール
    unset($menu[75]);//ツール
    unset($menu[80]);//設定
    unset($menu[90]);//メニューの線3
    }
}
add_action('admin_menu', 'remove_menus');

function custom_admin_footer() {
    echo ' お困りの際は<a href="mailto:nagoya@alive-web.co.jp" title="アライブ株式会社">アライブ株式会社</a>までお気軽にお問い合わせ下さい。TEL:052-201-2525';
}
add_filter('admin_footer_text', 'custom_admin_footer');

/* term drop down function */
function todo_restrict_manage_posts() {
    global $typenow;
    $args=array( 'public' => true, '_builtin' => false );
    $post_types = get_post_types($args);
    if ( in_array($typenow, $post_types) ) {
    $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            wp_dropdown_categories(array(
                'show_option_all' => __('カテゴリー '),
                'taxonomy' => $tax_slug,
                'name' => $tax_obj->name,
                'orderby' => 'term_order',
                'selected' => $_GET[$tax_obj->query_var],
                'hierarchical' => $tax_obj->hierarchical,
                'show_count' => false,
                'hide_empty' => true
            ));
        }
    }
}
function todo_convert_restrict($query) {
    global $pagenow;
    global $typenow;
    if ($pagenow=='edit.php') {
        $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $var = &$query->query_vars[$tax_slug];
            if ( isset($var) ) {
                $term = get_term_by('id',$var,$tax_slug);
                $var = $term->slug;
            }
        }
    }
    return $query;
}
add_action( 'restrict_manage_posts', 'todo_restrict_manage_posts' );
add_filter('parse_query','todo_convert_restrict');
/* term drop down function end*/

//for archives
global $my_archives_post_type;
add_filter( 'getarchives_where', 'my_getarchives_where', 10, 2 );
function my_getarchives_where( $where, $r ) {
  global $my_archives_post_type;
  if ( isset($r['post_type']) ) {
    $my_archives_post_type = $r['post_type'];
    $where = str_replace( '\'post\'', '\'' . $r['post_type'] . '\'', $where );
  } else {
    $my_archives_post_type = '';
  }
  return $where;
}
add_filter( 'get_archives_link', 'my_get_archives_link' );
function my_get_archives_link( $link_html ) {
  global $my_archives_post_type;
  if ( '' != $my_archives_post_type )
    $add_link .= '?post_type=' . $my_archives_post_type;
	$link_html = preg_replace("/href=\'(.+)\'\s/","href='$1".$add_link."'",$link_html);

  return $link_html;
}

// ADD Editor Style
add_action( 'init', 'cd_add_editor_styles' );
function cd_add_editor_styles() {
    add_editor_style( 'css/editor-style.css' );
}

// paging
$option_posts_per_page = get_option( 'posts_per_page' );
add_action( 'init', 'my_modify_posts_per_page', 0);
function my_modify_posts_per_page() {
    add_filter( 'option_posts_per_page', 'my_option_posts_per_page' );
}
function my_option_posts_per_page( $value ) {
    $option_posts_per_page;
}

//Get SRC
function get_src($sizes) {

    global $post, $posts;
    $fbimage = '';
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',
    $post->post_content, $matches);
    $fbimage = $matches[1][0];
    $fbimage = '';

    if(empty($fbimage) ){
        if( !empty($sizes) ) {
            if ( has_post_thumbnail() ) {
                $src = wp_get_attachment_image_src( get_post_thumbnail_id(), "$sizes" );

                $fbimage = $src[0];
            }
        }else{
            if ( has_post_thumbnail() ) {
                $src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                $fbimage = $src[0];
            }
        }
    }
  if(empty($fbimage)) {
    $fbimage = get_home_url().'/assets/images/common/no-image.jpg';
  }
  return $fbimage;
}

add_filter( 'next_posts_link_attributes', 'next_posts_class' );
function next_posts_class() {
    return 'class="next"';
}
add_filter( 'previous_posts_link_attributes', 'prev_posts_class' );
function prev_posts_class() {
    return 'class="prev"';
}

add_filter('next_post_link', 'next_post_class');
function next_post_class( $output ) {
    $code = 'class="next"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}
add_filter('previous_post_link', 'prev_post_class');
function prev_post_class( $output ) {
    $code = 'class="prev"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}
// END Specific Functions
function rewrite_rule_event_thx() {
    global $wp_rewrite;
    add_rewrite_rule('^event/indexThx.php','index.php?page_id=347','top');
    // add_rewrite_rule('^modelhouse/indexThx.php','index.php?page_id=152','top');
    $wp_rewrite->flush_rules();
}
add_action( 'init', 'rewrite_rule_event_thx' );
// BEGIN Add for FAQ (よくある質問)
// function wpd_post_link_faq( $post_link, $id = 0 ){
//     $post = get_post($id);
//     // Post Type - faq
//     if ( is_object( $post ) && $post->post_type == 'faq' ){
//         $terms = wp_get_object_terms( $post->ID, 'faqcat' );
//         if( $terms ){
//             foreach( $terms as $term ){
//                 if( 0 == $term->parent ){               
//                     return home_url('faq/'.$term->slug. "/" . $post->ID . '/');
//                 }
//             }
//         } else {
            
//             return home_url('faq/uncategorized'. "/" . $post->ID . '/');
//         }
//     }

//     return $post_link;
// }
// add_filter( 'post_type_link', 'wpd_post_link_faq', 1, 3 );

// function my_addfaq_rewrite_rules($rules) {
//     $NewRules = array(
//         'faq/([0-9]{4})/([0-9]{1,2})/?$'                   =>    'index.php?post_type=faq&year=$matches[1]&monthnum=$matches[2]',
//         'faq/([0-9]{4})/([0-9]{1,2})/page/([0-9]+)/?$'     =>    'index.php?post_type=faq&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]',
//         'faq/faqcat/([0-9]+)?$'                       =>    'index.php?post_type=faq&faqcat=$matches[1]',
//         'faq/faqcat/([^&]+)/page/([0-9]{1,})/?$'      =>    'index.php?post_type=faq&faqcat=$matches[1]&paged=$matches[2]',
//         'faq/page/([0-9]{1,})/?$'                          =>    'index.php?post_type=faq&paged=$matches[1]',
//         'faq/([^/]+)/([0-9]+)?$'                           =>    'index.php?post_type=faq&faqcat=$matches[1]&p=$matches[2]',

//     );
//     $rules = $NewRules + $rules;
//     return $rules;
// }
// add_filter('rewrite_rules_array', 'my_addfaq_rewrite_rules');
// END Add for FAQ (よくある質問)