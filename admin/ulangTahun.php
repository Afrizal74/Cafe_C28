<?php
$pageTitle = 'Loyalty Ulang Tahun';
$activePage = 'ulang-tahun';
$breadcrumb = 'Ulang Tahun';
require_once __DIR__ . '/includes/header.php';
?>

<main class="w-full pt-16 bg-surface">
      <div class="flex flex-col w-full">
        <div class="p-gutter flex flex-col gap-6 max-w-[1540px] mx-auto w-full">
          <!-- Editorial Page Title & Header Bar -->
          <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 pb-2">
            <div class="flex flex-col gap-1">
              <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-secondary"></span>
                <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-semibold">C28 Coffee Club Rewards</span>
              </div>
              <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Ulang Tahun Member</h1>
              <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                Kelola hadiah otomatis, pantau jadwal ulang tahun member bulan ini, dan kirimkan voucher spesial via WhatsApp langsung ke counter POS.
              </p>
            </div>
            <div class="flex items-center gap-3">
              <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-surface-container-low text-on-surface hover:bg-surface-container transition-colors shadow-sm text-title-sm font-title-sm" id="btnBroadcastAll">
                <span class="material-symbols-outlined text-[18px] text-secondary">send</span>
                <span>Broadcast Hari Ini (2)</span>
              </button>
              <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-secondary text-on-secondary hover:bg-secondary/90 transition-all shadow-md text-title-sm font-title-sm" id="btnQuickConfig">
                <span class="material-symbols-outlined text-[18px]">card_giftcard</span>
                <span>Kupon Instan</span>
              </button>
            </div>
          </div>
          <!-- Festive & Artisanal Stat Cards (3 Columns) -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <!-- Stat 1: Bulan Ini -->
            <div class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-6 shadow-sm flex flex-col justify-between">
              <div class="absolute -right-6 -bottom-6 w-32 h-32 rounded-full bg-surface-container-low/60 pointer-events-none"></div>
              <div class="flex items-start justify-between">
                <div class="flex flex-col gap-1">
                  <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Bulan Berjalan (Maret)</span>
                  <div class="flex items-baseline gap-2 mt-1">
                    <span class="font-headline-lg text-headline-lg text-on-surface">42</span>
                    <span class="font-title-sm text-title-sm text-on-surface-variant">Member</span>
                  </div>
                </div>
                <div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-secondary">
                  <span class="material-symbols-outlined text-[26px]">calendar_month</span>
                </div>
              </div>
              <div class="mt-5 pt-4 flex items-center justify-between text-body-sm font-body-sm text-on-surface-variant">
                <span class="flex items-center gap-1.5 text-secondary font-medium">
                  <span class="material-symbols-outlined text-[16px]">trending_up</span>
                  +14% dari Februari
                </span>
                <span class="text-outline">Total 124 Loyalty Pts</span>
              </div>
            </div>
            <!-- Stat 2: Hari Ini (Urgent Focus) -->
            <div class="relative overflow-hidden rounded-xl bg-primary-container p-6 text-on-primary-fixed shadow-md flex flex-col justify-between">
              <div class="absolute right-0 top-0 w-36 h-36 bg-gradient-to-bl from-secondary/25 to-transparent pointer-events-none rounded-bl-full"></div>
              <div class="flex items-start justify-between">
                <div class="flex flex-col gap-1">
                  <div class="flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary-fixed-dim">Hari Ini (21 Maret)</span>
                  </div>
                  <div class="flex items-baseline gap-2 mt-1">
                    <span class="font-headline-lg text-headline-lg text-surface-container-lowest">3</span>
                    <span class="font-title-sm text-title-sm text-primary-fixed-dim">Ulang Tahun</span>
                  </div>
                </div>
                <div class="w-12 h-12 rounded-xl bg-secondary flex items-center justify-center text-on-secondary shadow-inner">
                  <span class="material-symbols-outlined text-[26px]" style="font-variation-settings: 'FILL' 1;">cake</span>
                </div>
              </div>
              <div class="mt-5 pt-4 flex items-center justify-between">
                <span class="text-secondary-fixed text-label-md font-label-md bg-secondary/30 px-2.5 py-1 rounded-full flex items-center gap-1">
                  <span class="material-symbols-outlined text-[14px]">priority_high</span>
                  Perlu ucapan &amp; aktivasi voucher!
                </span>
                <span class="font-body-sm text-body-sm text-primary-fixed-dim">1 Terklaim</span>
              </div>
            </div>
            <!-- Stat 3: Voucher Terklaim & Conversion -->
            <div class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-6 shadow-sm flex flex-col justify-between">
              <div class="flex items-start justify-between">
                <div class="flex flex-col gap-1">
                  <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Voucher Birthday Terklaim</span>
                  <div class="flex items-baseline gap-2 mt-1">
                    <span class="font-headline-lg text-headline-lg text-on-surface">28</span>
                    <span class="font-title-sm text-title-sm text-on-surface-variant">/ 42 Voucher</span>
                  </div>
                </div>
                <div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-on-secondary-container">
                  <span class="material-symbols-outlined text-[26px]">redeem</span>
                </div>
              </div>
              <div class="mt-4 flex flex-col gap-2">
                <div class="flex items-center justify-between text-body-sm font-body-sm">
                  <span class="font-medium text-on-surface">Tingkat Redeem Barista</span>
                  <span class="font-semibold text-secondary">66.7%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-surface-container">
                  <div class="h-2 rounded-full bg-secondary" style="width: 66.7%"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Active Birthday Reward Banner & Quick Settings -->
          <div class="rounded-xl bg-surface-container-low p-6 shadow-sm flex flex-col lg:flex-row lg:items-center justify-between gap-6 relative overflow-hidden">
            <div class="absolute -left-10 -top-10 w-44 h-44 rounded-full bg-surface-container-high/40 pointer-events-none blur-2xl"></div>
            <div class="flex items-start md:items-center gap-4 relative z-10">
              <div class="w-14 h-14 rounded-2xl bg-secondary flex items-center justify-center text-on-secondary shrink-0 shadow-md">
                <span class="material-symbols-outlined text-[30px]">local_cafe</span>
              </div>
              <div class="flex flex-col gap-1">
                <div class="flex items-center gap-2">
                  <span class="px-2 py-0.5 rounded bg-secondary-container text-on-secondary-fixed text-label-sm font-label-sm font-semibold tracking-wide uppercase">Preset Loyalty Aktif</span>
                  <span class="text-body-sm font-body-sm text-outline">• Berlaku untuk Semua Tier</span>
                </div>
                <h2 class="font-title-md text-title-md text-on-surface font-semibold">
                  Free C28 Signature Drink (Valid 7 hari sejak tanggal lahir) + Bonus +10 Poin
                </h2>
                <p class="font-body-sm text-body-sm text-on-surface-variant">
                  Pesan otomatis di-generate via WhatsApp Web API counter jam 08:00 WIB di pagi hari ulang tahun. Barista scan QR di meja kasir.
                </p>
              </div>
            </div>
            <div class="flex items-center gap-3 shrink-0 relative z-10">
              <button class="px-4 py-2.5 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-surface-container font-title-sm text-title-sm shadow-sm transition-all flex items-center gap-2" id="openTemplateModalBtn">
                <span class="material-symbols-outlined text-[18px] text-secondary">stylus</span>
                <span>Ubah Template Hadiah</span>
              </button>
              <button class="p-2.5 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" id="viewAnalyticsBtn">
                <span class="material-symbols-outlined text-[20px]">tune</span>
              </button>
            </div>
          </div>
          <!-- Main Schedule & Member Celebration Table Section -->
          <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
            <!-- Table Header & Controls Bar -->
            <div class="p-5 flex flex-col md:flex-row md:items-center justify-between gap-4 bg-surface-container-lowest">
              <!-- Filter Tabs -->
              <div class="flex items-center gap-1.5 p-1 bg-surface-container-low rounded-xl overflow-x-auto">
                <button class="filter-tab px-4 py-1.5 rounded-lg text-label-md font-label-md bg-primary-container text-surface-container-lowest shadow-sm transition-all whitespace-nowrap" data-filter="hari-ini">
                  Hari Ini (3)
                </button>
                <button class="filter-tab px-4 py-1.5 rounded-lg text-label-md font-label-md text-on-surface-variant hover:text-on-surface transition-all whitespace-nowrap" data-filter="minggu-ini">
                  Minggu Ini (9)
                </button>
                <button class="filter-tab px-4 py-1.5 rounded-lg text-label-md font-label-md text-on-surface-variant hover:text-on-surface transition-all whitespace-nowrap" data-filter="bulan-ini">
                  Bulan Ini (42)
                </button>
                <button class="filter-tab px-4 py-1.5 rounded-lg text-label-md font-label-md text-on-surface-variant hover:text-on-surface transition-all whitespace-nowrap" data-filter="semua">
                  Semua Bulan
                </button>
              </div>
              <!-- Search & Quick Sort -->
              <div class="flex items-center gap-3">
                <div class="relative w-full md:w-64">
                  <span class="material-symbols-outlined absolute left-3 top-2.5 text-[18px] text-outline">search</span>
                  <input class="w-full h-10 pl-9 pr-3 rounded-lg bg-surface-container-low text-on-surface text-body-sm font-body-sm focus:outline-none focus:bg-surface-container transition-colors" id="searchMemberInput" placeholder="Cari nama / ID C28..." type="text" />
                </div>
                <button class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface flex items-center gap-1.5 text-label-md font-label-md hover:bg-surface-container transition-colors">
                  <span class="material-symbols-outlined text-[18px]">filter_list</span>
                  <span>Tier</span>
                </button>
              </div>
            </div>
            <!-- Schedule Table -->
            <div class="overflow-x-auto">
              <table class="w-full text-left border-collapse">
                <thead>
                  <tr class="bg-surface-container-low text-on-surface-variant text-label-sm font-label-sm uppercase tracking-wider">
                    <th class="py-3.5 px-6">Member</th>
                    <th class="py-3.5 px-4">ID Member</th>
                    <th class="py-3.5 px-4">Tanggal Lahir</th>
                    <th class="py-3.5 px-4">Usia</th>
                    <th class="py-3.5 px-4">Level Member</th>
                    <th class="py-3.5 px-4">Status Benefit</th>
                    <th class="py-3.5 px-6 text-right">Aksi Cepat</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-surface-container" id="memberTableBody">
                  <!-- Row 1: Nadia Safira -->
                  <tr class="member-row hover:bg-surface-container-low/50 transition-colors bg-surface-container-lowest" data-category="hari-ini">
                    <td class="py-4 px-6">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center font-title-sm text-title-sm text-secondary font-bold shrink-0">
                          NS
                        </div>
                        <div class="flex flex-col">
                          <span class="font-title-sm text-title-sm text-on-surface font-semibold">Nadia Safira</span>
                          <span class="font-body-sm text-body-sm text-outline">nadia.safira@gmail.com</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-4 font-mono text-body-sm text-on-surface-variant font-medium">
                      C28-000004
                    </td>
                    <td class="py-4 px-4">
                      <div class="flex items-center gap-1.5 text-secondary font-semibold font-body-sm">
                        <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">cake</span>
                        <span>Hari ini (21 Maret)</span>
                      </div>
                    </td>
                    <td class="py-4 px-4 font-body-sm text-body-sm text-on-surface">
                      26 Th
                    </td>
                    <td class="py-4 px-4">
                      <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#fef3c7] text-[#92400e] text-label-sm font-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[14px]">stars</span>
                        Gold Member
                      </span>
                    </td>
                    <td class="py-4 px-4">
                      <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container/30 text-on-secondary-container text-label-sm font-label-sm font-semibold">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                        Kupon Siap - Belum Diambil
                      </span>
                    </td>
                    <td class="py-4 px-6 text-right">
                      <button class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-secondary text-on-secondary hover:bg-secondary/90 text-label-md font-label-md shadow-sm transition-all" onclick="sendWaMessage('Nadia Safira', 'C28-000004')">
                        <span class="material-symbols-outlined text-[16px]">chat</span>
                        <span>Kirim WA Ucapan</span>
                      </button>
                    </td>
                  </tr>
                  <!-- Row 2: Rian Hidayat -->
                  <tr class="member-row hover:bg-surface-container-low/50 transition-colors bg-surface-container-lowest" data-category="hari-ini">
                    <td class="py-4 px-6">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center font-title-sm text-title-sm text-on-surface-variant font-bold shrink-0">
                          RH
                        </div>
                        <div class="flex flex-col">
                          <span class="font-title-sm text-title-sm text-on-surface font-semibold">Rian Hidayat</span>
                          <span class="font-body-sm text-body-sm text-outline">+62 812-4456-9901</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-4 font-mono text-body-sm text-on-surface-variant font-medium">
                      C28-000018
                    </td>
                    <td class="py-4 px-4">
                      <div class="flex items-center gap-1.5 text-secondary font-semibold font-body-sm">
                        <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">cake</span>
                        <span>Hari ini (21 Maret)</span>
                      </div>
                    </td>
                    <td class="py-4 px-4 font-body-sm text-body-sm text-on-surface">
                      29 Th
                    </td>
                    <td class="py-4 px-4">
                      <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#e2e8f0] text-[#334155] text-label-sm font-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[14px]">shield</span>
                        Silver Member
                      </span>
                    </td>
                    <td class="py-4 px-4">
                      <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container/30 text-on-secondary-container text-label-sm font-label-sm font-semibold">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                        Kupon Siap - Belum Diambil
                      </span>
                    </td>
                    <td class="py-4 px-6 text-right">
                      <button class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-secondary text-on-secondary hover:bg-secondary/90 text-label-md font-label-md shadow-sm transition-all" onclick="sendWaMessage('Rian Hidayat', 'C28-000018')">
                        <span class="material-symbols-outlined text-[16px]">chat</span>
                        <span>Kirim WA Ucapan</span>
                      </button>
                    </td>
                  </tr>
                  <!-- Row 3: Maya Anggraini -->
                  <tr class="member-row hover:bg-surface-container-low/50 transition-colors bg-surface-container-lowest" data-category="hari-ini">
                    <td class="py-4 px-6">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center font-title-sm text-title-sm text-secondary font-bold shrink-0">
                          MA
                        </div>
                        <div class="flex flex-col">
                          <span class="font-title-sm text-title-sm text-on-surface font-semibold">Maya Anggraini</span>
                          <span class="font-body-sm text-body-sm text-outline">maya.ang@c28coffee.id</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-4 font-mono text-body-sm text-on-surface-variant font-medium">
                      C28-000025
                    </td>
                    <td class="py-4 px-4">
                      <div class="flex items-center gap-1.5 text-on-surface-variant font-medium font-body-sm">
                        <span class="material-symbols-outlined text-[16px]">cake</span>
                        <span>Hari ini (21 Maret)</span>
                      </div>
                    </td>
                    <td class="py-4 px-4 font-body-sm text-body-sm text-on-surface">
                      24 Th
                    </td>
                    <td class="py-4 px-4">
                      <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#ffedd5] text-[#9a3412] text-label-sm font-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[14px]">military_tech</span>
                        Bronze Member
                      </span>
                    </td>
                    <td class="py-4 px-4">
                      <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#dcfce7] text-[#166534] text-label-sm font-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[16px]">check_circle</span>
                        Sudah Diklaim (14:20 WIB)
                      </span>
                    </td>
                    <td class="py-4 px-6 text-right">
                      <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface text-label-md font-label-md transition-colors" title="Lihat Struk Klaim POS">
                        <span class="material-symbols-outlined text-[16px]">receipt</span>
                        <span>Struk #8812</span>
                      </button>
                    </td>
                  </tr>
                  <!-- Row 4: Raja Habib -->
                  <tr class="member-row hover:bg-surface-container-low/50 transition-colors bg-surface-container-lowest" data-category="minggu-ini">
                    <td class="py-4 px-6">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center font-title-sm text-title-sm text-secondary font-bold shrink-0">
                          RH
                        </div>
                        <div class="flex flex-col">
                          <span class="font-title-sm text-title-sm text-on-surface font-semibold">Raja Habib</span>
                          <span class="font-body-sm text-body-sm text-outline">Founder Club VIP</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-4 font-mono text-body-sm text-on-surface-variant font-medium">
                      C28-000001
                    </td>
                    <td class="py-4 px-4 font-body-sm text-body-sm text-on-surface">
                      <div class="flex items-center gap-1.5">
                        <span class="font-medium">24 Maret</span>
                        <span class="text-secondary font-semibold text-label-sm font-label-sm">(3 hari lagi)</span>
                      </div>
                    </td>
                    <td class="py-4 px-4 font-body-sm text-body-sm text-on-surface">
                      28 Th
                    </td>
                    <td class="py-4 px-4">
                      <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#fef3c7] text-[#92400e] text-label-sm font-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[14px]">stars</span>
                        Gold Member
                      </span>
                    </td>
                    <td class="py-4 px-4">
                      <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface-variant text-label-sm font-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[14px]">schedule</span>
                        Terjadwal
                      </span>
                    </td>
                    <td class="py-4 px-6 text-right">
                      <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high text-label-md font-label-md transition-colors" onclick="scheduleMessageModal('Raja Habib')">
                        <span class="material-symbols-outlined text-[16px]">schedule_send</span>
                        <span>Jadwalkan Pesan</span>
                      </button>
                    </td>
                  </tr>
                  <!-- Row 5: Farhan Malik -->
                  <tr class="member-row hover:bg-surface-container-low/50 transition-colors bg-surface-container-lowest" data-category="minggu-ini">
                    <td class="py-4 px-6">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center font-title-sm text-title-sm text-on-surface-variant font-bold shrink-0">
                          FM
                        </div>
                        <div class="flex flex-col">
                          <span class="font-title-sm text-title-sm text-on-surface font-semibold">Farhan Malik</span>
                          <span class="font-body-sm text-body-sm text-outline">+62 878-1190-2341</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-4 font-mono text-body-sm text-on-surface-variant font-medium">
                      C28-000032
                    </td>
                    <td class="py-4 px-4 font-body-sm text-body-sm text-on-surface">
                      <div class="flex items-center gap-1.5">
                        <span class="font-medium">28 Maret</span>
                        <span class="text-outline text-label-sm font-label-sm">(7 hari lagi)</span>
                      </div>
                    </td>
                    <td class="py-4 px-4 font-body-sm text-body-sm text-on-surface">
                      31 Th
                    </td>
                    <td class="py-4 px-4">
                      <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#e2e8f0] text-[#334155] text-label-sm font-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[14px]">shield</span>
                        Silver Member
                      </span>
                    </td>
                    <td class="py-4 px-4">
                      <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface-variant text-label-sm font-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[14px]">schedule</span>
                        Terjadwal
                      </span>
                    </td>
                    <td class="py-4 px-6 text-right">
                      <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-surface-container-low text-on-surface-variant hover:text-on-surface text-label-md font-label-md transition-colors">
                        <span class="material-symbols-outlined text-[16px]">visibility</span>
                        <span>Detail</span>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Footer Pagination / Record Status -->
            <div class="p-4 bg-surface-container-low/50 flex flex-col sm:flex-row items-center justify-between gap-3 text-body-sm font-body-sm text-on-surface-variant">
              <span>Menampilkan 5 dari 42 member yang berulang tahun di bulan Maret</span>
              <div class="flex items-center gap-2">
                <button class="px-3 py-1 rounded bg-surface-container-lowest text-outline hover:text-on-surface text-label-md font-label-md shadow-sm">Sebelumnya</button>
                <button class="px-3 py-1 rounded bg-secondary text-on-secondary text-label-md font-label-md shadow-sm">1</button>
                <button class="px-3 py-1 rounded bg-surface-container-lowest text-on-surface hover:bg-surface-container text-label-md font-label-md shadow-sm">2</button>
                <button class="px-3 py-1 rounded bg-surface-container-lowest text-on-surface hover:bg-surface-container text-label-md font-label-md shadow-sm">3</button>
                <button class="px-3 py-1 rounded bg-surface-container-lowest text-on-surface hover:bg-surface-container text-label-md font-label-md shadow-sm">Selanjutnya</button>
              </div>
            </div>
          </div>
          <!-- Festive Counter Activity & Barista Log Stream -->
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
            <!-- Counter Redemption Tips -->
            <div class="rounded-xl bg-surface-container-lowest p-6 shadow-sm flex flex-col justify-between">
              <div class="flex flex-col gap-2">
                <div class="flex items-center gap-2 text-secondary">
                  <span class="material-symbols-outlined text-[20px]">lightbulb</span>
                  <span class="font-title-sm text-title-sm uppercase tracking-wide">SOP Barista Kasir</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm text-on-surface">Verifikasi Hadiah Ulang Tahun</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant">
                  Setiap member berhak memilih 1 Cup Artisanal Brew / C28 Signature Latte tanpa syarat minimum pembelian. Mohon cek KTP/identitas jika tanggal lahir belum terverifikasi sistem.
                </p>
              </div>
              <div class="mt-4 pt-4 border-t border-surface-container flex items-center justify-between text-body-sm font-body-sm">
                <span class="text-outline">Kode POS Cepat:</span>
                <span class="font-mono bg-surface-container-low px-2 py-0.5 rounded font-bold text-on-surface">#B-DAY-REDEEM</span>
              </div>
            </div>
            <!-- Quick Message Preview Widget -->
            <div class="lg:col-span-2 rounded-xl bg-surface-container-lowest p-6 shadow-sm flex flex-col justify-between">
              <div class="flex flex-col gap-3">
                <div class="flex items-center justify-between">
                  <span class="font-title-sm text-title-sm text-on-surface font-semibold flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] text-secondary">chat_bubble</span>
                    Preview Template WhatsApp Otomatis
                  </span>
                  <span class="text-label-sm font-label-sm px-2 py-0.5 rounded bg-surface-container text-on-surface-variant">Bahasa Indonesia</span>
                </div>
                <div class="p-4 rounded-xl bg-surface-container-low text-on-surface font-mono text-body-sm leading-relaxed border-l-4 border-secondary">
                  "Halo <span class="text-secondary font-bold">{Nama_Member}</span>! ☕🎂 Tim C28 Coffee Roastery mengucapkan Selamat Ulang Tahun ke-<span class="text-secondary font-bold">{Usia}</span>! Nikmati kado istimewa kami: <span class="font-bold">1x Free C28 Signature Drink</span> &amp; Voucher 10% Bean Pack favoritmu. Tunjukkan pesan ini ke barista kami. Berlaku s.d <span class="font-bold">{Tanggal_Expired}</span>. Have a wonderful brew-tiful day!"
                </div>
              </div>
              <div class="mt-4 flex flex-wrap items-center justify-between gap-3 text-body-sm font-body-sm">
                <span class="text-outline">Pengirim: WhatsApp Gateway (+62 821-2828-0028)</span>
                <button class="text-secondary font-medium hover:underline text-title-sm font-title-sm" id="editWaTemplateBtn">
                  Kustomisasi Kata-kata Ucapan →
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Interactive Slide-over / Modal for Reward Template Configuration -->
        <div class="fixed inset-0 z-50 hidden" id="templateModal">
          <div class="absolute inset-0 bg-primary-container/60 backdrop-blur-sm transition-opacity" id="modalBackdrop"></div>
          <div class="absolute right-0 top-0 bottom-0 w-full max-w-lg bg-surface-container-lowest shadow-2xl p-6 flex flex-col justify-between overflow-y-auto">
            <div class="flex flex-col gap-6">
              <div class="flex items-center justify-between pb-4 border-b border-surface-container">
                <div class="flex items-center gap-2.5">
                  <div class="w-9 h-9 rounded-xl bg-secondary flex items-center justify-center text-on-secondary">
                    <span class="material-symbols-outlined text-[20px]">cake</span>
                  </div>
                  <div class="flex flex-col">
                    <h3 class="font-headline-sm text-headline-sm text-on-surface">Atur Hadiah Ulang Tahun</h3>
                    <span class="font-body-sm text-body-sm text-outline">Konfigurasi voucher reward tahunan</span>
                  </div>
                </div>
                <button class="w-8 h-8 rounded-full bg-surface-container-low flex items-center justify-center text-on-surface-variant hover:text-on-surface" id="closeModalBtn">
                  <span class="material-symbols-outlined text-[18px]">close</span>
                </button>
              </div>
              <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-1.5">
                  <label class="font-title-sm text-title-sm text-on-surface">Nama Promo / Kupon</label>
                  <input class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface text-body-md font-body-md focus:outline-none focus:bg-surface-container" type="text" value="C28 Birthday Special Brew" />
                </div>
                <div class="flex flex-col gap-1.5">
                  <label class="font-title-sm text-title-sm text-on-surface">Pilihan Benefit Utama</label>
                  <select class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface text-body-md font-body-md focus:outline-none focus:bg-surface-container">
                    <option selected="">Free Signature Drink (Beverage)</option>
                    <option>Free Pastry &amp; Bakery Slice</option>
                    <option>Diskon 50% Semua Menu Minuman</option>
                    <option>Voucher Potongan Tunai Rp 50.000</option>
                  </select>
                </div>
                <div class="grid grid-cols-2 gap-3">
                  <div class="flex flex-col gap-1.5">
                    <label class="font-title-sm text-title-sm text-on-surface">Masa Berlaku Kupon</label>
                    <input class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface text-body-md font-body-md focus:outline-none focus:bg-surface-container" type="number" value="7" />
                    <span class="font-label-sm text-label-sm text-outline">Hari sejak tanggal lahir</span>
                  </div>
                  <div class="flex flex-col gap-1.5">
                    <label class="font-title-sm text-title-sm text-on-surface">Bonus Ekstra Poin</label>
                    <input class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface text-body-md font-body-md focus:outline-none focus:bg-surface-container" type="number" value="10" />
                    <span class="font-label-sm text-label-sm text-outline">Poin loyalitas langsung</span>
                  </div>
                </div>
                <div class="flex flex-col gap-1.5">
                  <label class="font-title-sm text-title-sm text-on-surface">Kirim Notifikasi Otomatis</label>
                  <div class="flex items-center justify-between p-3 rounded-xl bg-surface-container-low">
                    <div class="flex flex-col">
                      <span class="font-title-sm text-title-sm text-on-surface">WhatsApp Gateway Auto-Send</span>
                      <span class="font-body-sm text-body-sm text-outline">Kirim otomatis pada pukul 08:00 WIB</span>
                    </div>
                    <input checked="" class="w-5 h-5 accent-secondary cursor-pointer" type="checkbox" />
                  </div>
                </div>
              </div>
            </div>
            <div class="pt-6 border-t border-surface-container flex items-center justify-end gap-3">
              <button class="px-4 py-2.5 rounded-lg bg-surface-container-low text-on-surface font-title-sm text-title-sm hover:bg-surface-container transition-colors" id="cancelModalBtn">
                Batal
              </button>
              <button class="px-5 py-2.5 rounded-lg bg-secondary text-on-secondary font-title-sm text-title-sm hover:bg-secondary/90 shadow-md transition-all" id="saveRewardBtn">
                Simpan Template
              </button>
            </div>
          </div>
        </div>
        <!-- Notification Toast Container -->
        <div class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none" id="toastNotification">
          <div class="bg-primary-container text-surface-container-lowest px-4 py-3 rounded-xl shadow-xl flex items-center gap-3">
            <span class="material-symbols-outlined text-secondary-container text-[20px]">check_circle</span>
            <span class="font-body-sm text-body-sm font-medium" id="toastMessage">Ucapan WhatsApp berhasil dikirim ke nomor member!</span>
          </div>
        </div>
      </div>
      <script>
        // Filter tabs interactivity
        const filterTabs = document.querySelectorAll('.filter-tab');
        const tableRows = document.querySelectorAll('.member-row');

        filterTabs.forEach(tab => {
          tab.addEventListener('click', () => {
            // Toggle active style
            filterTabs.forEach(t => {
              t.className = 'filter-tab px-4 py-1.5 rounded-lg text-label-md font-label-md text-on-surface-variant hover:text-on-surface transition-all whitespace-nowrap';
            });
            tab.className = 'filter-tab px-4 py-1.5 rounded-lg text-label-md font-label-md bg-primary-container text-surface-container-lowest shadow-sm transition-all whitespace-nowrap';

            const filterValue = tab.getAttribute('data-filter');
            tableRows.forEach(row => {
              if (filterValue === 'semua' || filterValue === 'bulan-ini') {
                row.style.display = '';
              } else if (filterValue === 'hari-ini') {
                if (row.getAttribute('data-category') === 'hari-ini') {
                  row.style.display = '';
                } else {
                  row.style.display = 'none';
                }
              } else if (filterValue === 'minggu-ini') {
                row.style.display = '';
              }
            });
          });
        });

        // Search input filtering
        const searchInput = document.getElementById('searchMemberInput');
        searchInput.addEventListener('input', (e) => {
          const term = e.target.value.toLowerCase();
          tableRows.forEach(row => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(term) ? '' : 'none';
          });
        });

        // Modal logic
        const templateModal = document.getElementById('templateModal');
        const openModalBtn = document.getElementById('openTemplateModalBtn');
        const editWaBtn = document.getElementById('editWaTemplateBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const cancelModalBtn = document.getElementById('cancelModalBtn');
        const saveRewardBtn = document.getElementById('saveRewardBtn');
        const modalBackdrop = document.getElementById('modalBackdrop');

        function openModal() {
          templateModal.classList.remove('hidden');
        }

        function closeModal() {
          templateModal.classList.add('hidden');
        }

        if (openModalBtn) openModalBtn.addEventListener('click', openModal);
        if (editWaBtn) editWaBtn.addEventListener('click', openModal);
        if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
        if (cancelModalBtn) cancelModalBtn.addEventListener('click', closeModal);
        if (modalBackdrop) modalBackdrop.addEventListener('click', closeModal);

        if (saveRewardBtn) {
          saveRewardBtn.addEventListener('click', () => {
            closeModal();
            showToast('Konfigurasi reward ulang tahun berhasil diperbarui!');
          });
        }

        // Toast Functionality
        function showToast(message) {
          const toast = document.getElementById('toastNotification');
          const toastText = document.getElementById('toastMessage');
          toastText.innerText = message;
          toast.classList.remove('translate-y-24', 'opacity-0');
          toast.classList.add('translate-y-0', 'opacity-100');

          setTimeout(() => {
            toast.classList.remove('translate-y-0', 'opacity-100');
            toast.classList.add('translate-y-24', 'opacity-0');
          }, 3200);
        }

        // Quick Action Buttons
        window.sendWaMessage = function(name, id) {
          showToast(`Pesan WhatsApp & Voucher C28 terkirim ke ${name} (${id})`);
        };

        window.scheduleMessageModal = function(name) {
          showToast(`Pesan otomatis untuk ${name} dijadwalkan tanggal 24 Maret 08:00 WIB`);
        };

        const btnBroadcast = document.getElementById('btnBroadcastAll');
        if (btnBroadcast) {
          btnBroadcast.addEventListener('click', () => {
            showToast('Broadcast WhatsApp dikirimkan ke 2 member yang belum dihubungi!');
          });
        }

        const btnQuickConfig = document.getElementById('btnQuickConfig');
        if (btnQuickConfig) {
          btnQuickConfig.addEventListener('click', () => {
            showToast('Kupon instan siap dicetak di printer kasir POS');
          });
        }
      </script>
    </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>