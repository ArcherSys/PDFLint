<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/CloudAdapter.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/LogicManager.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/Table.php";
require_once "pdflint_includes/EditorManager.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/jQueryManager.php";
use ArcherSys\Viewer\Contrib\View;
use ArcherSys\Viewer\LogicManager;
use ArcherSys\Devices\CloudAdapter;
use ArcherSys\Viewer\Layouts\Table;
use Archersys\Viewer\jQueryManager;
use ArcherSys\Viewer\Layouts\TableDataCell;
use PDFLint\Editors\PDFLint5EditorialManager;
use ArcherSys\Viewer\Layouts\BodyTableDataCell;
use ArcherSys\Viewer\Layouts\TableRow;
$tejeditor = new View("New Triple Entry Journal",function(){
LogicManager::addJSModule("/core/js/dropzone");
jQueryManager::addjQuery();
PDFLint5EditorialManager::addNativeTinyMCE();
?>
<link rel="stylesheet" href="tej.new.css"/>
<script>
$(function(){
  tinymce.init({selector: "#quote-html"});
  
  tinymce.init({selector: "#aao-html"});
  
  tinymce.init({selector: "#questions-html"});
});
</script>
<?php
},function(){
?>

<form action="tejprocessor.php" method="POST">
<input type="text" name="title">
<input type="text" name="filename">
<select name="template" required>
    <option value="summer">Classic</option>
    <option value="annotative">Literary Technician</option>
    </select>
<?php
$editors = new Table("editors",function(){
$rowh = new TableRow("headers-editor");
$rowh->addDataCell(new TableDataCell("Cited Quote From The Text","citations"));
$rowh->addDataCell(new TableDataCell("Analysis &amp; Opinion on the Text","analysis-opinion"));
$rowh->addDataCell(new TableDataCell("Your Level 3 Question for the Future Discussion","question"));
echo $rowh;
},
function(){
?>
<?php
$rowb = new TableRow("body-editor");
$rowb->addBodyDataCell(new BodyTableDataCell("<textarea name='quotation' id='quote-html'></textarea>",'quote-htmldc'));

$rowb->addBodyDataCell(new BodyTableDataCell("<textarea name='analysis' id='aao-html'></textarea>",'aao-htmldc'));

$rowb->addBodyDataCell(new BodyTableDataCell("<textarea name='question' id='questions-html'></textarea>",'questions-htmldc'));
echo $rowb;
});
?>
<button id="savetodropbox" >Save To Dropbox</button>

<input type="submit" value="Save to ArcherVM">
</form>
<?php
});
?>