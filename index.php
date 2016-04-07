<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WebApp 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/core.css" />
    <link rel="stylesheet" href="jquery-mobile/jquery.mobile-1.4.5.min.css" />
    <script src="jquery-mobile/jquery-1.11.1.min.js"></script>
	  <script src="jquery-mobile/jquery.mobile-1.4.5.min.js"></script>
  </head>
  <body>
    <div data-role="page" id="page" data-theme="a">
    	<div data-role="header">
        <h1>Portfolio</h1>
      </div>
    	<div role="content">
        <ul data-role="listview">
          <li data-theme="b"><a href="#design" data-transition="slidedown">Design</a></li>
          <li data-theme="c"><a href="#typografi" data-transition="flip">Typografi</a></li>
          <li data-theme="d"><a href="#billedbehandling" data-transition="fade">Billedbehandling</a></li>
          <li data-theme="e"><a href="#workflow" data-transition="pop">Workflow</a></li>
        </ul>
      </div>
    	<div data-role="footer"><h4>Page Footer</h4></div>
    </div>
    <div data-role="page" id="design">
      <div data-role="header">
        <a href="#" class="ui-btn" data-rel="back">Go Back</a>
        <h1>Design</h1>
      </div>
      <div data-role="content">
        <div class="design_img"><img src="images/design2.jpg"></div>
        <h3>Forskellige design</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div data-role="footer">
        <h4>Page Footer</h4>
      </div>
    </div>
    <div data-role="page" id="typografi">
      <div data-role="header">
        <a href="#" class="ui-btn" data-rel="back">Go Back</a>
        <h1>Page Three</h1>
      </div>
      <div data-role="content">
        Content
      </div>
      <div data-role="footer">
        <h4>Page Footer</h4>
      </div>
    </div>
    <div data-role="page" id="billedbehandling">
      <div data-role="header">
        <a href="#" class="ui-btn" data-rel="back">Go Back</a>
        <h1>Page Four</h1>
      </div>
      <div data-role="content">
        Content
      </div>
      <div data-role="footer">
        <h4>Page Footer</h4>
      </div>
    </div>
    <div data-role="page" id="workflow">
      <div data-role="header">
        <a href="#" class="ui-btn" data-rel="back">Go Back</a>
        <h1>Page Five</h1>
      </div>
      <div data-role="content">
        Content
      </div>
      <div data-role="footer">
        <h4>Page Footer</h4>
      </div>
    </div>
  </body>
</html>
