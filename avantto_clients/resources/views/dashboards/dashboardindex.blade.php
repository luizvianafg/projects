@extends('template.master')

@section('main_title')
    Dashboard
@endsection

@section('main')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\ClientModel::count() }}</h3>
                            <p>Novos Leads</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="/clientindex" class="small-box-footer">Mais informações <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ \App\Models\PlaneModel::count() }}</h3>
                            <p>Novas Aeronaves</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="/planeindex" class="small-box-footer">Mais informações <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
