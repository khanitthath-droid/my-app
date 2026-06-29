<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัตินักศึกษา - ระบบสารสนเทศ</title>
    <!-- Import Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Sarabun', 'Segoe UI', Tahoma, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 450px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        .header {
            background: linear-gradient(135deg, #1a365d, #2b6cb0);
            color: white;
            text-align: center;
            padding: 35px 20px;
            border-bottom: 4px solid #3182ce;
        }

        .avatar-container {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto 15px auto;
        }

        .avatar-placeholder {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #ffffff;
            border: 4px solid rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            color: #1a365d;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .header h1 {
            font-size: 22px;
            font-weight: 600;
        }

        .header p {
            font-size: 13px;
            color: #ebf8ff;
            margin-top: 5px;
            font-weight: 300;
        }

        .content {
            padding: 30px 25px;
        }

        .info-list {
            margin-bottom: 25px;
        }

        .info-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 15px;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 15px;
        }

        .info-label {
            color: #64748b;
            font-weight: 500;
        }

        .info-value {
            color: #0f172a;
            font-weight: 600;
            text-align: right;
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            background: #2563eb;
            color: white;
            padding: 11px 25px;
            border-radius: 6px;
            transition: 0.3s;
            font-weight: 600;
            font-size: 14px;
            box-shadow: 0 4px 10px rgba(37, 99, 235, 0.2);
            width: 100%;
        }

        .btn:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        footer {
            background: #f1f5f9;
            text-align: center;
            padding: 15px;
            color: #64748b;
            font-size: 12px;
            border-top: 1px solid #e2e8f0;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="header">
            <div class="avatar-container">
                <div class="avatar-placeholder">🎓</div>
            </div>
            <h1>ประวัตินักศึกษา</h1>
            <p>Student Profile Details</p>
        </div>

        <div class="content">
            <div class="info-list">
                <div class="info-item">
                    <span class="info-label">รหัสนักศึกษา</span>
                    <span class="info-value">{{ $id }}</span>
                </div>
                
                <div class="info-item">
                    <span class="info-label">ชื่อ - นามสกุล</span>
                    <span class="info-value">ขนิษฐา เทือกพุทรา</span>
                </div>

                <div class="info-item">
                    <span class="info-label">สาขาวิชา</span>
                    <span class="info-value">ระบบสารสนเทศและนวัตกรรมธุรกิจดิจิทัล</span>
                </div>

                <div class="info-item">
                    <span class="info-label">ระดับชั้นปี</span>
                    <span class="info-value">ชั้นปีที่ 4</span>
                </div>
            </div>

            <div class="btn-container">
                <a href="/" class="btn">🏠 กลับสู่หน้าแรก</a>
            </div>
        </div>

        <footer>
            © 2026 Student Profile | Faculty of Information Technology
        </footer>
    </div>

</body>
</html>