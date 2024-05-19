<br>
<div class="formReplyDiv">
    <form id='formReply' method="POST">
        <input type="hidden" name="comment_id" id="commentId" value="<?= $_GET['comment_id'] ?>"/>
        <div class="input">
            <label for="name">Nome</label><br>
            <input type="text" name="name" id="nameReply" required/>
        </div><br>
        <div class="input">
            <label for="comment">Comentário</label><br>
            <textarea name="comment" id="commentReply" required></textarea>
        </div>
        <br><br>
        <div class="input-bt">
            <input type="submit" class="btn-sub" value="Enviar Resposta"/>
        </div>
    </form>
</div>

<script src="assets/js/jQuery/jquery-3.5.1.min.js"></script>
<script src="assets/js/script.js"></script>