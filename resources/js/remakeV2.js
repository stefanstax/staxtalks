// ! Scroll functionality to be made in V2
// (function triggerTableOfContents() {
//   let resizeWidth;
//   let container = document.querySelector(".tableOfContents");
//   let tocTrigger = document.querySelector(".tableOfContents__trigger");
//   let tocHeadings = document.querySelectorAll(".tableOfContents a");

//   if (browserWidth <= 600) {
//     resizeWidth = "inset-x-12";
//   } else if (browserWidth >= 601 && browserWidth <= 1441) {
//     resizeWidth = "left-[60%]";
//   } else {
//     resizeWidth = "inset-x-1/4";
//   }

//   tocTrigger.addEventListener("click", function () {
//     container.classList.toggle(resizeWidth);
//   });

//   tocHeadings.forEach(tocHeading => {
//     tocHeading.addEventListener("click", function () {
//       container.classList.remove(resizeWidth);
//     });
//   });
// })();

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
