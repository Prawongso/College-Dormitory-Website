<?php
declare(strict_types=1);

/*
 * Yuan Ze University - Student Housing Service Residence Page.
 */
$residence = [
    'school' => 'Yuan Ze University',
    'hall' => 'YZU Student Dormitory',
    'eyebrow' => 'Office of Student Affairs · Student Housing Service',
    'intro' => 'Home away from home, cozy coexistence. Building a diverse and convenient living space with everything you need for your campus journey.',
    'note' => 'A home for your university life — check the official YZU Housing Service portal for current bed allocations and rules.',
];
$hallInitial = 'Y';

$navItems = [
    ['label' => 'Dormitory Types', 'href' => '#rooms'],
    ['label' => 'Shared Spaces', 'href' => '#spaces'],
    ['label' => 'Dorm Life', 'href' => '#daily-life'],
    ['label' => 'Housing Guide', 'href' => '#housing-guide'],
];

$roomTypes = [
    [
        'number' => '01',
        'name' => 'First & Second Dormitory',
        'type' => 'Quad Room (Standard)',
        'description' => 'The main residential area for freshmen and international students. Each bed comes with its own desk, chair, wardrobe, and private internet connection.',
        'detail' => 'Campus Community Living',
        'class' => 'room-card--single',
        'symbol' => 'beds',
    ],
    [
        'number' => '02',
        'name' => 'Third Dormitory',
        'type' => 'Suite-Style Living',
        'description' => 'Spacious suite-style layout featuring central air conditioning, ensuite bathrooms, and personal drying balconies for local senior students.',
        'detail' => 'Modern Suite Comfort',
        'class' => 'room-card--shared',
        'symbol' => 'door',
    ],
    [
        'number' => '03',
        'name' => 'Jih-Shian Building',
        'type' => 'Off-Campus Residence',
        'description' => 'Conveniently located just a short 4-minute walk from campus, offering modern suite living with full facility support.',
        'detail' => 'Nearby Off-Campus Option',
        'class' => 'room-card--suite',
        'symbol' => 'window',
    ],
];

$spaces = [
    [
        'index' => '01 / EAT & SHOP',
        'name' => 'Campus Food & Plazas',
        'text' => 'Located right around the residence blocks with restaurants, convenience stores, cafés, and an ATM network to meet all daily needs.',
        'mark' => 'F',
        'tone' => 'space-panel--rose',
    ],
    [
        'index' => '02 / STUDY',
        'name' => 'Reading & Social Halls',
        'text' => 'Quiet student lounges, reading rooms, and comfortable spaces designed for collaborative study or relaxed conversations.',
        'mark' => 'S',
        'tone' => 'space-panel--sage',
    ],
    [
        'index' => '03 / CARE',
        'name' => 'Convenience & Wellness',
        'text' => 'Equipped with simple kitchens, Muslim prayer rooms, laundry balconies, coin-operated washers, and 24-hour support.',
        'mark' => 'W',
        'tone' => 'space-panel--gold',
    ],
];

$dailyMoments = [
    ['time' => '07:00 AM', 'title' => 'Morning on Campus', 'copy' => 'Grab a quick bite at the campus restaurant plaza and head out for your morning lectures across Yuan Ze.'],
    ['time' => '02:00 PM', 'title' => 'Between Classes & Labs', 'copy' => 'Return to your room to drop your bag, check notes at your personal desk, or catch up with roommates.'],
    ['time' => '11:00 PM', 'title' => 'Settling Down', 'copy' => 'Wind down your day in the lounge, wrap up assignments before the nightly network downtime policy ensures a good night’s rest.'],
];

$guideSteps = [
    ['step' => '01', 'title' => 'Check the Housing Schedule', 'copy' => 'Monitor the Student Housing Service announcements for spring semester online draws and eligibility rules.'],
    ['step' => '02', 'title' => 'Submit Your Application', 'copy' => 'Complete your accommodation application online and pay the required deposit through the YZU portal.'],
    ['step' => '03', 'title' => 'Prepare for Move-In', 'copy' => 'Bring your personal bedding, network cable, and daily necessities to settle into your assigned YZU dorm room.'],
];

$faqs = [
    [
        'question' => 'What facilities are provided in each dorm room?',
        'answer' => 'Each bed includes its own desk, chair, wardrobe, and a private internet connection point. Bring your own bedding, network cable, and power extension cord.',
    ],
    [
        'question' => 'Is there a network downtime schedule in the dorms?',
        'answer' => 'Yes, to ensure student health and rest quality, the dormitory network implements controlled downtime during early morning hours.',
    ],
    [
        'question' => 'Where can I pick up packages and mail?',
        'answer' => 'Registered mails and courier packages are handled through the post office or the dormitory front desk where the teacher-in-residence assists with notifications.',
    ],
];

