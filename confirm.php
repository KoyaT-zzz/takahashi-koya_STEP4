<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class = "con">
    <h1>入力内容確認</h1>
    <?php
    //POSTリクエストから名前を取得して表示する
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $question = $_POST['question'];
        $gender = $_POST['gender'];
        $gender_list = [
            '1' => '男性',
            '2' => '女性'
        ];
        $gender = $gender_list[$gender];

        //バリデーション
        if (!preg_match('/^[ぁ-んァ-ヶー一-龠a-zA-Z]+$/u', $name)) {    // name
            echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
        } elseif (filter_var($age, FILTER_VALIDATE_INT) === false || $age < 0 || $age > 150)  {  // age
            echo "<p>年齢は0から150の間で入力してください。（整数）</p>";
        } elseif (!preg_match('/^[0-9\-]+$/', $phone)) { // phone
            echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  // email
            echo "<p>メールアドレスの形式が正しくありません。</p>";
        } elseif (!preg_match('/^[ぁ-んァ-ヶー一-龠a-zA-Z]+$/u', $address)) {  // address
            echo "<p>住所はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
        
        } else {
            echo "<p>名前：" . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>年齢：" . htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>電話番号：" . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>メールアドレス：" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>住所：" . htmlspecialchars($address, ENT_QUOTES, 'UTF-8') . "</p>";
            // 質問欄（任意なので空でも表示OK）
            echo "<p>質問：" . nl2br(htmlspecialchars($question, ENT_QUOTES, 'UTF-8')) . "</p>";
            echo "<p>性別：" . htmlspecialchars($gender, ENT_QUOTES, 'UTF-8') . "</p>";
        }
    }
    ?>
    <br><br>
    <a href="form.php" class = "btn">フォーム画面</a>
</body>
</html>