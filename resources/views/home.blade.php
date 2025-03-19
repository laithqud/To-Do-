<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d24639e9bf.js" crossorigin="anonymous"></script>
    <style>
        #category-info{
            width: 300px;
            border: 2px solid lightgrey;
        }
        #task-div{
            border: 1px solid lightgrey;
        }
        .fs{
            font-size: 15px;
        }
        .fss{
            font-size: 12px;
        }
        #addCategory{
            display: none
        }
        .posit{
            top: -100px;
            right: 100px;
            background-color: rgb(43, 77, 211);
        }
    </style>
</head>
<body class="p-5">
    <h1>welcome to home page</h1>

    <div class="container p-5 border rounded">

        <div class="container d-flex justify-content-between">
            <h2>My Tasks</h2>
            <div class="position-relative">
                <a href="" onclick="show()" class="text-light bg-primary rounded p-2 text-decoration-none"><strong class="fs-3">+</strong> Add Category </a>
                <div id="addCategory" class="border p-2 position-absolute posit">
                    <form action="/home" method="POST">
                        @csrf
                        <label for="newCategory" class="text-light">new category</label><br>
                        <input type="text" name="name" id="newCategory"><br>
                        <button value="submit">add</button>
                    </form>
                </div>
            </div>
        </div>

        <div id="category-div" class="container d-flex flex-wrap gap-5 pt-2">
            @if ($categories->isEmpty())
                <p>No categories available. Please add a category.</p>
            @else
                @foreach ($categories as $category)
                    <div id="category-info" class="rounded p-3">
                        <div class="d-flex justify-content-between align-items-center border-bottom">
                            <h3 class="p-2">{{ $category->name }}</h3>
                            <form action="{{ route('category.delete', $category->id) }}" method="POST" style="display: inline;" onsubmit="return confirmDeleteCategory(event, this)">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn p-0 border-0 bg-transparent">
                                    <i class="fa-solid fa-xmark text-danger"></i>
                                </button>
                            </form>                            
                        </div>
                
                        @foreach ($category->tasks as $task)
                            <div id="task-div" class="rounded d-flex align-items-center gap-2 justify-content-evenly p-2 mt-4 mb-4">
                                <input type="radio" name="radio" id="radio">
                                <div class="">
                                    <h4 class="fs">{{ $task->name }}</h4>
                                    <p class="fss">{{ $task->description }}</p>
                                </div>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this task?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent">
                                        <i class="fa-solid fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </div>
                        @endforeach
                
                        <a href="" onclick="showTask(event, 'taskForm-{{ $category->id }}')" class="text-light text-decoration-none rounded d-block w-100 text-center pt-1 pb-1 mt-2 bg-primary">
                            <strong class="fs-3">+</strong> Add Tasks
                        </a>
                        <div id="taskForm-{{ $category->id }}" style="display: none;" class="mt-3">
                            <form action="/tasks" method="POST">
                                @csrf
                                <input type="hidden" name="category_id" value="{{ $category->id }}">
                                
                                <label for="taskName-{{ $category->id }}" class="text-dark">Task Name:</label><br>
                                <input type="text" name="name" id="taskName-{{ $category->id }}" required><br>
                        
                                <label for="taskDescription-{{ $category->id }}" class="text-dark">Task Description:</label><br>
                                <input type="text" name="description" id="taskDescription-{{ $category->id }}" required><br>
                        
                                <button type="submit" class="mt-2 btn btn-primary">Add Task</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
    

    <script>
        function show() {
            event.preventDefault();
            let div = document.getElementById('addCategory');
            div.style.display = (div.style.display === 'none' || div.style.display === '') ? 'block' : 'none';
        }
    
        function showTask(event, taskFormId) {
            event.preventDefault();
            let form = document.getElementById(taskFormId);
            form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
        }

        function confirmDeleteCategory(event, form) {
            event.preventDefault(); // Stop form submission
            if (confirm("Are you sure you want to delete this category? All tasks within it will be deleted!")) {
                form.submit(); // Proceed with form submission if confirmed
            }
        }
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>