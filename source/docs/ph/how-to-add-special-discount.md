---
title: Special Discount
description: Gabay sa pag-manage ng broad discount categories at paggamit ng mass upload tool.
extends: _layouts.documentation
section: content
---

# Special Discount

Ang **Special Discount** ay ginagamit para sa standardized na price reductions na naaangkop sa specific na grupo o special promotions. Hindi tulad ng Discount Matrix, maaari itong i-set bilang percentage-based o fixed-price deduction.

---

### 1. Paano Magdagdag ng Special Discount

![Navigating to Special Discount](/assets/img/sd.png)

1. Pumunta sa **Master Files** > **Price List** > **Special Discount**.

2. I-click ang **Create New (F1)**

3. **Description:** Maglagay ng malinaw na pangalan (hal. "Senior Citizen 20%").

4. **Label:** Maglagay ng maikling identifier para sa discount.

5. **Discount Amount:** Maglagay ng decimal value at pumili ng isa:

   * **PERCENT:** Para bawasan ang total base sa percentage.
   * **PRICE:** Para bawasan ang fixed na halaga.

6. **Effectivity Date:** Piliin ang petsa kung kailan magiging active ang discount.

7. **Sales Debit Acct:** Piliin ang account code kung saan maire-record ang discount.

8. I-click ang **Add Detail**

---

### 2. Special Discount Mass Upload
Para sa sabay-sabay na pag-manage ng maraming special discount categories, gamitin ang **Mass Upload** feature.

**Mga Hakbang sa Mass Upload:**
1. I-click ang **Mass Upload** button (orange) sa Special Discounts List view.

2. **Download Template:** I-click muna ito para makuha ang tamang format ng data.

3. **Choose File:** I-upload ang iyong completed template mula sa computer.

4. **Select Action (Dropdown):**
   * **Preview:** I-check ang data para masigurong tama bago i-import.
   * **Save:** I-save ang data sa system.

5. **Submit:** I-click ang **Submit** button para i-execute ang napiling action (Preview o Save).

---

### Comparison of Discount Types

| Feature | Discount Matrix | Special Discount |
| :--- | :--- | :--- |
| **Primary Use** | Item-specific sales/promos | Group-based (Senior/PWD) o Flat promos |
| **Duration** | May fixed start at end dates | Nagsisimula sa Effectivity Date (tuloy-tuloy) |
| **Type** | Kadalasang percentage-based | Pwedeng **Percent** o **Price** |

---

> 💡 **Tip:** Kapag gumagamit ng **Mass Upload**, piliin muna ang **Preview** option sa dropdown. Makakatulong ito para masigurong tama ang interpretation ng system sa iyong decimal values (Discount Amount) bago i-click ang **Save**.