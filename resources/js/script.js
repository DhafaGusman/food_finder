/* script.js */

document.addEventListener("DOMContentLoaded", function () {
    feather.replace();
});

// Fungsi untuk set lokasi dan ambil data restoran dari json
$(document).ready(function () {
    let currentCity = "Jakarta";

    function loadRestaurants(city) {
        $.ajax({
            url: `http://localhost:3000/restaurants?city=${city}`,
            method: "GET",
            success: function (data) {
                displayRestaurants(data, city);
            },
            error: function () {
                console.log("Error: Tidak bisa memuat data restoran.");
            },
        });
    }

    // Fungsi untuk menampilkan data restoran berdasarkan kota
    function displayRestaurants(restaurants, city) {
        const filteredRestaurants = restaurants.filter(
            (restaurant) => restaurant.city === city
        );
        const maxDisplay = 8;
        const restaurantList = $("#restaurantList");
        restaurantList.empty();

        filteredRestaurants.slice(0, maxDisplay).forEach(function (restaurant) {
            // Membuat card untuk setiap restoran
            const card = `
        <a href="${restaurant.link}" class="card-restaurant-link">
          <div class="card-restaurant">
            <div class="badge-promo">Promo</div>
            <img src="${restaurant.image}" alt="${restaurant.alt}" class="card-img-restaurant" />
            <div class="card-body-restaurant">
              <h3 class="card-title-restaurant">${restaurant.name}</h3>
              <p class="card-text-category">${restaurant.category}</p>
              <div class="card-text-description">
                <i data-feather="map-pin" class="card-icon"></i>
                <span class="card-text-description-span">${restaurant.distance}</span>
                <i data-feather="clock" class="card-icon"></i>
                <span class="card-text-description-span">${restaurant.time}</span>
                <img src="assets/img/icon/star_24dp_FFD27D.svg" alt="" class="card-icon" />
                ${restaurant.rating}
              </div>
            </div>
          </div>
        </a>`;
            restaurantList.append(card);
        });

        feather.replace();
    }

    // Load data restoran saat dokumen siap
    loadRestaurants(currentCity);

    // Fungsi untuk reverse geocode dan update city
    function reverseGeocode(latitude, longitude) {
        const url = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}&zoom=12&addressdetails=1`;

        fetch(url)
            .then((response) => response.json())
            .then((data) => {
                const address = data.address;
                let locationName = "";

                if (address.suburb) {
                    locationName = address.suburb;
                } else if (address.village) {
                    locationName = address.village;
                } else if (address.county) {
                    locationName = address.county;
                }

                if (locationName) {
                    currentCity = locationName;
                    document.getElementById("dropdownLocation").innerHTML =
                        locationName +
                        '<i data-feather="chevron-down" class="icon-dropdown">';
                    feather.replace();

                    // Load data restoran berdasarkan kota yang baru
                    loadRestaurants(currentCity);
                } else {
                    alert("Unable to find a detailed location for your area.");
                }
            })
            .catch((error) => console.log(error));
    }

    // Fungsi untuk mengambil lokasi pengguna
    document
        .getElementById("useCurrentLocation")
        .addEventListener("click", function (e) {
            e.preventDefault();
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    // Panggil fungsi reverse geocoding untuk mendapatkan nama kota
                    reverseGeocode(latitude, longitude);
                });
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        });

    // Untuk memasukkan lokasi manual
    document
        .getElementById("insertLocation")
        .addEventListener("click", function (e) {
            e.preventDefault();
            const manualLocation = prompt("Please enter your location:");

            if (manualLocation) {
                currentCity = manualLocation;
                document.getElementById("dropdownLocation").innerHTML =
                    manualLocation +
                    '<i data-feather="chevron-down" class="icon-dropdown">';
                feather.replace();

                // Load data restoran berdasarkan kota yang baru
                loadRestaurants(currentCity);
            } else {
                alert("No location entered.");
            }
        });
});

// Fungsi untuk login di index.html
document.addEventListener("DOMContentLoaded", function () {
    const loginButton = document.getElementById("loginButton");
    const profileMenu = document.getElementById("profileMenu");

    // Pengecekan status login
    const isLoggedIn = localStorage.getItem("isLoggedIn");

    if (isLoggedIn) {
        loginButton.style.display = "none";
        profileMenu.style.display = "block";
    }

    // Fungsi logout
    const logoutButton = document.querySelector(".dropdown-item:last-child");
    logoutButton.addEventListener("click", function () {
        localStorage.removeItem("isLoggedIn");
        loginButton.style.display = "block";
        profileMenu.style.display = "none";
    });
});

// Fungsi event offcanvas
function toggleCanvas() {
    const offCanvasMenu = document.getElementById("offCanvasMenu");
    offCanvasMenu.classList.toggle("show");
}

// Tutup offcanvas ketika click luar canvas
document.addEventListener("click", (event) => {
    const offCanvasMenu = document.getElementById("offCanvasMenu");
    const hamburgerIcon = document.getElementById("hamburgerIcon");
    if (
        !offCanvasMenu.contains(event.target) &&
        !hamburgerIcon.contains(event.target)
    ) {
        offCanvasMenu.classList.remove("show");
    }
});

// Menambahkan event scroll pada navbar
window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");

    if (window.scrollY > 30) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

// Menambahkan fungsi untuk floating action button
window.onscroll = function () {
    showScrollButton();
};

function showScrollButton() {
    const scrollTopBtn = document.getElementById("scrollTopButton");
    if (
        document.body.scrollTop > 200 ||
        document.documentElement.scrollTop > 200
    ) {
        scrollTopBtn.classList.add("active");
    } else {
        scrollTopBtn.classList.remove("active");
    }
}

// Scroll ke atas ketika di klik
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}
