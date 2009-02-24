onLoadHash = false;

var S_TempHash;

function HashControls() {

	if (window) {
		if (window.location.hash != "" && window.location.hash != "#/" && window.location.hash != "#/View" && window.location.hash != "#/View/") {
			
			// Grab the Value after the Hash
			S_TempHash = window.location.hash.substr(1, window.location.hash.length-window.location.hash.indexOf("#"));
			onLoadHash = S_TempHash.replace(/\/View/, "/Project");
			
			if(onLoadHash == "/"){
				onLoadHash = false;
			}			
		}
	}

}

// PROJECTS Listener and Toggle
///////////////////////////////////////////

function ProjectControls() {

	var pg_links = document.getElementById("projects").getElementsByTagName("a");
	var I_MoreInfoLinks = document.getElementById("moreinfo").getElementsByTagName("a");
	var pg_link_count = (pg_links.length - I_MoreInfoLinks.length);


	// Loops Thru Links - Add listener - Check For Hash to Toggle
	for(a=0; a < pg_link_count; a++){

		// Toggle When hash is Equal to ID of List Item
		if (pg_links[a].parentNode.parentNode.getAttribute("id").indexOf(onLoadHash) >= 0 && onLoadHash) {
			toggleView(pg_links[a], true);
		}
	
		// Add Click Listener to Link
	
		pg_links[a].onclick = function(){
			toggleView(this, false);
			this.blur();
			return false;
		}
	}
}


// Toggles Project Display & Set HASH

function toggleView(link, onLoad){
		
	var content_Wrapper;
	
	if(link.getAttribute("href").indexOf("#/More") >= 0){
	
		// Get More Toggle Container
	
 		content_Wrapper = link.parentNode.parentNode.getElementsByTagName("div")[0];
	
	}else{
		
		// Get Project Toggle Container	
	
		content_Wrapper = link.parentNode.parentNode.getElementsByTagName("p")[0];
	
	}
	
	
	if (content_Wrapper.style.display != "block"){
	
		// Display Project
	
		content_Wrapper.style.display = "block";
		link.className = "on";
		
		// Old Non-IE Work
		//location.hash = link.getAttribute("href");
		
		// IE working Example
		// updateHash(link.getAttribute("href").substr(link.getAttribute("href").indexOf("#"), link.getAttribute("href").length));
		
		// TEST
		//window.hash = link.getAttribute("href").substr(link.getAttribute("href").indexOf("#"), link.getAttribute("href").length);
		//alert(link.getAttribute("href").substr(link.getAttribute("href").indexOf("#"), link.getAttribute("href").length));
		// #/Project/AnberlinVideoPostcard
		
		// Test 2
		S_TempHash = link.getAttribute("href").substr(link.getAttribute("href").indexOf("#"), link.getAttribute("href").length);
		location.hash = S_TempHash.replace(/#\/Project/, "#/View");
		
		if (onLoad){
			location.hash = link.getAttribute("href").substr(link.getAttribute("href").indexOf("#"), link.getAttribute("href").length);
			//alert("onload");
		}
	} else {
	
		// Hide Project
	
		content_Wrapper.style.display = "none";
		link.className = "";

		// Cancel The Hash

		location.hash = "/";

	}
	
}

// MAILING LIST Form Control
/////////////////////////////////////////// 

var I_email;
var I_email_default_value;

function MailingListControls() {

	I_email = document.getElementById("email");
	I_email_default_value = "Join Our Email List";

	I_email.onfocus = function(){
		if(this.value == I_email_default_value){
			this.value = "";		
		}
	}

	I_email.onblur = function(){
		if(this.value == ""){
			this.value = I_email_default_value;
		}
	}

}
/*	This changes the state if typed in
I_email.onkeyup = function(){
	if(this.value != ""){
		I_email.className = "filled";
	}else{
		I_email.className = "";
	}
}
*/

// Add to DOM
addDOMLoadEvent(HashControls);
addDOMLoadEvent(ProjectControls);
addDOMLoadEvent(MailingListControls);
