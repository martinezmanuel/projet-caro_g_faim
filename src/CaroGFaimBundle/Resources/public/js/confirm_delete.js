/**
 * Created by rod on 23/03/16.
 */
jQuery(function($) {


    $("form[action$='delete'] button").each(function() {
        $(this).click(function(){return confirm("Confirmer la suppression ?");});
    });

    /*-----------------------------------------------------------------
        submit a form from an index page (modif and delete button)
     -----------------------------------------------------------------*/
    var submitForm = function(confirmMsg, formaction)
    {
        $('.form_list').attr("action", formaction);

        if (confirmMsg) {
            $('input[name=_method]').attr('value','DELETE');
            return confirm("Confirmer la suppression ?");
        }
        else {
            $('input[name=_method]').attr('value','POST');
            $('.form_list').submit();
        }
        return true;
    }

    /*------------------------------------------------------------------
        on click on the ".delete" class button, submit the form
        with a confirmation message
     --------------------------------------------------------------------*/
    $(".delete").each(function() {
        $(this).click(function(){
            return submitForm("Confirmer la suppression ?", $(this).attr("formaction"));
        });
    });


    /*------------------------------------------------------------------
     on click on the ".modif" class button, submit the form.
     --------------------------------------------------------------------*/
    $(".modif").each(function() {
        $(this).click(function(){
            return submitForm("", $(this).attr("formaction"));
        });
    });
});
