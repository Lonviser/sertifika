 jQuery(document).ready(function() {
	 jQuery('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',

		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if( jQuery(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
});

let isMobile = {
    Android: function() {return navigator.userAgent.match(/Android/i);},
    BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},
    iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},
    Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},
    Windows: function() {return navigator.userAgent.match(/IEMobile/i);},
    any: function() {return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());}
  };
      let body=document.querySelector('body');
  if(isMobile.any()){
      body.classList.add('touch');
      let arrow=document.querySelectorAll('.arrow');
    for(i=0; i<arrow.length; i++){
        let thisLink=arrow[i].previousElementSibling;
        let subMenu=arrow[i].nextElementSibling;
        let thisArrow=arrow[i];
  
        thisLink.classList.add('parent');
      arrow[i].addEventListener('click', function(){
        subMenu.classList.toggle('open');
        thisArrow.classList.toggle('active');
      });
    }
  }else $(window).width() >1024
  {
    body.classList.add('mouse');
  }
  
  $(document).ready(function() {
    $('.header__burger').click(function(event){
    $('.header__burger,.header__menu').toggleClass('active');
    $('body').toggleClass('lock');
    });
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active2");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

function check()
{
    var inp = document.getElementsByName('r');
    for (var i = 0; i < inp.length; i++) {
        if (inp[i].type == "radio" && inp[i].checked) {
            alert("selected: " + inp[i].value);
        }
    }
}

$(".sub-menu").hover(
  function(){
    $(this).parent().addClass(".menu-ln")
  },

);

window.addEventListener('DOMContentLoaded', () => {
  "use strict";

   /** Меню */

const navbarMenu = document.getElementById('m-menu');
const burgerMenu = document.getElementById('burger');
const overlayMenu = document.getElementById('overlay');
const menuItem = document.querySelectorAll('.menu-item-has-children');

//добавляем стрелочки пунктам меню имеющие подменю
addExpandElement(menuItem);

function addExpandElement(menuItem) {
  menuItem.forEach(element => {
      let newElem = document.createElement("button");
      newElem.className = "expand";
      
      const tagA = element.querySelector('a');
      tagA.append(newElem); 
  });
}

// Toggle Menu Function
burgerMenu.addEventListener('click', toggleMenu);
// overlayMenu.addEventListener('click', toggleMenu);

function toggleMenu() {	
navbarMenu.classList.toggle('active');
// overlayMenu.classList.toggle('active');
burgerMenu.classList.toggle('active');
}

const btn = document.querySelectorAll(".expand");

btn.forEach(b => {
b.addEventListener('click', (e) =>{
  e.preventDefault();
      const menuItemHasChildren = e.target.offsetParent;
      
      // console.log('Click Btn', menuItemHasChildren);

  // If menu-item-child is Expanded, then Collapse It
  if (menuItemHasChildren.classList.contains('active')) {
    collapseSubMenu(menuItemHasChildren);
  } else {
    // Свернуть существующий дочерний элемент menu-item-child
    // if (navbarMenu.querySelector('.menu-item-has-children.active')) {
    // 	collapseSubMenu();
    // }
    // Расширен новый menu-item-child
    menuItemHasChildren.classList.add('active');
    const subMenu = menuItemHasChildren.querySelector('.sub-menu');
    // subMenu.style.maxHeight = subMenu.scrollHeight + 'px';
  }
})
});

// Collapse SubMenu Function
// navbarMenu.addEventListener('click', (e) => {
// 	console.log(e);
// 	if (e.target.hasAttribute('data-toggle') && window.innerWidth <= 1200) {
// 		e.preventDefault();
//         const menuItemHasChildren = e.target.parentElement;
      
//         //console.log('Click menu');

// 		// If menu-item-child is Expanded, then Collapse It
// 		if (menuItemHasChildren.classList.contains('active')) {
// 			collapseSubMenu();
// 		} else {
// 			// Свернуть существующий дочерний элемент menu-item-child
// 			if (navbarMenu.querySelector('.menu-item-has-children.active')) {
// 				collapseSubMenu();
// 			}
// 			// Расширен новый menu-item-child
// 			menuItemHasChildren.classList.add('active');
// 			const subMenu = menuItemHasChildren.querySelector('.sub-menu');
// 			subMenu.style.maxHeight = subMenu.scrollHeight + 'px';
// 		}
// 	}
// });

function collapseSubMenu(menuItemHasChildren) {
//console.log('menuItemHasChildren', menuItemHasChildren);
// menuItemHasChildren.querySelector('.menu-item-has-children.active .sub-menu').removeAttribute('style');
// menuItemHasChildren.removeAttribute('style');
// menuItemHasChildren.querySelector('.menu-item-has-children .active').classList.remove('active');
menuItemHasChildren.classList.remove('active');

}

// Fixed Resize Screen Function
window.addEventListener('resize', () => {
if (this.innerWidth > 1225) {
  // If navbarMenu is Open, then Close It
  if (navbarMenu.classList.contains('active')) {
          toggleMenu();
          //console.log('toggleMenu');
  }

  // If menu-item-child is Expanded, then Collapse It
  if (navbarMenu.querySelector('.menu-item-has-children.active')) {
          collapseSubMenu();
          //console.log('collapseSubMenu');
  }
}
});

});