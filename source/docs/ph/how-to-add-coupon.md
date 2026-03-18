---
title: Coupons
description: Gabay sa paggawa ng individual coupons at mass generation ng voucher codes.
extends: _layouts.documentation
section: content
---

# Coupons

Ang **Coupons** ay mga espesyal na promotional vouchers na may natatanging **Barcode**. Hindi tulad ng ordinaryong discounts, ang coupon ay may specific na monetary value at validity period na nag-aactivate lamang kapag ito ay ginamit.

![Navigating to Coupons](/assets/img/coupon.png)

---

### 1. Paano Gumawa ng Coupon

![Navigating to Coupons](/assets/img/coupon1.png)

Para gumawa ng bagong coupon manually:

1. Pumunta sa **Master Files** > **Price List** > **Coupons**

2. I-click ang **Create New (F1)**

3. **Label:** Maglagay ng pangalan ng coupon (hal. "Holiday Voucher P500").

4. **Remarks:** Maglagay ng internal notes o terms (hal. "Valid for all hardware items").

5. **Price:** Ilagay ang halaga ng coupon (hal. `500`).

6. **Barcode:** I-scan o i-type ang unique identifier ng voucher.

7. **Sales Debit Account:** Piliin ang account kung saan ibabawas ang value ng coupon kapag ginamit.

8. **Coupon Days:** Ilagay ang bilang ng araw kung gaano katagal valid ang coupon **pagkatapos ma-activate**

*Halimbawa: Kapag 30 ang inilagay, mag-e-expire ang coupon 30 araw mula sa araw na ito ay ginamit.*

9. I-click ang **Save**.

---

### 2. Coupon Mass Uploading

Para sa maramihang paggawa ng vouchers, gamitin ang **Mass Upload** tool sa Coupons List view.

**Mga Hakbang sa Mass Upload:**

1. **Download Template:** I-click muna ito para makuha ang tamang format ng coupon data.

2. **Select Action (Dropdown):**
   - **Preview:** Para i-check ang errors o duplicates
   - **Save:** Para i-save sa database

3. **Choose File:** I-upload ang iyong Excel/CSV file mula sa computer.

4. **Submit:** I-click ang **Submit** button para iproseso ang napiling action.

---

### 3. Mga Pangunahing Parameters

- **Label** – Identifier ng coupon (hal. Holiday Voucher P500)  
- **Remarks** – Internal notes o specific terms ng coupon  
- **Price** – Halagang ibabawas sa total ng customer  
- **Barcode** – Unique code na ginagamit sa pag-validate ng coupon  
- **Sales Debit** – GL account kung saan ibabawas ang halaga  
- **Coupon Days** – Tagal ng validity; nagsisimula lamang ang expiration **pagkatapos ma-activate**  

---

> 💡 **Usage Tip:** Ang **Coupon Days** ay ideal para sa gift cards. Hindi nagsisimula ang bilang ng araw kapag ginawa ang coupon sa system, kundi kapag ito ay ginamit ng customer—kaya sigurado na makukuha nila ang buong validity period.