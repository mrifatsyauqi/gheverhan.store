# GHEVERHAN Commerce Platform

# 10_WEBSITE_BUILDER.md

Version: 1.2

Status: Approved

Owner: Product Team

Last Updated: 2026-07-15

---

# 1. Purpose

Website Builder memungkinkan Administrator membangun dan mengelola tampilan website secara visual tanpa mengubah kode aplikasi.

Website Builder tidak menyimpan HTML.

Website Builder menyimpan konfigurasi halaman yang kemudian dirender oleh aplikasi Frontend (Next.js).

---

# 2. Vision

Website Builder menjadi salah satu fitur utama GHEVERHAN.

Tujuannya adalah memungkinkan Admin:

- membangun homepage
- landing page
- campaign page
- promotional page
- content page

secara visual menggunakan reusable component.

---

# 3. Goals

Website Builder harus:

- Visual
- Flexible
- Reusable
- Responsive
- Theme Driven
- API Driven
- Component Based

---

# 4. High Level Architecture

```text
Administrator
        │
        ▼
Website Builder CMS
        │
 Save Page Configuration
        │
        ▼
Laravel API
        │
        ▼
Database
        │
        ▼
Next.js
        │
 Fetch Configuration
        │
        ▼
Render React Components
```

Website Builder hanya menyimpan konfigurasi.

Frontend bertanggung jawab melakukan rendering.

---

# 5. Core Concepts

Website Builder terdiri dari:

- Theme
- Page
- Section
- Component
- Navigation
- Menu
- Theme Settings

Setiap bagian memiliki tanggung jawab yang jelas.

---

# 6. Page Structure

Setiap halaman terdiri dari kumpulan Section.

```text
Page

↓

Sections

↓

Components
```

Halaman tidak menyimpan HTML statis.

---

# 7. Section System

Section merupakan blok konten besar.

Contoh:

- Hero
- Banner
- Featured Products
- Categories
- Flash Sale
- Testimonials
- FAQ
- Newsletter
- Footer

Section dapat digunakan ulang pada berbagai halaman.

---

# 8. Component System

Setiap Section terdiri dari beberapa Component.

Contoh:

- Button
- Card
- Product Card
- Heading
- Image
- Video
- Carousel
- Countdown
- Icon
- Form

Component tidak memiliki business logic.

---

# 9. Theme System

Theme menentukan tampilan global website.

Theme mencakup:

- Color Palette
- Typography
- Border Radius
- Shadow
- Spacing
- Button Style
- Icon Style

Semua nilai visual berasal dari Theme Tokens.

---

# 10. Page Rendering

Frontend melakukan rendering berdasarkan konfigurasi.

```text
Next.js

↓

Fetch Page

↓

Fetch Sections

↓

Fetch Components

↓

Fetch Commerce Data

↓

Render React UI
```

Tidak ada HTML yang disimpan di database.

---

# 11. Dynamic Data Binding

Component dapat menggunakan data dinamis.

Contoh:

Featured Products

↓

GET /products?featured=true

Flash Sale

↓

GET /products?flash_sale=true

Blog

↓

GET /posts

Data selalu diambil melalui REST API.

---

# 12. Responsive Design

Seluruh Section wajib mendukung:

- Desktop
- Tablet
- Mobile

Konfigurasi layout dapat berbeda pada setiap breakpoint.

---

# 13. SEO Integration

Website Builder mendukung:

- Meta Title
- Meta Description
- Open Graph
- Canonical URL
- Structured Data

SEO dikonfigurasi per halaman.

---

# 14. Performance Guidelines

Gunakan:

- Lazy Loading
- Dynamic Import
- Image Optimization
- Incremental Rendering bila sesuai
- Cache untuk konfigurasi halaman

Website Builder tidak boleh memperlambat waktu muat halaman secara signifikan.

---

# 15. Business Rules

BR-001

Satu halaman menggunakan satu layout.

BR-002

Section dapat digunakan ulang.

BR-003

Component dapat digunakan ulang.

BR-004

Konfigurasi halaman tidak menyimpan HTML.

BR-005

Seluruh data dinamis berasal dari Backend API.

---

# 16. Future Enhancements

Growth:

- Drag & Drop Editor
- Draft & Preview
- Version History
- A/B Testing

Enterprise:

- Multi Theme
- Multi Website
- AI Layout Generator
- AI Content Assistant

---

# 17. Acceptance Criteria

□ Admin dapat membuat halaman.

□ Admin dapat menyusun Section.

□ React berhasil merender halaman.

□ Data dinamis berasal dari API.

□ Theme diterapkan secara konsisten.

□ Website responsif.

---

# 18. Related Documents

06_DESIGN_SYSTEM.md

07_DESIGN_TOKENS.md

08_COMPONENT_LIBRARY.md

11_CONTENT_MANAGEMENT_SYSTEM.md

12_PRODUCT_CATALOG.md

23_API_SPECIFICATION.md

24_FRONTEND_ARCHITECTURE.md

---

# 19. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.2 | 2026-07-15 | Website Builder rewritten for Headless Commerce |

---

END OF DOCUMENT