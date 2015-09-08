$(document).ready(function(){
    var getDownloadButton = function(job){
        if (job.status != 2) {
            return '\
                <button type="button" class="btn btn-default" disabled="disabled">\
                    <span class="glyphicon glyphicon-download"></span>\
                </button>\
            ';
        } else {
            return '\
                <a href="download/' + job.id + '" type="button" class="btn btn-default">\
                    <span class="glyphicon glyphicon-download"></span>\
                </a>\
            ';
        }
    };
    var interval = setInterval(function() {
        $.ajax({
            type: "GET",
            url: "get-jobs/",
            dataType: 'json',
            success: function(jobs){
                if (jobs.length) {
                    $('.jobs').empty();
                    $(jobs).each(function() {
                        $('.jobs').prepend('\
                        <tr class="' + (this.id == $('.jobs').data('status-id') ? 'info' : '') + '">\
                            <td>' + this.id + '</td>\
                            <td>' + this.path + '</td>\
                            <td>' + this.mime + '</td>\
                            <td>' + this.lastUpdate + '</td>\
                            <td class="status-' + this.status + '">' + this.statusMessage + '</td>\
                            <td>\
                                <div class="btn-group btn-group-xs pull-right">\
                                    ' + getDownloadButton(this) + '\
                                </div>\
                            </td>\
                        </tr>'
                        );
                    });
                }
            }
        });
    }, 2000);
});