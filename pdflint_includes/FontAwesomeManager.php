<?php
  namespace ArcherSys\PDFLint;
  /*The  PDFLint Word Processor's Core Rendering and Logical Parts Here
   *  @package PDFLint */
  
  require_once $_SERVER['DOCUMENT_ROOT'].'\includes\ViewManager.php';
  use ArcherSys\Viewer\ViewManager;
  class FontAwesomeManager extends ViewManager{
  	
  static function addLargeLogo($logo){
  /* Adds a Font Awesome icon to any element of your choice as log as you call this inside the element's body
   * 
   *  */
  	   echo "<i class=\"fa fa-large fa-".$logo."\"></i>";
  		
  	}
  	
  }
  		?>