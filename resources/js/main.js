document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger, TextPlugin);

    // Efek parallax untuk hero
    function parallaxEffect() {
        gsap.timeline({
            scrollTrigger: {
                trigger: ".parallax-container",
                start: "top top",
                end: "500% top",
                scrub: 3,
                pin: true,
            },
        })

            .to(".parallax-container", {
                scale: 1.2,
                duration: 1.5,
                ease: "power1.out",
            })

            // .to(
            //     "#text",
            //     {
            //         marginTop: "1250px",
            //     },
            //     "<"
            // )

            // .to(
            //     "#leaf",
            //     {
            //         top: "-750px",
            //         left: "750px",
            //     },
            //     "<"
            // )

            .to(
                "#tanah2",
                {
                    left: "750px",
                },
                "<"
            )

            .to(
                "#plant2",
                {
                    left: "-750px",
                },
                "<"
            )

            .to(
                "#gunung2",
                {
                    top: "500px",
                },
                "<"
            )
            .to(
                "#plant1",
                {
                    left: "750px",
                },
                "<"
            )

            // .fromTo(
            //     "#tree",
            //     {
            //         y: 500,
            //     },
            //     {
            //         y: -100,
            //         duration: 1.5,
            //         ease: "power2.out",
            //     }
            // )

            .to("#tree", {
                scale: 50,
                duration: 5,
                ease: "power1.inOut",
            });
    }

    // Animasi sticky cards dengan ScrollTrigger dan Lenis
    function animateStickyCards() {
        gsap.from(".steps div", {
            opacity: 0,
            duration: 1,
            ease: "power2.inOut",
            scrollTrigger: {
                trigger: ".steps",
                start: "top top",
                end: "bottom top",
                scrub: 3,
            },
        });

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
            onUpdate: (self) => positionCards(self.progress),
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

        cards.forEach((card) => observer.observe(card));
        window.addEventListener("resize", () => positionCards(0));
    }

    // Hanya memanggil parallaxEffect, animateStickyCards akan dipanggil setelah parallax selesai
    parallaxEffect();
    animateStickyCards();
});
