document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelectorAll('.sidebar-menu li a');
    const sidebar = document.querySelector('.sidebar');
    const content = document.querySelector('.content');
    const sidebarToggle = document.getElementById('sidebar-toggle');

    // Add active state to the clicked menu item
    menuItems.forEach(item => {
        item.addEventListener('click', function () {
            menuItems.forEach(link => link.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Function to toggle sidebar
    function toggleSidebar(isCollapsed) {
        if (isCollapsed) {
            sidebar.classList.add('collapsed');
            content.classList.add('sidebar-collapsed');
        } else {
            sidebar.classList.remove('collapsed');
            content.classList.remove('sidebar-collapsed');
        }
        // Store sidebar state in localStorage
        localStorage.setItem('sidebarCollapsed', isCollapsed);
    }

    // Toggle sidebar on button click
    sidebarToggle.addEventListener('click', function() {
        const isCurrentlyCollapsed = sidebar.classList.contains('collapsed');
        toggleSidebar(!isCurrentlyCollapsed);
    });

    // Initialize sidebar state from localStorage
    const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
    toggleSidebar(isCollapsed);
});
