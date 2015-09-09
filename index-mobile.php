<!DOCTYPE HTML>
<html>
<head>
<title>PDFLint 6 for Mobile</title>

<meta name="viewport" content="width=device-width initial-scale=1">
    
  <link rel="stylesheet" href="/core/mobile-theme/themes/ArcherSys_OS.css" />
  <link rel="stylesheet" href="/core/mobile-theme/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="/core/mobile-theme/themes/jquery.mobile.structure-1.4.5.min.css" />
  <script src="/core/js/jquery.js"></script>
  <script src="/core/mobile-theme/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div data-role="page" id="home">
        <div data-role="header">
            <h1>PDFLint 6</h1>
            
        </div>
        <div data-role="main" class="ui-content">
            <form class="ui-filterable">
                <input data-type="search" placeholder="Search DOCTYPES" id="doctypes">
            </form>
            <ul data-role="listview" data-filter="true" data-input="#doctypes">
                <li><a href="essays/essay.new.mobile.php">Essay</a></li>
                <li><a href="tej.new.mobile.php">TEJ Document</a></li>
            </ul>
        </div>
    </div>
</body>
</html>