
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


/* SCRIPT */