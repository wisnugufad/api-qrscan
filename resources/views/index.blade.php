<html>

<body>
  <!-- <?php var_dump($matakuliah); ?> -->
  <table border="1px">
    <thead>
      <th>prodi</th>
      <th>matakuliah</th>
    </thead>
    @foreach ($matakuliah as $list)
    <tr>
    <td>{{$list->nama_prodi}}</td>
    <td>{{$list->name}}</td>
    </tr>
@endforeach
    <tbody>
  </table>
</body>

</html>