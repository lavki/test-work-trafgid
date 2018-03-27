<?php

// connect to db file
include 'db-connect.php';

// if button was clicked
if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    // create table for displaying result
    $table = "<table class=\"table table-bordered table-condensed\">\r\n";

    // get POST variable from ajax request
    $task = (int) $_POST['task'];

    // if clicked firs button
    if ($task == 1)
    {
        // query to the database #1
        $query = "SELECT `requests`.`id` AS `order_number`, `offers`.`name`, `requests`.`price`, `requests`.`count`, `operators`.`fio`
                  FROM `requests`, `offers`, `operators`
                  WHERE `requests`.`count` > 2
                  AND `operators`.`id` = 10
                  OR `operators`.`id` = 12
                  GROUP BY `operators`.`id`
                  ORDER BY `requests`.`id`";

        // adding thead row
        $table .= "<tr>\r\n
                    <th>id</th>\t\r
                    <th>product</th>\t\r
                    <th>price</th>\t\r
                    <th>count</th>\t\r
                    <th>operator</th>\t\r</tr>\t\r";
     }

    // if clicked second button
     elseif ($task == 2)
     {
        // query to the database #2
        $query = "SELECT `offers`.`name`, SUM(`count`) AS `count`, SUM(`price`) AS `price`
                  FROM `requests`, `offers`
                  WHERE `requests`.`offer_id` = `offers`.`id`
                  GROUP BY `offer_id`
                  ORDER BY `requests`.`id`";

         // adding thead row
         $table .= "<tr>\r\n
                    <th>product</th>\t\r
                    <th>count</th>\t\r
                    <th>price</th>\t\r
                    </tr>\t\r";
    }

    // request to database with prepared query
    if( $result = mysqli_query($link, $query) )
    {
        // all rows from db
        $rows = mysqli_fetch_all($result);

        // now we shold separat the rows and filling table rows...
        for( $a = 0; $a < count($rows); $a++ )
        {
            $table .= "<tr>\t\r";

            for( $b = 0; $b < count($rows[$a]); $b++ )
            {
                $table .= "<td>" . $rows[$a][$b] . "</td>\r\n";
            }

            $table .= "</tr>\t\r";
        }

        $table .= "</table>";

        echo $table;

        // close the result
        $result->close();
    }

    // close the connection with db
    mysqli_close($link);
}
