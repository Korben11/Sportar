function validateEmail(email) { 
  // http://stackoverflow.com/a/46181/11236
  
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var res = re.test(email);
	inputColor("#email",  res);

    return re.test(email);
}

function validateString(str, id) {
	if(str==null||str==""){
		inputColor(id, false);
		return false;
	} else {
		inputColor(id, true);
		return true;
	}
	  
}

function inputColor(className, res) {
	if(res){
    	$(className).css("color", "#3c3c3c");
    	$(className).css("border", "3px solid rgba(0,0,0,0)");
    } else {
    	$(className).css("color", "red");
    	$(className).css("border", "3px solid red");
    }
}

function validateContactForm(){
  $("#result").text("");
  var name = $("#name").val();
  var email = $("#email").val();
  var text = $("#comment").val();
  // TODO: if not valid form do not send to server

  return false;
}