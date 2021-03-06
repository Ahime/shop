@extends('dashboard/layouts/master')
@section('container')
<div class="contenair">
	<section class="content-header">
          <h1>
            Listes des utilisateurs
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>
        
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      	<th>Numéro</th>
                        <th>Nom & Prénoms</th>
                        <th>Sexe</th>
                        <th>Date de Naissance</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Opération</th>
                      </tr>
                    </thead>
                    <tbody> 
                       @foreach($users as $users)
                        <tr>
                          <td>{{ $users->id }}</td>
                          <td>{{ $users->username }}</td>
                          <td>{{ $users->sex }}</td>
                          <td>{{ $users->birthday }}</td>
                          <td>{{ $users->email }}</td>
                          <td>{{ $users->phone }}</td>
                          <td><a href="">Supprimer</a> | <a href="">Bloquer</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Numéro</th>
                        <th>Nom & Prénoms</th>
                        <th>Sexe</th>
                        <th>Date de Naissance</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Opération</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
</div>


@stop