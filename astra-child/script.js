document.addEventListener("DOMContentLoaded", () => {

    const targets = document.querySelectorAll(".fade-in");

    const observer = new IntersectionObserver((entries) => {

        entries.forEach((entry) => {

            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
		observer.unobserve(entry.target);
            }

        });

    }, {
        threshold: 0.2,
	rootMargin: "0px 0px -80px 0px",
    });

    targets.forEach((target) => {
        observer.observe(target);
    });

});