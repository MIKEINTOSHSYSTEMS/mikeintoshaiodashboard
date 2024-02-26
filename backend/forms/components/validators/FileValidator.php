<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.11
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\components\validators;

use app\helpers\FileHelper;
use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\StringHelper;
use yii\validators\FileValidator as BaseFileValidator;
use yii\web\UploadedFile;

/**
 * Class FileValidator
 * @package app\components\validators
 */
class FileValidator extends BaseFileValidator
{
    use ValidatorTrait;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        if ($this->message === null) {
            $this->message = Yii::t('app', 'File upload failed.');
        }
        if ($this->uploadRequired === null) {
            $this->uploadRequired = Yii::t('app', 'Please upload a file.');
        }
        if ($this->tooMany === null) {
            $this->tooMany = Yii::t('app', 'You can upload at most {limit, number} {limit, plural, one{file} other{files}}.');
        }
        if ($this->tooFew === null) {
            $this->tooFew = Yii::t('app', 'You should upload at least {limit, number} {limit, plural, one{file} other{files}}.');
        }
        if ($this->wrongExtension === null) {
            $this->wrongExtension = Yii::t('app', 'Only files with these extensions are allowed: {extensions}.');
        }
        if ($this->tooBig === null) {
            $this->tooBig = Yii::t('app', 'The file "{file}" is too big. Its size cannot exceed {formattedLimit}.');
        }
        if ($this->tooSmall === null) {
            $this->tooSmall = Yii::t('app', 'The file "{file}" is too small. Its size cannot be smaller than {formattedLimit}.');
        }
        if (!is_array($this->extensions)) {
            $this->extensions = preg_split('/[\s,]+/', strtolower($this->extensions ?? ''), -1, PREG_SPLIT_NO_EMPTY);
        } else {
            $this->extensions = array_map('strtolower', $this->extensions);
        }
        if ($this->wrongMimeType === null) {
            $this->wrongMimeType = Yii::t('app', 'Only files with these MIME types are allowed: {mimeTypes}.');
        }
        if (!is_array($this->mimeTypes)) {
            $this->mimeTypes = preg_split('/[\s,]+/', strtolower($this->mimeTypes ?? ''), -1, PREG_SPLIT_NO_EMPTY);
        } else {
            $this->mimeTypes = array_map('strtolower', $this->mimeTypes);
        }

        parent::init();
    }

    /**
     * {@inheritdoc}
     */
    protected function validateValue($value)
    {

        if ($this->maxFiles != 1 || $this->minFiles > 1) {

            if (!is_array($value)) {
                return [$this->uploadRequired, []];
            }

            if (empty($value)) {
                return [$this->uploadRequired, []];
            }

            $filesCount = count($value);
            if ($this->maxFiles && $filesCount > $this->maxFiles) {
                return [
                    $this->tooMany,
                    ['limit' => $this->maxFiles],
                ];
            }

            if ($this->minFiles && $this->minFiles > $filesCount) {
                return [
                    $this->tooFew,
                    ['limit' => $this->minFiles],
                ];
            }

        }

        foreach ($value as $val) {

            if (!$val instanceof UploadedFile || $val->error == UPLOAD_ERR_NO_FILE) {
                return [$this->uploadRequired, []];
            }

            switch ($val->error) {
                case UPLOAD_ERR_OK:
                    if ($this->maxSize !== null && $val->size > $this->getSizeLimit()) {
                        return [
                            $this->tooBig,
                            [
                                'file' => $val->name,
                                'limit' => $this->getSizeLimit(),
                                'formattedLimit' => Yii::$app->formatter->asShortSize($this->getSizeLimit()),
                            ],
                        ];
                    } elseif ($this->minSize !== null && $val->size < $this->minSize) {
                        return [
                            $this->tooSmall,
                            [
                                'file' => $val->name,
                                'limit' => $this->minSize,
                                'formattedLimit' => Yii::$app->formatter->asShortSize($this->minSize),
                            ],
                        ];
                    } elseif (!empty($this->extensions) && !$this->validateExtension($val)) {
                        return [$this->wrongExtension, ['file' => $val->name, 'extensions' => implode(', ', $this->extensions)]];
                    } elseif (!empty($this->mimeTypes) && !$this->validateMimeType($val)) {
                        return [$this->wrongMimeType, ['file' => $val->name, 'mimeTypes' => implode(', ', $this->mimeTypes)]];
                    }

                    return null;
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    return [$this->tooBig, [
                        'file' => $val->name,
                        'limit' => $this->getSizeLimit(),
                        'formattedLimit' => Yii::$app->formatter->asShortSize($this->getSizeLimit()),
                    ]];
                case UPLOAD_ERR_PARTIAL:
                    Yii::warning('File was only partially uploaded: ' . $val->name, __METHOD__);
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    Yii::warning('Missing the temporary folder to store the uploaded file: ' . $val->name, __METHOD__);
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    Yii::warning('Failed to write the uploaded file to disk: ' . $val->name, __METHOD__);
                    break;
                case UPLOAD_ERR_EXTENSION:
                    Yii::warning('File upload was stopped by some PHP extension: ' . $val->name, __METHOD__);
                    break;
                default:
                    break;
            }

        }

        return [$this->message, []];
    }

    /**
     * Checks if given uploaded file have correct type (extension) according current validator settings.
     * @param UploadedFile $file
     * @return bool
     * @throws InvalidConfigException
     */
    protected function validateExtension($file)
    {
        $extension = mb_strtolower($file->extension, 'UTF-8');
        if ($this->checkExtensionByMimeType) {
            $mimeType = FileHelper::getMimeType($file->tempName, null, false);
            if ($mimeType === null) {
                return false;
            }
            $extensionsByMimeType = FileHelper::getExtensionsByMimeType($mimeType);
            if (!in_array($extension, $extensionsByMimeType, true)) {
                return false;
            }
        }
        if (!empty($this->extensions)) {
            foreach ((array) $this->extensions as $ext) {
                if ($extension === $ext || StringHelper::endsWith($file->name, ".$ext", false)) {
                    return true;
                }
            }
            return false;
        }
        return true;
    }
}