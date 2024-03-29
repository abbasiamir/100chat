<?php
	include( 'PersianCalendar.php');
	session_start();
	$con=mysql_connect('localhost','844593','amirabbasi1358','844593');
	mysql_select_db('844593',$con);
	$room=$_POST["room"];
	if(isset($_REQUEST["set"])){
		$room=$_POST["room"];
		$text=$_REQUEST["text"];
		$color="#".str_pad(dechex($_REQUEST["color"]),6,'0',STR_PAD_LEFT);
		$name=$_SESSION["myname"];
		$dates=gregorian_to_mds(date("Y"),date("m"),date("d"));
		$minut=(date("i")+30) % 60;
		$hour=((date("H")+((date("i")+30)/60)+8) % 24)+1;
if($houre>23) $houre=0;
		$day=$dates[2]+1;
		if($dates[1]>6)
			if($day>30) $day=1;
		if($dates[1]<=6)
			if($day>31) $day=1;
		$date=$dates[0]."/".$dates[1]."/".$day."--".$hour.":".$minut;
		$sql=("insert into chat(text,color,name,room,date) values('$text','$color','$name','$room','$date')");
		mysql_query($sql,$con);
		
		//$_REQUEST["set"]=false;
	}
    if (isset($_REQUEST["get"])){
		
		
		$result=mysql_query("select * from chat where room='$room'",$con);
		if($result==false)
			echo mysql_error($con);
		unset($_SESSION["$room"]);
		while($r=mysql_fetch_array($result)){
			$_SESSION["$room"]["text"][]=$r["text"];
			$_SESSION["$room"]["color"][]=$r["color"];
			$_SESSION["$room"]["name"][]=$r["name"];
			$_SESSION["$room"]["date"][]=$r["date"];
		}
		if(!isset($_SESSION["$room"]))
			$size=0;
		else
			$size=sizeof($_SESSION["$room"]["text"]);
		if(!isset($_SESSION["a"]["$room"]["index"])&&$size>0){
			$_SESSION["a"]["$room"]["index"]=$size;
			
		}
		else if($size==0)
			$_SESSION["a"]["$room"]["index"]=0;
		if($_SESSION["a"]["$room"]["index"]<$size)
		{
		$index=$_SESSION["a"]["$room"]["index"];
		echo "&nbsp&nbsp";
		echo'<span style="font:italic 18px Arial;color:black">'.$_SESSION["$room"]["name"][$index].':</span>'.'<span style="font:bold 21px arial ;color:'. $_SESSION["$room"]["color"][$index].'">'.
				$_SESSION["$room"]["text"][$index].'</font><i><span style="font-size:12px;color:red">['.$_SESSION["$room"]["date"][$index].']</span></i></span></br>';
		 $_SESSION["a"]["$room"]["index"]++;
		}
		if($size>50){
			$sql="delete from chat where room='$room' LIMIT 20";
			mysql_query($sql,$con);
		}
	}
	if (isset($_REQUEST["getload"])){
	
		$result=mysql_query("select * from chat where room='$room'",$con);
		if($result==false)
			echo mysql_error($con);
		unset($_SESSION["$room"]);
		while($r=mysql_fetch_array($result)){
			$_SESSION["$room"]["text"][]=$r["text"];
			$_SESSION["$room"]["color"][]=$r["color"];
			$_SESSION["$room"]["name"][]=$r["name"];
			$_SESSION["$room"]["date"][]=$r["date"];
		}
		if(!isset($_SESSION["$room"]))
			$size=0;
		else
			$size=sizeof($_SESSION["$room"]["text"]);
		
		if($size>0){
			if($size<50)
			{
				for($i=0;$i<$size;$i++){
				echo'<span style="font:italic 18px Times New Roman;color:black">'.$_SESSION["$room"]["name"][$i].':</span>'.'<span style="font:bold 21px arial ;color:'. $_SESSION["$room"]["color"][$i].'">'.
				$_SESSION["$room"]["text"][$i].'</font><i><span style="font-size:12px;color:red">['.$_SESSION["$room"]["date"][$i].']</span></i></span></br>';
				}
				
			}
			else{
			for($i=$size-50;$i<$size;$i++){
			echo'<font   color='. $_SESSION["$room"]["color"][$i].'>'.$_SESSION["$room"]["name"][$i].':'.
			$_SESSION["$room"]["text"][$i].'</font><i><span style="font-size:12px;color:red">['.$_SESSION['$room']['date'][$i].']</span></i></br>';
				}
			}
		}
		$_SESSION["a"]["$room"]["index"]=$size;
	}
	
mysql_close($con);

?>