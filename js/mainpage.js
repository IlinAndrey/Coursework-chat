$('.nav .trigger').click(function(){
	$('.subnav').toggleClass('open');
});

// jQuery menu

var main = function() {
$('.profile').click(function() {
	$('.menu').animate({left: '0px'}, 200);
	$('body').animate({left: '285px'}, 200);
});
/* Закрытие меню */
$('.fa-times').click(function() { 
	$('.menu').animate({left: '-285px'}, 200);
$('body').animate({left: '0px'}, 200);
});
};

$(document).ready(main);


//----------------------------------------------------------------


function showModalWin() {
 
 var darkLayer = document.createElement('div');
 darkLayer.id = 'shadow';
 document.body.appendChild(darkLayer);

 var modalWin = document.getElementById('popupWin');
 modalWin.style.display = 'block';

 darkLayer.onclick = function () { 
	 darkLayer.parentNode.removeChild(darkLayer);
	 modalWin.style.display = 'none';
	 return false;
 };
}


//--------------------------------------------------------------


const searchBar = document.querySelector(".mainApp .search input"),
serchBtn = document.querySelector(".mainApp .search i");

serchBtn.onclick = ()=>{
    searchBar.focus();
}
