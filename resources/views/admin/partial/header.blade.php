<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <!-- Switchery Js Files -->
  <link rel="stylesheet" href="{{ url('')}}/design/adminlte/dist/switchery.min.css">
  <script src="{{ url('')}}/design/adminlte/dist/switchery.min.js"></script>

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('')}}/design/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('')}}/design/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('')}}/design/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('')}}/design/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('')}}/design/adminlte/dist/css/skins/_all-skins.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ url('')}}/design/adminlte/bower_components/jvectormap/jquery-jvectormap.css">





  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<script>
  let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
  elems.forEach(function(html) {
    let switchery = new Switchery(html, { size: 'small' });
  });

  $(document).ready(function(){

    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 1 : 0;
        let userId = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('users.update.status') }}',
            data: {'status': status, 'user_id': userId},
            success: function (data) {
                console.log(data.message);
            }
        });
    });

    $('.change').click(function () {
        let status = 1;
        let contactId = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('contacts.update.status') }}',
            data: {'status': status, 'contact_id': contactId},
            success: function (data) {
                console.log(data.message);
            }
        });
    });

    $('.delete').on("click", function () {
        var route = $(this).attr("data-route");
        var token = $(this).data("token");

        $.ajax({
            type: "DELETE",
            url: route,
            data: {
                "_method": 'DELETE',
                "_token": token,
            },
            success: function (data) {
                $("#"+data.id).remove();
            }
        });
    });


});
</script>
