const toggle = document.getElementById("pass-toggle");
const passwordField = document.getElementById("password");

toggle.addEventListener("click", () => {
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);

    // Toggle icon
    toggle.textContent = type === "password" ? "👁" : "🙈";
});
