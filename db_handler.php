<?php

$conn = mysqli_connect('localhost', 'root', '', 'UEL');


if (!$conn) {
	die("Connection failed: ".mysqli_connect_err());
}