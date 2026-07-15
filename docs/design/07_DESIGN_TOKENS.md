# GHEVERHAN Commerce Platform

# 07_DESIGN_TOKENS.md

Version: 1.1

Status: Approved

Owner: Product Design Team

Last Updated: 2026-07-15

---

# 1. Purpose

Dokumen ini mendefinisikan Design Tokens resmi GHEVERHAN Commerce Platform.

Design Tokens merupakan nilai dasar yang digunakan secara konsisten di seluruh frontend, Website Builder, dan Admin Panel.

Seluruh komponen UI wajib menggunakan token ini.

---

# 2. Token Principles

Design Tokens harus:

- Konsisten
- Dapat digunakan ulang
- Mudah dipelihara
- Mudah dikembangkan
- Mendukung Website Builder

Seluruh nilai berasal dari satu sumber (Single Source of Truth).

---

# 3. Color Tokens

## Primary

Digunakan untuk:

- Primary Button
- Link utama
- Highlight

---

## Secondary

Digunakan untuk:

- Secondary Button
- Badge
- Informasi pendukung

---

## Neutral

Digunakan untuk:

- Background
- Border
- Surface
- Divider

---

## Semantic

Status sistem.

- Success
- Warning
- Error
- Info

---

Seluruh nilai HEX didefinisikan pada implementasi frontend.

Blueprint hanya menetapkan kategori warna.

---

# 4. Typography Tokens

Gunakan maksimal dua font family.

Token yang digunakan:

- Display
- Heading
- Body
- Caption
- Label

Ukuran font mengikuti skala modular.

---

# 5. Spacing Tokens

Gunakan sistem spacing yang konsisten.

Kategori:

- XS
- SM
- MD
- LG
- XL
- 2XL

Tidak diperbolehkan menggunakan spacing acak.

---

# 6. Border Radius Tokens

Kategori radius.

- None
- Small
- Medium
- Large
- Full

Gunakan sesuai Component Library.

---

# 7. Shadow Tokens

Kategori.

- None
- Small
- Medium
- Large

Shadow hanya digunakan apabila meningkatkan hierarki visual.

---

# 8. Border Tokens

Kategori.

- Thin
- Default
- Thick

Border digunakan untuk memperjelas struktur.

---

# 9. Icon Tokens

Library resmi:

Lucide Icons

Kategori ukuran.

- Small
- Medium
- Large

---

# 10. Motion Tokens

Durasi.

- Fast
- Normal
- Slow

Jenis.

- Fade
- Slide
- Scale

Animasi harus ringan.

---

# 11. Breakpoints

Target perangkat.

- Mobile
- Tablet
- Desktop
- Large Desktop

Mobile menjadi prioritas utama.

---

# 12. Elevation

Gunakan level.

- Surface
- Card
- Modal
- Drawer
- Overlay

Hindari penggunaan shadow berlebihan.

---

# 13. Z-Index

Gunakan layer standar.

- Base
- Sticky
- Dropdown
- Modal
- Toast
- Tooltip

Tidak diperbolehkan membuat nilai acak.

---

# 14. Opacity

Kategori.

- Disabled
- Hover
- Overlay

---

# 15. Website Builder Tokens

Website Builder hanya boleh mengubah token berikut.

✓ Primary Color

✓ Secondary Color

✓ Typography

✓ Border Radius

✓ Button Style

✓ Layout Width

✓ Section Spacing

Admin tidak dapat mengubah token internal sistem.

---

# 16. Token Governance

Seluruh token:

- memiliki nama konsisten;
- digunakan ulang;
- tidak diduplikasi;
- tidak dibuat langsung di komponen.

---

# 17. Acceptance Criteria

□ Semua komponen menggunakan Design Tokens.

□ Tidak ada hardcoded color.

□ Tidak ada hardcoded spacing.

□ Website Builder menggunakan token resmi.

□ Seluruh token terdokumentasi.

---

# 18. Related Documents

05_PRODUCT_DESIGN.md

06_DESIGN_SYSTEM.md

08_COMPONENT_LIBRARY.md

10_WEBSITE_BUILDER.md

---

# 19. Revision History

| Version | Date | Description |
|----------|------------|------------------------------|
| 1.1 | 2026-07-15 | Design Tokens Refactor |

---

END OF DOCUMENT