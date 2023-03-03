<?php

function security($val)
{
    $val = trim($val);
    $val = addslashes($val);
    $val = strip_tags($val);
    $val = htmlspecialchars($val);
    $val = stripslashes($val);

    return $val;
}