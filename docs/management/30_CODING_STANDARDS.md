# GHEVERHAN Commerce Platform

# 30_CODING_STANDARDS.md

Version: 1.1

Status: Approved

Owner: Engineering Team

Last Updated: 2026-07-15

---

# 1. Purpose

Dokumen ini mendefinisikan standar penulisan kode pada GHEVERHAN Commerce Platform.

Tujuannya adalah memastikan seluruh kode:

- konsisten
- mudah dibaca
- mudah dipelihara
- mudah dikembangkan
- mudah dipahami oleh AI maupun developer.

Standar ini berlaku untuk seluruh repository.

---

# 2. Coding Principles

Seluruh pengembangan mengikuti prinsip:

- Readability First
- Simplicity First
- Consistency
- Single Responsibility
- Don't Repeat Yourself (DRY)
- Keep It Simple (KISS)
- You Aren't Gonna Need It (YAGNI)

Kode yang sederhana lebih diprioritaskan daripada kode yang terlalu pintar.

---

# 3. General Rules

Seluruh kode harus:

- memiliki nama yang jelas
- mudah dipahami
- tidak menggunakan singkatan yang ambigu
- menghindari magic number
- menghindari hardcoded value
- menggunakan konfigurasi bila memungkinkan

---

# 4. Naming Convention

## Class

PascalCase

Contoh:

ProductService

OrderController

PaymentAdapter

---

## Method

camelCase

Contoh:

createOrder()

calculateShipping()

processPayment()

---

## Variable

camelCase

Contoh:

productPrice

orderTotal

customerName

---

## Constant

UPPER_SNAKE_CASE

Contoh:

DEFAULT_PAGE_SIZE

MAX_UPLOAD_SIZE

---

## Database

Table

snake_case plural

products

orders

customers

Column

snake_case

product_name

created_at

updated_at

---

# 5. File Organization

Satu file memiliki satu tanggung jawab.

Contoh:

ProductService

↓

Product Business Logic

Bukan:

ProductService

↓

Order Logic

↓

Payment Logic

↓

Shipping Logic

---

# 6. Function Guidelines

Function harus:

- pendek
- fokus
- mudah dipahami

Idealnya:

20–40 baris.

Jika terlalu panjang, pecah menjadi method yang lebih kecil.

---

# 7. Comment Policy

Komentar digunakan untuk menjelaskan:

- alasan bisnis
- keputusan arsitektur
- algoritma kompleks

Jangan menulis komentar yang hanya mengulang isi kode.

Buruk:

```php
// Increment counter
$counter++;
```

Baik:

```php
// Harga promosi tidak boleh lebih tinggi dari harga normal.
```

---

# 8. Error Handling

Gunakan Exception yang jelas.

Contoh:

ValidationException

BusinessException

PaymentException

ShippingException

Jangan menggunakan Exception umum tanpa alasan.

---

# 9. Logging

Log hanya digunakan untuk:

- error
- warning
- audit
- informasi penting

Jangan memenuhi log dengan informasi yang tidak berguna.

---

# 10. API Standards

Controller hanya bertanggung jawab terhadap:

- Request
- Validation
- Authorization
- Response

Business Logic berada pada Service.

---

# 11. Frontend Standards

Frontend menggunakan:

- React Functional Component
- TypeScript
- Tailwind CSS

Gunakan:

- Custom Hook
- Reusable Component
- Composition

Hindari component yang terlalu besar.

---

# 12. Backend Standards

Gunakan:

Controller

↓

Service

↓

Model

↓

Database

Business Logic tidak berada pada:

- Controller
- Model
- Route

---

# 13. Git Standards

Gunakan Conventional Commit.

Contoh:

feat:

fix:

refactor:

docs:

style:

test:

chore:

---

# 14. Code Review Checklist

Sebelum merge:

□ Kode mudah dipahami.

□ Tidak ada duplikasi.

□ Naming konsisten.

□ Tidak ada hardcode.

□ Error handling tersedia.

□ Mengikuti blueprint.

---

# 15. Refactoring Rules

Refactoring dilakukan apabila:

- meningkatkan keterbacaan
- mengurangi duplikasi
- menyederhanakan struktur

Refactoring tidak boleh mengubah perilaku bisnis tanpa persetujuan.

---

# 16. Performance Rules

Optimasi dilakukan berdasarkan bukti.

Jangan melakukan optimasi dini.

Gunakan:

- Pagination
- Lazy Loading
- Cache bila diperlukan

---

# 17. Security Rules

Seluruh input divalidasi.

Seluruh output disanitasi bila diperlukan.

Credential tidak boleh di-hardcode.

Mengacu pada:

26_SECURITY.md

---

# 18. Acceptance Criteria

□ Naming konsisten.

□ Struktur konsisten.

□ Business Logic berada di Service.

□ React Component reusable.

□ Mengikuti seluruh standar.

---

# 19. Related Documents

03_TECH_STACK.md

23_API_SPECIFICATION.md

24_FRONTEND_ARCHITECTURE.md

25_BACKEND_ARCHITECTURE.md

26_SECURITY.md

31_AI_DEVELOPMENT_GUIDE.md

---

# 20. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.1 | 2026-07-15 | Coding Standards Blueprint |

---

END OF DOCUMENT