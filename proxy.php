<?php
/**
 * Created by PhpStorm.
 * User: garbi
 * Date: 2/14/15
 * Time: 4:05 PM
 */
ini_set('display_errors', 0);

$lab = $_GET["lab"];
file_get_contents("http://www.rexlab.net/experimentos/conversao/mswConversao.php");
//sleep(30);