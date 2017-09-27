/**
 * Created by mark on 25.09.17.
 */
$(document).ready(function () {

    $('[id="RecordForm"]').on('beforeSubmit',function () {

        var data= $(this).serialize();

        $('.modal').hide();
        $('body').removeClass('modal-open');
        $('div.modal').removeClass('in');
        $('.modal-backdrop').remove();

        $.ajax({
            url:'/course-polish/index',
            type: 'POST',
            data: data,

            success: function (res) {
                if(res == true) {
                    $('.record-success').fadeToggle(1000);
                    $('.record-success').fadeOut(10000);
                }
                else{
                    $('.record-danger').fadeToggle(1000);
                    $('.record-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    })

    $('[id="AskQuestionForm"]').on('beforeSubmit',function () {

        var data= $(this).serialize();

        $('.modal').hide();
        $('body').removeClass('modal-open');
        $('div.modal').removeClass('in');
        $('.modal-backdrop').remove();

        $.ajax({
            url:'/course-polish/ask-question',
            type: 'POST',
            data: data,

            success: function (res) {
                if(res == true) {
                    var alertSuccess = $('.alert-success');
                    $('.ask-success').fadeToggle(1000);
                    $('.ask-success').fadeOut(10000);
                }
                else{
                    $('.ask-danger').fadeToggle(1000);
                    $('.ask-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    })

})