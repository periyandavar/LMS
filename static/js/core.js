
function hasClass(elem, className) {
	console.log(elem);
    return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
function addClass(elem, className) {
    if (!hasClass(elem, className)) {
        elem.className += ' ' + className;
    }
}
function removeClass(elem, className) {
    if (hasClass(elem, className)) {
		if(elem.className == className) {
			elem.className = "";
		} else {
        	elem.className = elem.className.replace(" "+className,"");
		}
	} 
}

function menucontrol() {
	if (hasClass(document.getElementById('menu'), "closed-nav")) {
		removeClass(document.getElementById("menu"), "closed-nav");
		addClass(document.getElementById("open-menu"), "closed-nav");
		removeClass(document.getElementById("close-menu"), "closed-nav");
	} else {
		addClass(document.getElementById("menu"), "closed-nav");
		removeClass(document.getElementById("open-menu"), "closed-nav");
		addClass(document.getElementById("close-menu"), "closed-nav");
	}
}





var slideIndex = 0;
var dropDownBtns = document.getElementsByClassName('drop-down-btn');
if (dropDownBtns != null) {
	for (let i=0; i<dropDownBtns.length; i++) {
		dropDownBtns[i].addEventListener("click", function () {
			toggleClass(this, "active");
			let content = this.lastElementChild;
			if (content.style.display == "block")
				content.style.display = "none";
			else
				content.style.display = "block";
				console.log("we");
		});
	}
}
window.onclick = function(event) {
	let index = event.target.className.indexOf("drop-down");
	if (index < 0) {
		let elems = document.getElementsByClassName("drop-down");
		for (let i=0; i<elems.length; i++) {
			elems[i].style.display = "none";
		}
	}
};
function toggleClass(element, className) {
	// let element = document.getElementById(name);
	if (element.classList) { 
		element.classList.toggle(className);
	} else {
		let classes = element.className.split(" ");
		let i = classes.indexOf(className);
		if (i >= 0) 
			classes.splice(i, 1);
		else 
			classes.push(className);
		element.className = classes.join(" "); 
	}
  }
function slideshow() {
    const slides = document.getElementsByClassName('slide');
    
    for (const slide of slides) {
        slide.style.display = "none";
    }
    if (slideIndex < 0) {
        slideIndex = slides.length-1;
    }
    else if (slideIndex > slides.length - 1) {
        slideIndex = 0;
    }
    slides[slideIndex].style.display = "block";
    slideIndex = slideIndex + 1;
    setTimeout(slideshow, 7000);
}
function changeSlide(index) {
    const slides = document.getElementsByClassName('slide');

    for (const slide of slides) {
        slide.style.display = "none";
    }
    if(index < 0) {
        index = slides.length - 1;
    }
    else if (index > slides.length - 1){
        index = 0;
    }
    slides[index].style.display = "block";
    slideIndex = index + 1;
}

function openModal(ele, img, captcha){
    ele = document.getElementById(ele);
    ele.style.display = "block";
	if (img != null) {
		document.getElementById(img).src = captcha;
	}
}

function dropDownMenuClick(ele){
    ele = document.getElementById(ele);
    if (ele.style.display == "block")
        ele.style.display = "none";
    else
        ele.style.display = "block";
}

function closeModal(ele){
    document.getElementById(ele).style.display = "none";
}

function AskConfirm(title, msg='', ok=function ok(){} , cancel=function cancel(){}){
	var alertWindow = document.createElement("div");
	code = '<div id="modal" class="Askmodal"><div id="alert-modal" class="alert-modal">';
	code = code + '<span class="close-modal" onclick="this.parentNode.parentNode.remove()">&#x2716;</span>';
	code = code + '<h5> Are you sure to continue..? </h5><span>   </span>';
	code = code + '<div><button class="alert-btn positive" onclick="this.parentNode.parentNode.parentNode.remove();ok();">OK</button><button class="alert-btn negative" onclick="this.parentNode.parentNode.parentNode.remove();cancel();">Cancel</button>'
	code = code + '</div></div></div>';
	alertWindow.innerHTML = code;
	document.body.appendChild(alertWindow);
	//document.getElementsByTagName('body')[0].innerHTML=document.getElementsByTagName('body')[0].innerHTML+code;
}

function toast(msg = '', theme = '', title = ""){
	var ele = document.getElementById('toast-container');
	var symbol = '';
	var title = '';
	switch (theme) {
		case 'info':
			title = title != '' ? title : "Info..!";
			symbol = '<i class="fa fa-info toast-symbols" aria-hidden="true"></i>';
			break;
		case 'warning':
			title = title != '' ? title : "Warning..!";
			symbol = '<i class="fa fa-exclamation-triangle toast-symbols" aria-hidden="true"></i>';
			break; 
		case 'danger':
			title = title != '' ? title : "Danger..!";
			symbol = '<i class="fa fa-shield toast-symbols" aria-hidden="true"></i>';
			break;
		case 'success':
			title = title != '' ? title : "Success..!";
			symbol = '<i class="fa fa-check toast-symbols" aria-hidden="true"></i>';
			break;
		default:
			title = title != '' ? title : "New Message..!";
			symbol = '<i class="fa fa-bell toast-symbols" aria-hidden="true"></i>';
			break;

	}
	code = '<div class="toast ' + theme + '"><span class="close-toast" onclick="this.parentNode.style.display=\'none\'">&#x2716;</span>'
	code = code + '<h3>' + symbol + title + '</h3>';
	code = code + '<span>' + msg + '</span>';
	code = code + '</div>';
	if (ele == null) {
		var Toast = document.createElement("div");
		Toast.id = "toast-container";
		Toast.innerHTML = code;
		document.body.appendChild(Toast);
	} else {
		ele.innerHTML = ele.innerHTML+code;
	}
	setTimeout(hideToast, 20000); 
}

function hideToast(){
	toasts = document.getElementsByClassName('toast');
	toasts[0].remove();
	if (toasts.length > 1) {
		setTimeout(hideToast,20000);
	}
}

function showElement(id) 
{
	document.getElementById(id).style.display = 'block';
}
