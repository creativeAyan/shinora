<?php

$conn = mysqli_connect("localhost", "root", "", "shinora");

if (!$conn) {
    echo "Connection Failed";
}