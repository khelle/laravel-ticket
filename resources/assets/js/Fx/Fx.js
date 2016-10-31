/**
 * @require
 */

/**
 * @constructor
 */
var Fx = module.exports = function() {};

/**
 * @public
 * @returns {Fx}
 */
Fx.prototype.createAjaxForms = function() {

    $(".ajax-form").submit(function(e) {

        var url = $(this).attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: $(this).serialize(),
            success: function(data)
            {
                var $container = $('#alert-container');

                $container
                    .removeClass('alert-danger')
                    .removeClass('alert-success')
                ;

                if (data.success)
                {
                    $container
                        .addClass('alert-success')
                        .html(data.response)
                    ;
                }
                else
                {
                    $container
                        .addClass('alert-danger')
                        .html(data.response)
                    ;
                }
            },
            error: function(xhr)
            {
                var err = 'Operation could not be completed, because: ' + xhr.responseText;
                var $container = $('#alert-container');

                $container
                    .removeClass('alert-danger')
                    .removeClass('alert-success')
                ;

                $container
                    .addClass('alert-danger')
                    .html(err)
                ;
            }
        });

        e.preventDefault();
    });

    return this;
};
