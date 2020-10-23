<!DOCTYPE html>
<!--
Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
-->
<?php 
print_r($_POST);

?>
<html>
<head>
	<meta charset="utf-8">
	<title>CKEditor Sample</title>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<script src="ckeditor.js"></script>
	
	<style>
		.adjoined-bottom:before{
			background: white;
		}
	</style>
</head>
<body>
<main>
	<form method="post">
	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea id="editor" name="editor">
					
				</textarea>
			</div>
		</div>
	</div>
<input type="submit" name="hello">
</form>
</main>

<script>
	$(function(){
CKEDITOR.replace( 'editor' );
});
	
</script>

</body>
</html>
