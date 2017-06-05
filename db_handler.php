<?php

$conn = mysqli_connect('localhost', 'root', '', 'uel');


if (!$conn) {
	die("Connection failed: ".mysqli_connect_err());
}