<?php
$pageTitle = 'Staff Dashboard';
$activePage = 'dashboard';
$breadcrumb = 'Staff Overview';
require_once __DIR__ . '/includes/header.php';
?>

<main class="w-full pt-16 bg-surface">
    <div class="flex flex-col w-full">
        <div class="p-margin flex flex-col gap-space-lg max-w-[1520px] mx-auto w-full">

            <!-- BEGIN: Page Header Section -->
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md bg-surface-container-lowest p-space-xl rounded-xl shadow-sm relative overflow-hidden">
                <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-secondary-container/10 pointer-events-none blur-3xl"></div>
                <div class="flex flex-col gap-1 z-10 max-w-2xl">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-secondary"></span>
                        <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">C28 Coffee Club</span>
                        <span class="font-label-sm text-label-sm text-outline">â€¢ Executive Overview</span>
                    </div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight mt-1">Staff Dashboard</h1>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Pantau performa harian kedai, transaksi aktif, perolehan poin loyalty member, dan aktivitas kasir real-time.
                    </p>
                </div>
                <!-- Primary Header Actions -->
                <div class="flex items-center gap-space-sm z-10 self-start lg:self-end">
                    <button class="flex items-center gap-2 px-4 py-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface font-title-sm text-title-sm transition-all shadow-sm">
                        <span class="material-symbols-outlined text-[18px] text-secondary">calendar_today</span>
                        <span>Hari Ini: 09 Nov 2026</span>
                    </button>
                    <a class="flex items-center gap-2 px-5 py-2.5 rounded-lg bg-secondary hover:bg-on-secondary-container text-on-secondary font-title-sm text-title-sm transition-all shadow-md" href="#">
                        <span class="material-symbols-outlined text-[19px]">add</span>
                        <span>Transaksi Baru</span>
                    </a>
                </div>
            </div>
            <!-- END: Page Header Section -->

            <!-- BEGIN: Operational Shift Status Banner -->
            <div class="bg-primary-container rounded-xl p-space-lg flex flex-col md:flex-row md:items-center justify-between gap-space-md relative overflow-hidden shadow-sm">
                <!-- Background ornament -->
                <div class="absolute right-0 top-0 translate-x-12 -translate-y-8 w-60 h-60 bg-secondary/10 rounded-full blur-2xl pointer-events-none"></div>
                <div class="flex items-center gap-4 relative z-10">
                    <div class="w-12 h-12 rounded-xl bg-on-primary-fixed-variant/20 border border-on-primary-fixed-variant/15 flex items-center justify-center text-tertiary-fixed-dim flex-shrink-0">
                        <span class="material-symbols-outlined text-[26px]">coffee_maker</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-tertiary-fixed-dim font-bold">Shift Pagi Aktif (07:00 - 15:00)</span>
                            <span class="inline-flex items-center gap-1 bg-on-primary-fixed/80 text-surface-container-low font-label-sm text-label-sm px-2 py-0.5 rounded-full border border-on-primary-fixed-variant/20">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span> POS Online
                            </span>
                        </div>
                        <h3 class="font-title-md text-title-md text-surface-container-lowest mt-0.5">
                            Barista on duty: Dian Pratama &amp; Yoga Sandi
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-primary-container mt-0.5">
                            Kasir Mesin #01 terhubung dengan Cloud Loyalty Engine â€¢ 0 pesanan tertunda
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-2 relative z-10 flex-shrink-0">
                    <a class="px-4 py-2 bg-secondary hover:bg-on-secondary-container text-on-secondary font-title-sm text-title-sm rounded-lg shadow-sm transition" href="#">
                        Buka Register Kasir
                    </a>
                    <a class="px-4 py-2 bg-on-primary-fixed-variant/20 hover:bg-on-primary-fixed-variant/30 text-primary-fixed-dim font-label-md text-label-md rounded-lg border border-on-primary-fixed-variant/20 transition" href="#">
                        Ganti Shift
                    </a>
                </div>
            </div>
            <!-- END: Operational Shift Status Banner -->

            <!-- BEGIN: Metric Summary Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
                <!-- Metric 1: Total Member -->
                <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex items-center justify-between relative overflow-hidden group">
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline mb-1">Total Member</span>
                        <div class="flex items-baseline gap-2">
                            <span class="font-headline-lg text-headline-lg text-on-surface tracking-tight">1.248</span>
                            <span class="font-label-sm text-label-sm text-secondary font-bold flex items-center">
                                <span class="material-symbols-outlined text-[14px]">trending_up</span> +14.2%
                            </span>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Pertumbuhan aktif bulan ini</span>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-[24px]">group</span>
                    </div>
                </div>
                <!-- Metric 2: Transaksi Hari Ini -->
                <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex items-center justify-between relative overflow-hidden group">
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline mb-1">Transaksi Hari Ini</span>
                        <div class="flex items-baseline gap-2">
                            <span class="font-headline-lg text-headline-lg text-on-surface tracking-tight">48</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant font-normal">Struk</span>
                        </div>
                        <div class="flex items-center justify-between mt-0.5">
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Omset:</span>
                            <span class="font-label-md text-label-md text-on-surface font-bold">Rp 2.450.000</span>
                        </div>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-[24px]">receipt</span>
                    </div>
                </div>
                <!-- Metric 3: Poin Diterbitkan -->
                <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex items-center justify-between relative overflow-hidden group">
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline mb-1">Poin Diterbitkan</span>
                        <div class="flex items-baseline gap-2">
                            <span class="font-headline-lg text-headline-lg text-secondary tracking-tight">245</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant font-normal">Poin</span>
                        </div>
                        <div class="flex items-center justify-between mt-0.5">
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Setara diskon:</span>
                            <span class="font-label-md text-label-md text-on-surface font-bold">Rp 245.000</span>
                        </div>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-[24px]">stars</span>
                    </div>
                </div>
                <!-- Metric 4: Member Baru Hari Ini -->
                <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex items-center justify-between relative overflow-hidden group">
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline mb-1">Member Baru Hari Ini</span>
                        <div class="flex items-baseline gap-2">
                            <span class="font-headline-lg text-headline-lg text-on-surface tracking-tight">12</span>
                            <span class="font-label-sm text-label-sm text-secondary font-bold">+3 Kemarin</span>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5 flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block"></span>
                            Registrasi counter &amp; digital
                        </span>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-[24px]">person_add</span>
                    </div>
                </div>
            </div>
            <!-- END: Metric Summary Cards -->

            <!-- BEGIN: Recent Transactions Table Section -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm flex flex-col overflow-hidden">
                <!-- Table Header / Title Bar -->
                <div class="p-space-lg border-b border-surface-container flex flex-col sm:flex-row sm:items-center sm:justify-between gap-space-sm">
                    <div>
                        <div class="flex items-center gap-2">
                            <h3 class="font-headline-md text-headline-md text-on-surface tracking-tight">Transaksi Terbaru</h3>
                            <span class="font-label-sm text-label-sm bg-surface-container-low text-secondary px-2 py-0.5 rounded-full border border-secondary/20 font-bold">Real-time</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                            5 transaksi terakhir member di counter kasir C28 Coffee Club.
                        </p>
                    </div>
                    <!-- Table Actions -->
                    <a class="font-label-md text-label-md text-secondary hover:underline flex-shrink-0 inline-flex items-center gap-1 font-semibold" href="#">
                        Lihat Semua Transaksi <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
                <!-- Data Table -->
                <div class="overflow-x-auto w-full">
                    <table class="w-full text-left border-collapse" data-purpose="transactions-data-table">
                        <thead>
                            <tr class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider select-none">
                                <th class="py-3.5 px-6 font-semibold" scope="col">Member</th>
                                <th class="py-3.5 px-6 font-semibold" scope="col">Nomor Member</th>
                                <th class="py-3.5 px-6 font-semibold" scope="col">Nominal</th>
                                <th class="py-3.5 px-6 font-semibold" scope="col">Poin</th>
                                <th class="py-3.5 px-6 font-semibold" scope="col">Metode &amp; Status</th>
                                <th class="py-3.5 px-6 font-semibold" scope="col">Waktu</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-surface-container font-body-md text-body-md text-on-surface">
                            <!-- Row 1: Raja Habib -->
                            <tr class="hover:bg-surface-container-low/40 transition-colors group">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-[#fef3c7] text-[#92400e] font-title-sm text-title-sm flex items-center justify-center font-bold flex-shrink-0 shadow-sm">
                                            RH
                                        </div>
                                        <div class="flex flex-col min-w-0">
                                            <span class="font-title-sm text-title-sm text-on-surface group-hover:text-secondary transition-colors">Raja Habib</span>
                                            <span class="font-body-sm text-body-sm text-outline">0812-9843-1120</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-label-md text-label-md text-on-surface-variant font-mono">C28-000001</td>
                                <td class="py-4 px-6 font-title-sm text-title-sm text-on-surface">Rp 35.000</td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary bg-surface-container-low px-2.5 py-1 rounded-full border border-secondary/20 font-bold">
                                        <span class="material-symbols-outlined text-[13px]">stars</span> +3 Poin
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-1.5">
                                        <span class="px-2 py-0.5 bg-surface-container text-on-surface-variant rounded font-label-sm text-label-sm">QRIS</span>
                                        <span class="inline-flex items-center gap-1 font-body-sm text-body-sm text-green-700 font-medium">
                                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block"></span> Berhasil
                                        </span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-body-sm text-body-sm text-outline tabular-nums">21/09/2026 16:10</td>
                            </tr>
                            <!-- Row 2: Raja Habib (repeat order) -->
                            <tr class="hover:bg-surface-container-low/40 transition-colors group">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-[#fef3c7] text-[#92400e] font-title-sm text-title-sm flex items-center justify-center font-bold flex-shrink-0 shadow-sm">
                                            RH
                                        </div>
                                        <div class="flex flex-col min-w-0">
                                            <span class="font-title-sm text-title-sm text-on-surface group-hover:text-secondary transition-colors">Raja Habib</span>
                                            <span class="font-body-sm text-body-sm text-outline">0812-9843-1120</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-label-md text-label-md text-on-surface-variant font-mono">C28-000001</td>
                                <td class="py-4 px-6 font-title-sm text-title-sm text-on-surface">Rp 27.000</td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary bg-surface-container-low px-2.5 py-1 rounded-full border border-secondary/20 font-bold">
                                        <span class="material-symbols-outlined text-[13px]">stars</span> +2 Poin
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-1.5">
                                        <span class="px-2 py-0.5 bg-surface-container text-on-surface-variant rounded font-label-sm text-label-sm">Tunai</span>
                                        <span class="inline-flex items-center gap-1 font-body-sm text-body-sm text-green-700 font-medium">
                                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block"></span> Berhasil
                                        </span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-body-sm text-body-sm text-outline tabular-nums">21/09/2026 16:04</td>
                            </tr>
                            <!-- Row 3: Siti Rahma -->
                            <tr class="hover:bg-surface-container-low/40 transition-colors group">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-[#f1f5f9] text-[#475569] font-title-sm text-title-sm flex items-center justify-center font-bold flex-shrink-0 shadow-sm">
                                            SR
                                        </div>
                                        <div class="flex flex-col min-w-0">
                                            <span class="font-title-sm text-title-sm text-on-surface group-hover:text-secondary transition-colors">Siti Rahma</span>
                                            <span class="font-body-sm text-body-sm text-outline">0813-7721-0941</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-label-md text-label-md text-on-surface-variant font-mono">C28-000024</td>
                                <td class="py-4 px-6 font-title-sm text-title-sm text-on-surface">Rp 52.000</td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary bg-surface-container-low px-2.5 py-1 rounded-full border border-secondary/20 font-bold">
                                        <span class="material-symbols-outlined text-[13px]">stars</span> +5 Poin
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-1.5">
                                        <span class="px-2 py-0.5 bg-surface-container text-on-surface-variant rounded font-label-sm text-label-sm">Debit BCA</span>
                                        <span class="inline-flex items-center gap-1 font-body-sm text-body-sm text-green-700 font-medium">
                                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block"></span> Berhasil
                                        </span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-body-sm text-body-sm text-outline tabular-nums">21/09/2026 15:42</td>
                            </tr>
                            <!-- Row 4: Nadia Safira -->
                            <tr class="hover:bg-surface-container-low/40 transition-colors group">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-[#fef3c7] text-[#92400e] font-title-sm text-title-sm flex items-center justify-center font-bold flex-shrink-0 shadow-sm">
                                            NS
                                        </div>
                                        <div class="flex flex-col min-w-0">
                                            <span class="font-title-sm text-title-sm text-on-surface group-hover:text-secondary transition-colors">Nadia Safira</span>
                                            <span class="font-body-sm text-body-sm text-outline">0857-4100-2219</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-label-md text-label-md text-on-surface-variant font-mono">C28-000088</td>
                                <td class="py-4 px-6 font-title-sm text-title-sm text-on-surface">Rp 44.000</td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary bg-surface-container-low px-2.5 py-1 rounded-full border border-secondary/20 font-bold">
                                        <span class="material-symbols-outlined text-[13px]">stars</span> +4 Poin
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-1.5">
                                        <span class="px-2 py-0.5 bg-surface-container text-on-surface-variant rounded font-label-sm text-label-sm">QRIS</span>
                                        <span class="inline-flex items-center gap-1 font-body-sm text-body-sm text-green-700 font-medium">
                                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block"></span> Berhasil
                                        </span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-body-sm text-body-sm text-outline tabular-nums">21/09/2026 15:18</td>
                            </tr>
                            <!-- Row 5: Kevin Jonathan -->
                            <tr class="hover:bg-surface-container-low/40 transition-colors group">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-[#fbeae5] text-[#9c4400] font-title-sm text-title-sm flex items-center justify-center font-bold flex-shrink-0 shadow-sm">
                                            KJ
                                        </div>
                                        <div class="flex flex-col min-w-0">
                                            <span class="font-title-sm text-title-sm text-on-surface group-hover:text-secondary transition-colors">Kevin Jonathan</span>
                                            <span class="font-body-sm text-body-sm text-outline">0819-3011-8977</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-label-md text-label-md text-on-surface-variant font-mono">C28-000102</td>
                                <td class="py-4 px-6 font-title-sm text-title-sm text-on-surface">Rp 78.000</td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary bg-surface-container-low px-2.5 py-1 rounded-full border border-secondary/20 font-bold">
                                        <span class="material-symbols-outlined text-[13px]">stars</span> +7 Poin
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-1.5">
                                        <span class="px-2 py-0.5 bg-surface-container text-on-surface-variant rounded font-label-sm text-label-sm">QRIS</span>
                                        <span class="inline-flex items-center gap-1 font-body-sm text-body-sm text-green-700 font-medium">
                                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block"></span> Berhasil
                                        </span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-body-sm text-body-sm text-outline tabular-nums">21/09/2026 14:55</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Table Footer / Pagination -->
                <div class="p-space-md bg-surface-container-lowest flex flex-col sm:flex-row items-center justify-between gap-space-sm">
                    <div class="font-body-sm text-body-sm text-on-surface-variant">
                        Menampilkan <span class="font-semibold text-on-surface">5</span> transaksi terakhir dari kasir utama
                    </div>
                    <div class="flex items-center gap-1.5 select-none">
                        <button class="w-8 h-8 rounded-lg flex items-center justify-center text-outline hover:bg-surface-container-low hover:text-on-surface transition-all disabled:opacity-30 disabled:pointer-events-none" disabled>
                            <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                        </button>
                        <button class="w-8 h-8 rounded-lg bg-secondary text-on-secondary font-title-sm text-title-sm flex items-center justify-center shadow-sm">1</button>
                        <button class="w-8 h-8 rounded-lg text-on-surface hover:bg-surface-container-low font-body-md text-body-md flex items-center justify-center transition-all">2</button>
                        <button class="w-8 h-8 rounded-lg flex items-center justify-center text-on-surface hover:bg-surface-container-low transition-all">
                            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- END: Recent Transactions Table Section -->

        </div>
    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>