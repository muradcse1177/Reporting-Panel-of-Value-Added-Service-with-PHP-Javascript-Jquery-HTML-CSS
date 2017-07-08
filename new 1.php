<?php
$user = 'root';
$pass = '';
$server = 'localhost';
$dbh = new PDO( "mysql:host=$server", $user, $pass );
$dbs = $dbh->query( 'SHOW DATABASES' );
	while(( $db = $dbs->fetchColumn( 0 ) )!== false){
		?> <option value="<?php echo $db;?>" > <?php echo $db;?> </option>
		<?php
	}
?>