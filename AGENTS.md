# Paneless WordPress Theme

**Type:** Classic WordPress Theme (PHP-based)

## Quick Start

Copy `paneless/` folder to WordPress `wp-content/themes/` and activate in WP Admin.

## Theme Structure

```
paneless/
├── style.css           # Theme header (REQUIRED)
├── functions.php      # Theme setup, hooks, widgets
├── header.php        # Header template
├── footer.php       # Footer template
├── index.php       # Home template
├── single.php      # Single post
├── page.php        # Page
├── archive.php     # Archive
├── 404.php       # 404
├── sidebar.php    # Sidebar
├── assets/css/style.css  # Styles (CSS custom properties, prefers-color-scheme)
└── template-parts/dashboard-cards.php
```

## Key Features

- **Dark/Light:** Uses `prefers-color-scheme` media query - no JS required
- **User Menu:** Auto-detects logged-in state, shows login link or dropdown
- **Integration Area:** Widget area ready for Sonarr/Radarr API widgets
- **Customizer:** Accent color + copyright text settings

## Reference

- [WordPress Theme Handbook](https://developer.wordpress.org/themes/getting-started/)