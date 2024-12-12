document.addEventListener('DOMContentLoaded', function() {
    // Modal functions
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
        document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
        document.body.style.overflow = 'auto'; // Restore scrolling
    }

    // Add click events to open buttons
    const modalButtons = {
        'openProfilePictureModal': 'profilePictureModal',
        'openUpdateProfileModal': 'updateProfileModal',
        'openCreateAccountModal': 'createAccountModal',
        'openChangePasswordModal': 'changePasswordModal'
    };

    Object.entries(modalButtons).forEach(([buttonId, modalId]) => {
        const button = document.getElementById(buttonId);
        if (button) {
            button.addEventListener('click', () => openModal(modalId));
        }
    });

    // Add click events to close buttons
    document.querySelectorAll('.close-modal').forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.closest('.modal').id;
            closeModal(modalId);
        });
    });

    // Close modal when clicking outside
    window.addEventListener('click', (event) => {
        if (event.target.classList.contains('modal')) {
            closeModal(event.target.id);
        }
    });

    // Close modal with Escape key
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            document.querySelectorAll('.modal').forEach(modal => {
                if (modal.style.display === 'block') {
                    closeModal(modal.id);
                }
            });
        }
    });
}); 