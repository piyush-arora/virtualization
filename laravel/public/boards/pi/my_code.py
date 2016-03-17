import sys
sys.stderr = open('/var/www/laravel/public/boards/pi/errorlog.txt', 'w')
import RPi.GPIO as GPIO
import time


ledPin = 23

GPIO.setmode(GPIO.BCM)

GPIO.setup(ledPin, GPIO.OUT)


GPIO.output(ledPin, GPIO.LOW)
time.sleep(1)
GPIO.output(ledPin, GPIO.HIGH)
time.sleep(1)

sys.stderr.close()
sys.stderr = sys.__stderr__