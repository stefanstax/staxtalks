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

  // map all headings and assign id to each of them so they could be linked to the table of content elements
  headings.forEach(element => {
    beautifiedLink = element.innerHTML
      .toLowerCase()
      .trim()
      .split(/\s+/)
      .join("-")
      .replace("?", "")
      .replace(".", "")
      .replace("’", "");
    element.setAttribute("id", beautifiedLink);
    allHeadings.push(element.innerHTML);

    // Remove active class TOC has on each table of contents
  });

  // Populate table of contents container with all h2 there are on the page and make their href tied to exisiting id of the same heading;
  allHeadings.forEach(element => {
    container.innerHTML +=
      `<div class="tableOfContents__block"><span class="iconify mr-2" data-icon="codicon:inspect"></span> <a class="tableOfContents__link" href="#${element
        .toLowerCase()
        .trim()
        .split(/\s+/)
        .join("-")
        .replace("?", "")
        .replace(".", "")
        .replace("<br>", " ")
        .replace("’", "")}">` +
      element +
      "</a></div>";
  });
})();

(function triggerTableOfContents() {
  let resizeWidth;
  let container = document.querySelector(".tableOfContents");
  let tocTrigger = document.querySelector(".tableOfContents__trigger");
  let tocHeadings = document.querySelectorAll(".tableOfContents a");

  if (browserWidth <= 600) {
    resizeWidth = "inset-x-12";
  } else if (browserWidth >= 601 && browserWidth <= 1441) {
    resizeWidth = "left-[60%]";
  } else {
    resizeWidth = "inset-x-1/4";
  }

  tocTrigger.addEventListener("click", function () {
    container.classList.toggle(resizeWidth);
  });

  tocHeadings.forEach(tocHeading => {
    tocHeading.addEventListener("click", function () {
      container.classList.remove(resizeWidth);
    });
  });
})();
