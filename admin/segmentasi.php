<?php
$pageTitle = 'Segmentasi Member';
$activePage = 'segmentasi-member';
$breadcrumb = 'Segmentasi Member';
require_once __DIR__ . '/includes/header.php';
?>

<main class="w-full pt-16 bg-surface">
      <div class="flex flex-col w-full">
        <div class="px-margin py-space-xl flex flex-col gap-space-xl max-w-[1560px] mx-auto w-full">
          <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
            <div class="flex flex-col gap-space-xs">
              <div class="flex items-center gap-2">
                <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">C28 COFFEE CLUB</span>
                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">RFM Intelligence</span>
              </div>
              <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Segmentasi Member</h1>
              <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                Analisis perilaku pelanggan cafe untuk kampanye promosi terarah, retensi, dan apresiasi loyalitas berbasis Recency, Frequency, &amp; Monetary.
              </p>
            </div>
            <div class="flex items-center gap-space-sm self-start md:self-auto">
              <div class="flex items-center bg-surface-container-low px-3 py-1.5 rounded-xl shadow-sm">
                <span class="material-symbols-outlined text-[18px] text-on-surface-variant mr-2">calendar_today</span>
                <span class="font-label-md text-label-md text-on-surface">30 Hari Terakhir</span>
              </div>
              <button class="flex items-center gap-2 bg-primary text-on-primary px-4 py-2 rounded-lg font-title-sm text-title-sm shadow-sm hover:bg-on-primary-fixed-variant transition-colors">
                <span class="material-symbols-outlined text-[18px]">download</span>
                <span>Unduh Laporan RFM</span>
              </button>
            </div>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
              <div class="absolute -right-6 -bottom-6 w-28 h-28 rounded-full bg-surface-container-high/40 pointer-events-none"></div>
              <div>
                <div class="flex items-center justify-between mb-space-sm">
                  <span class="px-2.5 py-1 rounded-full bg-surface-container text-secondary font-label-sm text-label-sm font-semibold tracking-wide">
                    Tier Tertinggi
                  </span>
                  <span class="material-symbols-outlined text-secondary text-[24px]">workspace_premium</span>
                </div>
                <span class="font-label-md text-label-md text-on-surface-variant">Pelanggan VIP / Setia</span>
                <div class="mt-1 flex items-baseline gap-2">
                  <span class="font-headline-lg text-headline-lg text-on-surface">215</span>
                  <span class="font-label-sm text-label-sm text-secondary font-semibold">+12% bln ini</span>
                </div>
              </div>
              <div class="mt-space-md pt-space-sm">
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                  Frekuensi &gt; 10x/bulan. Menyumbang <span class="font-bold text-on-surface">48% omset</span> kedai secara konsisten.
                </p>
              </div>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
              <div class="absolute -right-6 -bottom-6 w-28 h-28 rounded-full bg-surface-container-high/30 pointer-events-none"></div>
              <div>
                <div class="flex items-center justify-between mb-space-sm">
                  <span class="px-2.5 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm font-semibold tracking-wide">
                    Penopang Volume
                  </span>
                  <span class="material-symbols-outlined text-outline text-[24px]">local_cafe</span>
                </div>
                <span class="font-label-md text-label-md text-on-surface-variant">Pelanggan Reguler</span>
                <div class="mt-1 flex items-baseline gap-2">
                  <span class="font-headline-lg text-headline-lg text-on-surface">540</span>
                  <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Stabil</span>
                </div>
              </div>
              <div class="mt-space-md pt-space-sm">
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                  Kunjungan 1-3x seminggu. Sangat responsif pada <span class="font-bold text-on-surface">promo akhir pekan &amp; pastry</span>.
                </p>
              </div>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
              <div class="absolute -right-6 -bottom-6 w-28 h-28 rounded-full bg-surface-container-high/20 pointer-events-none"></div>
              <div>
                <div class="flex items-center justify-between mb-space-sm">
                  <span class="px-2.5 py-1 rounded-full bg-surface-container text-secondary font-label-sm text-label-sm font-semibold tracking-wide">
                    Baru Gabung
                  </span>
                  <span class="material-symbols-outlined text-secondary text-[24px]">person_add</span>
                </div>
                <span class="font-label-md text-label-md text-on-surface-variant">Pelanggan Baru</span>
                <div class="mt-1 flex items-baseline gap-2">
                  <span class="font-headline-lg text-headline-lg text-on-surface">180</span>
                  <span class="font-label-sm text-label-sm text-secondary font-semibold">+24 pendaftar</span>
                </div>
              </div>
              <div class="mt-space-md pt-space-sm">
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                  Registrasi dalam <span class="font-bold text-on-surface">30 hari terakhir</span>. Potensial ditingkatkan ke tier reguler.
                </p>
              </div>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
              <div class="absolute -right-6 -bottom-6 w-28 h-28 rounded-full bg-error-container/30 pointer-events-none"></div>
              <div>
                <div class="flex items-center justify-between mb-space-sm">
                  <span class="px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold tracking-wide">
                    Perlu Atensi Segera
                  </span>
                  <span class="material-symbols-outlined text-error text-[24px]">warning</span>
                </div>
                <span class="font-label-md text-label-md text-on-surface-variant">Berisiko Churn</span>
                <div class="mt-1 flex items-baseline gap-2">
                  <span class="font-headline-lg text-headline-lg text-error">98</span>
                  <span class="font-label-sm text-label-sm text-error font-medium">Inaktif &gt;45 hari</span>
                </div>
              </div>
              <div class="mt-space-md pt-space-sm">
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                  Perlu intervensi re-engagement melalui voucher otomatis sebelum beralih ke cafe lain.
                </p>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-stretch">
            <div class="lg:col-span-8 bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between">
              <div>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-xs mb-space-md">
                  <div>
                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Distribusi Komposisi Pelanggan</h2>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Proporsi 1.033 total member aktif terdata di C28 Coffee Club</p>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
                    <span class="font-label-sm text-label-sm text-on-surface">Kalkulasi Otomatis (H-1)</span>
                  </div>
                </div>
                <div class="flex flex-col gap-2 my-space-md">
                  <div class="h-6 w-full rounded-xl overflow-hidden flex bg-surface-container-low p-0.5">
                    <div class="h-full bg-secondary rounded-l-lg transition-all" style="width: 35%;" title="Loyal Advocates (35%)"></div>
                    <div class="h-full bg-secondary-container transition-all" style="width: 40%;" title="Steady Customers (40%)"></div>
                    <div class="h-full bg-surface-dim transition-all" style="width: 15%;" title="New Explorers (15%)"></div>
                    <div class="h-full bg-inverse-primary rounded-r-lg transition-all" style="width: 10%;" title="Hibernating (10%)"></div>
                  </div>
                  <div class="flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant pt-1">
                    <span>0% Basis Pelanggan</span>
                    <span>100% (1.033 Member)</span>
                  </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-space-sm mt-space-md">
                  <div class="bg-surface-container-low p-3 rounded-lg flex flex-col gap-1">
                    <div class="flex items-center gap-1.5">
                      <span class="w-3 h-3 rounded-full bg-secondary"></span>
                      <span class="font-title-sm text-title-sm text-on-surface">35%</span>
                    </div>
                    <span class="font-label-md text-label-md text-on-surface">Loyal Advocates</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">361 member · Pengeluaran &gt; Rp450k/bln</span>
                  </div>
                  <div class="bg-surface-container-low p-3 rounded-lg flex flex-col gap-1">
                    <div class="flex items-center gap-1.5">
                      <span class="w-3 h-3 rounded-full bg-secondary-container"></span>
                      <span class="font-title-sm text-title-sm text-on-surface">40%</span>
                    </div>
                    <span class="font-label-md text-label-md text-on-surface">Steady Customers</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">413 member · Rutin mingguan</span>
                  </div>
                  <div class="bg-surface-container-low p-3 rounded-lg flex flex-col gap-1">
                    <div class="flex items-center gap-1.5">
                      <span class="w-3 h-3 rounded-full bg-surface-dim"></span>
                      <span class="font-title-sm text-title-sm text-on-surface">15%</span>
                    </div>
                    <span class="font-label-md text-label-md text-on-surface">New Explorers</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">155 member · Siklus coba menu baru</span>
                  </div>
                  <div class="bg-surface-container-low p-3 rounded-lg flex flex-col gap-1">
                    <div class="flex items-center gap-1.5">
                      <span class="w-3 h-3 rounded-full bg-inverse-primary"></span>
                      <span class="font-title-sm text-title-sm text-on-surface">10%</span>
                    </div>
                    <span class="font-label-md text-label-md text-on-surface">Hibernating</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">104 member · Berpotensi hilang</span>
                  </div>
                </div>
              </div>
              <div class="mt-space-md pt-space-sm flex items-center justify-between">
                <div class="flex items-center gap-2 text-on-surface-variant">
                  <span class="material-symbols-outlined text-[18px]">info</span>
                  <span class="font-body-sm text-body-sm">Segmentasi otomatis terbarui setiap jam 23:59 WIB dari POS kedai.</span>
                </div>
                <button class="font-label-md text-label-md text-secondary hover:underline flex items-center gap-1">
                  <span>Konfigurasi Threshold Skor RFM</span>
                  <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                </button>
              </div>
            </div>
            <div class="lg:col-span-4 bg-primary-container text-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden">
              <div class="relative z-10 flex flex-col gap-space-sm">
                <div class="flex items-center justify-between">
                  <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary-fixed">Insight Barista &amp; Staff</span>
                  <span class="material-symbols-outlined text-secondary-fixed text-[20px]">lightbulb</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm text-surface-container-lowest">Momentum Retensi Minggu Ini</h3>
                <p class="font-body-sm text-body-sm text-primary-fixed-dim leading-relaxed">
                  Terdeteksi kenaikan 18% pada member segmen "Daily Coffee Addicts" yang memesan manual brew bean Single Origin Gayo. Pastikan batch roasting siap seduh.
                </p>
                <div class="p-3 bg-on-primary-fixed-variant/40 rounded-lg flex items-center gap-3 mt-2">
                  <div class="w-10 h-10 rounded-xl bg-secondary flex items-center justify-center text-on-secondary shrink-0">
                    <span class="material-symbols-outlined text-[20px]">smart_toy</span>
                  </div>
                  <div>
                    <p class="font-title-sm text-title-sm text-surface-container-lowest">Trigger Otomatis Aktif</p>
                    <p class="font-body-sm text-body-sm text-primary-fixed-dim">Voucher Ulang Tahun terkirim H-3 via WhatsApp API</p>
                  </div>
                </div>
              </div>
              <div class="relative z-10 pt-space-md flex items-center justify-between">
                <span class="font-label-sm text-label-sm text-on-primary-container">Terkirim: 42 Member (Bulan Ini)</span>
                <a class="font-label-md text-label-md text-secondary-fixed hover:text-surface-container-lowest flex items-center gap-1" data-path="ulang-tahun" href="ulangTahun.php">
                  <span>Cek Jadwal Ultah</span>
                  <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                </a>
              </div>
            </div>
          </div>
          <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
            <div class="p-space-lg flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
              <div class="flex flex-col gap-0.5">
                <div class="flex items-center gap-2">
                  <h2 class="font-headline-sm text-headline-sm text-on-surface">Tindakan Cepat &amp; Kampanye Segmen</h2>
                  <span class="px-2 py-0.5 rounded-full bg-secondary/10 text-secondary font-label-sm text-label-sm">3 Rekomendasi</span>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Luncurkan promosi berbasis data perilaku untuk mengoptimalkan frekuensi pembelian</p>
              </div>
              <div class="flex items-center gap-2 self-start sm:self-auto">
                <button class="bg-surface-container-low text-on-surface px-3 py-1.5 rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-[18px]">filter_list</span>
                  <span>Semua Target</span>
                </button>
                <button class="bg-surface-container-low text-on-surface px-3 py-1.5 rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-[18px]">history</span>
                  <span>Riwayat Kirim</span>
                </button>
              </div>
            </div>
            <div class="overflow-x-auto">
              <table class="w-full text-left border-collapse">
                <thead>
                  <tr class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
                    <th class="py-3 px-space-lg">Segmen Pelanggan</th>
                    <th class="py-3 px-space-md">Kriteria RFM</th>
                    <th class="py-3 px-space-md">Jumlah Member</th>
                    <th class="py-3 px-space-md">Estimasi Konversi</th>
                    <th class="py-3 px-space-lg text-right">Aksi Kampanye</th>
                  </tr>
                </thead>
                <tbody class="divide-y-0 text-on-surface font-body-md text-body-md">
                  <tr class="hover:bg-surface-container-low/50 transition-colors group">
                    <td class="py-4 px-space-lg">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-secondary/15 flex items-center justify-center text-secondary shrink-0">
                          <span class="material-symbols-outlined text-[20px]">bolt</span>
                        </div>
                        <div class="flex flex-col">
                          <span class="font-title-sm text-title-sm text-on-surface">Daily Coffee Addicts</span>
                          <span class="font-body-sm text-body-sm text-on-surface-variant">Pelanggan rutin jam kerja &amp; pagi</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-space-md">
                      <span class="px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm">
                        &gt;15 cup / bulan
                      </span>
                    </td>
                    <td class="py-4 px-space-md">
                      <div class="flex items-center gap-1.5">
                        <span class="font-title-sm text-title-sm">142</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">member</span>
                      </div>
                    </td>
                    <td class="py-4 px-space-md">
                      <div class="flex items-center gap-2">
                        <div class="w-16 h-2 bg-surface-container-low rounded-full overflow-hidden">
                          <div class="h-full bg-secondary rounded-full" style="width: 78%;"></div>
                        </div>
                        <span class="font-label-sm text-label-sm text-secondary font-bold">78%</span>
                      </div>
                    </td>
                    <td class="py-4 px-space-lg text-right">
                      <button class="inline-flex items-center gap-2 bg-secondary text-on-secondary hover:bg-on-secondary-container px-3.5 py-2 rounded-lg font-title-sm text-title-sm shadow-sm transition-all active:scale-95" onclick="handleCampaign(this, 'Daily Coffee Addicts')">
                        <span class="material-symbols-outlined text-[18px]">send</span>
                        <span>Kirim Voucher Free Upsize WhatsApp</span>
                      </button>
                    </td>
                  </tr>
                  <tr class="hover:bg-surface-container-low/50 transition-colors group">
                    <td class="py-4 px-space-lg">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-surface-container-high flex items-center justify-center text-on-surface shrink-0">
                          <span class="material-symbols-outlined text-[20px]">bakery_dining</span>
                        </div>
                        <div class="flex flex-col">
                          <span class="font-title-sm text-title-sm text-on-surface">Weekend Brunchers</span>
                          <span class="font-body-sm text-body-sm text-on-surface-variant">Komunitas &amp; keluarga santai</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-space-md">
                      <span class="px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm">
                        Aktif Sabtu - Minggu
                      </span>
                    </td>
                    <td class="py-4 px-space-md">
                      <div class="flex items-center gap-1.5">
                        <span class="font-title-sm text-title-sm">285</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">member</span>
                      </div>
                    </td>
                    <td class="py-4 px-space-md">
                      <div class="flex items-center gap-2">
                        <div class="w-16 h-2 bg-surface-container-low rounded-full overflow-hidden">
                          <div class="h-full bg-secondary-container rounded-full" style="width: 62%;"></div>
                        </div>
                        <span class="font-label-sm text-label-sm text-on-surface font-bold">62%</span>
                      </div>
                    </td>
                    <td class="py-4 px-space-lg text-right">
                      <button class="inline-flex items-center gap-2 bg-primary text-on-primary hover:bg-on-primary-fixed-variant px-3.5 py-2 rounded-lg font-title-sm text-title-sm shadow-sm transition-all active:scale-95" onclick="handleCampaign(this, 'Weekend Brunchers')">
                        <span class="material-symbols-outlined text-[18px]">campaign</span>
                        <span>Broadcast Promo Pastry Bundling</span>
                      </button>
                    </td>
                  </tr>
                  <tr class="hover:bg-surface-container-low/50 transition-colors group">
                    <td class="py-4 px-space-lg">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-error-container/40 flex items-center justify-center text-error shrink-0">
                          <span class="material-symbols-outlined text-[20px]">person_off</span>
                        </div>
                        <div class="flex flex-col">
                          <span class="font-title-sm text-title-sm text-on-surface">Inaktif &gt; 30 Hari</span>
                          <span class="font-body-sm text-body-sm text-error">Risiko tinggi kehilangan member</span>
                        </div>
                      </div>
                    </td>
                    <td class="py-4 px-space-md">
                      <span class="px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm">
                        Belum pesan lagi &gt;30 hari
                      </span>
                    </td>
                    <td class="py-4 px-space-md">
                      <div class="flex items-center gap-1.5">
                        <span class="font-title-sm text-title-sm text-error">98</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">member</span>
                      </div>
                    </td>
                    <td class="py-4 px-space-md">
                      <div class="flex items-center gap-2">
                        <div class="w-16 h-2 bg-surface-container-low rounded-full overflow-hidden">
                          <div class="h-full bg-outline rounded-full" style="width: 41%;"></div>
                        </div>
                        <span class="font-label-sm text-label-sm text-on-surface-variant font-bold">41%</span>
                      </div>
                    </td>
                    <td class="py-4 px-space-lg text-right">
                      <button class="inline-flex items-center gap-2 bg-surface-container text-secondary hover:bg-surface-container-high px-3.5 py-2 rounded-lg font-title-sm text-title-sm shadow-sm transition-all active:scale-95" onclick="handleCampaign(this, 'Inaktif &gt; 30 Hari')">
                        <span class="material-symbols-outlined text-[18px]">mail</span>
                        <span>Kirim Welcome Back Discount 20%</span>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-space-md bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-space-sm">
              <span class="font-body-sm text-body-sm text-on-surface-variant">
                Menampilkan 3 dari 7 segmen aktif yang dikonfigurasi pada outlet C28.
              </span>
              <div class="flex items-center gap-2">
                <button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest text-on-surface font-label-md text-label-md hover:bg-surface-container shadow-sm transition-colors">
                  Kelola Variabel RFM
                </button>
                <button class="px-3 py-1.5 rounded-lg bg-secondary text-on-secondary font-label-md text-label-md hover:bg-on-secondary-container shadow-sm transition-colors">
                  + Buat Segmen Baru
                </button>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center gap-space-md">
              <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center text-secondary shrink-0">
                <span class="material-symbols-outlined text-[24px]">coffee_maker</span>
              </div>
              <div>
                <h4 class="font-title-sm text-title-sm text-on-surface">Menu Favorit Segmen VIP</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Oat Latte &amp; Pour Over Geisha mendominasi 64% pesanan.</p>
              </div>
            </div>
            <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center gap-space-md">
              <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center text-secondary shrink-0">
                <span class="material-symbols-outlined text-[24px]">schedule</span>
              </div>
              <div>
                <h4 class="font-title-sm text-title-sm text-on-surface">Waktu Kunjungan Puncak</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Pagi 07:30 - 09:30 &amp; Sore 16:00 - 18:30 WIB.</p>
              </div>
            </div>
            <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center gap-space-md">
              <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center text-secondary shrink-0">
                <span class="material-symbols-outlined text-[24px]">contactless</span>
              </div>
              <div>
                <h4 class="font-title-sm text-title-sm text-on-surface">Metode Pembayaran Pilihan</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">82% transaksi loyalitas menggunakan QRIS &amp; C28 Wallet.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="fixed bottom-6 right-6 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none z-50" id="toastNotification">
          <div class="bg-primary text-on-primary px-4 py-3 rounded-xl shadow-lg flex items-center gap-3">
            <span class="material-symbols-outlined text-[20px] text-secondary-container">check_circle</span>
            <span class="font-title-sm text-title-sm" id="toastMessage">Kampanye berhasil dijadwalkan!</span>
          </div>
        </div>
        <script>
          function handleCampaign(btn, segmentName) {
            const originalText = btn.innerHTML;
            btn.disabled = true;
            btn.classList.add('opacity-75');
            btn.innerHTML = `<span class="material-symbols-outlined text-[18px] animate-spin">refresh</span><span>Memproses...</span>`;

            setTimeout(() => {
              btn.innerHTML = `<span class="material-symbols-outlined text-[18px]">done</span><span>Terkirim</span>`;
              btn.classList.remove('opacity-75');
              btn.classList.add('bg-surface-container-high', 'text-on-surface');

              const toast = document.getElementById('toastNotification');
              const toastMsg = document.getElementById('toastMessage');
              toastMsg.textContent = `Kampanye untuk "${segmentName}" berhasil dikirim ke antrean!`;

              toast.classList.remove('translate-y-20', 'opacity-0');
              toast.classList.add('translate-y-0', 'opacity-100');

              setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
                toast.classList.remove('translate-y-0', 'opacity-100');
              }, 3500);

              setTimeout(() => {
                btn.disabled = false;
                btn.innerHTML = originalText;
                btn.classList.remove('bg-surface-container-high', 'text-on-surface');
              }, 6000);
            }, 1000);
          }
        </script>
      </div>
    </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>