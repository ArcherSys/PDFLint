<!DOCTYPE HTML>
    <html>
        <head>
            <script src="/core/js/jquery.js"></script>
         

          <script type="text/javascript">
(function(a){if(window.filepicker){return}var b=a.createElement("script");b.type="text/javascript";b.async=!0;b.src=("https:"===a.location.protocol?"https:":"http:")+"//api.filepicker.io/v2/filepicker.js";var c=a.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c);var d={};d._queue=[];var e="pick,pickMultiple,pickAndStore,read,write,writeUrl,export,convert,store,storeUrl,remove,stat,setKey,constructWidget,makeDropPane".split(",");var f=function(a,b){return function(){b.push([a,arguments])}};for(var g=0;g<e.length;g++){d[e[g]]=f(e[g],d._queue)}window.filepicker=d})(document);
</script>

        </head>
        <body>
            <input type="file" id="filesave"/>
            <button id="convert">Convert!</button>
 <script>
 var input = window.document.getElementById("filesave");
window.filepicker.setKey("Aa7Hgeq3DSoCai2UUZIJbz");
$("#convert").click(function(){
store(input);
});
function store(input){

filepicker.store(
  input,{},
  function(new_blob){
    window.location.assign(new_blob.url + "/convert?format=docx");
  }
  );


  }
</script>
<script src="https://api.filepicker.io/v1/filepicker_debug.js"></script>
        </body>
    </html>
           
          
           
