# GHEVERHAN Commerce Platform

# 15_CUSTOMER_ACCOUNT.md

Version: 1.1

Status: Approved

Owner: Product Team

Last Updated: 2026-07-15

---

# 1. Purpose

Customer Account memungkinkan pelanggan mengelola seluruh informasi pribadi, alamat, preferensi, serta riwayat aktivitas belanja secara mandiri.

Modul ini menjadi pusat layanan mandiri (Self-Service Center) bagi pelanggan setelah berhasil melakukan autentikasi.

---

# 2. Scope

Customer Account bertanggung jawab terhadap:

- Profile
- Shipping Address
- Order History
- Account Settings
- Password Change
- Notification Preferences
- Wishlist (Growth)
- Saved Payment (Growth)

Customer Account tidak bertanggung jawab terhadap:

- Authentication
- Checkout
- Payment Processing
- Order Processing

---

# 3. Business Value

★★★★★

Customer Account meningkatkan pengalaman pelanggan dengan memberikan akses mandiri terhadap seluruh informasi akun dan riwayat transaksi.

---

# 4. Business Priority

★★★★★

Core Commerce Feature

---

# 5. Implementation Level

## 🟢 MVP

- Profile
- Shipping Addresses
- Order History
- Account Settings
- Change Password
- Notification Preferences

---

## 🟡 Growth

- Wishlist
- Saved Payment Method
- Recently Viewed Products
- Download Invoice

---

## 🔵 Enterprise

- Loyalty Program
- Membership Tier
- Reward Points
- Subscription Management

---

# 6. User Roles

Customer

---

# 7. User Stories

As a Customer

I want to update my profile

So that my personal information remains accurate.

---

As a Customer

I want to manage multiple shipping addresses

So that checkout becomes faster.

---

As a Customer

I want to view my order history

So that I can track previous purchases.

---

# 8. Business Workflow

Login

↓

Customer Dashboard

↓

Select Menu

↓

View / Edit Data

↓

Save

↓

Data Updated

---

# 9. State Machine

Registered

↓

Verified

↓

Active

↓

Updated

↓

Inactive (Future)

---

# 10. Information Architecture

Customer Account

├── Dashboard

├── Profile

├── Shipping Addresses

├── Order History

├── Notification Preferences

├── Account Settings

├── Wishlist (Growth)

└── Saved Payment (Growth)

---

# 11. Functional Requirements

## Profile

FR-P001

Customer dapat melihat profil.

FR-P002

Customer dapat mengubah nama.

FR-P003

Customer dapat mengubah nomor telepon.

FR-P004

Customer dapat mengubah foto profil.

---

## Address

FR-A001

Customer dapat menambahkan alamat.

FR-A002

Customer dapat mengubah alamat.

FR-A003

Customer dapat menghapus alamat.

FR-A004

Customer dapat memilih alamat utama.

---

## Order History

FR-O001

Customer dapat melihat riwayat pesanan.

FR-O002

Customer dapat membuka detail pesanan.

FR-O003

Customer dapat melihat status pesanan.

---

## Settings

FR-S001

Customer dapat mengubah password.

FR-S002

Customer dapat mengatur preferensi notifikasi.

---

# 12. Non Functional Requirements

NFR-001

Dashboard dimuat kurang dari 2 detik.

NFR-002

Perubahan profil tersimpan dengan aman.

NFR-003

Alamat tervalidasi sebelum disimpan.

NFR-004

Seluruh halaman responsif.

---

# 13. Domain Events

ProfileUpdated

↓

AddressAdded

↓

AddressUpdated

↓

PasswordChanged

↓

NotificationPreferenceUpdated

---

# 14. Dependencies

Depends On

- Authentication

Related

- Shopping Cart
- Checkout
- Order Management
- Notification

---

# 15. Acceptance Criteria

□ Profil dapat diperbarui.

□ Alamat dapat dikelola.

□ Riwayat pesanan dapat dilihat.

□ Password dapat diubah.

□ Preferensi notifikasi dapat diubah.

---

# 16. Out of Scope

MVP tidak mencakup:

- Loyalty Program
- Reward Points
- Membership
- Subscription
- Saved Payment Method

---

# 17. Future Enhancements

- Loyalty Dashboard

- Membership

- Reward Points

- Wishlist

- Recently Viewed Products

- Saved Payment Method

---

# 18. Related Documents

14_AUTHENTICATION.md

16_SHOPPING_CART.md

17_CHECKOUT.md

18_ORDER_MANAGEMENT.md

21_NOTIFICATION.md

22_DATABASE_DESIGN.md

---

# 19. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.1 | 2026-07-15 | Customer Account Blueprint |

---

END OF DOCUMENT