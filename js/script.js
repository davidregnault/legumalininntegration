
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


/* SCRIPT ANIMATION NAV */

var btn_nav = document.querySelector('#btn_nav');
var span_nav = document.querySelector('#span_nav_bg');
var nav = document.querySelector('nav');
var u ='close';

		btn_nav.addEventListener('click', function() {

				nav.classList.remove("nav_mobile_fermer");
				nav.classList.add("nav_mobile_ouvert");
				u = "open";

		});
		span_nav.addEventListener('click', function() {

				nav.classList.remove("nav_mobile_ouvert");
				nav.classList.add("nav_mobile_fermer");
				u ="close";
		});



/* SCRIPT cookies */

var refuserCookies = document.querySelector('#refuserCookies');
var accepterCookies = document.querySelector('#accepterCookies');
var cookies = document.querySelector('#cookies');


	refuserCookies.addEventListener('click', function() {
			cookies.classList.add("displayNone");
	});
	accepterCookies.addEventListener('click', function() {
			cookies.classList.add("displayNone");
	});

