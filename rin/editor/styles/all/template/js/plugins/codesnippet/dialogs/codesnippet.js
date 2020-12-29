/*
 Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
(function(){CKEDITOR.dialog.add("code",function(b){var a=b._.code.langs,c=b.lang.codesnippet,e=document.documentElement.clientHeight,f=[],d;f.push([b.lang.common.notSet,""]);for(d in a)f.push([a[d],d]);a=CKEDITOR.document.getWindow().getViewPaneSize();b=Math.min(a.width-70,800);a=a.height/1.5;650>e&&(a=e-220);return{title:c.title,minHeight:200,resizable:CKEDITOR.DIALOG_RESIZE_NONE,contents:[{id:"info",elements:[{id:"code",type:"textarea",label:c.codeContents,setup:function(a){this.setValue(a.data.code)},
commit:function(a){a.setData("code",this.getValue())},required:!0,validate:CKEDITOR.dialog.validate.notEmpty(c.emptySnippetError),inputStyle:"cursor:auto;width:"+b+"px !important;height:"+a+"px !important;tab-size:4;text-align:left;","class":"cke_source"}]}]}})})();