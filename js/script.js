
/* SCRIPT ANIMATION ASIDE */

var btn_aside = document.querySelector('#btn_aside');
var aside = document.querySelector('aside');
var s ='open';

		btn_aside.addEventListener('click', function() {
			if(s =="open") {
				aside.classList.remove("aside_ouvert");
				aside.classList.add("aside_fermer");

				s = "close";
			} else if(s =="close") {
				aside.classList.remove("aside_fermer");
				aside.classList.add("aside_ouvert");
				s ="open";
			}	
		});

/* SCRIPT cookies */

var etatCookies;
var refuserCookies = document.querySelector('#refuserCookies');
var accepterCookies = document.querySelector('#accepterCookies');
var cookies = document.querySelector('#cookies');

if (etatCookies == "accepter") {
		cookies.classList.add("displayNone");
	}

	refuserCookies.addEventListener('click', function() {
			etatCookies = "accepter";
			cookies.classList.add("displayNone");

	});
	accepterCookies.addEventListener('click', function() {
			cookies.classList.add("displayNone");
			etatCookies = "accepter";
	});

