// Self invoke on the start functions
let browserWidth = window.innerWidth;
function reportWindowSize() {
  browserWidth = window.innerWidth;
}
window.addEventListener("resize", reportWindowSize);

(function triggerMenuVisibility() {
  let navigationMobileBar = document.querySelector(".mobile__menu");
  let menuIconAction = document.querySelector(".navigation__trigger");
  let menuIconCloser = document.querySelector(".closeMenuTrigger");
  let menuContainer = document.querySelector(".navigation__menu");

  menuIconAction.addEventListener("click", function () {
    menuContainer.classList.remove("hidden");
    navigationMobileBar.classList.add("hidden");
  });

  menuIconCloser.addEventListener("click", function () {
    menuContainer.classList.add("hidden");
    navigationMobileBar.classList.remove("hidden");
  });
})();

(function blockNavigationTillRelease() {
  let penIcon = `<iconify-icon icon="akar-icons:edit"></iconify-icon>`;
  let blogLinks = document.querySelectorAll("#menu-blogs-menu li a ");
  // ! Locked paths removed due to website release
  // let navigationLinks = document.querySelectorAll("#menu-primary-menu li a");
  // navigationLinks.forEach((navigationLink) => {
  //   navigationLink.classList.add("disabled");

  //   if (
  //     navigationLink.innerHTML.includes("Contact") ||
  //     navigationLink.innerHTML.includes("Privacy") ||
  //     navigationLink.innerHTML.includes("T&amp;C")
  //   ) {
  //     navigationLink.classList.remove("disabled");
  //   }
  // });

  blogLinks.forEach((blog) => {
    // blog.classList.add("disabled");
  });
  // Past release
  blogLinks.forEach((blog) => {
    blog.insertAdjacentHTML("afterbegin", penIcon);
  });
})();

(function assignClassesToNavigationItems() {
  let navigationLinks = document.querySelectorAll(".navigation__menu a");

  navigationLinks.forEach((navigationLink) => {
    navigationLink.classList.add("p-2");
    navigationLink.classList.add("px-4");
  });
})();
