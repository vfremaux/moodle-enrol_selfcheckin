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

/**
 * Manual plugin external functions and service definitions.
 *
 * @package    enrol_selfcheckin
 * @category   webservice
 * @copyright  2023 Valery Fremaux (valery.fremaux@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$functions = array(

    // === enrol related functions ===
    'enrol_selfcheckin_enrol_users' => array(
        'classname'   => 'enrol_selfcheckin_external',
        'methodname'  => 'enrol_users',
        'classpath'   => 'enrol/selfcheckin/externallib.php',
        'description' => 'Self Check In enrol users',
        'capabilities'=> 'enrol/selfcheckin:enrol',
        'type'        => 'write',
    ),

    'enrol_selfcheckin_unenrol_users' => array(
        'classname'   => 'enrol_selfcheckin_external',
        'methodname'  => 'unenrol_users',
        'classpath'   => 'enrol/selfcheckin/externallib.php',
        'description' => 'Self Check In unenrol users',
        'capabilities'=> 'enrol/selfcheckin:unenrol',
        'type'        => 'write',
    ),

);
