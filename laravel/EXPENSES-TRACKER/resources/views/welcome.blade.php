<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <main class="container-md">
    <header>
      <h1>Expenses tracker</h1>
    </header>
    <div>
      <a class="btn btn-primary" href="/create">Create new Expense</a>

    </div>
    <section>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Amount</th>
            <th scope="col">Category</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($expenses as $value)

          <tr>
            <th scope="row">{{$value['id']}}</th>
            <td>{{$value['title']}}</td>
            <td>{{$value['amount']}}</td>
            <td>{{$value['category']}}</td>
            <td><a href="/edit/{{$value['id']}}" class="btn btn-success">Edit</a></td>
            <td><a href="/delete/{{$value['id']}}" class="btn btn-danger">Delete</a></td>
          </tr>

          @endforeach

        </tbody>
      </table>
    </section>
  </main>
</body>

</html>