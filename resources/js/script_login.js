// Fungsi untuk login
function login(event) {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Cari data user di penyimpanan
    const userData = JSON.parse(localStorage.getItem(username));

    if (userData && userData.password === password) {
        alert("Login successful!");
        window.location.href = "../../index.html";
    } else {
        event.preventDefault();
        alert("Incorrect username or password.");
    }
}