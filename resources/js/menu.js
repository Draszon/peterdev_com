"use strict";

// menü gombot váltogatja mikor megnyitják a menüt vagy becsukják
document.addEventListener("DOMContentLoaded", () => {
    const menuClosed = document.getElementById("menu-closed");
    const menuOpened = document.getElementById("menu-opened");
    
    menuClosed.addEventListener("click", () => {
      menuClosed.classList.toggle("hidden");
      menuOpened.classList.toggle("hidden");
    });
    
    menuOpened.addEventListener("click", () => {
      menuOpened.classList.toggle("hidden");
      menuClosed.classList.toggle("hidden");
    });
});