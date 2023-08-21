<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($head)) {
        echo "<h1>".$head."<h1><br>";
    }
    if(isset($status)){
        echo "$status";
        echo "<br>$test";
    }
    ?>

    <form action="<?=base_url('register/saved_data/')?>"  method='post' > <!-- http://localhost/cei3/register/saved_data/ -->
        <table cellspacing=10px>
            <tr>
                <td>Name : </td>
                <td><input type='text' name='sname'></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type='mail' name='smail'></td>
            </tr>
            <tr>
                <td>Phone no. :</td>
                <td><input type='number' name='sphone'></td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' value='Submit'></td>
                <td><a href="http://localhost/cei3/register/fetch">show table</a></td>
        </table>    
    </form>
</body>
</html>