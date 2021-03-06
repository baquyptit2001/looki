<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cảm ơn đã mua hàng</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <style>
        body {
            background: grey;
            margin-top: 120px;
            margin-bottom: 120px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row p-5">
                            <div class="col-md-6">
                                <a href="{{ route('home') }}"><img src="https://drive.google.com/thumbnail?id=1KQ2o6HalQKq_ZXLMJadDzCRds3U-t-_3" alt="logo"/></a>
                            </div>

                            <div class="col-md-6 text-right">
                                <p class="font-weight-bold mb-1">Invoice #{{ $data['order']->id }}</p>
                                <p class="text-muted">Due to: {{ date('M d, Y H:i:s', strtotime('+7 hours',strtotime($data['order']->created_at))) }}</p>
                            </div>
                        </div>
                        <hr class="my-5">
                        <div class="row pb-5 p-5">
                            <div class="col-md-6">
                                <p class="font-weight-bold mb-4">Client Information</p>
                                <p class="mb-1">{{ $data['order']->cus_name }}</p>
                                <p class="mb-1">{{ $data['order']->address }}</p>
                                <p class="mb-1">{{ $data['order']->phone }}</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="font-weight-bold mb-4">Payment Details</p>
                                <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                                <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                                <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                                <p class="mb-1"><span class="text-muted">Name: </span> {{ $data['order']->cus_name }} </p>
                            </div>
                        </div>

                        <div class="row p-5">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['detail'] as $item)
                                            <tr>
                                                <td>{{ $item->product->id }}</td>
                                                <td>{{ $item->product->name }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>${{ $item->price }}</td>
                                                <td>${{ $item->price * $item->quantity }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Grand Total</div>
                                <div class="h2 font-weight-light">${{ number_format($data['order']->total_price) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-light mt-5 mb-5 text-center small">by : <a class="text-light" target="_blank"
                href="https://www.facebook.com/bquyptit2001/">Quý_pr0_VjP_N01</a></div>

    </div>
</body>

</html>
