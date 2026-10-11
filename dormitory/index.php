<?php
declare(strict_types=1);

/*
 * Sample residence page. Update this small content model to adapt the page
 * for another school or hall; all visitor-facing copy is rendered below.
 */
$residence = [
    'school' => 'Bellweather College',
    'hall' => 'Juniper Hall',
    'eyebrow' => 'A place to begin',
    'intro' => 'A good room gives you somewhere to land. A good residence gives the rest of campus somewhere to grow.',
    'note' => 'A sample residence page — use your college housing office for current details.',
];
$hallInitial = strtoupper(substr($residence['hall'], 0, 1));

$navItems = [
    ['label' => 'The rooms', 'href' => '#rooms'],
    ['label' => 'Shared spaces', 'href' => '#spaces'],
    ['label' => 'A day here', 'href' => '#daily-life'],
    ['label' => 'Housing guide', 'href' => '#housing-guide'],
];

$roomTypes = [
    [
        'number' => '01',
        'name' => 'A room of your own',
        'type' => 'Single room',
        'description' => 'A quieter corner to settle into your own pace: reading light, familiar objects, and a little room to think.',
        'detail' => 'A personal retreat',
        'class' => 'room-card--single',
        'symbol' => 'window',
    ],
    [
        'number' => '02',
        'name' => 'A room to share',
        'type' => 'Shared room',
        'description' => 'A shared starting point for new routines, late-night conversations, and learning how to make a small space yours.',
        'detail' => 'Room for two stories',
        'class' => 'room-card--shared',
        'symbol' => 'beds',
    ],
    [
        'number' => '03',
        'name' => 'A little more room',
        'type' => 'Suite-style living',
        'description' => 'A home base with a little extra breathing space, shaped around the rhythms of the people who live there.',
        'detail' => 'Space to settle in',
        'class' => 'room-card--suite',
        'symbol' => 'door',
    ],
];

$spaces = [
    [
        'index' => '01 / MAKE',
        'name' => 'The common room',
        'text' => 'A low-pressure place to meet, work on a project, or simply be around people without needing a plan.',
        'mark' => 'C',
        'tone' => 'space-panel--rose',
    ],
    [
        'index' => '02 / PAUSE',
        'name' => 'The quiet corner',
        'text' => 'A softer, slower spot for a book, a deep breath, or a few minutes away from the day.',
        'mark' => 'Q',
        'tone' => 'space-panel--sage',
    ],
    [
        'index' => '03 / GATHER',
        'name' => 'The shared table',
        'text' => 'The kind of everyday meeting place where introductions turn into familiar faces.',
        'mark' => 'T',
        'tone' => 'space-panel--gold',
    ],
];

$dailyMoments = [
    ['time' => 'MORNING', 'title' => 'Find your footing', 'copy' => 'A first cup, a familiar route, and a few quiet minutes before the campus comes into focus.'],
    ['time' => 'AFTERNOON', 'title' => 'Come back between things', 'copy' => 'Drop your bag, trade notes, and take a breath before the next class, club, or conversation.'],
    ['time' => 'EVENING', 'title' => 'Make the day your own', 'copy' => 'Study side by side, cook up a plan for tomorrow, or call it an early night.'],
];

$guideSteps = [
    ['step' => '01', 'title' => 'Start with your college', 'copy' => 'For real room options, availability, costs, and dates, begin with the official housing office or student portal.'],
    ['step' => '02', 'title' => 'Compare what matters to you', 'copy' => 'Think about the kind of room, daily routine, and shared setting that would help you feel at home.'],
    ['step' => '03', 'title' => 'Ask before you decide', 'copy' => 'Use your college’s official contact channels to clarify current details and any individual needs.'],
];

