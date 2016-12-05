(function($){

	var dateshowhide_var = '';
    
    FLBuilder.registerModuleHelper('timeline-for-beaver-builder-module', {

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
				width	= form.find('input[name=timeline_title_seperator_width]'),
				imgIconType = form.find('select[name=timeline_img_icon_type]'),
				iconBgStyle = form.find('select[name=icon_bg_style]'),
				imgBgStyle = form.find('select[name=img_bg_style]');
				
			this._toggleLayoutOptions();
			this._toggleImgIconOptions();
			this._toggleSeparatorAlignment();

			width.on('keyup', $.proxy( this._toggleSeparatorAlignment, this ) );
			imgIconType.on('change', $.proxy( this._toggleImgIconOptions, this ) );
			iconBgStyle.on('change', $.proxy( this._toggleImgIconOptions, this ) );
			imgBgStyle.on('change', $.proxy( this._toggleImgIconOptions, this ) );
		},

		_toggleImgIconOptions: function() {

			var form	= $('.fl-builder-settings'),
				width	= form.find('input[name=timeline_title_seperator_width]'),
				imgIconType = form.find('select[name=timeline_img_icon_type]'),
				iconBgStyle = form.find('select[name=icon_bg_style]'),
				imgBgStyle = form.find('select[name=img_bg_style]'),
				iconBorderSetting	= form.find('#fl-builder-settings-section-icon_boder_settings'),
				imgBorderSetting	= form.find('#fl-builder-settings-section-img_boder_settings');
			imgBorderSetting.hide();
			iconBorderSetting.hide();

			if( imgIconType.val() == 'icon' && iconBgStyle.val() == 'custom' ) {
				iconBorderSetting.show();
			} if( imgIconType.val() == 'photo' && imgBgStyle.val() == 'imgcustom' ) {
				imgBorderSetting.show();
			}
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