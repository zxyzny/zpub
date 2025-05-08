<?php
/*
  Plugin Name: Embed Plus for YouTube Gallery, Livestream and Lazy Loading with Facades
  Plugin URI: https://www.embedplus.com/dashboard/pro-easy-video-analytics.aspx?ref=plugin
  Description: The best YouTube embed plugin. Embed a YouTube channel gallery, playlist gallery, YouTube live stream. Lite embeds with defer JavaScript and facade options
  Version: 14.2.2
  Author: Embed Plus for YouTube Plugin Team
  Author URI: https://www.embedplus.com
  Requires at least: 4.5
 */

/*
  Embed Plus for YouTube Gallery, Livestream and Lazy Loading with Facades
  Copyright (C) 2025 EmbedPlus.com

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program. If not, see <http://www.gnu.org/licenses/>.

 */

//define('WP_DEBUG', true);

class YouTubePrefs
{

    public static $folder_name = 'youtube-embed-plus';
    public static $curltimeout = 30;
    public static $version = '14.2.2';
    public static $opt_version = 'version';
    public static $optembedwidth = null;
    public static $optembedheight = null;
    public static $defaultheight = null;
    public static $defaultwidth = null;
    public static $oembeddata = null;
    public static $opt_center = 'centervid';
    public static $opt_glance = 'glance';
    public static $opt_autoplay = 'autoplay';
    public static $opt_debugmode = 'debugmode';
    public static $opt_uninstall_data = 'uninstall_data';
    public static $opt_old_script_method = 'old_script_method';
    public static $opt_cc_load_policy = 'cc_load_policy';
    public static $opt_cc_lang_pref = 'cc_lang_pref';
    public static $opt_iv_load_policy = 'iv_load_policy';
    public static $opt_loop = 'loop';
    public static $opt_modestbranding = 'modestbranding';
    public static $opt_rel = 'rel';
    public static $opt_fs = 'fs';
    public static $opt_playsinline = 'playsinline';
    public static $opt_autohide = 'autohide';
    public static $opt_controls = 'controls';
    public static $opt_theme = 'theme';
    public static $opt_color = 'color';
    public static $opt_listType = 'listType';
    public static $opt_dohl = 'dohl';
    public static $opt_hl = 'hl';
    public static $opt_nocookie = 'nocookie';
    public static $opt_gb_compat = 'gb_compat';
    public static $opt_facade_mode = 'facade_mode';
    public static $opt_facade_autoplay = 'facade_autoplay';
    public static $opt_gdpr_consent = 'gdpr_consent';
    public static $opt_gdpr_consent_message = 'gdpr_consent_message';
    public static $opt_gdpr_consent_button = 'gdpr_consent_button';
    public static $gdpr_cookie_name = 'ytprefs_gdpr_consent';
    public static $opt_playlistorder = 'playlistorder';
    public static $opt_acctitle = 'acctitle';
    public static $opt_pro = 'pro';
    public static $opt_oldspacing = 'oldspacing';
    public static $opt_frontend_only = 'frontend_only';
    public static $opt_responsive = 'responsive';
    public static $opt_responsive_all = 'responsive_all';
    public static $opt_origin = 'origin';
    public static $opt_widgetfit = 'widgetfit';
    public static $opt_evselector_light = 'evselector_light';
    public static $opt_stop_mobile_buffer = 'stop_mobile_buffer';
    public static $opt_restrict_wizard = 'restrict_wizard';
    public static $opt_restrict_wizard_roles = 'restrict_wizard_roles';
    public static $opt_ajax_compat = 'ajax_compat';
    public static $opt_maxres_facade = 'maxres_facade';
    public static $opt_ytapi_load = 'ytapi_load';
    public static $opt_defaultdims = 'defaultdims';
    public static $opt_defaultwidth = 'width';
    public static $opt_defaultheight = 'height';
    public static $opt_pause_others = 'pause_others';
    public static $opt_defaultvol = 'defaultvol';
    public static $opt_vol = 'vol';
    public static $opt_apikey = 'apikey';
    public static $opt_migrate = 'migrate';
    public static $opt_migrate_youtube = 'migrate_youtube';
    public static $opt_migrate_embedplusvideo = 'migrate_embedplusvideo';
    public static $opt_gallery_pagesize = 'gallery_pagesize';
    public static $opt_gallery_columns = 'gallery_columns';
    public static $opt_gallery_collapse_grid = 'gallery_collapse_grid';
    public static $opt_gallery_collapse_grid_breaks = 'gallery_collapse_grid_breaks';
    public static $opt_gallery_scrolloffset = 'gallery_scrolloffset';
    public static $opt_gallery_hideprivate = 'gallery_hideprivate';
    public static $opt_gallery_showtitle = 'gallery_showtitle';
    public static $opt_gallery_showpaging = 'gallery_showpaging';
    public static $opt_gallery_thumbplay = 'gallery_thumbplay';
    public static $opt_gallery_autonext = 'gallery_autonext';
    public static $opt_gallery_channelsub = 'gallery_channelsub';
    public static $opt_gallery_channelsublink = 'gallery_channelsublink';
    public static $opt_gallery_channelsubtext = 'gallery_channelsubtext';
    public static $opt_gallery_customarrows = 'gallery_customarrows';
    public static $opt_gallery_customprev = 'gallery_customprev';
    public static $opt_gallery_customnext = 'gallery_customnext';
    public static $opt_not_live_content = 'not_live_content';
    public static $opt_not_live_on = 'not_live_on';
    public static $opt_not_live_on_channel = 'not_live_on_channel';
    public static $opt_admin_off_scripts = 'admin_off_scripts';
    public static $opt_defer_js = 'defer_js';
    public static $opt_defer_jquery = 'defer_jquery';
    public static $opt_ajax_save = 'ajax_save';
    public static $opt_onboarded = 'onboarded';
    public static $opt_show_pointer = 'show_pointer';
    public static $opt_alloptions = 'youtubeprefs_alloptions';
    public static $alloptions = null;
    public static $yt_options = array();
    public static $dft_bpts = array(array('bp' => array('min' => 0, 'max' => 767), 'cols' => 1));
    public static $dft_roles = array('administrator', 'editor', 'author', 'contributor', 'subscriber');
    public static $epbase = 'https://www.embedplus.com';
    public static $double_plugin = false;
    public static $scriptsprinted = 0;
    public static $min = '.min';
    public static $badentities = array('&#215;', '×', '&#8211;', '–', '&amp;', '&#038;', '&#38;');
    public static $goodliterals = array('x', 'x', '--', '--', '&', '&', '&');
    public static $wizard_hook = '';
    public static $onboarding_hook = '';
    public static $admin_page_hooks = array();
    public static $the_content_filters = array(
        'wptexturize',
        'wpautop',
        'shortcode_unautop',
        'prepend_attachment',
        'wp_make_content_images_responsive',
        'wp_filter_content_tags',
        'do_shortcode',
        'convert_smilies'
    );
    public static $get_api_key_msg = 'The ### feature now requires a (free) YouTube API key from Google. Please follow the easy steps <a href="https://www.youtube.com/watch?v=ZCfrNvu6nMc" target="_blank">in this video</a> to create and save your API key.';
    public static $boilerplate_api_error_message = ' Please make sure you performed the <a href="https://www.youtube.com/watch?v=ZCfrNvu6nMc" target="_blank">steps in this video</a> to create and save a proper server API key.';
    public static $dft_gdpr_consent_message = '<p><strong>Please accept YouTube cookies to play this video.</strong> By accepting you will be accessing content from YouTube, a service provided by an external third party.</p><p><a href="https://policies.google.com/privacy" target="_blank">YouTube privacy policy</a></p><p>If you accept this notice, your choice will be saved and the page will refresh.</p>';
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////

    public static $oldytregex = '@^\s*https?://(?:www\.)?(?:(?:youtube.com/(?:(?:watch)|(?:embed)|(?:playlist))(?:/live_stream){0,1}/{0,1}\?)|(?:youtu.be/))([^\s"]+)\s*$@im';
    public static $ytregex = '@^[\r\t ]*https?://(?:www\.)?(?:(?:youtube.com/(?:(?:watch)|(?:embed)|(?:playlist))(?:/live_stream){0,1}/{0,1}\?)|(?:youtu.be/))([^\s"]+)[\r\t ]*$@im';
    public static $justurlregex = '@https?://(?:www\.)?(?:(?:youtube.com/(?:(?:watch)|(?:embed)|(?:playlist))(?:/live_stream){0,1}/{0,1}\?)|(?:youtu.be/))([^\[\s"]+)@i';

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////

    public function __construct()
    {
        if (defined('EMBEDPLUS_BASE_URL'))
        {
            self::$epbase = EMBEDPLUS_BASE_URL;
        }
        register_deactivation_hook(__FILE__, array(self::class, 'on_deactivation'));
        add_action('admin_init', array(self::class, 'check_double_plugin_warning'));
        add_action('admin_notices', array(self::class, 'separate_version_message'));

        self::$alloptions = get_option(self::$opt_alloptions);
        if (self::$alloptions == false || version_compare(self::$alloptions[self::$opt_version], self::$version, '<'))
        {
            self::initoptions();
        }

        if ((defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) || self::$alloptions[self::$opt_debugmode] == 1)
        {
            self::$min = '';
        }


        if (self::$alloptions[self::$opt_oldspacing] == 1)
        {
            self::$ytregex = self::$oldytregex;
        }

        self::$optembedwidth = intval(get_option('embed_size_w'));
        self::$optembedheight = intval(get_option('embed_size_h'));

        self::$yt_options = array(
            self::$opt_autoplay,
            self::$opt_cc_load_policy,
            self::$opt_cc_lang_pref,
            self::$opt_iv_load_policy,
            self::$opt_loop,
            self::$opt_modestbranding,
            self::$opt_rel,
            self::$opt_fs,
            self::$opt_playsinline,
            self::$opt_autohide,
            self::$opt_controls,
            self::$opt_hl,
            self::$opt_theme,
            self::$opt_color,
            self::$opt_listType,
            'index',
            'list',
            'start',
            'end',
            'channel'
        );

        add_action('media_buttons', array(self::class, 'media_button_wizard'), 11);


        self::do_ytprefs();
        add_action('admin_menu', array(self::class, 'ytprefs_plugin_menu'));
        add_filter('plugin_action_links_' . plugin_basename(__FILE__), array(self::class, 'my_plugin_action_links'));

        if (!is_admin())
        {
            if (self::$alloptions[self::$opt_old_script_method] == 1)
            {
                add_action('wp_print_scripts', array(self::class, 'jsvars'));
                add_action('wp_enqueue_scripts', array(self::class, 'jsvars'));
            }

            add_action('wp_enqueue_scripts', array(self::class, 'ytprefsscript'), 100);
            add_action('wp_enqueue_scripts', array(self::class, 'fitvids'), 101);
        }

        add_filter('ytprefs_filter_the_content_light', array(self::class, 'filter_the_content_light'));

        add_action("wp_ajax_my_embedplus_onboarding_save_ajax", array(self::class, 'onboarding_save_ajax'));
        add_action("wp_ajax_my_embedplus_settings_save_ajax", array(self::class, 'settings_save_ajax'));
        add_action("wp_ajax_my_embedplus_onboarding_save_apikey_ajax", array(self::class, 'onboarding_save_apikey_ajax'));
        add_action("wp_ajax_my_embedplus_glance_vids", array(self::class, 'my_embedplus_glance_vids'));
        add_action("wp_ajax_my_embedplus_glance_count", array(self::class, 'my_embedplus_glance_count'));
        add_action("wp_ajax_my_embedplus_dismiss_double_plugin_warning", array(self::class, 'my_embedplus_dismiss_double_plugin_warning'));
        add_action("wp_ajax_my_embedplus_gallery_page", array(self::class, 'my_embedplus_gallery_page'));
        add_action("wp_ajax_nopriv_my_embedplus_gallery_page", array(self::class, 'my_embedplus_gallery_page'));
        add_action('admin_enqueue_scripts', array(self::class, 'admin_enqueue_scripts'), 10, 1);

        if (!empty(self::$alloptions[self::$opt_not_live_on_channel]))
        {
            add_action("wp_footer", array(self::class, 'live_fallback_template'));
        }
        /////////////////////////////////////
        include_once(EPYTGB_INCLUDES_PATH . 'gutenberg_hooks.php');
    }

    public static function separate_version_message()
    {
        if (current_user_can('manage_options') && self::$alloptions[self::$opt_pro] && strlen(trim(self::$alloptions[self::$opt_pro])) > 10)
        {
            $class = 'notice notice-error is-dismissible';
            $message = 'Important message to Pro users: From version 11.7 onward, you must <a href="https://www.embedplus.com/youtube-pro/download/?prokey=' . esc_attr(self::$alloptions[self::$opt_pro]) . '" target="_blank">download the separate plugin here</a> to regain your Pro features. All your settings will automatically migrate after installing the separate Pro download. Thank you for your support and patience during this transition.';

            printf('<div class="%1$s"><p>%2$s</p></div>', esc_attr($class), wp_kses_post($message));
        }
    }

    public static function live_fallback_template()
    {
        echo '<script type="text/x-template" id="epyt-live-fallback">' . base64_encode(apply_filters('ytprefs_filter_the_content_light', wp_kses_post(self::$alloptions[self::$opt_not_live_content]))) . '</script>';
    }

    public static function defer_scripts($tag, $handle, $src)
    {
        $defer = array(
            '__dispload__',
            '__ytprefs__',
            '__dynload__',
            '__ytprefs__bar',
            '__ytprefsfitvids__',
            '__jquery_cookie__'
        );

        if (self::$alloptions[self::$opt_defer_jquery] == 1 && !is_admin())
        {
            array_push($defer, 'jquery', 'jquery-core', 'jquery-migrate');
        }

        if (in_array($handle, $defer) && stripos($tag, ' defer') === false)
        {
            $tag = str_replace(' src', ' defer src', $tag);
        }

        return $tag;
    }

    public static function my_plugin_action_links($links)
    {
        if (is_array($links))
        {
            $links[] = '<a href="' . esc_url(admin_url('admin.php?page=youtube-my-preferences')) . '">Settings</a>';
            $links[] = '<a href="https://www.embedplus.com/dashboard/pro-easy-video-analytics.aspx?ref=actionlinks" target="_blank">Pro Version</a>';
        }
        return $links;
    }

    public static function show_glance_list()
    {
        $glancehref = self::show_glance();
        $cnt = self::get_glance_count();

        //display via list
        return '<li class="page-count">
            <a href="' . $glancehref . '" class="thickbox ytprefs_glance_button" id="ytprefs_glance_button" title="YouTube Embeds At a Glance">' . number_format_i18n($cnt) . ' With YouTube</a>
        </li>';
    }

    public static function show_glance_table()
    {
        $glancehref = self::show_glance();
        $cnt = self::get_glance_count();
        return
                '<tr>
            <td class="first b"><a title="YouTube Embeds At a Glance" href="' . $glancehref . '" class="thickbox ytprefs_glance_button">' . number_format_i18n($cnt) . '</a></td>
            <td class="t"><a title="YouTube Embeds At a Glance" href="' . $glancehref . '" id="ytprefs_glance_button" class="thickbox ytprefs_glance_button">With YouTube</a></td>
        </tr>';
    }

    public static function get_glance_count()
    {
        global $wpdb;
        $query_sql = "
                SELECT count(*) as mytotal
                FROM $wpdb->posts
                WHERE (post_content LIKE '%youtube.com/%' OR post_content LIKE '%youtu.be/%')
                AND post_status = 'publish'";

        $query_result = $wpdb->get_results($query_sql, OBJECT);

        return intval($query_result[0]->mytotal);
    }

    public static function show_glance()
    {
        $glancehref = admin_url('admin.php?page=youtube-ep-glance') . '&random=' . rand(1, 1000) . '&TB_iframe=true&width=780&height=800';
        return $glancehref;
    }

