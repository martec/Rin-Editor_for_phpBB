﻿phpbb.resizeTextArea=function(f,e){function a(b){var a=$(b).parent();a.hasClass("auto-resized")&&($(b).parent().css({height:"",resize:""}).removeClass("auto-resized"),c.resetCallback.call(b,a))}function d(b){function e(a){a+=parseInt(h.css("height"),10)-h.innerHeight();h.parent().css({height:a+"px",resize:"none"}).addClass("auto-resized");c.resizeCallback.call(b,h)}var g=$(window).height();if(g<c.minWindowHeight)a(b);else{var g=Math.min(Math.max(g-c.heightDiff,c.minHeight),c.maxHeight),h=$(b),d=parseInt(h.innerHeight(),
10),f=b.scrollHeight?b.scrollHeight:0;0>d||(d>g?e(g):f>d+5&&e(Math.min(g,f)))}}var c={minWindowHeight:500,minHeight:rinheight,maxHeight:rinmaxheight,heightDiff:200,resizeCallback:function(){},resetCallback:function(){}};phpbb.isTouch||(1<arguments.length&&(c=$.extend(c,e)),f.on("focus change keyup",function(){$(this).each(function(){d(this)})}).change(),$(window).resize(function(){f.each(function(){$(this).parent().hasClass("auto-resized")&&d(this)})}))};
$('textarea[name\x3d"message"], textarea[data-bbcode\x3d"true"]').attr("id","message");$("#message").length&&CKEDITOR.replace("message",rce_config);$("#signature").length&&CKEDITOR.replace("signature",rce_config);
if(parseInt(supext))CKEDITOR.on("instanceReady",function(f){$("button.button.button-icon-only").each(function(e){if(0>"bbcode-b bbcode-i bbcode-u bbcode-quote bbcode-code bbcode-list bbcode-list- bbcode-asterisk bbcode-img bbcode-url bbcode-flash bbcode-color".split(" ").indexOf($(this).attr("class").split(" ").pop())){document.getElementById("pbextbut")||$('\x3cspan id\x3d"pbextbut" class\x3d"cke_toolbar" role\x3d"toolbar"\x3e\x3c/span\x3e').appendTo(".cke_toolbox:last");e=$(this).attr("title");
var a="",d=$(this).children().attr("class");$(this).attr("onchange")&&(a='onchange\x3d"'+$(this).attr("onchange")+'"');$(this).attr("onclick")&&(a='onclick\x3d"'+$(this).attr("onclick")+'"');$(['\x3cspan class\x3d"cke_toolgroup button" role\x3d"presentation"\x3e','\x3ca id\x3d"rineditor_tbs" class\x3d"cke_button cke_button_off" title\x3d"'+e+'" '+a+' tabindex\x3d"-1" hidefocus\x3d"true" role\x3d"button" onblur\x3d"this.style.cssText \x3d this.style.cssText;"\x3e','\x3ci class\x3d"'+d+'" aria-hidden\x3d"true" style\x3d"vertical-align: middle;"\x3e\x3c/i\x3e',
"\x3c/a\x3e\x3c/span\x3e"].join("")).appendTo("#pbextbut")}})});