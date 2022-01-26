@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('posts') }}" method="post" class="mb-4">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="post something ..."></textarea>
                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button class="bg-blue-500 text-white px-4 py-3 ronded font-medium w-full">
                        POST
                    </button>
                </div>
            </form>
            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class="mb-4">
                        <a href="" class="font-bold">{{$post->user->name}} </a> <span class="text-sm text-gray-600">{{$post->created_at->diffForHumans()}}</span>
                        <p class="mb-2">{{ $post->body }}</p>

                        <div class="flex items-center">
                            @if (!$post->likedBy(auth()->user()))    
                                <form action=" {{ route('posts.like', $post) }} " method="post" class="mr-2">
                                    @csrf
                                    <button type="submit" class="text-blue-500">LIKE</button>
                                </form>
                            @else    
                                <form action="{{ route('posts.dislike', $post) }}" method="post" class="mr-2">
                                    @csrf
                                    <button type="submit" class="text-blue-500">UNLIKE</button>
                                </form>
                            @endif
                            @if (isset($post->likes))
                                <span> {{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }} </span>
                            @else
                                <span>0 like</span>
                            @endif
                        </div>
                    </div>
                @endforeach
                {{ $posts->links() }}
            @else
                <p>No posts yet !</p>
            @endif
        </div>
    </div>
@endsection