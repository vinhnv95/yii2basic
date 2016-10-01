<?php
/**
 * Created by PhpStorm.
 * User: vinh
 * Date: 22/09/2016
 * Time: 16:03
 */
    echo " <table><tr><th>ID</th><th>User Name</th></tr>";
    foreach ($users as $user)
    {
        echo "<tr><td>$user->user_id</td><td>$user->user_name</td></tr>";
    }
    echo"</table>";