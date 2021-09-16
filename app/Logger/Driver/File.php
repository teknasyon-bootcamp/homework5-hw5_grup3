<<<<<<< HEAD
<?php

namespace App\Logger\Driver;

class File implements LogDriverInterface
{
    protected string $logFile;

    public function __construct(string $logFile)
    {
        $this->logFile = $logFile;
    }

    protected function setLogFile(string $logFile): void
    {
        $this->logFile = $logFile;
    }

    public function setUp(): void
    {
        // TODO: Implement setUp() method.
    }

    public function log(string $message, int $level): void
    {
        // TODO: Implement log() method.
    }

    public function tearDown(): void
    {
        // TODO: Implement tearDown() method.
    }
=======
<?php

namespace App\Logger\Driver;

class File implements LogDriverInterface
{
    protected string $logFile; //log dosyası adı
    protected string $timeZone; // zaman dilimi
    protected string $ip; //client ip
    protected string $fileAdress; //Dosya dizini adreslerinin stoklandığı değişken

    public function __construct(string $logFile)
    {
        if (!is_dir('Logs')){ //Logs adında klasör yoksa oluştur
            mkdir('Logs');
        }
        $this->logFile = date('Y-m-d').".log"; //Logfile'ın default ismi o günün ismi olacak.
    }

    protected function setLogFile(string $logFile): void
    {
        $this->logFile = $logFile;
    }

    public function setUp(): void
    {
        $this-> timeZone = date_default_timezone_set('Turkey'); //Timezone Türkiye olarak belirledik.
        $this->ip = $_SERVER['REMOTE_ADDR']; //client ip
        $this->fileAdress = fopen('Logs'."/".$this->logFile,'a'); //A etiketi ile log dosyası adında bir log dosyası yoksa oluştur, varsa devamına ekle diyoruz.
    }

    public function log(string $message, int $level): void
    {
        fwrite($this->fileAdress,"[".$this->ip." ".date("Y-m-d H:i:s")."]:".$message." ($level)".PHP_EOL); //Log dosyamıza [ip gün saat]: log formatında log yazılıyor, sonuna da level ekleniyor.
    }

    public function tearDown(): void
    {
        fclose($this->fileAdress); //Log dosyamızı kapıyoruz.
    }
>>>>>>> b086dbe8222bbdf99e7c3096262a2fb851c9b621
}