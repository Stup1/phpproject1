<!DOCTYPE html>
<html>
<head>

    <title>Student Result Management Dashboard</title>
    <h1> Student Result</h1>
    <link rel="stylesheet" type="text/css" href="style.css.css">
            <?php include 'notices.php'; ?>
    <section class="search">
        <h2>Search Results</h2>
        <form action="student_resultsearch.php" method="post">
            <label for="search">Search by id:</label>
            <input type="text" id="search" name="search" required>
            <input type="submit" value="Search">
        </form>
    </section>



</head>
</main>
</body>
</html>
<style>
    section {
        width: 80%;
        margin: auto;
        background-color: #f4f4f4;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
        font-size: 24px;
        margin-top: 0;
        margin-bottom: 10px;
    }

    form {
        display: flex;
        align-items: center;
    }

    label {
        margin-right: 10px;
    }

    input[type="text"],
    input[type="submit"] {
        font-size: 16px;
        padding: 8px 10px;
        border: none;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    input[type="text"] {
        flex: 1;
    }

    input[type="submit"] {
        background-color: #0077be;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    input[type="submit"]:hover {
        background-color: #005a8c;
    }

</style>