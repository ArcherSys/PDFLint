CKEDITOR.dialog.add( 'keyConfDialog', function( editor ) {
    return {
        title: 'Keyboard Shortcuts',
        minWidth: 400,
        minHeight: 200,

        contents: [
            {
                id: 'tab-basic',
                label: 'Enter Key',
                elements: [
                    {
                        type: 'select',
                        id: 'enter-keys',
                        label: 'Enter Keys",
                        validate: CKEDITOR.dialog.validate.notEmpty( "Abbreviation field cannot be empty." ),

                        setup: function( element ) {
                            this.setValue( element.getText() );
                        },

                        commit: function( element ) {
                            element.setText( this.getValue() );
                        }
                    },
                    {
                        type: 'text',
                        id: 'title',
                        label: 'Explanation',
                        validate: CKEDITOR.dialog.validate.notEmpty( "Explanation field cannot be empty." ),

                        setup: function( element ) {
                            this.setValue( element.getAttribute( "title" ) );
                        },

                        commit: function( element ) {
                            element.setAttribute( "title", this.getValue() );
                        }
                    }
                ]
            },

            {
                id: 'tab-adv',
                label: 'Advanced Settings',
                elements: [
                    {
                        type: 'text',
                        id: 'id',
                        label: 'Id',

                        setup: function( element ) {
                            this.setValue( element.getAttribute( "id" ) );
                        },

                        commit: function ( element ) {
                            var id = this.getValue();
                            if ( id )
                                element.setAttribute( 'id', id );
                            else if ( !this.insertMode )
                                element.removeAttribute( 'id' );
                        }
                    }
                ]
            }
        ],

        onShow: function() {
            var selection = editor.getSelection();
            var element = selection.getStartElement();

            if ( element )
                element = element.getAscendant( 'abbr', true );

            if ( !element || element.getName() != 'abbr' ) {
                element = editor.document.createElement( 'abbr' );
                this.insertMode = true;
            }
            else
                this.insertMode = false;

            this.element = element;
            if ( !this.insertMode )
                this.setupContent( this.element );
        },

        onOk: function() {
            var dialog = this;
            var abbr = this.element;
            this.commitContent( abbr );

            if ( this.insertMode )
                editor.insertElement( abbr );
        }
    };
});