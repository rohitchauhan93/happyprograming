
 
 
 <?php
 
 echo "<link rel='stylesheet' href='./style.css'>";
 
echo "<script>
function load()
{
    window.location.href='#popup1'
}
</script>";
echo "<body onload='load()'>";


echo "<div id='popup1' class='overlay'>
	<div class='popup'>
		<h2>Codexa</h2>
		<a class='close' href='#'>&times;</a>
		<div class='content'>
			Thank to pop me out of that button, but now i'm done so you can close this window.
		</div>
	</div>
</div>";
echo "</body>";
?>