    public static function glance_page()
    {
        ?>
        <div class="wrap">
            <style type="text/css">
                #wphead {display:none;}
                #wpbody{margin-left: 0px;}
                .wrap {font-family: Arial; padding: 0px 10px 0px 10px; line-height: 180%;}
                .bold {font-weight: bold;}
                .orange {color: #f85d00;}
                sup.orange {text-transform: lowercase; font-weight: bold; color: #f85d00;}
                #adminmenuback {display: none;}
                #adminmenu, adminmenuwrap {display: none;}
                #wpcontent, .auto-fold #wpcontent {margin-left: 0px;}
                #wpadminbar {display:none;}
                html.wp-toolbar {padding: 0px;}
                #footer, #wpfooter, .auto-fold #wpfooter {display: none;}
                #wpfooter {clear: both}
                .acctitle {background-color: #dddddd; border-radius: 5px; padding: 7px 15px 7px 15px; cursor: pointer; margin: 10px; font-weight: bold; font-size: 12px;}
                .acctitle:hover {background-color: #cccccc;}
                .accbox {display: none; position: relative; margin:  5px 8px 30px 15px; clear: both; line-height: 180%;}
                .accclose {position: absolute; top: -38px; right: 5px; cursor: pointer; width: 24px; height: 24px;}
                .accloader {padding-right: 20px;}
                .accthumb {display: block; width: 300px; float: left; margin-right: 25px;}
                .accinfo {width: 300px; float: left;}
                .accvidtitle {font-weight: bold; font-size: 16px;}
                .accthumb img {width: 300px; height: auto; display: block;}
                .clearboth {clear: both;}
                .pad20 {padding: 20px;}
                .center {text-align: center;}
                #screen-meta-links {display: none;}
            </style>
            <script type="text/javascript">
                function accclose(ele)
                {
                    jQuery(ele).parent('.accbox').hide(400);
                }

                (function ($j)
                {
                    $j(document).ready(function ()
                    {


                        $j('.acctitle').on('click', function ()
                        {
                            var $acctitle = $j(this);
                            var $accbox = $j(this).parent().children('.accbox');
                            var pid = $accbox.attr("data-postid");
                            $acctitle.prepend('<img alt="loading" class="accloader" src="<?php echo plugins_url('images/ajax-loader.gif', __FILE__) ?>" />');
                            jQuery.ajax({
                                type: "post",
                                dataType: "json",
                                timeout: 30000,
                                url: window._EPYTA_ ? window._EPYTA_.wpajaxurl : ajaxurl,
                                data: {action: 'my_embedplus_glance_vids', postid: pid},
                                success: function (response)
                                {
                                    if (response.type === "success")
                                    {
                                        $accbox.html(response.data),
                                                $accbox.show(400);
                                    }
                                    else
                                    {
                                    }
                                },
                                error: function (xhr, ajaxOptions, thrownError)
                                {

                                },
                                complete: function ()
                                {
                                    $acctitle.children('.accloader').remove();
                                }

                            });
                        });
                    });
                })(jQuery);</script>
            <?php
            global $wpdb;
            $query_sql = "
                SELECT SQL_CALC_FOUND_ROWS *
                FROM $wpdb->posts
                WHERE (post_content LIKE '%youtube.com/%' OR post_content LIKE '%youtu.be/%')
                AND post_status = 'publish'
                order by post_date DESC LIMIT 0, 10";

            $query_result = $wpdb->get_results($query_sql, OBJECT);

            if ($query_result !== null)
            {
                $total = $wpdb->get_var("SELECT FOUND_ROWS();");
                global $post;
                echo '<h2>10 Latest Posts/Pages with YouTube Videos (' . intval($total) . ' Total)</h2>';
                ?>

                We recommend using this page as an easy way to check the results of the global default settings you make (e.g. hide annotations) on your recent embeds. Or, simply use it as an index to jump right to your posts that contain YouTube embeds.

                <?php
                if ($total > 0)
                {
                    echo '<ul class="accord">';
                    foreach ($query_result as $post)
                    {
                        echo '<li>';
                        setup_postdata($post);
                        the_title('<div class="acctitle">', ' &raquo;</div>');
                        echo '<div class="accbox" data-postid="' . $post->ID . '"></div><div class="clearboth"></div></li>';
                    }
                    echo '</ul>';
                }
                else
                {
                    echo '<p class="center bold orange">You currently do not have any YouTube embeds yet.</p>';
                }
            }

            wp_reset_postdata();
            ?>
            To remove this feature from your dashboard, simply uncheck <i>Show "At a Glance" Embed Links</i> in the <a target="_blank" href="<?php echo admin_url('admin.php?page=youtube-my-preferences#jumpdefaults') ?>">plugin settings page &raquo;</a>.

        </div>
        <?php
    }

    public static function is_ajax()
    {
        $requested_with = filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH');
        $is_ajax = (function_exists('wp_doing_ajax') && wp_doing_ajax() || (!empty($requested_with) && strtolower($requested_with) == 'xmlhttprequest') || (defined('DOING_AJAX') && DOING_AJAX));
        if ($is_ajax)
        {
            header('HTTP/1.1 200 OK');
        }
        return $is_ajax;
    }

    public static function my_embedplus_glance_vids()
    {
        $result = array();
        if (self::is_ajax())
        {
            $postid = intval($_REQUEST['postid']);
            $currpost = get_post($postid);

            $thehtml = '<img alt="close" class="accclose" onclick="accclose(this)" src="' . plugins_url('images/accclose.png', __FILE__) . '" />';

            $matches = array();
            $ismatch = preg_match_all(self::$justurlregex, $currpost->post_content, $matches);

            if ($ismatch)
            {
                foreach ($matches[0] as $match)
                {
                    $link = trim(preg_replace('/&amp;/i', '&', $match));
                    $link = preg_replace('/\s/', '', $link);
                    $link = trim(str_replace(self::$badentities, self::$goodliterals, $link));

                    $linkparamstemp = explode('?', $link);

                    $linkparams = array();
                    if (count($linkparamstemp) > 1)
                    {
                        $linkparams = self::keyvalue($linkparamstemp[1], true);
                    }
                    if (strpos($linkparamstemp[0], 'youtu.be') !== false && !isset($linkparams['v']))
                    {
                        $vtemp = explode('/', $linkparamstemp[0]);
                        $linkparams['v'] = array_pop($vtemp);
                    }

                    $vidid = $linkparams['v'];

                    if ($vidid != null)
                    {
                        try
                        {
                            $odata = self::get_oembed('https://youtube.com/watch?v=' . $vidid, 1920, 1280);
                            $postlink = get_permalink($postid);
                            if ($odata != null && !is_wp_error($odata))
                            {
                                $_name = esc_attr(sanitize_text_field($odata->title));
                                $_description = esc_attr(sanitize_text_field($odata->author_name));
                                $_thumbnailUrl = esc_url("https://i.ytimg.com/vi/" . $vidid . "/0.jpg");

                                $thehtml .= '<a target="_blank" href="' . $postlink . '" class="accthumb"><img alt="YouTube Video" src="' . $_thumbnailUrl . '" /></a>';
                                $thehtml .= '<div class="accinfo">';
                                $thehtml .= '<a target="_blank" href="' . $postlink . '" class="accvidtitle">' . $_name . '</a>';
                                $thehtml .= '<div class="accdesc">' . (strlen($_description) > 400 ? substr($_description, 0, 400) . "..." : $_description) . '</div>';
                                $thehtml .= '</div>';
                                $thehtml .= '<div class="clearboth pad20"></div>';
                            }
                            else
                            {
                                $thehtml .= '<p class="center bold orange">This <a target="_blank" href="' . $postlink . '">post/page</a> contains a video that has been removed from YouTube.';
                                $thehtml .= '<br><a target="_blank" href="https://www.embedplus.com/dashboard/pro-easy-video-analytics.aspx?ref=glancevids">Activate delete video tracking to catch these cases &raquo;</a>';
                                $thehtml .= '</strong>';
                            }
                        }
                        catch (Exception $ex)
                        {
                            
                        }
                    }
                    else if (isset($linkparams['list']))
                    {
                        // if playlist
                        try
                        {
                            $odata = self::get_oembed('https://youtube.com/playlist?list=' . $linkparams['list'], 1920, 1280);
                            $postlink = get_permalink($postid);
                            if ($odata != null && !is_wp_error($odata))
                            {
                                $_name = esc_attr(sanitize_text_field($odata->title));
                                $_description = esc_attr(sanitize_text_field($odata->author_name));
                                $_thumbnailUrl = esc_url($odata->thumbnail_url);

                                $thehtml .= '<a target="_blank" href="' . $postlink . '" class="accthumb"><img alt="YouTube Video" src="' . $_thumbnailUrl . '" /></a>';
                                $thehtml .= '<div class="accinfo">';
                                $thehtml .= '<a target="_blank" href="' . $postlink . '" class="accvidtitle">' . $_name . '</a>';
                                $thehtml .= '<div class="accdesc">' . (strlen($_description) > 400 ? substr($_description, 0, 400) . "..." : $_description) . '</div>';
                                $thehtml .= '</div>';
                                $thehtml .= '<div class="clearboth pad20"></div>';
                            }
                            else
                            {
                                $thehtml .= '<p class="center bold orange">This <a target="_blank" href="' . $postlink . '">post/page</a> contains a video that has been removed from YouTube.';
                                $thehtml .= '<br><a target="_blank" href="https://www.embedplus.com/dashboard/pro-easy-video-analytics.aspx?ref=glancevids">Activate delete video tracking to catch these cases &raquo;</a>';
                                $thehtml .= '</strong>';
                            }
                        }
                        catch (Exception $ex)
                        {
                            
                        }
                    }
                }
            }



            if ($currpost != null)
            {
                $result['type'] = 'success';
                $result['data'] = $thehtml;
            }
            else
            {
                $result['type'] = 'error';
            }
            echo json_encode($result);
        }
        else
        {
            $result['type'] = 'error';
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
        die();
    }

    public static function my_embedplus_glance_count()
    {
        $result = array();
        if (self::is_ajax())
        {
            $thehtml = '';

            try
            {
                if (version_compare(get_bloginfo('version'), '3.8', '>='))
                {
                    $result['container'] = '#dashboard_right_now ul';
                    $thehtml .= self::show_glance_list();
                }
                else
                {
                    $result['container'] = '#dashboard_right_now .table_content table tbody';
                    $thehtml .= self::show_glance_table();
                }
                $result['type'] = 'success';
                $result['data'] = $thehtml;
            }
            catch (Exception $e)
            {
                $result['type'] = 'error';
            }

            echo json_encode($result);
        }
        else
        {
            $result['type'] = 'error';
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
        die();
    }

    public static function try_get_ytid($url)
    {
        $theytid = null;
        if (strpos($url, 'v=') !== false)
        {
            $url_params = explode('?', $url);
            $kvp = self::keyvalue($url_params[1], true);
            $theytid = $kvp['v'];
        }
        else if (strpos($url, "youtu.be") !== false)
        {
            $shortpath = explode('/', parse_url($url, PHP_URL_PATH));
            $theytid = $shortpath[1];
        }
        return $theytid;
    }

    public static function wizard()
    {
        ?>
        <div class="wrap" id="epyt_wiz_wrap">
            <div class="smallnote center"> Please periodically check the YouTube plugin tab on your admin panel to review the latest options. </div>

            <?php
            $form_valid = true;
            $acc_expand = '';
            $get_pro_link = self::$epbase . '/dashboard/pro-easy-video-analytics.aspx?ref=wizard';



            $step1_api_error_msg = ' Please confirm that the link works in your browser, and that <em>the owner of the video allowed embed sharing permissions (otherwise, contact the owner of the video to allow embedding)</em>. Then copy that full link in your address bar to paste here. If you are sure your link is correct, then (1) your API key may be too restrictive (<a target="_blank" href="https://console.developers.google.com/apis/credentials">check here</a>) or (2) you have reached your Google quota (<a href="https://console.developers.google.com/apis/dashboard" target="_blank">check here</a>). You can apply to Google for a <a href="https://services.google.com/fb/forms/ytapiquotarequest/" target="_blank">quota increase here</a>.';
            $step1_video_errors = '';
            $step1_video_error_invalid = 'Sorry, that does not seem to be a link to an existing video. Please confirm that the link works in your browser, and that <em>the owner of the video allowed embed sharing permissions (otherwise, contact the owner of the video to allow embedding)</em>. Then copy that full link in your address bar to paste here.';
            $step1_playlist_errors = '';
            $step1_playlist_error_invalid = 'Sorry, that does not seem to be a link to an existing playlist. Please confirm that the link works in your browser, and that <em>the owner of the playlist allowed embed sharing permissions (otherwise, contact the owner of the video to allow embedding)</em>. Then copy that full link in your address bar to paste here.';
            $step1_channel_errors = '';
            $step1_channel_error_invalid = 'Sorry, that does not seem to be a link to an existing video. ' . $step1_api_error_msg;
            $step1_live_errors = '';
            $step1_live_error_invalid = 'Sorry, that does not seem to be a valid link to an existing live video. ' . $step1_api_error_msg;
            $step1_livechannel_errors = '';
            $step1_livechannel_error_invalid = __('Sorry, that does not seem to be a link to an existing channel. Note: the custom channel name will not work. Please enter either a) the official channel format shown above, or b) any any single video belonging to the channel and the plugin can retrieve the official channel format for you.', 'text_domain');

            $if_live_preview = false;

            $theytid = null;
            $theplaylistid = null;
            $submit_type = null;

            if (isset($_POST['wizform_submit']))
            {
                check_admin_referer('_epyt_wiz', '_epyt_nonce');

                $submit_type = sanitize_text_field($_POST['wizform_submit']);
                if ($submit_type === 'step1_video')
                {
                    // validate
                    $search = sanitize_text_field(trim($_POST['txtUrl']));

                    try
                    {
                        if (empty($search))
                        {
                            throw new Exception();
                        }
                        else
                        {
                            // cleanup
                            $search = str_replace('/shorts/', '/watch?v=', $search);
                        }
                        if (preg_match(self::$justurlregex, $search))
                        {
                            //$search = esc_url($search);

                            try
                            {
                                $theytid = self::try_get_ytid($search);

                                if ($theytid == null)
                                {
                                    $form_valid = false;
                                    $step1_video_errors = $step1_video_error_invalid;
                                    $acc_expand = 'h3_video';
                                }
                                else
                                {

                                    $odata = self::get_oembed('http://youtube.com/watch?v=' . $theytid, 1920, 1280);
                                    if (is_object($odata))
                                    {
                                        ?>

                                        <div id="step2_video" class="center">

                                            <h2>
                                                <?php
                                                if (isset($odata->title))
                                                {
                                                    echo sanitize_text_field($odata->title);
                                                }
                                                ?>
                                            </h2>
                                            <p class="center">
                                                <a class="ui-button ui-widget ui-corner-all" href="<?php echo $get_pro_link; ?>" target="_blank"><span class="ui-icon ui-icon-gear"></span> Customize (PRO)</a>
                                                &nbsp; <a class="ui-button ui-widget ui-corner-all inserttopost" rel="[embedyt] https://www.youtube.com/watch?v=<?php echo esc_attr($theytid) ?>[/embedyt]"><span class="ui-icon ui-icon-arrowthickstop-1-s"></span> Insert Into Editor</a>
                                            </p>
                                            &nbsp; Or Copy Code:
                                            <span class="copycode">[embedyt] https://www.youtube.com/watch?v=<?php echo esc_attr($theytid) ?>[/embedyt]</span>
                                            <div class="clearboth" style="height: 10px;">
                                            </div>
                                            <div class="ep-wizard-preview-video-wrapper">
                                                <iframe src="https://www.youtube.com/embed/<?php echo esc_attr($theytid) ?>?rel=0" allowfullscreen="" frameborder="0"></iframe>
                                            </div>

                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        $form_valid = false;
                                        $step1_video_errors = $step1_video_error_invalid;
                                        $acc_expand = 'h3_video';
                                    }
                                }
                            }
                            catch (Exception $ex)
                            {
                                $form_valid = false;
                                $step1_video_errors = $step1_video_error_invalid;
                                $acc_expand = 'h3_video';
                            }
                        }
                        else
                        {
                            $search_options = new stdClass();
                            $search_options->q = $search;
                            $search_options->pageToken = null;
                            ?>
                            <div id="step2_video_search" class="center">
                                <h2>You searched for: <em class="orange"><?php echo sanitize_text_field($search); ?></em> </h2>

                                <?php
                                $search_page = self::get_search_page($search_options);
                                echo $search_page->html;
                                ?>
                            </div>
                            <?php
                        }

                        // // if valid, set and display next step
                        // if not,form_valid = false and  set accordion expander and error messages
                    }
                    catch (Exception $ex)
                    {
                        $form_valid = false;
                        $step1_video_errors = $step1_video_error_invalid;
                        $acc_expand = 'h3_video';
                    }
                }
                else if ($submit_type === 'step1_playlist')
                {
                    $search = sanitize_text_field(trim($_POST['txtUrlPlaylist']));
                    try
                    {
                        if (empty($search))
                        {
                            throw new Exception();
                        }
                        if (preg_match(self::$justurlregex, $search))
                        {
                            try
                            {
                                $theytid = null;
                                try
                                {
                                    $theytid = self::try_get_ytid($search);
                                }
                                catch (Exception $ex)
                                {
                                    
                                }

                                $urlparams = explode('?', $search);
                                $qvars = array();
                                parse_str($urlparams[1], $qvars);
                                $theplaylistid = $qvars["list"];

                                $odata = self::get_oembed('https://youtube.com/playlist?list=' . $theplaylistid, 1920, 1280);

                                if (is_object($odata))
                                {
                                    $rel = 'https://www.youtube.com/embed?listType=playlist&list=' . (esc_attr($theplaylistid) . (empty($theytid) ? '' : '&v=' . esc_attr($theytid)));
                                    ?>

                                    <div id="step2_playlist" class="center">

                                        <h2>
                                            <?php
                                            if (isset($odata->title))
                                            {
                                                echo 'Playlist: ' . sanitize_text_field($odata->title);
                                            }
                                            ?>
                                        </h2>
                                        <p class="center">
                                            <a class="ui-button ui-widget ui-corner-all inserttopost" rel="[embedyt] <?php echo $rel; ?>[/embedyt]"><span class="ui-icon ui-icon-arrowthickstop-1-s"></span> Insert as Playlist</a>
                                            &nbsp; <a class="ui-button ui-widget ui-corner-all inserttopost" rel="[embedyt] <?php echo $rel . '&layout=gallery'; ?>[/embedyt]"><span class="ui-icon ui-icon-arrowthickstop-1-s"></span> Insert as Gallery</a>
                                            &nbsp; <a class="ui-button ui-widget ui-corner-all" href="<?php echo $get_pro_link; ?>" target="_blank"><span class="ui-icon ui-icon-gear"></span> Customize (PRO)</a>
                                        </p>
                                        <p>
                                            Or Copy Code:
                                        </p>
                                        <p>
                                            Playlist Layout: <span class="copycode">[embedyt] <?php echo $rel; ?>[/embedyt]</span>
                                        </p>
                                        <p>
                                            Gallery Layout: <span class="copycode">[embedyt] <?php echo $rel . '&layout=gallery'; ?>[/embedyt]</span>
                                        </p>
                                        <div class="clearboth" style="height: 10px;">
                                        </div>
                                        <div class="ep-wizard-preview-video-wrapper">
                                            <iframe src="<?php echo $rel; ?>" allowfullscreen="" frameborder="0"></iframe>
                                        </div>
                                    </div>
                                    <?php
                                }
                                else
                                {
                                    $form_valid = false;
                                    $step1_playlist_errors = $step1_playlist_error_invalid;
                                    $acc_expand = 'h3_playlist';
                                }
                            }
                            catch (Exception $ex)
                            {
                                $form_valid = false;
                                $step1_playlist_errors = $step1_playlist_error_invalid;
                                $acc_expand = 'h3_playlist';
                            }
                        }
                    }
                    catch (Exception $ex)
                    {
                        $form_valid = false;
                        $step1_playlist_errors = $step1_playlist_error_invalid;
                        $acc_expand = 'h3_playlist';
                    }
                }
                else if ($submit_type === 'step1_channel')
                {
                    $search = sanitize_text_field(trim($_POST['txtUrlChannel']));
                    try
                    {
                        if (empty($search))
                        {
                            throw new Exception();
                        }
                        if (preg_match(self::$justurlregex, $search) || preg_match('@/channel/(.+)@', $search))
                        {
                            try
                            {
                                $thechannel = null;
                                if (preg_match(self::$justurlregex, $search))
                                {
                                    // single id
                                    $theytid = null;
                                    try
                                    {
                                        $theytid = self::try_get_ytid($search);
                                    }
                                    catch (Exception $ex)
                                    {
                                        
                                    }
                                    $chanvid = null;
                                    if ($theytid)
                                    {
                                        $chanvid = self::get_video_snippet($theytid);
                                    }
                                    if ($chanvid)
                                    {
                                        $thechannel = self::get_channel_snippet($chanvid->snippet->channelId);
                                    }
                                }
                                else
                                {
                                    // channel id
                                    $chanmatch = array();
                                    preg_match('@/channel/(.+)@', $search, $chanmatch);
                                    if (!empty($chanmatch))
                                    {
                                        $thechannel = self::get_channel_snippet($chanmatch[1]);
                                    }
                                }
                                if ($thechannel)
                                {
                                    $theplaylistid = $thechannel->contentDetails->relatedPlaylists->uploads;
                                    $rel = 'https://www.youtube.com/embed?listType=playlist&list=' . (esc_attr($theplaylistid));
                                    ?>

                                    <div id="step2_channel" class="center">

                                        <h2>
                                            <?php
                                            echo 'Channel: ' . sanitize_text_field($thechannel->snippet->title);
                                            ?>
                                        </h2>
                                        <p class="center">
                                            <a class="ui-button ui-widget ui-corner-all inserttopost" rel="[embedyt] <?php echo $rel; ?>[/embedyt]"><span class="ui-icon ui-icon-arrowthickstop-1-s"></span> Insert as Playlist</a>
                                            &nbsp; <a class="ui-button ui-widget ui-corner-all inserttopost" rel="[embedyt] <?php echo $rel . '&layout=gallery'; ?>[/embedyt]"><span class="ui-icon ui-icon-arrowthickstop-1-s"></span> Insert as Gallery</a>
                                            &nbsp; <a class="ui-button ui-widget ui-corner-all" href="<?php echo $get_pro_link; ?>" target="_blank"><span class="ui-icon ui-icon-gear"></span> Customize (PRO)</a>
                                        </p>
                                        <p>
                                            Or Copy Code:
                                        </p>
                                        <p>
                                            Playlist Layout: <span class="copycode">[embedyt] <?php echo $rel; ?>[/embedyt]</span>
                                        </p>
                                        <p>
                                            Gallery Layout: <span class="copycode">[embedyt] <?php echo $rel . '&layout=gallery'; ?>[/embedyt]</span>
                                        </p>
                                        <div class="clearboth" style="height: 10px;">
                                        </div>
                                        <div class="ep-wizard-preview-video-wrapper">
                                            <iframe src="<?php echo $rel; ?>" allowfullscreen="" frameborder="0"></iframe>
                                        </div>
                                    </div>
                                    <?php
                                }
                                else
                                {
                                    $form_valid = false;
                                    $step1_channel_errors = $step1_channel_error_invalid;
                                    $acc_expand = 'h3_channel';
                                }
                            }
                            catch (Exception $ex)
                            {
                                $form_valid = false;
                                $step1_channel_errors = $step1_channel_error_invalid;
                                $acc_expand = 'h3_channel';
                            }
                        }
                    }
                    catch (Exception $ex)
                    {
                        $form_valid = false;
                        $step1_channel_errors = $step1_channel_error_invalid;
                        $acc_expand = 'h3_channel';
                    }
                }
                else if ($submit_type === 'step1_livechannel')
                {
                    $search = sanitize_text_field(trim($_POST['txtUrlLiveChannel']));
                    try
                    {
                        if (empty($search))
                        {
                            throw new Exception();
                        }
                        if (preg_match(self::$justurlregex, $search) || preg_match('@/channel/(.+)@', $search))
                        {
                            try
                            {
                                $thechannelid = null;
                                if (preg_match(self::$justurlregex, $search))
                                {
                                    // single id
                                    $theytid = null;
                                    try
                                    {
                                        $theytid = self::try_get_ytid($search);
                                    }
                                    catch (Exception $ex)
                                    {
                                        
                                    }
                                    $chanvid = null;
                                    if ($theytid)
                                    {
                                        $chanvid = self::get_video_snippet($theytid);
                                    }
                                    if ($chanvid)
                                    {
                                        $thechannelid = $chanvid->snippet->channelId;
                                    }
                                }
                                else
                                {
                                    // channel id
                                    $chanmatch = array();
                                    preg_match('@/channel/(.+)@', $search, $chanmatch);
                                    if (!empty($chanmatch))
                                    {
                                        $thechannelid = $chanmatch[1];
                                    }
                                }
                                if (!empty($thechannelid))
                                {
                                    $rel = 'https://www.youtube.com/embed/live_stream?channel=' . (esc_attr($thechannelid));

                                    $final_title = esc_url('https://www.youtube.com/channel/' . $thechannelid);
                                    $final_title_prefix = 'Live stream from channel';
                                    $doing_live = true;
                                    ?>

                                    <div id="step2_livechannel" class="center">
                                        <h2>
                                            <?php
                                            echo 'Live stream from channel: ' . esc_url('https://www.youtube.com/channel/' . $thechannelid);
                                            ?>
                                        </h2>
                                        <p class="center">
                                            <a class="ui-button ui-widget ui-corner-all inserttopost" rel="[embedyt] https://www.youtube.com/embed/live_stream?channel=<?php echo esc_attr($thechannelid) ?>[/embedyt]"><span class="ui-icon ui-icon-arrowthickstop-1-s"></span> Insert Into Editor</a>
                                            &nbsp;
                                            <a class="ui-button ui-widget ui-corner-all" href="<?php echo $get_pro_link; ?>" target="_blank"><span class="ui-icon ui-icon-gear"></span> Customize (PRO)</a>
                                        </p>
                                        &nbsp; Or Copy Code:
                                        <span class="copycode">[embedyt] https://www.youtube.com/embed/live_stream?channel=<?php echo esc_attr($thechannelid) ?>[/embedyt]</span>
                                        <div class="clearboth" style="height: 10px;">
                                        </div>
                                        <p>
                                            <?php _e('If you see a black/empty YouTube player, then it likely means that you do not have any currently running or future live streams that are scheduled in your channel, so the plugin isn\'t getting any data from the YouTube API to show.  If you want to continue to use the channel based live stream embedding method, we suggest regularly scheduling one or more live streams, or using the live stream fallback content feature, so the player is not black/empty.', 'text_domain'); ?>
                                        </p>
                                        <div class="ep-wizard-preview-video-wrapper">
                                            <iframe src="https://www.youtube.com/embed/live_stream?channel=<?php echo esc_attr($thechannelid) ?>" allowfullscreen="" frameborder="0"></iframe>
                                        </div>
                                    </div>
                                    <?php
                                }
                                else
                                {
                                    $form_valid = false;
                                    $step1_livechannel_errors = $step1_livechannel_error_invalid;
                                    $acc_expand = 'h3_live';
                                }
                            }
                            catch (Exception $ex)
                            {
                                $form_valid = false;
                                $step1_livechannel_errors = $step1_livechannel_error_invalid;
                                $acc_expand = 'h3_live';
                            }
                        }
                        else
                        {
                            $form_valid = false;
                            $step1_livechannel_errors = $step1_livechannel_error_invalid;
                            $acc_expand = 'h3_live';
                        }
                    }
                    catch (Exception $ex)
                    {
                        $form_valid = false;
                        $step1_livechannel_errors = $step1_livechannel_error_invalid;
                        $acc_expand = 'h3_live';
                    }
                }
                else if ($submit_type === 'step1_live')
                {
                    $search = sanitize_text_field(trim($_POST['txtUrlLive']));
                    try
                    {
                        if (empty($search))
                        {
                            throw new Exception();
                        }

                        try
                        {
                            $theytid = null;
                            try
                            {
                                $theytid = self::try_get_ytid($search);
                            }
                            catch (Exception $ex)
                            {
                                
                            }
                            $live_attempt = self::get_video_snippet($theytid);
                            if ($live_attempt)
                            {
                                $if_live_preview = $live_attempt->id;
                                $final_title = sanitize_text_field($live_attempt->snippet->title);
                                $final_title_prefix = 'Live Stream';
                            }
                            $rel = 'https://www.youtube.com/watch?v=' . (esc_attr($theytid)) . '&live=1';
                            $doing_live = true;
                            ?>
                            <div id="step2_live" class="center">

                                <h2>
                                    <?php
                                    echo 'Live Stream (or Premiere): ' . sanitize_text_field($live_attempt->snippet->title);
                                    ?>
                                </h2>
                                <p class="center">
                                    <a class="ui-button ui-widget ui-corner-all inserttopost" rel="[embedyt] <?php echo $rel; ?>[/embedyt]"><span class="ui-icon ui-icon-arrowthickstop-1-s"></span> Insert Into Editor</a>
                                    &nbsp; <a class="ui-button ui-widget ui-corner-all" href="<?php echo $get_pro_link; ?>" target="_blank"><span class="ui-icon ui-icon-gear"></span> Customize (PRO)</a>
                                </p>
                                <p>
                                    Or Copy Code:
                                </p>
                                <p>
                                    <span class="copycode">[embedyt] <?php echo $rel; ?>[/embedyt]</span>
                                </p>
                                <div class="clearboth" style="height: 10px;">
                                </div>
                                <?php
                                if ($if_live_preview)
                                {
                                    ?>
                                    <div class="ep-wizard-preview-video-wrapper">
                                        <iframe src="https://www.youtube.com/embed/<?php echo esc_attr($if_live_preview) ?>?rel=0" allowfullscreen="" frameborder="0"></iframe>
                                    </div>
                                    <?php
                                }
                                ?>
                                <p>
                                    <?php _e('<strong>Is your live stream not working?</strong> Read more here: <a href="https://support.google.com/youtube/answer/2474026?hl=en" target="_blank">https://support.google.com/youtube/answer/2474026?hl=en</a>', 'text_domain'); ?>
                                </p>
                            </div>
                            <?php
                        }
                        catch (Exception $ex)
                        {
                            $form_valid = false;
                            $step1_live_errors = $step1_live_error_invalid;
                            $acc_expand = 'h3_live';
                        }
                    }
                    catch (Exception $ex)
                    {
                        $form_valid = false;
                        $step1_live_errors = $step1_live_error_invalid;
                        $acc_expand = 'h3_live';
                    }
                }
                else
                {
                    $form_valid = false;
                    $acc_expand = 'h3none';
                }
            }

            if (!isset($_POST['wizform_submit']) || ($form_valid === false))
            {
                if ($form_valid === false)
                {
                    ?>
                    <script type="text/javascript">
                        var _EPYTWIZ_ = _EPYTWIZ_ || {};
                        _EPYTWIZ_.acc_expand = '<?php echo sanitize_key($acc_expand) ?>';</script>
                    <?php
                }
                ?>

                <div class="wiz-accordion">
                    <h3 class="header-go"> <a href="<?php echo admin_url('admin.php?page=youtube-my-preferences#jumpdefaults'); ?>">Check my general YouTube embedding instructions and settings. </a></h3>
                    <div class="header-go-content"></div>
                    <h3 id="h3_video"> <a href="#"><?php _e('Embed a single video, or YouTube short.', 'text_domain'); ?></a></h3>
                    <div>
                        <h4 class="center">Single video directions</h4>
                        <p>
                            <?php _e('Paste the url of a single video below (examples: <em>https://www.youtube.com/watch?v=YVvn8dpSAt0</em> or <em>https://www.youtube.com/shorts/J38Yq85ZoyY</em>)', 'text_domain'); ?>
                        </p>
                        <form name="wizform_video" method="post" action="" class="wizform" id="wizform_video">
                            <?php wp_nonce_field('_epyt_wiz', '_epyt_nonce', true); ?>
                            <div class="center txt-button-align">
                                <input name="txtUrl" maxlength="200" id="txtUrl" class="txturlpastecustom ui-widget ui-widget-content ui-corner-all" placeholder="Paste URL here" type="text"> <button name="wizform_submit" class="ui-button ui-widget ui-corner-all" type="submit" value="step1_video">Submit</button>
                            </div>
                            <p class="badpaste orange bold" style="display: none;">
                                Please do not paste full embedcode above, only simple links to the YouTube video.
                                <br />
                                We have attempted to correct it above, but please doublecheck!
                            </p>
                        </form>
                        <?php echo $step1_video_errors ? '<p class="orange bold">' . $step1_video_errors . '</p>' : ''; ?>
                        <p><em>Note: You can also search YouTube videos by title in the text box above (example: <em>TED talks</em>). However, searching will use a significant amount of your YouTube API quota.</em></p>
                    </div>
                    <h3 id="h3_playlist"> <a href="#">Embed a playlist. </a></h3>
                    <div>
                        <h4 class="center">Playlist directions</h4>
                        <div class="playlist-tabs">
                            <ul>
                                <li><a href="#ptabs-1">Self-contained layout directions</a></li>
                                <li><a href="#ptabs-2">Gallery layout directions</a></li>
                            </ul>
                            <div id="ptabs-1">
                                <img src="<?php echo plugins_url('/images/icon-playlist-self.jpg', __FILE__) ?>" class="icon-playlist" />
                                <ol>
                                    <li>Go to the page for the playlist that lists all of its videos (<a href="https://www.youtube.com/playlist?list=PL70DEC2B0568B5469" target="_blank">Example &raquo;</a>). </li>
                                    <li>You may then click on the video that you want the playlist to start with (this step only applies to self-contained playlists. You cannot pick a starter for gallery layout directions).</li>
                                    <li>Copy the URL in your browser and paste it in the textbox below. You'll notice that a playlist URL contains the playlist ID (e.g. "PL...")</li>
                                    <li>Click "Get Playlist" to continue.</li>
                                </ol>
                                <div class="clearboth">
                                </div>
                            </div>
                            <div id="ptabs-2">
                                <img src="<?php echo plugins_url('/images/icon-playlist-gallery.jpg', __FILE__) ?>" class="icon-playlist" />
                                <ol>
                                    <li>Go to the page for the playlist that lists all of its videos (<a href="https://www.youtube.com/playlist?list=PL70DEC2B0568B5469" target="_blank">Example &raquo;</a>). </li>
                                    <li>Copy the URL in your browser and paste it in the textbox below. You'll notice that a playlist URL contains the playlist ID (e.g. "PL...")</li>
                                    <li>Click "Get Playlist" to continue.</li>
                                </ol>
                                <div class="clearboth">
                                </div>
                            </div>
                        </div>

                        <form name="wizform_playlist" method="post" action="" class="wizform" id="wizform_playlist">
                            <?php wp_nonce_field('_epyt_wiz', '_epyt_nonce', true); ?>
                            <div class="center txt-button-align">
                                <input name="txtUrlPlaylist" maxlength="200" id="txtUrlPlaylist" class="txturlpastecustom ui-widget ui-widget-content ui-corner-all" placeholder="Paste the playlist link here" type="text">
                                <button name="wizform_submit" class="ui-button ui-widget ui-corner-all" type="submit" value="step1_playlist">Get Playlist</button>
                            </div>
                        </form>
                        <?php echo $step1_playlist_errors ? '<p class="orange bold">' . $step1_playlist_errors . '</p>' : ''; ?>
                    </div>
                    <h3 id="h3_channel"> <a href="#">Embed a channel.  </a></h3>
                    <div>
                        <h4 class="center">Channel directions</h4>
                        <?php
                        if (!self::has_api_key())
                        {
                            echo str_replace('###', '"search for channel"', self::$get_api_key_msg);
                        }
                        else
                        {
                            ?>
                            <p>
                                <?php _e('If you already know the direct link to the channel ID, enter it below. <br>Example: https://www.youtube.com<strong>/channel/</strong>UCnM5iMGiKsZg-iOlIO2ZkdQ <p class="error-channel-format smallnote">Note: the following format will not work:  https://www.youtube.com<strong>/c/</strong>customchannelname  If you cannot locate the proper channel ID format above, then try the other method below.</p> ', 'text_domain'); ?>
                            </p>
                            <p>
                                Or, simply enter a link to any single video that belongs to the user's channel, and the plugin will find the channel for you.<br>Example: https://www.youtube.com/watch?v=YVvn8dpSAt0
                            </p>
                            <form name="wizform_channel" method="post" action="" class="wizform" id="wizform_channel">
                                <?php wp_nonce_field('_epyt_wiz', '_epyt_nonce', true); ?>
                                <div class="center txt-button-align">
                                    <input name="txtUrlChannel" maxlength="200" id="txtUrlChannel" class="txturlpastecustom ui-widget ui-widget-content ui-corner-all" placeholder="Paste YouTube link here" type="text"> <button name="wizform_submit" class="ui-button ui-widget ui-corner-all" type="submit" value="step1_channel">Get Channel</button>
                                </div>
                                <p class="badpaste orange bold" style="display: none;">
                                    Please do not paste full embedcode above, only simple links to the YouTube video.
                                    <br />
                                    We have attempted to correct it above, but please doublecheck!
                                </p>
                            </form>
                            <?php echo $step1_channel_errors ? '<p class="orange bold">' . $step1_channel_errors . '</p>' : ''; ?>
                            <?php
                        }
                        ?>
                    </div>
                    <h3 id="h3_live"> <a href="#">Embed a live stream or premiere video. </a></h3>
                    <div>
                        <h4 class="center">Live stream or premiere directions</h4>
                        <?php
                        if (!self::has_api_key())
                        {
                            echo str_replace('###', 'live stream', self::$get_api_key_msg);
                        }
                        else
                        {
                            ?>
                            <div class="livestream-tabs">
                                <ul>
                                    <li><a href="#livestream-tabs-2">Channel-based livestream (upgrade required)</a></li>
                                    <li><a href="#livestream-tabs-1">Direct link to livestream or premiere video</a></li>
                                </ul>
                                <div id="livestream-tabs-1">
                                    <p>
                                        This will embed a specific live stream or premiere video.
                                    </p>
                                    <ol>
                                        <li>
                                            Paste in the direct URL of the live stream or premiere below and click Submit. <br> Example: https://www.youtube.com/watch?v=<strong>5qap5aO4i9A</strong>
                                        </li>
                                        <li>
                                            On the next screen, customize or insert your video.
                                        </li>
                                    </ol>
                                    <form name="wizform_live" method="post" action="" class="wizform" id="wizform_live">
                                        <?php wp_nonce_field('_epyt_wiz', '_epyt_nonce', true); ?>
                                        <div class="center txt-button-align">
                                            <input name="txtUrlLive" maxlength="200" id="txtUrlLive" class="ui-widget ui-widget-content ui-corner-all" placeholder="Paste YouTube link here" type="text"> <button name="wizform_submit" class="ui-button ui-widget ui-corner-all" type="submit" value="step1_live">Submit</button>
                                        </div>
                                    </form>
                                    <?php echo $step1_live_errors ? '<p class="orange bold">' . $step1_live_errors . '</p>' : ''; ?>
                                </div>
                                <div id="livestream-tabs-2">
                                    <div class="alert">
                                        <p>
                                            Unfortunately, Google has recently removed their YouTube API feature that used to support automatic channel-based live streams. It appears they won't change things back. However, you do have a couple of choices:
                                        </p>
                                        <ol>
                                            <li>Use "Direct link" live streams, as explained in the other tab. The trade-off is that you will have to manually post and take down your future live streams every time they start and when they end, respectively.</li>
                                            <li>Or <a href="<?php echo self::$epbase ?>/dashboard/pro-easy-video-analytics.aspx" target="_blank">upgrade to Pro</a>, which has a solution that brings back all the "set it and forget it" features of channel-based embeds. We spent a significant amount of time developing a stable, long-term solution around YouTube's limitations, so we are releasing this effort exclusively to our Pro customers.</li>
                                        </ol>

                                    </div>                                    
                                    <?php echo $step1_livechannel_errors ? '<p class="orange bold">' . $step1_livechannel_errors . '</p>' : ''; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <h3 class="header-go"> <a href="<?php echo self::$epbase . '/dashboard/pro-easy-video-analytics.aspx?ref=wizardacc'; ?>">Check my performance, blocked countries, deleted videos, etc. (PRO) </a></h3>
                    <div class="header-go-content"></div>
                </div>
                <?php
            }
            ?>
        </div>
        <?php
    }

    public static function has_api_key()
    {
        if (isset(self::$alloptions[self::$opt_apikey]) && strlen(trim(self::$alloptions[self::$opt_apikey])) > 0)
        {
            return true;
        }

        return false;
    }

    public static function get_live_snippet($channel)
    {
        $apiEndpoint = 'https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&maxResults=1&type=video&eventType=live&safeSearch=none&videoEmbeddable=true&key=' . self::$alloptions[self::$opt_apikey]
                . '&channelId=' . urlencode($channel);
        $apiResult = wp_remote_get($apiEndpoint, array('timeout' => self::$curltimeout, 'headers' => array('referer' => site_url())));

        if (is_wp_error($apiResult))
        {
            return false;
        }

        $jsonResult = json_decode($apiResult['body']);

        if (isset($jsonResult->error))
        {
            return false;
        }

        if (isset($jsonResult->items) && $jsonResult->items != null && is_array($jsonResult->items) && count($jsonResult->items))
        {
            return $jsonResult->items[0];
        }

        return false;
    }

    public static function get_video_snippet($vid)
    {
        $apiEndpoint = 'https://www.googleapis.com/youtube/v3/videos?part=snippet&maxResults=1&key=' . self::$alloptions[self::$opt_apikey]
                . '&id=' . urlencode($vid);
        $apiResult = wp_remote_get($apiEndpoint, array('timeout' => self::$curltimeout, 'headers' => array('referer' => site_url())));

        if (is_wp_error($apiResult))
        {
            return false;
        }

        $jsonResult = json_decode($apiResult['body']);

        if (isset($jsonResult->error))
        {
            return false;
        }

        if (isset($jsonResult->items) && $jsonResult->items != null && is_array($jsonResult->items) && count($jsonResult->items))
        {
            return $jsonResult->items[0];
        }

        return false;
    }

    public static function get_channel_snippet($channid)
    {
        $apiEndpoint = 'https://www.googleapis.com/youtube/v3/channels?part=contentDetails,snippet&key=' . self::$alloptions[self::$opt_apikey]
                . '&id=' . urlencode($channid);
        $apiResult = wp_remote_get($apiEndpoint, array('timeout' => self::$curltimeout, 'headers' => array('referer' => site_url())));

        if (is_wp_error($apiResult))
        {
            return false;
        }

        $jsonResult = json_decode($apiResult['body']);

        if (isset($jsonResult->error))
        {
            return false;
        }

        if (isset($jsonResult->items) && $jsonResult->items != null && is_array($jsonResult->items) && count($jsonResult->items))
        {
            return $jsonResult->items[0];
        }

        return false;
    }

    public static function clean_api_error($raw_message)
    {
        return htmlspecialchars(strip_tags(preg_replace('@&key=[^& ]+@i', '&key=*******', $raw_message)), ENT_QUOTES, 'UTF-8');
    }

    public static function clean_api_error_html($raw_message, $add_boilerplate)
    {
        $clean_html = '<div>Sorry, there was a YouTube error.</div>';
        if (current_user_can('manage_options'))
        {
            $clean_html = '<div>Sorry, there was a YouTube API error: <em>' . self::clean_api_error($raw_message) . '</em>' .
                    ( $add_boilerplate ? self::$boilerplate_api_error_message : '' ) .
                    '</div>';
        }
        return $clean_html;
    }

    public static function get_search_page($options)
    {
        $gallobj = new stdClass();
        $pageSize = 30;

        if (!self::has_api_key())
        {
            $gallobj->html = '<div>' . str_replace('###', 'search', self::$get_api_key_msg) . '</div>';
            return $gallobj;
        }

        $apiEndpoint = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=' . $pageSize . '&type=video&safeSearch=none&videoEmbeddable=true&key=' . self::$alloptions[self::$opt_apikey]
                . '&q=' . urlencode($options->q);
        if (!empty($options->pageToken))
        {
            $apiEndpoint .= '&pageToken=' . $options->pageToken;
        }

        $code = '';
        $apiResult = wp_remote_get($apiEndpoint, array('timeout' => self::$curltimeout, 'headers' => array('referer' => site_url())));

        if (is_wp_error($apiResult))
        {
            $gallobj->html = self::clean_api_error_html($apiResult->get_error_message(), true);
            return $gallobj;
        }

        $jsonResult = json_decode($apiResult['body']);

        if (isset($jsonResult->error))
        {
            if (isset($jsonResult->error->message))
            {
                $gallobj->html = self::clean_api_error_html($jsonResult->error->message, true);
                return $gallobj;
            }
            $gallobj->html = '<div>Sorry, there may be an issue with your YouTube API key. ' . self::$boilerplate_api_error_message . '</div>';
            return $gallobj;
        }

        $totalResults = $jsonResult->pageInfo->totalResults;

        $nextPageToken = '';
        $prevPageToken = '';
        if (isset($jsonResult->nextPageToken))
        {
            $nextPageToken = $jsonResult->nextPageToken;
        }

        if (isset($jsonResult->prevPageToken))
        {
            $prevPageToken = $jsonResult->prevPageToken;
        }

        $cnt = 0;

        $code .= '<div class="epyt-search-results">';

        if (isset($jsonResult->items) && $jsonResult->items != null && is_array($jsonResult->items))
        {
            foreach ($jsonResult->items as $item)
            {

                $thumb = new stdClass();

                $thumb->id = isset($item->snippet->resourceId->videoId) ? $item->snippet->resourceId->videoId : null;
                $thumb->id = $thumb->id ? $thumb->id : (isset($item->id->videoId) ? $item->id->videoId : null);

                if ($thumb->id)
                {
                    $thumb->title = $item->snippet->title;

                    if (isset($item->snippet->thumbnails->high->url))
                    {
                        $thumb->img = $item->snippet->thumbnails->high->url;
                        $thumb->quality = 'high';
                    }
                    elseif (isset($item->snippet->thumbnails->default->url))
                    {
                        $thumb->img = $item->snippet->thumbnails->default->url;
                        $thumb->quality = 'default';
                    }
                    elseif (isset($item->snippet->thumbnails->medium->url))
                    {
                        $thumb->img = $item->snippet->thumbnails->medium->url;
                        $thumb->quality = 'medium';
                    }
                    else
                    {
                        $thumb->img = plugins_url('/images/deleted-video-thumb.png', __FILE__);
                        $thumb->quality = 'medium';
                    }

                    $code .= self::get_search_result_html($thumb, $options);
                    $cnt++;
                    $code .= '<div class="clear-both"></div>';
                }
            }
        }

        $code .= '<div class="clear-both"></div></div>';

        $totalPages = ceil($totalResults / $pageSize);
        $pagination = '<div class="epyt-pagination">';

        $txtprev = self::$alloptions[self::$opt_gallery_customarrows] ? self::$alloptions[self::$opt_gallery_customprev] : _('Prev');
        $pagination .= '<div tabindex="0" role="button" class="epyt-pagebutton epyt-prev ' . (empty($prevPageToken) ? ' hide ' : '') . '" data-q="' . esc_attr($options->q)
                . '" data-pagetoken="' . esc_attr($prevPageToken)
                . '"><div class="epyt-arrow">&laquo;</div> <div>' . $txtprev . '</div></div>';


        $pagination .= '<div class="epyt-pagenumbers ' . ($totalPages > 1 ? '' : 'hide') . '">';
        $pagination .= '<div class="epyt-current">1</div><div class="epyt-pageseparator"> / </div><div class="epyt-totalpages">' . $totalPages . '</div>';
        $pagination .= '</div>';

        $txtnext = self::$alloptions[self::$opt_gallery_customarrows] ? self::$alloptions[self::$opt_gallery_customnext] : _('Next');
        $pagination .= '<div tabindex="0" role="button" class="epyt-pagebutton epyt-next' . (empty($nextPageToken) ? ' hide ' : '') . '" data-q="' . esc_attr($options->q)
                . '" data-pagetoken="' . esc_attr($nextPageToken)
                . '"><div>' . $txtnext . '</div> <div class="epyt-arrow">&raquo;</div></div>';

        $pagination .= '<div class="epyt-loader"><img alt="loading" width="16" height="11" src="' . plugins_url('images/gallery-page-loader.gif', __FILE__) . '"></div>';
        $pagination .= '</div>';

        $code = $pagination . $code . $pagination;
        $gallobj->html = $code;
        return $gallobj;
    }

    public static function get_search_result_html($thumb, $options)
    {
        $get_pro_link = self::$epbase . '/dashboard/pro-easy-video-analytics.aspx?ref=searchresult';
        $escId = esc_attr($thumb->id);
        $code = '';

        $code .= '<div class="resultdiv" data-vid="' . $escId . '">
            <div class="resultinfo">
                <a class="pointer thumb load-movie" style="background-image: url(' . esc_url($thumb->img) . ')"></a>
                <a class="resulttitle pointer load-movie"><span class="ui-icon ui-icon-circle-triangle-e"></span> ' . sanitize_text_field($thumb->title) . '</a>
                <br>
                <span style="display: block;" id="scrollwatch' . $escId . '"></span>
                <div class="resultsubinfo">
                    <p>
                        <a class="ui-button ui-widget ui-corner-all" href="' . $get_pro_link . '" target="_blank"><span class="ui-icon ui-icon-gear"></span> Customize (PRO)</a>
                        &nbsp; <a class="ui-button ui-widget ui-corner-all inserttopost" rel="[embedyt] https://www.youtube.com/watch?v=' . $escId . '[/embedyt]"><span class="ui-icon ui-icon-arrowthickstop-1-s"></span> Insert Into Editor</a>
                    </p>
                    &nbsp; Or Copy Code:
                    <span class="copycode">[embedyt] https://www.youtube.com/watch?v=' . $escId . '[/embedyt]</span>
                </div>
            </div>
            <div class="clearboth"></div>
        </div>
        <div id="moviecontainer' . $escId . '" class="center moviecontainer relative" style="display: none;">
            Preview: <a id="closeme' . $escId . '" class="closeme" data-vid="' . $escId . '">
                &times;
            </a>
            <div id="watch' . $escId . '">
            </div>
        </div>';

        return $code;
    }

    public static function user_in_roles_any($user, $roles)
    {
        foreach ($user->roles as $idx => $r)
        {
            if (in_array($r, $roles))
            {
                return true;
            }
        }
        return false;
    }

    public static function is_restrict_wizard()
    {
        $curr_user = wp_get_current_user();
        if (
                $curr_user->ID // logged in
                && isset(self::$alloptions[self::$opt_restrict_wizard]) && self::$alloptions[self::$opt_restrict_wizard] == 1 // restricting
                && is_array(self::$alloptions[self::$opt_restrict_wizard_roles]) && !self::user_in_roles_any($curr_user, self::$alloptions[self::$opt_restrict_wizard_roles])
        )
        {
            return true;
        }
        return false;
    }

    public static function media_button_wizard()
    {
        if (self::is_restrict_wizard())
        {
            return;
        }

        add_thickbox();

        $wizhref = admin_url('admin.php?page=youtube-ep-wizard') .
                '&random=' . rand(1, 1000) .
                '&TB_iframe=true&width=950&height=800';
        ?>
        <a href="<?php echo esc_attr($wizhref); ?>" class="thickbox button ytprefs_media_link" id="ytprefs_wiz_button" title="Visual YouTube Search Tool and Wizard - For easier embedding"><span></span> YouTube</a>
        <?php
    }

    public static function check_double_plugin_warning()
    {
        if (is_plugin_active('embedplus-for-wordpress/embedplus.php'))
        {
            add_action('admin_notices', array(self::class, "double_plugin_warning"));
        }
    }

    public static function double_plugin_warning()
    {
        global $pagenow;
        $user_id = get_current_user_id();
        if ($pagenow != 'plugins.php' || get_user_meta($user_id, 'embedplus_double_plugin_warning', true) != 1)
        {
            //echo '<div class="error">' . $_SERVER['QUERY_STRING'] .'</div>';
            if ($pagenow == 'plugins.php' || strpos($_SERVER['QUERY_STRING'], 'youtube-my-preferences') !== false ||
                    strpos($_SERVER['QUERY_STRING'], 'embedplus-video-analytics-dashboard') !== false ||
                    strpos($_SERVER['QUERY_STRING'], 'youtube-ep-analytics-dashboard') !== false ||
                    strpos($_SERVER['QUERY_STRING'], 'embedplus-official-options') !== false)
            {
                ?>
                <style type="text/css">
                    .embedpluswarning img
                    {
                        vertical-align: text-bottom;
                    }
                    div.bgyellow {background-color: #FCFC94; position: relative;}
                    a.epxout, a.epxout:hover {font-weight: bold; color: #ffffff; background-color: #ff8888; text-decoration: none;
                                              border-radius: 20px; font-size: 15px; position: absolute; top: 3px; right: 3px;
                                              line-height: 20px; text-align: center; width: 20px; height: 20px; display: block; cursor: pointer;}
                    </style>
                    <div class="error bgyellow embedpluswarningbox">
                    <p class="embedpluswarning">
                        <?php
                        if ($pagenow == 'plugins.php')
                        {
                            echo '<a class="epxout">&times;</a>';
                        }
                        ?>
                        Seems like you have two different YouTube plugins by the EmbedPlus Team installed; this one and <b>Advanced YouTube Embed.</b> We strongly suggest keeping only the one you prefer, so that they don't conflict with each other while trying to create your embeds.
                    </p>
                </div>

                <script type="text/javascript">
                    (function ($)
                    {
                        $(document).ready(function ()
                        {
                            $('.epxout').on('click', function ()
                            {
                                $.ajax({
                                    type: "post",
                                    dataType: "json",
                                    timeout: 30000,
                                    url: window._EPYTA_ ? window._EPYTA_.wpajaxurl : ajaxurl,
                                    data: {action: 'my_embedplus_dismiss_double_plugin_warning'},
                                    success: function (response)
                                    {
                                        if (response.type === "success")
                                        {
                                            $(".embedpluswarningbox").hide();
                                        }
                                    },
                                    error: function (xhr, ajaxOptions, thrownError)
                                    {
                                    },
                                    complete: function ()
                                    {
                                    }
                                });
                            });
                        });
                    })(jQuery);</script>
                <?php
            }
        }
    }

    public static function my_embedplus_dismiss_double_plugin_warning()
    {
        $result = array();
        if (self::is_ajax())
        {
            $user_id = get_current_user_id();
            update_user_meta($user_id, 'embedplus_double_plugin_warning', 1);
            $result['type'] = 'success';
            echo json_encode($result);
        }
        else
        {
            $result['type'] = 'error';
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
        die();
    }

    public static function jsvars()
    {
        $loggedin = current_user_can('edit_posts');
        if (!($loggedin && self::$alloptions[self::$opt_admin_off_scripts]))
        {
            ?>
            <script data-cfasync="false">
                window._EPYT_ = window._EPYT_ || {
                    ajaxurl: "<?php echo admin_url('admin-ajax.php'); ?>",
                    security: "<?php echo wp_create_nonce('embedplus-nonce'); ?>",
                    gallery_scrolloffset: <?php echo intval(self::$alloptions[self::$opt_gallery_scrolloffset]) ?>,
                    eppathtoscripts: "<?php echo plugins_url('scripts/', __FILE__); ?>",
                    eppath: "<?php echo plugins_url('/', __FILE__); ?>",
                    epresponsiveselector: <?php echo self::get_responsiveselector(); ?>,
                    version: "<?php echo esc_attr(self::$alloptions[self::$opt_version]) ?>",
                    epdovol: true,
                    evselector: '<?php echo self::get_evselector(); ?>',
                    ajax_compat: <?php echo self::$alloptions[self::$opt_ajax_compat] == '1' ? 'true' : 'false' ?>,
                    maxres_facade: '<?php echo esc_attr(self::$alloptions[self::$opt_maxres_facade]) ?>',
                    ytapi_load: '<?php echo esc_attr(self::$alloptions[self::$opt_ytapi_load]) ?>',
                    pause_others: <?php echo self::$alloptions[self::$opt_pause_others] == '1' ? 'true' : 'false' ?>,
                    facade_mode: <?php echo self::$alloptions[self::$opt_facade_mode] == '1' ? 'true' : 'false' ?>,
                    not_live_on_channel: <?php echo self::$alloptions[self::$opt_not_live_on_channel] == '1' ? 'true' : 'false' ?>,
                    stopMobileBuffer: <?php echo self::$alloptions[self::$opt_stop_mobile_buffer] == '1' ? 'true' : 'false' ?>
                };</script>
            <?php
        }
    }

    public static function fitvids()
    {
        $loggedin = current_user_can('edit_posts');
        if (!($loggedin && self::$alloptions[self::$opt_admin_off_scripts]) && (self::$alloptions[self::$opt_responsive] || self::$alloptions[self::$opt_widgetfit]))
        {
            wp_enqueue_script('__ytprefsfitvids__', plugins_url('scripts/fitvids' . self::$min . '.js', __FILE__), array('__ytprefs__'), self::$version, true);
        }
    }

    public static function initoptions()
    {
        global $wpdb;
        $arroptions = get_option(self::$opt_alloptions);
        if ($arroptions !== false)
        {
            $bak = str_replace('.', '_', $arroptions[self::$opt_version]);
            add_option(self::$opt_alloptions . '_backup_' . $bak, $arroptions, '', 'no');
            $sql = "update " . $wpdb->options . " set autoload = 'no' where option_name like '" . self::$opt_alloptions . "\_backup\_%'";
            $wpdb->query($sql);
        }

        // backup settings for migration
        if (isset($arroptions[self::$opt_pro]) && strlen(trim($arroptions[self::$opt_pro])) > 10)
        {
            add_option(self::$opt_alloptions . '_migrate', $arroptions);
        }

        //vanilla defaults
        $_center = 0;
        $_glance = 0;
        $_autoplay = 0;
        $_cc_load_policy = 0;
        $_cc_lang_pref = '';
        $_iv_load_policy = 1;
        $_loop = 0;
        $_modestbranding = 0;
        $_rel = 1;
        $_fs = 1;
        $_theme = 'dark';
        $_color = 'red';
        $_autohide = 2;
        $_pro = '';
        $_nocookie = 0;
        $_gb_compat = 1;
        $_facade_mode = 0;
        $_facade_autoplay = 1;
        $_gdpr_consent = 0;
        $_gdpr_consent_message = self::$dft_gdpr_consent_message;
        $_gdpr_consent_button = 'Accept YouTube Content';
        $_playlistorder = 0;
        $_acctitle = 0;
        $_migrate = 0;
        $_migrate_youtube = 0;
        $_migrate_embedplusvideo = 0;
        $_controls = 1;
        $_oldspacing = 1;
        $_frontend_only = 1;
        $_responsive = 0;
        $_responsive_all = 1;
        $_widgetfit = 1;
        $_evselector_light = 0;
        $_stop_mobile_buffer = 1;
        $_restrict_wizard = 0;
        $_restrict_wizard_roles = self::$dft_roles;
        $_ajax_compat = 0;
        $_maxres_facade = 'eager';
        $_ytapi_load = 'light';
        $_defaultdims = 1;
        $_defaultwidth = isset($GLOBALS['content_width']) && is_numeric($GLOBALS['content_width']) ? intval($GLOBALS['content_width']) : 800;
        $_defaultheight = intval($_defaultwidth * 9.0 / 16.0);
        $_playsinline = 0;
        $_origin = 0;
        $_pause_others = 0;
        $_defaultvol = 0;
        $_vol = '';
        $_apikey = '';
        $_hl = '';
        $_dohl = 0;
        $_gallery_columns = 3;
        $_gallery_collapse_grid = 0;
        $_gallery_collapse_grid_breaks = self::$dft_bpts;
        $_gallery_scrolloffset = 20;
        $_gallery_hideprivate = 1;
        $_gallery_showtitle = 1;
        $_gallery_showpaging = 1;
        $_gallery_autonext = 0;
        $_gallery_thumbplay = 1;
        $_gallery_channelsub = 0;
        $_gallery_channelsublink = '';
        $_gallery_channelsubtext = 'Subscribe to my channel';
        $_gallery_customarrows = 0;
        $_gallery_customprev = 'Prev';
        $_gallery_customnext = 'Next';
        $_gallery_pagesize = 15;
        $_not_live_content = '';
        $_not_live_on = 0;
        $_not_live_on_channel = 0;
        $_debugmode = 0;
        $_uninstall_data = 0;
        $_admin_off_scripts = 0;
        $_defer_js = 0;
        $_defer_jquery = 0;
        $_ajax_save = 1;
        $_show_pointer = 1;
        $_onboarded = 0;
        $_old_script_method = 0;

        //update vanilla to previous settings if exists
        if ($arroptions !== false)
        {
            $_center = self::tryget($arroptions, self::$opt_center, 0);
            $_glance = self::tryget($arroptions, self::$opt_glance, $_glance);
            $_autoplay = self::tryget($arroptions, self::$opt_autoplay, 0);
            $_debugmode = self::tryget($arroptions, self::$opt_debugmode, 0);
            $_uninstall_data = self::tryget($arroptions, self::$opt_uninstall_data, 0);
            $_old_script_method = self::tryget($arroptions, self::$opt_old_script_method, 0);
            $_cc_load_policy = self::tryget($arroptions, self::$opt_cc_load_policy, 0);
            $_cc_lang_pref = self::tryget($arroptions, self::$opt_cc_lang_pref, $_cc_lang_pref);
            $_iv_load_policy = self::tryget($arroptions, self::$opt_iv_load_policy, 1);
            $_loop = self::tryget($arroptions, self::$opt_loop, 0);
            $_modestbranding = self::tryget($arroptions, self::$opt_modestbranding, 0);
            $_rel = self::tryget($arroptions, self::$opt_rel, 1);
            $_fs = self::tryget($arroptions, self::$opt_fs, 1);
            $_playsinline = self::tryget($arroptions, self::$opt_playsinline, 0);
            $_origin = self::tryget($arroptions, self::$opt_origin, 1);
            $_hl = self::tryget($arroptions, self::$opt_hl, '');
            $_dohl = self::tryget($arroptions, self::$opt_dohl, 0);
            $_theme = self::tryget($arroptions, self::$opt_theme, 'dark');
            $_color = self::tryget($arroptions, self::$opt_color, 'red');
            $_autohide = self::tryget($arroptions, self::$opt_autohide, 2);
            $_pro = self::tryget($arroptions, self::$opt_pro, '');
            $_nocookie = self::tryget($arroptions, self::$opt_nocookie, 0);
            $_gb_compat = self::tryget($arroptions, self::$opt_gb_compat, $_gb_compat);
            $_facade_mode = self::tryget($arroptions, self::$opt_facade_mode, $_facade_mode);
            $_facade_autoplay = self::tryget($arroptions, self::$opt_facade_autoplay, $_facade_autoplay);
            $_gdpr_consent = self::tryget($arroptions, self::$opt_gdpr_consent, $_gdpr_consent);
            $_gdpr_consent_message = self::tryget($arroptions, self::$opt_gdpr_consent_message, $_gdpr_consent_message);
            $_gdpr_consent_button = self::tryget($arroptions, self::$opt_gdpr_consent_button, $_gdpr_consent_button);
            $_playlistorder = self::tryget($arroptions, self::$opt_playlistorder, 0);
            $_acctitle = self::tryget($arroptions, self::$opt_acctitle, 0);
            $_migrate = self::tryget($arroptions, self::$opt_migrate, 0);
            $_migrate_youtube = self::tryget($arroptions, self::$opt_migrate_youtube, 0);
            $_migrate_embedplusvideo = self::tryget($arroptions, self::$opt_migrate_embedplusvideo, 0);
            $_controls = self::tryget($arroptions, self::$opt_controls, 1);
            $_controls = $_controls == 2 ? 1 : $_controls;
            $_oldspacing = self::tryget($arroptions, self::$opt_oldspacing, 1);
            $_frontend_only = self::tryget($arroptions, self::$opt_frontend_only, $_frontend_only);
            $_responsive = self::tryget($arroptions, self::$opt_responsive, $_responsive);
            $_responsive_all = self::tryget($arroptions, self::$opt_responsive_all, $_responsive_all);
            $_widgetfit = self::tryget($arroptions, self::$opt_widgetfit, 1);
            $_evselector_light = self::tryget($arroptions, self::$opt_evselector_light, 0);
            $_stop_mobile_buffer = self::tryget($arroptions, self::$opt_stop_mobile_buffer, 1);
            $_restrict_wizard = self::tryget($arroptions, self::$opt_restrict_wizard, 0);
            $_restrict_wizard_roles = self::tryget($arroptions, self::$opt_restrict_wizard_roles, self::$dft_roles);
            $_ajax_compat = self::tryget($arroptions, self::$opt_ajax_compat, 0);
            $_maxres_facade = self::tryget($arroptions, self::$opt_maxres_facade, $_maxres_facade);
            $_ytapi_load = self::tryget($arroptions, self::$opt_ytapi_load, $_ytapi_load);
            $_defaultdims = self::tryget($arroptions, self::$opt_defaultdims, $_defaultdims);
            $_defaultwidth = self::tryget($arroptions, self::$opt_defaultwidth, $_defaultwidth);
            $_defaultheight = self::tryget($arroptions, self::$opt_defaultheight, $_defaultheight);
            $_pause_others = self::tryget($arroptions, self::$opt_pause_others, $_pause_others);
            $_defaultvol = self::tryget($arroptions, self::$opt_defaultvol, 0);
            $_vol = self::tryget($arroptions, self::$opt_vol, '');
            $_apikey = self::tryget($arroptions, self::$opt_apikey, '');
            $_gallery_pagesize = self::tryget($arroptions, self::$opt_gallery_pagesize, 15);
            $_gallery_columns = self::tryget($arroptions, self::$opt_gallery_columns, 3);
            $_gallery_collapse_grid = self::tryget($arroptions, self::$opt_gallery_collapse_grid, 0);
            $_gallery_collapse_grid_breaks = self::tryget($arroptions, self::$opt_gallery_collapse_grid_breaks, self::$dft_bpts);
            $_gallery_scrolloffset = self::tryget($arroptions, self::$opt_gallery_scrolloffset, 20);
            $_gallery_hideprivate = self::tryget($arroptions, self::$opt_gallery_hideprivate, $_gallery_hideprivate);
            $_gallery_showtitle = self::tryget($arroptions, self::$opt_gallery_showtitle, 1);
            $_gallery_showpaging = self::tryget($arroptions, self::$opt_gallery_showpaging, 1);
            $_gallery_autonext = self::tryget($arroptions, self::$opt_gallery_autonext, 0);
            $_gallery_thumbplay = self::tryget($arroptions, self::$opt_gallery_thumbplay, 1);
            $_gallery_channelsub = self::tryget($arroptions, self::$opt_gallery_channelsub, $_gallery_channelsub);
            $_gallery_channelsublink = self::tryget($arroptions, self::$opt_gallery_channelsublink, $_gallery_channelsublink);
            $_gallery_channelsubtext = self::tryget($arroptions, self::$opt_gallery_channelsubtext, $_gallery_channelsubtext);
            $_gallery_customarrows = self::tryget($arroptions, self::$opt_gallery_customarrows, $_gallery_customarrows);
            $_gallery_customnext = self::tryget($arroptions, self::$opt_gallery_customnext, $_gallery_customnext);
            $_gallery_customprev = self::tryget($arroptions, self::$opt_gallery_customprev, $_gallery_customprev);
            $_not_live_content = self::tryget($arroptions, self::$opt_not_live_content, $_not_live_content);
            $_not_live_content = empty($_not_live_content) ? $_not_live_content : trim($_not_live_content);
            $_not_live_on = self::tryget($arroptions, self::$opt_not_live_on, empty($_not_live_content) ? 0 : $_not_live_on);
            $_not_live_on_channel = self::tryget($arroptions, self::$opt_not_live_on_channel, $_not_live_on_channel);
            $_admin_off_scripts = self::tryget($arroptions, self::$opt_admin_off_scripts, $_admin_off_scripts);
            $_defer_js = self::tryget($arroptions, self::$opt_defer_js, $_defer_js);
            $_defer_jquery = self::tryget($arroptions, self::$opt_defer_jquery, $_defer_jquery);
            $_ajax_save = self::tryget($arroptions, self::$opt_ajax_save, $_ajax_save);
            $_show_pointer = self::tryget($arroptions, self::$opt_show_pointer, $_show_pointer);
            $_onboarded = 0; // self::tryget($arroptions, self::$opt_onboarded, $_onboarded);
        }
        else
        {
            $_oldspacing = 0;
        }

        $all = array(
            self::$opt_version => self::$version,
            self::$opt_center => $_center,
            self::$opt_glance => $_glance,
            self::$opt_autoplay => $_autoplay,
            self::$opt_cc_load_policy => $_cc_load_policy,
            self::$opt_cc_lang_pref => $_cc_lang_pref,
            self::$opt_iv_load_policy => $_iv_load_policy,
            self::$opt_loop => $_loop,
            self::$opt_modestbranding => $_modestbranding,
            self::$opt_rel => $_rel,
            self::$opt_fs => $_fs,
            self::$opt_playsinline => $_playsinline,
            self::$opt_origin => $_origin,
            self::$opt_autohide => $_autohide,
            self::$opt_hl => $_hl,
            self::$opt_dohl => $_dohl,
            self::$opt_theme => $_theme,
            self::$opt_color => $_color,
            self::$opt_pro => $_pro,
            self::$opt_nocookie => $_nocookie,
            self::$opt_gb_compat => $_gb_compat,
            self::$opt_facade_mode => $_facade_mode,
            self::$opt_facade_autoplay => $_facade_autoplay,
            self::$opt_gdpr_consent => $_gdpr_consent,
            self::$opt_gdpr_consent_message => $_gdpr_consent_message,
            self::$opt_gdpr_consent_button => $_gdpr_consent_button,
            self::$opt_playlistorder => $_playlistorder,
            self::$opt_acctitle => $_acctitle,
            self::$opt_migrate => $_migrate,
            self::$opt_migrate_youtube => $_migrate_youtube,
            self::$opt_migrate_embedplusvideo => $_migrate_embedplusvideo,
            self::$opt_controls => $_controls,
            self::$opt_oldspacing => $_oldspacing,
            self::$opt_frontend_only => $_frontend_only,
            self::$opt_responsive => $_responsive,
            self::$opt_responsive_all => $_responsive_all,
            self::$opt_widgetfit => $_widgetfit,
            self::$opt_evselector_light => $_evselector_light,
            self::$opt_stop_mobile_buffer => $_stop_mobile_buffer,
            self::$opt_restrict_wizard => $_restrict_wizard,
            self::$opt_restrict_wizard_roles => $_restrict_wizard_roles,
            self::$opt_ajax_compat => $_ajax_compat,
            self::$opt_maxres_facade => $_maxres_facade,
            self::$opt_ytapi_load => $_ytapi_load,
            self::$opt_defaultdims => $_defaultdims,
            self::$opt_defaultwidth => $_defaultwidth,
            self::$opt_defaultheight => $_defaultheight,
            self::$opt_pause_others => $_pause_others,
            self::$opt_defaultvol => $_defaultvol,
            self::$opt_vol => $_vol,
            self::$opt_apikey => $_apikey,
            self::$opt_gallery_columns => $_gallery_columns,
            self::$opt_gallery_collapse_grid => $_gallery_collapse_grid,
            self::$opt_gallery_collapse_grid_breaks => $_gallery_collapse_grid_breaks,
            self::$opt_gallery_scrolloffset => $_gallery_scrolloffset,
            self::$opt_gallery_hideprivate => $_gallery_hideprivate,
            self::$opt_gallery_showtitle => $_gallery_showtitle,
            self::$opt_gallery_showpaging => $_gallery_showpaging,
            self::$opt_gallery_autonext => $_gallery_autonext,
            self::$opt_gallery_thumbplay => $_gallery_thumbplay,
            self::$opt_gallery_channelsub => $_gallery_channelsub,
            self::$opt_gallery_channelsublink => $_gallery_channelsublink,
            self::$opt_gallery_channelsubtext => $_gallery_channelsubtext,
            self::$opt_gallery_customarrows => $_gallery_customarrows,
            self::$opt_gallery_customnext => $_gallery_customnext,
            self::$opt_gallery_customprev => $_gallery_customprev,
            self::$opt_gallery_pagesize => $_gallery_pagesize,
            self::$opt_not_live_content => $_not_live_content,
            self::$opt_not_live_on => $_not_live_on,
            self::$opt_not_live_on_channel => $_not_live_on_channel,
            self::$opt_debugmode => $_debugmode,
            self::$opt_uninstall_data => $_uninstall_data,
            self::$opt_admin_off_scripts => $_admin_off_scripts,
            self::$opt_defer_js => $_defer_js,
            self::$opt_defer_jquery => $_defer_jquery,
            self::$opt_ajax_save => $_ajax_save,
            self::$opt_show_pointer => $_show_pointer,
            self::$opt_onboarded => $_onboarded,
            self::$opt_old_script_method => $_old_script_method
        );

        update_option(self::$opt_alloptions, $all);
        update_option('embed_autourls', 1);
        self::$alloptions = get_option(self::$opt_alloptions);
    }

    public static function tryget($array, $key, $default = null)
    {
        return isset($array[$key]) ? $array[$key] : $default;
    }

    public static function wp_above_version($ver)
    {
        global $wp_version;
        if (version_compare($wp_version, $ver, '>='))
        {
            return true;
        }
        return false;
    }

    public static function do_ytprefs()
    {
        //add_filter('autoptimize_filter_js_exclude', array(self::class, 'ao_override_jsexclude'), 10, 1);
        if (
                !is_admin() || (self::$alloptions[self::$opt_frontend_only] != 1)
        //|| (function_exists('wp_doing_ajax') && wp_doing_ajax())
        )
        {
            add_filter('the_content', array(self::class, 'apply_prefs_content'), 1);
            add_filter('widget_text', array(self::class, 'apply_prefs_widget'), 1);
            //add_filter('bjll/skip_classes', array(self::class, 'bjll_skip_classes'), 10, 2);

            add_filter('sgo_lazy_load_exclude_classes', array(self::class, 'exclude_lazy_sgo'));

            add_shortcode('embedyt', array(self::class, 'apply_prefs_shortcode'));
            if (self::$alloptions[self::$opt_migrate] == 1)
            {
                if (self::$alloptions[self::$opt_migrate_youtube] == 1)
                {
                    add_shortcode('youtube', array(self::class, 'apply_prefs_shortcode_youtube'));
                    add_shortcode('youtube_video', array(self::class, 'apply_prefs_shortcode_youtube'));
                }
                if (self::$alloptions[self::$opt_migrate_embedplusvideo] == 1)
                {
                    add_shortcode('embedplusvideo', array(self::class, 'apply_prefs_shortcode_embedplusvideo'));
                }
            }
        }

        if (self::$alloptions[self::$opt_defer_js] == 1)
        {
            add_filter('script_loader_tag', array(self::class, 'defer_scripts'), 10, 3);
        }
    }

    public static function ao_override_jsexclude($exclude)
    {
        if (strpos($exclude, 'ytprefs' . self::$min . '.js') === false)
        {
            return $exclude . ',ytprefs' . self::$min . '.js,__ytprefs__';
        }
        return $exclude;
    }

    public static function exclude_lazy_sgo($classes)
    {
        $classes[] = '__youtube_prefs__';
        return $classes;
    }

    public static function apply_prefs_shortcode($atts, $content = null)
    {
        $content = trim($content);
        $currfilter = current_filter();
        if (preg_match(self::$justurlregex, $content))
        {
            return self::get_html(array($content), strpos($currfilter, 'widget_text') === 0 ? false : true, false);
        }
        return '';
    }

    public static function apply_prefs_shortcode_youtube($atts, $content = null)
    {
        $content = 'https://www.youtube.com/watch?v=' . trim($content);
        $currfilter = current_filter();
        if (preg_match(self::$justurlregex, $content))
        {
            return self::get_html(array($content), $currfilter == 'widget_text' ? false : true, false);
        }
        return '';
    }

    public static function apply_prefs_shortcode_embedplusvideo($atts, $content = null)
    {
        $atts = shortcode_atts(array(
            "height" => self::$defaultheight,
            "width" => self::$defaultwidth,
            "vars" => "",
            "standard" => "",
            "id" => "ep" . rand(10000, 99999)
                ), $atts);

        $epvars = $atts['vars'];
        $epvars = preg_replace('/\s/', '', $epvars);
        $epvars = preg_replace('/¬/', '&not', $epvars);
        $epvars = str_replace('&amp;', '&', $epvars);

        $epparams = self::keyvalue($epvars, true);

        if (isset($epparams) && isset($epparams['ytid']))
        {
            $start = isset($epparams['start']) && is_numeric($epparams['start']) ? '&start=' . intval($epparams['start']) : '';
            $end = isset($epparams['end']) && is_numeric($epparams['end']) ? '&end=' . intval($epparams['end']) : '';
            $end = isset($epparams['stop']) && is_numeric($epparams['stop']) ? '&end=' . intval($epparams['stop']) : '';

            $url = 'https://www.youtube.com/watch?v=' . trim($epparams['ytid']) . $start . $end;

            $currfilter = current_filter();
            if (preg_match(self::$justurlregex, $url))
            {
                return self::get_html(array($url), $currfilter == 'widget_text' ? false : true, false);
            }
        }
        return '';
    }

    public static function apply_prefs_content($content)
    {
        $content = preg_replace_callback(self::$ytregex, array(self::class, "get_html_content"), $content);
        return $content;
    }

    public static function apply_prefs_widget($content)
    {
        $content = preg_replace_callback(self::$ytregex, array(self::class, "get_html_widget"), $content);
        return $content;
    }

    public static function get_html_content($m)
    {
        return self::get_html($m, true, true);
    }

    public static function get_html_widget($m)
    {
        return self::get_html($m, false, true);
    }

    public static function get_gallery_page($options)
    {
        $gallobj = new stdClass();

        $options->pageSize = min(intval($options->pageSize), 50);
        $options->columns = intval($options->columns) == 0 ? 3 : intval($options->columns);
        $options->showTitle = intval($options->showTitle);
        $options->showPaging = intval($options->showPaging);
        $options->autonext = intval($options->autonext);
        $options->thumbplay = intval($options->thumbplay);

        if (empty($options->apiKey))
        {
            $gallobj->html = '<div>Please enter your YouTube API key to embed galleries.</div>';
            return $gallobj;
        }

        $apiEndpoint = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet,status&playlistId=' . $options->playlistId
                . '&maxResults=' . $options->pageSize
                . '&key=' . $options->apiKey;
        if ($options->pageToken != null)
        {
            $apiEndpoint .= '&pageToken=' . $options->pageToken;
        }

        $code = '';
        $init_id = null;

        $apiResult = wp_remote_get($apiEndpoint, array('timeout' => self::$curltimeout, 'headers' => array('referer' => site_url())));

        if (is_wp_error($apiResult))
        {
            $gallobj->html = self::clean_api_error_html($apiResult->get_error_message(), true);
            return $gallobj;
        }

        if (self::$alloptions[self::$opt_debugmode] == 1 && current_user_can('manage_options'))
        {
            $redactedEndpoint = preg_replace('@&key=[^&]+@i', '&key=PRIVATE', $apiEndpoint);
            $active_plugins = get_option('active_plugins');
            $gallobj->html = '<pre onclick="_EPADashboard_.selectText(this);" class="epyt-debug">CLICK this debug text to auto-select all. Then, COPY the selection.' . "\n\n" .
                    'THIS IS DEBUG MODE OUTPUT. UNCHECK THE OPTION IN THE SETTINGS PAGE ONCE YOU ARE DONE DEBUGGING TO PUT THINGS BACK TO NORMAL.' . "\n\n" . $redactedEndpoint . "\n\n" . print_r($apiResult, true) . "\n\nActive Plugins\n\n" . print_r($active_plugins, true) . '</pre>';
            return $gallobj;
        }
        
        $jsonResult = json_decode($apiResult['body']);
        
        if (isset($jsonResult->error))
        {
            if (isset($jsonResult->error->message))
            {
                $gallobj->html = self::clean_api_error_html($jsonResult->error->message, true);
                return $gallobj;
            }
            $gallobj->html = '<div>Sorry, there may be an issue with your YouTube API key. ' . self::$boilerplate_api_error_message . '</div>';
            return $gallobj;
        }



        $resultsPerPage = $options->pageSize; // $jsonResult->pageInfo->resultsPerPage;
        $totalResults = $jsonResult->pageInfo->totalResults;

        $nextPageToken = '';
        $prevPageToken = '';
        if (isset($jsonResult->nextPageToken))
        {
            $nextPageToken = $jsonResult->nextPageToken;
        }

        if (isset($jsonResult->prevPageToken))
        {
            $prevPageToken = $jsonResult->prevPageToken;
        }

        $cnt = 0;
        $colclass = ' epyt-cols-' . $options->columns . ' ';
        $code .= '<div class="epyt-gallery-allthumbs ' . $colclass . '">';

        if (isset($jsonResult->items) && $jsonResult->items != null && is_array($jsonResult->items))
        {
            if (strpos($options->playlistId, 'UU') === 0)
            {
                // sort only channels
                usort($jsonResult->items, array(self::class, 'compare_vid_date')); // sorts in place                
            }

            foreach ($jsonResult->items as $item)
            {

                $thumb = new stdClass();

                $thumb->id = isset($item->snippet->resourceId->videoId) ? $item->snippet->resourceId->videoId : null;
                $thumb->id = $thumb->id ? $thumb->id : $item->id->videoId;
                $thumb->title = $options->showTitle ? $item->snippet->title : '';
                $thumb->privacyStatus = isset($item->status->privacyStatus) ? $item->status->privacyStatus : null;

                if ($thumb->privacyStatus == 'private' && self::$alloptions[self::$opt_gallery_hideprivate] == 1)
                {
                    continue;
                }

                if ($cnt == 0 && $options->pageToken == null)
                {
                    $init_id = $thumb->id;
                }

                if ($thumb->privacyStatus == 'private')
                {
                    $thumb->img = plugins_url('/images/private.png', __FILE__);
                    $thumb->quality = 'medium';
                }
                else
                {
                    if (isset($item->snippet->thumbnails->high->url))
                    {
                        $thumb->img = $item->snippet->thumbnails->high->url;
                        $thumb->quality = 'high';
                    }
                    elseif (isset($item->snippet->thumbnails->default->url))
                    {
                        $thumb->img = $item->snippet->thumbnails->default->url;
                        $thumb->quality = 'default';
                    }
                    elseif (isset($item->snippet->thumbnails->medium->url))
                    {
                        $thumb->img = $item->snippet->thumbnails->medium->url;
                        $thumb->quality = 'medium';
                    }
                    else
                    {
                        $thumb->img = plugins_url('/images/deleted-video-thumb.png', __FILE__);
                        $thumb->quality = 'medium';
                    }
                }

                $code .= self::get_thumbnail_html($thumb, $options);
                $cnt++;

                if ($cnt % $options->columns === 0)
                {
                    $code .= '<div class="epyt-gallery-rowbreak"></div>';
                }
            }
        }

        $code .= '<div class="epyt-gallery-clear"></div></div>';

        $totalPages = ceil($totalResults / $resultsPerPage);
        $pagination = '<div class="epyt-pagination ' . ($options->showPaging == 0 ? 'epyt-hide-pagination' : '') . '">';

        $txtprev = self::$alloptions[self::$opt_gallery_customarrows] ? self::$alloptions[self::$opt_gallery_customprev] : _('Prev');
        $pagination .= '<div tabindex="0" role="button" class="epyt-pagebutton epyt-prev ' . (empty($prevPageToken) ? ' hide ' : '') . '" data-playlistid="' . esc_attr($options->playlistId)
                . '" data-pagesize="' . intval($options->pageSize)
                . '" data-pagetoken="' . esc_attr($prevPageToken)
                . '" data-epcolumns="' . intval($options->columns)
                . '" data-showtitle="' . intval($options->showTitle)
                . '" data-showpaging="' . intval($options->showPaging)
                . '" data-autonext="' . intval($options->autonext)
                . '" data-thumbplay="' . intval($options->thumbplay)
                . '"><div class="epyt-arrow">&laquo;</div> <div>' . $txtprev . '</div></div>';


        $pagination .= '<div class="epyt-pagenumbers ' . ($totalPages > 1 ? '' : 'hide') . '">';
        $pagination .= '<div class="epyt-current">1</div><div class="epyt-pageseparator"> / </div><div class="epyt-totalpages">' . $totalPages . '</div>';
        $pagination .= '</div>';

        $txtnext = self::$alloptions[self::$opt_gallery_customarrows] ? self::$alloptions[self::$opt_gallery_customnext] : _('Next');
        $pagination .= '<div tabindex="0" role="button" class="epyt-pagebutton epyt-next' . (empty($nextPageToken) ? ' hide ' : '') . '" data-playlistid="' . esc_attr($options->playlistId)
                . '" data-pagesize="' . intval($options->pageSize)
                . '" data-pagetoken="' . esc_attr($nextPageToken)
                . '" data-epcolumns="' . intval($options->columns)
                . '" data-showtitle="' . intval($options->showTitle)
                . '" data-showpaging="' . intval($options->showPaging)
                . '" data-autonext="' . intval($options->autonext)
                . '" data-thumbplay="' . intval($options->thumbplay)
                . '"><div>' . $txtnext . '</div> <div class="epyt-arrow">&raquo;</div></div>';

        $pagination .= '<div class="epyt-loader"><img alt="loading" width="16" height="11" src="' . plugins_url('images/gallery-page-loader.gif', __FILE__) . '"></div>';
        $pagination .= '</div>';

//        if ($options->showPaging == 0)
//        {
//            $pagination = '<div class="epyt-pagination"></div>';
//        }
        $code = $pagination . $code . $pagination;
        $gallobj->html = $code;
        $gallobj->init_id = $init_id;
        return $gallobj;
    }

    public static function compare_vid_date($a, $b)
    {
        if ($a->snippet->publishedAt == $b->snippet->publishedAt)
        {
            return 0;
        }
        return ($a->snippet->publishedAt > $b->snippet->publishedAt) ? -1 : 1;
    }

    public static function get_thumbnail_html($thumb, $options)
    {
        $escId = esc_attr($thumb->id);
        $code = '';
        $code .= '<div tabindex="0" role="button" data-videoid="' . $escId . '" class="epyt-gallery-thumb">';

        $code .= (self::gdpr_mode() ? '<div class="epyt-gallery-img-box"><div class="epyt-gallery-img epyt-gallery-img-gdpr">' :
                        '<div class="epyt-gallery-img-box"><div class="epyt-gallery-img" style="background-image: url(' . esc_attr($thumb->img) . ')">') .
                '<div class="epyt-gallery-playhover"><img alt="play" class="epyt-play-img" width="30" height="23" src="' . plugins_url('images/playhover.png', __FILE__) . '" data-no-lazy="1" data-skipgform_ajax_framebjll="" /><div class="epyt-gallery-playcrutch"></div></div>' .
                '</div></div>';


        if (!empty($thumb->title))
        {
            $code .= '<div class="epyt-gallery-title">' . esc_html($thumb->title) . '</div>';
        }
        else
        {
            $code .= '<div class="epyt-gallery-notitle"><span>' . esc_html($thumb->title) . '</span></div>';
        }
        $code .= '</div>';
        return $code;
    }

    public static function my_embedplus_gallery_page()
    {
        if (self::is_ajax())
        {
            //check_ajax_referer('embedplus-nonce', 'security');
            $options = (object) $_POST['options'];
            $options->apiKey = self::$alloptions[self::$opt_apikey];
            echo self::get_gallery_page($options)->html;
            die();
        }
    }

    public static function get_html($m, $iscontent, $isoverride)
    {
        //$time_start = microtime(true);

        $link = trim(str_replace(self::$badentities, self::$goodliterals, $m[0]));

        $link = preg_replace('/\s/', '', $link);
        $linkparamstemp = explode('?', $link);

        $linkparams = array();
        if (count($linkparamstemp) > 1)
        {
            $linkparams = self::keyvalue($linkparamstemp[1], true);
        }
        if (strpos($linkparamstemp[0], 'youtu.be') !== false && !isset($linkparams['v']))
        {
            $vtemp = explode('/', $linkparamstemp[0]);
            $linkparams['v'] = array_pop($vtemp);
        }

        if (isset($linkparams['live']) && $linkparams['live'] == '1')
        {
            $live_error_msg = ' To embed live videos, please make sure you performed the <a href="https://www.youtube.com/watch?v=ZCfrNvu6nMc" target="_blank">steps in this video</a> to create and save a proper server API key.';
            if (isset(self::$alloptions[self::$opt_apikey]))
            {
                if (isset($linkparams['channel']))
                {
                    $linkparams['live_stream'] = 1;
                    if (false) // takes up too much quota;
                    {
                        try
                        {
                            $ytapilink_live = 'https://www.googleapis.com/youtube/v3/search?order=date&maxResults=1&type=video&eventType=live&safeSearch=none&videoEmbeddable=true&channelId=' . $linkparams['channel'] . '&part=snippet&key=' . self::$alloptions[self::$opt_apikey];
                            $apidata_live = wp_remote_get($ytapilink_live, array('timeout' => self::$curltimeout, 'headers' => array('referer' => site_url())));
                            if (!is_wp_error($apidata_live))
                            {
                                $raw = wp_remote_retrieve_body($apidata_live);
                                if (!empty($raw))
                                {
                                    $json = json_decode($raw, true);
                                    if (!isset($json['error']) && is_array($json) && count($json['items']))
                                    {
                                        $linkparams['v'] = $json['items'][0]['id']['videoId'];
                                    }
                                    else if (isset($json['error']))
                                    {
                                        return $live_error_msg; // . ' <em>(Error code ' . $json['error']->code . ': ' . $json['error']->message . ')</em>';
                                    }
                                }
                            }
                        }
                        catch (Exception $ex)
                        {
                            return $live_error_msg;
                        }
                    }
                }
                else if (isset($linkparams['v']))
                {
                    ////////////////////// process single video live stream
                    try
                    {
                        if (self::$alloptions[self::$opt_not_live_on])
                        {
                            // if not_live_content isn't being used, just process as a normal single video. otherwise: if not currently live (nor upcoming?), unset $linkparams['v']
                            $not_live_content = trim(htmlspecialchars_decode(wp_strip_all_tags(self::$alloptions[self::$opt_not_live_content], true), ENT_QUOTES));
                            if (!empty($not_live_content))
                            {
                                $ytapilink_live = 'https://www.googleapis.com/youtube/v3/videos?id=' . $linkparams['v'] . '&part=snippet&key=' . self::$alloptions[self::$opt_apikey];
                                $apidata_live = wp_remote_get($ytapilink_live, array('timeout' => self::$curltimeout, 'headers' => array('referer' => site_url())));
                                if (!is_wp_error($apidata_live))
                                {
                                    $raw = wp_remote_retrieve_body($apidata_live);
                                    if (!empty($raw))
                                    {
                                        $json = json_decode($raw, true);
                                        if (!isset($json['error']) && is_array($json) && count($json['items']))
                                        {
                                            if (isset($json['items'][0]['snippet']['liveBroadcastContent']) && $json['items'][0]['snippet']['liveBroadcastContent'] != 'live')
                                            {
                                                unset($linkparams['v']);
                                            }
                                        }
                                        else if (isset($json['error']))
                                        {
                                            return $live_error_msg; // . ' <em>(Error code ' . $json['error']->code . ': ' . $json['error']->message . ')</em>';
                                        }
                                    }
                                }
                            }
                        }
                    }
                    catch (Exception $ex)
                    {
                        return $live_error_msg;
                    }
                }
            }
            else
            {
                return $live_error_msg;
            }

            if (!isset($linkparams['v']) && !isset($linkparams['live_stream']))
            {
                return apply_filters('ytprefs_filter_the_content_light', wp_kses_post(self::$alloptions[self::$opt_not_live_content]));
            }
        }

        if (stripos($linkparamstemp[0], 'live_stream') !== false)
        {
            $linkparams['live_stream'] = 1;
        }

        $youtubebaseurl = 'youtube';
        $voloutput = '';
        $acctitle = '';
        $relstop = '';

        $finalparams = $linkparams + self::$alloptions;

        self::init_dimensions($link, $linkparams, $finalparams);

        if (self::$alloptions[self::$opt_nocookie] == 1)
        {
            $youtubebaseurl = 'youtube-nocookie';
        }

        if (self::$alloptions[self::$opt_defaultvol] == 1)
        {
            $voloutput = ' data-vol="' . self::$alloptions[self::$opt_vol] . '" ';
        }

        if (is_numeric(self::$alloptions[self::$opt_rel]) && intval(self::$alloptions[self::$opt_rel]) === -1)
        {
            $relstop = ' data-relstop="1" ';
        }

        if (!empty($finalparams[self::$opt_loop]))
        {
            $relstop = '';
        }

        if (self::$alloptions[self::$opt_dohl] == 1)
        {
            $locale = get_locale();
            $finalparams[self::$opt_hl] = $locale;
        }
        else
        {
            unset($finalparams[self::$opt_hl]);
        }

        $centercode = '';
        if ($finalparams[self::$opt_center] == 1)
        {
            $centercode = ' style="display: block; margin: 0px auto;" ';
        }

        if (self::$alloptions[self::$opt_acctitle] == 1)
        {
            try
            {
                //attr escape
                if (self::$oembeddata)
                {
                    $acctitle = self::$oembeddata->title;
                }
                else
                {

                    if (isset($linkparams['list']))
                    {
                        $odata = self::get_oembed('https://youtube.com/playlist?list=' . $linkparams['list'], 1920, 1280);
                        if (is_object($odata) && isset($odata->title))
                        {
                            $acctitle = $odata->title;
                        }
                    }
                    else if (isset($linkparams['v']))
                    {
                        $odata = self::get_oembed('https://youtube.com/watch?v=' . $linkparams['v'], 1920, 1280);
                        if (is_object($odata) && isset($odata->title))
                        {
                            $acctitle = $odata->title;
                        }
                    }
                }

                if ($acctitle)
                {
                    $acctitle = ' title="' . esc_attr($acctitle) . '" ';
                }
                else
                {
                    $acctitle = ' title="YouTube player" ';
                }
            }
            catch (Exception $e)
            {
                
            }
        }
        else
        {
            $acctitle = ' title="YouTube player" ';
        }

        // playlist cleanup
        $videoidoutput = isset($linkparams['v']) ? $linkparams['v'] : '';

        if ((self::$alloptions[self::$opt_playlistorder] == 1 || isset($finalparams['plindex'])) && isset($finalparams['list']))
        {
            try
            {
                $videoidoutput = '';
                if (isset($finalparams['plindex']))
                {
                    $finalparams['index'] = intval($finalparams['plindex']);
                }
            }
            catch (Exception $ex)
            {
                
            }
        }

        $galleryWrapper1 = '';
        $galleryWrapper2 = '';
        $galleryCode = '';
        $galleryid_ifm_data = '';
        if (isset($finalparams['layout']) && strtolower($finalparams['layout']) == 'gallery' && isset($finalparams['list']))
        {
            $gallery_options = new stdClass();
            $gallery_options->playlistId = $finalparams['list'];
            $gallery_options->pageToken = null;
            $gallery_options->pageSize = $finalparams[self::$opt_gallery_pagesize];
            $gallery_options->columns = intval($finalparams[self::$opt_gallery_columns]);
            $gallery_options->showTitle = intval($finalparams[self::$opt_gallery_showtitle]);
            $gallery_options->showPaging = intval($finalparams[self::$opt_gallery_showpaging]);
            $gallery_options->autonext = intval($finalparams[self::$opt_gallery_autonext]);
            $gallery_options->thumbplay = intval($finalparams[self::$opt_gallery_thumbplay]);
            $gallery_options->apiKey = self::$alloptions[self::$opt_apikey];

            $galleryid = 'epyt_gallery_' . rand(10000, 99999);
            $galleryid_ifm_data = ' data-epytgalleryid="' . $galleryid . '" ';

            $subbutton = '';
            if (isset($finalparams[self::$opt_gallery_channelsub]) && $finalparams[self::$opt_gallery_channelsub] == 1)
            {
                $subbutton = '<div class="epyt-gallery-subscribe"><a target="_blank" class="epyt-gallery-subbutton" href="' .
                        esc_url(self::$alloptions[self::$opt_gallery_channelsublink]) . '?sub_confirmation=1"><img alt="subscribe" src="' . plugins_url('images/play-subscribe.png', __FILE__) . '" />' .
                        htmlspecialchars(self::$alloptions[self::$opt_gallery_channelsubtext], ENT_QUOTES, 'UTF-8') . '</a></div>';
            }

            $gallery_page_obj = self::get_gallery_page($gallery_options);

            $galleryWrapper1 = '<div class="epyt-gallery" data-currpage="1" id="' . $galleryid . '">';
            $galleryWrapper2 = '</div>';
            $galleryCode = $subbutton . '<div class="epyt-gallery-list">' . $gallery_page_obj->html . '</div>';
            $videoidoutput = isset($gallery_page_obj->init_id) ? $gallery_page_obj->init_id : '';
        }

        if (!empty($voloutput) && isset($finalparams['autoplay']) && $finalparams['autoplay'] == 1)
        {
            $voloutput .= ' data-epautoplay="1" ';
            $finalparams['autoplay'] = 0;
        }

        if (!empty($relstop) && isset($finalparams['rel']) && intval($finalparams['rel']) === -1)
        {
            $finalparams['rel'] = 0;
        }

        if (!empty($finalparams['live_stream']))
        {
            $videoidoutput = 'live_stream';
        }

        $begin_responsive = '';
        $end_responsive = '';
        $dim_attrs = ' width="' . self::$defaultwidth . '" height="' . self::$defaultheight . '" ';
        if ($finalparams[self::$opt_responsive] == 1)
        {
            $begin_responsive = '<div class="epyt-video-wrapper">';
            $end_responsive = '</div>';
        }

        $begin_gb_wrapper = '';
        $end_gb_wrapper = '';
        if ($iscontent && !$isoverride && $finalparams[self::$opt_gb_compat] == 1 && current_theme_supports('responsive-embeds'))// self::using_gutenberg())
        {
            // don't do the following if: overriding default YT, is widget
            $begin_gb_wrapper = '<figure class="wp-block-embed wp-block-embed-youtube is-type-video is-provider-youtube epyt-figure"><div class="wp-block-embed__wrapper">';
            //wp-block-embed-youtube is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio
            $end_gb_wrapper = '</div></figure>';
        }
        $iframe_id = rand(10000, 99999);

        $code1 = $begin_gb_wrapper . $begin_responsive;
        $code_iframe1 = $code_iframe2 = '';
        if ($videoidoutput != 'live_stream' && $finalparams[self::$opt_facade_mode] == 1)
        {
            $facade_img_src = '';
            if (!empty($videoidoutput))
            {
                $facade_img_src = ' src="https://i.ytimg.com/vi/' . $videoidoutput . ($finalparams[self::$opt_maxres_facade] == 'eager' ? '/maxresdefault.jpg' : '/hqdefault.jpg') . '" ';
            }
            else if (isset($finalparams['list']))
            {
                $facade_img_src = ' data-facadeoembed="playlist?list=' . $finalparams['list'] . '" ';
            }
            $acctitle = str_replace('title="', 'alt="', $acctitle);
            $facade_autoplay = $finalparams[self::$opt_facade_autoplay] == 1 ? ' data-epautoplay="1" ' : '';
            $code_iframe1 = '<div ' . $centercode . ' id="_ytid_' . $iframe_id . '" ' . $dim_attrs . ' data-origwidth="' . self::$defaultwidth . '" data-origheight="' . self::$defaultheight . '" ' . $relstop .
                    'data-facadesrc="https://www.' . $youtubebaseurl . '.com/embed/' . $videoidoutput . '?';
            $code_iframe2 = '" class="__youtube_prefs__ epyt-facade' . (!empty($finalparams['live_stream']) ? ' epyt-live-channel ' : '') . ($iscontent ? '' : ' __youtube_prefs_widget__ ') . ($isoverride ? ' epyt-is-override ' : '') . ' no-lazyload"' .
                    $voloutput . $galleryid_ifm_data . $facade_autoplay . '><img data-spai-excluded="true" class="epyt-facade-poster skip-lazy" loading="lazy" ' . $acctitle . $facade_img_src . ' />' .
                    '<button class="epyt-facade-play" aria-label="Play"><svg data-no-lazy="1" height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg></button>' .
                    '</div>';
        }
        else
        {
            $code_iframe1 = '<iframe ' . $centercode . ' id="_ytid_' . $iframe_id . '" ' . $dim_attrs . ' data-origwidth="' . self::$defaultwidth . '" data-origheight="' . self::$defaultheight . '" ' . $relstop .
                    'src="https://www.' . $youtubebaseurl . '.com/embed/' . $videoidoutput . '?';
            $code_iframe2 = '" class="__youtube_prefs__ ' . (!empty($finalparams['live_stream']) ? ' epyt-live-channel ' : '') . ($iscontent ? '' : ' __youtube_prefs_widget__ ') . ($isoverride ? ' epyt-is-override ' : '') . ' no-lazyload"' .
                    $voloutput . $acctitle . $galleryid_ifm_data . ' allow="fullscreen; accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen data-no-lazy="1" data-skipgform_ajax_framebjll=""></iframe>';
        }

        $code2 = $end_responsive . $end_gb_wrapper;

        $code1 .= $code_iframe1;
        $code2 = $code_iframe2 . $code2;

        $origin = '';

        try
        {
            if (self::$alloptions[self::$opt_origin] == 1)
            {
                $url_parts = parse_url(site_url());
                $origin = 'origin=' . $url_parts['scheme'] . '://' . $url_parts['host'] . '&';
            }
        }
        catch (Exception $e)
        {
            $origin = '';
        }
        $finalsrc = (self::$alloptions[self::$opt_ytapi_load] == 'never' ? '' : 'enablejsapi=1&') . $origin;

        if (count($finalparams) > 1)
        {
            foreach ($finalparams as $key => $value)
            {
                if (in_array($key, self::$yt_options))
                {
                    if (!empty($galleryCode) && ($key == 'listType' || $key == 'list'))
                    {
                        
                    }
                    else
                    {
                        if (!((isset($finalparams['live']) || isset($finalparams['live_stream'])) && $key == 'loop')) // don't add loop for channel streaming
                        {
                            $finalsrc .= htmlspecialchars($key, ENT_QUOTES, 'UTF-8') . '=' . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . '&';
                            if ($key == 'loop' && $value == 1 && !isset($finalparams['list']))
                            {
                                $finalsrc .= 'playlist=' . $finalparams['v'] . '&';
                            }
                        }
                    }
                }
            }
        }

        if (self::gdpr_mode())
        {
            $code1 = '<div ' . $centercode . ' id="_ytid_' . rand(10000, 99999) . '"'; //'" width="' . self::$defaultwidth . '" height="' . self::$defaultheight . '" ';
            $code2 = ' class="__youtube_prefs__  __youtube_prefs_gdpr__ ' . ($iscontent ? '' : ' __youtube_prefs_widget__') . ($isoverride ? ' epyt-is-override ' : '') . '" allowfullscreen data-no-lazy="1" data-skipgform_ajax_framebjll="">' .
                    apply_filters('ytprefs_filter_the_content_light', wp_kses_post(self::$alloptions[self::$opt_gdpr_consent_message])) .
                    '<button type="button" class="__youtube_prefs_gdpr__">' . trim(sanitize_text_field(self::$alloptions[self::$opt_gdpr_consent_button])) .
                    '<img src="' . plugins_url('images/icon-check.png', __FILE__) . '" alt="accept" data-no-lazy="1" data-skipgform_ajax_framebjll="" /></button>' .
                    '</div>';
            $finalsrc = '';
        }

        $code = $galleryWrapper1 . $code1 . $finalsrc . $code2 . $galleryCode . $galleryWrapper2;
        //. '<!--' . $m[0] . '-->';
        self::$defaultheight = null;
        self::$defaultwidth = null;
        self::$oembeddata = null;

        return $code;
    }

    public static function using_gutenberg()
    {
        global $wp_version;
        if ((version_compare($wp_version, '5.0', '>=') && !is_plugin_active('classic-editor/classic-editor.php')) || is_plugin_active('gutenberg/gutenberg.php'))
        {
            return true;
        }
        return false;
    }

    public static function gdpr_mode()
    {
        return (bool) self::$alloptions[self::$opt_gdpr_consent] && filter_input(INPUT_COOKIE, self::$gdpr_cookie_name, FILTER_SANITIZE_NUMBER_INT) != 1;
    }

    public static function filter_the_content_light($content)
    {
        //global $wp_filter;
        //$the_content_filters_current = $wp_filter['the_content']->callbacks;

        for ($i = 0; $i < count(self::$the_content_filters); $i++)
        {
            if (function_exists(self::$the_content_filters[$i]) && !(self::wp_above_version('5.5') && self::$the_content_filters[$i] === 'wp_make_content_images_responsive'))
            {
                $content = call_user_func(self::$the_content_filters[$i], $content);
            }
        }
        return $content;
    }

    public static function debuglog($str)
    {
        $handle = fopen(__DIR__ . "\\debug.txt", "a+");
        fwrite($handle, $str);
        fclose($handle);            
    }

    public static function keyvalue($qry, $includev)
    {
        $ytvars = explode('&', $qry);
        $ytkvp = array();
        foreach ($ytvars as $k => $v)
        {
            $kvp = explode('=', $v);
            if (count($kvp) == 2 && ($includev || strtolower($kvp[0]) != 'v'))
            {
                $ytkvp[$kvp[0]] = $kvp[1];
            }
        }

        return $ytkvp;
    }

    public static function secondsToDuration($seconds)
    {
        $remaining = $seconds;
        $parts = array();
        $multipliers = array(
            'hours' => 3600,
            'minutes' => 60,
            'seconds' => 1
        );

        foreach ($multipliers as $type => $m)
        {
            $parts[$type] = (int) ($remaining / $m);
            $remaining -= ($parts[$type] * $m);
        }

        return $parts;
    }

    public static function formatDuration($parts)
    {
        $default = array(
            'hours' => 0,
            'minutes' => 0,
            'seconds' => 0
        );

        extract(array_merge($default, $parts));

        return "T{$hours}H{$minutes}M{$seconds}S";
    }

    public static function init_dimensions($url, $urlkvp, $finalparams)
    {
        // get default dimensions; try embed size in settings, then try theme's content width, then just 480px
        if (self::$defaultwidth == null)
        {
            global $content_width;
            if (empty($content_width))
            {
                $content_width = $GLOBALS['content_width'];
            }

            if (isset($urlkvp['width']) && is_numeric($urlkvp['width']))
            {
                self::$defaultwidth = $urlkvp['width'];
            }
            else if (self::$alloptions[self::$opt_defaultdims] == 1 && (isset(self::$alloptions[self::$opt_defaultwidth]) && is_numeric(self::$alloptions[self::$opt_defaultwidth])))
            {
                self::$defaultwidth = self::$alloptions[self::$opt_defaultwidth];
            }
            else if (self::$optembedwidth)
            {
                self::$defaultwidth = self::$optembedwidth;
            }
            else if ($content_width)
            {
                self::$defaultwidth = $content_width;
            }
            else
            {
                self::$defaultwidth = 480;
            }



            if (isset($urlkvp['height']) && is_numeric($urlkvp['height']))
            {
                self::$defaultheight = $urlkvp['height'];
            }
            else if (self::$alloptions[self::$opt_defaultdims] == 1 && (isset(self::$alloptions[self::$opt_defaultheight]) && is_numeric(self::$alloptions[self::$opt_defaultheight])))
            {
                self::$defaultheight = self::$alloptions[self::$opt_defaultheight];
            }
            else
            {
                self::$defaultheight = self::get_aspect_height($url, self::$defaultwidth);
            }
        }
    }

    public static function get_oembed($url, $height, $width)
    {
        if (stripos($url, 'listType=playlist') !== false && stripos($url, '/embed') !== false)
        {
            $url = str_replace('/embed', '/playlist', $url);
        }
        if (file_exists(ABSPATH . WPINC . '/class-wp-oembed.php'))
        {
            require_once(ABSPATH . WPINC . '/class-wp-oembed.php');
        }
        else
        {
            require_once(ABSPATH . WPINC . '/class-oembed.php');
        }
        $oembed = _wp_oembed_get_object();
        $args = array();
        $args['width'] = $width;
        $args['height'] = $height;
        $args['discover'] = false;
        self::$oembeddata = $oembed->fetch('https://www.youtube.com/oembed', $url, $args);
        return self::$oembeddata;
    }

    public static function get_aspect_height($url, $widthbox)
    {
        // attempt to get aspect ratio correct height from oEmbed
        $aspectheight = round(($widthbox * 9) / 16, 0);

        if ($url)
        {
            $odata = self::get_oembed($url, $widthbox, $widthbox);

            if ($odata)
            {
                $aspectheight = $odata->height;
            }
        }

        return $aspectheight;
    }

    public static function ytprefs_plugin_menu()
    {
        self::$admin_page_hooks[] = add_menu_page('EmbedPlus for YouTube Settings', 'EmbedPlus for YouTube', 'manage_options', 'youtube-my-preferences', array(self::class, 'ytprefs_show_options'), 'dashicons-video-alt3', '10.000392854349');
        self::$admin_page_hooks[] = add_submenu_page('youtube-my-preferences', '', '', 'manage_options', 'youtube-my-preferences', array(self::class, 'ytprefs_show_options'));

        self::$admin_page_hooks[] = add_submenu_page('youtube-my-preferences_nomenu', 'YouTube Posts', 'YouTube Posts', 'manage_options', 'youtube-ep-glance', array(self::class, 'glance_page'));
        self::$admin_page_hooks[] = self::$wizard_hook = add_submenu_page('youtube-my-preferences_nomenu', 'EmbedPlus for YouTube Wizard', 'Wizard', 'edit_posts', 'youtube-ep-wizard', array(self::class, 'wizard'));
        self::$admin_page_hooks[] = self::$onboarding_hook = add_submenu_page('youtube-my-preferences_nomenu', 'EmbedPlus for YouTube Setup', 'Setup', 'manage_options', 'youtube-ep-onboarding', array(self::class, 'ytprefs_show_onboarding'));
    }

    public static function custom_admin_pointers_check()
    {
        if (!self::$alloptions[self::$opt_show_pointer])
        {
            return false;
        }
        $admin_pointers = self::custom_admin_pointers();
        foreach ($admin_pointers as $pointer => $array)
        {
            if ($array['active'])
            {
                return true;
            }
        }
    }

    public static function glance_script()
    {
        add_thickbox();
        ?>
        <script type="text/javascript">
            function widen_ytprefs_glance()
            {
                setTimeout(function ()
                {
                    jQuery("#TB_window").animate({marginLeft: '-' + parseInt((780 / 2), 10) + 'px', width: '780px'}, 300);
                    jQuery("#TB_window iframe").animate({width: '780px'}, 300);
                }, 15);
            }

            (function ($j)
            {
                $j(document).ready(function ()
                {

                    $j.ajax({
                        type: "post",
                        dataType: "json",
                        timeout: 30000,
                        url: window._EPYTA_ ? window._EPYTA_.wpajaxurl : ajaxurl,
                        data: {action: 'my_embedplus_glance_count'},
                        success: function (response)
                        {
                            if (response.type === "success")
                            {
                                $j(response.container).append(response.data);
                                $j(".ytprefs_glance_button").on('click', widen_ytprefs_glance);
                                $j(window).on('resize', widen_ytprefs_glance);
                                if (typeof ep_do_pointers === 'function')
                                {
                                    //ep_do_pointers($j);
                                }
                            }
                            else
                            {
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError)
                        {

                        },
                        complete: function ()
                        {
                        }
                    });
                });
            })(jQuery);</script>
        <?php
    }

    public static function custom_admin_pointers_footer()
    {
        $admin_pointers = self::custom_admin_pointers();
        ?>
        <script type="text/javascript">
            /* <![CDATA[ */
            function ep_do_pointers($)
            {
        <?php
        foreach ($admin_pointers as $pointer => $array)
        {
            if ($array['active'])
            {
                ?>
                        $('<?php echo $array['anchor_id']; ?>').pointer({
                            pointerClass: 'wp-pointer ytprefs-pointer',
                            content: '<?php echo $array['content']; ?>',
                            position: {
                                edge: '<?php echo $array['edge']; ?>',
                                align: '<?php echo $array['align']; ?>'
                            },
                            close: function ()
                            {
                                $.post(window._EPYTA_ ? window._EPYTA_.wpajaxurl : ajaxurl, {
                                    pointer: '<?php echo $pointer; ?>',
                                    action: 'dismiss-wp-pointer'
                                });
                            }
                        }).pointer('open');
                <?php
            }
        }
        ?>
            }

            ep_do_pointers(jQuery); // switch off all pointers via js ooopointer
            /* ]]> */
        </script>
        <?php
    }

    public static function custom_admin_pointers()
    {
        $dismissed = explode(',', (string) get_user_meta(get_current_user_id(), 'dismissed_wp_pointers', true));
        $version = str_replace('.', '_', self::$version); // replace all periods in version with an underscore
        $prefix = 'custom_admin_pointers' . $version . '_';

        $new_pointer_content = '<h3>' . __('New Update') . '</h3>'; // ooopointer

        $new_pointer_content .= '<p>'; // ooopointer
        $new_pointer_content .= 'This version cleans up outdated code and is tested for WordPress 6.8 compatibility for both the free and <a target=_blank href="' . self::$epbase . '/dashboard/pro-easy-video-analytics.aspx?ref=frompointer">Pro</a> versions of the plugin.';
        if (!empty(self::$alloptions[self::$opt_pro]) && strlen(trim(self::$alloptions[self::$opt_pro])) > 0)
        {
            $new_pointer_content .= ' <strong>Important message to Pro users</strong>: From version 11.7 onward, you must <a href="https://www.embedplus.com/youtube-pro/download/?prokey=' . esc_attr(self::$alloptions[self::$opt_pro]) . '" target="_blank">download the separate plugin here</a> to regain your Pro features. All your settings will automatically migrate after installing the separate Pro download. Thank you for your support and patience during this transition.';
        }

        $new_pointer_content .= '</p>';

        return array(
            $prefix . 'new_items' => array(
                'content' => $new_pointer_content,
                'anchor_id' => 'a.toplevel_page_youtube-my-preferences', //'#ytprefs_glance_button', 
                'edge' => 'top',
                'align' => 'left',
                'active' => (!in_array($prefix . 'new_items', $dismissed))
            ),
        );
    }

    public static function postchecked($idx)
    {
        return isset($_POST[$idx]) && $_POST[$idx] == (true || 'on');
    }

    public static function settings_nav()
    {
        ?>

        <h3 class="nav-tab-wrapper">
            <a class="nav-tab nav-tab-active" href="#jumpdefaults">Defaults</a>
            <a class="nav-tab" href="#jumpapikey">API Key</a>
            <a class="nav-tab" href="#jumpwiz">Wizard</a>
            <a class="nav-tab" href="#jumpgallery">Galleries</a>
            <a class="nav-tab href-link" style="background-color: #daebf1;"  target="_blank" href="<?php echo self::$epbase . "/dashboard/pro-easy-video-analytics.aspx?ref=protab" ?>">Upgrade?</a>
            <a class="nav-tab" href="#jumpperformance">Performance</a>
            <a class="nav-tab" href="#jumpcompat">Compatibility</a>
            <a class="nav-tab" href="#jumpprivacy">Security & Privacy</a>
            <a class="nav-tab" href="#jumphowto">Embed Manually</a>
            <a class="nav-tab" href="#jumpsupport">Support</a>
        </h3>
        <?php
    }

    public static function ytprefs_show_options()
    {
        if (!current_user_can('manage_options'))
        {
            wp_die(__('You do not have sufficient permissions to access this page.'));
        }

        if (self::$double_plugin)
        {
            self::double_plugin_warning();
        }

        $ytprefs_submitted = 'ytprefs_submitted';

        // Read in existing option values from database

        $all = get_option(self::$opt_alloptions);

        // See if the user has posted us some information
        // If they did, this hidden field will be set to 'Y'
        if (isset($_POST[$ytprefs_submitted]) && $_POST[$ytprefs_submitted] == 'Y' && check_admin_referer('_epyt_save', '_epyt_nonce'))
        {
            $result = self::settings_save($all);
            $all = get_option(self::$opt_alloptions);
            ?>
            <div class="updated"><p><strong><?php echo wp_kses_post($result['message']) ?></strong></p></div>
            <?php
        }
        ?>

        <style type="text/css">
            .wrap {font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",Arial,sans-serif; color: #000000;}
            .wrap-ytprefs {max-width: 1064px;}
            h1 span {vertical-align: middle;}
            #ytform p, #ytform .p { line-height: 20px; margin: 18px 0; }
            .ytindent {padding: 0px 0px 0px 20px; font-size: 13px; margin-bottom: 100px;}
            .ytindent ul, .ytindent p {font-size: 13px;}
            .shadow {-webkit-box-shadow: 0px 0px 20px 0px #000000; box-shadow: 0px 0px 20px 0px #000000;}
            .gopro {margin: 0px;}
            .gopro img {vertical-align: middle;
                        width: 19px;
                        height: 19px;
                        padding-bottom: 4px;}
            .gopro li {margin-bottom: 0px;}
            .orange {color: #f85d00;}
            .bold {font-weight: bold;}
            .grey{color: #888888;}
            #goprobox {border-radius: 15px; padding: 10px 15px 15px 15px; border: 3px solid #CCE5EC; position: relative;}
            .pronon {font-weight: bold; color: #f85d00;}
            ul.reglist li {margin-left: 30px; list-style: disc outside none;}
            .procol {width: 475px; float: left;}
            .ytindent .procol ul {font-size: 12px;}
            .smallnote, .ytindent .smallnote {font-style: italic; font-size: 11px;}
            .italic {font-style: italic;}
            .ytindent h3 {font-size: 16px; line-height: 22px; margin: 5px 0px 10px 0px;}
            #wizleftlink {float: left; display: block; width: 240px; font-style: italic; text-align: center; text-decoration: none;}
            .button-primary {white-space: nowrap;}
            p.submit {margin: 10px 0 0 0; padding: 10px 0 5px 0;}
            .wp-core-ui p.submit .button-primary {
                font-weight: bold;
                font-size: 21px; height: 50px; padding: 0 20px 1px;
                background: #2ea2cc; /* Old browsers */
                background: -moz-linear-gradient(top,  #2ea2cc 0%, #007396 98%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#2ea2cc), color-stop(98%,#007396)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top,  #2ea2cc 0%,#007396 98%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top,  #2ea2cc 0%,#007396 98%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top,  #2ea2cc 0%,#007396 98%); /* IE10+ */
                background: linear-gradient(to bottom,  #2ea2cc 0%,#007396 98%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2ea2cc', endColorstr='#007396',GradientType=0 ); /* IE6-9 */
            }
            .wp-core-ui p.submit .button-primary[disabled] {
                opacity: .4;
                transition: opacity ease-in-out .3s;
            }
            .wp-core-ui p.submit .button-primary[disabled]:after {
                content: url(<?php echo admin_url('images/wpspin_light.gif') ?>);
                padding-left: 3px;
            }
            p.submit em {display: inline-block; padding-left: 20px; vertical-align: middle; width: 240px; margin-top: -6px;}
            #opt_pro {box-shadow: 0px 0px 5px 0px #1870D5; width: 320px;vertical-align: top;}
            #goprobox h3 {font-size: 14px;}
            .chx {border-left: 5px solid rgba(100, 100, 100,.1); margin-bottom: 20px;}
            .chx p {margin: 0px 0px 5px 0px;}
            .cuz {background-image: linear-gradient(to bottom,#4983FF,#0C5597) !important; color: #ffffff;}
            .brightpro {background-image: linear-gradient(to bottom,#ff5500,#cc2200) !important; color: #ffffff;}
            #boxdefaultdims {font-weight: bold; padding: 0px 10px; <?php echo $all[self::$opt_defaultdims] ? '' : 'display: none;' ?>}
            #boxcustomarrows {font-weight: bold; padding: 0px 10px; <?php echo $all[self::$opt_gallery_customarrows] ? 'display: block;' : 'display: none;' ?>}
            #boxchannelsub {font-weight: bold; padding: 0px 10px; <?php echo $all[self::$opt_gallery_channelsub] ? 'display: block;' : 'display: none;' ?>}
            #box_collapse_grid {font-weight: bold; padding: 0px 10px; <?php echo isset($all[self::$opt_gallery_collapse_grid]) && $all[self::$opt_gallery_collapse_grid] ? 'display: block;' : 'display: none;' ?>}
            #box_restrict_wizard {padding: 0px 10px; <?php echo isset($all[self::$opt_restrict_wizard]) && $all[self::$opt_restrict_wizard] ? 'display: block;' : 'display: none;' ?>}
            #box_restrict_wizard label {display: block; margin: 5px 10px;}
            .textinput {border-width: 2px !important;}
            input[type=text]::placeholder {font-weight: normal;}
            h3.sect {border-radius: 10px; background-color: #D9E9F7; padding: 5px 5px 5px 10px; position: relative; font-weight: bold;}
            h3.sect a {text-decoration: none; color: #E20000;}
            h3.sect a.button-primary {color: #ffffff;} 
            h4.sect {border-radius: 10px; background-color: #D9E9F7; padding: 5px 5px 5px 10px; position: relative; font-weight: bold;}

            .nav-tab-wrapper sup {line-height: 0;}
            .ytnav {margin-bottom: 15px;}
            .ytnav a {font-weight: bold; display: inline-block; padding: 5px 10px; margin: 0px 15px 0px 0px; border: 1px solid #cccccc; border-radius: 6px;
                      text-decoration: none; background-color: #ffffff;}
            .ytnav a:last-child {margin-right: 0;}
            .jumper {height: 25px;}
            .ssschema {float: right; width: 350px; height: auto; margin-right: 10px;}
            .ssfb {float: right; height: auto; margin-right: 10px; margin-left: 15px; margin-bottom: 10px;}
            .totop {position: absolute; right: 20px; top: 5px; color: #444444; font-size: 11px;}
            input[type=checkbox] {border: 1px solid #000000;}
            .chktitle {display: inline-block; padding: 1px 5px 1px 5px; border-radius: 3px; background-color: #ffffff; border: 1px solid #dddddd;}
            b, strong {font-weight: bold;}
            input.checkbox[disabled], input[type=radio][disabled] {border: 1px dashed #444444;}
            .pad10 {padding: 10px;}
            #boxdohl {font-weight: bold; padding: 0px 10px;  <?php echo $all[self::$opt_dohl] ? '' : 'display: none;' ?>}
            #boxdefaultvol {font-weight: bold; padding: 0px 10px;  <?php echo $all[self::$opt_defaultvol] ? '' : 'display: none;' ?>}
            .vol-output {display: none; width: 30px; color: #008800;}
            .vol-range {background-color: #dddddd; border-radius: 3px; cursor: pointer;}
            input#vol {vertical-align: middle;}
            .vol-seeslider {display: none;}
            .indent-option {margin-left: 25px;}
            #boxmigratelist { <?php echo $all[self::$opt_migrate] ? '' : 'display: none;' ?>}
            #boxresponsive_all { <?php echo $all[self::$opt_responsive] ? '' : 'display: none;' ?> padding-left: 25px; border-left: 5px solid rgba(100, 100, 100,.1); margin-left: 5px;}
            .apikey-video{margin-left: 3%; display: inline-block; width: 50%; position: relative; padding-top: 29%}
            .apikey-video iframe{display: block; width: 100%; height: 100%; position: absolute; top: 0; left: 0;}
            #boxnocookie {display: inline-block; border-radius: 3px; padding: 2px 4px 2px 4px; color: red;  <?php echo $all[self::$opt_nocookie] ? '' : 'display: none;' ?>}
            #boxapinever {display: none; color: red;}
            input[type="radio"]:checked ~ #boxapinever {display: block;}
            #box_facade_mode { color: red; <?php echo (bool) $all[self::$opt_facade_mode] ? 'display: block;' : 'display: none;' ?>}
            #box_gdpr_consent { color: red; <?php echo (bool) $all[self::$opt_gdpr_consent] ? 'display: block;' : 'display: none;' ?>}
            .strike {text-decoration: line-through;}
            .upgchecks { padding: 20px; border: 1px dotted #777777; background-color: #fcfcfc; }
            .clearboth {clear: both;}
            div.hr {clear: both; border-bottom: 1px dotted #A8BDD8; margin: 20px 0 20px 0;}
            .wp-pointer-buttons a.close {margin-top: 0 !important;}
            .pad20{padding: 20px 0 20px 0;}
            .ssgallery {float: right; width: 130px; height: auto; margin-left: 15px; border: 3px solid #ffffff;}
            .sssubscribe{display: block; width: 400px; height: auto;}
            .ssaltgallery {float: right; height: auto; margin-right: 10px; margin-left: 15px; margin-bottom: 10px; width: 350px;}
            .sspopupplayer {float: right; height: auto; margin-right: 10px; margin-left: 15px; margin-bottom: 10px; width: 350px;}
            .sshidethumbimg {float: right; height: auto; margin-right: 10px; margin-left: 40px; margin-bottom: 10px; width: 315px;}
            .sswizardbutton {    max-width: 70%; height: auto;}
            .save-changes-follow {position: fixed; z-index: 10000; bottom: 0; right: 0; background-color: #ffffff; padding: 0 20px; border-top-left-radius: 20px; border: 2px solid #aaaaaa; border-right-width: 0; border-bottom-width: 0;
                                  -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
                                  -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
                                  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75); }
            .alertify .ajs-body .ajs-content {line-height: 2.5em;}
            #jumpmonetize h2:first-child {margin-bottom: 0;}

            .wrap-ytprefs h2.nav-tab-wrapper {
                margin:22px 0 0 0;
            }

            .wrap-ytprefs h3 .nav-tab {
                padding: 5px 10px;
            }

            .wrap-ytprefs section {
                display:none;
                padding-top:15px;
            }
            .wrap-ytprefs section#jumpdefaults {
                display:block;
            }
            .wrap-ytprefs .no-js section {
                display: block;
            }

            .gdpr-options-left {
                width: 65%;
                float: left;
                clear: left;
            }

            .gdpr-options-right {
                width: 33%;
                float: right;
                margin-top: 20px;
            }

            .gdpr-options-right .img-gdpr-message {
                width: 100%;
                height: auto;
            }

            iframe#gdpr_consent_message_ifr {
                min-height: 250px !important;
            }

            section#jumpwiz hr {
                margin: 20px 0 20px 0;
            }
            .wiztab-screenshots {
                float: right;
                max-width: 50%;
                height: auto;
                clear: right;
                margin-left: 30px;
                margin-bottom: 15px;
                display: block;
                border: 5px solid #dddddd;
            }

            .epyt-deprecated {
                color: #aaaaaa;
            }

            input[type="checkbox"] + label .check-note {
                display: none;
            }

            input[type="checkbox"]:checked + label .check-note {
                display: inline;
            }

            .not-live-content {
                opacity: .3;
            }

            #not_live_on:checked ~ .not-live-content, #not_live_on_channel:checked ~ .not-live-content {
                opacity: 1;
            }

            #facade_mode ~ .box_facade_mode {
                opacity: .3;
            }

            #facade_mode:checked ~ .box_facade_mode {
                opacity: 1;
            }

            #defer_js ~ .box_defer_jquery {
                opacity: .3;
            }

            #defer_js:checked ~ .box_defer_jquery {
                opacity: 1;
            }

            .epyt-fitvid {
                width: 100%;
                padding-top: 56.25%;
                position: relative;
            }

            .epyt-fitvid iframe {
                position: absolute;
                top: 0;
                left:0;
                right: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
            }

            .wiztab-pagebuilder {
                width: 50%;
                float: left;
                padding: 20px;
                box-sizing: border-box;
            }

        </style>
        <div class="wrap wrap-ytprefs">
            <h1><span class="dashicons-before dashicons-video-alt3"></span> <?php echo __('EmbedPlus for YouTube Settings') ?></h1>
            <?php
            self::settings_nav();
            ?>

            <div class="ytindent">
                <form name="form1" method="post" action="" id="ytform">
                    <input type="hidden" name="<?php echo $ytprefs_submitted; ?>" value="Y">
                    <?php wp_nonce_field('_epyt_save', '_epyt_nonce', true); ?>
                    <section class="pattern" id="jumpapikey">
                        <h2>
                            YouTube API Key
                        </h2>
                        <p>
                            Some features (such as galleries, and some wizard features) now require you to create a free YouTube API key from Google.
                            The instructions for this are very specific, so we created a video for you that's hopefully easy to follow: <a href="https://www.embedplus.com/how-to-create-a-youtube-api-key.aspx" target="_blank">Click this link</a> and follow the steps on the page. Then save your API key below.
                        </p>
                        <p>
                            <b class="chktitle">YouTube API Key:</b> 
                            <input type="text" name="<?php echo self::$opt_apikey; ?>" id="<?php echo self::$opt_apikey; ?>" value="<?php echo esc_attr(trim($all[self::$opt_apikey])); ?>" class="textinput" style="width: 250px;">
                        </p>
                    </section>

                    <section class="pattern" id="jumpdefaults">
                        <h2>
                            <?php _e("Default YouTube Options") ?>
                        </h2>
                        <p>
                            <?php _e("One of the benefits of using this plugin is that you can set site-wide default options for all your videos (click \"Save Changes\" when finished). However, you can also override them (and more) on a per-video basis. Directions on how to do that are in the next tab.") ?>
                        </p>

                        <div class="ytindent chx">
                            <p>
                                <input name="<?php echo self::$opt_glance; ?>" id="<?php echo self::$opt_glance; ?>" <?php checked($all[self::$opt_glance], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_glance; ?>"><?php _e('<b class="chktitle">At a glance:</b> Show "At a Glance" Embed Links on the dashboard homepage.') ?></label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_center; ?>" id="<?php echo self::$opt_center; ?>" <?php checked($all[self::$opt_center], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_center; ?>"><?php _e('<b class="chktitle">Centering:</b> Automatically center all your videos (not necessary if all your videos span the whole width of your blog).') ?></label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_autoplay; ?>" id="<?php echo self::$opt_autoplay; ?>" <?php checked($all[self::$opt_autoplay], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_autoplay; ?>">
                                    <?php _e('<b class="chktitle">Autoplay:</b>  Automatically start playing your videos.') ?>
                                    <strong>Note:</strong> If you're embedding videos from your own monetized YouTube channel, we advise you to read YouTube's resource page on ads on embedded videos:
                                    <a href="https://support.google.com/youtube/answer/132596?hl=en" target="_blank">https://support.google.com/youtube/answer/132596?hl=en</a>
                                    You'll see that videos that you want to monetize "should be embedded using the standard click-to-play embed and NOT a scripted play."
                                    Unchecking this option guarantees standard click-to-play gallery embedding.
                                    (Another Note: Desktop browsers like <a href="https://developers.google.com/youtube/iframe_api_reference#Mobile_considerations" target="_blank">Chrome and Safari are moving towards preventing autoplay for any video</a>. But, your chances are improved if you set your videos to initially start muted.)
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_iv_load_policy; ?>" id="<?php echo self::$opt_iv_load_policy; ?>" <?php checked($all[self::$opt_iv_load_policy], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_iv_load_policy; ?>"><?php _e('<b class="chktitle">Annotations:</b> Show annotations by default.') ?></label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_loop; ?>" id="<?php echo self::$opt_loop; ?>" <?php checked($all[self::$opt_loop], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_loop; ?>"><?php _e('<b class="chktitle">Looping:</b> Loop all your videos. Note: this feature is incompatible with the "hide related videos" feature.') ?></label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_modestbranding; ?>" id="<?php echo self::$opt_modestbranding; ?>" <?php checked($all[self::$opt_modestbranding], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_modestbranding; ?>"><?php _e('<b class="chktitle">Modest Branding:</b> No YouTube logo will be shown on the control bar.  Instead, as required by YouTube, the logo will only show as a watermark when the video is paused/stopped.') ?></label>
                            </p>
                            <p>
                                <label>
                                    <b class="chktitle">Related Videos:</b>
                                    Show or hide related and recommended videos at the end of playback.
                                    <br>
                                </label>
                                <input type="radio" name="<?php echo self::$opt_rel; ?>" id="<?php echo self::$opt_rel; ?>-1" value="-1" <?php checked($all[self::$opt_rel], -1); ?>>
                                <label for="<?php echo self::$opt_rel; ?>-1">Hide related videos at the end of playback</label> &nbsp;&nbsp;
                                <input type="radio" name="<?php echo self::$opt_rel; ?>" id="<?php echo self::$opt_rel; ?>0" value="0" <?php checked($all[self::$opt_rel], 0); ?>>
                                <label for="<?php echo self::$opt_rel; ?>0">Show related videos only from the video's channel</label> &nbsp;&nbsp;
                                <input type="radio" name="<?php echo self::$opt_rel; ?>" id="<?php echo self::$opt_rel; ?>1" value="1" <?php checked($all[self::$opt_rel], 1); ?>>
                                <label for="<?php echo self::$opt_rel; ?>1">Show related videos</label> &nbsp;&nbsp;
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_fs; ?>" id="<?php echo self::$opt_fs; ?>" <?php checked($all[self::$opt_fs], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_fs; ?>"><?php _e('<b class="chktitle">Show Fullscreen Button:</b> Show the fullscreen button.') ?></label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_acctitle; ?>" id="<?php echo self::$opt_acctitle; ?>" <?php checked($all[self::$opt_acctitle], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_acctitle; ?>"><b class="chktitle">Accessible Title Attributes: </b> Improve accessibility by using title attributes for screen reader support. It should help your site pass functional accessibility evaluations (FAE). </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_color; ?>" id="<?php echo self::$opt_color; ?>" <?php checked($all[self::$opt_color], 'red'); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_color; ?>"><?php _e('<b class="chktitle">Red Progress Bar:</b> Use the red progress bar (uncheck to use a white progress bar). Note: Using white will disable the modestbranding option.') ?></label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_defaultdims; ?>" id="<?php echo self::$opt_defaultdims; ?>" <?php checked($all[self::$opt_defaultdims], 1); ?> type="checkbox" class="checkbox">                        
                                <span id="boxdefaultdims">
                                    Width: <input type="number" min="200" name="<?php echo self::$opt_defaultwidth; ?>" id="<?php echo self::$opt_defaultwidth; ?>" value="<?php echo esc_attr(trim($all[self::$opt_defaultwidth])); ?>" class="textinput" style="width: 75px;"> &nbsp;
                                    Height: <input type="number" min="200" name="<?php echo self::$opt_defaultheight; ?>" id="<?php echo self::$opt_defaultheight; ?>" value="<?php echo esc_attr(trim($all[self::$opt_defaultheight])); ?>" class="textinput" style="width: 75px;">
                                </span>

                                <label for="<?php echo self::$opt_defaultdims; ?>"><?php _e('<b class="chktitle">Default Dimensions:</b> Make your videos have a default size, for better loading performance and consistency. Recommended: 800 x 450 (NOTE: If responsive sizing is also turned on, your videos will be responsive but also keep this aspect ratio.). Also, according to YouTube guidelines, the player must be a minimum of 200 x 200 (or recommended 480 x 270 for 16:9 ratio players) in order to display correctly.') ?></label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_responsive; ?>" id="<?php echo self::$opt_responsive; ?>" <?php checked($all[self::$opt_responsive], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_responsive; ?>"><?php _e('<b class="chktitle">Responsive Video Sizing:</b> Make your videos responsive so that they dynamically fit in all screen sizes (smart phone, PC and tablet). NOTE: While this is checked, any custom hardcoded widths and heights you may have set will dynamically change too. <b>Uncheck this if your theme already properly handles responsive video sizing.</b>') ?></label>
                            <div id="boxresponsive_all">
                                <input type="radio" name="<?php echo self::$opt_responsive_all; ?>" id="<?php echo self::$opt_responsive_all; ?>1" value="1" <?php checked($all[self::$opt_responsive_all], 1); ?> >
                                <label for="<?php echo self::$opt_responsive_all; ?>1">Responsive for all YouTube videos</label> &nbsp;&nbsp;
                                <input type="radio" name="<?php echo self::$opt_responsive_all; ?>" id="<?php echo self::$opt_responsive_all; ?>0" value="0" <?php checked($all[self::$opt_responsive_all], 0); ?> >
                                <label for="<?php echo self::$opt_responsive_all; ?>0">Responsive for only videos embedded via this plugin</label>
                            </div>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_widgetfit; ?>" id="<?php echo self::$opt_widgetfit; ?>" <?php checked($all[self::$opt_widgetfit], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_widgetfit; ?>"><?php _e('<b class="chktitle">Autofit Widget Videos:</b> Make each video that you embed in a widget area automatically fit the width of its container.') ?></label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_playsinline; ?>" id="<?php echo self::$opt_playsinline; ?>" <?php checked($all[self::$opt_playsinline], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_playsinline; ?>">
                                    <b class="chktitle">iOS Playback:</b> Check this to allow your embeds to play inline within your page when viewed on iOS (iPhone and iPad) browsers. Uncheck it to have iOS launch your embeds in fullscreen instead.
                                    <em>Disclaimer: YouTube/Google has issues with this iOS related parameter, but we are providing it here in the event that they support it consistently.</em>
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_controls; ?>" id="<?php echo self::$opt_controls; ?>" <?php checked($all[self::$opt_controls], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_controls; ?>"><b class="chktitle">Show Controls:</b> Show the player's control bar. Unchecking this option creates a cleaner look but limits what your viewers can control (play position, volume, etc.).</label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_defaultvol; ?>" id="<?php echo self::$opt_defaultvol; ?>" <?php checked($all[self::$opt_defaultvol], 1); ?> type="checkbox" class="checkbox">                        
                                <label for="<?php echo self::$opt_defaultvol; ?>">
                                    <b class="chktitle">Volume Initialization: </b>
                                    Set an initial volume level for all of your embedded videos.  Check this and you'll see a <span class="vol-seeslider">slider</span> <span class="vol-seetextbox">textbox</span> for setting the start volume to a value between 0 (mute) and 100 (max) percent.  Leaving it unchecked means you want the visitor's default behavior.  This feature is experimental and is less predictable on a page with more than one embed. Read more about why you might want to <a href="<?php echo self::$epbase ?>/mute-volume-youtube-wordpress.aspx" target="_blank">initialize YouTube embed volume here &raquo;</a>
                                </label>
                                <span id="boxdefaultvol">
                                    Volume: <span class="vol-output"></span> <input min="0" max="100" step="1" type="text" name="<?php echo self::$opt_vol; ?>" id="<?php echo self::$opt_vol; ?>" value="<?php echo esc_attr(trim($all[self::$opt_vol])); ?>" >
                                </span>
                            </p>

                            <p>
                                <input name="<?php echo self::$opt_pause_others; ?>" id="<?php echo self::$opt_pause_others; ?>" <?php checked($all[self::$opt_pause_others], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_pause_others; ?>">
                                    <b class="chktitle"><?php _e('Simultaneous Playback Control:', 'youtube-embed-plus'); ?></b>
                                    <?php _e('You can enable/disable the ability for visitors to have separate videos running at the same time on the same page. Check this to automatically pause other players while the current player is playing. (Note: this feature is not guaranteed to work with videos embedded from other plugins).', 'youtube-embed-plus'); ?>
                                </label>
                            </p>

                            <p>
                                <input name="<?php echo self::$opt_cc_load_policy; ?>" id="<?php echo self::$opt_cc_load_policy; ?>" <?php checked($all[self::$opt_cc_load_policy], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_cc_load_policy; ?>"><?php _e('<b class="chktitle">Closed Captions:</b> Turn on closed captions by default.') ?></label>
                            </p>
                            <?php
                            $lang_codes = [
                                ["Abkhazian", "аҧсуа бызшәа, аҧсшәа", "ab", "abk", "abk"],
                                ["Afar", "Afaraf", "aa", "aar", "aar"],
                                ["Afrikaans", "Afrikaans", "af", "afr", "afr"],
                                ["Akan", "Akan", "ak", "aka", "aka"],
                                ["Albanian", "Shqip", "sq", "sqi", "alb"],
                                ["Amharic", "አማርኛ", "am", "amh", "amh"],
                                ["Arabic", "العربية", "ar", "ara", "ara"],
                                ["Aragonese", "aragonés", "an", "arg", "arg"],
                                ["Armenian", "Հայերեն", "hy", "hye", "arm"],
                                ["Assamese", "অসমীয়া", "as", "asm", "asm"],
                                ["Avaric", "авар мацӀ, магӀарул мацӀ", "av", "ava", "ava"],
                                ["Avestan", "avesta", "ae", "ave", "ave"],
                                ["Aymara", "aymar aru", "ay", "aym", "aym"],
                                ["Azerbaijani", "azərbaycan dili", "az", "aze", "aze"],
                                ["Bambara", "bamanankan", "bm", "bam", "bam"],
                                ["Bashkir", "башҡорт теле", "ba", "bak", "bak"],
                                ["Basque", "euskara, euskera", "eu", "eus", "baq"],
                                ["Belarusian", "беларуская мова", "be", "bel", "bel"],
                                ["Bengali", "বাংলা", "bn", "ben", "ben"],
                                ["Bihari languages", "भोजपुरी", "bh", "bih", "bih"],
                                ["Bislama", "Bislama", "bi", "bis", "bis"],
                                ["Bosnian", "bosanski jezik", "bs", "bos", "bos"],
                                ["Breton", "brezhoneg", "br", "bre", "bre"],
                                ["Bulgarian", "български език", "bg", "bul", "bul"],
                                ["Burmese", "ဗမာစာ", "my", "mya", "bur"],
                                ["Catalan, Valencian", "català, valencià", "ca", "cat", "cat"],
                                ["Chamorro", "Chamoru", "ch", "cha", "cha"],
                                ["Chechen", "нохчийн мотт", "ce", "che", "che"],
                                ["Chichewa, Chewa, Nyanja", "chiCheŵa, chinyanja", "ny", "nya", "nya"],
                                ["Chinese", "中文 (Zhōngwén), 汉语, 漢語", "zh", "zho", "chi"],
                                ["Chuvash", "чӑваш чӗлхи", "cv", "chv", "chv"],
                                ["Cornish", "Kernewek", "kw", "cor", "cor"],
                                ["Corsican", "corsu, lingua corsa", "co", "cos", "cos"],
                                ["Cree", "ᓀᐦᐃᔭᐍᐏᐣ", "cr", "cre", "cre"],
                                ["Croatian", "hrvatski jezik", "hr", "hrv", "hrv"],
                                ["Czech", "čeština, český jazyk", "cs", "ces", "cze"],
                                ["Danish", "dansk", "da", "dan", "dan"],
                                ["Divehi, Dhivehi, Maldivian", "ދިވެހި", "dv", "div", "div"],
                                ["Dutch, Flemish", "Nederlands, Vlaams", "nl", "nld", "dut"],
                                ["Dzongkha", "རྫོང་ཁ", "dz", "dzo", "dzo"],
                                ["English", "English", "en", "eng", "eng"],
                                ["Esperanto", "Esperanto", "eo", "epo", "epo"],
                                ["Estonian", "eesti, eesti keel", "et", "est", "est"],
                                ["Ewe", "Eʋegbe", "ee", "ewe", "ewe"],
                                ["Faroese", "føroyskt", "fo", "fao", "fao"],
                                ["Fijian", "vosa Vakaviti", "fj", "fij", "fij"],
                                ["Finnish", "suomi, suomen kieli", "fi", "fin", "fin"],
                                ["French", "français, langue française", "fr", "fra", "fre"],
                                ["Fulah", "Fulfulde, Pulaar, Pular", "ff", "ful", "ful"],
                                ["Galician", "Galego", "gl", "glg", "glg"],
                                ["Georgian", "ქართული", "ka", "kat", "geo"],
                                ["German", "Deutsch", "de", "deu", "ger"],
                                ["Greek, Modern (1453–)", "ελληνικά", "el", "ell", "gre"],
                                ["Guarani", "Avañe'ẽ", "gn", "grn", "grn"],
                                ["Gujarati", "ગુજરાતી", "gu", "guj", "guj"],
                                ["Haitian, Haitian Creole", "Kreyòl ayisyen", "ht", "hat", "hat"],
                                ["Hausa", "(Hausa) هَوُسَ", "ha", "hau", "hau"],
                                ["Hebrew", "עברית", "he", "heb", "heb"],
                                ["Herero", "Otjiherero", "hz", "her", "her"],
                                ["Hindi", "हिन्दी, हिंदी", "hi", "hin", "hin"],
                                ["Hiri Motu", "Hiri Motu", "ho", "hmo", "hmo"],
                                ["Hungarian", "magyar", "hu", "hun", "hun"],
                                ["Interlingua (International Auxiliary Language Association)", "Interlingua", "ia", "ina", "ina"],
                                ["Indonesian", "Bahasa Indonesia", "id", "ind", "ind"],
                                ["Interlingue, Occidental", "(originally:) Occidental, (after WWII:) Interlingue", "ie", "ile", "ile"],
                                ["Irish", "Gaeilge", "ga", "gle", "gle"],
                                ["Igbo", "Asụsụ Igbo", "ig", "ibo", "ibo"],
                                ["Inupiaq", "Iñupiaq, Iñupiatun", "ik", "ipk", "ipk"],
                                ["Ido", "Ido", "io", "ido", "ido"],
                                ["Icelandic", "Íslenska", "is", "isl", "ice"],
                                ["Italian", "Italiano", "it", "ita", "ita"],
                                ["Inuktitut", "ᐃᓄᒃᑎᑐᑦ", "iu", "iku", "iku"],
                                ["Japanese", "日本語 (にほんご)", "ja", "jpn", "jpn"],
                                ["Javanese", "ꦧꦱꦗꦮ, Basa Jawa", "jv", "jav", "jav"],
                                ["Kalaallisut, Greenlandic", "kalaallisut, kalaallit oqaasii", "kl", "kal", "kal"],
                                ["Kannada", "ಕನ್ನಡ", "kn", "kan", "kan"],
                                ["Kanuri", "Kanuri", "kr", "kau", "kau"],
                                ["Kashmiri", "कश्मीरी, كشميري‎", "ks", "kas", "kas"],
                                ["Kazakh", "қазақ тілі", "kk", "kaz", "kaz"],
                                ["Central Khmer", "ខ្មែរ, ខេមរភាសា, ភាសាខ្មែរ", "km", "khm", "khm"],
                                ["Kikuyu, Gikuyu", "Gĩkũyũ", "ki", "kik", "kik"],
                                ["Kinyarwanda", "Ikinyarwanda", "rw", "kin", "kin"],
                                ["Kirghiz, Kyrgyz", "Кыргызча, Кыргыз тили", "ky", "kir", "kir"],
                                ["Komi", "коми кыв", "kv", "kom", "kom"],
                                ["Kongo", "Kikongo", "kg", "kon", "kon"],
                                ["Korean", "한국어", "ko", "kor", "kor"],
                                ["Kurdish", "Kurdî, کوردی‎", "ku", "kur", "kur"],
                                ["Kuanyama, Kwanyama", "Kuanyama", "kj", "kua", "kua"],
                                ["Latin", "latine, lingua latina", "la", "lat", "lat"],
                                ["Luxembourgish, Letzeburgesch", "Lëtzebuergesch", "lb", "ltz", "ltz"],
                                ["Ganda", "Luganda", "lg", "lug", "lug"],
                                ["Limburgan, Limburger, Limburgish", "Limburgs", "li", "lim", "lim"],
                                ["Lingala", "Lingála", "ln", "lin", "lin"],
                                ["Lao", "ພາສາລາວ", "lo", "lao", "lao"],
                                ["Lithuanian", "lietuvių kalba", "lt", "lit", "lit"],
                                ["Luba-Katanga", "Kiluba", "lu", "lub", "lub"],
                                ["Latvian", "latviešu valoda", "lv", "lav", "lav"],
                                ["Manx", "Gaelg, Gailck", "gv", "glv", "glv"],
                                ["Macedonian", "македонски јазик", "mk", "mkd", "mac"],
                                ["Malagasy", "fiteny malagasy", "mg", "mlg", "mlg"],
                                ["Malay", "Bahasa Melayu, بهاس ملايو‎", "ms", "msa", "may"],
                                ["Malayalam", "മലയാളം", "ml", "mal", "mal"],
                                ["Maltese", "Malti", "mt", "mlt", "mlt"],
                                ["Maori", "te reo Māori", "mi", "mri", "mao"],
                                ["Marathi", "मराठी", "mr", "mar", "mar"],
                                ["Marshallese", "Kajin M̧ajeļ", "mh", "mah", "mah"],
                                ["Mongolian", "Монгол хэл", "mn", "mon", "mon"],
                                ["Nauru", "Dorerin Naoero", "na", "nau", "nau"],
                                ["Navajo, Navaho", "Diné bizaad", "nv", "nav", "nav"],
                                ["North Ndebele", "isiNdebele", "nd", "nde", "nde"],
                                ["Nepali", "नेपाली", "ne", "nep", "nep"],
                                ["Ndonga", "Owambo", "ng", "ndo", "ndo"],
                                ["Norwegian Bokmål", "Norsk Bokmål", "nb", "nob", "nob"],
                                ["Norwegian Nynorsk", "Norsk Nynorsk", "nn", "nno", "nno"],
                                ["Norwegian", "Norsk", "no", "nor", "nor"],
                                ["Sichuan Yi, Nuosu", "ꆈꌠ꒿ Nuosuhxop", "ii", "iii", "iii"],
                                ["South Ndebele", "isiNdebele", "nr", "nbl", "nbl"],
                                ["Occitan", "occitan, lenga d'òc", "oc", "oci", "oci"],
                                ["Ojibwa", "ᐊᓂᔑᓈᐯᒧᐎᓐ", "oj", "oji", "oji"],
                                ["Church Slavic, Old Slavonic, Church Slavonic, Old Bulgarian, Old Church Slavonic", "ѩзыкъ словѣньскъ", "cu", "chu", "chu"],
                                ["Oromo", "Afaan Oromoo", "om", "orm", "orm"],
                                ["Oriya", "ଓଡ଼ିଆ", "or", "ori", "ori"],
                                ["Ossetian, Ossetic", "ирон æвзаг", "os", "oss", "oss"],
                                ["Punjabi, Panjabi", "ਪੰਜਾਬੀ, پنجابی‎", "pa", "pan", "pan"],
                                ["Pali", "पालि, पाळि", "pi", "pli", "pli"],
                                ["Persian", "فارسی", "fa", "fas", "per"],
                                ["Polish", "język polski, polszczyzna", "pl", "pol", "pol"],
                                ["Pashto, Pushto", "پښتو", "ps", "pus", "pus"],
                                ["Portuguese", "Português", "pt", "por", "por"],
                                ["Quechua", "Runa Simi, Kichwa", "qu", "que", "que"],
                                ["Romansh", "Rumantsch Grischun", "rm", "roh", "roh"],
                                ["Rundi", "Ikirundi", "rn", "run", "run"],
                                ["Romanian, Moldavian, Moldovan", "Română", "ro", "ron", "rum"],
                                ["Russian", "русский", "ru", "rus", "rus"],
                                ["Sanskrit", "संस्कृतम्", "sa", "san", "san"],
                                ["Sardinian", "sardu", "sc", "srd", "srd"],
                                ["Sindhi", "सिन्धी, سنڌي، سندھی‎", "sd", "snd", "snd"],
                                ["Northern Sami", "Davvisámegiella", "se", "sme", "sme"],
                                ["Samoan", "gagana fa'a Samoa", "sm", "smo", "smo"],
                                ["Sango", "yângâ tî sängö", "sg", "sag", "sag"],
                                ["Serbian", "српски језик", "sr", "srp", "srp"],
                                ["Gaelic, Scottish Gaelic", "Gàidhlig", "gd", "gla", "gla"],
                                ["Shona", "chiShona", "sn", "sna", "sna"],
                                ["Sinhala, Sinhalese", "සිංහල", "si", "sin", "sin"],
                                ["Slovak", "Slovenčina, Slovenský Jazyk", "sk", "slk", "slo"],
                                ["Slovenian", "Slovenski Jezik, Slovenščina", "sl", "slv", "slv"],
                                ["Somali", "Soomaaliga, af Soomaali", "so", "som", "som"],
                                ["Southern Sotho", "Sesotho", "st", "sot", "sot"],
                                ["Spanish, Castilian", "Español", "es", "spa", "spa"],
                                ["Sundanese", "Basa Sunda", "su", "sun", "sun"],
                                ["Swahili", "Kiswahili", "sw", "swa", "swa"],
                                ["Swati", "SiSwati", "ss", "ssw", "ssw"],
                                ["Swedish", "Svenska", "sv", "swe", "swe"],
                                ["Tamil", "தமிழ்", "ta", "tam", "tam"],
                                ["Telugu", "తెలుగు", "te", "tel", "tel"],
                                ["Tajik", "тоҷикӣ, toçikī, تاجیکی‎", "tg", "tgk", "tgk"],
                                ["Thai", "ไทย", "th", "tha", "tha"],
                                ["Tigrinya", "ትግርኛ", "ti", "tir", "tir"],
                                ["Tibetan", "བོད་ཡིག", "bo", "bod", "tib"],
                                ["Turkmen", "Türkmen, Түркмен", "tk", "tuk", "tuk"],
                                ["Tagalog", "Wikang Tagalog", "tl", "tgl", "tgl"],
                                ["Tswana", "Setswana", "tn", "tsn", "tsn"],
                                ["Tonga (Tonga Islands)", "Faka Tonga", "to", "ton", "ton"],
                                ["Turkish", "Türkçe", "tr", "tur", "tur"],
                                ["Tsonga", "Xitsonga", "ts", "tso", "tso"],
                                ["Tatar", "татар теле, tatar tele", "tt", "tat", "tat"],
                                ["Twi", "Twi", "tw", "twi", "twi"],
                                ["Tahitian", "Reo Tahiti", "ty", "tah", "tah"],
                                ["Uighur, Uyghur", "ئۇيغۇرچە‎, Uyghurche", "ug", "uig", "uig"],
                                ["Ukrainian", "Українська", "uk", "ukr", "ukr"],
                                ["Urdu", "اردو", "ur", "urd", "urd"],
                                ["Uzbek", "Oʻzbek, Ўзбек, أۇزبېك‎", "uz", "uzb", "uzb"],
                                ["Venda", "Tshivenḓa", "ve", "ven", "ven"],
                                ["Vietnamese", "Tiếng Việt", "vi", "vie", "vie"],
                                ["Volapük", "Volapük", "vo", "vol", "vol"],
                                ["Walloon", "Walon", "wa", "wln", "wln"],
                                ["Welsh", "Cymraeg", "cy", "cym", "wel"],
                                ["Wolof", "Wollof", "wo", "wol", "wol"],
                                ["Western Frisian", "Frysk", "fy", "fry", "fry"],
                                ["Xhosa", "isiXhosa", "xh", "xho", "xho"],
                                ["Yiddish", "ייִדיש", "yi", "yid", "yid"],
                                ["Yoruba", "Yorùbá", "yo", "yor", "yor"],
                                ["Zhuang, Chuang", "Saɯ cueŋƅ, Saw cuengh", "za", "zha", "zha"],
                                ["Zulu", "isiZulu", "zu", "zul", "zul"]
                            ];

                            $selected_val = trim($all[self::$opt_cc_lang_pref]);
                            ?>
                            <p>
                                <label for="<?php echo self::$opt_cc_lang_pref; ?>"><b class="chktitle">Closed Captions Language:</b></label>
                                <select name="<?php echo self::$opt_cc_lang_pref; ?>" id="<?php echo self::$opt_cc_lang_pref; ?>" style="width: 260px;">                                    
                                    <option <?php echo '' == $selected_val ? 'selected' : '' ?> value="">Default/Unspecified</option>
                                    <?php
                                    foreach ($lang_codes as $idx => $lang_row)
                                    {
                                        $iso_code = $lang_row[2];
                                        $iso_label = $lang_row[0] . ' - ' . $lang_row[1];
                                        ?>
                                        <option <?php echo $iso_code == $selected_val ? 'selected' : '' ?> value="<?php echo $iso_code ?>"><?php echo $iso_label ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                Select the preferred default language for closed captions (when available).
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_dohl; ?>" id="<?php echo self::$opt_dohl; ?>" <?php checked($all[self::$opt_dohl], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_dohl; ?>"><b class="chktitle">Player Localization / Internationalization: </b>
                                    Automatically detect your site's default language (using get_locale) and set your YouTube embeds interface language so that it matches. Specifically, this will set the player's tooltips and caption track if your language is natively supported by YouTube. We suggest checking this if English is not your site's default language.  <a href="<?php echo self::$epbase ?>/youtube-iso-639-1-language-codes.aspx" target="_blank">See here for more details &raquo;</a></label>
                            </p>                    
                            <p>
                                <input name="<?php echo self::$opt_playlistorder; ?>" id="<?php echo self::$opt_playlistorder; ?>" <?php checked($all[self::$opt_playlistorder], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_playlistorder; ?>">
                                    <b class="chktitle">Self-contained Playlist Ordering:</b> 
                                    Note: This option does <strong class="orange">NOT</strong> apply to galleries. It applies only to these kinds of <em>self-contained playlists</em> (Example: <a target="_blank" href="https://www.youtube.com/watch?v=J50PlRZHH9I&t=3m20s">https://www.youtube.com/watch?v=J50PlRZHH9I&t=3m20s</a>).
                                    If you're trying to control the order of a <em>gallery</em> instead, then you must be the owner of the playlist, go to YouTube.com, and reorder it there. This plugin can only order a <em>gallery</em> the way the owner ordered the source playlist.
                                    Check this option if you just want your <em>self-contained playlists</em> to begin with the latest added video by default. (Unchecking this will force playlists to always start with your selected specific video, even if you add videos to the playlist later).
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_onboarded; ?>" id="<?php echo self::$opt_onboarded; ?>" <?php checked($all[self::$opt_onboarded], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_onboarded; ?>">
                                    <b class="chktitle">Hide Quick Setup Guide:</b>
                                    Check this to hide the installation setup wizard when this page loads.
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_show_pointer; ?>" id="<?php echo self::$opt_show_pointer; ?>" <?php checked($all[self::$opt_show_pointer], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_show_pointer; ?>">
                                    <b class="chktitle">Show New Feature Notice:</b>
                                    Show admin notice of new plugin features after updates.
                                </label>
                            </p>
                            <div id="not_live_content_scroll" class="p">
                                <p>
                                    <b class="chktitle">Use "Not Live" Fallback Content For Live Streams:</b> (<a href="<?php echo self::$epbase ?>/how-to-embed-a-youtube-livestream-in-wordpress.aspx" target="_blank">More info here</a>)
                                    This feature lets you display alternate content if your live stream is not currently active. This feature works for <strong>direct link</strong> live streams 
                                    (more info about channel-based live streams below).
                                </p>
                                <div class="ytindent chx">
                                    <input name="<?php echo self::$opt_not_live_on; ?>" id="<?php echo self::$opt_not_live_on; ?>" <?php checked($all[self::$opt_not_live_on], 1); ?> type="checkbox" class="checkbox">
                                    <label for="<?php echo self::$opt_not_live_on; ?>"><span class="chktitle">Turn on for <b>direct link</b> live streams:</span>
                                        When your direct-link embed is not streaming live, the YouTube live player usually displays a countdown after the user clicks the play button.
                                        Instead of showing that player, you can display some "coming soon" content in that space for your visitors to see until your video begins to live stream. 
                                        The plugin will automatically switch to your video's live stream once it's active. In the <em>"Not Live" Fallback Content</em> box below, enter what you would like to appear until then.
                                        You can even insert shortcodes from our plugin into the box below (shortcodes from other plugins may or may not work correctly).
                                        If you just want to show the standard countdown player that YouTube provides, don't use this feature.
                                        <strong>NOTE: Turning this on for direct-link live streams uses a significant amount of your YouTube API quota. We suggest unchecking it if your site has high traffic. If you chose to use this feature, do <u>not</u> put another live stream embed below.</strong>
                                    </label>
                                    <br>
                                    <br>
                                    <input disabled id="<?php echo self::$opt_not_live_on_channel; ?>" type="checkbox" class="checkbox">
                                    <label><span class="chktitle">Turn on for <b>channel</b> live streams: <sup class="orange">upgrade required</sup></span> 
                                        Unfortunately, Google has recently removed their YouTube API feature that used to support channel-based live streams. It appears they won't change things back. However, you do have a couple of choices:
                                        <ol>
                                            <li>Use "Direct link" live streams, as explained above. The trade-off is that you will have to manually post and take down your future live streams every time they start and when they end, respectively.</li>
                                            <li>Or <a href="<?php echo self::$epbase ?>/dashboard/pro-easy-video-analytics.aspx" target="_blank">upgrade to Pro</a>, which has a solution that brings back all the "set it and forget it" features of channel-based embeds. We spent a significant amount of time developing a stable, long-term solution around YouTube's limitations, so we are releasing this effort exclusively to our Pro customers.</li>
                                        </ol>
                                    </label>
                                    <div class="p not-live-content">
                                        <p>                                            
                                            <b>"Not Live" Fallback Content:</b>
                                        </p>
                                        <?php
                                        wp_editor(wp_kses_post($all[self::$opt_not_live_content]), self::$opt_not_live_content, array('textarea_rows' => 7));
                                        ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="pattern" id="jumpprivacy">                            
                        <h2>Security Options</h2>
                        <p>
                            <input name="<?php echo self::$opt_restrict_wizard; ?>" id="<?php echo self::$opt_restrict_wizard; ?>" <?php checked($all[self::$opt_restrict_wizard], 1); ?> type="checkbox" class="checkbox">
                            <label for="<?php echo self::$opt_restrict_wizard; ?>">
                                <b class="chktitle">Restrict Wizard Button:</b> Select which roles can use the EmbedPlus for YouTube wizard button. For example, you may wish to hide the button from contributors submitting content on the front end.
                            </label>
                            <br>
                            <span id="box_restrict_wizard" class="chx">
                                <?php
                                foreach (self::$dft_roles as $idx => $role)
                                {
                                    ?>
                                    <label>
                                        <input type="checkbox" name="<?php echo self::$opt_restrict_wizard_roles . '[]' ?>" value="<?php echo esc_attr($role) ?>" <?php echo in_array($role, $all[self::$opt_restrict_wizard_roles]) ? 'checked' : '' ?>>
                                        <?php echo esc_html(ucfirst($role)); ?>s
                                    </label>
                                    <?php
                                }
                                ?>
                            </span>
                        </p>
                        <p>
                            <input name="<?php echo self::$opt_origin; ?>" id="<?php echo self::$opt_origin; ?>" <?php checked($all[self::$opt_origin], 1); ?> type="checkbox" class="checkbox">
                            <label for="<?php echo self::$opt_origin; ?>"><b class="chktitle">Extra Player Security: </b>
                                Add site origin information with each embed code as an extra security measure. In YouTube's/Google's own words, checking this option "protects against malicious third-party JavaScript being injected into your page and hijacking control of your YouTube player." We especially recommend checking it as it adds higher security than the built-in YouTube embedding method that comes with the current version of WordPress (i.e. oembed).
                            </label>
                        </p>                        

                        <h2>Privacy Options</h2>
                        <p>These options may help with privacy restrictions such as GDPR and the EU Cookie Law.</p>
                        <div class="ytindent chx">
                            <p>
                                <b class="chktitle">YouTube API Loading:</b> Choose when to load the YouTube API. The "Restricted" or "Never" options will help with GDPR compliance:
                            <ul class="indent-option">
                                <li><label><input type="radio" name="<?php echo self::$opt_ytapi_load ?>" value="light" <?php checked($all[self::$opt_ytapi_load], 'light'); ?> /> <em>Restricted</em> - (Recommended) Only load the API on pages that have a YouTube video.</label></li>
                                <li><label>
                                        <input type="radio" name="<?php echo self::$opt_ytapi_load ?>" value="never" <?php checked($all[self::$opt_ytapi_load], 'never'); ?> /> <em>Never</em> - Do not load the YouTube API. Note: The "Never" choice may break a few features such as Volume Initialization and Gallery Continuous/Auto Play.
                                        <div id="boxapinever">
                                            Note: Checking this option may break some features such as the ones listed below:
                                            <ul class="list-ul">
                                                <li>Galleries</li>
                                                <li>Hide related videos at the end of playback</li>
                                                <li>Volume initialization</li>
                                                <li>Simultaneous playback control</li>
                                                <li>Playing video on mobile devices</li>
                                            </ul>
                                        </div>
                                    </label></li>
                                <li><label><input type="radio" name="<?php echo self::$opt_ytapi_load ?>" value="always" <?php checked($all[self::$opt_ytapi_load], 'always'); ?> /> <em>Always</em> - Load the API on all pages. In most cases, the "Always" choice is not necessary.</label></li>
                            </ul>
                            </p>


                            <p>
                                <input name="<?php echo self::$opt_gdpr_consent; ?>" id="<?php echo self::$opt_gdpr_consent; ?>" <?php checked($all[self::$opt_gdpr_consent], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_gdpr_consent; ?>">
                                    <b class="chktitle">Privacy/GDPR - Show Consent Message:</b> Ask for consent before loading YouTube content. A message will be displayed in place of the YouTube video, as shown in the screenshot below. Once the visitor approves consent, the YouTube content will load. You can customize the message text and the button text in the next 2 options.
                                    See this feature demonstrated in <a href="https://www.youtube.com/watch?v=lm_HIic6obw" target="_blank">this video</a>.
                                </label>
                                <span id="box_gdpr_consent">
                                    Note: If your visitors click a red accept button but your site doesn't reveal the video, you probably have a caching plugin. There should be a setting in your caching plugin to prevent caching the consent cookie. The name of the consent cookie is: <code>ytprefs_gdpr_consent</code>
                                </span>
                            </p>

                            <p>
                                <label for="<?php echo self::$opt_gdpr_consent_message; ?>">
                                    <b class="chktitle">Privacy/GDPR - Consent Message Text:</b>
                                    Below you can customize the message that will appear to visitors before they accept YouTube content:
                                </label>
                            <div class="clearboth"></div>
                            <div class="gdpr-options-left">
                                <?php
                                wp_editor(wp_kses_post($all[self::$opt_gdpr_consent_message]), self::$opt_gdpr_consent_message, array(
                                    'textarea_rows' => 22,
                                    'media_buttons' => false,
                                    'teeny' => true
                                ));
                                ?> 
                            </div>
                            <div class="gdpr-options-right">
                                <p><em>Example of message and button:</em></p>

                                <img src="<?php echo plugins_url('images/ss-gdpr-message.png', __FILE__) ?>" alt="GDPR Consent Message Example" class="img-gdpr-message" />
                            </div>

                            </p>
                            <div class="clearboth"></div>
                            <p>
                                <label for="<?php echo self::$opt_gdpr_consent_button; ?>">
                                    <b class="chktitle">Privacy/GDPR - Consent Button Text:</b>
                                    This is the text for the red "Accept" button that appears with the above privacy/GDPR message:
                                </label>
                                <br>
                                <input type="text" placeholder="Example: Accept YouTube Content" name="<?php echo self::$opt_gdpr_consent_button; ?>" id="<?php echo self::$opt_gdpr_consent_button; ?>" value="<?php echo esc_attr(trim($all[self::$opt_gdpr_consent_button])); ?>" class="textinput regular-text"/>
                            </p>

                            <p>
                                <input name="<?php echo self::$opt_nocookie; ?>" id="<?php echo self::$opt_nocookie; ?>" <?php checked($all[self::$opt_nocookie], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_nocookie; ?>">
                                    <b class="chktitle">No Cookies:</b> Prevent YouTube from leaving tracking cookies on your visitors browsers unless they actual play the videos. This is coded to apply this behavior on links in your past post as well.
                                    <div id="boxnocookie">
                                        Note: Checking this option may introduce issues to features that depend YouTube's API, such as the ones listed below. We suggest testing them out to make sure you are still pleased with the results:
                                        <ul class="list-ul">
                                            <li>Galleries</li>
                                            <li>Hide related videos at the end of playback</li>
                                            <li>Volume initialization</li>
                                            <li>Simultaneous playback control</li>
                                            <li>Playing video on mobile devices</li>
                                        </ul>
                                    </div>
                                </label>
                            </p>
                        </div>
                    </section>

                    <section class="pattern" id="jumpwiz">
                        <h2>Visual YouTube Wizard Directions</h2>
                        <p>
                            While you're writing your post or page, you have the ability to search YouTube and insert videos, playlists, and even galleries right from your editor. Below are directions for each type of WordPress editor.
                            For <strong>pagebuilder instructions</strong>, scroll down to the "Pagebuilder Tips" section.
                        </p>
                        <h3>Classic Editor</h3>
                        <img class="wiztab-screenshots" src="<?php echo plugins_url('images/ss-wiz-classic.png', __FILE__) ?>">
                        <p>
                            Simply click the EmbedPlus for YouTube wizard button found above 
                            your post editor to start the wizard (see image to the right to locate this button).  There, you'll have several options for different types of embeds.
                            Each embed code will have an "Insert Into Editor" button that you can click to directly embed the desired video link to your post without having to copy and paste.
                        </p>
                        <hr class="clearboth">
                        <h3>Widgets</h3>
                        <img class="wiztab-screenshots" src="<?php echo plugins_url('images/ss-wiz-widget.png', __FILE__) ?>">
                        <p>
                            To insert a video in a widget area, use the Text widget that comes with WordPress. Simply click the EmbedPlus for YouTube wizard button found above 
                            the widget textbox to start the wizard (see image to the right to locate this button).  There, you'll have several options for different types of embeds.
                            Each embed code will have an "Insert Into Editor" button that you can click to directly embed the desired video link to your post without having to copy and paste.
                        </p>
                        <hr class="clearboth"/>
                        <h3>Gutenberg Block Editor</h3>
                        <img class="wiztab-screenshots" src="<?php echo plugins_url('images/ss-wiz-gbblock.png', __FILE__) ?>">
                        <p>
                            Click on the (+) sign for the block editor list. The EmbedPlus for YouTube Wizard block is located under the "Embeds" category (make sure you choose "YouTube <strong>Wizard</strong>" not "YouTube").
                            Then your page will show a placeholder where you can launch the wizard. In the wizard, you'll have several options for different types of embeds.
                            Each embed code will have an "Insert Into Editor" button that you can click to directly embed the desired video link to your post without having to copy and paste.
                            You'll also be able to preview and interact with your embed without having to view the page on the front end.
                        </p>
                        <hr class="clearboth"/>
                        <h3>Gutenberg Classic Block</h3>
                        <img class="wiztab-screenshots" src="<?php echo plugins_url('images/ss-wiz-gbclassicblock.png', __FILE__) ?>">
                        <p>
                            Are you using Gutenberg but not quite ready to start using all the blocks? Well, you can still access our wizard if you wish to continue using Gutenberg's Classic block.
                            The Classic block brings back the former editor you used before WordPress, and so we've added a button to it you can use to launch the wizard (see example on the right).
                            Simply click the  wizard button to start the wizard. There, you'll have several options for different types of embeds.
                            Each embed code will have an "Insert Into Editor" button that you can click to directly embed the desired video link to your post without having to copy and paste.
                        </p>
                        <hr class="clearboth"/>
                        <h3>Pro Customization</h3>
                        <img class="wiztab-screenshots" src="<?php echo plugins_url('images/ssprowizard.png', __FILE__) ?>">
                        <p>
                            <a href="<?php echo self::$epbase ?>/dashboard/pro-easy-video-analytics.aspx?ref=wizdirections" target="_blank"><b>Even more options are available to PRO users, no matter which editor you choose!</b></a>
                            Simply click the "Customize" button in the wizard to further personalize each of your embeds without having to manually add special codes yourself. 
                            The customize button will allow you to easily override most of the above default options for that embed.
                        </p>
                        <hr class="clearboth"/>
                        <h2 id="jumppagebuilder">Pagebuilder Tips</h2>
                        <p>
                            Most page builders have a text widget in which our plugin's wizard can be launched.  Watch the videos below for  some popular ones, namely Elementor, Beaver Builder, and SiteOrigin.
                        </p>
                        <p>
                            <em>Note: Please do not check the "Also Defer jQuery" option if you use a pagebuilder. Some pagebuilders cannot work if jQuery is deferred.</em>
                        </p>
                        <div class="wiztab-pagebuilder">
                            <h3>Beaver Builder</h3>
                            <div class="epyt-fitvid">
                                <iframe src="https://www.youtube.com/embed/bPgz0jyt7TE?rel=0" allowfullscreen="" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="wiztab-pagebuilder">
                            <h3>Elementor</h3>
                            <div class="epyt-fitvid">
                                <iframe src="https://www.youtube.com/embed/ldNfIGRTxDU?rel=0" allowfullscreen="" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="wiztab-pagebuilder">
                            <h3>Site Origin</h3>
                            <div class="epyt-fitvid">
                                <iframe src="https://www.youtube.com/embed/7QNYw_g-7WM?rel=0" allowfullscreen="" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="wiztab-pagebuilder">
                            <h3>Visual Composer</h3>
                            <div class="epyt-fitvid">
                                <iframe src="https://www.youtube.com/embed/FWBQc9XhAqM?rel=0" allowfullscreen="" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="wiztab-pagebuilder">
                            <h3>WPBakery</h3>
                            <div class="epyt-fitvid">
                                <iframe src="https://www.youtube.com/embed/7T5wPoEujN8?rel=0" allowfullscreen="" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="wiztab-pagebuilder">
                            <p>
                                If you don't see your page builder listed above, don't worry. For pretty much any page builder with a short code widget, you can also embed your video, gallery, live stream, or premiere by creating the short code using the plugin's wizard and then embedding the code in the short code widget or text widget of your page builder of choice.
                            </p>
                        </div>
                    </section>

                    <section class="pattern" id="jumpgallery">
                        <h2>Gallery Settings and Directions</h2>
                        <img class="ssgallery" src="<?php echo plugins_url('images/ssgallery.png', __FILE__) ?>">
                        <p>
                            <a target="_blank" href="<?php echo self::$epbase ?>/responsive-youtube-playlist-channel-gallery-for-wordpress.aspx">You can now make playlist embeds (and channel-playlist embeds) have a gallery layout &raquo;</a>. <strong>First, you must obtain your YouTube API key</strong>. 
                            Don't worry, it's an easy process. Just <a href="https://www.youtube.com/watch?v=ZCfrNvu6nMc" target="_blank">click this link &raquo;</a> and follow the video on that page to get your server API key. Since Google updates their API Key generation directions frequently, follow the general steps shown in the video.
                            Then paste your API key in the "API Key" tab, and click the "Save Changes" button.
                        </p>

                        <p>
                            Below are the global settings for galleries. If you want each of your galleries to have custom settings, <a href="<?php echo self::$epbase ?>/dashboard/pro-easy-video-analytics.aspx?ref=galleryglobal" target="_blank">go PRO</a> for more options:
                        </p>
                        <div class="ytindent chx">

                            <p>
                                <label for="<?php echo self::$opt_gallery_pagesize; ?>"><b class="chktitle">Gallery Page Size:</b></label>
                                <select name="<?php echo self::$opt_gallery_pagesize; ?>" id="<?php echo self::$opt_gallery_pagesize; ?>" style="width: 60px;">
                                    <?php
                                    $gps_val = intval(trim($all[self::$opt_gallery_pagesize]));
                                    $gps_val = min($gps_val, 50);
                                    for ($gps = 1; $gps <= 50; $gps++)
                                    {
                                        ?><option <?php echo $gps_val == $gps ? 'selected' : '' ?> value="<?php echo $gps ?>"><?php echo $gps ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                Enter how many thumbnails per page should be shown at once (YouTube allows a maximum of 50 per page).
                            </p>
                            <p>
                                <label for="<?php echo self::$opt_gallery_columns; ?>"><b class="chktitle">Number of Columns:</b></label>
                                <input name="<?php echo self::$opt_gallery_columns; ?>" min="1" id="<?php echo self::$opt_gallery_columns; ?>" type="number" class="textinput" style="width: 60px;" value="<?php echo esc_attr(trim($all[self::$opt_gallery_columns])); ?>">                        
                                Enter how many thumbnails can fit per row.
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_gallery_collapse_grid; ?>" id="<?php echo self::$opt_gallery_collapse_grid; ?>" <?php checked($all[self::$opt_gallery_collapse_grid], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_gallery_collapse_grid; ?>">
                                    <b class="chktitle">Stack Thumbnails for Mobile:</b> Check this option to responsively stack thumbnails on smaller screens, for the grid layout.
                                </label>
                                <span id="box_collapse_grid">
                                    <?php
                                    foreach ($all[self::$opt_gallery_collapse_grid_breaks] as $idx => $bpts)
                                    {
                                        ?>
                                        On screens up to
                                        <input type="number" name="<?php echo self::$opt_gallery_collapse_grid_breaks . '[' . $idx . '][bp][max]'; ?>"
                                               id="<?php echo self::$opt_gallery_collapse_grid_breaks . '[' . $idx . '][bp][max]'; ?>" 
                                               value="<?php echo intval(trim($bpts['bp']['max'])); ?>" class="textinput" style="width: 70px;">px wide, stack thumbnails to 1 column.
                                        <input type="hidden" name="<?php echo self::$opt_gallery_collapse_grid_breaks . '[' . $idx . '][cols]'; ?>"
                                               id="<?php echo self::$opt_gallery_collapse_grid_breaks . '[' . $idx . '][cols]'; ?>"
                                               value="<?php echo intval(trim($bpts['cols'])); ?>">
                                        <input type="hidden" name="<?php echo self::$opt_gallery_collapse_grid_breaks . '[' . $idx . '][bp][min]'; ?>"
                                               id="<?php echo self::$opt_gallery_collapse_grid_breaks . '[' . $idx . '][bp][min]'; ?>"
                                               value="<?php echo intval(trim($bpts['bp']['min'])); ?>">
                                               <?php
                                           }
                                           ?>
                                    <span class="smallnote grey pad20"><br>Note: a common mobile screen width is 767 pixels.</span>
                                </span>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_gallery_showpaging; ?>" id="<?php echo self::$opt_gallery_showpaging; ?>" <?php checked($all[self::$opt_gallery_showpaging], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_gallery_showpaging; ?>"><b class="chktitle">Show Pagination:</b> Show the Next/Previous buttons and page numbering.
                                    It might be useful to hide pagination if you want your gallery to display just a subset of videos from a playlist or channel.  That is, only the first page of videos (defined by your page size) will be visible to your visitors if these buttons are hidden.
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_gallery_customarrows; ?>" id="<?php echo self::$opt_gallery_customarrows; ?>" <?php checked($all[self::$opt_gallery_customarrows], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_gallery_customarrows; ?>">
                                    <b class="chktitle">Custom Next/Previous Text:</b> If you want your gallery viewers to see something besides "Next" and "Prev" when browsing through thumbnails, enter your replacement text here. This feature can be quite useful for non-English sites.  For example, a French site might replace Prev with Pr&eacute;c&eacute;dent  and Next with Suivant.
                                </label>
                                <span id="boxcustomarrows">
                                    Previous Page: <input type="text" name="<?php echo self::$opt_gallery_customprev; ?>" id="<?php echo self::$opt_gallery_customprev; ?>" value="<?php echo esc_attr(trim($all[self::$opt_gallery_customprev])); ?>" class="textinput" style="width: 100px;"> &nbsp;
                                    Next Page: <input type="text" name="<?php echo self::$opt_gallery_customnext; ?>" id="<?php echo self::$opt_gallery_customnext; ?>" value="<?php echo esc_attr(trim($all[self::$opt_gallery_customnext])); ?>" class="textinput" style="width: 100px;">
                                </span>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_gallery_channelsub; ?>" id="<?php echo self::$opt_gallery_channelsub; ?>" <?php checked($all[self::$opt_gallery_channelsub], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_gallery_channelsub; ?>">
                                    <b class="chktitle">Show Subscribe Button: </b> Are you the channel owner for all your galleries? Check this box to add a "Subscribe" button to all your galleries as shown below.  This might help you convert your site's visitors to YouTube subscribers of your channel.
                                </label>
                                <span id="boxchannelsub">
                                    Paste Channel URL: <input type="text" placeholder="Example: https://www.youtube.com/user/YourChannel" name="<?php echo self::$opt_gallery_channelsublink; ?>" id="<?php echo self::$opt_gallery_channelsublink; ?>" value="<?php echo esc_url(trim($all[self::$opt_gallery_channelsublink])); ?>" class="textinput regular-text"> &nbsp;
                                    Button text: <input type="text" name="<?php echo self::$opt_gallery_channelsubtext; ?>" id="<?php echo self::$opt_gallery_channelsubtext; ?>" value="<?php echo esc_attr(trim($all[self::$opt_gallery_channelsubtext])); ?>" class="textinput" style="width: 200px;">
                                </span>
                            </p>
                            <p><img class="sssubscribe" src="<?php echo plugins_url('images/sssubscribe.png', __FILE__) ?>"></p>

                            <p>
                                <label for="<?php echo self::$opt_gallery_scrolloffset; ?>"><b class="chktitle">Scroll Offset:</b></label>
                                <input name="<?php echo self::$opt_gallery_scrolloffset; ?>" id="<?php echo self::$opt_gallery_scrolloffset; ?>" type="number" class="textinput" style="width: 60px;" value="<?php echo esc_attr(trim($all[self::$opt_gallery_scrolloffset])); ?>">
                                After you click on a thumbnail, the gallery will automatically smooth scroll up to the actual player. If you need it to scroll a few pixels further, increase this number.
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_gallery_showtitle; ?>" id="<?php echo self::$opt_gallery_showtitle; ?>" <?php checked($all[self::$opt_gallery_showtitle], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_gallery_showtitle; ?>"><b class="chktitle">Show Thumbnail Title:</b> Show titles with each thumbnail.</label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_gallery_hideprivate; ?>" id="<?php echo self::$opt_gallery_hideprivate; ?>" <?php checked($all[self::$opt_gallery_hideprivate], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_gallery_hideprivate; ?>"><b class="chktitle">Hide Private Thumbnails:</b> Hide thumbnails for videos in a playlist that cannot be embedded yet. Note: This may make some page sizes look uneven.</label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_gallery_autonext; ?>" id="<?php echo self::$opt_gallery_autonext; ?>" <?php checked($all[self::$opt_gallery_autonext], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_gallery_autonext; ?>"><b class="chktitle">Automatic Continuous Play:</b>  Automatically play the next video in the gallery as soon as the current video finished.
                                    <strong>Note:</strong> If you're embedding videos from your own monetized YouTube channel, we advise you to read YouTube's resource page on ads on embedded videos:
                                    <a href="https://support.google.com/youtube/answer/132596?hl=en" target="_blank">https://support.google.com/youtube/answer/132596?hl=en</a>
                                    You'll see that videos that you want to monetize "should be embedded using the standard click-to-play embed and NOT a scripted play."
                                    Unchecking this option guarantees standard click-to-play gallery embedding.
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_gallery_thumbplay; ?>" id="<?php echo self::$opt_gallery_thumbplay; ?>" <?php checked($all[self::$opt_gallery_thumbplay], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_gallery_thumbplay; ?>"><b class="chktitle">Thumbnail Click Plays Video:</b>
                                    Clicking on a gallery thumbnail autoplays the video. Uncheck this and visitors must also click the video's play button after clicking the thumbnail
                                    (uncheck this option for standard click-to-play gallery embedding).
                                </label>
                            </p>
                            <div class="pad20">
                                <p>
                                    Ready to get started with an actual gallery?  Just click the plugin wizard button and pick your desired gallery embedding choice.
                                </p>
                                <p><img class="sswizardbutton" src="<?php echo plugins_url('images/sswizardbutton.jpg', __FILE__) ?>"></p>
                            </div>
                        </div>
                    </section>

                    <section class="pattern" id="jumpcompat">
                        <h2>Compatibility Settings</h2>
                        <p>
                            With tens of thousands of active users, our plugin may not work with every plugin out there. Below are some settings you may wish to try out. 
                        </p>
                        <div class="ytindent chx">
                            <p>
                                <input name="<?php echo self::$opt_ajax_save; ?>" id="<?php echo self::$opt_ajax_save; ?>" <?php checked($all[self::$opt_ajax_save], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_ajax_save; ?>">
                                    <b class="chktitle">Save Settings with AJAX: </b>
                                    Turn this option off if you are having trouble saving your settings.
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_gb_compat; ?>" id="<?php echo self::$opt_gb_compat; ?>" <?php checked($all[self::$opt_gb_compat], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_gb_compat; ?>">
                                    <b class="chktitle">Gutenberg Block Editor Theme Spacing: </b>
                                    Check this option to fix possible issues with spacing below your videos. You may also want to try combining this option with Responsive Sizing.
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_old_script_method; ?>" id="<?php echo self::$opt_old_script_method; ?>" <?php checked($all[self::$opt_old_script_method], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_old_script_method; ?>">
                                    <b class="chktitle">Use Legacy Scripts: </b>
                                    This is a legacy option for users with theme issues that require backwards compatibility (v.10.5 or earlier). It may also help with caching plugin or CDN plugin issues.
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_admin_off_scripts; ?>" id="<?php echo self::$opt_admin_off_scripts; ?>" <?php checked($all[self::$opt_admin_off_scripts], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_admin_off_scripts; ?>">
                                    <b class="chktitle">Turn Off Scripts While Editing: </b>
                                    Front-end editors and visual pagebuilders often run Javascript while you're in edit mode. Check this to turn off this plugin's Javascript during edit mode, if you see conflicts.
                                    Don't worry, all other visitors to your site will still view your site normally.
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_migrate; ?>" id="<?php echo self::$opt_migrate; ?>" <?php checked($all[self::$opt_migrate], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_migrate; ?>">
                                    <b class="chktitle">Migrate Shortcodes: </b> Inherit shortcodes from other plugins. This is useful for when a plugin becomes deprecated, or you simply prefer this plugin's features.
                                </label>
                            <div id="boxmigratelist">
                                <ul>
                                    <li><input name="<?php echo self::$opt_migrate_embedplusvideo; ?>" id="<?php echo self::$opt_migrate_embedplusvideo; ?>" <?php checked($all[self::$opt_migrate_embedplusvideo], 1); ?> type="checkbox" class="checkbox"><label for="<?php echo self::$opt_migrate_embedplusvideo; ?>"><b>"YouTube Advanced Embed":</b>   <code>[embedplusvideo]</code> shortcode</label></li>
                                    <li><input name="<?php echo self::$opt_migrate_youtube; ?>" id="<?php echo self::$opt_migrate_youtube; ?>" <?php checked($all[self::$opt_migrate_youtube], 1); ?> type="checkbox" class="checkbox"><label for="<?php echo self::$opt_migrate_youtube; ?>"><b>"YouTube Embed":</b> <code>[youtube]</code> and <code>[youtube_video]</code> shortcodes</label></li>
                                    <li class="smallnote orange" style="list-style: none;">This feature is beta. More shortcodes coming.</li>
                                </ul>

                            </div>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_oldspacing; ?>" id="<?php echo self::$opt_oldspacing; ?>" <?php checked($all[self::$opt_oldspacing], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_oldspacing; ?>">
                                    <b class="chktitle">Legacy Spacing:</b> Continue the spacing style from version 4.0 and older. Those versions required you to manually add spacing above and below your video. Unchecking this will automatically add the spacing.
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_frontend_only; ?>" id="<?php echo self::$opt_frontend_only; ?>" <?php checked($all[self::$opt_frontend_only], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_frontend_only; ?>">
                                    <b class="chktitle">Don't Run Shortcode In Admin:</b>
                                    Checking this will only allow the shortcode to run on the front-end of your website, and not in the admin area.
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_evselector_light; ?>" id="<?php echo self::$opt_evselector_light; ?>" <?php checked($all[self::$opt_evselector_light], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_evselector_light; ?>">
                                    <b class="chktitle">Theme Video Problems: </b> 
                                    Check this option if you're having issues with autoplayed videos or background videos etc. that have been generated by your theme.
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_stop_mobile_buffer; ?>" id="<?php echo self::$opt_stop_mobile_buffer; ?>" <?php checked($all[self::$opt_stop_mobile_buffer], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_stop_mobile_buffer; ?>">
                                    <b class="chktitle">Mobile Autoplay Problems: </b> 
                                    Autoplay works for desktop, but mobile devices don't allow autoplay due to network carrier data charges. For mobile devices, this option may help the player to properly display the video for the visitor to click on.
                                    (<strong>Note:</strong> Desktop browsers like <a href="https://developers.google.com/youtube/iframe_api_reference#Mobile_considerations" target="_blank">Chrome and Safari are moving towards preventing autoplay for any video</a>. But, your chances are improved if you set your videos to initially start muted.)
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_ajax_compat; ?>" id="<?php echo self::$opt_ajax_compat; ?>" <?php checked($all[self::$opt_ajax_compat], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_ajax_compat; ?>">
                                    <b class="chktitle">Ajax Theme:</b>
                                    If you have a theme that loads pages with AJAX transitions, try checking this option.
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_debugmode; ?>" id="<?php echo self::$opt_debugmode; ?>" <?php checked($all[self::$opt_debugmode], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_debugmode; ?>">
                                    <b class="chktitle">Debug Mode: </b> If you ask for support, we may ask you to turn on debug mode here.
                                    It may print out some diagnostic info so that we can help you solve your issue. 
                                </label>
                            </p>
                            <p>
                                <input name="<?php echo self::$opt_uninstall_data; ?>" id="<?php echo self::$opt_uninstall_data; ?>" <?php checked($all[self::$opt_uninstall_data], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_uninstall_data; ?>">
                                    <b class="chktitle">Delete Options When Uninstalling:</b> Checking this box will permanently delete your options the next time you uninstall the plugin. Leave it unchecked
                                    to preserve your options between installations.
                                </label>
                            </p>
                        </div>


                    </section>
                    <section class="pattern" id="jumphowto">
                        <h2>Manual Embedding</h2>
                        <p>
                            <strong>We strongly recommend using the wizard in your editor to embed.</strong> However, if you choose to manually embed code, follow some legacy instructions below.
                        </p>
                        <h3>
                            Manually Embed a YouTube Video or Playlist &nbsp; <a class="smallnote" href="#jumpgallery">(For gallery directions, go here &raquo;)</a>
                        </h3>
                        <p>
                            <b>For videos:</b> <i>Method 1 - </i> Do you already have a URL to the video you want to embed in a post, page, or even a widget? All you have to do is paste it on its own line, as shown below (including the https:// part). Easy, eh?<br>
                            <i>Method 2 - </i> If you want to do some formatting (e.g. add HTML to center a video) or have two or more videos next to each other on the same line, wrap each link with the <code>[embedyt]...[/embedyt]</code> shortcode. <b>Tip for embedding videos on the same line:</b> As shown in the example image below, decrease the size of each video so that they fit together on the same line (See the "How To Override Defaults" section for height and width instructions).
                        </p>
                        <p>
                            <b>For galleries:</b> <a href="#jumpgallery">Click here</a> to scroll down to gallery settings and directions.
                        </p>
                        <p>
                            <b>For self-contained playlists:</b> Go to the page for the playlist that lists all of its videos (<a target="_blank" href="http://www.youtube.com/playlist?list=PL70DEC2B0568B5469">Example &raquo;</a>). Click on the video that you want the playlist to start with. Copy and paste that browser URL into your blog on its own line. If you want the first video to always be the latest video in your playlist, check the option "Playlist Ordering" in the settings down below (you will also see this option available if you use the Pro Wizard). If you want to have two or more playlists next to each other on the same line, wrap each link with the <code>[embedyt]...[/embedyt]</code> shortcode.
                        </p>                
                        <p>
                            <b>For self-contained channel playlists:</b> At your editor, click on the <img style="vertical-align: text-bottom;" src="<?php echo plugins_url('images/wizbuttonbig.png', __FILE__) ?>"> wizard button and choose the option <i>Search for a video or channel to insert in my editor.</i> Then, click on the <i>channel playlist</i> option there (instead of <i>single video</i>). Search for the channel username and follow the rest of the directions there.
                        </p>
                        <p>
                            <strong>For directly embedding in your theme with PHP:</strong>
                            If you need to use PHP directly, we still recommend using the wizard to create the shortcode--but instead of pressing the "Insert" button, just copy the shortcode the wizard gives you. Then use the <code>do_shortcode()</code> function in your theme, like this:
                            <br>
                            <code>&lt;?php echo do_shortcode('[embedyt]....[/embedyt]'); ?&gt;</code>
                        </p>
                        <p>
                            <b>Examples:</b><br><br>
                            <img style="width: 900px; height: auto;" class="shadow" src="<?php echo plugins_url('images/sshowto.png', __FILE__) ?>" />
                        </p>
                        <p>
                            Always follow these rules for any URL:
                        </p>
                        <ul class="reglist">
                            <li>Make sure the URL is really on its own line by itself. Or, if you need multiple videos on the same line, make sure each URL is wrapped properly with the shortcode (Example:  <code>[embedyt]http://www.youtube.com/watch?v=ABCDEFGHIJK&width=400&height=250[/embedyt]</code>)</li>
                            <li>Make sure the URL is <strong>not</strong> an active hyperlink (i.e., it should just be plain text). Otherwise, highlight the URL and click the "unlink" button in your editor: <img src="<?php echo plugins_url('images/unlink.png', __FILE__) ?>"/></li>
                            <li>Make sure you did <strong>not</strong> format or align the URL in any way. If your URL still appears in your actual post instead of a video, highlight it and click the "remove formatting" button (formatting can be invisible sometimes): <img src="<?php echo plugins_url('images/erase.png', __FILE__) ?>"/></li>
                            <li>If you really want to align the video, try wrapping the link with the shortcode first. For example: <code>[embedyt]http://www.youtube.com/watch?v=ABCDEFGHIJK[/embedyt]</code> Using the shortcode also allows you to have two or more videos next to each other on the same line.  Just put the shortcoded links together on the same line. For example:<br>
                                <code>[embedyt]http://www.youtube.com/watch?v=ABCDEF[/embedyt] [embedyt]http://www.youtube.com/watch?v=GHIJK[/embedyt]</code>
                            </li>
                        </ul>       


                        <h3>
                            <?php _e("How To Manually Override Defaults / Other Options") ?>
                        </h3>
                        <p>
                            Suppose you have a few videos that need to be different from the above defaults. You can add options to the end of a link as displayed below to override the above defaults. Each option should begin with '&'.
                            <br><span class="orange">PRO users: You can use the <a href="<?php echo self::$epbase . '/dashboard/pro-easy-video-analytics.aspx?ref=manual' ?>" target="_blank">customize</a> buttons that you will see inside the wizard, instead of memorizing the following codes.</span>
                        </p>
                        <?php
                        _e('<ul class="reglist">');
                        _e("<li><strong>width</strong> - Sets the width of your player. If omitted, the default width will be the width of your theme's content.<em> Example: http://www.youtube.com/watch?v=quwebVjAEJA<strong>&width=500</strong>&height=350</em></li>");
                        _e("<li><strong>height</strong> - Sets the height of your player. <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA&width=500<strong>&height=350</strong></em> </li>");
                        _e("<li><strong>autoplay</strong> - Set this to 1 to autoplay the video (or 0 to play the video once). <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA<strong>&autoplay=1</strong></em> (Note: Desktop browsers like Chrome and Safari are moving towards preventing autoplay for any video. But, your chances are improved if you set your videos to initially start muted.) </li>");
                        _e("<li><strong>cc_load_policy</strong> - Set this to 1 to turn on closed captioning (or 0 to leave them off). <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA<strong>&cc_load_policy=1</strong></em> </li>");
                        _e("<li><strong>iv_load_policy</strong> - Set this to 3 to turn off annotations (or 1 to show them). <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA<strong>&iv_load_policy=3</strong></em> </li>");
                        _e("<li><strong>loop</strong> - Set this to 1 to loop the video (or 0 to not loop). <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA<strong>&loop=1</strong></em> </li>");
                        _e("<li><strong>modestbranding</strong> - Set this to 1 to remove the YouTube logo while playing (or 0 to show the logo). <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA<strong>&modestbranding=1</strong></em> </li>");
                        _e("<li><strong>rel</strong> - Set this to 0 to not show related videos at the end of playing (or 1 to show them). <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA<strong>&rel=0</strong></em> </li>");
                        _e("<li><strong>fs</strong> - Set this to 0 to hide the fullscreen button (or 1 to show it). <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA<strong>&fs=0</strong></em> </li>");
                        _e("<li><strong>color</strong> - Set this to 'white' to make the player have a white progress bar (or 'red' for a red progress bar). Note: Using white will disable the modestbranding option. <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA<strong>&color=white</strong></em> </li>");
                        _e("<li><strong>controls</strong> - Set this to 0 to completely hide the video controls (or 1 to show it). <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA<strong>&controls=0</strong></em> </li>");
                        _e("<li><strong>playsinline</strong> - Set this to 1 to allow videos play inline with the page on iOS browsers. (Set to 0 to have iOS launch videos in fullscreen instead). <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA<strong>&playsinline=1</strong></em> </li>");
                        _e("<li><strong>origin</strong> - Set this to 1 to add the 'origin' parameter for extra JavaScript security. <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA<strong>&origin=1</strong></em> </li>");
                        _e('</ul>');

                        _e("<p>You can also start and end each individual video at particular times. Like the above, each option should begin with '&'</p>");
                        _e('<ul class="reglist">');
                        _e("<li><strong>start</strong> - Sets the time (in seconds) to start the video. <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA&width=500&height=350<strong>&start=20</strong></em> </li>");
                        _e("<li><strong>end</strong> - Sets the time (in seconds) to stop the video. <em>Example: http://www.youtube.com/watch?v=quwebVjAEJA&width=500&height=350<strong>&end=100</strong></em> </li>");
                        _e('</ul>');
                        ?>
                    </section>

                    <section class="pattern" id="jumpperformance">
                        <h2><?php _e('Performance Settings & Tips', 'youtube-embed-plus'); ?></h2>
                        <p>
                            <?php _e('On this page, we describe performance options to help optimize page speed times of your pages containing YouTube embeds.', 'youtube-embed-plus'); ?>
                        </p>
                        <div class="p">
                            <input name="<?php echo self::$opt_facade_mode; ?>" id="<?php echo self::$opt_facade_mode; ?>" <?php checked($all[self::$opt_facade_mode], 1); ?> type="checkbox" class="checkbox">
                            <label for="<?php echo self::$opt_facade_mode ?>">
                                <b class="chktitle"><?php _e('Facade Mode:', 'youtube-embed-plus'); ?> <sup class="orange">new</sup></b> 
                                <?php _e('This improves performance by loading a lighter version of the player, until it is clicked. Then the real player loads (note: for live streams, the real player is always loaded).  We have tested this feature in multiple cases and found it to successfully improve your Lighthouse performance score by addressing  the following recommendation: "Some third-party resources can be lazy loaded with a facade."', 'youtube-embed-plus'); ?>
                                <a href="https://www.youtube.com/watch?v=W7PKUjVBDNE" target="_blank"><?php _e('See an example of this feature at work.', 'youtube-embed-plus'); ?></a>
                            </label>                       
                            <div class="p box_facade_mode">
                                <input name="<?php echo self::$opt_facade_autoplay; ?>" id="<?php echo self::$opt_facade_autoplay; ?>" type="checkbox" class="checkbox" <?php checked($all[self::$opt_facade_autoplay], 1); ?>>
                                <label for="<?php echo self::$opt_facade_autoplay ?>">
                                    <b class="chktitle"><?php _e('Autoplay On Facade Click:', 'youtube-embed-plus'); ?></b>
                                    <span>
                                        <?php _e('After clicking once on the facade (aka light thumbnail), it is replaced with the real player. Check this option to have the real player play immediately, otherwise it will require an additional click. Note that checking this option will use YouTube\'s autoplay feature, which will not contribute toward play counts.  If you\'re embedding videos from someone else\'s channel, we recommend checking this.  If you\'re embedding videos that are from your channel, then you should self-evaluate the tradeoff involving play counts and additional clicking.', 'youtube-embed-plus'); ?>
                                    </span>
                                </label>
                                <br>
                                <br>
                                <label>
                                    <b class="chktitle"><?php _e('Force Maximum Quality for Facade Images: <sup class="orange">new</sup>', 'text_domain') ?></b>
                                    <?php _e('Attempt to load the maximum resolution image for the facade image. This max quality image does not exist for all videos, so you have a few choices below.', 'text_domain'); ?>
                                </label>
                                <ul class="indent-option">
                                    <li>
                                        <input type="radio" name="<?php echo self::$opt_maxres_facade; ?>" id="<?php echo self::$opt_maxres_facade; ?>_eager" value="eager" <?php checked($all[self::$opt_maxres_facade], 'eager'); ?>>
                                        <label for="<?php echo self::$opt_maxres_facade; ?>_eager"> <?php _e("<em>Eager:</em> Try loading the max resolution image by default. If the max-res image does not exist for the video, the next highest available resolution will immediately load instead. This option is best for websites that embed videos having very high resolutions (i.e. the max-res images will likely exist).", 'text_domain') ?> </label> <br>
                                    </li>
                                    <li>
                                        <input type="radio" name="<?php echo self::$opt_maxres_facade; ?>" id="<?php echo self::$opt_maxres_facade; ?>_soft" value="soft" <?php checked($all[self::$opt_maxres_facade], 'soft'); ?>>
                                        <label for="<?php echo self::$opt_maxres_facade; ?>_soft"> <?php _e("<em>Soft:</em> Load a relatively high resolution image that is guaranteed to exist, but immediately try updating the image to maximum resolution if it exists. This option is best for sites with some videos that may have a missing max resolution image.", 'text_domain') ?> </label>  <br>
                                    </li>
                                    <li>
                                        <input type="radio" name="<?php echo self::$opt_maxres_facade; ?>" id="<?php echo self::$opt_maxres_facade; ?>_off" value="off" <?php checked($all[self::$opt_maxres_facade], 'off'); ?>>
                                        <label for="<?php echo self::$opt_maxres_facade; ?>_off"><?php _e("<em>Off:</em> Don't try to maximize facade image quality. Just load the relatively high resolution image that all videos have.", 'text_domain') ?></label>  <br>
                                    </li>
                                </ul>
                            </div>
                        </div>                        
                        <div class="p">
                            <input name="<?php echo self::$opt_defer_js; ?>" id="<?php echo self::$opt_defer_js; ?>" <?php checked($all[self::$opt_defer_js], 1); ?> type="checkbox" class="checkbox">
                            <label for="<?php echo self::$opt_defer_js ?>">
                                <b class="chktitle"><?php _e('Defer Javascript:', 'youtube-embed-plus'); ?></b> 
                                <?php _e('JavaScript (JS) deferral is a common website performance option that can offer significant improvements of page speed. You can reduce the initial load time of your page by allowing this plugin\'s scripts to begin execution only after a page is loaded. You may receive a better GTMetrix score with this option turned on. Note: This feature is compatible with most sites, but turn it off if you are having issues.', 'youtube-embed-plus'); ?>                                
                            </label>                       
                            <div class="p box_defer_jquery">
                                <input name="<?php echo self::$opt_defer_jquery; ?>" id="<?php echo self::$opt_defer_jquery; ?>" type="checkbox" class="checkbox" <?php checked($all[self::$opt_defer_jquery], 1); ?>>
                                <label for="<?php echo self::$opt_defer_jquery ?>">
                                    <b class="chktitle"><?php _e('Also Defer jQuery:', 'youtube-embed-plus'); ?></b>
                                    <span style="color: red;">
                                        <?php _e('Note: Do NOT check this option if you are using a pagebuilder. Furthermore, defering jQuery may improve your GTMetrix score even more, but might not be compatible with your theme or other plugins (especially if they are not defering their own scripts). Use this option with caution.', 'youtube-embed-plus'); ?>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <p><?php _e('Note: Since the YouTube player is loaded in its own iframe from YouTube\'s servers, browser restrictions prevent this plugin from directly deferring the JS inside the iframe. However, if you upgrade to Pro, you can use the lazy loading feature <a href="#jumpupgrade">described here &raquo;</a> to further improve your page speeds or try out facade mode.', 'youtube-embed-plus'); ?></p>
                        <!--                        <div style="width: 50%">
                                                    <div class="epyt-fitvid">
                                                        <iframe allow="encrypted-media" allowfullscreen="" src="https://www.youtube-nocookie.com/embed/?autoplay=0&amp;cc_load_policy=0&amp;iv_load_policy=1&amp;loop=0&amp;modestbranding=0&amp;fs=1&amp;playsinline=0&amp;controls=1&amp;color=red&amp;rel=1&amp;autohide=2&amp;theme=dark&amp;"></iframe>
                                                    </div>
                                                </div>-->
                    </section>

                    <div class="save-changes-follow"> <?php self::save_changes_button(isset($_POST[$ytprefs_submitted]) && $_POST[$ytprefs_submitted] == 'Y'); ?> </div>
                </form>

                <section class="pattern" id="jumpupgrade">
                    <div class="upgchecks">
                        <h3 class="sect">Want the PRO Features?</h3>
                        <p>
                            Below are descriptions for some of our PRO features for more gallery customization options, faster page loading, enhanced SEO, and more. Simply purchase and install our separate PRO plugin (the PRO plugin automatically works for all your past embed links).
                        </p>
                        <p>
                            <input disabled type="checkbox" class="checkbox">
                            <label>
                                <b class="chktitle">Lazy-Loading for Performance:</b>  <span class="pronon">(PRO Users)</span> 
                                Lazy-loading can speed up your page loads by loading the player only until it is visible on the screen.
                                <a href="https://www.youtube.com/watch?v=omNdJvXDCLo" target="_blank">See an example here</a>. 
                                An added bonus to this option is that you have the choice of several types of eye-catching lazy-loading effects that will make your YouTube embeds bounce, flip, pulse, or slide as they lazy load on the screen. Check this box to select your desired effect. <a target="_blank" href="<?php echo self::$epbase ?>/add-special-effects-to-youtube-embeds-in-wordpress.aspx">Read more here &raquo;</a>
                            </label>
                        </p>
                        <div class="hr"></div>
                        <p>
                            <img class="ssaltgallery" src="<?php echo plugins_url('images/ss-live-chat.jpg', __FILE__) ?>" />
                            <input disabled type="checkbox" class="checkbox">
                            <label>
                                <b class="chktitle"><?php _e('Enable Live Chat:', 'youtube-embed-plus') ?></b> <span class="pronon"><?php _e('(PRO Users)', 'youtube-embed-plus') ?></span>  <?php _e('<sup class="orange">new</sup>') ?> <?php _e('Add more interaction to your site by including the YouTube live chat box as part of each live stream embed. Note that live chat can also be an option for earning money from your audience by using the Super Chat feature. <a href="https://creatoracademy.youtube.com/page/lesson/superchat" target="_blank">Learn more here</a>.') ?>
                                <strong class="check-note"><?php _e('<span class="orange">NOTE:</span> In wide containers, the chat box will appear to the right of the player. It will appear below the player when the container is less than 964px. Also, Google/YouTube disables live chat on mobile devices. So for mobile phones and tablets, the chat box will be hidden.') ?></strong>
                            </label>
                            <br>
                            <br>                                
                        </p>
                        <div class="hr"></div>
                        <p>
                            <img class="ssaltgallery" src="<?php echo plugins_url('images/ssaltgalleryall.jpg', __FILE__) ?>" />
                            <select disabled>
                                <option value="">Gallery Style</option>
                            </select>
                            <label>
                                <b class="chktitle">Advanced Gallery Customization Options: </b> <span class="pronon">(PRO Users)</span> 
                                Switch from the grid style of the free version to another gallery style. Right now, we provide a vertical (single column) and horizontal (single row) list style as alternatives to the grid, with more designs coming. These current alternatives were inspired by the standard YouTube playlist player's "table of contents," except our gallery's video lists are always visible and shown under the playing video.
                                <a target="_blank" href="<?php echo self::$epbase ?>/responsive-youtube-playlist-channel-gallery-for-wordpress.aspx">Read more here &raquo;</a>
                            </label>
                        </p>

                        <div class="hr"></div>
                        <p>
                            <img class="ssaltgallery" src="<?php echo plugins_url('images/ssverticallayout.png', __FILE__) ?>" />
                            <input disabled type="checkbox" class="checkbox">
                            <label>
                                <b class="chktitle">Show Gallery Descriptions (for vertical list styling): </b>  <span class="pronon">(PRO Users)</span> 
                                For the vertical list layout, this option will show full video descriptions (taken directly from YouTube.com) with each thumbnail. Note: these descriptions only apply the vertical list layout; other layouts don't have enough room.
                            </label>
                        </p>
                        <div class="hr"></div>
                        <p>
                            <img class="ssaltgallery" src="<?php echo plugins_url('images/ssaltgallerycircles.jpg', __FILE__) ?>" />
                            <select disabled>
                                <option value="">Select Thumbnail Shape</option>
                            </select>
                            <label>
                                <b class="chktitle">Gallery Thumbnail Shape: </b> <span class="pronon">(PRO Users)</span> 
                                Differentiate your gallery by showing different thumbnail shapes.  We currently offer rectangle and circle shapes.
                                <a target="_blank" href="<?php echo self::$epbase ?>/responsive-youtube-playlist-channel-gallery-for-wordpress.aspx">Read more here &raquo;</a>
                            </label>
                        </p>

                        <div class="hr"></div>
                        <p>
                            <img class="sspopupplayer" src="<?php echo plugins_url('images/sspopupplayer.jpg', __FILE__) ?>" />
                            <label>
                                <b class="chktitle">Gallery Video Display Mode: </b> <span class="pronon">(PRO Users)</span>
                                Display your gallery videos simply above the thumbnails (default), or as a popup lightbox. Choosing "popup lightbox" will make your videos lazy-loaded, which will provide some performance benefits since the YouTube player is not initially loaded with your page. It's loaded with a popup only when a user clicks a thumbnail.
                            </label>
                            <br>
                            <input type="radio" disabled> Default &nbsp; <input type="radio" disabled> Popup lightbox
                        </p>

                        <div class="hr"></div>

                        <p>
                            <img class="sshidethumbimg" src="<?php echo plugins_url('images/sshidethumbimg.jpg', __FILE__) ?>" />
                            <input disabled type="checkbox" class="checkbox">
                            <label>
                                <b class="chktitle">Hide Thumbnail Images:</b> <span class="pronon">(PRO Users)</span> 
                                (For "Grid" and "Vertical List" gallery layouts only) Hide the image for each thumbnail, leaving just the text. This can improve performance when imagery is not important.
                                <a href="<?php echo self::$epbase ?>/responsive-youtube-playlist-channel-gallery-for-wordpress.aspx" target="_blank">See an example here &raquo;</a>
                            </label>
                        </p>

                        <div class="hr"></div>
                        <p>
                            <input disabled type="checkbox" class="checkbox">
                            <label>
                                <b class="chktitle">Faster Page Loads (Caching): </b>  <span class="pronon">(PRO Users)</span> 
                                Use embed caching to speed up your page loads. By default, WordPress needs to request information from YouTube.com's servers for every video you embed, every time a page is loaded. These data requests can add time to your total page load time. Turn on this feature to cache that data (instead of having to request for the same information every time you load a page). This should then make your pages that have videos load faster.  It's been noted that even small speed ups in page load can help increase visitor engagement, retention, and conversions. Caching also makes galleries run faster.
                            </label>
                        <div class="indent-option">
                            <label>
                                <b class="chktitle">Cache Lifetime (hours): </b> 
                                <input disabled value="24" type="number">
                                Tip: If your pages rarely change, you may wish to set this to a much higher value than 24 hours.
                            </label>
                        </div>
                        </p>
                        <div class="hr"></div>

                        <p>
                            <input disabled type="checkbox" class="checkbox">
                            <label>
                                <b class="chktitle">Video SEO Tags:</b>  <span class="pronon">(PRO Users)</span> Update your YouTube embeds with Google, Bing, and Yahoo friendly schema markup for videos.
                            </label>
                        </p>
                        <div class="hr"></div>
                        <p>
                            <input disabled type="checkbox" class="checkbox">
                            <label>
                                <b class="chktitle">Facebook Open Graph Markup:</b> <span class="pronon">(PRO Users)</span>   Include Facebook Open Graph markup with the videos you embed with this plugin.  We follow the guidelines for videos as described here: <a href="https://developers.facebook.com/docs/sharing/webmasters#media" target="_blank">https://developers.facebook.com/docs/sharing/webmasters#media</a>
                            </label>
                        </p>
                        <div class="hr"></div>
                        <p>
                            <img class="ssfb" src="<?php echo plugins_url('images/youtube_thumbnail_sample.jpg', __FILE__) ?>" />
                            <input disabled type="checkbox" class="checkbox">
                            <label>
                                <b class="chktitle">Featured Thumbnail Images:</b>  <span class="pronon">(PRO Users)</span> 
                                Automatically grab the thumbnail image of the first video embedded in each post or page, and use it as the featured image. 
                                All you have to do is click Update on a post or page and the plugin does the rest! 
                                (Example shown on the right) <a target="_blank" href="<?php echo self::$epbase ?>/add-youtube-video-thumbnails-featured-image-wordpress.aspx">Read more here &raquo;</a>
                            </label>
                        </p>
                        <div class="hr"></div>
                        <p>
                            <a href="<?php echo self::$epbase ?>/dashboard/pro-easy-video-analytics.aspx?ref=protabfooter" target="_blank">Purchase and download the PRO plugin to get the above and several other features &raquo;</a>
                        </p>                    
                        <div class="clearboth"></div>
                    </div>

                </section>

                <section class="pattern" id="jumpsupport">
                    <h2>Plugin Support</h2>

                    <div id="nonprosupport">
                        <p>
                            Here is a short video explaining a few of the plugin's features:
                        </p>                        
                        <div class="epyt-fitvid">
                            <iframe src="https://www.youtube.com/embed/QDdvXBqfrzM?rel=0" allowfullscreen="" frameborder="0"></iframe>
                        </div>
                        <p>
                            We've also found that a common support request has been from users that are pasting video links on single lines, as required, but are not seeing the video embed show up. One of these suggestions is usually the fix:                            
                        </p>
                        <ul class="reglist">
                            <li>Make sure the URL is really on its own line by itself. Or, if you need multiple videos on the same line, make sure each URL is wrapped properly with the shortcode (Example:  <code>[embedyt]http://www.youtube.com/watch?v=ABCDEFGHIJK&width=400&height=250[/embedyt]</code>)</li>
                            <li>Make sure the URL is not an active hyperlink (i.e., it should just be plain text). Otherwise, highlight the URL and click the "unlink" button in your editor: <img src="<?php echo plugins_url('images/unlink.png', __FILE__) ?>"/>.</li>
                            <li>Make sure you did <strong>not</strong> format or align the URL in any way. If your URL still appears in your actual post instead of a video, highlight it and click the "remove formatting" button (formatting can be invisible sometimes): <img src="<?php echo plugins_url('images/erase.png', __FILE__) ?>"/></li>
                            <li>Try wrapping the URL with the <code>[embedyt]...[/embedyt]</code> shortcode. For example: <code>[embedyt]http://www.youtube.com/watch?v=ABCDEFGHIJK[/embedyt]</code> Using the shortcode also allows you to have two or more videos next to each other on the same line.  Just put the shortcoded links together on the same line. For example:<br>
                                <code>[embedyt]http://www.youtube.com/watch?v=ABCDEF&width=400&height=250[/embedyt] [embedyt]http://www.youtube.com/watch?v=GHIJK&width=400&height=250[/embedyt]</code>
                                <br> TIP: As shown above, decrease the size of each video so that they fit together on the same line (See the "How To Override Defaults" section for height and width instructions)
                            </li>
                            <li>If you upload a new video to a playlist or channel and that video is not yet showing up on a gallery you embedded, you should clear/reset any caching plugins you have. This will force your site to retrieve the freshest version of your playlist and/or channel video listing.  If you don't reset you cache, then you'll have to wait until cache lifetime expires.</li>
                            <li>Finally, there's a slight chance your custom theme is the issue, if you have one. To know for sure, we suggest temporarily switching to one of the default WordPress themes (e.g., "Twenty Fourteen") just to see if your video does appear. If it suddenly works, then your custom theme is the issue. You can switch back when done testing.</li>
                            <li>If your videos always appear full size, try turning off "Responsive video sizing."</li>
                            <li>If none of the above work, you can contact us here if you still have issues: ext@embedplus.com. We'll try to respond within a week.</li>
                        </ul>
                        <p>
                            Deactivating the No Cookies option has also been proven to solve player errors.
                        </p>
                        <p>
                            We also have a YouTube channel. We use it to provide users with some helper videos and a way to keep updated on new features as they are introduced. <a href="https://www.youtube.com/subscription_center?add_user=EmbedPlus" target="_blank">Subscribe for tips and updates here &raquo;</a>
                        </p>
                    </div>
                    <br>
                </section>
            </div>
        </div>
        <script type="text/javascript">
            (function ($)
            {
                window.savevalidate = function (e)
                {
                    var $formDefaults = $(e.target);
                    var valid = true;
                    var $tabFocus = '';
                    var alertmessage = '';
                    if (jQuery("#<?php echo self::$opt_defaultdims; ?>").is(":checked"))
                    {
                        if (!(jQuery.isNumeric(jQuery.trim(jQuery("#<?php echo self::$opt_defaultwidth; ?>").val())) &&
                                jQuery.isNumeric(jQuery.trim(jQuery("#<?php echo self::$opt_defaultheight; ?>").val()))))
                        {
                            alertmessage += "Please enter valid numbers for default height and width, or uncheck the option.";
                            jQuery("#boxdefaultdims input").css("background-color", "#ffcccc").css("border", "2px solid #000000");
                            valid = false;
                            $tabFocus = $("#<?php echo self::$opt_defaultdims; ?>").closest('section');
                        }
                    }

                    if (jQuery("#<?php echo self::$opt_gallery_customarrows; ?>").is(":checked"))
                    {
                        if (!jQuery.trim(jQuery("#<?php echo self::$opt_gallery_customprev; ?>").val()) ||
                                !jQuery.trim(jQuery("#<?php echo self::$opt_gallery_customnext; ?>").val()))
                        {
                            alertmessage += "Please enter valid text for both the custom gallery Prev and Next buttons, or uncheck the option.";
                            jQuery("#boxcustomarrows input").css("background-color", "#ffcccc").css("border", "2px solid #000000");
                            valid = false;
                            $tabFocus = $("#<?php echo self::$opt_gallery_customarrows; ?>").closest('section');
                        }
                    }


                    if (jQuery("#<?php echo self::$opt_gallery_channelsub; ?>").is(":checked"))
                    {
                        if (!jQuery.trim(jQuery("#<?php echo self::$opt_gallery_channelsublink; ?>").val()) ||
                                !jQuery.trim(jQuery("#<?php echo self::$opt_gallery_channelsubtext; ?>").val()))
                        {
                            alertmessage += "Please enter valid text for both the subscribe text and subscribe URL, or uncheck the option.";
                            jQuery("#boxchannelsub input").css("background-color", "#ffcccc").css("border", "2px solid #000000");
                            valid = false;
                            $tabFocus = $("#<?php echo self::$opt_gallery_channelsub; ?>").closest('section');
                        }
                    }


                    if (jQuery("#<?php echo self::$opt_gallery_collapse_grid; ?>").is(":checked"))
                    {
                        var emptyStacks = [];
                        jQuery("#box_collapse_grid input").each(function ()
                        {
                            var val = jQuery(this).val();
                            if (jQuery.trim(val) === '' || !jQuery.isNumeric(val))
                            {
                                emptyStacks.push(this);
                                jQuery(this).css("background-color", "#ffcccc").css("outline", "2px solid #000000");
                            }
                        });
                        if (emptyStacks.length)
                        {
                            alertmessage += "Please enter a valid number for the gallery stacking screen width.";
                            valid = false;
                            $tabFocus = $("#<?php echo self::$opt_gallery_collapse_grid; ?>").closest('section');
                        }
                    }



                    if (jQuery("#<?php echo self::$opt_defaultvol; ?>").is(":checked"))
                    {
                        if (!(jQuery.isNumeric(jQuery.trim(jQuery("#<?php echo self::$opt_vol; ?>").val()))))
                        {
                            alertmessage += "Please enter a number between 0 and 100 for the default volume, or uncheck the option.";
                            jQuery("#boxdefaultvol input").css("background-color", "#ffcccc").css("border", "2px solid #000000");
                            valid = false;
                            $tabFocus = $("#<?php echo self::$opt_defaultvol; ?>").closest('section');
                        }
                    }

                    if (!valid)
                    {
                        alertify.alert(alertmessage);
                        var tabSelector = '.wrap-ytprefs .nav-tab-wrapper .nav-tab[href=#' + $tabFocus.attr('id') + ']';
                        $(tabSelector).trigger('click');
                    }
                    if (!$formDefaults.find('#ajax_save').is(':checked'))
                    {
                        return valid;
                    }
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////// MAIN PREFS AJAX SAVE                    
                    if (valid)
                    {
                        e.preventDefault();
                        (window.tinyMCE || window.tinymce).triggerSave();
                        $formDefaults.find('.ytprefs-submit').prop('disabled', true);

                        var formData = $formDefaults.ytprefsFormJSON();
                        formData.action = 'my_embedplus_settings_save_ajax';

                        $.ajax({
                            type: "post",
                            dataType: "json",
                            timeout: 30000,
                            url: window._EPYTA_ ? window._EPYTA_.wpajaxurl : ajaxurl,
                            data: formData,
                            success: function (response)
                            {
                                alertify.alert(response ? response.message : 'Sorry, there was an error submitting your settings.', function ()
                                {
                                    if (response.type == 'success')
                                    {
                                        window.top.location.href = window._EPYTA_.admin_url_ytprefs;
                                    }
                                });
                            },
                            error: function (xhr, ajaxOptions, thrownError)
                            {
                                alertify.alert('Sorry, there was an error saving your settings. ' + (thrownError ? thrownError : ''));
                            },
                            complete: function ()
                            {
                                $formDefaults.find('.ytprefs-submit').prop('disabled', false);
                            }
                        });
                    }
                };

                var mydomain = escape("http://" + window.location.host.toString());
                jQuery(document).ready(function ($)
                {
                    $(document).on('click', '.wrap-ytprefs .nav-tab-wrapper a, .epyt-jumptab', function ()
                    {
                        $a = $(this);
                        if (!$a.hasClass('href-link'))
                        {
                            $('.wrap-ytprefs .nav-tab-wrapper a').removeClass('nav-tab-active');
                            $a.addClass('nav-tab-active');
                            $('.wrap-ytprefs section').hide();
                            $('.wrap-ytprefs section').filter($a.attr('rel') ? $a.attr('rel') : $a.attr('href')).fadeIn(200);
                            return false;
                        }
                    });

                    if (window.location.hash && window.location.hash == '#jumpmonetize')
                    {
                        setTimeout(function ()
                        {
                            window.scrollTo(0, 0);
                        }, 1);
                        $('.wrap-ytprefs .nav-tab-wrapper a[href="' + window.location.hash + '"]').trigger('click');
                    }

                    $('#ytform').on('submit', function (e)
                    {
                        return window.savevalidate(e);
                    });

                    jQuery('#<?php echo self::$opt_defaultdims; ?>').on('change', function ()
                    {
                        if (jQuery(this).is(":checked"))
                        {
                            jQuery("#boxdefaultdims").show(500);
                        }
                        else
                        {
                            jQuery("#boxdefaultdims").hide(500);
                        }

                    });
                    jQuery('#<?php echo self::$opt_gallery_customarrows; ?>').on('change', function ()
                    {
                        if (jQuery(this).is(":checked"))
                        {
                            jQuery("#boxcustomarrows").show(500);
                        }
                        else
                        {
                            jQuery("#boxcustomarrows").hide(500);
                        }

                    });
                    jQuery('#<?php echo self::$opt_gallery_collapse_grid; ?>').on('change', function ()
                    {
                        if (jQuery(this).is(":checked"))
                        {
                            jQuery("#box_collapse_grid").show(500);
                        }
                        else
                        {
                            jQuery("#box_collapse_grid").hide(500);
                        }
                    });
                    jQuery('#<?php echo self::$opt_restrict_wizard; ?>').on('change', function ()
                    {
                        if (jQuery(this).is(":checked"))
                        {
                            jQuery("#box_restrict_wizard").show(500);
                        }
                        else
                        {
                            jQuery("#box_restrict_wizard").hide(500);
                        }
                    });

                    jQuery('#<?php echo self::$opt_gallery_channelsub; ?>').on('change', function ()
                    {
                        if (jQuery(this).is(":checked"))
                        {
                            jQuery("#boxchannelsub").show(500);
                        }
                        else
                        {
                            jQuery("#boxchannelsub").hide(500);
                        }

                    });
                    jQuery('#<?php echo self::$opt_responsive; ?>').on('change', function ()
                    {
                        if (jQuery(this).is(":checked"))
                        {
                            jQuery("#boxresponsive_all").show(500);
                        }
                        else
                        {
                            jQuery("#boxresponsive_all").hide(500);
                        }
                    });
                    jQuery('#<?php echo self::$opt_migrate; ?>').on('change', function ()
                    {
                        if (jQuery(this).is(":checked"))
                        {
                            jQuery("#boxmigratelist").show(500);
                        }
                        else
                        {
                            jQuery("#boxmigratelist").hide(500);
                        }
                    });
                    jQuery('#<?php echo self::$opt_nocookie; ?>').on('change', function ()
                    {
                        if (jQuery(this).is(":checked"))
                        {
                            jQuery("#boxnocookie").show(500);
                        }
                        else
                        {
                            jQuery("#boxnocookie").hide(500);
                        }

                    });
                    jQuery('#<?php echo self::$opt_gdpr_consent; ?>').on('change', function ()
                    {
                        if (jQuery(this).is(":checked"))
                        {
                            jQuery("#box_gdpr_consent").show(500);
                        }
                        else
                        {
                            jQuery("#box_gdpr_consent").hide(500);
                        }

                    });

                    jQuery('#<?php echo self::$opt_defaultvol; ?>').on('change', function ()
                    {
                        if (jQuery(this).is(":checked"))
                        {
                            jQuery("#boxdefaultvol").show(500);
                        }
                        else
                        {
                            jQuery("#boxdefaultvol").hide(500);
                        }

                    });
                    var rangedetect = document.createElement("input");
                    rangedetect.setAttribute("type", "range");
                    var canrange = rangedetect.type !== "text";
                    //canrange = false;
                    if (canrange)
                    {
                        $("input#vol").prop("type", "range").addClass("vol-range").on("input change", function ()
                        {
                            $('.vol-output').text($(this).val() > 0 ? $(this).val() + '%' : 'Mute');
                        });
                        $('.vol-output').css("display", "inline-block").text($("input#vol").val() > 0 ? $("input#vol").val() + '%' : 'Mute');
                        $('.vol-seeslider').show();
                        $('.vol-seetextbox').hide();
                    }
                    else
                    {
                        $("input#vol").width(40);
                    }

                    $('#defer_js').on('change', function ()
                    {
                        if (!$(this).is(':checked'))
                        {
                            $('#defer_jquery').prop('checked', false).prop('disabled', true);
                        }
                        else
                        {
                            $('#defer_jquery').prop('disabled', false);
                        }
                    });

                });
            })(jQuery);
        </script>

        <a href="<?php echo esc_attr(admin_url('admin.php?page=youtube-ep-onboarding') . '&random=' . rand(1, 1000) . '&TB_iframe=true&width=950&height=800'); ?>" class="thickbox ytprefs-onboarding-launch" id="ytprefs-onboarding-launch" title="EmbedPlus for YouTube Setup Guide"></a>

        <?php
        if (function_exists('add_thickbox'))
        {
            add_thickbox();
        }
    }

    public static function settings_save($all)
    {
        $new_options = array();
        $new_options[self::$opt_center] = self::postchecked(self::$opt_center) ? 1 : 0;
        $new_options[self::$opt_glance] = self::postchecked(self::$opt_glance) ? 1 : 0;
        $new_options[self::$opt_autoplay] = self::postchecked(self::$opt_autoplay) ? 1 : 0;
        $new_options[self::$opt_debugmode] = self::postchecked(self::$opt_debugmode) ? 1 : 0;
        $new_options[self::$opt_uninstall_data] = self::postchecked(self::$opt_uninstall_data) ? 1 : 0;
        $new_options[self::$opt_admin_off_scripts] = self::postchecked(self::$opt_admin_off_scripts) ? 1 : 0;
        $new_options[self::$opt_defer_js] = self::postchecked(self::$opt_defer_js) ? 1 : 0;
        $new_options[self::$opt_defer_jquery] = self::postchecked(self::$opt_defer_jquery) ? 1 : 0;
        $new_options[self::$opt_ajax_save] = self::postchecked(self::$opt_ajax_save) ? 1 : 0;
        $new_options[self::$opt_show_pointer] = self::postchecked(self::$opt_show_pointer) ? 1 : 0;
        $new_options[self::$opt_old_script_method] = self::postchecked(self::$opt_old_script_method) ? 1 : 0;
        $new_options[self::$opt_cc_load_policy] = self::postchecked(self::$opt_cc_load_policy) ? 1 : 0;
        $new_options[self::$opt_iv_load_policy] = self::postchecked(self::$opt_iv_load_policy) ? 1 : 3;
        $new_options[self::$opt_loop] = self::postchecked(self::$opt_loop) ? 1 : 0;
        $new_options[self::$opt_modestbranding] = self::postchecked(self::$opt_modestbranding) ? 1 : 0;
        $new_options[self::$opt_fs] = self::postchecked(self::$opt_fs) ? 1 : 0;
        $new_options[self::$opt_playsinline] = self::postchecked(self::$opt_playsinline) ? 1 : 0;
        $new_options[self::$opt_origin] = self::postchecked(self::$opt_origin) ? 1 : 0;
        $new_options[self::$opt_controls] = self::postchecked(self::$opt_controls) ? 1 : 0;
        $new_options[self::$opt_color] = self::postchecked(self::$opt_color) ? 'red' : 'white';
        $new_options[self::$opt_nocookie] = self::postchecked(self::$opt_nocookie) ? 1 : 0;
        $new_options[self::$opt_gb_compat] = self::postchecked(self::$opt_gb_compat) ? 1 : 0;
        $new_options[self::$opt_facade_mode] = self::postchecked(self::$opt_facade_mode) ? 1 : 0;
        $new_options[self::$opt_facade_autoplay] = self::postchecked(self::$opt_facade_autoplay) ? 1 : 0;
        $new_options[self::$opt_gdpr_consent] = self::postchecked(self::$opt_gdpr_consent) ? 1 : 0;
        $new_options[self::$opt_playlistorder] = self::postchecked(self::$opt_playlistorder) ? 1 : 0;
        $new_options[self::$opt_acctitle] = self::postchecked(self::$opt_acctitle) ? 1 : 0;
        $new_options[self::$opt_migrate] = self::postchecked(self::$opt_migrate) ? 1 : 0;
        $new_options[self::$opt_migrate_youtube] = self::postchecked(self::$opt_migrate_youtube) ? 1 : 0;
        $new_options[self::$opt_migrate_embedplusvideo] = self::postchecked(self::$opt_migrate_embedplusvideo) ? 1 : 0;
        $new_options[self::$opt_oldspacing] = self::postchecked(self::$opt_oldspacing) ? 1 : 0;
        $new_options[self::$opt_frontend_only] = self::postchecked(self::$opt_frontend_only) ? 1 : 0;
        $new_options[self::$opt_responsive] = self::postchecked(self::$opt_responsive) ? 1 : 0;
        $new_options[self::$opt_widgetfit] = self::postchecked(self::$opt_widgetfit) ? 1 : 0;
        $new_options[self::$opt_evselector_light] = self::postchecked(self::$opt_evselector_light) ? 1 : 0;
        $new_options[self::$opt_stop_mobile_buffer] = self::postchecked(self::$opt_stop_mobile_buffer) ? 1 : 0;
        $new_options[self::$opt_restrict_wizard] = self::postchecked(self::$opt_restrict_wizard) ? 1 : 0;
        $new_options[self::$opt_ajax_compat] = self::postchecked(self::$opt_ajax_compat) ? 1 : 0;
        $new_options[self::$opt_defaultdims] = self::postchecked(self::$opt_defaultdims) ? 1 : 0;
        $new_options[self::$opt_pause_others] = self::postchecked(self::$opt_pause_others) ? 1 : 0;
        $new_options[self::$opt_defaultvol] = self::postchecked(self::$opt_defaultvol) ? 1 : 0;
        $new_options[self::$opt_dohl] = self::postchecked(self::$opt_dohl) ? 1 : 0;
        $new_options[self::$opt_onboarded] = self::postchecked(self::$opt_onboarded) ? 1 : 0;
        $new_options[self::$opt_not_live_on] = self::postchecked(self::$opt_not_live_on) ? 1 : 0;
        $new_options[self::$opt_not_live_on_channel] = self::postchecked(self::$opt_not_live_on_channel) ? 1 : 0;
        $new_options[self::$opt_gallery_hideprivate] = self::postchecked(self::$opt_gallery_hideprivate) ? 1 : 0;
        $new_options[self::$opt_gallery_showtitle] = self::postchecked(self::$opt_gallery_showtitle) ? 1 : 0;
        $new_options[self::$opt_gallery_showpaging] = self::postchecked(self::$opt_gallery_showpaging) ? 1 : 0;
        $new_options[self::$opt_gallery_autonext] = self::postchecked(self::$opt_gallery_autonext) ? 1 : 0;
        $new_options[self::$opt_gallery_thumbplay] = self::postchecked(self::$opt_gallery_thumbplay) ? 1 : 0;
        $new_options[self::$opt_gallery_channelsub] = self::postchecked(self::$opt_gallery_channelsub) ? 1 : 0;
        $new_options[self::$opt_gallery_customarrows] = self::postchecked(self::$opt_gallery_customarrows) ? 1 : 0;
        $new_options[self::$opt_gallery_collapse_grid] = self::postchecked(self::$opt_gallery_collapse_grid) ? 1 : 0;

        $new_options[self::$opt_cc_lang_pref] = sanitize_title($_POST[self::$opt_cc_lang_pref]);

        $_rel = 0;
        try
        {
            $_rel = is_numeric(trim($_POST[self::$opt_rel])) ? intval(trim($_POST[self::$opt_rel])) : $_rel;
        }
        catch (Exception $ex)
        {
            
        }
        $new_options[self::$opt_rel] = $_rel;


        $_gdpr_consent_message = '';
        try
        {
            $_gdpr_consent_message = wp_kses_post(stripslashes($_POST[self::$opt_gdpr_consent_message]));
        }
        catch (Exception $ex)
        {
            $_gdpr_consent_message = '';
        }
        $new_options[self::$opt_gdpr_consent_message] = $_gdpr_consent_message;

        $_gdpr_consent_button = '';
        try
        {
            $_gdpr_consent_button = wp_kses_post(stripslashes($_POST[self::$opt_gdpr_consent_button]));
        }
        catch (Exception $ex)
        {
            $_gdpr_consent_button = '';
        }
        $new_options[self::$opt_gdpr_consent_button] = $_gdpr_consent_button;

        $_ytapi_load = 'light';
        try
        {
            $_ytapi_load_temp = $_POST[self::$opt_ytapi_load];
            if (in_array($_ytapi_load_temp, array('always', 'light', 'never')))
            {
                $_ytapi_load = $_ytapi_load_temp;
            }
        }
        catch (Exception $ex)
        {
            
        }
        $new_options[self::$opt_ytapi_load] = $_ytapi_load;

        $_maxres_facade = 'eager';
        try
        {
            $_maxres_facade_temp = filter_input(INPUT_POST, self::$opt_maxres_facade);
            if (in_array($_maxres_facade_temp, array('eager', 'soft', 'off')))
            {
                $_maxres_facade = $_maxres_facade_temp;
            }
        }
        catch (Exception $ex)
        {
            
        }
        $new_options[self::$opt_maxres_facade] = $_maxres_facade;

        $_restrict_wizard_roles = self::$dft_roles;
        try
        {
            $_restrict_wizard_roles = is_array($_POST[self::$opt_restrict_wizard_roles]) ? $_POST[self::$opt_restrict_wizard_roles] : $_restrict_wizard_roles;
        }
        catch (Exception $ex)
        {
            
        }
        $new_options[self::$opt_restrict_wizard_roles] = $_restrict_wizard_roles;


        $_defaultwidth = '';
        try
        {
            $_defaultwidth = is_numeric(trim($_POST[self::$opt_defaultwidth])) ? intval(trim($_POST[self::$opt_defaultwidth])) : $_defaultwidth;
        }
        catch (Exception $ex)
        {
            
        }
        $new_options[self::$opt_defaultwidth] = $_defaultwidth;

        $_defaultheight = '';
        try
        {
            $_defaultheight = is_numeric(trim($_POST[self::$opt_defaultheight])) ? intval(trim($_POST[self::$opt_defaultheight])) : $_defaultheight;
        }
        catch (Exception $ex)
        {
            
        }
        $new_options[self::$opt_defaultheight] = $_defaultheight;

        $_responsive_all = 1;
        try
        {
            $_responsive_all = is_numeric(trim($_POST[self::$opt_responsive_all])) ? intval(trim($_POST[self::$opt_responsive_all])) : $_responsive_all;
        }
        catch (Exception $ex)
        {
            
        }
        $new_options[self::$opt_responsive_all] = $_responsive_all;

        $_vol = '';
        try
        {
            $_vol = is_numeric(trim($_POST[self::$opt_vol])) ? intval(trim($_POST[self::$opt_vol])) : $_vol;
        }
        catch (Exception $ex)
        {
            
        }
        $new_options[self::$opt_vol] = $_vol;

        $_gallery_pagesize = 15;
        try
        {
            $_gallery_pagesize = is_numeric(trim($_POST[self::$opt_gallery_pagesize])) ? intval(trim($_POST[self::$opt_gallery_pagesize])) : $_gallery_pagesize;
        }
        catch (Exception $ex)
        {
            
        }
        $new_options[self::$opt_gallery_pagesize] = $_gallery_pagesize;


        $_gallery_columns = 3;
        try
        {
            $_gallery_columns = is_numeric(trim($_POST[self::$opt_gallery_columns])) ? intval(trim($_POST[self::$opt_gallery_columns])) : $_gallery_columns;
        }
        catch (Exception $ex)
        {
            
        }
        $new_options[self::$opt_gallery_columns] = $_gallery_columns;


        $_gallery_collapse_grid_breaks = self::$dft_bpts;
        try
        {
            $_gallery_collapse_grid_breaks = is_array($_POST[self::$opt_gallery_collapse_grid_breaks]) ? $_POST[self::$opt_gallery_collapse_grid_breaks] : $_gallery_collapse_grid_breaks;
        }
        catch (Exception $ex)
        {
            
        }
        $new_options[self::$opt_gallery_collapse_grid_breaks] = $_gallery_collapse_grid_breaks;



        $_gallery_scrolloffset = 20;
        try
        {
            $_gallery_scrolloffset = is_numeric(trim($_POST[self::$opt_gallery_scrolloffset])) ? intval(trim($_POST[self::$opt_gallery_scrolloffset])) : $_gallery_scrolloffset;
        }
        catch (Exception $ex)
        {
            
        }
        $new_options[self::$opt_gallery_scrolloffset] = $_gallery_scrolloffset;

        $_gallery_channelsublink = '';
        try
        {
            $_gallery_channelsublink = trim(strip_tags($_POST[self::$opt_gallery_channelsublink]));
            $pieces = explode('?', $_gallery_channelsublink);
            $_gallery_channelsublink = trim($pieces[0]);
        }
        catch (Exception $ex)
        {
            $_gallery_channelsublink = '';
        }
        $new_options[self::$opt_gallery_channelsublink] = $_gallery_channelsublink;


        $_gallery_channelsubtext = '';
        try
        {
            $_gallery_channelsubtext = stripslashes(trim($_POST[self::$opt_gallery_channelsubtext]));
        }
        catch (Exception $ex)
        {
            $_gallery_channelsubtext = '';
        }
        $new_options[self::$opt_gallery_channelsubtext] = $_gallery_channelsubtext;


        $_gallery_custom_prev = 'Prev';
        try
        {
            $_gallery_custom_prev = trim(strip_tags($_POST[self::$opt_gallery_customprev]));
        }
        catch (Exception $ex)
        {
            $_gallery_custom_prev = 'Prev';
        }
        $new_options[self::$opt_gallery_customprev] = $_gallery_custom_prev;


        $_gallery_custom_next = 'Next';
        try
        {
            $_gallery_custom_next = trim(strip_tags($_POST[self::$opt_gallery_customnext]));
        }
        catch (Exception $ex)
        {
            $_gallery_custom_next = 'Next';
        }
        $new_options[self::$opt_gallery_customnext] = $_gallery_custom_next;


        $_not_live_content = '';
        try
        {
            $_not_live_content = wp_kses_post(stripslashes($_POST[self::$opt_not_live_content]));
        }
        catch (Exception $ex)
        {
            $_not_live_content = '';
        }
        $new_options[self::$opt_not_live_content] = $_not_live_content;


        $_apikey = '';
        try
        {
            $_apikey = trim(str_replace(array(' ', "'", '"'), array('', '', ''), strip_tags($_POST[self::$opt_apikey])));
        }
        catch (Exception $ex)
        {
            $_apikey = '';
        }
        $new_options[self::$opt_apikey] = $_apikey;


        $all = $new_options + $all;

        update_option(self::$opt_alloptions, $all);
        return array(
            'type' => 'success',
            'message' => 'Changes were saved. <em>If you are using a separate caching plugin and you do not see your changes after saving, <strong class="orange">you need to reset your cache.</strong></em>'
        );
    }

    public static function settings_save_ajax()
    {
        $result = array();
        if (check_ajax_referer('_epyt_save', '_epyt_nonce', false) && current_user_can('manage_options'))
        {
            $all = get_option(self::$opt_alloptions);
            $result = self::settings_save($all);
        }
        else
        {
            $result['type'] = 'error';
            $result['message'] = 'Sorry, there was a problem saving your settings.';
        }
        echo json_encode($result);
        die();
    }

    public static function onboarding_save_valid(&$input)
    {
        $messages = array();
        try
        {
            $input[self::$opt_modestbranding] = intval($input[self::$opt_modestbranding]);
            $input[self::$opt_responsive] = intval($input[self::$opt_responsive]);
            $input[self::$opt_responsive_all] = intval($input[self::$opt_responsive_all]);
            $input[self::$opt_defer_js] = intval($input[self::$opt_defer_js]);

            $input[self::$opt_gallery_pagesize] = intval($input[self::$opt_gallery_pagesize]);
            $input[self::$opt_gallery_columns] = intval($input[self::$opt_gallery_columns]);
            $input[self::$opt_not_live_content] = wp_kses_post(stripslashes($input[self::$opt_not_live_content]));
            $input[self::$opt_not_live_on] = intval($input[self::$opt_not_live_on]);
            $input[self::$opt_not_live_on_channel] = intval($input[self::$opt_not_live_on_channel]);

            if (!in_array($input[self::$opt_ytapi_load], array('always', 'light', 'never')))
            {
                $input[self::$opt_ytapi_load] = 'light';
            }
            $input[self::$opt_facade_mode] = intval($input[self::$opt_facade_mode]);
            $input[self::$opt_facade_autoplay] = intval($input[self::$opt_facade_autoplay]);
            $input[self::$opt_gdpr_consent] = intval($input[self::$opt_gdpr_consent]);
            $input[self::$opt_gdpr_consent_message] = wp_kses_post(stripslashes($input[self::$opt_gdpr_consent_message]));
            $input[self::$opt_gdpr_consent_button] = wp_kses_post(stripslashes($input[self::$opt_gdpr_consent_button]));
            $input[self::$opt_nocookie] = intval($input[self::$opt_nocookie]);
        }
        catch (Exception $ex)
        {
            $messages[] = 'Please enter valid data.';
        }

        if (empty($messages))
        {
            return true;
        }
        return $messages;
    }

    public static function onboarding_save()
    {
        $result = array();
        $default = array(
            self::$opt_rel => 1,
            self::$opt_modestbranding => 0,
            self::$opt_responsive => 0,
            self::$opt_responsive_all => 0,
            self::$opt_defer_js => 0,
            self::$opt_gallery_pagesize => 15,
            self::$opt_gallery_columns => 3,
            self::$opt_not_live_content => '',
            self::$opt_not_live_on => 0,
            self::$opt_not_live_on_channel => 0,
            self::$opt_ytapi_load => 'light',
            self::$opt_facade_mode => 0,
            self::$opt_facade_autoplay => 1,
            self::$opt_gdpr_consent => 0,
            self::$opt_gdpr_consent_message => self::$dft_gdpr_consent_message,
            self::$opt_gdpr_consent_button => 'Accept YouTube Content',
            self::$opt_nocookie => 0
        );


        $input = shortcode_atts($default, stripslashes_deep($_POST));
        $valid = self::onboarding_save_valid($input);
        if ($valid === true)
        {
            self::update_option_set($input);
            $result['type'] = 'success';
        }
        else
        {
            $result['type'] = 'error';
            $result['message'] = implode('<br/>', $valid);
        }

        return $result;
    }

    public static function onboarding_save_ajax()
    {
        $result = array();
        if (self::is_ajax() && self::ajax_referer() && current_user_can('manage_options'))
        {
            $result = self::onboarding_save();
        }
        else
        {
            $result['type'] = 'error';
            $result['message'] = 'Sorry, there was a problem saving the data.';
        }
        echo json_encode($result);
        die();
    }

    public static function onboarding_save_apikey_valid(&$input)
    {
        $messages = array();
        try
        {
            $input[self::$opt_apikey] = trim(str_replace(array(' ', "'", '"'), array('', '', ''), strip_tags($input[self::$opt_apikey])));
        }
        catch (Exception $ex)
        {
            $messages[] = 'Please enter a valid API key.';
        }

        if (empty($messages))
        {
            return true;
        }
        return $messages;
    }

    public static function onboarding_save_apikey()
    {
        $result = array();
        $default = array(
            self::$opt_apikey => '',
        );

        $input = shortcode_atts($default, stripslashes_deep($_POST));
        $valid = self::onboarding_save_apikey_valid($input);
        if ($valid === true)
        {
            self::update_option_set($input);
            $result['type'] = 'success';
        }
        else
        {
            $result['type'] = 'error';
            $result['message'] = implode('<br/>', $valid);
        }

        return $result;
    }

    public static function onboarding_save_apikey_ajax()
    {
        $result = array();
        if (self::is_ajax() && self::ajax_referer() && current_user_can('manage_options'))
        {
            $result = self::onboarding_save_apikey();
        }
        else
        {
            $result['type'] = 'error';
            $result['message'] = 'Sorry, there was a problem saving the data.';
        }
        echo json_encode($result);
        die();
    }

    public static function ytprefs_show_onboarding()
    {

        if (!current_user_can('manage_options'))
        {
            wp_die(__('You do not have sufficient permissions to access this page.'));
        }
        if (self::$double_plugin)
        {
            self::double_plugin_warning();
        }
        $all = get_option(self::$opt_alloptions);

        $do_once = array(
            self::$opt_onboarded => 1
        );
        self::update_option_set($do_once);
        ?>
        <div class="wrap wrap-ytprefs-onboarding">
            <div class="ytprefs-ob-title">
                EmbedPlus for YouTube Setup Guide
            </div>
            <div class="relative">
                <div class="ytprefs-ob-step ytprefs-ob-step1 active-step">
                    <div class="ytprefs-ob-content">
                        <div class="ytprefs-ob-block">
                            <p>
                                With so many options available in this plugin, we created this easy setup guide to help you  quickly learn about its <strong>most common settings and newest features</strong>. We hope it will get you embedding videos, galleries, and/or live streams sooner.
                            </p>
                            <p>
                                You'll have an opportunity to see and set many other options after completing this setup guide.
                            </p>
                        </div>
                    </div>

                    <div class="ytprefs-ob-content ytprefs-ob-content1">
                        <h2>
                            Below, check all that apply:<br><em>I'm interested in embedding...</em>
                        </h2>
                        <div class="ytprefs-hover-icons">
                            <img class="yob-single-icon" src="<?php echo plugins_url('images/icon-player-single.png', __FILE__) ?>"/>
                            <img class="yob-gallery-icon" src="<?php echo plugins_url('images/icon-playlist-gallery.png', __FILE__) ?>"/>
                            <img class="yob-standalone-icon" src="<?php echo plugins_url('images/icon-playlist-self.png', __FILE__) ?>"/>
                            <img class="yob-live-icon" src="<?php echo plugins_url('images/icon-player-live.png', __FILE__) ?>"/>
                            <img class="yob-privacy-icon" src="<?php echo plugins_url('images/icon-player-privacy.png', __FILE__) ?>"/>
        <!--                            <img class="yob-monetize-icon" src="<?php echo plugins_url('images/icon-player-money.png', __FILE__) ?>"/>-->
                        </div>
                        <ul class="ytprefs-ob-filter">
                            <li><label><input type="checkbox" data-obfilter="yob-single" /> Single videos.</label></li>
                            <li><label><input type="checkbox" data-obfilter="yob-gallery" /> Galleries of playlists or channels (displays thumbnails and a player).</label></li>
                            <li><label><input type="checkbox" data-obfilter="yob-standalone" /> Self-contained playlists or channels (no thumbnails, just YouTube's standard playlist player).</label></li>
                            <li><label><input type="checkbox" data-obfilter="yob-live" /> Live streams or premieres.</label></li>
                            <li style="display:none;"><label><input type="checkbox" data-obfilter="yob-privacy" /> With GDPR / privacy features.</label></li>
        <!--                            <li><label><input type="checkbox" data-obfilter="yob-monetize" /> Relevant video ads that earn me up to 10x higher CPMs (revenue) than display advertising.</label></li>-->
                        </ul>
                        <div class="ytprefs-ob-nav">
                            <button type="button" class="button-secondary ytprefs-ob-nav-close">Cancel</button>
                            <button type="button" disabled class="button-primary ytprefs-ob-nav-next">Next &raquo;</button>
                        </div>
                        <h2>
                            Intro Video
                        </h2>
                        <p>
                            Want a quick visual overview? Here's a preview of some of the free features of the plugin.
                        </p>
                        <div class="epyt-fitvid">
                            <iframe src="https://www.youtube.com/embed/QDdvXBqfrzM?rel=0" allowfullscreen="" frameborder="0"></iframe>
                        </div>
                        <p>
                        </p>
                    </div>
                </div>
                <div class="ytprefs-ob-step ytprefs-ob-step2">
                    <div class="ytprefs-ob-content">
                        <h2>
                            You're interested in:
                        </h2>

                        <form id="form-onboarding">
                            <input type="hidden" name="action" value="my_embedplus_onboarding_save_ajax"/>

                            <div class="ytprefs-ob-setting yob-single yob-gallery yob-standalone yob-live">
                                <label>
                                    <b class="chktitle">Related Videos:</b>
                                    Show or hide related and recommended videos at the end of playback.
                                    <br>
                                </label>
                                <input type="radio" name="<?php echo self::$opt_rel; ?>" id="<?php echo self::$opt_rel; ?>-1" value="-1" <?php checked($all[self::$opt_rel], -1); ?>>
                                <label for="<?php echo self::$opt_rel; ?>-1">Hide related videos at the end of playback</label> &nbsp;&nbsp;
                                <input type="radio" name="<?php echo self::$opt_rel; ?>" id="<?php echo self::$opt_rel; ?>0" value="0" <?php checked($all[self::$opt_rel], 0); ?>>
                                <label for="<?php echo self::$opt_rel; ?>0">Show related videos only from the video's channel</label> &nbsp;&nbsp;
                                <input type="radio" name="<?php echo self::$opt_rel; ?>" id="<?php echo self::$opt_rel; ?>1" value="1" <?php checked($all[self::$opt_rel], 1); ?>>
                                <label for="<?php echo self::$opt_rel; ?>1">Show related videos</label> &nbsp;&nbsp;
                            </div>
                            <div class="ytprefs-ob-setting yob-single yob-gallery yob-standalone">
                                <input value="1" name="<?php echo self::$opt_facade_mode; ?>" id="<?php echo self::$opt_facade_mode; ?>" <?php checked($all[self::$opt_facade_mode], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_facade_mode ?>">
                                    <b class="chktitle"><?php _e('Facade Mode:', 'youtube-embed-plus'); ?> <sup class="orange">new</sup></b> 
                                    <?php _e('This improves performance by loading a lighter version of the player, until it is clicked. Then the real player loads (note: for live streams, the real player is always loaded).  We have tested this feature in multiple cases and found it to successfully improve your Lighthouse performance score by addressing  the following recommendation: "Some third-party resources can be lazy loaded with a facade."', 'youtube-embed-plus'); ?>
                                    <a href="https://www.youtube.com/watch?v=W7PKUjVBDNE" target="_blank"><?php _e('See an example of this feature at work.', 'youtube-embed-plus'); ?></a>
                                </label>                       
                                <div class="p box_facade_mode">
                                    <input value="1" name="<?php echo self::$opt_facade_autoplay; ?>" id="<?php echo self::$opt_facade_autoplay; ?>" type="checkbox" class="checkbox" <?php checked($all[self::$opt_facade_autoplay], 1); ?>>
                                    <label for="<?php echo self::$opt_facade_autoplay ?>">
                                        <b class="chktitle"><?php _e('Autoplay On Facade Click:', 'youtube-embed-plus'); ?></b>
                                        <span>
                                            <?php _e('After clicking once on the facade (aka light thumbnail), it is replaced with the real player. Check this option to have the real player play immediately, otherwise it will require an additional click. Note that checking this option will use YouTube\'s autoplay feature, which will not contribute toward play counts.  If you\'re embedding videos from someone else\'s channel, we recommend checking this.  If you\'re embedding videos that are from your channel, then you should self-evaluate the tradeoff involving play counts and additional clicking.', 'youtube-embed-plus'); ?>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="ytprefs-ob-setting yob-single yob-gallery yob-standalone yob-live">
                                <input value="1" name="<?php echo self::$opt_modestbranding; ?>" id="<?php echo self::$opt_modestbranding; ?>" <?php checked($all[self::$opt_modestbranding], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_modestbranding; ?>"><?php _e('<b class="chktitle">Modest Branding:</b> No YouTube logo will be shown on the control bar.  Instead, as required by YouTube, the logo will only show as a watermark when the video is paused/stopped.') ?></label>
                            </div>
                            <div class="ytprefs-ob-setting yob-single yob-gallery yob-standalone yob-live">
                                <input value="1" name="<?php echo self::$opt_responsive; ?>" id="<?php echo self::$opt_responsive; ?>" <?php checked($all[self::$opt_responsive], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_responsive; ?>"><?php _e('<b class="chktitle">Responsive Video Sizing:</b> Make your videos responsive so that they dynamically fit in all screen sizes (smart phone, PC and tablet). NOTE: While this is checked, any custom hardcoded widths and heights you may have set will dynamically change too. <b>Do not check this if your theme already handles responsive video sizing.</b>') ?></label>
                                <p id="boxresponsive_all" class="ytindent">
                                    <input type="radio" name="<?php echo self::$opt_responsive_all; ?>" id="<?php echo self::$opt_responsive_all; ?>1" value="1" <?php checked($all[self::$opt_responsive_all], 1); ?> >
                                    <label for="<?php echo self::$opt_responsive_all; ?>1">Responsive for all YouTube videos</label> &nbsp;&nbsp;
                                    <input type="radio" name="<?php echo self::$opt_responsive_all; ?>" id="<?php echo self::$opt_responsive_all; ?>0" value="0" <?php checked($all[self::$opt_responsive_all], 0); ?> >
                                    <label for="<?php echo self::$opt_responsive_all; ?>0">Responsive for only videos embedded via this plugin</label>
                                </p>
                            </div>
                            <div class="ytprefs-ob-setting yob-gallery">
                                <label for="<?php echo self::$opt_gallery_pagesize; ?>"><b class="chktitle">Default Gallery Page Size:</b></label>
                                <select name="<?php echo self::$opt_gallery_pagesize; ?>" id="<?php echo self::$opt_gallery_pagesize; ?>" style="width: 60px;">
                                    <?php
                                    $gps_val = intval(trim($all[self::$opt_gallery_pagesize]));
                                    $gps_val = min($gps_val, 50);
                                    for ($gps = 1; $gps <= 50; $gps++)
                                    {
                                        ?><option <?php echo $gps_val == $gps ? 'selected' : '' ?> value="<?php echo $gps ?>"><?php echo $gps ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                Enter how many thumbnails per page should be shown at once (YouTube allows a maximum of 50 per page). You can later use the embedding wizard to customize this for specific galleries.
                            </div>

                            <div class="ytprefs-ob-setting yob-gallery">
                                <label for="<?php echo self::$opt_gallery_columns; ?>"><b class="chktitle">Default Gallery Number of Columns:</b></label>
                                <input name="<?php echo self::$opt_gallery_columns; ?>" id="<?php echo self::$opt_gallery_columns; ?>" type="number" class="textinput" style="width: 60px;" value="<?php echo esc_attr(trim($all[self::$opt_gallery_columns])); ?>">                        
                                Enter how many thumbnails can fit per row.  You can later use the embedding wizard to customize this for specific galleries.
                            </div>
                            <div class="ytprefs-ob-setting yob-live">
                                <p>
                                    <b class="chktitle">Use "Not Live" Fallback Content For Live Streams:</b> (<a href="<?php echo self::$epbase ?>/how-to-embed-a-youtube-livestream-in-wordpress.aspx" target="_blank">More info here</a>)
                                    This feature lets you display alternate content if your live stream is not currently active. This feature works for <strong>direct link</strong> live streams (more info about channel-based live streams below).
                                </p>
                                <div class="ytindent chx">
                                    <input value="1" name="<?php echo self::$opt_not_live_on; ?>" id="<?php echo self::$opt_not_live_on; ?>" <?php checked($all[self::$opt_not_live_on], 1); ?> type="checkbox" class="checkbox">
                                    <label for="<?php echo self::$opt_not_live_on; ?>"><span class="chktitle">Turn on for <b>direct link</b> live streams:</span>
                                        When your direct-link embed is not streaming live, the YouTube live player usually displays a countdown after the user clicks the play button.
                                        Instead of showing that player, you can display some "coming soon" content in that space for your visitors to see until your video begins to live stream. 
                                        The plugin will automatically switch to your video's live stream once it's active. In the <em>"Not Live" Fallback Content</em> box below, enter what you would like to appear until then.
                                        You can even insert shortcodes from our plugin into the box below (shortcodes from other plugins may or may not work correctly).
                                        If you just want to show the standard countdown player that YouTube provides, don't use this feature.
                                        <strong>NOTE: Turning this on for direct-link live streams uses a significant amount of your YouTube API quota. We suggest unchecking it if your site has high traffic. If you chose to use this feature, do not put another live stream embed below.</strong>
                                    </label>
                                    <br>
                                    <br>
                                    <input disabled id="<?php echo self::$opt_not_live_on_channel; ?>" type="checkbox" class="checkbox">
                                    <label><span class="chktitle">Turn on for <b>channel</b> live streams (<span class="orange">upgrade required</span>) </span> 
                                        Unfortunately, Google has recently removed their YouTube API feature that used to support channel-based live streams. It appears they won't change things back. However, you do have a couple of choices:
                                        <ol>
                                            <li>Use "Direct link" live streams, as explained above. The trade-off is that you will have to manually post and take down your future live streams every time they start and when they end, respectively.</li>
                                            <li>Or <a href="<?php echo self::$epbase ?>/dashboard/pro-easy-video-analytics.aspx" target="_blank">upgrade to Pro</a>, which has a solution that brings back all the "set it and forget it" features of channel-based embeds. We spent a significant amount of time developing a stable, long-term solution around YouTube's limitations, so we are releasing this effort exclusively to our Pro customers.</li>
                                        </ol>
                                    </label>
                                    <div class="p not-live-content">
                                        <p>                                            
                                            <b>"Not Live" Fallback Content:</b>
                                        </p>
                                        <?php
                                        wp_editor(wp_kses_post($all[self::$opt_not_live_content]), self::$opt_not_live_content, array('textarea_rows' => 7));
                                        ?> 
                                    </div>
                                </div>
                            </div>

                            <div class="ytprefs-ob-setting yob-privacy">
                                <b class="chktitle">YouTube API Loading:</b> Choose when to load the YouTube API. The "Restricted" or "Never" options will help with GDPR compliance:
                                <ul class="indent-option">
                                    <li><label><input type="radio" name="<?php echo self::$opt_ytapi_load ?>" value="light" <?php checked($all[self::$opt_ytapi_load], 'light'); ?> /> <em>Restricted</em> - (Recommended) Only load the API on pages that have a YouTube video.</label></li>
                                    <li><label><input type="radio" name="<?php echo self::$opt_ytapi_load ?>" value="never" <?php checked($all[self::$opt_ytapi_load], 'never'); ?> /> <em>Never</em> - Do not load the YouTube API. Note: The "Never" choice may break a few features such as Volume Initialization and Gallery Continuous/Auto Play.</label></li>
                                    <li><label><input type="radio" name="<?php echo self::$opt_ytapi_load ?>" value="always" <?php checked($all[self::$opt_ytapi_load], 'always'); ?> /> <em>Always</em> - Load the API on all pages. In most cases, the "Always" choice is not necessary.</label></li>
                                </ul>
                            </div>


                            <div class="ytprefs-ob-setting yob-privacy">
                                <input value="1" name="<?php echo self::$opt_gdpr_consent; ?>" id="<?php echo self::$opt_gdpr_consent; ?>" <?php checked($all[self::$opt_gdpr_consent], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_gdpr_consent; ?>">
                                    <b class="chktitle">Privacy/GDPR - Show Consent Message:</b> Ask for consent before loading YouTube content. A message will be displayed in place of the YouTube video, as shown in the screenshot below. Once the visitor approves consent, the YouTube content will load. You can customize the message text and the button text in the next 2 options.
                                </label>
                            </div>


                            <div class="ytprefs-ob-setting yob-privacy">                                
                                <label for="<?php echo self::$opt_gdpr_consent_message; ?>">
                                    <b class="chktitle">Privacy/GDPR - Consent Message Text:</b>
                                    Below you can customize the message that will appear to visitors before they accept YouTube content:
                                </label>
                                <div class="clearboth"></div>
                                <div class="gdpr-options-left">
                                    <?php
                                    wp_editor(wp_kses_post($all[self::$opt_gdpr_consent_message]), self::$opt_gdpr_consent_message, array(
                                        'textarea_rows' => 22,
                                        'media_buttons' => false,
                                        'teeny' => true
                                    ));
                                    ?> 
                                </div>
                                <div class="gdpr-options-right">
                                    <p><em>Example of message and button:</em></p>

                                    <img src="<?php echo plugins_url('images/ss-gdpr-message.png', __FILE__) ?>" alt="GDPR Consent Message Example" class="img-gdpr-message" />
                                </div>

                            </div>

                            <div class="clearboth"></div>
                            <div class="ytprefs-ob-setting yob-privacy">
                                <label for="<?php echo self::$opt_gdpr_consent_button; ?>">
                                    <b class="chktitle">Privacy/GDPR - Consent Button Text:</b>
                                    This is the text for the red "Accept" button that appears with the above privacy/GDPR message:
                                </label>
                                <br>
                                <input type="text" placeholder="Example: Accept YouTube Content" name="<?php echo self::$opt_gdpr_consent_button; ?>" id="<?php echo self::$opt_gdpr_consent_button; ?>" value="<?php echo esc_attr(trim($all[self::$opt_gdpr_consent_button])); ?>" class="textinput regular-text"/>
                            </div>

                            <div class="ytprefs-ob-setting yob-privacy">
                                <input value="1" name="<?php echo self::$opt_nocookie; ?>" id="<?php echo self::$opt_nocookie; ?>" <?php checked($all[self::$opt_nocookie], 1); ?> type="checkbox" class="checkbox">
                                <label for="<?php echo self::$opt_nocookie; ?>">
                                    <b class="chktitle">No Cookies:</b> Prevent YouTube from leaving tracking cookies on your visitors browsers unless they actual play the videos. This is coded to apply this behavior on links in your past post as well.
                                    <span id="boxnocookie">
                                        Checking this option may introduce issues to features that depend YouTube's API, such as galleries and playlists. Furthermore, videos on mobile devices may have problems if you leave this checked. We suggest testing this out to make sure you are pleased with the results.
                                    </span>
                                </label>
                            </div>

                            <div class="ytprefs-ob-nav">
                                <button type="button" class="button-secondary ytprefs-ob-nav-prev">&laquo; Previous</button>
                                <button type="submit" class="button-primary ytprefs-ob-nav-next">Save & Next &raquo;</button>
                            </div>                    
                        </form>
                    </div>
                </div>
                <div class="ytprefs-ob-step ytprefs-ob-step3">
                    <div class="ytprefs-ob-content">
                        <h2>
                            YouTube API Key
                        </h2>
                        <form id="form-onboarding-apikey">
                            <input type="hidden" name="action" value="my_embedplus_onboarding_save_apikey_ajax"/>
                            <p>
                                Some features (such as galleries, and some wizard features) now require you to create a free YouTube API key from Google.
                            </p>
                            <?php
                            if (!empty($all[self::$opt_apikey]) && strlen($all[self::$opt_apikey]) > 0)
                            {
                                ?>
                                <p class="ytprefs-ob-success">
                                    Great! You already have an API key.
                                </p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <p>
                                    The instructions for this are very specific, so we created a video for you that's hopefully easy to follow: <a href="https://www.embedplus.com/how-to-create-a-youtube-api-key.aspx" target="_blank">Click this link</a> and follow the steps on the page. Then save your API key here.
                                </p>                            
                                <?php
                            }
                            ?>
                            <p>
                                <input type="text" placeholder="Paste your YouTube API key here" name="<?php echo self::$opt_apikey; ?>" id="<?php echo self::$opt_apikey; ?>" value="<?php echo esc_attr(trim($all[self::$opt_apikey])); ?>" class="regular-text" style='max-width: 40%;'>
                            </p>                                

                            <div class="ytprefs-ob-nav">
                                <div class="ytprefs-ob-nav-ultimate">
                                    <button type="button" class="button-secondary ytprefs-ob-nav-prev">&laquo; Previous</button>                                
                                    <button type="button" class="button-secondary ytprefs-ob-nav-close">I'll do this later.</button>
                                    <button type="submit" class="button-primary ytprefs-ob-nav-next">Save & Finish</button>                                    
                                </div>
                                <div class="ytprefs-ob-nav-penultimate ytprefs-ob-nav-hide">
                                    <button type="button" class="button-secondary ytprefs-ob-nav-prev">&laquo; Previous</button>                                
                                    <button type="button" class="button-secondary ytprefs-ob-nav-skip">I'll do this later &raquo;</button>
                                    <button type="submit" class="button-primary ytprefs-ob-nav-next">Save & Next &raquo;</button>                                    
                                </div>
                            </div>                    
                        </form>
                    </div>
                </div>
                <div class="ytprefs-ob-step ytprefs-ob-step4">
                    <div class="ytprefs-ob-content">
                        <div class="ytprefs-ob-nav">
                            <button type="button" class="button-secondary ytprefs-ob-nav-prev">&laquo; Previous</button>
                            <button type="button" class="button-primary ytprefs-ob-nav-close">Finish</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php
    }

    public static function save_changes_button($submitted)
    {
        $button_label = 'Save Changes';
        if ($submitted)
        {
            $button_label = 'Changes Saved';
            ?>
            <script type="text/javascript">
                jQuery(document).ready(function ()
                {
                    setTimeout(function ()
                    {
                        jQuery('.ytprefs-submit').text('Save Changes');
                    }, 3000);
                });</script>
            <?php
        }
        ?>
        <p class="submit">
            <button type="submit" name="Submit" class="button-primary ytprefs-submit"><?php _e($button_label) ?></button>
            <em>If you're using a separate caching plugin and you do not see your changes after saving, <strong class="orange">you need to reset your cache.</strong></em>
        </p>
        <?php
    }

    public static function ytprefsscript()
    {
        $loggedin = current_user_can('edit_posts');
        if (!($loggedin && self::$alloptions[self::$opt_admin_off_scripts]))
        {
            wp_enqueue_style(
                    '__EPYT__style', plugins_url('styles/ytprefs' . self::$min . '.css', __FILE__), array(), self::$version
            );
            $cols = floatval(self::$alloptions[self::$opt_gallery_columns]);
            $cols = $cols == 0 ? 3.0 : $cols;
            $colwidth = 100.0 / $cols;
            $custom_css = "
                .epyt-gallery-thumb {
                        width: " . round($colwidth, 3) . "%;
                }
                ";

            if (self::$alloptions[self::$opt_gallery_collapse_grid] == 1)
            {
                foreach (self::$alloptions[self::$opt_gallery_collapse_grid_breaks] as $idx => $bpts)
                {
                    $custom_css .= "
                         @media (min-width:" . $bpts['bp']['min'] . "px) and (max-width: " . $bpts['bp']['max'] . "px) {
                            .epyt-gallery-rowbreak {
                                display: none;
                            }
                            .epyt-gallery-allthumbs[class*=\"epyt-cols\"] .epyt-gallery-thumb {
                                width: " . round(100.0 / intval($bpts['cols']), 3) . "% !important;
                            }
                          }";
                }
            }

            wp_add_inline_style('__EPYT__style', $custom_css);

            wp_enqueue_script('__ytprefs__', plugins_url('scripts/ytprefs' . self::$min . '.js', __FILE__), array('jquery'), self::$version);

            if (self::$alloptions[self::$opt_old_script_method] != 1)
            {
                $my_script_vars = array(
                    'ajaxurl' => admin_url('admin-ajax.php'),
                    'security' => wp_create_nonce('embedplus-nonce'),
                    'gallery_scrolloffset' => intval(self::$alloptions[self::$opt_gallery_scrolloffset]),
                    'eppathtoscripts' => plugins_url('scripts/', __FILE__),
                    'eppath' => plugins_url('/', __FILE__),
                    'epresponsiveselector' => self::get_responsiveselector(),
                    'epdovol' => true,
                    'version' => self::$alloptions[self::$opt_version],
                    'evselector' => self::get_evselector(),
                    'ajax_compat' => self::$alloptions[self::$opt_ajax_compat] == '1' ? true : false,
                    'maxres_facade' => esc_attr(self::$alloptions[self::$opt_maxres_facade]),
                    'ytapi_load' => self::$alloptions[self::$opt_ytapi_load],
                    'pause_others' => self::$alloptions[self::$opt_pause_others] == '1' ? true : false,
                    'stopMobileBuffer' => self::$alloptions[self::$opt_stop_mobile_buffer] == '1' ? true : false,
                    'facade_mode' => self::$alloptions[self::$opt_facade_mode] == '1' ? true : false,
                    'not_live_on_channel' => self::$alloptions[self::$opt_not_live_on_channel] == '1' ? true : false
                );

                wp_localize_script('__ytprefs__', '_EPYT_', $my_script_vars);
            }

            if ((bool) self::$alloptions[self::$opt_gdpr_consent])
            {
                wp_enqueue_script('__jquery_cookie__', plugins_url('scripts/jquery.cookie' . self::$min . '.js', __FILE__), array('jquery'), self::$version);
            }


            ////////////////////// cloudflare accomodation
            //add_filter('script_loader_tag', array(self::class, 'set_cfasync'), 10, 3);
        }
    }

    public static function set_cfasync($tag, $handle, $src)
    {
        if ('__ytprefs__' !== $handle)
        {
            return $tag;
        }
        return str_replace('<script', '<script data-cfasync="false" ', $tag);
    }

    public static function get_evselector()
    {
        $evselector = 'iframe.__youtube_prefs__[src], iframe[src*="youtube.com/embed/"], iframe[src*="youtube-nocookie.com/embed/"]';

        if (self::$alloptions[self::$opt_evselector_light] == 1)
        {
            $evselector = 'iframe.__youtube_prefs__[src]';
        }

        return $evselector;
    }

    public static function get_responsiveselector()
    {
        $responsiveselector = '[]';
        if (self::$alloptions[self::$opt_widgetfit] == 1)
        {
            $responsiveselector = '["iframe.__youtube_prefs_widget__"]';
        }
        if (self::$alloptions[self::$opt_responsive] == 1)
        {
            if (self::$alloptions[self::$opt_responsive_all] == 1)
            {
                $responsiveselector = '["iframe.__youtube_prefs__","iframe[src*=\'youtube.com\']","iframe[src*=\'youtube-nocookie.com\']","iframe[data-ep-src*=\'youtube.com\']","iframe[data-ep-src*=\'youtube-nocookie.com\']","iframe[data-ep-gallerysrc*=\'youtube.com\']"]';
            }
            else
            {
                $responsiveselector = '["iframe.__youtube_prefs__"]';
            }
        }
        return $responsiveselector;
    }

    public static function admin_enqueue_scripts($hook)
    {
        if (in_array($hook, self::$admin_page_hooks))
        {
            wp_enqueue_style('__ytprefs_admin__alertify_css', plugins_url('styles/alertify/alertify' . self::$min . '.css', __FILE__), array(), self::$version);
            wp_enqueue_style('__ytprefs_admin__alertify_theme_css', plugins_url('styles/alertify/themes/default' . self::$min . '.css', __FILE__), array(), self::$version);
            wp_enqueue_script('__ytprefs_admin__alertify_js', plugins_url('scripts/alertify/alertify' . self::$min . '.js', __FILE__), array(), self::$version);
            wp_enqueue_script('__ytprefs_admin__alertify_defaults_js', plugins_url('scripts/alertify/alertify-defaults' . self::$min . '.js', __FILE__), array(), self::$version);
        }

        wp_enqueue_style('embedplusyoutube', plugins_url('scripts/embedplus_mce' . self::$min . '.css', __FILE__), array(), self::$version);
        wp_enqueue_script('__ytprefs_admin__', plugins_url('scripts/ytprefs-admin' . self::$min . '.js', __FILE__), array('jquery', 'jquery-effects-fade'), self::$version, false);
        $admin_script_vars = array(
            'wpajaxurl' => admin_url('admin-ajax.php'),
            'wizhref' => admin_url('admin.php?page=youtube-ep-wizard') . '&random=' . rand(1, 1000) . '&TB_iframe=true&width=950&height=800',
            'manage_options' => current_user_can('manage_options'),
            'security' => wp_create_nonce('embedplus-nonce'),
            'onboarded' => self::$alloptions[self::$opt_onboarded],
            'epbase' => self::$epbase,
            'admin_url' => admin_url(),
            'admin_url_ytprefs' => admin_url('admin.php?page=youtube-my-preferences'),
                //'epblogwidth' => self::get_blogwidth(),
                //'epprokey' => self::$alloptions[self::$opt_pro],
                //'epbasesite' => self::$epbase,
                //'epversion' => self::$version,
                //'myytdefaults' => http_build_query(self::$alloptions),
                //'eppluginadminurl' => admin_url('admin.php?page=youtube-my-preferences')
        );
        wp_localize_script('__ytprefs_admin__', '_EPYTA_', $admin_script_vars);

        if (function_exists('add_thickbox'))
        {
            add_thickbox();
        }


        if ((get_bloginfo('version') >= '3.3') && self::custom_admin_pointers_check())
        {
            add_action('admin_print_footer_scripts', array(self::class, 'custom_admin_pointers_footer'));
            wp_enqueue_script('wp-pointer');
            wp_enqueue_style('wp-pointer');
        }

        if (self::$alloptions['glance'] == 1)
        {
            add_action('admin_print_footer_scripts', array(self::class, 'glance_script'));
        }

        if ($hook == self::$wizard_hook)
        {
            wp_enqueue_style('__ytprefs_admin__wizard_ui', plugins_url('styles/jquery-ui' . self::$min . '.css', __FILE__), array(), self::$version);
            wp_enqueue_style('__ytprefs_admin__wizard', plugins_url('styles/ytprefs-wizard' . self::$min . '.css', __FILE__), array(), self::$version);
            wp_enqueue_script('__ytprefs_admin__wizard_script', plugins_url('scripts/ytprefs-wizard' . self::$min . '.js', __FILE__), array('jquery', 'jquery-ui-accordion', 'jquery-ui-tabs'), self::$version);
        }

        if ($hook == self::$onboarding_hook)
        {
            wp_enqueue_style('__ytprefs_admin__onboarding_animate', plugins_url('scripts/embdyn' . self::$min . '.css', __FILE__), array(), self::$version);
            wp_enqueue_style('__ytprefs_admin__onboarding_ui', plugins_url('styles/jquery-ui' . self::$min . '.css', __FILE__), array(), self::$version);
            wp_enqueue_style('__ytprefs_admin__onboarding', plugins_url('styles/ytprefs-onboarding' . self::$min . '.css', __FILE__), array(), self::$version);
        }
    }

    public static function get_blogwidth()
    {
        $blogwidth = null;
        try
        {
            $embed_size_w = intval(get_option('embed_size_w'));

            global $content_width;
            if (empty($content_width))
            {
                $content_width = $GLOBALS['content_width'];
            }

            $blogwidth = $embed_size_w ? $embed_size_w : ($content_width ? $content_width : 450);
        }
        catch (Exception $ex)
        {
            
        }

        $blogwidth = preg_replace('/\D/', '', $blogwidth); //may have px

        return $blogwidth;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    private static function ajax_referer()
    {
        return check_ajax_referer('embedplus-nonce', 'security', false);
    }

    public static function base_url()
    {
        $parsed = parse_url(site_url());
        return $parsed['scheme'] . '://' . $parsed['host'];
    }

    public static function on_deactivation()
    {
    }

    private static function update_option_set($new_options)
    {
        $all = get_option(self::$opt_alloptions);
        $all = $new_options + $all;
        update_option(self::$opt_alloptions, $all);
        self::$alloptions = get_option(self::$opt_alloptions);
    }

    public static function gb_block_assets()
    {
        // frontend+backend styles.
        wp_enqueue_style('epytgb-style-css', plugins_url('dist/blocks.style.build.css', __FILE__), array('wp-blocks'), self::$version);
    }

    public static function gb_editor_assets()
    {
        // backend styels
        self::ytprefsscript();
        self::fitvids();
        if (!empty(self::$alloptions[self::$opt_not_live_on_channel]))
        {
            add_action("admin_print_footer_scripts", array(self::class, 'live_fallback_template'));
        }
        
        if (!self::is_restrict_wizard() && current_user_can('edit_posts'))
        {
            // Scripts.
            wp_enqueue_script(
                    'epytgb-block-js', // Handle.
                    plugins_url('/dist/blocks.build.js', __FILE__), // Block.build.js: We register the block here. Built with Webpack.
                    array('wp-blocks', 'wp-i18n', 'wp-element'), // Dependencies, defined above.
                    self::$version, true // Enqueue the script in the footer.
            );

            // Styles.
            wp_enqueue_style(
                    'epytgb-block-editor-css', // Handle.
                    plugins_url('dist/blocks.editor.build.css', __FILE__), // Block editor CSS.
                    array('wp-edit-blocks'), // Dependency to include the CSS after it.
                    self::$version
            );

            // Tiny MCE
            wp_enqueue_style('__ytprefs_admin__tinymce_css', plugins_url('styles/epyt_mce_wizard_button' . self::$min . '.css', __FILE__), array(), self::$version);
        }
    }

    public static function gb_classic_block_setup()
    {
        if (!self::is_restrict_wizard() && current_user_can('edit_posts'))
        {
            add_thickbox();
            add_filter("mce_external_plugins", array(self::class, "gb_add_tinymce_plugin"));
            add_filter('mce_buttons_2', array(self::class, 'gb_register_tinymce_button'));
        }
    }

    public static function gb_add_tinymce_plugin($plugin_array)
    {
        $plugin_array['epyt_mce_wizard_button'] = plugins_url('scripts/epyt_mce_wizard_button' . self::$min . '.js', __FILE__) . '?ver=' . self::$version;
        return $plugin_array;
    }

    public static function gb_register_tinymce_button($buttons)
    {
        array_push($buttons, "epyt_mce_wizard_button");
        return $buttons;
    }

    public static function gb_svg_defs()
    {
        ?>
        <svg style="height: 0 !important; width: 0 !important; display: absolute !important; top: 0 !important; left: 0 !important;"><defs><style>.epytcls-1{fill:red;}.epytcls-2{fill-rule:evenodd;fill:url(#radial-gradient);}.epytcls-3{fill:#31aaff;}.epytcls-4{fill:#fff;}</style><radialGradient id="radial-gradient" cx="193" cy="85.85" r="77.53" gradientUnits="userSpaceOnUse"><stop offset="0.17" stop-color="#fff"/><stop offset="0.68" stop-color="#31aaff"/></radialGradient></defs></svg>
        <?php
    }

    public static function gb_register_block_types()
    {
        if (function_exists('register_block_type'))
        {
            register_block_type(
                    'epyt/youtube', array(
                'attributes' => array(
                    'shortcode' => array(
                        'type' => 'string'
                    )
                ),
                'render_callback' => array(self::class, 'gb_render_callback_youtube'),
                    )
            );
        }
    }

    public static function gb_render_callback_youtube($attributes, $content)
    {
        if ($attributes && $attributes['shortcode'] && strpos($attributes['shortcode'], '[') === 0)
        {
            $render = do_shortcode($attributes['shortcode']);
            if (empty($render) && stripos($attributes['shortcode'], 'live=1') !== false)
            {
                $render = '<em>This is a live embed that is not currently streaming. You can optionally fill out the <a href="' . admin_url('admin.php?page=youtube-my-preferences') . '#not_live_content_scroll" target="_blank">Not Live Content</a> field in the YouTube plugin\'s Default Settings.</em>';
            }
            return $render;
        }
        return isset($attributes['shortcode']) ? $attributes['shortcode'] : '';
    }

}

// constants
define('EPYT_BASE_URL', rtrim(plugins_url('', __FILE__), "\\/") . '/');
define('EPYTGB_INCLUDES_PATH', rtrim(dirname(__FILE__), "\\/") . '/includes/gutenberg/');

$youtubeplgplus = new YouTubePrefs();




