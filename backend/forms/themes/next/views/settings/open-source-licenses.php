<?php

use app\helpers\IconHelper;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use app\components\widgets\ActiveForm;

$this->title = Yii::t('app', 'Open Source Licenses');

$this->params['breadcrumbs'][] = ['label' => $this->title];

$licenses = [
    [
        'item' => 'Yii2 framework',
        'copyright' => 'Copyright © 2008 by Yii Software LLC',
        'license' => 'Licensed under the BSD 3-Clause "New" or "Revised" License',
        'license_url' => 'https://github.com/yiisoft/yii2/blob/master/LICENSE.md',
    ],
    [
        'item' => '2fa library',
        'copyright' => 'Copyright (c) 2amigOS! Consulting Group LLC',
        'license' => 'Licensed under The BSD License (BSD)',
        'license_url' => 'https://github.com/2amigos/2fa-library/blob/master/LICENSE.md',
    ],
    [
        'item' => 'Yii2 Flysystem',
        'copyright' => 'Copyright (c) 2amigOS! Consulting Group LLC',
        'license' => 'Licensed under The BSD License (BSD)',
        'license_url' => 'https://github.com/2amigos/yii2-flysystem-component/blob/master/LICENSE.md',
    ],
    [
        'item' => 'Yii2 Usuario',
        'copyright' => 'Copyright (c) 2amigOS! Consulting Group LLC',
        'license' => 'Licensed under The BSD License (BSD)',
        'license_url' => 'https://github.com/2amigos/yii2-usuario/blob/master/LICENSE.md',
    ],
    [
        'item' => 'Yii2 Selectize Widget',
        'copyright' => 'Copyright (c) 2amigOS! Consulting Group LLC',
        'license' => 'Licensed under The BSD License (BSD)',
        'license_url' => 'https://github.com/2amigos/yii2-selectize-widget/blob/master/LICENSE.md',
    ],
    [
        'item' => 'Bacon QR Code generator',
        'copyright' => 'Copyright (c) 2017, Ben Scholzen "DASPRiD"',
        'license' => 'Licensed under the BSD 2-Clause "Simplified" License',
        'license_url' => 'https://github.com/Bacon/BaconQrCode/blob/master/LICENSE',
    ],
    [
        'item' => 'EmailValidator',
        'copyright' => 'Copyright (c) 2013-2023 Eduardo Gulias Davis',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/egulias/EmailValidator/blob/4.x/LICENSE',
    ],
    [
        'item' => 'HTML Purifier',
        'copyright' => 'Copyright (c) Edward Z. Yang',
        'license' => 'Licensed under the GNU Lesser General Public License v2.1',
        'license_url' => 'https://github.com/ezyang/htmlpurifier/blob/master/LICENSE',
    ],
    [
        'item' => 'Simple Excel',
        'copyright' => 'Copyright (c) 2011-2012 Faisalman',
        'license' => 'Licensed under MIT License',
        'license_url' => 'https://github.com/faisalman/simple-excel-php',
    ],
    [
        'item' => 'MaxMind GeoIP2 PHP API',
        'copyright' => 'Copyright (c) 2013-2023 by MaxMind, Inc',
        'license' => 'Licensed under the Apache License 2.0',
        'license_url' => 'https://github.com/maxmind/GeoIP2-php/blob/main/LICENSE',
    ],
    [
        'item' => 'libphonenumber for PHP',
        'copyright' => 'Copyright (c) by Joshua Gigg',
        'license' => 'Licensed under the Apache License 2.0',
        'license_url' => 'https://github.com/giggsey/libphonenumber-for-php/blob/master/LICENSE',
    ],
    [
        'item' => 'Guzzle, PHP HTTP client',
        'copyright' => 'Copyright (c) 2011 Michael Dowling',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/guzzle/guzzle/blob/7.7/LICENSE',
    ],
    [
        'item' => 'Intervention Image',
        'copyright' => 'Copyright (c) 2014 Oliver Vogel',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/Intervention/image/blob/master/LICENSE',
    ],
    [
        'item' => 'Krajee Yii Extensions',
        'copyright' => 'Copyright (c) 2014 - 2022, Kartik Visweswaran',
        'license' => 'Licensed under the BSD-3-Clause License',
        'license_url' => 'https://github.com/kartik-v/yii2-krajee-base/blob/master/LICENSE.md',
    ],
    [
        'item' => 'Flysystem',
        'copyright' => 'Copyright (c) 2013-2019 Frank de Jonge',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/thephpleague/flysystem/blob/3.x/LICENSE',
    ],
    [
        'item' => 'Matomo',
        'copyright' => 'Copyright (c) Matomo Analytics',
        'license' => 'Licensed under the GNU Lesser General Public License v3.0',
        'license_url' => 'https://github.com/matomo-org/component-network/blob/master/LICENSE',
    ],
    [
        'item' => 'Internal MaxMind Web Service API',
        'copyright' => 'Copyright (c) Gregory Oschwald',
        'license' => 'Licensed under the Apache License 2.0',
        'license_url' => 'https://github.com/maxmind/web-service-common-php/blob/main/LICENSE',
    ],
    [
        'item' => 'Swiftmailer',
        'copyright' => 'Copyright (c) 2013-2021 Fabien Potencier',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/swiftmailer/swiftmailer/blob/master/LICENSE',
    ],
    [
        'item' => 'Symfony',
        'copyright' => 'Copyright (c) 2013-present Fabien Potencier',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/symfony/polyfill/blob/main/LICENSE',
    ],
    [
        'item' => 'Bootstrap 5',
        'copyright' => 'Copyright (c) 2011-2023 The Bootstrap Authors',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/yiisoft/yii2/blob/master/LICENSE.md',
    ],
    [
        'item' => 'Backbone.JS',
        'copyright' => 'Copyright (c) 2010-2023 Jeremy Ashkenas, DocumentCloud',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/jashkenas/backbone/blob/master/LICENSE',
    ],
    [
        'item' => 'Underscore.JS',
        'copyright' => 'Copyright (c) 2010-2023 Jeremy Ashkenas, DocumentCloud',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/jashkenas/underscore/blob/master/LICENSE',
    ],
    [
        'item' => 'jQuery',
        'copyright' => 'Copyright OpenJS Foundation and other contributors',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/jquery/jquery/blob/main/LICENSE.txt',
    ],
    [
        'item' => 'SimpleBar',
        'copyright' => 'Copyright (c) 2015 Jonathan Nicol',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/Grsmto/simplebar/blob/master/LICENSE',
    ],
    [
        'item' => 'Tabler',
        'copyright' => 'Copyright (c) 2018-2023 The Tabler Authors',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/tabler/tabler/blob/dev/LICENSE',
    ],
    [
        'item' => 'Tabler Icons',
        'copyright' => 'Copyright (c) 2020-2023 Paweł Kuna',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/tabler/tabler-icons/blob/master/LICENSE',
    ],
    [
        'item' => 'ClipboardJS',
        'copyright' => 'Copyright (c) Zeno Rocha',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/zenorocha/clipboard.js/blob/master/LICENSE',
    ],
    [
        'item' => 'Date Range Picker',
        'copyright' => 'Copyright (c) 2012-2020 Dan Grossman',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/dangrossman/daterangepicker#license',
    ],
    [
        'item' => 'dc.js',
        'copyright' => 'Copyright (c) 2012-2020 Dan Grossman',
        'license' => 'Copyright 2012-2016 Nick Zhu & the dc.js Developers',
        'license_url' => 'https://github.com/dc-js/dc.js/blob/develop/LICENSE',
    ],
    [
        'item' => 'apexcharts.js',
        'copyright' => 'Copyright (c) 2018 ApexCharts',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/apexcharts/apexcharts.js/blob/main/LICENSE',
    ],
    [
        'item' => 'jsvectormap.js',
        'copyright' => 'Copyright (c) 2020 Mustafa Omar',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/themustafaomar/jsvectormap/blob/main/LICENSE',
    ],
    [
        'item' => 'TinyMCE',
        'copyright' => 'Copyright (c) 2022 Ephox Corporation DBA Tiny Technologies, Inc.',
        'license' => 'Licensed under the MIT License',
        'license_url' => 'https://github.com/tinymce/tinymce/blob/develop/LICENSE.TXT',
    ],
    [
        'item' => 'Tom Select',
        'copyright' => '   Copyright 2013–2015 Brian Reavis',
        'license' => 'licensed under the Apache License 2.0',
        'license_url' => 'https://github.com/orchidjs/tom-select/blob/master/LICENSE',
    ],
];

 usort($licenses, function($a, $b) {return strcmp($a['item'], $b['item']);});

?>
<div class="card mb-3">
    <div class="card-header">
        <h3 class="card-title">
            <?= Html::encode($this->title) ?>
        </h3>
    </div>
    <div class="card-body">
        <?php foreach ($licenses as $i => $license): ?>
            <?php if ($i !== 0): ?>
                <div class="hr-text"></div>
            <?php endif; ?>
            <h3><?= $license['item'] ?></h3>
            <p>
                <?= $license['copyright'] ?><br>
                <?= $license['license'] ?><br>
                <a href="<?= $license['license_url'] ?>" target="_blank"><?= $license['license_url'] ?></a>
            </p>
        <?php endforeach; ?>
    </div>
</div>