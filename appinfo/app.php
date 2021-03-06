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

OC::$CLASSPATH['OC_Files_Thumbnail_Hooks_Handlers'] = "apps/files_thumbnail/lib/hooks_handlers.php";
OC::$CLASSPATH['OC\Thumbnail\Exceptions\ThumbnailError'] = "apps/files_thumbnail/lib/thumbnail_exceptions.php";
OC::$CLASSPATH['OC\Thumbnail\Exceptions\InvalidPathError'] = "apps/files_thumbnail/lib/thumbnail_exceptions.php";
OC::$CLASSPATH['OC\Thumbnail\Exceptions\GeneratorNotFoundError'] = "apps/files_thumbnail/lib/thumbnail_exceptions.php";
OC::$CLASSPATH['OC\Thumbnail\ThumbnailManager'] = "apps/files_thumbnail/lib/thumbnail.php";
OC::$CLASSPATH['OC\Thumbnail\ThumbnailGeneratorRegistry'] = "apps/files_thumbnail/lib/thumbnail_generator_registry.php";
OC::$CLASSPATH['OC\Thumbnail\ThumbnailGeneratorTemplate'] = "apps/files_thumbnail/lib/thumbnail_generator_template.php";
OC::$CLASSPATH['OC\Thumbnail\Generator\Image'] = "apps/files_thumbnail/lib/thumbnail_generator/image.php";

OCP\Util::connectHook('OC_Filesystem', 'delete', "OC_Files_Thumbnail_Hooks_Handlers", "removeThumbnail");
OCP\Util::connectHook('OC_Filesystem', 'rename', "OC_Files_Thumbnail_Hooks_Handlers", "renameThumbnail");
OCP\Util::connectHook('OC_Filesystem', 'signal_write', "OC_Files_Thumbnail_Hooks_Handlers", "updateThumbnail");
