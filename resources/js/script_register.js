function registerUser(event) {
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('password2').value;

    if (username && email && password && confirmPassword) {
        if (password !== confirmPassword) {
            alert("Passwords do not match. Please try again.");
            event.preventDefault();
            return;
        }

        // Menyiapkan user data
        const userData = {
            username: username,
            email: email,
            password: password
        };

        // Simpan ke dalam storage pengguna dengan username sebagai key nya
        localStorage.setItem(username, JSON.stringify(userData));
        
        alert("User registered successfully!");
        window.location.href = "login.html";
    } else {
        event.preventDefault();
        alert("Please fill in all fields.");
    }
}