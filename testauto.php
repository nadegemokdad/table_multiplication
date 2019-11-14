<?php
session_start();

for ($i=1; $i <16 ; $i++) {
    $_SESSION['randomn'.$i] = rand(1,15); 


    echo $_SESSION['randomn1'];
}