<?php
declare(strict_types=1);

/*
 * Yuan Ze University - Student Housing Service Residence Page.
 */
$residence = [
    'school' => '元智大學',
    'hall' => '元智大學學生宿舍',
    'eyebrow' => '學務處・學生宿舍服務組',
    'intro' => '在校園中找到自在的家，一起生活、彼此陪伴。打造多元便利的住宿空間，陪你展開校園生活。',
    'note' => '大學生活的另一個家——床位分配與住宿規定，請以元智大學學生宿舍服務組公告為準。',
];
$hallInitial = 'Y';

$roomTypes = [
    [
        'number' => '01',
        'name' => '第一宿舍',
        'type' => '四人標準房・男生宿舍',
        'description' => '一舍為男生宿舍，採多人共住並共用公共設施。每個床位皆配置書桌、椅子、衣櫃與網路連線。',
        'detail' => '男生宿舍・共用設施',
        'class' => 'room-card--single',
        'symbol' => 'beds',
        'cover' => 'assets/dorm-1-room.webp',
        'coverAlt' => '一舍共用房間，設有上下舖與個人書桌',
        'features' => ['男生宿舍', '共用衛浴', '個人書桌、椅子與衣櫃'],
        'gallery' => [
            ['src' => 'assets/dorm-1-room.webp', 'alt' => '一舍共用房間，設有上下舖與個人書桌'],
            ['src' => 'assets/dorm-1-bathroom.webp', 'alt' => '一舍共用衛浴設備'],
            ['src' => 'assets/dorm-1-kitchen.webp', 'alt' => '一舍男生宿舍翻新後的共用廚房'],
        ],
    ],
    [
        'number' => '02',
        'name' => '第二宿舍',
        'type' => '四人標準房・女生宿舍',
        'description' => '二舍為女生宿舍，採多人共住並共用公共設施。每個床位皆配置書桌、椅子、衣櫃與網路連線。',
        'detail' => '女生宿舍・一樓設有管理中心',
        'class' => 'room-card--single',
        'symbol' => 'beds',
        'cover' => 'assets/dorm-2-room.webp',
        'coverAlt' => '二舍共用房間，設有上下舖與內建書桌',
        'features' => ['女生宿舍', '共用衛浴', '管理中心與包裹領取處位於一樓'],
        'gallery' => [
            ['src' => 'assets/dorm-2-room.webp', 'alt' => '二舍共用房間，設有上下舖與內建書桌'],
            ['src' => 'assets/dorm-2-corridor.webp', 'alt' => '二舍連接各房間的走廊'],
            ['src' => 'assets/dorm-2-bathroom.webp', 'alt' => '二舍共用衛浴設備'],
            ['src' => 'assets/dorm-2-kitchen-angle-1.webp', 'alt' => '翻新後的二舍共用廚房全景'],
            ['src' => 'assets/dorm-2-kitchen-angle-2.webp', 'alt' => '翻新後的二舍共用廚房用餐區'],
            ['src' => 'assets/dorm-2-kitchen-angle-4.webp', 'alt' => '翻新後的二舍共用廚房流理台與窗戶'],
            ['src' => 'assets/dorm-2-kitchen-angle-7.webp', 'alt' => '翻新後的二舍共用廚房流理台與冰箱'],
        ],
    ],
    [
        'number' => '03',
        'name' => '第三宿舍3A',
        'type' => '套房型・費用較高',
        'description' => '三舍A為女生宿舍，與三舍B位於同一棟建築，室內以隔牆分隔。每間房皆有獨立衛浴與陽台，室內格局與三舍B相同，住宿費高於一舍與二舍。',
        'detail' => '女生宿舍・每間皆有獨立衛浴與陽台',
        'class' => 'room-card--shared',
        'symbol' => 'door',
        'cover' => 'assets/dorm-3-bedroom.webp',
        'coverAlt' => '三舍套房臥室，設有架高床與書桌',
        'features' => ['女生宿舍', '每間皆有獨立衛浴與陽台', '室內格局與三舍B相同', '住宿費高於一舍與二舍'],
        'gallery' => [
            ['src' => 'assets/dorm-3-bedroom.webp', 'alt' => '三舍套房臥室，設有架高床與書桌'],
            ['src' => 'assets/dorm-outside-1.webp', 'alt' => '從另一個角度拍攝的三舍建築外觀'],
            ['src' => 'assets/shared-laundry.webp', 'alt' => '三舍住戶共用的洗衣設施'],
        ],
    ],
    [
        'number' => '04',
        'name' => '第三宿舍3B',
        'type' => '套房型・費用較高',
        'description' => '三舍B為男生宿舍，與三舍A位於同一棟建築，室內以隔牆分隔。每間房皆有獨立衛浴與陽台，室內格局與三舍A相同，住宿費高於一舍與二舍。',
        'detail' => '男生宿舍・每間皆有獨立衛浴與陽台',
        'class' => 'room-card--shared',
        'symbol' => 'door',
        'cover' => 'assets/dorm-3-bedroom.webp',
        'coverAlt' => '三舍套房臥室，設有架高床與書桌',
        'features' => ['男生宿舍', '每間皆有獨立衛浴與陽台', '室內格局與三舍A相同', '住宿費高於一舍與二舍'],
        'gallery' => [
            ['src' => 'assets/dorm-3-bedroom.webp', 'alt' => '三舍套房臥室，設有架高床與書桌'],
            ['src' => 'assets/dorm-3-building.webp', 'alt' => '三舍共用宿舍大樓外觀'],
            ['src' => 'assets/shared-laundry.webp', 'alt' => '三舍住戶共用的洗衣設施'],
        ],
    ],
    [
        'number' => '05',
        'name' => '校外宿舍集賢樓',
        'type' => '校外宿舍',
        'description' => '步行至校園約四分鐘，提供單人或雙人公寓式住宿，並有網路與完整設施支援。',
        'detail' => '鄰近校園的校外住宿選擇',
        'class' => 'room-card--suite',
        'symbol' => 'window',
        'cover' => 'assets/jih-shian-single.webp',
        'coverAlt' => '校外宿舍集賢樓的單人房',
        'features' => ['距離校園步行約四分鐘', '公寓式住宿，可選單人或雙人房', '鄰近生活設施'],
        'gallery' => [
            ['src' => 'assets/jih-shian-single.webp', 'alt' => '校外宿舍集賢樓的單人房'],
            ['src' => 'assets/jih-shian-double-a.webp', 'alt' => '校外宿舍集賢樓的雙人房'],
            ['src' => 'assets/jih-shian-double-b.webp', 'alt' => '從另一個角度拍攝的校外宿舍集賢樓雙人房'],
        ],
    ],
];

