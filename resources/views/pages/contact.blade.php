@extends('layouts.main')

@section('content')
<style>
    .contact-page {
        min-height: 100vh;
        padding: 6rem 1.5rem 4rem;
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 55%);
        font-family: "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
    }

    .contact-container {
        max-width: 1100px;
        margin: 0 auto;
    }

    .contact-hero {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .contact-hero .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.4rem 0.95rem;
        border-radius: 999px;
        background: rgba(249, 115, 22, 0.12);
        color: #c2410c;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        font-size: 0.85rem;
    }

    .contact-hero h1 {
        font-size: clamp(2.25rem, 4vw, 3rem);
        color: #0f172a;
        margin: 1rem 0 0.75rem;
        line-height: 1.15;
    }

    .contact-hero h1 span {
        color: #f97316;
    }

    .contact-hero p {
        max-width: 720px;
        margin: 0 auto;
        color: #475569;
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 1.5rem;
    }

    .contact-card {
        background: #fff;
        border-radius: 1.25rem;
        padding: 1.5rem;
        border: 1px solid #f1f5f9;
        box-shadow: 0 20px 60px rgba(15, 23, 42, 0.08);
    }

    .contact-card h3 {
        margin-top: 0;
        margin-bottom: 0.5rem;
        color: #0f172a;
        font-size: 1.25rem;
    }

    .contact-card p {
        margin: 0;
        color: #475569;
        line-height: 1.6;
    }

    .contact-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        padding: 0.4rem 0.85rem;
        border-radius: 999px;
        background: rgba(16, 185, 129, 0.15);
        color: #0f766e;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        font-size: 0.8rem;
        margin-bottom: 0.65rem;
    }

    .contact-pill.orange {
        background: rgba(249, 115, 22, 0.15);
        color: #c2410c;
    }

    .contact-pill.blue {
        background: rgba(59, 130, 246, 0.15);
        color: #1d4ed8;
    }

    .contact-form {
        background: #fff;
        border-radius: 1.25rem;
        padding: 1.75rem;
        border: 1px solid #e2e8f0;
        box-shadow: 0 20px 60px rgba(15, 23, 42, 0.06);
    }

    .contact-form h2 {
        margin-top: 0;
        color: #0f172a;
        font-size: 1.4rem;
        margin-bottom: 1rem;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 1rem;
    }

    label {
        display: block;
        font-weight: 600;
        color: #334155;
        margin-bottom: 0.4rem;
    }

    input,
    textarea,
    select {
        width: 100%;
        border-radius: 0.85rem;
        border: 1px solid #d7dce3;
        padding: 0.85rem 1rem;
        font-size: 1rem;
        background: #f8fafc;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
        box-sizing: border-box;
    }

    input:focus,
    textarea:focus,
    select:focus {
        outline: none;
        border-color: #fb923c;
        box-shadow: 0 0 0 3px rgba(251, 146, 60, 0.25);
        background: #fff;
    }

    textarea {
        min-height: 160px;
        resize: vertical;
    }

    .contact-actions {
        display: flex;
        gap: 0.75rem;
        flex-wrap: wrap;
        align-items: center;
        margin-top: 1rem;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.45rem;
        padding: 0.9rem 1.5rem;
        border-radius: 999px;
        border: none;
        background: linear-gradient(135deg, #fb923c, #f97316);
        color: #fff;
        font-weight: 700;
        cursor: pointer;
        box-shadow: 0 15px 35px rgba(249, 115, 22, 0.35);
        transition: transform 0.15s ease, box-shadow 0.15s ease;
    }

    .btn-primary:active {
        transform: scale(0.98);
    }

    .contact-note {
        color: #64748b;
        font-size: 0.95rem;
    }

    .info-grid {
        margin-top: 2rem;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 1rem;
    }

    .info-card {
        padding: 1rem 1.25rem;
        border-radius: 1rem;
        border: 1px solid #e2e8f0;
        background: #f8fafc;
    }

    .info-card strong {
        display: block;
        color: #0f172a;
        margin-bottom: 0.35rem;
    }

    .info-card span {
        color: #475569;
    }
</style>

<section class="contact-page">
    <div class="contact-container">
        <div class="contact-hero">
            <div class="eyebrow">We'd love to hear from you</div>
            <h1>Contact <span>MockMate</span></h1>
            <p>Reach out to our team for product questions, partnership opportunities, or support. We'll respond within one business day.</p>
        </div>

        <div class="contact-grid">
            <div class="contact-card">
                <div class="contact-pill orange">Product</div>
                <h3>Product inquiries</h3>
                <p>Ask about platform capabilities, enterprise onboarding, or custom interview coaching programs tailored to your team.</p>
            </div>
            <div class="contact-card">
                <div class="contact-pill blue">Support</div>
                <h3>Customer support</h3>
                <p>Need help with billing, account setup, or troubleshooting? Drop us a note and we'll guide you through the next steps.</p>
            </div>
            <div class="contact-card">
                <div class="contact-pill">Community</div>
                <h3>Partnerships</h3>
                <p>Let's collaborate on content, events, or education. We're always looking to partner with schools, bootcamps, and teams.</p>
            </div>
        </div>

        <div class="contact-form" style="margin-top: 2rem;">
            <h2>Send us a message</h2>
            <div class="form-grid">
                <div>
                    <label for="name">Full name</label>
                    <input type="text" id="name" name="name" placeholder="Jane Doe">
                </div>
                <div>
                    <label for="email">Work email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com">
                </div>
                <div>
                    <label for="topic">Topic</label>
                    <select id="topic" name="topic">
                        <option>Product question</option>
                        <option>Partnership</option>
                        <option>Support</option>
                        <option>Press</option>
                    </select>
                </div>
                <div>
                    <label for="company">Company</label>
                    <input type="text" id="company" name="company" placeholder="Team or organization name">
                </div>
            </div>
            <div style="margin-top: 1rem;">
                <label for="message">How can we help?</label>
                <textarea id="message" name="message" placeholder="Share a few details about your request"></textarea>
            </div>
            <div class="contact-actions">
                <button class="btn-primary" type="button">Send message</button>
                <span class="contact-note">Prefer email? Write to <a href="mailto:team@mockmate.com" style="color:#f97316;font-weight:600;text-decoration:none;">team@mockmate.com</a></span>
            </div>
        </div>

        <div class="info-grid">
            <div class="info-card">
                <strong>Hours</strong>
                <span>Monday–Friday, 9am–6pm PT</span>
            </div>
            <div class="info-card">
                <strong>Response time</strong>
                <span>We reply to most messages within one business day.</span>
            </div>
            <div class="info-card">
                <strong>Social</strong>
                <span>Follow us on LinkedIn, YouTube, and GitHub to stay updated.</span>
            </div>
        </div>
    </div>
</section>
@endsection