function e(string $value): string{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="utf=8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#f0f4d8">
        <meta name="description" content="<?= e($residence['note']) ?> Learn about rooms, shared spaces, daily life, and housing guidelines at <?= e($residence['school']) ?>.">
        <title><?= e($residence['hall']) ?> - <? e($residence['school']) ?></title>
        <style>
            :root{
                color-scheme: light;
                --paper: #f0f4f8;
                --paper-deep: #e2e8f0;
                --ink: #1e294b;
                --ink-soft: #475569;
                --yzu-blue: #0f3c5d;
                --yzu-blue-deep: #082338;
                --yzu-accent: #2563eb;
                --moss: #64748b;
                --rose: #e11d48;
                --rose-wash: #fef2f2;
                --gold: #d97706;
                --line: rgba(15, 60, 93, .15);
                --serif: "Georgia", "Times New Roman", serif;
                --sans: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
                --page-width: 1320px;
                --gutter: clamp(22px, 5.2vw, 84px);
            }

            *, *::before, *::after { box-sizing: border-box; }
            html { scroll-behavior: smooth; scroll-padding-top: 100px; }
            body {
                margin: 0;
                min-width: 320px;
                background: var(--paper);
                color: var(--ink);
                font-family: var(--sans);
                font-size: 15px;
                line-height: 1.65;
                -webkit-font-smoothing: antialiased;
            }
            a { color: inherit; }
            button, summary { font: inherit; }
            button:focus-visible, a:focus-visible, summary:focus-visible {
                outline: 3px solid var(--gold);
                outline-offset: 4px;
            }
            .skip-link {
                position: fixed;
                top: 8px;
                left: 8px;
                z-index: 100;
                padding: 10px 14px;
                transform: translateY(-150%);
                background: var(--yzu-blue-deep);
                color: var(--paper);
            }
            .skip-link:focus { transform: translateY(0); }
            .wrap { width: min(100% - var(--gutter) * 2, var(--page-width)); margin-inline: auto; }
            .eyebrow, .micro-label, .nav-link, .button, .room-type, .space-index, .moment-time, .step-number {
                font-size: 10px;
                font-weight: 700;
                letter-spacing: .15em;
                line-height: 1.35;
                text-transform: uppercase;
            }
            .eyebrow { color: var(--yzu-blue); }
            .site-header {
                position: relative;
                z-index: 20;
                border-bottom: 1px solid var(--line);
                background: rgba(240, 244, 248, .96);
            }
            .header-inner {
                display: flex;
                min-height: 82px;
                align-items: center;
                justify-content: space-between;
                gap: 30px;
            }
            .brand {
                display: inline-flex;
                align-items: center;
                gap: 12px;
                color: var(--ink);
                text-decoration: none;
            }
            .brand-seal {
                display: grid;
                width: 40px;
                height: 40px;
                place-items: center;
                border: 1px solid var(--yzu-blue);
                border-radius: 50%;
                background: var(--yzu-blue);
                color: #ffffff;
                font-family: var(--serif);
                font-size: 19px;
                font-style: italic;
            }
            .brand-text { display: grid; line-height: 1.15; }
            .brand-text strong { font-family: var(--sans); font-size: 15px; font-weight: 700; color: var(--yzu-blue-deep); }
            .brand-text span { margin-top: 2px; color: var(--ink-soft); font-size: 9px; letter-spacing: .13em; text-transform: uppercase; }
            .desktop-nav { display: flex; align-items: center; gap: clamp(19px, 2.4vw, 38px); }
            .nav-link { text-decoration: none; transition: color .2s ease; }
            .nav-link:hover { color: var(--yzu-accent); }
            .nav-link--action { padding: 12px 16px; border: 1px solid var(--yzu-blue); color: var(--yzu-blue); }
            .nav-link--action:hover { background: var(--yzu-blue); color: #ffffff; }
            .mobile-menu { display: none; }

            .hero {
                position: relative;
                overflow: hidden;
                min-height: 660px;
                padding: 50px 0 66px;
                background: var(--paper);
            }
            .hero::after {
                position: absolute;
                top: 0;
                right: -10vw;
                width: 56vw;
                height: 100%;
                background: var(--paper-deep);
                content: "";
                clip-path: polygon(30% 0, 100% 0, 100% 100%, 0 100%);
            }
            .hero-layout {
                position: relative;
                z-index: 1;
                display: grid;
                min-height: 540px;
                grid-template-columns: minmax(0, .92fr) minmax(390px, 1.08fr);
                align-items: center;
                gap: clamp(32px, 5vw, 86px);
            }
            .hero-copy { position: relative; z-index: 2; padding: 14px 0 34px; }
            .hero-copy .eyebrow { display: flex; align-items: center; gap: 12px; }
            .hero-copy .eyebrow::before { width: 30px; height: 1px; background: var(--yzu-accent); content: ""; }
            h1, h2, h3, p { margin-top: 0; }
            .hero h1 {
                max-width: 680px;
                margin: 22px 0 23px;
                font-family: var(--sans);
                font-size: clamp(48px, 6.5vw, 90px);
                font-weight: 800;
                letter-spacing: -.035em;
                line-height: 1.05;
                color: var(--yzu-blue-deep);
            }
            .hero h1 em { color: var(--yzu-accent); font-style: normal; }
            .hero-intro { max-width: 450px; margin: 0; color: var(--ink-soft); font-size: clamp(15px, 1.25vw, 18px); line-height: 1.75; }
            .hero-actions { display: flex; align-items: center; flex-wrap: wrap; gap: 24px; margin-top: 34px; }
            .button {
                display: inline-flex;
                min-height: 49px;
                align-items: center;
                justify-content: center;
                gap: 19px;
                padding: 0 18px;
                border: 1px solid var(--yzu-blue);
                background: var(--yzu-blue);
                color: #ffffff;
                text-decoration: none;
                transition: background .2s ease, transform .2s ease;
            }
            .button:hover { transform: translateY(-2px); background: var(--yzu-blue-deep); }
            .button-arrow { font-size: 17px; line-height: 1; }
            .text-link { display: inline-flex; align-items: center; gap: 8px; color: var(--yzu-blue); font-size: 12px; font-weight: 700; text-decoration: none; }
            .text-link:hover { text-decoration: underline; text-underline-offset: 4px; }
            .hero-art {
                position: relative;
                min-height: 500px;
                isolation: isolate;
            }
            .hero-art svg { position: absolute; inset: 0; width: 100%; height: 100%; }
            .hero-caption {
                position: absolute;
                z-index: 2;
                right: 1%;
                bottom: 1%;
                display: flex;
                width: min(240px, 44%);
                flex-direction: column;
                padding: 17px 19px;
                background: var(--paper);
                box-shadow: 0 11px 35px rgba(15, 60, 93, .12);
                border-left: 4px solid var(--yzu-accent);
            }
            .hero-caption strong { font-family: var(--sans); font-size: 15px; font-weight: 700; color: var(--yzu-blue-deep); }
            .hero-caption span { margin-top: 5px; color: var(--ink-soft); font-size: 10px; letter-spacing: .09em; text-transform: uppercase; }
            .hero-stamp {
                position: absolute;
                z-index: 2;
                top: 9%;
                right: 7%;
                display: grid;
                width: 88px;
                height: 88px;
                place-items: center;
                border: 1px solid rgba(15, 60, 93, .42);
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.7);
                color: var(--yzu-blue);
                font-family: var(--sans);
                font-size: 11px;
                font-weight: 700;
                text-align: center;
                transform: rotate(9deg);
            }
            .hero-note {
                display: flex;
                align-items: center;
                gap: 12px;
                margin-top: 37px;
                color: var(--ink-soft);
                font-size: 11px;
            }
            .hero-note::before { width: 25px; height: 1px; background: var(--yzu-accent); content: ""; }

            .ribbon {
                position: relative;
                z-index: 3;
                padding: 19px 0;
                background: var(--yzu-blue);
                color: #ffffff;
            }
            .ribbon-inner { display: flex; align-items: center; justify-content: space-between; gap: 20px; }
            .ribbon-item { display: flex; align-items: center; gap: 12px; color: rgba(255, 255, 255, .9); font-size: 11px; letter-spacing: .08em; font-weight: 600; text-transform: uppercase; }
            .ribbon-mark { color: #93c5fd; font-family: var(--sans); font-weight: 800; font-size: 14px; }
            .ribbon-divider { width: 1px; height: 20px; background: rgba(255, 255, 255, .27); }

            .intro-section { padding: clamp(82px, 10vw, 145px) 0 clamp(86px, 10vw, 138px); }
            .intro-grid { display: grid; grid-template-columns: .36fr 1fr; gap: clamp(30px, 9vw, 135px); align-items: start; }
            .section-kicker { display: flex; align-items: center; gap: 11px; color: var(--yzu-accent); }
            .section-kicker::before { width: 25px; height: 1px; background: currentColor; content: ""; }
            .intro-copy h2 {
                max-width: 840px;
                margin: 0;
                font-family: var(--sans);
                font-size: clamp(32px, 4.5vw, 56px);
                font-weight: 700;
                letter-spacing: -.03em;
                line-height: 1.15;
                color: var(--yzu-blue-deep);
            }
            .intro-copy h2 em { color: var(--yzu-accent); font-style: normal; }
            .intro-bottom { display: flex; align-items: end; justify-content: space-between; gap: 32px; margin-top: 33px; }
            .intro-bottom p { max-width: 455px; margin: 0; color: var(--ink-soft); font-size: 14px; }
            .scribble { min-width: 130px; color: var(--yzu-blue); font-family: var(--sans); font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: .08em; }

            .rooms-section { padding: 95px 0 106px; background: var(--paper-deep); }
            .section-heading { display: flex; align-items: end; justify-content: space-between; gap: 32px; margin-bottom: 43px; }
            .section-heading h2 {
                max-width: 640px;
                margin: 12px 0 0;
                font-family: var(--sans);
                font-size: clamp(36px, 5vw, 64px);
                font-weight: 700;
                letter-spacing: -.03em;
                line-height: 1.05;
                color: var(--yzu-blue-deep);
            }
            .section-heading p { max-width: 280px; margin: 0 0 4px; color: var(--ink-soft); font-size: 13px; }
            .room-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }
            .room-card { min-width: 0; background: var(--paper); border: 1px solid var(--line); }
            .room-card-art { position: relative; overflow: hidden; height: 235px; background: #cbd5e1; }
            .room-graphic { position: absolute; inset: 0; width: 100%; height: 100%; }
            .room-type { position: absolute; top: 16px; left: 17px; padding: 8px 9px; background: rgba(240, 244, 248, .95); color: var(--yzu-blue); border: 1px solid var(--line); }
            .room-card-content { padding: 25px 25px 26px; }
            .room-card-top { display: flex; align-items: baseline; justify-content: space-between; gap: 12px; }
            .room-card h3 { margin: 0; font-family: var(--sans); font-size: clamp(19px, 2vw, 24px); font-weight: 700; color: var(--yzu-blue-deep); }
            .room-number { color: var(--yzu-accent); font-family: var(--sans); font-weight: 700; font-size: 13px; }
            .room-card p { min-height: 76px; margin: 14px 0 20px; color: var(--ink-soft); font-size: 12px; line-height: 1.75; }
            .room-meta { display: flex; align-items: center; gap: 8px; padding-top: 14px; border-top: 1px solid var(--line); color: var(--yzu-blue); font-size: 10px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; }
            .room-meta::before { width: 7px; height: 7px; border-radius: 50%; background: var(--yzu-accent); content: ""; }
            .rooms-footnote { display: flex; align-items: center; gap: 12px; margin: 25px 0 0; color: var(--ink-soft); font-size: 11px; }
            .rooms-footnote span { color: var(--yzu-accent); font-weight: 700; }

            .spaces-section { padding: 105px 0 112px; background: var(--yzu-blue-deep); color: #ffffff; }
            .spaces-section .section-kicker { color: #93c5fd; }
            .spaces-section .section-heading h2 { max-width: 720px; color: #ffffff; }
            .spaces-section .section-heading p { color: rgba(255, 255, 255, .72); }
            .spaces-grid { display: grid; grid-template-columns: 1.15fr .92fr .92fr; align-items: stretch; gap: 13px; }
            .space-panel { position: relative; display: flex; min-height: 330px; flex-direction: column; justify-content: space-between; overflow: hidden; padding: 22px; color: var(--ink); border: 1px solid rgba(255,255,255,0.1); }
            .space-panel--rose { background: #e0f2fe; }
            .space-panel--sage { background: #e2e8f0; }
            .space-panel--gold { background: #fef3c7; }
            .space-index { position: relative; z-index: 1; color: var(--yzu-blue); }
            .space-mark {
                position: absolute;
                top: 18px;
                right: 17px;
                color: rgba(15, 60, 93, .08);
                font-family: var(--sans);
                font-weight: 800;
                font-size: clamp(135px, 18vw, 245px);
                line-height: .8;
                pointer-events: none;
            }
            .space-copy { position: relative; z-index: 1; max-width: 305px; }
            .space-copy h3 { margin: 0 0 10px; font-family: var(--sans); font-size: clamp(24px, 2.5vw, 32px); font-weight: 700; color: var(--yzu-blue-deep); letter-spacing: -.02em; }
            .space-copy p { margin: 0; max-width: 290px; color: var(--ink-soft); font-size: 12px; line-height: 1.7; }
            .spaces-tail { display: flex; justify-content: flex-end; margin-top: 23px; color: rgba(255, 255, 255, .72); font-size: 13px; font-weight: 500; }

            .daily-section { padding: 112px 0 105px; }
            .daily-layout { display: grid; grid-template-columns: .8fr 1.2fr; gap: clamp(35px, 9vw, 130px); }
            .daily-heading { position: sticky; top: 35px; align-self: start; }
            .daily-heading h2 { max-width: 450px; margin: 14px 0 20px; font-family: var(--sans); font-size: clamp(38px, 5vw, 60px); font-weight: 700; letter-spacing: -.03em; line-height: 1.05; color: var(--yzu-blue-deep); }
            .daily-heading p { max-width: 315px; margin: 0; color: var(--ink-soft); font-size: 13px; }
            .moments { border-top: 1px solid var(--line); }
            .moment { display: grid; grid-template-columns: 112px 1fr; gap: 21px; padding: 27px 0 29px; border-bottom: 1px solid var(--line); }
            .moment-time { padding-top: 7px; color: var(--yzu-accent); font-weight: 700; }
            .moment h3 { margin: 0 0 8px; font-family: var(--sans); font-size: clamp(20px, 2.2vw, 28px); font-weight: 700; color: var(--yzu-blue-deep); }
            .moment p { max-width: 430px; margin: 0; color: var(--ink-soft); font-size: 13px; }
            .daily-quote { margin: 40px 0 0; padding: 20px 0 0 23px; border-left: 3px solid var(--yzu-accent); color: var(--yzu-blue); font-family: var(--serif); font-size: 18px; font-style: italic; line-height: 1.4; background: rgba(37,99,235,0.03); }

            .housing-section { padding: 101px 0 111px; background: var(--rose-wash); border-top: 1px solid rgba(225,29,72,0.15); border-bottom: 1px solid rgba(225,29,72,0.15); }
            .housing-layout { display: grid; grid-template-columns: .85fr 1.15fr; gap: clamp(40px, 8vw, 115px); }
            .housing-lede h2 { max-width: 490px; margin: 13px 0 22px; font-family: var(--sans); font-size: clamp(38px, 5vw, 58px); font-weight: 700; letter-spacing: -.03em; line-height: 1.05; color: var(--yzu-blue-deep); }
            .housing-lede > p { max-width: 395px; color: var(--ink-soft); font-size: 13px; }
            .guide-notice { display: flex; align-items: flex-start; gap: 12px; max-width: 400px; margin-top: 27px; padding-top: 15px; border-top: 1px solid rgba(15, 60, 93, .2); color: var(--ink-soft); font-size: 11px; }
            .guide-notice span { color: var(--yzu-accent); font-weight: 700; font-size: 16px; line-height: 1; }
            .steps { border-top: 1px solid rgba(15, 60, 93, .2); }
            .guide-step { display: grid; grid-template-columns: 52px 1fr; gap: 18px; padding: 21px 0 23px; border-bottom: 1px solid rgba(15, 60, 93, .2); }
            .step-number { padding-top: 6px; color: var(--yzu-accent); font-weight: 700; }
            .guide-step h3 { margin: 0 0 5px; font-family: var(--sans); font-size: 20px; font-weight: 700; color: var(--yzu-blue-deep); }
            .guide-step p { max-width: 490px; margin: 0; color: var(--ink-soft); font-size: 12px; }
            .housing-cta { display: inline-flex; margin-top: 24px; align-items: center; gap: 11px; color: var(--yzu-blue); font-size: 11px; font-weight: 700; letter-spacing: .09em; text-decoration: none; text-transform: uppercase; }
            .housing-cta:hover { text-decoration: underline; text-underline-offset: 4px; }
            .housing-cta span { font-size: 17px; }

            .faq-section { padding: 104px 0 112px; }
            .faq-layout { display: grid; grid-template-columns: .74fr 1.26fr; gap: clamp(38px, 9vw, 132px); }
            .faq-title h2 { max-width: 390px; margin: 13px 0 17px; font-family: var(--sans); font-size: clamp(38px, 5vw, 56px); font-weight: 700; letter-spacing: -.03em; line-height: 1.05; color: var(--yzu-blue-deep); }
            .faq-title p { max-width: 300px; margin: 0; color: var(--ink-soft); font-size: 13px; }
            .faq-list { border-top: 1px solid var(--line); }
            .faq-list details { border-bottom: 1px solid var(--line); }
            .faq-list summary { position: relative; display: flex; min-height: 67px; align-items: center; justify-content: space-between; gap: 20px; padding: 14px 0; cursor: pointer; list-style: none; font-family: var(--sans); font-weight: 600; font-size: 17px; color: var(--yzu-blue-deep); }
            .faq-list summary::-webkit-details-marker { display: none; }
            .faq-list summary::after { flex: 0 0 auto; color: var(--yzu-accent); content: "+"; font-size: 20px; font-weight: 700; }
            .faq-list details[open] summary::after { content: "−"; }
            .faq-answer { max-width: 560px; padding: 0 35px 19px 0; color: var(--ink-soft); font-size: 12px; }
            .faq-answer p { margin: 0; }

            .closing { overflow: hidden; padding: 76px 0 81px; background: var(--paper-deep); border-top: 1px solid var(--line); }
            .closing-inner { display: flex; align-items: end; justify-content: space-between; gap: 42px; }
            .closing-copy .eyebrow { color: var(--yzu-accent); }
            .closing-copy h2 { max-width: 730px; margin: 12px 0 0; font-family: var(--sans); font-size: clamp(34px, 4.5vw, 54px); font-weight: 700; letter-spacing: -.03em; line-height: 1.1; color: var(--yzu-blue-deep); }
            .closing-mark { position: relative; flex: 0 0 118px; height: 118px; border: 2px solid var(--yzu-blue); border-radius: 50%; background: #ffffff; }
            .closing-mark::before { position: absolute; inset: 12px; border: 1px dashed var(--yzu-accent); border-radius: 50%; content: ""; }
            .closing-mark span { position: absolute; z-index: 1; top: 50%; left: 50%; color: var(--yzu-blue); font-family: var(--sans); font-weight: 800; font-size: 20px; transform: translate(-50%, -50%); }

            .site-footer { padding: 28px 0 30px; background: var(--yzu-blue-deep); color: var(--paper); }
            .footer-inner { display: flex; align-items: center; justify-content: space-between; gap: 24px; }
            .footer-brand { display: flex; align-items: center; gap: 11px; }
            .footer-brand .brand-seal { width: 34px; height: 34px; border-color: rgba(255, 255, 255, .55); background: transparent; color: var(--paper); font-size: 15px; }
            .footer-brand strong { font-family: var(--sans); font-size: 14px; font-weight: 600; }
            .footer-note { max-width: 400px; margin: 0; color: rgba(255, 255, 255, .67); font-size: 10px; text-align: center; }
            .footer-top { color: var(--paper); font-size: 10px; letter-spacing: .13em; text-decoration: none; text-transform: uppercase; font-weight: 700; }
            .footer-top:hover { color: #93c5fd; }

            @media (max-width: 900px) {
                .hero { min-height: auto; padding-top: 35px; }
                .hero-layout { grid-template-columns: 1fr 1fr; gap: 20px; }
                .hero h1 { font-size: clamp(42px, 7vw, 68px); }
                .hero-art { min-height: 420px; }
                .room-card-content { padding-inline: 18px; }
                .room-card p { min-height: 96px; }
                .daily-layout, .housing-layout { gap: 50px; }
            }
            media (max-width: 680px) {
                    :root { --gutter: 22px; }
                    html { scroll-padding-top: 74px; }
                    .header-inner { min-height: 70px; }
                    .brand-seal { width: 36px; height: 36px; }
                    .desktop-nav { display: none; }
                    .mobile-menu { position: relative; display: block; }
                    .mobile-menu summary {
                        display: flex;
                        min-height: 40px;
                        align-items: center;
                        gap: 10px;
                        color: var(--yzu-blue);
                        cursor: pointer;
                        font-size: 10px;
                        font-weight: 700;
                        letter-spacing: .12em;
                        list-style: none;
                        text-transform: uppercase;
                    }
                    .mobile-menu summary::-webkit-details-marker { display: none; }
                    .menu-icon { display: grid; width: 19px; gap: 4px; }
                    .menu-icon i { display: block; height: 2px; background: var(--yzu-blue); }
                    .mobile-menu[open] .menu-icon i:first-child { transform: translateY(3px) rotate(45deg); }
                    .mobile-menu[open] .menu-icon i:last-child { transform: translateY(-3px) rotate(-45deg); }
                    .mobile-menu nav {
                        position: absolute;
                        top: 51px;
                        right: -4px;
                        display: grid;
                        width: min(280px, calc(100vw - 36px));
                        padding: 9px 18px;
                        border: 1px solid var(--line);
                        background: var(--paper);
                        box-shadow: 0 15px 28px rgba(15, 60, 93, .15);
                    }
                    .mobile-menu .nav-link { padding: 15px 0; border-bottom: 1px solid var(--line); }
                    .mobile-menu .nav-link:last-child { border-bottom: 0; }
                    .mobile-menu .nav-link--action { padding: 13px 0; border: 0; }
                    .hero { padding: 44px 0 43px; }
                    .hero::after { top: 48%; right: -29%; width: 112%; height: 55%; clip-path: polygon(27% 0, 100% 0, 100% 100%, 0 100%); }
                    .hero-layout { display: flex; flex-direction: column; align-items: stretch; gap: 5px; }
                    .hero-copy { padding: 0; }
                    .hero h1 { max-width: 540px; margin: 18px 0 18px; font-size: clamp(42px, 12vw, 64px); }
                    .hero-intro { max-width: 420px; font-size: 14px; }
                    .hero-actions { gap: 17px; margin-top: 24px; }
                    .hero-art { min-height: min(99vw, 440px); margin: -2px -12px 0; }
                    .hero-stamp { top: 7%; right: 5%; width: 72px; height: 72px; font-size: 10px; }
                    .hero-caption { right: 2%; bottom: 0; width: 185px; padding: 12px 14px; }
                    .hero-note { margin-top: 18px; font-size: 10px; }
                    .ribbon { padding: 16px 0; }
                    .ribbon-inner { justify-content: flex-start; overflow-x: auto; scrollbar-width: none; }
                    .ribbon-inner::-webkit-scrollbar { display: none; }
                    .ribbon-item { flex: 0 0 auto; font-size: 9px; }
                    .ribbon-divider { flex: 0 0 1px; }
                    .intro-section { padding: 77px 0 81px; }
                    .intro-grid { grid-template-columns: 1fr; gap: 24px; }
                    .intro-copy h2 { font-size: clamp(28px, 8vw, 42px); }
                    .intro-bottom { align-items: start; flex-direction: column; gap: 20px; margin-top: 22px; }
                    .scribble { align-self: flex-end; }
                    .rooms-section, .spaces-section, .daily-section, .housing-section, .faq-section { padding: 76px 0 82px; }
                    .section-heading { align-items: start; flex-direction: column; gap: 17px; margin-bottom: 29px; }
                    .section-heading h2 { font-size: clamp(32px, 9vw, 48px); }
                    .section-heading p { max-width: 410px; }
                    .room-grid { grid-template-columns: 1fr; gap: 15px; }
                    .room-card-art { height: 220px; }
                    .room-card-content { padding: 22px; }
                    .room-card h3 { font-size: 24px; }
                    .room-card p { min-height: 0; }
                    .rooms-footnote { align-items: flex-start; font-size: 10px; }
                    .spaces-grid { grid-template-columns: 1fr; gap: 12px; }
                    .space-panel { min-height: 255px; }
                    .spaces-grid .space-panel:first-child { min-height: 300px; }
                    .space-mark { font-size: 180px; }
                    .spaces-tail { font-size: 13px; }
                    .daily-layout { grid-template-columns: 1fr; gap: 35px; }
                    .daily-heading { position: static; }
                    .daily-heading h2 { font-size: clamp(34px, 9vw, 50px); }
                    .moment { grid-template-columns: 83px 1fr; gap: 10px; padding: 22px 0 24px; }
                    .moment-time { font-size: 9px; }
                    .moment h3 { font-size: 22px; }
                    .moment p { font-size: 12px; }
                    .daily-quote { margin-top: 27px; font-size: 16px; }
                    .housing-layout { grid-template-columns: 1fr; gap: 38px; }
                    .housing-lede h2 { font-size: clamp(34px, 9vw, 50px); }
                    .guide-step { grid-template-columns: 39px 1fr; gap: 12px; padding-block: 19px; }
                    .guide-step h3 { font-size: 18px; }
                    .faq-layout { grid-template-columns: 1fr; gap: 32px; }
                    .faq-title h2 { font-size: clamp(34px, 9vw, 50px); }
                    .faq-list summary { font-size: 16px; }
                    .closing { padding: 63px 0; }
                    .closing-inner { align-items: center; gap: 20px; }
                    .closing-copy h2 { font-size: clamp(30px, 8vw, 42px); }
                    .closing-mark { flex-basis: 72px; height: 72px; }
                    .closing-mark::before { inset: 7px; }
                    .footer-inner { align-items: flex-start; flex-wrap: wrap; }
                    .footer-note { order: 3; flex: 0 0 100%; max-width: none; text-align: left; }
                }
                @media (prefers-reduced-motion: reduce) {
                    *, *::before, *::after { scroll-behavior: auto !important; transition-duration: .01ms !important; animation-duration: .01ms !important; }
                }
        </style>
        </head>
        <body id="top">
            <a class="skip-link" href="#main-content">Skip to content</a>
            <header class="site-header">
                <div class="wrap header-inner">
                    <a class="brand" href="#top" aria-label="<?= e($residence['hall']) ?> home">
                        <span class="brand-seal" aria-hidden="true"><?= e($hallInitial) ?></span>
                        <span class="brand-text">
                            <strong><?= e($residence['hall']) ?></strong>
                            <span><?= e($residence['school']) ?></span>
                        </span>
                    </a>
                    <nav class="desktop-nav" aria-label="Main navigation">
                        <?php foreach ($navItems as $item): ?>
                            <a class="nav-link" href="<?= e($item['href']) ?>"><?= e($item['label']) ?></a>
                        <?php endforeach; ?>
                        <a class="nav-link nav-link--action" href="#housing-guide">Housing Portal</a>
                    </nav>
                    <details class="mobile-menu">
                        <summary aria-label="Open navigation menu">
                            <span class="menu-icon" aria-hidden="true"><i></i><i></i></span>
                            Menu
                        </summary>
                        <nav aria-label="Mobile navigation">
                            <?php foreach ($navItems as $item): ?>
                                <a class="nav-link" href="<?= e($item['href']) ?>"><?= e($item['label']) ?></a>
                            <?php endforeach; ?>
                            <a class="nav-link nav-link--action" href="#housing-guide">Housing Portal</a>
                        </nav>
                    </details>
                </div>
            </header>

            <main id="main-content">
                <section class="hero" aria-labelledby="hero-title">
                    <div class="wrap hero-layout">
                        <div class="hero-copy">
                            <div class="eyebrow"><?= e($residence['eyebrow']) ?></div>
                            <h1 id="hero-title">Home away<br>from <em>home.</em></h1>
                            <p class="hero-intro"><?= e($residence['intro']) ?></p>
                            <div class="hero-actions">
                                <a class="button" href="#rooms">Explore YZU Dorms <span class="button-arrow" aria-hidden="true">↘</span></a>
                                <a class="text-link" href="#daily-life">Dormitory living & learning <span aria-hidden="true">→</span></a>
                            </div>
                            <div class="hero-note"><?= e($residence['note']) ?></div>
                        </div>
                        <div class="hero-art" aria-label="Illustration of Yuan Ze University student housing">
                            <span class="hero-stamp" aria-hidden="true">YZU<br>Dormitory</span>
                            <svg viewBox="0 0 720 590" role="img" aria-labelledby="building-title building-desc">
                                <title id="building-title"><?= e($residence['hall']) ?>, Campus Housing</title>
                                <desc id="building-desc">An illustration of modern university residence blocks with structured windows and balconies.</desc>
                                <defs>
                                    <pattern id="grid-pattern" width="40" height="40" patternUnits="userSpaceOnUse">
                                        <path d="M40 0H0V40" fill="none" stroke="#94a3b8" stroke-opacity=".3" stroke-width="1"/>
                                    </pattern>
                                </defs>
                                <circle cx="520" cy="140" r="70" fill="#93c5fd" opacity=".6"/>
                                <path d="M0 450c140-30 250-10 380-20 130-10 210-40 340-10v150H0Z" fill="#cbd5e1"/>
                                <rect x="120" y="150" width="480" height="300" rx="6" fill="#e2e8f0" stroke="#0f3c5d" stroke-width="4"/>
                                <path d="M160 190h80v80h-80zM280 190h80v80h-80zM400 190h80v80h-80zM520 190h40v80h-40z" fill="#0f3c5d"/>
                                <path d="M160 310h80v80h-80zM280 310h80v80h-80zM400 310h80v80h-80zM520 310h40v80h-40z" fill="#3b82f6" opacity=".8"/>
                                <path d="M300 450v-60h120v60z" fill="#1e293b"/>
                            </svg>
                            <div class="hero-caption">
                                <strong><?= e($residence['hall']) ?></strong>
                                <span><?= e($residence['school']) ?> · Taoyuan City</span>
                            </div>
                        </div>
                    </div>
                </section>
</html>