<x-app-layout>
    <div class="modal fade" id="basicModal" tabindex="-1">
        <div class="modal-dialog">
           
          <div class="modal-content">
            <form action="{{url('insert-master')}}" method="POST">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title">Add master category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Label</label>
                        <input type="text" class="form-control" id="label" name="label" required />
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Value</label>
                        <input type="text" name="value" class="form-control" id="value" required />
                    </div>
                </div>
        
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Add</button>
            </div>
            
        </form>
          </div>
        </div>
      </div><!-- End Scrolling Modal-->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">    <label><i class="fa fa-list ml-2"></i>Master List</label></div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="fa fa-plus"></i> Add master category</button>
                        </div>
                    </div>
                    </div>
                    <div class="card-body mt-3">
                        <table id="example" class="table table-sm" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">label</th>
                                    <th scope="col">Value</th>
                                    <th scope="col">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index=> $item)
                                <tr>
                                    <td scope="col">{{$index+1}}</td>
                                    <td scope="col">{{$item->type}}</td>
                                    <td scope="col">{{$item->label}}</td>
                                    <td scope="col">{{$item->value}}</td>
                                    <td scope="col"> 
                                        <a href="{{ url('delete-master', ['id'=>$item->id]) }}" class="btn  btn-sm btn-danger mr-2"><i class="fa fa-close"></i></a> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
