<head>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div class="container">
            <div class="row">
        <table class="table table-striped">
            <form action="{{ url('article') }}" method="POST">
                 <input type="hidden" name="_token" value={{ csrf_token() }}>
                 <input type="text" name="title" class="form-control" id="">
                 <textarea type="text" name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                 <input type="submit" role="btn" class="btn btn-danger" value="送出">
            </form>
        </div>
        </div>