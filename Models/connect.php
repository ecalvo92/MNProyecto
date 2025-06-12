<?php

    function OpenDB()
    {
        return mysqli_connect("127.0.0.1:3307","root","","MNDatabase");
    }

    function CloseDB($context)
    {
        mysqli_close($context);
    }

?>