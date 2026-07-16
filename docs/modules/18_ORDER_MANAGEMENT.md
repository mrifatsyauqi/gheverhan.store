# GHEVERHAN Commerce Platform

# 18_ORDER_MANAGEMENT.md

Version: 1.1

Status: Approved

Owner: Product Team

Last Updated: 2026-07-15

---

# 1. Purpose

Order Management bertanggung jawab mengelola seluruh siklus hidup pesanan setelah Checkout berhasil membuat Order.

Order menjadi sumber utama informasi transaksi yang digunakan oleh Payment, Shipping, Notification, Customer Account, dan Dashboard Admin.

Order merupakan Single Source of Truth untuk status transaksi pelanggan.

---

# 2. Scope

Order Management bertanggung jawab terhadap:

- Order
- Order Items
- Order Status
- Order Timeline
- Order History
- Order Cancellation
- Invoice Reference
- Refund Reference

Order Management tidak bertanggung jawab terhadap:

- Payment Processing
- Shipment Processing
- Checkout
- Product Management

---

# 3. Business Value

★★★★★

Order Management menjadi pusat operasional transaksi dan memastikan seluruh proses bisnis berjalan secara konsisten.

---

# 4. Business Priority

★★★★★

Critical Feature

Core Commerce Module

---

# 5. Implementation Level

## 🟢 MVP

- Order Creation
- Order Detail
- Order Status
- Order Timeline
- Order Cancellation
- Customer Order History

---

## 🟡 Growth

- Partial Cancellation
- Refund Request
- Invoice Download
- Internal Notes

---

## 🔵 Enterprise

- Split Order
- Order Merge
- Return Merchandise Authorization (RMA)
- Exchange Order

---

# 6. User Roles

Customer

Administrator

Warehouse Staff

Customer Service

Owner

---

# 7. User Stories

As a Customer

I want to track my order

So that I know its current status.

---

As an Administrator

I want to manage customer orders

So that fulfillment runs smoothly.

---

# 8. Business Workflow

Checkout

↓

Order Created

↓

Waiting Payment

↓

Paid

↓

Processing

↓

Ready to Ship

↓

Shipped

↓

Delivered

↓

Completed

---

# 9. State Machine

Draft (Internal)

↓

Pending Payment

↓

Paid

↓

Processing

↓

Shipped

↓

Delivered

↓

Completed

↓

Cancelled

Refunded (Growth)

---

# 10. Information Architecture

Order

├── Order Information

├── Customer

├── Order Items

├── Shipping

├── Payment

├── Timeline

├── Status

└── Notes

---

# 11. Order Model

Order

├── Order Number

├── Customer

├── Items

├── Shipping Address

├── Shipping Method

├── Payment Method

├── Totals

├── Status

├── Timeline

└── Metadata

---

# 12. Functional Requirements

## Order

FR-O001

Sistem membuat Order setelah Checkout berhasil divalidasi.

FR-O002

Order memiliki nomor unik.

FR-O003

Order tidak dapat diubah setelah pembayaran berhasil.

---

## Status

FR-S001

Status Order diperbarui secara otomatis oleh Payment dan Shipping.

FR-S002

Status dapat dilihat oleh Customer.

---

## Timeline

FR-T001

Seluruh perubahan status dicatat.

FR-T002

Customer dapat melihat timeline pesanan.

---

## Cancellation

FR-C001

Customer dapat membatalkan pesanan sebelum diproses.

FR-C002

Administrator dapat membatalkan pesanan sesuai kebijakan.

---

# 13. Non Functional Requirements

NFR-001

Nomor Order harus unik.

NFR-002

Perubahan status tercatat.

NFR-003

Riwayat Order tidak boleh hilang.

NFR-004

Timeline selalu berurutan.

---

# 14. Business Rules

BR-001

Order hanya dibuat dari Checkout yang valid.

BR-002

Order Number bersifat unik.

BR-003

Status hanya dapat berubah sesuai State Machine.

BR-004

Pesanan yang sudah dikirim tidak dapat dibatalkan.

BR-005

Seluruh perubahan status harus tercatat.

---

# 15. Domain Events

OrderCreated

↓

PaymentConfirmed

↓

OrderProcessed

↓

ShipmentCreated

↓

OrderDelivered

↓

OrderCompleted

↓

OrderCancelled

---

# 16. Dependencies

Depends On

- Checkout

Related

- Payment

- Shipping

- Notification

- Customer Account

- Admin Panel

---

# 17. Acceptance Criteria

□ Order berhasil dibuat.

□ Nomor Order unik.

□ Timeline berjalan.

□ Status berubah sesuai aturan.

□ Customer dapat melihat riwayat pesanan.

□ Admin dapat mengelola Order.

---

# 18. Out of Scope

MVP tidak mencakup:

- Split Order

- Return Merchandise Authorization

- Exchange

- Refund Workflow

---

# 19. Future Enhancements

- Refund Management

- Return Management

- Exchange Order

- Invoice Generator

- ERP Integration

---

# 20. Related Documents

17_CHECKOUT.md

19_PAYMENT.md

20_SHIPPING.md

21_NOTIFICATION.md

22_DATABASE_DESIGN.md

23_API_SPECIFICATION.md

25_BACKEND_ARCHITECTURE.md

---

# 21. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.1 | 2026-07-15 | Order Management Blueprint |

---

END OF DOCUMENT