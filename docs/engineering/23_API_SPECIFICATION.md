# GHEVERHAN Commerce Platform

# 23_API_SPECIFICATION.md

Version: 1.2

Status: Approved

Owner: Engineering Team

Last Updated: 2026-07-15

---

# 1. Purpose

Dokumen ini mendefinisikan standar komunikasi API antara Frontend dan Backend.

API merupakan satu-satunya media komunikasi antara aplikasi Next.js dan Laravel.

Dokumen ini tidak mendokumentasikan seluruh endpoint.

Dokumen ini mendefinisikan standar implementasi.

---

# 2. API Vision

API harus:

- Consistent
- Predictable
- Secure
- Versioned
- Stateless
- Easy to Consume

Frontend tidak boleh mengakses database secara langsung.

---

# 3. High Level Architecture

```text
Next.js

↓

Axios API Client

↓

REST API

↓

Laravel

↓

Database
```

Semua request berasal dari Frontend.

Semua business logic diproses oleh Backend.

---

# 4. API Principles

Seluruh API mengikuti prinsip:

RESTful

Resource Based

Stateless

JSON Only

Version Ready

Consistent Response

Predictable Error

Idempotent jika diperlukan

---

# 5. API Versioning

Seluruh endpoint menggunakan versioning.

Contoh.

```
/api/v1/products

/api/v1/orders

/api/v1/cart
```

Perubahan yang memutus kompatibilitas dilakukan melalui versi baru.

---

# 6. Resource Naming

Gunakan resource.

Contoh.

products

orders

payments

shipments

customers

categories

Jangan menggunakan action pada URL.

Benar.

```
POST /orders
```

Salah.

```
POST /createOrder
```

---

# 7. HTTP Methods

GET

Mengambil data.

POST

Membuat resource.

PUT

Mengganti seluruh resource.

PATCH

Mengubah sebagian resource.

DELETE

Menghapus resource.

---

# 8. Request Format

Request menggunakan JSON.

Contoh.

```json
{
    "product_id": 1,
    "quantity": 2
}
```

Upload file menggunakan multipart/form-data sesuai kebutuhan.

---

# 9. Response Format

Seluruh response mengikuti struktur yang konsisten.

Sukses.

```json
{
  "success": true,
  "message": "Success",
  "data": {}
}
```

Gagal.

```json
{
  "success": false,
  "message": "Validation failed",
  "errors": {}
}
```

---

# 10. HTTP Status Codes

200 OK

201 Created

204 No Content

400 Bad Request

401 Unauthorized

403 Forbidden

404 Not Found

409 Conflict

422 Validation Error

429 Too Many Requests

500 Internal Server Error

---

# 11. Pagination

Gunakan format berikut.

```json
{
  "data": [],
  "meta": {
    "page": 1,
    "per_page": 20,
    "total": 100,
    "last_page": 5
  }
}
```

Semua endpoint list menggunakan pagination.

---

# 12. Filtering

Gunakan query parameter.

Contoh.

```
?category=daster

?brand=gheverhan

?status=active

?price_min=50000

?price_max=100000
```

Tidak membuat endpoint khusus untuk setiap filter.

---

# 13. Sorting

Gunakan.

```
sort=name

direction=asc
```

atau

```
sort=price

direction=desc
```

---

# 14. Searching

Gunakan parameter.

```
search=kaos
```

Search menjadi bagian dari endpoint list.

---

# 15. Authentication

Gunakan Laravel Sanctum.

Frontend memperoleh token/session melalui endpoint autentikasi resmi.

API yang memerlukan autentikasi wajib memverifikasi identitas pengguna.

---

# 16. Authorization

Seluruh endpoint privat menggunakan Authorization Policy.

Hak akses tidak boleh diperiksa hanya di frontend.

---

# 17. Error Handling

Seluruh error menggunakan format yang konsisten.

Jangan mengirim stack trace.

Gunakan Error Code bila diperlukan.

---

# 18. Idempotency

Request yang berpotensi diproses lebih dari sekali wajib bersifat idempotent.

Contoh:

- Payment Callback
- Shipping Webhook

Gunakan Idempotency-Key atau mekanisme lain yang sesuai.

---

# 19. Rate Limiting

Gunakan rate limit berbeda sesuai kategori endpoint.

Authentication:

lebih ketat.

Public API:

standar.

Webhook:

disesuaikan dengan kebutuhan integrasi.

---

# 20. API Documentation

Dokumentasi implementasi menggunakan:

- OpenAPI
- Swagger
- Postman Collection

Blueprint ini hanya menjadi standar.

---

# 21. Security

API wajib menggunakan:

HTTPS

Authentication

Authorization

Input Validation

Output Sanitization

Rate Limiting

Secure Headers

---

# 22. Acceptance Criteria

□ REST API konsisten.

□ JSON digunakan pada seluruh endpoint.

□ Response memiliki format yang sama.

□ Pagination seragam.

□ Error seragam.

□ Authentication berjalan.

□ Authorization diterapkan.

---

# 23. Related Documents

03_TECH_STACK.md

22_DATABASE_DESIGN.md

24_FRONTEND_ARCHITECTURE.md

25_BACKEND_ARCHITECTURE.md

26_SECURITY.md

---

# 24. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.2 | 2026-07-15 | API Specification revised for Headless Commerce |

---

END OF DOCUMENT