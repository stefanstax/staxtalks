function cookieChecker() {
  // Variables
  // * Compliance Box
  let cookiesAcceptanceF = document.getElementById("cookiesAcceptanceF");
  let cookiesRejectF = document.getElementById("cookiesRejectionF");
  let cookieSettings = document.getElementById("cookiesSettingsF");
  let complianceBox = document.getElementById("complianceChecker");

  // * Settings Modal
  let cookieSettingsPopup = document.getElementById("cookieSettingsPopup");
  let cookiesAcceptanceB = document.getElementById("cookiesAcceptanceB");
  let cookiesRejectB = document.getElementById("cookiesRejectionB");
  let cookieTrigger = document.getElementById("cookieTrigger");
  let cookies = document.querySelectorAll(".cookieTag"); // ? Array
  let closeModal = document.getElementById("closePopup");

  const setCookie = (cname, cvalue, exdays) => {
    const date = new Date();
    date.setTime(date.getTime() + exdays * 24 * 60 * 60 * 1000);
    let expires = "expires=" + date.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  };

  // ? Accept cookie logic
  function cookiesAcceptSettings() {
    cookies.forEach(cookie => {
      let cookieName = cookie.name;
      let cookieExists = document.cookie.includes(cookieName);
      // ? Cookie Validity
      if (cookieExists) {
        cookie.checked = true;
      }

      cookie.addEventListener("click", function () {
        if (!cookie.checked && cookieExists) {
          setCookie(`StaxTalks | ${cookieName} Cookie Compliance`, false, "0");
        } else if (cookie.checked && !cookieExists) {
          setCookie(`StaxTalks | ${cookieName} Cookie Compliance`, true, "30");
        } else if (cookie.checked && cookieExists) {
          console.log("Cookie exists and is also checked");
        } else {
          console.log("Nothing happens");
        }
      });
    });
  }

  cookiesAcceptSettings();

  // ? Reject all cokies logic
  function cookiesRejectSettings() {
    cookies.forEach(cookie => {
      let cookieName = cookie.name;
      if (!cookie.name.includes("Necessary")) {
        cookie.checked = false;
        setCookie(`StaxTalks | ${cookieName} Cookie Compliance`, false, "0");
      }
    });
  }

  // ? Trigger Cookies Popup
  function cookieBodyManipulation() {
    let bodyContainer = document.querySelector(".container");
    let bodyScroll = document.querySelector("body");

    bodyScroll.classList.toggle("overflow-hidden");
    bodyContainer.classList.toggle("opacity-20");
  }

  // ? Navigation manipulation
  function toggleNavigationMenu() {
    let navigationBar = document.querySelector(".navigation__menu");
    let navigationMobileBar = document.querySelector(".mobile__menu");

    navigationMobileBar.classList.toggle("hidden");
    navigationBar.classList.toggle("hidden");
  }

  cookieTrigger.addEventListener("click", function () {
    // ? Dynamic class toggler
    if (
      !complianceBox.classList.contains("hidden") &&
      cookieSettingsPopup.classList.contains("hidden")
    ) {
      complianceBox.classList.add("hidden");
    } else if (
      complianceBox.classList.contains("hidden") &&
      !cookieSettingsPopup.classList.contains("hidden")
    ) {
      cookieSettingsPopup.classList.add("hidden");
    } else {
      complianceBox.classList.add("hidden");
      complianceBox.classList.remove("hidden");
    }

    toggleNavigationMenu();
    cookieBodyManipulation();
  });

  // ? Cookie Settings Box
  cookieSettings.addEventListener("click", function () {
    complianceBox.classList.toggle("hidden");
    cookieSettingsPopup.classList.toggle("hidden");
  });

  // * Cookies Rejection
  function cookiesRejection() {
    setTimeout(() => {
      complianceBox.classList.add("hidden");
      cookieSettingsPopup.classList.add("hidden");
      cookiesRejectSettings();
      cookieBodyManipulation();
    }, 250);
  }

  // * Cookies Acceptance
  function cookiesAcceptance() {
    setCookie("StaxTalks | Necessary Cookie Compliance", true, "30");
    complianceBox.classList.add("hidden");
    cookieBodyManipulation();
  }

  // * Cookies Acceptance - Front
  cookiesAcceptanceF.addEventListener("click", cookiesAcceptance);

  // * Cookies Rejection - Front
  cookiesRejectF.addEventListener("click", cookiesRejection);

  // * Cookies Acceptance - Back
  cookiesAcceptanceB.addEventListener("click", function () {
    // Open cookie settings box
    setTimeout(() => {
      complianceBox.classList.add("hidden");
      cookieSettingsPopup.classList.add("hidden");
      cookiesAcceptSettings();
      cookieBodyManipulation();
    }, 250);
  });

  // * Cookies Rejection - Back
  cookiesRejectB.addEventListener("click", cookiesRejection);

  // * Close cookies modal
  closeModal.addEventListener("click", function () {
    cookieBodyManipulation();
    cookieSettingsPopup.classList.toggle("hidden");
  });
}

// ! Load Cookies script on body load
window.onload = function () {
  cookieChecker();
};
