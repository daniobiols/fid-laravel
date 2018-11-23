window.onload = function(){

	var clickDark = document.querySelector('.dark');
	var clickLight = document.querySelector('.light');
	var linkCss = document.querySelector('.linktheme');
	estilo = '/css/styles.css'
	estiloDark = '/css/styles-dark.css'

	clickDark.onclick = function(){
		console.log(linkCss.href);
		if (linkCss.href = estilo) {
			linkCss.href = estiloDark;
			console.log(linkCss.href);
		} else {
			linkCss.href = estilo;
		}
	}

	clickLight.onclick = function(){
		console.log(linkCss.href);
		linkCss.href = estilo
	}
}
