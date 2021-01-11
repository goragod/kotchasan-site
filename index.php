<?php
/**
 * index.php
 *
 * @author Goragod Wiriya <admin@goragod.com>
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 *
 * @see http://www.kotchasan.com/
 */

// เปิดใช้งานแสดงผล error ออกทางหน้าจอ
define('DEBUG', 0);
// load Kotchasan
include 'Kotchasan/load.php';
// Initial Kotchasan Framework
Kotchasan::createWebApplication()->run();
