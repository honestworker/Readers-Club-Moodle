<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace theme_edumy\output;

defined('MOODLE_INTERNAL') || die;

use action_link;
use action_menu;
use action_menu_filler;
use action_menu_link_secondary;
use block_contents;
use block_move_target;
use coding_exception;
use context_course;
use context_system;
use core_text;
use custom_menu;
use custom_menu_item;
use html_writer;
use moodle_page;
use moodle_url;
use navigation_node;
use pix_icon;
use stdClass;

require_once($CFG->dirroot."/course/format/lib.php");

class core_renderer_maintenance extends \core_renderer_maintenance {
    /**
     * Return the image URL, if any.
     *
     * Note that maximum sizes are not applied to the image.
     *
     * @param int $maxwidth The maximum width, or null when the maximum width does not matter.
     * @param int $maxheight The maximum height, or null when the maximum height does not matter.
     * @return moodle_url|false
     */
    public function get_theme_image_headerlogo1($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->headerlogo1)) {
            $url = $this->page->theme->setting_file_url('headerlogo1', 'headerlogo1');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_headerlogo1($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_headerlogo2($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->headerlogo2)) {
            $url = $this->page->theme->setting_file_url('headerlogo2', 'headerlogo2');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_headerlogo2($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_headerlogo3($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->headerlogo3)) {
            $url = $this->page->theme->setting_file_url('headerlogo3', 'headerlogo3');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_headerlogo3($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_headerlogo_mobile($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->headerlogo_mobile)) {
            $url = $this->page->theme->setting_file_url('headerlogo_mobile', 'headerlogo_mobile');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_headerlogo_mobile($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_footerlogo1($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->footerlogo1)) {
            $url = $this->page->theme->setting_file_url('footerlogo1', 'footerlogo1');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_footerlogo1($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_heading_bg($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->heading_bg)) {
            $url = $this->page->theme->setting_file_url('heading_bg', 'heading_bg');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_heading_bg($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_favicon($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->favicon)) {
            $url = $this->page->theme->setting_file_url('favicon', 'favicon');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_favicon($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_preloader_image($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->preloader_image)) {
            $url = $this->page->theme->setting_file_url('preloader_image', 'preloader_image');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_preloader_image($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_footer_row_1_col_2_icon_1($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->footer_row_1_col_2_icon_1)) {
            $url = $this->page->theme->setting_file_url('footer_row_1_col_2_icon_1', 'footer_row_1_col_2_icon_1');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_footer_row_1_col_2_icon_1($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_footer_row_1_col_2_icon_2($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->footer_row_1_col_2_icon_2)) {
            $url = $this->page->theme->setting_file_url('footer_row_1_col_2_icon_2', 'footer_row_1_col_2_icon_2');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_footer_row_1_col_2_icon_2($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_footer_row_1_col_2_icon_3($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->footer_row_1_col_2_icon_3)) {
            $url = $this->page->theme->setting_file_url('footer_row_1_col_2_icon_3', 'footer_row_1_col_2_icon_3');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_footer_row_1_col_2_icon_3($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_footer_row_1_col_3_icon_1($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->footer_row_1_col_3_icon_1)) {
            $url = $this->page->theme->setting_file_url('footer_row_1_col_3_icon_1', 'footer_row_1_col_3_icon_1');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_footer_row_1_col_3_icon_1($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_footer_row_1_col_3_icon_2($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->footer_row_1_col_3_icon_2)) {
            $url = $this->page->theme->setting_file_url('footer_row_1_col_3_icon_2', 'footer_row_1_col_3_icon_2');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            
            
            
            return parent::get_theme_image_footer_row_1_col_3_icon_2($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_coursebadge_common($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->coursebadge_common)) {
            $url = $this->page->theme->setting_file_url('coursebadge_common', 'coursebadge_common');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_coursebadge_common($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_coursebadge_enrolled($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->coursebadge_enrolled)) {
            $url = $this->page->theme->setting_file_url('coursebadge_enrolled', 'coursebadge_enrolled');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_coursebadge_enrolled($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_courseicon_book($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->courseicon_book)) {
            $url = $this->page->theme->setting_file_url('courseicon_book', 'courseicon_book');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_courseicon_book($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_courseicon_chat($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->courseicon_chat)) {
            $url = $this->page->theme->setting_file_url('courseicon_chat', 'courseicon_chat');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_courseicon_chat($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_courseicon_download($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->courseicon_download)) {
            $url = $this->page->theme->setting_file_url('courseicon_download', 'courseicon_download');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_courseicon_download($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_courseicon_followers($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->courseicon_followers)) {
            $url = $this->page->theme->setting_file_url('courseicon_followers', 'courseicon_followers');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_courseicon_followers($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_courseicon_plus($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->courseicon_plus)) {
            $url = $this->page->theme->setting_file_url('courseicon_plus', 'courseicon_plus');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_courseicon_plus($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_courseicon_return($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->courseicon_return)) {
            $url = $this->page->theme->setting_file_url('courseicon_return', 'courseicon_return');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_courseicon_return($maxwidth, $maxheight);
        }
    }
    public function get_theme_image_courseicon_share($maxwidth = null, $maxheight = 100) {
        global $CFG;
        if (!empty($this->page->theme->settings->courseicon_share)) {
            $url = $this->page->theme->setting_file_url('courseicon_share', 'courseicon_share');
            // Get a URL suitable for moodle_url.
            $relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
            $url = str_replace($relativebaseurl, '', $url);
            return new moodle_url($url);
            return parent::get_theme_image_courseicon_share($maxwidth, $maxheight);
        }
    }
}