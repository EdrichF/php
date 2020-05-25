<?php include('host.php');
    include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>COVID-19 Status</title>
</head>
<body>
    <div class="header">
        <h2>COVID-19 Status</h2>
    </div>
 
<div class = "content">
<?php 
		echo "<p>The current statistics regarding the pandemic can be found below. To return to the home page, click the link below:</p>";
        echo "<p><a href='home.php? '' style= 'color: blue;'>Home Page</a></p>";

?>

</div>
<?php
covidnumber();
?>
</table>
</body>
</html>
