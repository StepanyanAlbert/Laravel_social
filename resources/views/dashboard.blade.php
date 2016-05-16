@extends('main_layout')

@section('title')
    dashboard
    @endsection
@include('include.message')

@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say?</h3></header>
            {{Form::open(['url'=>'createpost','method'=>'post'])}}

                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>

            </form>
        </div>

    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say...</h3></header>
              @foreach($posts as $post)
                <article class="post" >
                    <p> {{$post->body}}</p>
                    <div class="info">
                        Posted by {{$post->user->firstname}} on {{$post->created_at}}
                    </div>
                    <div class="interaction">
                        <a href="#" >Like</a> |
                        <a href="#" >Dislike</a>|
                        <a href="#" >Edit</a>|
                        <a href="#" >Delete</a>

                    </div>
                </article>
              @endforeach
        </div>
    </section>
    @endsection
