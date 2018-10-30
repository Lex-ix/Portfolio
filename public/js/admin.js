$(document).ready(() => {
    $('.button.edit').click((sender) => {
        var id = $(sender.target).attr('id')
        var name = $(sender.target).parent().parent().find('#title')[0].innerText;
        var content = $(sender.target).parent().parent().find('#content')[0].innerText;

        $('.modal#edit').css('display', 'block');

        $('#editing').text(name);

        $('.modal#edit form #title').val($.trim(name));
        $('.modal#edit form #content').val($.trim(content));
        $('.modal#edit form #id').val($.trim(id));

        $('.modal#edit form').attr('action', '/texts/' + id)
    });

    $('.modal#edit .close').click(() => {
        $('.modal#edit').css('display', 'none');

        $('#editing').text('');

        $('.modal#edit form #title').val('');
        $('.modal#edit form #content').val('');
        $('.modal#edit form #id').val('');

        $('.modal#edit form').attr('action', '#')
    });

    $('.button.remove').click((sender) => {
        var id = $(sender.target).attr('id');
        var name = $(sender.target).parent().parent().find('#title')[0].innerText;

        $('.modal#remove').css('display', 'block');

        $('.modal#remove .removing').each(function() {
            $(this).text(name);
        });

        $('.modal#remove form #id').val($.trim(id));

        $('.modal#remove form').attr('action', '/texts/' + id);
    });

    $('.modal#remove .close').click(() => {
        $('.modal#remove').css('display', 'none');

        $('.modal#remove .removing').each(function() {
            $(this).text(name);
        });

        $('.modal#remove form #id').val('');

        $('.modal#remove form').attr('action', '#');
    });

    $('.button.add').click(() => {
        $('.modal#add').css('display', 'block');

        $('.modal#add form').attr('action', '/texts')
    });
    
    $('.modal#add .close').click(() => {
        $('.modal#add').css('display', 'none');

        $('.modal#edit form').attr('action', '#')
    });
});