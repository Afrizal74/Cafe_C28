<?php
$pageTitle = 'Pesanan';
$activePage = 'pesanan';
$breadcrumb = 'Pesanan';
require_once __DIR__ . '/includes/header.php';
?>

<main class="w-full pt-16 bg-surface">
      <div class="flex flex-col w-full">
        <div class="p-margin-mobile md:p-margin flex flex-col gap-6 max-w-[1560px] mx-auto w-full">
          <!-- Header Section with Artisanal Flair -->
          <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-2">
            <div class="flex flex-col gap-1.5 max-w-2xl">
              <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-secondary"></span>
                <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase font-semibold">C28 COFFEE CLUB • ROASTERY DISPATCH</span>
              </div>
              <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Daftar Pesanan</h1>
              <p class="font-body-md text-body-md text-outline">
                Pantau antrean pesanan aktif, pesanan selesai, dan status pembuatan minuman barista secara real-time.
              </p>
            </div>
            <!-- Quick Metrics Strip -->
            <div class="grid grid-cols-3 gap-3 w-full lg:w-auto">
              <div class="bg-surface-container-lowest p-3.5 rounded-xl shadow-sm flex flex-col gap-1 min-w-[130px]">
                <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Pesanan Aktif</span>
                <div class="flex items-baseline gap-1.5">
                  <span class="font-headline-md text-headline-md text-on-surface">7</span>
                  <span class="font-label-sm text-label-sm text-secondary font-semibold">antrean</span>
                </div>
              </div>
              <div class="bg-surface-container-lowest p-3.5 rounded-xl shadow-sm flex flex-col gap-1 min-w-[140px]">
                <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Avg. Waktu</span>
                <div class="flex items-baseline gap-1.5">
                  <span class="font-headline-md text-headline-md text-on-surface">4.5</span>
                  <span class="font-label-sm text-label-sm text-outline">Menit</span>
                </div>
              </div>
              <div class="bg-surface-container-lowest p-3.5 rounded-xl shadow-sm flex flex-col gap-1 min-w-[150px]">
                <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Omset Hari Ini</span>
                <div class="flex items-baseline gap-1">
                  <span class="font-headline-sm text-headline-sm text-on-surface">Rp 1,45M</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Filter & Toolbar Bar -->
          <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-surface-container-lowest p-2.5 rounded-xl shadow-sm">
            <!-- Status Tabs -->
            <div class="flex items-center gap-1.5 overflow-x-auto pb-1 md:pb-0" id="filter-tabs">
              <button class="filter-btn active flex items-center gap-2 px-3.5 py-2 rounded-lg bg-primary-container text-surface-container-lowest font-title-sm text-title-sm transition-all" data-status="all">
                <span>Semua Pesanan</span>
                <span class="px-1.5 py-0.5 text-[11px] rounded-full bg-surface-container-lowest/20 text-surface-container-lowest">18</span>
              </button>
              <button class="filter-btn flex items-center gap-2 px-3.5 py-2 rounded-lg text-outline hover:bg-surface-container-low hover:text-on-surface font-title-sm text-title-sm transition-all" data-status="diproses">
                <span>Diproses Barista</span>
                <span class="px-1.5 py-0.5 text-[11px] rounded-full bg-surface-container-high text-secondary font-bold">4</span>
              </button>
              <button class="filter-btn flex items-center gap-2 px-3.5 py-2 rounded-lg text-outline hover:bg-surface-container-low hover:text-on-surface font-title-sm text-title-sm transition-all" data-status="siap">
                <span>Siap Diambil</span>
                <span class="px-1.5 py-0.5 text-[11px] rounded-full bg-secondary-fixed text-on-secondary-fixed font-bold">3</span>
              </button>
              <button class="filter-btn flex items-center gap-2 px-3.5 py-2 rounded-lg text-outline hover:bg-surface-container-low hover:text-on-surface font-title-sm text-title-sm transition-all" data-status="selesai">
                <span>Selesai Hari Ini</span>
                <span class="px-1.5 py-0.5 text-[11px] rounded-full bg-surface-container text-on-surface-variant">11</span>
              </button>
            </div>
            <!-- Search & Date Filter -->
            <div class="flex items-center gap-2.5 w-full md:w-auto">
              <div class="relative flex-1 md:w-64">
                <span class="material-symbols-outlined absolute left-3 top-2.5 text-outline text-[18px]">search</span>
                <input class="w-full h-10 pl-9 pr-3 rounded-lg bg-surface-container-low text-on-surface placeholder:text-outline font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest focus:ring-1 focus:ring-secondary transition-all" id="order-search" placeholder="Cari kode #ORD / pemesan..." type="text" />
              </div>
              <button class="h-10 px-3.5 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface flex items-center gap-2 font-label-md text-label-md transition-colors flex-shrink-0">
                <span class="material-symbols-outlined text-[18px] text-outline">calendar_today</span>
                <span>Hari Ini</span>
                <span class="material-symbols-outlined text-[16px] text-outline">expand_more</span>
              </button>
              <button class="h-10 w-10 rounded-lg bg-secondary text-on-secondary flex items-center justify-center hover:bg-on-secondary-container transition-colors shadow-sm flex-shrink-0" title="Cetak KOT / Tiket">
                <span class="material-symbols-outlined text-[20px]">print</span>
              </button>
            </div>
          </div>
          <!-- Active Stream Grid of Orders -->
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5" id="orders-container">
            <!-- Order 1: Diproses Barista -->
            <div class="order-card flex flex-col justify-between bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow" data-status="diproses">
              <div>
                <!-- Card Header Bar -->
                <div class="p-4 bg-surface-container-low/70 flex items-start justify-between gap-3">
                  <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                      <span class="font-label-lg text-label-lg font-bold text-on-surface tracking-tight">#ORD-28091</span>
                      <span class="px-2 py-0.5 rounded-full bg-secondary/10 text-secondary font-label-sm text-label-sm font-semibold">Meja 04</span>
                    </div>
                    <div class="flex items-center gap-1.5 mt-1 text-outline font-body-sm text-body-sm">
                      <span class="font-medium text-on-surface">Raja Habib</span>
                      <span class="w-1 h-1 rounded-full bg-outline"></span>
                      <span class="inline-flex items-center gap-0.5 text-secondary font-label-sm text-label-sm font-bold">
                        <span class="material-symbols-outlined text-[14px]">stars</span> Member
                      </span>
                    </div>
                  </div>
                  <!-- Status Badge Amber Warm -->
                  <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-on-secondary-container font-label-sm text-label-sm font-semibold animate-pulse">
                    <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                    Diproses Barista
                  </span>
                </div>
                <!-- Items list -->
                <div class="p-4 flex flex-col gap-3.5">
                  <div class="flex items-start justify-between gap-2">
                    <div class="flex flex-col min-w-0">
                      <div class="flex items-baseline gap-2">
                        <span class="font-title-sm text-title-sm text-on-surface font-semibold">2x C28 Signature Latte</span>
                      </div>
                      <div class="flex flex-wrap gap-1 mt-1">
                        <span class="px-1.5 py-0.5 rounded bg-surface-container-high/60 text-on-surface-variant font-label-sm text-label-sm">Less Sweet</span>
                        <span class="px-1.5 py-0.5 rounded bg-surface-container-high/60 text-on-surface-variant font-label-sm text-label-sm">Oatmilk Sub</span>
                      </div>
                    </div>
                    <span class="font-label-md text-label-md text-on-surface tabular-nums">Rp 76.000</span>
                  </div>
                  <div class="flex items-start justify-between gap-2">
                    <div class="flex flex-col min-w-0">
                      <span class="font-title-sm text-title-sm text-on-surface font-semibold">1x Butter Croissant</span>
                      <span class="font-body-sm text-body-sm text-outline">Warmed Up / Serving Board</span>
                    </div>
                    <span class="font-label-md text-label-md text-on-surface tabular-nums">Rp 22.000</span>
                  </div>
                  <!-- Notes Callout -->
                  <div class="p-2.5 rounded-lg bg-surface-container-low text-on-surface-variant flex items-center gap-2 font-body-sm text-body-sm">
                    <span class="material-symbols-outlined text-secondary text-[16px]">info</span>
                    <span class="truncate">Pelanggan minta disajikan bersamaan.</span>
                  </div>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="p-4 bg-surface-container-low/40 flex items-center justify-between gap-3">
                <div class="flex flex-col">
                  <span class="font-label-sm text-label-sm text-outline">Total Tagihan</span>
                  <span class="font-title-md text-title-md text-on-surface font-bold tabular-nums">Rp 98.000</span>
                </div>
                <button class="mark-ready-btn px-4 py-2 rounded-lg bg-secondary hover:bg-on-secondary-container text-on-secondary font-title-sm text-title-sm flex items-center gap-1.5 shadow-sm transition-all active:scale-95">
                  <span class="material-symbols-outlined text-[18px]">done_all</span>
                  <span>Tandai Siap</span>
                </button>
              </div>
            </div>
            <!-- Order 2: Siap Diambil -->
            <div class="order-card flex flex-col justify-between bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow ring-1 ring-secondary/30" data-status="siap">
              <div>
                <!-- Card Header Bar -->
                <div class="p-4 bg-secondary-fixed/30 flex items-start justify-between gap-3">
                  <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                      <span class="font-label-lg text-label-lg font-bold text-on-surface tracking-tight">#ORD-28092</span>
                      <span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-label-sm font-semibold flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">takeout_dining</span> Takeaway
                      </span>
                    </div>
                    <div class="flex items-center gap-1.5 mt-1 text-outline font-body-sm text-body-sm">
                      <span class="font-medium text-on-surface">Siti Nurhaliza</span>
                      <span class="w-1 h-1 rounded-full bg-outline"></span>
                      <span class="inline-flex items-center gap-0.5 text-secondary font-label-sm text-label-sm font-bold">
                        <span class="material-symbols-outlined text-[14px]">stars</span> Member
                      </span>
                    </div>
                  </div>
                  <!-- Status Badge Green / Ready -->
                  <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold">
                    <span class="material-symbols-outlined text-[14px]">notifications_active</span>
                    Siap Diambil
                  </span>
                </div>
                <!-- Items list -->
                <div class="p-4 flex flex-col gap-3.5">
                  <div class="flex items-start justify-between gap-2">
                    <div class="flex flex-col min-w-0">
                      <span class="font-title-sm text-title-sm text-on-surface font-semibold">1x Caramel Macchiato</span>
                      <span class="font-body-sm text-body-sm text-outline">Normal Ice, Extra Drizzle</span>
                    </div>
                    <span class="font-label-md text-label-md text-on-surface tabular-nums">Rp 42.000</span>
                  </div>
                  <div class="flex items-start justify-between gap-2">
                    <div class="flex flex-col min-w-0">
                      <span class="font-title-sm text-title-sm text-on-surface font-semibold">1x Iced Americano</span>
                      <span class="font-body-sm text-body-sm text-outline">Double Shot Flores Bajawa</span>
                    </div>
                    <span class="font-label-md text-label-md text-on-surface tabular-nums">Rp 32.000</span>
                  </div>
                  <div class="p-2.5 rounded-lg bg-surface-container-high/40 text-on-secondary-container flex items-center gap-2 font-body-sm text-body-sm">
                    <span class="material-symbols-outlined text-[16px]">check_circle</span>
                    <span class="truncate">Di Pick-up Station #02 (Sudah Dipanggil)</span>
                  </div>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="p-4 bg-surface-container-low/40 flex items-center justify-between gap-3">
                <div class="flex flex-col">
                  <span class="font-label-sm text-label-sm text-outline">Total Tagihan</span>
                  <span class="font-title-md text-title-md text-on-surface font-bold tabular-nums">Rp 74.000</span>
                </div>
                <button class="complete-btn px-4 py-2 rounded-lg bg-primary-container hover:bg-on-primary-fixed-variant text-surface-container-lowest font-title-sm text-title-sm flex items-center gap-1.5 shadow-sm transition-all active:scale-95">
                  <span class="material-symbols-outlined text-[18px]">verified</span>
                  <span>Selesaikan</span>
                </button>
              </div>
            </div>
            <!-- Order 3: Diproses Barista -->
            <div class="order-card flex flex-col justify-between bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow" data-status="diproses">
              <div>
                <!-- Card Header Bar -->
                <div class="p-4 bg-surface-container-low/70 flex items-start justify-between gap-3">
                  <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                      <span class="font-label-lg text-label-lg font-bold text-on-surface tracking-tight">#ORD-28093</span>
                      <span class="px-2 py-0.5 rounded-full bg-secondary/10 text-secondary font-label-sm text-label-sm font-semibold">Meja 07</span>
                    </div>
                    <div class="flex items-center gap-1.5 mt-1 text-outline font-body-sm text-body-sm">
                      <span class="font-medium text-on-surface">Budi Santoso</span>
                      <span class="w-1 h-1 rounded-full bg-outline"></span>
                      <span class="font-label-sm text-label-sm text-outline">Non-Member</span>
                    </div>
                  </div>
                  <!-- Status Badge Amber Warm -->
                  <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-on-secondary-container font-label-sm text-label-sm font-semibold">
                    <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                    Diproses Barista
                  </span>
                </div>
                <!-- Items list -->
                <div class="p-4 flex flex-col gap-3.5">
                  <div class="flex items-start justify-between gap-2">
                    <div class="flex flex-col min-w-0">
                      <span class="font-title-sm text-title-sm text-on-surface font-semibold">1x Espresso Double</span>
                      <span class="font-body-sm text-body-sm text-outline">House Blend Dark Roast</span>
                    </div>
                    <span class="font-label-md text-label-md text-on-surface tabular-nums">Rp 26.000</span>
                  </div>
                  <div class="flex items-start justify-between gap-2">
                    <div class="flex flex-col min-w-0">
                      <span class="font-title-sm text-title-sm text-on-surface font-semibold">1x Cheese Bagel</span>
                      <span class="font-body-sm text-body-sm text-outline">Cream Cheese on Side</span>
                    </div>
                    <span class="font-label-md text-label-md text-on-surface tabular-nums">Rp 28.000</span>
                  </div>
                  <div class="p-2.5 rounded-lg bg-surface-container-low text-on-surface-variant flex items-center gap-2 font-body-sm text-body-sm">
                    <span class="material-symbols-outlined text-[16px] text-outline">timer</span>
                    <span>Waktu tunggu: ~3 menit tersisa</span>
                  </div>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="p-4 bg-surface-container-low/40 flex items-center justify-between gap-3">
                <div class="flex flex-col">
                  <span class="font-label-sm text-label-sm text-outline">Total Tagihan</span>
                  <span class="font-title-md text-title-md text-on-surface font-bold tabular-nums">Rp 54.000</span>
                </div>
                <button class="mark-ready-btn px-4 py-2 rounded-lg bg-secondary hover:bg-on-secondary-container text-on-secondary font-title-sm text-title-sm flex items-center gap-1.5 shadow-sm transition-all active:scale-95">
                  <span class="material-symbols-outlined text-[18px]">done_all</span>
                  <span>Tandai Siap</span>
                </button>
              </div>
            </div>
            <!-- Order 4: Selesai -->
            <div class="order-card flex flex-col justify-between bg-surface-container-lowest/80 rounded-xl shadow-sm overflow-hidden opacity-90 hover:opacity-100 transition-opacity" data-status="selesai">
              <div>
                <!-- Card Header Bar -->
                <div class="p-4 bg-surface-container-low/40 flex items-start justify-between gap-3">
                  <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                      <span class="font-label-lg text-label-lg font-bold text-outline tracking-tight">#ORD-28090</span>
                      <span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold">Dine In</span>
                    </div>
                    <div class="flex items-center gap-1.5 mt-1 text-outline font-body-sm text-body-sm">
                      <span class="font-medium text-on-surface">Dewi Lestari</span>
                    </div>
                  </div>
                  <!-- Status Badge Muted / Selesai -->
                  <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-medium">
                    <span class="material-symbols-outlined text-[14px]">check</span>
                    Selesai
                  </span>
                </div>
                <!-- Items list -->
                <div class="p-4 flex flex-col gap-3.5">
                  <div class="flex items-start justify-between gap-2">
                    <div class="flex flex-col min-w-0">
                      <span class="font-title-sm text-title-sm text-on-surface font-semibold">1x V60 Manual Brew</span>
                      <span class="font-body-sm text-body-sm text-outline">Gayo Natural anaerobic (200ml)</span>
                    </div>
                    <span class="font-label-md text-label-md text-on-surface tabular-nums">Rp 38.000</span>
                  </div>
                  <div class="p-2.5 rounded-lg bg-surface-container-low/60 text-outline flex items-center justify-between text-body-sm font-body-sm">
                    <span>Diserahkan: 10:14 WIB</span>
                    <span class="text-secondary font-medium">Lunas via QRIS</span>
                  </div>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="p-4 bg-surface-container-low/20 flex items-center justify-between gap-3">
                <div class="flex flex-col">
                  <span class="font-label-sm text-label-sm text-outline">Total Tagihan</span>
                  <span class="font-title-md text-title-md text-outline font-bold tabular-nums">Rp 38.000</span>
                </div>
                <button class="px-3.5 py-1.5 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface font-label-md text-label-md flex items-center gap-1 transition-colors">
                  <span class="material-symbols-outlined text-[16px]">receipt</span>
                  <span>Struk</span>
                </button>
              </div>
            </div>
          </div>
          <!-- Live Roastery & Barista Pulse Banner -->
          <div class="p-4 rounded-xl bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center text-secondary flex-shrink-0">
                <span class="material-symbols-outlined text-[22px]">save_as</span>
              </div>
              <div class="flex flex-col">
                <span class="font-title-sm text-title-sm text-on-surface">Bar Barista 1 &amp; 2 Beroperasi Optimal</span>
                <span class="font-body-sm text-body-sm text-outline">2 Barista Aktif: Dian Pratama · Yoga Sandi. Beban antrean saat ini normal (12 cup/jam).</span>
              </div>
            </div>
            <div class="flex items-center gap-2">
              <span class="w-2.5 h-2.5 rounded-full bg-secondary animate-ping"></span>
              <span class="font-label-md text-label-md font-semibold text-secondary">Sinkronisasi Otomatis Aktif</span>
            </div>
          </div>
        </div>
      </div>
      <script>
        (function() {
          const filterBtns = document.querySelectorAll('.filter-btn');
          const orderCards = document.querySelectorAll('.order-card');
          const searchInput = document.getElementById('order-search');

          function applyFilters() {
            const activeBtn = document.querySelector('.filter-btn.active');
            const targetStatus = activeBtn ? activeBtn.getAttribute('data-status') : 'all';
            const query = (searchInput?.value || '').toLowerCase().trim();

            orderCards.forEach(card => {
              const cardStatus = card.getAttribute('data-status');
              const textContent = card.textContent.toLowerCase();

              const matchStatus = (targetStatus === 'all') || (cardStatus === targetStatus);
              const matchSearch = !query || textContent.includes(query);

              if (matchStatus && matchSearch) {
                card.classList.remove('hidden');
              } else {
                card.classList.add('hidden');
              }
            });
          }

          filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
              filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-primary-container', 'text-surface-container-lowest');
                b.classList.add('text-outline');
                const badge = b.querySelector('span:last-child');
                if (badge && b.getAttribute('data-status') === 'all') {
                  badge.className = 'px-1.5 py-0.5 text-[11px] rounded-full bg-surface-container text-on-surface-variant';
                }
              });

              this.classList.add('active', 'bg-primary-container', 'text-surface-container-lowest');
              this.classList.remove('text-outline');
              const activeBadge = this.querySelector('span:last-child');
              if (activeBadge && this.getAttribute('data-status') === 'all') {
                activeBadge.className = 'px-1.5 py-0.5 text-[11px] rounded-full bg-surface-container-lowest/20 text-surface-container-lowest';
              }

              applyFilters();
            });
          });

          if (searchInput) {
            searchInput.addEventListener('input', applyFilters);
          }

          // Micro-interactions for buttons
          document.querySelectorAll('.mark-ready-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
              const card = e.target.closest('.order-card');
              if (!card) return;
              card.setAttribute('data-status', 'siap');
              this.innerHTML = '<span class="material-symbols-outlined text-[18px]">verified</span><span>Siap Diambil!</span>';
              this.classList.replace('bg-secondary', 'bg-primary-container');
              setTimeout(() => {
                applyFilters();
              }, 300);
            });
          });

          document.querySelectorAll('.complete-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
              const card = e.target.closest('.order-card');
              if (!card) return;
              card.setAttribute('data-status', 'selesai');
              this.innerHTML = '<span class="material-symbols-outlined text-[18px]">check</span><span>Selesai</span>';
              setTimeout(() => {
                applyFilters();
              }, 300);
            });
          });
        })();
      </script>
    </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>