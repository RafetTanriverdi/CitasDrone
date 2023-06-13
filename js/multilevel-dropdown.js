document.addEventListener("DOMContentLoaded", function () {

    // Query all dropdown items inside the navbar
    var dropdowns = document.querySelectorAll('.navbar .dropdown');

    // Toggle "show" class on both parent dropdown and the submenu when clicking
    dropdowns.forEach(function (dropdown) {
        dropdown.querySelector('.dropdown-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            var menu = dropdown.querySelector('.dropdown-menu');
            var isShowing = menu.classList.contains('show');

            // Hide any open dropdown menus
            var openMenus = document.querySelectorAll('.navbar .dropdown-menu.show');
            openMenus.forEach(function (openMenu) {
                openMenu.classList.remove('show');
            });

            // Toggle this menu
            if (!isShowing) {
                menu.classList.add('show');
            }
        });
    });

});
