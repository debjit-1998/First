
<html lang="en">

<head>
    <title>Admin Profile</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
   <!--  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                  <br><br><br>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="admin_profile.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                   <!--  <li class="nav-item pcoded-menu-caption">
                        <label>UI Element</label>
                    </li> -->
                    
                    
                   <!--  -->
                   
                    
                   <li data-username="Sample Page" class="nav-item"><a href="approve_lawyer_list.php " class="nav-link"><span class="pcoded-micon"><i class="fa fa-check"></i></span><span class="pcoded-mtext">Approve Lawyer List</span></a></li>
                      <!--  -->
                        <li data-username="Sample Page" class="nav-item"><a href="reject_lawyer_list.php" class="nav-link"><span class="pcoded-micon"><i class="fa fa-ban"></i></span><span class="pcoded-mtext">Reject Lawyer List</span></a></li>
                        <!--  -->
                      <li data-username="Sample Page" class="nav-item"><a href="lawyer_list1.php " class="nav-link"><span class="pcoded-micon"><i class="fa fa-gavel"></i></span><span class="pcoded-mtext"> Lawyer List</span></a></li>
                      <!--  -->
                        <li data-username="Sample Page" class="nav-item"><a href="client_list1.php" class="nav-link"><span class="pcoded-micon"><i class="fas fa-user-plus"></i></span><span class="pcoded-mtext">Client List</span></a></li>
                        <li data-username="Sample Page" class="nav-item"><a href="logout.php" class="nav-link"><span class="pcoded-micon"><i class="fa fa-sign-out"></i></span><span class="pcoded-mtext">Logout</span></a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                  
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                
                
                <li class="nav-item">
                    <div class="main-search">
                       
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                   
                </li>
                <li>
                    <div class="dropdown drp-user">
                        
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                          
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                               
             <div class="col-xl-8 col-md-6">
            <div class="card Recent-Users">
            <div class="card-header">
            <h5>Approve Lawyer</h5>
            </div>
<div class="card-block px-0 py-3">
        <div class="table-responsive">

<?php
include('config.php');
$query="select * from login_lawyer where status='1'";
$query_run=mysqli_query($conn,$query);
?>
<?php 
             while($row=mysqli_fetch_array($query_run))
              {
                ?>


         <table class="table table-hover">
    <tbody>
    <tr class="unread">
    <td><img class="rounded-circle" style="width:40px;" src="<?php echo $row['file'];?>"></td>
        <td>
        <h6 class="mb-1"><?php echo $row['name'];?></h6>
       <tr> 
        <td >
            <?php
                   if ($row['status']==1) {
                    
                    echo "<p id=str".$row['id']."  style=color:#00FF00>Approve</p>";
                   }
                   else
                   {
                    echo "<p id=str".$row['id']." style=color:#FF0000>Reject</p>";
                   }
                ?>
        </td>
        </tr>
        </td>
            
         <td>
            
           <!--  <a href="#!" class="label theme-bg2 text-white f-12">Reject</a>
            <a href="#!" class="label theme-bg text-white f-12">Approve</a> -->
            <select onchange="approve_reject(this.value,<?php echo $row['id'];?>)"></input>
                    <option >Status</option>
                    <option class="btn-info" value="1"><a class="label theme-bg text-white f-11">Approve</a></option>
                    <option class="btn-info"value="0" >Reject</option>
                    <a href="" class="label theme-bg text-white f-11">View</a>
                </select>



<a href="admin_view_advocate.php?email1=<?php echo $row['email'];?>" class="label theme-bg text-white f-11">View</a>




        </td>
        <p >
        
    </p>
        </tr>
                                                        
                                                        
                                                        
                                                        
        </tbody>
</table>
<?php 
             }
            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                

                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   


    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    function approve_reject(val,id)
    {
        $.ajax({
            type:'post',
            url:'approve_advocate.php',
            data:{val:val,id:id},
            success: function(result)
            {
                if (result==1) 
                {

                $('#str'+id).html('Approve')    ;
                }

                else
                {
                    $('#str'+id).html('Reject') ;
                }
            }

        });
    }
</script>
</html>
