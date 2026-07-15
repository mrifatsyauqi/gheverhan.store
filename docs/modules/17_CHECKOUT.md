# GHEVERHAN Commerce Platform

# 17_CHECKOUT.md

Version: 1.1

Status: Approved

Owner: Product Team

Last Updated: 2026-07-15

---

# 1. Purpose

Checkout merupakan proses utama yang mengubah Shopping Cart menjadi Order yang siap diproses.

Checkout mengoordinasikan seluruh validasi transaksi, mulai dari alamat pengiriman, metode pengiriman, metode pembayaran, hingga konfirmasi pesanan.

Checkout tidak memproses pembayaran secara langsung, tetapi meneruskan transaksi ke Payment Module.

---

# 2. Scope

Checkout bertanggung jawab terhadap:

- Checkout Session
- Shipping Address
- Shipping Method
- Payment Method Selection
- Order Summary
- Voucher Validation
- Checkout Validation
- Place Order

Checkout tidak bertanggung jawab terhadap:

- Payment Processing
- Shipment Processing
- Invoice
- Refund

---

# 3. Business Value

★★★★★

Checkout merupakan proses paling kritis dalam perjalanan pelanggan.

Pengalaman checkout yang sederhana dan cepat akan meningkatkan tingkat konversi.

---

# 4. Business Priority

★★★★★

Critical Feature

Core Commerce Module

---

# 5. Implementation Level

## 🟢 MVP

- Checkout dari Cart
- Pilih Alamat
- Pilih Kurir
- Pilih Metode Pembayaran
- Ringkasan Pesanan
- Place Order

---

## 🟡 Growth

- Guest Checkout
- Multiple Address
- Save Payment Method
- Gift Notes

---

## 🔵 Enterprise

- One Click Checkout
- Split Shipment
- Subscription Checkout
- Smart Checkout

---

# 6. User Roles

Customer

Guest (Growth)

---

# 7. User Stories

As a Customer

I want to complete checkout easily

So that I can finish my purchase quickly.

---

As a Customer

I want to review my order before payment

So that I avoid mistakes.

---

# 8. Business Workflow

Shopping Cart

↓

Checkout

↓

Select Address

↓

Select Shipping

↓

Select Payment

↓

Review Order

↓

Place Order

↓

Order Created

↓

Redirect to Payment

---

# 9. State Machine

Cart

↓

Checkout Started

↓

Validated

↓

Order Created

↓

Waiting Payment

↓

Completed (Payment Module)

---

# 10. Information Architecture

Checkout

├── Customer

├── Shipping Address

├── Shipping Method

├── Payment Method

├── Voucher

├── Order Summary

└── Place Order

---

# 11. Checkout Session

Checkout menggunakan satu Checkout Session.

Checkout Session menyimpan:

- Customer
- Cart
- Shipping Address
- Shipping Method
- Payment Method
- Voucher
- Totals

Session hanya berlaku selama proses checkout.

---

# 12. Functional Requirements

## Checkout

FR-C001

Customer dapat memulai checkout dari Shopping Cart.

FR-C002

Sistem hanya memproses produk yang valid.

FR-C003

Checkout tidak dapat dilanjutkan jika keranjang kosong.

---

## Address

FR-A001

Customer dapat memilih alamat pengiriman.

FR-A002

Customer dapat menambahkan alamat baru saat checkout.

---

## Shipping

FR-S001

Customer dapat memilih kurir.

FR-S002

Customer dapat memilih layanan pengiriman.

---

## Payment

FR-P001

Customer dapat memilih metode pembayaran.

FR-P002

Metode pembayaran mengikuti konfigurasi aktif.

---

## Order

FR-O001

Customer dapat melihat ringkasan pesanan.

FR-O002

Customer dapat membuat pesanan.

---

# 13. Non Functional Requirements

NFR-001

Checkout selesai kurang dari 5 langkah.

NFR-002

Validasi kurang dari 2 detik.

NFR-003

Total selalu akurat.

NFR-004

Checkout tetap berjalan jika pelanggan kembali dari halaman pembayaran.

---

# 14. Business Rules

BR-001

Produk harus masih tersedia.

BR-002

Harga mengikuti harga terbaru.

BR-003

Voucher divalidasi kembali.

BR-004

Alamat harus valid.

BR-005

Kurir harus aktif.

BR-006

Metode pembayaran harus aktif.

BR-007

Order hanya dibuat satu kali.

---

# 15. Domain Events

CheckoutStarted

↓

ShippingSelected

↓

PaymentSelected

↓

OrderValidated

↓

OrderCreated

↓

RedirectedToPayment

---

# 16. Dependencies

Depends On

- Shopping Cart
- Customer Account
- Product Catalog

Related

- Payment
- Shipping
- Order Management
- Notification

---

# 17. Acceptance Criteria

□ Checkout hanya dapat dilakukan dari cart yang valid.

□ Alamat wajib dipilih.

□ Kurir wajib dipilih.

□ Pembayaran wajib dipilih.

□ Ringkasan pesanan akurat.

□ Order berhasil dibuat.

---

# 18. Out of Scope

MVP tidak mencakup:

- Guest Checkout
- Split Shipment
- Subscription Checkout
- One Click Checkout
- Multi Address Delivery

---

# 19. Future Enhancements

- One Click Checkout

- Smart Checkout

- AI Checkout Assistant

- Subscription Checkout

- Express Checkout

---

# 20. Related Documents

16_SHOPPING_CART.md

18_ORDER_MANAGEMENT.md

19_PAYMENT.md

20_SHIPPING.md

21_NOTIFICATION.md

22_DATABASE_DESIGN.md

23_API_SPECIFICATION.md

---

# 21. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.1 | 2026-07-15 | Checkout Blueprint |

---

END OF DOCUMENT