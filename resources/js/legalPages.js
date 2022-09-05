(function transformHeadings() {
  let listFourthLayerHeadings = document.querySelectorAll("h4");
  let listSecondLayerHeadings = document.querySelectorAll("h2");

  listFourthLayerHeadings.forEach(listItem => {
    listItem.classList.add("my-8");
    listItem.classList.add("uppercase");
  });

  listSecondLayerHeadings.forEach(listItem => {
    listItem.classList.add("my-8");
    listItem.classList.add("uppercase");
  });
})();
