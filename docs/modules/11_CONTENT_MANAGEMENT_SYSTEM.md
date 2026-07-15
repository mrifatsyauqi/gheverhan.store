# GHEVERHAN Commerce Platform

# 11_CONTENT_MANAGEMENT_SYSTEM.md

Version: 1.1

Status: Approved

Owner: Product Team

Last Updated: 2026-07-15

---

# 1. Purpose

Content Management System (CMS) memungkinkan admin mengelola seluruh konten non-commerce pada website tanpa melakukan coding.

CMS bertanggung jawab terhadap pembuatan, pengelolaan, dan publikasi konten yang akan digunakan oleh Website Builder maupun halaman storefront.

CMS bukan Website Builder.

CMS mengelola isi.

Website Builder mengelola tampilan.

---

# 2. Scope

CMS bertanggung jawab terhadap:

- Static Pages
- Blog
- FAQ
- Announcement
- SEO Content
- Footer Content
- Navigation Content
- Legal Pages
- Contact Information

CMS tidak bertanggung jawab terhadap:

- Theme
- Layout
- Homepage Structure
- Product Data
- Checkout
- Payment
- Shipping

---

# 3. Business Value

★★★★★

CMS memungkinkan tim non-teknis mengelola seluruh informasi website secara cepat tanpa bantuan developer.

---

# 4. Business Priority

★★★★★

Core Feature

---

# 5. Implementation Level

## 🟢 MVP

- Static Pages
- FAQ
- Contact Page
- About Page
- Privacy Policy
- Terms & Conditions
- SEO Metadata
- Draft & Publish

---

## 🟡 Growth

- Blog
- Announcement
- Landing Page Content
- Scheduled Publish
- Media Library Integration

---

## 🔵 Enterprise

- Content Workflow
- Approval Process
- Multi Language
- Version History
- AI Content Assistant

---

# 6. User Roles

Owner

Administrator

Content Manager

Marketing

---

# 7. User Stories

As a Content Manager

I want to edit website pages

So that website information remains accurate.

---

As a Marketing Staff

I want to publish promotional content

So that campaigns can be launched immediately.

---

# 8. Business Workflow

Login

↓

Admin Panel

↓

CMS

↓

Select Content

↓

Edit

↓

Preview

↓

Save Draft

↓

Publish

↓

Live Website

---

# 9. Information Architecture

CMS

├── Pages

├── Blog

├── FAQ

├── Announcement

├── SEO

├── Navigation Content

├── Footer Content

└── Media References

---

# 10. Content Model

Setiap konten memiliki struktur berikut.

Content

├── Title

├── Slug

├── Summary

├── Body

├── Featured Image

├── SEO

├── Status

├── Author

├── Publish Date

└── Updated At

---

# 11. Page Types

MVP

- Home Content
- About
- Contact
- FAQ
- Privacy Policy
- Terms & Conditions

Growth

- Blog
- Landing Page Content
- Announcement

---

# 12. SEO Management

CMS mendukung:

- Meta Title
- Meta Description
- Open Graph
- Canonical URL
- Robots
- Sitemap Reference

SEO hanya mengelola metadata.

Rendering tetap dilakukan frontend.

---

# 13. Content Lifecycle

Draft

↓

Review

↓

Preview

↓

Publish

↓

Archive

Rollback tersedia pada fase Growth.

---

# 14. Media Integration

CMS tidak menyimpan file secara langsung.

Media berasal dari Media Service.

CMS hanya menyimpan referensi media.

---

# 15. Functional Requirements

## Content

FR-C001

Admin dapat membuat konten.

FR-C002

Admin dapat mengedit konten.

FR-C003

Admin dapat menghapus konten.

FR-C004

Admin dapat menyimpan draft.

FR-C005

Admin dapat mempublish konten.

---

## SEO

FR-S001

Admin dapat mengatur Meta Title.

FR-S002

Admin dapat mengatur Meta Description.

FR-S003

Admin dapat mengatur URL Slug.

---

## Navigation

FR-N001

Admin dapat menentukan apakah halaman muncul pada navigasi.

---

# 16. Non Functional Requirements

NFR-001

Autosave tersedia.

NFR-002

Publish maksimal 2 detik.

NFR-003

Preview berjalan tanpa memengaruhi website live.

NFR-004

Editor mudah digunakan.

---

# 17. Dependencies

Depends On

- Admin Panel
- Authentication
- Media Service
- Website Builder

Related

- Notification
- SEO Service

---

# 18. Acceptance Criteria

□ Halaman dapat dibuat tanpa coding.

□ Draft dapat disimpan.

□ Preview berjalan.

□ Publish berhasil.

□ SEO dapat dikelola.

□ Website Builder dapat menggunakan konten CMS.

---

# 19. Out of Scope

MVP tidak mencakup:

- Multi Language
- AI Writer
- Approval Workflow
- Scheduled Publishing
- Version Rollback
- Content Personalization

---

# 20. Future Enhancements

- AI Writing Assistant
- Translation
- Version History
- Approval Workflow
- Headless Content API
- Content Analytics

---

# 21. Related Documents

09_ADMIN_PANEL.md

10_WEBSITE_BUILDER.md

12_PRODUCT_CATALOG.md

22_DATABASE_DESIGN.md

23_API_SPECIFICATION.md

25_BACKEND_ARCHITECTURE.md

---

# 22. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.1 | 2026-07-15 | CMS Blueprint |

---

END OF DOCUMENT