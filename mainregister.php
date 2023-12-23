
<html>
<head>
    <link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>
<form action="regisomr.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <label for="role">Role:</label>
    <select id="role" name="role">

        <option value="user">User</option>
    </select>

    <input type="submit" value="Submit">
</form>
</body>
</html>