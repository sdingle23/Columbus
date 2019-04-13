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
    }
 }
}