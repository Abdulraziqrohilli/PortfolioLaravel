<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2 style="float:right;">Total users <span class="text-danger"></span></h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">All catagorey</div>
                
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>


              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">Add cotegory</div>
                  <div class="card-body">
                  <form action="{{}}" method="POST">
                    <label for="name">Enter your name</label><br>
                    <input type="text">
                    <label for="name">Enter your password</label><br>
                    <input type="text">
                    <button class="btn-primary">Add</button><br>
                  </form>
                </div>
               </div>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>
