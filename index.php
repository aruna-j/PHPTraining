
<?php include("variables.php")//this gets the variables from variables.php
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  	<?php include("navbar.php")//this gets the code from navbar.php
		?>
  	<br>
  	<br><br>
  	<center>

  		<div class="bread-crumb">
  			
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>


  		</div>
    <h1>
    	

			<?php
			//this is single line comment
			/** multiple line comment
			which is very useful
			*/
			echo "Copyright    @".$company_name.date("Y")." All rights reserved";//$company_name comes from variables.php
			echo "<br/><br/>Helo World! <br/>";//print to 
			//the screen
			$first_name="Aruna";
			$last_name="Satheesh";
			echo $first_name." ".$last_name;

			?>

    </h1>
</center>	


	<?php
//functions
	echo "<br/>";
	
	function helloThere($name){
		$number1=1000000;
		echo "Hello there!!! $name";
		echo "this is a number $number1";

	}

	helloThere("Aruna");

	function add($num1, $num2){
		return $num1+$num2;
	}
	$answer=add(23,77);
	echo "answer is :  $answer";
	echo "<br> 10% of a+b is" .$answer*0.1;
	echo "<br>".mt_rand(0,10);//gives a random numbe each time. better than rand();
	echo "<br>DATE  ".date("y");//last 2 digits of year
	echo "<br>DATE  ".date("Y");//2021
	echo "<br>DATE  ".date("l jS \of F, Y");//2021
//string manipulation
	$somestring ="aruna is a good parent";
	echo "<br>String replace:   ".str_replace("aruna", "Satheesh", $somestring);
	echo "<br>".ucwords($somestring);
	echo "<br>".ucfirst($somestring);
//include function

?>






			<?php 
			echo "<br/>";echo "<br/>";echo "<br/>";
			echo "$first_name <br>";
			echo 50+9;
			echo"<br>";
			$num1=1000;
			$num2=101;
			echo $num1+$num2;
			echo"<br><br>";
			var_dump($num1==$num2);
			var_dump($num1!=$num2);

			if($num1==100)	{
				echo "<br>the number1 variable is 100<br>";
			}
			elseif ($num1==1000) {
				echo "<br>" .$num1."  the number1 variable is 1000<br>";	
			}
			else{
				echo "This is boring";
			}

//Numeric Arrays
			$member="kanaka";
			$array_example=array("ARuna", "Satheesh","Ruthi","Eegi",$member);
			echo $array_example[4];

			$last_=array("jeevanantham","rajendran");
			$first_=array("aruna", "satheesh",$last_);
			
			echo "<br>". $first_[2][1];
//Associative arrays
			$fav_pizza=array("Aruna"=>"mother", "satheesh"=>"father");
			echo "<br>".$fav_pizza["Aruna"];
			echo "<br>".count($fav_pizza);
			echo "<br>".count($first_);
//while loop
			$a=10;$b=10;
			while($a==$b){
				echo "<br>"."this is while loop";
				$b++;
			}

//for loops
			for($counter=0;$counter<10;$counter++){
				echo "<br>"."this is count#".$counter;
			}

//for each loop
			foreach($array_example as $family_member){
				echo $family_member."<br>";
			}



			?>










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>