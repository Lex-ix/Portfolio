$(document).ready(() => {
    $('.button.edit').click((sender) => {
        var id = $(sender.target).attr('id')
        var name = $(sender.target).parent().parent().find('#title')[0].innerText;
        var content = $(sender.target).parent().parent().find('#content')[0].innerText;

        $('#modalEdit').css('display', 'block');

        $('#editing').text(name);

        $('#modalEdit form #title').val($.trim(name));
        $('#modalEdit form #content').val($.trim(content));
        $('#modalEdit form #id').val($.trim(id));

        $('#modalEdit form').attr('action', '/texts/' + id)
    });

    $('#modalEdit .close').click(() => {
        $('#modalEdit').css('display', 'none');

        $('#editing').text('');

        $('#modalEdit form #title').val('');
        $('#modalEdit form #content').val('');
        $('#modalEdit form #id').val('');

        $('#modalEdit form').attr('action', '#')
    });
});