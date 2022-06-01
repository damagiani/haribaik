<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title style="visibility: hidden">Wariga Belog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <h2 class="mb-2 mt-5" align="center"><b>Kalender Wariga Belog</b></h2>
            <div class="col-md-12 col-lg-9 col-xl-9">
                <hr class="mb-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group col-md-12 mt-3">
                            <h6><strong>Nama :</strong> {{ Auth::user()->name }}</h6>
                        </div>
                        <div class="col-md-12 ml-2">
                            <table class="table" rules="none">
                                <thead>
                                    <tr>
                                      <th class="text-center" scope="col">Tanggal Pilihan</th>
                                      <th class="text-center" scope="col">Catur Bekel</th>
                                      <th class="text-center" scope="col">Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($warigas as $wariga)
                                      <tr>
                                          <td>{{ $wariga->tanggal_pilihan}}</td>
                                          <td>{{ $wariga->caturbekel->bagian}}</td>
                                          <td>{{ $wariga->caturbekel->deskripsi}}</td>
                                      </tr>
                                    @endforeach
                                  </tbody>

                            </table>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>