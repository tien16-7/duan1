document.getElementById("signUp").addEventListener("click", () => {
    document.querySelector(".sign-in-container").style.transform = "translateX(-100%)";
    document.querySelector(".overlay-container").style.transform = "translateX(0)";
});

document.getElementById("signIn").addEventListener("click", () => {
    document.querySelector(".sign-in-container").style.transform = "translateX(0)";
    document.querySelector(".overlay-container").style.transform = "translateX(100%)";
});