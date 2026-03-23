---
title: Journal Voucher
description: Hakbang-hakbang na gabay sa pamamahala ng iyong accounts sa MyxFin.
extends: _layouts.documentation
section: content
---

# Journal Voucher

Ang Journal Voucher (JV) module ay ginagamit para sa manual accounting entries tulad ng depreciation, accruals, o correcting entries na hindi sakop ng ibang specific modules.

---

### Paano Gumawa ng Bagong Transaksyon

1. **Simulan ang Entry**  
I-click ang **Create New** button.

2. **Piliin ang Entity (Optional)**  
Gamitin ang **Dropdown Menu** sa itaas na kaliwa upang pumili ng **Customer** o **Supplier**. Pinapayagan ka nitong maghanap at mag-link ng specific na entity sa transaksyon.

3. **I-set ang Memo**  
Maglagay ng malinaw na description sa **Memo** box upang ipaliwanag ang layunin ng journal entry.

4. **Ilagay ang Accounting Details**  
Sa Details table, ilagay ang **Acct# / Account Title**, ilagay ang amount sa tamang **Debit o Credit** column, at piliin ang applicable na **EWT/VAT Code** at **Cost Center** kung kinakailangan.

5. **Magdagdag ng Bagong Lines**  
Upang magdagdag ng bagong row, pindutin ang **TAB** pagkatapos ng remarks field ng huling row.

6. **Suriin ang Balance**  
Siguraduhin na ang **Out of Balance** field ay **0.00**. Hindi ka papayagan ng system na mag-save kung hindi magkapareho ang total Debits at Credits.

7. **I-finalize**  
I-click ang **Save (CTRL+S)** button upang ma-post ang entry.

![New Journal Entry](/assets/img/jv.png)

---

### Paano Mag-edit ng Transaksyon

1. **Buksan ang Voucher**  
Mula sa main list, i-click ang specific na **JV Number**.

2. **Baguhin ang Lines**  
Maaari mong i-update ang amounts, account titles, o remarks.

3. **I-save ang Changes**  
I-click ang **Save** button kapag balanced na muli ang entry.

> 💡 **Tandaan:** Kung ang transaksyon ay naka-post o naka-reconcile na, maaaring kailanganin muna itong i-unpost bago i-edit.

---

### Navigation & Shortcuts

* **Back to Main (ESC):** Gamitin ang button na ito o pindutin ang ESC key upang lumabas nang hindi sine-save.  

* **Attachments Tab:** Gamitin ang tab na ito upang mag-upload ng supporting documents (tulad ng bank notices o invoices) na kaugnay ng journal entry.