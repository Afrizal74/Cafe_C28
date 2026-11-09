<?php
$pageTitle = 'Daftar Member';
$activePage = 'daftar-member';
$breadcrumb = 'Daftar Member';
require_once __DIR__ . '/includes/header.php';
?>

<main class="w-full pt-16 bg-surface">
      <div class="flex flex-col w-full">
        <div class="p-margin flex flex-col gap-space-lg max-w-[1520px] mx-auto w-full">
          <!-- Header Block with Editorial Warmth -->
          <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md bg-surface-container-lowest p-space-xl rounded-xl shadow-sm relative overflow-hidden">
            <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-secondary-container/10 pointer-events-none blur-3xl"></div>
            <div class="flex flex-col gap-1 z-10 max-w-2xl">
              <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-secondary"></span>
                <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">C28 Coffee Club</span>
                <span class="font-label-sm text-label-sm text-outline">• Customer Loyalty Database</span>
              </div>
              <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight mt-1">Daftar Member</h1>
              <p class="font-body-md text-body-md text-on-surface-variant">
                Database pelanggan terdaftar, perolehan poin loyalitas, serta riwayat keanggotaan aktif C28 Coffee Club.
              </p>
            </div>
            <div class="flex items-center gap-space-sm z-10 self-start lg:self-end">
              <button class="flex items-center gap-2 px-4 py-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface font-title-sm text-title-sm transition-all shadow-sm">
                <span class="material-symbols-outlined text-[18px] text-secondary">file_download</span>
                <span>Ekspor CSV</span>
              </button>
              <button class="flex items-center gap-2 px-5 py-2.5 rounded-lg bg-secondary hover:bg-on-secondary-container text-on-secondary font-title-sm text-title-sm transition-all shadow-md">
                <span class="material-symbols-outlined text-[19px]">person_add</span>
                <span>+ Tambah Member Baru</span>
              </button>
            </div>
          </div>
          <!-- KPI Metric Summary Tiles -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
            <!-- Tile 1 -->
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex items-center justify-between relative overflow-hidden group">
              <div class="flex flex-col">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline mb-1">Total Member Terdaftar</span>
                <div class="flex items-baseline gap-2">
                  <span class="font-headline-lg text-headline-lg text-on-surface tracking-tight">1.248</span>
                  <span class="font-label-sm text-label-sm text-secondary font-bold flex items-center">
                    <span class="material-symbols-outlined text-[14px]">trending_up</span> +14.2%
                  </span>
                </div>
                <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Sejak pembukaan kuartal Q1</span>
              </div>
              <div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined text-[24px]">group</span>
              </div>
            </div>
            <!-- Tile 2 -->
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex items-center justify-between relative overflow-hidden group">
              <div class="flex flex-col">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline mb-1">Member Aktif Bulan Ini</span>
                <div class="flex items-baseline gap-2">
                  <span class="font-headline-lg text-headline-lg text-on-surface tracking-tight">842</span>
                  <span class="font-label-sm text-label-sm text-secondary font-bold">67.4% rasio</span>
                </div>
                <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Min. 1 transaksi 30 hari terakhir</span>
              </div>
              <div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined text-[24px]">storefront</span>
              </div>
            </div>
            <!-- Tile 3 -->
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex items-center justify-between relative overflow-hidden group">
              <div class="flex flex-col">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline mb-1">Rata-rata Poin per Member</span>
                <div class="flex items-baseline gap-2">
                  <span class="font-headline-lg text-headline-lg text-on-surface tracking-tight">38 <span class="font-title-sm text-title-sm font-normal text-on-surface-variant">Poin</span></span>
                  <span class="font-label-sm text-label-sm text-secondary font-bold flex items-center">
                    <span class="material-symbols-outlined text-[14px]">local_cafe</span> Aktif
                  </span>
                </div>
                <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Valuasi redeem Rp 38.000,-</span>
              </div>
              <div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined text-[24px]">toll</span>
              </div>
            </div>
          </div>
          <!-- Table Container with Integrated Filtering Shelf -->
          <div class="bg-surface-container-lowest rounded-xl shadow-sm flex flex-col overflow-hidden">
            <!-- Action & Filter Bar -->
            <div class="p-space-md lg:p-space-lg bg-surface-container-low/50 flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md">
              <!-- Search Input -->
              <div class="relative flex-1 max-w-md">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
                <input class="w-full h-11 pl-11 pr-4 rounded-lg bg-surface-container-lowest text-on-surface placeholder:text-outline text-body-md font-body-md focus:outline-none focus:ring-2 focus:ring-secondary/20 transition-all shadow-sm" placeholder="Cari nama, no. HP, atau ID member..." type="text" />
              </div>
              <!-- Filter Chips for Membership Tier -->
              <div class="flex flex-wrap items-center gap-2">
                <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider mr-1 hidden sm:inline">Tier:</span>
                <button class="h-8 px-4 rounded-full bg-primary-container text-surface-container-lowest font-label-md text-label-md flex items-center gap-1.5 transition-all shadow-sm">
                  <span>Semua</span>
                  <span class="px-1.5 py-0.2 rounded-full bg-on-primary-fixed-variant text-[10px] text-surface-container-lowest">1.248</span>
                </button>
                <button class="h-8 px-4 rounded-full bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center gap-1.5 transition-all">
                  <span class="w-2 h-2 rounded-full bg-[#f59e0b]"></span>
                  <span>Gold</span>
                  <span class="text-outline text-[11px]">(184)</span>
                </button>
                <button class="h-8 px-4 rounded-full bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center gap-1.5 transition-all">
                  <span class="w-2 h-2 rounded-full bg-[#94a3b8]"></span>
                  <span>Silver</span>
                  <span class="text-outline text-[11px]">(412)</span>
                </button>
                <button class="h-8 px-4 rounded-full bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center gap-1.5 transition-all">
                  <span class="w-2 h-2 rounded-full bg-[#b45309]"></span>
                  <span>Bronze</span>
                  <span class="text-outline text-[11px]">(652)</span>
                </button>
              </div>
            </div>
            <!-- Data Table -->
            <div class="overflow-x-auto w-full">
              <table class="w-full text-left border-collapse">
                <thead>
                  <tr class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider select-none">
                    <th class="py-3.5 px-6 font-semibold">Member</th>
                    <th class="py-3.5 px-6 font-semibold">ID Member</th>
                    <th class="py-3.5 px-6 font-semibold">WhatsApp</th>
                    <th class="py-3.5 px-6 font-semibold">Bergabung</th>
                    <th class="py-3.5 px-6 font-semibold">Tier Status</th>
                    <th class="py-3.5 px-6 font-semibold text-right">Akumulasi Poin</th>
                    <th class="py-3.5 px-6 font-semibold text-right">Kunjungan</th>
                    <th class="py-3.5 px-6 font-semibold text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-surface-container font-body-md text-body-md text-on-surface">
                  <!-- Row 1: Raja Habib (Gold) -->
                  <tr class="hover:bg-surface-container-low/40 transition-colors group">
                    <td class="py-4 px-6">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#fef3c7] text-[#92400e] font-title-sm text-title-sm flex items-center justify-center font-bold flex-shrink-0 shadow-sm">
                          RH
                        </div>
                        <div class="flex flex-col min-w-0">
                          <span class="font-title-sm text-title-sm text-on-surface truncate group-hover:text-secondary transition-colors">Raja Habib</span>
                          <span class="font-body-sm text-body-sm text-outline truncate">raja.habib@email.com</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-6 font-label-md text-label-md text-on-surface-variant font-mono">
                      C28-000001
                    </td>
                    <td class="py-4 px-6 text-on-surface">
                      <div class="flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px] text-[#16a34a]">chat</span>
                        <span>0812-9876-5432</span>
                      </div>
                    </td>
                    <td class="py-4 px-6 text-on-surface-variant font-body-sm text-body-sm">
                      12 Jan 2024
                    </td>
                    <td class="py-4 px-6">
                      <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-[#fffbeb] text-[#b45309] font-label-sm text-label-sm font-bold shadow-[0_1px_2px_rgba(180,83,9,0.08)]">
                        <span class="material-symbols-outlined text-[14px]">stars</span> Gold
                      </span>
                    </td>
                    <td class="py-4 px-6 text-right tabular-nums">
                      <div class="inline-flex flex-col items-end">
                        <span class="font-title-sm text-title-sm font-bold text-on-surface">145</span>
                        <span class="font-label-sm text-label-sm text-outline">Poin Aktif</span>
                      </div>
                    </td>
                    <td class="py-4 px-6 text-right tabular-nums">
                      <span class="font-title-sm text-title-sm text-on-surface">28</span>
                      <span class="text-outline text-body-sm font-body-sm"> kali</span>
                    </td>
                    <td class="py-4 px-6">
                      <div class="flex items-center justify-center gap-1.5">
                        <button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-secondary transition-colors" title="Lihat Profil Member">
                          <span class="material-symbols-outlined text-[19px]">visibility</span>
                        </button>
                        <button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-secondary transition-colors" title="Sesuaikan Poin">
                          <span class="material-symbols-outlined text-[19px]">tune</span>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!-- Row 2: Siti Rahma (Silver) -->
                  <tr class="hover:bg-surface-container-low/40 transition-colors group">
                    <td class="py-4 px-6">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#f1f5f9] text-[#475569] font-title-sm text-title-sm flex items-center justify-center font-bold flex-shrink-0 shadow-sm">
                          SR
                        </div>
                        <div class="flex flex-col min-w-0">
                          <span class="font-title-sm text-title-sm text-on-surface truncate group-hover:text-secondary transition-colors">Siti Rahma</span>
                          <span class="font-body-sm text-body-sm text-outline truncate">siti.rahma@email.com</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-6 font-label-md text-label-md text-on-surface-variant font-mono">
                      C28-000002
                    </td>
                    <td class="py-4 px-6 text-on-surface">
                      <div class="flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px] text-[#16a34a]">chat</span>
                        <span>0821-4567-8901</span>
                      </div>
                    </td>
                    <td class="py-4 px-6 text-on-surface-variant font-body-sm text-body-sm">
                      03 Feb 2024
                    </td>
                    <td class="py-4 px-6">
                      <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-[#f8fafc] text-[#475569] font-label-sm text-label-sm font-bold shadow-[0_1px_2px_rgba(71,85,105,0.08)]">
                        <span class="material-symbols-outlined text-[14px]">workspace_premium</span> Silver
                      </span>
                    </td>
                    <td class="py-4 px-6 text-right tabular-nums">
                      <div class="inline-flex flex-col items-end">
                        <span class="font-title-sm text-title-sm font-bold text-on-surface">68</span>
                        <span class="font-label-sm text-label-sm text-outline">Poin Aktif</span>
                      </div>
                    </td>
                    <td class="py-4 px-6 text-right tabular-nums">
                      <span class="font-title-sm text-title-sm text-on-surface">14</span>
                      <span class="text-outline text-body-sm font-body-sm"> kali</span>
                    </td>
                    <td class="py-4 px-6">
                      <div class="flex items-center justify-center gap-1.5">
                        <button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-secondary transition-colors" title="Lihat Profil Member">
                          <span class="material-symbols-outlined text-[19px]">visibility</span>
                        </button>
                        <button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-secondary transition-colors" title="Sesuaikan Poin">
                          <span class="material-symbols-outlined text-[19px]">tune</span>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!-- Row 3: Kevin Jonathan (Bronze) -->
                  <tr class="hover:bg-surface-container-low/40 transition-colors group">
                    <td class="py-4 px-6">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#fbeae5] text-[#9c4400] font-title-sm text-title-sm flex items-center justify-center font-bold flex-shrink-0 shadow-sm">
                          KJ
                        </div>
                        <div class="flex flex-col min-w-0">
                          <span class="font-title-sm text-title-sm text-on-surface truncate group-hover:text-secondary transition-colors">Kevin Jonathan</span>
                          <span class="font-body-sm text-body-sm text-outline truncate">kevin.j@email.com</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-6 font-label-md text-label-md text-on-surface-variant font-mono">
                      C28-000003
                    </td>
                    <td class="py-4 px-6 text-on-surface">
                      <div class="flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px] text-[#16a34a]">chat</span>
                        <span>0813-2345-6789</span>
                      </div>
                    </td>
                    <td class="py-4 px-6 text-on-surface-variant font-body-sm text-body-sm">
                      15 Feb 2024
                    </td>
                    <td class="py-4 px-6">
                      <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-[#fff7ed] text-[#c25e1a] font-label-sm text-label-sm font-bold shadow-[0_1px_2px_rgba(194,94,26,0.08)]">
                        <span class="material-symbols-outlined text-[14px]">shield</span> Bronze
                      </span>
                    </td>
                    <td class="py-4 px-6 text-right tabular-nums">
                      <div class="inline-flex flex-col items-end">
                        <span class="font-title-sm text-title-sm font-bold text-on-surface">25</span>
                        <span class="font-label-sm text-label-sm text-outline">Poin Aktif</span>
                      </div>
                    </td>
                    <td class="py-4 px-6 text-right tabular-nums">
                      <span class="font-title-sm text-title-sm text-on-surface">6</span>
                      <span class="text-outline text-body-sm font-body-sm"> kali</span>
                    </td>
                    <td class="py-4 px-6">
                      <div class="flex items-center justify-center gap-1.5">
                        <button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-secondary transition-colors" title="Lihat Profil Member">
                          <span class="material-symbols-outlined text-[19px]">visibility</span>
                        </button>
                        <button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-secondary transition-colors" title="Sesuaikan Poin">
                          <span class="material-symbols-outlined text-[19px]">tune</span>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!-- Row 4: Nadia Safira (Gold) -->
                  <tr class="hover:bg-surface-container-low/40 transition-colors group">
                    <td class="py-4 px-6">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#fef3c7] text-[#92400e] font-title-sm text-title-sm flex items-center justify-center font-bold flex-shrink-0 shadow-sm">
                          NS
                        </div>
                        <div class="flex flex-col min-w-0">
                          <span class="font-title-sm text-title-sm text-on-surface truncate group-hover:text-secondary transition-colors">Nadia Safira</span>
                          <span class="font-body-sm text-body-sm text-outline truncate">nadia.safira@email.com</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-6 font-label-md text-label-md text-on-surface-variant font-mono">
                      C28-000004
                    </td>
                    <td class="py-4 px-6 text-on-surface">
                      <div class="flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px] text-[#16a34a]">chat</span>
                        <span>0857-1122-3344</span>
                      </div>
                    </td>
                    <td class="py-4 px-6 text-on-surface-variant font-body-sm text-body-sm">
                      01 Mar 2024
                    </td>
                    <td class="py-4 px-6">
                      <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-[#fffbeb] text-[#b45309] font-label-sm text-label-sm font-bold shadow-[0_1px_2px_rgba(180,83,9,0.08)]">
                        <span class="material-symbols-outlined text-[14px]">stars</span> Gold
                      </span>
                    </td>
                    <td class="py-4 px-6 text-right tabular-nums">
                      <div class="inline-flex flex-col items-end">
                        <span class="font-title-sm text-title-sm font-bold text-on-surface">210</span>
                        <span class="font-label-sm text-label-sm text-outline">Poin Aktif</span>
                      </div>
                    </td>
                    <td class="py-4 px-6 text-right tabular-nums">
                      <span class="font-title-sm text-title-sm text-on-surface">42</span>
                      <span class="text-outline text-body-sm font-body-sm"> kali</span>
                    </td>
                    <td class="py-4 px-6">
                      <div class="flex items-center justify-center gap-1.5">
                        <button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-secondary transition-colors" title="Lihat Profil Member">
                          <span class="material-symbols-outlined text-[19px]">visibility</span>
                        </button>
                        <button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-secondary transition-colors" title="Sesuaikan Poin">
                          <span class="material-symbols-outlined text-[19px]">tune</span>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!-- Row 5: Dimas Pratama (Bronze) -->
                  <tr class="hover:bg-surface-container-low/40 transition-colors group">
                    <td class="py-4 px-6">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#fbeae5] text-[#9c4400] font-title-sm text-title-sm flex items-center justify-center font-bold flex-shrink-0 shadow-sm">
                          DP
                        </div>
                        <div class="flex flex-col min-w-0">
                          <span class="font-title-sm text-title-sm text-on-surface truncate group-hover:text-secondary transition-colors">Dimas Pratama</span>
                          <span class="font-body-sm text-body-sm text-outline truncate">dimas.p@email.com</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-6 font-label-md text-label-md text-on-surface-variant font-mono">
                      C28-000005
                    </td>
                    <td class="py-4 px-6 text-on-surface">
                      <div class="flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px] text-[#16a34a]">chat</span>
                        <span>0819-8765-4321</span>
                      </div>
                    </td>
                    <td class="py-4 px-6 text-on-surface-variant font-body-sm text-body-sm">
                      18 Mar 2024
                    </td>
                    <td class="py-4 px-6">
                      <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-[#fff7ed] text-[#c25e1a] font-label-sm text-label-sm font-bold shadow-[0_1px_2px_rgba(194,94,26,0.08)]">
                        <span class="material-symbols-outlined text-[14px]">shield</span> Bronze
                      </span>
                    </td>
                    <td class="py-4 px-6 text-right tabular-nums">
                      <div class="inline-flex flex-col items-end">
                        <span class="font-title-sm text-title-sm font-bold text-on-surface">12</span>
                        <span class="font-label-sm text-label-sm text-outline">Poin Aktif</span>
                      </div>
                    </td>
                    <td class="py-4 px-6 text-right tabular-nums">
                      <span class="font-title-sm text-title-sm text-on-surface">3</span>
                      <span class="text-outline text-body-sm font-body-sm"> kali</span>
                    </td>
                    <td class="py-4 px-6">
                      <div class="flex items-center justify-center gap-1.5">
                        <button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-secondary transition-colors" title="Lihat Profil Member">
                          <span class="material-symbols-outlined text-[19px]">visibility</span>
                        </button>
                        <button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-secondary transition-colors" title="Sesuaikan Poin">
                          <span class="material-symbols-outlined text-[19px]">tune</span>
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Pagination Toolbar -->
            <div class="p-space-md bg-surface-container-lowest flex flex-col sm:flex-row items-center justify-between gap-space-sm">
              <div class="font-body-sm text-body-sm text-on-surface-variant">
                Menampilkan <span class="font-semibold text-on-surface">1-5</span> dari <span class="font-semibold text-on-surface">1.248</span> member
              </div>
              <div class="flex items-center gap-1.5 select-none">
                <button class="w-8 h-8 rounded-lg flex items-center justify-center text-outline hover:bg-surface-container-low hover:text-on-surface transition-all disabled:opacity-30 disabled:pointer-events-none" disabled="">
                  <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                </button>
                <button class="w-8 h-8 rounded-lg bg-secondary text-on-secondary font-title-sm text-title-sm flex items-center justify-center shadow-sm">
                  1
                </button>
                <button class="w-8 h-8 rounded-lg text-on-surface hover:bg-surface-container-low font-body-md text-body-md flex items-center justify-center transition-all">
                  2
                </button>
                <button class="w-8 h-8 rounded-lg text-on-surface hover:bg-surface-container-low font-body-md text-body-md flex items-center justify-center transition-all">
                  3
                </button>
                <span class="w-8 h-8 flex items-center justify-center text-outline font-body-sm text-body-sm">
                  ...
                </span>
                <button class="w-8 h-8 rounded-lg text-on-surface hover:bg-surface-container-low font-body-md text-body-md flex items-center justify-center transition-all">
                  25
                </button>
                <button class="w-8 h-8 rounded-lg flex items-center justify-center text-on-surface hover:bg-surface-container-low transition-all">
                  <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                </button>
              </div>
            </div>
          </div>
          <!-- Quick Insight Notice -->
          <div class="bg-surface-container-low p-space-md rounded-xl flex items-center justify-between gap-space-md">
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-full bg-secondary-container/40 flex items-center justify-center text-secondary flex-shrink-0">
                <span class="material-symbols-outlined text-[18px]">workspace_premium</span>
              </div>
              <p class="font-body-sm text-body-sm text-on-surface-variant">
                Tiering otomatis dihitung setiap akhir bulan berdasarkan akumulasi transaksi. Gold (min. Rp 1.500.000), Silver (min. Rp 500.000).
              </p>
            </div>
            <a class="font-label-md text-label-md text-secondary hover:underline flex-shrink-0 inline-flex items-center gap-1 font-semibold" href="#">
              Aturan Tiering <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
          </div>
        </div>
      </div>
    </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>