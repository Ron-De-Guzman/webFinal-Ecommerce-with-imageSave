<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<link rel="stylesheet" type="text/css" href="image.css">
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
</body>
</html>