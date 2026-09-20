/* ==========================================================================
   MAIN.JS — Application Logic & Event Handlers
   C28Coffee / BR Cafe Landing Page
   ========================================================================== */

document.addEventListener("DOMContentLoaded", () => {
  /* ----------------------------------------
     SIGNUP MODAL — open / close
  ---------------------------------------- */
  const signupModal = document.getElementById("signup-modal");
  const openModalBtn = document.getElementById("open-signup-modal-btn");
  const closeModalBtn = document.getElementById("close-signup-modal-btn");

  /** Open the signup modal */
  function openModal() {
    if (signupModal) signupModal.classList.remove("hidden");
  }

  /** Close the signup modal */
  function closeModal() {
    if (signupModal) signupModal.classList.add("hidden");
  }

  // Open modal on "Claim Welcome Drink" button click
  if (openModalBtn) {
    openModalBtn.addEventListener("click", openModal);
  }

  // Close modal on ✕ button click
  if (closeModalBtn) {
    closeModalBtn.addEventListener("click", closeModal);
  }

  // Close modal when clicking the backdrop (outside the modal card)
  if (signupModal) {
    signupModal.addEventListener("click", (e) => {
      if (e.target === signupModal) closeModal();
    });
  }

  /* ----------------------------------------
     FOOTER FORM — subscription
  ---------------------------------------- */

  const newsletterForm = document.getElementById("newsletter-form");

  if (newsletterForm) {
    newsletterForm.addEventListener("submit", (e) => {
      e.preventDefault();
      alert("Thank you for subscribing to BR Cafe.");
      newsletterForm.reset();
    });
  }

  /* ----------------------------------------
     SIGNUP MODAL FORM — welcome drink claim
  ---------------------------------------- */

  const signupForm = document.getElementById("signup-form");

  if (signupForm) {
    signupForm.addEventListener("submit", (e) => {
      e.preventDefault();
      alert("Welcome drink barcode sent to your inbox!");
      closeModal();
      signupForm.reset();
    });
  }

  /* ----------------------------------------
     ACTIVE NAV HIGHLIGHT — Intersection Observer
  ---------------------------------------- */

  const sections = document.querySelectorAll("section[id], footer[id]");
  const navLinks = document.querySelectorAll("nav a[href^='#']");

  // Class saat link AKTIF (sedang di section ini)
  const activeClasses = [
    "text-primary-container",
    "font-bold",
    "border-b",
    "border-primary-container",
  ];
  // Class saat link TIDAK aktif
  const inactiveClasses = [
    "text-on-surface-variant",
    "font-label-md",
    "text-label-md",
  ];

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // 1. Reset semua nav link ke tampilan tidak aktif
          navLinks.forEach((link) => {
            link.classList.remove(...activeClasses);
            link.classList.add(...inactiveClasses);
            link.removeAttribute("aria-current");
          });

          // 2. Cari nav link yang href-nya cocok dengan id section yang aktif
          const activeLink = document.querySelector(
            `nav a[href="#${entry.target.id}"]`,
          );

          // 3. Terapkan class aktif ke link yang cocok
          if (activeLink) {
            activeLink.classList.add(...activeClasses);
            activeLink.classList.remove(...inactiveClasses);
            activeLink.setAttribute("aria-current", "page");
          }
        }
      });
    },
    {
      threshold: 0.4,
      rootMargin: "-80px 0px 0px 0px", // Offset tinggi navbar (80px)
    },
  );

  // Mulai mengawasi tiap section yang punya id
  sections.forEach((s) => observer.observe(s));
});
