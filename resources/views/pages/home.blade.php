@extends('main')
@section('content')

<div class="row gx-4 gx-lg-5 justify-content-center">
    @foreach ($posts as $post)
                <div class="col-md-10 col-lg-8 col-xl-7">
                                        <!-- Post preview-->
                        <div class="post-preview">
                        <a href="/post/{{$post->id}}">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{{ $post->content }}</h3>
                            <img style="max-width:100%" src="/storage/{{ $post->image }}">
                        </div>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on July 8, 2021
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    @endforeach
                    <div class="d-flex justify-content-end md-4">
                        {{  $posts->links() }}
                    </div>
                </div>
            @endsection