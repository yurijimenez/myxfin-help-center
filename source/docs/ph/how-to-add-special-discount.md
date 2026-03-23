---
title: Special Discount
description: Gabay sa pamamahala ng malawak na kategorya ng diskwento at paggamit ng mass upload tool.
extends: _layouts.documentation
section: content
---

# Special Discount

Ang Special Discounts ay ginagamit para sa standardized price reductions na naaangkop sa partikular na grupo o espesyal na promosyon. Hindi tulad ng standard matrix, maaari itong i-toggle sa pagitan ng percentage-based o fixed-price deductions.

---

### 1. Paano Magdagdag ng Special Discount

![Navigating to Special Discount](/assets/img/sd.png)

1. Pumunta sa **Master Files** > **Price List** > **Special Discount**.

2. I-click ang **Create New (F1)**

3. **Description:** Ilagay ang detalyadong pangalan (hal., "Senior Citizen 20%").

4. **Label:** Ilagay ang maikling identifier para sa discount.

5. **Discount Amount:** Ilagay ang decimal value at piliin ang isa:

    **PERCENT:** Para ibawas ang porsyento sa total.

    **PRICE:** Para ibawas ang fixed na halaga.

6. **Effectivity Date:** Piliin ang petsa kung kailan magiging active ang discount.

7. **Sales Debit Acct:** Piliin ang account code kung saan ire-record ang discount.

8. I-click ang **Add Detail**

---

### 2. Special Discount Mass Upload

Para pamahalaan ang maraming kategorya ng special discount nang sabay-sabay, gamitin ang **Mass Upload** feature.

**Mga Hakbang sa Mass Upload:**

1. I-click ang **Mass Upload** button (orange) sa Special Discounts List view.

2. **Download Template:** I-click muna ito upang makuha ang tamang format para sa data mo.

3. **Piliin ang File:** I-upload ang completed template mula sa iyong computer.

4. **Piliin ang Action (Dropdown):**

    **Preview:** Tingnan ang data upang matiyak ang accuracy bago i-import.

    **Save:** I-commit ang data sa system.

5. **Submit:** I-click ang **Submit** button upang isagawa ang napiling action (Preview o Save).

---

### Paghahambing ng Mga Uri ng Discount

**🔹 Pangunahing Gamit**

- **Discount Matrix:** Item-specific na sales o promosyon  
- **Special Discount:** Group-based (hal., Senior/PWD) o flat promotions  

**🔹 Tagal**

- **Discount Matrix:** May fixed start at end dates  
- **Special Discount:** Nagsisimula sa Effectivity Date (patuloy)  

**🔹 Uri**

- **Discount Matrix:** Karaniwang percentage-based  
- **Special Discount:** Maaaring Percent o fixed Price  

---

> 💡 **Tip:** Kapag gumagamit ng **Mass Upload**, laging gamitin muna ang **Preview** option sa dropdown. Pinapayagan nito ang pag-verify na tama ang interpretation ng decimal values (Discount Amount) bago i-click ang **Save**.