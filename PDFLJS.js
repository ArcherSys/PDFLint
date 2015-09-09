$(function(){
  var tour =  new Tour({
       steps: [
          {
            element: "#intro",
            title: "Welcome to PDFLint!" ,
            content: "Hi! Welcome to PDFLint By Weldon H  \n and the ACOSF! I'm Weldon H , Himself, \n and I am going to teach you \n how to use this fun tool!",
       },
         {
           
element: "#newessay",
           title: " Goto the Essay Creator ",
           content: "Click on The New Essay Button",
            },
          {
           element: "#opengmail",
           title: "Send! ",
           content: "If you have this, click here to send your work.",
            },
{
 title:"Check the Forks Center!",
 element: "#Forks",
content: "Check This for Updates to the PDFLint Word Processor",
},
           
{
 title:"Get Bug Notifications!",
 element: "#Issues",
  content: "Check This for Updates on PDFLint Word Processor forks!",
},
{
 title:"View Watchers!",
 element: "#Watchers",
  content: "Check This for Updates on PDFLint Word Processor bugs",
},


        
          ]});
       
           tour.init();
           tour.start();
  
   
             var  options = {

    // Required. Called when a user selects an item in the Chooser.
    success: function(files) {
        var WantsFile = confirm("Are you sure you want to download this? \n " +files[0].link);
      if(WantsFile){
        
  }
                       
    },

    // Optional. Called when the user closes the dialog without selecting a file
    // and does not include any parameters.
    cancel: function() {

    },

    // Optional. "preview" (default) is a preview link to the document for sharing,
    // "direct" is an expiring link to download the contents of the file. For more
    // information about link types, see Link types below.
    linkType: "preview", // or "direct"

    // Optional. A value of false (default) limits selection to a single file, while
    // true enables multiple file selection.
    multiselect: false, // or true

    // Optional. This is a list of file extensions. If specified, the user will
    // only be able to select files with these extensions. You may also specify
    // file types, such as "video" or "images" in the list. For more information,
    // see File types below. By default, all extensions are allowed.
    extensions: ['.pdf', '.doc', '.docx'],
};
          var button = Dropbox.createChooseButton(options);
document.getElementById("container").appendChild(button);

      });
 