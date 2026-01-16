# ACF Utility Shortcodes

A lightweight WordPress plugin that provides reusable, secure shortcodes for displaying Advanced Custom Fields (ACF) values using best practices.

---

## Features

- Display ACF image fields using shortcodes
- Display ACF text, textarea, and number fields using shortcodes
- Optional `post_id` support for cross-post usage
- Clean, modular, and scalable architecture
- Follows WordPress coding standards
- Secure output with proper escaping

---

## Requirements

- WordPress 5.0 or higher
- Advanced Custom Fields (ACF) plugin installed and active
- PHP 7.4 or higher

---

## Installation

1. Download or clone this repository.
2. Upload the `acf-utility-shortcodes` folder to your `/wp-content/plugins/` directory.
3. Activate the plugin from **WordPress Admin → Plugins**.
4. Ensure **Advanced Custom Fields (ACF)** is active.

---

## Usage

### 1️ Display ACF Image Field

```text
[acf_image field="hero_image"]

---

### 2 Display an image from another post:
[acf_image field="banner_image" post_id="123"]