$spaces = [
    [
        'index' => '01 / 餐飲購物',
        'name' => '校園餐飲與商店',
        'text' => '宿舍周邊設有餐廳、便利商店、咖啡廳與多處提款機，滿足日常所需。',
        'mark' => 'F',
        'tone' => 'space-panel--rose',
        'link' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/su-she-fu-wu/xue-sheng-can-ting',
        'linkLabel' => '校園學生餐廳',
        'slides' => [
            ['image' => 'assets/dorm-1-dining.webp', 'alt' => '宿舍餐廳內的桌椅與用餐區'],
            ['image' => 'assets/campus-foodcourt-1.webp', 'alt' => '校園學生餐廳的用餐桌椅'],
            ['image' => 'assets/campus-foodcourt-2.webp', 'alt' => '校園學生餐廳室內空間'],
            ['image' => 'assets/campus-foodcourt-3.webp', 'alt' => '從另一個角度拍攝的校園學生餐廳座位區'],
        ],
    ],
    [
        'index' => '02 / 閱讀交流',
        'name' => '閱讀與交流空間',
        'text' => '舒適安靜的學生交誼廳與閱覽空間，適合一起討論課業，也適合自在聊天。',
        'mark' => 'S',
        'tone' => 'space-panel--sage',
        'slides' => [
            ['image' => 'assets/student-lounge-angle-1.webp', 'alt' => '學習共享空間學生交誼廳，設有共用長桌'],
            ['image' => 'assets/student-lounge-angle-2.webp', 'alt' => '從另一個角度拍攝的學習共享空間交誼廳桌椅'],
            ['image' => 'assets/student-lounge-angle-3.webp', 'alt' => '學習共享空間學生交誼廳的窗邊座位'],
            ['image' => 'assets/student-lounge-angle-4.webp', 'alt' => '學習共享空間學生交誼廳的共用工作桌'],
            ['image' => 'assets/dorm-1-study.webp', 'alt' => '一舍設有書桌與椅子的自習室'],
            ['image' => 'assets/dorm-2-study-angle-1.webp', 'alt' => '二舍自習室與書桌全景'],
            ['image' => 'assets/dorm-2-study-angle-2.webp', 'alt' => '二舍自習室座位區'],
            ['image' => 'assets/dorm-2-study-angle-3.webp', 'alt' => '從另一個角度拍攝的二舍自習室'],
            ['image' => 'assets/dorm-2-study-angle-4.webp', 'alt' => '二舍自習室朝向工作桌的視角'],
        ],
    ],
    [
        'index' => '03 / 生活日常',
        'name' => '共用廚房與洗衣設施',
        'text' => '看看一舍與二舍翻新後的廚房，以及宿舍住戶共用的洗衣設施。',
        'mark' => 'W',
        'tone' => 'space-panel--gold',
        'slides' => [
            ['image' => 'assets/dorm-2-kitchen-angle-1.webp', 'alt' => '翻新後的二舍共用廚房全景'],
            ['image' => 'assets/dorm-2-kitchen-angle-2.webp', 'alt' => '翻新後的二舍共用廚房用餐區'],
            ['image' => 'assets/dorm-2-kitchen-angle-4.webp', 'alt' => '翻新後的二舍共用廚房流理台與窗戶'],
            ['image' => 'assets/dorm-2-kitchen-angle-6.webp', 'alt' => '翻新後的二舍共用廚房桌椅與流理台'],
            ['image' => 'assets/dorm-2-kitchen-angle-7.webp', 'alt' => '翻新後的二舍共用廚房流理台與冰箱'],
            ['image' => 'assets/dorm-2-kitchen-angle-8.webp', 'alt' => '從用餐桌方向拍攝的翻新後二舍共用廚房'],
            ['image' => 'assets/dorm-1-kitchen.webp', 'alt' => '一舍男生宿舍翻新後的廚房'],
            ['image' => 'assets/shared-laundry.webp', 'alt' => '宿舍陽台旁的共用洗衣設施'],
        ],
    ],
    [
        'index' => '04 / 運動健身',
        'name' => '健身與運動',
        'text' => '校園體育館與室內游泳池提供運動、游泳及課業之餘放鬆的空間。',
        'mark' => 'G',
        'tone' => 'space-panel--blue',
        'link' => 'https://pe.yzu.edu.tw/index.php/zh/',
        'linkLabel' => '校園體育館',
        'slides' => [
            ['image' => 'assets/campus-gym-building.webp', 'alt' => '校園體育館與戶外跑道'],
            ['image' => 'assets/campus-gym-interior.webp', 'alt' => '校園體育館內的健身器材與重量訓練設備'],
            ['image' => 'assets/campus-pool.webp', 'alt' => '校園室內游泳池'],
        ],
    ],
    [
        'index' => '05 / 學生服務',
        'name' => '學生事務處',
        'text' => '學務處提供各項校園服務，辦公地點鄰近宿舍。',
        'mark' => 'A',
        'tone' => 'space-panel--lilac',
        'link' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/',
        'linkLabel' => '學生事務處',
        'slides' => [
            ['image' => 'assets/student-affairs-office.webp', 'alt' => '校園學務處辦公區'],
            ['image' => 'assets/student-affairs-info.webp', 'alt' => '學生事務資訊與組織介紹展示'],
            ['image' => 'assets/student-affairs-building.webp', 'alt' => '校園學務處大樓'],
        ],
    ],
    [
        'index' => '06 / 健康照護',
        'name' => '醫療服務',
        'text' => '三舍一樓提供醫療服務。',
        'mark' => 'M',
        'tone' => 'space-panel--teal',
        'link' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/wei-sheng-bao-jian',
        'linkLabel' => '醫療保健資訊',
        'slides' => [
            ['image' => 'assets/medical-services-building.webp', 'alt' => '校園健康中心入口外觀'],
            ['image' => 'assets/medical-services.webp', 'alt' => '三舍一樓的醫療服務空間'],
        ],
    ],
];

