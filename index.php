<?php include 'inc/php/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Time Ago</title>
        <link rel="stylesheet" href="inc/css/style.css">
    </head>
    <body>
        <script src='inc/js/jquery.js'></script>
        <script src='inc/js/timeago.js'></script>
        <div class="add_form box first_box">
            <form action="inc/php/submit.php" method="post" id="submit">
                <p style='display:inline-block;'><span class="white">0</span> days since you </p>
                <input type="text" name='title'>
                <input type="submit" value='save'>
            </form>
        </div>

        <?php
            if ($result = $mysqli->query("SELECT * FROM timeago ORDER BY timeago DESC")) {

                foreach ($result as $r):
        ?>
            <div class="box">
                <p><span class="white timeago"><?=$r["timeago"];?></span> since you have <span class="white"><?=$r['title'];?></span></p>
            </div>
        <?php
                endforeach;

                $result->close();
            }
        ?>
        <script src='inc/js/app.js'></script>
    </body>
</html>