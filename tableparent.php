<?php session_start() ?>
<html>
 <head>
  <title>Parent User </title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:1270px;
   padding:20px;
   background-color:#fff;
   border:1px solid #ccc;
   border-radius:5px;
   margin-top:25px;
   box-sizing:border-box;
  }
  button{
        box-shadow: 3px 3px 0px 0px;
         border: 5px #03f302 outset;
        color:white;
         background-color:#03f302;
         padding: 20px 34px;
         display: block;
         font-size: 20px;
         width:100%;
         cursor: pointer;
}
  </style>
 </head>
 <body>
    <?php if (empty($_SESSION['username']) or $_SESSION['base']!="Admin")
                {
            echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
            echo("<button style=\"margin-left: 540px; width: 190px;
    height: 50px;\" onclick=\"location.href='Sign-in.html'\">Login</button>");
            exit();
            }
            ?>
  <div class="container box">
   <h1 align="center">Parent User</h1>
   <br />
   <div class="table-responsive">
   <br />
    <br />
    <div id="alert_message"></div>
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Username</th>
       <th>Email</th>
       <th>Child1</th>
       <th>Child2</th>
       <th>Child3</th>
       <th>Child4</th>
       <th>Child5</th>
       <th>Country</th>
       <th>Last Connection</th>
       <th></th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
 </body>
 <button onclick="window.location.href = 'DiagramParent.php';" >Diagram Parents</button>
 <button onclick="window.location.href = 'allusers.php';" >Return</button>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch1.php",
     type:"POST"
    }
   });
  }
  

  
  
  $(document).on('click', '.delete', function(){
   var Id = $(this).attr("Id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"delete.php",
     method:"POST",
     data:{Id:Id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
 });
</script>
