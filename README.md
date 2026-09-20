# C28Coffee — BR Cafe Landing Page

Landing page untuk BR Cafe, sebuah specialty coffee shop dengan konsep artisanal roastery.
Dibangun dengan HTML semantik, TailwindCSS (CDN), dan Vanilla JavaScript.

---

## 📁 Struktur Proyek

```
C28Coffee/
├── index.html              ← Entry point utama — HTML structure lengkap
│
├── css/
│   └── base.css            ← Global reset, scrollbar hide, base layer styles
│
├── js/
│   ├── tailwind.config.js  ← Custom design tokens Tailwind (warna, spacing, font)
│   └── main.js             ← Logika interaktif (modal, form handlers)
│
└── sections/               ← Template referensi per-section (untuk navigasi & dev)
    ├── header.html         ← Navbar / Header
    ├── hero.html           ← Hero section
    ├── membership.html     ← Membership perks & coffee club CTA
    ├── menu.html           ← Revelation menu (4 item cards)
    ├── visit.html          ← Visit us — lokasi & foto editorial
    ├── footer.html         ← Footer — brand, newsletter, nav kolom
    └── modal.html          ← Signup modal dialog
```

---

## 🚀 Cara Menjalankan

Cukup buka `index.html` di browser — tidak perlu build step atau server khusus.

> **Tips**: Gunakan ekstensi **Live Server** di VS Code untuk auto-reload saat mengedit file.

---

## 🎨 Design System

Design tokens didefinisikan di [`js/tailwind.config.js`](js/tailwind.config.js).

### Warna Utama

| Token                    | Nilai     | Keterangan                         |
| ------------------------ | --------- | ---------------------------------- |
| `primary-container`      | `#2b1810` | Coklat espresso tua — elemen utama |
| `secondary`              | `#8e4e00` | Amber — aksen & highlight          |
| `surface` / `background` | `#fef8f4` | Warm off-white — background utama  |
| `on-surface-variant`     | `#4f4440` | Teks sekunder                      |

### Tipografi

| Role                           | Font              | Digunakan untuk       |
| ------------------------------ | ----------------- | --------------------- |
| `display-lg`, `headline-*`     | Playfair Display  | Judul, heading besar  |
| `body-*`, `label-*`, `title-*` | Plus Jakarta Sans | Body text, label, nav |

---

## ⚡ JavaScript (js/main.js)

Semua logika interaktif menggunakan `addEventListener` yang bersih — tidak ada `onclick` inline di HTML.

| ID Elemen                 | Fungsi                       |
| ------------------------- | ---------------------------- |
| `#open-signup-modal-btn`  | Membuka signup modal         |
| `#close-signup-modal-btn` | Menutup signup modal         |
| `#signup-modal`           | Backdrop click → tutup modal |
| `#newsletter-form`        | Submit newsletter footer     |
| `#signup-form`            | Submit form di dalam modal   |

---

## 📐 Sections

| Section          | ID / Anchor              | Keterangan                                 |
| ---------------- | ------------------------ | ------------------------------------------ |
| Header           | _(fixed, selalu tampil)_ | Navbar dengan nav links & CTA              |
| Hero             | —                        | Headline, CTA, social proof metrics        |
| Membership Perks | `#membership-perks`      | 3 perk cards + coffee club CTA             |
| Revelation Menu  | `#revelation-menu`       | 4 menu item cards (2x2 grid)               |
| Visit Us         | `#visit-us`              | Alamat, jam buka, amenities, foto          |
| Footer           | —                        | Newsletter, nav kolom, legal               |
| Modal            | `#signup-modal`          | Dialog signup (tersembunyi secara default) |

---

## 🛠️ Pengembangan Selanjutnya

Beberapa arah pengembangan yang direkomendasikan:

- **Responsif Mobile** — Tambahkan hamburger menu untuk navbar di layar kecil
- **Animasi Scroll** — Integrasikan [Intersection Observer API](https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API) untuk fade-in on scroll
- **Backend Form** — Hubungkan form newsletter & signup ke Formspree / Netlify Forms / API custom
- **Multi-halaman** — Pisahkan Menu, About, Contact menjadi halaman terpisah dengan routing
- **Build Tool** — Migrasi ke Vite + Tailwind CLI untuk production bundle yang optimal
