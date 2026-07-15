# GHEVERHAN Commerce Platform

# 26_SECURITY.md

Version: 1.1

Status: Approved

Owner: Engineering Team

Last Updated: 2026-07-15

---

# 1. Purpose

Dokumen ini mendefinisikan prinsip keamanan GHEVERHAN Commerce Platform.

Security bukan fitur tambahan, tetapi bagian dari seluruh siklus pengembangan aplikasi.

Seluruh modul wajib mengikuti kebijakan keamanan yang dijelaskan pada dokumen ini.

---

# 2. Security Goals

Platform harus:

- Confidential
- Integrity
- Availability
- Accountability
- Privacy

Keamanan selalu diprioritaskan tanpa mengorbankan pengalaman pengguna secara berlebihan.

---

# 3. Security Principles

Seluruh sistem mengikuti prinsip:

Secure by Default

Least Privilege

Defense in Depth

Zero Trust

Fail Secure

Input Validation

Output Encoding

Security by Design

---

# 4. Authentication Security

Authentication wajib:

- Password di-hash menggunakan algoritma yang direkomendasikan Laravel.
- Email verification.
- Password reset menggunakan token sementara.
- Session aman.
- Logout menghapus session aktif.

Growth:

- Multi Factor Authentication (MFA)

---

# 5. Authorization

Hak akses menggunakan:

Role

↓

Permission

↓

Policy

Seluruh akses sensitif harus melalui Authorization Policy.

Tidak boleh mengandalkan pengecekan role di frontend.

---

# 6. Input Validation

Seluruh request harus divalidasi.

Gunakan Form Request Validation Laravel.

Tidak boleh mempercayai data dari client.

---

# 7. Output Security

Output harus:

- disanitasi bila diperlukan
- tidak membocorkan informasi internal
- tidak menampilkan stack trace

---

# 8. Database Security

Gunakan:

- Parameter Binding
- Foreign Key
- Constraint
- Soft Delete sesuai kebutuhan

Jangan menggunakan query mentah tanpa alasan yang jelas.

---

# 9. File Upload Security

File upload wajib:

- Validasi tipe file
- Validasi ukuran file
- Rename file
- Simpan di lokasi yang aman

Eksekusi file yang diunggah pengguna tidak diperbolehkan.

---

# 10. API Security

API harus:

- HTTPS
- Authentication
- Authorization
- Rate Limiting
- Request Validation

Endpoint sensitif harus diaudit.

---

# 11. Session Security

Session harus:

- Expire otomatis
- Aman terhadap Session Fixation
- Menggunakan Secure Cookie
- Menggunakan HttpOnly Cookie

---

# 12. CSRF Protection

Seluruh form yang menggunakan session wajib memiliki CSRF Protection.

API berbasis token tidak menggunakan CSRF, tetapi tetap memerlukan autentikasi yang sesuai.

---

# 13. XSS Protection

Frontend wajib:

- Escape output secara default.
- Tidak merender HTML dari input pengguna tanpa sanitasi.

---

# 14. SQL Injection Prevention

Seluruh query menggunakan:

- Eloquent ORM
- Query Builder

Raw query hanya digunakan bila benar-benar diperlukan dan tetap menggunakan parameter binding.

---

# 15. Secrets Management

Data sensitif tidak boleh disimpan di repository.

Gunakan:

- .env
- Secret Manager (Growth/Enterprise)

Contoh:

- APP_KEY
- Database Password
- Tripay API Key
- SMTP Password

---

# 16. Logging & Audit

Aktivitas penting dicatat.

Contoh:

- Login
- Logout
- Password Change
- Order Status Change
- Payment Confirmation
- Admin Actions

Log tidak boleh menyimpan password atau data sensitif.

---

# 17. Backup & Recovery

MVP

- Backup harian.

Growth

- Backup inkremental.

Enterprise

- Point-in-Time Recovery.

Backup harus diuji proses restorasinya secara berkala.

---

# 18. Third Party Integration

Integrasi eksternal harus:

- Menggunakan HTTPS.
- Memvalidasi signature/webhook.
- Menggunakan timeout.
- Memiliki mekanisme retry bila sesuai.

Integrasi dilakukan melalui Adapter Layer.

---

# 19. Incident Response

Jika ditemukan insiden keamanan:

1. Identifikasi.
2. Isolasi.
3. Analisis.
4. Perbaikan.
5. Pemulihan.
6. Dokumentasi.

---

# 20. Security Checklist

□ HTTPS aktif.

□ Password di-hash.

□ Authorization Policy digunakan.

□ Input tervalidasi.

□ CSRF aktif.

□ XSS dicegah.

□ SQL Injection dicegah.

□ Secrets tidak berada di repository.

□ Audit Log berjalan.

---

# 21. Acceptance Criteria

□ Seluruh modul mengikuti Security Principles.

□ Endpoint sensitif terlindungi.

□ Data sensitif tidak terekspos.

□ Audit berjalan.

□ Integrasi eksternal tervalidasi.

---

# 22. Related Documents

14_AUTHENTICATION.md

22_DATABASE_DESIGN.md

23_API_SPECIFICATION.md

25_BACKEND_ARCHITECTURE.md

27_DEPLOYMENT.md

30_CODING_STANDARDS.md

---

# 23. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.1 | 2026-07-15 | Security Blueprint |

---

END OF DOCUMENT