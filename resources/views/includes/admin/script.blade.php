<script src="{{url('template/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    $('#menu-toggle').on('click',function(e){
    e.preventDefault();
    $('#wrapper').toggleClass('toggled');
    })
</script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>