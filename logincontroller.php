<?php

declare(strict_types=1);    

function is_input_empty(string $username, string $pwd)
{
    if(empty($username) || empty($pwd)){
        return true;
    } else {
        return false;
    }
}

function is_username_wrong($result)
{
    return !$result;  // Returns true if $result is falsy (e.g., null, false, or an empty array)
}


function is_password_wrong(string $pwd, string $hashedPwd)
{
    return !password_verify($pwd, $hashedPwd);  // Returns true if password is incorrect
}

    
   