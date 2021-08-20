<div>
    @section('content')
    <div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">My Courses</h4>
                    <button class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" wire:click="showFormModal">Add Course</button>
                </div>
               
                <div class="card-body">
        
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Course Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    
                                   
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>												
                                    </td>												
                                </tr>
                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Course</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">

                       <form>
                        <div class="mb-3">
                            <input type="text" class="form-control input-default " placeholder="Enter Course Name" wire:model="name">
                        </div>
                        <div class="mb-3">
                            <select class="form-control" wire:model="category">
                                <option value="">Course Category</option>
                                
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="text"  class="form-control" placeholder="Course Price" wire:model="course">
                          </div>
                        <div class="mb-3">
                            <label>Upload An Image</label>
                            <input type="file" class="form-control input-default " placeholder="Upload Thumbnail" wire:model="image">
                        </div>
                        <div class="mb-3">
                          <textarea class="form-control" placeholder="Course Description" wire:model="description"></textarea>
                        </div>
                    
                       </form>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" wire:click="addCourse">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        
        
        
      
        </div>
    @endsection    
</div>
