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
    .to("#scroll", { opacity: 0, duration: 0.5, ease: "power1.out" })
    .fromTo(
        "#sun",
        { y: "20vh" },
        { y: "-3vh", duration: 0.5, ease: "power1.out" }
    )
    .to("#plant1", { duration: 1, left: "70vw" }, "<")
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
const getRadius = () => {
    // Radius yang konsisten berdasarkan viewport height
    return window.innerHeight * 3;
};

// Sudut arc yang konsisten
const arcAngle = Math.PI * 0.6;
const startAngle = Math.PI / 2 - arcAngle / 2;

// Jarak antar card yang konsisten
const cardSpacing = arcAngle / (totalCards - 1);

function getCardSize() {
    // Ukuran kartu responsif berdasarkan tinggi viewport
    const baseHeight = window.innerHeight * 0.7; // 60% dari tinggi viewport
    const aspectRatio = 500 / 550; // Mempertahankan aspect ratio asli
    const width = baseHeight * aspectRatio;

    return {
        width: width,
        height: baseHeight,
    };
}

function positionCards(progress = 0) {
    const radius = getRadius();
    const totalTravel = 1 + totalCards / 7.5;
    const adjustedProgress = (progress * totalTravel - 1) * 0.75;
    const cardSize = getCardSize();

    cards.forEach((card, i) => {
        // Menggunakan cardSpacing untuk jarak yang konsisten
        const angle =
            startAngle + cardSpacing * i + arcAngle * adjustedProgress;
        const x = Math.cos(angle) * radius;
        const y = Math.sin(angle) * radius;
        const rotation = (angle - Math.PI / 2) * (180 / Math.PI);

        gsap.set(card, {
            x: x,
            y: -y + radius,
            rotation: -rotation,
            transformOrigin: "center center",
            width: cardSize.width,
            height: cardSize.height,
            scale: 1, // Memastikan skala tetap konsisten
        });
    });
}

// Inisialisasi posisi kartu
positionCards(0);

// Update saat window diresize
window.addEventListener("resize", () => {
    positionCards(0);
});

// Animation counter
const counterConfig = {
    scrollTrigger: {
        trigger: ".customer-support",
        start: "top center",
        once: true,
    },
    duration: 3,
};

// Counter animations
const counterElements = [
    { selector: ".cs-text1", value: 99.9, decimals: 1 },
    { selector: ".cs-text2", value: 24, decimals: 0 },
    { selector: ".cs-text3", value: 20, decimals: 0 },
    { selector: ".cs-text4", value: 0.05, decimals: 2 },
];

counterElements.forEach(({ selector, value, decimals }) => {
    const element = document.querySelector(selector);
    const counterValue = { value: 0 };
    gsap.to(counterValue, {
        ...counterConfig,
        value: value,
        onUpdate: () => {
            element.textContent = parseFloat(counterValue.value).toFixed(
                decimals
            );
        },
    });
});

// Swiper slider setup
const swiper = new Swiper(".swiper", {
    slidesPerView: 5,
    spaceBetween: 20,
    loop: true,
});

document.querySelector(".button-prev").addEventListener("click", () => {
    swiper.slidePrev();
});

document.querySelector(".button-next").addEventListener("click", () => {
    swiper.slideNext();
});

// === To Top Button Feature ===
const toTopBtn = document.createElement("button");
toTopBtn.id = "toTopBtn";
toTopBtn.textContent = "↑";
toTopBtn.style.cssText = `
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 10px 15px;
    border-radius: 50%;
    border: none;
    cursor: pointer;
    font-size: 20px;
    opacity: 0;
    transition: opacity 0.3s;
    z-index: 1000;
`;
document.body.appendChild(toTopBtn);

// Handle scroll event
window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
        toTopBtn.style.opacity = "1";
    } else {
        toTopBtn.style.opacity = "0";
    }
});

// Scroll to top on click
toTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});
