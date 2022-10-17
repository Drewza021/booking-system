$con = mysqli_connect("localhost", "root", "", "database");
//notify user if there is a connection error
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$select = "SELECT * FROM booking_information";
$select_result = mysqli_query($con, $select);                  

// HTML table headings
echo "
    <table>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
            <th>Column 4</th>
            <th>Column 5</th>
        </tr>
";
// loops through rows of booking_information table and echos
while($result_row = mysqli_fetch_array($select_result)) {
    echo "<tr><td>". 
        $result_row["Column 1"]. "</td><td>". // column names here should be exactly as they appear in database
        $result_row["Column 2"]. "</td><td>".
        $result_row["Column 3"]. "</td><td>".
        $result_row["Column 4"]. "</td><td>".
        $result_row["Column 5"]. "</td><td>";
}
