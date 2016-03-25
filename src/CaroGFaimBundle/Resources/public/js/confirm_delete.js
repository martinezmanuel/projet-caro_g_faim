/**
 * Created by rod on 23/03/16.
 */
jQuery(function($) {
    $("form[action$='delete'] button").each(function() {
        $(this).click(function(){return confirm("Confirmer la suppression ?");});
    });
});
