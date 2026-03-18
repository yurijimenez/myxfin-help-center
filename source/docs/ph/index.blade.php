@extends('_layouts.master')

@section('body')
<link rel="stylesheet" href="{{ vite('source/_assets/css/home.css') }}">

{{-- Hero Section --}}
<section class="hero-section">
    <div class="hero-inner">

        <h1>Paano ka namin <span class="hero-accent">matutulungan?</span></h1>
        <p class="hero-sub">Mag-browse ng mga gabay, dokumentasyon, at troubleshooting articles para masulit ang paggamit ng MyxFin.</p>

        <div class="popular-topics">
            <span class="popular-label">Pinaka-Ginagamit na Gabay</span>
            <div class="pills-row">
                <a href="/docs/how-to-add-charts-of-accounts" class="topic-pill">
                    <span class="pill-icon">📊</span> Pag-setup ng Chart of Accounts
                </a>
                <a href="/docs/how-to-add-journal-voucher" class="topic-pill">
                    <span class="pill-icon">📋</span> Nawawalang Journal Vouchers
                </a>
                <a href="/docs/how-to-add-items" class="topic-pill">
                    <span class="pill-icon">📦</span> Bulk Item Upload
                </a>
                <a href="/docs/how-to-add-banks" class="topic-pill">
                    <span class="pill-icon">🏦</span> Pag-reconcile ng Banks
                </a>
                <a href="/docs/how-to-add-special-discount" class="topic-pill">
                    <span class="pill-icon">🏷️</span> Pag-apply ng Discounts
                </a>
            </div>
        </div>

    </div>
</section>

{{-- Feature Grid --}}
<section class="features-section">
    <p class="section-eyebrow">Mga Resources</p>
    <h2 class="section-title">Lahat ng kailangan mo para makapagsimula</h2>
    <p class="section-sub">Mabilis na makahanap ng sagot gamit ang aming mga curated resources para sa MyxFin users.</p>

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
            <h3>Mga Karaniwang Tanong</h3>
            <p>Mabilis na sagot para sa account lock, password reset, at connection errors sa MyxFin.</p>
            <div class="card-footer">Tingnan ang mga sagot →</div>
        </a>

        {{-- Box 2 --}}
        <a href="/docs/video-tutorial" class="feature-card is-red">
            <div class="card-glow"></div>
            <div class="card-top">
                <div class="card-icon">🎬</div>
                <div class="card-arrow">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
                </div>
            </div>
            <h3>Mga Video Tutorial</h3>
            <p>Mas gusto mo bang manood? Step-by-step na visual guides para sa pag-setup ng Accounting at Sales modules.</p>
            <div class="card-footer">Panoorin ang tutorials →</div>
        </a>

        {{-- Box 3 --}}
        <a href="/docs/system-updates" class="feature-card is-green">
            <div class="card-glow"></div>
            <div class="card-top">
                <div class="card-icon">⚙️</div>
                <div class="card-arrow">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
                </div>
            </div>
            <h3>System Updates</h3>
            <p>Tingnan ang pinakabagong updates ng MyxFin tulad ng bagong features at bug fixes.</p>
            <div class="card-footer">Tingnan ang updates →</div>
        </a>

    </div>
</section>

{{-- Contact Banner --}}
<div class="contact-banner">
    <div class="contact-inner">
        <div class="contact-text">
            <div class="contact-badge">Makipag-ugnayan</div>
            <h3>Makipag-ugnayan sa amin ngayon!</h3>
            <p>Available ang aming team mula Lunes hanggang Linggo, 8 AM – 5 PM.</p>
        </div>
        <div class="contact-actions">
            <a href="tel:+639175031616" class="btn-primary">
                <span>📞</span> +63.917.503.1616
            </a>
            <a href="mailto:sales@sert.ph" class="btn-ghost">
                <span>📧</span> sales@sert.ph
            </a>
            <a href="https://myxfin.com/" target="_blank" class="btn-ghost">
                <span>🌐</span> Bisitahin ang myxfin.com
            </a>
        </div>
    </div>
</div>

@endsection