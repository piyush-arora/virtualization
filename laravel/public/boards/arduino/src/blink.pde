import RPi.GPIO as GPIO
import time


ledPin = 23

GPIO.setmode(GPIO.BCM)

GPIO.setup(ledPin, GPIO.OUT)


GPIO.output(ledPin, GPIO.LOW)
time.sleep(1)
GPIO.output(ledPin, GPIO.HIGH)
time.sleep(1)
