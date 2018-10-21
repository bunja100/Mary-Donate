<?php
/**
 * Created by PhpStorm.
 * User: cayor
 * Date: 10/21/18
 * Time: 1:35 PM
 */

session_start();

if (session_destroy()) {
    header("Location: index.php");
}
?>