$faqs = [
    [
        'question' => 'How do I find current room availability?',
        'answer' => 'Availability changes over time. Check your college housing portal or contact its housing office for the latest information.',
    ],
    [
        'question' => 'Where can I find current costs and dates?',
        'answer' => 'This sample page does not list rates or deadlines. Your college’s official housing materials are the right place to confirm current costs and dates.',
    ],
    [
        'question' => 'Can I request a particular room type?',
        'answer' => 'Room choices and request processes vary by college. Ask the housing office what options and steps are currently available.',
    ],
];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f4f0e7">
    <meta name="description" content="<?= e($residence['note']) ?> Learn about rooms, shared spaces, daily life, and finding housing information at <?= e($residence['hall']) ?>.">
    <title><?= e($residence['hall']) ?> — <?= e($residence['school']) ?></title>
    <style>
        :root {
            color-scheme: light;
            --paper: #f4f0e7;
            --paper-deep: #e8e1d4;
            --ink: #23372f;
            --ink-soft: #56675d;
            --forest: #23493d;
            --forest-deep: #18392f;
            --moss: #a4af8f;
            --rose: #d89e8a;
            --rose-wash: #eed9ce;
            --gold: #d8ad61;
            --line: rgba(35, 55, 47, .2);
            --serif: Georgia, "Times New Roman", serif;
            --sans: "Trebuchet MS", "Gill Sans", "Segoe UI", sans-serif;
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
        body::before {
            position: fixed;
            z-index: 10;
            inset: 0;
            pointer-events: none;
            content: "";
            opacity: .14;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.92' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.24'/%3E%3C/svg%3E");
            mix-blend-mode: multiply;
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
            background: var(--forest-deep);
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
        .eyebrow { color: var(--forest); }
        .site-header {
            position: relative;
            z-index: 20;
            border-bottom: 1px solid var(--line);
            background: rgba(244, 240, 231, .96);
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
            border: 1px solid var(--forest);
            border-radius: 50%;
            color: var(--forest);
            font-family: var(--serif);
            font-size: 19px;
            font-style: italic;
        }
        .brand-text { display: grid; line-height: 1.15; }
        .brand-text strong { font-family: var(--serif); font-size: 15px; font-weight: 600; }
        .brand-text span { margin-top: 4px; color: var(--ink-soft); font-size: 9px; letter-spacing: .13em; text-transform: uppercase; }
        .desktop-nav { display: flex; align-items: center; gap: clamp(19px, 2.4vw, 38px); }
        .nav-link { text-decoration: none; transition: color .2s ease; }
        .nav-link:hover { color: #a4533d; }
        .nav-link--action { padding: 12px 16px; border: 1px solid var(--forest); color: var(--forest); }
        .nav-link--action:hover { background: var(--forest); color: var(--paper); }
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
        .hero-copy .eyebrow::before { width: 30px; height: 1px; background: var(--rose); content: ""; }
        h1, h2, h3, p { margin-top: 0; }
        .hero h1 {
            max-width: 680px;
            margin: 22px 0 23px;
            font-family: var(--serif);
            font-size: clamp(57px, 7.4vw, 105px);
            font-weight: 400;
            letter-spacing: -.065em;
            line-height: .91;
        }
        .hero h1 em { color: #9b5948; font-weight: 400; }
        .hero-intro { max-width: 450px; margin: 0; color: var(--ink-soft); font-size: clamp(15px, 1.25vw, 18px); line-height: 1.75; }
        .hero-actions { display: flex; align-items: center; flex-wrap: wrap; gap: 24px; margin-top: 34px; }
        .button {
            display: inline-flex;
            min-height: 49px;
            align-items: center;
            justify-content: center;
            gap: 19px;
            padding: 0 18px;
            border: 1px solid var(--forest);
            background: var(--forest);
            color: var(--paper);
            text-decoration: none;
            transition: background .2s ease, color .2s ease, transform .2s ease;
        }
        .button:hover { transform: translateY(-2px); background: var(--forest-deep); }
        .button-arrow { font-size: 17px; line-height: 1; }
        .text-link { display: inline-flex; align-items: center; gap: 8px; color: var(--forest); font-size: 12px; font-weight: 700; text-decoration: none; }
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
            width: min(220px, 44%);
            flex-direction: column;
            padding: 17px 19px;
            background: var(--paper);
            box-shadow: 0 11px 35px rgba(37, 53, 45, .09);
        }
        .hero-caption strong { font-family: var(--serif); font-size: 17px; font-weight: 500; }
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
            border: 1px solid rgba(35, 73, 61, .42);
            border-radius: 50%;
            color: var(--forest);
            font-family: var(--serif);
            font-size: 13px;
            font-style: italic;
            text-align: center;
            transform: rotate(9deg);
        }
        .hero-stamp::before { position: absolute; inset: 6px; border: 1px dashed rgba(35, 73, 61, .4); border-radius: 50%; content: ""; }
        .hero-note {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 37px;
            color: var(--ink-soft);
            font-size: 11px;
        }
        .hero-note::before { width: 25px; height: 1px; background: var(--rose); content: ""; }

        .ribbon {
            position: relative;
            z-index: 3;
            padding: 19px 0;
            background: var(--forest);
            color: var(--paper);
        }
        .ribbon-inner { display: flex; align-items: center; justify-content: space-between; gap: 20px; }
        .ribbon-item { display: flex; align-items: center; gap: 12px; color: rgba(244, 240, 231, .9); font-size: 11px; letter-spacing: .08em; }
        .ribbon-mark { color: var(--gold); font-family: var(--serif); font-size: 19px; font-style: italic; }
        .ribbon-divider { width: 1px; height: 20px; background: rgba(244, 240, 231, .27); }

        .intro-section { padding: clamp(82px, 10vw, 145px) 0 clamp(86px, 10vw, 138px); }
        .intro-grid { display: grid; grid-template-columns: .36fr 1fr; gap: clamp(30px, 9vw, 135px); align-items: start; }
        .section-kicker { display: flex; align-items: center; gap: 11px; color: #9b5948; }
        .section-kicker::before { width: 25px; height: 1px; background: currentColor; content: ""; }
        .intro-copy h2 {
            max-width: 840px;
            margin: 0;
            font-family: var(--serif);
            font-size: clamp(35px, 5vw, 66px);
            font-weight: 400;
            letter-spacing: -.045em;
            line-height: 1.08;
        }
        .intro-copy h2 em { color: #9b5948; font-weight: 400; }
        .intro-bottom { display: flex; align-items: end; justify-content: space-between; gap: 32px; margin-top: 33px; }
        .intro-bottom p { max-width: 455px; margin: 0; color: var(--ink-soft); font-size: 14px; }
        .scribble { min-width: 130px; color: var(--forest); font-family: var(--serif); font-size: 16px; font-style: italic; transform: rotate(-5deg); }

        .rooms-section { padding: 95px 0 106px; background: #e9e4d8; }
        .section-heading { display: flex; align-items: end; justify-content: space-between; gap: 32px; margin-bottom: 43px; }
        .section-heading h2 {
            max-width: 640px;
            margin: 12px 0 0;
            font-family: var(--serif);
            font-size: clamp(42px, 5.5vw, 72px);
            font-weight: 400;
            letter-spacing: -.055em;
            line-height: .98;
        }
        .section-heading p { max-width: 280px; margin: 0 0 4px; color: var(--ink-soft); font-size: 13px; }
        .room-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }
        .room-card { min-width: 0; background: var(--paper); }
        .room-card-art { position: relative; overflow: hidden; height: 235px; }
        .room-card--single .room-card-art { background: #d4cdbd; }
        .room-card--shared .room-card-art { background: #d9b3a2; }
        .room-card--suite .room-card-art { background: #b9c0a7; }
        .room-graphic { position: absolute; inset: 0; width: 100%; height: 100%; }
        .room-type { position: absolute; top: 16px; left: 17px; padding: 8px 9px; background: rgba(244, 240, 231, .92); color: var(--forest); }
        .room-card-content { padding: 25px 25px 26px; }
        .room-card-top { display: flex; align-items: baseline; justify-content: space-between; gap: 12px; }
        .room-card h3 { margin: 0; font-family: var(--serif); font-size: clamp(21px, 2.3vw, 29px); font-weight: 400; letter-spacing: -.035em; }
        .room-number { color: #9b5948; font-family: var(--serif); font-size: 15px; font-style: italic; }
        .room-card p { min-height: 76px; margin: 14px 0 20px; color: var(--ink-soft); font-size: 12px; line-height: 1.75; }
        .room-meta { display: flex; align-items: center; gap: 8px; padding-top: 14px; border-top: 1px solid var(--line); color: var(--forest); font-size: 10px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; }
        .room-meta::before { width: 7px; height: 7px; border-radius: 50%; background: var(--rose); content: ""; }
        .rooms-footnote { display: flex; align-items: center; gap: 12px; margin: 25px 0 0; color: var(--ink-soft); font-size: 11px; }
        .rooms-footnote span { color: #9b5948; font-family: var(--serif); font-size: 18px; font-style: italic; }

        .spaces-section { padding: 105px 0 112px; background: var(--forest); color: var(--paper); }
        .spaces-section .section-kicker { color: var(--gold); }
        .spaces-section .section-heading h2 { max-width: 720px; }
        .spaces-section .section-heading p { color: rgba(244, 240, 231, .72); }
        .spaces-grid { display: grid; grid-template-columns: 1.15fr .92fr .92fr; align-items: stretch; gap: 13px; }
        .space-panel { position: relative; display: flex; min-height: 330px; flex-direction: column; justify-content: space-between; overflow: hidden; padding: 22px; color: var(--ink); }
        .space-panel--rose { background: #d8a38e; }
        .space-panel--sage { background: #b7c0a8; }
        .space-panel--gold { background: #d8b976; }
        .space-index { position: relative; z-index: 1; color: rgba(35, 55, 47, .75); }
        .space-mark {
            position: absolute;
            top: 18px;
            right: 17px;
            color: rgba(35, 55, 47, .14);
            font-family: var(--serif);
            font-size: clamp(135px, 18vw, 245px);
            font-style: italic;
            line-height: .8;
            pointer-events: none;
        }
        .space-copy { position: relative; z-index: 1; max-width: 305px; }
        .space-copy h3 { margin: 0 0 10px; font-family: var(--serif); font-size: clamp(28px, 3vw, 39px); font-weight: 400; letter-spacing: -.04em; line-height: 1; }
        .space-copy p { margin: 0; max-width: 290px; color: rgba(35, 55, 47, .82); font-size: 12px; line-height: 1.7; }
        .spaces-tail { display: flex; justify-content: flex-end; margin-top: 23px; color: rgba(244, 240, 231, .72); font-family: var(--serif); font-size: 15px; font-style: italic; }

        .daily-section { padding: 112px 0 105px; }
        .daily-layout { display: grid; grid-template-columns: .8fr 1.2fr; gap: clamp(35px, 9vw, 130px); }
        .daily-heading { position: sticky; top: 35px; align-self: start; }
        .daily-heading h2 { max-width: 450px; margin: 14px 0 20px; font-family: var(--serif); font-size: clamp(45px, 5.5vw, 72px); font-weight: 400; letter-spacing: -.055em; line-height: .96; }
        .daily-heading p { max-width: 315px; margin: 0; color: var(--ink-soft); font-size: 13px; }
        .moments { border-top: 1px solid var(--line); }
        .moment { display: grid; grid-template-columns: 112px 1fr; gap: 21px; padding: 27px 0 29px; border-bottom: 1px solid var(--line); }
        .moment-time { padding-top: 7px; color: #9b5948; }
        .moment h3 { margin: 0 0 8px; font-family: var(--serif); font-size: clamp(25px, 3vw, 35px); font-weight: 400; letter-spacing: -.04em; }
        .moment p { max-width: 430px; margin: 0; color: var(--ink-soft); font-size: 13px; }
        .daily-quote { margin: 40px 0 0; padding: 20px 0 0 23px; border-left: 1px solid var(--rose); color: var(--forest); font-family: var(--serif); font-size: 21px; font-style: italic; line-height: 1.35; }

        .housing-section { padding: 101px 0 111px; background: var(--rose-wash); }
        .housing-layout { display: grid; grid-template-columns: .85fr 1.15fr; gap: clamp(40px, 8vw, 115px); }
        .housing-lede h2 { max-width: 490px; margin: 13px 0 22px; font-family: var(--serif); font-size: clamp(43px, 5.2vw, 67px); font-weight: 400; letter-spacing: -.05em; line-height: .99; }
        .housing-lede > p { max-width: 395px; color: var(--ink-soft); font-size: 13px; }
        .guide-notice { display: flex; align-items: flex-start; gap: 12px; max-width: 400px; margin-top: 27px; padding-top: 15px; border-top: 1px solid rgba(35, 55, 47, .25); color: var(--ink-soft); font-size: 11px; }
        .guide-notice span { color: #9b5948; font-family: var(--serif); font-size: 19px; line-height: 1; }
        .steps { border-top: 1px solid rgba(35, 55, 47, .3); }
        .guide-step { display: grid; grid-template-columns: 52px 1fr; gap: 18px; padding: 21px 0 23px; border-bottom: 1px solid rgba(35, 55, 47, .3); }
        .step-number { padding-top: 6px; color: #9b5948; }
        .guide-step h3 { margin: 0 0 5px; font-family: var(--serif); font-size: 25px; font-weight: 400; letter-spacing: -.025em; }
        .guide-step p { max-width: 490px; margin: 0; color: var(--ink-soft); font-size: 12px; }
        .housing-cta { display: inline-flex; margin-top: 24px; align-items: center; gap: 11px; color: var(--forest); font-size: 11px; font-weight: 700; letter-spacing: .09em; text-decoration: none; text-transform: uppercase; }
        .housing-cta:hover { text-decoration: underline; text-underline-offset: 4px; }
        .housing-cta span { font-size: 17px; }

        .faq-section { padding: 104px 0 112px; }
        .faq-layout { display: grid; grid-template-columns: .74fr 1.26fr; gap: clamp(38px, 9vw, 132px); }
        .faq-title h2 { max-width: 390px; margin: 13px 0 17px; font-family: var(--serif); font-size: clamp(43px, 5vw, 64px); font-weight: 400; letter-spacing: -.05em; line-height: 1; }
        .faq-title p { max-width: 300px; margin: 0; color: var(--ink-soft); font-size: 13px; }
        .faq-list { border-top: 1px solid var(--line); }
        .faq-list details { border-bottom: 1px solid var(--line); }
        .faq-list summary { position: relative; display: flex; min-height: 67px; align-items: center; justify-content: space-between; gap: 20px; padding: 14px 0; cursor: pointer; list-style: none; font-family: var(--serif); font-size: 19px; }
        .faq-list summary::-webkit-details-marker { display: none; }
        .faq-list summary::after { flex: 0 0 auto; color: #9b5948; content: "+"; font-family: var(--sans); font-size: 20px; font-weight: 400; }
        .faq-list details[open] summary::after { content: "−"; }
        .faq-answer { max-width: 560px; padding: 0 35px 19px 0; color: var(--ink-soft); font-size: 12px; }
        .faq-answer p { margin: 0; }

        .closing { overflow: hidden; padding: 76px 0 81px; background: var(--paper-deep); }
        .closing-inner { display: flex; align-items: end; justify-content: space-between; gap: 42px; }
        .closing-copy .eyebrow { color: #9b5948; }
        .closing-copy h2 { max-width: 730px; margin: 12px 0 0; font-family: var(--serif); font-size: clamp(39px, 5vw, 65px); font-weight: 400; letter-spacing: -.05em; line-height: 1; }
        .closing-mark { position: relative; flex: 0 0 118px; height: 118px; border: 1px solid rgba(35, 73, 61, .38); border-radius: 50%; }
        .closing-mark::before, .closing-mark::after { position: absolute; inset: 12px; border: 1px solid rgba(35, 73, 61, .32); border-radius: 50%; content: ""; }
        .closing-mark::after { inset: 34px; background: var(--rose); border: 0; }
        .closing-mark span { position: absolute; z-index: 1; top: 50%; left: 50%; color: var(--forest); font-family: var(--serif); font-size: 13px; font-style: italic; transform: translate(-50%, -50%); }

        .site-footer { padding: 28px 0 30px; background: var(--forest-deep); color: var(--paper); }
        .footer-inner { display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .footer-brand { display: flex; align-items: center; gap: 11px; }
        .footer-brand .brand-seal { width: 34px; height: 34px; border-color: rgba(244, 240, 231, .55); color: var(--paper); font-size: 16px; }
        .footer-brand strong { font-family: var(--serif); font-size: 14px; font-weight: 400; }
        .footer-note { max-width: 400px; margin: 0; color: rgba(244, 240, 231, .67); font-size: 10px; text-align: center; }
        .footer-top { color: var(--paper); font-size: 10px; letter-spacing: .13em; text-decoration: none; text-transform: uppercase; }
        .footer-top:hover { color: var(--gold); }

        @media (max-width: 900px) {
            .hero { min-height: auto; padding-top: 35px; }
            .hero-layout { grid-template-columns: 1fr 1fr; gap: 20px; }
            .hero h1 { font-size: clamp(56px, 8vw, 82px); }
            .hero-art { min-height: 420px; }
            .room-card-content { padding-inline: 18px; }
            .room-card p { min-height: 96px; }
            .daily-layout, .housing-layout { gap: 50px; }
        }
        @media (max-width: 680px) {
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
                color: var(--forest);
                cursor: pointer;
                font-size: 10px;
                font-weight: 700;
                letter-spacing: .12em;
                list-style: none;
                text-transform: uppercase;
            }
            .mobile-menu summary::-webkit-details-marker { display: none; }
            .menu-icon { display: grid; width: 19px; gap: 4px; }
            .menu-icon i { display: block; height: 1px; background: var(--forest); }
            .mobile-menu[open] .menu-icon i:first-child { transform: translateY(2.5px) rotate(45deg); }
            .mobile-menu[open] .menu-icon i:last-child { transform: translateY(-2.5px) rotate(-45deg); }
            .mobile-menu nav {
                position: absolute;
                top: 51px;
                right: -4px;
                display: grid;
                width: min(280px, calc(100vw - 36px));
                padding: 9px 18px;
                border: 1px solid var(--line);
                background: var(--paper);
                box-shadow: 0 15px 28px rgba(35, 55, 47, .1);
            }
            .mobile-menu .nav-link { padding: 15px 0; border-bottom: 1px solid var(--line); }
            .mobile-menu .nav-link:last-child { border-bottom: 0; }
            .mobile-menu .nav-link--action { padding: 13px 0; border: 0; }
            .hero { padding: 44px 0 43px; }
            .hero::after { top: 48%; right: -29%; width: 112%; height: 55%; clip-path: polygon(27% 0, 100% 0, 100% 100%, 0 100%); }
            .hero-layout { display: flex; flex-direction: column; align-items: stretch; gap: 5px; }
            .hero-copy { padding: 0; }
            .hero h1 { max-width: 540px; margin: 18px 0 18px; font-size: clamp(58px, 15vw, 86px); }
            .hero-intro { max-width: 420px; font-size: 14px; }
            .hero-actions { gap: 17px; margin-top: 24px; }
            .hero-art { min-height: min(99vw, 440px); margin: -2px -12px 0; }
            .hero-stamp { top: 7%; right: 5%; width: 72px; height: 72px; font-size: 11px; }
            .hero-caption { right: 2%; bottom: 0; width: 185px; padding: 12px 14px; }
            .hero-note { margin-top: 18px; font-size: 10px; }
            .ribbon { padding: 16px 0; }
            .ribbon-inner { justify-content: flex-start; overflow-x: auto; scrollbar-width: none; }
            .ribbon-inner::-webkit-scrollbar { display: none; }
            .ribbon-item { flex: 0 0 auto; font-size: 9px; }
            .ribbon-divider { flex: 0 0 1px; }
            .intro-section { padding: 77px 0 81px; }
            .intro-grid { grid-template-columns: 1fr; gap: 24px; }
            .intro-copy h2 { font-size: clamp(37px, 9.5vw, 55px); }
            .intro-bottom { align-items: start; flex-direction: column; gap: 20px; margin-top: 22px; }
            .scribble { align-self: flex-end; }
            .rooms-section, .spaces-section, .daily-section, .housing-section, .faq-section { padding: 76px 0 82px; }
            .section-heading { align-items: start; flex-direction: column; gap: 17px; margin-bottom: 29px; }
            .section-heading h2 { font-size: clamp(43px, 11vw, 62px); }
            .section-heading p { max-width: 410px; }
            .room-grid { grid-template-columns: 1fr; gap: 15px; }
            .room-card-art { height: 220px; }
            .room-card-content { padding: 22px; }
            .room-card h3 { font-size: 28px; }
            .room-card p { min-height: 0; }
            .rooms-footnote { align-items: flex-start; font-size: 10px; }
            .spaces-grid { grid-template-columns: 1fr; gap: 12px; }
            .space-panel { min-height: 255px; }
            .spaces-grid .space-panel:first-child { min-height: 300px; }
            .space-mark { font-size: 180px; }
            .spaces-tail { font-size: 13px; }
            .daily-layout { grid-template-columns: 1fr; gap: 35px; }
            .daily-heading { position: static; }
            .daily-heading h2 { font-size: clamp(47px, 11vw, 66px); }
            .moment { grid-template-columns: 83px 1fr; gap: 10px; padding: 22px 0 24px; }
            .moment-time { font-size: 9px; }
            .moment h3 { font-size: 27px; }
            .moment p { font-size: 12px; }
            .daily-quote { margin-top: 27px; font-size: 19px; }
            .housing-layout { grid-template-columns: 1fr; gap: 38px; }
            .housing-lede h2 { font-size: clamp(47px, 11vw, 66px); }
            .guide-step { grid-template-columns: 39px 1fr; gap: 12px; padding-block: 19px; }
            .guide-step h3 { font-size: 22px; }
            .faq-layout { grid-template-columns: 1fr; gap: 32px; }
            .faq-title h2 { font-size: clamp(47px, 11vw, 64px); }
            .faq-list summary { font-size: 17px; }
            .closing { padding: 63px 0; }
            .closing-inner { align-items: center; gap: 20px; }
            .closing-copy h2 { font-size: clamp(36px, 9vw, 52px); }
            .closing-mark { flex-basis: 72px; height: 72px; }
            .closing-mark::before { inset: 7px; }
            .closing-mark::after { inset: 21px; }
            .closing-mark span { font-size: 10px; }
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
                <a class="nav-link nav-link--action" href="#housing-guide">Find housing info</a>
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
                    <a class="nav-link nav-link--action" href="#housing-guide">Find housing info</a>
                </nav>
            </details>
        </div>
    </header>

    <main id="main-content">
        <section class="hero" aria-labelledby="hero-title">
            <div class="wrap hero-layout">
                <div class="hero-copy">
                    <div class="eyebrow"><?= e($residence['eyebrow']) ?> · Residence life</div>
                    <h1 id="hero-title">Room to<br>be <em>yourself.</em></h1>
                    <p class="hero-intro"><?= e($residence['intro']) ?></p>
                    <div class="hero-actions">
                        <a class="button" href="#rooms">Explore the rooms <span class="button-arrow" aria-hidden="true">↘</span></a>
                        <a class="text-link" href="#daily-life">A day at <?= e($residence['hall']) ?> <span aria-hidden="true">→</span></a>
                    </div>
                    <div class="hero-note"><?= e($residence['note']) ?></div>
                </div>
                <div class="hero-art" aria-label="Illustration of a welcoming campus residence">
                    <span class="hero-stamp" aria-hidden="true">A home<br>on campus</span>
                    <svg viewBox="0 0 720 590" role="img" aria-labelledby="building-title building-desc">
                        <title id="building-title"><?= e($residence['hall']) ?>, in an imagined campus setting</title>
                        <desc id="building-desc">A hand-drawn illustration of a brick residence with tall windows, a central doorway, and garden plants.</desc>
                        <defs>
                            <pattern id="brick" width="58" height="28" patternUnits="userSpaceOnUse">
                                <path d="M0 0H58M0 14H58M29 14V28M0 0V14M58 0V14" fill="none" stroke="#927f6b" stroke-opacity=".28" stroke-width="1"/>
                            </pattern>
                        </defs>
                        <circle cx="506" cy="160" r="78" fill="#d9ad61" opacity=".58"/>
                        <path d="M0 442C134 402 211 433 326 418c130-17 230-26 394 9v163H0Z" fill="#a4af8f"/>
                        <path d="M83 463V251l121-102 114 82 91-102 168 119v226Z" fill="#c7967b" stroke="#665b4a" stroke-width="3"/>
                        <path d="M83 251l121-102 114 82 91-102 168 119" fill="none" stroke="#665b4a" stroke-width="4"/>
                        <path d="M82 270h495v193H82z" fill="url(#brick)" opacity=".8"/>
                        <path d="M145 294h63v83h-63zM261 294h63v83h-63zM377 294h63v83h-63zM493 294h48v83h-48z" fill="#6f897b" stroke="#5b5546" stroke-width="4"/>
                        <path d="M177 294v83M145 335h63M293 294v83M261 335h63M409 294v83M377 335h63M517 294v83M493 335h48" stroke="#f0e7d7" stroke-width="3" opacity=".78"/>
                        <path d="M267 463V376c0-28 19-50 44-50s44 22 44 50v87Z" fill="#375b4b" stroke="#5b5546" stroke-width="4"/>
                        <path d="M292 463v-82c0-13 8-23 19-23s19 10 19 23v82" fill="none" stroke="#d6bd8a" stroke-width="2"/>
                        <circle cx="319" cy="419" r="3" fill="#d6bd8a"/>
                        <path d="M102 464h460M110 477h442" fill="none" stroke="#665b4a" stroke-width="3"/>
                        <path d="M53 462c18-34 22-57 19-86 27 23 35 48 27 86M572 463c18-42 37-65 67-82-3 31-20 59-47 82M594 464c26-27 50-39 82-42-14 26-39 43-74 54" fill="none" stroke="#557362" stroke-linecap="round" stroke-width="9"/>
                        <path d="M611 387c8-5 15-5 21-1M69 400c9-7 18-9 27-6M648 443c8-6 15-9 23-8" fill="none" stroke="#557362" stroke-linecap="round" stroke-width="6"/>
                        <path d="M25 495h657" stroke="#52654f" stroke-width="3" stroke-linecap="round"/>
                        <path d="M117 484c-8 5-10 15-3 23M551 484c-5 8-4 17 5 24" fill="none" stroke="#f4f0e7" stroke-width="2" opacity=".85"/>
                        <path d="M110 239l94-78 89 64M376 217l34-38 89 64" fill="none" stroke="#e4baa0" stroke-width="2"/>
                    </svg>
                    <div class="hero-caption">
                        <strong><?= e($residence['hall']) ?></strong>
                        <span><?= e($residence['school']) ?> · sample residence</span>
                    </div>
                </div>
            </div>
        </section>

        <div class="ribbon" aria-label="Residence themes">
            <div class="wrap ribbon-inner">
                <div class="ribbon-item"><span class="ribbon-mark">01</span> A place to recharge</div>
                <span class="ribbon-divider" aria-hidden="true"></span>
                <div class="ribbon-item"><span class="ribbon-mark">02</span> People within reach</div>
                <span class="ribbon-divider" aria-hidden="true"></span>
                <div class="ribbon-item"><span class="ribbon-mark">03</span> Campus in your orbit</div>
            </div>
        </div>

        <section class="intro-section" aria-labelledby="intro-title">
            <div class="wrap intro-grid">
                <div class="section-kicker eyebrow">More than a room</div>
                <div class="intro-copy">
                    <h2 id="intro-title">The small in-between moments become <em>your campus life.</em></h2>
                    <div class="intro-bottom">
                        <p>Hall life is made from ordinary things: a hello in the corridor, a shared table, a familiar place to return to. <?= e($residence['hall']) ?> is imagined as a comfortable starting point for all of it.</p>
                        <div class="scribble" aria-hidden="true">Make yourself at home.</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rooms-section" id="rooms" aria-labelledby="rooms-title">
            <div class="wrap">
                <div class="section-heading">
                    <div>
                        <div class="eyebrow section-kicker">Your own kind of space</div>
                        <h2 id="rooms-title">A room that<br>feels like yours.</h2>
                    </div>
                    <p>Every student arrives with a different idea of home. Start with the setup that suits the way you like to live and learn.</p>
                </div>
                <div class="room-grid">
                    <?php foreach ($roomTypes as $room): ?>
                        <article class="room-card <?= e($room['class']) ?>">
                            <div class="room-card-art">
                                <span class="room-type"><?= e($room['type']) ?></span>
                                <?php if ($room['symbol'] === 'window'): ?>
                                    <svg class="room-graphic" viewBox="0 0 420 250" role="img" aria-label="Illustration of a single room with a broad window and desk">
                                        <rect width="420" height="250" fill="#d4cdbd"/>
                                        <path d="M0 193h420v57H0Z" fill="#b1a996"/>
                                        <path d="M239 34h127v111H239z" fill="#e9e4d8" stroke="#656b5b" stroke-width="4"/>
                                        <path d="M250 46h105v87H250z" fill="#9cb3a3"/>
                                        <path d="M303 46v87M250 89h105" stroke="#f4f0e7" stroke-width="5"/>
                                        <path d="M260 132c12-21 21-33 35-43 10 21 23 33 47 43" fill="none" stroke="#6f8065" stroke-width="3"/>
                                        <path d="M37 174h178v13H37zM56 187v45M196 187v45" fill="#765f4b"/>
                                        <path d="M70 158h90v16H70z" fill="#d89e8a"/>
                                        <path d="M76 151h56v7H76z" fill="#f4f0e7"/>
                                        <path d="M22 232h396" stroke="#6d695a" stroke-width="3"/>
                                        <path d="M26 230V70M13 230V88h27" fill="none" stroke="#556c5d" stroke-width="5"/>
                                        <circle cx="32" cy="66" r="23" fill="#a4af8f"/>
                                        <path d="M27 67c10-13 17-13 25-8M18 73c7-9 13-11 20-10" stroke="#73836a" stroke-width="3" fill="none"/>
                                    </svg>
                                <?php elseif ($room['symbol'] === 'beds'): ?>
                                    <svg class="room-graphic" viewBox="0 0 420 250" role="img" aria-label="Illustration of two beds in a shared room">
                                        <rect width="420" height="250" fill="#d9b3a2"/>
                                        <path d="M0 193h420v57H0Z" fill="#bb927e"/>
                                        <rect x="162" y="31" width="108" height="108" fill="#f1dfd3" stroke="#725c50" stroke-width="4"/>
                                        <rect x="172" y="41" width="88" height="88" fill="#9aaf9f"/>
                                        <path d="M216 41v88M172 85h88" stroke="#eee6dc" stroke-width="4"/>
                                        <path d="M30 153h164v49H30z" fill="#f0e8dc" stroke="#695848" stroke-width="3"/>
                                        <path d="M30 181h164v21H30z" fill="#758879"/>
                                        <path d="M43 154h48v27H43z" fill="#d4cdbd"/>
                                        <path d="M22 202v26M202 202v26" stroke="#695848" stroke-width="6"/>
                                        <path d="M226 153h164v49H226z" fill="#f0e8dc" stroke="#695848" stroke-width="3"/>
                                        <path d="M226 181h164v21H226z" fill="#9a695a"/>
                                        <path d="M238 154h48v27h-48z" fill="#d4cdbd"/>
                                        <path d="M218 202v26M398 202v26" stroke="#695848" stroke-width="6"/>
                                        <path d="M15 232h390" stroke="#6d695a" stroke-width="3"/>
                                        <path d="M103 147c-3-19 0-29 11-42 11 10 15 24 11 42" fill="#71816a"/>
                                        <path d="M114 147v-32" stroke="#59664e" stroke-width="2"/>
                                    </svg>
                                <?php else: ?>
                                    <svg class="room-graphic" viewBox="0 0 420 250" role="img" aria-label="Illustration of a suite-style room with a door and seating area">
                                        <rect width="420" height="250" fill="#b9c0a7"/>
                                        <path d="M0 193h420v57H0Z" fill="#9da68c"/>
                                        <path d="M267 30h99v164h-99z" fill="#e6dece" stroke="#65705d" stroke-width="4"/>
                                        <path d="M279 42h75v140h-75z" fill="#7f927e"/>
                                        <circle cx="341" cy="114" r="4" fill="#d8ad61"/>
                                        <path d="M47 156c0-21 16-37 36-37h39c20 0 36 16 36 37v37H47z" fill="#d89e8a"/>
                                        <path d="M40 194v20M165 194v20" stroke="#685b48" stroke-width="6"/>
                                        <path d="M66 154c0-12 8-22 20-22h46c12 0 20 10 20 22" fill="#eed9ce"/>
                                        <path d="M189 160h51v34h-51z" fill="#c59a68"/>
                                        <path d="M181 194h68" stroke="#685b48" stroke-width="5"/>
                                        <path d="M199 160v34M231 160v34" stroke="#8d714c" stroke-width="2"/>
                                        <path d="M20 232h382" stroke="#68705d" stroke-width="3"/>
                                        <path d="M226 150c-2-20 3-32 16-43 10 13 13 27 8 43" fill="#708367"/>
                                        <path d="M242 151v-34" stroke="#58664e" stroke-width="2"/>
                                    </svg>
                                <?php endif; ?>
                            </div>
                            <div class="room-card-content">
                                <div class="room-card-top">
                                    <h3><?= e($room['name']) ?></h3>
                                    <span class="room-number"><?= e($room['number']) ?></span>
                                </div>
                                <p><?= e($room['description']) ?></p>
                                <div class="room-meta"><?= e($room['detail']) ?></div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                <p class="rooms-footnote"><span>Note</span> Room types shown here are illustrative. Check with your college for current options.</p>
            </div>
        </section>

        <section class="spaces-section" id="spaces" aria-labelledby="spaces-title">
            <div class="wrap">
                <div class="section-heading">
                    <div>
                        <div class="eyebrow section-kicker">Room to come together</div>
                        <h2 id="spaces-title">The best spaces<br>leave room for everyone.</h2>
                    </div>
                    <p>Shared places can make a residence feel more like a neighborhood: familiar enough to return to, open enough to welcome someone new.</p>
                </div>
                <div class="spaces-grid">
                    <?php foreach ($spaces as $space): ?>
                        <article class="space-panel <?= e($space['tone']) ?>">
                            <div class="space-index"><?= e($space['index']) ?></div>
                            <span class="space-mark" aria-hidden="true"><?= e($space['mark']) ?></span>
                            <div class="space-copy">
                                <h3><?= e($space['name']) ?></h3>
                                <p><?= e($space['text']) ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                <div class="spaces-tail">A little room to be together, a little room to be yourself.</div>
            </div>
        </section>

        <section class="daily-section" id="daily-life" aria-labelledby="daily-title">
            <div class="wrap daily-layout">
                <div class="daily-heading">
                    <div class="eyebrow section-kicker">The everyday</div>
                    <h2 id="daily-title">Life, in the in-between.</h2>
                    <p>Not every moment needs a schedule. Here’s a small imagining of how a day at <?= e($residence['hall']) ?> might find its rhythm.</p>
                    <blockquote class="daily-quote">“The good part is having somewhere to return to.”</blockquote>
                </div>
                <div class="moments">
                    <?php foreach ($dailyMoments as $moment): ?>
                        <article class="moment">
                            <div class="moment-time"><?= e($moment['time']) ?></div>
                            <div>
                                <h3><?= e($moment['title']) ?></h3>
                                <p><?= e($moment['copy']) ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="housing-section" id="housing-guide" aria-labelledby="housing-title">
            <div class="wrap housing-layout">
                <div class="housing-lede">
                    <div class="eyebrow section-kicker">A practical next step</div>
                    <h2 id="housing-title">Good questions.<br>Clear next steps.</h2>
                    <p>Choosing where to live is personal. Use this guide to get started, then check the official housing information for details that apply to you.</p>
                    <div class="guide-notice"><span aria-hidden="true">i</span><div><?= e($residence['note']) ?> No applications or inquiries are collected on this page.</div></div>
                </div>
                <div>
                    <div class="steps">
                        <?php foreach ($guideSteps as $step): ?>
                            <article class="guide-step">
                                <div class="step-number"><?= e($step['step']) ?></div>
                                <div>
                                    <h3><?= e($step['title']) ?></h3>
                                    <p><?= e($step['copy']) ?></p>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                    <a class="housing-cta" href="#questions">Read common questions <span aria-hidden="true">↓</span></a>
                </div>
            </div>
        </section>

        <section class="faq-section" id="questions" aria-labelledby="faq-title">
            <div class="wrap faq-layout">
                <div class="faq-title">
                    <div class="eyebrow section-kicker">Before you settle in</div>
                    <h2 id="faq-title">A few useful things to know.</h2>
                    <p>For the details that change, the college housing office is your best source.</p>
                </div>
                <div class="faq-list">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <details <?= $index === 0 ? 'open' : '' ?>>
                            <summary><?= e($faq['question']) ?></summary>
                            <div class="faq-answer"><p><?= e($faq['answer']) ?></p></div>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="closing" aria-label="Closing note">
            <div class="wrap closing-inner">
                <div class="closing-copy">
                    <div class="eyebrow">A place to start</div>
                    <h2>Bring your own story.<br>There’s room for it here.</h2>
                </div>
                <div class="closing-mark" aria-hidden="true"><span>JH</span></div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="wrap footer-inner">
            <div class="footer-brand">
                <span class="brand-seal" aria-hidden="true"><?= e($hallInitial) ?></span>
                <strong><?= e($residence['hall']) ?> <span aria-hidden="true">·</span> <?= e($residence['school']) ?></strong>
            </div>
            <p class="footer-note"><?= e($residence['note']) ?> For current housing details, consult your college’s official resources.</p>
            <a class="footer-top" href="#top">Back to top ↑</a>
        </div>
    </footer>
</body>
</html>
