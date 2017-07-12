<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Item Validation Form</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <br />
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        @if (\Session::get('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
          @endif
      <form method="post" action="{{url('items/add')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="itemName">Item Name:</label>
          <input type="text" class="form-control" id="itemName" name="name">
        </div>
        <div class="form-group">
          <label for="price">Price:</label>
          <input type="text" class="form-control" id="price" name="price">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </body>
</html>
