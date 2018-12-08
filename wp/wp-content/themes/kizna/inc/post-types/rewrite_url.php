<?php
function add_query_vars($vars) {
    $vars[]     = "tab";
    $vars[]     = "salon_id";
    return $vars;
}
// hook add_query_vars function into query_vars
add_filter('query_vars', 'add_query_vars');


// BEGIN Add for WORKS
function wpd_post_link_works( $post_link, $id = 0 ){
    $post = get_post($id);
    // Post Type - works
    if ( is_object( $post ) && $post->post_type == 'works' ){
        $terms = wp_get_object_terms( $post->ID, 'workscat' );
        if( $terms ){
            foreach( $terms as $term ){
                if( 0 == $term->parent ){
                    return home_url('works/'.$term->slug. "/" . $post->ID . '/');
                }
            }
        } else {
            return home_url('works/uncategorized'. "/" . $post->ID . '/');
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpd_post_link_works', 1, 3 );

function my_addworks_rewrite_rules($rules) {
    $NewRules = array(
        'works/([0-9]{4})/([0-9]{1,2})/?$'               =>    'index.php?post_type=works&year=$matches[1]&monthnum=$matches[2]',
        'works/([0-9]{4})/([0-9]{1,2})/page/([0-9]+)/?$' =>    'index.php?post_type=works&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]',
        'works/workscat/([0-9]+)?$'                       =>    'index.php?post_type=works&workscat=$matches[1]',
        'works/workscat/([^&]+)/page/([0-9]{1,})/?$'      =>    'index.php?post_type=works&workscat=$matches[1]&paged=$matches[2]',
        'works/page/([0-9]{1,})/?$'                      =>    'index.php?post_type=works&paged=$matches[1]',
        'works/([^/]+)/([0-9]+)?$'                       =>    'index.php?post_type=works&workscat=$matches[1]&p=$matches[2]',
    );
    $rules = $NewRules + $rules;
    return $rules;
}
add_filter('rewrite_rules_array', 'my_addworks_rewrite_rules');
// END Add for WORKS


// BEGIN Add for INTERVIEW
function wpd_post_link_interview( $post_link, $id = 0 ){
    $post = get_post($id);
    // Post Type - interview
    if ( is_object( $post ) && $post->post_type == 'interview' ){
        $terms = wp_get_object_terms( $post->ID, 'interviewcat' );
        if( $terms ){
            foreach( $terms as $term ){
                if( 0 == $term->parent ){
                    return home_url('interview/'.$term->slug. "/" . $post->ID . '/');
                }
            }
        } else {
            return home_url('interview/uncategorized'. "/" . $post->ID . '/');
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpd_post_link_interview', 1, 3 );

function my_addinterview_rewrite_rules($rules) {
    $NewRules = array(
        'interview/([0-9]{4})/([0-9]{1,2})/?$'               =>    'index.php?post_type=interview&year=$matches[1]&monthnum=$matches[2]',
        'interview/([0-9]{4})/([0-9]{1,2})/page/([0-9]+)/?$' =>    'index.php?post_type=interview&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]',
        'interview/interviewcat/([0-9]+)?$'                       =>    'index.php?post_type=interview&interviewcat=$matches[1]',
        'interview/interviewcat/([^&]+)/page/([0-9]{1,})/?$'      =>    'index.php?post_type=interview&interviewcat=$matches[1]&paged=$matches[2]',
        'interview/page/([0-9]{1,})/?$'                      =>    'index.php?post_type=interview&paged=$matches[1]',
        'interview/([^/]+)/([0-9]+)?$'                       =>    'index.php?post_type=interview&interviewcat=$matches[1]&p=$matches[2]',
    );
    $rules = $NewRules + $rules;
    return $rules;
}
add_filter('rewrite_rules_array', 'my_addinterview_rewrite_rules');
// END Add for INTERVIEW

// BEGIN Add for FAQ
function wpd_post_link_faq( $post_link, $id = 0 ){
    $post = get_post($id);
    // Post Type - faq
    if ( is_object( $post ) && $post->post_type == 'faq' ){
        $terms = wp_get_object_terms( $post->ID, 'faqcat' );
        if( $terms ){
            foreach( $terms as $term ){
                if( 0 == $term->parent ){
                    return home_url('faq/'.$term->slug. "/" . $post->ID . '/');
                }
            }
        } else {
            return home_url('faq/uncategorized'. "/" . $post->ID . '/');
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpd_post_link_faq', 1, 3 );

function my_addfaq_rewrite_rules($rules) {
    $NewRules = array(
        'faq/([0-9]{4})/([0-9]{1,2})/?$'                   =>    'index.php?post_type=faq&year=$matches[1]&monthnum=$matches[2]',
        'faq/([0-9]{4})/([0-9]{1,2})/page/([0-9]+)/?$'     =>    'index.php?post_type=faq&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]',
        'faq/faqcat/([0-9]+)?$'                       =>    'index.php?post_type=faq&faqcat=$matches[1]',
        'faq/faqcat/([^&]+)/page/([0-9]{1,})/?$'      =>    'index.php?post_type=faq&faqcat=$matches[1]&paged=$matches[2]',
        'faq/page/([0-9]{1,})/?$'                          =>    'index.php?post_type=faq&paged=$matches[1]',
        'faq/([^/]+)/([0-9]+)?$'                           =>    'index.php?post_type=faq&faqcat=$matches[1]&p=$matches[2]',

    );
    $rules = $NewRules + $rules;
    return $rules;
}
add_filter('rewrite_rules_array', 'my_addfaq_rewrite_rules');
// END Add for FAQ

// BEGIN Add for BLOG
function wpd_post_link_blog( $post_link, $id = 0 ){
    $post = get_post($id);
    // Post Type - blog
    if ( is_object( $post ) && $post->post_type == 'blog' ){
        $terms = wp_get_object_terms( $post->ID, 'blogcat' );
        if( $terms ){
            foreach( $terms as $term ){
                if( 0 == $term->parent ){
                    return home_url('blog/'.$term->slug. "/" . $post->ID . '/');
                }
            }
        } else {
            return home_url('blog/uncategorized'. "/" . $post->ID . '/');
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpd_post_link_blog', 1, 3 );

function my_addblog_rewrite_rules($rules) {
    $NewRules = array(
        'blog/([0-9]{4})/([0-9]{1,2})/?$'                   =>    'index.php?post_type=blog&year=$matches[1]&monthnum=$matches[2]',
        'blog/([0-9]{4})/([0-9]{1,2})/page/([0-9]+)/?$'     =>    'index.php?post_type=blog&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]',
        'blog/blogcat/([0-9]+)?$'                       =>    'index.php?post_type=blog&blogcat=$matches[1]',
        'blog/blogcat/([^&]+)/page/([0-9]{1,})/?$'      =>    'index.php?post_type=blog&blogcat=$matches[1]&paged=$matches[2]',
        'blog/page/([0-9]{1,})/?$'                          =>    'index.php?post_type=blog&paged=$matches[1]',
        'blog/([^/]+)/([0-9]+)?$'                           =>    'index.php?post_type=blog&blogcat=$matches[1]&p=$matches[2]',

    );
    $rules = $NewRules + $rules;
    return $rules;
}
add_filter('rewrite_rules_array', 'my_addblog_rewrite_rules');
// END Add for BLOG

// BEGIN Add for STAFF
function wpd_post_link_staff( $post_link, $id = 0 ){
    $post = get_post($id);
    // Post Type - blog
    if ( is_object( $post ) && $post->post_type == 'staff' ){
        $terms = wp_get_object_terms( $post->ID, 'staffcat' );
        if( $terms ){
            foreach( $terms as $term ){
                if( 0 == $term->parent ){
                    return home_url('staff/'.$term->slug. "/" . $post->ID . '/');
                }
            }
        } else {
            return home_url('staff/uncategorized'. "/" . $post->ID . '/');
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpd_post_link_staff', 1, 3 );

function my_addstaff_rewrite_rules($rules) {
    $NewRules = array(
        //'staff/([0-9]{4})/([0-9]{1,2})/?$'                   =>    'index.php?post_type=staff&year=$matches[1]&monthnum=$matches[2]',
        //'staff/([0-9]{4})/([0-9]{1,2})/page/([0-9]+)/?$'     =>    'index.php?post_type=staff&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]',
        'company/staff/staffcat/([0-9]+)?$'                       =>    'index.php?post_type=staff&staffcat=$matches[1]',
        'company/staff/staffcat/([^&]+)/page/([0-9]{1,})/?$'      =>    'index.php?post_type=staff&staffcat=$matches[1]&paged=$matches[2]',
        //'staff/page/([0-9]{1,})/?$'                          =>    'index.php?post_type=staff&paged=$matches[1]',
        //'staff/([^/]+)/([0-9]+)?$'                           =>    'index.php?post_type=staff&staffcat=$matches[1]&p=$matches[2]',
        'company/staff?$'                           =>    'index.php?post_type=staff',
    );
    $rules = $NewRules + $rules;
    return $rules;
}
add_filter('rewrite_rules_array', 'my_addstaff_rewrite_rules');
// END Add for STAFF

// BEGIN Add for EVENT
function wpd_post_link_event( $post_link, $id = 0 ){
    $post = get_post($id);
    // Post Type - event
    if ( is_object( $post ) && $post->post_type == 'event' ){
        $terms = wp_get_object_terms( $post->ID, 'eventcat' );
        if( $terms ){
            foreach( $terms as $term ){
                if( 0 == $term->parent ){
                    return home_url('event/'.$term->slug. "/" . $post->ID . '/');
                }
            }
        } else {
            
            return home_url('event/uncategorized'. "/" . $post->ID . '/');
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpd_post_link_event', 1, 3 );

function my_addevent_rewrite_rules($rules) {
    $NewRules = array(
        'event/([0-9]{4})/([0-9]{1,2})/?$'                   =>    'index.php?post_type=event&year=$matches[1]&monthnum=$matches[2]',
        'event/([0-9]{4})/([0-9]{1,2})/page/([0-9]+)/?$'     =>    'index.php?post_type=event&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]',
        'event/eventcat/([0-9]+)?$'                       =>    'index.php?post_type=event&eventcat=$matches[1]',
        'event/eventcat/([^&]+)/page/([0-9]{1,})/?$'      =>    'index.php?post_type=event&eventcat=$matches[1]&paged=$matches[2]',
        'event/page/([0-9]{1,})/?$'                          =>    'index.php?post_type=event&paged=$matches[1]',
        'event/([^/]+)/([0-9]+)?$'                           =>    'index.php?post_type=event&eventcat=$matches[1]&p=$matches[2]',

    );
    $rules = $NewRules + $rules;
    return $rules;
}
add_filter('rewrite_rules_array', 'my_addevent_rewrite_rules');
// END Add for EVENT


// BEGIN Add for recruit
function wpd_post_link_recruit( $post_link, $id = 0 ){
    $post = get_post($id);
    // Post Type - recruit
    if ( is_object( $post ) && $post->post_type == 'recruit' ){
        $terms = wp_get_object_terms( $post->ID, 'recruitcat' );
        if( $terms ){
            foreach( $terms as $term ){
                if( 0 == $term->parent ){
                    return home_url('recruit/'.$term->slug. "/" . $post->ID . '/');
                }
            }
        } else {
            return home_url('recruit/uncategorized'. "/" . $post->ID . '/');
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpd_post_link_recruit', 1, 3 );

function my_addrecruit_rewrite_rules($rules) {
    $NewRules = array(
        'recruit/([0-9]{4})/([0-9]{1,2})/?$'                   =>    'index.php?post_type=recruit&year=$matches[1]&monthnum=$matches[2]',
        'recruit/([0-9]{4})/([0-9]{1,2})/page/([0-9]+)/?$'     =>    'index.php?post_type=recruit&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]',
        'recruit/recruitcat/([0-9]+)?$'                       =>    'index.php?post_type=recruit&recruitcat=$matches[1]',
        'recruit/recruitcat/([^&]+)/page/([0-9]{1,})/?$'      =>    'index.php?post_type=recruit&recruitcat=$matches[1]&paged=$matches[2]',
        'recruit/page/([0-9]{1,})/?$'                          =>    'index.php?post_type=recruit&paged=$matches[1]',
        'recruit/([^/]+)/([0-9]+)?$'                           =>    'index.php?post_type=recruit&recruitcat=$matches[1]&p=$matches[2]',

    );
    $rules = $NewRules + $rules;
    return $rules;
}
add_filter('rewrite_rules_array', 'my_addrecruit_rewrite_rules');
// END Add for recruit













