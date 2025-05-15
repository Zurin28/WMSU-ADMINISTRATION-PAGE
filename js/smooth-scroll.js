document.addEventListener('DOMContentLoaded', () => {
    const scrollBtn = document.getElementById('learn-more-btn');
    
    scrollBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const headingElement = document.querySelector('h2[id="org-chart"]');
        
        if (headingElement) {
            // Add offset to account for fixed navbar (80px) and some padding
            const offset = 100;
            const elementPosition = headingElement.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    });
});