<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="web_dashboard" name="shell-type" />
  <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) . ' - C28 Coffee Club' : 'Admin - C28 Coffee Club' ?></title>
  
  <!-- Material Symbols & Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,600&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />

  <style>
    @layer base {
      html, body {
        margin: 0;
        padding: 0;
      }
      body {
        overscroll-behavior: none;
      }
      main > :first-child {
        margin-top: 0 !important;
      }
      main > :last-child {
        margin-bottom: 0 !important;
      }
    }
    ::-webkit-scrollbar {
      display: none;
    }
  </style>

  <!-- Tailwind CSS CDN & Design System Tokens -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "tertiary": "#000000",
            "surface-container-lowest": "#ffffff",
            "surface": "#fff8f6",
            "surface-bright": "#fff8f6",
            "on-surface": "#271811",
            "inverse-surface": "#3e2d25",
            "inverse-primary": "#d6c3b8",
            "surface-dim": "#f0d4c9",
            "outline-variant": "#d1c4bd",
            "surface-container-highest": "#f9ddd1",
            "inverse-on-surface": "#ffede6",
            "on-error": "#ffffff",
            "on-tertiary": "#ffffff",
            "outline": "#80756f",
            "on-tertiary-fixed": "#331200",
            "tertiary-container": "#331200",
            "on-secondary": "#ffffff",
            "on-primary-fixed": "#241913",
            "on-primary-fixed-variant": "#52443c",
            "on-primary-container": "#918077",
            "secondary": "#9c4400",
            "on-secondary-fixed": "#331200",
            "on-secondary-container": "#6b2d00",
            "surface-container-high": "#ffe2d6",
            "tertiary-fixed": "#ffdbca",
            "on-tertiary-fixed-variant": "#763300",
            "surface-variant": "#f9ddd1",
            "on-background": "#271811",
            "on-primary": "#ffffff",
            "surface-container-low": "#fff1eb",
            "error": "#ba1a1a",
            "primary-fixed-dim": "#d6c3b8",
            "secondary-container": "#ff8d47",
            "error-container": "#ffdad6",
            "on-secondary-fixed-variant": "#773300",
            "primary-fixed": "#f3ded4",
            "background": "#fff8f6",
            "tertiary-fixed-dim": "#ffb68e",
            "primary": "#000000",
            "secondary-fixed-dim": "#ffb68e",
            "on-error-container": "#93000a",
            "on-tertiary-container": "#cf6721",
            "primary-container": "#241913",
            "secondary-fixed": "#ffdbca",
            "surface-tint": "#6a5b53",
            "surface-container": "#ffeae1",
            "on-surface-variant": "#4e4540"
          },
          "borderRadius": {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          "spacing": {
            "margin-tablet": "1.5rem",
            "gutter-mobile": "1rem",
            "space-2xl": "3rem",
            "space-xl": "2rem",
            "space-lg": "1.5rem",
            "gutter": "1.5rem",
            "space-xs": "0.25rem",
            "margin": "2rem",
            "space-sm": "0.5rem",
            "margin-mobile": "1rem",
            "space-md": "1rem"
          },
          "fontFamily": {
            "label-lg": ["Plus Jakarta Sans"],
            "headline-md": ["Playfair Display"],
            "title-sm": ["Plus Jakarta Sans"],
            "label-md": ["Plus Jakarta Sans"],
            "body-lg": ["Plus Jakarta Sans"],
            "headline-sm": ["Playfair Display"],
            "body-sm": ["Plus Jakarta Sans"],
            "title-md": ["Plus Jakarta Sans"],
            "label-sm": ["Plus Jakarta Sans"],
            "body-md": ["Plus Jakarta Sans"],
            "headline-lg": ["Playfair Display"],
            "display-lg-mobile": ["Playfair Display"],
            "headline-lg-mobile": ["Playfair Display"],
            "display-lg": ["Playfair Display"]
          },
          "fontSize": {
            "label-lg": ["14px", { "lineHeight": "20px", "fontWeight": "500" }],
            "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
            "title-sm": ["14px", { "lineHeight": "20px", "fontWeight": "600" }],
            "label-md": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
            "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
            "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
            "body-sm": ["12px", { "lineHeight": "18px", "fontWeight": "400" }],
            "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
            "label-sm": ["11px", { "lineHeight": "14px", "fontWeight": "600" }],
            "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
            "headline-lg": ["32px", { "lineHeight": "40px", "fontWeight": "600" }],
            "display-lg-mobile": ["30px", { "lineHeight": "38px", "fontWeight": "600" }],
            "headline-lg-mobile": ["26px", { "lineHeight": "34px", "fontWeight": "600" }],
            "display-lg": ["40px", { "lineHeight": "48px", "fontWeight": "600" }]
          }
        }
      }
    };
  </script>
  <?php if (isset($extraHead)) echo $extraHead; ?>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased">

