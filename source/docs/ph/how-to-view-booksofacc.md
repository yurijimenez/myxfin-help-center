---
title: Books of Account
description: Isang komprehensibong gabay sa paggawa ng financial journals, ledgers, at statements.
extends: _layouts.documentation
section: content
---

# Books of Account

Ang **Books of Account** ay nagsisilbing opisyal na financial record ng kumpanya. Ang mga ulat na ito ay mahalaga para sa auditing, pagsunod sa BIR requirements, at internal na pagsusuri ng management.

![Books of Account Report Filter](/assets/img/boa.png)

---

### Core Sales & Purchases
* **Sales Journal** – Talaan ng lahat ng benta na naka-credit.

* **Purchase Journal** – Talaan ng pagbili ng inventory at mga serbisyo.

* **Sales Book** – Opisyal na talaan para sa VAT at tax audits.

### Cash Management
* **Cash Receipts** – Detalyadong talaan ng lahat ng natanggap na bayad.

* **Cash Disbursement** – Talaan ng lahat ng lumalabas na bayarin o gastos.

* **Cash Position** – Buod ng lahat ng available na pondo sa iba’t ibang accounts.

### Accounting & Ledgers
* **General Journal** – Para sa mga entry na hindi kabilang sa ibang journals (hal. adjustments o depreciation).

* **General Ledger** – Kumpletong kasaysayan ng bawat account.

* **Accounts Payable** – Pagtatala ng mga utang sa suppliers.

### Financial Statements
* **Trial Balance** – Tinitiyak na balanse ang debits at credits.

* **Balance Sheet** – Snapshot ng Assets, Liabilities, at Equity.

* **Income Statement** – Kita at gastos (Revenue vs. Expenses).

---

### Karaniwang Parameters
Sa pag-generate ng mga reports na ito, karaniwan mong makikita ang mga sumusunod na filters at options:

* **Date Range:** Piliin ang "From" at "To" na petsa para sa period na nais mong i-audit. 

* **Report Type:** Makikita sa mga sumusunod:
  - **Sales Book** (Ledger, Recap, Recap Per Customer)  
  - **Trial Balance** (Summary, Monthly)  
  - **Income Statement**

**Ledger** - Gamitin ito kung kailangan mong makita ang detalyadong impormasyon ng isang transaction.  

**Recap** - Para sa mabilisang overview ng total tax liabilities at revenue sa loob ng isang buwan.  

**Recap Per Customer** - Para makita kung aling mga customer ang may pinakamalaking kontribusyon nang hindi sinusuri ang bawat transaction.  

* **Account Selection:** Kailangan para sa **General Ledger** upang masubaybayan ang galaw ng isang partikular na account (hal. `10100: CASH ON HAND` o `20000: AP TRADE`).  

* **Consolidation:** Para sa financial statements, maaaring pumili ng **Per Selected Company** o **Consolidated** para makita ang data ng lahat ng branches.  

* **Tax Provisions:** Para sa **Income Statement**, maaaring ilagay ang **IT (%)** at **MCIT (%)** percentages.  

---

### Action Buttons
* **View Report (Red Button):** I-click upang ipakita ang report sa screen.  
* **To Excel (Green Button):** I-click upang i-download ang report bilang `.xlsx` file para sa pagsusuri o filing.  

---

> 💡 **Audit Tip:** Para sa mabilisang pagsusuri ng iyong accounts, gamitin ang **Trial Balance** na may **Summary (As Of)** report type upang makita ang kasalukuyang estado ng iyong financial records.