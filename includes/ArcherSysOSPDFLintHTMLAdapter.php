<?php
   namespace ArcherSys\Apps\PDFLint;
   require "ArcherSysOSPDFLintAdapter.php";
  class ArcherSysOSPDFLintHTMLAdapter extends ArcherSysOSPDFLintAdapter{
      function saveToFile ($contents,$filename){
           file_put_contents($this->getFileBucket().$filename.".".$this->getFormat(),$contents);
         }
      function getFormat(){
           return "html";
       }
      function getFileContents($filename){
              return file_get_contents($this->getFileBucket().$filename.".".$this->getFormat());
        }
     function getFileBucket(){
        return $_SERVER["DOCUMENT_ROOT"]."/Producktiviti/PDFLint/".$this->getFormat();
     }
}
?>