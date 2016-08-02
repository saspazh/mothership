/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	// config.filebrowserBrowseUrl = '../edumix/CKeditor/kcfinder/browse.php?type=files';
	// config.filebrowserImageBrowseUrl = '../edumix/CKeditor/kcfinder/browse.php?type=images';
	// config.filebrowserFlashBrowseUrl = '../../edumix/CKeditor/kcfinder/browse.php?type=flash';
	// config.filebrowserUploadUrl = '../../asset/edumix/CKeditor/kcfinder/upload.php?type=files';
	// config.filebrowserImageUploadUrl = '../../edumix/CKeditor/kcfinder/upload.php?type=images';
	// config.filebrowserFlashUploadUrl = '../../edumix/CKeditor/kcfinder/upload.php?type=flash';

	config.filebrowserBrowseUrl = '../edumix/CKeditor/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = '../edumix/CKeditor/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = '../edumix/CKeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = '../edumix/CKeditor/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = '../edumix/CKeditor/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = '../edumix/CKeditor/kcfinder/upload.php?opener=ckeditor&type=flash';

};
