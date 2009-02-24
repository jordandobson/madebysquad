// AJAX Functions & Variables
///////////////////////////////////////////

	// Create AJAX Request Object
		
		var XMLHTTPREQUEST_MS_PROGIDS = new Array(
		  "Msxml2.XMLHTTP.7.0",
		  "Msxml2.XMLHTTP.6.0",
		  "Msxml2.XMLHTTP.5.0",
		  "Msxml2.XMLHTTP.4.0",
		  "MSXML2.XMLHTTP.3.0",
		  "MSXML2.XMLHTTP",
		  "Microsoft.XMLHTTP"
		);

		function createRequestObj() {
			var httpRequest = null;
			
			// Create the appropriate HttpRequest object for the browser.
			if (window.XMLHttpRequest != null) {
				httpRequest = new XMLHttpRequest();
			} else if (window.ActiveXObject != null) {
				// Must be IE, find the right ActiveXObject.
				var success = false;
				for (var i = 0; i < XMLHTTPREQUEST_MS_PROGIDS.length && !success; i++) {
					try {
						httpRequest = new ActiveXObject(XMLHTTPREQUEST_MS_PROGIDS[i]);
						success = true;
					}
					catch (ex){
						
					}
				}
			}

			// Display an error if we couldn't create one.
			if (httpRequest == null) {
			
			}
			return httpRequest;
		}
		
	// Set Variable Equal to Request Object
		var contentOBJ = createRequestObj();
	
// Validation Functions
///////////////////////////////////////////
	function checkEmail(emailEntryValue){
		var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		var checkResult;
		
		if(filter.test(emailEntryValue)){
			checkResult = true;
		}else{
			//alert("SORRY! Your email address is invalid.");
			checkResult = false;
		}
		return (checkResult)
	}
	
// AJAX Mailing List Functions
///////////////////////////////////////////


function AddToList(S_Email) {
	if (checkEmail(S_Email)) {
		contentOBJ.open("get", "/_site/php/list.php?Email="+S_Email, true);
		contentOBJ.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		contentOBJ.setRequestHeader("Content-length", 0);
		contentOBJ.onreadystatechange = loadCart;
		contentOBJ.send("");
	} else {
		// Bad Email Address
		O_MailForm.className = "error";
		O_AlertText.innerHTML = S_Error;
	}
}

function loadCart() {
	if (contentOBJ.readyState == 4) {
		var resContent = contentOBJ.responseText;
		if (resContent == "good") {
			O_MailForm.className = "success";
			O_AlertText.innerHTML = S_Valid;
			O_EmailField.value = I_email_default_value;
		} else {
			O_MailForm.className = "error";
			O_AlertText.innerHTML = S_Error;
		}
	}	

}

function submitEmail() {
	RemoveOldAlert();
	AddToList(O_EmailField.value);
}

function RemoveOldAlert() {
	
	if (O_AlertText) {
		O_AlertText.innerHTML = "";
	}
}


// Gather Variables and Add Settings
///////////////////////////////////////////
var O_MailForm;
var O_EmailField;
var O_MailSubmit;
var O_AlertText;

function GetMailVars() {

	O_MailForm = document.getElementById("alert");
	O_EmailField = document.getElementById("email");
	O_MailSubmit = document.getElementById("submit");
	O_AlertText = document.getElementById("alert_msg");

	O_MailForm.onsubmit = function() {
		submitEmail();
		return false;
	}

	O_MailSubmit.onclick = function() {
		submitEmail();
		return false;
	}

	O_MailSubmit.onsubmit = function() {
		submitEmail();
		return false;
	}

}

var S_Error = "										<strong>&larr;</strong>";
S_Error += "										<em>";
S_Error += "											<b>OOPS!</b>";
S_Error += "											<i>Invalid Email Address.</i>";
S_Error += "											<small>Please try again.</small>";
S_Error += "";
S_Error += "										</em>";

var S_Valid = "											<strong>&larr;</strong>";
S_Valid += "											<em>";
S_Valid += "";
S_Valid += "												<b>Thank You</b>";
S_Valid += "												<i>for joining!</i>";
S_Valid += "											</em>";


// Add to DOM
addDOMLoadEvent(GetMailVars);

