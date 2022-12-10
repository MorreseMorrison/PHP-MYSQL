<?php
//search.php
//database connection info
include "dbinfo.php";
$search=$_POST['search'];

//11-9--2021 SCRUD 3
//SQL statement to select what to search
$query="SELECT * FROM contacts
WHERE email like '%$search%' OR
first like '%$search%' OR
last like '%$search%' OR
phone like '%$search%'
ORDER BY last ASC";



// run sql statement
if ($result = mysqli_query($connection, $query)){
    // find out how many matches
    $count = mysqli_num_rows($result);
    $pageTitle="Search Results";
    include "header.php";
print <<<HERE
<h2>Search Results</h2>
<h3>$count results found seaching for "$search"</h3>
<table cellpadding="15">
HERE;
//loop through results and get variables
    while ($row=mysqli_fetch_array($result)){
        $id=$row["id"];
        $email=$row["email"];
        $first=$row["first"];
        $last=$row["last"];
        $phone=$row["phone"];

        print <<<HERE
        <tr>
            <td>
            <form method="post" action="confirmdelete.php">
            <input type="hidden" name="sel_record" value="$id">
            <input type="submit" name="delete" value=" Delete ">
            </form>

            <form method="post" action="updateform.php">
            <input type="hidden" name="sel_record" value="$id">
            <input type="submit" name="update" value=" Edit "></form>
            </td>   
            <td><strong>$first $last</strong><br />
            Phone: $phone<br />
            <a href="mailto: $email">$email</a></td></tr>
HERE;
    } //end while
}else{
    echo "There was a problem with the query.";
}
print "</tr></table></body></html>";
?>

