/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */,
/* 2 */,
/* 3 */,
/* 4 */,
/* 5 */,
/* 6 */,
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(8);
__webpack_require__(9);
module.exports = __webpack_require__(10);


/***/ }),
/* 8 */
/***/ (function(module, exports) {

var THEMEMASCOT = {};

(function ($) {
    "use strict";

    /* ---------------------------------------------------------------------- */
    /* -------------------------- Declare Variables ------------------------- */
    /* ---------------------------------------------------------------------- */

    var $document = $(document);
    var $document_body = $(document.body);
    var $window = $(window);
    var $html = $('html');
    var $body = $('body');
    var $wrapper = $('#wrapper');
    var $header = $('#header');
    var $footer = $('#footer');
    var $sections = $('section');
    var $portfolio_gallery = $(".gallery-isotope");
    var portfolio_filter = ".portfolio-filter a";
    var $portfolio_filter_first_child = $(".portfolio-filter a:eq(0)");
    var $portfolio_flex_slider = $(".portfolio-slider");

    THEMEMASCOT.isMobile = {
        Android: function Android() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function BlackBerry() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function iOS() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function Opera() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function Windows() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function any() {
            return THEMEMASCOT.isMobile.Android() || THEMEMASCOT.isMobile.BlackBerry() || THEMEMASCOT.isMobile.iOS() || THEMEMASCOT.isMobile.Opera() || THEMEMASCOT.isMobile.Windows();
        }
    };

    THEMEMASCOT.isRTL = {
        check: function check() {
            if ($("html").attr("dir") == "rtl") {
                return true;
            } else {
                return false;
            }
        }
    };

    THEMEMASCOT.urlParameter = {
        get: function get(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        }
    };

    THEMEMASCOT.bmiCalculator = {
        magic: function magic(bmi) {
            var output = '';
            var info = '';
            if (bmi) {
                if (bmi < 15) {
                    info = "very severely underweight";
                }
                if (bmi >= 15 && bmi < 16) {
                    info = "severely underweight";
                }
                if (bmi >= 16 && bmi < 18.5) {
                    info = "underweight";
                }
                if (bmi >= 18.5 && bmi < 25) {
                    info = "normal";
                }
                if (bmi >= 25 && bmi < 30) {
                    info = "overweight";
                }
                if (bmi >= 30 && bmi < 35) {
                    info = "moderately obese";
                }
                if (bmi >= 35 && bmi <= 40) {
                    info = "severely obese";
                }
                if (bmi > 40) {
                    info = "very severely obese";
                }
                output = "Your BMI is <span>" + bmi + "</span><br />" + "You are <span>" + info + "</span>.";
            } else {
                output = "You broke it!";
            };
            return output;
        },

        calculateStandard: function calculateStandard(bmi_form) {
            var weight_lbs = bmi_form.find('input[name="bmi_standard_weight_lbs"]').val();
            var height_ft = bmi_form.find('input[name="bmi_standard_height_ft"]').val();
            var height_in = bmi_form.find('input[name="bmi_standard_height_in"]').val();
            var age = bmi_form.find('input[name="bmi_standard_age"]').val();
            var gender = bmi_form.find('radio[name="bmi_standard_gender"]').val();

            var total_height_inc = parseInt(height_ft, 10) * 12 + parseInt(height_in, 10);
            var bmi = parseFloat(weight_lbs) / (total_height_inc * total_height_inc) * 703;
            var output = THEMEMASCOT.bmiCalculator.magic(bmi);

            bmi_form.find('#bmi_standard_calculator_form_result').html(output).fadeIn('slow');
        },

        calculateMetric: function calculateMetric(bmi_form) {
            var weight_kg = bmi_form.find('input[name="bmi_metric_weight_kg"]').val();
            var height_cm = bmi_form.find('input[name="bmi_metric_height_cm"]').val();
            var age = bmi_form.find('input[name="bmi_standard_age"]').val();
            var gender = bmi_form.find('radio[name="bmi_standard_gender"]').val();

            var total_weight_kg = parseFloat(weight_kg);
            var total_height_m = parseFloat(height_cm) * 0.01;
            var bmi = total_weight_kg / (total_height_m * total_height_m);
            var output = THEMEMASCOT.bmiCalculator.magic(bmi);

            bmi_form.find('#bmi_metric_calculator_form_result').html(output).fadeIn('slow');
        },

        init: function init() {
            var bmi_Standard_Form = $('#form_bmi_standard_calculator');
            bmi_Standard_Form.on('submit', function (e) {
                e.preventDefault();
                THEMEMASCOT.bmiCalculator.calculateStandard(bmi_Standard_Form);
                return false;
            });

            var bmi_Metric_Form = $('#form_bmi_metric_calculator');
            bmi_Metric_Form.on('submit', function (e) {
                e.preventDefault();
                THEMEMASCOT.bmiCalculator.calculateMetric(bmi_Metric_Form);
                return false;
            });
        }

    };

    THEMEMASCOT.initialize = {

        init: function init() {
            THEMEMASCOT.bmiCalculator.init();
            THEMEMASCOT.initialize.TM_datePicker();
            THEMEMASCOT.initialize.TM_ddslick();
            THEMEMASCOT.initialize.TM_loadBSParentModal();
            THEMEMASCOT.initialize.TM_demoSwitcher();
            THEMEMASCOT.initialize.TM_platformDetect();
            THEMEMASCOT.initialize.TM_onLoadModal();
            THEMEMASCOT.initialize.TM_customDataAttributes();
            THEMEMASCOT.initialize.TM_parallaxBgInit();
            THEMEMASCOT.initialize.TM_resizeFullscreen();
            THEMEMASCOT.initialize.TM_prettyPhoto_lightbox();
            THEMEMASCOT.initialize.TM_nivolightbox();
            THEMEMASCOT.initialize.TM_fitVids();
            THEMEMASCOT.initialize.TM_YTPlayer();
            THEMEMASCOT.initialize.TM_equalHeightDivs();
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------------ Date Picker  -------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_datePicker: function TM_datePicker() {
            $(".date-picker").datepicker();
            $(".time-picker").timepicker();
            $(".datetime-picker").datetimepicker();
        },

        /* ---------------------------------------------------------------------- */
        /* -------------------------------- ddslick  ---------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_ddslick: function TM_ddslick() {
            $("select.ddslick").each(function () {
                var name = $(this).attr('name');
                var id = $(this).attr('id');
                $("#" + id).ddslick({
                    imagePosition: "left",
                    onSelected: function onSelected(selectedData) {
                        $("#" + id + " .dd-selected-value").prop('name', name);
                    }
                });
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ----------------------------- slider range  -------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_sliderRange: function TM_sliderRange() {
            $(".slider-range").each(function () {
                var id = $(this).attr('id');
                var target_id = $(this).data('target');
                $("#" + target_id).slider({
                    range: "max",
                    min: 2001,
                    max: 2016,
                    value: 2010,
                    slide: function slide(event, ui) {
                        $("#" + id).val(ui.value);
                    }
                });
                $("#" + id).val($("#" + target_id).slider("value"));
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------ Bootstrap Parent Modal  --------------------- */
        /* ---------------------------------------------------------------------- */
        TM_loadBSParentModal: function TM_loadBSParentModal() {
            var ajaxLoadContent = true;
            if (ajaxLoadContent) {
                $.ajax({
                    url: "/multi/ajax-load/bootstrap-parent-modal.html",
                    success: function success(data) {
                        $body.append(data);
                    },
                    dataType: 'html'
                });
            }
        },
        /* ---------------------------------------------------------------------- */
        /* ------------------------------ Demo Switcher  ------------------------ */
        /* ---------------------------------------------------------------------- */
        TM_demoSwitcher: function TM_demoSwitcher() {
            var showSwitcher = false;
            var $style_switcher = $('#style-switcher');
            if (!$style_switcher.length && showSwitcher) {
                $.ajax({
                    url: "color-switcher/style-switcher.html",
                    success: function success(data) {
                        $body.append(data);
                    },
                    dataType: 'html'
                });
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------------ Preloader  ---------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_preLoaderClickDisable: function TM_preLoaderClickDisable() {
            var $preloader = $('#preloader');
            $preloader.children('#disable-preloader').on('click', function (e) {
                $preloader.fadeOut();
                return false;
            });
        },

        TM_preLoaderOnLoad: function TM_preLoaderOnLoad() {
            var $preloader = $('#preloader');
            $preloader.delay(200).fadeOut('slow');
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------------- Platform detect  --------------------- */
        /* ---------------------------------------------------------------------- */
        TM_platformDetect: function TM_platformDetect() {
            if (THEMEMASCOT.isMobile.any()) {
                $html.addClass("mobile");
            } else {
                $html.addClass("no-mobile");
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------------ Hash Forwarding  ---------------------- */
        /* ---------------------------------------------------------------------- */
        TM_onLoadModal: function TM_onLoadModal() {
            var $modal = $('.on-pageload-popup-modal');
            if ($modal.length > 0) {
                $modal.each(function () {
                    var $current_item = $(this);
                    var target = $current_item.data('target');
                    var timeout = $current_item.data('timeout');
                    //var target_id           = target.split('#')[1];

                    var delay = $current_item.data('delay');
                    delay = !delay ? 2500 : Number(delay) + 2500;

                    if (!$current_item.hasClass('cookie-enabled')) {
                        $.removeCookie(target);
                    }

                    var t = setTimeout(function () {
                        $.magnificPopup.open({
                            items: { src: target },
                            type: 'inline',
                            mainClass: 'mfp-no-margins mfp-fade',
                            closeBtnInside: false,
                            fixedContentPos: true,
                            removalDelay: 500,
                            callbacks: {
                                afterClose: function afterClose() {
                                    if (element.hasClass('cookie-enabled')) {
                                        $.cookie(target, '0');
                                    }
                                }
                            }
                        }, 0);
                    }, Number(delay));

                    if (timeout !== '') {
                        var to = setTimeout(function () {
                            $.magnificPopup.close();
                        }, Number(delay) + Number(timeout));
                    }
                });
            }
        },

        TM_onLoadModal2: function TM_onLoadModal2() {
            var $modal = $('.modal-on-load');
            if ($modal.length > 0) {
                $modal.each(function () {
                    var element = $(this),
                        elementTarget = element.attr('data-target'),
                        elementTargetValue = elementTarget.split('#')[1],
                        elementDelay = element.attr('data-delay'),
                        elementTimeout = element.attr('data-timeout'),
                        elementAnimateIn = element.attr('data-animate-in'),
                        elementAnimateOut = element.attr('data-animate-out');

                    if (!element.hasClass('enable-cookie')) {
                        $.removeCookie(elementTargetValue);
                    }

                    if (element.hasClass('enable-cookie')) {
                        var elementCookie = $.cookie(elementTargetValue);

                        if (typeof elementCookie !== 'undefined' && elementCookie == '0') {
                            return true;
                        }
                    }

                    if (!elementDelay) {
                        elementDelay = 1500;
                    } else {
                        elementDelay = Number(elementDelay) + 1500;
                    }

                    var t = setTimeout(function () {
                        $.magnificPopup.open({
                            items: { src: elementTarget },
                            type: 'inline',
                            mainClass: 'mfp-no-margins mfp-fade',
                            closeBtnInside: false,
                            fixedContentPos: true,
                            removalDelay: 500,
                            callbacks: {
                                open: function open() {
                                    if (elementAnimateIn !== '') {
                                        $(elementTarget).addClass(elementAnimateIn + ' animated');
                                    }
                                },
                                beforeClose: function beforeClose() {
                                    if (elementAnimateOut !== '') {
                                        $(elementTarget).removeClass(elementAnimateIn).addClass(elementAnimateOut);
                                    }
                                },
                                afterClose: function afterClose() {
                                    if (elementAnimateIn !== '' || elementAnimateOut !== '') {
                                        $(elementTarget).removeClass(elementAnimateIn + ' ' + elementAnimateOut + ' animated');
                                    }
                                    if (element.hasClass('enable-cookie')) {
                                        $.cookie(elementTargetValue, '0');
                                    }
                                }
                            }
                        }, 0);
                    }, Number(elementDelay));

                    if (elementTimeout !== '') {
                        var to = setTimeout(function () {
                            $.magnificPopup.close();
                        }, Number(elementDelay) + Number(elementTimeout));
                    }
                });
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------------ Hash Forwarding  ---------------------- */
        /* ---------------------------------------------------------------------- */
        TM_hashForwarding: function TM_hashForwarding() {
            if (window.location.hash) {
                var hash_offset = $(window.location.hash).offset().top;
                $("html, body").animate({
                    scrollTop: hash_offset
                });
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ----------------------- Background image, color ---------------------- */
        /* ---------------------------------------------------------------------- */
        TM_customDataAttributes: function TM_customDataAttributes() {
            $('[data-bg-color]').each(function () {
                $(this).css("cssText", "background: " + $(this).data("bg-color") + " !important;");
            });
            $('[data-bg-img]').each(function () {
                $(this).css('background-image', 'url(' + $(this).data("bg-img") + ')');
            });
            $('[data-text-color]').each(function () {
                $(this).css('color', $(this).data("text-color"));
            });
            $('[data-font-size]').each(function () {
                $(this).css('font-size', $(this).data("font-size"));
            });
            $('[data-height]').each(function () {
                $(this).css('height', $(this).data("height"));
            });
            $('[data-border]').each(function () {
                $(this).css('border', $(this).data("border"));
            });
            $('[data-margin-top]').each(function () {
                $(this).css('margin-top', $(this).data("margin-top"));
            });
            $('[data-margin-right]').each(function () {
                $(this).css('margin-right', $(this).data("margin-right"));
            });
            $('[data-margin-bottom]').each(function () {
                $(this).css('margin-bottom', $(this).data("margin-bottom"));
            });
            $('[data-margin-left]').each(function () {
                $(this).css('margin-left', $(this).data("margin-left"));
            });
        },

        /* ---------------------------------------------------------------------- */
        /* -------------------------- Background Parallax ----------------------- */
        /* ---------------------------------------------------------------------- */
        TM_parallaxBgInit: function TM_parallaxBgInit() {
            if (!THEMEMASCOT.isMobile.any() && $window.width() >= 800) {
                $('.parallax').each(function () {
                    var data_parallax_ratio = $(this).data("parallax-ratio") === undefined ? '0.5' : $(this).data("parallax-ratio");
                    $(this).parallax("50%", data_parallax_ratio);
                });
            } else {
                $('.parallax').addClass("mobile-parallax");
            }
        },

        /* ---------------------------------------------------------------------- */
        /* --------------------------- Home Resize Fullscreen ------------------- */
        /* ---------------------------------------------------------------------- */
        TM_resizeFullscreen: function TM_resizeFullscreen() {
            var windowHeight = $window.height();
            $('.fullscreen, .revslider-fullscreen').height(windowHeight);
        },

        /* ---------------------------------------------------------------------- */
        /* ----------------------------- Magnific Popup ------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_magnificPopup_lightbox: function TM_magnificPopup_lightbox() {

            $('.image-popup-lightbox').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-fade', // class to remove default margin from left and right side
                image: {
                    verticalFit: true
                }
            });

            $('.image-popup-vertical-fit').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-img-mobile',
                image: {
                    verticalFit: true
                }
            });

            $('.image-popup-fit-width').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                image: {
                    verticalFit: false
                }
            });

            $('.image-popup-no-margins').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                image: {
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 300 // don't foget to change the duration also in CSS
                }
            });

            $('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                    titleSrc: function titleSrc(item) {
                        return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                    }
                }
            });

            $('.zoom-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                closeOnContentClick: false,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
                image: {
                    verticalFit: true,
                    titleSrc: function titleSrc(item) {
                        return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
                    }
                },
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300, // don't foget to change the duration also in CSS
                    opener: function opener(element) {
                        return element.find('img');
                    }
                }

            });

            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
            });

            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });

            $('.ajaxload-popup').magnificPopup({
                type: 'ajax',
                alignTop: true,
                overflowY: 'scroll', // as we know that popup content is tall we set scroll overflow by default to avoid jump
                callbacks: {
                    parseAjax: function parseAjax(mfpResponse) {
                        THEMEMASCOT.initialize.TM_datePicker();
                    }
                }
            });

            $('.form-ajax-load').magnificPopup({
                type: 'ajax'
            });

            $('.popup-with-form').magnificPopup({
                type: 'inline',
                preloader: false,
                focus: '#name',

                mainClass: 'mfp-no-margins mfp-fade',
                closeBtnInside: false,
                fixedContentPos: true,

                // When elemened is focused, some mobile browsers in some cases zoom in
                // It looks not nice, so we disable it:
                callbacks: {
                    beforeOpen: function beforeOpen() {
                        if ($window.width() < 700) {
                            this.st.focus = false;
                        } else {
                            this.st.focus = '#name';
                        }
                    }
                }
            });

            var $mfpLightboxAjax = $('[data-lightbox="ajax"]');
            if ($mfpLightboxAjax.length > 0) {
                $mfpLightboxAjax.magnificPopup({
                    type: 'ajax',
                    closeBtnInside: false,
                    callbacks: {
                        ajaxContentAdded: function ajaxContentAdded(mfpResponse) {},
                        open: function open() {},
                        close: function close() {}
                    }
                });
            }

            //lightbox image
            var $mfpLightboxImage = $('[data-lightbox="image"]');
            if ($mfpLightboxImage.length > 0) {
                $mfpLightboxImage.magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    closeBtnInside: false,
                    fixedContentPos: true,
                    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                    image: {
                        verticalFit: true
                    }
                });
            }

            //lightbox gallery
            var $mfpLightboxGallery = $('[data-lightbox="gallery"]');
            if ($mfpLightboxGallery.length > 0) {
                $mfpLightboxGallery.each(function () {
                    var element = $(this);
                    element.magnificPopup({
                        delegate: 'a[data-lightbox="gallery-item"]',
                        type: 'image',
                        closeOnContentClick: true,
                        closeBtnInside: false,
                        fixedContentPos: true,
                        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                        image: {
                            verticalFit: true
                        },
                        gallery: {
                            enabled: true,
                            navigateByImgClick: true,
                            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                        },
                        zoom: {
                            enabled: true,
                            duration: 300, // don't foget to change the duration also in CSS
                            opener: function opener(element) {
                                return element.find('img');
                            }
                        }

                    });
                });
            }

            //lightbox iframe
            var $mfpLightboxIframe = $('[data-lightbox="iframe"]');
            if ($mfpLightboxIframe.length > 0) {
                $mfpLightboxIframe.magnificPopup({
                    disableOn: 600,
                    type: 'iframe',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            }

            //lightbox inline
            var $mfpLightboxInline = $('[data-lightbox="inline"]');
            if ($mfpLightboxInline.length > 0) {
                $mfpLightboxInline.magnificPopup({
                    type: 'inline',
                    mainClass: 'mfp-no-margins mfp-zoom-in',
                    closeBtnInside: false,
                    fixedContentPos: true
                });
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ----------------------------- lightbox popup ------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_prettyPhoto_lightbox: function TM_prettyPhoto_lightbox() {
            //prettyPhoto lightbox
            $("a[data-rel^='prettyPhoto']").prettyPhoto({
                hook: 'data-rel',
                animation_speed: 'normal',
                theme: 'light_square',
                slideshow: 3000,
                autoplay_slideshow: false,
                social_tools: false
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------------ Nivo Lightbox ------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_nivolightbox: function TM_nivolightbox() {
            $('a[data-lightbox-gallery]').nivoLightbox({
                effect: 'fadeScale',
                afterShowLightbox: function afterShowLightbox() {
                    var $nivo_iframe = $('.nivo-lightbox-content > iframe');
                    if ($nivo_iframe.length > 0) {
                        var src = $nivo_iframe.attr('src');
                        $nivo_iframe.attr('src', src + '?autoplay=1');
                    }
                }
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ---------------------------- Wow initialize  ------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_wow: function TM_wow() {
            var wow = new WOW({
                mobile: false // trigger animations on mobile devices (default is true)
            });
            wow.init();
        },

        /* ---------------------------------------------------------------------- */
        /* ----------------------------- Fit Vids ------------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_fitVids: function TM_fitVids() {
            $body.fitVids();
        },

        /* ---------------------------------------------------------------------- */
        /* ----------------------------- YT Player for Video -------------------- */
        /* ---------------------------------------------------------------------- */
        TM_YTPlayer: function TM_YTPlayer() {
            $(".player").mb_YTPlayer();
        },

        /* ---------------------------------------------------------------------- */
        /* ---------------------------- equalHeights ---------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_equalHeightDivs: function TM_equalHeightDivs() {
            /* equal heigh */
            var $equal_height = $('.equal-height');
            $equal_height.children('div').css('min-height', 'auto');
            $equal_height.equalHeights();

            /* equal heigh inner div */
            var $equal_height_inner = $('.equal-height-inner');
            $equal_height_inner.children('div').css('min-height', 'auto');
            $equal_height_inner.children('div').children('div').css('min-height', 'auto');
            $equal_height_inner.equalHeights();
            $equal_height_inner.children('div').each(function () {
                $(this).children('div').css('min-height', $(this).css('min-height'));
            });

            /* pricing-table equal heigh*/
            var $equal_height_pricing_table = $('.equal-height-pricing-table');
            $equal_height_pricing_table.children('div').css('min-height', 'auto');
            $equal_height_pricing_table.children('div').children('div').css('min-height', 'auto');
            $equal_height_pricing_table.equalHeights();
            $equal_height_pricing_table.children('div').each(function () {
                $(this).children('div').css('min-height', $(this).css('min-height'));
            });
        }

    };

    THEMEMASCOT.header = {

        init: function init() {

            var t = setTimeout(function () {
                THEMEMASCOT.header.TM_fullscreenMenu();
                THEMEMASCOT.header.TM_sidePanelReveal();
                THEMEMASCOT.header.TM_scroolToTopOnClick();
                THEMEMASCOT.header.TM_scrollToFixed();
                THEMEMASCOT.header.TM_topnavAnimate();
                THEMEMASCOT.header.TM_scrolltoTarget();
                THEMEMASCOT.header.TM_menuzord();
                THEMEMASCOT.header.TM_navLocalScorll();
                THEMEMASCOT.header.TM_menuCollapseOnClick();
                THEMEMASCOT.header.TM_homeParallaxFadeEffect();
                THEMEMASCOT.header.TM_topsearch_toggle();
            }, 0);
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------- menufullpage ---------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_fullscreenMenu: function TM_fullscreenMenu() {
            var $menufullpage = $('.menu-full-page .fullpage-nav-toggle');
            $menufullpage.menufullpage();
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------- Side Push Panel ---------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_sidePanelReveal: function TM_sidePanelReveal() {
            $('.side-panel-trigger').on('click', function (e) {
                $body.toggleClass("side-panel-open");
                if (THEMEMASCOT.isMobile.any()) {
                    $body.toggleClass("overflow-hidden");
                }
                return false;
            });

            $('.has-side-panel .body-overlay').on('click', function (e) {
                $body.toggleClass("side-panel-open");
                return false;
            });

            //sitebar tree
            $('.side-panel-nav .nav .tree-toggler').on('click', function (e) {
                $(this).parent().children('ul.tree').toggle(300);
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------------- scrollToTop  ------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_scroolToTop: function TM_scroolToTop() {
            if ($window.scrollTop() > 600) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        },

        TM_scroolToTopOnClick: function TM_scroolToTopOnClick() {
            $document_body.on('click', '.scrollToTop', function (e) {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        },

        /* ---------------------------------------------------------------------------- */
        /* --------------------------- One Page Nav close on click -------------------- */
        /* ---------------------------------------------------------------------------- */
        TM_menuCollapseOnClick: function TM_menuCollapseOnClick() {
            $document.on('click', '.onepage-nav a', function (e) {
                $('.showhide').trigger('click');
                return false;
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ----------- Active Menu Item on Reaching Different Sections ---------- */
        /* ---------------------------------------------------------------------- */
        TM_activateMenuItemOnReach: function TM_activateMenuItemOnReach() {
            var $onepage_nav = $('.onepage-nav');
            var cur_pos = $window.scrollTop() + 2;
            var nav_height = $onepage_nav.outerHeight();
            $sections.each(function () {
                var top = $(this).offset().top - nav_height - 80,
                    bottom = top + $(this).outerHeight();

                if (cur_pos >= top && cur_pos <= bottom) {
                    $onepage_nav.find('a').parent().removeClass('current').removeClass('active');
                    $sections.removeClass('current').removeClass('active');

                    //$(this).addClass('current').addClass('active');
                    $onepage_nav.find('a[href="#' + $(this).attr('id') + '"]').parent().addClass('current').addClass('active');
                }
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------- on click scrool to target with smoothness -------- */
        /* ---------------------------------------------------------------------- */
        TM_scrolltoTarget: function TM_scrolltoTarget() {
            //jQuery for page scrolling feature - requires jQuery Easing plugin
            $('.smooth-scroll-to-target, .fullscreen-onepage-nav a').on('click', function (e) {
                e.preventDefault();

                var $anchor = $(this);

                var $hearder_top = $('.header .header-nav');
                var hearder_top_offset = 0;
                if ($hearder_top[0]) {
                    hearder_top_offset = $hearder_top.outerHeight(true);
                } else {
                    hearder_top_offset = 0;
                }

                //for vertical nav, offset 0
                if ($body.hasClass("vertical-nav")) {
                    hearder_top_offset = 0;
                }

                var top = $($anchor.attr('href')).offset().top - hearder_top_offset;
                $('html, body').stop().animate({
                    scrollTop: top
                }, 1500, 'easeInOutExpo');
            });
        },

        /* ---------------------------------------------------------------------- */
        /* -------------------------- Scroll navigation ------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_navLocalScorll: function TM_navLocalScorll() {
            var data_offset = -60;
            $("#menuzord .menuzord-menu, #menuzord-right .menuzord-menu").localScroll({
                target: "body",
                duration: 800,
                offset: data_offset,
                easing: "easeInOutExpo"
            });

            $("#menuzord-side-panel .menuzord-menu, #menuzord-verticalnav .menuzord-menu, #fullpage-nav").localScroll({
                target: "body",
                duration: 800,
                offset: 0,
                easing: "easeInOutExpo"
            });
        },

        /* ---------------------------------------------------------------------------- */
        /* --------------------------- collapsed menu close on click ------------------ */
        /* ---------------------------------------------------------------------------- */
        TM_scrollToFixed: function TM_scrollToFixed() {
            $('.navbar-scrolltofixed').scrollToFixed();
            $('.scrolltofixed').scrollToFixed({
                marginTop: $('.header .header-nav').outerHeight(true) + 10,
                limit: function limit() {
                    var limit = $('#footer').offset().top - $(this).outerHeight(true);
                    return limit;
                }
            });
            $('#sidebar').scrollToFixed({
                marginTop: $('.header .header-nav').outerHeight() + 20,
                limit: function limit() {
                    var limit = $('#footer').offset().top - $('#sidebar').outerHeight() - 20;
                    return limit;
                }
            });
        },

        /* ----------------------------------------------------------------------------- */
        /* --------------------------- Menuzord - Responsive Megamenu ------------------ */
        /* ----------------------------------------------------------------------------- */
        TM_menuzord: function TM_menuzord() {
            $("#menuzord").menuzord({
                align: "left",
                effect: "slide",
                animation: "none",
                indicatorFirstLevel: "<i class='fa fa-angle-down'></i>",
                indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"
            });
            $("#menuzord-right").menuzord({
                align: "right",
                effect: "slide",
                animation: "none",
                indicatorFirstLevel: "<i class='fa fa-angle-down'></i>",
                indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"
            });
            $("#menuzord-side-panel").menuzord({
                align: "right",
                effect: "slide",
                animation: "none",
                indicatorFirstLevel: "",
                indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"
            });

            $("#menuzord-verticalnav").menuzord({
                align: "right",
                effect: "slide",
                animation: "none",
                indicatorFirstLevel: "<i class='fa fa-angle-down'></i>",
                indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"
                /*indicatorFirstLevel: "<i class='fa fa-angle-right'></i>",
                indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"*/
            });
        },

        /* ---------------------------------------------------------------------- */
        /* --------------------------- Waypoint Top Nav Sticky ------------------ */
        /* ---------------------------------------------------------------------- */
        TM_topnavAnimate: function TM_topnavAnimate() {
            if ($window.scrollTop() > 50) {
                $(".navbar-sticky-animated").removeClass("animated-active");
            } else {
                $(".navbar-sticky-animated").addClass("animated-active");
            }

            if ($window.scrollTop() > 50) {
                $(".navbar-sticky-animated .header-nav-wrapper .container, .navbar-sticky-animated .header-nav-wrapper .container-fluid").removeClass("add-padding");
            } else {
                $(".navbar-sticky-animated .header-nav-wrapper .container, .navbar-sticky-animated .header-nav-wrapper .container-fluid").addClass("add-padding");
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ---------------- home section on scroll parallax & fade -------------- */
        /* ---------------------------------------------------------------------- */
        TM_homeParallaxFadeEffect: function TM_homeParallaxFadeEffect() {
            if ($window.width() >= 1200) {
                var scrolled = $window.scrollTop();
                $('.content-fade-effect .home-content .home-text').css('padding-top', scrolled * 0.0610 + '%').css('opacity', 1 - scrolled * 0.00120);
            }
        },

        /* ---------------------------------------------------------------------- */
        /* --------------------------- Top search toggle  ----------------------- */
        /* ---------------------------------------------------------------------- */
        TM_topsearch_toggle: function TM_topsearch_toggle() {
            $document_body.on('click', '#top-search-toggle', function (e) {
                e.preventDefault();
                $('.search-form-wrapper.toggle').toggleClass('active');
                return false;
            });
        }

    };

    THEMEMASCOT.widget = {

        init: function init() {

            var t = setTimeout(function () {
                THEMEMASCOT.widget.TM_shopClickEvents();
                THEMEMASCOT.widget.TM_fcCalender();
                THEMEMASCOT.widget.TM_verticalTimeline();
                THEMEMASCOT.widget.TM_verticalMasonryTimeline();
                THEMEMASCOT.widget.TM_masonryIsotop();
                THEMEMASCOT.widget.TM_pieChart();
                THEMEMASCOT.widget.TM_progressBar();
                THEMEMASCOT.widget.TM_funfact();
                THEMEMASCOT.widget.TM_instagramFeed();
                THEMEMASCOT.widget.TM_jflickrfeed();
                THEMEMASCOT.widget.TM_accordion_toggles();
                THEMEMASCOT.widget.TM_tooltip();
                //THEMEMASCOT.widget.TM_countDownTimer();
            }, 0);
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------------ Shop Plus Minus ----------------------- */
        /* ---------------------------------------------------------------------- */
        TM_shopClickEvents: function TM_shopClickEvents() {
            $document_body.on('click', '.quantity .plus', function (e) {
                var currentVal = parseInt($(this).parent().children(".qty").val(), 10);
                if (!isNaN(currentVal)) {
                    $(this).parent().children(".qty").val(currentVal + 1);
                }
                return false;
            });

            $document_body.on('click', '.quantity .minus', function (e) {
                var currentVal = parseInt($(this).parent().children(".qty").val(), 10);
                if (!isNaN(currentVal) && currentVal > 0) {
                    $(this).parent().children(".qty").val(currentVal - 1);
                }
                return false;
            });

            $document_body.on('click', '#checkbox-ship-to-different-address', function (e) {
                $("#checkout-shipping-address").toggle(this.checked);
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------------ Event Calendar ------------------------ */
        /* ---------------------------------------------------------------------- */
        TM_fcCalender: function TM_fcCalender() {
            if (typeof calendarEvents !== "undefined") {
                $('#full-event-calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    defaultDate: '2016-01-12',
                    selectable: true,
                    selectHelper: true,
                    select: function select(start, end) {
                        var title = prompt('Event Title:');
                        var eventData;
                        if (title) {
                            eventData = {
                                title: title,
                                start: start,
                                end: end
                            };
                            $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                        }
                        $('#calendar').fullCalendar('unselect');
                    },
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: calendarEvents
                });
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------------ Timeline Block ------------------------ */
        /* ---------------------------------------------------------------------- */
        TM_verticalTimeline: function TM_verticalTimeline() {
            var timelineBlocks = $('.cd-timeline-block'),
                offset = 0.8;

            //hide timeline blocks which are outside the viewport
            hideBlocks(timelineBlocks, offset);

            //on scolling, show/animate timeline blocks when enter the viewport
            $window.on('scroll', function () {
                !window.requestAnimationFrame ? setTimeout(function () {
                    showBlocks(timelineBlocks, offset);
                }, 100) : window.requestAnimationFrame(function () {
                    showBlocks(timelineBlocks, offset);
                });
            });

            function hideBlocks(blocks, offset) {
                blocks.each(function () {
                    $(this).offset().top > $window.scrollTop() + $window.height() * offset && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
                });
            }

            function showBlocks(blocks, offset) {
                blocks.each(function () {
                    $(this).offset().top <= $window.scrollTop() + $window.height() * offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
                });
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ----------------------- Vertical Masonry Timeline -------------------- */
        /* ---------------------------------------------------------------------- */
        TM_verticalMasonryTimeline: function TM_verticalMasonryTimeline() {
            var $masonry_timeline = $('.vertical-masonry-timeline');
            $masonry_timeline.isotope({
                itemSelector: '.each-masonry-item',
                sortBy: 'original-order',
                layoutMode: 'masonry',
                resizable: false
            });

            //=====> Timeline Positions
            function timeline_on_left_and_right() {
                $masonry_timeline.children('.each-masonry-item').each(function (index, element) {
                    var last_child = $(this);
                    var prev_last = $(this).prev();
                    var last_child_offset = parseInt(last_child.css('top'), 10);
                    var prev_last_offset = parseInt(prev_last.css('top'), 10);
                    var offset_icon = last_child_offset - prev_last_offset;

                    var go_top_to = 0;
                    if (offset_icon) {
                        if (offset_icon <= 87) {
                            go_top_to = 87 - offset_icon;
                            last_child.find('.timeline-post-format').animate({
                                top: go_top_to
                            }, 300);
                        }
                    }

                    if ($(this).position().left === 0) {
                        $(this).removeClass('item-right');
                        $(this).addClass('item-left');
                    } else {
                        $(this).removeClass('item-left');
                        $(this).addClass('item-right');
                    }
                });
            }
            timeline_on_left_and_right();

            $window.resize(function () {
                timeline_on_left_and_right();
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ----------------------------- Masonry Isotope ------------------------ */
        /* ---------------------------------------------------------------------- */
        TM_masonryIsotop: function TM_masonryIsotop() {
            var isotope_mode;
            if ($portfolio_gallery.hasClass("masonry")) {
                isotope_mode = "masonry";
            } else {
                isotope_mode = "fitRows";
            }

            //isotope firsttime loading
            $portfolio_gallery.imagesLoaded(function () {
                $portfolio_gallery.isotope({
                    itemSelector: '.gallery-item',
                    layoutMode: isotope_mode,
                    filter: "*"
                });
            });

            //isotope filter
            $document_body.on('click', portfolio_filter, function (e) {
                $(portfolio_filter).removeClass("active");
                $(this).addClass("active");
                var fselector = $(this).data('filter');

                $portfolio_gallery.isotope({
                    itemSelector: '.gallery-item',
                    layoutMode: isotope_mode,
                    filter: fselector
                });
                return false;
            });

            THEMEMASCOT.slider.TM_flexslider();
        },

        TM_portfolioFlexSliderGalleryPopUpInit: function TM_portfolioFlexSliderGalleryPopUpInit() {
            var $flexSliders = $portfolio_gallery.find('.slides');
            $flexSliders.each(function () {
                var _items = $(this).find("li > a");
                var items = [];
                for (var i = 0; i < _items.length; i++) {
                    items.push({ src: $(_items[i]).attr("href"), title: $(_items[i]).attr("title") });
                }
                $(this).parent().parent().parent().find(".icons-holder").magnificPopup({
                    items: items,
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            });
        },

        TM_isotopeGridRearrange: function TM_isotopeGridRearrange() {
            var isotope_mode;
            if ($portfolio_gallery.hasClass("masonry")) {
                isotope_mode = "masonry";
            } else {
                isotope_mode = "fitRows";
            }
            $portfolio_gallery.isotope({
                itemSelector: '.gallery-item',
                layoutMode: isotope_mode
            });
        },

        TM_isotopeGridShuffle: function TM_isotopeGridShuffle() {
            $portfolio_gallery.isotope('shuffle');
        },

        /* ---------------------------------------------------------------------- */
        /* ----------------------------- CountDown ------------------------------ */
        /* ---------------------------------------------------------------------- */
        TM_countDownTimer: function TM_countDownTimer() {
            var $clock = $('#clock-count-down');
            var endingdate = $clock.data("endingdate");
            $clock.countdown(endingdate, function (event) {
                var countdown_text = '' + '<ul class="countdown-timer">' + '<li>%D <span>Days</span></li>' + '<li>%H <span>Hours</span></li>' + '<li>%M <span>Minutes</span></li>' + '<li>%S <span>Seconds</span></li>' + '</ul>';
                $(this).html(event.strftime(countdown_text));
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ----------------------- pie chart / circle skill bar ----------------- */
        /* ---------------------------------------------------------------------- */
        TM_pieChart: function TM_pieChart() {
            var $piechart = $('.piechart');
            $piechart.appear();
            $document_body.on('appear', '.piechart', function () {
                var current_item = $(this);
                if (!current_item.hasClass('appeared')) {
                    var barcolor = current_item.data('barcolor');
                    var trackcolor = current_item.data('trackcolor');
                    var linewidth = current_item.data('linewidth');
                    var boxwidth = current_item.data('boxwidth');
                    current_item.css("width", boxwidth);
                    current_item.easyPieChart({
                        animate: 3000,
                        barColor: barcolor,
                        trackColor: trackcolor,
                        easing: 'easeOutBounce',
                        lineWidth: linewidth,
                        size: boxwidth,
                        lineCap: 'square',
                        scaleColor: false,
                        onStep: function onStep(from, to, percent) {
                            $(this.el).find('span').text(Math.round(percent));
                        }
                    });
                    current_item.addClass('appeared');
                }
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------- progress bar / horizontal skill bar -------------- */
        /* ---------------------------------------------------------------------- */
        TM_progressBar: function TM_progressBar() {
            var $progress_bar = $('.progress-bar');
            $progress_bar.appear();
            $document_body.on('appear', '.progress-bar', function () {
                var current_item = $(this);
                if (!current_item.hasClass('appeared')) {
                    var percent = current_item.data('percent');
                    var barcolor = current_item.data('barcolor');
                    current_item.append('<span class="percent">' + percent + '%' + '</span>').css('background-color', barcolor).css('width', percent + '%').addClass('appeared');
                }
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------ Funfact Number Counter ---------------------- */
        /* ---------------------------------------------------------------------- */
        TM_funfact: function TM_funfact() {
            var $animate_number = $('.animate-number');
            $animate_number.appear();
            $document_body.on('appear', '.animate-number', function () {
                $animate_number.each(function () {
                    var current_item = $(this);
                    if (!current_item.hasClass('appeared')) {
                        current_item.animateNumbers(current_item.attr("data-value"), true, parseInt(current_item.attr("data-animation-duration"), 10)).addClass('appeared');
                    }
                });
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ----------------------------- Instagram Feed ---------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_instagramFeed: function TM_instagramFeed() {
            $('.instagram-feed').each(function () {
                var current_div = $(this);
                var instagramFeed = new Instafeed({
                    target: current_div.attr('id'),
                    get: 'user',
                    userId: current_div.data('userid'),
                    accessToken: current_div.data('accesstoken'),
                    resolution: current_div.data('resolution'),
                    limit: current_div.data('limit'),
                    template: '<div class="item"><figure><img src="{{image}}" /><a href="{{link}}" class="link-out" target="_blank"><i class="fa fa-link"></i></a></figure></div>',
                    after: function after() {}
                });
                instagramFeed.run();
            });

            $('.instagram-feed-carousel').each(function () {
                var current_div = $(this);
                var instagramFeed = new Instafeed({
                    target: current_div.attr('id'),
                    get: 'user',
                    userId: current_div.data('userid'),
                    accessToken: current_div.data('accesstoken'),
                    resolution: current_div.data('resolution'),
                    limit: current_div.data('limit'),
                    template: '<div class="item"><figure><img src="{{image}}" /><a href="{{link}}" class="link-out" target="_blank"><i class="fa fa-link"></i></a></figure></div>',
                    after: function after() {
                        current_div.owlCarousel({
                            rtl: THEMEMASCOT.isRTL.check(),
                            autoplay: true,
                            autoplayTimeout: 4000,
                            loop: true,
                            margin: 15,
                            dots: true,
                            nav: false,
                            responsive: {
                                0: {
                                    items: 2
                                },
                                768: {
                                    items: 4
                                },
                                1000: {
                                    items: 5
                                }
                            }
                        });
                    }
                });
                instagramFeed.run();
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ---------------------------- Flickr Feed ----------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_jflickrfeed: function TM_jflickrfeed() {
            $(".flickr-widget .flickr-feed, .jflickrfeed").each(function () {
                var current_div = $(this);
                current_div.jflickrfeed({
                    limit: 9,
                    qstrings: {
                        id: current_div.data('userid')
                    },
                    itemTemplate: '<a href="{{link}}" title="{{title}}" target="_blank"><img src="{{image_m}}" alt="{{title}}">  </a>'
                });
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------- accordion & toggles ------------------------ */
        /* ---------------------------------------------------------------------- */
        TM_accordion_toggles: function TM_accordion_toggles() {
            var $panel_group_collapse = $('.panel-group .collapse');
            $panel_group_collapse.on("show.bs.collapse", function (e) {
                $(this).closest(".panel-group").find("[href='#" + $(this).attr("id") + "']").addClass("active");
            });
            $panel_group_collapse.on("hide.bs.collapse", function (e) {
                $(this).closest(".panel-group").find("[href='#" + $(this).attr("id") + "']").removeClass("active");
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------------- tooltip  ----------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_tooltip: function TM_tooltip() {
            $('[data-toggle="tooltip"]').tooltip();
        },

        /* ---------------------------------------------------------------------- */
        /* ---------------------------- Twitter Feed  --------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_twittie: function TM_twittie() {
            var $twitter_feed = $('.twitter-feed');
            var $twitter_feed_carousel = $('.twitter-feed-carousel');

            if ($twitter_feed.length > 0) {
                $twitter_feed.twittie({
                    username: $twitter_feed.data('username'),
                    dateFormat: '%b. %d, %Y',
                    template: '{{tweet}} <div class="date">{{date}}</div>',
                    count: $twitter_feed.data("count") === undefined ? 4 : $twitter_feed.data("count"),
                    loadingText: 'Loading!'
                });
            }

            if ($twitter_feed_carousel.length > 0) {
                $twitter_feed_carousel.twittie({
                    username: $twitter_feed_carousel.data('username'),
                    dateFormat: '%b. %d, %Y',
                    template: '{{tweet}} <div class="date">{{date}}</div>',
                    count: $twitter_feed_carousel.data("count") === undefined ? 4 : $twitter_feed_carousel.data("count"),
                    loadingText: 'Loading!'
                }, function () {
                    $twitter_feed_carousel.find('ul').owlCarousel({
                        rtl: THEMEMASCOT.isRTL.check(),
                        autoplay: true,
                        autoplayTimeout: 2000,
                        loop: true,
                        items: 1,
                        dots: true,
                        nav: false
                    });
                });
            }
        }
    };

    THEMEMASCOT.slider = {

        init: function init() {

            var t = setTimeout(function () {
                THEMEMASCOT.slider.TM_typedAnimation();
                THEMEMASCOT.slider.TM_flexslider();
                THEMEMASCOT.slider.TM_owlCarousel();
                THEMEMASCOT.slider.TM_maximageSlider();
                THEMEMASCOT.slider.TM_bxslider();
            }, 0);
        },

        /* ---------------------------------------------------------------------- */
        /* -------------------------- Typed Text Carousel  ---------------------- */
        /* ---------------------------------------------------------------------- */
        TM_typedAnimation: function TM_typedAnimation() {
            if ($('.typed-text-carousel').length) {
                $('.typed-text-carousel').each(function () {
                    var string_1 = $(this).find('span:first-child').text();
                    var string_2 = $(this).find('span:nth-child(2)').text();
                    var string_3 = $(this).find('span:nth-child(3)').text();
                    var str = '';
                    var $this = $(this);
                    if (!string_2.trim() || !string_3.trim()) {
                        str = [string_1];
                    }
                    if (!string_3.trim() && string_2.length) {
                        str = [string_1, string_2];
                    }
                    if (string_1.length && string_2.length && string_3.length) {
                        str = [string_1, string_2, string_3];
                    }
                    var speed = $(this).data('speed');
                    var back_delay = $(this).data('back_delay');
                    var loop = $(this).data('loop');
                    $(this).typed({
                        strings: str,
                        typeSpeed: speed,
                        backSpeed: 0,
                        backDelay: back_delay,
                        cursorChar: "|",
                        loop: loop,
                        contentType: 'text',
                        loopCount: false
                    });
                });
            }
        },

        /* ---------------------------------------------------------------------- */
        /* -------------------------------- flexslider  ------------------------- */
        /* ---------------------------------------------------------------------- */
        TM_flexslider: function TM_flexslider() {
            var $each_flex_slider = $('.flexslider-wrapper').find('.flexslider');
            THEMEMASCOT.widget.TM_portfolioFlexSliderGalleryPopUpInit();
            $each_flex_slider.each(function () {
                var $flex_slider = $(this);
                var data_direction = $flex_slider.parent().data("direction") === undefined ? 'horizontal' : $flex_slider.parent().data("direction");
                var data_controlNav = $flex_slider.parent().data("controlnav") === undefined ? true : $flex_slider.parent().data("controlnav");
                var data_directionnav = $flex_slider.parent().data("directionnav") === undefined ? true : $flex_slider.parent().data("directionnav");
                $flex_slider.flexslider({
                    rtl: THEMEMASCOT.isRTL.check(),
                    selector: ".slides > li",
                    animation: "slide",
                    easing: "swing",
                    direction: data_direction,
                    slideshow: true,
                    slideshowSpeed: 7000,
                    animationSpeed: 600,
                    pauseOnHover: false,
                    controlNav: data_controlNav,
                    directionNav: data_directionnav,
                    start: function start(slider) {
                        imagesLoaded($portfolio_gallery, function () {
                            setTimeout(function () {
                                $portfolio_filter_first_child.trigger("click");
                            }, 500);
                        });
                        THEMEMASCOT.initialize.TM_magnificPopup_lightbox();
                        THEMEMASCOT.initialize.TM_prettyPhoto_lightbox();
                        THEMEMASCOT.initialize.TM_nivolightbox();
                    },
                    after: function after() {}
                });
            });
        },

        /* ---------------------------------------------------------------------- */
        /* -------------------------------- Owl Carousel  ----------------------- */
        /* ---------------------------------------------------------------------- */
        TM_owlCarousel: function TM_owlCarousel() {
            $('.owl-carousel-1col, .text-carousel, .image-carousel, .fullwidth-carousel').each(function () {
                var data_dots = $(this).data("dots") === undefined ? false : $(this).data("dots");
                var data_nav = $(this).data("nav") === undefined ? false : $(this).data("nav");
                var data_duration = $(this).data("duration") === undefined ? 4000 : $(this).data("duration");
                $(this).owlCarousel({
                    rtl: THEMEMASCOT.isRTL.check(),
                    autoplay: true,
                    autoplayTimeout: data_duration,
                    loop: true,
                    items: 1,
                    dots: data_dots,
                    nav: data_nav,
                    navText: ['<i class="pe-7s-angle-left"></i>', '<i class="pe-7s-angle-right"></i>']
                });
            });

            $('.owl-carousel-2col').each(function () {
                var data_dots = $(this).data("dots") === undefined ? false : $(this).data("dots");
                var data_nav = $(this).data("nav") === undefined ? false : $(this).data("nav");
                var data_duration = $(this).data("duration") === undefined ? 4000 : $(this).data("duration");
                $(this).owlCarousel({
                    rtl: THEMEMASCOT.isRTL.check(),
                    autoplay: true,
                    autoplayTimeout: data_duration,
                    loop: true,
                    items: 2,
                    margin: 15,
                    dots: data_dots,
                    nav: data_nav,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1,
                            center: false
                        },
                        480: {
                            items: 1,
                            center: false
                        },
                        600: {
                            items: 1,
                            center: false
                        },
                        750: {
                            items: 2,
                            center: false
                        },
                        960: {
                            items: 2
                        },
                        1170: {
                            items: 2
                        },
                        1300: {
                            items: 2
                        }
                    }
                });
            });

            $('.owl-carousel-3col').each(function () {
                var data_dots = $(this).data("dots") === undefined ? false : $(this).data("dots");
                var data_nav = $(this).data("nav") === undefined ? false : $(this).data("nav");
                var data_duration = $(this).data("duration") === undefined ? 4000 : $(this).data("duration");
                $(this).owlCarousel({
                    rtl: THEMEMASCOT.isRTL.check(),
                    autoplay: true,
                    autoplayTimeout: data_duration,
                    loop: true,
                    items: 3,
                    margin: 15,
                    dots: data_dots,
                    nav: data_nav,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1,
                            center: false
                        },
                        480: {
                            items: 1,
                            center: false
                        },
                        600: {
                            items: 1,
                            center: false
                        },
                        750: {
                            items: 2,
                            center: false
                        },
                        960: {
                            items: 2
                        },
                        1170: {
                            items: 3
                        },
                        1300: {
                            items: 3
                        }
                    }
                });
            });

            $('.owl-carousel-4col').each(function () {
                var data_dots = $(this).data("dots") === undefined ? false : $(this).data("dots");
                var data_nav = $(this).data("nav") === undefined ? false : $(this).data("nav");
                var data_duration = $(this).data("duration") === undefined ? 4000 : $(this).data("duration");
                $(this).owlCarousel({
                    rtl: THEMEMASCOT.isRTL.check(),
                    autoplay: true,
                    autoplayTimeout: data_duration,
                    loop: true,
                    items: 4,
                    margin: 15,
                    dots: data_dots,
                    nav: data_nav,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1,
                            center: true
                        },
                        480: {
                            items: 1,
                            center: false
                        },
                        600: {
                            items: 3,
                            center: false
                        },
                        750: {
                            items: 3,
                            center: false
                        },
                        960: {
                            items: 3
                        },
                        1170: {
                            items: 4
                        },
                        1300: {
                            items: 4
                        }
                    }
                });
            });

            $('.owl-carousel-5col').each(function () {
                var data_dots = $(this).data("dots") === undefined ? false : $(this).data("dots");
                var data_nav = $(this).data("nav") === undefined ? false : $(this).data("nav");
                var data_duration = $(this).data("duration") === undefined ? 4000 : $(this).data("duration");
                $(this).owlCarousel({
                    rtl: THEMEMASCOT.isRTL.check(),
                    autoplay: true,
                    autoplayTimeout: data_duration,
                    loop: true,
                    items: 5,
                    margin: 15,
                    dots: data_dots,
                    nav: data_nav,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1,
                            center: false
                        },
                        480: {
                            items: 1,
                            center: false
                        },
                        600: {
                            items: 2,
                            center: false
                        },
                        750: {
                            items: 3,
                            center: false
                        },
                        960: {
                            items: 4
                        },
                        1170: {
                            items: 5
                        },
                        1300: {
                            items: 5
                        }
                    }
                });
            });

            $('.owl-carousel-6col').each(function () {
                var data_dots = $(this).data("dots") === undefined ? false : $(this).data("dots");
                var data_nav = $(this).data("nav") === undefined ? false : $(this).data("nav");
                var data_duration = $(this).data("duration") === undefined ? 4000 : $(this).data("duration");
                $(this).owlCarousel({
                    rtl: THEMEMASCOT.isRTL.check(),
                    autoplay: true,
                    autoplayTimeout: data_duration,
                    loop: true,
                    items: 6,
                    margin: 15,
                    dots: data_dots,
                    nav: data_nav,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1,
                            center: false
                        },
                        480: {
                            items: 1,
                            center: false
                        },
                        600: {
                            items: 2,
                            center: false
                        },
                        750: {
                            items: 3,
                            center: false
                        },
                        960: {
                            items: 4
                        },
                        1170: {
                            items: 6
                        },
                        1300: {
                            items: 6
                        }
                    }
                });
            });

            $('.owl-carousel-7col').each(function () {
                var data_dots = $(this).data("dots") === undefined ? false : $(this).data("dots");
                var data_nav = $(this).data("nav") === undefined ? false : $(this).data("nav");
                var data_duration = $(this).data("duration") === undefined ? 4000 : $(this).data("duration");
                $(this).owlCarousel({
                    rtl: THEMEMASCOT.isRTL.check(),
                    autoplay: true,
                    autoplayTimeout: data_duration,
                    loop: true,
                    items: 7,
                    margin: 15,
                    dots: data_dots,
                    nav: data_nav,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1,
                            center: false
                        },
                        600: {
                            items: 2,
                            center: false
                        },
                        750: {
                            items: 3,
                            center: false
                        },
                        960: {
                            items: 4
                        },
                        1170: {
                            items: 7
                        },
                        1300: {
                            items: 7
                        }
                    }
                });
            });

            $('.owl-carousel-8col').each(function () {
                var data_dots = $(this).data("dots") === undefined ? false : $(this).data("dots");
                var data_nav = $(this).data("nav") === undefined ? false : $(this).data("nav");
                var data_duration = $(this).data("duration") === undefined ? 4000 : $(this).data("duration");
                $(this).owlCarousel({
                    rtl: THEMEMASCOT.isRTL.check(),
                    autoplay: true,
                    autoplayTimeout: data_duration,
                    loop: true,
                    items: 8,
                    margin: 15,
                    dots: data_dots,
                    nav: data_nav,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1,
                            center: false
                        },
                        600: {
                            items: 2,
                            center: false
                        },
                        750: {
                            items: 3,
                            center: false
                        },
                        960: {
                            items: 5
                        },
                        1170: {
                            items: 8
                        },
                        1300: {
                            items: 8
                        }
                    }
                });
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ----------------------------- BxSlider  ------------------------------ */
        /* ---------------------------------------------------------------------- */
        TM_bxslider: function TM_bxslider() {
            var $bxslider = $('.bxslider');
            if ($bxslider.length > 0) {
                $bxslider.bxSlider({
                    mode: 'vertical',
                    minSlides: $bxslider.data("count") === undefined ? 2 : $bxslider.data("count"),
                    slideMargin: 20,
                    pager: false,
                    prevText: '<i class="fa fa-angle-left"></i>',
                    nextText: '<i class="fa fa-angle-right"></i>'
                });
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ---------- maximage Fullscreen Parallax Background Slider  ----------- */
        /* ---------------------------------------------------------------------- */
        TM_maximageSlider: function TM_maximageSlider() {
            $('#maximage').maximage({
                cycleOptions: {
                    fx: 'fade',
                    speed: 1500,
                    prev: '.img-prev',
                    next: '.img-next'
                }
            });
        }
    };

    /* ---------------------------------------------------------------------- */
    /* ---------- document ready, window load, scroll and resize ------------ */
    /* ---------------------------------------------------------------------- */
    //document ready
    THEMEMASCOT.documentOnReady = {
        init: function init() {
            THEMEMASCOT.initialize.init();
            THEMEMASCOT.header.init();
            THEMEMASCOT.slider.init();
            THEMEMASCOT.widget.init();
            THEMEMASCOT.windowOnscroll.init();
        }
    };

    //window on load
    THEMEMASCOT.windowOnLoad = {
        init: function init() {
            var t = setTimeout(function () {
                THEMEMASCOT.initialize.TM_wow();
                THEMEMASCOT.widget.TM_twittie();
                THEMEMASCOT.initialize.TM_magnificPopup_lightbox();
                THEMEMASCOT.initialize.TM_preLoaderOnLoad();
                THEMEMASCOT.initialize.TM_hashForwarding();
                THEMEMASCOT.initialize.TM_parallaxBgInit();
            }, 0);
            $window.trigger("scroll");
            $window.trigger("resize");
        }
    };

    //window on scroll
    THEMEMASCOT.windowOnscroll = {
        init: function init() {
            $window.on('scroll', function () {
                THEMEMASCOT.header.TM_scroolToTop();
                THEMEMASCOT.header.TM_activateMenuItemOnReach();
                THEMEMASCOT.header.TM_topnavAnimate();
            });
        }
    };

    //window on resize
    THEMEMASCOT.windowOnResize = {
        init: function init() {
            var t = setTimeout(function () {
                THEMEMASCOT.initialize.TM_equalHeightDivs();
                THEMEMASCOT.initialize.TM_resizeFullscreen();
            }, 400);
        }
    };

    /* ---------------------------------------------------------------------- */
    /* ---------------------------- Call Functions -------------------------- */
    /* ---------------------------------------------------------------------- */
    $document.ready(THEMEMASCOT.documentOnReady.init);
    $window.on('load', THEMEMASCOT.windowOnLoad.init);
    $window.on('resize', THEMEMASCOT.windowOnResize.init);

    //call function before document ready
    THEMEMASCOT.initialize.TM_preLoaderClickDisable();
})(jQuery);

/***/ }),
/* 9 */
/***/ (function(module, exports) {

(function ($) {
	$.formalist = function (form, options) {

		// default plugin options
		var defaults = {
			selector: ':radio,:checkbox,select',
			event: 'change',
			box: 'div.box',
			cascade: ':radio:checked:visible,:checkbox:checked:visible,select:visible option:selected',
			classwhenhidden: 'hidden',
			classwhenvisible: 'visible',
			hide: function hide(box) {
				_hide(box);
			},
			show: function show(box) {
				_show(box);
			},
			correlate: function correlate(box, field, type, value, name, id) {
				return _correlate(box, field, type, value, name, id);
			}
		};

		// extend default plugin options with user's custom options
		var plugin = this;
		plugin.settings = $.extend({}, defaults, options);

		// override of the hide method
		if (!$.isFunction(plugin.settings.hide)) {
			plugin.settings.hide = _hide;
		}

		// override of the show method
		if (!$.isFunction(plugin.settings.show)) {
			plugin.settings.show = _show;
		}

		// override of the correlation method
		if (!$.isFunction(plugin.settings.correlate)) {
			plugin.settings.correlate = _correlate;
		}

		// initializes the plugin
		function init() {

			// hides all box except first and hides all box that contains a "*" in the data-hide attribute
			plugin.settings.hide($(form).find(plugin.settings.box + ':not(:first),' + plugin.settings.box + '[data-hide~="*"]'));

			// shows all box that contains a "*" in the data-show attribute
			plugin.settings.show($(form).find(plugin.settings.box + '[data-show~="*"]'));

			// runs through all input fields that already matched the cascade constraint
			$(form).find(plugin.settings.cascade).each(function () {
				run(this, form);
			});

			// binds all input fields on a specific event
			$(form).find(plugin.settings.selector).bind(plugin.settings.event, function () {
				run(this, form);
			});
		}

		// runs input fields through specific tests
		function run(field, form) {

			// grabs properties from the input field
			var type = $(field).is('input') ? $(field).prop('type') : $(field).prop('tagName').toLowerCase();
			var value = $(field).val();
			var name = $(field).prop('name');
			var id = $(field).prop('id');

			// hides all input fields when the data-hide attribute contains a "*", or equals a specific value, or contains a specific name, or contains a specific identifier
			plugin.settings.hide($(form).find(plugin.settings.box + '[data-hide~="*"],' + plugin.settings.box + '[data-hide="' + value + '"],' + plugin.settings.box + '[data-hide~="' + name + '"],' + plugin.settings.box + '[data-hide~="' + id + '"]'));

			// shows all input fields when the data-show attribute contains a "*"
			plugin.settings.show($(form).find(plugin.settings.box + '[data-show~="*"]'));

			// shows all input fields when the data-show attribute equals a specific value, or contains a specific name, or contains a specific identifier
			$(form).find(plugin.settings.box + '[data-show="' + value + '"],' + plugin.settings.box + '[data-show~="' + name + '"],' + plugin.settings.box + '[data-show~="' + id + '"]').each(function () {

				// correlates the box with the captured input field
				if (plugin.settings.correlate(this, field, type, value, name, id)) {
					plugin.settings.show(this);
				} else {
					plugin.settings.hide(this);
				}

				// runs again through all input fields that matched the cascade constraint
				$(this).find(plugin.settings.cascade).each(function () {
					run(this, form);
				});
			});
		}

		// hides an box
		function _hide(box) {
			$(box).removeClass(plugin.settings.classwhenvisible).addClass(plugin.settings.classwhenhidden);
		}

		// shows an box
		function _show(box) {
			$(box).removeClass(plugin.settings.classwhenhidden).addClass(plugin.settings.classwhenvisible);
		}

		// correlation between box and field
		function _correlate(box, field, type, value, name, id) {
			return type == 'select' ? $(field).has('option:selected') : $(field).is(':checked');
		}

		// initializes the plugin
		init();
	};

	// declares and instanciates the plugin
	$.fn.formalist = function (options) {
		return this.each(function () {
			if (undefined === $(this).data('formalist')) {
				var plugin = new $.formalist(this, options);
				$(this).data('formalist', plugin);
			}
		});
	};
})(jQuery);

/***/ }),
/* 10 */
/***/ (function(module, exports) {



//Campus Var
var saltillo = $('select option[value=Saltillo]');
var torreon = $('select option[value=Torreón]');
var monclova = $('select option[value=Monclova]');
var sabinas = $('select option[value=Sabinas]');
var pNegras = $('select option[value="Piedras Negras"]');
var monterrey = $('select option[value=Monterrey]');
var reynosa = $('select option[value=Reynosa]');
var matamoros = $('select option[value=Matamoros]');
//

//Tipo Programa Var
var bachillerato = $('select option[value=Bachillerato]');
var licenciatura = $('select option[value=Licenciatura]');
var maestria = $('select option[value=Maestría]');
var especialidad = $('select option[value=Especialidad]');
var doctorado = $('select option[value=Doctorado]');

//

//Programas Var
//Saltillo
var BachSaltillo = $('.BachSaltillo');
var LicSaltillo = $('.LicSaltillo');
var MaeSaltillo = $('.MaeSaltillo');
var EspSaltillo = $('.EspSaltillo');
var DocSaltillo = $('.DocSaltillo');
//Torreón
var BachTorreon = $('.BachTorreon');
var LicTorreon = $('.LicTorreon');
var MaeTorreon = $('.MaeTorreon');
var EspTorreon = $('.EspTorreon');
var DocTorreon = $('.DocTorreon');
//Monclova
var BachMonclova = $('.BachMonclova');
var LicMonclova = $('.LicMonclova');
var MaeMonclova = $('.MaeMonclova');
var EspMonclova = $('.EspMonclova');
var DocMonclova = $('.DocMonclova');
//Sabinas
var BachSabinas = $('.BachSabinas');
var LicSabinas = $('.LicSabinas');
var MaeSabinas = $('.MaeSabinas');
var EspSabinas = $('.EspSabinas');
var DocSabinas = $('.DocSabinas');
//Piedras Negras
var BachPiedras = $('.BachPiedras');
var LicPiedras = $('.LicPiedras');
var MaePiedras = $('.MaePiedras');
var EspPiedras = $('.EspPiedras');
var DocPiedras = $('.DocPiedras');
//Monterrey
var BachMonterrey = $('.BachMonterrey');
var LicMonterrey = $('.LicMonterrey');
var MaeMonterrey = $('.MaeMonterrey');
var EspMonterrey = $('.EspMonterrey');
var DocMonterrey = $('.DocMonterrey');
//Reynosa
var BachReynosa = $('.BachReynosa');
var LicReynosa = $('.LicReynosa');
var MaeReynosa = $('.MaeReynosa');
var EspReynosa = $('.EspReynosa');
var DocReynosa = $('.DocReynosa');
//Matamoros
var BachMatamoros = $('.BachMatamoros');
var LicMatamoros = $('.LicMatamoros');
var MaeMatamoros = $('.MaeMatamoros');
var EspMatamoros = $('.EspMatamoros');
var DocMatamoros = $('.DocMatamoros');

//En línea
var LicEnlinea = $('.LicEnLinea');
var MaeEnLinea = $('.MaeEnLinea');

//Esconder Campus
saltillo.attr('disabled', 'disabled').hide();
torreon.attr('disabled', 'disabled').hide();
monclova.attr('disabled', 'disabled').hide();
sabinas.attr('disabled', 'disabled').hide();
pNegras.attr('disabled', 'disabled').hide();
monterrey.attr('disabled', 'disabled').hide();
reynosa.attr('disabled', 'disabled').hide();
matamoros.attr('disabled', 'disabled').hide();
//Esconder Campus

//Esconder Tipo Programa
bachillerato.attr('disabled', 'disabled').hide();
licenciatura.attr('disabled', 'disabled').hide();
maestria.attr('disabled', 'disabled').hide();
especialidad.attr('disabled', 'disabled').hide();
doctorado.attr('disabled', 'disabled').hide();
//

//Esconder grupos de programas
BachSaltillo.attr('disabled', 'disabled').hide();
LicSaltillo.attr('disabled', 'disabled').hide();
MaeSaltillo.attr('disabled', 'disabled').hide();
EspSaltillo.attr('disabled', 'disabled').hide();
DocSaltillo.attr('disabled', 'disabled').hide();

BachTorreon.attr('disabled', 'disabled').hide();
LicTorreon.attr('disabled', 'disabled').hide();
MaeTorreon.attr('disabled', 'disabled').hide();
EspTorreon.attr('disabled', 'disabled').hide();
DocTorreon.attr('disabled', 'disabled').hide();

BachMonclova.attr('disabled', 'disabled').hide();
LicMonclova.attr('disabled', 'disabled').hide();
MaeMonclova.attr('disabled', 'disabled').hide();
EspMonclova.attr('disabled', 'disabled').hide();
DocMonclova.attr('disabled', 'disabled').hide();

BachSabinas.attr('disabled', 'disabled').hide();
LicSabinas.attr('disabled', 'disabled').hide();
MaeSabinas.attr('disabled', 'disabled').hide();
EspSabinas.attr('disabled', 'disabled').hide();
DocSabinas.attr('disabled', 'disabled').hide();

BachPiedras.attr('disabled', 'disabled').hide();
LicPiedras.attr('disabled', 'disabled').hide();
MaePiedras.attr('disabled', 'disabled').hide();
EspPiedras.attr('disabled', 'disabled').hide();
DocPiedras.attr('disabled', 'disabled').hide();

BachMonterrey.attr('disabled', 'disabled').hide();
LicMonterrey.attr('disabled', 'disabled').hide();
MaeMonterrey.attr('disabled', 'disabled').hide();
EspMonterrey.attr('disabled', 'disabled').hide();
DocMonterrey.attr('disabled', 'disabled').hide();

BachReynosa.attr('disabled', 'disabled').hide();
LicReynosa.attr('disabled', 'disabled').hide();
MaeReynosa.attr('disabled', 'disabled').hide();
EspReynosa.attr('disabled', 'disabled').hide();
DocReynosa.attr('disabled', 'disabled').hide();

BachMatamoros.attr('disabled', 'disabled').hide();
LicMatamoros.attr('disabled', 'disabled').hide();
MaeMatamoros.attr('disabled', 'disabled').hide();
EspMatamoros.attr('disabled', 'disabled').hide();
DocMatamoros.attr('disabled', 'disabled').hide();

LicEnlinea.attr('disabled', 'disabled').hide();
MaeEnLinea.attr('disabled', 'disabled').hide();
//
$(function () {

                        //Modalidad Aspirante -> Campus
                        $('#modalidadAspirante').change(function () {
                                                switch ($(this).val()) {
                                                                        case 'Presencial':
                                                                                                saltillo.removeAttr('disabled').show();
                                                                                                torreon.removeAttr('disabled').show();
                                                                                                monclova.removeAttr('disabled').show();
                                                                                                sabinas.removeAttr('disabled').show();
                                                                                                pNegras.removeAttr('disabled').show();
                                                                                                monterrey.removeAttr('disabled').show();
                                                                                                reynosa.removeAttr('disabled').show();
                                                                                                matamoros.removeAttr('disabled').show();

                                                                                                LicEnlinea.removeAttr('disabled', 'disabled').hide();
                                                                                                MaeEnLinea.removeAttr('disabled', 'disabled').hide();

                                                                                                $('#campusAspirante').prop('selectedIndex', 0);
                                                                                                $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                //Campus aspirante -> Tipo de programa
                                                                                                $('#campusAspirante').change(function () {
                                                                                                                        switch ($(this).val()) {
                                                                                                                                                case 'Saltillo':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.removeAttr('disabled').show();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.removeAttr('disabled').show();
                                                                                                                                                                        doctorado.removeAttr('disabled').show();
                                                                                                                                                                        //Tipo de programa -> Saltillo
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Bachillerato':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                                                                                                BachSaltillo.removeAttr('disabled').show();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.removeAttr('disabled').show();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.removeAttr('disabled').show();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Especialidad':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.removeAttr('disabled').show();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Doctorado':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //
                                                                                                                                                                        LicEnlinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        MaeEnLinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        break;
                                                                                                                                                case 'Torreón':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.removeAttr('disabled').show();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.removeAttr('disabled').show();
                                                                                                                                                                        doctorado.removeAttr('disabled').show();
                                                                                                                                                                        //Tipo de programa -> Torreón
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Bachillerato':
                                                                                                                                                                                                                                                BachTorreon.removeAttr('disabled').show();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.removeAttr('disabled').show();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.removeAttr('disabled').show();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Especialidad':
                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.removeAttr('disabled').show();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Doctorado':
                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //   
                                                                                                                                                                        LicEnlinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        MaeEnLinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        break;
                                                                                                                                                case 'Monclova':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.removeAttr('disabled').show();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.removeAttr('disabled').show();
                                                                                                                                                                        doctorado.removeAttr('disabled').show();
                                                                                                                                                                        //Tipo de programa -> Torreón
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Bachillerato':
                                                                                                                                                                                                                                                BachMonclova.removeAttr('disabled').show();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.removeAttr('disabled').show();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.removeAttr('disabled').show();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Especialidad':
                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.removeAttr('disabled').show();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Doctorado':
                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //    
                                                                                                                                                                        LicEnlinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        MaeEnLinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        break;
                                                                                                                                                case 'Sabinas':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.removeAttr('disabled').show();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.attr('disabled', 'disabled').hide();
                                                                                                                                                                        especialidad.attr('disabled', 'disabled').hide();
                                                                                                                                                                        doctorado.attr('disabled', 'disabled').hide();
                                                                                                                                                                        //Tipo de programa -> Torreón
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Bachillerato':
                                                                                                                                                                                                                                                BachSabinas.removeAttr('disabled').show();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.removeAttr('disabled').show();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.removeAttr('disabled').show();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Especialidad':
                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.removeAttr('disabled').show();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Doctorado':
                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //  
                                                                                                                                                                        LicEnlinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        MaeEnLinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        break;
                                                                                                                                                case 'Piedras Negras':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.removeAttr('disabled').show();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.removeAttr('disabled').show();
                                                                                                                                                                        doctorado.removeAttr('disabled').show();
                                                                                                                                                                        //Tipo de programa -> Torreón
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Bachillerato':
                                                                                                                                                                                                                                                BachPiedras.removeAttr('disabled').show();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.removeAttr('disabled').show();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.removeAttr('disabled').show();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Especialidad':
                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.removeAttr('disabled').show();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Doctorado':
                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //   
                                                                                                                                                                        LicEnlinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        MaeEnLinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        break;
                                                                                                                                                case 'Monterrey':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.removeAttr('disabled').show();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.removeAttr('disabled').show();
                                                                                                                                                                        doctorado.removeAttr('disabled').show();
                                                                                                                                                                        //Tipo de programa -> Torreón
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Bachillerato':
                                                                                                                                                                                                                                                BachMonterrey.removeAttr('disabled').show();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.removeAttr('disabled').show();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.removeAttr('disabled').show();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Especialidad':
                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.removeAttr('disabled').show();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Doctorado':
                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        // 
                                                                                                                                                                        LicEnlinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        MaeEnLinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        break;
                                                                                                                                                case 'Reynosa':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.removeAttr('disabled').show();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.removeAttr('disabled').show();
                                                                                                                                                                        doctorado.removeAttr('disabled').show();
                                                                                                                                                                        //Tipo de programa -> Torreón
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Bachillerato':
                                                                                                                                                                                                                                                BachReynosa.removeAttr('disabled').show();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.removeAttr('disabled').show();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.removeAttr('disabled').show();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Especialidad':
                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.removeAttr('disabled').show();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Doctorado':
                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //  
                                                                                                                                                                        LicEnlinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        MaeEnLinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        break;
                                                                                                                                                case 'Matamoros':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.removeAttr('disabled').show();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.removeAttr('disabled').show();
                                                                                                                                                                        doctorado.removeAttr('disabled').show();
                                                                                                                                                                        //Tipo de programa -> Torreón
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Bachillerato':
                                                                                                                                                                                                                                                BachMatamoros.removeAttr('disabled').show();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.removeAttr('disabled').show();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.removeAttr('disabled').show();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Especialidad':
                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.removeAttr('disabled').show();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Doctorado':
                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //  
                                                                                                                                                                        LicEnlinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        MaeEnLinea.removeAttr('disabled', 'disabled').hide();
                                                                                                                                                                        break;

                                                                                                                        }
                                                                                                });
                                                                                                //
                                                                                                break;
                                                                        case 'En línea':
                                                                                                saltillo.removeAttr('disabled').show();
                                                                                                torreon.removeAttr('disabled').show();
                                                                                                monclova.removeAttr('disabled').show();
                                                                                                sabinas.removeAttr('disabled').show();
                                                                                                pNegras.removeAttr('disabled').show();
                                                                                                monterrey.removeAttr('disabled').show();
                                                                                                reynosa.removeAttr('disabled').show();
                                                                                                matamoros.removeAttr('disabled').show();

                                                                                                LicEnlinea.removeAttr('disabled', 'disabled').hide();
                                                                                                MaeEnLinea.removeAttr('disabled', 'disabled').hide();

                                                                                                $('#campusAspirante').prop('selectedIndex', 0);
                                                                                                $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                //Campus aspirante -> Tipo de programa
                                                                                                $('#campusAspirante').change(function () {
                                                                                                                        switch ($(this).val()) {
                                                                                                                                                case 'Saltillo':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.attr('disabled', 'disabled').hide();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.attr('disabled', 'disabled').hide();
                                                                                                                                                                        doctorado.attr('disabled', 'disabled').hide();
                                                                                                                                                                        //Tipo de programa -> Saltillo
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                LicEnlinea.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                MaeEnLinea.removeAttr('disabled').show();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //
                                                                                                                                                                        break;
                                                                                                                                                case 'Torreón':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.attr('disabled', 'disabled').hide();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.attr('disabled', 'disabled').hide();
                                                                                                                                                                        doctorado.attr('disabled', 'disabled').hide();
                                                                                                                                                                        //Tipo de programa -> Saltillo
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                LicEnlinea.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                MaeEnLinea.removeAttr('disabled').show();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //   
                                                                                                                                                                        break;
                                                                                                                                                case 'Monclova':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.attr('disabled', 'disabled').hide();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.attr('disabled', 'disabled').hide();
                                                                                                                                                                        doctorado.attr('disabled', 'disabled').hide();
                                                                                                                                                                        //Tipo de programa -> Saltillo
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                LicEnlinea.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                MaeEnLinea.removeAttr('disabled').show();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //        
                                                                                                                                                                        break;
                                                                                                                                                case 'Sabinas':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.attr('disabled', 'disabled').hide();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.attr('disabled', 'disabled').hide();
                                                                                                                                                                        doctorado.attr('disabled', 'disabled').hide();
                                                                                                                                                                        //Tipo de programa -> Saltillo
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                LicEnlinea.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                MaeEnLinea.removeAttr('disabled').show();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //     
                                                                                                                                                                        break;
                                                                                                                                                case 'Piedras Negras':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.attr('disabled', 'disabled').hide();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.attr('disabled', 'disabled').hide();
                                                                                                                                                                        doctorado.attr('disabled', 'disabled').hide();
                                                                                                                                                                        //Tipo de programa -> Saltillo
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                LicEnlinea.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                MaeEnLinea.removeAttr('disabled').show();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //   
                                                                                                                                                                        break;
                                                                                                                                                case 'Monterrey':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.attr('disabled', 'disabled').hide();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.attr('disabled', 'disabled').hide();
                                                                                                                                                                        doctorado.attr('disabled', 'disabled').hide();
                                                                                                                                                                        //Tipo de programa -> Saltillo
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                LicEnlinea.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                MaeEnLinea.removeAttr('disabled').show();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //   
                                                                                                                                                                        break;
                                                                                                                                                case 'Reynosa':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.attr('disabled', 'disabled').hide();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.attr('disabled', 'disabled').hide();
                                                                                                                                                                        doctorado.attr('disabled', 'disabled').hide();
                                                                                                                                                                        //Tipo de programa -> Saltillo
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                LicEnlinea.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                MaeEnLinea.removeAttr('disabled').show();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //   
                                                                                                                                                                        break;
                                                                                                                                                case 'Matamoros':
                                                                                                                                                                        $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        $('#tipoProgramaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                        bachillerato.attr('disabled', 'disabled').hide();
                                                                                                                                                                        licenciatura.removeAttr('disabled').show();
                                                                                                                                                                        maestria.removeAttr('disabled').show();
                                                                                                                                                                        especialidad.attr('disabled', 'disabled').hide();
                                                                                                                                                                        doctorado.attr('disabled', 'disabled').hide();
                                                                                                                                                                        //Tipo de programa -> Saltillo
                                                                                                                                                                        $('#tipoProgramaAspirante').change(function () {
                                                                                                                                                                                                switch ($(this).val()) {
                                                                                                                                                                                                                        case 'Licenciatura':
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);

                                                                                                                                                                                                                                                LicEnlinea.removeAttr('disabled').show();

                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                        case 'Maestría':
                                                                                                                                                                                                                                                MaeEnLinea.removeAttr('disabled').show();
                                                                                                                                                                                                                                                $('#programaAspirante').prop('selectedIndex', 0);
                                                                                                                                                                                                                                                BachSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSaltillo.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSaltillo.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspTorreon.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocTorreon.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonclova.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonclova.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspSabinas.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocSabinas.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaePiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspPiedras.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocPiedras.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMonterrey.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMonterrey.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspReynosa.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocReynosa.attr('disabled', 'disabled').hide();

                                                                                                                                                                                                                                                BachMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                LicMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                MaeMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                EspMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                DocMatamoros.attr('disabled', 'disabled').hide();
                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                }
                                                                                                                                                                        });
                                                                                                                                                                        //  
                                                                                                                                                                        break;

                                                                                                                        }
                                                                                                });
                                                                                                //
                                                                                                break;
                                                }
                        });
                        //
});

/***/ })
/******/ ]);