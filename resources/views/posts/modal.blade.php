<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postmodalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="postModalTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('posts.update',$post->id) }}" method="POST">
          @csrf
          @method('PUT')
          <label for="">Title</label>
          <input type="text" class="form-control" id="editTitle" name="postTitle">
          <label for="">Body</label>
          <textarea class="form-control" id="editBody" name="postBody"></textarea>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          </form>
         
        </div>
        
      </div>
    </div>
  </div>