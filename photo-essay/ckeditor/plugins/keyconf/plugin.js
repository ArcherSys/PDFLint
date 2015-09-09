CKEDITOR.plugins.add( 'keyconf', {
    requires: 'widget',

    icons: 'codesnippet',

    init: function( editor ) {
        editor.addCommand('keyconf', new CKEDITOR.dialogCommand('keyConfDialog'));
        editor.ui.addButton('KeyConf', {
          label: 'Configure Keyboard Shortcuts',
           command: 'keyconf',
           toolbar: 'insert'
         });
    }
} );