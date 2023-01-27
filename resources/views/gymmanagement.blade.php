<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Gym Management</title>
</head>

<body>

    <div class="container">
        <h1 class="text-success"> Gym Management </h1>
        <button type="button" data-bs-toggle="modal" data-bs-target="#newTodoModal" class="btn btn-primary btn-sm rounded-pill"> + add new member</button>
        <table class="table">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Membership type</th>
                    <th scope="col">Membership expiration</th>
                    <th scope="col">Trainer</th>
                    <th scope="col">Membership</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <thead>
            @foreach($members as $member)
                <tr>
                    <th scope="col">{{$member->name }}</th>
                    <th scope="col">{{$member->email}}</th>
                    <th scope="col">Membership type</th>
                    <th scope="col">Membership expiration</th>
                    <th scope="col">Trainer</th>
                    <th scope="col">Membership</th>
                    <th> <td>
                                
                                <form method="POST" action="/delete" style="display:inline-block">
                                
                                    <input type="hidden" value="{{ $todo->id }}" name="id">
                                    <button type="submit" class="btn rounded-pill btn-primary btn-sm">✓</button>
                                </form>
                   
                                <form method="POST" action="/deletetodo" style="display:inline-block">
                                @csrf
                                    <input type="hidden" value="{{ $todo->id }}" name="id">
                                    <button type="submit" class="btn rounded-pill btn-light btn-sm">✕</button>
                                </form>
                            </td></th>
                </tr>
                @endforeach
            </thead>
            <tbody>
         
    <tr>
    

            </tbody>
        </table>
    </div>



    <!-- New Todo Modal -->
    <div class="modal fade" id="newTodoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add Member</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="/createmember">
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
                            <label for="membershiptype" class="form-label">membership type</label>
                            <input type="text" class="form-control" id="membershiptype" name="membershiptype" required>
                        </div>

                        <div class="mb-3">
                            <label for="membershipx" class="form-label">membership expiration</label>
                            <input type="text" class="form-control" id="membershipx" name="membershipx" required>
                        </div>

                        <div class="mb-3">
                            <label for="trainerid" class="form-label">Trainer</label>
                            <input type="text" class="form-control" id="trainerid" name="trainerid" required>
                        </div>

                        <div class="mb-3">
                            <label for="membershipid" class="form-label">Membership</label>
                            <input type="text" class="form-control" id="membershipid" name="membershipid" required>
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