<p>尊敬的<?=$adminuser?>,您好：</p>
<p>您的密码找回链接如下：</p>
<?php
    $url = Yii::$app->urlManager->createAbsoluteUrl([
    'admin/manage/mailchangepass',
    'timestamp' => $time,
    'adminuser' => $adminuser,
    'token' => $token
]);
?>
<p><a href="<?php echo $url;?>"><?php echo $url;?></a> </p>
<p>该链接5分钟内邮箱，请勿传递给别人!</p>
<p>该邮件为系统自动发送，请勿回复!</p>