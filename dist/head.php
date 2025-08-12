<?php
$data = [
    'src' => 'https://ritualsense.tw/',
    'title' => '文福宜室感｜安南核心低公設比2-3房｜官網',
    'description' => '文福宜室感：速達安和路商圈、海佃國小、北外環道與商60重劃區，28.3%低公設比。接待會館：安和路一段43號；預約專線251-0081',
    'keyword' => '宜室感,文福建設,安南區預售屋,台南買房,謙福建設',
    'image' => 'https://ritualsense.tw/og.jpg'
];

$docTitle = $data['title'];
$siteName = $data['title'];
$docDesc = $data['description'];
$keyWords = $data['keyword'];
$ogType = 'website';
$shareUrl = $data['src'];
$shareImg = $data['image'];
?>

<title><?php echo $docTitle; ?></title>
<meta name="description" content="<?php echo $docDesc ?>">
<meta name="keywords" content="<?php echo $keyWords ?>">

<!-- Open Graph -->
<meta property="og:locale" content="zh_TW" />
<meta property="og:type" content="<?php echo $ogType ?>" />
<meta property="og:title" content="<?php echo $docTitle; ?>" />
<meta property="og:description" content="<?php echo $docDesc ?>" />
<meta property="og:site_name" content="<?php echo $siteName; ?>" />
<meta property="og:url" content="<?php echo $shareUrl; ?>" />
<meta property="og:image" content="<?php echo $shareImg; ?>" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo $docTitle; ?>" />
<meta name="twitter:description" content="<?php echo $docDesc ?>" />
<meta name="twitter:image" content="<?php echo $shareImg; ?>" />

<!-- Schema.org -->
<meta itemprop="name" content="<?php echo $docTitle; ?>">
<meta itemprop="description" content="<?php echo $docDesc ?>">
<meta itemprop="image" content="<?php echo $shareImg; ?>">
