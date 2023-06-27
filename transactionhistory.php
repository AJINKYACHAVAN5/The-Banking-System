<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝐓𝐑𝐀𝐍𝐒𝐀𝐂𝐓𝐈𝐎𝐍 𝐇𝐈𝐒𝐓𝐎𝐑𝐘</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body style="background-color : #8c99ab;">

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color : black;">𝐓𝐑𝐀𝐍𝐒𝐀𝐂𝐓𝐈𝐎𝐍 𝐇𝐈𝐒𝐓𝐎𝐑𝐘</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">𝐒.𝐍𝐎.</th>
                <th class="text-center">𝐒𝐄𝐍𝐃𝐄𝐑</th>
                <th class="text-center">𝐑𝐄𝐂𝐄𝐈𝐕𝐄𝐑</th>
                <th class="text-center">𝐀𝐌𝐎𝐔𝐍𝐓</th>
                <th class="text-center">𝐃𝐀𝐓𝐄 & 𝐓𝐈𝐌𝐄</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="text-center mt-5 py-2">
            <p>&𝐂𝐎𝐏𝐘 𝟐𝟎𝟐𝟏.𝐌𝐀𝐃𝐄 𝐁𝐘 <b>𝐀𝐉𝐈𝐍𝐊𝐘𝐀 𝐂𝐇𝐀𝐕𝐀𝐍</b> <br> 𝐈𝐍𝐓𝐄𝐑𝐍 𝐀𝐓 𝐓𝐇𝐄 𝐒𝐏𝐀𝐑𝐊𝐒 𝐅𝐎𝐔𝐍𝐃𝐀𝐓𝐈𝐎𝐍</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>