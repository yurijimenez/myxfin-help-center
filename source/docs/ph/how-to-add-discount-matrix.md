---
title: Discount Matrix
description: Gabay sa pag-manage ng automated item discounts at mass uploading ng discount rules.
extends: _layouts.documentation
section: content
---

# Discount Matrix

Ang **Discount Matrix** ay ginagamit upang mag-set ng specific discount rules para sa iyong mga produkto. Kapag na-set up na, ang mga discounts na ito ay awtomatikong ina-apply sa sales transactions base sa kanilang effectivity dates.

![Discount Matrix Interface](/assets/img/dm.png)

---

### 1. Paano Magdagdag ng Bagong Discount

![Discount Matrix Interface](/assets/img/dm1.png)

Para gumawa ng isang discount rule manually:

1. Pumunta sa **Master Files** > **Price List** > **Discount Matrix**.

2. I-click ang **Create New (F1)** button.

3. **Enter Label:** Maglagay ng pangalan para sa discount (hal. "Summer Sale 2026").

4. **Enter Description:** Maglagay ng detalye kung para saan ang discount.

5. **Effectivity & Due Date:** Itakda ang simula at katapusan ng discount validity.

6. **Sales Debit Acct:** Piliin ang tamang account mula sa Chart of Accounts para ma-record ang discount expense.

7. **Search Item:** Idagdag ang mga specific items na sakop ng discount.

8. I-click ang **Add Detail** at pagkatapos ay **Save**.

---

### 2. Discount Matrix Mass Uploading

![Discount Matrix Interface](/assets/img/dm2.png)

Kung marami kang items na lalagyan ng discount, gamitin ang **Mass Upload** feature upang makatipid ng oras.

**Mga Hakbang sa Mass Upload:**

1. Sa Discount Matrix list view, i-click ang **Mass Upload** button (orange icon katabi ng Create New).

2. **Label & Description:** Maglagay ng general na pangalan para sa batch upload.

3. **Sales Debit Account:** Piliin ang account kung saan maire-record ang discounts.

4. **Effect Date & Due Date:** Itakda ang timeline para sa buong batch.

5. **File Upload:** I-click upang piliin ang iyong CSV o Excel template na may listahan ng items at discount rates.

6. **Preview:** I-click para i-review ang data at maiwasan ang errors.

7. **Save:** I-click upang ma-apply ang lahat ng discounts sa system.

---

### 3. Karaniwang Parameters at Visual Guide

| Field | Deskripsyon |
| :--- | :--- |
| **Label** | Identifier ng discount campaign. |
| **Effectivity Date** | Petsa kung kailan magsisimula ang discount. |
| **Due Date** | Petsa kung kailan matatapos ang discount. |
| **Sales Debit Acct** | GL account na nagtatala ng pagbaba ng revenue dahil sa discount. |

---

> 💡 **Tip:** Gamitin ang **Preview** button sa mass uploading upang makita agad ang maling Item Codes bago ito ma-save sa live database.