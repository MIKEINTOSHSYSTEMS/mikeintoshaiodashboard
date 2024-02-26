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
    "jquery", "underscore", "backbone"
    , "text!templates/app/recaptcha.html"
    , "text!templates/popover/popover-main.html"
    , "text!templates/popover/popover-input.html"
    , "text!templates/popover/popover-number.html"
    , "text!templates/popover/popover-select.html"
    , "text!templates/popover/popover-textarea.html"
    , "text!templates/popover/popover-textarea-split.html"
    , "text!templates/popover/popover-checkbox.html"
    , "text!templates/popover/popover-choice.html"
    , "templates/component/templates"
    , "bootstrap"
], function(
    $, _, Backbone
    , _reCAPTCHA
    , _PopoverMain
    , _PopoverInput
    , _PopoverNumber
    , _PopoverSelect
    , _PopoverTextArea
    , _PopoverTextAreaSplit
    , _PopoverCheckbox
    , _PopoverChoice
    , _componentTemplates
    ){
    return Backbone.View.extend({
        tagName: "div"
        , className: "component"
        , initialize: function(){
            this.template = _.template(_componentTemplates[this.model.get("name")]);
            this.recaptchaTemplate = _.template(_reCAPTCHA);
            this.popoverTemplates = {
                "input" : _.template(_PopoverInput)
                , "number" : _.template(_PopoverNumber)
                , "select" : _.template(_PopoverSelect)
                , "textarea" : _.template(_PopoverTextArea)
                , "textarea-split" : _.template(_PopoverTextAreaSplit)
                , "checkbox" : _.template(_PopoverCheckbox)
                , "choice" : _.template(_PopoverChoice)
            };
            this.htmlCode = '';
        }
        , close: function () {
            this.undelegateEvents();
            this.$el.removeData().unbind();
            this.remove();
        }
        , render: function(withAttributes, formSettings) {
            var that = this;

            var fieldValues = this.model.getValues();
            var containerClass = "";
            var componentClass = "";

            // Used to pass container CSS Class to parent component
            if (!_.isUndefined(fieldValues["containerClass"])) {
                containerClass = that.model.getField("containerClass");
                if (formSettings.layoutSelected === 'form-inline') {
                    // Remove column classes in form-inline
                    fieldValues["containerClass"] = containerClass.split(/\s+/).map(function(entry) {
                        return entry.replace(/col(-xs|-sm|-md|-lg|-xl|-xll)?(-12|-11|-10|-9|-8|-7|-6|-5|-4|-3|-2|-1)?/g,"");
                    }).join(" ");
                } else {
                    // If col-* class not exists, add default column class
                    var matches = containerClass.match(/col(-12|-11|-10|-[1-9])?/g);
                    if (_.isNull(matches)) {
                        containerClass = "col-12";
                    }
                    // Update container css class
                    if (withAttributes) { // For canvas
                        // Copy all column classes from container to component
                        matches = containerClass.match(/col(-xs|-sm|-md|-lg|-xl|-xll)?(-12|-11|-10|-[1-9])?/g);
                        if (_.isNull(matches)) {
                            componentClass = 'col-12';
                        } else {
                            _.each(matches, function (match) {
                                // Add column class to component
                                componentClass = componentClass.trim() + ' ' + match;
                                // Remove column class from container
                                containerClass = containerClass.replace(match, '');
                            })
                        }
                        fieldValues["containerClass"] = containerClass.trim();
                    } else { // For source code
                        // Do nothing
                        fieldValues["containerClass"] = containerClass;
                    }
                }
            }

            if (withAttributes) { // For canvas

                var fieldType = that.model.get("name");
                var pMenu  = '';
                if (!['heading', 'paragraph', 'snippet', 'recaptcha', 'pagebreak', 'spacer'].includes(fieldType)) {
                    pMenu  = '<div class="float-end">';
                    pMenu += '  <div class="dropdown">';
                    pMenu += '    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#"><span class="fas fa-ellipsis-v"></span></a>';
                    pMenu += '    <div class="dropdown-menu dropdown-menu-end">';
                    pMenu += '      <a href="#" id="copy-id" class="dropdown-item"><span class="dropdown-item-icon"><span class="far fa-copy"></span></span> ' + polyglot.t("popover.copyID") + '</a>';
                    pMenu += '    </div>';
                    pMenu += '  </div>';
                    pMenu += '</div>';
                }

                this.$el.html(
                        that.template({field: fieldValues, layout: formSettings.layoutSelected})
                    ).attr({
                        "class"             : "component component-" + that.model.get("name") + ' ' + componentClass
                        , "data-title"      : polyglot.t(that.model.get("title")) + pMenu // i18n
                        , "data-name"       : polyglot.t(that.model.get("title")) // i18n
                        , "data-trigger"    : "manual"
                        , "data-placement"  : "right"
                        , "data-container"  : "body"
                        , "data-html"       : true
                    });

            } else { // For source code

                // If it is a reCAPTCHA component return the html required for Google reCAPTCHA
                // See https://developers.google.com/recaptcha/docs/display
                if (that.model.get("name") === "recaptcha") {
                    fieldValues.siteKey = options.reCaptchaSiteKey;
                    this.htmlCode = that.recaptchaTemplate({field: fieldValues, layout: formSettings.layoutSelected});
                    return this;
                }
                // If not, parse the component with the component data
                this.htmlCode = that.template({field: fieldValues, layout: formSettings.layoutSelected});
            }
            return this;
        }
        , getPopoverContent: function () {
            var that = this;
            // Split fields in basic and advanced
            var basicFields = {};
            var advancedFields = {};
            _.each(this.model.get("fields"), function (field, key) {
                if (field.advanced === true) {
                    advancedFields[key] = field;
                } else {
                    basicFields[key] = field;
                }
            });
            // HTML of basic and advanced fields
            var basicFieldsHtml = _.reduce(basicFields, function(str, v, k) {
                v["name"] = k;
                return str + that.popoverTemplates[v["type"]](v);
            }, "");
            var advancedFieldsHtml = _.reduce(advancedFields, function(str, v, k) {
                v["name"] = k;
                return str + that.popoverTemplates[v["type"]](v);
            }, "");
            // Return HTML of Popover
            return  _.template(_PopoverMain)({
                "title": polyglot.t(that.model.get("title")), // i18n
                "id": that.model.getField("id"),
                "type": that.model.getType(),
                "basicFields" : basicFieldsHtml,
                "advancedFields" : advancedFieldsHtml
            });
        }
    });
});