<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q1</title>
    </head>
    <body>
        <?php
            $name = "Nur Zafirah binti Rifai";
            $matricNO = "AI240054";
            $course = "Bachelor of Computer Science 
            (Information Security) with Honours"; 
            $year = "Year 3";
            $address = "No.23 Jalan Universiti 22, 
            Taman Universiti 86400 Parit Raja, Johor";
        ?>

        <table border="1" cellpadding="10">
            <tr>
                <td>Name</td>
                <td><?php echo "$name"; ?></td>
            </tr>
            <tr>
                <td>Matric Number</td>
                <td><?php echo $matricNO; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo $course; ?></td>
            </tr>
            <tr>
                <td>Year</td>
                <td><?php echo $year; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>
        </table>
    </body>
</html>

