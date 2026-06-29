<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา - ระบบสารสนเทศ</title>
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
            max-width: 700px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }

        .header {
            background: #1a365d;
            color: white;
            text-align: center;
            padding: 35px 25px;
            border-bottom: 4px solid #2b6cb0;
        }

        .header h1 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .header p {
            font-size: 14px;
            color: #cbd5e1;
            font-weight: 300;
        }

        .content {
            padding: 40px;
            color: #334155;
            line-height: 1.8;
            font-size: 16px;
        }

        .content p {
            margin-bottom: 30px;
            text-align: justify;
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            background: #2563eb;
            color: white;
            padding: 12px 30px;
            border-radius: 6px;
            transition: 0.3s;
            font-weight: 600;
            font-size: 15px;
            box-shadow: 0 4px 10px rgba(37, 99, 235, 0.2);
        }

        .btn:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        .footer {
            background: #f1f5f9;
            text-align: center;
            padding: 20px;
            color: #64748b;
            font-size: 13px;
            border-top: 1px solid #e2e8f0;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="header">
            <h1>🏢 เกี่ยวกับเรา</h1>
            <p>About Us & Project Information</p>
        </div>

        <div class="content">
            <p>
                เว็บไซต์นี้จัดทำขึ้นและพัฒนาโดย <strong>นางสาวขนิษฐา เทือกพุทรา</strong> นักศึกษาชั้นปีที่ 4 สาขาวิชาระบบสารสนเทศและนวัตกรรมธุรกิจดิจิทัล เพื่อใช้เป็นโครงการต้นแบบประกอบการศึกษาและฝึกฝนการพัฒนาเว็บแอปพลิเคชันด้วย <strong>Laravel Framework</strong> โดยมุ่งเน้นกระบวนการวางโครงสร้างฐานข้อมูลที่มีประสิทธิภาพ และการออกแบบหน้าจอผู้ใช้งานที่เข้าใจง่าย เป็นระเบียบเรียบร้อย และเป็นทางการ
            </p>

            <div class="btn-container">
                <a href="/" class="btn">🏠 กลับสู่หน้าแรก</a>
            </div>
        </div>

        <div class="footer">
            © 2026 Laravel Workshop | Faculty of Information Technology
        </div>
    </div>

</body>
</html>