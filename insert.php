<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=db", "user1", "");

$pdo->exec(
    "
    insert into contactform(name, mail, age, comments) values(
        '" . $_POST["name"] . "',
        '" . $_POST["mail"] . "',
        '" . $_POST["age"] . "',
        '" . $_POST["comments"] . "'
    );"
);

?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='style2.css'>
    <title>mail_result</title>
</head>

<body>
    <h1 class="form_title">お問い合わせフォーム</h1>
    <main class="main_container">
        <p>
            お問い合わせありがとうございました。<br>
            3営業日以内に担当者よりご連絡差し上げます。
        </p>
    </main>
</body>

</html>