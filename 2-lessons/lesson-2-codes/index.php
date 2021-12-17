<a href="functions.php">dgashda</a>

<form id="" action="functions.php" method='POST' enctype='multipart/form-data'>
    <input type="hidden" name="csr_token" value="1">
    <div>
        <input type="text" name="login" value="">
    </div>
    <div>
        <input type="password" name="password" value="">
    </div>
    <input type="submit" value="Click_me"> 
</form>



<?php

$file = fopen('users.txt', 'a+');

const ARR = 'das';
$found = false;

$str = true;
$users = [];
while ($str != false) {
    $str = fgets($file);

    $array = explode('|', $str);
    // if (strcmp($_POST['login'], $array[0])) {
    //     $found = true;
    // }
    $users []= $array;
}

// if ($found) {
//     echo('Opps, already exists');
// } else {

// }
// $str = fgets($file);
// $str2 = fgets($file);
// $str3 = fgets($file);
// var_dump($str);
// var_dump($str2);
// var_dump($str3);
?>

<table>
    <?php
        foreach($users as $user) {
            echo('<tr>');
                foreach ($user as $column) {
                    echo(sprintf('<td>%s</td>', $column));
                }
            echo('</tr>');
        }

       $date = new DateTime();
    ?>
</table>


