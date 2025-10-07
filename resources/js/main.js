"use strict";
const handleMenuOpen = (menuClose, menuOpen, menu) => {
  menuClose.classList.toggle("hidden");
  menuOpen.classList.toggle("hidden");

  menu.classList.remove("animate-disappear", "animate-appear", "h-0");
  menu.classList.add("animate-appear");
}

const handleMenuClose = (menuOpen, menuClose, menu) => {
  menuOpen.classList.toggle("hidden");
  menuClose.classList.toggle("hidden");

  menu.classList.remove("animate-disappear", "animate-appear");
  menu.classList.add("animate-disappear");
    
  menu.addEventListener("animationend", () => {
    menu.classList.add("h-0");
    menu.classList.remove("animate-disappear");
  }, { once: true });
}

const menu = () => {
  const menuClosed = document.getElementById("menu-closed");
  const menuOpened = document.getElementById("menu-opened");
  const navMenu = document.getElementById("nav-menu");

  const allMenu = document.querySelectorAll(".nav-menu");
  allMenu.forEach(menuItem => {
    menuItem.addEventListener('click', () => handleMenuClose(menuClosed, menuOpened, navMenu));
  });

  //a menügombokra kattintáskor is becsukja a menüt
  menuClosed.addEventListener("click", () => {
    handleMenuOpen(menuClosed, menuOpened, navMenu);
  });
    
  menuOpened.addEventListener("click", () => {
    handleMenuClose(menuClosed, menuOpened, navMenu);
  });
}

//footer-ben az évet mindig frissíti
const footerYear = () => {
  const footerSpan = document.getElementById("footer-year");
  footerSpan.textContent = new Date().getFullYear();
}

document.addEventListener("DOMContentLoaded", () => {
  menu();
  footerYear();
});