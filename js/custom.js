

// For Isotope *****************************************************************
$(document).ready(function() {
  $(".isotope-grid > .isotope-grid-item:eq(0)").addClass("isotope-grid-item2");
}); 


$(window).load(function(){ 	
  // init Isotope for News  
  var $grid = $('.isotope-grid').isotope({ 
    itemSelector: '.isotope-grid-item',
    percentPosition: true, 
    stagger: 30,
    masonry: {
      // use element for option
      columnWidth: '.isotope-grid-sizer'
    },
    horizontalOrder: true,    
    transitionDuration: '0.8s'
  });
  // layout Isotope after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
  });
  // layout Isotope Filters
  $('#grid-filters .filters-button-group').on( 'click', 'button', function() {
			var filterValue = $( this ).attr('data-filter');
			$( 'button' ).removeClass('is-checked');
			$( this ).addClass('is-checked');
			$grid.isotope({ filter: filterValue });
		});
  
  // update all heights
  $.fn.matchHeight._update(); 
  
});
  
  
$(window).load(function(){   
  // init Isotope for Gallery 
  var $grid = $('.gallery-isotope-grid').isotope({ 
    itemSelector: '.gallery-isotope-grid-item',
    percentPosition: true,
    masonry: {
      // use element for option
      columnWidth: '.gallery-isotope-grid-sizer'
    }, 
    horizontalOrder: true,
    transitionDuration: '0.2s'
  });
  // layout Isotope after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
  });
  // update all heights
  $.fn.matchHeight._update();    
});


// matchHeigh ****************************************************************** 
// apply your matchHeight on DOM ready (they will be automatically re-applied on load or resize)

// Homesite Popular News - apply matchHeight to each item container's items
$(document).ready(function() {
  $(".page_content").each(function() {
    $(this).children("div[class*='col-']").matchHeight();
  }); 
});





// Default News layout title box *************************************************
$(document).ready(function() {
  $('.default-item-bottom-box').each(function() {	 
	  var $this = $(this),
	  boxH = $this.innerHeight() - 4;
	  $this.css({'margin-top': '-'+boxH+'px'}); 
  });
}); 

// Default Hidden News Summary ***********************************************************
$(document).ready(function() {
  var pH;
	$('.default-item').each(function() {
	  var $this = $(this);
		$this.on({mouseover:function(){	  
			$this.find('.default-item-summary').show();
			pH = $this.find('.default-item-bottom-box').innerHeight() - 4; 
			$this.find('.default-item-bottom-box').css({'margin-top': '-'+pH+'px'});
		},mouseout:function(){
			$this.find('.default-item-summary').hide();
			pH = $this.find('.default-item-bottom-box').innerHeight() - 4; 
			$this.find('.default-item-bottom-box').css({'margin-top': '-'+pH+'px'});
		} 
		});
  });
});

// View News Item Related News layout title box *************************************************
$(document).ready(function() {
  $('.e-related-item-bottom-box').each(function() {	 
	  var $this = $(this),
	  boxH = $this.innerHeight() - 4;
	  $this.css({'margin-top': '-'+boxH+'px'}); 
  });
}); 

// View News Item Related News Hidden News Summary ***********************************************************
$(document).ready(function() {
  var pH;
	$('.e-related-item').each(function() {
	  var $this = $(this);
		$this.on({mouseover:function(){	  
			$this.find('.e-related-item-summary').show();
			pH = $this.find('.e-related-item-bottom-box').innerHeight() - 4; 
			$this.find('.e-related-item-bottom-box').css({'margin-top': '-'+pH+'px'});
		},mouseout:function(){
			$this.find('.e-related-item-summary').hide();
			pH = $this.find('.e-related-item-bottom-box').innerHeight() - 4; 
			$this.find('.e-related-item-bottom-box').css({'margin-top': '-'+pH+'px'});
		} 
		});
  });
});


// View News Item layout title box *************************************************
$(document).ready(function() {
  $('.view-item-box').each(function() {	 
	  var $this = $(this),
	  boxH = $this.innerHeight() - 4;
	  $this.css({'margin-top': '-'+boxH+'px'}); 
  });
});


// Category News layout title box *************************************************
$(document).ready(function() {
  $('.news-cat-item-box').each(function() {	 
	  var $this = $(this),
	  boxH = $this.innerHeight() - 4;
	  $this.css({'margin-top': '-'+boxH+'px'}); 
  });
}); 

// Category News Item Hidden News Summary ***********************************************************
$(document).ready(function() {
  var pH;
	$('.news-cat-item').each(function() {
	  var $this = $(this);
		$this.on({mouseover:function(){	  
			$this.find('.news-cat-item-box .lead').show();
			pH = $this.find('.news-cat-item-box').innerHeight() - 4; 
			$this.find('.news-cat-item-box').css({'margin-top': '-'+pH+'px'});
		},mouseout:function(){
			$this.find('.news-cat-item-box .lead').hide();
			pH = $this.find('.news-cat-item-box').innerHeight() - 4; 
			$this.find('.news-cat-item-box').css({'margin-top': '-'+pH+'px'});
		} 
		});
  });
}); 


// Cpage Related News layout title box *************************************************
$(document).ready(function() {
  $('.cpage-related-item-bottom-box').each(function() {	 
	  var $this = $(this),
	  boxH = $this.innerHeight() - 4;
	  $this.css({'margin-top': '-'+boxH+'px'}); 
  });
}); 


// Forum Stats make responsive *************************************************
$(document).ready(function() {
  $("#forum-stats .tab-content .table").wrap("<div class='table-responsive'></div>");
  $("#forum-stats .panel .table").wrap("<div class='table-responsive'></div>");
}); 


// Custom page image not responsive - add class img-responsive *************************************************
$(document).ready(function() {
  $(".cpage-body .default-cpage-body img").addClass("img-responsive");
});  


// Search effect *****************************************************************
$(document).ready(function() {
  var $searchlink = $('#searchtoggle i');
  var $searchbar  = $('#searchbar');
  
  $('.navbar-nav a#searchtoggle').on('click', function(e){
    e.preventDefault();
    
    if($(this).attr('id') == 'searchtoggle') {
      if(!$searchbar.is(":visible")) { 
        // if invisible we switch the icon to appear collapsable
        $searchlink.removeClass('fa-search').addClass('fa-times');
      } else {
        // if visible we switch the icon to appear as a toggle
        $searchlink.removeClass('fa-times').addClass('fa-search');
      }
      
      $searchbar.slideToggle(300, function(){
        // callback after search bar animation
      });
    }
  });
}); 


// CSS3 Spinning Preloader *****************************************************************
$(document).ready(function() {	
  setTimeout(function(){
	  $('body').addClass('loaded');
		$('h1').css('color','#222222');
	}, 3000);	
});


// Mobil Menu for Isotope Filters *****************************************************************
$(document).ready(function() {   
  $('.navigation-toggle').click(function() {
    $('.navigation-toggle').toggleClass('active');
    $('#mobile-nav').toggleClass('active');
    $('.navigation-toggle-icon').toggleClass('fa-bars fa-times');
    return false;
  });
}); 


// List New Plugin Collpse *****************************************************************
$(document).ready(function() {  			
  $('#list-new .closeall').click(function(){
    $('#list-new .panel-collapse.in').collapse('hide');
  });
  $('#list-new .openall').click(function(){
    $('#list-new .panel-collapse:not(".in")').collapse('show');
  });
});
