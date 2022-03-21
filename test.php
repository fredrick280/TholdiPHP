<?php

$email = "k<i>tt</i>es@codecademy.com";
echo filter_var($email, FILTER_SANITIZE_EMAIL);
echo filter_var($email, FILTER_VALIDATE_EMAIL);

$date = new DateTime(); 

echo $date->format('d/m/Y');