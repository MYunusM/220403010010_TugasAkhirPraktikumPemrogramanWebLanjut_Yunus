<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Form Aduan</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/app.css')}}" />

</head>

<body>

    <form action="{{route('inputData')}}" method="post">

        <div class="row">

            <div class="col-sm-3"></div>

            <div class="col-sm-6">

            <h1 align="center">Form Data Mahasiswa</h1>

                <fieldset>
                    <legend> Data Mahasiswa </legend>
                
                <p>
                <div class="form-group">

                    <label for="" class="label-control">Nama </label>

                    <input type="text" name="nama" class="form-control">

                </div>
                </p>
                <p>

                <div class="form-group">

                    <label for="" class="label-control">NIM</label>

                    <input type="number" name="nim" class="form-control">

                </div>
                </p>
                <p>

                <div class="form-group">

                    <label for="" class="label-control">Prodi</label>

                    <input type="text" name="prodi" class="form-control">

                </div>
                </p>
                <p>
                <div class="form-group">

                    <label for="" class="label-control">Asal</label>

                    <textarea name="keterangan" class="form-control" cols="30" rows="10"></textarea>

                </div>
                </p>

                {{csrf_field()}}
                <p>
                <input type="submit" value="Simpan" class="btn btn-primary">
                </p>
            </div>

        </div>

    </form>

</body>

</html>