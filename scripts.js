//setCookie("index",getindex());
			
			function save(roomName){
			
			  var str=$("#text").val();
			  var count=0;
			  for(var i=0;i<str.length;i++){
				var code=str.charCodeAt(i);
				if((code>=65&&code<=90)||(code>=97&&code<=122))
					count++;
			  }
			  if (count>10&&str.substring(0,4)!="http")
				return false;
			if(str.length=count&&str.substring(0,4)!="http")
				return false;
			

			  $.ajax({
				type:"POST",url:"/main.php",
				data:{set:true,color:getCookie('color'),name:getCookie("name"),text:$("#text").val(),index:0,room:roomName},
				//async:false,
			  });
			  $("#text").val("");
			  $("#text").focus();
			  //$("#text").setCursorPosition(0);
			  
			}
			
			function show(roomName){
				var objDiv = document.getElementById("room");
				
				$("#room").scroll(function() {
					if(objDiv.scrollHeight-$("#room").scrollTop()  == 500) {
					scroll=true;
					}
					else
						scroll=false;
				});
				$.ajax({
					type:"POST",
					url:'/main.php',
					data:{get:true,color:"",name:"",text:"",room:roomName},
					
				})
				.done(function(html){
					
					$("#room").append(html);
					
 
				});
				if(scroll)
					objDiv.scrollTop = objDiv.scrollHeight;
			}
			function showload(roomName){
				$.ajax({
					type:"POST",
					url:'/main.php',
					data:{getload:true,color:"",name:"",text:"",room:roomName},
					
				})
				.done(function(html){
					$('#room').val("");
					$("#room").append(html);
					
				});
				
					
				
				//$('#room').change( function() {
				//	alert("hello");
				//})
				display(roomName);
			}
			function display(roomName){
						
						show(roomName);
							
						
							
						setTimeout(function(){display(roomName);},3000);
							
							
			}
			