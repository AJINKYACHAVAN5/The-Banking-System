<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝐓𝐫𝐚𝐧𝐬𝐟𝐞𝐫 𝐌𝐨𝐧𝐞𝐲</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#292929;
        color: white;
      }
    </style>
</head>

<body style="background-color : #8c99ab;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="color : black;">𝐓𝐑𝐀𝐍𝐒𝐅𝐄𝐑 𝐌𝐎𝐍𝐄𝐘</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">𝐈𝐃</th>
                            <th scope="col" class="text-center py-2">𝐍𝐀𝐌𝐄</th>
                            <th scope="col" class="text-center py-2">𝐄-𝐌𝐀𝐈𝐋</th>
                            <th scope="col" class="text-center py-2">𝐁𝐀𝐋𝐀𝐍𝐂𝐄</th>
                            <th scope="col" class="text-center py-2">𝐎𝐏𝐄𝐑𝐀𝐓𝐈𝐎𝐍</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #5F64GF;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer class="text-center mt-5 py-2">
            <p>&𝐂𝐎𝐏𝐘 𝟐𝟎𝟐𝟏.𝐌𝐀𝐃𝐄 𝐁𝐘 <b>𝐀𝐉𝐈𝐍𝐊𝐘𝐀 𝐂𝐇𝐀𝐕𝐀𝐍</b> <br>𝐈𝐍𝐓𝐄𝐑𝐍 𝐀𝐓 𝐓𝐇𝐄 𝐒𝐏𝐀𝐑𝐊𝐒 𝐅𝐎𝐔𝐍𝐃𝐀𝐓𝐈𝐎𝐍</p>
        </footer>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>