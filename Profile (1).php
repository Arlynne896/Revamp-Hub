<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: beige;
        color: #333;
        margin: 100px;
        padding: 0;
    }
    
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background: #75eea7;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
        text-align: center;
    }
    label {
    display: block;
    margin: 0 0 5px; 
}

input, textarea {
    width: 100%;
    max-width: 570px; 
    padding: 10px;
    margin: 0 0 15px; 
    border: 1px solid #ccc;
    border-radius: 4px;
    display: block; 
}
    
    button {
        background-color: #28a745;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    button:hover {
        background-color: #218838;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>User Profile</h1>
        <form id="profile-form" method="POST" action="save_profile.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" rows="4"></textarea>

            <button type="submit">Save</button>
        </form>
        <div id="message"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>