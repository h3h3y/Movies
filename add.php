<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <h2 class="text-center mt-4 mb-4">FORM TAMBAH MOVIES</h2>
    <hr style="width: 100%;">
    <div class="container">
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Title</label> <br>
                <input name="title" type="text" class="form-control" required> <br>
            </div>
            <div class="form-group">
                <label>Cover</label> <br>
                <input name="cover" type="file" class="form-control" required> <br>
            </div>
            <div class="form-group">
                <label>Genre</label> <br>
                <input name="genre" type="text" class="form-control" required> <br>
            </div>
            <div class="form-group">
                <label>Release Date</label> <br>
                <input name="release_date" type="date" class="form-control" required> <br>
            </div>
            <div class="form-group">
                <label>Rating</label> <br>
                <input name="rating" type="number" class="form-control" required> <br>
            </div>
            <div>
                <input class="btn btn-success" type="submit" value="Input">
                <button class="btn btn-warning text-white"  onclick="history.back()">Kembali</button>
            </div>
        </form>
    </div>
</body>

</html>