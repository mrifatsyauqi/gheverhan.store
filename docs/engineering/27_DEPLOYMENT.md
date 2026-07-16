# GHEVERHAN Commerce Platform

# 27_DEPLOYMENT.md

Version: 1.2

Status: Approved

Owner: Engineering Team

Last Updated: 2026-07-15

---

# 1. Purpose

Dokumen ini mendefinisikan standar deployment GHEVERHAN Commerce Platform.

Platform menggunakan arsitektur Headless Commerce sehingga Frontend dan Backend dideploy secara independen.

Deployment harus:

- Reliable
- Repeatable
- Secure
- Observable
- Recoverable

---

# 2. Deployment Architecture

Platform terdiri dari tiga komponen utama.

```text
Next.js Frontend
        │
 HTTPS REST API
        │
Laravel Backend
        │
        ▼
MySQL Database
```

Frontend tidak terhubung langsung ke database.

Seluruh komunikasi dilakukan melalui REST API.

---

# 3. Environment Strategy

Platform memiliki tiga environment.

Development

↓

Staging

↓

Production

Setiap environment memiliki konfigurasi sendiri.

---

# 4. Infrastructure

## MVP

Frontend

- Next.js
- Node.js LTS

Backend

- Laravel 12
- PHP 8.4

Database

- MySQL 8

Reverse Proxy

- Nginx

---

## Growth

Tambahan:

- Redis
- Queue Worker
- Scheduler
- Object Storage

---

## Enterprise

Tambahan:

- Load Balancer
- Multiple App Server
- Database Replication
- CDN

---

# 5. Deployment Workflow

```text
Developer

↓

GitHub

↓

CI Pipeline

↓

Build Next.js

↓

Deploy Frontend

---------------------

Build Laravel

↓

Deploy Backend

---------------------

Health Check

↓

Production
```

Frontend dan Backend memiliki pipeline deployment masing-masing.

---

# 6. Environment Variables

Frontend

Contoh:

```env
NEXT_PUBLIC_API_URL=
NEXT_PUBLIC_APP_NAME=
NEXT_PUBLIC_ASSET_URL=
```

Backend

```env
APP_NAME=
APP_ENV=
APP_KEY=

DB_HOST=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

TRIPAY_API_KEY=
MAIL_HOST=
```

Rahasia aplikasi hanya disimpan di Backend.

---

# 7. Frontend Deployment

Deployment Frontend meliputi:

- Install Dependencies
- Build Next.js
- Static Asset Optimization
- Deployment
- Health Check

Frontend tidak menjalankan migration database.

---

# 8. Backend Deployment

Deployment Backend meliputi:

- Install Composer
- Config Cache
- Route Cache
- Migration
- Queue Restart
- Scheduler
- Health Check

Backend bertanggung jawab terhadap migrasi database.

---

# 9. Database Deployment

Sebelum migration:

- Backup Database

Migration dilakukan setelah backup berhasil.

Jika migration gagal:

- Rollback Deployment

---

# 10. Queue & Scheduler

Gunakan:

Laravel Queue

Laravel Scheduler

Queue digunakan untuk:

- Notification
- Email
- WhatsApp
- Payment Callback
- Shipping Sync
- Image Processing

---

# 11. File Storage

MVP

Local Storage

Growth

S3 Compatible Storage

Media dikelola oleh Backend.

Frontend hanya menerima URL media.

---

# 12. Monitoring

Minimal memonitor:

- Application Health
- API Availability
- Queue
- Database
- Storage
- Disk Usage
- Error Rate

---

# 13. Logging

Pisahkan log:

Frontend

- Client Error
- Rendering Error

Backend

- API Error
- Business Error
- Integration Error
- Authentication Error

---

# 14. Backup Strategy

MVP

- Database Harian
- Media Mingguan

Growth

- Incremental Backup

Enterprise

- Point in Time Recovery

---

# 15. Rollback Strategy

Jika deployment gagal.

1. Stop Deployment

2. Rollback Application

3. Restore Database bila diperlukan

4. Restart Queue

5. Health Check

6. Dokumentasikan insiden

---

# 16. CI/CD

MVP

Manual Deployment menggunakan Git.

Growth

GitHub Actions

Enterprise

Full CI/CD Pipeline

Deployment otomatis dilakukan hanya setelah seluruh validasi berhasil.

---

# 17. Security

Deployment wajib:

HTTPS

Firewall

Environment Variables

Least Privilege

Secret Management

Tidak boleh menyimpan credential pada repository.

---

# 18. Acceptance Criteria

□ Frontend dapat di-deploy sendiri.

□ Backend dapat di-deploy sendiri.

□ Database aman.

□ Rollback tersedia.

□ Backup berjalan.

□ Monitoring aktif.

---

# 19. Related Documents

03_TECH_STACK.md

22_DATABASE_DESIGN.md

23_API_SPECIFICATION.md

24_FRONTEND_ARCHITECTURE.md

25_BACKEND_ARCHITECTURE.md

26_SECURITY.md

28_TESTING_QA.md

---

# 20. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.2 | 2026-07-15 | Deployment Architecture revised for Headless Commerce |

---

END OF DOCUMENT