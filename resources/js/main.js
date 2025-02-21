import Swiper from "swiper/bundle";
import "swiper/css/bundle";

document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger, TextPlugin);

    // Lenis smooth scroll setup
    const lenis = new Lenis();
    lenis.on("scroll", ScrollTrigger.update);
    gsap.ticker.add((time) => lenis.raf(time * 1000));
    gsap.ticker.lagSmoothing(0);

    // Parallax animation
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
        .fromTo(
            "#tree",
            {
                y: 500,
            },
            {
                y: -50,
                duration: 1.5,
                ease: "power2.out",
            }
        )
        .to("#tree", {
            scale: 10,
            duration: 5,
            delay: 3,
            ease: "power1.inOut",
        })

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
        .to("#tree", {
            scale: 50,
            duration: 5,
            ease: "power1.inOut",
        });

    // Steps cards animation
    gsap.from(".steps div", {
        opacity: 1,
        duration: 1,
        ease: "power2.inOut",
        scrollTrigger: {
            trigger: ".steps",
            start: "top top",
            end: "bottom top",
            scrub: 3,
        },
    });

    // Sticky cards setup
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

    // Cards positioning helper functions
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
    window.addEventListener("resize", () => positionCards(0));

    // Animation counter
    const counterConfig = {
        scrollTrigger: {
            trigger: ".customer-support",
            start: "top center",
            once: true,
        },
        duration: 3,
    };

    // Counter 1
    const element1 = document.querySelector(".cs-text1");
    const value1 = { value: 0 };
    gsap.to(value1, {
        ...counterConfig,
        value: 99.9,
        onUpdate: () => {
            element1.textContent = parseFloat(value1.value).toFixed(1);
        },
    });

    // Counter 2
    const element2 = document.querySelector(".cs-text2");
    const value2 = { value: 0 };
    gsap.to(value2, {
        ...counterConfig,
        value: 24,
        onUpdate: () => {
            element2.textContent = Math.round(value2.value);
        },
    });

    // Counter 3
    const element3 = document.querySelector(".cs-text3");
    const value3 = { value: 0 };
    gsap.to(value3, {
        ...counterConfig,
        value: 20,
        onUpdate: () => {
            element3.textContent = Math.round(value3.value);
        },
    });

    // Counter 4
    const element4 = document.querySelector(".cs-text4");
    const value4 = { value: 0 };
    gsap.to(value4, {
        ...counterConfig,
        value: 0.05,
        onUpdate: () => {
            element4.textContent = parseFloat(value4.value).toFixed(2);
        },
    });

    // Swiper slider setup
    const swiper = new Swiper(".swiper", {
        direction: "horizontal",
        loop: true,
        slidesPerView: 3,
        spaceBetween: 30,
        allowTouchMove: false,
    });

    document.querySelector(".button-prev").addEventListener("click", () => {
        swiper.slidePrev();
    });

    document.querySelector(".button-next").addEventListener("click", () => {
        swiper.slideNext();
    });
});
