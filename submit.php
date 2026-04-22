<!DOCTYPE html>
<html>
<head>
    <title>დადასტურება</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['p_name'];
        $phone = $_POST['p_phone'];
        $doctor = $_POST['doctor_name'];

        echo "<h1>თქვენი ჯავშანი მიღებულია!</h1>";
        echo "<p><b>პაციენტი:</b> " . $name . "</p>";
        echo "<p><b>ტელეფონი:</b> " . $phone . "</p>";
        echo "<p><b>ექიმი:</b> " . $doctor . "</p>";
        
        echo "<br><hr>";
        echo "<h3>Confirmation: Your appointment is submitted.</h3>";
    } else {
        echo "ფორმა არ არის შევსებული!";
    }
    ?>

    <a href="index.php">უკან დაბრუნება</a>
</body>
</html>