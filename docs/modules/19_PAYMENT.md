# GHEVERHAN Commerce Platform

# 19_PAYMENT.md

Version: 1.1

Status: Approved

Owner: Product Team

Last Updated: 2026-07-15

---

# 1. Purpose

Payment bertanggung jawab mengelola seluruh proses pembayaran setelah Order berhasil dibuat.

Payment menjadi penghubung antara GHEVERHAN Commerce Platform dengan Payment Gateway.

Payment tidak membuat Order dan tidak mengelola proses pengiriman.

---

# 2. Scope

Payment bertanggung jawab terhadap:

- Payment Method
- Payment Transaction
- Payment Status
- Payment Gateway Integration
- Callback
- Webhook
- Payment Expiration

Payment tidak bertanggung jawab terhadap:

- Checkout
- Shipping
- Order Fulfillment
- Refund Process (Growth)

---

# 3. Business Value

★★★★★

Payment memastikan pelanggan dapat menyelesaikan transaksi secara aman dan mudah.

---

# 4. Business Priority

★★★★★

Critical Feature

Core Commerce Module

---

# 5. Implementation Level

## 🟢 MVP

- Tripay Integration
- Virtual Account
- QRIS
- E-Wallet
- Bank Transfer
- Callback
- Webhook
- Payment Status

---

## 🟡 Growth

- Saved Payment Method
- Auto Retry
- Payment Reminder

---

## 🔵 Enterprise

- Multi Gateway
- Smart Gateway Routing
- Auto Failover
- Installment

---

# 6. User Roles

Customer

Administrator

Finance

---

# 7. User Stories

As a Customer

I want to choose my preferred payment method

So that I can complete my purchase conveniently.

---

As an Administrator

I want payment status updated automatically

So that order processing can begin immediately.

---

# 8. Business Workflow

Order Created

↓

Select Payment

↓

Redirect to Gateway

↓

Customer Pays

↓

Gateway Callback

↓

Webhook Validation

↓

Payment Confirmed

↓

Order Updated

---

# 9. State Machine

Pending

↓

Waiting Payment

↓

Paid

↓

Expired

↓

Failed

↓

Cancelled

Refunded (Growth)

---

# 10. Information Architecture

Payment

├── Payment Transaction

├── Payment Method

├── Gateway

├── Callback

├── Webhook

├── Status

└── Logs

---

# 11. Payment Model

Payment

├── Order

├── Transaction ID

├── Gateway Reference

├── Payment Method

├── Amount

├── Status

├── Paid At

└── Metadata

---

# 12. Functional Requirements

## Payment

FR-P001

Customer dapat memilih metode pembayaran.

FR-P002

Sistem membuat transaksi pembayaran.

FR-P003

Customer diarahkan ke Payment Gateway.

---

## Callback

FR-C001

Sistem menerima callback dari gateway.

FR-C002

Signature callback harus divalidasi.

FR-C003

Order diperbarui hanya setelah callback valid.

---

## Webhook

FR-W001

Webhook diproses secara idempotent.

FR-W002

Webhook dicatat pada log.

---

# 13. Non Functional Requirements

NFR-001

Validasi callback aman.

NFR-002

Webhook diproses kurang dari 5 detik.

NFR-003

Tidak boleh terjadi pembayaran ganda.

NFR-004

Seluruh transaksi tercatat.

---

# 14. Business Rules

BR-001

Payment hanya dibuat untuk Order yang valid.

BR-002

Order tidak boleh diproses sebelum status Paid.

BR-003

Callback tanpa signature valid ditolak.

BR-004

Webhook yang sama tidak boleh diproses dua kali.

BR-005

Status pembayaran hanya berubah melalui gateway atau aksi admin yang sah.

---

# 15. Domain Events

PaymentCreated

↓

PaymentPending

↓

PaymentConfirmed

↓

PaymentExpired

↓

PaymentFailed

↓

OrderUpdated

---

# 16. Dependencies

Depends On

- Checkout
- Order Management

Related

- Shipping
- Notification
- Finance

---

# 17. Acceptance Criteria

□ Customer dapat memilih metode pembayaran.

□ Transaksi pembayaran berhasil dibuat.

□ Callback tervalidasi.

□ Webhook berjalan.

□ Status Order diperbarui otomatis.

□ Log transaksi tersimpan.

---

# 18. Out of Scope

MVP tidak mencakup:

- Refund
- Installment
- Split Payment
- Multi Gateway
- Subscription Billing

---

# 19. Future Enhancements

- Multi Gateway

- Smart Routing

- Refund Automation

- Payment Analytics

- Installment

---

# 20. Related Documents

17_CHECKOUT.md

18_ORDER_MANAGEMENT.md

20_SHIPPING.md

21_NOTIFICATION.md

22_DATABASE_DESIGN.md

23_API_SPECIFICATION.md

25_BACKEND_ARCHITECTURE.md

---

# 21. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.1 | 2026-07-15 | Payment Blueprint |

---

END OF DOCUMENT