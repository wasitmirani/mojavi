<div>
    @section('content')
    <div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Categories</h4>
                    <button class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" wire:click="showFormModal">Add Category</button>
                </div>
               
                <div class="card-body">
        
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Category</th>
                                    
                                   
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                               
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>												
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
    @endsection    
</div>
