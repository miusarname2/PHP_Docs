<?php

$_DATA= json_decode(file_get_contents('php://input'),true);

print_r($_DATA);