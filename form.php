<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>図書貸出申請フォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>図書貸出申請フォーム</h1>
    <form action="confirm.php" method="post">
        <label for="username">利用者名：</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="booktitle">書籍タイトル：</label>
        <input type="text" id="booktitle" name="booktitle"><br><br>

        <label for="bookcode">図書コード（例:A1234）：</label>
        <input type="text" id="bookcode" name="bookcode"><br><br>

        <label for="period">貸出期間（日数）：</label>
        <input type="number" id="period" name="period" min="1" max="30"><br><br>

        <label for="note">備考（任意）：</label>
        <textarea id="note" name="note" rows="4"></textarea><br><br>

        <button type="submit">申請する</button>
    </form>
</body>
</html>