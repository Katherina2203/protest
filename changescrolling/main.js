document.addEventListener('DOMContentloaded', onscroll);
window.addEventListener('scroll', onscroll);

function onscroll(){
	cord.innerHTML = cord.innerHtml.replace(/=?\d+/, 
	Math.round(cord.getBoundingClientRect().top));
	);
}

//координаты с учетом скрола

function onfullscroll(){
	cord.innerHTML = cord.innerHtml.replace(/=?\d+/, 
	Math.round(cord.getBoundingClientRect().top = pageYOffset));
}