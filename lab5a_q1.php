<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Details</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <?php
    // Define variables
    $name = "Tarsiga A/P Ganasan";
    $matricNumber = "A1234567";
    $course = "Bachelor of Computer Science";
    $yearOfStudy = "Final Year";
    $address = "C-3-1 BLOK C PANGSAPURI SRI KESIDANG JALAN BAYAN BDR PUCHONG JAYA, 47170";

    // Display details in an HTML table
    echo "
    <table>
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td>$name</td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td>$matricNumber</td>
        </tr>
        <tr>
            <td>Course</td>
            <td>$course</td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td>$yearOfStudy</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>$address</td>
        </tr>
    </table>";
    ?>
</body>
</html>
