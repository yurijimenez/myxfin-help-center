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
Ang **Audit Trail** ay nagbibigay ng detalyado at real-time na kasaysayan ng bawat interaksyon sa system. Bawat log entry ay naglalaman ng mga sumusunod na mahahalagang impormasyon:

* **Transaction No.** :
Ang partikular na ID o Reference Number ng record na naapektuhan (hal., SO# 102 o PR# 032600000).

* **Module** :
Ang partikular na bahagi ng MyxFin kung saan naganap ang aksyon (hal., BANK, PURCHASE REQUEST, PAYMENT TERMS).

* **Event** :
Ang uri ng aksyon na isinagawa: **INSERTED** (Nilikha), **UPDATED** (Inedit), o **DELETED** (Tinanggal).

* **User** :
Ang pangalan ng staff na nagsagawa ng aksyon.

* **PC Address** :
Ang IP address ng ginamit na computer, na nagsisilbing indikasyon ng lokasyon o network kung saan nangyari ang aksyon.

* **Date** :
Ang eksaktong oras at petsa (Taon-Buwan-Araw Oras:Minuto:Segundo) ng aktibidad.

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