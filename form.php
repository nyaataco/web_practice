<?php

    $personnel = $_POST['personnel'];
    $company_name = $_POST['company-name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    print $personnel.'様<br>';
    print '<br>';
    print 'お問い合わせありがとうございました。<br>';
    print '後日担当よりご連絡差し上げます。<br>';
    print '<br>';
    print 'お問い合わせの控えを '.$email.' にお送りいたしましたので、ご確認ください。<br>';
    print '3日たっても連絡がない場合は、お手数ですが再度お問い合わせいただけますと幸いです。<br>';
    print '<br>';
    print '有限責任事業組合 Cotona<br>';




    // メール設定
    mb_language('Japanese');
    mb_internal_encoding('UTF-8');
    date_default_timezone_set('Asia/Tokyo');
    
    $to = $email;
    $auto_reply_subject = null;
    $auto_reply_text = null;
    $from = 'From: fuwa.fuwa.nyacco@gmail.com';
    

    // お客様用
    $auto_reply_subject = 'お問い合わせありがとうございます。';

    $auto_reply_text = 'この度は、お問い合わせ頂き誠にありがとうございます。\n';
    $auto_reply_text .= '下記の内容でお問い合わせを受け付けました。\n\n';
    $auto_reply_text .= 'お問い合わせ日時：' . date('Y-m-d H:i') . '\n';
    $auto_reply_text .= '氏名：' . $personnel . '\n';
    $auto_reply_text .= 'メールアドレス：' . $email . '\n\n';
    $auto_reply_text .= 'お問い合わせ内容 : ' . $message;
    $auto_reply_text .= 'Cotona';

    if (mb_send_mail($to, $auto_reply_subject, $auto_reply_text, $from)){
        echo 'メールを送信しました';
    } else {
        echo 'メールの送信に失敗しました';
    }


    // 自分用
    $ownEmail = 'fuwa.fuwa.nyacco@gmail.com';
    $title = 'webサイトよりお問い合わせ';
   
    if (mb_send_mail($ownEmail, $title, $auto_reply_text, $from)){
        echo 'メールを送信しました';
    } else {
        echo 'メールの送信に失敗しました';
    }


?>