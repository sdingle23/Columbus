<?php
   $path= './';
    include ($path.'assets/inc/header.php');
?>

<?php    
    include ('assets/inc/navg.php');
?>
            <h2><em>Tell Us About  your visit:</em></h2>
            
            
            <div class="wrapper">        
                <form  action="process.php" method="POST"  onsubmit="return validate() && checkDate() && goToNext()">              
                     
                     <label>Who referred you?<input class="invalid" type="text" name="fullname" id="fullname" placeholder="Full Name" Required />         * <br><br></label>
                   
                    <!--Groupnumber input  -->
                     <label>How Many in Persons Your Group<input class="input3" type="text" name="groupNum" id="groupNum" placeholder="#" ></label><br><br>  
                    <!--End of groupnumber-->
                    <!--input for visit date-->
                     <p id="errorMessage"></p> 
                     <label for="vdate">When was Your Visit:<input class="invalid" type="date" name="vdate" id="vdate"/> *
                       
                     </label><!--End of visit date input--><br><br>
                      <!--input for favorite place--> 
                     <fieldset class="fav2">
                            <legend class="bold">Favorite Place Visited - Please Choose one</legend>
                            <label class="label2" for="myplace1">Polaris Mall</label><input type="radio"  name="fplace" id="myplace1" value="Polaris Mall">          <!--End of Favorite plce input-->               <br><br>

                            <label class="label2" for="myplace2">Cosi Museum</label><input type="radio"  name="fplace" id="myplace2" value="Cosi Museum">
                            
                            <br><br>

                           <label class="label2" for="myplace3">Columbus Commons Park</label><input type="radio"  name="fplace" id="myplace3" value="Columbus Commons Park">
                              
                           <br><br>

                           <label class="label2" for="myplace4">Milestones229</label><input type="radio"  name="fplace" id="myplace4" value="Milestones229">
                            
                                
                          <br><br> 
                     </fieldset><br><br>                        
              
                    <label>Please leave a rating for Columbus, Ohio:</label><br><br>
                            0<input class="slidecontainer" type="range" min="0" max="10" name="rating" id="rating" 
>10 <br>
                            <input class="input" type="submit" value="Submit">        
               
        </form>
    </div><!--End of div wrapper--><br>
       
<?php    
    include ('assets/inc/footer.php');
?>  