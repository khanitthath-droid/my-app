<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บทความทั้งหมด - ระบบสารสนเทศ</title>
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
            padding: 40px 20px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        h2 {
            text-align: center;
            color: #ffffff;
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #cbd5e1;
            margin-bottom: 40px;
            font-size: 16px;
            font-weight: 300;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .card {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            border: 1px solid #e2e8f0;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            border-color: #3b82f6;
        }

        .card-header {
            background: linear-gradient(135deg, #1a365d, #2b6cb0);
            color: white;
            padding: 30px;
            text-align: center;
            font-size: 40px;
        }

        .card-body {
            padding: 25px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .card-body h3 {
            color: #1a365d;
            margin-bottom: 12px;
            font-size: 20px;
            font-weight: 600;
        }

        .card-body p {
            color: #475569;
            line-height: 1.7;
            margin-bottom: 25px;
            font-size: 15px;
            flex-grow: 1;
            text-align: justify;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            background: #2563eb;
            color: white;
            padding: 10px 22px;
            border-radius: 6px;
            transition: 0.3s;
            font-size: 14px;
            font-weight: 500;
            text-align: center;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        .home-action {
            text-align: center;
            margin-top: 50px;
        }

        .btn-home {
            display: inline-block;
            background: #ffffff;
            color: #1a365d;
            padding: 12px 35px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: 0.3s;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-home:hover {
            background: #f8fafc;
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            margin-top: 50px;
            color: #cbd5e1;
            font-size: 13px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>📝 บทความสาระน่ารู้</h2>
        <p class="subtitle">
            คลังความรู้ ข้อมูลข่าวสาร และเทคโนโลยีสำหรับการพัฒนาระบบ
        </p>

        <div class="blog-grid">
            <div class="card">
                <div class="card-header">💻</div>
                <div class="card-body">
                    <h3>การพัฒนาเว็บไซต์</h3>
                    <p>
                        เรียนรู้โครงสร้างและพื้นฐาน HTML, CSS และ JavaScript สำหรับผู้เริ่มต้น 
                        พร้อมทั้งแนวทางการประยุกต์ใช้งานในฝั่ง Front-end อย่างยั่งยืน
                    </p>
                    <a href="#" class="btn">อ่านเพิ่มเติม</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">🤖</div>
                <div class="card-body">
                    <h3>เทคโนโลยี AI</h3>
                    <p>
                        อัปเดตความรู้เกี่ยวกับปัญญาประดิษฐ์ (AI) และชุดเครื่องมืออัจฉริยะต่าง ๆ 
                        ที่จะเข้ามาเสริมขีดความสามารถการทำธุรกิจในระบบดิจิทัลปัจจุบัน
                    </p>
                    <a href="#" class="btn">อ่านเพิ่มเติม</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">🚀</div>
                <div class="card-body">
                    <h3>Laravel Framework</h3>
                    <p>
                        เจาะลึกวิธีการพัฒนาเว็บแอปพลิเคชันด้วยเครื่องมือ Laravel ตั้งแต่การติดตั้ง 
                        การเชื่อมต่อฐานข้อมูล ตลอดจนการทำระบบความปลอดภัยที่ได้รับมาตรฐานสากล
                    </p>
                    <a href="#" class="btn">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </div>

        <div class="home-action">
            <a href="/" class="btn-home">🏠 กลับสู่หน้าแรก</a>
        </div>

        <footer>
            © 2026 My Website | Blog Page | Faculty of Information Technology
        </footer>
    </div>

</body>
</html>