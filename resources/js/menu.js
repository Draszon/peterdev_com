"use strict";

// menü gombot váltogatja mikor megnyitják a menüt vagy becsukják
document.addEventListener("DOMContentLoaded", () => {
    const menuClosed = document.getElementById("menu-closed");
    const menuOpened = document.getElementById("menu-opened");
    const navMenu = document.getElementById("nav-menu");
    
    menuClosed.addEventListener("click", () => {
      menuClosed.classList.toggle("hidden");
      menuOpened.classList.toggle("hidden");

      navMenu.classList.remove("animate-disappear", "animate-appear", "h-0");
      navMenu.classList.add("animate-appear");
    });
    
    menuOpened.addEventListener("click", () => {
      menuOpened.classList.toggle("hidden");
      menuClosed.classList.toggle("hidden");

      navMenu.classList.remove("animate-disappear", "animate-appear", "h-0");
      navMenu.classList.add("animate-disappear");      
    });


});