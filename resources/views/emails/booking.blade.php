<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booked</title>
    <style>
        body, p, h3 {
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .footer p {
            font-size: 0.8em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Appointment Successfully Booked</h2>
        </div>
        <div class="content">
            @if($content['for_admin'])
                {{$content['name']}}
                <p>Booked a appointment can you please confirm that</p>
            @else
            <p>Dear {{$content['name']}},</p>
            <p>We are pleased to inform you that your appointment has been successfully booked.</p>
            @endif
            <p>Appointment Details:</p>
            <ul>
                <li><strong>Date:</strong> {{ date('d M,y',strtotime($content['appointment_date'])) }}</li>
                <li><strong>Time:</strong> {{ date('H:i a',strtotime($content['appointment_date']))  }}</li>
            </ul>
            @if($content['for_admin'])
                {{ $content['message'] }}
            @else
                <p>Wait for Confirmation .</p>
                <p>If you have any questions or need to make changes, please contact us at your earliest convenience.</p>
                <p>Thank you for choosing us. We look forward to meeting with you!</p>
            @endif
        </div>
    </div>
</body>
</html>
