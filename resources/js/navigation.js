// Self invoke on the start functions
let browserWidth = window.innerWidth;
function reportWindowSize() {
  browserWidth = window.innerWidth;
}
window.addEventListener("resize", reportWindowSize);

(function triggerMenuVisibility() {
  let menuIconAction = document.querySelector(".menu__trigger");
  let menuIconCloser = document.querySelector(".closeMenuTrigger");
  let menuContainer = document.querySelector(".navigation__menu");

  menuIconAction.addEventListener("click", function () {
    menuContainer.classList.remove("hidden");
    menuIconAction.classList.add("hidden");
  });

  menuIconCloser.addEventListener("click", function () {
    menuContainer.classList.add("hidden");
    menuIconAction.classList.remove("hidden");
  });
})();

(function blockNavigationTillRelease() {
  let body = document.querySelector("body");
  let penIcon = `<iconify-icon icon="akar-icons:edit"></iconify-icon>`;
  let blogLinks = document.querySelectorAll("#menu-blogs-menu li a ");
  // Pre-Release only
  if (!body.classList.contains("admin-bar")) {
    let navigationLinks = document.querySelectorAll("#menu-primary-menu li a");

    // ! Old way - record for IG reel
    // let aboutIcon = navigationLinks[1];
    // let projectIcon = navigationLinks[2];
    // let collaborationsIcon = navigationLinks[3];
    // let confessionsIcon = navigationLinks[4];

    // aboutIcon.classList.add("disabled");
    // projectIcon.classList.add("disabled");
    // collaborationsIcon.classList.add("disabled");
    // confessionsIcon.classList.add("disabled");

    // ! New way - record for IG reel
    navigationLinks.forEach(navigationLink => {
      navigationLink.classList.add("disabled");

      if (
        navigationLink.innerHTML.includes("Contact") ||
        navigationLink.innerHTML.includes("Privacy") ||
        navigationLink.innerHTML.includes("T&amp;C")
      ) {
        navigationLink.classList.remove("disabled");
      }
    });

    blogLinks.forEach(blog => {
      blog.classList.add("disabled");
    });
  }
  // Past release
  blogLinks.forEach(blog => {
    blog.insertAdjacentHTML("afterbegin", penIcon);
  });
})();

(function assignClassesToNavigationItems() {
  let navigationLinks = document.querySelectorAll(".navigation__menu a");

  navigationLinks.forEach(navigationLink => {
    navigationLink.classList.add("p-2");
    navigationLink.classList.add("px-4");
  });
})();
