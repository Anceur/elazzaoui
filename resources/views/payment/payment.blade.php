<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الدفع عبر البطاقة الذهبية أو CIB</title>

    <style>
        body {
            background-color: #2c3338;
            color: #606468;
            font-family: 'Open Sans', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .payment-container {
            background-color: #363b41;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #eee;
            margin-bottom: 1.5rem;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: none;
            background-color: #3b4148;
            color: #eee;
        }

        .input-field:focus {
            background-color: #434a52;
        }

        .pay-button {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: none;
            background-color: #2ecc71;
            color: #eee;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
        }

        .pay-button:hover {
            background-color: #27ae60;
        }

        .error-message, .success-message {
            margin: 10px 0;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
        }

        .error-message {
            background-color: #e74c3c;
        }

        .success-message {
            background-color: #27ae60;
        }
    </style>
</head>

<body>
    <div class="payment-container">
        <h2>الدفع</h2>

        <!-- رسالة نجاح إذا كانت الفاتورة قد دُفعت -->
        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <!-- رسالة خطأ إذا حدث خطأ -->
        @if(session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif

        <form action="{{ route('createInvoice') }}" method="POST">
            @csrf
            <input type="text" name="amount" class="input-field" placeholder="المبلغ بالدينار الجزائري" required>
            <input type="text" name="description" class="input-field" placeholder="وصف الدفع" required>
            <button type="submit" class="pay-button">ادفع الآن</button>
        </form>
    </div>
</body>

</html>
