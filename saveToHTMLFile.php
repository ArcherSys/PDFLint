<?php
  require "includes/ArcherSysOSPDFLintHTMLAdapter.php";
  $filesaver = new ArcherSysOSPDFLintHTMLAdapter();
   $filesaver->saveToFile($_POST["document"],$_POST["doc-filename"]);
  ?>