 //test to validate form
             function validate() {             
             var ret = true;
             var fullname=document.getElementById('fullname');       
            console.log(document.getElementById('fullname').value);                               
             //test fname
             if (fullname.value == ''){
                //nothing put in
                //make the border red
                fullname.style.borderColor = 'red';
                fullname.style.backgroundColor = 'pink';                 
                ret=false; //Missing First name
             }
             else
             {
                 fullname.style=null;
             }
             
                 return(ret && fullname);                  

                                
              
             }// end of function validate
          
              //function to validate visitor's date to present date 
 