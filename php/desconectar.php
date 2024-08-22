<?php

session_start();
   if  ($_SESSION['usuario'])
    {
     session_destroy();
     header("Location: ../pages-login.html");
   
    }
    else
    {
     header("Location: ../pages-login.html");
    }

    ?>