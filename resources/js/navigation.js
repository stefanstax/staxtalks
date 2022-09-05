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

// ! Activate after Cookie consent implementation
// (function populateHistory() {
//   // ? Declarations
//   let url = location.pathname;
//   let historyMenu = document.querySelector("#historyPages");

//   if (localStorage.getItem("history") == null) {
//     localStorage.setItem("history", "[]");
//   }

//   // ? Parse local storage data before receiving
//   let storedData = JSON.parse(localStorage.getItem("history"));

//   // ? Beautify the name of the each link
//   storedData.forEach(element => {
//     let formattedElement = element
//       .replaceAll("/", "")
//       .replaceAll("-", " ")
//       .replace("client", "")
//       .replace("affiliate", "")
//       .toUpperCase();
//     const node = document.createElement("li");
//     const link = document.createElement("a");
//     link.setAttribute("href", element);
//     link.innerHTML += `<iconify-icon inline icon="akar-icons:key-cap" width="16" height="16" ></iconify-icon>`;
//     link.innerHTML += formattedElement;
//     node.appendChild(link);
//     historyMenu.appendChild(node);
//   });

//   // ! Fail-safe -> If already exists do not add it to the local storage
//   if (url !== storedData.find(element => element === url) && url !== "/") {
//     storedData.push(url);
//   }

//   // ? Send new entries to local storage
//   localStorage.setItem("history", JSON.stringify(storedData));
// })();
