<?php include 'header.inc'; ?>

<h2>Login Page</h2>

<form method="post" action="process.php">
    <p>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </p>

    <p>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </p>

    <input type="hidden" name="token" value="A106201456">

    <p>
        <input type="submit" value="Login">
    </p>
</form>

<?php include 'footer.inc'; ?>