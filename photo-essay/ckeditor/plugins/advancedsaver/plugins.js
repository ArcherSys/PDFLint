CKEDITOR.plugins.add( 'advancedsaver', {
    /* Advanced Saver Plugin installs Dropbox functionality along With CafeSync Support
     * @namespace CKEDITOR.advancedsaver
     * @author Weldon Henson
     */
     requires: 'widget',
     init: function( editor ) {
       editor.ui.addButton('advancedsaver', {
        label: 'Save To Dropbox',
        command: 'saveWorkToDropBox',
        toolbar: 'tools'

     }
     });

} );