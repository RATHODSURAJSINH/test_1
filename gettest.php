<html>  
   <head>
      <style>
   table{
                border:solid black;
	            padding : 5px 10px;
	            border : double black;
	            border-radius: 15px;
	            margin: 25px;
	            width: 400px;
	            background-color: rgb(234, 234, 235);
                }
                table, th, td { 
                text-align:center;
                border-radius:7px; 
            } 
            th, td { 
                padding: 12px; 
                background-color:none; 
            } 
        </style>

   </head>
   <body>  
      <center>
      <table>
         <tr>
            <td>
      Your Mobile Number: <?php echo $_POST["num"];?><br></td>
         </tr>
         <tr>
            <td>
      Your Enrollment NO : <?php echo $_POST["er"];?></td>
         </tr>
   </body>
         </center>  
</html>  
