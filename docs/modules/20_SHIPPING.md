# GHEVERHAN Commerce Platform

# 20_SHIPPING.md

Version: 1.1

Status: Approved

Owner: Product Team

Last Updated: 2026-07-15

---

# 1. Purpose

Shipping bertanggung jawab mengelola proses pengiriman pesanan setelah pembayaran berhasil dikonfirmasi.

Shipping menjadi penghubung antara Order Management dengan penyedia layanan logistik.

Shipping tidak membuat Order maupun memproses pembayaran.

---

# 2. Scope

Shipping bertanggung jawab terhadap:

- Shipping Method
- Shipping Cost
- Shipment
- Tracking Number
- Tracking Status
- Courier Integration
- Shipping Label
- Delivery Status

Shipping tidak bertanggung jawab terhadap:

- Checkout
- Payment
- Inventory
- Refund

---

# 3. Business Value

★★★★★

Shipping memastikan pesanan dapat dikirim dan dilacak secara akurat hingga diterima pelanggan.

---

# 4. Business Priority

★★★★★

Critical Feature

Core Commerce Module

---

# 5. Implementation Level

## 🟢 MVP

- Shipping Cost Calculation
- Courier Selection
- Shipment Creation
- Tracking Number
- Tracking Status
- KiriminAja Integration

---

## 🟡 Growth

- Direct Courier API
- Shipping Label
- Pickup Request
- Automatic Shipping Rules

---

## 🔵 Enterprise

- Multi Warehouse
- Split Shipment
- Smart Courier Selection
- Shipping Analytics

---

# 6. User Roles

Customer

Administrator

Warehouse Staff

Customer Service

---

# 7. User Stories

As a Customer

I want to track my shipment

So that I know where my package is.

---

As a Warehouse Staff

I want to generate shipment information easily

So that orders can be shipped quickly.

---

# 8. Business Workflow

Order Paid

↓

Prepare Shipment

↓

Select Courier

↓

Create Shipment

↓

Generate Tracking Number

↓

Ship Package

↓

Track Delivery

↓

Delivered

---

# 9. State Machine

Pending Shipment

↓

Ready to Ship

↓

Shipped

↓

In Transit

↓

Delivered

↓

Completed

Returned (Growth)

---

# 10. Information Architecture

Shipping

├── Shipment

├── Courier

├── Shipping Method

├── Shipping Cost

├── Tracking

├── Delivery Status

└── Shipping Label

---

# 11. Shipment Model

Shipment

├── Order

├── Courier

├── Service

├── Tracking Number

├── Shipping Cost

├── Status

├── Estimated Delivery

└── Metadata

---

# 12. Functional Requirements

## Shipping

FR-S001

Sistem dapat menghitung ongkir.

FR-S002

Customer dapat memilih layanan pengiriman.

FR-S003

Shipment dibuat setelah pembayaran dikonfirmasi.

---

## Tracking

FR-T001

Customer dapat melihat nomor resi.

FR-T002

Customer dapat melacak status pengiriman.

---

## Courier

FR-C001

Admin dapat mengaktifkan atau menonaktifkan kurir.

FR-C002

Admin dapat mengatur layanan pengiriman yang tersedia.

---

# 13. Non Functional Requirements

NFR-001

Perhitungan ongkir cepat.

NFR-002

Tracking selalu diperbarui.

NFR-003

Nomor resi unik.

NFR-004

Integrasi logistik mudah diganti tanpa mengubah business logic.

---

# 14. Business Rules

BR-001

Shipment hanya dibuat untuk Order berstatus Paid.

BR-002

Nomor resi hanya boleh satu untuk setiap Shipment pada MVP.

BR-003

Tracking hanya diperbarui dari penyedia logistik atau admin yang berwenang.

BR-004

Status pengiriman mengikuti State Machine.

---

# 15. Domain Events

ShippingCalculated

↓

CourierSelected

↓

ShipmentCreated

↓

TrackingNumberGenerated

↓

ShipmentDispatched

↓

ShipmentDelivered

---

# 16. Dependencies

Depends On

- Order Management
- Payment

Related

- Notification
- Customer Account

---

# 17. Acceptance Criteria

□ Ongkir dihitung.

□ Kurir dapat dipilih.

□ Shipment berhasil dibuat.

□ Nomor resi tersedia.

□ Tracking berjalan.

□ Status Order diperbarui sesuai pengiriman.

---

# 18. Out of Scope

MVP tidak mencakup:

- Multi Warehouse

- Split Shipment

- Pickup Scheduling

- Return Shipment

- Smart Courier Selection

---

# 19. Future Enhancements

- Direct J&T API

- RajaOngkir Integration

- Multi Courier Routing

- Shipping Analytics

- Automatic Courier Recommendation

---

# 20. Related Documents

17_CHECKOUT.md

18_ORDER_MANAGEMENT.md

19_PAYMENT.md

21_NOTIFICATION.md

22_DATABASE_DESIGN.md

23_API_SPECIFICATION.md

25_BACKEND_ARCHITECTURE.md

---

# 21. Revision History

| Version | Date | Description |
|----------|------|-------------|
| 1.1 | 2026-07-15 | Shipping Blueprint |

---

END OF DOCUMENT