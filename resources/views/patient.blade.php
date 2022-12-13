<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="mt-2">
            <h2>New Patient Register {{$title}}</h2>
</div>
                    <div class="d-flex">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">January</th>
                                    <th scope="col">Febuary</th>
                                    <th scope="col">March</th>
                                    <th scope="col">April</th>
                                    <th scope="col">Mei</th>
                                    <th scope="col">Jun</th>
                                    <th scope="col">July</th>
                                    <th scope="col">August</th>
                                    <th scope="col">September</th>
                                    <th scope="col">October</th>
                                    <th scope="col">November</th>
                                    <th scope="col">December</th>
                                  </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{'Month'}}</td>    
                            <td>{{$jan}}</td>    
                            <td>{{$feb}}</td>    
                            <td>{{$marc}}</td>    
                            <td>{{$april}}</td>    
                            <td>{{$mei}}</td>    
                            <td>{{$jun}}</td>    
                            <td>{{$july}}</td>    
                            <td>{{$augt}}</td>    
                            <td>{{$sep}}</td>    
                            <td>{{$oct}}</td>    
                            <td>{{$nov}}</td>    
                            <td>{{$dec}}</td>    
                            </tr>            
                          </tbody>
                          </table>
            
                    </div>
                </div>
                
            </body>
            </html>