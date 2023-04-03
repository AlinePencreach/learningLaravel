<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un post') }}
        </h2>
    </x-slot>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

    <div class="my-5">
      @foreach ($errors->all() as $error)
      <span class="text-red-500"> {{ $error }}</span>
      @endforeach
    </div>
    
      <form class="m-3 p-3" action="{{route('posts.store')}}" method="post" >

          @csrf 

          <label for="title" value="Titre du post">Titre du post</label>
          <input id="title" name="title"></input>

          <label for="content" value="content">Contenu du post</label>
          <textarea class="" id="content" name="content"></textarea>

          <label for="category" value="category du post">Catégorie du post</label>
          <select name="category" id="category">
      
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>


          <button class="m-3 p-3 pointer-events-auto rounded-md bg-indigo-600 text-gray-100" type="submit">Envoyer</button>

      </form>

    </div>
</x-app-layout>
  