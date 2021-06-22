        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    {{-- <p>2021 &copy; Mazer</p> --}}
                </div>
                <div class="float-end">
                    {{-- <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <ahref="http://ahmadsaugi.com">A. Saugi</a></p> --}}
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{ URL::asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="{{asset('/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{asset('/vendor/sortable-js/jquery.sortable.js') }}"></script>
<script src="{{ asset('/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.13.0/Sortable.min.js"></script>

<script src="{{ asset('js/admin/sidebar.js') }}"></script>
<script src="{{ asset('js/admin/datatable.js') }}"></script>

<!--  Dashboard -->
<script src="{{asset('/vendor/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('js/admin/dashboard.js') }}"></script>
<script src="{{ asset('js/admin/main.js') }}"></script>

<!-- Components -->
<!-- Search List -->
<script src="{{ asset('js/components/search-list.js') }}"></script>
</body>
</html>