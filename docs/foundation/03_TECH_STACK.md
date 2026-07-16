# GHEVERHAN Commerce Platform

# 03_TECH_STACK.md

Version: 1.2

Status: Approved

Owner: Engineering Team

Last Updated: 2026-07-15

---

# 1. Purpose

Dokumen ini mendefinisikan standar teknologi yang digunakan pada GHEVERHAN Commerce Platform.

Seluruh pengembangan wajib mengikuti stack yang telah ditetapkan agar sistem tetap konsisten, mudah dipelihara, dan mudah dikembangkan.

Dokumen ini menjadi acuan utama seluruh implementasi.

---

# 2. Technology Principles

Pemilihan teknologi mengikuti prinsip:

- Simplicity First
- Modern Web Standards
- Long Term Maintainability
- Large Community Support
- High Performance
- Scalable Architecture

Framework dipilih berdasarkan kebutuhan bisnis, bukan tren.

---

# 3. Architecture Overview

GHEVERHAN menggunakan arsitektur Headless Commerce.

```text
Customer
        │
        ▼
Next.js (Frontend)
        │
 REST API (HTTPS)
        │
        ▼
Laravel 12 (Backend)
        │
        ▼
MySQL Database
```

Frontend dan Backend dikembangkan secara terpisah namun saling terintegrasi melalui REST API.

---

# 4. Technology Stack

## Frontend

- Next.js
- React
- TypeScript
- Tailwind CSS
- TanStack Query
- React Hook Form
- Zod
- Axios

---

## Backend

- Laravel 12
- PHP 8.4+
- Laravel Sanctum
- REST API
- Queue
- Scheduler

---

## Database

- MySQL 8+

Growth:

- Redis

---

## Storage

MVP

- Local Storage

Growth

- S3 Compatible Storage

---

## Search

MVP

- MySQL Full Text Search

Growth

- Meilisearch

Enterprise

- Elasticsearch

---

## Cache

MVP

- Laravel Cache

Growth

- Redis Cache

---

## Build Tools

Frontend

- Node.js LTS
- npm
- Vite (internal Next.js tooling)

Backend

- Composer

---

## Version Control

Git

GitHub

GitHub Flow

---

# 5. Frontend Stack

Frontend menggunakan Next.js App Router.

Komponen utama:

```text
Next.js

↓

React

↓

Tailwind CSS

↓

TanStack Query

↓

REST API

↓

Laravel
```

Frontend bertanggung jawab terhadap:

- UI
- UX
- Rendering
- Routing
- Client State
- API Consumption

Frontend tidak memiliki business logic.

---

# 6. Backend Stack

Laravel bertanggung jawab terhadap:

- Authentication
- Business Logic
- Database
- API
- Queue
- Scheduler
- Integrations

Backend tidak bertanggung jawab terhadap rendering UI.

---

# 7. State Management

Frontend menggunakan:

Server State

- TanStack Query

Client State

- React Context
- React State

Forms

- React Hook Form

Validation

- Zod

Backend tetap menjadi Single Source of Truth.

---

# 8. API Communication

Komunikasi menggunakan REST API melalui HTTPS.

```text
Next.js

↓

Axios

↓

REST API

↓

Laravel

↓

MySQL
```

Seluruh data berasal dari Backend.

---

# 9. Third Party Integrations

Payment

- Tripay (MVP)

Shipping

- KiriminAja (MVP)

Growth

- Direct J&T API
- RajaOngkir
- Biteship

Authentication

- Google OAuth

---

# 10. Development Environment

Frontend

Node.js LTS

Backend

PHP 8.4+

Composer

Database

MySQL 8+

---

# 11. Production Environment

Frontend

Next.js Production Build

Backend

Laravel Production

Database

MySQL

Queue

Laravel Queue

Scheduler

Laravel Scheduler

---

# 12. Scalability Roadmap

## MVP

Laravel API

↓

Next.js

↓

MySQL

---

## Growth

Laravel API

↓

Redis

↓

Queue Worker

↓

Next.js

---

## Enterprise

Load Balancer

↓

Next.js Cluster

↓

Laravel Cluster

↓

Redis

↓

MySQL Replication

---

# 13. Technology Decisions

Keputusan utama proyek:

- Headless Commerce Architecture
- REST API
- React Component Architecture
- TypeScript First
- Tailwind CSS
- Laravel Service Layer
- Build Simple, Scale Smart

---

# 14. Out of Scope

Blueprint ini tidak mencakup:

- Microservices
- Kubernetes
- GraphQL
- CQRS
- Event Sourcing

Teknologi tersebut dapat dipertimbangkan pada masa depan apabila benar-benar dibutuhkan.

---

# 15. Acceptance Criteria

□ Seluruh modul menggunakan stack yang sama.

□ Frontend dan Backend terpisah.

□ REST API menjadi satu-satunya jalur komunikasi.

□ Teknologi sesuai roadmap.

---

# 16. Related Documents

02_SYSTEM_ARCHITECTURE.md

22_DATABASE_DESIGN.md

23_API_SPECIFICATION.md

24_FRONTEND_ARCHITECTURE.md

25_BACKEND_ARCHITECTURE.md

27_DEPLOYMENT.md

---

# 17. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.2 | 2026-07-15 | Headless Commerce Architecture Revision |

---

END OF DOCUMENT