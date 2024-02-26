/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @description JavaScript Form Builder for Easy Forms
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2021 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

define([
    "jquery", "underscore", "backbone", "simplebar",
    "views/component",
    "helper/pubsub"
], function (
    $, _, Backbone, SimpleBar,
    ComponentView,
    PubSub
    ) {
    return ComponentView.extend({
        events:{
            "click"   : "preventPropagation" // stops checkbox / radio reacting.
            , "mousedown" : "mouseDownHandler"
            , "mouseup"   : "mouseUpHandler"
        }

        , mouseDownHandler : function (mouseDownEvent) {
            mouseDownEvent.stopPropagation();
            mouseDownEvent.preventDefault();
            var that = this;

            // Close any popover
            $(".popover").remove();

            that.$el.popover({
                trigger: 'manual',
                placement: function () {
                    if (window.screen.width <= 480 || window.GridColumns === 8 || window.GridColumns === 12) {
                        return 'bottom';
                    }
                    return 'right';
                },
                html: true,
                sanitize: false,
                content: function () {
                    return that.getPopoverContent();
                }
            });

            that.$el.popover("show");

            // Add scope to improve performance
            var $popover = $(".popover");

            $popover.find("#save").on("click", that.saveHandler(that));
            $popover.find("#copy").on("click", that.copyHandler(that));
            $popover.find("#delete").on("click", that.deleteHandler(that));
            $popover.find("#cancel").on("click", that.cancelHandler(that));
            $popover.find("#copy-id").on("click", that.copyIdHandler(that));

            // Add Scrollbar
            new SimpleBar($popover.find(".popover-content-settings")[0]);

            // Choice settings
            var $choices = $popover.find("[data-type='choice']");

            if ($choices.length) {

                $choices.each(function (i, choice) {
                    var $choice = $(choice);
                    var bulkChoicesCache = [];
                    var answerPlaceholder = polyglot.t('popover.choice');

                    $choice.on("click", ".bulk-editor", function (e) {
                        e.preventDefault();
                        var $scope = $(e.currentTarget).closest('.form-group');
                        var scopeID = $scope.attr('id');
                        $scope.find(".bulk-cancel").show();
                        $scope.find(".bulk-choices").show();
                        $scope.find(".show-options").hide();
                        $scope.find(".choices").hide();
                        $(this).hide();
                        bulkChoicesCache[scopeID] = $scope.find(".bulk-choices").val();
                    });

                    $choice.on("click", ".bulk-cancel", function (e) {
                        e.preventDefault();
                        var $scope = $(e.currentTarget).closest('.form-group');
                        var scopeID = $scope.attr('id');
                        $scope.find(".bulk-editor").show();
                        $scope.find(".show-options").show();
                        $scope.find(".choices").show();
                        $scope.find(".bulk-choices").hide();
                        $(this).hide();
                        if (!_.isUndefined(bulkChoicesCache[scopeID])) {
                            $scope.find(".bulk-choices").val(bulkChoicesCache[scopeID]);
                        }
                    });

                    $choice.on("click", ".add-choice", function (e) {
                        e.preventDefault();
                        var aColumns = "col-8";
                        var vDisplay = "display: none";
                        var iDisplay = "display: none";
                        if ($choice.find(".show-values").is(":checked")) {
                            aColumns = "col-4";
                            vDisplay = "display: inline-block";
                        }
                        if ($choice.find(".show-images").is(":checked")) {
                            iDisplay = "display: inline-block";
                        }
                        $(e.currentTarget)
                            .closest('.choice')
                            .after(
                                '<div class="row g-0 choice">' +
                                ' <div class="col-1">' +
                                '   <div class="form-check">' +
                                '     <input type="checkbox"{{ if (selected) { }} checked{{ } }} name="selected[]" class="form-check-input selected-choice" />' +
                                '   </div>' +
                                ' </div>' +
                                ' <div class="' + aColumns + ' no-padding choice-answer">' +
                                '   <input type="text" class="form-control form-control-sm" placeholder="' + answerPlaceholder + '" value="" name="answer[]">' +
                                ' </div>' +
                                ' <div class="col-4 no-padding-right choice-value" style="'+ vDisplay +'">' +
                                '   <input type="text" class="form-control form-control-sm" placeholder="Value" value="" name="value[]">' +
                                ' </div>' +
                                ' <div class="col-2 no-padding">' +
                                '   <div class="actions">' +
                                '     <span class="fas fa-plus-circle add-choice"></span>' +
                                '     <span class="fas fa-minus-circle text-danger remove-choice"></span>' +
                                '   </div>' +
                                ' </div> ' +
                                ' <div class="col-8 offset-1 choice-image" style="'+ iDisplay +'">' +
                                '   <input type="text" class="form-control form-control-sm" placeholder="'+ polyglot.t('popover.image') +'" name="image[]" />' +
                                ' </div>' +
                                '</div>');
                        $choice.trigger("added-choice");
                    });

                    $choice.on("click", ".remove-choice", function (e) {
                        e.preventDefault();
                        $(e.currentTarget).closest('.row').remove();
                    });

                    $choice.on("click", ".show-values", function (e) {
                        var $scope = $(e.currentTarget).closest('.form-group');
                        if ($(this).is(":checked")) {
                            $scope.find(".choice-answer")
                                .removeClass()
                                .addClass("col-4 no-padding choice-answer");
                            $scope.find(".choice-value")
                                .show();
                        } else {
                            $scope.find(".choice-answer")
                                .removeClass()
                                .addClass("col-8 no-padding choice-answer");
                            $scope.find(".choice-value")
                                .hide();
                        }
                    });

                    $choice.on("click", ".show-images", function (e) {
                        var $scope = $(e.currentTarget).closest('.form-group');
                        if ($(this).is(":checked")) {
                            // Show images
                            $scope.find(".choice-image")
                                .show();
                        } else {
                            $scope.find(".choice-image")
                                .hide();
                        }
                    });

                    // Special configuration for Custom Attributes
                    if (['customAttributes'].includes($choice.attr('id'))) {
                        answerPlaceholder = polyglot.t('popover.attribute');
                        $choice.find("input[name='answer[]']").attr('placeholder', answerPlaceholder)
                        $choice.on("added-choice", function (e) {
                            $choice.find(".checkbox").hide();
                        });
                        $choice.find(".show-values").click();
                        $choice.find(".for-show-values").hide();
                        $choice.find(".for-show-images").hide();
                        $choice.find(".checkbox").hide();
                    }

                    // Special configuration for Options (Select List), Radios (Radio Button),
                    // Questions (Matrix) and Answers (Matrix)
                    if (['options', 'radios', 'questions', 'answers'].includes($choice.attr('id'))) {

                        if (!$popover.find("#multiple").is(":checked")) {
                            $choice.on("click", '.selected-choice', function () {
                                $choice.find('.selected-choice').not(this).prop('checked', false);
                            });
                        }

                        if (['options', 'questions', 'answers'].includes($choice.attr('id'))) {

                            $choice.find(".for-show-images").hide();

                            if (['options'].includes($choice.attr('id'))) {
                                $popover.find("#multiple").on("change", function (e) {
                                    e.preventDefault();
                                    $choice.find('.selected-choice').prop('checked', false);
                                    if (!$(e.currentTarget).is(":checked")) {
                                        $choice.on("click", '.selected-choice', function () {
                                            $choice.find('.selected-choice').not(this).prop('checked', false);
                                        });
                                    } else {
                                        $choice.off("click", '.selected-choice');
                                    }
                                });
                            }

                            if (['questions', 'answers'].includes($choice.attr('id'))) { // Matrix
                                var toggle = function(inputType) {
                                    inputType = inputType || $popover.find("#inputType").val();
                                    // All
                                    $popover.find("#questions .for-show-values").hide();
                                    $popover.find("#questions .checkbox").hide();
                                    // Radio and Checkbox options
                                    if (_.contains(["radio", "checkbox"], inputType)) {
                                        $popover.find("#answers .checkbox").show();
                                    } else {
                                        $popover.find("#answers .checkbox").hide();
                                    }
                                    // Number & Date options
                                    if (_.contains(["number", "range", "date",
                                        "datetime-local", "time", "month", "week"], inputType)) {
                                        $popover.find("#min, #max, #step").closest(".form-group").show();
                                    } else {
                                        $popover.find("#min, #max, #step").closest(".form-group").hide();
                                    }
                                    // Text, Email & Text Area options
                                    if (_.contains(["text", "url",
                                        "tel", "password", "email", "textarea"], inputType)) {
                                        $popover.find("#minlength, #maxlength").closest(".form-group").show();
                                    } else {
                                        $popover.find("#minlength, #maxlength").closest(".form-group").hide();
                                    }
                                    // Text, Email & Numbers options
                                    if (_.contains(["text", "url",
                                        "tel", "password", "email", "number", "range"], inputType)) {
                                        $popover.find("#pattern").closest(".form-group").show();
                                    } else {
                                        $popover.find("#pattern").closest(".form-group").hide();
                                    }
                                    // Select List options
                                    if (_.contains(["select"], inputType)) {
                                        $popover.find("#multiple").closest(".checkbox").show();
                                    } else {
                                        $popover.find("#multiple").closest(".checkbox").hide();
                                    }
                                }
                                var $inputType = $popover.find("#inputType");
                                // When popover is shown
                                toggle($inputType.val());
                                // When input type changes
                                $inputType.change(function (e) {
                                    toggle($(this).val());
                                });
                                // When a new choice is added
                                $choice.on("added-choice", function (e) {
                                    toggle();
                                });
                            }
                        }
                    }
                });
            }

            // Add drag event for all
            $("body").on("mousemove", function (mouseMoveEvent) {
                if ( Math.abs(mouseDownEvent.pageX - mouseMoveEvent.pageX) > 10 ||
                    Math.abs(mouseDownEvent.pageY - mouseMoveEvent.pageY) > 10 )
                {
                    that.$el.popover('destroy');
                    $(".popover").remove();
                    PubSub.trigger("myComponentDrag", mouseDownEvent, that.model);
                    that.mouseUpHandler();
                }
            });
        }

        , preventPropagation: function (e) {
            e.stopPropagation();
            e.preventDefault();
        }

        , mouseUpHandler : function (mouseUpEvent) {
            // Add Wysiwyg editor
            var config = {
                selector: '#snippet',
                // base_url: options.libUrl + 'tinymce',
                suffix: '.min',
                plugins: 'advlist autolink link image lists charmap hr anchor ' +
                    'searchreplace visualblocks visualchars code fullscreen insertdatetime nonbreaking ' +
                    'save table directionality paste',
                toolbar: 'fullscreen code | undo redo | styleselect | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | ltr rtl | bullist numlist outdent indent | hr link image table',
                convert_urls: false,
                table_default_attributes: {
                    class: 'table'
                },
                table_class_list: [
                    {title: 'None', value: ''},
                    {title: 'Table', value: 'table'},
                    {title: 'Condensed', value: 'table table-condensed'},
                    {title: 'Striped', value: 'table table-striped'},
                    {title: 'Bordered', value: 'table table-bordered'},
                    {title: 'Hover', value: 'table table-hover'},
                    {title: 'Striped & Hover', value: 'table table-stripped table-hover'},
                    {title: 'Bordered & Hover', value: 'table table-bordered table-hover'},
                    {title: 'Bordered, Stripped & Hover', value: 'table table-bordered table-hover'}
                ],
                setup: function (editor) {
                    editor.on('FullscreenStateChanged', function (e) {
                        $(editor.editorContainer).find(".tox-toolbar").toggleClass("tox-toolbar-fullscreen")
                    });
                }
            };

            // Removes editor
            if (tinyMCE.get(0)) {
                tinyMCE.remove();
            }

            if ($('body').attr('data-bs-theme') === 'dark') {
                config.skin = 'oxide-dark';
                config.content_css = 'dark';
            }

            // Add editor
            tinyMCE.init(config)
                .then(function (editors) {});

            $("body").off("mousemove");
        }

        , saveHandler : function (boundContext) {
            return function (mouseEvent) {
                mouseEvent.preventDefault();
                // Save editor's content
                if (window.tinyMCE.get(0)) {
                    window.tinyMCE.triggerSave();
                }
                var fields = $(".popover .field");
                _.each(fields, function (e) {

                    var $e = $(e)
                        , type = $e.attr("data-type")
                        , name = $e.attr("id");

                    switch(type) {
                        case "checkbox":
                            boundContext.model.setField(name, $e.is(":checked"));
                            break;
                        case "input":
                            boundContext.model.setField(name, $e.val());
                            break;
                        case "number":
                            boundContext.model.setField(name, $e.val());
                            break;
                        case "textarea":
                            boundContext.model.setField(name, $e.val());
                            break;
                        case "textarea-split":
                            boundContext.model.setField(name,
                                _.chain($e.val().split("\n"))
                                    .map(function (t) {return $.trim(t)})
                                    .filter(function (t) {return t.length > 0})
                                    .value()
                            );
                            break;
                        case "select":
                            var valarr = _.map($e.find("option"), function (e) {
                                return {value: e.value, selected: e.selected, label:$(e).text()};
                            });
                            boundContext.model.setField(name, valarr);
                            break;
                        case "choice":
                            var oldChoices = boundContext.model.getField(name);
                            var bulkChoices = _.chain($e.find(".bulk-choices").val().split("\n"))
                                .map(function (t) {return $.trim(t)})
                                .filter(function (t) {return t.length > 0})
                                .value();
                            if (bulkChoices.length && !_.isEqual(oldChoices, bulkChoices)) {
                                boundContext.model.setField(name, bulkChoices);
                            } else {
                                boundContext.model.setField(name, $e.find(".choice")
                                    .map(function () {
                                        var answer = $(this).find("input[name='answer[]']").val();
                                        var value = $(this).find("input[name='value[]']").val();
                                        var image = $(this).find("input[name='image[]']").val();
                                        var selected = $(this).find("input[name='selected[]']").is(':checked') ? 'selected' : null;
                                        if (image.length > 0 && value.length < 1) {
                                            value = answer;
                                        }
                                        return [answer, value, image, selected]
                                            .map(function (t) {return $.trim(t)})
                                            .filter(function (t) {return t.length > 0})
                                            .join('|');
                                    })
                                    .get());
                            }
                            break;
                    }
                });
                boundContext.model.trigger("change");
                boundContext.$el.popover("destroy");
                $(".popover").remove();
            }
        }

        , copyHandler : function (boundContext) {
            return function (mouseEvent) {
                mouseEvent.preventDefault();
                // Copy model
                var originalModel = boundContext.model;
                var copiedModel = originalModel.clone();
                copiedModel.attributes = $.extend(true, {}, copiedModel.attributes);
                copiedModel.set('fresh', true);
                originalModel.trigger("change");
                PubSub.trigger("myComponentCopy", copiedModel, originalModel);
                boundContext.$el.popover("destroy");
                $(".popover").remove();

            };
        }

        // Delete Model and Hide Popover
        , deleteHandler : function (boundContext) {
            return function (mouseEvent) {
                mouseEvent.preventDefault();
                if (confirm(polyglot.t('alert.confirmToDeleteField'))) {
                    boundContext.$el.popover("destroy");
                    $(".popover").remove();
                    PubSub.trigger("myComponentDelete", boundContext.model);
                }
            };
        }

        // Hide Popover
        , cancelHandler : function (boundContext) {
            return function (mouseEvent) {
                mouseEvent.preventDefault();
                boundContext.$el.popover("destroy");
                $(".popover").remove();
            };
        }

        // Copy ID
        , copyIdHandler : function (boundContext) {
            return function (mouseEvent) {
                mouseEvent.preventDefault();
                if (navigator && navigator.clipboard) {
                    navigator.clipboard.writeText(boundContext.model.getField("id"));
                } else {
                    var copyTextarea = document.createElement("textarea");
                    document.body.appendChild(copyTextarea);
                    copyTextarea.value = boundContext.model.getField("id");
                    copyTextarea.select();
                    document.execCommand("copy");
                    document.body.removeChild(copyTextarea);
                }
            };
        }

    });
});