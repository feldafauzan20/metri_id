import Swiper from "swiper";
import "swiper/css";

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

import Lenis from "lenis";

gsap.registerPlugin(ScrollTrigger);

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
    .fromTo(
        "#sun",
        { y: "20vh" },
        { y: "0vh", duration: 0.5, ease: "power1.out" }
    )
    .to("#plant1", { duration: 1, left: "50vw" }, "<")
    .to("#plant2", { duration: 2, left: "-50vw" }, "<")
    .to("#bird1", { duration: 3, left: "50vw" }, "<")
    .to("#bird2", { duration: 4, left: "-50vw" }, "<")
    .to("#tree", { scale: 5, duration: 5, ease: "power1.inOut" })
    .to("#overlay", { opacity: 1, duration: 1, ease: "power2.inOut" }) // Fade Out
    .to(".parallax-container", { opacity: 0, duration: 0.5 }, "-=0.5") // Hilangkan parallax
    .to("#overlay", { opacity: 0, duration: 1, ease: "power2.inOut" }) // Fade In ke section berikutnya
    .to(".mysteps", { opacity: 1, duration: 1.5, ease: "power2.out" }, "-=1"); // Tampilkan section berikutnya

// mysteps cards animation
gsap.from(".mysteps div", {
    opacity: 0,
    duration: 1,
    ease: "power2.inOut",
    scrollTrigger: {
        trigger: ".mysteps",
        start: "top top",
        end: "bottom top",
        scrub: 3,
    },
});

// Sticky cards setup
const stickySection = document.querySelector(".mysteps");
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
    window.innerWidth < 900 ? window.innerWidth * 7.5 : window.innerWidth * 2.5;
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

function animateCounter(selector) {
    const element = document.querySelector(selector);
    if (!element) return;

    const finalValue = parseInt(element.dataset.value) || 0; // Pastikan angka bulat
    const value = { value: 0 };

    gsap.to(value, {
        duration: 2,
        ease: "power1.out",
        value: finalValue,
        onUpdate: () => {
            element.textContent = Math.round(value.value); // Hanya angka bulat
        }
    });
}

// Panggil fungsi untuk setiap counter
animateCounter(".cs-text1");
animateCounter(".cs-text2");
animateCounter(".cs-text3");
animateCounter(".cs-text4");


// Swiper slider setup
const swiper = new Swiper(".swiper", {
    slidesPerView: 5, // 5 logo per baris
    spaceBetween: 20, // Jarak antar logo
    loop: true,
});

document.querySelector(".button-prev").addEventListener("click", () => {
    swiper.slidePrev();
});

document.querySelector(".button-next").addEventListener("click", () => {
    swiper.slideNext();
});
