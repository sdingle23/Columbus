<?php
   $path= './';
    include ($path.'assets/inc/header.php');
?>

<?php    
    include ('assets/inc/navg.php');
?>
  
<h2>Feedback Comments</h2>
<p> Feel free to leave a comment if you wish! We are always excited to hear from our site viewers. It allows us to keep the quality of our site fresh and up-to-date. It alsso gives us a great opportunity to meett and connect with new people. You can view you comments below the comment box. Once again thank you for visiting our site and we are anxious to hear from you!
</p>


<form action="feedback.php" method="GET">		
	Name:<input type="text" id="name"  name="name"  width="40" placeholder="Enter your name" />
	<p>&nbsp;</p>
    Email:<input type="text" id="email"  name="email"  width="40" placeholder="Enter your email" />
	<p>&nbsp;</p>
	Comments: <br /> <textarea id="comment" name="comment"  cols="60" rows="15"></textarea> 
    <p><input class="in" type="submit" value="Add to List"/></p>
</form>
<?php
  	require "../../../dbconnect.php/dbConnect.inc";
	if ($mysqli) {
	  if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['comment'])) {
	  if( $_GET['name']!='' && $_GET['email'] && $_GET['comment']!='' ){
		/*
			we are using client entered data - therefore we HAVE TO USE a prepared statement
            
            https://www.w3schools.com/php/php_mysql_prepared_statements.asp
            
			1)prepare my query
			2)bind
			3)execute
			4)close
		*/
        

     
		$stmt=$mysqli->prepare("insert into feedback (name, email, comment) values (?, ?, ?)");
	    $stmt->bind_param("sss",$_GET['name'],$_GET['email'], $_GET['comment']);   
        $stmt->execute();
		$stmt->close();
	  }//end of if to make sure data is sent using $_GET
      }//end of isset
	  //get contents of table and send back...
     
      $sql = 'select name, email, comment from feedback';
	  $res=$mysqli->query($sql);
	  if($res){
        while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC))   {                        
			$records[] = $rowHolder;
		}
          
	  }
        
	}
        
mysqli_close($mysqli);
        
?>



 <?php
	//goal to display all the data in $records
		foreach($records  as $this_row){
	
		echo  '<li>' . " Name:  " .$this_row{"name"} . " Email:  ".  $this_row["email"]. " Comment: " . $this_row["comment"].'</li>';
	}
?> 






<?php    
    include ('assets/inc/footer.php');
?>