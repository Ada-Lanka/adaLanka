import "./bootstrap";

// Mobile Menu Functionality
document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuToggle = document.getElementById("mobileMenuToggle");
    const mobileMenu = document.getElementById("mobileMenu");
    const mobileMenuOverlay = document.getElementById("mobileMenuOverlay");
    const closeMobileMenu = document.getElementById("closeMobileMenu");
    const menuIcon = document.getElementById("menuIcon");
    const closeIcon = document.getElementById("closeIcon");

    // Dark Mode Elements
    const darkModeToggle = document.getElementById("darkModeToggle");
    const darkModeToggleMobile = document.getElementById(
        "darkModeToggleMobile"
    );

    // Check for saved dark mode preference or default to light mode
    const currentTheme = localStorage.getItem("theme") || "light";
    document.documentElement.classList.toggle("dark", currentTheme === "dark");

    // Mobile Menu Toggle Function
    function toggleMobileMenu() {
        const isOpen = !mobileMenu.classList.contains("translate-x-full");

        if (isOpen) {
            // Close menu
            mobileMenu.classList.add("translate-x-full");
            mobileMenuOverlay.classList.add("hidden");
            menuIcon.classList.remove("hidden");
            closeIcon.classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
        } else {
            // Open menu
            mobileMenu.classList.remove("translate-x-full");
            mobileMenuOverlay.classList.remove("hidden");
            menuIcon.classList.add("hidden");
            closeIcon.classList.remove("hidden");
            document.body.classList.add("overflow-hidden");
        }
    }

    // Dark Mode Toggle Function
    function toggleDarkMode() {
        const isDark = document.documentElement.classList.toggle("dark");
        localStorage.setItem("theme", isDark ? "dark" : "light");
    }

    // Event Listeners
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener("click", toggleMobileMenu);
    }

    if (closeMobileMenu) {
        closeMobileMenu.addEventListener("click", toggleMobileMenu);
    }

    if (mobileMenuOverlay) {
        mobileMenuOverlay.addEventListener("click", toggleMobileMenu);
    }

    if (darkModeToggle) {
        darkModeToggle.addEventListener("click", toggleDarkMode);
    }

    if (darkModeToggleMobile) {
        darkModeToggleMobile.addEventListener("click", toggleDarkMode);
    }

    // Close mobile menu on escape key
    document.addEventListener("keydown", function (e) {
        if (
            e.key === "Escape" &&
            !mobileMenu.classList.contains("translate-x-full")
        ) {
            toggleMobileMenu();
        }
    });

    // Close mobile menu when window is resized to desktop size
    window.addEventListener("resize", function () {
        if (
            window.innerWidth >= 768 &&
            !mobileMenu.classList.contains("translate-x-full")
        ) {
            toggleMobileMenu();
        }
    });

    // Auto-update copyright year
    const currentYearElement = document.getElementById("currentYear");
    if (currentYearElement) {
        currentYearElement.textContent = new Date().getFullYear();
    }
});
