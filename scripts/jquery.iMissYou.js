//     jquery.IMissYou.js 1.0.0

//     (c) 2015 Hamza Bahlaouane
//     jquery.IMissYou may be freely distributed under the MIT license.
//     For all details and documentation:
//     https://github.com/Bahlaouane-Hamza/I-Miss-You
!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):"object"==typeof module&&module.exports?module.exports=function(i,n){return void 0===n&&(n="undefined"!=typeof window?require("jquery"):require("jquery")(i)),e(n),n}:e(jQuery)}(function(e){"use strict";e.iMissYou=function(i){function n(){d.attr("href",u.favicon.src)}function t(){d.attr("href",f)}function o(){e("<img/>")[0].src=u.favicon.src}var u=e.extend({},e.iMissYou.defaults,i),c=document.title,d=e("head").find('link[rel$="icon"]'),f=d.attr("href");u.favicon.enabled&&o(),e(document).bind("visibilitychange",function(){e(document).prop("title",document.hidden?u.title:c),u.favicon.enabled&&(e(document).prop("hidden")?n():t())})},e.iMissYou.defaults={title:"I Miss you !",favicon:{enabled:!0,src:"iMissYouFavicon.ico"}}});
