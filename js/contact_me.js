//function for enable submit button, after clicked check box
function enableButton(){
    if(document.getElementById("check1").checked){
        document.getElementById("submit1").disabled=false;
        }
        else{
        document.getElementById("submit1").disabled=true;
        }
}
