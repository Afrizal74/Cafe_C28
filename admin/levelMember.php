<?php
$pageTitle = 'Level Membership';
$activePage = 'level-membership';
$breadcrumb = 'Level Membership';
require_once __DIR__ . '/includes/header.php';
?>

<main class="w-full pt-16 bg-surface">
      <div class="flex flex-col w-full">
        <div class="max-w-[1520px] mx-auto w-full px-space-md sm:px-space-lg lg:px-margin py-space-xl flex flex-col gap-space-2xl">
          <!-- Editorial Header & Actions Section -->
          <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg relative">
            <div class="flex flex-col max-w-2xl min-w-0">
              <div class="flex items-center gap-space-sm mb-space-xs">
                <span class="w-6 h-px bg-secondary"></span>
                <span class="font-label-sm text-label-sm uppercase tracking-[0.2em] text-secondary">C28 Coffee Club • Loyalty Architecture</span>
              </div>
              <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight font-serif">Level Membership</h1>
              <p class="font-body-md text-body-md text-on-surface-variant mt-1.5 leading-relaxed">
                Atur kriteria kenaikan level keanggotaan, konfigurasi pengganda perolehan poin transaksi, serta kurasi hak istimewa eksklusif bagi pelanggan setia roastery C28.
              </p>
            </div>
            <!-- Action Shelf -->
            <div class="flex items-center gap-space-sm shrink-0">
              <button class="px-space-md py-2.5 rounded-lg bg-surface-container-high text-on-surface font-title-sm text-title-sm hover:bg-surface-container-highest transition-all duration-200 flex items-center gap-2 shadow-sm" id="btn-add-tier">
                <span class="material-symbols-outlined text-[18px] text-secondary">add_circle</span>
                <span>Buat Tingkatan Baru</span>
              </button>
              <button class="px-space-lg py-2.5 rounded-lg bg-secondary text-on-secondary font-title-sm text-title-sm hover:bg-on-secondary-container transition-all duration-200 flex items-center gap-2 shadow-md" id="btn-save-rules">
                <span class="material-symbols-outlined text-[18px]">verified</span>
                <span>Simpan Aturan Tiering</span>
              </button>
            </div>
          </div>
          <!-- Live Club Snapshot Bento Stats -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden">
              <div class="flex items-center justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Total Member Aktif</span>
                <span class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center text-secondary">
                  <span class="material-symbols-outlined text-[18px]">loyalty</span>
                </span>
              </div>
              <div class="mt-4">
                <span class="font-headline-lg text-headline-lg text-on-surface font-serif">1.248</span>
                <span class="font-label-sm text-label-sm text-secondary block mt-0.5">↑ +14.2% bulan ini</span>
              </div>
              <div class="w-full bg-surface-container-low h-1.5 rounded-full mt-3 overflow-hidden">
                <div class="bg-secondary h-full rounded-full" style="width: 78%;"></div>
              </div>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between">
              <div class="flex items-center justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Poin Diterbitkan (30H)</span>
                <span class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center text-on-surface-variant">
                  <span class="material-symbols-outlined text-[18px]">token</span>
                </span>
              </div>
              <div class="mt-4">
                <span class="font-headline-lg text-headline-lg text-on-surface font-serif">384.250</span>
                <span class="font-label-sm text-label-sm text-outline block mt-0.5">Senilai Rp 38.4M redemption</span>
              </div>
              <div class="flex items-center gap-1.5 mt-3 text-outline">
                <span class="material-symbols-outlined text-[14px]">swap_horiz</span>
                <span class="font-body-sm text-body-sm">Redeem rate: 64%</span>
              </div>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between">
              <div class="flex items-center justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Average Spend / Member</span>
                <span class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center text-on-surface-variant">
                  <span class="material-symbols-outlined text-[18px]">payments</span>
                </span>
              </div>
              <div class="mt-4">
                <span class="font-headline-lg text-headline-lg text-on-surface font-serif">Rp 284K</span>
                <span class="font-label-sm text-label-sm text-secondary block mt-0.5">+8.6% dibanding reguler</span>
              </div>
              <div class="flex items-center gap-1.5 mt-3 text-outline">
                <span class="material-symbols-outlined text-[14px]">schedule</span>
                <span class="font-body-sm text-body-sm">Siklus: 11.2 hari sekali</span>
              </div>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between">
              <div class="flex items-center justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Tier Upgrades (Bulan Ini)</span>
                <span class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center text-secondary">
                  <span class="material-symbols-outlined text-[18px]">trending_up</span>
                </span>
              </div>
              <div class="mt-4">
                <span class="font-headline-lg text-headline-lg text-on-surface font-serif">89 Member</span>
                <span class="font-label-sm text-label-sm text-secondary block mt-0.5">62 Silver • 27 Gold</span>
              </div>
              <div class="flex items-center gap-1.5 mt-3 text-outline">
                <span class="material-symbols-outlined text-[14px]">notifications_active</span>
                <span class="font-body-sm text-body-sm">100% WhatsApp notified</span>
              </div>
            </div>
          </div>
          <!-- Comparative Tier Showcase (3 Distinct Cards) -->
          <div class="flex flex-col gap-space-md">
            <div class="flex items-center justify-between">
              <div>
                <h2 class="font-headline-md text-headline-md text-on-surface font-serif">Tingkatan Loyalitas Aktif</h2>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Struktur tier berjenjang dengan evaluasi otomatis berbasis spending</p>
              </div>
              <div class="hidden sm:flex items-center gap-2 bg-surface-container-low px-3 py-1.5 rounded-full">
                <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">Live Sync: Mesin Kasir &amp; Kiosk</span>
              </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-space-lg items-stretch">
              <!-- 1. BRONZE TIER (Entry Level) -->
              <div class="bg-surface-container-lowest rounded-xl p-space-lg flex flex-col justify-between shadow-sm relative group hover:shadow-md transition-all duration-300">
                <div class="flex flex-col gap-space-md">
                  <!-- Header Badge & Status -->
                  <div class="flex items-start justify-between">
                    <div class="flex items-center gap-3">
                      <div class="w-12 h-12 rounded-xl bg-[#e5cfbe]/50 flex items-center justify-center text-[#734329]">
                        <span class="material-symbols-outlined text-[26px]">workspace_premium</span>
                      </div>
                      <div>
                        <span class="font-label-sm text-label-sm text-[#734329] uppercase tracking-widest block">Level 01</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-serif">Bronze Tier</h3>
                      </div>
                    </div>
                    <span class="px-2.5 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">
                      Entry Level
                    </span>
                  </div>
                  <!-- Visual Membership Card Mockup Mini -->
                  <div class="w-full h-36 rounded-xl bg-gradient-to-br from-[#dfcbbe] via-[#cbb1a0] to-[#b39582] p-4 flex flex-col justify-between text-[#381f14] shadow-inner relative overflow-hidden">
                    <div class="flex justify-between items-center z-10">
                      <span class="font-label-sm text-label-sm font-semibold tracking-widest uppercase">C28 Coffee Club</span>
                      <span class="material-symbols-outlined text-[20px] opacity-75">contactless</span>
                    </div>
                    <div class="z-10">
                      <div class="font-label-sm text-[10px] tracking-wider uppercase opacity-80">Tier Identifier</div>
                      <div class="font-headline-sm text-headline-sm font-serif">BRONZE PASS</div>
                    </div>
                    <div class="flex justify-between items-end z-10 text-[11px] font-mono opacity-90">
                      <span>C28-BRZ-INIT</span>
                      <span>EXP: NEVER</span>
                    </div>
                    <span class="material-symbols-outlined text-[100px] absolute -right-4 -bottom-6 text-[#381f14]/10 select-none pointer-events-none">local_cafe</span>
                  </div>
                  <!-- Spending Criteria Bar -->
                  <div class="bg-surface-container-low p-space-md rounded-lg flex flex-col gap-1.5">
                    <div class="flex justify-between items-center text-outline font-label-sm text-label-sm">
                      <span>Kriteria Akumulasi</span>
                      <span class="text-on-surface font-title-sm text-title-sm">Rp 0 – 500.000</span>
                    </div>
                    <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                      <div class="bg-[#734329] h-full rounded-full" style="width: 33%;"></div>
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Otomatis terdaftar saat registrasi akun baru</span>
                  </div>
                  <!-- Benefits List -->
                  <div class="flex flex-col gap-2.5 pt-1">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Hak Istimewa &amp; Privilese</span>
                    <div class="flex items-start gap-2.5 text-on-surface">
                      <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">check_circle</span>
                      <span class="font-body-md text-body-md">1 Poin per transaksi kelipatan <strong>Rp 10.000</strong></span>
                    </div>
                    <div class="flex items-start gap-2.5 text-on-surface">
                      <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">check_circle</span>
                      <span class="font-body-md text-body-md">Voucher Welcome Drink diskon 10% untuk pesanan pertama</span>
                    </div>
                    <div class="flex items-start gap-2.5 text-on-surface">
                      <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">check_circle</span>
                      <span class="font-body-md text-body-md">Akses WiFi Prioritas High-Speed di seluruh outlet C28</span>
                    </div>
                  </div>
                </div>
                <!-- Bottom Metric & Quick Actions -->
                <div class="mt-space-lg pt-space-md bg-surface-container-low -mx-space-lg -mb-space-lg p-space-lg rounded-b-xl flex items-center justify-between">
                  <div class="flex flex-col">
                    <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Populasi Member</span>
                    <span class="font-title-md text-title-md text-on-surface font-semibold">652 Member</span>
                  </div>
                  <button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest text-on-surface font-label-md text-label-md hover:bg-surface-container transition-colors shadow-sm flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[16px]">edit</span>
                    <span>Ubah Benefit</span>
                  </button>
                </div>
              </div>
              <!-- 2. SILVER TIER (Most Popular - Warm Silver-Cream Accent) -->
              <div class="bg-surface-container-lowest rounded-xl p-space-lg flex flex-col justify-between shadow-md relative group hover:shadow-lg transition-all duration-300 transform lg:-translate-y-2">
                <!-- Top Floating Badge -->
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-secondary text-on-secondary px-3.5 py-0.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest shadow-sm flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-[14px]">star</span>
                  <span>Most Popular Choice</span>
                </div>
                <div class="flex flex-col gap-space-md pt-2">
                  <!-- Header Badge & Status -->
                  <div class="flex items-start justify-between">
                    <div class="flex items-center gap-3">
                      <div class="w-12 h-12 rounded-xl bg-surface-container-highest flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-[26px]">military_tech</span>
                      </div>
                      <div>
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest block">Level 02</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-serif">Silver Tier</h3>
                      </div>
                    </div>
                    <span class="px-2.5 py-1 rounded-full bg-secondary/10 text-secondary font-label-sm text-label-sm font-semibold">
                      Mid Tier
                    </span>
                  </div>
                  <!-- Visual Membership Card Mockup Mini -->
                  <div class="w-full h-36 rounded-xl bg-gradient-to-br from-[#f2e7de] via-[#dcd2c9] to-[#bfb2a7] p-4 flex flex-col justify-between text-[#2e2621] shadow-inner relative overflow-hidden">
                    <div class="flex justify-between items-center z-10">
                      <span class="font-label-sm text-label-sm font-semibold tracking-widest uppercase">C28 Coffee Club</span>
                      <span class="material-symbols-outlined text-[20px] opacity-80">contactless</span>
                    </div>
                    <div class="z-10">
                      <div class="font-label-sm text-[10px] tracking-wider uppercase opacity-80">Tier Identifier</div>
                      <div class="font-headline-sm text-headline-sm font-serif">SILVER PATRON</div>
                    </div>
                    <div class="flex justify-between items-end z-10 text-[11px] font-mono opacity-90">
                      <span>C28-SLV-412X</span>
                      <span>EXP: 12 MOS</span>
                    </div>
                    <span class="material-symbols-outlined text-[100px] absolute -right-4 -bottom-6 text-[#2e2621]/10 select-none pointer-events-none">hotel_class</span>
                  </div>
                  <!-- Spending Criteria Bar -->
                  <div class="bg-surface-container-low p-space-md rounded-lg flex flex-col gap-1.5">
                    <div class="flex justify-between items-center text-outline font-label-sm text-label-sm">
                      <span>Kriteria Akumulasi</span>
                      <span class="text-on-surface font-title-sm text-title-sm">Rp 500.001 – 1.500.000</span>
                    </div>
                    <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                      <div class="bg-secondary h-full rounded-full" style="width: 66%;"></div>
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Dicapai dalam siklus aktif 12 bulan berjalan</span>
                  </div>
                  <!-- Benefits List -->
                  <div class="flex flex-col gap-2.5 pt-1">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Hak Istimewa &amp; Privilese</span>
                    <div class="flex items-start gap-2.5 text-on-surface">
                      <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">verified</span>
                      <span class="font-body-md text-body-md"><strong>1.2x Pengganda Poin</strong> (1 Poin tiap Rp 8.000)</span>
                    </div>
                    <div class="flex items-start gap-2.5 text-on-surface">
                      <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">verified</span>
                      <span class="font-body-md text-body-md">Free Upsize Latte / Flat White di hari Selasa</span>
                    </div>
                    <div class="flex items-start gap-2.5 text-on-surface">
                      <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">verified</span>
                      <span class="font-body-md text-body-md">Complimentary Birthday Treat Cupcake saat bulan ultah</span>
                    </div>
                  </div>
                </div>
                <!-- Bottom Metric & Quick Actions -->
                <div class="mt-space-lg pt-space-md bg-secondary/5 -mx-space-lg -mb-space-lg p-space-lg rounded-b-xl flex items-center justify-between">
                  <div class="flex flex-col">
                    <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Populasi Member</span>
                    <span class="font-title-md text-title-md text-on-surface font-semibold">412 Member</span>
                  </div>
                  <button class="px-3 py-1.5 rounded-lg bg-secondary text-on-secondary font-label-md text-label-md hover:bg-on-secondary-container transition-colors shadow-sm flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[16px]">edit</span>
                    <span>Ubah Benefit</span>
                  </button>
                </div>
              </div>
              <!-- 3. GOLD TIER (VIP Exclusive - Warm Metallic Amber Gold Accent) -->
              <div class="bg-surface-container-lowest rounded-xl p-space-lg flex flex-col justify-between shadow-sm relative group hover:shadow-md transition-all duration-300">
                <div class="flex flex-col gap-space-md">
                  <!-- Header Badge & Status -->
                  <div class="flex items-start justify-between">
                    <div class="flex items-center gap-3">
                      <div class="w-12 h-12 rounded-xl bg-[#fbe7c6] flex items-center justify-center text-[#995900]">
                        <span class="material-symbols-outlined text-[26px]">diamond</span>
                      </div>
                      <div>
                        <span class="font-label-sm text-label-sm text-[#995900] uppercase tracking-widest block">Level 03</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-serif">Gold Tier</h3>
                      </div>
                    </div>
                    <span class="px-2.5 py-1 rounded-full bg-[#fbe7c6] text-[#6d3e00] font-label-sm text-label-sm font-semibold">
                      VIP Exclusive
                    </span>
                  </div>
                  <!-- Visual Membership Card Mockup Mini -->
                  <div class="w-full h-36 rounded-xl bg-gradient-to-br from-[#edd399] via-[#cda052] to-[#8d6520] p-4 flex flex-col justify-between text-[#241702] shadow-inner relative overflow-hidden">
                    <div class="flex justify-between items-center z-10">
                      <span class="font-label-sm text-label-sm font-semibold tracking-widest uppercase">C28 Coffee Club VIP</span>
                      <span class="material-symbols-outlined text-[20px] text-[#241702]">stars</span>
                    </div>
                    <div class="z-10">
                      <div class="font-label-sm text-[10px] tracking-wider uppercase opacity-80">Tier Identifier</div>
                      <div class="font-headline-sm text-headline-sm font-serif">GOLD RESERVE</div>
                    </div>
                    <div class="flex justify-between items-end z-10 text-[11px] font-mono opacity-95">
                      <span>C28-GLD-184VIP</span>
                      <span>EXP: 12 MOS</span>
                    </div>
                    <span class="material-symbols-outlined text-[100px] absolute -right-4 -bottom-6 text-[#241702]/10 select-none pointer-events-none">award_star</span>
                  </div>
                  <!-- Spending Criteria Bar -->
                  <div class="bg-surface-container-low p-space-md rounded-lg flex flex-col gap-1.5">
                    <div class="flex justify-between items-center text-outline font-label-sm text-label-sm">
                      <span>Kriteria Akumulasi</span>
                      <span class="text-on-surface font-title-sm text-title-sm">&gt; Rp 1.500.000</span>
                    </div>
                    <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                      <div class="bg-[#cda052] h-full rounded-full" style="width: 100%;"></div>
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Status tertinggi dengan akses master roaster private</span>
                  </div>
                  <!-- Benefits List -->
                  <div class="flex flex-col gap-2.5 pt-1">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Hak Istimewa &amp; Privilese</span>
                    <div class="flex items-start gap-2.5 text-on-surface">
                      <span class="material-symbols-outlined text-[#995900] text-[18px] shrink-0 mt-0.5">verified_user</span>
                      <span class="font-body-md text-body-md"><strong>1.5x Pengganda Poin</strong> percepatan redemption</span>
                    </div>
                    <div class="flex items-start gap-2.5 text-on-surface">
                      <span class="material-symbols-outlined text-[#995900] text-[18px] shrink-0 mt-0.5">cake</span>
                      <span class="font-body-md text-body-md">Gratis 1 Minuman Spesial Signature saat Ulang Tahun</span>
                    </div>
                    <div class="flex items-start gap-2.5 text-on-surface">
                      <span class="material-symbols-outlined text-[#995900] text-[18px] shrink-0 mt-0.5">lock_open</span>
                      <span class="font-body-md text-body-md">Akses Menu Rahasia (<strong>Secret Brew Series</strong>) bulanan</span>
                    </div>
                    <div class="flex items-start gap-2.5 text-on-surface">
                      <span class="material-symbols-outlined text-[#995900] text-[18px] shrink-0 mt-0.5">sell</span>
                      <span class="font-body-md text-body-md">Diskon 10% untuk Merchandise &amp; Fresh Whole Beans</span>
                    </div>
                  </div>
                </div>
                <!-- Bottom Metric & Quick Actions -->
                <div class="mt-space-lg pt-space-md bg-[#fbe7c6]/25 -mx-space-lg -mb-space-lg p-space-lg rounded-b-xl flex items-center justify-between">
                  <div class="flex flex-col">
                    <span class="font-label-sm text-label-sm text-[#995900] uppercase tracking-wider">Populasi Member</span>
                    <span class="font-title-md text-title-md text-on-surface font-semibold">184 Member</span>
                  </div>
                  <button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest text-on-surface font-label-md text-label-md hover:bg-surface-container transition-colors shadow-sm flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[16px]">edit</span>
                    <span>Ubah Benefit</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Editorial Threshold & Automation Configuration Panel -->
          <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
            <!-- Section Header -->
            <div class="p-space-lg bg-surface-container-low flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-secondary">
                  <span class="material-symbols-outlined text-[22px]">tune</span>
                </div>
                <div>
                  <h3 class="font-title-md text-title-md text-on-surface font-serif">Pengaturan Threshold &amp; Automasi Evaluasi</h3>
                  <p class="font-body-sm text-body-sm text-on-surface-variant">Tentukan masa siklus, metode evaluasi retensi, dan pemicu komunikasi langsung ke WhatsApp pelanggan.</p>
                </div>
              </div>
              <div class="flex items-center gap-2">
                <span class="px-2.5 py-1 rounded bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm">Automation Engine: Aktif</span>
              </div>
            </div>
            <!-- Settings Form Body -->
            <div class="p-space-lg grid grid-cols-1 md:grid-cols-3 gap-space-xl">
              <!-- Field 1: Validity Period -->
              <div class="flex flex-col gap-2">
                <div class="flex items-center justify-between">
                  <label class="font-title-sm text-title-sm text-on-surface">Durasi Masa Aktif Tier</label>
                  <span class="material-symbols-outlined text-outline text-[16px]" title="Periode perhitungan spending akumulatif">info</span>
                </div>
                <div class="relative">
                  <select class="w-full h-11 px-3.5 pr-10 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:ring-1 focus:ring-secondary appearance-none cursor-pointer">
                    <option value="6">6 Bulan (Evaluasi Semester)</option>
                    <option selected="" value="12">12 Bulan (1 Tahun Kalender)</option>
                    <option value="24">24 Bulan (2 Tahun)</option>
                    <option value="lifetime">Seumur Hidup (Tanpa Downgrade)</option>
                  </select>
                  <span class="material-symbols-outlined absolute right-3 top-3 text-outline pointer-events-none text-[20px]">expand_more</span>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Siklus belanja member akan direview setiap 12 bulan sejak tanggal promosi level.</p>
              </div>
              <!-- Field 2: Automatic Reset Behavior -->
              <div class="flex flex-col gap-2">
                <div class="flex items-center justify-between">
                  <label class="font-title-sm text-title-sm text-on-surface">Reset &amp; Evaluasi Otomatis</label>
                  <span class="px-2 py-0.5 rounded bg-surface-container-high text-secondary font-label-sm text-label-sm">Scheduled CRON</span>
                </div>
                <div class="relative">
                  <select class="w-full h-11 px-3.5 pr-10 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:ring-1 focus:ring-secondary appearance-none cursor-pointer">
                    <option selected="" value="grace_downgrade">Grace Period 30 Hari Sebelum Turun Tier</option>
                    <option value="strict">Turun Langsung Sesuai Akumulasi Riil</option>
                    <option value="maintain_50">Turun Max 1 Level (Perlindungan Tier)</option>
                    <option value="manual">Manual Approval oleh Store Manager</option>
                  </select>
                  <span class="material-symbols-outlined absolute right-3 top-3 text-outline pointer-events-none text-[20px]">expand_more</span>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Member diberikan toleransi 30 hari untuk mempertahankan tier jika kekurangan spending &lt; 15%.</p>
              </div>
              <!-- Field 3: WhatsApp Notification Trigger -->
              <div class="flex flex-col gap-2">
                <div class="flex items-center justify-between">
                  <label class="font-title-sm text-title-sm text-on-surface">Notifikasi WhatsApp Otomatis</label>
                  <span class="font-label-sm text-label-sm text-[#2E5A36] flex items-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#2E5A36]"></span>
                    WA Gateway Connected
                  </span>
                </div>
                <div class="flex items-center justify-between h-11 px-4 rounded-lg bg-surface-container-low">
                  <span class="font-body-md text-body-md text-on-surface">Pesan Selamat Naik Level</span>
                  <label class="relative inline-flex items-center cursor-pointer">
                    <input checked="" class="sr-only peer" id="wa-toggle" type="checkbox" />
                    <div class="w-11 h-6 bg-surface-container-high peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-secondary"></div>
                  </label>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Kirim kartu member digital baru dan voucher privilege instan ke nomor WhatsApp pelanggan.</p>
              </div>
            </div>
            <!-- Advanced Toggle Rules Bar -->
            <div class="px-space-lg py-space-md bg-surface-container-low/60 flex flex-wrap items-center justify-between gap-space-md text-on-surface-variant">
              <div class="flex flex-wrap items-center gap-6">
                <label class="flex items-center gap-2.5 cursor-pointer">
                  <input checked="" class="w-4 h-4 rounded text-secondary focus:ring-secondary accent-secondary" type="checkbox" />
                  <span class="font-body-sm text-body-sm text-on-surface">Sertakan transaksi delivery (GoFood/GrabFood) dalam akumulasi poin</span>
                </label>
                <label class="flex items-center gap-2.5 cursor-pointer">
                  <input checked="" class="w-4 h-4 rounded text-secondary focus:ring-secondary accent-secondary" type="checkbox" />
                  <span class="font-body-sm text-body-sm text-on-surface">Kirim pengingat 'Masa Aktif Hampir Berakhir' H-14 via WhatsApp</span>
                </label>
              </div>
              <div class="flex items-center gap-2">
                <button class="text-secondary font-title-sm text-title-sm hover:underline flex items-center gap-1" id="btn-preview-wa">
                  <span class="material-symbols-outlined text-[16px]">chat</span>
                  <span>Pratinjau Template WA</span>
                </button>
              </div>
            </div>
          </div>
          <!-- Visual Roastery Ambience & Loyalty Culture Callout -->
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-stretch">
            <div class="lg:col-span-8 bg-surface-container-lowest rounded-xl p-space-lg flex flex-col md:flex-row items-center gap-space-lg shadow-sm">
              <div class="w-full md:w-56 h-44 rounded-xl overflow-hidden shrink-0">
                <img class="w-full h-full object-cover" data-alt="Artisanal pour over coffee brewing ritual inside a moody upscale wooden cafe counter, golden hour sunlight streaming through amber glass cups with steam rising, warm espresso tones and natural stone surfaces." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3MjieYLI8yverDIEc6BxCM_X7QpXuyobcSAtMW1jae-1Ab61j-mSqvVTkdqFuAlSS5K64yeeiozzRpUiterVCZT8a9PgrlrAUbdK95sO1v4XZuVR5rm6fidCQ4B7mVPNmTJUkBhU03YcYY3ghZXw0JZfkw4OMxxcuYPwcxEoUPBIxV0PTdCF4APYr7gGFBghY0kAnKyNgx859QL81chDmjsYWhQc90Bjkx8F5_AWG" />
              </div>
              <div class="flex flex-col justify-center">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">The C28 Hospitality Standard</span>
                <h4 class="font-headline-sm text-headline-sm text-on-surface font-serif mt-1">Sentuhan Personal di Setiap Cup</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">
                  Data keanggotaan langsung disinkronkan ke layar barista POS saat pelanggan memindai QR. Hal ini memungkinkan barista menyapa member Gold dengan nama mereka dan menyajikan bean single-origin preferensi mereka secara tepat waktu.
                </p>
                <div class="flex items-center gap-4 mt-3">
                  <div class="flex items-center gap-1.5 text-on-surface font-label-md text-label-md">
                    <span class="material-symbols-outlined text-secondary text-[16px]">speed</span>
                    <span>Sync Speed: &lt; 0.4s</span>
                  </div>
                  <div class="flex items-center gap-1.5 text-on-surface font-label-md text-label-md">
                    <span class="material-symbols-outlined text-secondary text-[16px]">lock</span>
                    <span>Encrypted Member Hash</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="lg:col-span-4 bg-primary-container text-surface-container-lowest rounded-xl p-space-lg flex flex-col justify-between shadow-sm relative overflow-hidden">
              <div>
                <div class="flex items-center justify-between mb-3">
                  <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary-fixed-dim">Audit Log Tier</span>
                  <span class="material-symbols-outlined text-primary-fixed-dim text-[18px]">history</span>
                </div>
                <h4 class="font-headline-sm text-headline-sm font-serif">Riwayat Perubahan Terakhir</h4>
                <div class="flex flex-col gap-2.5 mt-4">
                  <div class="text-[12px] flex items-start justify-between text-primary-fixed-dim/90">
                    <span>Threshold Gold dinaikkan</span>
                    <span class="font-mono text-[11px]">Kemarin, 14:20</span>
                  </div>
                  <div class="text-[12px] flex items-start justify-between text-primary-fixed-dim/90">
                    <span>Benefit Cupcake Silver diaktifkan</span>
                    <span class="font-mono text-[11px]">18 Okt 2024</span>
                  </div>
                  <div class="text-[12px] flex items-start justify-between text-primary-fixed-dim/90">
                    <span>Pengganda Poin Silver 1.2x disetujui</span>
                    <span class="font-mono text-[11px]">12 Okt 2024</span>
                  </div>
                </div>
              </div>
              <div class="pt-4 mt-4 border-t border-on-primary-fixed-variant/20 flex items-center justify-between">
                <span class="font-label-sm text-label-sm text-primary-fixed-dim">Diubah oleh: Head of Ops</span>
                <button class="text-surface-container-lowest hover:text-secondary-fixed text-label-sm font-label-sm flex items-center gap-1">
                  <span>Log Lengkap</span>
                  <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                </button>
              </div>
            </div>
          </div>
          <!-- Notification Toast (Hidden by default, triggered via JS) -->
          <div class="fixed bottom-6 right-6 bg-on-surface text-surface-container-lowest px-5 py-3.5 rounded-xl shadow-xl flex items-center gap-3 translate-y-24 opacity-0 transition-all duration-300 pointer-events-none z-50" id="save-toast">
            <span class="material-symbols-outlined text-secondary-container text-[22px]">check_circle</span>
            <div class="flex flex-col">
              <span class="font-title-sm text-title-sm">Aturan Tiering Berhasil Diperbarui</span>
              <span class="font-body-sm text-body-sm text-surface-variant/80">Perubahan disinkronkan ke seluruh terminal kasir C28</span>
            </div>
          </div>
        </div>
      </div>
      <script>
        // Interactive Micro-interactions for Loyalty Tier Page
        document.addEventListener('DOMContentLoaded', () => {
          const saveButton = document.getElementById('btn-save-rules');
          const toast = document.getElementById('save-toast');
          const addTierBtn = document.getElementById('btn-add-tier');
          const previewBtn = document.getElementById('btn-preview-wa');

          // Save rules feedback toast
          if (saveButton && toast) {
            saveButton.addEventListener('click', () => {
              saveButton.innerHTML = `<span class="material-symbols-outlined text-[18px] animate-spin">refresh</span><span>Menyimpan...</span>`;
              saveButton.disabled = true;

              setTimeout(() => {
                saveButton.innerHTML = `<span class="material-symbols-outlined text-[18px]">verified</span><span>Simpan Aturan Tiering</span>`;
                saveButton.disabled = false;

                // Reveal toast
                toast.classList.remove('translate-y-24', 'opacity-0');
                toast.classList.add('translate-y-0', 'opacity-100');

                setTimeout(() => {
                  toast.classList.add('translate-y-24', 'opacity-0');
                  toast.classList.remove('translate-y-0', 'opacity-100');
                }, 3500);
              }, 600);
            });
          }

          // Add Tier Modal feedback placeholder
          if (addTierBtn) {
            addTierBtn.addEventListener('click', () => {
              alert('Formulir Level Membership Baru siap dibuat. Sistem C28 mendukung penambahan hingga 5 tingkatan loyalitas berjenjang.');
            });
          }

          // Preview WA Trigger
          if (previewBtn) {
            previewBtn.addEventListener('click', () => {
              alert(`[Pratinjau Pesan WhatsApp C28]\n\nHalo {{Nama Pelanggan}}! 🎉\nSelamat! Total transaksimu telah mencapai level baru di C28 Coffee Club: Anda resmi menjadi member GOLD RESERVE.\n\nNikmati pengganda 1.5x Poin & Secret Brew Menu di kunjungan berikutnya. Tunjukkan QR Pass ini ke barista: c28.club/m/{{MemberID}}`);
            });
          }
        });
      </script>
    </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>