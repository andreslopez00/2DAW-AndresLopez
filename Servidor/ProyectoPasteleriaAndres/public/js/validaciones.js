document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.getElementById("loginForm");
    const errorMsg = document.getElementById("error");

    loginForm.addEventListener("submit", e => {
        e.preventDefault();
        const usuario = loginForm.usuario.value.trim();
        const contraseña = loginForm.contraseña.value.trim();

        if (!usuario || !contraseña) {
            errorMsg.textContent = "Por favor, completa todos los campos.";
            errorMsg.style.display = "block";
        } else if (usuario.length < 3 || contraseña.length < 4) {
            errorMsg.textContent = "El usuario o contraseña no cumplen con los requisitos mínimos.";
            errorMsg.style.display = "block";
        } else {
            errorMsg.style.display = "none";
            alert("Login exitoso.");
            window.location.href = "main.html";
        }
    });
});
