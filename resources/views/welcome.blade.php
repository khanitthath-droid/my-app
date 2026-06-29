<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบข้อมูลนักศึกษาและบทความ</title>
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

        .container {
            width: 100%;
            max-width: 800px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }

        .header {
            background: #1a365d;
            color: #ffffff;
            padding: 40px 30px;
            text-align: center;
            border-bottom: 4px solid #2b6cb0;
        }

        .header h1 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }

        .header p {
            font-size: 16px;
            color: #cbd5e1;
            font-weight: 300;
        }

        .content {
            padding: 40px 30px;
            text-align: center;
        }

        .welcome-text {
            font-size: 16px;
            color: #475569;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .menu-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 25px 20px;
            text-decoration: none;
            color: #1e293b;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .menu-card:hover {
            border-color: #3b82f6;
            background: #eff6ff;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.1);
        }

        .menu-icon {
            font-size: 32px;
        }

        .menu-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e3a8a;
        }

        .menu-desc {
            font-size: 13px;
            color: #64748b;
            text-align: center;
            line-height: 1.5;
        }

        footer {
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

    <div class="container">
        <div class="header">
            <h1>🌐 ระบบสารสนเทศพัฒนาเว็บบอร์ด</h1>
            <p>Student Information System & Knowledge Portal</p>
        </div>

        <div class="content">
            <p class="welcome-text">
                ยินดีต้อนรับเข้าสู่ระบบจัดการและเผยแพร่ข้อมูลอย่างเป็นทางการ 
                กรุณาเลือกเมนูด้านล่างเพื่อเข้าชมข้อมูลประวัตินักศึกษา บทความวิชาการ และข้อมูลแนะนำองค์กรของเรา
            </p>

            <div class="menu-grid">
                <a href="/about" class="menu-card">
                    <span class="menu-icon">📝</span>
                    <span class="menu-title">บทความทั้งหมด</span>
                    <span class="menu-desc">อ่านข่าวสาร เทคโนโลยี และบทความที่เป็นประโยชน์</span>
                </a>

                <a href="/blog" class="menu-card">
                    <span class="menu-icon">🏢</span>
                    <span class="menu-title">เกี่ยวกับเรา</span>
                    <span class="menu-desc">ทำความรู้จักเป้าหมายและโครงสร้างผู้จัดทำเว็บไซต์</span>
                </a>

                <a href="/student/68152310057-5" class="menu-card">
                    <span class="menu-icon">🎓</span>
                    <span class="menu-title">ประวัตินักศึกษา</span>
                    <span class="menu-desc">ดูข้อมูลประวัติส่วนตัวและรายละเอียดการศึกษา</span>
                </a>
            </div>
        </div>

        <footer>
            © 2026 Laravel Workshop | พัฒนาด้วย Laravel Framework
        </footer>
    </div>

</body>
</html>