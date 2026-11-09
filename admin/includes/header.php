<?php
/**
 * Admin Common Header
 * Loads head tags, tailwind config, sidebar, and topbar.
 */
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/sidebar.php';
?>
<!-- Main View Wrapper (offsets fixed sidebar w-72) -->
<div class="pl-72">
  <?php require_once __DIR__ . '/topbar.php'; ?>

