<?php 
   namespace ArcherSys\Apps\PDFLint;
   abstract class ArcherSysOSPDFLintAdapter{
    abstract function saveToFile($contents,$filename);
   abstract function getFormat();
    abstract function getFileContents($filename);
     abstract function getFileBucket();
}
?>