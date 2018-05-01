<?php
/**
 * Created by IntelliJ IDEA.
 * User: tarun
 * Date: 4/30/18
 * Time: 10:39 PM
 */

$names = array("Tarun", "Chufan", "Upsorn", "Tom", "Mike", "Ellis", "Echo", "Mat", "James", "Aaron");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    for ($i = 0; $i < 10; $i++) {
        print $names[$i] . " ";
    }
}