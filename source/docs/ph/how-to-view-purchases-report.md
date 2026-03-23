---
title: Purchase Reports
description: Isang gabay sa pagsubaybay ng procurement at pamamahala ng Accounts Payable (AP) sa MyxFin.
extends: _layouts.documentation
section: content
---

# Purchase Reports

Ang **Purchase module** ay nagbibigay ng mga tools upang masubaybayan ang procurement activities at mapamahalaan ang liabilities ng kumpanya sa pamamagitan ng Accounts Payable (AP) system.

![Sales Order Report Filter](/assets/img/prreport.png)
*Figure 1: Purchase Reports.*

---

### 1. Buod ng Mga Available na Reports

| Report Name | Layunin |
| :--- | :--- |
| **Purchase per Item** | Breakdown ng purchases batay sa bawat produkto. |
| **Purchase per Supplier** | Kabuuang gastos per supplier o vendor. |
| **Purchase Summary / Detailed** | High-level o detalyadong history ng transactions. |
| **PO Balances** | Pagsubaybay ng natitirang quantity sa open Purchase Orders. |
| **PO Price Monitoring** | Paghahambing ng historical prices ng mga items. |
| **Purchase Request Monitoring** | Pagsubaybay ng status ng internal PRs. |
| **AP Monitoring** | Real-time na pagsubaybay ng unpaid supplier invoices. |
| **AP Ageing** | Pagkategorya ng unpaid liabilities base sa tagal (days past due). |

---

### 2. Standard Filtering at Action Buttons
Karamihan sa mga reports sa module na ito ay gumagamit ng mga sumusunod na filters:

* **Supplier Name:** Maghanap ng partikular na vendor.
* **Product:** I-filter batay sa specific na item.
* **Transaction Type:** Pumili sa *All Transactions*, *Posted*, *Unposted*.
* **Date Range:** Piliin ang simula at katapusan ng petsa.

### **Mga Action:**

* **View Report (Red Button):** Ipinapakita ang report sa screen.

* **To Excel (Green Button):** Ini-export ang data bilang spreadsheet.

---

### 3. AP Ageing Parameters
Ang **AP Ageing** report ay nangangailangan ng tamang setup upang makalkula nang maayos ang liabilities.

![Sales Order Report Filter](/assets/img/prreport1.png)
*Figure 2: AP Ageing Parameters.*

#### Mga Pangunahing Parameters:
* **SI Date as Of:** Ang reference date na ginagamit para kalkulahin ang edad ng invoice.

* **Account:** Piliin ang specific liability account mula sa dropdown (hal. `20000: ACCOUNTS PAYABLE-TRADE`, `21300: VAT PAYABLE`, o employee-related payables tulad ng `SSS` at `PHIC`).

* **Ageing Periods:** Dito mo ise-set ang time brackets.
    * **Desc:** Label (hal. "30 Days," "Overdue").
    * **From / To:** Range ng araw (hal. 1 to 30).

---

### 4. Espesyal na Monitoring
* **PO Price Monitoring:** Gamitin ito upang makita kung nagbabago ang presyo ng suppliers sa paglipas ng panahon. Nagsisilbi rin itong historical reference para sa mas magandang procurement negotiations.

* **PO Balances:** Mahalaga ito upang matukoy ang “backorders” o mga items na inorder ngunit hindi pa natatanggap sa warehouse.

---