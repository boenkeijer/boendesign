jQuery(document).ready(function( $ ) {
	//Slider
	function loadSliders(){
		$('.resultaten-slider').slick({
			dots: false,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			speed: 400,
		});
	}
	loadSliders();

	// Tijd in footer
	$('.toggle').on('click', function (){
		$(this).toggleClass('on');
	});

	 function updateTime(){
		var currentTime = new Date()
		var date = currentTime.getDate()
		var month = currentTime.getMonth()+1
		var year = currentTime.getFullYear()
		var hours = currentTime.getHours()
		var minutes = currentTime.getMinutes()
		var seconds = currentTime.getSeconds()
		if (minutes < 10){
			minutes = "0" + minutes
		}
		var t_str = date + "-" + month + "-" + year + " " + hours + ":" + minutes + ":" + seconds + " ";
		document.getElementById('tijd').innerHTML = t_str;
	}
	setInterval(updateTime, 1000);

	//Lege p elementen weghalen
	$('p').each(function() {
	var $this = $(this);

	if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
		$this.remove();
	});

// === Toggle ===

	var theToggle = document.getElementById('toggle');

	// hasClass
	function hasClass(elem, className) {
		return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
	}
	
	// addClass
	function addClass(elem, className) {
		if (!hasClass(elem, className)) {
			elem.className += ' ' + className;
		}
	}

	// removeClass
	function removeClass(elem, className) {
		var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
		if (hasClass(elem, className)) {
			while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
				newClass = newClass.replace(' ' + className + ' ', ' ');
			}
			elem.className = newClass.replace(/^\s+|\s+$/g, '');
		}
	}

	// toggleClass
	function toggleClass(elem, className) {
		var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
		if (hasClass(elem, className)) {
			while (newClass.indexOf(" " + className + " ") >= 0 ) {
				newClass = newClass.replace( " " + className + " " , " " );
			}
			elem.className = newClass.replace(/^\s+|\s+$/g, '');
		} else {
			elem.className += ' ' + className;
		}
	}

});