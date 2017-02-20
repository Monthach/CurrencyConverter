<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
<div class="conteiner">

	<div class="box">
        <h2>Currency converter</h2>
        <br>
        <div class = "box-01">
		<?php
			$money=$_POST['money'];
			$coin=$_POST['coin'];
			switch($coin) {
				case 1:
    				$coin_m=0.03;
    				$sum=$money*$coin_m;
    				echo "1 THB  = ".$coin_m." USD"."<br><br>";
    				echo number_format($money,2)." THB  =  ".number_format($sum,2)." USD";
    	 		 		break;
	 	  		case 2:
    				$coin_m=3.58757333;
    				$sum=$money*$coin_m;
    				echo "1 THB  = ".$coin_m." JPY"."<br><br>";
    				echo number_format($money,2)." THB =  ".number_format($sum,2)." JPY";
    	  		break;
      	  		case 3:
    				$coin_m=33;
    				$sum=$money*$coin_m;
    				echo "1 THB  = ".$coin_m." KRW"."<br><br>";
    				echo number_format($money,2)." THB =  ".number_format($sum,2)." KRW";
    	  		break;
			}
		?>
        </div>
        <br><br>
        <button type=button onClick='window.history.back()' value='No'>Back</button>
	</div>
</div>
</body>
</html>