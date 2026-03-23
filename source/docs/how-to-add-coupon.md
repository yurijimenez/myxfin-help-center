---
title: Coupons
description: Guide to creating individual coupons and mass-generating voucher codes.
extends: _layouts.documentation
section: content
---

# Coupons

Coupons are specialized promotional vouchers identified by a unique **Barcode**. Unlike standard discounts, a coupon has a specific monetary value and a validity period that triggers only after the coupon is activated.

![Navigating to Coupons](/assets/img/coupon.png)

---

### 1. How to Create a Coupon

![Navigating to Coupons](/assets/img/coupon1.png)

To manually generate a new coupon:

1.  Navigate to **Master Files** > **Price List** > **Coupons**.

2.  Click **Create New (F1)**

3.  **Label:** Enter the name of the coupon (e.g., "Holiday Voucher P500").

4.  **Remarks:** Add internal notes or terms (e.g., "Valid for all hardware items").

5.  **Price:** Enter the face value of the coupon (e.g., `500`).

6.  **Barcode:** Scan or type the unique identifier for this specific voucher.

7.  **Sales Debit Account:** Select the account where the coupon value will be debited upon redemption.

8.  **Coupon Days:** Enter the number of days the coupon remains valid **after activation**

9.  Click **Save**

*Example: If set to 30, the expiration is applied 30 days from the moment the coupon is triggered/used.*

---

### 2. Coupon Mass Uploading

For high-volume voucher generation, use the **Mass Upload** tool located in the Coupons List view.

**Steps to Mass Upload:**

1.  **Download Template:** Click this button first to get the standardized format for your coupon data.

2.  **Select Action (Dropdown):** Choose between **Preview** (to check for errors/duplicates) or **Save** (to commit to the database).

3.  **Choose File:** Attach your completed Excel/CSV file from your computer.

4.  **Submit:** Click the **Submit** button to process the selected action.



---

### 3. Key Parameters Table

| Field | Description |
| :--- | :--- |
| **Label** | The identifier for the coupon (e.g., Holiday Voucher P500). |
| **Remarks** | Internal notes or specific terms for this coupon. |
| **Price** | The actual monetary value deducted from the customer's total. |
| **Barcode** | The unique string used to verify the coupon at checkout. |
| **Sales Debit** | The GL account where the coupon value is debited. |
| **Coupon Days** | The lifespan of the coupon; expiration starts after activation. |

---

> 💡 **Usage Tip:** The **Coupon Days** logic is ideal for gift cards. The "clock" doesn't start ticking when you create the record in MyxFin, but only when the customer actually activates the voucher, ensuring they get their full time allotted.