<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 5px;
            font-size: 16px !important;
        }

        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .invoice-table {
            width: 100%;
            margin-top: 20px;
        }

        .invoice-table th, .invoice-table td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        .total-row {
            font-weight: bold;
        }

        .invoice-footer {
            margin-top: 30px;
            text-align: center;
        }

        .executive-details {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    {{-- <div class="container-fluid"> --}}
        <div class="row">
            <div class="col-md-12 invoice-header">
                <h2 class="" style="text-decoration: underline;">Green Home</h2>
                <h4 class="my-3" style="text-decoration: underline;">Money Receipt</h4>
            </div>
        </div>

        <div class="row my-4">
            <div class="com-md-6">
                Booking Id: {{ $booking->id }}
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-12">
                <table width="100%">
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <th>Executive User Details</th>
                                </tr>

                                <tr>
                                    <td>{{ $booking->executive->name }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $booking->executive->email }}</td>
                                </tr>

                                <tr>
                                    <td>{{ $booking->executive->phone }}</td>
                                </tr>

                            </table>
                        </td>

                        <td>
                            <table>
                                <tr>
                                    <th>Bill to</th>
                                </tr>

                                <tr>
                                    <td>{{ $booking->cus_name }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $booking->cus_father }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $booking->address }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-12">
                <h5>Money Receipt on {{ date('d M, Y', strtotime($booking->created_at)) }}</h5>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-12">
                <table border="1" cellpadding="0" cellpadding="5" class="" width="100%">
                    <thead>
                        <tr class="border-bottom" style="font-size: 14px;">
                            <th>Plot Number</th>
                            <th>Size</th>
                            <th>Type</th>
                            <th>Advance Payment</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr style="font-size: 14px;">
                            <td>{{ $booking->plot->plot_number }}</td>
                            <td>{{ $booking->plot->size }}</td>
                            <td>{{ $booking->plot->type }}</td>
                            <td>{{ $booking->advance_amount }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <table width="100%">
            <tr>
                <th style="width: 50%"></th>
                <td>
                    <table width="100%" border="1" cellpadding="0" cellpadding="5">
                        <tr class="border-top">
                            <td>Advance Payment</td>
                            <th style="width: 20%"></th>
                            <td style="text-align:right">{{ number_format($booking->advance_amount, 2) }}</td>
                        </tr>
                        <tr class="border-top">
                            <td>Total Amount</td>
                            <th style="width: 20%"></th>
                            <td style="text-align:right">{{ number_format($booking->total_amount, 2) }}</td>
                        </tr>
                        <tr class="border-top">
                            <th>Amount Due</th>
                            <th style="width: 20%"></th>
                            <td style="text-align:right">{{ number_format($booking->total_amount - $booking->advance_amount, 2) }}</td>
                        </tr>
                    </table>
                </td>

            </tr>
        </table>


        {{-- <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered invoice-table">
                    <tr>
                        <th>Customer Name</th>
                        <td>{{ $booking->cus_name }}</td>
                    </tr>
                    <tr>
                        <th>Father/Husband Name</th>
                        <td>{{ $booking->cus_father }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $booking->address }}</td>
                    </tr>
                    <tr>
                        <th>Total Amount</th>
                        <td>{{ $booking->total_amount }}</td>
                    </tr>
                    <tr>
                        <th>Advance Amount</th>
                        <td>{{ $booking->advance_amount }}</td>
                    </tr>
                    <tr>
                        <th>Plot Number</th>
                        <td>{{ $booking->plot->plot_number }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 total-row">
                <p>Total Amount: {{ $booking->total_amount }}</p>
                <p>Advance Amount: {{ $booking->advance_amount }}</p>
            </div>
        </div>
        <div class="row executive-details">
            <div class="col-md-12">
                <h4>Executive User Details</h4>
                <p><strong>Executive Name:</strong> {{ $booking->executive->name }}</p>
                <p><strong>Executive Email:</strong> {{ $booking->executive->email }}</p>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-12 invoice-footer">
                <p>Thank you for your business!</p>
            </div>
        </div>
    {{-- </div> --}}
</body>
</html>
