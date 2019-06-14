<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
  //POST metodni o'zgaruvchiga tenglashtiramiz
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$study = $_POST["study"];
//maydonni tekshirish
if (empty($fname)) {
	$noname = "*Ism to'ldirilmagan";
}else{
	$fnam = "Isming: ".Forma($fname);
}
if (empty($lname)) {
	$nolname = "*Familya to'ldirilmagan";
}else{
	$lnam = "Familiyangiz: ".Forma($lname);
}
if (empty($email)) {
	$noemail = "*Email to'ldirilmagan";
}else{
	$emal = "Pochtangiz: ".Forma($email);
}
if (empty($study)) {
	$nostudy = "*Holat tanlanmagan";
}else{
	$stud = "Holatingiz: ".Forma($study);
}
//funksiya yaratib olamiz
function Forma($input){
	$input = trim($input);
	$input = htmlspecialchars($input);
	$input = stripcslashes($input);
	return $input;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	Ism: <span style="color:red"><?php echo $noname;?></span><br><input type="text" name="fname"><br>
	Familiya: <span style="color:red"><?php echo $nolname;?></span><br><input type="text" name="lname"><br>
	Email: <span style="color:red"><?php echo $noemail;?></span><br><input type="text" name="email"><br>
	O'qiysizmi?: <span style="color:red"><?php echo $nostudy;?></span><br>
	<input type="radio" name="study" value="Ha">Ha<br>
	<input type="radio" name="study" value="Yo'q">Yo'q<br>
	<input type="submit" value="Yuborish">
</form>

<h1>Sizning ma'lumotlaringiz: </h1>

<?php 
//o'zgaruvchidagi ma'lumotlarni ekranga chiqaramiz
echo $fnam;
echo "<br>";
echo $lnam;
echo "<br>";
echo $emal;
echo "<br>";
echo $stud;
echo "<br>";

?>
</body>
</html>
