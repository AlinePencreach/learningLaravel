<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>
<div class="mx-auto max-w-7xl px-6 lg:px-8">

    @if(session('success'))
        {{session('success')}}
    @endif
     
    @foreach ($posts as $post)
      <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
          <article class="flex max-w-xl flex-col items-start justify-between">
        
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <p class="">{{$post->created_at->format('d M Y')}}</p>
                  {{$post->title}}
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
              {{$post->content}}

            </p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                {{$post->user->name}}
                </p>
              </div>
            </div>

            <div class="relative mt-8 flex items-end gap-x-4 ">
              <div class="text-sm leading-6 p-2 pointer-events-auto rounded-md bg-indigo-600">
                <p class="font-semibold text-gray-100"> 
                {{$post->category->name}}
                </p>
              </div>
            </div>

          </article>
      </div>
      @endforeach
    </div>
</x-app-layout>
  