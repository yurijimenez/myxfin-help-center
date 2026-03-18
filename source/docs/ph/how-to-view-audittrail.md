---
title: Audit Trail
description: Gabay sa pagsubaybay ng user activities, pagbabago sa transactions, at system events.
extends: _layouts.documentation
section: content
---

# Audit Trail

Ang **Audit Trail** ay nagsisilbing "black box" ng system, kung saan nire-record ang bawat mahalagang action na ginagawa ng mga user. Mahalaga ito para sa internal audits, pag-troubleshoot ng data changes, at monitoring ng security.

![Audit Trail](/assets/img/audittrail.png)

---

### 1. Pag-unawa sa Audit Log
Ipinapakita ng Audit Trail table ang real-time na data ng system interactions:

| Column Name | Deskripsyon |
| :--- | :--- |
| **Transaction No.** | Ang specific na ID o Reference Number ng record na naapektuhan (hal. SO# 102 o PR# 032600000). |
| **Module** | Ang bahagi ng MyxFin kung saan naganap ang action (hal. BANK, PURCHASE REQUEST, PAYMENT TERMS). |
| **Event** | Uri ng action na ginawa: **INSERTED** (Created), **UPDATED** (Edited), o **DELETED**. |
| **User** | Pangalan ng staff na gumawa ng action. |
| **PC Address** | IP address ng ginamit na computer, nagbibigay ng lokasyon o network footprint ng event. |
| **Date** | Eksaktong timestamp (Year-Month-Day Hour:Minute:Second) ng activity. |

---

### 2. Pag-filter ng Iyong Search
Dahil daan-daang entries ang nire-record araw-araw, gamitin ang filters sa itaas para mapaliit ang iyong hinahanap:

* **Code/Transaction No:** Ilagay ang specific na document number para makita ang buong history nito.

* **Module Dropdown:** Mag-filter ayon sa specific na section (hal. "Sales" o "Bank" modules).

* **Event Dropdown:** Mag-filter ayon sa uri ng action, tulad ng pagtingin lamang sa "DELETED" entries.

* **User Dropdown:** Subaybayan ang activity ng isang specific na empleyado.

* **Date Range:** Piliin ang specific na period para sa pag-review ng logs.

---

### 3. Mga Pangunahing Features at Actions
* **Entries Selector:** Gamitin ang "Show [X] entries" dropdown para makita ang mas maraming rows sa isang page (hanggang 100).

* **Search Bar:** Real-time filtering ng kasalukuyang table view.

* **To Excel (Teal Button):** I-export ang filtered audit log sa spreadsheet para sa formal reporting o mas detalyadong analysis.

---

> 💡 **Security Tip:** Kapag may napansin kang hindi awtorisadong pagbabago sa isang transaction, tingnan ang **PC Address** column. Makakatulong ito upang malaman kung ang action ay ginawa mula sa loob ng opisina o mula sa hindi kilalang external network.