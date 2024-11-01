<?php
session_start();

if (!isset($_SESSION['posts'])) {
    $_SESSION['posts'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['beforeImage']) && isset($_FILES['afterImage']) && isset($_POST['text'])) {
        $text = htmlspecialchars($_POST['text']);
        $beforeImage = $_FILES['beforeImage'];
        $afterImage = $_FILES['afterImage'];

        $uploads = [];

        foreach ([$beforeImage, $afterImage] as $image) {
            if ($image['error'] == UPLOAD_ERR_OK) {
                $target_dir = 'uploads/';
                $target_file = $target_dir . basename($image['name']);

                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }

                if (move_uploaded_file($image['tmp_name'], $target_file)) {
                    $uploads[] = $target_file;
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
        <a href="NF.php">Home</a>
		<a href="about.php">About</a>
        <a href="#">Feedback</a>
        <a href="#">Artisans</a>
		<a href="faq.php">Frequently Asked Questions</a>
        <a href="#">Contact</a>
    </div>

    <div id="main">
		<span style="font-size:20px;cursor:pointer;" onclick="openNav()">&#9776; Menu</span>
		
        <div class="header">
            <h1>Sample<br></h1>
        </div>

        <div class="container">
            <h1>Before and After</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="beforeImage" accept="image/*" required>
                <input type="file" name="afterImage" accept="image/*" required>
                <textarea name="text" placeholder="Enter your text here..." required></textarea>
                <button type="submit">Upload</button>
            </form>

            <h2>Posts:</h2>
            <?php if (!empty($_SESSION['posts'])): ?>
                <?php foreach ($_SESSION['posts'] as $post): ?>
                    <div class="post">
                        <p><?php echo $post['text']; ?></p>
						<div class="">
							<?php foreach ($post['images'] as $image): ?>
								<img src="<?php echo $image; ?>" alt="Uploaded Image">
							<?php endforeach; ?>
						</div>
						
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No posts yet.</p>
            <?php endif; ?>
        </div>
		<hr>
		<footer>
			<p><small>Made by Abalain, Abar, Almaida, Alvarez & Arbolado 2024 © Copyright Intended</small></p>
		</footer>
    </div>

	<script src="navbar.js"></script>
</body>
</html>
