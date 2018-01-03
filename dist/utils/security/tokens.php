
<?php
/*
    string  f(x = false)
        input: x = token options
                  Takes an array of with params such ash token length, alpha-numeric or numeric etc...
        output -> A random string as token
*/

function populateToken($tokenOptions = false) {

    if ($tokenOptions) {
        if(isset($tokenOptions["alpha-numeric"])) {
           $token = md5(uniqid(rand(0,10000) + rand(0,333) * rand(0,pow(2,32)), true));
        }
        if(isset($tokenOptions["numeric"])) {
           $token = rand(0,50000) * rand(0,50000);
        }
        return $token;
    } else {

        // If nothing is set simply return an alpha numeric token
        return md5(uniqid(rand(0,10000) + rand(0,333) * rand(0,pow(2,32)), true));
    }

}
