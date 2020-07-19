<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="wrapper">
            <header>
                <div class="left">
                    <?php include "pages/form_login.php"; ?>
                </div>
                <div class="content">
                   <p>
                        <?php echo "В гаманці 10000 євро"?>
                   </p>
                   <p>
                        <?php echo "В банку 10000 євро"?>
                   </p>
                </div>
            </header>
            <div class="clearfix"></div>
            <aside class="left">
                <div id="menu">
                    <ul>
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">Page_1</a>
                        </li>
                        <li>
                            <a href="">Page_2</a>
                        </li>
                        <li>
                            <a href="">Page_3</a>
                        </li>
                        <li>
                            <a href="">Page_4</a>
                        </li>
                        <li>
                            <a href="">Page_5</a>
                        </li>
                        <li>
                            <a href="">Page_6</a>
                        </li>
                        <li>
                            <a href="">Page_7</a>
                        </li>
                        <li>
                            <a href="">Page_8</a>
                        </li>
                        <li>
                            <a href="">Page_9</a>
                        </li>
                        <li>
                            <a href="">Page_10</a>
                        </li>
                        <li>
                            <a href="">Page_11</a>
                        </li>
                        <li>
                            <a href="">Page_12</a>
                        </li>
                        <li>
                            <a href="">Page_13</a>
                        </li>
                        <li>
                            <a href="">Page_14</a>
                        </li>
                    </ul>
                </div>
            </aside>
            <main class="content">
                <?php include "pages/form_add_money.php"; ?>
            </main>
            <div class="clearfix"></div>
            <footer>

            </footer>
        </div>
    </body>
</html>
