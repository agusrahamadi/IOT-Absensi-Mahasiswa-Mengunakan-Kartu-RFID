//WiFi
#include<KRwifi.h>
char* ssid = "arduino";
char* pass = "123456789";
char* server = "adkomback.com";
String path;

//RFID
byte sda = 10;
byte rst = 9;
#include<KRrfid.h>

//LCD
#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27, 16, 2);

//MP3
#include <DFPlayer_Mini_Mp3.h>

void setup() {
  Serial.begin(9600);
  setWifi(ssid, pass);      //WiFi
  rfidBegin();              //RFID
  mp3_set_serial (Serial);  //MP3
  delay(10);
  lcd.begin();              //lCD
  lcd.setCursor(0, 0);
  lcd.print("ABSENSI STIMIK");
  lcd.setCursor(0, 1);
  lcd.print("BANJARBARU");
}

void loop() {
  getTAG();
  if (TAG != "") {
    lcd.clear();
    lcd.setCursor(0, 0);
    lcd.print("Memproses");
    lcd.setCursor(0, 1);
    lcd.print("Tapping...");
    Serial.print("TAG :");
    Serial.println(TAG);

    path = String() + "/project/absenmhs/input.php?tag=" + TAG;
    httpGet(server, path, 80);
    Serial.print("Respon: ");
    Serial.println(getData);

    if (getData != "Belum Terdaftar") {
      if (getData == "Dosen Belum Hadir") {
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("ABSENSI STIMIK");
        lcd.setCursor(0, 1);
        lcd.print("Dos. Belum Hadir");

        delay(2000);

        mp3_set_volume (30);
        delay(10);
        mp3_play ();
        delay(10);
        mp3_play (4);
        delay(10);

        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("ABSENSI STIMIK");
        lcd.setCursor(0, 1);
        lcd.print("Connected");
      }
      else if (getData == "Tidak Ada Jadwal") {
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("ABSENSI STIMIK");
        lcd.setCursor(0, 1);
        lcd.print("Tidak Ada Jadwal");

        delay(2000);

        mp3_set_volume (30);
        delay(10);
        mp3_play ();
        delay(10);
        mp3_play (3);
        delay(10);

        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("ABSENSI STIMIK");
        lcd.setCursor(0, 1);
        lcd.print("Connected");
      }
      else if (getData == "Belum Ikut Jadwal") {
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("ABSENSI STIMIK");
        lcd.setCursor(0, 1);
        lcd.print("Bel. Ikut Jadwal");

        delay(2000);

        mp3_set_volume (30);
        delay(10);
        mp3_play ();
        delay(10);
        mp3_play (3);
        delay(10);

        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("ABSENSI STIMIK");
        lcd.setCursor(0, 1);
        lcd.print("Connected");
      }
      else {
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("ABSENSI STIMIK");
        lcd.setCursor(0, 1);
        lcd.print(getData);

        delay(2000);

        mp3_set_volume (30);
        delay(10);
        mp3_play ();
        delay(10);
        mp3_play (1);
        delay(10);

        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("ABSENSI STIMIK");
        lcd.setCursor(0, 1);
        lcd.print("Connected");
      }
    }

    if (getData == "Belum Terdaftar") {
      lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("ABSENSI STIMIK");
      lcd.setCursor(0, 1);
      lcd.print("Belum Terdaftar");

      delay(2000);

      mp3_set_volume (30);
      delay(10);
      mp3_play ();
      delay(10);
      mp3_play (2);
      delay(10);

      lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("ABSENSI STIMIK");
      lcd.setCursor(0, 1);
      lcd.print("BANJARBARU");
    }

    TAG = "";
  }


}
