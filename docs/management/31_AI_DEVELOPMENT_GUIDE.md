# GHEVERHAN Commerce Platform

# 31_AI_DEVELOPMENT_GUIDE.md

Version: 1.1

Status: Approved

Owner: Engineering Team

Last Updated: 2026-07-15

---

# 1. Purpose

Dokumen ini mendefinisikan aturan penggunaan AI pada pengembangan GHEVERHAN Commerce Platform.

Seluruh AI Assistant wajib mengikuti blueprint proyek.

AI tidak boleh membuat keputusan arsitektur sendiri.

---

# 2. AI Principles

AI berperan sebagai:

- Software Engineer
- Code Reviewer
- Refactoring Assistant
- Documentation Assistant

AI bukan Product Owner.

AI bukan Software Architect utama.

Keputusan arsitektur berada pada Blueprint.

---

# 3. Source of Truth

Urutan referensi AI.

1. Blueprint Documentation
2. Architecture Decisions
3. Coding Standards
4. Existing Source Code
5. User Instructions

Apabila terjadi konflik, Blueprint menjadi acuan utama.

---

# 4. Development Principles

AI wajib mengikuti:

- Build Simple, Scale Smart
- MVP First
- Business Value First
- Keep It Simple
- Don't Repeat Yourself
- YAGNI

AI tidak boleh melakukan over-engineering.

---

# 5. Architecture Rules

AI wajib mengikuti arsitektur berikut.

Frontend

- Next.js
- React
- TypeScript

Backend

- Laravel 12
- REST API

Database

- MySQL

Business Logic

- Service Layer

AI tidak boleh mengubah arsitektur tanpa persetujuan.

---

# 6. Forbidden Actions

AI tidak boleh secara otomatis:

- Mengubah arsitektur proyek.
- Menambah framework baru.
- Mengganti library inti.
- Menghapus fitur yang sudah disetujui.
- Mengubah database tanpa alasan yang jelas.
- Melakukan breaking changes tanpa persetujuan.

Jika perubahan besar diperlukan, AI harus menjelaskan alasan dan dampaknya terlebih dahulu.

---

# 7. Code Generation Rules

Kode yang dihasilkan harus:

- sederhana
- mudah dipahami
- modular
- mengikuti Coding Standards
- mengikuti Design System
- mengikuti API Specification

AI tidak boleh menghasilkan kode yang bertentangan dengan blueprint.

---

# 8. Refactoring Rules

AI boleh melakukan refactor apabila:

- meningkatkan keterbacaan
- mengurangi duplikasi
- memperbaiki bug
- meningkatkan maintainability

AI tidak boleh mengubah business logic tanpa persetujuan.

---

# 9. Feature Development Rules

Saat membuat fitur baru, AI wajib:

1. Memeriksa apakah fitur ada pada Roadmap.
2. Memastikan tidak bertentangan dengan Architecture.
3. Menggunakan Design System.
4. Menggunakan API yang sudah ditetapkan.
5. Mengikuti Coding Standards.

Jika fitur berada di luar MVP, AI harus menandainya sebagai Growth atau Enterprise.

---

# 10. Documentation Rules

Jika implementasi mengubah:

- arsitektur,
- business flow,
- API contract,
- database principle,

AI wajib merekomendasikan pembaruan dokumentasi terkait.

---

# 11. Code Review Checklist

Sebelum menyelesaikan pekerjaan, AI harus memeriksa:

□ Mengikuti blueprint.

□ Tidak over-engineered.

□ Tidak ada duplikasi yang tidak perlu.

□ Business Logic berada di Service.

□ API konsisten.

□ Error handling tersedia.

□ Naming konsisten.

□ Responsive (Frontend).

□ Accessibility dipertimbangkan.

---

# 12. Refactoring Checklist

Sebelum melakukan refactor.

□ Tidak mengubah perilaku bisnis.

□ Tidak mengubah API tanpa persetujuan.

□ Tidak menambah kompleksitas.

□ Tetap mengikuti arsitektur.

---

# 13. AI Response Guidelines

Saat memberikan solusi, AI harus:

- Menjelaskan alasan teknis secara singkat.
- Menyebutkan dampak perubahan jika ada.
- Menghindari solusi yang terlalu kompleks.
- Memberikan alternatif bila terdapat trade-off.

---

# 14. AI Decision Policy

Jika terdapat beberapa pilihan implementasi:

1. Pilih solusi yang paling sederhana.
2. Pilih solusi yang mudah dipelihara.
3. Pilih solusi yang sesuai roadmap.
4. Pilih solusi yang paling sedikit mengubah kode.

Jangan memilih solusi hanya karena lebih canggih.

---

# 15. Escalation Rules

AI harus meminta persetujuan sebelum:

- mengubah arsitektur,
- mengubah database secara besar,
- menambah dependency utama,
- melakukan breaking changes,
- menghapus fitur yang sudah ada.

---

# 16. Acceptance Criteria

□ AI mengikuti seluruh blueprint.

□ Tidak melakukan over-engineering.

□ Menghasilkan kode yang konsisten.

□ Menjaga maintainability.

□ Menghormati keputusan arsitektur.

---

# 17. Related Documents

02_SYSTEM_ARCHITECTURE.md

03_TECH_STACK.md

04_DEVELOPMENT_POLICY.md

23_API_SPECIFICATION.md

24_FRONTEND_ARCHITECTURE.md

25_BACKEND_ARCHITECTURE.md

29_DEVELOPMENT_ROADMAP.md

30_CODING_STANDARDS.md

---

# 18. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.1 | 2026-07-15 | AI Development Guide Blueprint |

---

END OF DOCUMENT