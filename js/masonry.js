WebFontConfig = {
	  google: {
		families: [ 'Open Sans' ]
	  },
	  fontactive: function(fontFamily, fontDescription) {
		
		// isotope start
		$('#container').isotope({
		  getSortData : {
			type : function ( $elem ) {
			  return $elem.find('.type').text();
			}
		  }
		});

		var $container = $('#container');
			// initialize isotope
			layoutMode: 'cellsByRow',
			$container.isotope({
			// options...
			  itemSelector: '.item',
			  masonry: {  },
			    sortBy : 'type',
				sortAscending : false
			  
			});
		
		// filter items when filter link is clicked
		$('.filters a').click(function(){
			var selector = $(this).attr('data-filter');
			$container.isotope({ filter: selector });
			return false;
			});
	  }
	};
	
	// Google WebFont API loader //
	(function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();