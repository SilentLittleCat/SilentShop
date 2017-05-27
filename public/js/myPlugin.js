/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
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
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 43);
/******/ })
/************************************************************************/
/******/ ({

/***/ 43:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(9);


/***/ }),

/***/ 9:
/***/ (function(module, exports) {

$(function () {
    $.fn.carousel = function (options) {
        var $this = $(this),
            timer = null,
            options = options;

        function showNextImage() {
            var item_id = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

            var $currentImage = $this.find('.active').eq(0),
                $nextImage = null,
                id = $currentImage.attr('data-id'),
                nextId = item_id != null ? item_id : 1 + Number(id);

            if (item_id != null) {
                $nextImage = $this.find('.image').eq(item_id - 1);
            } else if (id == $this.attr('data-number')) {
                $nextImage = $this.find('.image').eq(0);
                nextId = 1;
            } else {
                $nextImage = $currentImage.next();
            }
            $currentImage.removeClass('active').stop(true, true).fadeOut(300);
            $nextImage.addClass('active').stop(true, true).fadeIn(300);
            $this.find('.indicator span').eq(id - 1).stop(true, true).css('width', 0);
            $this.find('.indicator span').eq(nextId - 1).stop(true, true).animate({
                width: '100%'
            }, options.interval, function () {
                $(this).css('width', 0);
                $(this).stop(true, true);
            });

            timer && clearTimeout(timer);
            timer = setTimeout(showNextImage, options.interval);
        }

        function init() {
            timer = setTimeout(showNextImage, options.interval);
            $this.find('.active').eq(0).stop(true, true).show();
            $this.find('.indicator span').eq(0).stop(true, true).css('width', 0).animate({
                width: '100%'
            }, options.interval, function () {
                $(this).css('width', 0);
                $(this).stop(true, true);
            });
        }

        $this.children('.indicators').on('click', '.indicator', function () {
            showNextImage($(this).attr('data-id'));
        });
        init();
    };

    $.fn.myTimer = function () {
        var $this = $(this),
            $hour = $this.find('.hour'),
            $minute = $this.find('.minute'),
            $second = $this.find('.second'),
            hour = Number($hour.text()),
            minute = Number($minute.text()),
            second = Number($second.text()),
            timer = null;

        function init() {
            timer && clearTimeout(timer);
            timer = setTimeout(updateTime, 1000);
        }

        function updateTime() {
            var remainSeconds = hour * 3600 + minute * 60 + second;
            timer && clearTimeout(timer);
            if (remainSeconds == 0) return;

            --remainSeconds;
            $hour.text(numberToString(hour = Math.floor(remainSeconds / 3600)));
            $minute.text(numberToString(minute = Math.floor(remainSeconds % 3600 / 60)));
            $second.text(numberToString(second = Math.floor(remainSeconds % 60)));

            timer = setTimeout(updateTime, 1000);
        }

        function numberToString(number) {
            if (number >= 10) return String(number);else return '0' + number;
        }

        init();
    };

    $.fn.sgZoom = function () {
        var $this = $(this),
            $image = $this.find('.image'),
            imageLeft = $image.offset().left,
            imageTop = $image.offset().top,
            imageWidth = $image.width(),
            imageHeight = $image.height(),
            $cursorBox = $this.find('.cursor-box'),
            $imageBox = $this.find('.image-box'),
            transitionTime = 500,
            isShow = false,
            cursorBoxWidth = imageWidth / 5,
            cursorBoxHeight = cursorBoxWidth * imageHeight / imageWidth,
            boxRatio = imageHeight / imageWidth,
            zoomRatio = imageWidth / cursorBoxWidth,
            mouseX = 0,
            mouseY = 0,
            updateMouseTimer = null;

        init();
        $this.hover(function () {
            if (inBox(event.pageX, event.pageY, imageLeft, imageTop, imageWidth, imageHeight)) {
                showImageBox();
                isShow = true;
            }
        }, function () {
            if (isShow) {
                hideImageBox();
                isShow = false;
            }
        }).mousemove(function () {
            if (isShow && !inBox(event.pageX, event.pageY, imageLeft, imageTop, imageWidth, imageHeight)) {
                hideImageBox();
                isShow = false;
            }

            if (isShow) {
                mouseX = event.pageX;
                mouseY = event.pageY;
                updateBox();
            }
        }).mousewheel(function () {
            event.preventDefault();

            if (event.deltaY < 0) {
                if (cursorBoxWidth + 10 <= imageWidth) {
                    cursorBoxWidth += 10;
                    cursorBoxHeight = cursorBoxWidth * boxRatio;
                    zoomRatio = imageWidth / cursorBoxWidth;
                    updateBox();
                } else if (cursorBoxWidth != imageWidth) {
                    cursorBoxWidth = imageWidth;
                    cursorBoxHeight = cursorBoxWidth * boxRatio;
                    zoomRatio = imageWidth / cursorBoxWidth;
                    updateBox();
                }
            } else {
                if (imageWidth / (cursorBoxWidth - 10) <= 8) {
                    cursorBoxWidth -= 10;
                    cursorBoxHeight = cursorBoxWidth * boxRatio;
                    zoomRatio = imageWidth / cursorBoxWidth;
                    updateBox();
                }
            }
        });

        function init() {
            $cursorBox.append($image.html()).css({
                width: cursorBoxWidth,
                height: cursorBoxHeight
            }).find('img').css({
                width: imageWidth,
                height: imageHeight
            });

            $imageBox.html($image.html()).find('img').css({
                width: imageWidth * zoomRatio,
                height: imageHeight * zoomRatio
            });

            // updateMouseTimer = setInterval(function() {
            //     if(1)
            //     {
            //         var left = mouseX - cursorBoxWidth / 2 - imageLeft,
            //             top = mouseY - cursorBoxHeight - imageTop,
            //             mostLeft = imageWidth - cursorBoxWidth,
            //             mostTop = imageHeight - cursorBoxHeight;
            //         // left = revisePos(left, 0, mostLeft);
            //         // top = revisePos(top, 0, mostTop);   

            //         $cursorBox.css({
            //             left: left,
            //             top: top
            //         });
            //     }
            // }, 10);
        }

        function inBox(x, y, left, top, width, height) {
            if (x >= left && x <= left + width && y >= top && y <= top + height) {
                return true;
            }
            return false;
        }

        function showImageBox() {
            $imageBox.animate({
                width: imageWidth,
                height: imageHeight,
                left: imageWidth + 10,
                top: 0,
                opacity: 1
            }, transitionTime);

            $image.addClass('darker');

            $cursorBox.animate({
                opacity: 1
            }, transitionTime);
        }

        function hideImageBox() {
            $imageBox.animate({
                width: '4%',
                height: '4%',
                left: '49%',
                top: '49%',
                opacity: 0
            }, transitionTime);

            $image.removeClass('darker');

            $cursorBox.animate({
                opacity: 0
            }, transitionTime);

            cursorBoxWidth = imageWidth / 5;
            cursorBoxHeight = cursorBoxWidth * boxRatio;
            zoomRatio = imageWidth / cursorBoxWidth;
        }

        function revisePos(x0, x1, x2) {
            return x0 < x1 ? x1 : x0 > x2 ? x2 : x0;
        }

        function updateBox() {
            var left = mouseX - cursorBoxWidth / 2 - imageLeft,
                top = mouseY - cursorBoxHeight / 2 - imageTop,
                mostLeft = imageWidth - cursorBoxWidth,
                mostTop = imageHeight - cursorBoxHeight;
            left = revisePos(left, 0, mostLeft);
            top = revisePos(top, 0, mostTop);

            $cursorBox.css({
                left: left - 4,
                top: top - 4,
                width: cursorBoxWidth,
                height: cursorBoxHeight
            }).find('img').css({
                left: -left,
                top: -top
            });

            $imageBox.find('img').css({
                left: -left * zoomRatio,
                top: -top * zoomRatio,
                width: imageWidth * zoomRatio,
                height: imageHeight * zoomRatio
            });
        }
    };
});

/***/ })

/******/ });