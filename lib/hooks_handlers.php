<?php
/**
 * ownCloud
 *
 * @author RixTox
 * @copyright 2012 RixTox Me@RixTox.com
 * @license WTFPL
 * 	http://wtfpl2.com/
 *
 */

use \OC\Thumbnail\ThumbnailManager;

class OC_Files_Thumbnail_Hooks_Handlers {

	public static function removeThumbnail($params) {
		ThumbnailManager::removeThumbnails($params['path']);
	}

	public static function renameThumbnail($params) {
		ThumbnailManager::renameThumbnails($params['oldpath'], $params['newpath']);
	}

	public static function updateThumbnail($params) {
		ThumbnailManager::updateThumbnail($params['path']);
	}
}
