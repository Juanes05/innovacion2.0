<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Estados</title>

        <!-- ========== COMMON STYLES ========== -->
        @include('Admin.Layouts.head')
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            @include('Admin.Layouts.navbar')

            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                    <div class="left-sidebar bg-black-300 box-shadow">
                        <div class="sidebar-content">
                            <div class="user-info closed">
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                                <h6 class="title">admin</h6>
                                <small class="info">Innovación Financiera</small>
                            </div>
                  @include('Admin.Layouts.sidebar')
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Estados y Rangos</h2>
                                    <!-- <p class="sub-title">One stop solution for perfect admin dashboard!</p> -->
                                </div>
                                
                            </div>
                            <!-- /.row -->
                           
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <form method="GET" action="{{ url('admin/status') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                                        <span class="input-group-append">
                                                            <button class="btn btn-secondary" type="submit">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Código Usuario</th>
                                                            <th>Nombre Usuario</th>
                                                            <th>Estado</th>
                                                            <th>Rango</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Código Usuario</th>
                                                            <th>Nombre Usuario</th>
                                                            <th>Estado</th>
                                                            <th>Rango</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            @for ($i = 0 ; $i < $amount ; $i++)
                                    <td>{{$status[$i]->user_id}} </td>

                                    @if(isset($status[$i]->user->username))
                                    <td>{{$status[$i]->user->username}} </td>
                                    @endif
                                    <td>{{ $status[$i]->state }}</td>
                                    @if(isset($status[$i]->Range->range))
                                    <td>{{$status[$i]->Range->range}} </td>
                                    @else
                                    <td>Sin Rango </td>
                                    @endif
                                                            
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-default">Opciones</button>
                                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span class="caret"></span>
                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li>

                                                                            <a href="{{ url('admin/status/' . $status[$i]->user_id . '/edit') }}" title="Edit User">Editar</a>

                                                                        </li>
                                                                      
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endfor
                                                    </tbody>
                                                </table>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">

                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>


                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->


                                </div>
                                <!-- /.row -->


                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        @include('Admin.Layouts.scripts')


        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->


        <script>


        
             
            
             
            $("#status").last().addClass("active");
             
            
             
            
                      </script>


    </body>
</html>
