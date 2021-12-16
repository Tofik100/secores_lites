<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-10 mt-5">
                @hasanyrole('writer|publish')
                    <button class="btn btn-success my-5">
                        <a href="#" class="text-white">Create Post</a>
                    </button>
                @endhasanyrole
                <table class="table table-dark p-3">
                    <thead>
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            @role('editor')
                            <th scope="col">action</th>
                            @endrole
                            @role('publish')
                            <th scope="col">Handle</th>
                            @endrole
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (App\Models\Post::all() as $post)

                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                @role('editor')
                                    <td><a href="#" class="btn btn-danger text-light">edit</a></td>
                                @endrole


                                @role('publish')
                                    <td><a href="#" class="btn btn-danger text-light">publish</a></td>
                                @endrole
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
