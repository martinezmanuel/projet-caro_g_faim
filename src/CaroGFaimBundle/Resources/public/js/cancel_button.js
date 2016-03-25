/**
 * Created by rod on 25/03/16.
 */
jQuery(function($) {
    $("input[type=button]").click(function(){
        $form = $("form[method=post]");
        $form.attr("method", "GET");
        $form.attr("action", $(this).attr("back_href"));
        $form.submit();
    });
});
