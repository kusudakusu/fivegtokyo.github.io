<!-- ==============================
  confirm
============================== -->


<?php
  mb_language("ja");
  mb_internal_encoding("utf-8");

  $hasError = true;


  if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST)) { // POSTリクエストだったら
    // 各input tagの値を連想配列に入れる
    $values = array();
    foreach($_POST as $name => $value) {
      setcookie($name, null);
      $values[$name] = $value;
    }
    // print_r($values); // テストしたいときはこれで中身を見れる

    // 送信先メール(自社)
    $emailOwn = 'fivegtokyo@permil.jp';
    // 送信先メール(お問い合わせ者)
    $emailCustomer = $values["email"];

    // メールのタイトルと文字化け対策のための文字コード設定(クライアント)
    $subjectOwn = "お問い合わせがありました。";
    $subjectOwn = mb_convert_encoding($subjectOwn, "utf-8", mb_detect_encoding($subjectOwn));
    $subjectOwn = mb_encode_mimeheader($subjectOwn, "iso-2022-jp");
    // メールのタイトルと文字化け対策のための文字コード設定(お問い合わせ者)
    $subjectCustomer = "【FIVE G TOKYO運営窓口】無料カウンセリングに申し込み頂き有難うございます。";
    $subjectCustomer = mb_convert_encoding($subjectCustomer, "utf-8", mb_detect_encoding($subjectCustomer));
    $subjectCustomer = mb_encode_mimeheader($subjectCustomer, "iso-2022-jp");

    // 各フィールドの名前
    $fieldNames = array(
      "myname" => "お名前",
      "tel" => "電話番号",
      "email" => "メールアドレス",
      "reserve01" => "第一予約日時",
      "reserve02" => "第二予約日時",
      "reason" => "ご希望理由",
    );
    // 本文の生成
    $bodyOwn = "以下お問い合わせ内容です。"."\n\n\n";
    $bodyCustomer = "以下送信内容です。"."\n\n\n";
    $name = $values["myname"];

    $bodyCustomerStart = <<< EOD
※このメールはシステムからの自動返信です。

{$name}様

お世話になっております。
FIVE G TOKYO運営事務局でございます。

この度は、無料カウンセリングに
お申し込みいただき、誠にありがとうございます。

担当者より、2~3営業日以内に、メールもしくは電話にてカウンセリングの日程調整のご連絡をさせて頂きます。

また、以下がサービス説明資料となります。ご確認ください。
↓↓↓↓↓
https://fivegtokyo.com/service_guide.pdf

以下、申し込み頂いた内容になります。

━━━━━━━━━━━━━━━━━━━
EOD;

$bodyCustomerEnd = <<< EOD
━━━━━━━━━━━━━━━━━━━
▼▼▼キャンセルについて▼▼▼
カウンセリングをキャンセルされる場合は、下記アドレスにご連絡をお願いいたします。
FIVE G TOKYO運営事務局連絡先：fivegtokyo@permil.jp

▼▼▼お問い合わせ先▼▼▼
FIVE G TOKYO運営事務局 　担当：楠田 晃孝
メール：kusuda@permil.jp

———————————————————————
【FIVE G TOKYO運営事務局】https://fivegtokyo.com/

【運営元：株式会社Permil】
住所：〒170-0012　東京都豊島区上池袋2-26-17
電話番号：03-6260-8206
営業時間：平日 9時～18時
メール：info@permil.jp
———————————————————————"
EOD;

    $bodyCustomer = $bodyCustomerStart."\n\n\n";

    foreach($values as $name => $value) {
      if (is_int($value)) {
        $value = (string) $value; // integerだったらstringに変換
      }
      $bodyOwn = $bodyOwn.$fieldNames[$name]." : ".$value."\n\n";
      $bodyCustomer = $bodyCustomer.$fieldNames[$name]." : ".$value."\n\n";
    }

    $bodyCustomer = $bodyCustomer.$bodyCustomerEnd;

    $headers = "From: fivegtokyo@permil.jp";

    // メールの送信
    mail($emailOwn, $subjectOwn, $bodyOwn, $headers);
    mail($emailCustomer, $subjectCustomer, $bodyCustomer, $headers);
    $hasError = false;
  }
?>

<!-- アフィリエイトタグの設置 もしもタグ -->
<script src="https://r.moshimo.com/af/r/result.js?p_id=2916&pc_id=6705&m_v= <?php echo time(); ?>" id="msmaf"></script>
<noscript><img src="https://r.moshimo.com/af/r/result?p_id=2916&pc_id=6705&m_v= <?php echo time(); ?>" width="1" height="1" alt=""></noscript>

<!-- アフィリエイトタグの設置 ロンバートダグ -->
<script type='text/javascript' src='https://js.felmat.net/fmcv.js?adid=I4878V&uqid= <?php echo time(); ?>'></script>

<!-- == header ==================== -->
<?php include_once('parts/header.php'); ?>


<div id="confirm">

  <div id="section-form" class="section-form section-form--thanks">
    <div class="pageTitle">
      <div class="headingWrap">
        <h2 class="headingNormal">送信が完了しました</h2>
      </div>
    </div>
    <div class="container--m">
      <div class="headingWrap">
        <h2 class="headingAngle headingAngle--purple">Thank you for your inquiry </h2>
      </div>
      <p class="text">カウンセリングのお申し込みをいただきありがとうございます。<br>改めて担当者よりご連絡いたしますので今しばらくお待ちください。</p>
      <a href="/" class="btn btn--reverse"><span class="btn__text">TOPへ戻る</span></a>
    </div>
  </div>

</div>


<!-- == footer ==================== -->
<?php include_once('parts/footer.php'); ?>
