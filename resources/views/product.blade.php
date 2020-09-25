<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container mt-5">
    <h2 class="mb-4">Laravel 7 Yajra Datatables Example</h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Id Invoice</th>
                <th>Id Customer</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kota</th>
                <th>Provinsi</th>
                <th>Kode Pos</th>
                <th>latitude</th>
                <th>longitude</th>
                <th>Id Agent</th>
                <th>Agent Name</th>
                <th>Payment method</th>
                <th>Payment link</th>
                <th>Payment date</th>
                <th>Buy by</th>
                <th>Payment total</th>
                <th>Coupon Id</th>
                <th>Payment discount code</th>
                <th>Payment discount</th>
                <th>Payment final</th>
                <th>Order weight</th>
                <th>Order distance</th>
                <th>Delivery status</th>
                <th>Delivery fee</th>
                <th>Delivery track</th>
                <th>Delivery time</th>
                <th>Delivery date</th>
                <th>Order time</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('order-list') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'invoice_id', name: 'invoice_id'},
            {data: 'customer_id', name: 'customer_id'},
            {data: 'name', name: 'name'},
            {data: 'phone', name: 'phone'},
            {data: 'address', name: 'address'},
            {data: 'kelurahan', name: 'kelurahan'},
            {data: 'kecamatan', name: 'kecamatan'},
            {data: 'kota', name: 'kota'},
            {data: 'provinsi', name: 'provinsi'},
            {data: 'kode_pos', name: 'kode_pos'},
            {data: 'latitude', name: 'latitude'},
            {data: 'longitude', name: 'longitude'},
            {data: 'agent_id', name: 'agent_id'},
            {data: 'agent_name', name: 'agent_name'},
            {data: 'payment_method', name: 'payment_method'},
            {data: 'payment_link', name: 'payment_link'},
            {data: 'payment_date', name: 'payment_date'},
            {data: 'buy_by', name: 'buy_by'},
            {data: 'payment_total', name: 'payment_total'},
            {data: 'coupon_id', name: 'coupon_id'},
            {data: 'payment_discount_code', name: 'payment_discount_code'},
            {data: 'payment_discount', name: 'payment_discount'},
            {data: 'payment_final', name: 'payment_final'},
            {data: 'order_weight', name: 'order_weight'},
            {data: 'order_distance', name: 'order_distance'},
            {data: 'delivery_status', name: 'delivery_status'},
            {data: 'delivery_fee', name: 'delivery_fee'},
            {data: 'delivery_track', name: 'delivery_track'},
            {data: 'delivery_time', name: 'delivery_time'},
            {data: 'order_time', name: 'order_time'},
            {data: 'status', name: 'status'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
</html>