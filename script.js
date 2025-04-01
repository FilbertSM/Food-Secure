// Initialize AOS
AOS.init({ duration: 1000, once: true });

// Animated Counter Logic
document.addEventListener('aos:in', ({ detail }) => {
    if (detail.classList.contains('stats')) {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const updateCounter = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / 200; // Adjust speed
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 10);
                } else {
                    counter.innerText = target;
                }
            };
            updateCounter();
        });
    }
});