<!DOCTYPE html>
<html>
	<form enctype="multipart/form-data" method="post" onsubmit="">
		<input type="hidden" name="MAX_FILE_SIZE" value="30000">
		Send this file: <input name="userfile" type="file">
		Name:<input type="text" id="name">
		Mailto:<input type="text" id="mail">
		<input type="submit" value="Send File" onclick="sda()">
	</form>
	<script>
	function sda() {
		var myname = document.getElementById('name').value;
		if (myname.length == 0){
			alert("please enter your name");
		}
	}
	</script>
</html>
<?php
// In PHP earlier then 4.1.0, $HTTP_POST_FILES should be used instead of $_FILES.
// In PHP earlier then 4.0.3, use copy() and is_uploaded_file() instead of move_uploaded_file
$uploaddir = 'images/';
print "<pre>";
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $_FILES['userfile']['name'])) {
print "File is valid, and was successfully uploaded. Here's some more debugging info:\n";
print_r($_FILES);
} else {
print "Possible file upload attack! Here's some debugging info:\n";
print_r($_FILES);
}
?>