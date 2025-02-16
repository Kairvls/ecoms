@extends('admindashboard')

@section('content')
    
<div class="p-10">
        <article class="bg-white px-10 py-10 shadow-lg">
        <h1 class="flex justify-start text-2xl mb-10 items-center font-semibold head">Category Management</h1>

        <form id="categoryForm" method="POST" action="{{ route('categories.store') }}">
        @csrf
        <input type="hidden" id="categoryId" name="id">

      <div class="flex grow justify-center space-x-32">
        <div class="block">
        <label for="categoryName" class="ml-1">Category Name:</label>
        <div class="textInputWrapper">
            <input placeholder="Type Here" type="text" id="categoryName" name="name" class="textInput">
        </div>
        </div>

        <div class="block">
        <label for="categoryDescription" class="ml-1">Description:</label>
        <div class="textInputWrapper">
            
            <textarea type="text" placeholder="Type Here" name="description" id="categoryDescription" class="textInput"></textarea>
        </div>
        </div>

      </div>
        <button type="submit" id="addCategoryBtn" class="button">
            <p class="text">Add Category</p>
            </button>
        </form>






        <form id="editCategoryForm" method="POST" style="display: none;">
    @csrf
    @method('PUT')
    <h1 class="flex justify-start text-2xl mb-10 mt-10 items-center font-semibold head">Edit Category</h1>
        <input type="hidden" id="editCategoryId" name="id">

        <div class="flex grow justify-center space-x-32">
        <div class="block">
        <label for="editCategoryName" class="ml-1">Category Name:</label>
        <div class="textInputWrapper">
            <input placeholder="Type Here" type="text" id="editCategoryName" name="name" class="textInput">
        </div>
        </div>

        <div class="block">
        <label for="editCategoryDescription" class="ml-1">Description:</label>
        <div class="textInputWrapper">
            
            <textarea type="text" placeholder="Type Here" name="description" id="editCategoryDescription" class="textInput"></textarea>
        </div>
        </div>

      </div>

      <div class="flex -space-x-1 ">
        <button type="submit" class="button mr-2">
          <p class="text">Update Category</p>
        </button>

        <button type="submit" onclick="cancelEdit()" id="cancelEditBtn" style="display: none;" class="button">
          <p class="text">Cancel</p>
        </button>
        </div>
        </form>






        <h2 class="flex justify-start text-2xl py-2 mt-16 mb-6 items-center font-semibold head">Existing Categories</h2>
        <table class="w-full mt-4 border justify-center py-10 text-md">
          <thead>
          <tr>
            <th class="p2 border">ID</th>
            <th class="p2 border">NAME</th>
            <th class="p2 border">DESCRIPTION</th>
            <th class="p2 border">ACTIONS</th>
          </tr>
          </thead>
          
          <tbody>
          
          @foreach($categories as $category)
          <tr>
              <td class="p2 border justify-center flex">{{ $category->id }}</td>
              <td class="p2 border items-center">{{ $category->name }}</td>
              <td class="p2 border items-center">{{ $category->description }}</td>
              <td class="flex p2 space-x-6 border cursor-pointer justify-center items-center">

                  <button onclick="editCategory('{{ $category->id }}', '{{ $category->name }}', '{{ $category->description }}')"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></button>

                  
                  <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="mt-1 bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></button>
                  </form>
              </td>
          </tr>
          @endforeach
          </tbody>
        </table>
        </article>
    </div>
    
    <script>
    document.getElementById("editCategoryForm").onsubmit = function (event) {
        event.preventDefault();
        let id = document.getElementById("editCategoryId").value;
        if (!id) {
            alert("Please confirm to cancel.");
            return;
        }
        this.action = `/manage-categories/${id}`;
        this.submit();
    };

    function editCategory(categoryId, categoryName, categoryDescription) {
        // Populate fields with category details
        document.getElementById('editCategoryId').value = categoryId;
        document.getElementById('editCategoryName').value = categoryName;
        document.getElementById('editCategoryDescription').value = categoryDescription;

        // Show "Update Category", Hide "Add Category"
        document.getElementById('editCategoryForm').style.display = 'block';
        document.getElementById('addCategoryBtn').style.display = 'none';
        document.getElementById('cancelEditBtn').style.display = 'block';
    }

    function cancelEdit() {
        // Reset fields
        document.getElementById('editCategoryId').value = '';
        document.getElementById('editCategoryName').value = '';
        document.getElementById('editCategoryDescription').value = '';

        // Show "Add Category", Hide "Update Category"
        document.getElementById('addCategoryBtn').style.display = 'block';
        document.getElementById('editCategoryForm').style.display = 'none';
        document.getElementById('cancelEditBtn').style.display = 'none';
    }
</script>


@endsection
