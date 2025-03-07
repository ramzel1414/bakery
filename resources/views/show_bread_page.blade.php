<x-app-layout>
  
  @include('sweetalert::alert')

  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Show Bread') }}
      </h2>
  </x-slot>

  <table style="color: gray; border: 1px solid gray; width: 80%; text-align: center; margin: 12px auto auto auto;">
    <tr style="color: white;">
      <th>Baker</th>
      <th>Name</th>
      <th>Description</th>
      <th>Image</th>
      <th style="width: 25%;">Action</th>
    </tr>
    @foreach ($bread as $bread)
    <tr>
      <td>{{$bread->baker->name}}</td>
      <td>{{$bread->name}}</td>
      <td>{{$bread->description}}</td>
      <td style="">
        <img style="object-fit: cover; width: 150px; height: 100px; display: block; margin: auto;" src="/postimage/{{$bread->image}}" alt="bread-image">
      </td>
      <td>
        <a class="btn btn-gray" href="{{route('edit-bread', $bread->id)}}">Edit</a>
        <a class="btn btn-warning" href="{{route('delete-bread', $bread->id)}}" onclick="confirm('Are you sure you want to delete this?')">Delete</a>
      </td>

    </tr>
    @endforeach

  </table>

</x-app-layout>