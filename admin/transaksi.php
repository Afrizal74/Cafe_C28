<?php
$pageTitle = 'Transaksi Baru & Riwayat';
$activePage = 'transaksi-baru';
$breadcrumb = 'Transaksi';
require_once __DIR__ . '/includes/header.php';
?>

<main class="w-full pt-16 bg-surface">
      <div class="flex flex-col w-full">
        <!-- Top Ambient Glow & Context Header -->
        <div class="relative px-margin py-space-lg flex flex-col gap-6">
          <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div class="flex flex-col gap-1.5">
              <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase font-semibold">C28 COFFEE CLUB • REGISTER POS #01</span>
              </div>
              <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Transaksi Baru</h1>
              <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                Input transaksi cafe dan berikan poin reward otomatis kepada member (1 poin per kelipatan Rp 10.000).
              </p>
            </div>
            <!-- Quick Action Badges / Shift Status -->
            <div class="flex items-center gap-3 self-start md:self-auto">
              <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container-high text-on-surface-variant">
                <span class="material-symbols-outlined text-[16px] text-secondary">wifi</span>
                <span class="font-label-sm text-label-sm font-medium">Terminal Online</span>
              </div>
              <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container text-on-surface-variant">
                <span class="material-symbols-outlined text-[16px]">schedule</span>
                <span class="font-label-sm text-label-sm font-medium" id="live-clock">10:42 WIB</span>
              </div>
            </div>
          </div>
          <!-- Main 12-Column Responsive Layout -->
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
            <!-- LEFT COLUMN: Member Lookup & Menu Selection (7 Cols) -->
            <div class="lg:col-span-7 flex flex-col gap-space-lg">
              <!-- SECTION 1: Member Identification Module -->
              <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-[0_2px_12px_rgba(39,24,17,0.04)] flex flex-col gap-4">
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] text-secondary">card_membership</span>
                    <span class="font-title-md text-title-md text-on-surface">Data Member C28</span>
                  </div>
                  <span class="font-label-sm text-label-sm text-on-surface-variant">Otomatis Perhitungan Poin</span>
                </div>
                <!-- Input Search Bar -->
                <div class="relative flex items-center">
                  <span class="material-symbols-outlined absolute left-3.5 text-on-surface-variant text-[20px]">person_search</span>
                  <input class="w-full h-11 pl-11 pr-24 rounded-lg bg-surface-container-low text-on-surface placeholder:text-outline text-body-md font-body-md focus:outline-none focus:bg-surface-container-lowest transition-all" id="member-input" placeholder="Ketik ID Member (C28-xxxx) atau Nomor WhatsApp..." type="text" value="C28-000001" />
                  <button class="absolute right-2 px-3 py-1.5 rounded-md bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-on-secondary-container transition-colors" id="btn-search-member">
                    Cek Data
                  </button>
                </div>
                <!-- Active Member Card Indicator -->
                <div class="relative overflow-hidden p-4 rounded-xl bg-surface-container flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                  <div class="flex items-center gap-3.5">
                    <div class="w-12 h-12 rounded-full bg-secondary-container text-on-secondary-fixed flex items-center justify-center font-headline-sm text-headline-sm shadow-sm">
                      RH
                    </div>
                    <div class="flex flex-col">
                      <div class="flex items-center gap-2">
                        <span class="font-title-md text-title-md text-on-surface font-semibold" id="member-name">Raja Habib</span>
                        <span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm uppercase font-bold flex items-center gap-1">
                          <span class="material-symbols-outlined text-[13px]" style="font-variation-settings: 'FILL' 1;">stars</span>
                          Gold Tier
                        </span>
                      </div>
                      <span class="font-body-sm text-body-sm text-on-surface-variant">ID: C28-000001 • 0812-3456-7890</span>
                    </div>
                  </div>
                  <!-- Point Balance Pill -->
                  <div class="flex sm:flex-col items-center sm:items-end justify-between pt-2 sm:pt-0 border-t sm:border-0 border-outline-variant/30">
                    <span class="font-label-sm text-label-sm text-on-surface-variant">Saldo Poin Tersedia</span>
                    <div class="flex items-baseline gap-1">
                      <span class="font-headline-md text-headline-md text-secondary" id="member-point-balance">24</span>
                      <span class="font-label-md text-label-md text-on-surface font-medium">Pts</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- SECTION 2: Menu Grid Selector -->
              <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-[0_2px_12px_rgba(39,24,17,0.04)] flex flex-col gap-5">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                  <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] text-secondary">local_cafe</span>
                    <span class="font-title-md text-title-md text-on-surface">Pilihan Menu C28</span>
                  </div>
                  <!-- Category Tabs -->
                  <div class="flex items-center gap-1.5 p-1 rounded-lg bg-surface-container-low text-on-surface-variant">
                    <button class="px-3 py-1 rounded-md bg-secondary text-on-secondary font-label-sm text-label-sm font-medium shadow-sm">Semua</button>
                    <button class="px-3 py-1 rounded-md hover:text-on-surface font-label-sm text-label-sm transition-colors">Espresso Bar</button>
                    <button class="px-3 py-1 rounded-md hover:text-on-surface font-label-sm text-label-sm transition-colors">Pastry &amp; Treats</button>
                  </div>
                </div>
                <!-- Products Bento Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3.5">
                  <!-- Card 1: Espresso -->
                  <div class="flex flex-col rounded-lg bg-surface p-3.5 gap-3 hover:shadow-md transition-shadow group">
                    <div class="h-28 rounded-md overflow-hidden relative bg-surface-container">
                      <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-105" data-alt="A close up shot of a rich crema-topped double espresso served in a ceramic speckled cup on a warm mahogany wooden counter with roasted coffee beans scattered around, soft warm café morning lighting, cozy artisanal vibe." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDhohCmWC1MbsFFtLx5FkWmOL0fNHb4Su3k5Qsft4EUkfhAR9uLHEZD2UuV603MDvntMmJiHV1ETSmCR4DjTGFTmJ3BVj_z_bnriSmFtP3L3Kss55ApIWBmquGUnxm8LcbfOaxZGFA0Sc66Ne-V62rgU83Io6Bp-AzCX_MU_GFKxJEJlB9ks2APguJA-03Xfho9cNg7ly_NHNmtxp1ZBhhJ2dnT_KqayZNyzQnMZZ0u')">
                      </div>
                      <span class="absolute top-2 left-2 px-1.5 py-0.5 rounded bg-primary-container text-surface-container-lowest font-label-sm text-label-sm">HOT</span>
                    </div>
                    <div class="flex flex-col flex-1 justify-between gap-2">
                      <div class="flex flex-col">
                        <span class="font-title-sm text-title-sm text-on-surface font-semibold">Single Origin Espresso</span>
                        <span class="font-label-md text-label-md text-secondary font-bold">Rp 22.000</span>
                      </div>
                      <div class="flex items-center justify-between pt-1">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">House Blend</span>
                        <div class="flex items-center gap-1.5">
                          <button class="w-7 h-7 rounded-md bg-surface-container flex items-center justify-center text-on-surface hover:bg-surface-container-high transition-colors" onclick="updateItem('Espresso', 22000, -1)">
                            <span class="material-symbols-outlined text-[16px]">remove</span>
                          </button>
                          <span class="font-title-sm text-title-sm w-5 text-center font-bold" id="qty-Espresso">0</span>
                          <button class="w-7 h-7 rounded-md bg-secondary text-on-secondary flex items-center justify-center hover:bg-on-secondary-container transition-colors shadow-sm" onclick="updateItem('Espresso', 22000, 1)">
                            <span class="material-symbols-outlined text-[16px]">add</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 2: C28 Signature Latte (Preset in cart) -->
                  <div class="flex flex-col rounded-lg bg-surface p-3.5 gap-3 hover:shadow-md transition-shadow group ring-1 ring-secondary/20">
                    <div class="h-28 rounded-md overflow-hidden relative bg-surface-container">
                      <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-105" data-alt="Artisanal cafe latte with intricate rosetta latte art poured into a warm earthenware ceramic cup, soft daylight streaming through cafe window, steam rising, creamy oat foam texture, warm amber colors." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB6t-7F-i1LeLUBnV-MhhzlHpU40mvLnumL6zsm-xTu81h1LkxKJUoOjrP5aOp5Q1CbYmI0UR_nSf3mYI8P01xc4ZBY0dnJl2vXW0DaVgikeiTUHt0xl91pWNeK2EKO6lShLni6ZZSANkk1hgljjIKGM37DkPqO_40yTu3c85i4Mdr1RL75S39gug8KiAhn63tJwxmf4aguFcA4jDoADGUEuxsEUrkO4vXeBhc8oIaS')">
                      </div>
                      <span class="absolute top-2 left-2 px-1.5 py-0.5 rounded bg-secondary text-on-secondary font-label-sm text-label-sm font-semibold">BEST SELLER</span>
                    </div>
                    <div class="flex flex-col flex-1 justify-between gap-2">
                      <div class="flex flex-col">
                        <span class="font-title-sm text-title-sm text-on-surface font-semibold">C28 Signature Latte</span>
                        <span class="font-label-md text-label-md text-secondary font-bold">Rp 35.000</span>
                      </div>
                      <div class="flex items-center justify-between pt-1">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Aren Brown Sugar</span>
                        <div class="flex items-center gap-1.5">
                          <button class="w-7 h-7 rounded-md bg-surface-container flex items-center justify-center text-on-surface hover:bg-surface-container-high transition-colors" onclick="updateItem('C28 Signature Latte', 35000, -1)">
                            <span class="material-symbols-outlined text-[16px]">remove</span>
                          </button>
                          <span class="font-title-sm text-title-sm w-5 text-center font-bold text-secondary" id="qty-C28-Signature-Latte">1</span>
                          <button class="w-7 h-7 rounded-md bg-secondary text-on-secondary flex items-center justify-center hover:bg-on-secondary-container transition-colors shadow-sm" onclick="updateItem('C28 Signature Latte', 35000, 1)">
                            <span class="material-symbols-outlined text-[16px]">add</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 3: Vanilla Cold Brew -->
                  <div class="flex flex-col rounded-lg bg-surface p-3.5 gap-3 hover:shadow-md transition-shadow group">
                    <div class="h-28 rounded-md overflow-hidden relative bg-surface-container">
                      <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-105" data-alt="A tall glass tumbler containing slow-steeped dark cold brew coffee topped with a layer of velvety vanilla sweet cream cascading down with ice cubes condensation on glass, warm natural light." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD3MwqNWqxsmts99du4ot3jWccT_S6oiBaIU8Ko6l8JLaiid-gNhcad7rpwqZUWJ-_XyUiLmysM7WCYgtes4n78_jpcwJ6w9mDpv-OxF6pfBHvT6GcybVvyG6iVmYChiUwPoUT2yyVgSBAc0fWUyYg-4KvbW-Od6EhbVZ2RUbYA5DRfnvaE1lJbiAu2evPGznLKAszb97biDOscAFr4JGcWsOUkrXDvWfatrAtqff3J')">
                      </div>
                      <span class="absolute top-2 left-2 px-1.5 py-0.5 rounded bg-surface-container-highest text-on-surface font-label-sm text-label-sm">COLD</span>
                    </div>
                    <div class="flex flex-col flex-1 justify-between gap-2">
                      <div class="flex flex-col">
                        <span class="font-title-sm text-title-sm text-on-surface font-semibold">Vanilla Cold Brew</span>
                        <span class="font-label-md text-label-md text-secondary font-bold">Rp 32.000</span>
                      </div>
                      <div class="flex items-center justify-between pt-1">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">16hr Steeped</span>
                        <div class="flex items-center gap-1.5">
                          <button class="w-7 h-7 rounded-md bg-surface-container flex items-center justify-center text-on-surface hover:bg-surface-container-high transition-colors" onclick="updateItem('Vanilla Cold Brew', 32000, -1)">
                            <span class="material-symbols-outlined text-[16px]">remove</span>
                          </button>
                          <span class="font-title-sm text-title-sm w-5 text-center font-bold" id="qty-Vanilla-Cold-Brew">0</span>
                          <button class="w-7 h-7 rounded-md bg-secondary text-on-secondary flex items-center justify-center hover:bg-on-secondary-container transition-colors shadow-sm" onclick="updateItem('Vanilla Cold Brew', 32000, 1)">
                            <span class="material-symbols-outlined text-[16px]">add</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 4: Butter Croissant (Preset in cart) -->
                  <div class="flex flex-col rounded-lg bg-surface p-3.5 gap-3 hover:shadow-md transition-shadow group ring-1 ring-secondary/20">
                    <div class="h-28 rounded-md overflow-hidden relative bg-surface-container">
                      <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-105" data-alt="Golden brown French flaky butter croissant with delicate layered pastry textures on a matte ceramic dessert plate with a ramekin of whipped salted butter nearby, bakery morning aesthetics." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAaDEe12G3Q_aArrLwM1p3oJVIRR_0rnZdLpUvoqEh2HQsrHw89lr_4bZjHwtYi5K3psqzBMs4rz3dOiSIVEGwyBOCH-6WiLGm8r_uvYvT3d4OzhepU_-Tc1wjf_8ARe-8GOibnxovjcznJYJ_SVEV7rSZH2lQUXTWM3L1lb80tJLFPONLS9uz1JCw_u5MqhVWYG5siXX7eUFb5KXpfh4cQx-kluCm2yflatMYtFhKD')">
                      </div>
                      <span class="absolute top-2 left-2 px-1.5 py-0.5 rounded bg-surface-container-highest text-on-surface font-label-sm text-label-sm">BAKERY</span>
                    </div>
                    <div class="flex flex-col flex-1 justify-between gap-2">
                      <div class="flex flex-col">
                        <span class="font-title-sm text-title-sm text-on-surface font-semibold">Butter Croissant</span>
                        <span class="font-label-md text-label-md text-secondary font-bold">Rp 28.000</span>
                      </div>
                      <div class="flex items-center justify-between pt-1">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Pure Butter</span>
                        <div class="flex items-center gap-1.5">
                          <button class="w-7 h-7 rounded-md bg-surface-container flex items-center justify-center text-on-surface hover:bg-surface-container-high transition-colors" onclick="updateItem('Butter Croissant', 28000, -1)">
                            <span class="material-symbols-outlined text-[16px]">remove</span>
                          </button>
                          <span class="font-title-sm text-title-sm w-5 text-center font-bold text-secondary" id="qty-Butter-Croissant">1</span>
                          <button class="w-7 h-7 rounded-md bg-secondary text-on-secondary flex items-center justify-center hover:bg-on-secondary-container transition-colors shadow-sm" onclick="updateItem('Butter Croissant', 28000, 1)">
                            <span class="material-symbols-outlined text-[16px]">add</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 5: Caramel Macchiato -->
                  <div class="flex flex-col rounded-lg bg-surface p-3.5 gap-3 hover:shadow-md transition-shadow group">
                    <div class="h-28 rounded-md overflow-hidden relative bg-surface-container">
                      <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-105" data-alt="Iced Caramel Macchiato in a clear fluted highball glass with golden caramel sauce drizzle down the inner walls layered over fresh steamed whole milk and deep espresso shot, luxurious coffee presentation." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCwTnlfDLdakq89yqzN-ZJcu6GwsHk65CYdb1VwrhVcESmRWlxmrKaz_Mk3dx0W6WVx2FH4g0CokLj8zvheAoEuZ4zqwLlrqiEaE_oqCnwBJo0oHqlR_J-4jQi8--tYYABvFDj6Tb4nQ0J6gJ4POSpPDN9FEf_FcwKvWQJZmgebdkGqvrpR048HXKNvZppErxNRiajsnZOiN4va_SKmvvb8nGTlHJqCqULWBTcZ0Uxt')">
                      </div>
                      <span class="absolute top-2 left-2 px-1.5 py-0.5 rounded bg-surface-container-highest text-on-surface font-label-sm text-label-sm">SPECIAL</span>
                    </div>
                    <div class="flex flex-col flex-1 justify-between gap-2">
                      <div class="flex flex-col">
                        <span class="font-title-sm text-title-sm text-on-surface font-semibold">Caramel Macchiato</span>
                        <span class="font-label-md text-label-md text-secondary font-bold">Rp 38.000</span>
                      </div>
                      <div class="flex items-center justify-between pt-1">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Caramel Drizzle</span>
                        <div class="flex items-center gap-1.5">
                          <button class="w-7 h-7 rounded-md bg-surface-container flex items-center justify-center text-on-surface hover:bg-surface-container-high transition-colors" onclick="updateItem('Caramel Macchiato', 38000, -1)">
                            <span class="material-symbols-outlined text-[16px]">remove</span>
                          </button>
                          <span class="font-title-sm text-title-sm w-5 text-center font-bold" id="qty-Caramel-Macchiato">0</span>
                          <button class="w-7 h-7 rounded-md bg-secondary text-on-secondary flex items-center justify-center hover:bg-on-secondary-container transition-colors shadow-sm" onclick="updateItem('Caramel Macchiato', 38000, 1)">
                            <span class="material-symbols-outlined text-[16px]">add</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 6: Almond Pastry -->
                  <div class="flex flex-col rounded-lg bg-surface p-3.5 gap-3 hover:shadow-md transition-shadow group">
                    <div class="h-28 rounded-md overflow-hidden relative bg-surface-container">
                      <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-105" data-alt="Freshly baked almond danish pastry encrusted with roasted shaved almonds and light dusting of powdered sugar on natural linen cloth, rustic warm bakery kitchen backdrop." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB6JdOy50L2HWLob0nn3hyglLWsFENUtT1V15wA0IIWZ2HQxv3XATsK2ArXrY2PI5O8IYKyZbcUShJplwoSfsam4s6QjBwSZlFUITRYn5HoiXwCQ15Ln54NM2-m3rWlVbQamxfYYcLl8-M7fvhrswtdxg3YYrql-Kwqo3CRUVDJOjwu3mGmVJ15_npl4sxkjm9zOCAIbp0H04ncp9Yc0A7hOxRdjyKUjMfW70LFEU9y')">
                      </div>
                      <span class="absolute top-2 left-2 px-1.5 py-0.5 rounded bg-surface-container-highest text-on-surface font-label-sm text-label-sm">BAKERY</span>
                    </div>
                    <div class="flex flex-col flex-1 justify-between gap-2">
                      <div class="flex flex-col">
                        <span class="font-title-sm text-title-sm text-on-surface font-semibold">Almond Pastry</span>
                        <span class="font-label-md text-label-md text-secondary font-bold">Rp 30.000</span>
                      </div>
                      <div class="flex items-center justify-between pt-1">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Frangipane Cream</span>
                        <div class="flex items-center gap-1.5">
                          <button class="w-7 h-7 rounded-md bg-surface-container flex items-center justify-center text-on-surface hover:bg-surface-container-high transition-colors" onclick="updateItem('Almond Pastry', 30000, -1)">
                            <span class="material-symbols-outlined text-[16px]">remove</span>
                          </button>
                          <span class="font-title-sm text-title-sm w-5 text-center font-bold" id="qty-Almond-Pastry">0</span>
                          <button class="w-7 h-7 rounded-md bg-secondary text-on-secondary flex items-center justify-center hover:bg-on-secondary-container transition-colors shadow-sm" onclick="updateItem('Almond Pastry', 30000, 1)">
                            <span class="material-symbols-outlined text-[16px]">add</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- RIGHT COLUMN: Receipt, Reward Calculation & Checkout (5 Cols) -->
            <div class="lg:col-span-5 flex flex-col gap-space-lg lg:sticky lg:top-20">
              <!-- INVOICE RECEIPT CONTAINER -->
              <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-[0_4px_20px_rgba(39,24,17,0.06)] flex flex-col gap-5">
                <!-- Receipt Header Bar -->
                <div class="flex items-center justify-between pb-3 border-b border-surface-container">
                  <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] text-secondary">receipt</span>
                    <span class="font-title-md text-title-md text-on-surface">Ringkasan Tagihan</span>
                  </div>
                  <span class="px-2 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-on-surface-variant" id="order-no">#ORD-89421</span>
                </div>
                <!-- Selected Order Items Dynamic List -->
                <div class="flex flex-col gap-3 min-h-[140px]" id="cart-items-container">
                  <!-- Item 1 -->
                  <div class="flex items-center justify-between p-2.5 rounded-lg bg-surface group" id="row-C28-Signature-Latte">
                    <div class="flex items-center gap-3 min-w-0">
                      <div class="w-7 h-7 rounded bg-surface-container-high flex items-center justify-center text-secondary font-label-md text-label-md font-bold">
                        1x
                      </div>
                      <div class="flex flex-col min-w-0">
                        <span class="font-title-sm text-title-sm text-on-surface truncate">C28 Signature Latte</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">@ Rp 35.000</span>
                      </div>
                    </div>
                    <div class="flex items-center gap-2">
                      <span class="font-title-sm text-title-sm text-on-surface font-semibold">Rp 35.000</span>
                      <button class="text-on-surface-variant hover:text-error transition-colors p-1" onclick="removeItem('C28 Signature Latte')">
                        <span class="material-symbols-outlined text-[16px]">close</span>
                      </button>
                    </div>
                  </div>
                  <!-- Item 2 -->
                  <div class="flex items-center justify-between p-2.5 rounded-lg bg-surface group" id="row-Butter-Croissant">
                    <div class="flex items-center gap-3 min-w-0">
                      <div class="w-7 h-7 rounded bg-surface-container-high flex items-center justify-center text-secondary font-label-md text-label-md font-bold">
                        1x
                      </div>
                      <div class="flex flex-col min-w-0">
                        <span class="font-title-sm text-title-sm text-on-surface truncate">Butter Croissant</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">@ Rp 28.000</span>
                      </div>
                    </div>
                    <div class="flex items-center gap-2">
                      <span class="font-title-sm text-title-sm text-on-surface font-semibold">Rp 28.000</span>
                      <button class="text-on-surface-variant hover:text-error transition-colors p-1" onclick="removeItem('Butter Croissant')">
                        <span class="material-symbols-outlined text-[16px]">close</span>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- REWARD POINT HIGHLIGHT BANNER -->
                <div class="relative overflow-hidden p-4 rounded-xl bg-gradient-to-br from-secondary-container/30 via-surface-container-high to-surface-container-highest flex items-center gap-3.5 shadow-sm">
                  <div class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center flex-shrink-0 text-on-secondary shadow-sm">
                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
                  </div>
                  <div class="flex flex-col min-w-0">
                    <div class="flex items-center gap-1.5">
                      <span class="font-title-sm text-title-sm text-on-surface font-bold">Reward Poin Otomatis</span>
                      <span class="px-1.5 py-0.2 rounded bg-secondary text-on-secondary font-label-sm text-label-sm font-semibold" id="pts-badge">+6 Poin</span>
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant leading-tight mt-0.5">
                      Transaksi ini menghasilkan <span class="font-bold text-secondary" id="pts-detail">+6 Poin</span> reward (Kelipatan Rp 10.000).
                    </span>
                  </div>
                </div>
                <!-- Price Calculation Rows -->
                <div class="flex flex-col gap-2 pt-2 border-t border-surface-container">
                  <div class="flex justify-between items-center text-on-surface-variant">
                    <span class="font-body-md text-body-md">Subtotal Pesanan</span>
                    <span class="font-title-sm text-title-sm text-on-surface font-medium" id="display-subtotal">Rp 63.000</span>
                  </div>
                  <div class="flex justify-between items-center text-on-surface-variant">
                    <div class="flex items-center gap-1.5">
                      <span class="font-body-md text-body-md">Diskon Member Gold</span>
                      <span class="px-1.5 py-0.5 rounded bg-surface-container-highest text-secondary font-label-sm text-label-sm">0%</span>
                    </div>
                    <span class="font-title-sm text-title-sm text-secondary font-medium" id="display-discount">- Rp 0</span>
                  </div>
                  <div class="flex justify-between items-center text-on-surface-variant">
                    <span class="font-body-sm text-body-sm">Pajak Resto &amp; Servis (Included)</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Termasuk</span>
                  </div>
                  <!-- Grand Total Row -->
                  <div class="flex justify-between items-end pt-3 mt-1 border-t border-dashed border-outline-variant/40">
                    <div class="flex flex-col">
                      <span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant font-bold">Total Pembayaran</span>
                      <span class="font-headline-lg text-headline-lg text-on-surface tracking-tight" id="display-grandtotal">Rp 63.000</span>
                    </div>
                    <div class="text-right flex flex-col items-end">
                      <span class="font-label-sm text-label-sm text-on-surface-variant">Poin Baru Member</span>
                      <span class="font-title-sm text-title-sm text-secondary font-bold" id="display-total-points">30 Pts</span>
                    </div>
                  </div>
                </div>
                <!-- Payment Methods Selection -->
                <div class="flex flex-col gap-2.5 pt-1">
                  <span class="font-label-md text-label-md text-on-surface font-semibold">Pilih Metode Pembayaran</span>
                  <div class="grid grid-cols-2 gap-2" id="payment-options">
                    <!-- QRIS (Default Selected) -->
                    <button class="payment-btn p-3 rounded-lg bg-surface-container-low flex items-center gap-2.5 text-left transition-all ring-2 ring-secondary bg-surface-container-lowest" onclick="selectPayment(this, 'QRIS')">
                      <span class="material-symbols-outlined text-[20px] text-secondary">qr_code_2</span>
                      <div class="flex flex-col">
                        <span class="font-title-sm text-title-sm text-on-surface leading-tight">QRIS</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant">GoPay/OVO/BCA</span>
                      </div>
                    </button>
                    <!-- Tunai -->
                    <button class="payment-btn p-3 rounded-lg bg-surface-container-low flex items-center gap-2.5 text-left transition-all hover:bg-surface-container" onclick="selectPayment(this, 'Tunai')">
                      <span class="material-symbols-outlined text-[20px] text-on-surface-variant">payments</span>
                      <div class="flex flex-col">
                        <span class="font-title-sm text-title-sm text-on-surface leading-tight">Tunai</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Cash Kasir</span>
                      </div>
                    </button>
                    <!-- Kartu Debit / Kredit -->
                    <button class="payment-btn p-3 rounded-lg bg-surface-container-low flex items-center gap-2.5 text-left transition-all hover:bg-surface-container" onclick="selectPayment(this, 'Kartu')">
                      <span class="material-symbols-outlined text-[20px] text-on-surface-variant">credit_card</span>
                      <div class="flex flex-col">
                        <span class="font-title-sm text-title-sm text-on-surface leading-tight">Kartu EDC</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Debit / Kredit</span>
                      </div>
                    </button>
                    <!-- Poin Member -->
                    <button class="payment-btn p-3 rounded-lg bg-surface-container-low flex items-center gap-2.5 text-left transition-all hover:bg-surface-container" onclick="selectPayment(this, 'Poin')">
                      <span class="material-symbols-outlined text-[20px] text-on-surface-variant">stars</span>
                      <div class="flex flex-col">
                        <span class="font-title-sm text-title-sm text-on-surface leading-tight">Tukar Poin</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant">24 Poin Tersedia</span>
                      </div>
                    </button>
                  </div>
                </div>
                <!-- Action Buttons -->
                <div class="flex flex-col gap-2.5 pt-2">
                  <button class="w-full py-3.5 px-4 rounded-lg bg-primary-container text-surface-container-lowest font-title-sm text-title-sm flex items-center justify-center gap-2 hover:bg-on-surface transition-all shadow-md active:scale-[0.99]" id="btn-process-checkout" onclick="processCheckout()">
                    <span class="material-symbols-outlined text-[20px] text-secondary-container">point_of_sale</span>
                    <span>Proses Transaksi &amp; Simpan Poin</span>
                  </button>
                  <button class="w-full py-2.5 px-4 rounded-lg bg-transparent text-on-surface-variant hover:text-error hover:bg-error-container/20 font-label-md text-label-md flex items-center justify-center gap-1.5 transition-colors" onclick="resetTransaction()">
                    <span class="material-symbols-outlined text-[16px]">restart_alt</span>
                    <span>Batal / Reset Pesanan</span>
                  </button>
                </div>
              </div>
              <!-- Quick Summary Note -->
              <div class="p-3.5 rounded-lg bg-surface-container flex items-center gap-3 text-on-surface-variant">
                <span class="material-symbols-outlined text-[18px] text-secondary">info</span>
                <span class="font-body-sm text-body-sm">
                  Struk cetak &amp; notifikasi perolehan poin otomatis terkirim via WhatsApp ke member.
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- SUCCESS MODAL (Hidden by default) -->
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-primary-container/60 backdrop-blur-sm hidden" id="success-modal">
          <div class="relative w-full max-w-md p-space-xl rounded-2xl bg-surface-container-lowest shadow-2xl flex flex-col items-center text-center gap-4">
            <div class="w-16 h-16 rounded-full bg-secondary-container/30 text-secondary flex items-center justify-center">
              <span class="material-symbols-outlined text-[36px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            </div>
            <div class="flex flex-col gap-1">
              <span class="font-headline-sm text-headline-sm text-on-surface">Transaksi Berhasil!</span>
              <p class="font-body-md text-body-md text-on-surface-variant" id="modal-desc">
                Pesanan selesai diproses. Member <strong class="text-on-surface">Raja Habib</strong> memperoleh tambahan poin.
              </p>
            </div>
            <div class="w-full p-3.5 rounded-xl bg-surface-container-low flex justify-between items-center my-2">
              <span class="font-label-md text-label-md text-on-surface-variant">Poin Diterima:</span>
              <span class="font-headline-sm text-headline-sm text-secondary font-bold" id="modal-points">+6 Poin</span>
            </div>
            <div class="flex gap-3 w-full">
              <button class="flex-1 py-2.5 px-4 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-title-sm text-title-sm flex items-center justify-center gap-1.5 transition-colors" onclick="printReceipt()">
                <span class="material-symbols-outlined text-[18px]">print</span>
                Cetak Struk
              </button>
              <button class="flex-1 py-2.5 px-4 rounded-lg bg-secondary text-on-secondary font-title-sm text-title-sm hover:bg-on-secondary-container transition-colors" onclick="closeModal()">
                Selesai
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- State & Interactive Script -->
      <script>
        // Simple reactive state store for cart items
        const state = {
          member: {
            id: "C28-000001",
            name: "Raja Habib",
            tier: "Gold Tier",
            initialPoints: 24
          },
          items: {
            "C28 Signature Latte": {
              price: 35000,
              qty: 1
            },
            "Butter Croissant": {
              price: 28000,
              qty: 1
            }
          },
          selectedPayment: "QRIS"
        };

        function formatIDR(amount) {
          return 'Rp ' + amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function recalculate() {
          let subtotal = 0;
          for (const [name, item] of Object.entries(state.items)) {
            subtotal += item.price * item.qty;
          }

          const discount = 0;
          const grandTotal = Math.max(0, subtotal - discount);

          // Reward calculation: 1 Point per Rp 10.000
          const pointsEarned = Math.floor(grandTotal / 10000);
          const newTotalPoints = state.member.initialPoints + pointsEarned;

          // Update DOM
          document.getElementById('display-subtotal').innerText = formatIDR(subtotal);
          document.getElementById('display-discount').innerText = '- ' + formatIDR(discount);
          document.getElementById('display-grandtotal').innerText = formatIDR(grandTotal);
          document.getElementById('pts-badge').innerText = `+${pointsEarned} Poin`;
          document.getElementById('pts-detail').innerText = `+${pointsEarned} Poin`;
          document.getElementById('display-total-points').innerText = `${newTotalPoints} Pts`;

          // Render receipt dynamic rows
          renderCartRows();
        }

        function renderCartRows() {
          const container = document.getElementById('cart-items-container');
          container.innerHTML = '';

          const itemKeys = Object.keys(state.items);
          if (itemKeys.length === 0) {
            container.innerHTML = `
        <div class="flex flex-col items-center justify-center py-8 text-on-surface-variant gap-1">
          <span class="material-symbols-outlined text-[32px] opacity-40">remove_shopping_cart</span>
          <span class="font-body-sm text-body-sm">Belum ada item dipilih</span>
        </div>
      `;
            return;
          }

          itemKeys.forEach(name => {
            const item = state.items[name];
            if (item.qty <= 0) return;

            const row = document.createElement('div');
            row.className = "flex items-center justify-between p-2.5 rounded-lg bg-surface group transition-all";
            row.innerHTML = `
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-7 h-7 rounded bg-surface-container-high flex items-center justify-center text-secondary font-label-md text-label-md font-bold">
            ${item.qty}x
          </div>
          <div class="flex flex-col min-w-0">
            <span class="font-title-sm text-title-sm text-on-surface truncate">${name}</span>
            <span class="font-body-sm text-body-sm text-on-surface-variant">@ ${formatIDR(item.price)}</span>
          </div>
        </div>
        <div class="flex items-center gap-2">
          <span class="font-title-sm text-title-sm text-on-surface font-semibold">${formatIDR(item.price * item.qty)}</span>
          <button onclick="removeItem('${name}')" class="text-on-surface-variant hover:text-error transition-colors p-1">
            <span class="material-symbols-outlined text-[16px]">close</span>
          </button>
        </div>
      `;
            container.appendChild(row);
          });
        }

        function updateItem(name, price, delta) {
          if (!state.items[name]) {
            state.items[name] = {
              price: price,
              qty: 0
            };
          }
          state.items[name].qty = Math.max(0, state.items[name].qty + delta);

          // Sync product grid counter
          const safeKey = name.replace(/\s+/g, '-');
          const badge = document.getElementById(`qty-${safeKey}`);
          if (badge) {
            badge.innerText = state.items[name].qty;
            if (state.items[name].qty > 0) {
              badge.classList.add('text-secondary');
            } else {
              badge.classList.remove('text-secondary');
            }
          }

          if (state.items[name].qty === 0) {
            delete state.items[name];
          }

          recalculate();
        }

        function removeItem(name) {
          if (state.items[name]) {
            delete state.items[name];
            const safeKey = name.replace(/\s+/g, '-');
            const badge = document.getElementById(`qty-${safeKey}`);
            if (badge) {
              badge.innerText = '0';
              badge.classList.remove('text-secondary');
            }
            recalculate();
          }
        }

        function selectPayment(buttonEl, method) {
          state.selectedPayment = method;
          document.querySelectorAll('.payment-btn').forEach(btn => {
            btn.classList.remove('ring-2', 'ring-secondary', 'bg-surface-container-lowest');
            btn.classList.add('bg-surface-container-low');
          });
          buttonEl.classList.remove('bg-surface-container-low');
          buttonEl.classList.add('ring-2', 'ring-secondary', 'bg-surface-container-lowest');
        }

        function processCheckout() {
          let subtotal = 0;
          for (const [name, item] of Object.entries(state.items)) {
            subtotal += item.price * item.qty;
          }
          if (subtotal === 0) {
            alert("Silakan pilih minimal 1 menu sebelum memproses pembayaran!");
            return;
          }
          const pointsEarned = Math.floor(subtotal / 10000);
          document.getElementById('modal-points').innerText = `+${pointsEarned} Poin`;
          document.getElementById('modal-desc').innerHTML = `Pesanan selesai diproses via <strong>${state.selectedPayment}</strong>. Member <strong class="text-on-surface">${state.member.name}</strong> memperoleh tambahan poin.`;
          document.getElementById('success-modal').classList.remove('hidden');
        }

        function closeModal() {
          document.getElementById('success-modal').classList.add('hidden');
          resetTransaction();
        }

        function printReceipt() {
          alert("Mengirim instruksi cetak ke printer kasir POS...");
          closeModal();
        }

        function resetTransaction() {
          state.items = {};
          const badges = document.querySelectorAll('[id^="qty-"]');
          badges.forEach(b => {
            b.innerText = '0';
            b.classList.remove('text-secondary');
          });
          // generate new random order number
          const randNum = Math.floor(10000 + Math.random() * 90000);
          document.getElementById('order-no').innerText = `#ORD-${randNum}`;
          recalculate();
        }

        // Member search demo behavior
        document.getElementById('btn-search-member').addEventListener('click', function() {
          const val = document.getElementById('member-input').value.trim();
          if (val.length > 0) {
            alert(`Data member "${val}" terverifikasi aktif.`);
          }
        });

        // Initialize view
        recalculate();
      </script>
    </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>