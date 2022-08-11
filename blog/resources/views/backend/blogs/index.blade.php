<x-backend.layout.master>
  @slot('title')
  Blogs
  @endslot
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-product-blogs">
        <h2 class="tm-block-title">Blogs</h2>
      <!-- <div>
        <i class="fas fa-table tm-bg-primary-dark my-5"></i>
        Categoty List
      </div> -->
         
      <div class="tm-product-table-container">

          <x-backend.alerts.message type="success" :message="session('message')"/> 

          <table class="table tm-table-small tm-product-table" id="datatablesSimple">
                
            <thead>
              <tr>
                  <th class="tm-product-name">SL</th>
                  <th class="tm-product-name">Title</th>
                  <th class="tm-product-name">Slug</th>
                  <th class="tm-product-name">Description</th>
                  <th class="tm-product-name">Image</th>
                  <th class="tm-product-name">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
              <tr>
                <td class="tm-product-name">{{$loop->iteration}}</td>
                <td class="tm-product-name">{{$blog->title}}</td>
                <td class="tm-product-name">{{$blog->slug}}</td>
                <td class="tm-product-name">{{$blog->description}}</td>
                <td><img src="{{asset('/storage/blogs/'.$blog->image)}}" alt="" style="width:50px;height:50px"></td>
                <td class="text-left">
                  <x-backend.utilities.showlink href="{{ route('blogs.show', ['blog'=>$blog->id]) }}" text="View"/>
                  <x-backend.utilities.editlink href="{{ route('blogs.edit', ['blog'=>$blog->id]) }}" text="Edit"/>
                  <form action="{{ route('blogs.destroy', ['blog'=>$blog->id]) }}" method="post" style="display:inline">
                  @csrf
                  @method('delete')  
                    <x-backend.forms.button color="danger" onclick="return confirm('Are You Sure')" href="{{ route('blogs.show', ['blog'=>$blog->id]) }}" text="Delete"/>
                  </form>
                </td>
                    
              </tr>
              @endforeach
            </tbody>
          </table>
        
            <!-- table container -->
        <button class="btn btn-primary btn-block text-uppercase mb-3">
          <a class="" style="color:white;" href="{{ route('blogs.create') }}">Add new Blog</a>
        </button>
      </div> 
  </div> 
     
</x-backend.layout.master>    