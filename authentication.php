// this code goes at the start of page on which database is to be displayed, before <html> tag

$con = mysqli_connect("localhost", "root", "", "database");
// notify user if there is a connection error
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// request username and password entered in previous login form
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
// query checking for matching username and password in database
$login = $con -> query("SELECT * FROM staff_accounts WHERE username = '$username' AND password = '$password'");

if ($login -> num_rows == 0) { // executes code below if no match was found
    header("Location: login-error.php"); // redirects to login page with error message
}
