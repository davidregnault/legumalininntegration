
/* SCRIPT ANIMATION ASIDE */

var btn_aside = document.querySelector('#btn_aside');
var aside = document.querySelector('aside');
var s ='open';

		btn_aside.addEventListener('click', function() {
			if(s =="open") {
				aside.style.right = '-8%';
				s = "close";
			} else if(s =="close") {
				aside.style.right = '0%';
				s ="open";
			}	
		});


/* SCRIPT cookies */

var etatCookies = localStorage.getItem('etatCookies');
var refuserCookies = document.querySelector('#refuserCookies');
var accepterCookies = document.querySelector('#accepterCookies');
var cookies = document.querySelector('#cookies');

if (etatCookies == "accepter") {
		cookies.classList.add("displayNone");
	} else if (etatCookies == "refuser") {
		cookies.classList.add("displayNone");
	} else if (etatCookies = null) {
		cookies.classList.remove("displayNone");
	} 

	refuserCookies.addEventListener('click', function() {

			localStorage.setItem("etatCookies", "refuser");
			cookies.classList.add("displayNone");

	});
	accepterCookies.addEventListener('click', function() {

			localStorage.setItem("etatCookies", "accepter");
			cookies.classList.add("displayNone");

	});

