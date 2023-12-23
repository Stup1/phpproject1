<link rel="stylesheet" type="text/css" href="new.css">
<h1>  </h1>
<form action="check%20logoin.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <label for="role">Role:</label>
    <select id="role" name="role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
    <input type="submit" value="Login">
    <br>
    <a href="mainregister.php"> Register </a>

</form>
