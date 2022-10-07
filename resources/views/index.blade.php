<head>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div class="container">
            <div class="row">
            <a href="{{url('article/create')}}" class="btn btn-primary">新增</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>標題</th>
                <th>使用者ID</th>
                <th>編輯</th>
            </tr>
            </thead>
            <tbody>
            @foreach($query as $user )
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->title}}</td>
                <td>{{$user->content}}</td>
                <td><a href="{{url('article/'.$user->id.'/edit')}}" class="btn btn-primary">修改</a>
                </td>
                <td>
                <form action="{{ url('article/'.$user->id) }}" method="POST">
                    <input type="hidden" name="_token" value={{ csrf_token() }}>
                    <input type="hidden" name="_method" value="delete">
                    <input type="submit" role="btn" class="btn btn-danger" value="刪除">
                </form>
                </td>
                <!-- <button type="button" class="btn btn-danger">Danger</button> -->
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        </div>