(function manipualeHeadings() {
  let headings = document.querySelectorAll("h2");
  let tableOfContents = document.querySelector(".tableOfContents");

  headings.forEach((heading) => {
    if (tableOfContents !== undefined) {
      heading.classList.add("my-8");
      heading.classList.add("uppercase");
    }
  });
})();

(function WPPostButtons() {
  let WPPostButtons = document.querySelectorAll(".wp-block-button__link");

  WPPostButtons.forEach((WPPostButton) => {
    WPPostButton.classList.add("bg-[#131616]");
    WPPostButton.classList.add("hover:bg-[#3457D5]");
    WPPostButton.classList.add("active:bg-[#1F75FE]");
  });
})();
