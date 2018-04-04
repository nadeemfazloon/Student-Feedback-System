<?php

echo '<html>';
echo '<head>';
echo '<title>Home</title>';
echo '<style>';
echo '.home{';
echo '   width:360px;';
echo '         margin:50px auto;';
echo '         font-family:arial; ';
echo '         color: #168DA0;';
echo '         border-radius:10px;';
echo '         padding:12px 40px 25px;';
echo '         margin-top:70px; 
			}
			   button{
               width:100%;
			   background-color:#168DA0;
			   color:#fff;';
echo '         padding:12px;';
echo '         font-size:20px;';
echo '         cursor:pointer;';
echo '         border-radius:10px;';
echo '         margin-bottom:15px; ';
echo '      }';
echo '   </style>';
echo '</head>';
echo '<body>';
echo '   <div class="home"> ';
?>
		<button onclick="location.href = 'loginStud.php';" id="myButton" class="float-left submit-button" >Student login</button><p>
		<button onclick="location.href = 'Leclogin.php';" id="myButton" class="float-left submit-button" >Lecturer Login</button>

<?php
         
echo '      </body>';
echo '      </html>';
?>