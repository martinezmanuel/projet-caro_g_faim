/**
 * Created by rod on 23/03/16.
 */
jQuery(function($) {
    $("form[method='delete']").each(function() {
        $(this).click(function(){return confirm("Confirmer la suppression ?");});
    });
});
