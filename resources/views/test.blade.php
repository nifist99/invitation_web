<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gift Untuk Mempelai</h5>
      </div>
      <div class="modal-body">

       <form action="{{'giftpost'}}" method="post" enctype='multipart/form-data' id="gift">
           @csrf
          <div class="form-group">
              <input type="text" class="form-control" id="nama" name='nama' placeholder="nama" required>
          </div>
          <div class="form-group" style="margin-top: 10px;">
              <input type="text" class="form-control" id="nominal" name='nominal' placeholder="nominal" required>
          </div>
        <div class="form-group" style="margin-top: 10px;">
          <input type="file" class="form-control" id="tf" name='foto' placeholder="bukti tf" required>
          <span style="color:#565656;font-size: 12px;">kirim bukti transfer</span>
        </div>
      </form>
      <hr>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="mySubmit()">Kirim</button>
      </div>
    </div>
  </div>
</div>

</div>

<script>
function mySubmit() {
  document.getElementById("gift").submit();
}
</script>

</body>
</html>
