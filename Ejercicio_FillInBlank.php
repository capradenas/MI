<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="insidehead">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <title>MI - MCM Interactive Learning</title>
    <!-- Plugin Css-->
    <link rel="stylesheet" href="assets/plugins/magnific-popup/dist/magnific-popup.css" />
    <link rel="stylesheet" href="assets/plugins/jquery-datatables-editable/datatables.css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <script src="assets/js/modernizr.min.js"></script>
</head>
<body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <?php include ("matrices/topbar.php");?>
        <!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->

        <?php include("matrices/left-side-menu.php");?>

        <!-- Left Sidebar End -->
        
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                          <h4 class="page-title">
                                Nivel 1 / Fase 1 / Ejercicios / Fill in Blank</h4>
                            <ol class="breadcrumb">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Fase 1</a></li>
                                <li class="active"><b>Fill in Blank</b> Mark Correct (Unit 1 To Be Practice I)
                                </li>
                            </ol>
                        </div>
                    </div>
                    
                    <!-- end Panel -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">
                                    <b>Be Verb Practice #1</b></h4>
                                <p class="text-muted m-b-30 font-13">
                                    Write the correct form of the verb “to be” in the blank. 
                                </p>
                                <div class="table-responsive">
                                    <form method="post" action="#">
                                    <?php
                                    try
                                    {
                                    $ex2 = @$_POST['ex2'];
                                    $ex3 = @$_POST['ex3'];
                                    $ex4 = @$_POST['ex4'];
                                    $ex5 = @$_POST['ex5'];
                                    
                                    }
                                    catch (Exception $ex)
                                    {
                                        echo $ex;
                                    }

                                    $suma=0;
                                    ?>
                                    <table id="mainTable" class="table table-striped m-b-0">
                                        
                                        <tbody>
                                            <tr>
                                                <td style="width:20px">
                                                    I
                                                </td>
                                               <td style="width:50px">
                                                    <input type="text" id="ex1"/>
                                                </td>
                                                <td style="width:auto">
                                                    Sleepy.
                                                </td>
                                                <td id="ex1result">
                                                
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                               <td style="width:20px">
                                                    You
                                                </td>
                                                <td style="width:50px">
                                                    <input type="text" name="ex2"/>
                                                </td>
                                                <td style="width:auto">
                                                    handsone.
                                                </td>
                                                <td>   
                                                <?php
                                                    if($ex2 == "are")
                                                    {
                                                        $suma = $suma + 1;
                                                        echo("<h1> Excellent</h1>");
                                                        
                                                    }
                                                    else if($ex2 != "are" && $ex2 != "")
                                                    {
                                                        $suma = $suma + 0;
                                                        echo("<h3> Correct answer: are </h3>");
                                                        
                                                    }
                                                    else
                                                    {
                                                        $suma = $suma + 0;
                                                        echo("<h3> </h3>");

                                                    }
                                                ?>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                               <td style="width:20px">
                                                    He
                                                </td>
                                               <td style="width:50px">
                                                   <input type="text" name="ex3"/>
                                                </td>
                                                <td style="width:auto">
                                                    short.
                                                </td>
                                                <td>
                                                <?php
                                                    if($ex3 == "is")
                                                    {
                                                        $suma = $suma + 1;
                                                        echo("<h1> Excellent</h1>");
                                                    }
                                                    else if($ex3 != "is" && $ex3 != "")
                                                    {
                                                        $suma = $suma + 0;
                                                        echo("<h3> Correct answer: is</h3>");
                                                    }
                                                    else
                                                    {
                                                      $suma = $suma + 0;
                                                        echo("<h3></h3>"); 
                                                    }
                                                ?>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                               <td style="width:20px">
                                                    She
                                                </td>
                                               <td style="width:50px">
                                                   <input type="text" name="ex4"/>
                                                </td>
                                               <td style="width:auto">
                                                    frienly.
                                                </td>
                                                <td>
                                                <?php
                                                    if($ex4 == "is")
                                                    {
                                                        $suma = $suma + 1;
                                                        echo("<h1> Excellent</h1>");
                                                    }
                                                    else if($ex4 != "is" && $ex4 != "")
                                                    {
                                                        $suma = $suma + 0;
                                                        echo("<h3>Correct answer: is</h3>");
                                                    }
                                                    else
                                                    {
                                                        $suma = $suma + 0;
                                                        echo("<h3></h3>");
                                                    }
                                                ?>
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                               <td style="width:20px">
                                                    It
                                                </td>
                                                <td style="width:50px">
                                                    <input type="text" id="ex5"/>
                                                </td>
                                                <td style="width:auto">
                                                    cold today.
                                                </td>
                                                <td id="ex5">
                                                <?php
                                                    if($ex5 == "is")
                                                    {
                                                        $suma = $suma + 1;
                                                        echo("<h1> Excellent</h1>");
                                                    }
                                                    else if($ex5 != "is" && $ex5 != "")
                                                    {
                                                        $suma = $suma + 0;
                                                        echo("<h3> Correct answer: is</h3>");
                                                    }
                                                    else
                                                    {
                                                        $suma = $suma + 0;
                                                        echo("<h3></h3>");
                                                    }
                                                    
                                                ?>

                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                        
                                        
                                    </table>
                                    <br/>
                                    <?php

                                    $resultado = 0;

                                    $resultado = ($suma * 100) / 5;

                                    echo "<h3>"."$suma"." correct of 5 <BR/></h3>";
                                    echo "<h2>Your result is: "."$resultado"."%</h2>";



                                    ?>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Evaluar
                                        </button>
                                            <!--<button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Cancelar-->
                                        </button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
            <?php include("matrices/footer.php");?>
        
             <script>
        window.onload = function() {
            document.getElementById('send_request').onclick = function()
            {
                var ex1, ex2, ex3, ex4, ex5, resultado1, resultado2, resultado3, resultado4, resultado5;                
                ex1 = document.getElementById('ex1').value;                
                ex2 = document.getElementById('ex2').value;                
                ex3 = document.getElementById('ex3').value;                
                ex4 = document.getElementById('ex4').value;                
                ex5 = document.getElementById('ex5').value;
                
                var suma;
                
                connect = windows.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                connect.onreadystatechange = function()
                
                if(ex1 == 'am' || ex1 == "'m" )
                {
                    suma = suma + 1;
                    resultado1 = '<h1> Excellent</h1>';
                    document.getElementById('_AJAX_').innerHTML = ex1result;
                }
                else if(ex1 != 'am' && ex1 != ''  )
                {
                    suma = suma + 1;
                    resultado1 = '<h1> Excellent</h1>';
                    document.getElementById('_AJAX_').innerHTML = ex1result;
                }
                else
                {
                    resultado1 = '<h1> Excellent</h1>';
                    document.getElementById('_AJAX_').innerHTML = ex1result;
                }

                                                ?>
                if(user != '' && pass != '')
                {
                    form = 'user' + user + '&pass' + pass + '&session' + session;                
                    
                    {
                        if(connect.readyState == 4 && connect.status == 200)
                        {
                            if(parseInt(connect.responseText) == 1)
                            {
                                result = '<div class="alert alert-dismissible alert-success">';
                                result +='<button type="button" class="close" data-dismiss="alert">&close;</button>';
                                result += '<strong>Conectado</strong> redericcionando.';
                                result += '</div>';
                                location.href= '?view=index';
                                document.getElementById('_AJAX_').innerHTML = result;
                            }
                            else
                            {
                                result = '<div class="alert alert-dismissible alert-danger">';
                                result +='<button type="button" class="close" data-dismiss="alert">&close;</button>';
                                result += '<strong>OOPS!</strong> Credenciales Incorrectas.';
                                result += '</div>';   document.getElementById('_AJAX_').innerHTML = result;
                            }
                        }
                        else if(connect.readyState != 4)
                        {
                            result = '<div class="alert alert-dismissible alert-warning">';
                            result +='<button type="button" class="close" data-dismiss="alert">&close;</button>';
                            result += 'Procesando...';
                            result += '</div>';   document.getElementById('_AJAX_').innerHTML = result;

                        }
                    }
                    connect.open('POST','?view=login', true);
                    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
                    connect.send(form);

                }
                else {
                    //ERROR: Datos vacios
                    result = '<div class="alert alert-dismissible alert-danger">';
                    result +='<button type="button" class="close" data-dismiss="alert">&close;</button>';
                    result += '<strong>OOPS!</strong> El Usuario y la contraseña no pueden estar vacios.';
                    result += '</div>';   document.getElementById('_AJAX_').innerHTML = result;
                }    
            }
        }
      </script>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <div class="side-bar right-bar nicescroll">
            <h4 class="text-center">
                Chat</h4>
            <div class="contact-list nicescroll">
                <ul class="list-group contacts-list">
                    <li class="list-group-item"><a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-1.jpg" alt="">
                        </div>
                        <span class="name">Chadengle</span> <i class="fa fa-circle online"></i></a><span
                            class="clearfix"></span></li>
                    <li class="list-group-item"><a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <span class="name">Tomaslau</span> <i class="fa fa-circle online"></i></a><span class="clearfix">
                        </span></li>
                    <li class="list-group-item"><a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <span class="name">Stillnotdavid</span> <i class="fa fa-circle online"></i></a><span
                            class="clearfix"></span></li>
                    <li class="list-group-item"><a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-4.jpg" alt="">
                        </div>
                        <span class="name">Kurafire</span> <i class="fa fa-circle online"></i></a><span class="clearfix">
                        </span></li>
                    <li class="list-group-item"><a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-5.jpg" alt="">
                        </div>
                        <span class="name">Shahedk</span> <i class="fa fa-circle away"></i></a><span class="clearfix">
                        </span></li>
                    <li class="list-group-item"><a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-6.jpg" alt="">
                        </div>
                        <span class="name">Adhamdannaway</span> <i class="fa fa-circle away"></i></a><span
                            class="clearfix"></span></li>
                    <li class="list-group-item"><a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-7.jpg" alt="">
                        </div>
                        <span class="name">Ok</span> <i class="fa fa-circle away"></i></a><span class="clearfix">
                        </span></li>
                    <li class="list-group-item"><a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-8.jpg" alt="">
                        </div>
                        <span class="name">Arashasghari</span> <i class="fa fa-circle offline"></i></a><span
                            class="clearfix"></span></li>
                    <li class="list-group-item"><a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-9.jpg" alt="">
                        </div>
                        <span class="name">Joshaustin</span> <i class="fa fa-circle offline"></i></a><span
                            class="clearfix"></span></li>
                    <li class="list-group-item"><a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-10.jpg" alt="">
                        </div>
                        <span class="name">Sortino</span> <i class="fa fa-circle offline"></i></a><span class="clearfix">
                        </span></li>
                </ul>
            </div>
        </div>
        <!-- /Right-bar -->
        <!-- MODAL -->
        <div id="dialog" class="modal-block mfp-hide">
            <section class="panel panel-info panel-color">
                    <header class="panel-heading">
                        <h2 class="panel-title">Are you sure?</h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-text">
                                <p>Are you sure that you want to delete this row?</p>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-md-12 text-right">
                                <button id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Confirm</button>
                                <button id="dialogCancel" class="btn btn-default waves-effect">Cancel</button>
                            </div>
                        </div>
                    </div>
                    
                </section>
        </div>
        <!-- end Modal -->
    </div>
    <!-- END wrapper -->
    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>
    <!-- Examples -->
    <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
    <script src="assets/plugins/tiny-editable/numeric-input-example.js"></script>
    <script src="assets/pages/datatables.editable.init.js"></script>
    <script>
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
			
    </script>
	
			<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-74180346-1', 'auto');
		  ga('send', 'pageview');

		</script>

		<!-- //Google Analytics -->		
</body>
</html>