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
 * Plugin version and other meta-data are defined here.
 *
 * @package     mod_subjectattendance
 * @copyright   2025 Alex Orlov <snickser@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['absent'] = 'Отсутствовал';
$string['allgroups'] = 'Все группы';
$string['emptyignore'] = 'Игнорировать пустые значения при расчете процентов в статистике';
$string['emptyignorecolumn'] = 'Предметы';
$string['emptyignorerow'] = 'Студенты';
$string['eventattendance_exported'] = 'Посещаемость экспортирована в CSV';
$string['eventattendance_marked'] = 'Посещаемость отмечена';
$string['excluderoles'] = 'Исключать роли из списка';
$string['excused'] = 'Уважительная причина';
$string['messagebody'] = '{$a->status} {$a->firstname}, уведомляем об отметке посещаемости.
В курсе <a href="{$a->url}">«{$a->course}» - {$a->name}</a>
Тема «{$a->field}»';
$string['messageprovider:subjectattendance_receipt'] = 'Уведомления посещаемости';
$string['messagesubject'] = 'Уведомление об изменении в табеле посещаемости';
$string['modulename'] = 'Посещаемость по предметам';
$string['modulename_help'] = 'Модуль для отметки посещаемости по заранее заданным предметам/темам.';
$string['modulenameplural'] = 'Посещаемости по предметам';
$string['notify'] = 'Уведомлять студентов';
$string['notify_help'] = 'Включаются уведомления студентов о проставленном статусе, и их разные варианты. Уведомлять только для красных, для красных и жёлтых, и для всех.';
$string['numbered'] = 'Нумеровать список студентов';
$string['pluginname'] = 'Посещаемость по предметам';
$string['present'] = 'Присутствовал';
$string['save'] = 'Сохранить';
$string['saved'] = 'Сохранено.';
$string['student'] = 'Студент';
$string['subjectattendance:addinstance'] = 'Добавить модуль Посещаемость по предметам';
$string['subjectattendance:mark'] = 'Отмечать посещаемость по предметам';
$string['subjectattendance:view'] = 'Просматривать посещаемость по предметам';
$string['subjectslist'] = 'Предметы (по одному на строку)';
$string['subjectslist_help'] = 'Новые предметы добавляются в конец списка. Изменение имени ранее добавленных не производится, будет удаление старого и добавление нового, потому заранее следите за наименованием.';
