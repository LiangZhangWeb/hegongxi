<?php 
	header("Content-Type:text/html;charset=utf-8");
	require_once ("class.phpmailer.php");  
	$name=$_POST['yName'];
	$number=$_POST['yPro'];
	$email=$_POST['yAdd'];
	$mail = new PHPMailer(); //实例化 
	$mail->Body  = '华中科技大学核工系的同仁们你们好，我是'.$name.',以下是我对贵团队的一点建议，祝愿核工系越办越好！     
	'.
	
	 $_POST['yIdear'].
	 
	 '
	  电话：'.$number.'
	 
	 '.
	 '邮箱：'.$email
	 
	 .date("Y-m-d h:i:sa");
	
	
	$mail->IsSMTP(); // 启用SMTP 
	$mail->Host = "smtp.163.com"; //SMTP服务器 以163邮箱为例子 
	$mail->Port = 25;  //邮件发送端口 
	$mail->SMTPAuth   = true;  //启用SMTP认证 
	 
	$mail->CharSet  = "UTF-8"; //字符集 
	$mail->Encoding = "base64"; //编码方式 
	 
	$mail->Username = "15927338035@163.com";  //你的邮箱 
	$mail->Password = "husthg2013";  //你的密码 
	$mail->Subject = "[留言建议]"; //邮件标题 
	 
	$mail->From = "15927338035@163.com";  //发件人地址（也就是你的邮箱） 
	$mail->FromName = "团队留言板";  //发件人姓名 
	 
	$address = "1065154052@qq.com";//收件人email 
	$mail->AddAddress($address, "华中科技大学核工系的同仁们");//添加收件人（地址，昵称） 
	$mail->IsHTML(true); //支持html格式内容 
	
	if(!$mail->Send()) { 
	  echo "Mailer Error: " . $mail->ErrorInfo; 
	} else { 
	  echo "<script>alert('您的建议我们已经收到，我们会认真考虑，感谢您的宝贵建议，么么哒~');window.location.href='../index.php/contact';</script>";
	} 
	
	
	  
	  
	
	
?>