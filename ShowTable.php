<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .one,.one th,.one td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;
            margin:auto;
        }
        .one th{
            background-color: lightblue;
        }
        .one td{
            background-color: lightgrey;
        }
        
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table_data</title>
</head>
<body>
    <a href="http://localhost/cei3/register/register_form">Register Form</a>
    <table class="one">
        <tr>
            <th>Edit Data</th>
            <th>ID</th>
            <th>Student Name</th>
            <th>Student Mail</th>
            <th>Student Phone</th>
            <th>Delete Data</th>
        </tr>
    <?php
    if(isset($result)){
        foreach($result as $row){
    ?>
        <tr>
            <td><a href="<?=base_url('register/edit/'.$row->Id)?>">edit</a></td>
            <td><?=$row->Id;?></td>
            <td><?=$row->Student_name;?></td>
            <td><?=$row->Student_mail;?></td>
            <td><?=$row->Student_phone;?></td>
            <td><a href="<?=base_url('register/delete_data/'.$row->Id)?>">delete</a></td>
        </tr>
        <?php
        }
    } 
    ?>
    </table>
</body>
</html>