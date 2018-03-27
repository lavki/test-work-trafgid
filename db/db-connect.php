<?php

// connect to the database
$link = mysqli_connect("127.0.0.1", "root", "password", "testworktrafgid" );

// if connected was failed then exit;
if( mysqli_connect_errno() )
{
    printf("Connection was failed: %s\n", mysqli_connect_error());
    exit;
}
