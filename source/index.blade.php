@extends('_layouts.master')

@section('body')
<link rel="stylesheet" href="{{ vite('source/_assets/css/home.css') }}">

{{-- Hero Section --}}
<section class="hero-section">
    <div class="hero-inner">

        <h1>How can we <span class="hero-accent">help you?</span></h1>
        <p class="hero-sub">Browse guides, documentation, and troubleshooting articles to get the most out of MyxFin.</p>

        <div class="popular-topics">
            <span class="popular-label">Most Used Guides</span>
            <div class="pills-row">
                <a href="/docs/how-to-add-charts-of-accounts" class="topic-pill">
                    <span class="pill-icon">📊</span> Chart of Accounts setup
                </a>
                <a href="/docs/how-to-add-journal-voucher" class="topic-pill">
                    <span class="pill-icon">📋</span> Missing Journal Vouchers
                </a>
                <a href="/docs/how-to-add-items" class="topic-pill">
                    <span class="pill-icon">📦</span> Bulk Item Upload
                </a>
                <a href="/docs/how-to-add-banks" class="topic-pill">
                    <span class="pill-icon">🏦</span> Reconciling Banks
                </a>
                <a href="/docs/how-to-add-special-discount" class="topic-pill">
                    <span class="pill-icon">🏷️</span> Applying Discounts
                </a>
            </div>
        </div>

    </div>
</section>

{{-- Feature Grid --}}
<section class="features-section">
    <p class="section-eyebrow">Resources</p>
    <h2 class="section-title">Everything you need to get started</h2>
    <p class="section-sub">Find answers quickly with our curated resources built for MyxFin users.</p>

    <div class="features-grid">

        {{-- Box 1 --}}
        <a href="/docs/common-questions" class="feature-card is-blue">
            <div class="card-glow"></div>
            <div class="card-top">
                <div class="card-icon">❓</div>
                <div class="card-arrow">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
                </div>
            </div>
            <h3>Common Questions</h3>
            <p>Quick answers for account locked, reset passwords, and connection errors in MyxFin.</p>
            <div class="card-footer">Browse answers →</div>
        </a>

        {{-- Box 2 --}}
        <a href="#" class="feature-card is-red">
            <div class="card-glow"></div>
            <div class="card-top">
                <div class="card-icon">🎬</div>
                <div class="card-arrow">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
                </div>
            </div>
            <h3>Video Tutorials</h3>
            <p>Prefer watching? Step-by-step visual guides on setting up your Accounting and Sales modules.</p>
            <div class="card-footer">Watch tutorials →</div>
        </a>

        {{-- Box 3 --}}
        <a href="#" class="feature-card is-green">
            <div class="card-glow"></div>
            <div class="card-top">
                <div class="card-icon">⚙️</div>
                <div class="card-arrow">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
                </div>
            </div>
            <h3>System Updates</h3>
            <p>View the latest MyxFin release notes, new features, and bug fixes for the current version.</p>
            <div class="card-footer">See what's new →</div>
        </a>

    </div>
</section>

{{-- Contact Banner --}}
<div class="contact-banner">
    <div class="contact-inner">
        <div class="contact-text">
            <div class="contact-badge">Support</div>
            <h3>Still need help?</h3>
            <p>Our support team is available Monday – Sunday, 8 AM – 5 PM.</p>
        </div>
        <div class="contact-actions">
            <a href="#" class="btn-primary">
                <span>💬</span> Chat with Support
            </a>
            <a href="#" class="btn-ghost">
                <span>📧</span> Send a Ticket
            </a>
        </div>
    </div>
</div>

@endsection