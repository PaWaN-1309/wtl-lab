<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session and Cookies Example</title>
</head>
<body>
    <h1>Store and Retrieve Information using Session and Cookies</h1>
    <?php
    session_start();

    // Store data in session
    if (isset($_POST['store_session'])) {
        $_SESSION['session_data'] = $_POST['session_data'];
        echo "<p>Session data stored successfully!</p>";
    }

    // Store data in cookies
    if (isset($_POST['store_cookie'])) {
        setcookie('cookie_data', $_POST['cookie_data'], time() + 3600, "/"); // 1 hr
        echo "<p>Cookie data stored successfully!</p>";
    }
    ?>

    <form method="post">
        <h2>Store Data in Session</h2>
        <label for="session_data">Enter Session Data:</label>
        <input type="text" id="session_data" name="session_data" required>
        <button type="submit" name="store_session">Store in Session</button>
    </form>

    <form method="post">
        <h2>Store Data in Cookies</h2>
        <label for="cookie_data">Enter Cookie Data:</label>
        <input type="text" id="cookie_data" name="cookie_data" required>
        <button type="submit" name="store_cookie">Store in Cookies</button>
    </form>

    <h2>Retrieve Stored Data</h2>
    <?php
    // Retrieve session data
    if (isset($_SESSION['session_data'])) {
        echo "<p>Session Data: " . htmlspecialchars($_SESSION['session_data']) . "</p>";
    } else {
        echo "<p>No session data found.</p>";
    }

    // Retrieve cookie data
    if (isset($_COOKIE['cookie_data'])) {
        echo "<p>Cookie Data: " . htmlspecialchars($_COOKIE['cookie_data']) . "</p>";
    } else {
        echo "<p>No cookie data found.</p>";
    }
    ?>
</body>
</html>