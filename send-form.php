<?php
$to = "<pankrashin85@mail.ru>";
$email = $_POST['delta__ligal-your-email'];
$name = $_POST['delta__ligal-your-name']; 
$page = 'Сайт Delta Legal'; 
$message = '
<html>
<body>
<center>	
<table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
 <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
 <tr>
  <td><b>Откуда</b></td>
  <td>'.$page.'</td>
 </tr>
 <tr>
  <td><b>Адресат</b></td>
  <td><a href="mailto:'.$email.'">'.$email.'</a></td>
 </tr>
 <tr>
  <td><b>От кого</b></td>
  <td>'.$name. '</td>
 </tr>
 <tr>
  <td><b>Сообщение</b></td>
  <td>'.$_POST['delta__ligal-your-message'].'</td>
 </tr>
</table>
</center>	
</body>
</html>'; 
$headers  = "Content-type: text/html; charset=utf-8\r\n";
$result = mail($to, $name, $message, $headers);
?>

