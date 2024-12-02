<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
    <style>
        table {
            border-collapse: collapse;
            width: auto;
        }
        th, td {
            border: 3px double black;
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
<?php
// Associative array of students
$students = [
    [
        "name" => "Ahmad",
        "program" => "BIW",
        "age" => 23
    ],
    [
        "name" => "Amirul",
        "program" => "BIS",
        "age" => 22
    ],
    [
        "name" => "Aiman",
        "program" => "BIM",
        "age" => 21
    ]
];
?>

<table>
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>
    <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student["name"]; ?></td>
            <td><?php echo $student["program"]; ?></td>
            <td><?php echo $student["age"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>