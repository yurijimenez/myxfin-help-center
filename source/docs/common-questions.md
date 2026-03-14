---
title: Common Questions
description: Frequently asked questions about using the MyxFin platform.
extends: _layouts.documentation
section: content
---

<div class="faq-container">
    <h1 class="text-3xl font-extrabold text-gray-900 mb-8">Common Questions</h1>

    <div class="faq-grid space-y-4">
        <div class="faq-item">
            <button class="faq-question">
                <span>How do I create a Sales Order?</span>
                <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="faq-answer">
                <p>Navigate to <strong>Sales & Delivery > Sales Order</strong>. Click the "Create New (F1)" button, fill in the customer and item details, and press <strong>CTRL + S</strong> to save.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>Can I void a transaction that has already been delivered?</span>
                <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="faq-answer">
                <p>No. Transactions with active references to Delivery Receipts or Sales Invoices cannot be voided. You must first cancel the associated reference documents.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>What is the difference between "Billed To" and "Delivered To"?</span>
                <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="faq-answer">
                <p><strong>Billed To:</strong> The entity responsible for payment (appears on the Invoice). <br><strong>Delivered To:</strong> The physical location receiving the goods (appears on the Delivery Receipt).</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>How do I perform a Batch Approval?</span>
                <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="faq-answer">
                <p>In the Sales Order list view, use the checkboxes to select multiple "Pending" transactions, then click the <strong>Green Checkmark</strong> button at the top of the table.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>Why can't I edit my transaction?</span>
                <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="faq-answer">
                <p>Editing is disabled if the transaction is already <strong>Posted</strong> or <strong>Cancelled</strong>. Only "Draft" or "Pending" status items are editable.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>How do I search for a specific Item Code?</span>
                <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="faq-answer">
                <p>Inside any transaction form, click the "Details" field and start typing the Item Code or Description. The system will auto-filter results as you type.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>Where can I view my Account Statements?</span>
                <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="faq-answer">
                <p>Go to the <strong>Finance</strong> module and select <strong>Statement of Account (SOA)</strong>. You can filter by date range and Customer ID to generate the report.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>What does the "Undo Edit" button do?</span>
                <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="faq-answer">
                <p>The <strong>Red Undo Button</strong> discards any unsaved changes made during your current session and reverts the document to its last saved state.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>How do I add items from a Quote?</span>
                <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="faq-answer">
                <p>Inside the Sales Order form, click the <strong>Light Blue Button</strong>. This opens a modal where you can select an existing Quotation to import items automatically.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>Is there a keyboard shortcut for saving?</span>
                <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="faq-answer">
                <p>Yes! Use <strong>CTRL + S</strong> to save immediately. You can also use <strong>F1</strong> to trigger the "Create New" action in most modules.</p>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
            const faqItem = button.parentElement;
            faqItem.classList.toggle('active');
        });
    });
</script>