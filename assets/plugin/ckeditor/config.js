/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
  // Define changes to default configuration here. For example:
  // config.language = 'fr';
  // config.uiColor = '#AADC6E';
  
  config.width = 630;
  config.height = 200;
  
  config.toolbar = 'Full';

  config.toolbar_Full =
  [
    ['Cut','Copy','Paste','PasteText','PasteFromWord', 'SpellChecker'],
    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
    ['TextColor','BGColor'],
    '/',
    ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
    ['Format','Font','FontSize'],
  ];
  
  
  
};
