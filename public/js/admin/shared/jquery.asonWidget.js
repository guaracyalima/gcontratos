/*
 * Ason Widget plugin
 * Author: @LoxDesign
 * Copyright (c) 2015 LoxDesign.net;
 */

;(function( $, window, document, undefined ){

    // Plugin version
    var version = '1.0';

    // Plugin constructor
    var asonWidget = function( elem, options ){
            this.elem = elem;
            this.$elem = $(elem);
            this.options = options;
            this.data = this._sanitizeData(this.$elem.data());
            this.init();
        };

    // Plugin prototype
    asonWidget.prototype = {

        defaults: {

            // General
            autoSelector:           '.ason-widget',
            type :                  undefined,
            target:                 undefined,
            find:                   undefined,
            parent:                 true,
            content:                false,

            delay:                  0,
            duration:               400,

            // Delete
            animation:              null,

            // Toggle
            animationOpen:          'slideDown',
            animationClose:         'slideUp',

            // Classes
            fullscreenClass:        'fullscreen',
            fullscreenOpenClass:    'fullscreen-open',
            loaderClass:            'spinner audiowave',
            toggleClass:            'toggle-closed',
            scrollbarClass:         'ps-wrapper',

            // Icons
            iconToggleOpen:         'fa fa-chevron-down',
            iconToggleClose:        'fa fa-chevron-up',
            iconExpand:             'fa fa-expand',
            iconContract:           'fa fa-compress',
            iconDelete:             'fa fa-times',
            iconRefresh:            'fa fa-refresh',
            iconSpin:               'fa-spin',

            // Scrollbar
            minHeight:              null,
            maxHeight:              null,
            height:                 null,

            // Draggable
            items:                  '.ui-drag-item',
            connectWith:            '.ui-drag-container',
            handle:                 '.ui-drag-handle',
            cancel:                 '.ui-drag-disabled',
            placeholder:            'ui-drag-placeholder',
            opacity:                0.8,
            revert:                 true,

            // Headers
            baseHeader:             'l-header-slide',
            header:                 'l-header-slide-1',
            headerPush:             'l-header-slide-push-1',
            headerOpen:             'l-header-slide-open',

            // Footer
            baseFooter:             'l-footer-slide',
            footer:                 'l-footer-slide-1',
            footerPush:             'l-footer-slide-push-1',
            footerOpen:             'l-footer-slide-open',

            // Sidebars
            baseSidebar:            'l-sidebar',
            sidebar:                'l-sidebar-1',
            sidebarHidden:          'l-sidebar-hidden',
            sidebarCompactLeft:     'l-sidebar-compact-left',
            sidebarCompactRight:    'l-sidebar-compact-right',
            sidebarCollapsedLeft:   'l-sidebar-collapsed-left',
            sidebarCollapsedRight:  'l-sidebar-collapsed-right',

            // Slidebars
            baseSlidebar:           'l-slidebar',
            slidebarLeft:           'l-slidebar-left-1',
            slidebarRight:          'l-slidebar-right-1',
            slidebarLeftPush:       'l-slidebar-left-push-1',
            slidebarRightPush:      'l-slidebar-right-push-1',
            slidebarStatic:         'l-slidebar-static',
            slidebarLeftOpen:       'l-slidebar-left-open',
            slidebarRightOpen:      'l-slidebar-right-open',

            isSlide:                undefined, // Not public
            isPush:                 false,
            isStatic:               false,
            isRight:                false,

            sizeXl:                 1408,
            sizeLg:                 1200,
            sizeMd:                 992,
            sizeSm:                 768,

            onAll:                  null,
            onFull:                 'sidebar',
            onXl:                   'sidebar',
            onLg:                   'sidebar',
            onMd:                   'compact',
            onSm:                   'collapsed',

            toAll:                  null,
            toFull:                 'compact',
            toXl:                   'compact',
            toLg:                   'compact',
            toMd:                   'collapsed',
            toSm:                   'hidden',

            animResize:             null,
            animAll:                null,
            animFull:               null, // ['animate', 'bounceIn', 'bounceOut'] ['animate', 'bounceIn', 'velocity', 'callout.bounce']
            animXl:                 null,
            animLg:                 null,
            animMd:                 null,
            animSm:                 null,

            // Main Menu
            collapsed:              true, // Start with collapsed menu (only level 1 items visible)
            closeSameLevel:         true, // Close elements on same level when opening new node.
            isNavHidden:            true,
            isRootHidden:           true,
            navScrollBar:           true,
            navHover:               true,

            navScroll:              true,
            navScrollDelay:         0,
            navScrollDuration:      400,
            navScrollOffset:        -150,

            navTheme:               'ason-nav',
            navSkin:                null,
            navUlOpen:              'ul-open',
            navUlClosed:            'ul-closed',
            navUlBack:              'ul-back',
            navLi:                  'node',         // assign node class to all "li" who have a submenu
            navLiRoot:              'root',         // assign root class to the first "li" who has a submenu
            navLiOpen:              'open',
            navLiClosed:            'closed',

            animInit:               'transition.slideDownIn',
            animInitStagger:        100,
            animInitDrag:           true,
            animOpen:               'transition.slideDownIn',
            animOpenStagger:        50,
            animOpenDrag:           true,
            animEasing:             'easeOutQuart'    // Velocity.js only, defaults to 'swing' with jquery animation.

        },

        init: function() {

            // Variables
            //--------------------------------------

            var widget = this;

            // Log
            widget.log = $.fn.asonwidget.log;

            // Config
            widget.config = $.extend( {}, widget.defaults, widget.options, widget.data );


            // Callback function setup
            $.each(widget.config, function(key, val){
                if(typeof val === "function"){
                    widget.$elem.on(key + ".ason", function() {
                        val(widget.$elem);
                    });
                }
            });


            // Type
            //--------------------------------------

            switch(widget.config.type) {
                case 'fullscreen':
                        this._fullscreen();
                    break;
                case 'delete':
                        this._delete();
                    break;
                case 'refresh':
                        this._refresh();
                    break;
                case 'toggle':
                        this._toggle();
                    break;
                case 'scrollbar':
                        this._scrollbar();
                    break;
                case 'draggable':
                        this._draggable();
                    break;
                case 'header':
                        this._header_footer(true);
                    break;
                case 'footer':
                        this._header_footer(false);
                    break;
                case 'sidebar':
                        this._sidebar();
                    break;
                case 'menu':
                        this._menu();
                    break;
                default:
                    widget.log("Type is not defined or it's not valid");
            }


            return this;
        },

        // Core methods
        //----------------------------------------------------------------------------

        // Full screen
        _fullscreen : function(){

            var widget = this,
                config = widget.config,
                elem   = widget.$elem;

            var expandMarkup = $.fn.asonwidget.expandMarkup(config),
                contractMarkup = $.fn.asonwidget.contractMarkup(config);

            if(config.content) widget.$elem.html(expandMarkup);

            elem.on('click', function (e){
                e.preventDefault();

                if(typeof config.target === 'undefined'){
                    widget.log('ERROR: Please define a target attribute for - FULLSCREEN - widget!');
                    return;
                }

                elem.trigger("beforeInit.ason");

                if(config.find){
                    var parent = elem.parents(config.find);
                    var element = parent.find(config.target);
                }else{
                    var element = (config.parent) ? elem.parents(config.target) : $(config.target);
                }

                if(element.hasClass(config.fullscreenClass)){

                    if(config.content) elem.html(expandMarkup);

                    $('body').removeClass(config.fullscreenOpenClass);
                    element.removeClass(config.fullscreenClass);

                }else{

                    if(config.content) elem.html(contractMarkup);

                    $('body').addClass(config.fullscreenOpenClass);
                    element.addClass(config.fullscreenClass);
                }

                elem.trigger("afterInit.ason");

            });

        },

        // Delete
        _delete : function() {

            var widget = this,
                config = widget.config,
                elem   = widget.$elem;

            var deleteMarkup = $.fn.asonwidget.deleteMarkup(config);

            if(config.content) widget.$elem.html(deleteMarkup);

            elem.on('click', function (e){
                e.preventDefault();

                if(typeof config.target === 'undefined'){
                    widget.log('ERROR: Please define a target attribute for - DELETE - widget!!');
                    return;
                }

                elem.trigger("beforeInit.ason");

                if(config.find){
                    var parent = elem.parents(config.find);
                    var element = parent.find(config.target);
                }else{
                    var element = (config.parent) ? elem.parents(config.target) : $(config.target);
                }

                $('body').removeClass(config.fullscreenOpenClass);

                if ($.Velocity) {

                    if(config.animation == null || config.animation == 'slideUp' || config.animation == 'fadeOut') {

                        var anim = (config.animation) ? config.animation : {display: "none", opacity: 0};
                        var dur = (config.animation) ? config.duration : 0;

                        element.velocity(
                            anim,
                            {
                                delay: config.delay,
                                duration: dur,
                                begin: function (elements) {
                                    elem.trigger("begin.ason");
                                },
                                complete: function (elements) {
                                    elem.trigger("complete.ason");
                                    element.remove();
                                }
                            }
                        );

                    }else{
                        widget.log("Animation is not defined or it's not valid");
                        return;
                    }

                }else{

                    switch(config.animation) {
                        case null:
                            element.remove();
                            break;
                        case 'slideUp':
                            element.slideUp(config.duration, function() {
                                elem.trigger("complete.ason");
                                element.remove();
                            });
                            break;
                        case 'fadeOut':
                            element.fadeOut(config.duration, function() {
                                elem.trigger("complete.ason");
                                element.remove();
                            });
                            break;
                        default:
                            widget.log("Animation is not defined or it's not valid");
                    }
                }

                elem.trigger("afterInit.ason");

            });

        },

        // Refresh
        _refresh : function(){

            var widget = this,
                config = widget.config,
                elem   = widget.$elem;

            var refreshMarkup = $.fn.asonwidget.refreshMarkup(config.iconRefresh),
                refreshSpinMarkup = $.fn.asonwidget.refreshMarkup(config.iconRefresh +' '+ config.iconSpin);

            if(config.content) widget.$elem.html(refreshMarkup);

            elem.on('click', function (e){
                e.preventDefault();

                if(typeof config.target === 'undefined'){
                    widget.log('ERROR: Please define a target attribute for - REFRESH - widget!');
                    return;
                }

                elem.trigger("beforeInit.ason");

                if(config.find){
                    var parent = elem.parents(config.find);
                    var element = parent.find(config.target);
                }else{
                    var element = (config.parent) ? elem.parents(config.target) : $(config.target);
                }

                if(element.not(config.loaderClass)) {

                    if(config.content) widget.$elem.html(refreshSpinMarkup);

                    element.addClass(config.loaderClass);

                    setTimeout(function(){

                        if(config.content) widget.$elem.html(refreshMarkup);

                        element.removeClass(config.loaderClass);

                    }, config.duration);
                }

                elem.trigger("afterInit.ason");

            });

        },

        // Toggle
        _toggle : function() {

            var anim,
                widget = this,
                config = widget.config,
                elem = widget.$elem;

            var toggleOpenMarkup = $.fn.asonwidget.toggleOpenMarkup(config),
                toggleCloseMarkup = $.fn.asonwidget.toggleCloseMarkup(config);

            if(config.content) widget.$elem.html(toggleOpenMarkup);


            elem.on('click', function (e){
                e.preventDefault();

                if(typeof config.target === 'undefined'){
                    widget.log('ERROR: Please define a target attribute for - TOGGLE - widget!!');
                    return;
                }

                elem.trigger("beforeInit.ason");

                if(config.find){
                    var parent = elem.parents(config.find);
                    var element = parent.find(config.target);
                }else{
                    var element = (config.parent) ? elem.parents(config.target) : $(config.target);
                }

                if(element.hasClass(config.toggleClass)){

                    if(config.content) elem.html(toggleOpenMarkup);

                    anim = (config.animationOpen) ? config.animationOpen : 'slideDown';

                }else{

                    if(config.content) elem.html(toggleCloseMarkup);

                    anim = (config.animationClose) ? config.animationClose : 'slideUp';
                }

                if ($.Velocity) {

                    element.velocity(
                        anim,
                        {
                            delay: config.delay,
                            duration: config.duration,
                            begin: function (elements) {
                                elem.trigger("begin.ason");
                            },
                            complete: function (elements) {
                                widget._toggleActItemClass(element,config);
                                elem.trigger("complete.ason");
                            }
                        }
                    );

                }else{

                    switch(anim) {
                        case 'slideDown':
                            element.slideDown(config.duration, function() {
                                widget._toggleActItemClass(element,config);
                                elem.trigger("complete.ason");
                            });
                            break;
                        case 'slideUp':
                            element.slideUp(config.duration, function() {
                                widget._toggleActItemClass(element,config);
                                elem.trigger("complete.ason");
                            });
                            break;
                        case 'fadeIn':
                            element.fadeIn(config.duration, function() {
                                widget._toggleActItemClass(element,config);
                                elem.trigger("complete.ason");
                            });
                            break;
                        case 'fadeOut':
                            element.fadeOut(config.duration, function() {
                                widget._toggleActItemClass(element,config);
                                elem.trigger("complete.ason");
                            });
                            break;
                    }
                }

                elem.trigger("afterInit.ason");

            });
        },

        // Scrollbar
        _scrollbar : function() {

            var widget = this,
                config = widget.config,
                elem   = widget.$elem;

            if(typeof $.fn.perfectScrollbar === 'undefined'){
                widget.log('ERROR: Please include the perfect-scrollbar.min.js file!!');
                return;
            }

            elem.trigger("beforeInit.ason");

            if(config.minHeight){
                elem.css({ "min-height": config.minHeight });
            }

            if(config.maxHeight){
                elem.css({ "max-height": config.maxHeight });
            }

            if(config.height){
                elem.css({ "height": config.height });
            }

            elem.addClass(config.scrollbarClass).perfectScrollbar();

            elem.trigger("afterInit.ason");

        },

        // Draggable
        _draggable : function() {

            var widget = this,
                config = widget.config,
                elem   = widget.$elem;

            if(typeof jQuery.ui === 'undefined'){
                widget.log('ERROR: Please include the jquery-ui.min.js file!!');
                return;
            }

            elem.trigger("beforeInit.ason");

            var container = config.connectWith.substring(1);

            elem.addClass(container).sortable({
                items: config.items,
                connectWith: config.connectWith,
                handle: config.handle,
                cancel: config.cancel,
                placeholder: config.placeholder,
                opacity: config.opacity,
                revert: config.revert,
                delay: config.delay,
                forcePlaceholderSize: true,
                forceHelperSize: true,

                update: function( event, ui ) {
                    elem.trigger("update.ason");
                }
            });

            elem.trigger("afterInit.ason");

        },


        // Header and Footer
        _header_footer : function(type) {
            var widget = this,
                config = widget.config,
                elem   = widget.$elem;

            var baseClass, mainClass, slideOpenClass, slidePushClass;

            elem.trigger("beforeInit.ason");

            var element = (config.target) ? $(config.target) : elem;

            if(config.isPush)
                $('body').addClass('l-slide-push');


            baseClass = (type) ? config.baseHeader : config.baseFooter;
            mainClass = (type) ? config.header     : config.footer;

            slideOpenClass = (type) ? config.headerOpen : config.footerOpen;
            slidePushClass = (type) ? config.headerPush : config.footerPush;

            element.addClass(baseClass);
            element.addClass(mainClass);

            // Click Event
            elem.on('click', function (e){
                e.preventDefault();

                if(typeof config.target === 'undefined'){
                    widget.log('ERROR: Please define a target attribute for the widget!');
                    return;
                }

                elem.trigger("beforeClick.ason");

                if(element.hasClass(slideOpenClass)) { // Hide header

                    widget._animateWidget(element,'hide',slideOpenClass);

                    if(config.isPush){ $('body').removeClass(slidePushClass); }

                }else{  // Show header

                    element.addClass(slideOpenClass);

                    widget._animateWidget(element,'show');

                    if(config.isPush){ $('body').addClass(slidePushClass); }
                }

                elem.trigger("afterClick.ason");

            });


            // Resize Event
            _headerFooterOnResize = function () {

                elem.trigger("beforeResize.ason");

                element.removeAttr( "style" );

                elem.trigger("afterResize.ason");
            };

            $(window).on( 'resize orientationchange', _headerFooterOnResize );


            elem.trigger("afterInit.ason");
        },

        // Sidebar
        _sidebar : function() {

            var widget = this,
                config = widget.config,
                elem   = widget.$elem;

            var currentClass,
                fromClass, toClass,
                resizedFromClass, resizedToClass,
                clickedFromClass, clickedToClass,
                slideOpenClass, slidePushClass,
                initialClass = 'l-initial';

            elem.trigger("beforeInit.ason");

            var element = (config.target) ? $(config.target) : elem;

            currentClass = resizedFromClass = this._getCurrentClass(true);

            this._setBaseClass(element);

            if(config.isPush || config.isStatic)
                $('body').addClass('l-slide-push');

            if(config.isRight)
                element.addClass('l-sidebar-right')
            else
                element.addClass('l-sidebar-left')

            element.addClass(currentClass).addClass(initialClass);

            // Click Event
            elem.on('click', function (e){
                e.preventDefault();

                if(typeof config.target === 'undefined'){
                    widget.log('ERROR: Please define a target attribute for - SIDEBAR - widget!');
                    return;
                }

                elem.trigger("beforeClick.ason");

                element.removeAttr('style');

                if(config.isSlide){ // Is slidebar

                    if(config.isStatic){
                        element.addClass(config.slidebarStatic);
                    }

                    if(config.isSlide == 'left'){
                        slideOpenClass = config.slidebarLeftOpen;
                        slidePushClass = config.slidebarLeftPush;
                    }else{
                        slideOpenClass = config.slidebarRightOpen;
                        slidePushClass = config.slidebarRightPush;
                    }

                    if(element.hasClass(slideOpenClass)) { // Hide slidebar

                        widget._animateWidget(element,'hide',slideOpenClass);

                        if(config.isPush){ $('body').removeClass(slidePushClass); }


                    }else{  // Show slidebar

                        element.addClass(slideOpenClass);

                        widget._animateWidget(element,'show');

                        if(config.isPush){ $('body').addClass(slidePushClass); }

                    }

                }else{ // Is sidebar

                    if(element.hasClass(initialClass)){
                        fromClass = widget._getCurrentClass(true);
                        if(fromClass != resizedFromClass){
                            element.removeClass(resizedFromClass);
                            element.addClass(fromClass);
                        }
                    }else{
                        toClass = widget._getCurrentClass(false);
                        if(toClass != resizedToClass){
                            element.removeClass(resizedToClass);
                            element.addClass(toClass);
                        }
                    }

                    fromClass = widget._getCurrentClass(true);
                    toClass = widget._getCurrentClass(false);

                    if(fromClass != toClass){

                        if(element.hasClass(fromClass)) { // Hide sidebar

                            element.removeClass(fromClass).removeClass(initialClass);

                            widget._animateWidget(element,'hide');

                            element.addClass(toClass);

                            clickedFromClass = toClass;

                        }else if(element.hasClass(toClass)){ // Show sidebar

                            element.removeClass(toClass).addClass(initialClass);

                            widget._animateWidget(element,'show');

                            element.addClass(fromClass);

                            clickedToClass = fromClass;

                        }
                    }

                }

                elem.trigger("afterClick.ason");

            });


            // Resize Event
            _sidebarOnResize = function () {

                elem.trigger("beforeResize.ason");

                if(config.isSlide){

                    currentClass = widget._getCurrentClass(true);

                    widget._setBaseClass(element);

                    if(resizedFromClass != currentClass){

                        if(clickedFromClass != currentClass){
                            element.removeClass(clickedFromClass);
                        }

                        element.removeAttr('style');

                        element.removeClass(resizedFromClass);

                        widget._animateWidget(element,'resize');

                        element.addClass(currentClass);

                        resizedFromClass = currentClass;

                    }

                }else{

                    if(element.hasClass(initialClass)){

                        currentClass = widget._getCurrentClass(true);
                        widget._setBaseClass(element);

                        if(resizedFromClass != currentClass){

                            if(clickedFromClass != currentClass){
                                element.removeClass(clickedFromClass);
                            }

                            element.removeAttr('style');

                            element.removeClass(resizedFromClass);

                            widget._animateWidget(element,'resize');

                            element.addClass(currentClass);

                            resizedFromClass = currentClass;

                        }
                    }else{

                        currentClass = widget._getCurrentClass(false);
                        widget._setBaseClass(element);

                        if(resizedToClass != currentClass){

                            if(clickedToClass != currentClass){
                                element.removeClass(clickedToClass);
                            }

                            element.removeAttr('style');

                            element.removeClass(resizedToClass);

                            widget._animateWidget(element,'resize');

                            element.addClass(currentClass);

                            resizedToClass = currentClass;

                        }
                    }

                }

                elem.trigger("afterResize.ason");
            };

            $(window).on( 'resize orientationchange', _sidebarOnResize );

            elem.trigger("afterInit.ason");

        },

        // Main Menu
        _menu : function() {


            var widget = this,
                config = widget.config,
                elem   = widget.$elem,
                parentUntilRoot;

            elem.trigger("beforeInit.ason");

            elem.addClass(config.navTheme);

            if(config.navSkin)
                elem.addClass(config.navSkin);

            if(config.collapsed){
                elem.find('ul').addClass(config.navUlClosed);
            }else{
                elem.find('ul').addClass(config.navUlOpen);
            }

            if(config.isNavHidden && !$.Velocity)
                elem.hide();


            // Get node elements, and add classes for styling
            var node = elem.find('li:has(ul)');

            node.each(function(index, val) {

                $(this).addClass(config.navLi);

                parentUntilRoot = $(this).parentsUntil(widget.elem, 'ul').length;

                if(parentUntilRoot == 0)
                    $(this).addClass(config.navLiRoot);

                if(config.collapsed){
                    $(this).addClass(config.navLiClosed);
                }else{
                    $(this).addClass(config.navLiOpen);
                }

                $(this).children('ul').addClass('level-' + ( parentUntilRoot + 1 ));
            });


            // Get active node elements, and add classes for initial opening
            var activeNode = elem.find('li.active:has(ul)');

            activeNode.each(function(index, val) {

                if(config.isRootHidden && $(this).hasClass(config.navLiRoot) && widget._isSidebarContracted($(this))){

                }else{
                    $(this).removeClass(config.navLiClosed).addClass(config.navLiOpen);

                    $(this).children('ul').removeClass(config.navUlClosed).addClass(config.navUlOpen);
                }

            });


            // Set node click and hover elements, preferably <a> but node links can be <span> also

            // Click Event
            node.children(':first-child').on('click', function(e) {

                elem.trigger("beforeClick.ason");

                var currentNode = $(this);

                widget._animateMenu(currentNode, true);

                elem.trigger("afterClick.ason");

                // Nodes can't be links
                e.preventDefault();
            });


            // Hover Event
            if ((!isMobile.any) && config.navHover){

                var rootNode = elem.find('.' + config.navLiRoot).children(':first-child');

                rootNode.on('mouseenter',function(){

                    elem.trigger("beforeHover.ason");

                    var currentNode = $(this);

                    if(!widget._isSidebarContracted(currentNode))
                        return false;

                    widget._animateMenu(currentNode, false);

                    elem.trigger("afterHover.ason");

                });

            }

            // Initial Load Effect
            if(config.isNavHidden){

                elem.trigger("beforeLoad.ason");

                if ($.Velocity && config.animInit) {
                    elem.children().velocity(
                        config.animInit,
                        {   stagger: config.animInitStagger,
                            drag: config.animInitDrag,
                            complete: function (){
                                $(this).removeAttr('style');
                            }
                        }
                    );
                } else {
                    elem.fadeIn('slow').removeClass(config.hiddenClass);
                }

                elem.trigger("afterLoad.ason");
            }

            // Initialize Scrollbar
            if(config.navScrollBar){
                if(typeof $.fn.perfectScrollbar === 'undefined'){
                    widget.log('ERROR: Please include the perfect-scrollbar.min.js file!!');
                }else{
                    elem.find('.level-1').addClass('ul-scroll').perfectScrollbar();
                }
            }

            elem.trigger("afterInit.ason");
        },


        // Helper methods
        //----------------------------------------------------------------------------


        _closeSameLevel: function(currentNode){

            var widget = this,
                config = widget.config,
                close_items = currentNode.closest('ul').children('.'+ config.navLiOpen).not(currentNode.parent()).children('ul');

            close_items.addClass(config.navUlBack);

            // Velocity.js
            if ($.Velocity) {
                close_items.velocity({
                    height: 0
                }, {
                    duration: config.duration,
                    easing: config.animEasing,
                    display: 'none',
                    delay: 100,
                    complete: function() {
                        close_items.removeClass(config.navUlBack);
                        widget._setNodeClass(close_items.parent(), true)
                    }
                });

                // jQuery fallback
            } else {

                close_items.delay(100).slideUp( config.duration, function() {
                    //$(this).hide().css('height', '0');
                    close_items.removeClass(config.navUlBack);
                    widget._setNodeClass(close_items.parent(), true);
                });

            }

        },

        _animateMenu: function(currentNode, ev){
            var widget = this,
                config = widget.config,
                parent = currentNode.parent(),
                el = parent.children('ul').first(), // first list after current link
                isOpen = parent.hasClass(config.navLiOpen);


            // close other elements on same level if opening (in collapsed and compact mode always close)
            if(ev){
                if (config.closeSameLevel && !isOpen)
                    widget._closeSameLevel(currentNode);

            }else{
                if (!isOpen)
                    widget._closeSameLevel(currentNode);
            }


            // force auto height of element so actual height can be extracted
            el.css({ 'height': 'auto' });

            if (!isOpen && $.Velocity && config.animOpen){

                el.find(' > li, li.'+ config.navLiOpen +' > ul > li').css({
                    'opacity': 0
                }).velocity('stop')
                    .velocity(config.animOpen,
                    {   stagger: config.animOpenStagger,
                        drag: config.animOpenDrag,
                        complete: function () {
                            $(this).removeAttr('style');
                        }
                    }
                );
            }

            // Velocity.js animate element
            if ($.Velocity) {
                el.velocity('stop').velocity({
                    translateZ: 0, // optional hardware-acceleration is automatic on mobile
                    height: isOpen ? [0, el.outerHeight()] : [el.outerHeight(), 0]
                }, {
                    queue: false,
                    duration: config.duration,
                    easing: config.animEasing,
                    display: isOpen ? 'none' : 'block',
                    begin: widget._setNodeClass(parent, isOpen),
                    complete: function() {
                        if (!isOpen) $(this).css('height', 'auto');

                        if(ev && config.navScroll){

                            var currentNode;
                            if(widget._isSidebarContracted($(this)))
                                currentNode = $(this).parents('.root');
                            else
                                currentNode = $(this);

                            currentNode.velocity("scroll", {
                                delay: config.navScrollDelay,
                                duration: config.navScrollDuration,
                                offset: config.navScrollOffset,
                                mobileHA: false
                            });
                        }
                    }
                });

                // jQuery fallback animate element
            } else {
                widget._setNodeClass(parent, isOpen);

                if (isOpen)
                    el.slideUp(config.duration);
                else
                    el.slideDown(config.duration);

            }

        },

        // Function for updating node class
        _setNodeClass: function (el, isOpen) {
            var widget = this,
                config = widget.config,
                openClass = config.navLiOpen,
                closedClass = config.navLiClosed;

            if (isOpen) {
                el.removeClass(openClass).addClass(closedClass);
            } else {
                el.removeClass(closedClass).addClass(openClass);
            }
        },


        _animateWidget: function(element, switchTo, slideClass){

            var widget = this,
                config = widget.config,
                currentAnim,
                ww;

            switch(switchTo) {
                case 'show':
                case 'hide':

                        ww = $(window).width();

                        if(config.animAll){
                            currentAnim = config.animAll;
                        }else{
                            if (ww >= config.sizeXl) { currentAnim = config.animFull; }
                            if (ww <  config.sizeXl && ww >= config.sizeLg) { currentAnim = config.animXl; }
                            if (ww <  config.sizeLg && ww >= config.sizeMd) { currentAnim = config.animLg; }
                            if (ww <  config.sizeMd && ww >= config.sizeSm) { currentAnim = config.animMd; }
                            if (ww <  config.sizeSm) { currentAnim = config.animSm; }
                        }
                    break;
                case 'resize':

                        currentAnim = config.animResize;

                    break;
                default:
                    widget.log("ERROR: No type specified !");
            }

            if(currentAnim === null){
                element.removeClass(slideClass);
                return;
            }

            switch(switchTo) {
                case 'show':

                        if(currentAnim[0] && currentAnim[1])
                            widget._animateElement(element,currentAnim[0],currentAnim[1], slideClass);

                    break;
                case 'hide':

                        if(currentAnim[2] && currentAnim[3]) {
                            widget._animateElement(element, currentAnim[2], currentAnim[3], slideClass);
                        }else if(currentAnim[0] && currentAnim[2]){
                            widget._animateElement(element,currentAnim[0], currentAnim[2], slideClass);
                        }else{
                            element.removeClass(slideClass);
                        }

                    break;
                case 'resize':

                        if(currentAnim[0] && currentAnim[1])
                            widget._animateElement(element,currentAnim[0],currentAnim[1]);

                    break;
                default:
                    widget.log("ERROR: No type specified !");
            }

        },


        _animateElement: function(element,type,effect,slideClass){

            var widget = this;

            if(type == 'animate'){
                element.addClass('animated')
            }else{
                element.removeClass('animated')
            }

            switch(type) {
                case 'animate':

                        element.addClass(effect).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            element.removeClass(effect);
                            if(typeof(slideClass) !== 'undefined')
                                element.removeClass(slideClass);
                        });

                    break;
                case 'velocity':

                        if ($.Velocity) {
                            element.velocity(effect, {
                                display: null,
                                complete: function () {
                                    element.removeAttr( "style" );
                                    if (typeof(slideClass) !== 'undefined')
                                        element.removeClass(slideClass);
                                }
                            });
                        }else{
                            widget.log('ERROR: Please include the velocity library!!');
                        }

                    break;
                case 'ason':

                        element.addClass(effect);
                        setTimeout(function(){
                            element.removeClass(effect);
                            if(typeof(slideClass) !== 'undefined')
                                element.removeClass(slideClass);
                        },500)

                    break;
                default:
                    widget.log("ERROR: No type specified !");
            }
        },


        // Toggle Class
        _getCurrentClass: function(ev) {
            var widget = this,
                config = widget.config,
                currentClass, currentType, full;


            if(ev && config.onAll)

                currentClass = widget._getCurrentClassByType(config.onAll);

            else if(!ev && config.toAll)

                currentClass = widget._getCurrentClassByType(config.toAll);

            else{

                full = ev ? config.onFull : config.toFull;

                currentClass = widget._getCurrentClassByType(full);

                currentType = widget._getCurrentType(ev);

                if(currentType){
                    currentClass = widget._getCurrentClassByType(currentType);
                }

            }

            return currentClass;

        },

        _getCurrentType: function(ev){
            var widget = this,
                config = widget.config,
                currentType,
                ww;

            ww = $(window).width();

            if (ww < config.sizeXl) { currentType = ev ? config.onXl : config.toXl; }
            if (ww < config.sizeLg) { currentType = ev ? config.onLg : config.toLg; }
            if (ww < config.sizeMd) { currentType = ev ? config.onMd : config.toMd; }
            if (ww < config.sizeSm) { currentType = ev ? config.onSm : config.toSm; }

            return currentType;
        },

        _getCurrentClassByType: function(type) {
            var widget = this,
                config = widget.config,
                currentType;

            switch(type) {
                case 'sidebar':
                    currentType = config.sidebar;
                    config.isSlide = false;
                    break;
                case 'hidden':
                    currentType = config.sidebarHidden;
                    config.isSlide = false;
                    break;
                case 'compact':
                    currentType = config.isRight ? config.sidebarCompactRight : config.sidebarCompactLeft;
                    config.isSlide = false;
                    break;
                case 'collapsed':
                    currentType = config.isRight ? config.sidebarCollapsedRight: config.sidebarCollapsedLeft;
                    config.isSlide = false;
                    break;
                case 'slidebar-left':
                    currentType = config.slidebarLeft;
                    config.isSlide = 'left';
                    break;
                case 'slidebar-right':
                    currentType = config.slidebarRight;
                    config.isSlide = 'right';
                    break;
                default:
                    widget.log("ERROR: No type specified !");
            }

            return currentType;
        },

        _setBaseClass: function(element){

            var widget = this,
                config = widget.config;

            if(config.isSlide){ // Is slidebar
                element.removeClass(config.baseSidebar)
                    .removeClass(config.sidebar)
                    .removeClass(config.sidebarHidden)
                    .removeClass(config.sidebarCompactLeft)
                    .removeClass(config.sidebarCompactRight)
                    .removeClass(config.sidebarCollapsedLeft)
                    .removeClass(config.sidebarCollapsedRight);

                element.addClass(config.baseSlidebar);

            }else{ // Is sidebar
                element.removeClass(config.baseSlidebar)
                    .removeClass(config.slidebarLeft)
                    .removeClass(config.slidebarRight)
                    .removeClass(config.slidebarLeftPush)
                    .removeClass(config.slidebarRightPush)
                    .removeClass(config.slidebarStatic)
                    .removeClass(config.slidebarLeftOpen)
                    .removeClass(config.slidebarRightOpen);

                $('body').removeClass(config.slidebarLeftPush)
                    .removeClass(config.slidebarRightPush);

                element.addClass(config.baseSidebar);
            }

        },

        _isSidebarContracted: function(node){

            var widget = this,
                config = widget.config,
                compactLeft    = '.'+config.sidebarCompactLeft,
                compactRight   = '.'+config.sidebarCompactRight,
                collapsedLeft  = '.'+config.sidebarCollapsedLeft,
                collapsedRight = '.'+config.sidebarCollapsedRight;

            if(
                node.isChildOf(compactLeft) ||
                node.isChildOf(compactRight) ||
                node.isChildOf(collapsedLeft) ||
                node.isChildOf(collapsedRight)
            ) return true;

            return false;

        },

        // Toggle Class
        _toggleActItemClass: function(element,config) {
            element.hasClass(config.toggleClass) ? element.removeClass(config.toggleClass) : element.addClass(config.toggleClass);
        },

        // Convert to lowercase
        _lowerCase: function(s) {
            return (s || '').toLowerCase();
        },

        // Sanitize data
        _sanitizeData: function(data){
            var sanitizedData = {}, val, shortName;

            for (var p in data) {
                // allow props to be accessed sans 'ason' prefix and log the overrides
                if (data.hasOwnProperty(p) && /^ason[A-Z]+/.test(p) ) {
                    val = data[p];
                    shortName = p.match(/^ason(.*)/)[1].replace(/^[A-Z]/, this._lowerCase);
                    sanitizedData[shortName] = val;
                }
            }

            return sanitizedData;
        },

        _is_touch_device: function () {
            return 'ontouchstart' in window // works on most browsers
            || 'onmsgesturechange' in window; // works on ie10
        }

    }


    // Ason Widget
    //----------------------------------------------------------------------------
    $.fn.isChildOf = function(b){
        return (this.parents(b).length > 0);
    };

    $.fn.asonwidget = function( options ) {

        return this.each(function() {
            if (!$.data(this, 'asonWidget')) {
                $.data(this, 'asonWidget', new asonWidget( this, options ));
            }
        });

    };


    $.fn.asonwidget.defaults = asonWidget.prototype.defaults;


    // Public functions
    //----------------------------------------------------------------------------

    // Fullscreen expand markup
    //--------------------------------------
    $.fn.asonwidget.expandMarkup = function(config) {
        return '<i class="'+ config.iconExpand +'"></i>';
    };

    // Fullscreen contract markup
    //--------------------------------------
    $.fn.asonwidget.contractMarkup = function(config) {
        return '<i class="'+ config.iconContract +'"></i>';
    };

    // Delete markup
    //--------------------------------------
    $.fn.asonwidget.deleteMarkup = function(config) {
        return '<i class="'+ config.iconDelete +'"></i>';
    };

    // Refresh markup
    //--------------------------------------
    $.fn.asonwidget.refreshMarkup = function(icon) {
        return '<i class="'+ icon +'"></i>';
    };

    // Toggle open
    //--------------------------------------
    $.fn.asonwidget.toggleOpenMarkup = function(config) {
        return '<i class="'+ config.iconToggleOpen +'"></i>';
    };

    // Toggle close
    //--------------------------------------
    $.fn.asonwidget.toggleCloseMarkup = function(config) {
        return '<i class="'+ config.iconToggleClose +'"></i>';
    };

    // Helpers
    //--------------------------------------

    // Version
    $.fn.asonwidget.version = function() { return 'Ason Widget: ' + version; };

    // Logger
    $.fn.asonwidget.log = function log() {
        if (window.console && console.log)
            console.log('[ason] ' + Array.prototype.join.call(arguments, ' ') );
    };

    // Automatically find and run ason widgets
    $(document).ready(function() {
        $( $.fn.asonwidget.defaults.autoSelector ).asonwidget();
    });


})( jQuery, window , document );


/*
 * isMobile plugin - https://github.com/kaimallea/isMobile
 */
(function(i){var e=/iPhone/i,n=/iPod/i,o=/iPad/i,t=/(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,r=/Android/i,d=/BlackBerry/i,s=/Opera Mini/i,a=/IEMobile/i,b=/(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,h=RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)","i"),c=function(i,e){return i.test(e)},l=function(i){var l=i||navigator.userAgent;this.apple={phone:c(e,l),ipod:c(n,l),tablet:c(o,l),device:c(e,l)||c(n,l)||c(o,l)},this.android={phone:c(t,l),tablet:!c(t,l)&&c(r,l),device:c(t,l)||c(r,l)},this.other={blackberry:c(d,l),opera:c(s,l),windows:c(a,l),firefox:c(b,l),device:c(d,l)||c(s,l)||c(a,l)||c(b,l)},this.seven_inch=c(h,l),this.any=this.apple.device||this.android.device||this.other.device||this.seven_inch},v=i.isMobile=new l;v.Class=l})(window);
