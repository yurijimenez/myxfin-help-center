---
title: Sales Reports
description: Isang komprehensibong gabay sa paggawa ng Sales, Discrepancy, at Accounts Receivable reports sa MyxFin.
extends: _layouts.documentation
section: content
---

# Sales Reports

Ang MyxFin ay mayroong kumpletong set ng reporting tools na tumutulong sa pagsubaybay ng buong proseso ng benta—mula sa initial na order hanggang sa final na pagkolekta ng bayad.

![Sales Order Report Filter](/assets/img/soreport.png)
*Figure 1: Sales Order Report.*

---

### 1. Buod ng Mga Available na Reports
Gamitin ang table na ito upang matukoy kung aling report ang pinakaangkop sa iyong pangangailangan:

| Report Name | Pinakamainam Gamitin Para Sa... |
| :--- | :--- |
| **Sales Order** | Pagsubaybay ng lahat ng active at pending na orders. |
| **Sales per Item** | Pagsusuri kung aling mga produkto ang pinaka mabenta. |
| **Sales per Customer** | Pagsubaybay ng revenue mula sa bawat customer. |
| **Sales Summary / Detailed** | Pagkuha ng overview o detalyadong history ng lahat ng sales. |
| **SO vs DR vs SI** | Pag-audit ng flow mula Order → Delivery → Invoice. |
| **Discrepancy (SO vs DR)** | Pagkilala sa “Partial Deliveries” (items na inorder pero hindi pa na-deliver). |
| **AR Monitoring** | Real-time na pagsubaybay ng unpaid Sales Invoices. |
| **AR Ageing** | Pagkategorya ng utang base sa tagal (hal. 30, 60, 90 days). |
| **Statement of Account** | Pag-generate ng formal summary ng customer na may pirma ng authorized personnel. |

---

### 2. Standard Filtering at Action Buttons
Karamihan sa mga reports sa Sales module ay may parehong interface.

* **Filters:** Maaaring i-filter ang data gamit ang **Billed To**, **Item Type**, **Classification**, **Customer Type**, at **Date Range**.

* **View Report (Red Button):** I-click ito upang ipakita ang report sa screen.

* **To Excel (Green Button):** I-click ito upang i-download ang data bilang `.xlsx` file para sa karagdagang pagsusuri.

![Sales Order Report Filter](/assets/img/soreport1.png)
*Figure 2: To Excel.*

---

### 3. Espesyal na Report: AR Ageing
Ang **AR Ageing** report ay may mga espesyal na settings para sa mas maayos na pamamahala ng collections base sa policy ng kumpanya.

![Sales Order Report Filter](/assets/img/soreport2.png)
*Figure 3: AR Ageing.*

* **SI Date as Of:** Ito ang “cutoff” date kung saan binabase ang edad ng invoice.

* **Ageing Periods:** Dito mo ise-set ang mga time brackets.

    * Desc: Label (hal. "Current," "Overdue," "Critical").
    * From / To: Range ng araw (hal. From 31 To 60).

* **Management:**   

    Gamitin ang **Add Period** para magdagdag ng bagong bracket.  
    I-click ang **Save Settings** para mai-save ang configuration.

---

### 4. Espesyal na Report: Statement of Account (SOA)
Ang SOA ay isang dokumentong ibinibigay sa customer. Maaari mong i-manage ang **Signatories** upang masunod ang internal audit requirements.

![Sales Order Report Filter](/assets/img/soreport3.png)
*Figure 4: Statement of Account (SOA).*

* **Approvals Section:** I-click ang **Add Approver** upang magdagdag ng signature line.

* **Name:** Ilagay ang buong pangalan ng empleyado (hal. "Kenneth Andrew").
* **Label:** Ilagay ang kanilang posisyon (hal. "General Manager" o "Prepared By").

---