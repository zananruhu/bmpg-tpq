@extends('layout.main')
@include('partials.navbar')
@section('container')

<div class="container mt-4">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            
         <h2 class="text-dark text-center mb-2">{{ $project->title }}</h2>
            <small><p>Diposting oleh : <a href="" style="text-decoration: none;"> {{ $project->author->name }}</a> di Kategori <a href="/categories/{{ $project->category->slug }}" style="text-decoration: none;">{{ $project->category->name }}</a> {{ $project->created_at->diffForHumans() }}</p></small> 
                <img class="img-fluid" src="https://source.unsplash.com/1200x400?hd" alt="{{ $project->author->name}}" >
                <article class="my-3 fs-4">
            {!! $project->body !!}
           </article>
        
            <a href="/projects" class="d-block mt-5">Kembali</a>
        </div>
    </div>
   
    
</div>


<!-- End of Content Wrapper -->


<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->


<!-- Bootstrap core JavaScript-->
<link href="../about/css/styles.css" rel="stylesheet" />
    <link href="../template/css/sb-admin-2.min.css" rel="stylesheet">

<script src="../template/vendor/jquery/jquery.min.js"></script>
<script src="../template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../template/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../template/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../template/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="../template/js/demo/chart-area-demo.js"></script>
<script src="../template/js/demo/chart-pie-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../about/js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="../kegiatan/dist/jquery/jquery.min.js"></script>
<script src="../kegiatan/dist/popper/popper.min.js"></script>
<script src="../kegiatan/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="../kegiatan/js/main.min.js"></script>
@endsection
</body>

</html>
    




            



