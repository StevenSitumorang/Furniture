<div>
<html>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }
    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    .login-container form label {
        display: block;
        margin-bottom: 10px;
    }
    .login-container form input[type="text"],
    .login-container form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    .login-container form input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    .login-container form input[type="submit"]:hover {
        background-color: #45a049;
    }
    .error-message {
        color: red;
        text-align: center;
    }
</style>
</head>
<body>
    <div class="login-container">
        <h2>Halaman Login</h2>
        <?php
            $error = "Username atau password salah.";
        ?>
        <form method="post" action="#">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Login">
        </form>
        <div class="error-message"><?php echo $error; ?></div>
    </div>
</body>
</html>
</div>