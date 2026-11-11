# FutureNxt — Empowering the Phygital Economy

Official web platform for **FutureNxt** (`https://futurenxt.online/`), an initiative bridging digital innovation with physical enterprise across India to advance the United Nations Sustainable Development Goals (UNSDG 2030).

---

## 🚀 Key Highlights & Architecture

- **Hallmark Premium Aesthetics**: Bespoke luxury design palette featuring Champagne Gold (`#C6A45C`), Rich Off-Black (`#121212`), Warm Ivory (`#F9F6F0`), and Dark Charcoal (`#2C2C2C`).
- **Clean Extensionless URLs**: Clean routing across `/about`, `/ventures`, `/affiliates`, `/map`, and `/contact` via `.htaccess` (Apache/LiteSpeed on Hostinger) and directory routers.
- **Interactive Presence Map**: Leaflet.js-powered national network map displaying 12 verified regional hubs, custom gold-and-black location markers, and Ranchi as the **Principal HQ** at Mahabir Tower.
- **Strategic Partner Ecosystem**: Official cards and links for partner organizations (NEET Academy, Infinity Learning, Fit India 4U, TechNxt AI, CareNxt AI, QuizWiz, Angrezi English, Prithviwasi Seva & Sudhar Sangathan, Qanooni Salah, Skitre AI, mPowerin, WizKidz, Aqualine Bhungru).
- **Lightweight & High Performance**: Clean PHP templates, responsive Tailwind CSS styling, FontAwesome 6 icons, Google Fonts (Montserrat & Plus Jakarta Sans), and zero heavy frameworks.

---

## 📁 Repository Directory Structure

```text
├── .htaccess                 # Apache / LiteSpeed rewriting, Gzip & caching headers for Hostinger
├── .gitignore                # Excludes OS artifacts, logs, and development files
├── README.md                 # Deployment & development documentation
├── index.php                 # Landing page & core ecosystem overview
├── about.php                 # About Us, Vision, UNSDG Alignment & Governance
├── ventures.php              # 6 Core Venture Pillars (Education, Healthcare, Finance, etc.)
├── affiliates.php            # Affiliate network & registration form
├── contact.php               # Corporate contacts & inquiries
├── map.php                   # Interactive Phygital Presence Map (12 hubs + Principal HQ)
├── action.php                # Secure backend handler for form submissions
├── router.php                # Built-in PHP server router for clean local URLs
├── run.bat                   # 1-click Windows local development server
├── serve.bat                 # 1-click Windows local development server
│
├── includes/
│   ├── header.php            # Global navigation, mobile drawer & base href detection
│   └── footer.php            # Global footer, Agents of Change NGO badge & corporate info
│
├── about/index.php           # Route directory for clean /about URL
├── ventures/index.php        # Route directory for clean /ventures URL
├── affiliates/index.php      # Route directory for clean /affiliates URL
├── contact/index.php         # Route directory for clean /contact URL
├── map/index.php             # Route directory for clean /map URL
│
└── assets/
    ├── images/               # Brand logos, partner emblems & photographic assets
    └── css/                  # Styling assets (if needed)
```

---

## 🌐 Hostinger Deployment Guide

This repository is structured specifically for **Hostinger Web Hosting** (`public_html` root).

### Method A: Hostinger Git Auto-Deployment (Recommended)
1. In Hostinger **hPanel**, go to **Advanced** &rarr; **Git**.
2. Click **Create a New Repository**:
   - **Repository URL**: `https://github.com/fnxtinterns-Main/futurenxt.online.git`
   - **Branch**: `main`
   - **Install Path**: `/public_html` (leave default)
3. Click **Create**. Hostinger will pull the repository directly into `public_html`.
4. Whenever you push new commits to GitHub, click **Deploy** in hPanel (or configure the Hostinger Webhook in GitHub repo settings under **Settings &rarr; Webhooks** for automatic deployments on push).

### Method B: Hostinger File Manager / FTP Upload
1. In Hostinger **hPanel**, go to **Websites** &rarr; **Manage** &rarr; **File Manager**.
2. Navigate to `public_html/`.
3. Upload all files and folders from the root of this repository (including `.htaccess`).
4. Activate **Free SSL (Let's Encrypt)** under the **Security / SSL** tab in hPanel.

---

## 💻 Local Development Setup

To run the site locally on your development machine:

1. Ensure **PHP 8.0+** is installed and on your system `PATH`.
2. Double-click `run.bat` (or run in terminal):
   ```bash
   php -S 127.0.0.1:8000 router.php
   ```
3. Open your browser and navigate to:
   ```text
   http://127.0.0.1:8000/
   ```
All clean URLs (`/about`, `/ventures`, `/affiliates`, `/map`, `/contact`) work out-of-the-box via `router.php`.

---

## 📄 License & Attribution
&copy; FutureNxt & Agents of Change Initiative. All rights reserved.
