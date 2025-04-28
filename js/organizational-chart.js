document.addEventListener('DOMContentLoaded', () => {
    const boardMembers = window.boardMembers || [];
    const modal = document.getElementById('member-modal');
    const modalCloseBtn = document.getElementById('modal-close-btn');
    const modalProfileImage = document.querySelector('#modal-profile-image img');
    const modalName = document.getElementById('modal-name');
    const modalTitle = document.getElementById('modal-title');
    const modalDescription = document.getElementById('modal-description');
    const modalRepresentation = document.getElementById('modal-representation');
    const modalRepImage = document.getElementById('modal-rep-image');
    const modalRepName = document.getElementById('modal-rep-name');

    function openModal(index) {
        const member = boardMembers[index];

        modalProfileImage.src = '../images/' + member.image;
        modalProfileImage.alt = member.name;
        modalName.textContent = member.name;
        modalTitle.textContent = member.title_bor;

        // Placeholder description, can be replaced with real data if available
        modalDescription.textContent = 'No description available.';

        // Show or hide representation section based on data
        if (member.representation && member.representation.length > 0) {
            modalRepresentation.style.display = 'flex';
            // For simplicity, show first representative only
            const rep = member.representation[0];
            modalRepImage.src = '../images/' + rep.image;
            modalRepImage.alt = rep.name;
            modalRepName.textContent = rep.name;
        } else {
            modalRepresentation.style.display = 'none';
        }

        // Show modal with animation
        modal.classList.add('show');
    }

    function closeModal() {
        // Hide modal with animation
        modal.classList.remove('show');
    }

    // Use event delegation on members-grid container
    const membersGrid = document.querySelector('.members-grid');
    if (membersGrid) {
        membersGrid.addEventListener('click', (event) => {
            const target = event.target;
            if (target.classList.contains('see-more-btn')) {
                const index = target.getAttribute('data-index');
                if (index !== null) {
                    openModal(index);
                }
            }
        });
    }

    modalCloseBtn.addEventListener('click', () => {
        closeModal();
    });

    // Close modal when clicking outside modal content
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });
});
