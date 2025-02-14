document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger, TextPlugin);

    // Efek parallax untuk hero
    function parallaxEffect() {
        let text = document.getElementById("text");
        let leaf = document.getElementById("leaf");
        let hill1 = document.getElementById("hill1");
        let hill4 = document.getElementById("hill4");
        let hill5 = document.getElementById("hill5");

        window.addEventListener("scroll", () => {
            let value = window.scrollY;
            if (value < 500) {
                text.style.marginTop = value * 2.5 + "px";
                leaf.style.top = value * -1.5 + "px";
                leaf.style.left = value * 1.5 + "px";
                hill5.style.left = value * 1.5 + "px";
                hill4.style.left = value * -1.5 + "px";
                hill1.style.top = value * 1 + "px";
            }
        });

        gsap.to(".parallax-container", {
            scale: 1.2,
            duration: 1.5,
            ease: "power1.out",
            scrollTrigger: {
                trigger: ".parallax-container",
                start: "top top",
                end: "bottom top",
                scrub: 1,
                pin: true,
            },
        });

        gsap.fromTo(
            "#tree",
            { y: window.innerHeight * 1.2, opacity: 1 }, // Mulai dari bawah layar
            {
                y: -65, // Naik ke posisi target
                opacity: 1,
                duration: 4,
                ease: "power1.out",
                scrollTrigger: {
                    trigger: "#tree",
                    start: "top 100%", // Animasi mulai saat elemen masuk viewport
                    end: "+=" + window.innerHeight * 0.5, // Perjalanan lebih smooth
                    scrub: 1,
                },
            }
        );
    }

    // Animasi sticky cards dengan ScrollTrigger dan Lenis
    function animateStickyCards() {
        const lenis = new Lenis();
        lenis.on("scroll", ScrollTrigger.update);
        gsap.ticker.add((time) => lenis.raf(time * 1000));
        gsap.ticker.lagSmoothing(0);

        const stickySection = document.querySelector(".steps");
        const stickyHeight = window.innerHeight * 7;
        const cards = document.querySelectorAll(".card");
        const totalCards = cards.length;

        ScrollTrigger.create({
            trigger: stickySection,
            start: "top top",
            end: `+=${stickyHeight}px`,
            pin: true,
            pinSpacing: true,
            onUpdate: (self) => {
                positionCards(self.progress);
            },
        });

        const getRadius = () =>
            window.innerWidth < 900
                ? window.innerWidth * 7.5
                : window.innerWidth * 2.5;
        const arcAngle = Math.PI * 0.4;
        const startAngle = Math.PI / 2 - arcAngle / 2;

        function positionCards(progress = 0) {
            const radius = getRadius();
            const totalTravel = 1 + totalCards / 7.5;
            const adjustedProgress = (progress * totalTravel - 1) * 0.75;

            cards.forEach((card, i) => {
                const normalizedProgress = (totalCards - 1 - i) / totalCards;
                const cardProgress = normalizedProgress + adjustedProgress;
                const angle = startAngle + arcAngle * cardProgress;
                const x = Math.cos(angle) * radius;
                const y = Math.sin(angle) * radius;
                const rotation = (angle - Math.PI / 2) * (180 / Math.PI);

                gsap.set(card, {
                    x: x,
                    y: -y + radius,
                    rotation: -rotation,
                    transformOrigin: "center center",
                });
            });
        }

        positionCards(0);

        let currentCardIndex = 0;
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let cardIndex = Array.from(cards).indexOf(entry.target);
                        currentCardIndex = cardIndex;
                        console.log(currentCardIndex);
                        const targetY = 150 - currentCardIndex * 150;
                        gsap.to(countContainer, {
                            y: targetY,
                            duration: 0.3,
                            ease: "power1.out",
                            overwrite: true,
                        });
                    }
                });
            },
            { root: null, rootMargin: "0% 0%", threshold: 0.5 }
        );

        cards.forEach((card) => observer.observe(card));
        window.addEventListener("resize", () => positionCards(0));
    }

    // Panggil fungsi yang sudah disusun
    parallaxEffect();
    animateStickyCards();
});
