<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Event class for attendance.
 *
 * @package    mod_subjectattendance
 * @copyright  2013 Alex Orlov <snickser@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_subjectattendance\event;

/**
 * Event triggered when a student's attendance is marked via AJAX.
 *
 * @package    mod_subjectattendance
 */
class attendance_marked extends \core\event\base {
    /**
     * Init method to set basic properties.
     *
     * @return void
     */
    protected function init() {
        $this->data['crud'] = 'u';
        $this->data['edulevel'] = self::LEVEL_TEACHING;
        $this->data['objecttable'] = 'subjectattendance_log';
    }

    /**
     * Returns the localized event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('eventattendance_marked', 'mod_subjectattendance');
    }

    /**
     * Returns a description of what happened.
     *
     * @return string
     */
    public function get_description() {
        return "The user with id '{$this->userid}' marked attendance "
             . "for student with id '{$this->relateduserid}' "
             . "in subject '{$this->other['subjectid']}' "
             . "with status '{$this->other['status']}'.";
    }

    /**
     * Returns a URL related to the event.
     *
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/mod/subjectattendance/view.php', ['id' => $this->contextinstanceid]);
    }
}
