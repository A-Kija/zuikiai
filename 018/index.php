<?php
session_start();

// $_SESSION['ob'] = 'Oranžinis Bebras';

unset($_SESSION['ob']);


echo $_SESSION['ob'];




// setcookie('bebras', 'Bebras plaukia upe', time() + 36);


// echo $_COOKIE['bebras'];