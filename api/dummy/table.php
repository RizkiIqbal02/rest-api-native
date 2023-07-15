<div class="row align-items-md-stretch">
    <h2>Request to REST API</h2>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Sedikit Tips dari Iqbal!</strong> Perhatikan kolom request, yang saya maksud disini adalah, mengakses request nya sesuaikan dengan host dan port kamu misalnya jika default host dan port kamu <strong>http://localhost:8080</strong> maka request api kamu menggunakan method <strong>GET</strong> jadi seperti ini <strong>http://localhost:8080/rest-api-native/api/kategori.php</strong>, Demikian juga method method lainnya dapat kamu sesuaikan ya.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Method</th>
                <th scope="col">About</th>
                <th scope="col">Request</th>
                <th scope="col">Required Params</th>
                <th scope="col">Response</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>GET</td>
                <td>List All Categories</td>
                <td>/api/kategori.php</td>
                <td>none</td>
                <td class=" text-danger">
            <pre><code>{
  "message": "success",
  "data": [
    {
      "id": 1,
      "nama": "Manga"
    },
    {
      "id": 2,
      "nama": "Sejarah"
    }
  ]
}</code></pre>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>GET</td>
                <td>Show Single Category</td>
                <td>/api/kategori.php?id=1</td>
                <td>id</td>
                <td class=" text-danger">
            <pre><code>{
  "message": "success",
  "data": [
    {
      "id": 1,
      "nama": "Manga"
    }
  ]
}</code></pre>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>POST</td>
                <td>Add New Category</td>
                <td>/api/kategori.php?nama=Manga</td>
                <td>nama</td>
                <td class=" text-danger">
            <pre><code>{
  "message": "data berhasil di tambahkan",
  "data": [
    {
      "id": 1,
      "nama": "Manga"
    }
  ]
}</code></pre>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>PUT</td>
                <td>Edit a Category</td>
                <td>/api/kategori.php?id=1&nama=Novel</td>
                <td>id, nama</td>
                <td class=" text-danger">
            <pre><code>{
  "message": "data berhasil di ubah",
  "data": [
    {
      "id": 1,
      "nama": "Novel"
    }
  ]
}</code></pre>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>DELETE</td>
                <td>Delete a Category</td>
                <td>/api/kategori.php?id=1</td>
                <td>id</td>
                <td class=" text-danger">
            <pre><code>{
  "message": "data berhasil di hapus",
  "data": [
    {
      "id": 1,
      "nama": "Novel"
    }
  ]
}</code></pre>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>