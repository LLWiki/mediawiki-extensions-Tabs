<?php
/**
 * This file is part of the Tabs Extension to MediaWiki
 * http://example.com
 *
 * @author Pim (Joeytje50)
 *
 * @section LICENSE
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'Tabs',
	'author'         => 'Joeytje50',
	'url'            => '',
	'descriptionmsg' => 'tabs-desc',
);

$dir = __DIR__ . '/';
$wgAutoloadClasses['Tabs'] = $dir . 'Tabs.body.php';
$wgMessagesDirs['Tabs'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['Tabs'] =  $dir . 'Tabs.i18n.php';
$wgHooks['ParserFirstCallInit'][] = 'Tabs::init';
$wgResourceModules['ext.tabs'] = array(
	'scripts' => 'ext.tabs.js',
	'styles' => 'ext.tabs.css',
	'messages' => array(
		'tabs-tab-label-placeholder',
		'tabs-toggle-open-placeholder',
		'tabs-toggle-close-placeholder',
	),
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'Tabs',
);
