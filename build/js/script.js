"use strict";var e=0,t=document.querySelector(".slider__items"),c=t.offsetWidth;console.log(c),document.querySelector("#prev").addEventListener("click",(function(){(e+=300)>300&&(e=-c),t.style.left=e+"px"})),document.querySelector("#next").addEventListener("click",(function(){(e-=300)<-c&&(e=210),t.style.left=e+"px"}));
//# sourceMappingURL=script.js.map
