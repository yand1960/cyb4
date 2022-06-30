<?php

session_start();
unset($_SESSION["user"]);
die("Вы вышли из системы");