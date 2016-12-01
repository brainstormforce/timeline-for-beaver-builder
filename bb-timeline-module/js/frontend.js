(function($) {

	BBTimelineAnimation = function( settings )
	{
		this.settings 	  = settings;
		this.timeline    = settings.timeline;
		this.mobile_screen    = settings.mobile_screen;
		this.animation    = settings.animation;
		this.animation_delay	  = settings.animation_delay;
		this.viewport_position =	settings.viewport_position;
		if ( this.animation != 'no' ) {
			this.nodeClass  = '.fl-node-' + settings.id;
			this._initAnimations();
		};
	};

	BBTimelineAnimation.prototype = {
	
		settings	: {},
		nodeClass   : '',
		timeline   : '',
		mobile_screen   : '',
		animation   : '',
		animation_delay : 0,
		viewport_position : 90,
		
		/**
		 * Initiate animation.
		 *
		 * @since 0.0.7
		 * @access private
		 * @method _initAnimations
		 */ 
		_initAnimations: function()
		{
			if( $(window).width() < 768 ) {
				if( this.mobile_screen == 'on' ) {
					if(typeof jQuery.fn.waypoint !== 'undefined' /*&& !FLBuilderLayout._isMobile()*/ ) {
						$( this.nodeClass ).find('.bb-tmtimeline .tm-timeline-li-'+ this.timeline +' .bb-tmlabel').waypoint({
							offset: this.viewport_position + '%',
							handler: $.proxy( this._executeAnimation, this ) //this._executeAnimation
						});
					}	
				} else {
					var module = $( this.nodeClass ).find('.bb-tmtimeline .tm-timeline-li-'+ this.timeline +' .bb-tmlabel');
					module.removeClass('bb-hide-it');
				}
			} else {
				if(typeof jQuery.fn.waypoint !== 'undefined' /*&& !FLBuilderLayout._isMobile()*/ ) {
					$( this.nodeClass ).find('.bb-tmtimeline .tm-timeline-li-'+ this.timeline +' .bb-tmlabel').waypoint({
						offset: this.viewport_position + '%',
						handler: $.proxy( this._executeAnimation, this ) //this._executeAnimation
					});
				}
			}
		},
		
		/**
		 * Runs a module animation.
		 *
		 * @since 0.0.7
		 * @access private
		 * @method _executeAnimation
		 */ 
		_executeAnimation: function( e )
		{

			var module = $( this.nodeClass ).find('.bb-tmtimeline .tm-timeline-li-'+ this.timeline +' .bb-tmlabel'),
				animation_class = this.animation,
				delay  = parseInt( this.animation_delay );
			if( delay > 0 ) {
				setTimeout(function(){
					module.removeClass('bb-hide-it');
					module.addClass(animation_class);
				}, delay * 1000);
			}
			else {
				module.removeClass('bb-hide-it');
				module.addClass(animation_class);
			}
		},
	};
	
})(jQuery);