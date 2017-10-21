<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>User View</title>
    </head>
    <body>
        <?php
         foreach ($users as $user) {
             echo $user->username.'<br>';
         }
         ?>
    </body>
</html>
