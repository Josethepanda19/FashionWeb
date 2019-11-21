 <html>
<?php //include_once(APP_NON_WEB_BASE_DIR . 'includes/file_upload_functions.php');
// Non-web tree base directory for this application.
define('NON_WEB_BASE_DIR', 'C:/cis4270/');
define('APP_NON_WEB_BASE_DIR', NON_WEB_BASE_DIR . 'Fashion_works/');
include_once(APP_NON_WEB_BASE_DIR . 'includes/cis4270Includes.php');

?>
 	<head>
 		<title>File Upload Example</title>
 	</head>
 	<body>
    <h1>WELCOME TO VINCENT'S TEST PAGE</h1>
 		<form action="" method="POST" enctype="multipart/form-data">
 			<p>Choose a photo for your profile picture:</p>
 			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
 			<input type="file" name="profile_picture" /><br />
 			<input type="submit" name="submit" value="Upload file" />
 		</form>

 <?php

 // Inspect the values PHP retrieves in $_FILES
 echo "<hr />";
 var_dump($_FILES);
 echo "<hr />";

 upload_file('profile_picture');

 ?>
 	</body>
 </html>
