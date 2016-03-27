var xmlHttp = createXmlHttpRequestObject();//a xml object that allows user to communicate with the website without refreshing the page

function createXmlHttpRequestObject(){//get the created object then store it to the 'xmlHttp' variable
var xmlHttp;

if(window.ActiveXObject){//check if user's using IE...
    try{
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");//...then set this to the variable 
    }catch(e){
        xmlHttp = false;//if user's using IE and can't even catch the object then...crash?
    }
}else{//if not IE 
    try{
        xmlHttp = new XMLHttpRequest();//built-in function for setting the variable 
    }catch(e){
        xmlHttp = false;//can't catch?...crash?
    }
}

if(!xmlHttp)
    alert("Cant create that object !")//if xmlHttp = false >> aha!
else
    return xmlHttp;//the function needs to return something.
}

function process(){//funtion to catch the created object then sends it to server
if(xmlHttp.readyState==0 || xmlHttp.readyState==4){//state of the object, '0' and '4' mean the object is free/ready 
    item = encodeURIComponent(document.getElementById("userInput").value);//read the user's input 
    xmlHttp.open("GET", "store.php?item="+item,true);//create a 'GET' request to the server, URL, 'true' = the request should be handled asynchronously 
    xmlHttp.onreadystatechange = handleServerResponse;//call 'handleServerResponse' function whenever the server responses
    xmlHttp.send(null);//send the request
}else{
    setTimeout('process()',1000);//if server doesn't response, resend the request every 1s
}
}

function handleServerResponse(){
if(xmlHttp.readyState==4){//when the object is done communicating
    if(xmlHttp.status==200){//'200' means the communication went OK
        xmlResponse = xmlHttp.responseXML; //extrating the xml file that we got in 'store.php'
        xmlDocumentElement = xmlResponse.documentElement;//the root element (the message) of the xml file
        message = xmlDocumentElement.firstChild.data;//the first message of the xml file
        document.getElementById("underInput").innerHTML = message;//put the message to screen
        setTimeout('process()', 1000);
    }else{
        alert('Someting went wrong !');//issue with server?
    }
}
}