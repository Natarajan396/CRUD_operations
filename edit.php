<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <?php
    if(isset($data)){
    
     ?>
     <form method="post" action="<?=base_url('register/saveEdit')?>">
     <table>
        <tr>
            <td>Id :</td>
            <td><input type='number' name='Stid' value='<?=$data[0]->Id?>' readonly></td>
        </tr>
        <tr>
            <td>Name :</td>
            <td><input type='text' name='stname' value='<?=$data[0]->Student_name?>'></td>
        </tr>
        <tr>
            <td>Mail :</td>
            <td><input type='mail' name='stmail' value='<?=$data[0]->Student_mail?>'></td>
        </tr>
        <tr>
            <td>Phone No. :</td>
            <td><input type='number' name='stphone' value='<?=$data[0]->Student_phone?>'></td>
        </tr>
        <tr>
            <td><input type='submit' value='Submit'></td>
        </tr>
     </table>
    </form>
     <?php       
        
    }
    ?>
</body>
</html>