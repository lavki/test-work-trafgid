<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Test Work Trafgid</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>table { margin: 1em 0; }</style>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
            <h1>Test Work Trafgid</h1>
        </div><!-- /.container -->


        <div class="container">
            <p>Вывести запросы с использованием php,mysql,AJAX, jQuery, Bootstrap.<br>
                Есть 3 таблицы (в приложенном файле): offers (товары), operators (операторы), requests (заказы)</p>
            <p>Вывести такие варианты запросов:</p>

            <ol>
                <li>Номер заказа, имя товара, цена, количество, имя оператора за которым числится заказ,
                    ГДЕ количество товара >2 И id оператора 10 ИЛИ 12</li>
                <li>Имя товара, количество товара, и сумма (price) по каждому товару (сгруппировать)</li>
            </ol>

            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <button type="button" class="btn btn-primary" onclick="query(1)">Query 1</button>

            <!-- Indicates a successful or positive action -->
            <button type="button" class="btn btn-success" onclick="query(2)">Query 2</button>

            <div id="result"></div>

        </div><!-- /.container -->

        <script>
            // query
            function query( task )
            {
                // Ajax Request to the Server side
                $.ajax({
                    type: 'POST',
                    url: 'http://testworktrafgid/db/query.php',
                    data: { 'task': task },
                    dataType: 'text',
                    success: function( data )
                    {
                        if( data )
                        {
                            $('#result').html(data);
                        }

                        else
                        {
                            alert('Ajax Request is failed');
                        }
                    }
                });

                return false;
            }
        </script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    </body>
</html>