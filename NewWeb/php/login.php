<!DOCTYPE html>
<html lang="en">
<head>
    <title>Debate Paradise</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
          crossorigin="anonymous">
    <link rel="stylesheet" href="/NewWeb/css/style.css">
</head>
<body>

<!--happens when user clicks submit button, verifies login credentials -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "debateDB";

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // leave if connection fails
    if (!$conn) {
        die("Connection failed to database debateDB failed. Error: " . $conn->connect_error);
    }

    // get user input
    $email = $_POST['email_input'];
    $password = $_POST['password_input'];

    // see if hashed passwords are equal
    $hashed_pw = hash('md5', $password);
    $match_email_and_password_query = "SELECT * FROM Users WHERE email='$email' AND password='$hashed_pw'";
    $matched_records = $conn->query($match_email_and_password_query);
    if ($matched_records->num_rows == 0) {
        echo "Incorrect email or password";
    } else {
        // start session with user info
        header("Location: http://localhost:8080/NewWeb/ChatServlet?email=$email");
        $conn->close();
        exit();
    }

    $conn->close();
}
?>

<!--    nav bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/NewWeb/index.php">HOME <span
                            class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/NewWeb/php/leaderboard.php">LEADERBOARD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/NewWeb/php/debate.php">DEBATE ZONE</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>

    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navDropDownLink" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-address-book-o" style="font-size:30px"></i> <strong>My
                    Profile</strong>
            </a>
            <div class="dropdown-menu" aria-labelledby="navDropDownLink">
                <a class="dropdown-item" href="#">Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<!-- login form-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

    <h1>Log In</h1>

    <fieldset>
        <legend><span class="number">1</span>Please Log In</legend>

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="email_input" required autofocus>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password_input"
               required>

        <input type="checkbox" id="development" value="remember-me" name="user_interest"><label
                class="light" for="development"> Remember me</label><br>

    </fieldset>
    <button type="submit">Log In</button>
</form>

</body>
</html>