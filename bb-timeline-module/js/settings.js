(function($){

	var dateshowhide_var = '';
    
    FLBuilder.registerModuleHelper('bb-timeline-module', {

        init: function()
        {
            var form        = $('.fl-builder-settings'),
                dateshowhide = form.find('select[name=date_show_hide]');

            dateshowhide_var = dateshowhide;
        },
    });

    FLBuilder.registerModuleHelper('bb_timeline_form', {
		rules: {
			height: {
				number: true
			}
		},

		init: function()
		{
			var form	= $('.fl-builder-settings'),
				width	= form.find('input[name=timeline_title_seperator_width]');
				
			this._toggleLayoutOptions();
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

		_toggleLayoutOptions: function() {

            var form = $('.fl-builder-settings'),
                date   = form.find('#fl-builder-settings-section-date'),
               	dateshowhide = dateshowhide_var.val();
            
            if( dateshowhide == 'hide' ) {
                date.css('display', 'none');

            } else {
                date.css('display', 'block');
            }
        },
	});


})(jQuery);