<?php
 session_start();
 
?>
<link rel=stylesheet href="../styles.css">
<script language="javascript" type="text/javascript" src="jquery.js"></script> 
<script src="cookie.js"></script>

<html>
<?php
	
	
			
		 if (!isset($_GET["room"])){
			 $room=صدچت;
			
		 }
			else{
				$room=$_GET["room"];
				
			}
		
		?>
		<script  >var room="<?php echo $room;?>"</script>
		
		<title>
		
			<?php echo $room;?> room
		</title>
	<head>
	
		
		
	<script src="scriptsmain.js"></script>
	
		<style>
			body {background:url(/texture.jpg);}
			a{
				color:blue;
				decoration:none;
			
			}
			ul ul li{
				display:none;
			}
			ul.egmenu li:hover ul li{ display: block;  }
			#football li{display:none}
			#football:hover li{display:block}
		</style>
		
		
				
	</head>
	<body onload='javascript:try{showload(room)}catch(e){alert(e)}'>
		
		<meta charset="utf-8">
		<form method="post" id="main" >
		<table style="width:100%">
		<tr>
		<td>
			<div id="leftlist" dir="rtl" style="width:250;height:700;overflow-y:scroll">
			<ul class="egmenu" dir="ltr" style="font-size:18px">
				<li class ="titr" style="font-size:35px"><a href="?room=ورزش">ورزش</a>
				<ul>
					<li id="football" style="font-size:25px"><a href="?room=فوتبال">فوتبال</a>
					<ul >
						<li style="font-size:25px"><a href="?room=لیگ ایران">لیگ ایران</a></li>
						<li style="font-size:25px"><a href="?room=لیگ های اروپایی">لیگ های اروپایی</a></li>
						<li style="font-size:25px"><a href="?room=جام جهانی">جام جهانی</a></li>
						<li style="font-size:25px"><a href="?room=جام باشگاه های اروپا">جام باشگاه های اروپا</a></li>
						<li style="font-size:25px"><a href="?room=جام ملت های آسیا">جام ملتهای آسیا</a></li>
					</ul>
					</li>
					<li style="font-size:25px"><a href="?room=والیبال">والیبال</a></li>
					<li style="font-size:25px"><a href="?room=کشتی">کشتی</a></li>
					<li style="font-size:25px"><a href="?room=بسکتبال">بسکتبال</a></li>
					<li style="font-size:25px"><a href="?room=هندبال">هندبال</a></li>
					<li style="font-size:25px"><a href="?room=شنا">شنا</a></li>
					<li style="font-size:25px"><a href="?room=تنیس">تنیس</a></li>
					<li style="font-size:25px"><a href="?room=پینگ پنگ">پینگ پنگ</a></li>
					<li style="font-size:25px"><a href="?room=بدنسازی">بدنسازی</a></li>
					<li style="font-size:25px"><a href="?room=بد مینگتون">بد مینگتون</a></li>
					<li style="font-size:25px"><a href="?room=دو و میدانی">دو و میدانی</a></li>
				</ul>
				</li>
				<li style="font-size:35px"><a href="?room=علوم">علوم</a>
				<ul>
					<li style="font-size:25px"><a href="?room=ریاضیات">ریاضیات</a></li>
					<li style="font-size:25px"><a href="?room=کامپیوتر">کامپیوتر</a></li>
					<li style="font-size:25px"><a href="?room=برق">برق</a></li>
					<li style="font-size:25px"><a href="?room=مکانیک">مکانیک</a></li>
					<li style="font-size:25px"><a href="?room=فیزیک">فیزیک</a></li>
					<li style="font-size:25px"><a href="?room=شیمی">شیمی</a></li>
					<li style="font-size:25px"><a href="?room=متالوژی">متالوژی</a></li>
					<li style="font-size:25px"><a href="?room=نجوم">نجوم</a></li>
					<li style="font-size:25px"><a href="?room=پزشکی">پزشکی</a></li>
					<li style="font-size:25px"><a href="?room=دندانپزشکی">دندانپزشکی</a></li>
					<li style="font-size:25px"><a href="?room=دامپزشکی">دامپزشکی</a></li>
					<li style="font-size:25px"><a href="?room=داروسازی">داروسازی</a></li>
				</ul>
				</li>
				<li style="font-size:35px"><a href="?room=سیاست">سیاست</a>
					<ul>
						<li style="font-size:25px"><a href="?room=انتخابات">انتخابات</a></li>
						<li style="font-size:25px"><a href="?room=روزنامه ها"> روزنامه ها</a></li>
						<li style="font-size:25px"><a href="?room=مجلس">مجلس</a></li>
					</ul>
				</li>
				<li style="font-size:35px"><a href="?room=ادبیات">ادبیات</a>
					<ul>
						<li style="font-size:25px"><a href="?room=رمان">رمان</a></li>
						<li style="font-size:25px"><a href="?room=شعر">شعر</a></li>
						<li style="font-size:25px"><a href="?room=تاریخ">تاریخ</a></li>
					</ul>
				</li>
				<li style="font-size:35px"><a href="?room=فرهنگ">فرهنگ</a>
				<ul>
					<li style="font-size:25px"><a href="?room=کتاب">کتاب</a>
				</ul>
				</li>
				</li>
				<li style="font-size:35px"><a href="?room=اقتصاد">اقتصاد</a>
				<ul>
					<li style="font-size:25px"><a href="?room=وام">وام</a>
					<li style="font-size:25px"><a href="?room=بانکها">بانکها</a>
					<li style="font-size:25px"><a href="?room=بورس">بورس</a>
				</ul>
				</li>
				<li style="font-size:35px"><a href="?room=موسیقی">موسیقی</a>
					<ul>
						<li style="font-size:25px"><a href="?room=آهنگ سازی">آهنگ سازی</a></li>
						<li style="font-size:25px"><a href="?room=موسیقی سنتی">موسیقی سنتی</a></li>
						<li style="font-size:25px"><a href="?room=پاپ">پاپ</a></li>
						<li style="font-size:25px"><a href="?room=راک">راک</a></li>
						<li style="font-size:25px"><a href="?room=تکنو">تکنو</a></li>
						<li style="font-size:25px"><a href="?room=خواننده های ایرانی">خواننده های ایرانی</a></li>
						<li style="font-size:25px"><a href="?room=خواننده های خارجی">خواننده های خارجی</a></li>
						<li style="font-size:25px"><a href="?room=پیانو">پیانو</a></li>
						<li style="font-size:25px"><a href="?room=گیتار">گیتار</a></li>
						<li style="font-size:25px"><a href="?room=ویولن">ویولن</a></li>
						<li style="font-size:25px"><a href="?room=سنتور">سنتور</a></li>
						<li style="font-size:25px"><a href="?room=کمانچه">کمانچه</a></li>
						<li style="font-size:25px"><a href="?room=تار">تار</a></li>
						<li style="font-size:25px"><a href="?room=سه تار">سه تار</a></li>
						<li style="font-size:25px"><a href="?room=دف">دف</a></li>
						<li style="font-size:25px"><a href="?room=جاز">جاز</a></li>
						<li style="font-size:25px"><a href="?room=تنبک">تنبک</a></li>
					</ul>
				</li>
				
				<li style="font-size:35px"><a href="?room=سینما">سینما</a>
				<ul>
						<li style="font-size:25px"><a href="?room=هنرپیشه ها">هنرپیشه ها</a></li>
						<li style="font-size:25px"><a href="?room=کارگردانی">کارگردانی</a></li>
						<li style="font-size:25px"><a href="?room=فیلم نامه">فیلم نامه</a></li>
						
					</ul>
				</li>
				<li style="font-size:28px"><a href="?room=مهاجرت وفرهنگ ها"> مهاجرت وفرهنگ ها</a>
				<ul>
						<li style="font-size:25px"><a href="?room=آمریکا">آمریکا</a></li>
						<li style="font-size:25px"><a href="?room=کانادا">کانادا</a></li>
						<li style="font-size:25px"><a href="?room=استرالیا">استرالیا</a></li>
						<li style="font-size:25px"><a href="?room=انگلستان">انگلستان</a></li>
						<li style="font-size:25px"><a href="?room=ایتالیا">ایتالیا</a></li>
						<li style="font-size:25px"><a href="?room=فرانسه">فرانسه</a></li>
						<li style="font-size:25px"><a href="?room=هلند">هلند</a></li>
						<li style="font-size:25px"><a href="?room=ژاپن">ژاپن</a></li>
						<li style="font-size:25px"><a href="?room=کره جنوبی">کره جنوبی</a></li>
						<li style="font-size:25px"><a href="?room=ترکیه">ترکیه</a></li>
						<li style="font-size:25px"><a href="?room=آفریقا">آفریقا</a></li>
					</ul>
				</li>
				<li style="font-size:35px"><a href="?room=سخت افزار">سخت افزار</a>
				<ul>
						<li style="font-size:25px"><a href="?room=پی سی">پی سی</a></li>
						<li style="font-size:25px"><a href="?room=نوت بوک">نوت بوک</a></li>
						<li style="font-size:25px"><a href="?room=تبلت">تبلت</a></li>
						<li style="font-size:25px"><a href="?room=موبایل">موبایل</a></li>
					</ul>
				</li>
				<li style="font-size:35px"><a href="?room=نرم افزار">نرم افزار</a>
				<ul>
						<li style="font-size:25px"><a href="?room=ویروس کش">ویروس کش</a></li>
						<li style="font-size:25px"><a href="?room=بازی">بازی</a></li>
						<li style="font-size:25px"><a href="?room=سیستم عامل">سیستم عامل</a></li>
							<ul>
								<li style="font-size:25px"><a href="?room=windows">windows</a></li>
								<li style="font-size:25px"><a href="?room=Linux">Linux</a></li>
								<li style="font-size:25px"><a href="?room=Mac os">Mac os</a></li>
							</ul>
						<li style="font-size:25px"><a href="?room=c# vb">c# vb</a></li>
						<li style="font-size:25px"><a href="?room=php css javascript">php css javascript</a></li>
						<li style="font-size:25px"><a href="?room=Ajax">Ajax</a></li>
						<li style="font-size:25px"><a href="?room=asp">asp</a></li>
						<li style="font-size:25px"><a href="?room=python">python</a></li>
						<li style="font-size:25px"><a href="?room=jumla">jumla</a></li>
						<li style="font-size:25px"><a href="?room=wordpress">wordpress</a></li>
					</ul>
				</li>
				<li style="font-size:35px"><a href="?room=اتومبیل">اتومبیل</a>
				
				</li>
				<li style="font-size:35px"><a href="?room=موتورسیکلت">موتورسیکلت</a>
				
				</li>
			</ul>
			</div>
		</td>
		<td>
			<div align="center" style="vertical-align:top">
				<h3> به چت روم<i> <span style="color:green"> <?php echo $room;?>  </span></i> خوش آمدید</h3>
			  <form id="subform">
				<div   id='room' dir='rtl' onchange='javascript:try{alert("changed");ScrollToBottom()}catch(e){alert(e)}' style="width:800;height:500;border:2px solid; background:lightgray;text-align:right;overflow-y:scroll;font-size:18px;">
				
				</div>
				</form>
				
				 <textarea dir="rtl" name="text" id="text" onkeyup="if(event.keyCode==13){save(room)}" onpaste="if('text'.substring(0,4)='http')return(true);return false;" style="width:800;height:50; font:18px B_Nazanin,B_Lotos,Arial "  ></textarea>
				<br/>
				
				<input type="button" onclick='javascript:try{save(room)}catch(e){alert(e+room)}'  id="send" style="width:200" value="ارسال" /></br></br>
				<span style="color:red ;text-align:right"></span></br>
				<span style="color:blue">abbasi.amir.89@gmail.comتهیه کننده :امیر عباسی هفشجانی<span>
			</div>
		</td>
		</tr>
		</table>
	</form>	
		
	</body>
</html>



