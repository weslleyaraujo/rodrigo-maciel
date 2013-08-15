$(document).ready(function(){

	$('html').removeClass('no-js');
	$('html').addClass('js');

	jQuery.fn.exists = function() { return jQuery(this).length > 0 ? true : false; };

    if ($('input[mask]').exists()) {
        $.mask.masks = $.extend($.mask.masks,{
            int: { mask: '9', type:'repeat', 'maxLength': 20 },
            alpha_num: { mask:'*', type:'repeat', 'maxLength': 20 },
            datetime: { mask: '39/19/9999 29:59:99' },
            intsimple: { mask: '9999999999',type : "reverse"},
            kilo: { mask: '99,99999999',type : "reverse"},
        });
        $('input:text').setMask({
            attr: 'mask'
        });
        $('input[mask=telefone]').focus(function(){
            $(this).setMask('(99) 9999-99999');
        }).keyup(function(){
            var target = $(this);
            var phone = target.val().replace(/\D/g, '');
            target.unsetMask();
            if ( phone.length > 10 ) {
                target.setMask("(99) 99999-9999");
            } else {
                target.setMask("(99) 9999-99999");
            }
        });
    }

});