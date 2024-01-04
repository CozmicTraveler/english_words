<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CSVからDBインポートサンプル</title>
</head>

<body>

  <div class="upload">
    <p>DBに追加したいCSVデータを選択してください。</p>
    <form action="/csv/upload/" method="post" enctype="multipart/form-data">
      @csrf
      <input type="file" name="csvdata" />
      <button>送信</button>
    </form>
  </div>

  <div class="contents">
    <p>{{$cnt}}件登録しました。</p>
    <table>
      <tr>
        <th>ID</th>
        <th>Word</th>
        <th>Meaning1</th>
        <th>Meaning2</th>
        <th>created_at</th>
        <th>updated_at</th>
      </tr>

      <!-- DBから取得したデータを一覧表示する -->
      @foreach ($data as $val)
      <tr>
        <td>{{ $val->id }}</td>
        <td>{{ $val->word }}</td>
        <td>{{ $val->meaning1 }}</td>
        <td>{{ $val->meaning2 }}</td>
        <td>{{ $val->created_at }}</td>
        <td>{{ $val->updated_at }}</td>
    </tr>
      @endforeach
    </table>
  </div>

</body>
</html>