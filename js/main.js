window.addEventListener('load', function () {
	
	let isMac = navigator.platform.toUpperCase().indexOf('MAC') >= 0;
	let isWindows = navigator.platform.toUpperCase().indexOf('WIN') >= 0;
	let isIos = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
	if (isMac || isIos) {
		document.body.classList.add('body_mc');
	} else if (isWindows) {
		document.body.classList.add('body_win');
	}

    function toggleMenu(){
        document.querySelector('.menu_mobile').classList.toggle('show');
        document.querySelector('.header .overlay').classList.toggle('active');
    }

    let burgerBtn = document.querySelector('.burger img');
    let closeBtn = document.querySelector('.menu_mobile .close');
	let overlayBack = document.querySelector('.overlay');
                
	if (burgerBtn) {
		burgerBtn.addEventListener('click', toggleMenu);	
	}
	if (closeBtn) {
		closeBtn.addEventListener('click', toggleMenu);	
	}

	if (overlayBack) {
		overlayBack.addEventListener('click', function() {
			document.querySelector('.menu_mobile').classList.remove('show');
			this.classList.remove('active');
		})
	}
    
})








