<div>
    {{-- @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif --}}

    @extends('layouts.user_type.auth')

@section('content')
{{-- <livewire:Medicaments /> --}}

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">


              <button wire:click="create()"
                class="my-4 inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base font-bold text-black shadow-sm hover:bg-red-700">
                Ajouter médicament
            </button>
            @if($isModalOpen)
            @include('livewire.create')
            @endif


                {{-- <h6>Ajouter un médicament</h6> --}}
              </div>
              <div class="card-header pb-0">
                <h6>Les médicaments</h6>
              </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Medicament</th>
                      {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th> --}}
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>


                    @foreach($medicaments as $medicament)

                    <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $medicament->designation}}</h6>
                              <p class="text-xs text-secondary mb-0">{{ $medicament->designation }}</p>
                            </div>
                          </div>
                        </td>
                        {{-- <td>
                          <p class="text-xs font-weight-bold mb-0">Manager</p>
                          <p class="text-xs text-secondary mb-0">Organization</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Online</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                        </td> 
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                        </td> --}}

                        <td class="align-middle">
                            <button wire:click="edit({{ $medicament->id }})" class="btn btn-primary btn-sm">Edit</button>
                            <button wire:click="delete({{ $medicament->id }})" class="btn btn-danger btn-sm">Delete</button>
                        </td>

                      </tr>
                        
                    @endforeach


                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </main>
  @endsection

</div>
