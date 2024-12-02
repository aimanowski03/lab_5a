<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
<?php
// Personal details
$name = "AHMAD AMIRUL AIMAN";
$matricNumber = "AI220122";
$course = "BIS";
$yearOfStudy = "Year 3";
$address = "UNIVERSITI TUN HUSSEIN ONN MALAYSIA";
?>

<table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matricNumber; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $yearOfStudy; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>
</body>
</html>