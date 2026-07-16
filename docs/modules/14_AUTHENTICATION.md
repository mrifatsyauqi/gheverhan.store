# GHEVERHAN Commerce Platform

# 14_AUTHENTICATION.md

Version: 1.1

Status: Approved

Owner: Product Team

Last Updated: 2026-07-15

---

# 1. Purpose

Authentication bertanggung jawab untuk mengidentifikasi pengguna yang mengakses GHEVERHAN Commerce Platform.

Modul ini memastikan proses login, registrasi, dan pengelolaan sesi berjalan secara aman dan konsisten.

Authentication hanya mengelola identitas pengguna.

Hak akses dikelola oleh Authorization.

---

# 2. Scope

Authentication bertanggung jawab terhadap:

- Login
- Register
- Logout
- Forgot Password
- Reset Password
- Email Verification
- Google Login
- Session Management

Authentication tidak bertanggung jawab terhadap:

- Customer Profile
- User Permission
- Role Management
- Admin Dashboard

---

# 3. Business Value

★★★★★

Authentication merupakan pintu masuk seluruh sistem dan fondasi keamanan platform.

---

# 4. Business Priority

★★★★★

Critical Feature

Core Platform Module

---

# 5. Implementation Level

## 🟢 MVP

- Email Register
- Email Login
- Google Login
- Logout
- Forgot Password
- Reset Password
- Email Verification

---

## 🟡 Growth

- OTP Login
- Remember Device
- Session Management
- Login History

---

## 🔵 Enterprise

- Multi Factor Authentication (MFA)
- Single Sign-On (SSO)
- Enterprise Identity Provider
- Passwordless Login

---

# 6. User Roles

Guest

Customer

Administrator

Owner

---

# 7. User Stories

As a Customer

I want to login easily

So that I can shop without creating duplicate accounts.

---

As a Customer

I want to reset my password

So that I can recover my account.

---

# 8. Business Workflow

Guest

↓

Register / Login

↓

Email Verification

↓

Authenticated

↓

Use Platform

↓

Logout

---

# 9. State Machine

Guest

↓

Registered

↓

Verified

↓

Authenticated

↓

Logged Out

↓

Authenticated Again

---

# 10. Information Architecture

Authentication

├── Login

├── Register

├── Google Login

├── Forgot Password

├── Reset Password

├── Email Verification

└── Session

---

# 11. Functional Requirements

## Registration

FR-R001

Customer dapat membuat akun menggunakan email.

FR-R002

Email harus unik.

FR-R003

Password harus memenuhi kebijakan keamanan.

---

## Login

FR-L001

Customer dapat login menggunakan email.

FR-L002

Customer dapat login menggunakan Google.

FR-L003

Customer dapat logout.

---

## Password

FR-P001

Customer dapat meminta reset password.

FR-P002

Customer dapat mengubah password melalui tautan reset.

---

## Verification

FR-V001

Email harus diverifikasi sebelum fitur tertentu dapat digunakan.

---

# 12. Non Functional Requirements

NFR-001

Login maksimal 2 detik.

NFR-002

Password disimpan menggunakan hashing.

NFR-003

Session aman.

NFR-004

Proteksi brute force diterapkan.

---

# 13. Security Principles

Authentication mengikuti prinsip:

- Secure by Default
- Least Privilege
- Strong Password Policy
- Session Protection
- HTTPS Only

---

# 14. Domain Events

UserRegistered

↓

EmailVerified

↓

UserLoggedIn

↓

PasswordResetRequested

↓

PasswordChanged

↓

UserLoggedOut

---

# 15. Dependencies

Depends On

- Google OAuth
- Email Service

Related

- Customer Account
- Admin Panel
- Notification

---

# 16. Acceptance Criteria

□ Customer dapat registrasi.

□ Customer dapat login.

□ Google Login berjalan.

□ Reset password berjalan.

□ Email verification berjalan.

□ Logout berjalan.

---

# 17. Out of Scope

MVP tidak mencakup:

- MFA
- SSO
- Passwordless Login
- Biometric Login
- Social Login selain Google

---

# 18. Future Enhancements

- MFA
- OTP Login
- Magic Link
- Enterprise SSO
- Device Management

---

# 19. Related Documents

09_ADMIN_PANEL.md

15_CUSTOMER_ACCOUNT.md

21_NOTIFICATION.md

25_BACKEND_ARCHITECTURE.md

30_CODING_STANDARDS.md

---

# 20. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.1 | 2026-07-15 | Authentication Blueprint |

---

END OF DOCUMENT