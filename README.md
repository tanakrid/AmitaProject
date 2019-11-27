# AmitaProject
  Amita project เป็นเว็บ platform สำหรับการซื้อขายแลกเปลี่ยนเอกสารการเรียนที่เราเรียกกันว่า "ชีท" เพื่อให้ผู้ที่มีความสนใจที่จะแบ่งปันความรู้ผ่านสรุปชีทให้กับผู้ที่ต้องการ
  ซึ่งในภายในเว็บไซต์นี้จะให้บริการผู้ใช้ทั้งการประกาศวางขายชีทให้ผู้สนใจมาเลือกซื้อไปอ่านกันได้ การซื้อชีทโดยจะได้รับเป็นไฟล์เอกสารให้สามารถโหลดไปอ่านได้
  
  ### การติดตั้งระบบ
  1. git clone https://github.com/tanakrid/AmitaProject.git
  2. เปิดใช้ terminal ใน  laragon
  3. เข้าไปใน AmitaProject folder
  4. composer install
  5. สร้างไฟล์ .env โดยให้ copy ข้อมูลจาก env.example มา
  6. สำหรับส่วนของ database เลือกใช้เป็น mysql ที่ให้มากับ laragon โดยเริ่มจาก
    6.1 สร้าง database ชื่อ amitaproject แล้วเซ็ตค่า collation เป็น utf8mb64_unicode_ci
    6.2 ไปที่ manage user authentication and privileges แล้วให้ account ที่ต้องการ allow access project รวมถึง เซ็ต password
  7. แก้ไขค่าใน .env
     APP_NAME=Amita
     สำหรับส่วนของ database 
     DB_DATABASE=amitaproject
     DB_USERNAME=<user ที่ใช้ใน mysql>
     DB_PASSWORD=<password ที่ใช้ใน mysql>
  8. php artisan key:generate
  9. php artisan migrate
 10. php artisan db:seed
 
  ### การทดสอบ
  ได้มีการเตรียม account สำหรับทดสอบคือ 
  
    ADMINTRATOR โดยมี email: admin@apollo11.com, password: admin
  
  ภายในเว็บนี้การกำหนดประเภท user ไว้เพียงชนิดเดียว และ account ADMINTRATOR เป็น user ที่ได้มีการเตรียมข้อมูลให้เป็นผู้ที่วางขายชีทเป็นจำนวนกว่า 20 ชุด
    
