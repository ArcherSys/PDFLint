<?php
  require_once "includes/ArcherSysOSPDFLintHTMLAdapter.php";
  use ArcherSys\Apps\PDFLint\ArcherSysOSPDFLintHTMLAdapter;
  $filesaver = new ArcherSysOSPDFLintHTMLAdapter();
   $filesaver->saveToFile($_POST["document"],$_POST["doc-filename"]);
  ?>