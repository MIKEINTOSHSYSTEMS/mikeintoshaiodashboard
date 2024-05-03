var fileUploadErrors = {
    maxFileSize: 'File is too big',
    minFileSize: 'File is too small',
    acceptFileTypes: 'Filetype not allowed',
    maxNumberOfFiles: 'Max number of files exceeded',
    uploadedBytes: 'Uploaded bytes exceed file size',
    emptyResult: 'Empty file upload result'
};

$.widget('blueimpUIX.fileupload', $.blueimpUI.fileupload, {

    _renderTemplate: function (func, files) {
        return func({
            files: files,
            formatFileSize: this._formatFileSize,
            options: this.options
        });
    },

    _initTemplates: function () {
        this.options.uploadTemplate = function (o) {
            var rows = $();
            $.each(o.files, function (index, file) {
                var row = $('<tr class="template-upload fade">' +
                    '<td class="name"></td>' +
                    '<td class="size"></td>' +
                    (file.error ? '<td class="error" colspan="2"><span class="label important">Error</span></td>' :
                            '<td class="progress"><div class="progressbar"><div style="width:0%;"></div></div></td>' +
                                '<td class="start"><button class="btn primary">Start</button></td>'
                    ) + '<td class="cancel"><button class="btn info">Cancel</button></td></tr>');
                row.find('.name').text(file.name);
                row.find('.size').text(o.formatFileSize(file.size));
                if (file.error) {
                    row.addClass('ui-state-error');
                    row.find('.error').text(
                        fileUploadErrors[file.error] || file.error
                    );
                }
                rows = rows.add(row);
            });
            return rows;
        };
        this.options.downloadTemplate = function (o) {
            var rows = $();
            $.each(o.files, function (index, file) {
                var row = $('<tr class="template-download fade in">' +
                    (file.error ? '<td class="name"></td>' +
                        '<td class="size"></td><td class="error" colspan="2"><span class="label important">Error</span></td>' :
                            	'<td class="name"><a></a></td>' +
								'<td class="sysname"></td>' +
                                '<td class="size"></td><td colspan="2"></td>'
                    ) + '<td class="delete"><button class="btn danger">Delete</button>' +
                        '<span class="survey_checkbox"><input  type="checkbox" name="delete" class="delete" value="1"></span></td></tr>');
                row.find('.size').text(o.formatFileSize(file.size));
                if (file.error) {
                    row.find('.name').text(file.name);
                    row.addClass('ui-state-error');
                    row.find('.error').text(
                        fileUploadErrors[file.error] || file.error
                    );
                } else {
					row.find('.sysname').html('<input type=hidden id=question[] name=question[] value="'+file.origname+'">'+
											  '<input type=hidden id=question_origname[] name=question_origname[] value="'+file.name+'">');
                    row.find('.name a').text(file.name);
                    /*if (file.thumbnail_url) {
                        row.find('.preview').append('<a><img></a>')
                            .find('img').prop('src', file.thumbnail_url);
                        row.find('a').prop('rel', 'gallery');
                    }*/
                    row.find('a').prop('href', file.url);
                    row.find('.delete button')
                        .attr('data-type', file.delete_type)
                        .attr('data-url', file.delete_url);
                }
                rows = rows.add(row);
            });
            return rows;
        };
    }

});