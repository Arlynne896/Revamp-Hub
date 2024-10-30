<?php
session_start();

if (!isset($_SESSION['posts'])) {
    $_SESSION['posts'] = [];
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image1']) && isset($_FILES['image2']) && isset($_POST['text'])) {
        $text = htmlspecialchars($_POST['text']);
        $image1 = $_FILES['image1'];
        $image2 = $_FILES['image2'];

        $uploads = [];

        foreach ([$image1, $image2] as $image) {
            if ($image['error'] == UPLOAD_ERR_OK) {
                $target_dir = 'uploads/';
                $target_file = $target_dir . basename($image['name']);

                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }

                if (move_uploaded_file($image['tmp_name'], $target_file)) {
                    $uploads[] = $target_file; // Store the uploaded file path
                }
            }
        }

        if (!empty($uploads)) {
            $_SESSION['posts'][] = ['text' => $text, 'images' => $uploads];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revamp Hub</title>
	<link href="BFAF.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="x-icon" href="Logo.png">
</head>
<body>
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="#">About</a>
	  <a href="#">Feedback</a>
	  <a href="#">Artisans</a>
	  <a href="#">Contact</a>
	</div>
	
	<div id="main">
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
	
	  <h1>Before and After</h1>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="image1" accept="image/*" required>
			<input type="file" name="image2" accept="image/*" required>
			<textarea name="text" placeholder="Enter your text here..." ></textarea>
			<button type="submit">Upload</button>
		</form>

		<h2>Posts:</h2>
		<?php if (!empty($_SESSION['posts'])): ?>
			<?php foreach ($_SESSION['posts'] as $post): ?>
				<div class="post">
					<p><?php echo $post['text']; ?></p>
					<?php foreach ($post['images'] as $image): ?>
						<img src="<?php echo $image; ?>" alt="Uploaded Image">
					<?php endforeach; ?>
				</div>
			<?php endforeach; ?>
		<?php else: ?>
			<p>No posts yet.</p>
		<?php endif; ?>
	</div>
	
	<script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		  document.getElementById("main").style.marginLeft = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		  document.getElementById("main").style.marginLeft= "0";
		}
	</script>
</body>
</html>
