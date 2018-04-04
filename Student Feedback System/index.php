<?php
echo '<html>
<head>
   <title>Home</title>
   <style>
   .home{
         width:360px;
         margin:50px auto;
         font-family:arial; 
         color: #168DA0;
         border-radius:10px;
         padding:12px 40px 25px;
         margin-top:70px; 
      }
      button{
         width:100%;
         background-color:#168DA0;
         color:#fff;
         padding:12px;
         font-size:20px;
         cursor:pointer;
         border-radius:10px;
         margin-bottom:15px; 
      }
   </style>
</head>
<body>';
?>


   <div class="home"> 
   <button onclick="location.href = 'choose.php';" id="myButton" class="float-left submit-button" >Enter Login page</button>

<?php
         
  echo '</body>
		</html>';
	  ?>