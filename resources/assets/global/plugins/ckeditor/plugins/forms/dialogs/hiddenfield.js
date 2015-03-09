/*
 Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or http://ckeditor.com/license
*/
<<<<<<< HEAD
CKEDITOR.dialog.add("hiddenfield",function(d){return{title:d.lang.forms.hidden.title,hiddenField:null,minWidth:350,minHeight:110,onShow:function(){delete this.hiddenField;var a=this.getParentEditor(),b=a.getSelection(),c=b.getSelectedElement();c&&(c.data("cke-real-element-type")&&"hiddenfield"==c.data("cke-real-element-type"))&&(this.hiddenField=c,c=a.restoreRealElement(this.hiddenField),this.setupContent(c),b.selectElement(this.hiddenField))},onOk:function(){var a=this.getValueOf("info","_cke_saved_name");
=======
<<<<<<< HEAD
CKEDITOR.dialog.add("hiddenfield",function(d){return{title:d.lang.forms.hidden.title,hiddenField:null,minWidth:350,minHeight:110,onShow:function(){delete this.hiddenField;var a=this.getParentEditor(),b=a.getSelection(),c=b.getSelectedElement();c&&(c.data("cke-real-element-type")&&"hiddenfield"==c.data("cke-real-element-type"))&&(this.hiddenField=c,c=a.restoreRealElement(this.hiddenField),this.setupContent(c),b.selectElement(this.hiddenField))},onOk:function(){var a=this.getValueOf("info","_cke_saved_name");
=======
<<<<<<< HEAD
CKEDITOR.dialog.add("hiddenfield",function(d){return{title:d.lang.forms.hidden.title,hiddenField:null,minWidth:350,minHeight:110,onShow:function(){delete this.hiddenField;var a=this.getParentEditor(),b=a.getSelection(),c=b.getSelectedElement();c&&(c.data("cke-real-element-type")&&"hiddenfield"==c.data("cke-real-element-type"))&&(this.hiddenField=c,c=a.restoreRealElement(this.hiddenField),this.setupContent(c),b.selectElement(this.hiddenField))},onOk:function(){var a=this.getValueOf("info","_cke_saved_name");
=======
<<<<<<< HEAD
CKEDITOR.dialog.add("hiddenfield",function(d){return{title:d.lang.forms.hidden.title,hiddenField:null,minWidth:350,minHeight:110,onShow:function(){delete this.hiddenField;var a=this.getParentEditor(),b=a.getSelection(),c=b.getSelectedElement();c&&(c.data("cke-real-element-type")&&"hiddenfield"==c.data("cke-real-element-type"))&&(this.hiddenField=c,c=a.restoreRealElement(this.hiddenField),this.setupContent(c),b.selectElement(this.hiddenField))},onOk:function(){var a=this.getValueOf("info","_cke_saved_name");
=======
CKEDITOR.dialog.add("hiddenfield",function(d){return{title:d.lang.forms.hidden.title,hiddenField:null,minWidth:350,minHeight:110,onShow:function(){delete this.hiddenField;var a=this.getParentEditor(),b=a.getSelection(),c=b.getSelectedElement();c&&(c.data("cke-real-partials-about-type")&&"hiddenfield"==c.data("cke-real-partials-about-type"))&&(this.hiddenField=c,c=a.restoreRealElement(this.hiddenField),this.setupContent(c),b.selectElement(this.hiddenField))},onOk:function(){var a=this.getValueOf("info","_cke_saved_name");
>>>>>>> 018f6b9d81e5d7bc15aa547482fadde9312e8040
>>>>>>> 065b76f90b2ff7ee69815b4ce700376e708acc55
>>>>>>> a1de9b143e16067bb77e823064c94d33d825d54e
>>>>>>> 0ca9bd85c649a9ede4372c3aeeb41ef4b7aae6e4
this.getValueOf("info","value");var b=this.getParentEditor(),a=CKEDITOR.env.ie&&!(8<=CKEDITOR.document.$.documentMode)?b.document.createElement('<input name="'+CKEDITOR.tools.htmlEncode(a)+'">'):b.document.createElement("input");a.setAttribute("type","hidden");this.commitContent(a);a=b.createFakeElement(a,"cke_hidden","hiddenfield");this.hiddenField?(a.replace(this.hiddenField),b.getSelection().selectElement(a)):b.insertElement(a);return!0},contents:[{id:"info",label:d.lang.forms.hidden.title,title:d.lang.forms.hidden.title,
elements:[{id:"_cke_saved_name",type:"text",label:d.lang.forms.hidden.name,"default":"",accessKey:"N",setup:function(a){this.setValue(a.data("cke-saved-name")||a.getAttribute("name")||"")},commit:function(a){this.getValue()?a.setAttribute("name",this.getValue()):a.removeAttribute("name")}},{id:"value",type:"text",label:d.lang.forms.hidden.value,"default":"",accessKey:"V",setup:function(a){this.setValue(a.getAttribute("value")||"")},commit:function(a){this.getValue()?a.setAttribute("value",this.getValue()):
a.removeAttribute("value")}}]}]}});