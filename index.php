<html>
<head>
    <title>Комментарии</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>

</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="company_info">
                    <p>Телефон: (499) 340-94-71</p>
                    <p>Email: <u>info@future-group.ru</u></p>
                </div>
                <h1><p class="headline">Комментарии</p></h1>
            </div>
            <div class="col-lg-6 col-md-6"></div>
            <div class="col-lg-2 col-md-2">
                <img src="img/logo.png">
            </div>
        </div>
    </div>
</div>
<div class="main_content">
    <div class="container">
        <?php

        /*Изменить данные на свои*/
        $connect = mysqli_connect('localhost', 'db', '12019991', 'database') or die('<span class="text_text">Ошибка подключения к базе</span>'); //Подключение к базе данных
        $comment = mysqli_query($connect, 'SELECT name, comment, date FROM comments ORDER BY date DESC');

        while ($row = mysqli_fetch_assoc($comment)) {

            echo '<div class="comment">';
            echo '<div class="row">';
            echo '<div class="col-lg-2 col-md-2 name">' . $row['name'] . '</div>';
            echo '<div class="col-lg-2 col-md-2 date_time">' . date('H:i d.m.Y', strtotime(str_replace('-', '/', $row['date']))) . '</div>';
            echo '</div>';
            echo '<p class="comment_text">' . $row['comment'] . '</p>';
            echo ' </div>';
        }
        mysqli_close($connect);
        ?>

        <hr>
        <div class="form_comment">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h2>Оставить комментарий</h2>
                    <form action="comment_func.php" method="post">
                        <p class="field_name">Ваше имя</p>
                        <input type="text" name="user_name" required/>
                        <p class="field_name">Ваш комментарий</p>
                        <textarea name="user_comment" required></textarea>
                        <button>Отправить</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <img src="img/logo.png">
            </div>
            <div class="col-lg-9 col-md-9 footer_text">
                <div class="company_info_footer">
                    <p>Телефон: (499) 340-94-71</p>
                    <p>Email: <u>info@future-group.ru</u></p>
                    <p>Адрес: <u>115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</u></p>
                </div>
                <p class="copyright">© 2010 - 2014 Future. Все права защищены</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>