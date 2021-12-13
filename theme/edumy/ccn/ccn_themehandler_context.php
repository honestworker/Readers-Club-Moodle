<?php
/*
@ccnRef: @theme_edumy/layout
*/

defined('MOODLE_INTERNAL') || die();

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'pageheading' => $pageheading,
    'pagesubheading' => $pagesubheading,
    'pagebadge' => $pagebadge,
    'pagebadgeclass' => $pagebadgeclass,
    'sidepreblocks' => $blockshtml,
    'ccn_login' => $_ccnlogin,
    // 'ccn_registration' => $_ccnregistration,
    'ccn_activitynav' => $_ccnCourseSectionNav,
    'ccn_course_url' => $ccnCourseUrl,
    'ccn_globalsearch' => $_ccnglobalsearch,
    'ccn_globalsearch_navbar' => $_ccnglobalsearch_navbar,
    'ccn_librarylist' => $_ccnlibrarylist,
    'library_list_blocks' => $OUTPUT->blocks('library-list'),
    'has_library_list_blocks' => strpos($OUTPUT->blocks('library-list'), 'data-block=') !== false,
    'navbar_blocks' => $OUTPUT->blocks('navbar'),
    'has_navbar_blocks' => strpos($OUTPUT->blocks('navbar'), 'data-block=') !== false,
    'leftblocks' => $leftblocks,
    'hasblocks' => $hasblocks,
    'hasleftblocks' => $hasleftblocks,
    'hassideblocks' => $hassideblocks,
    'sidebar_single' => $sidebar_single,
    'sidebar_single_left' => $sidebar_single_left,
    'sidebar_single_right' => $sidebar_single_right,
    'sidebar_left' => $sidebar_left,
    'sidebar_right' => $sidebar_right,
    'sidebar_double' => $sidebar_double,
    'sidebar_none' => $sidebar_none,
    'participant_user_profile' => $userProfileFromCourseParticipants,
    'bodyattributes' => $bodyattributes,
    'headerlogo1' => $headerlogo1,
    'headerlogo2' => $headerlogo2,
    'headerlogo3' => $headerlogo3,
    'headerlogo_mobile' => $headerlogo_mobile,
    'footerlogo1' => $footerlogo1,
    'heading_bg' => $heading_bg,
    'favicon' => $favicon,
    'regionmainsettingsmenu' => $regionmainsettingsmenu,
    'hasregionmainsettingsmenu' => !empty($regionmainsettingsmenu),
    'loginblocks' => $loginblocks,
    'hasloginblocks' => !empty($loginblocks),
    'searchblocks' => $searchblocks,
    'hassearchblocks' => !empty($searchblocks),
    'blocks_user_notifications' => $blocks_user_notifications,
    'blocks_user_messages' => $blocks_user_messages,
    'blocks_fullwidth_top' => $blocks_fullwidth_top,
    'blocks_fullwidth_bottom' => $blocks_fullwidth_bottom,
    'blocks_above_content' => $blocks_above_content,
    'has_blocks_above_content' => !empty($blocks_above_content),
    'blocks_below_content' => $blocks_below_content,
    'has_blocks_below_content' => !empty($blocks_below_content),
    'has_blocks_fullwidth_top' => !empty($blocks_fullwidth_top),
    'has_blocks_fullwidth_bottom' => !empty($blocks_fullwidth_bottom),
    'is_course' => $PAGE->bodyid == 'page-course-view-topics' || $PAGE->bodyid == 'page-course-view-tiles',
    'is_blog' => $PAGE->bodyid == 'page-blog-index',
    'is_frontpage' => $PAGE->bodyid == 'page-site-index',
    'courseid' => $courseid,
    'coursefullname' => $coursefullname,
    'courseshortname' => $courseshortname,
    'coursecategory' => $coursecategory,
    'coursesummary' => $coursesummary,
    'courseformat' => $courseformat,
    'courseagerange' => $courseagerange,
    'courseclass' => $courseclass,
    'coursecreated' => $coursecreated,
    'coursemodified' => $coursemodified,
    'coursestartdate' => $coursestartdate,
    'courseenddate' => $courseenddate,
    'coursebadge' => '',
    'coursebadge_common' => $coursebadge_common,
    'coursebadge_enrolled' => $coursebadge_enrolled,
    'courseicon_book' => $courseicon_book,
    'courseicon_chat' => $courseicon_chat,
    'courseicon_download' => $courseicon_download,
    'courseicon_followers' => $courseicon_followers,
    'courseicon_plus' => $courseicon_plus,
    'courseicon_return' => $courseicon_return,
    'courseicon_share' => $courseicon_share,
    'numberofusers' => $numberofusers,
    'cocoon_facebook_url' => format_text(get_config('theme_edumy', 'cocoon_facebook_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_twitter_url' => format_text(get_config('theme_edumy', 'cocoon_twitter_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_instagram_url' => format_text(get_config('theme_edumy', 'cocoon_instagram_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_pinterest_url' => format_text(get_config('theme_edumy', 'cocoon_pinterest_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_dribbble_url' => format_text(get_config('theme_edumy', 'cocoon_dribbble_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_google_url' => format_text(get_config('theme_edumy', 'cocoon_google_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_youtube_url' => format_text(get_config('theme_edumy', 'cocoon_youtube_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_vk_url' => format_text(get_config('theme_edumy', 'cocoon_vk_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_500px_url' => format_text(get_config('theme_edumy', 'cocoon_500px_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_behance_url' => format_text(get_config('theme_edumy', 'cocoon_behance_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_digg_url' => format_text(get_config('theme_edumy', 'cocoon_digg_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_flickr_url' => format_text(get_config('theme_edumy', 'cocoon_flickr_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_foursquare_url' => format_text(get_config('theme_edumy', 'cocoon_foursquare_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_linkedin_url' => format_text(get_config('theme_edumy', 'cocoon_linkedin_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_medium_url' => format_text(get_config('theme_edumy', 'cocoon_medium_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_meetup_url' => format_text(get_config('theme_edumy', 'cocoon_meetup_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_snapchat_url' => format_text(get_config('theme_edumy', 'cocoon_snapchat_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_tumblr_url' => format_text(get_config('theme_edumy', 'cocoon_tumblr_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_vimeo_url' => format_text(get_config('theme_edumy', 'cocoon_vimeo_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_wechat_url' => format_text(get_config('theme_edumy', 'cocoon_wechat_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_whatsapp_url' => format_text(get_config('theme_edumy', 'cocoon_whatsapp_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_wordpress_url' => format_text(get_config('theme_edumy', 'cocoon_wordpress_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_weibo_url' => format_text(get_config('theme_edumy', 'cocoon_weibo_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_telegram_url' => format_text(get_config('theme_edumy', 'cocoon_telegram_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_moodle_url' => format_text(get_config('theme_edumy', 'cocoon_moodle_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_amazon_url' => format_text(get_config('theme_edumy', 'cocoon_amazon_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_slideshare_url' => format_text(get_config('theme_edumy', 'cocoon_slideshare_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_soundcloud_url' => format_text(get_config('theme_edumy', 'cocoon_soundcloud_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_leanpub_url' => format_text(get_config('theme_edumy', 'cocoon_leanpub_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_xing_url' => format_text(get_config('theme_edumy', 'cocoon_xing_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_bitcoin_url' => format_text(get_config('theme_edumy', 'cocoon_bitcoin_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_twitch_url' => format_text(get_config('theme_edumy', 'cocoon_twitch_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_github_url' => format_text(get_config('theme_edumy', 'cocoon_github_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_gitlab_url' => format_text(get_config('theme_edumy', 'cocoon_gitlab_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_forumbee_url' => format_text(get_config('theme_edumy', 'cocoon_forumbee_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_trello_url' => format_text(get_config('theme_edumy', 'cocoon_trello_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_weixin_url' => format_text(get_config('theme_edumy', 'cocoon_weixin_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_slack_url' => format_text(get_config('theme_edumy', 'cocoon_slack_url'), FORMAT_HTML, array('filter' => false)),
    'cocoon_copyright' => format_text(get_config('theme_edumy', 'cocoon_copyright'), FORMAT_HTML, array('filter' => true)),
    'footer_row_1_col_1_title' => $footer_row_1_col_1_title,
    'footer_row_1_col_2_icon_1' => $footer_row_1_col_2_icon_1,
    'footer_row1col2_icon1' => $footer_row1col2_icon1,
    'footer_row_1_col_2_icon_2' => $footer_row_1_col_2_icon_2,
    'footer_row1col2_icon2' => $footer_row1col2_icon2,
    'footer_row_1_col_2_icon_3' => $footer_row_1_col_2_icon_3,
    'footer_row1col2_icon3' => $footer_row1col2_icon3,
    'footer_row_1_col_3_icon_1' => $footer_row_1_col_3_icon_1,
    'footer_row1col3_icon1' => $footer_row1col3_icon1,
    'footer_row_1_col_3_icon_2' => $footer_row_1_col_3_icon_2,
    'footer_row1col3_icon2' => $footer_row1col3_icon2,
    'footer_row_1_column_1' => $footer_row_1_column_1,
    'footer_row_1_column_2' => $footer_row_1_column_2,
    'footer_row_1_column_3' => $footer_row_1_column_3,
    'footer_row_1_col_1_class' => $footer_row_1_col_1_class,
    'footer_row_1_col_2_class' => $footer_row_1_col_2_class,
    'footer_row_1_col_3_class' => $footer_row_1_col_3_class,
    'footer_iso_icon_class' => $footer_iso_icon_class,
    'footer_logo_icon_class' => $footer_logo_icon_class,
    'footer_row_2_col_1_title' => format_text(get_config('theme_edumy', 'footer_row_2_col_1_title'), FORMAT_HTML, array('filter' => true)),
    'footer_row_2_col_1_body' => format_text(get_config('theme_edumy', 'footer_row_2_col_1_body'), FORMAT_HTML, array('filter' => true, 'noclean' => true)),
    'footer_row_2_col_2_title' => format_text(get_config('theme_edumy', 'footer_row_2_col_2_title'), FORMAT_HTML, array('filter' => true)),
    'footer_row_2_col_2_body' => format_text(get_config('theme_edumy', 'footer_row_2_col_2_body'), FORMAT_HTML, array('filter' => true, 'noclean' => true)),
    'footer_row_2_col_3_title' => format_text(get_config('theme_edumy', 'footer_row_2_col_3_title'), FORMAT_HTML, array('filter' => true)),
    'footer_row_2_col_3_body' => format_text(get_config('theme_edumy', 'footer_row_2_col_3_body'), FORMAT_HTML, array('filter' => true, 'noclean' => true)),
    'footer_row_2_col_4_title' => format_text(get_config('theme_edumy', 'footer_row_2_col_4_title'), FORMAT_HTML, array('filter' => true)),
    'footer_row_2_col_4_body' => format_text(get_config('theme_edumy', 'footer_row_2_col_4_body'), FORMAT_HTML, array('filter' => true, 'noclean' => true)),
    'footer_row_2_col_5_title' => format_text(get_config('theme_edumy', 'footer_row_2_col_5_title'), FORMAT_HTML, array('filter' => true)),
    'footer_row_2_col_5_body' => format_text(get_config('theme_edumy', 'footer_row_2_col_5_body'), FORMAT_HTML, array('filter' => true, 'noclean' => true)),
    'footer_menu' => format_text(get_config('theme_edumy', 'footer_menu'), FORMAT_HTML, array('filter' => true)),
    'footer_row_2_column_1' => $footer_row_2_column_1,
    'footer_row_2_column_2' => $footer_row_2_column_2,
    'footer_row_2_column_3' => $footer_row_2_column_3,
    'footer_row_2_column_4' => $footer_row_2_column_4,
    'footer_row_2_column_5' => $footer_row_2_column_5,
    'footer_row_2_col_1_class' => $footer_row_2_col_1_class,
    'footer_row_2_col_2_class' => $footer_row_2_col_2_class,
    'footer_row_2_col_3_class' => $footer_row_2_col_3_class,
    'footer_row_2_col_4_class' => $footer_row_2_col_4_class,
    'footer_row_2_col_5_class' => $footer_row_2_col_5_class,
    'footer_row_2' => $footer_row_2,
    'cta_text' => format_text(get_config('theme_edumy', 'cta_text'), FORMAT_HTML, array('filter' => true)),
    'cta_link' => format_text(get_config('theme_edumy', 'cta_link'), FORMAT_HTML, array('filter' => true)),
    'email_address' => format_text(get_config('theme_edumy', 'email_address'), FORMAT_HTML, array('filter' => true)),
    'phone' => format_text(get_config('theme_edumy', 'phone'), FORMAT_HTML, array('filter' => true)),
    'custom_css' => $custom_css,
    'custom_css_dashboard' => $custom_css_dashboard,
    'custom_js' => $custom_js,
    'custom_js_dashboard' => $custom_js_dashboard,
    'display_library_list' => $display_library_list,
    'logotype' => $logotype,
    'logo_image' => $logo_image,
    'logo' => $logo,
    'logotype_footer' => $logotype_footer,
    'logo_image_footer' => $logo_image_footer,
    'logo_footer' => $logo_footer,
    'user_profile_picture' => new moodle_url('/user/pix.php/'.$USER->id.'/f1.jpg'),
    'profile_icon_username' => $ccnProfileIconUsername,
    'user_username' => $USER->username,
    'user_firstname' => $USER->firstname,
    'user_lastname' => $USER->lastname,
    'user_email' => $USER->email,
    'user_language' => $USER->lang,
    'user_id' => $USER->id,
    'isloggedin' => $isloggedin == 'TRUE',
    'notloggedin' => $isloggedin == 'FALSE',
    'signup_is_enabled' => $signup_is_enabled == true,
    'signup_is_disabled' => $signup_is_enabled == false,
    'header_1' => $headertype == 1,
    'header_2' => $headertype == 2,
    'header_3' => $headertype == 3,
    'header_4' => $headertype == 4,
    'header_5' => $headertype == 5,
    'header_6' => $headertype == 6,
    'header_7' => $headertype == 7,
    'header_8' => $headertype == 8,
    'header_9' => $headertype == 9,
    'header_10' => $headertype == 10,
    'header_11' => $headertype == 11,
    'header_12' => $headertype == 12,
    'footer_1' => $footertype == 1,
    'footer_2' => $footertype == 2,
    'footer_3' => $footertype == 3,
    'footer_4' => $footertype == 4,
    'footer_5' => $footertype == 5,
    'footer_6' => $footertype == 6,
    'footer_7' => $footertype == 7,
    'footer_8' => $footertype == 8,
    'footer_9' => $footertype == 9,
    'breadcrumb_default' => $breadcrumb_style == 0,
    'breadcrumb_m' => $breadcrumb_style == 1,
    'breadcrumb_s' => $breadcrumb_style == 2,
    'breadcrumb_xs' => $breadcrumb_style == 3,
    'breadcrumb_hidden' => $breadcrumb_style == 4,
    'breadcrumb_classes' => $breadcrumb_classes,
    'breadcrumb_clip_dash' => $breadcrumb_clip_dash,
    'preloader_load' => $preloader_duration == 0,
    'preloader_ready' => $preloader_duration == 1,
    'preloader_5' => $preloader_duration == 2,
    'preloader_4' => $preloader_duration == 3,
    'preloader_3' => $preloader_duration == 4,
    'preloader_2' => $preloader_duration == 5,
    'preloader_disable' => $preloader_duration == 6,
    'headertype_frontpage_only' => $headertype_settings == 0,
    'headertype_all_pages' => $headertype_settings == 1,
    'header_search_icon' => $header_search == 0,
    'header_search_bar' => $header_search == 1,
    'header_login_popup' => $header_login == 0,
    'header_login_link' => $header_login == 1,
    'back_to_top' => $back_to_top == 0,
    // 'dashboard_sticky_header' => $dashboard_sticky_header == 0,
    'logo_styles' => $logo_styles,
    'logo_styles_footer' => $logo_styles_footer,
    'gmaps_key' => get_config('theme_edumy', 'gmaps_key'),
    'messages_link' => $messages_link,
    'profile_link' => $profile_link,
    'preferences_link' => $preferences_link,
    'grades_link' => $grades_link,
    'dash_header_white' => get_config('theme_edumy', 'dashboard_header') == 1,
    'dash_tabs' => $dash_tablet_count != 0,
    'dash_tab_col_class' => $dash_tab_col_class,
    'dash_tablet_1' => $dash_tablet_1,
    'dash_tablet_1_title' => format_text($dash_tablet_1_title, FORMAT_HTML, array('filter' => true)),
    'dash_tablet_1_subtitle' => format_text($dash_tablet_1_subtitle, FORMAT_HTML, array('filter' => true)),
    'dash_tablet_1_link' => $dash_tablet_1_link,
    'dash_tablet_1_icon' => $dash_tablet_1_icon,
    'dash_tablet_2' => $dash_tablet_2,
    'dash_tablet_2_title' => format_text($dash_tablet_2_title, FORMAT_HTML, array('filter' => true)),
    'dash_tablet_2_subtitle' => format_text($dash_tablet_2_subtitle, FORMAT_HTML, array('filter' => true)),
    'dash_tablet_2_link' => $dash_tablet_2_link,
    'dash_tablet_2_icon' => $dash_tablet_2_icon,
    'dash_tablet_3' => $dash_tablet_3,
    'dash_tablet_3_title' => format_text($dash_tablet_3_title, FORMAT_HTML, array('filter' => true)),
    'dash_tablet_3_subtitle' => format_text($dash_tablet_3_subtitle, FORMAT_HTML, array('filter' => true)),
    'dash_tablet_3_link' => $dash_tablet_3_link,
    'dash_tablet_3_icon' => $dash_tablet_3_icon,
    'dash_tablet_4' => $dash_tablet_4,
    'dash_tablet_4_title' => format_text($dash_tablet_4_title, FORMAT_HTML, array('filter' => true)),
    'dash_tablet_4_subtitle' => format_text($dash_tablet_4_subtitle, FORMAT_HTML, array('filter' => true)),
    'dash_tablet_4_link' => $dash_tablet_4_link,
    'dash_tablet_4_icon' => $dash_tablet_4_icon,
    'display_course_content' => $display_course_content == 1,
    'incourse_layout_dashboard' => $incourse_layout_dashboard == 1,
    'disable_stricky_dashboard' => $dashboard_scroll_header == 1,
    'dashboard_scroll_drawer' => $dashboard_scroll_drawer == 1,
    // 'dashboard_drawer_navigation' => $dashboard_left_drawer != (1 || 2),
    'dashboard_nav_user' => $dashboard_left_drawer != (1 || 2 || 3) /* Theme Setting equals '0' */,
    'dashboard_nav_flat' => $dashboard_left_drawer == 3,
    'disable_dashboard_drawer' => $dashboard_left_drawer == 2 || ($dashboard_left_drawer == 1 && !$sidebar_left),
    'incourse' => $incourse == 1,
    'show_course_start' => $showCourseStartDate != 1,
    'show_course_category' => $showCourseCategory != 1,
    // 'user_profile_layout_dashboard' => $user_profile_layout_dashboard == 1,
    'social_target_href' => $social_target_href,
    'if_user_navigation_icon' => get_config('theme_edumy', 'navigation_icon_visibility') != 1,
    'if_user_notification_icon' => get_config('theme_edumy', 'notification_icon_visibility') != 1,
    'if_user_messages_icon' => get_config('theme_edumy', 'messages_icon_visibility') != 1,
    'if_user_dark_mode_icon' => get_config('theme_edumy', 'dark_mode_icon_visibility') != 1,
    'user_navigation_icon' => ($ccnIcon = get_config('theme_edumy', 'navigation_icon_ccn_icon_class')) ? $ccnIcon : 'flaticon-settings',
    'user_notification_icon' => ($ccnIcon = get_config('theme_edumy', 'notification_icon_ccn_icon_class')) ? $ccnIcon : 'flaticon-alarm',
    'user_messages_icon' => ($ccnIcon = get_config('theme_edumy', 'messages_icon_ccn_icon_class')) ? $ccnIcon : 'flaticon-speech-bubble',
    'user_dark_mode_icon' => ($ccnIcon = get_config('theme_edumy', 'dark_mode_icon_ccn_icon_class')) ? $ccnIcon : 'ccn-flaticon-hide',
    'show_settings_controls' => $ccn_page_settings_controls == 1,
    'if_breadcrumb_title' => get_config('theme_edumy', 'breadcrumb_title') != 1,
    'if_breadcrumb_trail' => get_config('theme_edumy', 'breadcrumb_trail') != 1,
];

// readclub custom
$coursecontext = \context_course::instance($courseid);
if (is_enrolled($coursecontext, $USER, '', true)) {
    $templatecontext['coursebadge'] = $templatecontext['coursebadge_enrolled'];
    $user_is_enrolled = true;
} else {
    $templatecontext['coursebadge'] = $templatecontext['coursebadge_common'];
    $user_is_enrolled = false;
}

$enrols = enrol_get_plugins(true);
$enrolinstances = enrol_get_instances($courseid, true);

$courseicon_book_icon = '<img class="course_badge_img img-fluid" src="'.$courseicon_book.'"/>';
if ($courseid != SITEID) {
    $enrol_button_type = '';
    $enrol_form = null;
    $unenrollink = '';
    if (isguestuser() or !isloggedin()) {
        $enrol_button_type = 'login';
    } else if (is_enrolled($coursecontext)) {
        foreach ($enrolinstances as $instance) {
            if (!isset($enrols[$instance->enrol])) {
                continue;
            }
            $plugin = $enrols[$instance->enrol];
            if ($unenrollink = $plugin->get_unenrolself_link($instance)) {
                $enrol_button_type = 'unenrol';
                break;
            }
        }
    } else {
        // enrol link if possible
        if (is_viewing($coursecontext)) {
        } else {
            foreach ($enrolinstances as $instance) {
                if (!isset($enrols[$instance->enrol])) {
                    continue;
                }
                $form = $enrols[$instance->enrol]->enrol_page_hook($instance);
                if ($form) {
                    $enrol_button_type = 'enrol';
                    $enrol_form = $form;
                    break;
                }
            }
        }
    }
    
    if ($enrol_button_type) {
        if ($enrol_button_type == 'enrol') {
            $enrol_form = '<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>' . $enrol_form . '</body>';
    
            $dom = new DomDocument();
            $dom->loadHTML($enrol_form);
    
            $stripped = '';
            $els = $dom->getElementsByTagName('form')->item(0)->childNodes;
    
            foreach ($els as $index => $child) {
                if ($child->tagName == 'fieldset') {
                    $child->parentNode->removeChild($child);
                }
            }
            $enrol_form = $dom->saveHTML();
            $enrol_Button = strip_tags($enrol_form, "<form>,<input>");
    
            $enrol_Button = str_replace('course/view.php', 'enrol/index.php', $enrol_Button);
            $enrol_Button = preg_replace('/input([^>]+)type="submit"([^>]+)value="('.get_string('enrolme', 'enrol_self').')"/', 'input$1type="submit"$2value="' . get_string('follow', 'theme_edumy') . '"', $enrol_Button);
            $enrol_Button = preg_replace('/<input([^>]+)type="submit"([^>]+)>/', '<button type="submit" class="tc_enrol_btn">' . $courseicon_book_icon . '<input$1type="submit"$2></button>', $enrol_Button);
            $templatecontext['enrolbutton'] = $enrol_Button;
        } else if ($enrol_button_type == 'unenrol') {
            $templatecontext['enrolbutton'] = '<a href="'.$unenrollink.'"><button type="submit" class="tc_enrol_btn">' . $courseicon_book_icon . '<input type="submit" class="btn btn-primary" id="id_submitbutton" value="' . get_string('leave_club', 'theme_edumy') . '"></button></a>';
        } else if ($enrol_button_type == 'login') {
            $templatecontext['enrolbutton'] = '<a href="'.get_login_url().'"><button type="submit" class="tc_enrol_btn">' . $courseicon_book_icon . '<input type="submit" class="btn btn-primary" id="id_submitbutton" value="' . get_string('follow', 'theme_edumy') . '"></button></a>';
        }
    }
}

$PAGE->requires->jquery();
$ccnLcVbCollection = array(
    "cocoon_about_1",
    "cocoon_about_2",
    "cocoon_accordion",
    "cocoon_action_panels",
    "cocoon_boxes",
    "cocoon_blog_recent_slider",
    "cocoon_faqs",
    "cocoon_features",
    "cocoon_parallax",
    "cocoon_parallax_apps",
    "cocoon_parallax_counters",
    "cocoon_parallax_features",
    "cocoon_parallax_testimonials",
    "cocoon_partners",
    "cocoon_parallax_white",
    "cocoon_pills",
    "cocoon_price_tables",
    "cocoon_price_tables_dark",
    "cocoon_services",
    "cocoon_services_dark",
    "cocoon_simple_counters",
    "cocoon_hero_1",
    "cocoon_hero_2",
    "cocoon_hero_3",
    "cocoon_hero_4",
    "cocoon_hero_5",
    "cocoon_slider_1",
    "cocoon_slider_1_v",
    "cocoon_slider_2",
    "cocoon_slider_3",
    "cocoon_slider_4",
    "cocoon_slider_5",
    "cocoon_slider_6",
    "cocoon_modern_slider",
    "cocoon_steps",
    "cocoon_steps_dark",
    "cocoon_subscribe",
    "cocoon_tablets",
    "cocoon_tabs",
    "cocoon_tstmnls",
    "cocoon_tstmnls_2",
    "cocoon_contact_form",
    "cocoon_course_categories",
    "cocoon_course_categories_2",
    "cocoon_course_categories_3",
    "cocoon_course_categories_4",
    "cocoon_course_overview",
    "cocoon_course_instructor",
    "cocoon_course_rating",
    "cocoon_course_grid",
    "cocoon_course_grid_2",
    "cocoon_course_grid_3",
    "cocoon_course_grid_4",
    "cocoon_featuredcourses",
    "cocoon_courses_banner",
    "cocoon_courses_slider",
    "cocoon_more_courses",
    "cocoon_users_slider",
    "cocoon_users_slider_2",
    "cocoon_users_slider_2_dark",
    "cocoon_users_slider_round",
);
$ccnControlBlockListUri = $CFG->wwwroot . '/theme/edumy/ccn/visualize/ccn_block/jpeg/large/';
$ccnControlBlockListUriThumb = $CFG->wwwroot . '/theme/edumy/ccn/visualize/ccn_block/jpeg/thumb/';
$PAGE->requires->js_init_call('ccnCommentHandler', array(get_string('add_comment', 'theme_edumy')));
$PAGE->requires->js_init_call('ccnControl', array($ccnControlBlockListUri, $ccnControlBlockListUriThumb, $ccnLcVbCollection));
$nav = $PAGE->flatnav;
$templatecontext['flatnavigation'] = $nav;
$templatecontext['firstcollectionlabel'] = $nav->get_collectionlabel();

if($PAGE->pagetype == "admin-setting-themesettingedumy") {
    $PAGE->requires->css('/theme/edumy/style/cocoon.editor.theme.css');
    $PAGE->requires->js('/theme/edumy/javascript/cocoon.editor.theme.js', true);
}