$officialHousingLinks = [
    'introduction' => [
        'label' => '宿舍介紹',
        'href' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/?option=com_sppagebuilder&view=page&id=108',
    ],
    'application_info' => [
        'label' => '宿舍申請資訊',
        'href' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/component/content/article/798-2016-07-19-03-24-27?Itemid=661',
    ],
    'association' => [
        'label' => '學生宿舍自治會',
        'href' => 'https://www.yzu.edu.tw/admin/st/index.php/tw/su-she-fu-wu/2016-07-26-08-55-27',
    ],
];
$housingApplicationUrl = 'https://www.yzu.edu.tw/admin/st/index.php/tw/su-she-fu-wu/zhu-su-shen-qing';
$applicationQuickLinks = [
    [
        'label' => '線上申請住宿',
        'description' => '前往官方線上住宿申請頁面。',
        'href' => $housingApplicationUrl,
    ],
    [
        'label' => '宿舍申請資訊',
        'description' => '查看官方住宿申請說明。',
        'href' => $officialHousingLinks['application_info']['href'],
    ],
];

$guideSteps = [
    ['step' => '01', 'title' => '確認住宿時程', 'copy' => '留意學生宿舍服務組公告，確認春季住宿線上抽籤時間與申請資格。'],
    ['step' => '02', 'title' => '提交住宿申請', 'copy' => '透過元智官方入口完成住宿申請，並繳交所需保證金。'],
    ['step' => '03', 'title' => '準備入住', 'copy' => '備妥寢具、網路線與日常用品，準備入住分配到的宿舍房間。'],
];

$faqs = [
    [
        'question' => '每間宿舍房間提供哪些設備？',
        'answer' => '每個床位皆配置書桌、椅子、衣櫃與個人網路接孔。請自行準備寢具、網路線與延長線。',
    ],
    [
        'question' => '宿舍網路有夜間管制時段嗎？',
        'answer' => '有。為維護學生健康與休息品質，宿舍網路於凌晨時段會實施管制。',
    ],
    [
        'question' => '包裹和郵件要在哪裡領取？',
        'answer' => '請至二舍一樓管理中心領取學生包裹。',
    ],
];

