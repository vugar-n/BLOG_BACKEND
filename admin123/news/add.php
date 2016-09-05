<?php include "../db.php"; ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="add.php" method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="name"><br>
    <textarea name="text_preview" rows="4" cols="50"></textarea>
    <textarea name="text_one" rows="4" cols="50"></textarea>
    <textarea name="text_two" rows="4" cols="50"></textarea>
    <input type="text" name="author" placeholder="name"><br>
    <input type="date" name="date" placeholder="name"><br>
		<input type="file" name="photo" placeholder="photo"><br>
		<input type="submit" name="submit" value="add">
	</form>

	<?php
		if (isset($_POST['submit'])) {
      $title = $_POST['title'];
      $text_preview = $_POST['text_preview'];
      $text_one = $_POST['text_one'];
      $text_two = $_POST['text_two'];
    	$author = $_POST['author'];
      $date = $_POST['date'];
			$photo = $_FILES['photo']["name"];



			$target_dir="images/";
			$target_file=$target_dir.rand().basename($_FILES["photo"]["name"]);
			$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

			move_uploaded_file($_FILES["photo"]["tmp_name"], "../../".$target_file);
			$db_values= "'$title','$text_preview','$text_one','$text_two','$author','$date','$target_file'";
			$db = new Database();
			$db->connect();
			if ($db->db_con) {
				$query = $db->insert("`news`","`title`,`text_preview`,`text_one`,`text_two`,`author`,`date`,`photo`",$db_values);
				var_dump($query);
			}else{
				echo "eror var";
			}
		}
	 ?>
</body>
</html>
