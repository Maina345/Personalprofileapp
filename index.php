<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Profile</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Create Your Profile</h1>
        <form action="save_profile.php" method="post" enctype="multipart/form-data">
        <label for="profile_pic">Profile Picture:</label>
            <input type="file" id="profile_pic" name="profile_pic" required><br>
            <label for="profile_pic">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="profile_email">Email:</label>
            <input type="text" id="email" name="email" required><br>
            <label for="profile_phone">Phone:</label>
            <input type="text" id="phone" name="phone" required><br>
            <label for="profile_address">Address:</label>
            <input type="text" id="address" name="address" required><br>
            <button type="submit">Submit</button>
        </form>
    </body>

  