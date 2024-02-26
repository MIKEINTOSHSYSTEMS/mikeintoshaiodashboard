<?php

namespace app\components\services;

use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Da\TwoFA\Service\QrCodeDataUriGeneratorService as BaseQrCodeDataUriGeneratorService;

class QrCodeDataUriGeneratorService extends BaseQrCodeDataUriGeneratorService
{
    /**
     * @var string a totp secret key uri generated string.
     */
    private $totpSecretKeyUri;
    /**
     * @var int the size of the qr code. Recommended size is 200 for readability.
     */
    private $size;

    /**
     * QrCodeDataUriGeneratorService constructor.
     *
     * @param string $totpSecreteKeyUri
     * @param int    $size
     */
    public function __construct($totpSecreteKeyUri, $size = 200)
    {
        $this->totpSecretKeyUri = $totpSecreteKeyUri;
        $this->size = $size;
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $renderer = new ImageRenderer(
            new RendererStyle($this->size),
            new SvgImageBackEnd()
        );
        $writer = new Writer($renderer);
        $fileString = $writer->writeString($this->totpSecretKeyUri);
        return 'data:image/svg+xml' . ';base64,' . base64_encode($fileString);
    }
}
