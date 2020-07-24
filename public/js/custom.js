function gotoSearch(e) {
	if (e.keyCode == 13) {
		window.location.href = '/search/'+$('#searchfullwordinput').val()+'/1';
    }
}

function gotoSearchMini(e) {
	if (e.keyCode == 13) {
		window.location.href = '/search/'+$('#searchformmini').val()+'/1';
    }
}

function gotoSearchMiniMobile(e) {
	if (e.keyCode == 13) {
		window.location.href = '/search/'+$('#searchformminiMobile').val()+'/1';
    }
}

function searchMobile() {
	window.location.href = '/search/'+$('#searchformminiMobile').val()+'/1';
}

//Get the button
var mybutton = document.getElementById("toTopBtn");
var mobiletoc = document.getElementById("mobiletoc");

//When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction();try {resetPosButton();FocusDivButton();}catch(err){console.log(err)};};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
		try{
			mobiletoc.style.minHeight  = "48px";
			mobiletoc.style.backgroundColor = "rgba(255, 255, 255,1)";
		}catch(err){
			
		}
	} else {
		mybutton.style.display = "none";
		try{
			mobiletoc.style.minHeight  = "0px";
			mobiletoc.style.backgroundColor = "rgba(255, 255, 255,0)";
		}catch(err){
			
		}
	}
}

//When the user clicks on the button, scroll to the top of the document
function topFunction() {
	window.scrollTo({top: 0, behavior: 'smooth'});
}

function scrollToId(Id) {
	window.scrollTo({top: (document.getElementById(Id).offsetTop + 20), behavior: 'smooth'});
}

function scrollElementtoIdLeft(element,element2){
	element.scrollTo({left: (element2.offsetLeft - 10), behavior: 'smooth'})
}