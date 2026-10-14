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
        'name' => 'Dormitory 1',
        'type' => "Standard Quad · Men's Residence",
        'description' => 'A men’s residence with shared rooms and communal facilities. Each bed has its own desk, chair, wardrobe, and internet connection.',
        'detail' => 'Men’s residence · Shared facilities',
        'class' => 'room-card--single',
        'symbol' => 'beds',
        'cover' => 'assets/dorm-1-room.webp',
        'coverAlt' => 'Dormitory 1 shared room with bunk beds and personal desks',
        'features' => ['Men’s residence', 'Shared bathroom facilities', 'Personal desk, chair, and wardrobe'],
        'gallery' => [
            ['src' => 'assets/dorm-1-room.webp', 'alt' => 'Dormitory 1 shared room with bunk beds and personal desks'],
            ['src' => 'assets/dorm-1-bathroom.webp', 'alt' => 'Bathroom facilities in Dormitory 1'],
            ['src' => 'assets/dorm-1-kitchen.webp', 'alt' => 'Updated shared kitchen in the men’s Dormitory 1'],
        ],
    ],
    [
        'number' => '02',
        'name' => 'Dormitory 2',
        'type' => 'Standard Quad · Women’s Residence',
        'description' => 'A women’s residence with shared rooms and communal facilities. Each bed has its own desk, chair, wardrobe, and internet connection.',
        'detail' => 'Women’s residence · Management Center on 1F',
        'class' => 'room-card--single',
        'symbol' => 'beds',
        'cover' => 'assets/dorm-2-room.webp',
        'coverAlt' => 'Dormitory 2 shared room with bunk beds and built-in desks',
        'features' => ['Women’s residence', 'Shared bathroom facilities', 'Management Center and package pickup on the first floor'],
        'gallery' => [
            ['src' => 'assets/dorm-2-room.webp', 'alt' => 'Dormitory 2 shared room with bunk beds and built-in desks'],
            ['src' => 'assets/dorm-2-corridor.webp', 'alt' => 'Hallway connecting rooms in Dormitory 2'],
            ['src' => 'assets/dorm-2-bathroom.webp', 'alt' => 'Bathroom facilities in Dormitory 2'],
            ['src' => 'assets/dorm-2-kitchen-angle-1.webp', 'alt' => 'Recently updated shared kitchen in Dormitory 2, wide view'],
            ['src' => 'assets/dorm-2-kitchen-angle-2.webp', 'alt' => 'Recently updated shared kitchen in Dormitory 2, dining area'],
            ['src' => 'assets/dorm-2-kitchen-angle-4.webp', 'alt' => 'Recently updated shared kitchen in Dormitory 2, counter and windows'],
            ['src' => 'assets/dorm-2-kitchen-angle-7.webp', 'alt' => 'Recently updated shared kitchen in Dormitory 2, counter and refrigerator'],
        ],
    ],
    [
        'number' => '03',
        'name' => 'Dormitory 3A',
        'type' => 'Private Suite · Higher-cost option',
        'description' => 'Women’s residence in the shared Dormitory 3 building, separated indoors from 3B by walls. Every room has a private bathroom and balcony; the suite layout is identical to 3B and costs more than Dormitories 1 and 2.',
        'detail' => 'Women’s residence · Private bathroom and balcony',
        'class' => 'room-card--shared',
        'symbol' => 'door',
        'cover' => 'assets/dorm-3-bedroom.webp',
        'coverAlt' => 'Shared Dormitory 3 suite bedroom with a raised bed and desk',
        'features' => ['Women’s residence', 'Private bathroom and balcony in every room', 'Same indoor suite layout as Dormitory 3B', 'Higher-cost than Dormitories 1 and 2'],
        'gallery' => [
            ['src' => 'assets/dorm-3-bedroom.webp', 'alt' => 'Shared Dormitory 3 suite bedroom with a raised bed and desk'],
            ['src' => 'assets/dorm-outside-1.webp', 'alt' => 'Another exterior view of the Dormitory 3 area'],
            ['src' => 'assets/shared-laundry.webp', 'alt' => 'Shared laundry facilities serving the Dormitory 3 balconies'],
        ],
    ],
    [
        'number' => '04',
        'name' => 'Dormitory 3B',
        'type' => 'Private Suite · Higher-cost option',
        'description' => 'Men’s residence in the shared Dormitory 3 building, separated indoors from 3A by walls. Every room has a private bathroom and balcony; the suite layout is identical to 3A and costs more than Dormitories 1 and 2.',
        'detail' => 'Men’s residence · Private bathroom and balcony',
        'class' => 'room-card--shared',
        'symbol' => 'door',
        'cover' => 'assets/dorm-3-bedroom.webp',
        'coverAlt' => 'Shared Dormitory 3 suite bedroom with a raised bed and desk',
        'features' => ['Men’s residence', 'Private bathroom and balcony in every room', 'Same indoor suite layout as Dormitory 3A', 'Higher-cost than Dormitories 1 and 2'],
        'gallery' => [
            ['src' => 'assets/dorm-3-bedroom.webp', 'alt' => 'Shared Dormitory 3 suite bedroom with a raised bed and desk'],
            ['src' => 'assets/dorm-3-building.webp', 'alt' => 'Exterior view of the shared Dormitory 3 building'],
            ['src' => 'assets/shared-laundry.webp', 'alt' => 'Shared laundry facilities serving the Dormitory 3 balconies'],
        ],
    ],
    [
        'number' => '05',
        'name' => 'Jih-Shian Building',
        'type' => 'Off-Campus Residence',
        'description' => 'Conveniently located just a short 4-minute walk from campus, offering modern suite living with full facility support.',
        'detail' => 'Nearby Off-Campus Option',
        'class' => 'room-card--suite',
        'symbol' => 'window',
        'cover' => 'assets/jih-shian-single.webp',
        'coverAlt' => 'Single room at the Jih-Shian residence',
        'features' => ['About four minutes from campus', 'Modern suite living', 'Facility support nearby'],
        'gallery' => [
            ['src' => 'assets/jih-shian-single.webp', 'alt' => 'Single room at the Jih-Shian residence'],
            ['src' => 'assets/jih-shian-double-a.webp', 'alt' => 'Two-person room at the Jih-Shian residence'],
            ['src' => 'assets/jih-shian-double-b.webp', 'alt' => 'Another view of a two-person Jih-Shian room'],
        ],
    ],
];

