
$(function() {
    $('.carousel').carousel({ interval: 8000 })
    $('.modalphotos img').on('click', function() {
		$('#modal').modal ({
		show: true,
	})

	var mysrc = this.src.substr(0, this.src.length-7) + '.jpg';
	$('#modalimage').attr('src', mysrc);
	});

	$('#photogallery').find('a.gal') .colorbox ({
			'rel': 'gal',
			'maxheight' : '90%',
			'scrolling' : true,
			'scalePhotos' : true

	});

});


