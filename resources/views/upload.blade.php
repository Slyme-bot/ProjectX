<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
<form method="POST" action="" enctype="multipart/form-data">
	@csrf
	<label for="File">Choose File</label>
 	<input type="file" name="file">
 	<button type="submit" name="submit">Upload</button>
</form>
</body>
</html>