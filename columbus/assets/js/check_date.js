function checkDate(){
    var dateValid=true;
    var vdate = document.getElementById('vdate').value;
    var today = new Date();    //This was the key line that I had to add to your code
    console.log("Users date  = " + vdate);
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
    
    if (dd < 10) {
     dd = '0' + dd;
    }  // need this in case day number is one digit like 6
    if (mm < 10) {
     mm = '0' + mm;
    }  // need this is month number is 1 digit like 4 
    
    var td = "" + today.getFullYear() + "-" + mm + "-" + dd;
    console.log("System date = " + td);
    
    if(vdate >= td){
       document.getElementById('errorMessage').innerHTML="  ** Warning:You cannot select today or the days after. **  "; 
       document.getElementById("vdate").style.borderColor="red";
       document.getElementById("errorMessage").style.backgroundColor = 'pink';
       dateValid = false;
       }
    else  {
       document.getElementById('errorMessage').innerHTML=""; 
       document.getElementById("vdate").style.border = null;
       document.getElementById("errorMessage").style = null;
       dateValid = true;
       }// end of else path
       
    return (dateValid);
}//end of function validate visitor's date to present date 
function goToNext()
{
var selections = document.getElementById('pageSelect');
var options = selections.getElementsByTagName('option');
var optionsCount = options.length;
// window.location sets the url of your current window. 
// To open a new window, you need to use window.open
for (var i = 0; i < optionsCount; i++) {
    if (options[i].selected == true) {
       window.location = options[i].value;
   }// end of if statement
  }//end of for loop
}// end of function