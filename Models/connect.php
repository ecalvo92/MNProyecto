<?php

    function OpenDB()
    {
        return mysqli_connect("127.0.0.1:3307","root","","MNDatabase");
    }

    function CloseDB($context)
    {
        mysqli_close($context);
    }

    function RegistrarError($error)
    {
        $context = OpenDB();
           
        $message = mysqli_real_escape_string($context, $error -> getMessage());

        $sp = "CALL RegistrarError('$message')";
        $context -> query($sp);

        CloseDB($context);
    }

?>