<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="../Styles/style.css" />
    <title>BS Projekt</title>
</head>
<body>

<?php include 'navigation.php'; ?>

<div class="login-window m-5">
<h2 class="text-white">Login</h2>
    <form method="POST" action="login.php">
        <label class="text-white mb-3" for="username">Username:</label>
        <input class="" type="text" id="username" name="username" required><br>

        <label class="text-white" for="password">Password:</label>
        <input class="mb-3" type="password" id="password" name="password" required><br>

        <input class="login-btn btn btn-primary" type="submit" value="Login">
    </form>
</div>
<script>
    document.getElementsByClassName('login-btn') [0].addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Retrieve the username and password values
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Check if the username and password match the desired values
        if (username === 'demo' && password === 'demo') {
            window.location.href = 'admin.php'; // Redirect to admin.php
        } else {
            alert('Invalid username or password'); // Display an error message
        }
    });

</script>


</script>
</body>
</html>