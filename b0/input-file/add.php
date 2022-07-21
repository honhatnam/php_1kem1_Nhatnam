<?php
$title  = '';
$description = '';
$errorTitle = '';
$errorDes = '';
$flag = '';
require_once 'function.php';
if(isset($_POST['title']) && isset($_POST['description'])){
	
	$title       = $_POST['title'];
	$description = $_POST['description'];

	//Error Title
	

	if(checkEmpty($title) == true) $errorTitle = '<p class="error">Dữ liệu không được rỗng</p>';
    if(checkLength($title, 5, 100) == true) $errorTitle .= '<p class="error">Tiêu đề phải từ 5 đến 100 ký tự</p>';	

	//Error Description
	if(checkEmpty($description) == true) $errorDes = '<p class="error">Dữ liệu không được rỗng</p>';
    if(checkLength($description, 5, 5000) == true) $errorDes .= '<p class="error">Tiêu đề phải từ 5 đến 100 ký tự</p>';
	
	if($errorTitle == '' && $errorDes == ''){
		$data = $title.'||'.$description;
		
		$name = randomString(5);

		$fileName = './files/'.$name.'.txt';
		if(file_put_contents($fileName,$data)){
			$title  = '';
            $description = '';
			$flag = true;
		}
	}
    


}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>PHP FILE - ADD</title>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
           $('#cancel-button').click(function(){
			window.location = 'index.php';
		   })
		});
	</script>
</head>

<body>
	<div id="wrapper">
		<div class="title">PHP FILE - ADD</div>
		<div id="form">
			<form action="#" method="post" name="add-form">
				<div class="row">
					<p>Title</p>
					<input type="text" name="title" value="<?php echo $title;?>">
					<?php echo $errorTitle; ?>
				
					
				</div>

				<div class="row">
					<p>Description</p>
					<textarea name="description" rows="5" cols="100"><?php echo $description; ?></textarea>
					<?php echo $errorDes; ?>
				</div>

				<div class="row">
					<input type="submit" value="Save" name="submit">
					<input type="button" value="Cancel" name="cancel" id="cancel-button">
				</div>
                <?php if($flag == true) echo '<div><p>Dữ liệu đã được ghi thành công!</p></div>' ?>

			</form>
		</div>

	</div>
</body>

</html>