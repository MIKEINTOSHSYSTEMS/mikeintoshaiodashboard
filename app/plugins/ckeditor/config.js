/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here.
    // For complete reference see:
    // https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html

    // The toolbar groups arrangement, optimized for two toolbar rows.
    /*  config.toolbarGroups = [
          { name: 'clipboard', groups: ['clipboard', 'undo'] },
          { name: 'editing', groups: ['find', 'selection', 'spellchecker'] },
          { name: 'links' },
          { name: 'insert' },
          { name: 'forms' },
          { name: 'tools' },
          { name: 'document', groups: ['mode', 'document', 'doctools'] },
          { name: 'others' },
          '/',
          { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
          { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi'] },
          { name: 'styles' },
          { name: 'colors' },
          { name: 'about' }
      ];*/
    config.toolbar = [{
        name: 'document',
        items: ['Print']
    }, {
        name: 'clipboard',
        items: ['Undo', 'Redo']
    }, {
        name: 'styles',
        items: ['Format', 'Font', 'FontSize']
    }, {
        name: 'basicstyles',
        items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting']
    }, {
        name: 'colors',
        items: ['TextColor', 'BGColor']
    }, {
        name: 'align',
        items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
    }, {
        name: 'links',
        items: ['Link', 'Unlink']
    }, {
        name: 'paragraph',
        items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
    }, {
        name: 'insert',
        items: ['Image', 'Table']
    }, {
        name: 'tools',
        items: ['Maximize']
    }, {
        name: 'editing',
        items: ['Scayt']
    }],
        // Remove some buttons provided by the standard plugins, which are
        // not needed in the Standard(s) toolbar.
        config.removeButtons = 'Underline,Subscript,Superscript';

    // Set the most common block elements.
    config.format_tags = 'p;h1;h2;h3;pre';

    // Simplify the dialog windows.
    config.removeDialogTabs = 'image:advanced;link:advanced';
    config.defaultLanguage = 'en';
    config.language = 'en';

    config.disallowedContent = 'img{width,height,float}';
    config.extraAllowedContent = 'img[width,height,align]';

    // Enabling extra plugins, available in the full-all preset: https://ckeditor.com/cke4/presets-all
    config.extraPlugins = 'uploadimage';

    /*********************** File management support ***********************/
    // In order to turn on support for file uploads, CKEditor has to be configured to use some server side
    // solution with file upload/management capabilities, like for example CKFinder.
    // For more information see https://ckeditor.com/docs/ckeditor4/latest/guide/dev_ckfinder_integration.html

    // Uncomment and correct these lines after you setup your local CKFinder instance.
    // filebrowserBrowseUrl: 'http://example.com/ckfinder/ckfinder.html',
    // filebrowserUploadUrl: 'http://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    /*********************** File management support ***********************/

    // Make the editing area bigger than default.
    config.height = 800;


    config.bodyClass = 'document-editor';
    config.format_tags = 'p;h1;h2;h3;pre';
    config.removeDialogTabs = 'image:advanced;link:advanced';
    config.stylesSet = [
        /* Inline Styles */
        {
            name: 'Marker',
            element: 'span',
            attributes: {
                'class': 'marker'
            }
        }, {
            name: 'Cited Work',
            element: 'cite'
        }, {
            name: 'Inline Quotation',
            element: 'q'
        },

        /* Object Styles */
        {
            name: 'Special Container',
            element: 'div',
            styles: {
                padding: '5px 10px',
                background: '#eee',
                border: '1px solid #ccc'
            }
        }, {
            name: 'Compact table',
            element: 'table',
            attributes: {
                cellpadding: '5',
                cellspacing: '0',
                border: '1',
                bordercolor: '#ccc'
            },
            styles: {
                'border-collapse': 'collapse'
            }
        }, {
            name: 'Borderless Table',
            element: 'table',
            styles: {
                'border-style': 'hidden',
                'background-color': '#E6E6FA'
            }
        }, {
            name: 'Square Bulleted List',
            element: 'ul',
            styles: {
                'list-style-type': 'square'
            }
        }
    ]
};

$.getScript("CKFinderScripts/ckfinder.js", function (data, textStatus, jqxhr) {
    $(".cke").addClass("loaded");
    var p = window.location.pathname.lastIndexOf("/");
    CKFinder.basePath = window.location.pathname.substr(0, window.location.pathname.lastIndexOf("/", p - 1)) + '/CKFinderScripts/';
    for (var instanceName in window.CKEDITOR.instances) {
        CKFinder.setupCKEditor(window.CKEDITOR.instances[instanceName], "CKFinderScripts/");
    }
    CKEDITOR.on("instanceReady", function (event) {
        CKFinder.setupCKEditor(event.editor, "CKFinderScripts/");
        $(".cke").addClass("loaded");
    });
});