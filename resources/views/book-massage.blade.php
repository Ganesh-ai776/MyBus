 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
         <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
             <path
                 d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
         </symbol>
         <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
             <path
                 d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
         </symbol>
         <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
             <path
                 d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
         </symbol>
     </svg>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>MyBus</title>
 </head>

 <body class="bg-dark">
     @isset($record)
         <div class="container px-5 py-5">
             <div class="alert alert-success d-flex align-items-center" role="alert">
                 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                     <use xlink:href="#check-circle-fill" />
                 </svg>
                 <div>
                     <h4>{{ $record }} </h4>
                 </div>
             </div>

         </div>

         <!-- Button trigger modal -->
         <div class="container">
             <div class="row my-5 mx-5">
                 <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                     data-bs-target="#exampleModal">
                     Booking Details
                 </button>
             </div>
         </div>
     @endisset


     @isset($error_reg)
         <div class="container px-5 py-5">
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    <h4>{{$error_reg}}</h4>
                </div>
              </div>

         </div>

         <!-- Button trigger modal -->
         <div class="container">
             <div class="row my-5 mx-5">
                <a href="{{ route('Bus-Registration') }}" class="btn btn-outline-primary">Try Again</a>
             </div>
         </div>
     @endisset


     <!-- Modal -->
     @isset($record)
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <h4>Seats : {{ $create->seat_count }}</h4>
                         <h4>Price : {{ $create->price }}</h4>
                         {{-- <h3></h3> --}}
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                     </div>
                 </div>
             </div>
         </div>
     @endisset
     <div class="container">
         <div class="row my-5 mx-5">
             <a href="{{ route('dashboard') }}" class="btn btn-outline-warning">Back</a>


         </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
     </script>

 </body>

 </html>
