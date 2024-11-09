<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
        @layer utilities {
          .container {
            @apply px-10 mx-auto;
          }
        }
      </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="flex justify-between my-5 ">
                <h2 class="text-red-500">Create</h2>
                <a href="/home" class="bg-green-600 text-white rounded py-2 px-4">Back to Home</a>
        </div>
            
            <div>
                <form action="{{ route('create') }}" method="POST">
                    @csrf
                    <div class="flex flex-col gap-5">
                        <label for="">Product Id</label>
                        <input type="text" name="product_id" value="">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="">
                        <label for="description">Description</label>
                        <input type="text" name="description" value="">
                        <label for="price">price</label>
                        <input type="text" name="price" value="">
                        <label for="stock">Stock</label>
                        <input type="text" name="stock" value="">
                        <label for="pic">Picture</label>
                        <input type="file" name="image" value="">
                    </div>
                   <div>
                    
                    <input type="submit" class="bg-green-600 text-white rounded py-2 px-4 "></input>
                   </div>
                </form>
            </div>
        
      
    </div>
    
</body>
</html>