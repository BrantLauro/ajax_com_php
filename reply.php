<br>
<form id='formReply' method="POST">
    <input type="hidden" name="comment_id" id="commentId" value="<?= $_GET['comment_id'] ?>"/>
    <label	for="name">Nome</label>
    <input type="text" name="name" id="nameReply" required/>
    <label for="comment">Comentário</label>
    <textarea name="comment" id="commentReply" required></textarea>
    <input type="submit" value="Enviar Comentário"/>
</form>

<script src="assets/js/jQuery/jquery-3.5.1.min.js"></script>
<script src="assets/js/script.js"></script>