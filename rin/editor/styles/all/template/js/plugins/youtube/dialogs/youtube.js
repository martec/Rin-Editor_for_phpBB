/*
 Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or http://ckeditor.com/license
*/
CKEDITOR.dialog.add("youtube",function(b){return{title:b.lang.youtube.title,minWidth:270,minHeight:120,contents:[{id:"youtube",label:b.lang.youtube.title,elements:[{type:"text",id:"youtube",label:RinEditor["Video URL:"],"default":""}]}],onOk:function(){var a=this.getValueOf("youtube","youtube"),c="[youtube]";if(a)var d=a.match(/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=)([^#\&\?]*).*/),a=d&&11==d[2].length?d[2]:a.replace(/^[^v]+v.(.{11}).*/,"$1"),c=c+a+"[/youtube]";MyBBEditor.insertText(c,"",""+
b.name+"_2")}}});