// Function to auto-generate table of contents on blog pages - Default to pick will be H2
(function autoGenerateTableOfContents() {
  // Define changable variables
  // ? Set a deafult value for table of content links
  let tableOfContentTracker = "h3";
  // ? If ACF fields exist, set table of content tracker to be WP set value
  if (fields_js?.tableOfContentTracker) {
    tableOfContentTracker = fields_js.tableOfContentTracker;
  }

  let headings = document.querySelectorAll(`${tableOfContentTracker}`);
  let container = document.querySelector(".tableOfContents #contents");
  let allHeadings = [];
  let beautifiedLink;

  function headingLevelThreeDesign() {
    let headingLevelThree = document.querySelectorAll(".has-large-font-size");

    headingLevelThree.forEach((h3) => {
      if (h3.children[0]) {
        h3.classList.add("flex");
        h3.classList.add("gap-[10px]");
        h3.classList.add("items-center");
        h3.classList.add("justify-start");
      }
    });
  }

  // map all headings and assign id to each of them so they could be linked to the table of content elements
  headings.forEach((element) => {
    beautifiedLink = element.innerHTML
      .toLowerCase()
      .trim()
      .split(/\s+/)
      .join("-")
      .replaceAll("?", "")
      .replaceAll(".", "")
      .replaceAll("<br>", " ")
      .replaceAll("’", "");
    element.setAttribute("id", beautifiedLink);
    allHeadings.push(element.innerHTML);

    // Remove active class TOC has on each table of contents
  });

  // Populate table of contents container with all h2 there are on the page and make their href tied to exisiting id of the same heading;
  allHeadings.forEach((element) => {
    container.innerHTML +=
      `<div class="tableOfContents__block w-full"><a class="tableOfContents__link font-bold text-base" href="#${element
        .toLowerCase()
        .trim()
        .split(/\s+/)
        .join("-")
        .replaceAll("?", "")
        .replaceAll(".", "")
        .replaceAll("’", "")}">` +
      element +
      "</a></div>";

    // Cross already read sections
    let createdHeadings = document.querySelectorAll(".tableOfContents__block");
    createdHeadings.forEach((createdHeading) => {
      createdHeading.addEventListener("click", function () {
        headings.forEach((heading) => {
          console.log(heading);
          if (heading.innerHTML === createdHeading.children[0].innerHTML) {
            heading.innerHTML += `<iconify-icon width="18px" height="18px" icon="akar-icons:thumbs-up"></iconify-icon>`;
            createdHeading.classList.add("line-through");
            createdHeading.classList.add("opacity-20");
            headingLevelThreeDesign();
          }
        });
      });
    });
  });
})();

(function toggleToc() {
  let TOC = document.querySelector(".tableOfContents");
  let tocTrigger = document.querySelector(".collapse__toc");

  tocTrigger.addEventListener("click", function () {
    TOC.classList.toggle("hidden");
  });
})();
