"use strict";!function(t,e,n,i){t(".inputfile").each(function(){var e=t(this),n=e.next("label"),i=n.html();e.on("change",function(t){var e="";this.files&&this.files.length>1?e=(this.getAttribute("data-multiple-caption")||"").replace("{count}",this.files.length):t.target.value&&(e=t.target.value.split("\\").pop()),e?n.find("span").html(e):n.html(i)}),e.on("focus",function(){e.addClass("has-focus")}).on("blur",function(){e.removeClass("has-focus")})})}(jQuery,window,document);