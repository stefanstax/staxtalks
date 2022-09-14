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
      .replaceAll("?", "")
      .replaceAll(".", "")
      .replaceAll("<br>", " ")
      .replaceAll("’", "");
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
        .replaceAll("?", "")
        .replaceAll(".", "")
        .replaceAll("’", "")}">` +
      element +
      "</a></div>";
  });
})();
