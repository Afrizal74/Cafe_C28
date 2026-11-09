<header class="fixed top-0 left-72 right-0 h-16 bg-surface/85 backdrop-blur-xl z-40 shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
  <div class="h-16 w-full px-gutter flex items-center justify-between">
    <!-- Breadcrumbs -->
    <div class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md">
      <a href="dashboard.php" class="hover:text-on-surface cursor-pointer">C28 Portal</a>
      <span class="material-symbols-outlined text-[16px]">chevron_right</span>
      <span class="text-secondary font-title-sm text-title-sm"><?= $breadcrumb ?? 'Staff Overview' ?></span>
    </div>
    
    <!-- Search Bar & Actions -->
    <div class="flex items-center gap-4">
      <div class="relative hidden sm:flex items-center">
        <span class="material-symbols-outlined absolute left-3 text-on-surface-variant text-[18px]">search</span>
        <input class="h-9 pl-9 pr-4 rounded-xl bg-surface-container-low text-on-surface placeholder:text-outline text-body-sm font-body-sm focus:outline-none focus:ring-1 focus:ring-secondary w-64 transition-all" placeholder="Cari member / no. order..." type="text" />
      </div>
      
      <button class="flex items-center justify-center w-9 h-9 rounded-xl bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors relative" title="Notifikasi">
        <span class="material-symbols-outlined text-[20px]">notifications</span>
        <span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-secondary"></span>
      </button>
      
      <button class="flex items-center justify-center w-9 h-9 rounded-xl bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors" title="Outlet">
        <span class="material-symbols-outlined text-[20px]">store</span>
      </button>
      
      <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-on-primary">
        <span class="material-symbols-outlined text-[18px]">person</span>
      </div>
    </div>
  </div>
</header>

