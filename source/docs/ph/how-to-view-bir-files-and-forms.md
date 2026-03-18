---
title: BIR Files and Forms
description: Gabay sa pag-generate ng BIR Relief files, SAWT, QAP, at mga tax forms.
extends: _layouts.documentation
section: content
---

# BIR Files and Forms

Ang module na ito ay nagbibigay-daan sa mga user na makagawa ng mga tax-compliant na files at forms na kinakailangan para sa pagsusumite sa BIR (Bureau of Internal Revenue).

![BIR Files and Forms](/assets/img/bir.png)

---

| Report/Form Name | Layunin |
| :--- | :--- |
| **BIR Sales Relief** | Summary List of Sales (SLS) para sa VAT-registered taxpayers. |
| **BIR Purchase Relief** | Summary List of Purchases (SLP) para sa VAT-registered taxpayers. |
| **BIR QAP** | Quarterly Alphabetical List of Payees para sa creditable income taxes withheld. |
| **BIR SAWT** | Summary Alphalist of Withholding Taxes (ginagamit para sa pag-claim ng tax credits). |
| **BIR Forms** | Opisyal na tax forms (hal. 2550Q, 1601EQ) para sa review at filing. |

---

### Karaniwang Parameters (Relief, QAP, SAWT)
Para sa karamihan ng BIR-related files, kailangan mong itakda ang mga sumusunod na filters:

* **Quarter:** Piliin ang tamang period (**1st hanggang 4th Quarter** o **Annual**).

* **Year:** Ilagay ang fiscal year para sa filing.

* **RDO Type:** Piliin ang iyong rehistradong **Revenue District Office** code mula sa dropdown (hal. *001: Laoag City, 003: San Fernando*, atbp.).

---

### Action Buttons
Para sa Relief files, QAP, at SAWT, may tatlong pangunahing actions:

1. **View Report (Red Button):** Ipinapakita ang data sa screen para sa pag-check.

2. **To Excel (Green Button):** Dina-download ang data para sa internal reconciliation.

3. **To DAT:** Gumagawa ng `.DAT` file na kinakailangan para sa pag-upload sa BIR e-Submission/Relief system.

---

### BIR Forms
Ang **BIR Forms** section ay may ibang proseso dahil ito ay ginagamit para sa paghahanda ng actual na tax return.

* **Date:** Piliin ang eksaktong filing date.

* **Please Select a Form:** Piliin ang form number na kailangan mong i-generate (hal. 2550Q, 1601EQ, 1702).

* **Review Form (Button):** I-click ito upang makita ang preview ng form base sa transaction data ng system.

---

> 💡 **Filing Tip:** Laging i-click ang **View Report** o **To Excel** para ma-audit ang iyong data bago gamitin ang **To DAT**. Siguraduhing tama ang lahat ng Taxpayer Identification Numbers (TIN) at address fields upang maiwasan ang errors sa BIR validation process.