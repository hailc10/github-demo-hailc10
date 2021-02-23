<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Quản lý sách</title>
	<link rel="stylesheet" href="index.css"> 
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
	   $(document).ready(function(){
		  
		   $("#cau1").click(function(){	
			 $.get("cau1.php",function (data){
                   $("#content").html(data);
             });
		   });

		   $("#cau2").click(function(){	
			 $.get("cau2.php",function (data){
                   $("#content").html(data);
             });
		   });

		   $("#cau3").click(function(){	
			 $.get("cau3.php",function (data){
                   $("#content").html(data);
             });
		   });

		   $("#cau4").click(function(){	
			 $.get("cau4.php",function (data){
                   $("#content").html(data);
             });
		   });

		   $("#cau5").click(function(){	
			 $.get("cau5.php",function (data){
                   $("#content").html(data);
             });
		   });

	   });
	</script>
</head>
<body>
     <div id="parent-list" class="flex">
	 <div class="child-flex"><a href="index.php">Trang Chủ</a></div>
	    <div class="child-flex"><a id="cau1" href="#">Câu 1</a></div>
		<div class="child-flex"><a id="cau2" href="#">Câu 2</a></div>
		<div class="child-flex"><a id="cau3" href="#">Câu 3</a></div>
		<div class="child-flex"><a id="cau4" href="#">Câu 4</a></div>
		<div class="child-flex"><a id="cau5" href="#">Câu 5</a></div>
	 </div>
     <div id="content" class="content-ed">
         <img style="max-width:850px;max-height:550px;" src="https://s3.amazonaws.com/cdn-origin-etr.akc.org/wp-content/uploads/2017/11/14112506/Pembroke-Welsh-Corgi-standing-outdoors-in-the-fall.jpg">
	 </div>
    
</body>
</html>