<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--
    SuDoc/search-sudoc-1895-1976.php - initialize session for Monthly Catalog Sudoc searching
    (c)2014 Kathryn Lybarger. CC-BY-SA
-->
  <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Just one moment...</title>
		<style type="text/css">
		body { background-color: #e5dccb; text-align: center; }
		</style>
		<script>
			function do_redirect() {
				window.location = "http://monthlycatalog.chadwyck.com/search/executeSearch.do?searchTermSudocno=<?php print $_REQUEST['sudoc'] ?>";
			}
		</script>
    </head>
	<body onload="do_redirect()">
		<p>Just one moment...</p>
		<iframe style="display: none" src="http://monthlycatalog.chadwyck.com/search/initSearch.do" />
	</body>
  </html>

