<script language="javascript" type="text/javascript" src="jquery.js">
	</script>
	<link rel=stylesheet href="styles.css">
<script src="cookie.js"></script>
<?php
	session_start();
	$con=mysql_connect("localhost",'844593','amirabbasi1358','844593');
	mysql_select_db('844593',$con);
	
	if(isset($_POST["submit_button"]))
	{
		if(isset($_COOKIE['Name']))
			setcookie("Name");
		$_SESSION["myname"]=$_POST["Name"];
		setcookie("color",rand(0,0xFFFFFF));
		header("Location:chat.php?room=صدچت");
	}
	if(isset($_POST["writecomment"])&&isset($_POST["sendcomment"])){
	 if($_POST["writecomment"]!=""){
		//if($ersal=="yes"){
			
			$value=$_POST["writecomment"];
			if(!mysql_query("INSERT INTO comments VALUES ('$value')",$con))
				echo(mysql_error($con));
			
			
		
		
			if($value=='clearall'){
				mysql_query("DELETE  FROM comments",$con);
			}
		//$ersal="no";
		//}
	  }
	}
	$comment="";
	$result=mysql_query("SELECT `comment` FROM comments ",$con);
	mysql_close($con);
		while ($row = mysql_fetch_array($result)){
			//$comment+=$row['comment']."\n";
			$comment=$comment.$row['comment']."\n ";
		}
	
	
	unset($_POST['sendcomment']);
?>
<html>
	<head>
		<style>
			.center{display:table-cell; position:relative;vertical-align:middle;horizontal-align:middle;align:center}
			body{background:url("texture.jpg")}
			div{align:center;vertical-align:center}
			td{vertical-align:button}
			li{
				color:red;
			}
			span{
				color:white
			}
		</style>
		<script >
			function save(){
				setCookie("name",$('#name').val(),7);
				setCookie("color",Math.floor(Math.random()*0xFFFFFF),7);
			}
			function submit2(){
				document.getElementById("main1").submit();
				scroll();
			}
			function scroll(){
				var divobj=document.getElementById("showcomments");
				divobj.scrollTop=divobj.scrollHeight;
				
			}
		</script>
	</head>
	<body onload='javascript:try{scroll()}catch(e){alert(e)}'>
	<h1>چت فارسی در همه زمینه ها|100 چت روم</h1>
	<h1> چت در زمیته های ورزش علوم سیاست اقتصاد ادبیات موسیقی سینمافرهنگ مهاجرت اتومبیل موتورسیکلت</h1>
    <h1>اولین سایت ایرانی با صد چت روم,محیطی کاملا فارسی با نمایش پیام ها بصورت منظم و در فاصله زمانی مشخص</h1>
		<meta charset="utf-8">
		<form method="post" id="main1">
		    <div align="center" >
				<table  height="100%"  >
				<tr height="40%">
				   <td colspan=3 style="vertical-align:top">
						<b><p style="float:right">:لطفا به نکات زیر توجه فرمایید</p></b></br>
						<ul style="font-size:23px;display:table-cell;color:white" dir=rtl style="float:right;">
							<li align="right"><span>محیط چت کاملا فارسی میباشد</span></li>
							<li><span> فقط مجاز به تایپ ده حرف لاتین جهت اسامی می باشید</span></li>
							<li><span>تایپ و پیست فقط برای اسامی کامل سایتها مجاز میباشد</span></li>
							
						</ul>
				   </td>
				</tr>
				<tr height="20%" >
					<td align="right">
						
					</td>
					<td align="right">
					<input type="submit" value="برو" onclick="javascript:try{save()}catch(e){alert(e)}" name="submit_button">
						<input type="text" name="Name" id="name" value=""  >
					</td>
					<td >
					<b >لطفا برای خود یک نام انتخاب کنید</b></br>
					
					
				
					</td>
				</tr>
				<tr>
					<td >
						<tr >
							<td style="text-align:right">
						<b><i>comments:</i></b>
							</td>
							<td >
							</td>
							<td >
								<b><i> پیشنهادات نظرات انتقادات</i></b>
							</td>
						</tr>
					</td>
				</tr>
				<tr height="200px">
					<td colspan="3" align="center" >
					<?php
						echo '<textarea dir="rtl" readonly id="showcomments" style="height:170px; width:500px">'.$comment.'</textarea>';
					?>	 
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<textarea dir="rtl" name="writecomment" onkeypress=('javascript:try{alert("pressed");}catch(e){alert(e)}')  style="height:50;width:500"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center" style="width:100px">
						<input type="submit" id="ارسال" value="ارسال" onmousedown  ="<?php $ersal="yes"; ?>" onclick= "javascript:try{submit2()}catch(e){alert(e)}" name="sendcomment">
					</td>
				</tr>
				</table>
				
			</div>
			
		</form>
	</body>
</html>