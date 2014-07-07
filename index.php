<?php include_once 'menu.php'?>

<div id="working_space">
			<div id="frame">
				<?php include 'themes/theme1/index.php' ?>
			</div>

			<textarea id="editor" name="editor"></textarea>
			<script type="text/javascript">
				function changeText() {
					document.getElementById('frame').innerHTML = document.getElementById('input').value;
				}
			</script>

			<input type='button' onclick='changeText()' value='Change Text'/>
		</div>
	</body>

</html>
<?php
include 'mb_config.php';


$connect = mysqli_connect("$host", "$db_username", "$password");
$select = mysql_select_db("$db_name", $connect);

// Check Connection

if (mysqli_connect_error()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "Connected succesfull!";
}

mysqli_close($connect);
?>