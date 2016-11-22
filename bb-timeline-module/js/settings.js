(function($){

	FLBuilder.registerModuleHelper('bb-timeline-module', {

		rules: {
			height: {
				number: true
			}
		},

		init: function()
		{
			var form	= $('.fl-builder-settings'),
				width	= form.find('input[name=timeline_title_seperator_width]');
				
			this._toggleSeparatorAlignment();

			width.on('keyup', $.proxy( this._toggleSeparatorAlignment, this ) );
		},

		_toggleSeparatorAlignment: function() {
			var form    			= $('.fl-builder-settings'),
				width		= form.find('input[name=timeline_title_seperator_width]').val(),
				alignment	= form.find('#fl-field-timeline_title_border_align');

			if( width != '' && width < 100 ) {
				alignment.show();				
			} else {
				alignment.hide();
			}
		},
	});

})(jQuery);