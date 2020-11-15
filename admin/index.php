<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin||Slide</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>

 
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h4>Presentation Templating || Admin </h4>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>

    <div class="container" style="margin-top:30px">
        <div class="d-flex justify-content-center">
          <form method="post" autocomplete="" id="add_data_form" name="add_data_form">

            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="title" name="title">
                </div>
            </div>
            <div class="form-group row">
                <label for="slide_1_text" class="col-sm-2 col-form-label">Slide_1</label>
                <div class="col-sm-10">
                <input type="json" class="form-control" id="slide_1_text" name="slide_1_text" >
               </div>
            </div>
            <div class="form-group row">
                <label for="slide_1_text" class="col-sm-2 col-form-label">Json</label>
                <div class="col-sm-10">
                <input type="json" class="form-control" id="json_chart_data" name="json_chart_data" >
               </div>
            </div>
            <div>
              <input type="file" name="files">
              <input class="btn btn-lg btn-secondary float-right" type="submit" name="submitForm" value="Save">
            </div>

        </form>
      </div>
</div>


 <script type="text/javascript">
  // add booking event
   $(document).ready(function(){

       $("#add_data_form").on('submit',(function(e) {
           e.preventDefault();
           data=$('#add_data_form').serialize();
//             var formData = $("#add_data_form").serializeArray();
//   // console.log(formData);
// var jsonData = {};
//    $.each(formData, function() {
//         if (jsonData[this.name]) {
//            if (!jsonData[this.name].push) {
//                jsonData[this.name] = [jsonData[this.name]];
//            }
//            jsonData[this.name].push(this.value || '');
//        } else {
//            jsonData[this.name] = this.value || '';
//        }
//         });
           // alert(jsonData);
                $.ajax({
                     url:"add_data.php",
                     type:"POST",
                     // data:$('#add_booking_form').serialize(),
                      // data: data,
                     data: new FormData(this),
                     contentType: false,       
                     cache: false,            
                    processData:false,
               //       beforeSend:function(){
               // },
                     success:function(data){
                     
                     }
                });  
    })); 
  });
    // end of form submit
  </script>
</body>
</html>
