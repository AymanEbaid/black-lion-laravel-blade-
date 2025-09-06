<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رسالة جديدة</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }

        .header {
            background: #bbbbbb;
            color: #000000;
            padding: 15px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            color: #555;
            font-size: 14px;
        }

        .label {
            font-weight: bold;
        }

        .divider {
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>
                Black Lion</h1>
        </div>
        <div class="content">
            <p><span class="label">الاسم:</span> {{ $contact->name }}</p>
            <p><span class="label">الإيميل:</span> {{ $contact->email }}</p>
            <p><span class="label">الموضوع:</span> {{ $contact->subject }}</p>
            <div class="divider"></div>
            <p><span class="label">الرسالة:</span><br>{{ $contact->message }}</p>
        </div>
        <div class="footer">
            Thanks,<br>
            <strong>Black Lion</strong>
        </div>
    </div>
</body>

</html>
