# GHEVERHAN Commerce Platform

# 16_SHOPPING_CART.md

Version: 1.1

Status: Approved

Owner: Product Team

Last Updated: 2026-07-15

---

# 1. Purpose

Shopping Cart memungkinkan pelanggan mengumpulkan produk yang ingin dibeli sebelum melanjutkan ke proses Checkout.

Shopping Cart juga bertanggung jawab melakukan validasi awal terhadap produk, stok, harga, dan kuantitas agar transaksi dapat diproses dengan benar.

Shopping Cart merupakan tahap persiapan transaksi sebelum Checkout.

---

# 2. Scope

Shopping Cart bertanggung jawab terhadap:

- Cart Items
- Quantity
- Product Validation
- Price Calculation
- Subtotal
- Voucher Validation
- Shipping Estimation
- Cart Summary

Shopping Cart tidak bertanggung jawab terhadap:

- Payment
- Order Creation
- Shipment
- Invoice

---

# 3. Business Value

★★★★★

Shopping Cart membantu pelanggan mengelola produk yang akan dibeli sebelum melakukan pembayaran.

Validasi sejak awal mengurangi kegagalan transaksi pada tahap Checkout.

---

# 4. Business Priority

★★★★★

Critical Feature

Core Commerce Module

---

# 5. Implementation Level

## 🟢 MVP

- Add to Cart
- Remove from Cart
- Update Quantity
- Product Validation
- Stock Validation
- Subtotal Calculation
- Shipping Estimation
- Voucher Validation

---

## 🟡 Growth

- Save For Later
- Recently Added
- Cart Reminder
- Multiple Cart

---

## 🔵 Enterprise

- Shared Cart
- Cross Device Cart Sync
- AI Cart Recommendation

---

# 6. User Roles

Guest

Customer

---

# 7. User Stories

As a Customer

I want to add products to my cart

So that I can purchase them later.

---

As a Customer

I want to update product quantity

So that my order matches my needs.

---

As a Customer

I want to see the estimated total

So that I know the cost before Checkout.

---

# 8. Business Workflow

Browse Products

↓

Open Product Detail

↓

Add to Cart

↓

Review Cart

↓

Update Quantity

↓

Apply Voucher

↓

Estimate Shipping

↓

Proceed to Checkout

---

# 9. State Machine

Empty

↓

Has Items

↓

Updated

↓

Ready for Checkout

↓

Converted to Checkout

---

# 10. Information Architecture

Shopping Cart

├── Cart Items

├── Product Summary

├── Quantity

├── Voucher

├── Shipping Estimation

├── Cart Summary

└── Checkout Button

---

# 11. Cart Model

Shopping Cart

├── Customer

├── Cart Items

├── Quantity

├── Voucher

├── Shipping Estimate

├── Subtotal

├── Total

└── Updated At

---

# 12. Functional Requirements

## Cart

FR-C001

Customer dapat menambahkan produk ke keranjang.

FR-C002

Customer dapat menghapus produk dari keranjang.

FR-C003

Customer dapat mengubah jumlah produk.

---

## Validation

FR-V001

Sistem memvalidasi stok.

FR-V002

Sistem memvalidasi status produk.

FR-V003

Sistem memvalidasi harga terbaru.

---

## Voucher

FR-VC001

Customer dapat memasukkan kode voucher.

FR-VC002

Sistem memvalidasi voucher.

---

## Shipping

FR-S001

Customer dapat melihat estimasi ongkir sebelum Checkout.

---

# 13. Non Functional Requirements

NFR-001

Perubahan quantity diperbarui secara real-time.

NFR-002

Perhitungan subtotal akurat.

NFR-003

Validasi stok berjalan cepat.

NFR-004

Keranjang tetap tersimpan selama sesi aktif.

---

# 14. Business Rules

BR-001

Produk nonaktif tidak dapat di-checkout.

BR-002

Jumlah produk tidak boleh melebihi stok.

BR-003

Harga mengikuti harga terbaru.

BR-004

Voucher hanya berlaku jika memenuhi syarat.

BR-005

Estimasi ongkir bersifat sementara.

---

# 15. Domain Events

ProductAddedToCart

↓

QuantityUpdated

↓

VoucherApplied

↓

ShippingEstimated

↓

CheckoutStarted

---

# 16. Dependencies

Depends On

- Product Catalog
- Customer Account

Related

- Checkout
- Payment
- Shipping
- Notification

---

# 17. Acceptance Criteria

□ Produk dapat ditambahkan ke keranjang.

□ Quantity dapat diubah.

□ Voucher tervalidasi.

□ Estimasi ongkir tampil.

□ Total dihitung dengan benar.

□ Checkout hanya dapat dilakukan jika valid.

---

# 18. Out of Scope

MVP tidak mencakup:

- Shared Cart

- Multiple Cart

- AI Recommendation

- Cart Collaboration

- Subscription Cart

---

# 19. Future Enhancements

- Save For Later

- Wishlist Integration

- Cross Device Sync

- AI Upselling

- AI Cross Selling

---

# 20. Related Documents

12_PRODUCT_CATALOG.md

15_CUSTOMER_ACCOUNT.md

17_CHECKOUT.md

18_ORDER_MANAGEMENT.md

19_PAYMENT.md

20_SHIPPING.md

---

# 21. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.1 | 2026-07-15 | Shopping Cart Blueprint |

---

END OF DOCUMENT