$spaces = [
    [
        'index' => '01 / EAT & SHOP',
        'name' => 'Campus Food & Plazas',
        'text' => 'Located right around the residence blocks with restaurants, convenience stores, cafés, and an ATM network to meet all daily needs.',
        'mark' => 'F',
        'tone' => 'space-panel--rose',
        'link' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/su-she-fu-wu/xue-sheng-can-ting',
        'linkLabel' => 'Campus food court',
        'slides' => [
            ['image' => 'assets/dorm-1-dining.webp', 'alt' => 'Dining area with tables and chairs at the residence'],
            ['image' => 'assets/campus-foodcourt-1.webp', 'alt' => 'Dining tables in a campus food court'],
            ['image' => 'assets/campus-foodcourt-2.webp', 'alt' => 'Indoor view of the campus food court'],
            ['image' => 'assets/campus-foodcourt-3.webp', 'alt' => 'Another view of the campus food court seating'],
        ],
    ],
    [
        'index' => '02 / STUDY',
        'name' => 'Reading & Social Halls',
        'text' => 'Quiet student lounges, reading rooms, and comfortable spaces designed for collaborative study or relaxed conversations.',
        'mark' => 'S',
        'tone' => 'space-panel--sage',
        'slides' => [
            ['image' => 'assets/student-lounge-angle-1.webp', 'alt' => 'Student lounge at the Learning Commons with shared tables'],
            ['image' => 'assets/student-lounge-angle-2.webp', 'alt' => 'Another view of tables and seating in the Learning Commons student lounge'],
            ['image' => 'assets/student-lounge-angle-3.webp', 'alt' => 'Seating area by the windows in the Learning Commons student lounge'],
            ['image' => 'assets/student-lounge-angle-4.webp', 'alt' => 'Shared work tables at the Learning Commons student lounge'],
            ['image' => 'assets/dorm-1-study.webp', 'alt' => 'Study room with desks and chairs in Dormitory 1'],
            ['image' => 'assets/dorm-2-study-angle-1.webp', 'alt' => 'Study room and desks in Dormitory 2, wide view'],
            ['image' => 'assets/dorm-2-study-angle-2.webp', 'alt' => 'Study room in Dormitory 2, view of the seating area'],
            ['image' => 'assets/dorm-2-study-angle-3.webp', 'alt' => 'Study room in Dormitory 2, alternate angle'],
            ['image' => 'assets/dorm-2-study-angle-4.webp', 'alt' => 'Study room in Dormitory 2, view toward the work tables'],
        ],
    ],
    [
        'index' => '03 / DAILY LIFE',
        'name' => 'Shared Kitchens & Laundry',
        'text' => 'See the updated kitchens in Dormitories 1 and 2, plus shared laundry facilities for dorm residents.',
        'mark' => 'W',
        'tone' => 'space-panel--gold',
        'slides' => [
            ['image' => 'assets/dorm-2-kitchen-angle-1.webp', 'alt' => 'Updated shared kitchen in Dormitory 2, wide view'],
            ['image' => 'assets/dorm-2-kitchen-angle-2.webp', 'alt' => 'Updated shared kitchen in Dormitory 2, dining area'],
            ['image' => 'assets/dorm-2-kitchen-angle-4.webp', 'alt' => 'Updated shared kitchen in Dormitory 2, counter and windows'],
            ['image' => 'assets/dorm-2-kitchen-angle-6.webp', 'alt' => 'Updated shared kitchen in Dormitory 2, tables and counter'],
            ['image' => 'assets/dorm-2-kitchen-angle-7.webp', 'alt' => 'Updated shared kitchen in Dormitory 2, counter and refrigerator'],
            ['image' => 'assets/dorm-2-kitchen-angle-8.webp', 'alt' => 'Updated shared kitchen in Dormitory 2, view toward the dining table'],
            ['image' => 'assets/dorm-1-kitchen.webp', 'alt' => 'Updated kitchen in the men’s Dormitory 1'],
            ['image' => 'assets/shared-laundry.webp', 'alt' => 'Shared laundry facilities serving the dorm balconies'],
        ],
    ],
    [
        'index' => '04 / FITNESS',
        'name' => 'Gym & Recreation',
        'text' => 'A campus gym and indoor pool provide places to exercise, swim, and take a break from study.',
        'mark' => 'G',
        'tone' => 'space-panel--blue',
        'link' => 'https://pe.yzu.edu.tw/index.php/zh/',
        'linkLabel' => 'Campus gym',
        'slides' => [
            ['image' => 'assets/campus-gym-building.webp', 'alt' => 'Campus gym building beside an outdoor running track'],
            ['image' => 'assets/campus-gym-interior.webp', 'alt' => 'Exercise machines and weights inside the campus gym'],
            ['image' => 'assets/campus-pool.webp', 'alt' => 'Indoor swimming pool on campus'],
        ],
    ],
    [
        'index' => '05 / STUDENT SUPPORT',
        'name' => 'Student Affairs & Packages',
        'text' => 'Student Affairs offers campus support. Pick up student packages at the Management Center on the first floor of Dormitory 2.',
        'mark' => 'A',
        'tone' => 'space-panel--lilac',
        'link' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/',
        'linkLabel' => 'Student Affairs',
        'slides' => [
            ['image' => 'assets/student-affairs-office.webp', 'alt' => 'Student Affairs office area on campus'],
            ['image' => 'assets/student-affairs-info.webp', 'alt' => 'Student Affairs information and organization display'],
            ['image' => 'assets/student-affairs-building.webp', 'alt' => 'Student Affairs building on campus'],
        ],
    ],
    [
        'index' => '06 / HEALTH',
        'name' => 'Medical Services',
        'text' => 'Medical service is available on the first floor of Dormitory 3.',
        'mark' => 'M',
        'tone' => 'space-panel--teal',
        'link' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/wei-sheng-bao-jian',
        'linkLabel' => 'Medical services',
        'slides' => [
            ['image' => 'assets/medical-services-building.webp', 'alt' => 'Exterior entrance to the campus Student Health Center'],
            ['image' => 'assets/medical-services.webp', 'alt' => 'Medical service room on the first floor of Dormitory 3'],
        ],
    ],
];

$officialHousingLinks = [
    [
        'label' => 'Student Dorm Association',
        'href' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/su-she-fu-wu/2016-07-26-08-55-27',
    ],
    [
        'label' => 'Dormitory Housing Application Info',
        'href' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/component/content/article/798-2016-07-19-03-24-27?Itemid=661',
    ],
    [
        'label' => 'Dorm announcement',
        'href' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/su-she-fu-wu/new',
    ],
    [
        'label' => 'Dormitory Introduction',
        'href' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/?option=com_sppagebuilder&view=page&id=108',
    ],
    [
        'label' => 'Dorm application',
        'href' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/su-she-fu-wu/zhu-su-shen-qing',
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
        'answer' => 'Pick up student packages at the Management Center on the first floor of Dormitory 2.',
    ],
];

