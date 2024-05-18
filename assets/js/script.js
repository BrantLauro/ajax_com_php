$('#form1').submit(function(req) {
    req.preventDefault();

    var u_name = $('#name').val();
    var u_comment = $('#comment').val();

    $.ajax({
        url: 'http://localhost/ajax_com_php/inserir.php',
        method: 'POST',
        data: {name: u_name, comment: u_comment},
        dataType: 'json'
    }).done(function(result){
        $('#name').val("");
        $('#comment').val("");
        $('.box_comment').empty();
        getComments();
    });
});


function getComments() {
    $.ajax({
        url: 'http://localhost/ajax_com_php/selecionar.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(result){
        for(const comment of result) {
            var html = '<div class="b_comm" data-id="' + comment['id'] + '">';
            html += '<h4>'+ comment['name'] +'</h4>';
            html += '<p>'+ comment['comment'] +'</p>';
            html += '<button class="btn" onclick="likeComment('+ comment['id'] +', '+ 1 +', '+ comment['like_val'] +')"><img src="assets/img/like.png" id="img-like-'+ comment['id'] +'"></button>';
            html += '<button class="btn" onclick="likeComment('+ comment['id'] +', '+ 0 +', '+ comment['like_val'] +')"><img src="assets/img/dislike.png" id="img-dislike-'+ comment['id'] +'"></button>';
            html += '<button class="btn" onclick="replyComment('+ comment['id'] +')"><img src="assets/img/reply.png"></button>';
            html += '<button class="btn" onclick="delComment('+ comment['id'] +')"><img src="assets/img/delete.png"></button>';
            html += '</div>';
            $('.box_comment').prepend(html);
            if((comment['like_val'] != null) && (comment['like_val'] == 1)) {
                $('#img-like-'+ comment['id']).attr('src', 'assets/img/like-press.png');
            } else if ((comment['like_val'] != null) && (comment['like_val'] == 0)) {
                $('#img-dislike-'+ comment['id']).attr('src', 'assets/img/dislike-press.png');
            }
        }
    });
}

function delComment(id) {
    $.ajax({
        url: 'http://localhost/ajax_com_php/deletar.php',
        method: 'POST',
        data: {comment_id: id},
        dataType: 'json'
    }).done(function(result){
        $('.b_comm[data-id="' + id + '"]').remove();
    });
}

function likeComment(id, value, likeVal) {
    if (likeVal != null) {
        if(likeVal == value) {
            value = null;
        }
    }
    $.ajax({
        url: 'http://localhost/ajax_com_php/curtir.php',
        method: 'POST',
        data: {comment_id: id, like_value: value},
        dataType: 'json'
    }).done(function(result){
        $('.box_comment').empty();
        getComments();
    });
}

function replyComment(id) {
    $.ajax({
        url: 'http://localhost/ajax_com_php/reply.php',
        method: 'GET',
        data: {comment_id: id},
        dataType: 'html'
    }).done(function(result){
        $('.b_comm[data-id="' + id + '"]').append(result);
    });
}

$('#formReply').submit(function(req) {
    req.preventDefault();

    var u_name = $('#nameReply').val();
    var u_comment = $('#commentReply').val();
    var u_comment_id = $('#commentId').val();
    $.ajax({
        url: 'http://localhost/ajax_com_php/reply-save.php',
        method: 'POST',
        data: {name: u_name, comment: u_comment, comment_id: u_comment_id},
        dataType: 'json'
    }).done(function(result){
        $('.form-reply').empty();
        getComments();
    });
});