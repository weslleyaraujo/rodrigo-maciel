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

    // #internal-slide
    if ($('#internal-slide').exists()) {
        
        var internal = (function() {

            var intSlide = $('#internal-slide'),
                position = {},
                mainText = $('.main-text'),
                o        = null,
                counter  = $('.count');

            function bindSlide() {
                intSlide.cycle({
                    centerHorz: "true",
                    autoHeight: "container",
                    loader: "wait",
                    timeout: 0,
                    next: '.prev',
                    prev: '.next',
                    slides: 'img'
                });
                intSlide.on('cycle-initialized', function(event, optionHash) {
                    counter.find('.s').html(optionHash.slideCount);
                });
            }

            function bindChanges() {
                intSlide.on('cycle-update-view', function() {
                    counter.find('.f').html(intSlide.find('.cycle-slide-active').attr('rel'));
                });
            }

            function init() {
                bindSlide();
                bindChanges();
            }

            return {
                init: init
            };

        }());

        internal.init();
    }

    // fixed nav
    var nav = (function() {
        
        var windowDocument = $(window),
            obj            = $('nav.main ul');

        function init() {
            bindScroll();
        }

        function fixedObj() {
            obj.parent().addClass('fixed');
        }

        function normalObj() {
            obj.parent().removeClass('fixed');
        }

        function compare() {
           if (windowDocument.scrollTop() >= obj.height()) {
                fixedObj();
            }
            else {
                normalObj();
            }
        }

        function bindScroll() {
            windowDocument.scroll(function() {
                compare();
            });
        }

        return {
            init : init
        };

    }());

    nav.init();

    // left years
    if ($('.navigation-left li.year').exists()) {

        var leftYears = (function() {

            var openers = $('li.year a'),
                obj = null;

            function bindOpeners() {
                openers.on('click', function(e) {
                    e.preventDefault();
                    obj = $(this);
                    if (comparer(obj)) {
                        obj.next().slideUp();
                        return;
                    }
                    obj.next().slideDown();
                });
            }

            function comparer(o) {
                return obj.next().is(':visible') ? true : false;
            }

            function init() {
                bindOpeners();
            }

            return {
                init: init
            };

        }());

        leftYears.init();
    }
});