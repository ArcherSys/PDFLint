<?php 
 namespace PDFLint\Editors;
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/Manager.php";
use ArcherSys\APIGen\AbstractManager;
class PDFLint5EditorialManager extends AbstractManager{
 const TINYMCE_CDN_CODE = "http://tinymce.cachefly.net/4.1/tinymce.min.js";
 static function addTinyMCE(){
     echo "<script src='".PDFLint5EditorialManager::TINYMCE_CDN_CODE."'></script>";
}
static function addNativeTinyMCE(){
echo '<script src="/Producktiviti/PDFLint/tinymce/js/tinymce.min.js"></script>';
}

}