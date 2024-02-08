<?php
session_start(); // nodig op elke pagina waar je de sessie wilt gebruiken

session_destroy(); // vernietig de sessie
header('Location: /php-basis/13_sessions.php'); // redirect naar 13_sessions.php