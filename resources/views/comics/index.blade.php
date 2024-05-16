@php
  use App\Models\Comic;
@endphp

@extends('layouts.app')

@section('content')
  @include('partials.jumbotron')

  <div class="custom_container pt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

      <h2>Comics</h2>

      <a class="btn custom_btn_bg" href="{{ route('comics.create') }}">
        Add
      </a>
    </div>

    <div class="table-responsive">
      <table class="table table-secondary">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Type</th>
            <th scope="col">Series</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th style="width:10%" scope="col">Sale date</th>
            <th style="width:12%" scope="col">Actions</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @forelse ($comics as $comic)
            <tr class="">
              <td scope="row">{{ $comic->id }}</td>
              <td><img width="60" src="{{ $comic->thumb }}" alt=""></td>
              <td>{{ $comic->type }}</td>
              <td>{{ $comic->series }}</td>
              <td>{{ $comic->title }}</td>
              <td>{{ $comic->description }}</td>
              <td>{{ $comic->price }}</td>
              <td>{{ $comic->sale_date }}</td>
              <td>

                {{-- View action --}}
                <a class="btn badge custom_btn_bg p-1" href="{{ route('comics.show', $comic) }}" title="View">
                  View
                  <i class="fa-solid fa-eye fa-sm"></i>
                </a>

                {{-- Edit action --}}
                <a class="btn badge custom_btn_bg p-1" href="{{ route('comics.edit', $comic) }}" title="Edit">
                  Edit
                  <i class="fa-solid fa-pen-to-square fa-sm"></i>
                </a>

                {{-- Delete action --}}
                <!-- Modal trigger button -->
                <button type="button" class="btn badge btn-danger p-1" data-bs-toggle="modal"
                  data-bs-target="#modalId-{{ $comic->id }}" title="Delete">
                  Delete
                  <i class="fa-solid fa-trash-can fa-sm"></i>
                </button>

                <!-- Modal Body -->
                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1" data-bs-backdrop="static"
                  data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{ $comic->id }}"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">

                      <div class="modal-header justify-content-center align-items-center">
                        <h5 class="modal-title text-center text-white" id="modalTitleId">
                          ⚠️ATTENTION⚠️
                          <br>
                          This action is irreversible
                        </h5>
                      </div>

                      <div class="modal-body text-center">
                        You are about to delete {{ $comic->title }}
                        <br>
                        Are you sure you want to delete this record?
                      </div>

                      <div class="d-flex justify-content-end gap-3 p-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                          Close
                        </button>

                        <form action="{{ route('comics.destroy', $comic) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">
                            Confirm
                          </button>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>

              </td>

            @empty

            <tr class="">
              <td scope="row" colspan="7">Nothing to show</td>
            </tr>
          @endforelse

        </tbody>
      </table>
    </div>

    {{ $comics->links('pagination::bootstrap-5') }}

  </div>
@endsection
