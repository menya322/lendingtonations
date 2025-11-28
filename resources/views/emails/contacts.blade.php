<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px 20px;
        }
        .field {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eeeeee;
        }
        .field:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #007bff;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
            display: block;
        }
        .value {
            color: #333;
            font-size: 16px;
            line-height: 1.6;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #6c757d;
        }
        .message-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>📧 New Contact Form Submission</h2>
            <p style="margin: 5px 0 0 0; font-size: 14px;">Lending Nations Website</p>
        </div>
        
        <div class="content">
            <div class="field">
                <span class="label">👤 Name</span>
                <div class="value">{{ $data['name'] }}</div>
            </div>
            
            <div class="field">
                <span class="label">📧 Email Address</span>
                <div class="value">
                    <a href="mailto:{{ $data['email'] }}" style="color: #007bff; text-decoration: none;">
                        {{ $data['email'] }}
                    </a>
                </div>
            </div>
            
            @if(!empty($data['phone']))
            <div class="field">
                <span class="label">📱 Phone Number</span>
                <div class="value">
                    <a href="tel:{{ $data['phone'] }}" style="color: #007bff; text-decoration: none;">
                        {{ $data['phone'] }}
                    </a>
                </div>
            </div>
            @endif
            
            @if(!empty($data['project']))
            <div class="field">
                <span class="label">📁 Project</span>
                <div class="value">{{ $data['project'] }}</div>
            </div>
            @endif
            
            <div class="field">
                <span class="label">📌 Subject</span>
                <div class="value">{{ $data['subject'] }}</div>
            </div>
            
            <div class="field">
                <span class="label">💬 Message</span>
                <div class="message-box">{{ $data['message'] }}</div>
            </div>
        </div>
        
        <div class="footer">
            <p>This email was sent from the Lending Nations contact form</p>
            <p>Received on {{ date('F j, Y \a\t g:i A') }}</p>
        </div>
    </div>
</body>
</html>