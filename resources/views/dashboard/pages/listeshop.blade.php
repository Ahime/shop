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
                        <th>Nom des boutiques</th>
                        <th>Pays | Ville</th>
                        <th>Domaine intervention</th>
                        <th>Adresse</th>
                        <th>Propriétaire</th>
                        <th>date de création</th>
                        <th>Opération</th>
                      </tr>
                    </thead>
                    <tbody> 
                       @foreach($shops as $shops)
                        <tr>
                          <td>{{ $shops->id }}</td>
                          <td>{{ $shops->shopName }}</td>
                          <td>{{ $shops->country }} | {{ $shops->town }}</td>
                          <td>{{ $shops->domain }}</td>
                          <td>{{ $shops->adress }}</td>
                          <td>Nom boutiquier</td>
                          <td>{{ $shops->created_at }}</td>
                          <td><a href="">Supprimer</a> | <a href="">Bloquer</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Numéro</th>
                        <th>Nom des boutiques</th>
                        <th>Pays | Ville</th>
                        <th>Domaine intervention</th>
                        <th>Adresse</th>
                        <th>Propriétaire</th>
                        <th>date de création</th>
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