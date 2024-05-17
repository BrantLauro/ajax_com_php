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
        console.log(result);
    });
});