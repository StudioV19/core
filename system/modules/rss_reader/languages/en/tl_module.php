<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2011
 * @author     Leo Feyer <http://www.contao.org>
 * @package    RssReader
 * @license    LGPL
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['rss_cache']         = array('Cache timeout', 'Here you can define how long the RSS feed is being cached.');
$GLOBALS['TL_LANG']['tl_module']['rss_feed']          = array('Feed URLs', 'Please enter the URL of one or more RSS feeds.');
$GLOBALS['TL_LANG']['tl_module']['rss_template']      = array('Feed template', 'Here you can select the feed template.');
$GLOBALS['TL_LANG']['tl_module']['rss_numberOfItems'] = array('Number of items', 'Here you can limit the number of items. Set to 0 to show all.');

?>