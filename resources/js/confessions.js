(function triggerConfessionAlgorythm() {
  let submitBtn = document.querySelector(".ff-btn-submit");
  let textArea = document.querySelector("#ff_9_description");

  submitBtn.addEventListener("click", function () {
    if (textArea.value !== "") {
      setTimeout(() => {
        window.location.reload();
      }, 1000);
    }
  });
})();
