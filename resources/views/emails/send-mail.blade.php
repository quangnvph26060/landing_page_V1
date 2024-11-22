<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Submission Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: #2196f3;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .email-body {
            padding: 20px;
            color: #333;
        }
        .email-body h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #333;
        }
        .email-body p {
            font-size: 16px;
            margin: 5px 0;
        }
        .email-body .field {
            font-weight: bold;
            color: #2196f3;
        }
        .email-footer {
            background: #f4f4f9;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #888;
        }
        .email-footer a {
            color: #2196f3;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            New User Submission Received
        </div>
        <div class="email-body">
            <h3>Hello Admin,</h3>
            <p>You have received a new submission from a user. Here are the details:</p>
            <p><span class="field">Name:</span> {{ $data->name }}</p>
            <p><span class="field">Email:</span> {{ $data->email }}</p>
            <p><span class="field">Phone:</span> {{ $data->phone }}</p>
            <p><span class="field">Address:</span> {{ $data->address }}</p>
            <p><span class="field">Note:</span> {{ $data->note }}</p>
            <p><span class="field">Submitted At:</span> {{ \Carbon\Carbon::parse($data->created_at)->format('d M, Y h:i A') }}</p>
        </div>
        <div class="email-footer">
            <p>For further details, please log in to your admin dashboard.</p>
            <p>Need help? Contact us at <a href="mailto:support@example.com">support@example.com</a>.</p>
        </div>
    </div>
</body>
</html>
