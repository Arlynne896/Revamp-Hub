<?php
session_start(); // Start the session to access the uploaded image name
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <label class="title">
        Message: <textarea name="message" rows="5" cols="40" placeholder="Write your message here"></textarea><br><br>
    </label>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
// Check if an image was uploaded
if (isset($_SESSION['uploadedImage'])) {
    $uploadedImage = htmlspecialchars($_SESSION['uploadedImage']);
    echo "<h3>Uploaded Image:</h3>";
    echo "<img src='uploads/$uploadedImage' alt='Uploaded Image' style='max-width: 300px;'>";
    // Clear the session variable after displaying the image
    unset($_SESSION['uploadedImage']);
} elseif (isset($_GET['error'])) {
    echo "<p>Sorry, there was an error uploading your file.</p>";
}
?>

</body>
</html>

