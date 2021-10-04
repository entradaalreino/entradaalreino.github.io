<?php
    include 'select.php';
?>

<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<head>
</head>

<body>

<div>
    <?php
        $sql = "SELECT iglesia,cura FROM historial WHERE cura=0 ORDER BY fecha DESC LIMIT 1";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                echo "<p>";
                echo "$row['iglesia']";
                echo "</p>";
            }
        }
        else {
            echo "NO data"
        }
    ?>
</div>

</body>

</html>