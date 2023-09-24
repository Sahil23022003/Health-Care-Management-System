!function(t,i,s){i.fn.touchwipe=function(t){var s={min_move_x:20,min_move_y:20,wipeLeft:function(){},wipeRight:function(){},wipeUp:function(){},wipeDown:function(){},preventDefaultEvents:!0};return t&&i.extend(s,t),this.each(function(){function t(){this.removeEventListener("touchmove",i),n=null,h=!1}function i(i){if(s.preventDefaultEvents&&i.preventDefault(),h){var e=i.touches[0].pageX,r=i.touches[0].pageY,l=n-e,a=o-r;Math.abs(l)>=s.min_move_x?(t(),l>0?s.wipeLeft():s.wipeRight()):Math.abs(a)>=s.min_move_y&&(t(),a>0?s.wipeDown():s.wipeUp())}}function e(t){1==t.touches.length&&(n=t.touches[0].pageX,o=t.touches[0].pageY,h=!0,this.addEventListener("touchmove",i,!1))}var n,o,h=!1;"ontouchstart"in document.documentElement&&this.addEventListener("touchstart",e,!1)}),this},i.elastislide=function(t,s){this.$el=i(s),this._init(t)},i.elastislide.defaults={speed:3e3,easing:"",imageW:190,margin:3,border:2,minItems:1,current:0,onClick:function(){return!1}},i.elastislide.prototype={_init:function(t){this.options=i.extend(!0,{},i.elastislide.defaults,t),this.$slider=this.$el.find("ul"),this.$items=this.$slider.children("li"),this.itemsCount=this.$items.length,this.$esCarousel=this.$slider.parent(),this._validateOptions(),this._configure(),this._addControls(),this._initEvents(),this.$slider.show(),this._slideToCurrent(!1)},_validateOptions:function(){this.options.speed<0&&(this.options.speed=450),this.options.margin<0&&(this.options.margin=4),this.options.border<0&&(this.options.border=1),(this.options.minItems<1||this.options.minItems>this.itemsCount)&&(this.options.minItems=1),this.options.current>this.itemsCount-1&&(this.options.current=0)},_configure:function(){this.current=this.options.current,this.visibleWidth=this.$esCarousel.width(),this.visibleWidth<this.options.minItems*(this.options.imageW+2*this.options.border)+(this.options.minItems-1)*this.options.margin?(this._setDim((this.visibleWidth-(this.options.minItems-1)*this.options.margin)/this.options.minItems),this._setCurrentValues(),this.fitCount=this.options.minItems):(this._setDim(),this._setCurrentValues()),this.$slider.css({width:this.sliderW})},_setDim:function(t){this.$items.css({marginRight:this.options.margin,width:t?t:this.options.imageW+2*this.options.border}).children("a").css({borderWidth:this.options.border})},_setCurrentValues:function(){this.itemW=this.$items.outerWidth(!0),this.sliderW=this.itemW*this.itemsCount,this.visibleWidth=this.$esCarousel.width(),this.fitCount=Math.floor(this.visibleWidth/this.itemW)},_addControls:function(){this.$navNext=i('<span class="es-nav-next">Next</span>'),this.$navPrev=i('<span class="es-nav-prev">Previous</span>'),i('<div class="es-nav"/>').append(this.$navPrev).append(this.$navNext).appendTo(this.$el)},_toggleControls:function(t,i){t&&i?1===i?"right"===t?this.$navNext.show():this.$navPrev.show():"right"===t?this.$navNext.hide():this.$navPrev.hide():(this.current===this.itemsCount-1||this.fitCount>=this.itemsCount)&&this.$navNext.hide()},_initEvents:function(){var s=this;i(t).on("resize.elastislide",function(t){s._reload(),clearTimeout(s.resetTimeout),s.resetTimeout=setTimeout(function(){s._slideToCurrent()},200)}),this.$navNext.on("click.elastislide",function(t){s._slide("right")}),this.$navPrev.on("click.elastislide",function(t){s._slide("left")}),this.$slider.on("click.elastislide","li",function(t){return s.options.onClick(i(this)),!1}),s.$slider.touchwipe({wipeLeft:function(){s._slide("right")},wipeRight:function(){s._slide("left")}})},reload:function(t){this._reload(),t&&t.call()},_reload:function(){var t=this;t._setCurrentValues(),t.visibleWidth<t.options.minItems*(t.options.imageW+2*t.options.border)+(t.options.minItems-1)*t.options.margin?(t._setDim((t.visibleWidth-(t.options.minItems-1)*t.options.margin)/t.options.minItems),t._setCurrentValues(),t.fitCount=t.options.minItems):(t._setDim(),t._setCurrentValues()),t.$slider.css({width:t.sliderW+10})},_slide:function(t,e,n,o){var h=parseFloat(this.$slider.css("margin-left"));if(e===s){var e,r=this.fitCount*this.itemW;if(0>r)return!1;if("right"===t&&this.sliderW-(Math.abs(h)+r)<this.visibleWidth)r=this.sliderW-(Math.abs(h)+this.visibleWidth)-this.options.margin,this._toggleControls("right",-1),this._toggleControls("left",1);else if("left"===t&&Math.abs(h)-r<0)r=Math.abs(h),this._toggleControls("left",-1),this._toggleControls("right",1);else{var l;l="right"===t?Math.abs(h)+this.options.margin+Math.abs(r):Math.abs(h)-this.options.margin-Math.abs(r),l>0?this._toggleControls("left",1):this._toggleControls("left",-1),l<this.sliderW-this.visibleWidth?this._toggleControls("right",1):this._toggleControls("right",-1)}e="right"===t?"-="+r:"+="+r}else{var l=Math.abs(e);Math.max(this.sliderW,this.visibleWidth)-l<this.visibleWidth&&(e=-(Math.max(this.sliderW,this.visibleWidth)-this.visibleWidth),0!==e&&(e+=this.options.margin),this._toggleControls("right",-1),l=Math.abs(e)),l>0?this._toggleControls("left",1):this._toggleControls("left",-1),Math.max(this.sliderW,this.visibleWidth)-this.visibleWidth>l+this.options.margin?this._toggleControls("right",1):this._toggleControls("right",-1)}i.fn.applyStyle=n===s?i.fn.animate:i.fn.css;var a={marginLeft:e};this.$slider.stop().applyStyle(a,i.extend(!0,[],{duration:this.options.speed,easing:this.options.easing,complete:function(){o&&o.call()}}))},_slideToCurrent:function(t){var i=this.current*this.itemW;this._slide("",-i,t)},add:function(t,i){this.$items=this.$items.add(t),this.itemsCount=this.$items.length,this._setDim(),this._setCurrentValues(),this.$slider.css({width:this.sliderW}),this._slideToCurrent(),i&&i.call(t)},setCurrent:function(t,i){this.current=t;var s=Math.abs(parseFloat(this.$slider.css("margin-left"))),e=s+this.visibleWidth,n=Math.abs(this.current*this.itemW);(n+this.itemW>e||s>n)&&this._slideToCurrent(),i&&i.call()},destroy:function(t){this._destroy(t)},_destroy:function(s){this.$el.off(".elastislide").removeData("elastislide"),i(t).off(".elastislide"),s&&s.call()}};var e=function(t){this.console&&console.error(t)};i.fn.elastislide=function(t){if("string"==typeof t){var s=Array.prototype.slice.call(arguments,1);this.each(function(){var n=i.data(this,"elastislide");return n?i.isFunction(n[t])&&"_"!==t.charAt(0)?void n[t].apply(n,s):void e("no such method '"+t+"' for elastislide instance"):void e("cannot call methods on elastislide prior to initialization; attempted to call method '"+t+"'")})}else this.each(function(){var s=i.data(this,"elastislide");s||i.data(this,"elastislide",new i.elastislide(t,this))});return this}}(window,jQuery);