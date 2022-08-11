@extends('layout.main')

@section('sidebar')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Sidebar -->
       @include('sidebar')
        <!-- End of Sidebar -->
        @endsection
        
        @section('buttonsidebar')
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
        @endsection
        
        {{-- container --}}
        @Section('container')
   

<!-- Content Row -->
@include('partials.navbarcolap')
<div class="row mt-5 justify-content-center" >
  


<div class="row mx-1 justify-content-center" >
<div class="col-5 my-1"> 
    <form class="d-flex py-5">
        <input type="text" class="form-control" placeholder="Cari.." name="search" value="{{ request('search') }}" autofocus>
      <button class="btn btn-outline-light bg-primary" type="submit">Search</button>
    </form>
</div>
</div>
@foreach($tpqs as $tpq)
    <div class="col-md-4 mb-3 text-center ">
        <a class="text-dark" href="/tpqs/{{ $tpq->slug }}" style="text-decoration: none;">
            <img class="img-fluid"  src="https://source.unsplash.com/500x400?school" alt="{{ $tpq->name }}">
        </a>
       <h5><a class="text-dark text-center" href="/tpqs/{{ $tpq->slug }}" style="text-decoration: none;">{{ $tpq->name }}</a></h5>
        <small><p> <a href="/tpqs/{{ $tpq->slug }}" style="text-decoration: none;"> {{ $tpq->alamat }} </a><p></small>
        
   
        <hr class="featurette-divider">


    </div>
    @endforeach
    <div class="col-lg-5 mb-1 justify-content-center">
        {{ $tpqs->links() }}
     </div>
</div>

<script>
    // BAR CHARTS
    const labels = ["Karimun", "Meral", "Tebing", "Meral Barat", "Kundur", "Kundur Barat", "Kundur Utara", "Buru", "Belat", "Ungar", "Durai", "Moro"]

    const data = {
        labels: labels,
        datasets: [{
            label: "Jumlah Form",
            lineTension: 1,
            backgroundColor: "#0275d8",
            borderColor: "#0275d8",
            pointRadius: 3,
            pointBackgroundColor: "rgba(78, 115, 223, 1)",
            pointBorderColor: "#0275d8",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 1,
            data: [10,20,30,40,50,60,70,80,90,100,110]
        }]
    };



    const config = {
        type: 'bar',
        data: data,
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: true
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                        userCallback(label, index, labels) {
                            // only show if whole number
                            if (Math.floor(label) === label) {
                                return label;
                            }
                        },
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': $'(tooltipItem.yLabel);
                    }
                }
            }
        }
    };

    const myChart = new Chart(
        document.getElementById('formChart'),
        config
    );

    // PIE CHART
    const labelsPie = [
        'Approved Kabag',
        'Approved Sekretaris',
        'Approved Gudang',
        'Belum Approve Kabag',
    ];

    const dataPie = {
        labelsPie: ["Approved", "Approved Sekretaris", "Approved Gudang", "Belum Approve Kabag"],
        datasets: [{
            data: [10,20,30,40],
            backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e'],
            hoverBackgroundColor: ['#2e59d9', '#1cc88a', '#36b9cc', '#f6c23e'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],


        legend: {
            display: false
        },
        cutoutPercentage: 80,
    }


    const configLine = {
        type: 'doughnut',
        data: dataPie,
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        }
    };

    const PieChart = new Chart(
        document.getElementById('PieChart'),
        configLine
    );
</script>

@endsection
        {{-- end container --}}