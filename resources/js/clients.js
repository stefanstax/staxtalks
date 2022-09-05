(function remodelImages() {
  let images = document.querySelectorAll("img");

  images.forEach(image => {
    // Avoid styling on a logo
    if (!image.alt.includes("logo")) {
      image.style.borderRadius = "20px";
      image.style.boxShadow = "4px 4px 0px #131616";
      image.classList.add("my-4");
    }
  });
})();
