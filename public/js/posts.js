
$(function () {
    $('.modalPop').on('click', function () {
        let btnTitle = ($(this).data('title') == 'showBtn' ? 'Show Post' : 'Edit Post');
        let postID = $(this).data('id');
        showPostModal(btnTitle,postID)
    });
});

function showPostModal(title,postID)
{
    getPost(postID)
    $('#postModalTitle').text(title)
    $('#postModal').modal('show')
}

function getPost(postID)
{
    let url = 'posts/'+postID+'/edit';

    $.ajax({
        type: "get",
        url: url,
        dataType: "JSON",
        success: function (response) {
            populateModal(response)
        }
    });
}

function populateModal(data)
{
    let blogTitle = data.post[0].title;
    let blogBody = data.post[0].body;

    $('#editTitle').val(blogTitle)
    $('#editBody').val(blogBody)

}