<?php

$connect=mysqli_connect('localhost','root','12345','userregistration');
$query1="select * from breaktable where foodtype=1";
$query2="select * from breaktable where foodtype=2";
$query3="select * from breaktable where foodtype=3";
$query4="select * from breaktable where foodtype=4";



$result=mysqli_query($connect,$query1)or die(mysqli_error($connect));
$result1=mysqli_query($connect,$query2)or die(mysqli_error($connect));
$result2=mysqli_query($connect,$query3)or die(mysqli_error($connect));
$result3=mysqli_query($connect,$query4)or die(mysqli_error($connect));

$main_course=array();
$starter=array();
$breakfast=array();
$desert=array();

while($row=mysqli_fetch_array($result))
{
	
	$main_course[]=array(
		'id' => $row["id"],
		'category'=> $row["category"],
		'description' => $row["description"],
		'price' => (double)$row["price"],
		'qty'=>(int)$row["qty"]


	);

}


while($row=mysqli_fetch_array($result1))
{
	
	$starter[]=array(
		'id' => $row["id"],
		'category'=> $row["category"],
		'description' => $row["description"],
		'price' => (double)$row["price"],
		'qty'=>(int)$row["qty"]


	);

}

while($row=mysqli_fetch_array($result2))
{
	
	$breakfast[]=array(
		'id' => $row["id"],
		'category'=> $row["category"],
		'description' => $row["description"],
		'price' => (double)$row["price"],
		'qty'=>(int)$row["qty"]


	);

}
while($row=mysqli_fetch_array($result3))
{
	
	$desert[]=array(
		'id' => $row["id"],
		'category'=> $row["category"],
		'description' => $row["description"],
		'price' => (double)$row["price"],
		'qty'=>(int)$row["qty"]


	);

}





$file_name='maincourse.json';
$file_name1='starter.json';
$file_name2='breakfast.json';
$file_name3='desert.json';
if(file_put_contents(($file_name), json_encode($main_course)))
{
	echo $file_name . 'file created';
}
elseif (file_put_contents(($file_name1), json_encode($starter))) {
	echo $file_name1 . 'file created';
}
elseif(file_put_contents(($file_name2), json_encode($breakfast)))
{
echo $file_name2 . 'file created';
}
elseif(file_put_contents(($file_name3), json_encode($desert)))
{
echo $file_name3 . 'file created';
}
else
{
	echo 'something went wrong';
}

?>