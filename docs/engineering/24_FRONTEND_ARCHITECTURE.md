# GHEVERHAN Commerce Platform

# 24_FRONTEND_ARCHITECTURE.md

Version: 1.2

Status: Approved

Owner: Engineering Team

Last Updated: 2026-07-15

---

# 1. Purpose

Dokumen ini mendefinisikan arsitektur frontend GHEVERHAN Commerce Platform.

Frontend dibangun menggunakan Next.js dan React sebagai aplikasi yang sepenuhnya terpisah dari backend Laravel.

Frontend bertanggung jawab terhadap:

- User Interface
- User Experience
- Client Routing
- Rendering
- API Consumption
- Client State

Seluruh Business Logic tetap berada pada Backend.

---

# 2. Frontend Vision

Frontend GHEVERHAN harus:

- Modern
- Fast
- Responsive
- Accessible
- SEO Friendly
- Component Driven
- API Driven

Frontend tidak boleh bergantung langsung pada database.

---

# 3. High Level Architecture

```text
Browser
      │
      ▼
Next.js
      │
      ▼
React Components
      │
      ▼
TanStack Query
      │
      ▼
REST API
      │
      ▼
Laravel
      │
      ▼
MySQL
```

Frontend dan Backend berkomunikasi melalui REST API.

---

# 4. Frontend Principles

Frontend mengikuti prinsip:

Component Driven

Composition over Inheritance

Single Responsibility

Separation of Concerns

Configuration Driven

Mobile First

Accessibility First

---

# 5. Application Layers

```text
Application

↓

App Router

↓

Layouts

↓

Pages

↓

Sections

↓

Components

↓

Hooks

↓

Services

↓

API Client
```

Setiap layer memiliki satu tanggung jawab yang jelas.

---

# 6. Routing

Menggunakan Next.js App Router.

Contoh.

```text
/

/products

/products/[slug]

/cart

/checkout

/profile

/orders

/login

/register
```

Admin menggunakan aplikasi frontend yang sama dengan area publik, namun dipisahkan melalui layout dan route group.

---

# 7. Layout System

Layout utama.

```text
Public Layout

Authentication Layout

Customer Layout

Admin Layout
```

Layout hanya mengatur struktur halaman.

Tidak mengandung business logic.

---

# 8. Page Architecture

Setiap halaman terdiri dari kumpulan Section.

```text
Page

↓

Sections

↓

Components
```

Website Builder hanya menyusun Section.

---

# 9. Section Architecture

Section adalah blok besar yang dapat digunakan ulang.

Contoh:

- Hero
- Featured Products
- Categories
- Banner
- FAQ
- Testimonials
- Newsletter
- Footer

Setiap Section terdiri dari beberapa Component.

---

# 10. Component Architecture

Component merupakan unit UI terkecil.

Contoh:

Button

Input

Card

Badge

Modal

Dialog

Image

Avatar

Pagination

Component harus:

- reusable
- kecil
- independen
- mudah diuji

Component tidak boleh memiliki business logic.

---

# 11. Rendering Strategy

Website Builder mengirim konfigurasi halaman.

Frontend melakukan rendering.

```text
Next.js

↓

Fetch Page Configuration

↓

Fetch Commerce Data

↓

Fetch CMS Data

↓

Merge

↓

Render HTML
```

Frontend tidak menyimpan struktur website.

---

# 12. State Management

Gunakan pemisahan state.

## Server State

TanStack Query

Contoh:

- Products
- Orders
- Categories
- CMS Pages

---

## Client State

React Context

Contoh:

- Theme
- User Preferences
- Sidebar

---

## Local State

React State

Contoh:

- Modal
- Dropdown
- Tabs

---

## Forms

React Hook Form

↓

Zod Validation

---

# 13. API Layer

Semua komunikasi dilakukan melalui API Client.

```text
Component

↓

Hook

↓

Service

↓

Axios

↓

REST API

↓

Laravel
```

Component tidak boleh melakukan request langsung.

---

# 14. Authentication Flow

```text
Login

↓

REST API

↓

Laravel Sanctum

↓

Access Token / Session

↓

Authenticated User
```

Frontend hanya menyimpan state autentikasi yang diperlukan.

---

# 15. Theme System

Theme berasal dari Website Builder.

Frontend menggunakan Theme Tokens.

Contoh:

- Color
- Typography
- Radius
- Shadow
- Spacing

Tidak boleh ada hardcoded design values.

---

# 16. Asset Management

Gunakan:

Next Image

Lazy Loading

Responsive Image

Cache

Optimized Fonts

---

# 17. Performance Guidelines

Gunakan:

Code Splitting

Lazy Loading

Dynamic Import

Memoization bila diperlukan

Image Optimization

Streaming (bila sesuai)

Optimasi dilakukan berdasarkan kebutuhan nyata.

---

# 18. Accessibility

Target minimal:

WCAG 2.2 AA

Gunakan:

Semantic HTML

Keyboard Navigation

ARIA Attributes

Focus Management

---

# 19. Error Handling

Gunakan:

Global Error Boundary

Loading State

Empty State

Not Found

Fallback UI

Jangan menampilkan error internal kepada pengguna.

---

# 20. Acceptance Criteria

□ Frontend sepenuhnya menggunakan Next.js.

□ Component reusable.

□ REST API menjadi satu-satunya komunikasi dengan backend.

□ Website Builder dapat melakukan rendering halaman.

□ Responsive.

□ Accessible.

---

# 21. Related Documents

03_TECH_STACK.md

06_DESIGN_SYSTEM.md

07_DESIGN_TOKENS.md

08_COMPONENT_LIBRARY.md

10_WEBSITE_BUILDER.md

23_API_SPECIFICATION.md

25_BACKEND_ARCHITECTURE.md

---

# 22. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.2 | 2026-07-15 | Frontend Architecture rewritten for Next.js + React |

---

END OF DOCUMENT