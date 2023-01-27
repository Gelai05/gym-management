<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Trainer</title>
</head>

<body>



    <div class="container">
        <h1 class="text-success">Trainer</h1>
        <button type="button" data-bs-toggle="modal" data-bs-target="#trainer" class="btn btn-primary btn-sm rounded-pill"> + add new trainer</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Actions</th>


                </tr>
            </thead>
            <tbody>
                @foreach($trainers as $trainer)
                <tr>
                    <td>{{$trainer->id }}</td>
                    <td>{{$trainer->name}}</td>
                    <td>{{$trainer->email }}</td>
                    <td>{{$trainer->specialization}}</td>
                    <td>{{$trainer->phone}}</td>
                    <td>
                                
                                <form method="POST" action="/updatetrainer" style="display:inline-block">
                                @csrf
                                    <input type="hidden" value="{{ $trainer->id }}" name="id">
                                    <button type="submit" class="btn rounded-pill btn-primary btn-sm">Update</button>
                                </form>
                                
                                <form method="POST" action="/deletetrainer" style="display:inline-block">
                                @csrf
                                    <input type="hidden" value="{{ $trainer->id }}" name="id">
                                    <button type="submit" class="btn rounded-pill btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        
                </tr>
                @endforeach
              

            </tbody>
        </table>
    </div>


    <div class="modal fade" id="trainer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add Trainer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="/createtrainer">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="specialization" class="form-label">specialization</label>
                            <input type="text" class="form-control" id="specialization" name="specialization" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>