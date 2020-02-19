<div class="comments my-3">
  <h3 class="blog-title text-dark">ความคิดเห็น</h3>
  <div class="comments-grids mt-4">
    <div class="comments-grid">
      @if ($comment != null)
        @foreach ($comment as $value)
        <div class="comments-grid-right mt-xl-3 mx-4">
          <h4>{{$value->name}}</h4>
          <ul class="my-2" style="text-decoration: none">
            <li class="font-weight-bold">{{date('F nS, Y - g:iA', strtotime($value->created_at))}}
            </li>
          </ul>
          <p>{{$value->comment}}</p>
        </div>
        <hr>
        @endforeach
      @endif
    </div>
  </div>
</div>
<div class="leave-coment-form">
  <h3 class="blog-title text-dark mb-4">แสดงความคิดเห็น</h3>
  @include('includes.errors')
  <form action="{{route('comment.store_forum', $post->id)}}" method="post">
    {{csrf_field()}}
    @if (Auth::guest())
      <div class="form-group">
        <input type="text" name="Name" class="form-control" placeholder="Name">
      </div>
      <div class="form-group">
        <input type="email" name="Email" class="form-control" placeholder="Email">
      </div>
    @endif
    @if (Auth::check())
      <div class="form-group">
        <input type="hidden" name="Name" class="form-control" value="{{$user->name}}">
      </div>
      <div class="form-group">
        <input type="hidden" name="Email" class="form-control" value="{{$user->email}}">
      </div>
    @endif
    <div class="form-group">
      <textarea name="Message" class="form-control" placeholder="Your comment here..."></textarea>
    </div>
    <div class="form-group">
      <input type="hidden" name="forum_id" class="form-control" value="{{$post->id}}">
    </div>
    <div class="mm_single_submit">
      <input type="submit" value="ตอบกลับ">
    </div>
  </form>
</div>
