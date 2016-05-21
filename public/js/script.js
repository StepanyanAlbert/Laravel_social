var postId=0;
var postBodyElement=null;

$('.post').find('.interaction').find('.edit').click(function(event){
  event.preventDefault();
     postBodyElement=event.target.parentNode.parentNode.childNodes[1];
    var postBody=postBodyElement.textContent;
     postId=event.target.parentNode.parentNode.dataset['postid'];
   $('#post-body').val(postBody);
    $('#edit_modal').modal()
});
$('#modal_save').on('click',function(){
    $.ajax({
        method:'POST',
        url:urlEdit,
        data:{ 
            body:$('#post-body').val(),
            postId:postId
        }
    })
    .done(function (msg) {
        $(postBodyElement).text(msg['new_body'])
        $('#edit_modal').modal('hide')
    })
});
$('.like').on('click',function (event) {
    event.preventDefault();
var isLike=event.target.previousElementSibling == null ? true : false;
    postId=event.target.parentNode.parentNode.dataset['postid'];

    $.ajax({
    method:'POST',
    url:urlLike,
    data:{
        isLike:isLike,
        postId:postId
    }
}) .done(function () {
        event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You don\'t like this post' : 'Dislike';
        if (isLike) {
            event.target.nextElementSibling.innerText = 'Dislike';
        } else {
            event.target.previousElementSibling.innerText = 'Like';
        }
    })
});
