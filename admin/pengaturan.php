<?php
$pageTitle = 'Pengaturan';
$activePage = 'pengaturan';
$breadcrumb = 'Pengaturan';
require_once __DIR__ . '/includes/header.php';
?>

<main class="w-full pt-16 bg-surface">
      <div class="flex flex-col w-full">
        <!-- Top Utility Bar / Page Meta -->
        <div class="px-8 pt-8 pb-6 flex flex-col md:flex-row md:items-end justify-between gap-6">
          <div class="flex flex-col max-w-2xl">
            <div class="flex items-center gap-2 mb-2">
              <span class="w-2 h-2 rounded-full bg-secondary"></span>
              <span class="font-label-sm text-label-sm tracking-widest uppercase text-on-surface-variant">C28 COFFEE CLUB • CONFIG CORE</span>
            </div>
            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Pengaturan Sistem</h1>
            <p class="font-body-md text-body-md text-on-surface-variant mt-1">
              Konfigurasi aturan perolehan poin transaksi, integrasi WhatsApp Gateway, manajemen akun staff, dan data outlet C28.
            </p>
          </div>
          <!-- Quick Server Badge / State Snapshot -->
          <div class="flex items-center gap-3 bg-surface-container-low px-4 py-2.5 rounded-xl shadow-sm self-start md:self-auto">
            <div class="relative flex h-3 w-3">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
              <span class="relative inline-flex rounded-full h-3 w-3 bg-secondary"></span>
            </div>
            <div class="flex flex-col">
              <span class="font-label-sm text-label-sm text-on-surface uppercase tracking-wider">Laravel 11 • MySQL 8.0</span>
              <span class="font-body-sm text-body-sm text-on-surface-variant">Sinkronisasi Otomatis Aktif</span>
            </div>
          </div>
        </div>
        <!-- Horizontal Configuration Tabs -->
        <div class="px-8">
          <div class="flex items-center gap-2 overflow-x-auto pb-1">
            <button class="px-4 py-2.5 rounded-lg bg-secondary text-on-secondary font-title-sm text-title-sm flex items-center gap-2 shadow-sm transition-all whitespace-nowrap">
              <span class="material-symbols-outlined text-[18px]">loyalty</span>
              <span>Aturan Poin &amp; Loyalty</span>
            </button>
            <button class="px-4 py-2.5 rounded-lg bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface font-title-sm text-title-sm flex items-center gap-2 transition-all whitespace-nowrap">
              <span class="material-symbols-outlined text-[18px]">storefront</span>
              <span>Profil &amp; Outlet Cafe</span>
            </button>
            <button class="px-4 py-2.5 rounded-lg bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface font-title-sm text-title-sm flex items-center gap-2 transition-all whitespace-nowrap">
              <span class="material-symbols-outlined text-[18px]">chat</span>
              <span>Integrasi WhatsApp &amp; Notifikasi</span>
            </button>
            <button class="px-4 py-2.5 rounded-lg bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface font-title-sm text-title-sm flex items-center gap-2 transition-all whitespace-nowrap">
              <span class="material-symbols-outlined text-[18px]">badge</span>
              <span>Manajemen Akun Staff</span>
            </button>
            <button class="px-4 py-2.5 rounded-lg bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface font-title-sm text-title-sm flex items-center gap-2 transition-all whitespace-nowrap">
              <span class="material-symbols-outlined text-[18px]">database</span>
              <span>Backup Database</span>
            </button>
          </div>
        </div>
        <!-- Main Content Layout (Structured 2-Column Grid) -->
        <div class="px-8 py-6">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <!-- Left Column: Primary Point Rules & Birthday Benefits (7 Cols) -->
            <div class="lg:col-span-7 flex flex-col gap-6">
              <!-- CARD 1: Konfigurasi Aturan Poin Otomatis -->
              <div class="bg-surface-container-lowest rounded-xl shadow-sm p-6 flex flex-col gap-6 relative overflow-hidden">
                <div class="flex items-center justify-between pb-4">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-secondary">
                      <span class="material-symbols-outlined text-[22px]">monetization_on</span>
                    </div>
                    <div class="flex flex-col">
                      <h2 class="font-headline-sm text-headline-sm text-on-surface">Konfigurasi Aturan Poin Otomatis</h2>
                      <span class="font-body-sm text-body-sm text-on-surface-variant">Logika kalkulasi reward kasir POS &amp; penukaran voucher</span>
                    </div>
                  </div>
                  <span class="px-2.5 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold tracking-wide uppercase">
                    Engine v2.4
                  </span>
                </div>
                <!-- Form Fields -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                  <!-- Field 1 -->
                  <div class="flex flex-col gap-1.5">
                    <label class="font-label-md text-label-md text-on-surface flex items-center justify-between">
                      <span>Nominal Belanja per 1 Poin</span>
                      <span class="text-secondary text-[11px] font-medium">Auto-calculated</span>
                    </label>
                    <div class="relative flex items-center">
                      <span class="absolute left-3 font-title-sm text-title-sm text-outline">Rp</span>
                      <input class="w-full h-11 pl-10 pr-4 rounded-lg bg-surface-container-low text-on-surface font-title-sm text-title-sm focus:outline-none focus:ring-2 focus:ring-secondary focus:bg-surface-container-lowest transition-all" type="text" value="10.000" />
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Default sistem perolehan loyalty C28.</span>
                  </div>
                  <!-- Field 2 -->
                  <div class="flex flex-col gap-1.5">
                    <label class="font-label-md text-label-md text-on-surface flex items-center justify-between">
                      <span>Masa Berlaku Poin (Bulan)</span>
                      <span class="text-outline text-[11px]">Siklus Tahunan</span>
                    </label>
                    <div class="relative flex items-center">
                      <input class="w-full h-11 pl-4 pr-16 rounded-lg bg-surface-container-low text-on-surface font-title-sm text-title-sm focus:outline-none focus:ring-2 focus:ring-secondary focus:bg-surface-container-lowest transition-all" type="number" value="12" />
                      <span class="absolute right-3 font-title-sm text-title-sm text-on-surface-variant">Bulan</span>
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Poin hangus pada 31 Desember setiap tahun.</span>
                  </div>
                </div>
                <!-- Field 3: Conversion Value Interactive Block -->
                <div class="bg-surface-container-low rounded-xl p-4 flex flex-col md:flex-row md:items-center justify-between gap-4">
                  <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-secondary text-on-secondary flex items-center justify-center shrink-0">
                      <span class="material-symbols-outlined text-[20px]">currency_exchange</span>
                    </div>
                    <div class="flex flex-col">
                      <span class="font-label-md text-label-md text-on-surface">Nilai Konversi Poin saat Ditukar</span>
                      <span class="font-body-sm text-body-sm text-on-surface-variant">Rasio diskon langsung pada struk POS</span>
                    </div>
                  </div>
                  <div class="flex items-center bg-surface-container-lowest px-4 py-2 rounded-lg shadow-sm">
                    <span class="font-headline-sm text-headline-sm text-secondary font-bold mr-2">1 Poin</span>
                    <span class="font-title-sm text-title-sm text-on-surface-variant mr-2">=</span>
                    <span class="font-headline-sm text-headline-sm text-on-surface font-bold">Rp 1.000</span>
                  </div>
                </div>
                <!-- Field 4: Toggle Switch Notification -->
                <div class="flex items-center justify-between pt-2">
                  <div class="flex flex-col pr-4">
                    <span class="font-title-sm text-title-sm text-on-surface">Otomatis kirim notifikasi ke WhatsApp</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Kirim ringkasan saldo poin langsung ke nomor HP member sesaat setelah transaksi tuntas di kasir.</span>
                  </div>
                  <label class="relative inline-flex items-center cursor-pointer shrink-0">
                    <input checked="" class="sr-only peer" id="toggle-notif" type="checkbox" />
                    <div class="w-12 h-6 bg-surface-container rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-surface-container-lowest after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-secondary"></div>
                  </label>
                </div>
              </div>
              <!-- CARD 2: Pengaturan Benefit Ulang Tahun -->
              <div class="bg-surface-container-lowest rounded-xl shadow-sm p-6 flex flex-col gap-6">
                <div class="flex items-center justify-between pb-2">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-secondary">
                      <span class="material-symbols-outlined text-[22px]">cake</span>
                    </div>
                    <div class="flex flex-col">
                      <h2 class="font-headline-sm text-headline-sm text-on-surface">Pengaturan Benefit Ulang Tahun</h2>
                      <span class="font-body-sm text-body-sm text-on-surface-variant">Hak istimewa otomatis untuk member pada bulan kelahiran</span>
                    </div>
                  </div>
                  <span class="px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm">
                    Annual Reward
                  </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                  <!-- Dropdown Masa Berlaku -->
                  <div class="flex flex-col gap-1.5">
                    <label class="font-label-md text-label-md text-on-surface">Masa Berlaku Voucher Ultah</label>
                    <div class="relative">
                      <select class="w-full h-11 px-4 pr-10 rounded-lg bg-surface-container-low text-on-surface font-title-sm text-title-sm focus:outline-none focus:ring-2 focus:ring-secondary focus:bg-surface-container-lowest appearance-none transition-all cursor-pointer">
                        <option selected="">H-3 s/d H+7 (Total 10 Hari)</option>
                        <option>Hari H Saja (24 Jam)</option>
                        <option>H-7 s/d H+7 (Total 14 Hari)</option>
                        <option>Sepanjang Bulan Kelahiran</option>
                      </select>
                      <span class="material-symbols-outlined absolute right-3 top-3 pointer-events-none text-on-surface-variant text-[20px]">expand_more</span>
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Member dapat klaim voucher di kasir sebelum atau sesudah tanggal lahir.</span>
                  </div>
                  <!-- Pilihan Produk Hadiah -->
                  <div class="flex flex-col gap-1.5">
                    <label class="font-label-md text-label-md text-on-surface">Pilihan Produk Hadiah</label>
                    <div class="relative">
                      <input class="w-full h-11 px-4 rounded-lg bg-surface-container-low text-on-surface font-title-sm text-title-sm focus:outline-none focus:ring-2 focus:ring-secondary focus:bg-surface-container-lowest transition-all" type="text" value="Free All Variant Regular Size Drink" />
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Berlaku untuk Manual Brew, Espresso-based, dan Artisan Tea.</span>
                  </div>
                </div>
                <!-- Toggle Akumulasi Poin Ultah -->
                <div class="flex items-center justify-between pt-2">
                  <div class="flex flex-col pr-4">
                    <span class="font-title-sm text-title-sm text-on-surface">Izinkan akumulasi poin pada transaksi ultah</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Jika nonaktif, item gratis/diskon ulang tahun tidak akan menghasilkan poin loyalty baru.</span>
                  </div>
                  <label class="relative inline-flex items-center cursor-pointer shrink-0">
                    <input class="sr-only peer" id="toggle-ultah-poin" type="checkbox" />
                    <div class="w-12 h-6 bg-surface-container rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-surface-container-lowest after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-secondary"></div>
                  </label>
                </div>
              </div>
            </div>
            <!-- Right Column: System & Outlet Integrations, Telemetry, and Visuals (5 Cols) -->
            <div class="lg:col-span-5 flex flex-col gap-6">
              <!-- CARD 3: Integrasi Sistem & Outlet -->
              <div class="bg-surface-container-lowest rounded-xl shadow-sm p-6 flex flex-col gap-6">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-secondary">
                    <span class="material-symbols-outlined text-[22px]">lan</span>
                  </div>
                  <div class="flex flex-col">
                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Integrasi Sistem &amp; Outlet</h2>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Status koneksi backend dan gateway SMS/WhatsApp</span>
                  </div>
                </div>
                <!-- Service 1: MySQL Telemetry -->
                <div class="p-4 rounded-xl bg-surface-container-low flex flex-col gap-3">
                  <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2.5">
                      <span class="material-symbols-outlined text-secondary text-[22px]">dns</span>
                      <span class="font-title-sm text-title-sm text-on-surface">Database MySQL (Lokal / Cloud)</span>
                    </div>
                    <span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Primary Cluster</span>
                  </div>
                  <div class="flex items-center justify-between pt-1">
                    <div class="flex items-center gap-2">
                      <span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
                      <span class="font-label-md text-label-md text-on-surface">Terhubung</span>
                    </div>
                    <span class="font-label-md text-label-md text-secondary font-mono">Latensi: 4ms</span>
                  </div>
                  <!-- Mini Sparkline inline SVG for DB Latency -->
                  <div class="w-full h-8 pt-1 flex items-center">
                    <svg class="w-full h-6 text-secondary" fill="none" preserveaspectratio="none" viewbox="0 0 240 24">
                      <path d="M0,18 L30,16 L60,19 L90,12 L120,15 L150,11 L180,14 L210,9 L240,11" stroke="currentColor" stroke-linecap="round" stroke-width="2"></path>
                      <circle cx="240" cy="11" fill="currentColor" r="3"></circle>
                    </svg>
                  </div>
                </div>
                <!-- Service 2: WhatsApp Gateway -->
                <div class="p-4 rounded-xl bg-surface-container-low flex flex-col gap-3">
                  <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2.5">
                      <span class="material-symbols-outlined text-secondary text-[22px]">send_to_mobile</span>
                      <span class="font-title-sm text-title-sm text-on-surface">WhatsApp Business API</span>
                    </div>
                    <span class="px-2 py-0.5 rounded-full bg-surface-container-high text-secondary font-label-sm text-label-sm font-semibold">Online</span>
                  </div>
                  <div class="flex items-center justify-between">
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Nomor Gateway Aktif</span>
                    <span class="font-title-sm text-title-sm text-on-surface font-mono tracking-wide">+62 811-2828-C28</span>
                  </div>
                  <div class="flex items-center justify-between text-body-sm text-on-surface-variant">
                    <span>Kuota Pesan Bulanan</span>
                    <span class="font-label-md text-label-md text-on-surface">14.820 / 25.000 Terpakai</span>
                  </div>
                  <!-- Progress bar -->
                  <div class="w-full bg-surface-container-high rounded-full h-1.5 overflow-hidden">
                    <div class="bg-secondary h-1.5 rounded-full" style="width: 59%"></div>
                  </div>
                </div>
                <!-- Outlet Master Quick View -->
                <div class="flex flex-col gap-2 pt-1">
                  <span class="font-label-md text-label-md text-on-surface">Outlet Utama Terdaftar</span>
                  <div class="flex items-center justify-between p-3 rounded-lg bg-surface-container-low">
                    <div class="flex items-center gap-3">
                      <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-on-primary">
                        <span class="material-symbols-outlined text-[16px]">domain</span>
                      </div>
                      <div class="flex flex-col">
                        <span class="font-title-sm text-title-sm text-on-surface">C28 Roastery &amp; Flagship Cafe</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Jl. Senopati No. 28, Jakarta Selatan</span>
                      </div>
                    </div>
                    <button class="p-1.5 text-on-surface-variant hover:text-secondary rounded transition-colors">
                      <span class="material-symbols-outlined text-[18px]">edit</span>
                    </button>
                  </div>
                </div>
              </div>
              <!-- Visual Coffeehouse Atmosphere Card -->
              <div class="relative rounded-xl overflow-hidden shadow-sm h-56 flex flex-col justify-end p-6 group">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" data-alt="Artisanal specialty coffee beans roasting in an espresso bar background with warm low-key lighting, rustic terracotta ceramic cups on dark wood surface, showcasing barista craft and quality" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBGSc6nAoOyqqvq5IP6VaAoVhIYBNfUMgYh6J0OWUGmA9HWskiF4U9AWVcaYrq4rZBkCHDg7KB-2PBa2bAwkUrt-kO41ivsTouVfMcdoj-XBoZXULiqNue5CU88xzPYwcJ5-jjKIA8dTN74cUqSVXJGv10k4tnAXXyi9NlvRYpgusmiUO5kjmGHDXludx7ORxq22C-wf3uO4yDfzI0Vks9IHEBXWpO9wOXQLIgGaTNy')"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent"></div>
                <div class="relative z-10 flex flex-col text-surface-container-lowest">
                  <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary-fixed">Specialty Loyalty Ecosystem</span>
                  <span class="font-headline-sm text-headline-sm">C28 Member Experience</span>
                  <p class="font-body-sm text-body-sm text-surface-dim mt-0.5 line-clamp-1">Setiap transaksi terhubung langsung dengan penghargaan otentik bagi penikmat kopi.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Sticky Bottom Administrative Action Bar -->
        <div class="sticky bottom-0 left-0 right-0 bg-surface/95 backdrop-blur-md px-8 py-4 shadow-lg flex items-center justify-between z-30">
          <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="material-symbols-outlined text-[18px]">info</span>
            <span class="font-body-sm text-body-sm">Perubahan aturan loyalty akan langsung diterapkan pada semua terminal kasir POS.</span>
          </div>
          <div class="flex items-center gap-3">
            <button class="px-5 py-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface font-title-sm text-title-sm transition-all" type="button">
              Batal
            </button>
            <button class="px-6 py-2.5 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-title-sm text-title-sm flex items-center gap-2 shadow-sm transition-all" id="btn-save" type="button">
              <span class="material-symbols-outlined text-[18px]">save</span>
              <span>Simpan Perubahan</span>
            </button>
          </div>
        </div>
      </div>
      <script>
        // Simple micro-interaction for button feedback
        document.getElementById('btn-save')?.addEventListener('click', function() {
          const btn = this;
          const originalText = btn.innerHTML;
          btn.innerHTML = '<span class="material-symbols-outlined text-[18px] animate-spin">sync</span><span>Menyimpan...</span>';
          btn.disabled = true;
          setTimeout(() => {
            btn.innerHTML = '<span class="material-symbols-outlined text-[18px]">check_circle</span><span>Tersimpan!</span>';
            btn.classList.add('bg-secondary');
            setTimeout(() => {
              btn.innerHTML = originalText;
              btn.disabled = false;
              btn.classList.remove('bg-secondary');
            }, 1500);
          }, 800);
        });
      </script>
    </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>