(function formSwitcher() {
  let personalButton = document.querySelector("#ffPersonal");
  let businessButton = document.querySelector("#ffBusiness");
  let personalForm = document.querySelector(".ff_personal");
  let businessForm = document.querySelector(".ff_business");

  function hidePersonal() {
    personalForm.classList.add("hidden");
    personalButton.classList.remove("active");

    businessForm.classList.remove("hidden");
    businessButton.classList.add("active");
  }

  function hideBusiness() {
    businessForm.classList.add("hidden");
    businessButton.classList.remove("active");
    personalForm.classList.remove("hidden");
    personalButton.classList.add("active");
  }

  personalButton.addEventListener("click", hideBusiness);
  businessButton.addEventListener("click", hidePersonal);
})();
