# bangkolo 
Bangkolo App merupakan aplikasi yang berfungsi untuk melakukan identifikasi potensi   celah   keamanan   pada   sistem   transaksi   elektronik   yang   dikembangkan menggunakan   metode   hybrid apps   dengan   memanfaatkan   Nmap Scripting Engine.   Bangkolo   App   memiliki   fitur   melakukan   penmindaian   dengan   tujuan mengidentifikasi   potensi   celah   keamanan.   Hasil   pemindaian   tersebut   berupa laporan   yang   bersifat  helicopter view.  Bangkolo   memiliki   lisensi   yang   selaras dengan kode sumber terbuka, yaitu MIT

**suport**
+ LINUX

**Persaratan Pemasangan**
+ nmap
+ PHP
+ node.js
+ electronjs
+ electron-packager

**Memasang Persaratan**
+ sudo apt install nmap (ubuntu/debian)
+ sudo apt install php- (ubuntu/debian)
+ [node.js](https://linuxize.com/post/how-to-install-node-js-on-ubuntu-18.04/)
+ npm install electron -g
+ npm install electron-packager -g

**Membuat Hybrid Apps**
+ git clone https://github.com/orangmiliter/bangkolo.git
+ cd bangkolo
+ npm install
+ npm start (testing)
+ electron-packager ./ "bangkolo hybrid apps" --platform=linux --arch=x64
+ ./bangkolo

**tulisan**
[bangkolo: Aplikasi Vulnerability Indentifikasi Berbasis Hybrid Apps](http://ejournal.uin-suka.ac.id/saintek/cybersecurity/article/view/2027?fbclid=IwAR2_2NUj3EXkQVdlgTGwKBlHHub0Vw0cJKWWWnBOvsLbpcN1d9xbrMbK0ag)
