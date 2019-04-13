<?php
   $page='home'
    $path= './';
    include ($path.'assets/inc/header.php');
?>
<?php    
    include ('assets/inc/navg.php');
?>
 <?php 
  require "../../../dbconnect.php/dbConnect.inc";
	if ($mysqli) {
	  if (isset($_GET['name']) && isset($_GET['comment'])) {
	  if( $_GET['name']!='' && $_GET['comment']!='' ){
		

     
		$stmt=$mysqli->prepare("insert into comments (name, comment) values (?, ?)");
	    $stmt->bind_param("ss",$_GET['name'],$_GET['comment']);   
        $stmt->execute();
		$stmt->close();
	  }//end of if to make sure data is sent using $_GET
      }//end of isset
	  //get contents of table and send back...
     
      $sql = "select content from columbus where page='$page'";
	  $result=$mysqli->query($sql);
	  if($result ->num_rows > 0){
          //output data for each row
        while($row = ($result->FETCH_ASSOC())   {                         echo $row['content'];
        }
          
	  }else{
        echo "0 results, something went wrong!";
      }
  ?>
        
mysqli_close($mysqli);
        
?>
?>
 <?php
    include ('assets/inc/footer.php');
 ?>
  