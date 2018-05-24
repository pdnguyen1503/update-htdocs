<div class="col-md-8">
    <h2> Danh mục bài viết chuyên mục </h2>
@foreach($Category as $item)
    <!-- Blog Post -->
        <div class="card mb-4">
            <img class="card-img-top" height="400" width="900" src="{{$item->image}}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title"> {{$item->title}} </h2>
                <p class="card-text"> {{$item->intro}}</p>
                <a href="{{route('GetDetail', $item->id)}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on
                <a href="#"></a>
            </div>
        </div>
    @endforeach
</div>