$studentResources = [
    [
        'label' => '宿舍設備',
        'title' => '宿舍設施一覽',
        'description' => '整理房間設備、宿舍公共設施，以及附近餐飲、商店、郵件服務與提款機等生活資訊。',
        'image' => 'assets/dorm-features-guide.webp',
        'alt' => '以繁體中文介紹宿舍房間設備、住宿設施與周邊服務的資訊圖。',
    ],
    [
        'label' => '房間規劃',
        'title' => '床位與書桌尺寸',
        'description' => '宿舍床位與讀書空間的約略尺寸圖示。實際房間尺寸可能有所差異。',
        'image' => 'assets/room-dimensions-guide.webp',
        'alt' => '以繁體中文標示上下舖、層架與書桌約略尺寸的宿舍配置圖。',
    ],
    [
        'label' => '住宿規定・一',
        'title' => '一般及重大違規事項',
        'description' => '圖表列出記點五點與十點的違規事項，包括噪音、公共空間堆放物品、違規電器、室內烹煮、違禁物品及飼養寵物。',
        'image' => 'assets/dorm-rules-1.webp',
        'alt' => '以繁體中文列出記點五點與十點違規事項的住宿規定海報。',
    ],
    [
        'label' => '住宿規定・二',
        'title' => '嚴重違規事項與處分',
        'description' => '圖表列出記點十五點與二十五點的違規事項，包括吸菸、損壞公物、擅自調換床位或留宿訪客，以及海報所列的相關處分。',
        'image' => 'assets/dorm-rules-2.webp',
        'alt' => '以繁體中文列出記點十五點與二十五點違規事項及處分的住宿規定海報。',
    ],
];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?><!doctype html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f0f4f8">
    <meta name="description" content="<?= e($residence['note']) ?> 認識元智大學宿舍房型、公共空間、校園生活與住宿須知。">
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
        .eyebrow, .micro-label, .nav-link, .button, .room-type, .space-index, .step-number {
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
        .desktop-nav { display: flex; align-items: center; gap: clamp(10px, 1.25vw, 18px); }
        .desktop-nav .nav-link { white-space: nowrap; letter-spacing: .06em; }
        .nav-link { text-decoration: none; transition: color .2s ease; }
        .nav-link:hover { color: var(--yzu-accent); }
        .nav-link--action { padding: 12px 16px; border: 1px solid var(--yzu-blue); color: var(--yzu-blue); }
        .nav-link--action:hover { background: var(--yzu-blue); color: #ffffff; }
        .mobile-menu { display: none; }
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
            z-index: 30;
            display: grid;
            width: min(340px, calc(100vw - 36px));
            max-height: calc(100vh - 90px);
            overflow-y: auto;
            padding: 9px 18px;
            border: 1px solid var(--line);
            background: var(--paper);
            box-shadow: 0 15px 28px rgba(15, 60, 93, .15);
        }
        .mobile-menu .nav-link { display: block; padding: 15px 0; border-bottom: 1px solid var(--line); }
        .mobile-menu .nav-link--action { margin-top: 9px; padding: 12px; border: 1px solid var(--yzu-blue); }

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

        .section-kicker { display: flex; align-items: center; gap: 11px; color: var(--yzu-accent); }
        .section-kicker::before { width: 25px; height: 1px; background: currentColor; content: ""; }
        .announcement-section { padding: 76px 0 84px; border-block: 1px solid var(--line); background: var(--paper); }
        .announcement-section .section-heading { margin-bottom: 27px; }
        .announcement-frame { overflow: hidden; border: 1px solid var(--line); background: #ffffff; }
        .announcement-frame iframe { display: block; width: 100%; height: min(84vh, 940px); min-height: 640px; border: 0; background: #ffffff; }
        .announcement-frame iframe[hidden] { display: none; }
        .announcement-frame-fallback { display: grid; min-height: 320px; place-content: center; justify-items: center; gap: 12px; padding: 28px; color: var(--ink-soft); text-align: center; }
        .announcement-frame-fallback[hidden] { display: none; }
        .announcement-frame-fallback p { max-width: 560px; margin: 0; font-size: 13px; }
        .announcement-official-link { display: inline-flex; align-items: center; gap: 8px; color: var(--yzu-blue); font-size: 12px; font-weight: 700; text-decoration: none; }
        .announcement-official-link:hover { text-decoration: underline; text-underline-offset: 4px; }
        .announcement-note { margin: 12px 0 0; color: var(--ink-soft); font-size: 11px; }
        .maintenance-section { padding: 98px 0 108px; background: var(--paper-tint); }
        .maintenance-guide-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px; }
        .maintenance-guide-card { display: block; overflow: hidden; border: 1px solid var(--line); background: #ffffff; text-decoration: none; }
        .maintenance-guide-card img { display: block; width: 100%; aspect-ratio: 2000 / 887; object-fit: contain; transition: transform .3s ease; }
        .maintenance-guide-card:hover img { transform: scale(1.025); }
        .maintenance-guide-card span { display: flex; justify-content: space-between; gap: 12px; padding: 15px 17px; border-top: 1px solid var(--line); color: var(--yzu-blue-deep); font-size: 12px; font-weight: 700; }
        .maintenance-guide-card span::after { color: var(--yzu-accent); content: "↗"; }

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

        .housing-section { padding: 101px 0 111px; background: var(--rose-wash); border-top: 1px solid rgba(225,29,72,0.15); border-bottom: 1px solid rgba(225,29,72,0.15); }
        .housing-layout { display: grid; grid-template-columns: .85fr 1.15fr; gap: clamp(40px, 8vw, 115px); }
        .housing-lede { position: sticky; top: 35px; align-self: start; }
        .housing-lede h2 { max-width: 490px; margin: 13px 0 22px; font-family: var(--sans); font-size: clamp(38px, 5vw, 58px); font-weight: 700; letter-spacing: -.03em; line-height: 1.05; color: var(--yzu-blue-deep); }
        .housing-lede > p { max-width: 395px; color: var(--ink-soft); font-size: 13px; }
        .guide-notice { display: flex; align-items: flex-start; gap: 12px; max-width: 400px; margin-top: 27px; padding-top: 15px; border-top: 1px solid rgba(15, 60, 93, .2); color: var(--ink-soft); font-size: 11px; }
        .guide-notice span { color: var(--yzu-accent); font-weight: 700; font-size: 16px; line-height: 1; }
        .steps { border-top: 1px solid rgba(15, 60, 93, .2); }
        .guide-step { display: grid; grid-template-columns: 52px 1fr; gap: 18px; padding: 21px 0 23px; border-bottom: 1px solid rgba(15, 60, 93, .2); }
        .step-number { padding-top: 6px; color: var(--yzu-accent); font-weight: 700; }
        .guide-step h3 { margin: 0 0 5px; font-family: var(--sans); font-size: 20px; font-weight: 700; color: var(--yzu-blue-deep); }
        .guide-step p { max-width: 490px; margin: 0; color: var(--ink-soft); font-size: 12px; }
        .housing-resources { margin-top: 27px; }
        .housing-resources h3 { margin: 0 0 10px; color: var(--yzu-blue-deep); font-size: 10px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; }
        .housing-resource-list { display: grid; gap: 8px; }
        .housing-resource-link { display: flex; align-items: center; justify-content: space-between; gap: 16px; padding: 12px 15px; border: 1px solid rgba(15, 60, 93, .16); background: rgba(255, 255, 255, .58); color: var(--yzu-blue-deep); text-decoration: none; transition: border-color .2s ease, background .2s ease; }
        .housing-resource-link:hover { border-color: var(--yzu-blue); background: #fff; }
        .housing-resource-link:focus-visible { outline: 3px solid var(--yzu-accent); outline-offset: 3px; }
        .housing-resource-link strong { display: block; font-size: 12px; }
        .housing-resource-link small { display: block; margin-top: 3px; color: var(--ink-soft); font-size: 10px; }
        .housing-resource-link > span:last-child { flex: 0 0 auto; color: var(--yzu-blue); font-size: 16px; }
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

        @media (max-width: 1120px) {
            .desktop-nav { display: none; }
            .mobile-menu { position: relative; display: block; }
        }
        @media (max-width: 900px) {
            .hero { min-height: auto; padding-top: 35px; }
            .hero-layout { grid-template-columns: 1fr 1fr; gap: 20px; }
            .hero h1 { font-size: clamp(42px, 7vw, 68px); }
            .hero-art { min-height: 420px; }
            .spaces-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .room-card-content { padding-inline: 18px; }
            .room-card p { min-height: 96px; }
            .housing-layout { gap: 50px; }
            .resource-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
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
            .mobile-menu .nav-link:last-child:not(.nav-link--action) { border-bottom: 0; }
            .mobile-menu .nav-link--action { margin-top: 9px; padding: 12px; border: 1px solid var(--yzu-blue); }
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
            .announcement-section { padding: 58px 0 64px; }
            .announcement-frame iframe { height: 78vh; min-height: 680px; }
            .maintenance-section { padding: 74px 0 82px; }
            .maintenance-guide-grid { grid-template-columns: 1fr; gap: 14px; }
            .rooms-section, .spaces-section, .housing-section, .faq-section, .student-essentials { padding: 76px 0 82px; }
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
            .spaces-tail { font-size: 13px; }
            .housing-layout { grid-template-columns: 1fr; gap: 38px; }
            .housing-lede { position: static; }
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
    <a class="skip-link" href="#main-content">跳至主要內容</a>
    <header class="site-header">
        <div class="wrap header-inner">
            <a class="brand" href="#top" aria-label="<?= e($residence['hall']) ?>首頁">
                <img class="brand-logo" src="assets/yzu-logo.webp" alt="" aria-hidden="true" width="48" height="48">
                <span class="brand-text">
                    <strong><?= e($residence['hall']) ?></strong>
                    <span><?= e($residence['school']) ?></span>
                </span>
            </a>
            <nav class="desktop-nav" aria-label="宿舍官方連結">
                <?php foreach ($officialHousingLinks as $item): ?>
                    <a class="nav-link" href="<?= e($item['href']) ?>" target="_blank" rel="noopener noreferrer"><?= e($item['label']) ?></a>
                <?php endforeach; ?>
                <a class="nav-link nav-link--action" href="#maintenance-guides">宿舍報修</a>
            </nav>
            <details class="mobile-menu">
                <summary aria-label="開啟宿舍官方連結選單">
                    <span class="menu-icon" aria-hidden="true"><i></i><i></i></span>
                    連結
                </summary>
                <nav aria-label="宿舍官方連結">
                    <?php foreach ($officialHousingLinks as $item): ?>
                        <a class="nav-link" href="<?= e($item['href']) ?>" target="_blank" rel="noopener noreferrer"><?= e($item['label']) ?></a>
                    <?php endforeach; ?>
                    <a class="nav-link nav-link--action" href="#maintenance-guides">宿舍報修</a>
                </nav>
            </details>
        </div>
    </header>

    <main id="main-content">
        <section class="hero" aria-labelledby="hero-title">
            <div class="wrap hero-layout">
                <div class="hero-copy">
                    <div class="eyebrow"><?= e($residence['eyebrow']) ?></div>
                    <h1 id="hero-title">在校園裡<br><em>自在如家。</em></h1>
                    <p class="hero-intro"><?= e($residence['intro']) ?></p>
                    <div class="hero-actions">
                        <a class="button" href="#rooms">探索元智宿舍 <span class="button-arrow" aria-hidden="true">↘</span></a>
                        <a class="text-link" href="<?= e($housingApplicationUrl) ?>" target="_blank" rel="noopener noreferrer">住宿申請入口 <span aria-hidden="true">↗</span></a>
                    </div>
                    <div class="hero-note"><?= e($residence['note']) ?></div>
                </div>
                <div class="hero-art">
                    <span class="hero-stamp" aria-hidden="true">元智<br>宿舍</span>
                    <img class="hero-photo" src="assets/dorm-exterior.webp" alt="元智大學學生宿舍中庭外觀" fetchpriority="high" decoding="async">
                    <div class="hero-caption">
                        <strong><?= e($residence['hall']) ?></strong>
                        <span><?= e($residence['school']) ?>・桃園市</span>
                    </div>
                </div>
            </div>
        </section>

        <div class="ribbon" aria-label="宿舍生活亮點">
            <div class="wrap ribbon-inner">
                <div class="ribbon-item"><span class="ribbon-mark">01</span> 鄰近餐飲與商店</div>
                <span class="ribbon-divider" aria-hidden="true"></span>
                <div class="ribbon-item"><span class="ribbon-mark">02</span> 閱讀與交流空間</div>
                <span class="ribbon-divider" aria-hidden="true"></span>
                <div class="ribbon-item"><span class="ribbon-mark">03</span> 溫暖共居的宿舍社群</div>
            </div>
        </div>

        <section class="announcement-section" id="announcements" aria-labelledby="announcements-title">
            <div class="wrap">
                <div class="section-heading">
                    <div>
                        <div class="eyebrow section-kicker">公告資訊</div>
                        <h2 id="announcements-title">宿舍最新公告</h2>
                    </div>
                    <a class="announcement-official-link" href="https://www.yzu.edu.tw/admin/st/index.php/tw/su-she-fu-wu/new" target="_blank" rel="noopener noreferrer">
                        前往官方公告頁面 <span aria-hidden="true">↗</span>
                    </a>
                </div>
                <div class="announcement-frame">
                    <div class="announcement-frame-fallback" data-announcement-frame-fallback role="status">
                        <p>官方公告頁限制跨網站嵌入；當本網站與公告頁位於相同網站來源時，公告才會顯示於此。現在可使用上方連結前往官方公告頁面。</p>
                    </div>
                    <iframe
                        data-src="https://www.yzu.edu.tw/admin/st/index.php/tw/su-she-fu-wu/new"
                        data-announcement-frame
                        title="元智大學學生宿舍最新公告"
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        hidden>
                    </iframe>
                </div>
            </div>
        </section>

        <section class="rooms-section" id="rooms" aria-labelledby="rooms-title">
            <div class="wrap">
                <div class="section-heading">
                    <div>
                        <div class="eyebrow section-kicker">住宿選擇</div>
                        <h2 id="rooms-title">選擇你的<br>生活空間。</h2>
                    </div>
                    <p>從適合新生與國際學生的校內宿舍，到現代化套房型住宿，依照需求選擇合適的生活空間。</p>
                </div>
                <div class="room-grid<?= count($roomTypes) === 5 ? ' room-grid--five' : '' ?>">
                    <?php foreach ($roomTypes as $index => $room): ?>
                        <article class="room-card <?= e($room['class']) ?>">
                            <div class="room-card-art">
                                <span class="room-type"><?= e($room['type']) ?></span>
                                <?php if (!empty($room['cover'])): ?>
                                    <img class="room-photo" src="<?= e($room['cover']) ?>" alt="<?= e($room['coverAlt']) ?>" loading="lazy" decoding="async">
                                <?php elseif ($room['symbol'] === 'beds'): ?>
                                    <svg class="room-graphic" viewBox="0 0 420 250" role="img" aria-label="四人標準宿舍房間示意圖">
                                        <rect width="420" height="250" fill="#e2e8f0"/>
                                        <path d="M0 193h420v57H0Z" fill="#cbd5e1"/>
                                        <rect x="80" y="60" width="100" height="110" fill="#ffffff" stroke="#0f3c5d" stroke-width="3"/>
                                        <path d="M100 80h60v20h-60z" fill="#3b82f6"/>
                                        <rect x="240" y="60" width="100" height="110" fill="#ffffff" stroke="#0f3c5d" stroke-width="3"/>
                                        <path d="M260 80h60v20h-60z" fill="#3b82f6"/>
                                    </svg>
                                <?php elseif ($room['symbol'] === 'door'): ?>
                                    <svg class="room-graphic" viewBox="0 0 420 250" role="img" aria-label="套房型房間示意圖">
                                        <rect width="420" height="250" fill="#cbd5e1"/>
                                        <path d="M0 193h420v57H0Z" fill="#94a3b8"/>
                                        <rect x="110" y="40" width="200" height="160" fill="#f8fafc" stroke="#0f3c5d" stroke-width="4"/>
                                        <path d="M140 70h140v100H140z" fill="#e2e8f0"/>
                                        <circle cx="270" cy="120" r="6" fill="#2563eb"/>
                                    </svg>
                                <?php else: ?>
                                    <svg class="room-graphic" viewBox="0 0 420 250" role="img" aria-label="校外住宿示意圖">
                                        <rect width="420" height="250" fill="#e2e8f0"/>
                                        <path d="M0 193h420v57H0Z" fill="#cbd5e1"/>
                                        <path d="M120 70l90-40 90 40v130H120z" fill="#ffffff" stroke="#0f3c5d" stroke-width="4"/>
                                        <rect x="160" y="100" width="100" height="80" fill="#93c5fd" opacity=".6"/>
                                    </svg>
                                <?php endif; ?>
                                <span class="room-card-view" aria-hidden="true">查看詳情 <span>↗</span></span>
                            </div>
                            <div class="room-card-content">
                                <div class="room-card-top">
                                    <h3><?= e($room['name']) ?></h3>
                                    <span class="room-number"><?= e($room['number']) ?></span>
                                </div>
                                <p><?= e($room['description']) ?></p>
                                <div class="room-meta"><?= e($room['detail']) ?></div>
                            </div>
                            <button class="room-card-open" type="button" aria-label="查看<?= e($room['name']) ?>照片與住宿資訊" aria-haspopup="dialog" aria-controls="room-dialog" data-room-index="<?= (int) $index ?>"></button>
                        </article>
                    <?php endforeach; ?>
                </div>
                <p class="rooms-footnote"><span>注意</span> 一舍與二舍為共用衛浴，且沒有獨立陽台；三舍A與三舍B為費用較高的套房型住宿，每間皆有獨立衛浴與陽台。</p>
            </div>
        </section>

        <dialog class="room-dialog" id="room-dialog" aria-labelledby="room-dialog-title" aria-describedby="room-dialog-description">
            <div class="room-dialog-shell">
                <button class="room-dialog-close" type="button" aria-label="關閉房型資訊">×</button>
                <div class="room-dialog-gallery">
                    <div class="room-dialog-image-window" role="group" aria-roledescription="照片輪播" aria-label="房間照片">
                        <div class="room-dialog-track" id="room-dialog-track"></div>
                    </div>
                    <button class="room-dialog-arrow room-dialog-arrow--prev" type="button" data-gallery-step="-1" aria-label="上一張照片">‹</button>
                    <button class="room-dialog-arrow room-dialog-arrow--next" type="button" data-gallery-step="1" aria-label="下一張照片">›</button>
                    <div class="room-dialog-gallery-bottom">
                        <div class="room-dialog-dots" aria-label="選擇照片"></div>
                        <span class="room-dialog-count" aria-live="polite" aria-atomic="true"></span>
                    </div>
                </div>
                <div class="room-dialog-copy">
                    <p class="room-dialog-kicker">宿舍簡介</p>
                    <h2 class="room-dialog-title" id="room-dialog-title"></h2>
                    <p class="room-dialog-type"></p>
                    <p class="room-dialog-description" id="room-dialog-description"></p>
                    <ul class="room-dialog-highlights"></ul>
                    <p class="room-dialog-note">房間分配、住宿費用與空房狀況，請向元智大學學生宿舍服務組確認。</p>
                </div>
            </div>
        </dialog>

        <section class="student-essentials" id="student-essentials" aria-labelledby="student-essentials-title">
            <div class="wrap">
                <div class="section-heading">
                    <div>
                        <div class="eyebrow section-kicker">新生住宿指南</div>
                        <h2 id="student-essentials-title">入住前，先做好準備。</h2>
                    </div>
                    <p>宿舍設施、房間尺寸與住宿規定實用指南。點選海報即可開啟大圖。</p>
                </div>
                <div class="resource-grid">
                    <?php foreach ($studentResources as $resource): ?>
                        <article class="resource-card">
                            <a class="resource-image" href="<?= e($resource['image']) ?>" target="_blank" rel="noopener" aria-label="在新分頁開啟「<?= e($resource['title']) ?>」海報">
                                <img src="<?= e($resource['image']) ?>" alt="<?= e($resource['alt']) ?>" loading="lazy" decoding="async">
                                <span class="resource-open" aria-hidden="true">開啟海報 ↗</span>
                            </a>
                            <div class="resource-content">
                                <span class="resource-label"><?= e($resource['label']) ?></span>
                                <h3><?= e($resource['title']) ?></h3>
                                <p><?= e($resource['description']) ?></p>
                                <p class="resource-language">原始指南・繁體中文</p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                <p class="resource-note">本區海報原文為繁體中文；住宿規定、申請日期與房間資訊，請以元智大學學生宿舍服務組公告為準。房間尺寸為約略值。</p>
            </div>
        </section>

        <section class="maintenance-section" id="maintenance-guides" aria-labelledby="maintenance-title">
            <div class="wrap">
                <div class="section-heading">
                    <div>
                        <div class="eyebrow section-kicker">宿舍維護</div>
                        <h2 id="maintenance-title">宿舍報修指南。</h2>
                    </div>
                    <p>依照問題類型選擇一般修繕或網路報修流程，點選圖片可開啟大圖。</p>
                </div>
                <div class="maintenance-guide-grid">
                    <a class="maintenance-guide-card" href="assets/maintenance-guide-1.webp" target="_blank" rel="noopener noreferrer">
                        <img src="assets/maintenance-guide-1.webp" alt="宿舍一般修繕報修流程圖，說明登入個人入口、選擇問題類別與送出申請" loading="lazy" decoding="async">
                        <span>一般修繕報修流程</span>
                    </a>
                    <a class="maintenance-guide-card" href="assets/maintenance-guide-2.webp" target="_blank" rel="noopener noreferrer">
                        <img src="assets/maintenance-guide-2.webp" alt="宿舍網路報修流程圖，說明登入個人入口、選擇學生宿舍網路問題並送出申請" loading="lazy" decoding="async">
                        <span>網路報修流程</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="spaces-section" id="spaces" aria-labelledby="spaces-title">
            <div class="wrap">
                <div class="section-heading">
                    <div>
                        <div class="eyebrow section-kicker">生活與學習設施</div>
                        <h2 id="spaces-title">校園所需，<br>就在身邊。</h2>
                    </div>
                    <p>探索校園周邊的餐飲、自習、運動、健康照護與學生服務空間。</p>
                </div>
                <div class="spaces-grid">
                    <?php foreach ($spaces as $space): ?>
                        <article class="space-panel <?= e($space['tone']) ?>">
                            <div class="space-media"<?= count($space['slides']) > 1 ? ' data-space-slideshow role="group" aria-roledescription="照片輪播" aria-label="' . e($space['name']) . '照片"' : '' ?>>
                                <?php foreach ($space['slides'] as $slideIndex => $slide): ?>
                                    <figure class="space-slide<?= $slideIndex === 0 ? ' is-active' : '' ?>" aria-hidden="<?= $slideIndex === 0 ? 'false' : 'true' ?>">
                                        <img class="space-photo" src="<?= e($slide['image']) ?>" alt="<?= e($slide['alt']) ?>" loading="lazy" decoding="async">
                                    </figure>
                                <?php endforeach; ?>
                                <?php if (count($space['slides']) > 1): ?>
                                    <div class="space-slideshow-controls" hidden>
                                        <button type="button" data-space-previous aria-label="上一張照片">‹</button>
                                        <button type="button" data-space-toggle aria-label="暫停自動輪播" aria-pressed="true">Ⅱ</button>
                                        <span class="space-slide-count">1 / <?= count($space['slides']) ?></span>
                                        <button type="button" data-space-next aria-label="下一張照片">›</button>
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
                <div class="spaces-tail">便利的生活空間，陪伴你在校園中成長。</div>
            </div>
        </section>

        <section class="housing-section" id="housing-guide" aria-labelledby="housing-title">
            <div class="wrap housing-layout">
                <div class="housing-lede">
                    <div class="eyebrow section-kicker">住宿申請指南</div>
                    <h2 id="housing-title">住宿申請<br>接下來這樣做。</h2>
                    <p>依照學生宿舍服務組公告的正式程序辦理，為自己安排合適的住宿。</p>
                <div class="guide-notice"><span aria-hidden="true">i</span><div><?= e($residence['note']) ?> 申請期間請以元智官方公告為準。<a href="#student-essentials">查看宿舍設施、房間尺寸與住宿規定。</a></div></div>
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
                    <nav class="housing-resources" aria-label="住宿申請官方連結">
                        <h3>住宿官方連結</h3>
                        <div class="housing-resource-list">
                            <?php foreach ($applicationQuickLinks as $link): ?>
                                <a class="housing-resource-link" href="<?= e($link['href']) ?>" target="_blank" rel="noopener noreferrer">
                                    <span><strong><?= e($link['label']) ?></strong><small><?= e($link['description']) ?></small></span>
                                    <span aria-hidden="true">↗</span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </nav>
                    <a class="housing-cta" href="#questions">查看住宿常見問題 <span aria-hidden="true">↓</span></a>
                </div>
            </div>
        </section>

        <section class="faq-section" id="questions" aria-labelledby="faq-title">
            <div class="wrap faq-layout">
                <div class="faq-title">
                    <div class="eyebrow section-kicker">常見解答</div>
                    <h2 id="faq-title">住宿常見問題。</h2>
                    <p>關於元智大學學生宿舍生活，你需要知道的資訊都在這裡。</p>
                    <a class="faq-official-link" href="https://www.yzu.edu.tw/admin/st/index.php/tw/su-she-fu-wu/2016-07-19-01-33-33" target="_blank" rel="noopener noreferrer">
                        宿舍問答 <span aria-hidden="true">↗</span>
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

        <section class="closing" aria-label="結語">
            <div class="wrap closing-inner">
                <div class="closing-copy">
                    <div class="eyebrow">元智大學</div>
                    <h2>加入我們的宿舍社群。<br>你的校園之家，等你入住。</h2>
                </div>
                <img class="closing-logo" src="assets/yzu-logo.webp" alt="元智大學校徽" width="112" height="112">
            </div>
        </section>
    </main>

    <footer class="site-footer" id="contact">
        <div class="wrap footer-inner">
            <div class="footer-brand">
                <img class="footer-brand-logo" src="assets/yzu-logo.webp" alt="" aria-hidden="true" width="46" height="46">
                <strong>元智大學學生宿舍服務組</strong>
            </div>
            <section class="footer-contact" aria-labelledby="footer-contact-title">
                <h2 class="footer-contact-title" id="footer-contact-title">聯絡學生宿舍服務組</h2>
                <p class="footer-contact-hotline"><strong>服務專線：</strong> <a href="tel:034639900">03-4639900</a> 分機 ➤➤➤</p>
                <p>諮詢：2880、2868 │ 維修：2865 │ 床位分配：2867 │ 學生餐廳：2869 │</p>
                <p>男生宿舍櫃檯：2881 │ 女生宿舍櫃檯：2882 │ 宿舍辦公室（24小時）：<a href="tel:0903032011">0903032011</a></p>
            </section>
            <a class="footer-top" href="#top">回到頁首 ↑</a>
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
                count.textContent = `第 ${activeSlide + 1} 張／共 ${activeRoom.gallery.length} 張照片`;
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
                    dot.setAttribute('aria-label', `顯示第 ${index + 1} 張照片，共 ${room.gallery.length} 張`);
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
                    toggleButton.setAttribute('aria-label', automatic ? '暫停自動輪播' : '繼續自動輪播');
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

            const announcementFrame = document.querySelector('[data-announcement-frame]');
            const announcementFallback = document.querySelector('[data-announcement-frame-fallback]');
            if (announcementFrame && announcementFallback) {
                const announcementUrl = new URL(announcementFrame.dataset.src, window.location.href);
                if (announcementUrl.origin === window.location.origin) {
                    announcementFrame.src = announcementUrl.href;
                    announcementFrame.hidden = false;
                    announcementFallback.hidden = true;
                }
            }

            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (!prefersReducedMotion && 'IntersectionObserver' in window) {
                const revealTargets = document.querySelectorAll('.section-heading, .room-card, .space-panel, .guide-step, .faq-title, .faq-list details, .closing-inner');
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