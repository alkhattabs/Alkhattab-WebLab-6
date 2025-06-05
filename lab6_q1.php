<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        tr td:first-child {
            font-weight: bold;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <?php
    // Personal details variables
    $name = "Alkhattab Shehabaddin Abdullah Abdulwadod Al-Dubai";
    $matric = "Ai230209";
    $course = "BIC21203:PEMBANGUNAN WEB";
    $year = "Second Year";
    $address = "46, Jalan Universiti 17, Parit Raja, 86400, Sri Gading";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html> 