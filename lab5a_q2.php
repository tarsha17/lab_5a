<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php 
        $students = [
            ["name" => "Ali", "matricNumber" => "M123", "program" => "Computer Science"],
            ["name" => "Bala", "matricNumber" => "M124", "program" => "Information Technology"],
            ["name" => "Cindy", "matricNumber" => "M125", "program" => "Software Engineering"]
        ];
    ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Matric Number</th>
            <th>Program</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student["name"]; ?></td>
            <td><?php echo $student["matricNumber"]; ?></td>
            <td><?php echo $student["program"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>