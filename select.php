<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>
<?php
    $db = mysqli_connect('localhost', 'root', 'root', 'nyip_edu');
    $sql = 'SELECT * FROM page';
    $result = mysqli_query($db, $sql);

    $_SESSION['user'] = 'Manuel';

    echo $_SESSION['user'];

    foreach($result as $row) {
        printf('<a href="%s">%s</a><br>',
        htmlspecialchars($row['url']),
        htmlspecialchars($row['url'])
        );
    }

    mysql_close($db);
?>
</body>
</html>