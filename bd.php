<?php
if(isset($_POST['submit'])){
	$database=$_POST['database'];
	$table=$_POST['table'];
	backup_tables('localhost','root','',$database,$table);
}
function backup_tables($host,$user,$pass,$name,$tables)
{	
	$conn = new mysqli("localhost", "root", "",$name);
	$result = $conn->query("SELECT DATABASE()");
	
	//get all of the tables
	if($tables == '*')
	{
		$tables = array();
		$sql="SHOW TABLES";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	
	//cycle through
	foreach($tables as $table)
	{
		$return="";
		$result = mysqli_query($conn,'SELECT * FROM '.$table);
		$num_fields = mysqli_num_fields($result);

		$row2 = mysqli_fetch_row(mysqli_query($conn,'SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysqli_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j < $num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = $row[$j];
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j < ($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	
	//save file
	$handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
	fwrite($handle,$return);
	fclose($handle);
}
?>


<html>
<body>

<form action="" method="POST">
  Database:<br>
  <input type="text" name="database" value="Mickey">
  <br>
  Table:<br>
  <input type="text" name="table" value="Mouse">
  <br><br>
  <input type="submit"  name="submit" value="Submit">
</form> 

</body>
</html>