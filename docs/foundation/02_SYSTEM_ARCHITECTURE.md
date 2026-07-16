# GHEVERHAN Commerce Platform

# 02_SYSTEM_ARCHITECTURE.md

Version: 1.1

Status: Approved

Owner: Architecture Team

Last Updated: 2026-07-15

---

# 1. Purpose

Dokumen ini menjelaskan arsitektur tingkat tinggi (High-Level Architecture) GHEVERHAN Commerce Platform.

Dokumen ini menjadi acuan utama seluruh keputusan teknis.

Dokumen ini **tidak membahas implementasi kode**, melainkan bagaimana seluruh sistem saling terhubung.

---

# 2. Architecture Vision

Arsitektur GHEVERHAN dibangun dengan prinsip:

- Simple First
- API First
- Headless Commerce
- Modular
- Scalable
- Performance First

Tujuan utama adalah membangun platform yang mudah dipahami, mudah dipelihara, dan siap berkembang tanpa perlu refactor besar.

---

# 3. High Level Architecture

```
                Customer
                    │
             Web Browser
                    │
             Next.js Frontend
                    │
         REST API (HTTPS + JSON)
                    │
            Laravel Backend API
                    │
     ┌──────────────┼──────────────┐
     │              │              │
 Commerce      CMS Engine    Website Builder
     │              │              │
     └──────────────┼──────────────┘
                    │
                 MySQL
                    │
        File Storage / Media
```

---

# 4. Core Platform

Platform terdiri dari empat bagian utama.

## 1. Customer Storefront

Frontend yang digunakan pelanggan.

Bertanggung jawab terhadap:

- UI
- UX
- SEO
- Rendering
- Routing

---

## 2. Commerce Engine

Mengelola seluruh transaksi.

Meliputi:

- Product
- Cart
- Checkout
- Order
- Payment
- Shipping

---

## 3. Website Builder

USP utama GHEVERHAN.

Admin dapat mengubah tampilan website tanpa coding.

Contoh:

- Theme
- Homepage
- Banner
- Header
- Footer
- Navigation

Semua konfigurasi disimpan di database dan dikirim ke frontend melalui API.

---

## 4. CMS

Mengelola konten website.

Contoh:

- Pages
- Blog
- FAQ
- Landing Page

---

# 5. Frontend Architecture

Frontend menggunakan Next.js.

Tanggung jawab frontend:

- Menampilkan UI
- Mengambil data melalui REST API
- Menampilkan halaman SEO Friendly
- Menyimpan state lokal
- Menampilkan konfigurasi Website Builder

Frontend **tidak memiliki business logic**.

Business logic berada di backend.

---

# 6. Backend Architecture

Backend menggunakan Laravel.

Backend bertanggung jawab terhadap:

- Authentication
- Business Rules
- Validation
- Payment
- Shipping
- CMS
- Website Builder
- API

Backend menjadi satu-satunya sumber data (Single Source of Truth).

---

# 7. API Architecture

Semua komunikasi menggunakan REST API.

Flow:

```
Frontend

↓

HTTPS

↓

REST API

↓

Laravel

↓

Database
```

Tidak ada akses database secara langsung dari frontend.

---

# 8. Website Builder Architecture

Website Builder terdiri dari beberapa lapisan.

```
Theme
   │
Layout
   │
Sections
   │
Blocks
   │
Components
```

## MVP

Admin dapat mengatur:

- Logo
- Warna tema
- Hero Banner
- Homepage Banner
- Featured Product
- Header
- Footer
- Menu

Tanpa deploy ulang.

---

## Growth

- Section Builder
- Landing Page Builder
- Popup Builder

---

## Enterprise

- Drag & Drop Builder
- Live Preview
- Theme Marketplace
- Version History

---

# 9. CMS Architecture

CMS terpisah dari Website Builder.

CMS mengelola:

- Static Pages
- Blog
- FAQ
- About
- Contact
- SEO Content

Website Builder mengatur tampilan.

CMS mengatur isi.

---

# 10. Data Flow

```
Customer

↓

Frontend

↓

REST API

↓

Business Logic

↓

Database

↓

REST API

↓

Frontend

↓

Customer
```

Semua request mengikuti alur ini.

---

# 11. Authentication Flow

Customer

↓

Login

↓

Laravel Sanctum

↓

Access Token

↓

REST API

↓

Authorized Request

---

# 12. Storage Strategy

## MVP

Local Storage

---

## Growth

Cloud Object Storage

---

## Enterprise

CDN + Multi Region

---

# 13. Search Strategy

## MVP

MySQL Fulltext Search

---

## Growth

Meilisearch

---

## Enterprise

OpenSearch

---

# 14. Cache Strategy

## MVP

Laravel Cache

Browser Cache

---

## Growth

Redis

---

## Enterprise

Distributed Cache

---

# 15. Scalability Strategy

Blueprint menggunakan Progressive Scaling.

MVP

↓

Single VPS

↓

Growth

Dedicated Database

↓

Enterprise

Horizontal Scaling

Kompleksitas hanya ditambahkan ketika diperlukan.

---

# 16. Security Principles

Platform menerapkan:

- HTTPS
- Laravel Sanctum
- CSRF Protection
- Rate Limiting
- Authorization
- Input Validation

---

# 17. Architecture Principles

Semua keputusan arsitektur harus memenuhi prinsip berikut.

- Business Value First
- Build Simple
- Scale Smart
- API First
- Mobile First
- Progressive Architecture

---

# 18. Acceptance Criteria

□ Frontend hanya berkomunikasi melalui API.

□ Business Logic hanya berada di Backend.

□ Website Builder tidak memerlukan deploy ulang.

□ CMS terpisah dari Website Builder.

□ Arsitektur mudah dipahami developer baru.

□ Arsitektur siap berkembang.

---

# 19. Related Documents

01_MASTER_PLAN.md

03_TECH_STACK.md

22_DATABASE_DESIGN.md

23_API_SPECIFICATION.md

24_FRONTEND_ARCHITECTURE.md

25_BACKEND_ARCHITECTURE.md

---

# 20. Revision History

| Version | Date | Description |
|----------|------------|------------------------------|
| 1.1 | 2026-07-15 | Architecture Refactor |

---

END OF DOCUMENT