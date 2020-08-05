<div class="reply">
    <a href="#" class="close-reply">close</a>
<form id="comment-form" class="reply-form" action="{{ url("/addReply") }}" method="post">
    @csrf
    <br>
    <input type="hidden" name="parent_id" value="{{ $id }}"/>
    <input type="hidden" name="id_news" value="{{ $id_news }}"/>
    <div class="col-md-6">
        <textarea name="comment" placeholder="Comment" rows="4"></textarea>
    </div>
    <button type="submit" name="reply-submit">Submit</button>

</form>

</div>
