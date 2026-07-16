# GHEVERHAN Commerce Platform

# 25_BACKEND_ARCHITECTURE.md

Version: 1.2

Status: Approved

Owner: Engineering Team

Last Updated: 2026-07-15

---

# 1. Purpose

Dokumen ini mendefinisikan arsitektur backend GHEVERHAN Commerce Platform.

Backend bertanggung jawab terhadap:

- Business Logic
- REST API
- Authentication
- Authorization
- Database
- Integrations
- Queue
- Scheduler

Backend tidak bertanggung jawab terhadap rendering User Interface.

---

# 2. Backend Vision

Backend dibangun sebagai Headless Commerce API.

Seluruh komunikasi dilakukan melalui REST API.

Backend menjadi Single Source of Truth bagi seluruh data bisnis.

---

# 3. Architecture Principles

Backend mengikuti prinsip berikut.

- Build Simple, Scale Smart
- Single Responsibility
- Separation of Concerns
- Business First
- Convention over Configuration
- Configuration over Hardcode
- YAGNI (You Aren't Gonna Need It)

Business Logic harus sederhana, mudah dipahami, dan mudah diuji.

---

# 4. High Level Architecture

```text
HTTP Request
      │
      ▼
API Routes
      │
      ▼
Controller
      │
      ▼
Service
      │
      ▼
Model (Eloquent)
      │
      ▼
Database
```

Setiap layer memiliki satu tanggung jawab.

---

# 5. Request Lifecycle

```text
Next.js

↓

REST API

↓

Laravel Route

↓

Middleware

↓

Controller

↓

Service

↓

Model

↓

Database

↓

JSON Response

↓

Next.js
```

Seluruh komunikasi frontend dilakukan melalui REST API.

---

# 6. Domain Modules

Backend dibagi berdasarkan domain.

Core

Authentication

CMS

Website Builder

Commerce

Infrastructure

Setiap domain memiliki business logic masing-masing.

---

# 7. Commerce Modules

Commerce terdiri dari:

- Product Catalog
- Search
- Shopping Cart
- Checkout
- Orders
- Payments
- Shipping

Setiap modul bersifat independen namun saling berintegrasi melalui Service Layer.

---

# 8. Shared Services

Layanan lintas modul.

Media Service

↓

Settings Service

↓

Notification Service

↓

SEO Service

↓

Audit Service

↓

File Service

Shared Service tidak memiliki business workflow commerce.

---

# 9. Controller Layer

Controller bertanggung jawab terhadap:

- menerima request
- memanggil Service
- mengembalikan response
- authorization

Controller tidak boleh:

- menjalankan business logic
- melakukan query kompleks
- memanggil provider eksternal secara langsung

---

# 10. Service Layer

Service merupakan pusat business logic.

Contoh:

ProductService

OrderService

CheckoutService

PaymentService

ShippingService

CMSService

WebsiteBuilderService

Service harus kecil, fokus, dan mudah diuji.

---

# 11. Model Layer

Model digunakan untuk:

- Relasi
- Scope
- Accessor
- Mutator
- Casting

Model tidak boleh berisi workflow bisnis yang kompleks.

---

# 12. Integration Layer

Integrasi eksternal menggunakan Adapter.

```text
Payment

├── TripayAdapter
├── MidtransAdapter
└── XenditAdapter

Shipping

├── KiriminAjaAdapter
├── J&TAdapter
├── RajaOngkirAdapter
└── BiteshipAdapter
```

Provider dapat diganti tanpa mengubah business logic.

---

# 13. Event Driven Communication

Event digunakan untuk komunikasi lintas modul.

Contoh:

OrderCreated

↓

Payment

↓

Notification

↓

Shipping

↓

Analytics

Event digunakan hanya jika benar-benar diperlukan.

---

# 14. Transaction Management

Database Transaction digunakan pada proses yang melibatkan banyak perubahan data.

Contoh:

- Checkout
- Payment Confirmation
- Shipment Creation
- Order Cancellation

---

# 15. Queue Processing

Queue digunakan untuk proses asynchronous.

Contoh:

- Email
- WhatsApp
- Notification
- Payment Webhook
- Shipping Sync
- Image Processing

Request utama tidak boleh menunggu proses berat selesai.

---

# 16. Caching Strategy

MVP

Gunakan Laravel Cache bila diperlukan.

Growth

Redis Cache.

Yang dapat di-cache:

- Categories
- CMS Pages
- Theme Configuration
- Homepage Configuration

Data transaksi tidak boleh di-cache sebagai sumber utama.

---

# 17. Security Layer

Backend wajib menggunakan:

- Laravel Sanctum
- Authorization Policy
- Request Validation
- HTTPS
- Rate Limiting
- Secure Headers

Keamanan menjadi tanggung jawab seluruh modul.

---

# 18. Error Handling

Gunakan Exception yang jelas.

Contoh:

ValidationException

BusinessException

PaymentException

ShippingException

IntegrationException

Seluruh error dicatat melalui logging.

---

# 19. Folder Organization

Folder backend mengikuti domain bisnis.

```text
app/

├── Domain/
│   ├── Authentication/
│   ├── CMS/
│   ├── Commerce/
│   ├── WebsiteBuilder/
│   └── Shared/
│
├── Http/
│
├── Models/
│
├── Providers/
│
└── Support/
```

Struktur dapat berkembang sesuai kebutuhan tanpa mengubah prinsip arsitektur.

---

# 20. Acceptance Criteria

□ REST API menjadi satu-satunya komunikasi frontend.

□ Business Logic berada di Service.

□ Controller tetap tipis.

□ Integrasi menggunakan Adapter.

□ Shared Service digunakan lintas modul.

□ Mudah dikembangkan.

---

# 21. Related Documents

03_TECH_STACK.md

22_DATABASE_DESIGN.md

23_API_SPECIFICATION.md

24_FRONTEND_ARCHITECTURE.md

26_SECURITY.md

27_DEPLOYMENT.md

30_CODING_STANDARDS.md

31_AI_DEVELOPMENT_GUIDE.md

---

# 22. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.2 | 2026-07-15 | Backend Architecture rewritten for Headless Commerce |

---

END OF DOCUMENT