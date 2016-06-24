(function(){

	var boiler = {};

	var modalWrapper = $('.modalWrapper'),
		loaderWrapper = $('.loaderWrapper'),
		modalContentWrap = $('.modalContentWrap'),
		modalContent = $('.modalContent'),
		scrollDiv = null,
		scrollbarWidth = 0;

	// Initialize function
	boiler.init = function(){
		$(document).ready(function(){ boiler.docRready(); });
		$(window).resize(function(){ boiler.winResize(); });
	};

	// Document ready
	boiler.docRready = function(){
		// Scroll back to top on document load
		$(document).scrollTop(0);

		var winHeight = window.innerHeight;
		var winWidth = window.innerWidth;

		boiler.getScrollWidth();

		boiler.footerDate();

		$('.closeButton, .loader').css('right', scrollbarWidth);

		$('.closeButton').click(function(){
			var dataPartial = $(this).attr('data-nav');
			window.location.hash =  dataPartial;
		});

		if ("onhashchange" in window) {
			window.onhashchange = function () {
				boiler.ajaxRequest();
			};
		}
	};

	// Window resize
	boiler.winResize = function(){
		var winHeight = window.innerHeight;
		var winWidth = window.innerWidth;
	};

	// When pace has finished
	Pace.on('done', function(){

		var winHeight = window.innerHeight;
		var winWidth = window.innerWidth;

		// scrollReveal config
		var config = {
			mobile: true,
			viewport: document.getElementById('scrollable'),
			complete: function(el) {
				$(el).delay(100).queue(function(){
	        		$(this).addClass('visible').clearQueue();
	    		});
			}
		};

		// Show the content wrapper
		$('.contentWrapper').show();

	});

	// AJAX function
	boiler.ajaxRequest = function(dataPartial){
		// Detect the anchor added to the URL
		var hashURL = window.location.hash.substring(1);
		if(hashURL === 'home' || hashURL === ''){
			boiler.closeModal();
		}
		else{
			//Fetch the data from the partial
			Pace.ignore(function(){
				$.ajax({
					url: 'partials/_' + hashURL + '.php',
					cache: false,
			    	beforeSend: function(){
				        loaderWrapper.show().velocity({
							opacity: 1,
						},{
							easing: 'easeInOutCubic',
							duration: 500,
						});
				    },
				    success: function(data){
						// Load data into the module content as HTML
						modalContent.html(data);
						// Show and fade in the modal
						boiler.openModal();
				    },
				});
			});
		}
	};

	// Fires on AJAX success callback
	boiler.openModal = function(){
		var scrollTop = function(){
			modalContentWrap.scrollTop(0);
		};
		modalWrapper.show(scrollTop).velocity({
			opacity: '1',
		},{
			easing: 'easeInOutCubic',
			duration: 500,
			complete: function(){
				// Hide the loader when animation is complete
		        loaderWrapper.velocity({
					opacity: 0,
				},{
					easing: 'easeInOutCubic',
					duration: 500,
					complete: function(){
						$(this).hide();
						boiler.bindModalEvents();
					}
				});
			}
		});
	};

	// Bind events for each modal load
	boiler.bindModalEvents = function(){
		boiler.youtubeReplace();
	};

	// Fires when you click on the close modal button
	boiler.closeModal = function(){
		modalWrapper.velocity({
	    	opacity: '0',
	    },{
			easing: 'easeInOutCubic',
			duration: 500,
			complete: function(){
				modalWrapper.hide();
				modalContent.html("");
			}
		});
	};

	// For the gradient buttons
	boiler.gradientButton = function(){
		$('.button').each(function(){
			$this = $(this);
			var buttonWidth = $this.width(),
	        	buttonHeight = $this.height(),
	        	gradSize = buttonWidth + 100,
				topOffest = (gradSize / 2) - (buttonHeight * 2);
		 	$this.children('.gradient').width(gradSize).height(gradSize).css({'top': - topOffest});
		});
	};

	// Get the scrollbar width for the modal offset
	boiler.getScrollWidth = function(){
		scrollDiv = document.createElement("div");
		scrollDiv.className = "scrollbar-measure";
		document.body.appendChild(scrollDiv);
		scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
		document.body.removeChild(scrollDiv);
	};

	// Swap youtube thumbnail for video
	boiler.youtubeReplace = function(){
		var youtubeID = $('.ytSwapWrap').attr("id");
		$('.ytSwapWrap').click(function(e){
			$('.ytSwapWrap').html('<iframe width="640" height="360" src="https://www.youtube.com/embed/' + youtubeID + '?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>');
		});
	};


	// Add date to footer
	boiler.footerDate = function(){
		var thisDate = new Date();
		var thisYear = thisDate.getFullYear();
		$('.footerSup span').html(thisYear);
	};

	boiler.init();

})();
