"use strict";if(null!=document.getElementById("send")&&(document.getElementById("send").onclick=function(){var e=document.getElementById("country");localStorage.setItem("country",e.value);var t=document.getElementById("city");localStorage.setItem("city",t.value);var n=document.getElementById("street");localStorage.setItem("street",n.value);var a=document.getElementById("house");localStorage.setItem("house",a.value);var i=document.getElementById("flat");localStorage.setItem("flat",i.value);var l=document.getElementById("promocode");localStorage.setItem("promocode",l.value);var c=document.getElementById("surname");localStorage.setItem("surname",c.value);var s=document.getElementById("name");localStorage.setItem("name",s.value);var r=document.getElementById("email");localStorage.setItem("email",r.value);var o=document.getElementById("tel");localStorage.setItem("tel",o.value)}),null!=document.querySelector(".slider__items")){var e=document.querySelector(".slider__items"),t=e.offsetWidth,n=-400,a=document.getElementsByClassName("main-slider__item").length,i=t/a;document.querySelector("#prev").addEventListener("click",(function(){(n+=i)>i&&(n=-t),e.style.left=n+"px"})),document.querySelector("#next").addEventListener("click",(function(){(n-=i)<-t&&(n=0),e.style.left=n+"px"}))}document.getElementById("open-btn").onclick=function(){document.getElementById("nav").classList.add("disable"),document.getElementById("open-nav").classList.add("active")},document.getElementById("close-btn").onclick=function(){document.getElementById("nav").classList.remove("disable"),document.getElementById("open-nav").classList.remove("active"),c.innerHTML=""};var l,c=document.getElementById("content");function s(e){for(var t=0,n=0;n<e.length;n++)t+=e[n];return t}if(document.getElementById("item-1").onclick=function(){c.innerHTML='<p class="aside-content__header">Board games</p>\n        <div class="aside-content__list">\n            <ul>\n                <li>\n                    <a href="#">battle cry (49)</a>\n                </li>\n                <li>\n                    <a href="#">Warhammer 40k (400)</a>\n                </li>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href="#">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href="#">Warhammer: Underworlds (22)</a>\n                </li>\n                <li>\n                    <a href="#">Blood Bowl (28)</a>\n                </li>\n                <li>\n                    <a href="#">Nercomunda (21)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href="#">Warhammer: Underworlds (22)</a>\n                </li>\n                <li>\n                    <a href="#">Killtem (4)</a>\n                </li>\n            </ul>\n        </div>'},document.getElementById("item-2").onclick=function(){document.getElementById("content").innerHTML='<p class="aside-content__header">Warhammer 40000</p>\n        <div class="aside-content__list">\n            <ul>\n                <li>\n                    <a href="#">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href="#">Warhammer: Underworlds (22)</a>\n                </li>\n                <li>\n                    <a href="#">Blood Bowl (28)</a>\n                </li>\n                <li>\n                    <a href="#">Nercomunda (21)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href="#">battle cry (49)</a>\n                </li>\n                <li>\n                    <a href="#">Warhammer 40k (400)</a>\n                </li>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href="#">Warhammer: Underworlds (22)</a>\n                </li>\n                <li>\n                    <a href="#">Killtem (4)</a>\n                </li>\n            </ul>\n        </div>'},document.getElementById("item-3").onclick=function(){document.getElementById("content").innerHTML='<p class="aside-content__header">Magic: the Gathering</p>\n        <div class="aside-content__list">\n            <ul>\n                <li>\n                    <a href="#">Warhammer 40k (400)</a>\n                </li>\n                <li>\n                    <a href="#">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href="#">battle cry (49)</a>\n                </li>\n                <li>\n                    <a href="#">Warhammer 40k (400)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href="#">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href="#">Killtem (4)</a>\n                </li>\n                <li>\n                    <a href="#">Nercomunda (21)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href="#">Warhammer 40k (400)</a>\n                </li>\n                <li>\n                    <a href="#">Nercomunda (21)</a>\n                </li>\n            </ul>\n        </div>'},document.getElementById("item-4").onclick=function(){document.getElementById("content").innerHTML='<p class="aside-content__header">Game accessories</p>\n        <div class="aside-content__list">\n            <ul>\n                <li>\n                    <a href="#">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href="#">Killtem (4)</a>\n                </li>\n                <li>\n                    <a href="#">Nercomunda (21)</a>\n                </li>\n            </ul><ul>\n                <li>\n                    <a href="#">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href="#">Killtem (4)</a>\n                </li>\n                <li>\n                    <a href="#">Nercomunda (21)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href="#">Warhammer: Underworlds (22)</a>\n                </li>\n                <li>\n                    <a href="#">Killtem (4)</a>\n                </li>\n                <li>\n                <a href="#">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href="#">Lord of the Rings(16)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href="#">Blood Bowl (28)</a>\n                </li>\n                <li>\n                    <a href="#">Nercomunda (21)</a>\n                </li>\n            </ul>\n        </div>'},document.getElementById("item-5").onclick=function(){c.innerHTML='<p class="aside-content__header">Paints</p>\n        <div class="aside-content__list">\n        <ul>\n            <li>\n                <a href="#">battle cry (49)</a>\n            </li>\n            <li>\n                <a href="#">Warhammer 40k (400)</a>\n            </li>\n        </ul>\n        <ul>\n            <li>\n                <a href="#">Warhammer: Underworlds (22)</a>\n            </li>\n            <li>\n                <a href="#">Killtem (4)</a>\n            </li>\n        </ul>\n        <ul>\n            <li>\n                <a href="#">Lord of the Rings(16)</a>\n            </li>\n            <li>\n                <a href="#">Warhammer: Underworlds (22)</a>\n            </li>\n            <li>\n                <a href="#">Blood Bowl (28)</a>\n            </li>\n            <li>\n                <a href="#">Nercomunda (21)</a>\n            </li>\n        </ul>\n    </div>'},document.getElementById("item-6").onclick=function(){c.innerHTML='<p class="aside-content__header">Goods for children</p>\n        <div class="aside-content__list">\n        <ul>\n            <li>\n                <a href="#">battle cry (49)</a>\n            </li>\n            <li>\n                <a href="#">Warhammer 40k (400)</a>\n            </li>\n        </ul>\n        <ul>\n            <li>\n                <a href="#">Warhammer: Underworlds (22)</a>\n            </li>\n            <li>\n                <a href="#">Killtem (4)</a>\n            </li>\n        </ul>\n        <ul>\n        <li>\n        <a href="#">Warhammer 40k (400)</a>\n        </li>\n            <li>\n                <a href="#">Warhammer: Underworlds (22)</a>\n            </li>\n            <li>\n                <a href="#">Blood Bowl (28)</a>\n            </li>\n            <li>\n                <a href="#">Nercomunda (21)</a>\n            </li>\n        </ul>\n    </div>'},document.getElementById("item-7").onclick=function(){document.getElementById("content").innerHTML='<p class="aside-content__header">Accessories for modeling</p>\n        <div class="aside-content__list">\n            <ul>\n                <li>\n                    <a href="#">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href="#">Killtem (4)</a>\n                </li>\n                <li>\n                    <a href="#">Nercomunda (21)</a>\n                </li>\n            </ul><ul>\n                <li>\n                    <a href="#">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href="#">Killtem (4)</a>\n                </li>\n                <li>\n                    <a href="#">Nercomunda (21)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href="#">Warhammer: Underworlds (22)</a>\n                </li>\n                <li>\n                    <a href="#">Killtem (4)</a>\n                </li>\n                <li>\n                <a href="#">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href="#">Lord of the Rings(16)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href="#">Blood Bowl (28)</a>\n                </li>\n                <li>\n                    <a href="#">Nercomunda (21)</a>\n                </li>\n            </ul>\n        </div>'},loadURL=function(e){var t=new XMLHttpRequest;return t.open("GET",e,!1),t.send(null),t.responseText},null!=document.getElementsByClassName("cart")&&document.getElementById("cart")){var r=document.getElementsByClassName("cart"),o=document.getElementById("cart");r[0].onclick=function(){this.classList.contains("active-cart")?(this.classList.remove("active-cart"),this.innerHTML='Add to cart \n        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">\n            <path d="M8.146 19.5557C8.90539 19.5557 9.521 18.9401 9.521 18.1807C9.521 17.4213 8.90539 16.8057 8.146 16.8057C7.3866 16.8057 6.771 17.4213 6.771 18.1807C6.771 18.9401 7.3866 19.5557 8.146 19.5557Z" fill="white"/>\n            <path d="M16.5 19.5557C17.2594 19.5557 17.875 18.9401 17.875 18.1807C17.875 17.4213 17.2594 16.8057 16.5 16.8057C15.7406 16.8057 15.125 17.4213 15.125 18.1807C15.125 18.9401 15.7406 19.5557 16.5 19.5557Z" fill="white"/>\n            <path d="M20.2155 3.28185C20.1587 3.21175 20.087 3.15511 20.0056 3.11602C19.9242 3.07692 19.8352 3.05633 19.745 3.05574H7.02163L7.41886 4.27796H18.9444L17.3127 11.6113H8.14608L5.3533 2.76852C5.32309 2.67468 5.27063 2.58955 5.2004 2.52039C5.13017 2.45122 5.04425 2.40007 4.94997 2.37129L2.44441 1.60129C2.36737 1.57762 2.28642 1.56935 2.20618 1.57696C2.12594 1.58457 2.04799 1.60791 1.97677 1.64565C1.83294 1.72186 1.72528 1.85209 1.67747 2.00768C1.62965 2.16328 1.64561 2.33149 1.72182 2.47532C1.79803 2.61915 1.92826 2.72681 2.08385 2.77463L4.27774 3.44685L7.08274 12.308L6.08052 13.1268L6.00108 13.2063C5.75317 13.492 5.61266 13.8552 5.60373 14.2333C5.59481 14.6115 5.71804 14.9809 5.95219 15.278C6.11875 15.4805 6.33041 15.6413 6.57023 15.7474C6.81005 15.8535 7.07137 15.902 7.3333 15.8891H17.5327C17.6948 15.8891 17.8503 15.8247 17.9649 15.7101C18.0795 15.5955 18.1439 15.44 18.1439 15.278C18.1439 15.1159 18.0795 14.9604 17.9649 14.8458C17.8503 14.7312 17.6948 14.6668 17.5327 14.6668H7.23552C7.16515 14.6644 7.09659 14.6439 7.03646 14.6073C6.97633 14.5707 6.92666 14.5191 6.89226 14.4577C6.85785 14.3963 6.83987 14.327 6.84006 14.2566C6.84024 14.1862 6.85858 14.117 6.8933 14.0557L8.36608 12.8335H17.8016C17.9429 12.837 18.081 12.7914 18.1924 12.7044C18.3038 12.6175 18.3817 12.4947 18.4127 12.3568L20.35 3.80129C20.3686 3.71019 20.3661 3.61604 20.3428 3.52603C20.3195 3.43601 20.276 3.3525 20.2155 3.28185V3.28185Z" fill="white"/>\n        </svg>'):(this.classList.toggle("active-cart"),this.innerHTML="Item in the cart");var e=document.getElementsByClassName("active-cart").length;o.textContent=e,0==e?o.classList.add("anactive"):(0!=e||o.classList.contains("anactive"))&&o.classList.remove("anactive")},r[1].onclick=function(){this.classList.contains("active-cart")?(this.classList.remove("active-cart"),this.innerHTML='Add to cart \n        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">\n            <path d="M8.146 19.5557C8.90539 19.5557 9.521 18.9401 9.521 18.1807C9.521 17.4213 8.90539 16.8057 8.146 16.8057C7.3866 16.8057 6.771 17.4213 6.771 18.1807C6.771 18.9401 7.3866 19.5557 8.146 19.5557Z" fill="white"/>\n            <path d="M16.5 19.5557C17.2594 19.5557 17.875 18.9401 17.875 18.1807C17.875 17.4213 17.2594 16.8057 16.5 16.8057C15.7406 16.8057 15.125 17.4213 15.125 18.1807C15.125 18.9401 15.7406 19.5557 16.5 19.5557Z" fill="white"/>\n            <path d="M20.2155 3.28185C20.1587 3.21175 20.087 3.15511 20.0056 3.11602C19.9242 3.07692 19.8352 3.05633 19.745 3.05574H7.02163L7.41886 4.27796H18.9444L17.3127 11.6113H8.14608L5.3533 2.76852C5.32309 2.67468 5.27063 2.58955 5.2004 2.52039C5.13017 2.45122 5.04425 2.40007 4.94997 2.37129L2.44441 1.60129C2.36737 1.57762 2.28642 1.56935 2.20618 1.57696C2.12594 1.58457 2.04799 1.60791 1.97677 1.64565C1.83294 1.72186 1.72528 1.85209 1.67747 2.00768C1.62965 2.16328 1.64561 2.33149 1.72182 2.47532C1.79803 2.61915 1.92826 2.72681 2.08385 2.77463L4.27774 3.44685L7.08274 12.308L6.08052 13.1268L6.00108 13.2063C5.75317 13.492 5.61266 13.8552 5.60373 14.2333C5.59481 14.6115 5.71804 14.9809 5.95219 15.278C6.11875 15.4805 6.33041 15.6413 6.57023 15.7474C6.81005 15.8535 7.07137 15.902 7.3333 15.8891H17.5327C17.6948 15.8891 17.8503 15.8247 17.9649 15.7101C18.0795 15.5955 18.1439 15.44 18.1439 15.278C18.1439 15.1159 18.0795 14.9604 17.9649 14.8458C17.8503 14.7312 17.6948 14.6668 17.5327 14.6668H7.23552C7.16515 14.6644 7.09659 14.6439 7.03646 14.6073C6.97633 14.5707 6.92666 14.5191 6.89226 14.4577C6.85785 14.3963 6.83987 14.327 6.84006 14.2566C6.84024 14.1862 6.85858 14.117 6.8933 14.0557L8.36608 12.8335H17.8016C17.9429 12.837 18.081 12.7914 18.1924 12.7044C18.3038 12.6175 18.3817 12.4947 18.4127 12.3568L20.35 3.80129C20.3686 3.71019 20.3661 3.61604 20.3428 3.52603C20.3195 3.43601 20.276 3.3525 20.2155 3.28185V3.28185Z" fill="white"/>\n        </svg>'):(this.classList.toggle("active-cart"),this.innerHTML="Item in the cart");var e=document.getElementsByClassName("active-cart").length;o.textContent=e,0==e?o.classList.add("anactive"):(0!=e||o.classList.contains("anactive"))&&o.classList.remove("anactive")},r[2].onclick=function(){this.classList.contains("active-cart")?(this.classList.remove("active-cart"),this.innerHTML='Add to cart \n        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">\n            <path d="M8.146 19.5557C8.90539 19.5557 9.521 18.9401 9.521 18.1807C9.521 17.4213 8.90539 16.8057 8.146 16.8057C7.3866 16.8057 6.771 17.4213 6.771 18.1807C6.771 18.9401 7.3866 19.5557 8.146 19.5557Z" fill="white"/>\n            <path d="M16.5 19.5557C17.2594 19.5557 17.875 18.9401 17.875 18.1807C17.875 17.4213 17.2594 16.8057 16.5 16.8057C15.7406 16.8057 15.125 17.4213 15.125 18.1807C15.125 18.9401 15.7406 19.5557 16.5 19.5557Z" fill="white"/>\n            <path d="M20.2155 3.28185C20.1587 3.21175 20.087 3.15511 20.0056 3.11602C19.9242 3.07692 19.8352 3.05633 19.745 3.05574H7.02163L7.41886 4.27796H18.9444L17.3127 11.6113H8.14608L5.3533 2.76852C5.32309 2.67468 5.27063 2.58955 5.2004 2.52039C5.13017 2.45122 5.04425 2.40007 4.94997 2.37129L2.44441 1.60129C2.36737 1.57762 2.28642 1.56935 2.20618 1.57696C2.12594 1.58457 2.04799 1.60791 1.97677 1.64565C1.83294 1.72186 1.72528 1.85209 1.67747 2.00768C1.62965 2.16328 1.64561 2.33149 1.72182 2.47532C1.79803 2.61915 1.92826 2.72681 2.08385 2.77463L4.27774 3.44685L7.08274 12.308L6.08052 13.1268L6.00108 13.2063C5.75317 13.492 5.61266 13.8552 5.60373 14.2333C5.59481 14.6115 5.71804 14.9809 5.95219 15.278C6.11875 15.4805 6.33041 15.6413 6.57023 15.7474C6.81005 15.8535 7.07137 15.902 7.3333 15.8891H17.5327C17.6948 15.8891 17.8503 15.8247 17.9649 15.7101C18.0795 15.5955 18.1439 15.44 18.1439 15.278C18.1439 15.1159 18.0795 14.9604 17.9649 14.8458C17.8503 14.7312 17.6948 14.6668 17.5327 14.6668H7.23552C7.16515 14.6644 7.09659 14.6439 7.03646 14.6073C6.97633 14.5707 6.92666 14.5191 6.89226 14.4577C6.85785 14.3963 6.83987 14.327 6.84006 14.2566C6.84024 14.1862 6.85858 14.117 6.8933 14.0557L8.36608 12.8335H17.8016C17.9429 12.837 18.081 12.7914 18.1924 12.7044C18.3038 12.6175 18.3817 12.4947 18.4127 12.3568L20.35 3.80129C20.3686 3.71019 20.3661 3.61604 20.3428 3.52603C20.3195 3.43601 20.276 3.3525 20.2155 3.28185V3.28185Z" fill="white"/>\n        </svg>'):(this.classList.toggle("active-cart"),this.innerHTML="Item in the cart");var e=document.getElementsByClassName("active-cart").length;o.textContent=e,0==e?o.classList.add("anactive"):(0!=e||o.classList.contains("anactive"))&&o.classList.remove("anactive")},r[3].onclick=function(){this.classList.contains("active-cart")?(this.classList.remove("active-cart"),this.innerHTML='Add to cart \n        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">\n            <path d="M8.146 19.5557C8.90539 19.5557 9.521 18.9401 9.521 18.1807C9.521 17.4213 8.90539 16.8057 8.146 16.8057C7.3866 16.8057 6.771 17.4213 6.771 18.1807C6.771 18.9401 7.3866 19.5557 8.146 19.5557Z" fill="white"/>\n            <path d="M16.5 19.5557C17.2594 19.5557 17.875 18.9401 17.875 18.1807C17.875 17.4213 17.2594 16.8057 16.5 16.8057C15.7406 16.8057 15.125 17.4213 15.125 18.1807C15.125 18.9401 15.7406 19.5557 16.5 19.5557Z" fill="white"/>\n            <path d="M20.2155 3.28185C20.1587 3.21175 20.087 3.15511 20.0056 3.11602C19.9242 3.07692 19.8352 3.05633 19.745 3.05574H7.02163L7.41886 4.27796H18.9444L17.3127 11.6113H8.14608L5.3533 2.76852C5.32309 2.67468 5.27063 2.58955 5.2004 2.52039C5.13017 2.45122 5.04425 2.40007 4.94997 2.37129L2.44441 1.60129C2.36737 1.57762 2.28642 1.56935 2.20618 1.57696C2.12594 1.58457 2.04799 1.60791 1.97677 1.64565C1.83294 1.72186 1.72528 1.85209 1.67747 2.00768C1.62965 2.16328 1.64561 2.33149 1.72182 2.47532C1.79803 2.61915 1.92826 2.72681 2.08385 2.77463L4.27774 3.44685L7.08274 12.308L6.08052 13.1268L6.00108 13.2063C5.75317 13.492 5.61266 13.8552 5.60373 14.2333C5.59481 14.6115 5.71804 14.9809 5.95219 15.278C6.11875 15.4805 6.33041 15.6413 6.57023 15.7474C6.81005 15.8535 7.07137 15.902 7.3333 15.8891H17.5327C17.6948 15.8891 17.8503 15.8247 17.9649 15.7101C18.0795 15.5955 18.1439 15.44 18.1439 15.278C18.1439 15.1159 18.0795 14.9604 17.9649 14.8458C17.8503 14.7312 17.6948 14.6668 17.5327 14.6668H7.23552C7.16515 14.6644 7.09659 14.6439 7.03646 14.6073C6.97633 14.5707 6.92666 14.5191 6.89226 14.4577C6.85785 14.3963 6.83987 14.327 6.84006 14.2566C6.84024 14.1862 6.85858 14.117 6.8933 14.0557L8.36608 12.8335H17.8016C17.9429 12.837 18.081 12.7914 18.1924 12.7044C18.3038 12.6175 18.3817 12.4947 18.4127 12.3568L20.35 3.80129C20.3686 3.71019 20.3661 3.61604 20.3428 3.52603C20.3195 3.43601 20.276 3.3525 20.2155 3.28185V3.28185Z" fill="white"/>\n        </svg>'):(this.classList.toggle("active-cart"),this.innerHTML="Item in the cart");var e=document.getElementsByClassName("active-cart").length;o.textContent=e,0==e?o.classList.add("anactive"):(0!=e||o.classList.contains("anactive"))&&o.classList.remove("anactive")},r[4].onclick=function(){this.classList.contains("active-cart")?(this.classList.remove("active-cart"),this.innerHTML='Add to cart \n        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">\n            <path d="M8.146 19.5557C8.90539 19.5557 9.521 18.9401 9.521 18.1807C9.521 17.4213 8.90539 16.8057 8.146 16.8057C7.3866 16.8057 6.771 17.4213 6.771 18.1807C6.771 18.9401 7.3866 19.5557 8.146 19.5557Z" fill="white"/>\n            <path d="M16.5 19.5557C17.2594 19.5557 17.875 18.9401 17.875 18.1807C17.875 17.4213 17.2594 16.8057 16.5 16.8057C15.7406 16.8057 15.125 17.4213 15.125 18.1807C15.125 18.9401 15.7406 19.5557 16.5 19.5557Z" fill="white"/>\n            <path d="M20.2155 3.28185C20.1587 3.21175 20.087 3.15511 20.0056 3.11602C19.9242 3.07692 19.8352 3.05633 19.745 3.05574H7.02163L7.41886 4.27796H18.9444L17.3127 11.6113H8.14608L5.3533 2.76852C5.32309 2.67468 5.27063 2.58955 5.2004 2.52039C5.13017 2.45122 5.04425 2.40007 4.94997 2.37129L2.44441 1.60129C2.36737 1.57762 2.28642 1.56935 2.20618 1.57696C2.12594 1.58457 2.04799 1.60791 1.97677 1.64565C1.83294 1.72186 1.72528 1.85209 1.67747 2.00768C1.62965 2.16328 1.64561 2.33149 1.72182 2.47532C1.79803 2.61915 1.92826 2.72681 2.08385 2.77463L4.27774 3.44685L7.08274 12.308L6.08052 13.1268L6.00108 13.2063C5.75317 13.492 5.61266 13.8552 5.60373 14.2333C5.59481 14.6115 5.71804 14.9809 5.95219 15.278C6.11875 15.4805 6.33041 15.6413 6.57023 15.7474C6.81005 15.8535 7.07137 15.902 7.3333 15.8891H17.5327C17.6948 15.8891 17.8503 15.8247 17.9649 15.7101C18.0795 15.5955 18.1439 15.44 18.1439 15.278C18.1439 15.1159 18.0795 14.9604 17.9649 14.8458C17.8503 14.7312 17.6948 14.6668 17.5327 14.6668H7.23552C7.16515 14.6644 7.09659 14.6439 7.03646 14.6073C6.97633 14.5707 6.92666 14.5191 6.89226 14.4577C6.85785 14.3963 6.83987 14.327 6.84006 14.2566C6.84024 14.1862 6.85858 14.117 6.8933 14.0557L8.36608 12.8335H17.8016C17.9429 12.837 18.081 12.7914 18.1924 12.7044C18.3038 12.6175 18.3817 12.4947 18.4127 12.3568L20.35 3.80129C20.3686 3.71019 20.3661 3.61604 20.3428 3.52603C20.3195 3.43601 20.276 3.3525 20.2155 3.28185V3.28185Z" fill="white"/>\n        </svg>'):(this.classList.toggle("active-cart"),this.innerHTML="Item in the cart");var e=document.getElementsByClassName("active-cart").length;o.textContent=e,0==e?o.classList.add("anactive"):(0!=e||o.classList.contains("anactive"))&&o.classList.remove("anactive")},r[5].onclick=function(){this.classList.contains("active-cart")?(this.classList.remove("active-cart"),this.innerHTML='Add to cart \n        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">\n            <path d="M8.146 19.5557C8.90539 19.5557 9.521 18.9401 9.521 18.1807C9.521 17.4213 8.90539 16.8057 8.146 16.8057C7.3866 16.8057 6.771 17.4213 6.771 18.1807C6.771 18.9401 7.3866 19.5557 8.146 19.5557Z" fill="white"/>\n            <path d="M16.5 19.5557C17.2594 19.5557 17.875 18.9401 17.875 18.1807C17.875 17.4213 17.2594 16.8057 16.5 16.8057C15.7406 16.8057 15.125 17.4213 15.125 18.1807C15.125 18.9401 15.7406 19.5557 16.5 19.5557Z" fill="white"/>\n            <path d="M20.2155 3.28185C20.1587 3.21175 20.087 3.15511 20.0056 3.11602C19.9242 3.07692 19.8352 3.05633 19.745 3.05574H7.02163L7.41886 4.27796H18.9444L17.3127 11.6113H8.14608L5.3533 2.76852C5.32309 2.67468 5.27063 2.58955 5.2004 2.52039C5.13017 2.45122 5.04425 2.40007 4.94997 2.37129L2.44441 1.60129C2.36737 1.57762 2.28642 1.56935 2.20618 1.57696C2.12594 1.58457 2.04799 1.60791 1.97677 1.64565C1.83294 1.72186 1.72528 1.85209 1.67747 2.00768C1.62965 2.16328 1.64561 2.33149 1.72182 2.47532C1.79803 2.61915 1.92826 2.72681 2.08385 2.77463L4.27774 3.44685L7.08274 12.308L6.08052 13.1268L6.00108 13.2063C5.75317 13.492 5.61266 13.8552 5.60373 14.2333C5.59481 14.6115 5.71804 14.9809 5.95219 15.278C6.11875 15.4805 6.33041 15.6413 6.57023 15.7474C6.81005 15.8535 7.07137 15.902 7.3333 15.8891H17.5327C17.6948 15.8891 17.8503 15.8247 17.9649 15.7101C18.0795 15.5955 18.1439 15.44 18.1439 15.278C18.1439 15.1159 18.0795 14.9604 17.9649 14.8458C17.8503 14.7312 17.6948 14.6668 17.5327 14.6668H7.23552C7.16515 14.6644 7.09659 14.6439 7.03646 14.6073C6.97633 14.5707 6.92666 14.5191 6.89226 14.4577C6.85785 14.3963 6.83987 14.327 6.84006 14.2566C6.84024 14.1862 6.85858 14.117 6.8933 14.0557L8.36608 12.8335H17.8016C17.9429 12.837 18.081 12.7914 18.1924 12.7044C18.3038 12.6175 18.3817 12.4947 18.4127 12.3568L20.35 3.80129C20.3686 3.71019 20.3661 3.61604 20.3428 3.52603C20.3195 3.43601 20.276 3.3525 20.2155 3.28185V3.28185Z" fill="white"/>\n        </svg>'):(this.classList.toggle("active-cart"),this.innerHTML="Item in the cart");var e=document.getElementsByClassName("active-cart").length;o.textContent=e,0==e?o.classList.add("anactive"):(0!=e||o.classList.contains("anactive"))&&o.classList.remove("anactive")},r[6].onclick=function(){this.classList.contains("active-cart")?(this.classList.remove("active-cart"),this.innerHTML='Add to cart \n        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">\n            <path d="M8.146 19.5557C8.90539 19.5557 9.521 18.9401 9.521 18.1807C9.521 17.4213 8.90539 16.8057 8.146 16.8057C7.3866 16.8057 6.771 17.4213 6.771 18.1807C6.771 18.9401 7.3866 19.5557 8.146 19.5557Z" fill="white"/>\n            <path d="M16.5 19.5557C17.2594 19.5557 17.875 18.9401 17.875 18.1807C17.875 17.4213 17.2594 16.8057 16.5 16.8057C15.7406 16.8057 15.125 17.4213 15.125 18.1807C15.125 18.9401 15.7406 19.5557 16.5 19.5557Z" fill="white"/>\n            <path d="M20.2155 3.28185C20.1587 3.21175 20.087 3.15511 20.0056 3.11602C19.9242 3.07692 19.8352 3.05633 19.745 3.05574H7.02163L7.41886 4.27796H18.9444L17.3127 11.6113H8.14608L5.3533 2.76852C5.32309 2.67468 5.27063 2.58955 5.2004 2.52039C5.13017 2.45122 5.04425 2.40007 4.94997 2.37129L2.44441 1.60129C2.36737 1.57762 2.28642 1.56935 2.20618 1.57696C2.12594 1.58457 2.04799 1.60791 1.97677 1.64565C1.83294 1.72186 1.72528 1.85209 1.67747 2.00768C1.62965 2.16328 1.64561 2.33149 1.72182 2.47532C1.79803 2.61915 1.92826 2.72681 2.08385 2.77463L4.27774 3.44685L7.08274 12.308L6.08052 13.1268L6.00108 13.2063C5.75317 13.492 5.61266 13.8552 5.60373 14.2333C5.59481 14.6115 5.71804 14.9809 5.95219 15.278C6.11875 15.4805 6.33041 15.6413 6.57023 15.7474C6.81005 15.8535 7.07137 15.902 7.3333 15.8891H17.5327C17.6948 15.8891 17.8503 15.8247 17.9649 15.7101C18.0795 15.5955 18.1439 15.44 18.1439 15.278C18.1439 15.1159 18.0795 14.9604 17.9649 14.8458C17.8503 14.7312 17.6948 14.6668 17.5327 14.6668H7.23552C7.16515 14.6644 7.09659 14.6439 7.03646 14.6073C6.97633 14.5707 6.92666 14.5191 6.89226 14.4577C6.85785 14.3963 6.83987 14.327 6.84006 14.2566C6.84024 14.1862 6.85858 14.117 6.8933 14.0557L8.36608 12.8335H17.8016C17.9429 12.837 18.081 12.7914 18.1924 12.7044C18.3038 12.6175 18.3817 12.4947 18.4127 12.3568L20.35 3.80129C20.3686 3.71019 20.3661 3.61604 20.3428 3.52603C20.3195 3.43601 20.276 3.3525 20.2155 3.28185V3.28185Z" fill="white"/>\n        </svg>'):(this.classList.toggle("active-cart"),this.innerHTML="Item in the cart");var e=document.getElementsByClassName("active-cart").length;o.textContent=e,0==e?o.classList.add("anactive"):(0!=e||o.classList.contains("anactive"))&&o.classList.remove("anactive")},r[7].onclick=function(){this.classList.contains("active-cart")?(this.classList.remove("active-cart"),this.innerHTML='Add to cart \n        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">\n            <path d="M8.146 19.5557C8.90539 19.5557 9.521 18.9401 9.521 18.1807C9.521 17.4213 8.90539 16.8057 8.146 16.8057C7.3866 16.8057 6.771 17.4213 6.771 18.1807C6.771 18.9401 7.3866 19.5557 8.146 19.5557Z" fill="white"/>\n            <path d="M16.5 19.5557C17.2594 19.5557 17.875 18.9401 17.875 18.1807C17.875 17.4213 17.2594 16.8057 16.5 16.8057C15.7406 16.8057 15.125 17.4213 15.125 18.1807C15.125 18.9401 15.7406 19.5557 16.5 19.5557Z" fill="white"/>\n            <path d="M20.2155 3.28185C20.1587 3.21175 20.087 3.15511 20.0056 3.11602C19.9242 3.07692 19.8352 3.05633 19.745 3.05574H7.02163L7.41886 4.27796H18.9444L17.3127 11.6113H8.14608L5.3533 2.76852C5.32309 2.67468 5.27063 2.58955 5.2004 2.52039C5.13017 2.45122 5.04425 2.40007 4.94997 2.37129L2.44441 1.60129C2.36737 1.57762 2.28642 1.56935 2.20618 1.57696C2.12594 1.58457 2.04799 1.60791 1.97677 1.64565C1.83294 1.72186 1.72528 1.85209 1.67747 2.00768C1.62965 2.16328 1.64561 2.33149 1.72182 2.47532C1.79803 2.61915 1.92826 2.72681 2.08385 2.77463L4.27774 3.44685L7.08274 12.308L6.08052 13.1268L6.00108 13.2063C5.75317 13.492 5.61266 13.8552 5.60373 14.2333C5.59481 14.6115 5.71804 14.9809 5.95219 15.278C6.11875 15.4805 6.33041 15.6413 6.57023 15.7474C6.81005 15.8535 7.07137 15.902 7.3333 15.8891H17.5327C17.6948 15.8891 17.8503 15.8247 17.9649 15.7101C18.0795 15.5955 18.1439 15.44 18.1439 15.278C18.1439 15.1159 18.0795 14.9604 17.9649 14.8458C17.8503 14.7312 17.6948 14.6668 17.5327 14.6668H7.23552C7.16515 14.6644 7.09659 14.6439 7.03646 14.6073C6.97633 14.5707 6.92666 14.5191 6.89226 14.4577C6.85785 14.3963 6.83987 14.327 6.84006 14.2566C6.84024 14.1862 6.85858 14.117 6.8933 14.0557L8.36608 12.8335H17.8016C17.9429 12.837 18.081 12.7914 18.1924 12.7044C18.3038 12.6175 18.3817 12.4947 18.4127 12.3568L20.35 3.80129C20.3686 3.71019 20.3661 3.61604 20.3428 3.52603C20.3195 3.43601 20.276 3.3525 20.2155 3.28185V3.28185Z" fill="white"/>\n        </svg>'):(this.classList.toggle("active-cart"),this.innerHTML="Item in the cart");var e=document.getElementsByClassName("active-cart").length;o.textContent=e,0==e?o.classList.add("anactive"):(0!=e||o.classList.contains("anactive"))&&o.classList.remove("anactive")}}(null!=document.querySelector(".counter")&&(document.querySelector(".counter").textContent=document.getElementsByClassName("cart__item").length),null!=document.getElementsByClassName("cart__item"))&&function(){var e=document.getElementsByClassName("cart__item"),t=e.length;null!=document.getElementById("sum")&&(l=parseInt(document.getElementById("sum").innerHTML));var n=[],a=s(n);null!=document.getElementById("sum")&&(document.getElementById("sum").textContent=l);for(var i=0,c=function(c){var r=e[c].querySelector(".plus"),o=e[c].querySelector(".minus"),C=e[c].querySelector(".amount"),d=parseInt(e[c].querySelector(".price").innerHTML);n[c]=d,document.getElementById("sum").textContent=s(n)+" $";var m=1;C.textContent=m,r.onclick=function(){++m>=11?(C.textContent=10,m=10):(C.textContent=m,l=d*m,n[c]=l,a=s(n),document.getElementById("sum").textContent=a+" $")},o.onclick=function(){--m<=0?(C.textContent=1,m=1):(C.textContent=m,l=d*m,n[c]=l,a=s(n),document.getElementById("sum").textContent=a+" $")},e[c].querySelector(".clean").onclick=function(){i+=1,e[c].classList.add("cart__item_unactive"),n[c]=0,a=s(n),document.getElementById("sum").textContent=a+" $";var l=t-i;0==l?document.querySelector(".counter").classList.add("anactive"):(0!=l||document.querySelector(".counter").classList.contains("anactive"))&&document.querySelector(".counter").classList.remove("anactive"),document.querySelector(".counter").textContent=l}},r=0;r<t;r++)c(r);var o=JSON.parse(loadURL("src/scripts/json/promocodes.json")),C=(o=Object.entries(o)).length,d=document.querySelector(".input"),m=0;document.querySelector(".btn").onclick=function(){for(var e=String(d.value),t=0;t<C;t++){newArr=o[t];var i=parseInt(newArr[1]);newArr[0]==e&&i!=m?(a=(a-a*(i/100)).toFixed(1),document.querySelector(".promo").textContent="Promo code activated, your discount: "+i+"%",document.getElementById("sum").textContent=a+" $",m=i):a=s(n)}}}();
//# sourceMappingURL=script.js.map
