function navToggle(){var e=document.getElementById("menuBtn"),o=document.getElementById("menu");e.classList.toggle("open"),o.classList.toggle("flex"),o.classList.toggle("hidden")}$(".navegacionbuton").on("click",(function(){$(".items-navegacion").toggleClass("hidden")})),$(".subscripcionbuton").on("click",(function(){$(".item-subscripcion").toggleClass("hidden")})),$(".subscripcionbuton-close").on("click",(function(){$(".item-subscripcion").toggleClass("hidden")})),$(".butonexpirar").on("click",(function(){$(".itemsubscripcionExpired").toggleClass("hidden")})),$(".butonexpirar-close").on("click",(function(){$(".itemsubscripcionExpired").toggleClass("hidden")}));for(var openmodal=document.querySelectorAll(".modal-open"),i=0;i<openmodal.length;i++)openmodal[i].addEventListener("click",(function(e){e.preventDefault(),toggleModal()}));var closemodal=document.querySelectorAll(".modal-close");for(i=0;i<closemodal.length;i++)closemodal[i].addEventListener("click",toggleModal);function toggleModal(){const e=document.querySelector("body"),o=document.querySelector(".modal");o.classList.toggle("opacity-0"),o.classList.toggle("pointer-events-none"),e.classList.toggle("modal-active")}document.onkeydown=function(e){("key"in(e=e||window.event)?"Escape"===e.key||"Esc"===e.key:27===e.keyCode)&&document.body.classList.contains("modal-active")&&toggleModal()};const cookieContainer=document.querySelector(".cookie-container"),cookieButton=document.querySelector(".cookie-btn");cookieButton.addEventListener("click",(()=>{cookieContainer.classList.remove("active"),localStorage.setItem("cookieBannerDisplayed","true")})),setTimeout((()=>{localStorage.getItem("cookieBannerDisplayed")||cookieContainer.classList.add("active")}),2e3);