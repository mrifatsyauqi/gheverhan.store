# GHEVERHAN Commerce Platform

# 22_DATABASE_DESIGN.md

Version: 1.2

Status: Approved

Owner: Engineering Team

Last Updated: 2026-07-15

---

# 1. Purpose

Dokumen ini mendefinisikan prinsip desain database GHEVERHAN Commerce Platform.

Dokumen ini bukan dokumentasi migration maupun ERD lengkap.

Tujuannya adalah memastikan struktur data tetap konsisten, mudah dipelihara, dan mendukung arsitektur Headless Commerce.

---

# 2. Database Vision

Database menjadi Single Source of Truth.

Database hanya menyimpan:

- Business Data
- Configuration Data
- Content Data
- User Data

Database tidak menyimpan tampilan (UI) maupun HTML hasil rendering.

---

# 3. Architecture Overview

```text
Next.js

↓

REST API

↓

Laravel

↓

Database
```

Frontend tidak pernah mengakses database secara langsung.

Seluruh akses data melalui REST API.

---

# 4. Database Principles

Database mengikuti prinsip:

- Single Source of Truth
- Business Driven Design
- Normalization secukupnya
- Data Integrity
- Minimal Duplication
- Future Scalability

---

# 5. Domain Ownership

Database dibagi berdasarkan domain bisnis.

Core

- Users
- Roles
- Permissions
- Settings
- Media
- Audit Logs

---

Commerce

- Products
- Categories
- Brands
- Product Variants
- Inventory
- Cart
- Checkout Sessions
- Orders
- Payments
- Shipments

---

CMS

- Pages
- Blog Posts
- Categories
- SEO Metadata

---

Website Builder

- Themes
- Page Configurations
- Sections
- Menus
- Navigation

---

Infrastructure

- Jobs
- Cache
- Failed Jobs
- Sessions

---

# 6. Business Data vs Presentation Data

Business Data

- Product
- Order
- Customer
- Payment

Presentation Data

- Theme
- Homepage Configuration
- Hero Section
- Banner
- Menu

Kedua jenis data dipisahkan agar frontend dapat berkembang tanpa mengubah data bisnis.

---

# 7. Relationship Principles

Gunakan:

- One to One
- One to Many
- Many to Many

Seluruh relasi menggunakan Foreign Key bila memungkinkan.

Cascade hanya digunakan jika aman terhadap data bisnis.

---

# 8. Primary Key Strategy

MVP

BIGINT Auto Increment.

Growth

UUID dapat ditambahkan bila diperlukan untuk integrasi eksternal.

---

# 9. Naming Convention

Table

snake_case plural.

Contoh.

products

orders

payments

Columns

snake_case.

Foreign Key

product_id

customer_id

order_id

---

# 10. Soft Delete Policy

Gunakan Soft Delete pada data yang memiliki nilai bisnis.

Contoh.

- Products
- Customers
- Pages

Pertimbangkan penggunaan Soft Delete pada Orders sesuai kebijakan bisnis.

Tidak semua tabel wajib menggunakan Soft Delete.

---

# 11. Audit Policy

Seluruh data penting memiliki:

- created_at
- updated_at

Audit Log digunakan untuk aktivitas penting seperti:

- Login
- Perubahan Order
- Perubahan Status Payment
- Perubahan Theme
- Aktivitas Admin

---

# 12. Shared Data

Data berikut digunakan lintas modul:

- Media
- Settings
- Notification
- SEO
- Audit Log

Shared Data tidak memiliki business workflow.

---

# 13. Performance Guidelines

Gunakan:

- Foreign Key Index
- Unique Index
- Composite Index bila diperlukan
- Eager Loading
- Pagination

Optimasi dilakukan berdasarkan kebutuhan nyata.

---

# 14. Backup Strategy

MVP

- Backup harian

Growth

- Incremental Backup

Enterprise

- Point-in-Time Recovery

---

# 15. Future Scalability

Database dirancang agar dapat berkembang menuju:

- Multi Warehouse
- Multi Store
- Marketplace
- ERP Integration

Namun fitur tersebut tidak memengaruhi struktur MVP saat ini.

---

# 16. Acceptance Criteria

□ Domain Ownership jelas.

□ Data bisnis dan data presentasi dipisahkan.

□ Frontend tidak mengakses database langsung.

□ Relasi konsisten.

□ Struktur mudah dikembangkan.

---

# 17. Related Documents

03_TECH_STACK.md

10_WEBSITE_BUILDER.md

23_API_SPECIFICATION.md

24_FRONTEND_ARCHITECTURE.md

25_BACKEND_ARCHITECTURE.md

27_DEPLOYMENT.md

---

# 18. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.2 | 2026-07-15 | Database Design revised for Headless Commerce |

---

END OF DOCUMENT