$studentResources = [
    [
        'label' => 'Facilities',
        'title' => 'Residence facilities overview',
        'description' => 'This Traditional Chinese guide summarizes room equipment, shared facilities inside the halls, and nearby conveniences such as food, shops, mail, and ATMs.',
        'image' => 'assets/dorm-features-guide.webp',
        'alt' => 'Traditional Chinese infographic listing dorm-room equipment, residence facilities, and nearby services.',
    ],
    [
        'label' => 'Room planning',
        'title' => 'Bed and desk dimensions',
        'description' => 'A visual guide to approximate dimensions for a dorm bed and study area. The source notes that actual room measurements may vary.',
        'image' => 'assets/room-dimensions-guide.webp',
        'alt' => 'Traditional Chinese dorm-room diagram marking approximate bunk-bed, shelf, and desk dimensions.',
    ],
    [
        'label' => 'Residence rules · 1',
        'title' => 'Everyday and serious violations',
        'description' => 'The chart lists 5- and 10-point violations, including noise, shared-space clutter, unauthorized appliances, room cooking, prohibited items, and pets.',
        'image' => 'assets/dorm-rules-1.webp',
        'alt' => 'Traditional Chinese residence-rules poster describing 5- and 10-point violations.',
    ],
    [
        'label' => 'Residence rules · 2',
        'title' => 'Major violations and penalties',
        'description' => 'The chart covers 15- and 25-point violations, including smoking, property damage, unauthorized bed changes or guests, and the consequences shown on the poster.',
        'image' => 'assets/dorm-rules-2.webp',
        'alt' => 'Traditional Chinese residence-rules poster describing 15- and 25-point violations and penalties.',
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
    <meta name="theme-color" content="#f0f4f8">
    <meta name="description" content="<?= e($residence['note']) ?> Learn about rooms, shared spaces, daily life, and housing guidelines at <?= e($residence['school']) ?>.">
    <title><?= e($residence['hall']) ?> — <?= e($residence['school']) ?></title>
    <style>
        :root {
            color-scheme: light;
            --paper: #f0f4f8;
            --paper-deep: #e2e8f0;
            --paper-tint: #eaf0f6;
            --ink: #1e293b;
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
        .brand-logo { display: block; width: 48px; height: 48px; flex: 0 0 auto; object-fit: contain; }
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
        .hero-photo { position: absolute; inset: 0; width: 100%; height: 100%; border: 1px solid rgba(15, 60, 93, .16); object-fit: cover; }
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
        .room-grid--five { grid-template-columns: repeat(6, minmax(0, 1fr)); }
        .room-grid--five .room-card { grid-column: span 2; }
        .room-grid--five .room-card:nth-child(4) { grid-column: 2 / span 2; }
        .room-grid--five .room-card:nth-child(5) { grid-column: 4 / span 2; }
        .room-card { min-width: 0; background: var(--paper); border: 1px solid var(--line); }
        .room-card-art { position: relative; overflow: hidden; height: 235px; background: #cbd5e1; }
        .room-graphic { position: absolute; inset: 0; width: 100%; height: 100%; }
        .room-photo { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
        .room-type { position: absolute; top: 16px; left: 17px; padding: 8px 9px; background: rgba(240, 244, 248, .95); color: var(--yzu-blue); border: 1px solid var(--line); }
        .room-card-content { padding: 25px 25px 26px; }
        .room-card-top { display: flex; align-items: baseline; justify-content: space-between; gap: 12px; }
        .room-card h3 { margin: 0; font-family: var(--sans); font-size: clamp(19px, 2vw, 24px); font-weight: 700; color: var(--yzu-blue-deep); }
        .room-number { color: var(--yzu-accent); font-family: var(--sans); font-weight: 700; font-size: 13px; }
        .room-card p { min-height: 76px; margin: 14px 0 20px; color: var(--ink-soft); font-size: 12px; line-height: 1.75; }
        .room-meta { display: flex; align-items: center; gap: 8px; padding-top: 14px; border-top: 1px solid var(--line); color: var(--yzu-blue); font-size: 10px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; }
        .room-meta::before { width: 7px; height: 7px; border-radius: 50%; background: var(--yzu-accent); content: ""; }
        .room-card { position: relative; overflow: hidden; cursor: pointer; transition: transform .35s cubic-bezier(.2,.7,.2,1), box-shadow .35s ease; }
        .room-card:hover, .room-card:focus-within { transform: translateY(-5px); box-shadow: 0 18px 38px rgba(8, 35, 56, .13); }
        .room-card-art .room-graphic { transition: transform .55s cubic-bezier(.2,.7,.2,1); }
        .room-card:hover .room-graphic { transform: scale(1.035); }
        .room-card-view { position: absolute; right: 14px; bottom: 14px; display: inline-flex; align-items: center; gap: 9px; padding: 9px 11px; background: var(--yzu-blue); color: #fff; font-size: 10px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; }
        .room-card-view span { font-size: 15px; line-height: .8; }
        .room-card-open { position: absolute; z-index: 2; inset: 0; width: 100%; height: 100%; padding: 0; border: 0; background: transparent; cursor: pointer; }
        .room-card-open:focus-visible { outline: 3px solid var(--yzu-accent); outline-offset: -5px; }
        .rooms-footnote { display: flex; align-items: center; gap: 12px; margin: 25px 0 0; color: var(--ink-soft); font-size: 11px; }
        .rooms-footnote span { color: var(--yzu-accent); font-weight: 700; }

        .room-dialog { width: min(1020px, calc(100vw - 36px)); max-width: none; max-height: calc(100dvh - 36px); margin: auto; padding: 0; overflow: visible; border: 0; background: transparent; color: var(--ink); }
        .room-dialog::backdrop { background: rgba(8, 25, 39, .72); backdrop-filter: blur(5px); animation: backdrop-in .24s ease both; }
        .room-dialog-shell { position: relative; display: grid; min-height: min(620px, calc(100dvh - 52px)); max-height: calc(100dvh - 36px); grid-template-columns: minmax(0, 1.08fr) minmax(340px, .92fr); overflow: hidden; background: var(--paper); box-shadow: 0 28px 90px rgba(0, 0, 0, .28); }
        .room-dialog[open] .room-dialog-shell { animation: dialog-enter .42s cubic-bezier(.2,.75,.25,1) both; }
        .room-dialog-gallery { position: relative; min-height: 510px; overflow: hidden; background: #cbd5e1; }
        .room-dialog-image-window { position: absolute; inset: 0; overflow: hidden; }
        .room-dialog-track { display: flex; height: 100%; transition: transform .55s cubic-bezier(.22,.75,.25,1); will-change: transform; }
        .room-dialog-slide { height: 100%; margin: 0; overflow: hidden; }
        .room-dialog-slide img { display: block; width: 100%; height: 100%; object-fit: cover; }
        .room-dialog-image-window::after { position: absolute; inset: 55% 0 0; pointer-events: none; background: linear-gradient(transparent, rgba(8, 35, 56, .22)); content: ""; }
        .room-dialog-arrow { position: absolute; z-index: 1; top: 50%; display: grid; width: 44px; height: 44px; place-items: center; border: 1px solid rgba(255, 255, 255, .75); border-radius: 50%; background: rgba(255, 255, 255, .9); color: var(--yzu-blue-deep); font-size: 21px; cursor: pointer; transform: translateY(-50%); transition: background .2s ease, transform .2s ease; }
        .room-dialog-arrow:hover { background: #fff; transform: translateY(-50%) scale(1.06); }
        .room-dialog-arrow:focus-visible, .room-dialog-close:focus-visible, .room-dialog-dot:focus-visible { outline: 3px solid var(--yzu-accent); outline-offset: 3px; }
        .room-dialog-arrow--prev { left: 18px; }
        .room-dialog-arrow--next { right: 18px; }
        .room-dialog-gallery-bottom { position: absolute; z-index: 1; right: 20px; bottom: 18px; left: 20px; display: flex; align-items: center; justify-content: space-between; gap: 16px; color: #fff; }
        .room-dialog-dots { display: flex; align-items: center; gap: 8px; }
        .room-dialog-dot { width: 8px; height: 8px; padding: 0; border: 0; border-radius: 50%; background: rgba(255, 255, 255, .56); cursor: pointer; transition: width .25s ease, background .25s ease; }
        .room-dialog-dot[aria-current="true"] { width: 25px; border-radius: 99px; background: #fff; }
        .room-dialog-count { font-size: 11px; font-variant-numeric: tabular-nums; }
        .room-dialog-copy { display: flex; min-width: 0; flex-direction: column; justify-content: center; padding: clamp(34px, 5vw, 62px); }
        .room-dialog-close { position: absolute; z-index: 2; top: 16px; right: 16px; display: grid; width: 42px; height: 42px; place-items: center; border: 1px solid var(--line); border-radius: 50%; background: var(--paper); color: var(--yzu-blue-deep); font-size: 24px; line-height: 1; cursor: pointer; transition: transform .2s ease, background .2s ease; }
        .room-dialog-close:hover { transform: rotate(90deg); background: #fff; }
        .room-dialog-kicker { margin: 0 54px 16px 0; color: var(--yzu-accent); font-size: 10px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
        .room-dialog-title { margin: 0 0 8px; color: var(--yzu-blue-deep); font-family: var(--sans); font-size: clamp(27px, 3.5vw, 39px); font-weight: 700; letter-spacing: -.035em; line-height: 1.08; }
        .room-dialog-type { margin: 0 0 20px; color: var(--yzu-blue); font-size: 11px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; }
        .room-dialog-description { margin: 0; color: var(--ink-soft); font-size: 13px; line-height: 1.8; }
        .room-dialog-highlights { display: grid; gap: 11px; margin: 25px 0 0; padding: 20px 0 0; border-top: 1px solid var(--line); list-style: none; }
        .room-dialog-highlights li { display: flex; align-items: flex-start; gap: 11px; color: var(--ink); font-size: 12px; line-height: 1.5; }
        .room-dialog-highlights li::before { flex: 0 0 7px; width: 7px; height: 7px; margin-top: 5px; border-radius: 50%; background: var(--yzu-accent); content: ""; }
        .room-dialog-note { margin: 26px 0 0; color: var(--ink-soft); font-size: 10px; line-height: 1.6; }
        @keyframes dialog-enter { from { opacity: 0; transform: translateY(20px) scale(.985); } to { opacity: 1; transform: translateY(0) scale(1); } }
        @keyframes backdrop-in { from { opacity: 0; } to { opacity: 1; } }
        @keyframes hero-copy-in { from { opacity: 0; transform: translateX(-20px); } to { opacity: 1; transform: translateX(0); } }
        @keyframes hero-art-in { from { opacity: 0; transform: translateX(20px); } to { opacity: 1; transform: translateX(0); } }
        @media (prefers-reduced-motion: no-preference) {
            .hero-copy { animation: hero-copy-in .72s cubic-bezier(.2,.7,.2,1) both; }
            .hero-art { animation: hero-art-in .82s .12s cubic-bezier(.2,.7,.2,1) both; }
        }

        .spaces-section { padding: 105px 0 112px; background: var(--yzu-blue-deep); color: #ffffff; }
        .spaces-section .section-kicker { color: #93c5fd; }
        .spaces-section .section-heading h2 { max-width: 720px; color: #ffffff; }
        .spaces-section .section-heading p { color: rgba(255, 255, 255, .72); }
        .spaces-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); align-items: stretch; gap: 13px; }
        .space-panel { position: relative; display: flex; min-height: 380px; flex-direction: column; justify-content: space-between; overflow: hidden; padding: 22px; color: var(--ink); border: 1px solid rgba(255,255,255,0.1); }
        .space-panel--rose { background: #e0f2fe; }
        .space-panel--sage { background: #e2e8f0; }
        .space-panel--gold { background: #fef3c7; }
        .space-panel--blue { background: #dbeafe; }
        .space-panel--lilac { background: #ede9fe; }
        .space-panel--teal { background: #ccfbf1; }
        .space-media { position: relative; width: calc(100% + 44px); height: 178px; flex: 0 0 178px; margin: -22px -22px 0; overflow: hidden; background: #dbe3e9; }
        .space-slide { position: absolute; inset: 0; margin: 0; opacity: 0; transition: opacity .65s ease; }
        .space-slide.is-active { opacity: 1; }
        .space-photo { display: block; width: 100%; height: 100%; object-fit: cover; }
        .space-slideshow-controls { position: absolute; right: 9px; bottom: 9px; z-index: 1; display: flex; align-items: center; gap: 5px; padding: 5px; background: rgba(8, 35, 56, .78); color: #fff; }
        .space-slideshow-controls[hidden] { display: none; }
        .space-slideshow-controls button { display: grid; width: 30px; height: 30px; place-items: center; padding: 0; border: 1px solid rgba(255, 255, 255, .56); background: transparent; color: #fff; font: inherit; font-size: 18px; line-height: 1; cursor: pointer; }
        .space-slideshow-controls button:hover { background: rgba(255, 255, 255, .18); }
        .space-slideshow-controls button:focus-visible { outline: 2px solid #fff; outline-offset: 2px; }
        .space-slide-count { min-width: 43px; padding-inline: 3px; color: #fff; font-size: 10px; font-variant-numeric: tabular-nums; text-align: center; }
        .space-index { position: relative; z-index: 1; margin-top: 15px; color: var(--yzu-blue); }
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
            display: none;
        }
        .space-copy { position: relative; z-index: 1; max-width: 305px; margin-top: auto; }
        .space-copy h3 { margin: 0 0 10px; font-family: var(--sans); font-size: clamp(24px, 2.5vw, 32px); font-weight: 700; color: var(--yzu-blue-deep); letter-spacing: -.02em; }
        .space-copy p { margin: 0; max-width: 290px; color: var(--ink-soft); font-size: 12px; line-height: 1.7; }
        .space-card-link { display: inline-flex; align-items: center; gap: 9px; margin-top: 14px; color: var(--yzu-blue); font-size: 10px; font-weight: 700; letter-spacing: .08em; text-decoration: none; text-transform: uppercase; }
        .space-card-link:hover { text-decoration: underline; text-underline-offset: 4px; }
        .space-card-link:focus-visible { outline: 3px solid var(--yzu-accent); outline-offset: 3px; }
        .space-card-link span { font-size: 15px; }
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
        .faq-official-link { display: inline-flex; align-items: center; gap: 9px; margin-top: 22px; color: var(--yzu-blue); font-size: 11px; font-weight: 700; letter-spacing: .08em; text-decoration: none; text-transform: uppercase; }
        .faq-official-link:hover { text-decoration: underline; text-underline-offset: 4px; }
        .faq-official-link:focus-visible { outline: 3px solid var(--yzu-accent); outline-offset: 4px; }
        .faq-official-link span { font-size: 15px; }
        .faq-list { border-top: 1px solid var(--line); }
        .faq-list details { border-bottom: 1px solid var(--line); }
        .faq-list summary { position: relative; display: flex; min-height: 67px; align-items: center; justify-content: space-between; gap: 20px; padding: 14px 0; cursor: pointer; list-style: none; font-family: var(--sans); font-weight: 600; font-size: 17px; color: var(--yzu-blue-deep); }
        .faq-list summary::-webkit-details-marker { display: none; }
        .faq-list summary::after { flex: 0 0 auto; color: var(--yzu-accent); content: "+"; font-size: 20px; font-weight: 700; }
        .faq-list details[open] summary::after { content: "−"; }
        .faq-answer { max-width: 560px; padding: 0 35px 19px 0; color: var(--ink-soft); font-size: 12px; }
        .faq-answer p { margin: 0; }

        .student-essentials { padding: 103px 0 111px; background: var(--paper-tint); }
        .resource-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); align-items: stretch; gap: 16px; }
        .resource-card { min-width: 0; overflow: hidden; background: var(--paper); border: 1px solid var(--line); }
        .resource-image { position: relative; display: block; padding: 12px; background: #ffffff; border-bottom: 1px solid var(--line); }
        .resource-image img { display: block; width: 100%; aspect-ratio: 4 / 5; object-fit: contain; background: #ffffff; transition: transform .35s ease; }
        .resource-image:hover img { transform: scale(1.025); }
        .resource-open { position: absolute; right: 19px; bottom: 19px; padding: 8px 10px; background: var(--yzu-blue); color: #ffffff; font-size: 9px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; }
        .resource-content { padding: 18px 19px 20px; }
        .resource-label { color: var(--yzu-accent); font-size: 9px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; }
        .resource-content h3 { margin: 7px 0 9px; color: var(--yzu-blue-deep); font-family: var(--sans); font-size: 18px; line-height: 1.25; }
        .resource-content p { margin: 0; color: var(--ink-soft); font-size: 11px; line-height: 1.65; }
        .resource-language { margin-top: 13px !important; padding-top: 11px; border-top: 1px solid var(--line); color: var(--yzu-blue) !important; font-size: 9px !important; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; }
        .resource-note { max-width: 780px; margin: 22px 0 0; color: var(--ink-soft); font-size: 11px; }
        .official-links { margin-top: 38px; padding-top: 27px; border-top: 1px solid var(--line); }
        .official-links-heading { display: flex; align-items: flex-end; justify-content: space-between; gap: 18px; margin-bottom: 15px; }
        .official-links-heading h3 { margin: 0; color: var(--yzu-blue-deep); font-family: var(--sans); font-size: 20px; font-weight: 700; }
        .official-links-heading p { margin: 0; color: var(--ink-soft); font-size: 11px; }
        .official-links-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }
        .official-link { display: flex; min-height: 68px; align-items: center; justify-content: space-between; gap: 15px; padding: 15px 17px; border: 1px solid var(--line); background: var(--paper); color: var(--yzu-blue-deep); font-size: 12px; font-weight: 700; line-height: 1.4; text-decoration: none; transition: border-color .2s ease, background .2s ease, transform .2s ease; }
        .official-link:hover { transform: translateY(-2px); border-color: var(--yzu-blue); background: #ffffff; }
        .official-link:focus-visible { outline: 3px solid var(--yzu-accent); outline-offset: 3px; }
        .official-link span:last-child { flex: 0 0 auto; color: var(--yzu-accent); font-size: 16px; }
        .resource-note a, .guide-notice a { color: var(--yzu-blue); font-weight: 700; text-underline-offset: 3px; }

        .closing { overflow: hidden; padding: 76px 0 81px; background: var(--paper-deep); border-top: 1px solid var(--line); }
        .closing-inner { display: flex; align-items: end; justify-content: space-between; gap: 42px; }
        .closing-copy .eyebrow { color: var(--yzu-accent); }
        .closing-copy h2 { max-width: 730px; margin: 12px 0 0; font-family: var(--sans); font-size: clamp(34px, 4.5vw, 54px); font-weight: 700; letter-spacing: -.03em; line-height: 1.1; color: var(--yzu-blue-deep); }
        .closing-logo { display: block; width: 112px; height: 112px; flex: 0 0 112px; border-radius: 50%; background: #ffffff; object-fit: contain; }

        .site-footer { padding: 28px 0 30px; background: var(--yzu-blue-deep); color: var(--paper); }
        .footer-inner { display: grid; grid-template-columns: minmax(0, 1fr) auto; align-items: start; gap: 16px 28px; }
        .footer-brand { display: flex; align-items: center; gap: 11px; }
        .footer-brand { grid-column: 1 / -1; }
        .footer-brand-logo { display: block; width: 46px; height: 46px; flex: 0 0 46px; border-radius: 50%; background: #ffffff; object-fit: contain; }
        .footer-brand strong { font-family: var(--sans); font-size: 13px; font-weight: 700; letter-spacing: .08em; }
        .footer-contact { display: grid; gap: 5px; min-width: 0; max-width: 1050px; color: rgba(255, 255, 255, .84); font-size: 11px; }
        .footer-contact-title { margin: 0 0 1px; color: rgba(255, 255, 255, .68); font-family: var(--sans); font-size: 10px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; }
        .footer-contact p { margin: 0; line-height: 1.75; overflow-wrap: anywhere; }
        .footer-contact .footer-contact-hotline { color: #ffffff; font-size: 13px; font-weight: 700; }
        .footer-contact a { color: inherit; text-decoration-color: rgba(255, 255, 255, .5); text-underline-offset: 3px; }
        .footer-top { grid-column: 2; align-self: end; margin-bottom: 3px; color: var(--paper); font-size: 10px; letter-spacing: .13em; text-decoration: none; text-transform: uppercase; font-weight: 700; white-space: nowrap; }
        .footer-top:hover { color: #93c5fd; }

        @media (max-width: 900px) {
            .hero { min-height: auto; padding-top: 35px; }
            .hero-layout { grid-template-columns: 1fr 1fr; gap: 20px; }
            .hero h1 { font-size: clamp(42px, 7vw, 68px); }
            .hero-art { min-height: 420px; }
            .spaces-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .room-card-content { padding-inline: 18px; }
            .room-card p { min-height: 96px; }
            .daily-layout, .housing-layout { gap: 50px; }
            .resource-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .official-links-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }
        @media (max-width: 680px) {
            :root { --gutter: 22px; }
            html { scroll-padding-top: 74px; }
            .header-inner { min-height: 70px; }
            .brand-seal { width: 36px; height: 36px; }
            .brand-logo { width: 42px; height: 42px; }
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
            .rooms-section, .spaces-section, .daily-section, .housing-section, .faq-section, .student-essentials { padding: 76px 0 82px; }
            .section-heading { align-items: start; flex-direction: column; gap: 17px; margin-bottom: 29px; }
            .section-heading h2 { font-size: clamp(32px, 9vw, 48px); }
            .section-heading p { max-width: 410px; }
            .room-grid { grid-template-columns: 1fr; gap: 15px; }
            .room-grid--five { grid-template-columns: 1fr; }
            .room-grid--five .room-card { grid-column: auto; }
            .room-grid--five .room-card:nth-child(4),
            .room-grid--five .room-card:nth-child(5) { grid-column: auto; }
            .room-card-art { height: 220px; }
            .room-card-content { padding: 22px; }
            .room-card h3 { font-size: 24px; }
            .room-card p { min-height: 0; }
            .room-dialog { width: min(560px, calc(100vw - 24px)); max-height: calc(100dvh - 24px); }
            .room-dialog-shell { min-height: 0; max-height: calc(100dvh - 24px); grid-template-columns: 1fr; grid-template-rows: minmax(235px, 36dvh) auto; overflow-y: auto; }
            .room-dialog-gallery { min-height: 235px; }
            .room-dialog-copy { padding: 29px 24px 27px; }
            .room-dialog-close { top: 12px; right: 12px; width: 39px; height: 39px; }
            .room-dialog-kicker { margin-bottom: 11px; }
            .room-dialog-title { max-width: calc(100% - 34px); font-size: 29px; }
            .room-dialog-type { margin-bottom: 13px; }
            .room-dialog-highlights { gap: 8px; margin-top: 17px; padding-top: 15px; }
            .room-dialog-note { margin-top: 17px; }
            .rooms-footnote { align-items: flex-start; font-size: 10px; }
            .spaces-grid { grid-template-columns: 1fr; gap: 12px; }
            .space-panel { min-height: 350px; }
            .spaces-grid .space-panel:first-child { min-height: 350px; }
            .resource-grid { grid-template-columns: 1fr; gap: 14px; }
            .official-links-heading { align-items: flex-start; flex-direction: column; gap: 7px; }
            .official-links-grid { grid-template-columns: 1fr; }
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
            .closing-logo { width: 68px; height: 68px; flex-basis: 68px; }
            .footer-inner { display: flex; align-items: flex-start; flex-direction: column; gap: 17px; }
            .footer-brand { align-items: center; }
            .footer-brand strong { font-size: 11px; }
            .footer-contact { font-size: 10px; }
            .footer-top { align-self: flex-start; }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { scroll-behavior: auto !important; transition-duration: .01ms !important; animation-duration: .01ms !important; }
        }
        .slide-reveal { opacity: 0; transform: translate3d(0, 24px, 0); transition: opacity .65s cubic-bezier(.2,.7,.2,1) var(--reveal-delay, 0ms), transform .65s cubic-bezier(.2,.7,.2,1) var(--reveal-delay, 0ms); }
        .slide-reveal.is-visible { opacity: 1; transform: translate3d(0, 0, 0); }
        .slide-reveal--from-left { transform: translate3d(-24px, 0, 0); }
        .slide-reveal--from-left.is-visible { transform: translate3d(0, 0, 0); }
    </style>
</head>
<body id="top">
    <a class="skip-link" href="#main-content">Skip to content</a>
    <header class="site-header">
        <div class="wrap header-inner">
            <a class="brand" href="#top" aria-label="<?= e($residence['hall']) ?> home">
                <img class="brand-logo" src="assets/yzu-logo.webp" alt="" aria-hidden="true" width="48" height="48">
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
                <div class="hero-art">
                    <span class="hero-stamp" aria-hidden="true">YZU<br>Dormitory</span>
                    <img class="hero-photo" src="assets/dorm-exterior.webp" alt="Exterior courtyard view of Yuan Ze University student residences" fetchpriority="high" decoding="async">
                    <div class="hero-caption">
                        <strong><?= e($residence['hall']) ?></strong>
                        <span><?= e($residence['school']) ?> · Taoyuan City</span>
                    </div>
                </div>
            </div>
        </section>

        <div class="ribbon" aria-label="Dormitory Highlights">
            <div class="wrap ribbon-inner">
                <div class="ribbon-item"><span class="ribbon-mark">01</span> Dining & Plazas on Site</div>
                <span class="ribbon-divider" aria-hidden="true"></span>
                <div class="ribbon-item"><span class="ribbon-mark">02</span> Study & Social Spaces</div>
                <span class="ribbon-divider" aria-hidden="true"></span>
                <div class="ribbon-item"><span class="ribbon-mark">03</span> Cozy Coexistence Community</div>
            </div>
        </div>

        <section class="intro-section" aria-labelledby="intro-title">
            <div class="wrap intro-grid">
                <div class="section-kicker eyebrow">Student Housing Service</div>
                <div class="intro-copy">
                    <h2 id="intro-title">Creating a living space where you grow and <em>feel at home.</em></h2>
                    <div class="intro-bottom">
                        <p>Our goal is to build a diverse and convenient living space, providing everything you need so your student dormitories become cherished memories of your extended family at Yuan Ze.</p>
                        <div class="scribble" aria-hidden="true">YZU Campus Living</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rooms-section" id="rooms" aria-labelledby="rooms-title">
            <div class="wrap">
                <div class="section-heading">
                    <div>
                        <div class="eyebrow section-kicker">Accommodation Options</div>
                        <h2 id="rooms-title">Choose your<br>living space.</h2>
                    </div>
                    <p>From campus residence halls for freshmen and international students to modern suite options for senior students.</p>
                </div>
                <div class="room-grid<?= count($roomTypes) === 5 ? ' room-grid--five' : '' ?>">
                    <?php foreach ($roomTypes as $index => $room): ?>
                        <article class="room-card <?= e($room['class']) ?>">
                            <div class="room-card-art">
                                <span class="room-type"><?= e($room['type']) ?></span>
                                <?php if (!empty($room['cover'])): ?>
                                    <img class="room-photo" src="<?= e($room['cover']) ?>" alt="<?= e($room['coverAlt']) ?>" loading="lazy" decoding="async">
                                <?php elseif ($room['symbol'] === 'beds'): ?>
                                    <svg class="room-graphic" viewBox="0 0 420 250" role="img" aria-label="Illustration of a standard quad dorm room">
                                        <rect width="420" height="250" fill="#e2e8f0"/>
                                        <path d="M0 193h420v57H0Z" fill="#cbd5e1"/>
                                        <rect x="80" y="60" width="100" height="110" fill="#ffffff" stroke="#0f3c5d" stroke-width="3"/>
                                        <path d="M100 80h60v20h-60z" fill="#3b82f6"/>
                                        <rect x="240" y="60" width="100" height="110" fill="#ffffff" stroke="#0f3c5d" stroke-width="3"/>
                                        <path d="M260 80h60v20h-60z" fill="#3b82f6"/>
                                    </svg>
                                <?php elseif ($room['symbol'] === 'door'): ?>
                                    <svg class="room-graphic" viewBox="0 0 420 250" role="img" aria-label="Illustration of a suite-style room">
                                        <rect width="420" height="250" fill="#cbd5e1"/>
                                        <path d="M0 193h420v57H0Z" fill="#94a3b8"/>
                                        <rect x="110" y="40" width="200" height="160" fill="#f8fafc" stroke="#0f3c5d" stroke-width="4"/>
                                        <path d="M140 70h140v100H140z" fill="#e2e8f0"/>
                                        <circle cx="270" cy="120" r="6" fill="#2563eb"/>
                                    </svg>
                                <?php else: ?>
                                    <svg class="room-graphic" viewBox="0 0 420 250" role="img" aria-label="Illustration of off-campus housing">
                                        <rect width="420" height="250" fill="#e2e8f0"/>
                                        <path d="M0 193h420v57H0Z" fill="#cbd5e1"/>
                                        <path d="M120 70l90-40 90 40v130H120z" fill="#ffffff" stroke="#0f3c5d" stroke-width="4"/>
                                        <rect x="160" y="100" width="100" height="80" fill="#93c5fd" opacity=".6"/>
                                    </svg>
                                <?php endif; ?>
                                <span class="room-card-view" aria-hidden="true">View details <span>↗</span></span>
                            </div>
                            <div class="room-card-content">
                                <div class="room-card-top">
                                    <h3><?= e($room['name']) ?></h3>
                                    <span class="room-number"><?= e($room['number']) ?></span>
                                </div>
                                <p><?= e($room['description']) ?></p>
                                <div class="room-meta"><?= e($room['detail']) ?></div>
                            </div>
                            <button class="room-card-open" type="button" aria-label="View photos and details for <?= e($room['name']) ?>" aria-haspopup="dialog" aria-controls="room-dialog" data-room-index="<?= (int) $index ?>"></button>
                        </article>
                    <?php endforeach; ?>
                </div>
                <p class="rooms-footnote"><span>Note</span> Dormitories 1 and 2 have shared bathrooms and no private balcony. Dormitories 3A and 3B are higher-cost suites with a private bathroom and balcony in every room.</p>
            </div>
        </section>

        <dialog class="room-dialog" id="room-dialog" aria-labelledby="room-dialog-title" aria-describedby="room-dialog-description">
            <div class="room-dialog-shell">
                <button class="room-dialog-close" type="button" aria-label="Close room details">×</button>
                <div class="room-dialog-gallery">
                    <div class="room-dialog-image-window" role="group" aria-roledescription="carousel" aria-label="Room photos">
                        <div class="room-dialog-track" id="room-dialog-track"></div>
                    </div>
                    <button class="room-dialog-arrow room-dialog-arrow--prev" type="button" data-gallery-step="-1" aria-label="Previous photo">‹</button>
                    <button class="room-dialog-arrow room-dialog-arrow--next" type="button" data-gallery-step="1" aria-label="Next photo">›</button>
                    <div class="room-dialog-gallery-bottom">
                        <div class="room-dialog-dots" aria-label="Choose a photo"></div>
                        <span class="room-dialog-count" aria-live="polite" aria-atomic="true"></span>
                    </div>
                </div>
                <div class="room-dialog-copy">
                    <p class="room-dialog-kicker">Residence overview</p>
                    <h2 class="room-dialog-title" id="room-dialog-title"></h2>
                    <p class="room-dialog-type"></p>
                    <p class="room-dialog-description" id="room-dialog-description"></p>
                    <ul class="room-dialog-highlights"></ul>
                    <p class="room-dialog-note">Confirm room assignments, fees, and availability with the official YZU Student Housing Service.</p>
                </div>
            </div>
        </dialog>

        <section class="student-essentials" id="student-essentials" aria-labelledby="student-essentials-title">
            <div class="wrap">
                <div class="section-heading">
                    <div>
                        <div class="eyebrow section-kicker">New Resident Essentials</div>
                        <h2 id="student-essentials-title">Plan for dorm life.</h2>
                    </div>
                    <p>Practical guides to dorm facilities, room dimensions, and residence rules. Open any poster to view it full size.</p>
                </div>
                <div class="resource-grid">
                    <?php foreach ($studentResources as $resource): ?>
                        <article class="resource-card">
                            <a class="resource-image" href="<?= e($resource['image']) ?>" target="_blank" rel="noopener" aria-label="Open <?= e($resource['title']) ?> poster in a new tab">
                                <img src="<?= e($resource['image']) ?>" alt="<?= e($resource['alt']) ?>" loading="lazy" decoding="async">
                                <span class="resource-open" aria-hidden="true">Open poster ↗</span>
                            </a>
                            <div class="resource-content">
                                <span class="resource-label"><?= e($resource['label']) ?></span>
                                <h3><?= e($resource['title']) ?></h3>
                                <p><?= e($resource['description']) ?></p>
                                <p class="resource-language">Original guide · Traditional Chinese</p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                <p class="resource-note">These source guides are in Traditional Chinese. The English summaries are for orientation; confirm current policies, application dates, and room details with the YZU Student Housing Service. Room measurements are approximate.</p>
                <div class="official-links">
                    <div class="official-links-heading">
                        <h3 id="official-links-title">Official Dormitory Links</h3>
                        <p>Applications, announcements, and student housing information from YZU.</p>
                    </div>
                    <nav class="official-links-grid" aria-labelledby="official-links-title">
                        <?php foreach ($officialHousingLinks as $link): ?>
                            <a class="official-link" href="<?= e($link['href']) ?>" target="_blank" rel="noopener noreferrer">
                                <span><?= e($link['label']) ?></span>
                                <span aria-hidden="true">↗</span>
                            </a>
                        <?php endforeach; ?>
                    </nav>
                </div>
            </div>
        </section>

        <section class="spaces-section" id="spaces" aria-labelledby="spaces-title">
            <div class="wrap">
                <div class="section-heading">
                    <div>
                        <div class="eyebrow section-kicker">Living & Learning Facilities</div>
                        <h2 id="spaces-title">Everything you need,<br>right on campus.</h2>
                    </div>
                    <p>Explore the dining, study, fitness, health, and student-support spaces available around campus.</p>
                </div>
                <div class="spaces-grid">
                    <?php foreach ($spaces as $space): ?>
                        <article class="space-panel <?= e($space['tone']) ?>">
                            <div class="space-media"<?= count($space['slides']) > 1 ? ' data-space-slideshow role="group" aria-roledescription="carousel" aria-label="' . e($space['name']) . ' photos"' : '' ?>>
                                <?php foreach ($space['slides'] as $slideIndex => $slide): ?>
                                    <figure class="space-slide<?= $slideIndex === 0 ? ' is-active' : '' ?>" aria-hidden="<?= $slideIndex === 0 ? 'false' : 'true' ?>">
                                        <img class="space-photo" src="<?= e($slide['image']) ?>" alt="<?= e($slide['alt']) ?>" loading="lazy" decoding="async">
                                    </figure>
                                <?php endforeach; ?>
                                <?php if (count($space['slides']) > 1): ?>
                                    <div class="space-slideshow-controls" hidden>
                                        <button type="button" data-space-previous aria-label="Previous image">‹</button>
                                        <button type="button" data-space-toggle aria-label="Pause automatic slideshow" aria-pressed="true">Ⅱ</button>
                                        <span class="space-slide-count">1 / <?= count($space['slides']) ?></span>
                                        <button type="button" data-space-next aria-label="Next image">›</button>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="space-index"><?= e($space['index']) ?></div>
                            <span class="space-mark" aria-hidden="true"><?= e($space['mark']) ?></span>
                            <div class="space-copy">
                                <h3><?= e($space['name']) ?></h3>
                                <p><?= e($space['text']) ?></p>
                                <?php if (!empty($space['link'])): ?>
                                    <a class="space-card-link" href="<?= e($space['link']) ?>" target="_blank" rel="noopener noreferrer">
                                        <?= e($space['linkLabel']) ?><span aria-hidden="true">↗</span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                <div class="spaces-tail">Convenient living spaces designed for your student success.</div>
            </div>
        </section>

        <section class="daily-section" id="daily-life" aria-labelledby="daily-title">
            <div class="wrap daily-layout">
                <div class="daily-heading">
                    <div class="eyebrow section-kicker">Daily Rhythm</div>
                    <h2 id="daily-title">A day in the life at YZU dorms.</h2>
                    <p>Balanced routines combining academic focus, convenient amenities, and evening relaxation.</p>
                    <blockquote class="daily-quote">“A cherished place where you will always look back on with fond memories.”</blockquote>
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
                    <div class="eyebrow section-kicker">Accommodation Guide</div>
                    <h2 id="housing-title">Your application<br>next steps.</h2>
                    <p>Follow the official procedures managed by the Student Housing Service Section to secure your room.</p>
                <div class="guide-notice"><span aria-hidden="true">i</span><div><?= e($residence['note']) ?> Check official YZU announcements for exact application periods. <a href="#student-essentials">See facilities, room dimensions, and residence rules.</a></div></div>
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
                    <a class="housing-cta" href="#questions">View Housing FAQs <span aria-hidden="true">↓</span></a>
                </div>
            </div>
        </section>

        <section class="faq-section" id="questions" aria-labelledby="faq-title">
            <div class="wrap faq-layout">
                <div class="faq-title">
                    <div class="eyebrow section-kicker">Helpful Answers</div>
                    <h2 id="faq-title">Frequently asked questions.</h2>
                    <p>Everything you need to know about living in Yuan Ze University student housing.</p>
                    <a class="faq-official-link" href="https://www.yzu.edu.tw/admin/st/index.php/tw/su-she-fu-wu/2016-07-19-01-33-33" target="_blank" rel="noopener noreferrer">
                        Dorm Q &amp; A <span aria-hidden="true">↗</span>
                    </a>
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
                    <div class="eyebrow">Yuan Ze University</div>
                    <h2>Join our community.<br>Your campus home awaits.</h2>
                </div>
                <img class="closing-logo" src="assets/yzu-logo.webp" alt="Yuan Ze University logo" width="112" height="112">
            </div>
        </section>
    </main>

    <footer class="site-footer" id="contact">
        <div class="wrap footer-inner">
            <div class="footer-brand">
                <img class="footer-brand-logo" src="assets/yzu-logo.webp" alt="" aria-hidden="true" width="46" height="46">
                <strong>STUDENT HOUSING SERVICE SECTION</strong>
            </div>
            <section class="footer-contact" aria-labelledby="footer-contact-title">
                <h2 class="footer-contact-title" id="footer-contact-title">Contact Student Housing Service</h2>
                <p class="footer-contact-hotline"><strong>Service Hotline:</strong> <a href="tel:034639900">03-4639900</a> Ext.➤➤➤</p>
                <p>Counseling: 2880, 2868 │ Maintenance: 2865 │ Bed Allocation: 2867 │ Student Cafeteria: 2869 │</p>
                <p>Male Dorm Counter: 2881 │ Female Dorm Counter: 2882 │ Dormitory Office (24hrs): <a href="tel:0903032011">0903032011</a></p>
            </section>
            <a class="footer-top" href="#top">Back to top ↑</a>
        </div>
    </footer>
    <script>
        (() => {
            const roomTypes = <?= json_encode($roomTypes, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_THROW_ON_ERROR) ?>;
            const dialog = document.getElementById('room-dialog');
            const track = document.getElementById('room-dialog-track');
            const dots = dialog.querySelector('.room-dialog-dots');
            const count = dialog.querySelector('.room-dialog-count');
            const title = dialog.querySelector('.room-dialog-title');
            const type = dialog.querySelector('.room-dialog-type');
            const description = dialog.querySelector('.room-dialog-description');
            const highlights = dialog.querySelector('.room-dialog-highlights');
            const closeButton = dialog.querySelector('.room-dialog-close');
            const triggers = document.querySelectorAll('.room-card-open');
            let activeRoom = null;
            let activeTrigger = null;
            let activeSlide = 0;

            const showSlide = (nextIndex) => {
                if (!activeRoom || !activeRoom.gallery.length) return;
                activeSlide = (nextIndex + activeRoom.gallery.length) % activeRoom.gallery.length;
                const percentPerSlide = 100 / activeRoom.gallery.length;
                track.style.transform = `translateX(-${activeSlide * percentPerSlide}%)`;
                track.querySelectorAll('.room-dialog-slide').forEach((slide, index) => {
                    slide.setAttribute('aria-hidden', String(index !== activeSlide));
                });
                dots.querySelectorAll('.room-dialog-dot').forEach((dot, index) => {
                    dot.setAttribute('aria-current', String(index === activeSlide));
                });
                count.textContent = `Photo ${activeSlide + 1} of ${activeRoom.gallery.length}`;
            };

            const openRoom = (room, trigger) => {
                activeRoom = room;
                activeTrigger = trigger;
                activeSlide = 0;
                title.textContent = room.name;
                type.textContent = room.type;
                description.textContent = room.description;
                highlights.replaceChildren(...room.features.map((feature) => {
                    const item = document.createElement('li');
                    item.textContent = feature;
                    return item;
                }));
                track.replaceChildren();
                dots.replaceChildren();
                track.style.width = `${room.gallery.length * 100}%`;

                room.gallery.forEach((photo, index) => {
                    const slide = document.createElement('figure');
                    slide.className = 'room-dialog-slide';
                    slide.style.flexBasis = `${100 / room.gallery.length}%`;
                    const image = document.createElement('img');
                    image.src = photo.src;
                    image.alt = photo.alt;
                    image.loading = index === 0 ? 'eager' : 'lazy';
                    image.decoding = 'async';
                    slide.append(image);
                    track.append(slide);

                    const dot = document.createElement('button');
                    dot.className = 'room-dialog-dot';
                    dot.type = 'button';
                    dot.setAttribute('aria-label', `Show photo ${index + 1} of ${room.gallery.length}`);
                    dot.addEventListener('click', () => showSlide(index));
                    dots.append(dot);
                });

                showSlide(0);
                dialog.showModal();
                closeButton.focus();
            };

            triggers.forEach((trigger) => {
                trigger.addEventListener('click', () => {
                    const room = roomTypes[Number(trigger.dataset.roomIndex)];
                    if (room) openRoom(room, trigger);
                });
            });

            dialog.querySelectorAll('[data-gallery-step]').forEach((button) => {
                button.addEventListener('click', () => showSlide(activeSlide + Number(button.dataset.galleryStep)));
            });
            closeButton.addEventListener('click', () => dialog.close());
            dialog.addEventListener('click', (event) => {
                if (event.target === dialog) dialog.close();
            });
            dialog.addEventListener('keydown', (event) => {
                if (event.key === 'ArrowLeft') showSlide(activeSlide - 1);
                if (event.key === 'ArrowRight') showSlide(activeSlide + 1);
            });
            dialog.addEventListener('close', () => {
                if (activeTrigger?.isConnected) activeTrigger.focus();
            });

            const slideshowPrefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            document.querySelectorAll('[data-space-slideshow]').forEach((carousel) => {
                const slides = Array.from(carousel.querySelectorAll('.space-slide'));
                const controls = carousel.querySelector('.space-slideshow-controls');
                const previousButton = controls.querySelector('[data-space-previous]');
                const nextButton = controls.querySelector('[data-space-next]');
                const toggleButton = controls.querySelector('[data-space-toggle]');
                const counter = controls.querySelector('.space-slide-count');
                let currentSlide = 0;
                let automatic = !slideshowPrefersReducedMotion;
                let inView = !('IntersectionObserver' in window);
                let hovered = false;
                let focused = false;
                let timer = null;

                controls.hidden = false;

                const showSlide = (nextIndex) => {
                    currentSlide = (nextIndex + slides.length) % slides.length;
                    slides.forEach((slide, index) => {
                        const active = index === currentSlide;
                        slide.classList.toggle('is-active', active);
                        slide.setAttribute('aria-hidden', String(!active));
                    });
                    counter.textContent = `${currentSlide + 1} / ${slides.length}`;
                };

                const updateTimer = () => {
                    window.clearInterval(timer);
                    timer = null;
                    if (automatic && inView && !hovered && !focused && !document.hidden) {
                        timer = window.setInterval(() => showSlide(currentSlide + 1), 5200);
                    }
                };

                const step = (direction) => {
                    showSlide(currentSlide + direction);
                    updateTimer();
                };

                previousButton.addEventListener('click', () => step(-1));
                nextButton.addEventListener('click', () => step(1));
                toggleButton.addEventListener('click', () => {
                    automatic = !automatic;
                    toggleButton.setAttribute('aria-pressed', String(automatic));
                    toggleButton.setAttribute('aria-label', automatic ? 'Pause automatic slideshow' : 'Play automatic slideshow');
                    toggleButton.textContent = automatic ? 'Ⅱ' : '▶';
                    updateTimer();
                });

                carousel.addEventListener('pointerenter', () => {
                    hovered = true;
                    updateTimer();
                });
                carousel.addEventListener('pointerleave', () => {
                    hovered = false;
                    updateTimer();
                });
                carousel.addEventListener('focusin', () => {
                    focused = true;
                    updateTimer();
                });
                carousel.addEventListener('focusout', (event) => {
                    if (!carousel.contains(event.relatedTarget)) {
                        focused = false;
                        updateTimer();
                    }
                });
                document.addEventListener('visibilitychange', updateTimer);

                if ('IntersectionObserver' in window) {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach((entry) => {
                            inView = entry.isIntersecting;
                            updateTimer();
                        });
                    }, { threshold: 0.1 });
                    observer.observe(carousel);
                }

                updateTimer();
            });

            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (!prefersReducedMotion && 'IntersectionObserver' in window) {
                const revealTargets = document.querySelectorAll('.intro-grid, .section-heading, .room-card, .space-panel, .moment, .guide-step, .faq-title, .faq-list details, .closing-inner');
                const observer = new IntersectionObserver((entries, revealObserver) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            revealObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.12, rootMargin: '0px 0px -32px 0px' });

                revealTargets.forEach((element, index) => {
                    element.classList.add('slide-reveal');
                    if (element.matches('.section-heading, .faq-title')) element.classList.add('slide-reveal--from-left');
                    if (element.matches('.room-card, .space-panel')) element.style.setProperty('--reveal-delay', `${(index % 3) * 85}ms`);
                    observer.observe(element);
                });
            }
        })();
    </script>
</body>
</html>