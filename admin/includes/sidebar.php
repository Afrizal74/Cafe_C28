<?php
// Auto-detect active page if not explicitly set
if (!isset($activePage)) {
  $activePage = basename($_SERVER['PHP_SELF'], '.php');
}

$navItems = [
  [
    'id'        => 'dashboard',
    'aliases'   => ['dashboard', 'dashboard.php'],
    'href'      => 'dashboard.php',
    'icon'      => 'grid_view',
    'label'     => 'Dashboard',
  ],
  [
    'id'        => 'transaksi-baru',
    'aliases'   => ['transaksi', 'transaksi.php', 'transaksi-baru'],
    'href'      => 'transaksi.php',
    'icon'      => 'add_circle',
    'label'     => 'Transaksi Baru',
  ],
  [
    'id'        => 'pesanan',
    'aliases'   => ['pesanan', 'pesanan.php'],
    'href'      => 'pesanan.php',
    'icon'      => 'receipt_long',
    'label'     => 'Pesanan',
    'badge'     => 'NEW',
  ],
  [
    'id'        => 'daftar-member',
    'aliases'   => ['daftarMember', 'daftarmember', 'daftarMember.php', 'daftar-member'],
    'href'      => 'daftarMember.php',
    'icon'      => 'group',
    'label'     => 'Daftar Member',
  ],
  [
    'id'        => 'segmentasi-member',
    'aliases'   => ['segmentasi', 'segmentasi.php', 'segmentasi-member'],
    'href'      => 'segmentasi.php',
    'icon'      => 'pie_chart',
    'label'     => 'Segmentasi Member',
  ],
  [
    'id'        => 'level-membership',
    'aliases'   => ['levelMember', 'levelmember', 'levelMember.php', 'level-membership'],
    'href'      => 'levelMember.php',
    'icon'      => 'military_tech',
    'label'     => 'Level Membership',
  ],
  [
    'id'        => 'ulang-tahun',
    'aliases'   => ['ulangTahun', 'ulangtahun', 'ulangTahun.php', 'ulang-tahun'],
    'href'      => 'ulangTahun.php',
    'icon'      => 'cake',
    'label'     => 'Ulang Tahun',
  ],
  [
    'id'        => 'pengaturan',
    'aliases'   => ['pengaturan', 'pengaturan.php'],
    'href'      => 'pengaturan.php',
    'icon'      => 'tune',
    'label'     => 'Pengaturan',
  ],
];
?>
<aside class="fixed left-0 top-0 h-full w-72 bg-primary-container z-50 flex flex-col justify-between py-6 px-4 shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
  <div class="flex flex-col gap-6">
    <div class="px-3 flex items-center gap-3">
      <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-sm overflow-hidden p-1.5">
        <img src="../assets/images/Logo.png" alt="C28 Logo" class="w-full h-full object-contain" />
      </div>
      <div class="flex flex-col">
        <span class="font-label-sm text-label-sm text-on-primary-container tracking-wider uppercase">The Daily Staff Dashboard</span>
      </div>
    </div>

    <div class="h-px bg-on-primary-fixed-variant/20 mx-2"></div>

    <nav class="flex flex-col gap-1.5" data-active-classes="bg-secondary text-on-secondary font-title-sm">
      <?php foreach ($navItems as $item):
        $isActive = in_array($activePage, $item['aliases']) || in_array(strtolower($activePage), array_map('strtolower', $item['aliases']));
        $activeClass = $isActive
          ? 'bg-secondary text-on-secondary font-title-sm'
          : 'text-primary-fixed-dim hover:bg-on-primary-fixed-variant/30 hover:text-surface-container-lowest';
      ?>
        <a <?= $isActive ? 'aria-current="page"' : '' ?>
          class="flex items-center <?= isset($item['badge']) ? 'justify-between' : 'gap-3' ?> px-3 py-2.5 rounded-lg transition-all <?= $activeClass ?>"
          data-path="<?= htmlspecialchars($item['id']) ?>"
          href="<?= htmlspecialchars($item['href']) ?>">
          <?php if (isset($item['badge'])): ?>
            <div class="flex items-center gap-3">
              <span class="material-symbols-outlined text-[20px]"><?= $item['icon'] ?></span>
              <span class="font-title-sm text-title-sm"><?= htmlspecialchars($item['label']) ?></span>
            </div>
            <span class="px-1.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-label-sm"><?= htmlspecialchars($item['badge']) ?></span>
          <?php else: ?>
            <span class="material-symbols-outlined text-[20px]"><?= $item['icon'] ?></span>
            <span class="font-title-sm text-title-sm"><?= htmlspecialchars($item['label']) ?></span>
          <?php endif; ?>
        </a>
      <?php endforeach; ?>
    </nav>
  </div>

  <div class="flex flex-col gap-3 px-2 pt-4 bg-primary-container">
    <div class="h-px bg-on-primary-fixed-variant/20"></div>
    <div class="flex items-center justify-between p-2 rounded-lg bg-on-primary-fixed-variant/15">
      <div class="flex items-center gap-3 min-w-0">
        <div class="w-9 h-9 rounded-full bg-secondary flex items-center justify-center flex-shrink-0 text-on-secondary">
          <span class="material-symbols-outlined text-[20px]">shield_person</span>
        </div>
        <div class="flex flex-col min-w-0">
          <span class="font-title-sm text-title-sm text-surface-container-lowest truncate">Admin C28</span>
          <span class="font-body-sm text-body-sm text-on-primary-container truncate">Staff Shift Pagi</span>
        </div>
      </div>
    </div>
    <a class="flex items-center gap-2 px-3 py-2 rounded-lg text-error-container hover:bg-error/10 hover:text-error transition-all" data-path="login" href="../index.html">
      <span class="material-symbols-outlined text-[18px]">logout</span>
      <span class="font-label-md text-label-md">Keluar dari akun</span>
    </a>
  </div>
</aside>